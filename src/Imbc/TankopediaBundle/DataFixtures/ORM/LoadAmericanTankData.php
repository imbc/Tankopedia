<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Tank;

class LoadAmericanTankData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 4;
    }

    public function load( ObjectManager $manager )
    {
        // ref for tankclass
        $light = $this->getReference( 'light' );
        $medium = $this->getReference( 'medium' );
        $heavy = $this->getReference( 'heavy' );
        $td = $this->getReference( 'td' );
        $spg = $this->getReference( 'spg' );
        // ref for tier
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
        $nationality = $this->getReference( 'usa' );

        /**
         * Light Tanks
         */
        $lt1=  new Tank( 'T1 Cunningham', $light, $tier1, $nationality, FALSE, FALSE );
        $manager->persist( $lt1 );

        $lt2 = new Tank( 'M2 Light Tank', $light, $tier2, $nationality, FALSE, FALSE );
        $manager->persist( $lt2 );

        $lt3 = new Tank( 'T1E6', $light, $tier2, $nationality, TRUE, TRUE );
        $manager->persist( $lt3 );

        $lt4 = new Tank( 'T2 Light Tank', $light, $tier2, $nationality, TRUE, FALSE );
        $manager->persist( $lt4 );

        $lt5 = new Tank( 'M22 Locust', $light, $tier3, $nationality, TRUE, FALSE );
        $manager->persist( $lt5 );

        $lt6 = new Tank( 'M3 Stuart', $light, $tier3, $nationality, FALSE, FALSE );
        $manager->persist( $lt6 );

        $lt7 = new Tank( 'MTLS-1G14', $light, $tier3, $nationality, TRUE, TRUE );
        $manager->persist( $lt7 );

        $lt8 = new Tank( 'M5 Stuart', $light, $tier4, $nationality, FALSE, FALSE );
        $manager->persist( $lt8 );

        $lt9 = new Tank( 'M24 Chaffee', $light, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $lt9 );

        $lt10 = new Tank( 'T21', $light, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $lt10 );

        $lt11 = new Tank( 'T71', $light, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $lt11 );

        /**
         * medium tanks
         */
        $mt1 = new Tank( 'T2 Medium Tank', $medium, $tier2, $nationality, FALSE, FALSE );
        $manager->persist( $mt1 );

        $mt2 = new Tank( 'M2 Medium Tank', $medium, $tier3, $nationality, FALSE, FALSE );
        $manager->persist( $mt2 );

        $mt3 = new Tank( 'M3 Lee', $medium, $tier4, $nationality, FALSE, FALSE );
        $manager->persist( $mt3 );

        $mt4 = new Tank( 'M4 Sherman', $medium, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $mt4 );

        $mt5 = new Tank( 'M4A2E4', $medium, $tier5, $nationality, TRUE, TRUE );
        $manager->persist( $mt5 );

        $mt6 = new Tank( 'M7', $medium, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $mt6 );

        $mt7 = new Tank( 'Ram-II', $medium, $tier5, $nationality, TRUE, FALSE );
        $manager->persist( $mt7 );

        $mt8 = new Tank( 'M4A3E2 Sherman Jumbo', $medium, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $mt8 );

        $mt9 = new Tank( 'M4A3E8 Sherman', $medium, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $mt9 );

        $mt10 = new Tank( 'T20', $medium, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $mt10 );

        $mt11 = new Tank( 'M26 Pershing', $medium, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $mt11 );

        $mt12 = new Tank( 'T23', $medium, $tier8, $nationality, TRUE, TRUE );
        $manager->persist( $mt12 );

        $mt13 = new Tank( 'T26E4 Super Pershing', $medium, $tier8, $nationality, TRUE, FALSE );
        $manager->persist( $mt13 );

        $mt14 = new Tank( 'T69', $medium, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $mt14 );

        $mt15 = new Tank( 'M46 Patton', $medium, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $mt15 );

        $mt16 = new Tank( 'T54E1', $medium, $tier9, $nationality, FALSE, FALSE );
        $manager->persist( $mt16 );

        $mt17 = new Tank( 'M48A1', $medium, $tier10, $nationality, FALSE, FALSE );
        $manager->persist( $mt17 );

        /**
         * heavy tanks
         */
        $ht1 = new Tank( 'T1 Heavy Tank', $heavy, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $ht1 );

        $ht2 = new Tank( 'T14', $heavy, $tier5, $nationality, TRUE, FALSE );
        $manager->persist( $ht2 );

        $ht3 = new Tank( 'M6', $heavy, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $ht3 );

        $ht4 = new Tank( 'T29', $heavy, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $ht4 );

        $ht5 = new Tank( 'M6A2E1', $heavy, $tier8, $nationality, TRUE, TRUE );
        $manager->persist( $ht5 );

        $ht6 = new Tank( 'T32', $heavy, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $ht6 );

        $ht7 = new Tank( 'T34', $heavy, $tier8, $nationality, TRUE, FALSE );
        $manager->persist( $ht7 );

        $ht8 = new Tank( 'M103', $heavy, $tier9, $nationality, FALSE, FALSE );
        $manager->persist( $ht8 );

        $ht9 = new Tank( 'T110E5', $heavy, $tier9, $nationality, FALSE, FALSE );
        $manager->persist( $ht9 );

        $ht10 = new Tank( 'T57 Heavy Tank', $heavy, $tier10, $nationality, FALSE, FALSE );
        $manager->persist( $ht10 );

        /**
         * tank destroyer
         */
        $td1 = new Tank( 'T18', $td, $tier2, $nationality, FALSE, FALSE );
        $manager->persist( $td1 );

        $td2 = new Tank( 'T82', $td, $tier3, $nationality, FALSE, FALSE );
        $manager->persist( $td2 );

        $td3 = new Tank( 'M8A1', $td, $tier4, $nationality, FALSE, FALSE );
        $manager->persist( $td3 );

        $td4 = new Tank( 'T40', $td, $tier4, $nationality, FALSE, FALSE );
        $manager->persist( $td4 );

        $td5 = new Tank( 'M10 Wolverine', $td, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $td5 );

        $td6 = new Tank( 'T49', $td, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $td6 );

        $td7 = new Tank( 'M18 Hellcat', $td, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $td7 );

        $td8 = new Tank( 'M36 Jackson', $td, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $td8 );

        $td9 = new Tank( 'T25 AT', $td, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $td9 );

        $td10 = new Tank( 'T25/2', $td, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $td10 );

        $td11 = new Tank( 'T28', $td, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $td11 );

        $td12 = new Tank( 'T28 Prototype', $td, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $td12 );

        $td13 = new Tank( 'T30', $td, $tier9, $nationality, FALSE, FALSE );
        $manager->persist( $td13 );

        $td14 = new Tank( 'T95', $td, $tier9, $nationality, FALSE, FALSE );
        $manager->persist( $td14 );

        $td15 = new Tank( 'T110E3', $td, $tier10, $nationality, FALSE, FALSE );
        $td15->setReward( FALSE );
        $manager->persist( $td15 );

        $td16 = new Tank( 'T110E4', $td, $tier10, $nationality, FALSE, FALSE );
        $manager->persist( $td16 );

        /**
         * Artillery
         */
        $spg1 = new Tank( 'T57', $spg, $tier2, $nationality, FALSE, FALSE );
        $manager->persist( $spg1 );

        $spg2 = new Tank( 'M37', $spg, $tier3, $nationality, FALSE, FALSE );
        $manager->persist( $spg2 );

        $spg3 = new Tank( 'M7 Priest', $spg, $tier4, $nationality, FALSE, FALSE );
        $manager->persist( $spg3 );

        $spg4 = new Tank( 'M41', $spg, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $spg4 );

        $spg5 = new Tank( 'M12', $spg, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $spg5 );

        $spg6 = new Tank( 'M40/M43', $spg, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $spg6 );

        $spg7 = new Tank( 'T92', $spg, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $spg7 );

        $manager->flush();
    }
}