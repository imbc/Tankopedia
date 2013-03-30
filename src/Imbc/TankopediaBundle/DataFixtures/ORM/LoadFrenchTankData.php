<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Tank;

class LoadFrenchTankData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 7;
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
        $nationality = $this->getReference( 'fr' );

        /**
         * light tanks
         */
        $lt1 = new Tank( 'RenaultFT', $light, $tier1, $nationality, FALSE, FALSE );
        $manager->persist( $lt1 );

        $lt2 = new Tank( 'D1', $light, $tier2, $nationality, FALSE, FALSE );
        $manager->persist( $lt2 );

        $lt3 = new Tank( 'Hotchkiss H35', $light, $tier2, $nationality, FALSE, FALSE );
        $manager->persist( $lt3 );

        $lt4 = new Tank( 'AMX 38', $light, $tier3, $nationality, FALSE, FALSE );
        $manager->persist( $lt4 );

        $lt5 = new Tank( 'AMX 40', $light, $tier4, $nationality, FALSE, FALSE );
        $manager->persist( $lt5 );

        $lt6 = new Tank( 'ELC AMX', $light, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $lt6 );

        $lt7 = new Tank( 'AMX 12t', $light, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $lt7 );

        $lt8 = new Tank( 'AMX 13 75', $light, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $lt8 );

        $lt9 = new Tank( 'AMX 13 90', $light, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $lt9 );

        /**
         * medium tanks
         */
        $mt1 = new Tank( 'D2', $medium, $tier3, $nationality, FALSE, FALSE );
        $manager->persist( $mt1 );

        $mt2 = new Tank( 'Lorraine 40 t', $medium, $tier9, $nationality, FALSE, FALSE );
        $manager->persist( $mt2 );

        $mt3 = new Tank( 'Bat Chatillon 25 t', $medium, $tier10, $nationality, FALSE, FALSE );
        $manager->persist( $mt3 );

        /**
         * heavy tanks
         */
        $ht1 = new Tank( 'B1', $heavy, $tier4, $nationality, FALSE, FALSE );
        $manager->persist( $ht1 );

        $ht2 = new Tank( 'BDR G1B', $heavy, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $ht2 );

        $ht3 = new Tank( 'ARL 44', $heavy, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $ht3 );

        $ht4 = new Tank( 'AMX M4(1945)', $heavy, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $ht4 );

        $ht5 = new Tank( 'AMX 50 100', $heavy, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $ht5 );

        $ht6 = new Tank( 'FCM 50 t', $heavy, $tier8, $nationality, TRUE, FALSE );
        $manager->persist( $ht6 );

        $ht7 = new Tank( 'AMX 50 120', $heavy, $tier9, $nationality, FALSE, FALSE );
        $manager->persist( $ht7 );

        $ht8 = new Tank( 'AMX 50B', $heavy, $tier10, $nationality, FALSE, FALSE );
        $manager->persist( $ht8 );

        /**
         * tank destroyers
         */
        $td1 = new Tank( 'RenaultFT AC', $td, $tier2, $nationality, FALSE, FALSE );
        $manager->persist( $td1 );

        $td2 = new Tank( 'FCM36 PaK40', $td, $tier3, $nationality, TRUE, FALSE );
        $manager->persist( $td2 );

        $td3 = new Tank( 'Renault UE 57', $td, $tier3, $nationality, FALSE, FALSE );
        $manager->persist( $td3 );

        $td4 = new Tank( 'Somua SAu-40', $td, $tier4, $nationality, FALSE, FALSE );
        $manager->persist( $td4 );

        $td5 = new Tank( 'S-35 CA', $td, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $td5 );

        $td6 = new Tank( 'ARL V39', $td, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $td6 );

        $td7 = new Tank( 'AMX AC Mle. 1946', $td, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $td7 );

        $td8 = new Tank( 'AMX AC Mle. 1948', $td, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $td8 );

        $td9 = new Tank( 'AMX 50 Foch', $td, $tier9, $nationality, FALSE, FALSE );
        $manager->persist( $td9 );

        $td10 = new Tank( 'AMX-50 Foch (155)', $td, $tier10, $nationality, FALSE, FALSE );
        $manager->persist( $td10 );

        /**
         * artillery
         */
        $spg1 = new Tank( 'RenaultBS', $spg, $tier2, $nationality, FALSE, FALSE );
        $manager->persist( $spg1 );

        $spg2 = new Tank( 'Lorraine39 L AM', $spg, $tier3, $nationality, FALSE, FALSE );
        $manager->persist( $spg2 );

        $spg3 = new Tank( '105 leFH18B2', $spg, $tier4, $nationality, TRUE, FALSE );
        $manager->persist( $spg3 );

        $spg4 = new Tank( 'AMX 105AM', $spg, $tier4, $nationality, FALSE, FALSE );
        $manager->persist( $spg4 );

        $spg5 = new Tank( 'AMX 13 F3 AM', $spg, $tier5, $nationality, FALSE, FALSE );
        $manager->persist( $spg5 );

        $spg6 = new Tank( 'Lorraine155 50', $spg, $tier6, $nationality, FALSE, FALSE );
        $manager->persist( $spg6 );

        $spg7 = new Tank( 'Lorraine155 51', $spg, $tier7, $nationality, FALSE, FALSE );
        $manager->persist( $spg7 );

        $spg8 = new Tank( 'Bat Chatillon 155', $spg, $tier8, $nationality, FALSE, FALSE );
        $manager->persist( $spg8 );

        $manager->flush();
    }
}