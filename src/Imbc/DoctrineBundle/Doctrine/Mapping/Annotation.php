<?php

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