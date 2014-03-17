<?php

namespace Imbc\DoctrineBundle\Doctrine\Listener;

//use DoctrineCommonEventSubscriber

class DiscriminatorListener implements DoctrineCommonEventSubscriber
{
    private $driver;    // Doctrines Metadata Driver
    private $map;       // Our temporary map for calculations
    private $cachedMap; // The cached map for fast lookups

    const ENTRY_ANNOTATION = 'NamespaceToTheDiscriminatorEntry';

    public function getSubscribedEvents()
    {
        // Subscribe to the correct event
        return Array( DoctrineORMEvents::loadClassMetadata );
    }

    public function __construct( DoctrineORMEntityManager $db )
    {
        $this->driver = $db->getConfiguration()->getMetadataDriverImpl();
        $this->cachedMap = Array();
    }

    private function checkFamily( $class )
    {
        $rc     = new ReflectionClass( $class );
        $parent = $rc->getParentClass()->name;

        if( $parent !== false )
        {
            // Also check all the children of our parent
            $this->checkFamily( $parent );
        }
        else
        {
            // This is the top-most parent, used in overrideMetadata
            $this->cachedMap[$class]['isParent'] = true;

            // Find all the children of this class
            $this->checkChildren( $class );
        }
    }

    private function checkChildren( $class )
    {
        foreach( $this->driver->getAllClassNames() as $name )
        {
            $cRc        = new ReflectionClass( $name );
            $cParent    = $cRc->getParentClass()->name;

            // Check if we already had this class, if its a child and if it has the annotation
            if( ! array_key_exists( $name, $this->map ) && $cParent == $class && $this->extractEntry( $name ) )
            {
                // This child might again have children...
                $this->checkChildren( $name );
            }
        }
    }

    private function overrideMetadata( DoctrineORMEventLoadClassMetadataEventArgs $event, $class )
    {
        // Set the discriminator map and value
        $event->getClassMetadata()->discriminatorMap = $this->cachedMap[$class]['map'];
        $event->getClassMetadata()->discriminatorValue = $this->cachedMap[$class]['discr'];

        // If we are the top-most parent, set subclasses!
        if( isset( $this->cachedMap[$class]['isParent'] ) && $this->cachedMap[$class]['isParent'] === true )
        {
            // Remove yourself from the map, set this as subclasses, but only the values!
            $subclasses = $this->cachedMap[$class]['map'];
            unset( $subclasses[$this->cachedMap[$class]['discr']] );
            $event->getClassMetadata()->subClasses = array_values( $subclasses );
        }
    }

    private function extractEntry( $class )
    {
        $annotations = NamespaceToAnnotation::getAnnotationForClass( $class );
        $success = false;

        if( array_key_exists( self::ENTRY_ANNOTATION, $annotations ) )
        {
            $value = $annotations[self::ENTRY_ANNOTATION]->getValue();

            if( in_array( $value, $this->map ) )
            {
                throw new Exception( "Found duplicate discriminator map entry '" . $value . "' in " . $class );
            }

            $this->map[$class] = $value;
            $success =  true;
        }

        return $success;
    }

    public function loadClassMetadata( DoctrineORMEventLoadClassMetadataEventArgs $event )
    {
        // Reset the temporary calculation map and get the classname
        $this->map  = Array();
        $class      = $event->getClassMetadata()->name;

        // Lookup whether we already calculated the map for this element
        if( array_key_exists( $class, $this->cachedMap ) )
        {
            $this->overrideMetadata( $event, $class );

            return;
        }

        // Check whether we have to process this class
        if( count( $event->getClassMetadata()->discriminatorMap ) == 0 && $this->extractEntry( $class ) )
        {
            // Now build the whole map
            $this->checkFamily( $class );
        }
        else
        {
            // Nothing to do...
            return;
        }

        // Create the lookup entries
        $dMap = array_flip( $this->map );
        foreach( $this->map as $cName => $discr )
        {
            $this->cachedMap[$cName]['map']     = $dMap;
            $this->cachedMap[$cName]['discr']   = $this->map[$cName];
        }

        // Override the data for this class
        $this->overrideMetadata( $event, $class );
        // Respond to the event, implementation given later...
    }
}