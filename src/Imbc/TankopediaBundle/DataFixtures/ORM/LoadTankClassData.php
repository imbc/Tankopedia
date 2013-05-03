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
        $light->setAbbreviation( 'lt' );
        $light->setName( 'Light Tank' );
        $manager->persist( $light );

        $medium = new TankClass();
        $medium->setAbbreviation( 'mt' );
        $medium->setName( 'Medium Tank' );
        $manager->persist( $medium );

        $heavy = new TankClass();
        $heavy->setAbbreviation( 'ht' );
        $heavy->setName( 'Heavy Tank' );
        $manager->persist( $heavy );

        $td = new TankClass();
        $td->setAbbreviation( 'td' );
        $td->setName( 'Tank Destroyer' );
        $manager->persist( $td );

        $spg = new TankClass();
        $spg->setAbbreviation( 'spg' );
        $spg->setName( 'Self-Propelled Gun' );
        $manager->persist( $spg );

        $manager->flush();

        $this->addReference( 'light', $light );
        $this->addReference( 'medium', $medium );
        $this->addReference( 'heavy', $heavy );
        $this->addReference( 'td', $td );
        $this->addReference( 'spg', $spg );
    }
}