<?php

/**
 * prolly coming from there:
 * @see http://thoughtsofthree.com/2011/04/defining-discriminator-maps-at-child-level-in-doctrine-2-0/
 */

namespace Imbc\DoctrineBundle\Doctrine\Mapping;

use Doctrine\Common\Annotations\Annotation;

class Annotation extends Annotation
{
    public static $reader;

    public static function getAnnotationsForClass( $className )
    {
        // Get the reflection class and return the annotations
        $class = new ReflectionClass( $className );

        return Annotation::$reader->getClassAnnotations( $class );
    }
}