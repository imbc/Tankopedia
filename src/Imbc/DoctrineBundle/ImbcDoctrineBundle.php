<?php

namespace Imbc\DoctrineBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use InheritableEntityEvent;

class ImbcDoctrineBundle extends Bundle
{
    public function boot()
    {
        // Initialize Doctrine, provide the options / config yourself!
        $em = DoctrineORMEntityManager::create( $connectionOptions, $config );
        $em->getEventManager()->addEventSubscriber( new NamespaceToTheDiscriminatorListener( $em ) );
//        // get the doctrine 2 entity manager
//        $em = $this->container->get('doctrine.orm.default_entity_manager');
//
//        // get the event manager
//        $evm = $em->getEventManager();
//
//        // create and then add our event!
//        $inheritableEntityEvent = new InheritableEntityEvent();
//        $evm->addEventListener( Events::loadClassMetadata, $inheritableEntityEvent );
    }
}
