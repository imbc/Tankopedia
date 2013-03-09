<?php

namespace Imbc\TankopediaBundle\DataFictures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Type;

class LoadTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 2;
    }

    public function load( ObjectManager $manager )
    {
        $light = new Type();
        $light->setName( 'Light Tank' );
        $manager->persist( $light );

        $medium = new Type();
        $medium->setName( 'Medium Tank' );
        $manager->persist( $medium );

        $heavy = new Type();
        $heavy->setName( 'Heavy Tank' );
        $manager->persist( $heavy );

        $td = new Type();
        $td->setName( 'Tank Destroyer' );
        $manager->persist( $td );

        $arty = new Type();
        $arty->setName( 'Artillery' );
        $manager->persist( $arty );

        $manager->flush();

        $this->addReference( 'light-tank', $light );
        $this->addReference( 'medium-tank', $medium );
        $this->addReference( 'heavy-tank', $heavy );
        $this->addReference( 'tank-destroyer', $td );
        $this->addReference( 'artillery', $arty );
    }
}