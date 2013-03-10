<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Nationality;

class LoadNationalityData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 3;
    }

    public function load( ObjectManager $manager )
    {
        $usa = new Nationality();
        $usa->setAbreviation( 'USA' );
        $usa->setName( 'United States' );
        $manager->persist( $usa );

        $ussr = new Nationality();
        $ussr->setAbreviation( 'USSR' );
        $ussr->setName( 'Soviet Union' );
        $manager->persist( $ussr );

        $uk = new Nationality();
        $uk->setAbreviation( 'UK' );
        $uk->setName( 'Great Britain' );
        $manager->persist( $uk );

        $fr = new Nationality();
        $fr->setAbreviation( 'FR' );
        $fr->setName( 'France' );
        $manager->persist( $fr );

        $de = new Nationality();
        $de->setAbreviation( 'DE' );
        $de->setName( 'Germany' );
        $manager->persist( $de );

        $cn = new Nationality();
        $cn->setAbreviation( 'CN' );
        $cn->setName( 'China' );
        $manager->persist( $cn );

        $manager->flush();

        $this->addReference( 'usa', $usa );
        $this->addReference( 'ussr', $ussr );
        $this->addReference( 'uk', $uk );
        $this->addReference( 'fr', $fr );
        $this->addReference( 'de', $de );
        $this->addReference( 'cn', $cn );
    }
}