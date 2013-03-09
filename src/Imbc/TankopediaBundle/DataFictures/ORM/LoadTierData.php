<?php

namespace Imbc\TankopediaBundle\DataFictures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Tier;

class LoadTierData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 1;
    }

    public function load( ObjectManager $manager )
    {
        $tier1 = new Tier();
        $tier1->setValue( 1 );
        $manager->persist( $tier1 );

        $tier2 = new Tier();
        $tier2->setValue( 2 );
        $manager->persist( $tier2 );

        $tier3 = new Tier();
        $tier3->setValue( 3 );
        $manager->persist( $tier3 );

        $tier4 = new Tier();
        $tier4->setValue( 4 );
        $manager->persist( $tier4 );

        $tier5 = new Tier();
        $tier5->setValue( 5 );
        $manager->persist( $tier5 );

        $tier6 = new Tier();
        $tier6->setValue( 6 );
        $manager->persist( $tier6 );

        $tier7 = new Tier();
        $tier7->setValue( 7 );
        $manager->persist( $tier7 );

        $tier8 = new Tier();
        $tier8->setValue( 8 );
        $manager->persist( $tier8 );

        $tier9 = new Tier();
        $tier9->setValue( 9 );
        $manager->persist( $tier9 );

        $tier10 = new Tier();
        $tier10->setValue( 10 );
        $manager->persist( $tier10 );

        $manager->flush();

        $this->addReference( 'tier-1', $tier1 );
        $this->addReference( 'tier-2', $tier2 );
        $this->addReference( 'tier-3', $tier3 );
        $this->addReference( 'tier-4', $tier4 );
        $this->addReference( 'tier-5', $tier5 );
        $this->addReference( 'tier-6', $tier6 );
        $this->addReference( 'tier-7', $tier7 );
        $this->addReference( 'tier-8', $tier8 );
        $this->addReference( 'tier-9', $tier9 );
        $this->addReference( 'tier-10', $tier10 );
    }
}