<?php
namespace Imbc\DoctrineBundle\Doctrine\Inheritance;

use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use Doctrine\Common\Annotations\AnnotationReader;

class DataInheritanceEvent
{
    const ANNOTATION_NS = 'Imbc\DoctrineBundle\Inheritance\Doctrine\Mapping\\';
    const ANNOTATION_DATA_INHERITANCE = 'DataInheritance';

    public function loadClassMetadata( LoadClassMetadataEventArgs $eventArgs )
    {
        // annotation reader gets the annotations for the class
        $reader = new AnnotationReader;
        $reader->setAutoloadAnnotations( true );
        $reader->setAnnotationNamespaceAlias( self::ANNOTATION_NS, 'ylly' );

        // the $metadata is all the mapping info for this class
        $metadata = $eventArgs->getClassMetadata();

        // the annotation reader accepts a ReflectionClass, which can be
        // obtained from the $metadata
        $class = $metadata->getReflectionClass();
        $annotations = $reader->getClassAnnotations($class);

        if( array_key_exists( self::ANNOTATION_NS.self::ANNOTATION_DATA_INHERITANCE, $annotations ))
        {
            $metadata->mapManyToOne( array(
                'targetEntity'  => $class->getName(),
                'fieldName'     => '_dataParent',
                'joinColumns'   => array(
                    array(
                        'name'  => '_data_parent_id'
                )),
                'inversedBy'    => '_dataChildren',
            ));

            $metadata->mapOneToMany( array(
                'targetEntity'  => $class->getName(),
                'fieldName'     => '_dataChildren',
                'mappedBy'      => '_dataParent',
            ));
        }
    }
}