<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM\Tank;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Tank;

class LoadChineseTankData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 9;
    }

    public function load( ObjectManager $manager )
    {
        // ref for tankclass
        $light = $this->getReference( 'light' );
        $medium = $this->getReference( 'medium' );
        $heavy = $this->getReference( 'heavy' );
        //ref for tier
        $tier1 = $this->getReference( 'tier-1' );
        $tier2 = $this->getReference( 'tier-2' );
        $tier3 = $this->getReference( 'tier-3' );
        $tier4 = $this->getReference( 'tier-4' );
        $tier5 = $this->getReference( 'tier-5' );
        $tier6 = $this->getReference( 'tier-6' );
        $tier7 = $this->getReference( 'tier-7' );
        $tier8 = $this->getReference( 'tier-8' );
        $tier9 = $this->getReference( 'tier-9' );
        $tier10 = $this->getReference( 'tier-10' );
        // ref for nationality
        $nationality = $this->getReference( 'cn' );

        // light tanks
        $lt1 = new Tank( 'Renault NC-31', $light, $tier1, $nationality, FALSE, FALSE );
        $manager->persist( $lt1 );

        $lt2 = new Tank( 'Vickers Mk. E Type B', $light, $tier2, $nationality, FALSE, FALSE );
        $manager->persist( $lt2 );

        $lt3 = new Tank( 'Type 2597 Chi-Ha', $light, $tier3, $nationality, FALSE, FALSE );
        $manager->persist( $lt3 );

        $lt4 = new Tank( 'M5A1 Stuart', $light, $tier4, $nationality, FALSE, FALSE );
        $manager->persist( $lt4 );

        $lt5 = new Tank( '59-16', $light, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $lt5 );

        $lt6 = new Tank( 'Type 62', $light, $tier7, $nationality, TRUE, TRUE );
        $manager->persist( $lt6 );

        $lt7 = new Tank( 'WZ-131', $light, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $lt7 );

        $lt8 = new Tank( 'WZ-132', $light, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $lt8 );

        // medium tanks
        $mt1 = new Tank( 'Type T-34', $medium, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $mt1 );

        $mt2 = new Tank( 'Type 58', $medium, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $mt2 );

        $mt3 = new Tank( 'T-34-1', $medium, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $mt3 );

        $mt4 = new Tank( 'T-34-2', $medium, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $mt4 );

        $mt5 = new Tank( 'Type 59', $medium, $tier8, $nationality, TRUE, TRUE );
        $manager->persist( $mt5 );

        $mt6 = new Tank( 'Type 59 G', $medium, $tier8, $nationality, TRUE, TRUE );
        $manager->persist( $mt6 );

        $mt7 = new Tank( 'WZ-120', $medium, $tier9, $nationality, FALSE, FALSE );
        $manager->persist( $mt7 );

        $mt8 = new Tank( '121', $medium, $tier10, $nationality, FALSE, FALSE );
        $manager->persist( $mt8 );

        // heavy tanks
        $ht1 = new Tank( 'IS-2', $heavy, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $ht1 );

        $ht2 = new Tank( '110', $heavy, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $ht2 );

        $ht3 = new Tank( 'WZ-111', $heavy, $tier8, $nationality, TRUE, TRUE );
        $manager->persist( $ht3 );

        $ht4 = new Tank( 'WZ-111 model 1-4', $heavy, $tier9, $nationality, FALSE, FALSE );
        $manager->persist( $ht4 );

        $ht5 = new Tank( '113', $heavy, $tier10, $nationality, FALSE, FALSE );
        $manager->persist( $ht5 );

        $manager->flush();
    }
}