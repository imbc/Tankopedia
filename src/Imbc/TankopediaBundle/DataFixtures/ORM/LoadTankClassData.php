<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\TankClass;

class LoadTankClassData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 2;
    }

    public function load( ObjectManager $manager )
    {
        $light = new TankClass();
        $light->setName( 'Light Tank' );
        $manager->persist( $light );

        $medium = new TankClass();
        $medium->setName( 'Medium Tank' );
        $manager->persist( $medium );

        $heavy = new TankClass();
        $heavy->setName( 'Heavy Tank' );
        $manager->persist( $heavy );

        $td = new TankClass();
        $td->setName( 'Tank Destroyer' );
        $manager->persist( $td );

        $arty = new TankClass();
        $arty->setName( 'Self-Propelled Gun' );
        $manager->persist( $arty );

        $manager->flush();

        $this->addReference( 'light-tank', $light );
        $this->addReference( 'medium-tank', $medium );
        $this->addReference( 'heavy-tank', $heavy );
        $this->addReference( 'tank-destroyer', $td );
        $this->addReference( 'artillery', $arty );
    }
}