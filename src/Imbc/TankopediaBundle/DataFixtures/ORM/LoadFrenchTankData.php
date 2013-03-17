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
        $lt1 = new Tank();
        $lt1->setName( 'RenaultFT' );
        $lt1->setTier( $tier1 );
        $lt1->setNationality( $nationality );
        $lt1->setClass( $light );
        $lt1->setPremium( FALSE );
        $lt1->setReward( FALSE );
        $manager->persist( $lt1 );

        $lt2 = new Tank();
        $lt2->setName( 'D1' );
        $lt2->setTier( $tier2 );
        $lt2->setNationality( $nationality );
        $lt2->setClass( $light );
        $lt2->setPremium( FALSE );
        $lt2->setReward( FALSE );
        $manager->persist( $lt2 );

        $lt3 = new Tank();
        $lt3->setName( 'Hotchkiss H35' );
        $lt3->setTier( $tier2 );
        $lt3->setNationality( $nationality );
        $lt3->setClass( $light );
        $lt3->setPremium( FALSE );
        $lt3->setReward( FALSE );
        $manager->persist( $lt3 );

        $lt4 = new Tank();
        $lt4->setName( 'AMX 38' );
        $lt4->setTier( $tier3 );
        $lt4->setNationality( $nationality );
        $lt4->setClass( $light );
        $lt4->setPremium( FALSE );
        $lt4->setReward( FALSE );
        $manager->persist( $lt4 );

        $lt5 = new Tank();
        $lt5->setName( 'AMX 40' );
        $lt5->setTier( $tier4 );
        $lt5->setNationality( $nationality );
        $lt5->setClass( $light );
        $lt5->setPremium( FALSE );
        $lt5->setReward( FALSE );
        $manager->persist( $lt5 );

        $lt6 = new Tank();
        $lt6->setName( 'ELC AMX' );
        $lt6->setTier( $tier5 );
        $lt6->setNationality( $nationality );
        $lt6->setClass( $light );
        $lt6->setPremium( FALSE );
        $lt6->setReward( FALSE );
        $manager->persist( $lt6 );

        $lt7 = new Tank();
        $lt7->setName( 'AMX 12t' );
        $lt7->setTier( $tier6 );
        $lt7->setNationality( $nationality );
        $lt7->setClass( $light );
        $lt7->setPremium( FALSE );
        $lt7->setReward( FALSE );
        $manager->persist( $lt7 );

        $lt8 = new Tank();
        $lt8->setName( 'AMX 13 75' );
        $lt8->setTier( $tier7 );
        $lt8->setNationality( $nationality );
        $lt8->setClass( $light );
        $lt8->setPremium( FALSE );
        $lt8->setReward( FALSE );
        $manager->persist( $lt8 );

        $lt9 = new Tank();
        $lt9->setName( 'AMX 13 90' );
        $lt9->setTier( $tier8 );
        $lt9->setNationality( $nationality );
        $lt9->setClass( $light );
        $lt9->setPremium( FALSE );
        $lt9->setReward( FALSE );
        $manager->persist( $lt9 );

        /**
         * medium tanks
         */
        $mt1 = new Tank();
        $mt1->setName( 'D2' );
        $mt1->setTier( $tier3 );
        $mt1->setNationality( $nationality );
        $mt1->setClass( $medium );
        $mt1->setPremium( FALSE );
        $mt1->setReward( FALSE );
        $manager->persist( $mt1 );

        $mt2 = new Tank();
        $mt2->setName( 'Lorraine 40 t' );
        $mt2->setTier( $tier9 );
        $mt2->setNationality( $nationality );
        $mt2->setClass( $medium );
        $mt2->setPremium( FALSE );
        $mt2->setReward( FALSE );
        $manager->persist( $mt2 );

        $mt3 = new Tank();
        $mt3->setName( 'Bat Chatillon 25 t' );
        $mt3->setTier( $tier10 );
        $mt3->setNationality( $nationality );
        $mt3->setClass( $medium );
        $mt3->setPremium( FALSE );
        $mt3->setReward( FALSE );
        $manager->persist( $mt3 );

        /**
         * heavy tanks
         */
        $ht1 = new Tank();
        $ht1->setName( 'B1' );
        $ht1->setTier( $tier4 );
        $ht1->setNationality( $nationality );
        $ht1->setClass( $heavy );
        $ht1->setPremium( FALSE );
        $ht1->setReward( FALSE );
        $manager->persist( $ht1 );

        $ht2 = new Tank();
        $ht2->setName( 'BDR G1B' );
        $ht2->setTier( $tier5 );
        $ht2->setNationality( $nationality );
        $ht2->setClass( $heavy );
        $ht2->setPremium( FALSE );
        $ht2->setReward( FALSE );
        $manager->persist( $ht2 );

        $ht3 = new Tank();
        $ht3->setName( 'ARL 44' );
        $ht3->setTier( $tier6 );
        $ht3->setNationality( $nationality );
        $ht3->setClass( $heavy );
        $ht3->setPremium( FALSE );
        $ht3->setReward( FALSE );
        $manager->persist( $ht3 );

        $ht4 = new Tank();
        $ht4->setName( 'AMX M4(1945)' );
        $ht4->setTier( $tier7 );
        $ht4->setNationality( $nationality );
        $ht4->setClass( $heavy );
        $ht4->setPremium( FALSE );
        $ht4->setReward( FALSE );
        $manager->persist( $ht4 );

        $ht5 = new Tank();
        $ht5->setName( 'AMX 50 100' );
        $ht5->setTier( $tier8 );
        $ht5->setNationality( $nationality );
        $ht5->setClass( $heavy );
        $ht5->setPremium( FALSE );
        $ht5->setReward( FALSE );
        $manager->persist( $ht5 );

        $ht6 = new Tank();
        $ht6->setName( 'FCM 50 t' );
        $ht6->setTier( $tier8 );
        $ht6->setNationality( $nationality );
        $ht6->setClass( $heavy );
        $ht6->setPremium( TRUE );
        $ht6->setReward( FALSE );
        $manager->persist( $ht6 );

        $ht7 = new Tank();
        $ht7->setName( 'AMX 50 120' );
        $ht7->setTier( $tier9 );
        $ht7->setNationality( $nationality );
        $ht7->setClass( $heavy );
        $ht7->setPremium( FALSE );
        $ht7->setReward( FALSE );
        $manager->persist( $ht7 );

        $ht8 = new Tank();
        $ht8->setName( 'AMX 50B' );
        $ht8->setTier( $tier10 );
        $ht8->setNationality( $nationality );
        $ht8->setClass( $heavy );
        $ht8->setPremium( FALSE );
        $ht8->setReward( FALSE );
        $manager->persist( $ht8 );

        /**
         * tank destroyers
         */
        $td1 = new Tank();
        $td1->setName( 'RenaultFT AC' );
        $td1->setTier( $tier2 );
        $td1->setNationality( $nationality );
        $td1->setClass( $td );
        $td1->setPremium( FALSE );
        $td1->setReward( FALSE );
        $manager->persist( $td1 );

        $td2 = new Tank();
        $td2->setName( 'FCM36 PaK40' );
        $td2->setTier( $tier3 );
        $td2->setNationality( $nationality );
        $td2->setClass( $td );
        $td2->setPremium( TRUE );
        $td2->setReward( FALSE );
        $manager->persist( $td2 );

        $td3 = new Tank();
        $td3->setName( 'Renault UE 57' );
        $td3->setTier( $tier3 );
        $td3->setNationality( $nationality );
        $td3->setClass( $td );
        $td3->setPremium( FALSE );
        $td3->setReward( FALSE );
        $manager->persist( $td3 );

        $td4 = new Tank();
        $td4->setName( 'Somua SAu-40' );
        $td4->setTier( $tier4 );
        $td4->setNationality( $nationality );
        $td4->setClass( $td );
        $td4->setPremium( FALSE );
        $td4->setReward( FALSE );
        $manager->persist( $td4 );

        $td5 = new Tank();
        $td5->setName( 'S-35 CA' );
        $td5->setTier( $tier5 );
        $td5->setNationality( $nationality );
        $td5->setClass( $td );
        $td5->setPremium( FALSE );
        $td5->setReward( FALSE );
        $manager->persist( $td5 );

        $td6 = new Tank();
        $td6->setName( 'ARL V39' );
        $td6->setTier( $tier6 );
        $td6->setNationality( $nationality );
        $td6->setClass( $td );
        $td6->setPremium( FALSE );
        $td6->setReward( FALSE );
        $manager->persist( $td6 );

        $td7 = new Tank();
        $td7->setName( 'AMX AC Mle. 1946' );
        $td7->setTier( $tier7 );
        $td7->setNationality( $nationality );
        $td7->setClass( $td );
        $td7->setPremium( FALSE );
        $td7->setReward( FALSE );
        $manager->persist( $td7 );

        $td8 = new Tank();
        $td8->setName( 'AMX AC Mle. 1948' );
        $td8->setTier( $tier8 );
        $td8->setNationality( $nationality );
        $td8->setClass( $td );
        $td8->setPremium( FALSE );
        $td8->setReward( FALSE );
        $manager->persist( $td8 );

        $td9 = new Tank();
        $td9->setName( 'AMX 50 Foch' );
        $td9->setTier( $tier9 );
        $td9->setNationality( $nationality );
        $td9->setClass( $td );
        $td9->setPremium( FALSE );
        $td9->setReward( FALSE );
        $manager->persist( $td9 );

        $td10 = new Tank();
        $td10->setName( 'AMX-50 Foch (155)' );
        $td10->setTier( $tier10 );
        $td10->setNationality( $nationality );
        $td10->setClass( $td );
        $td10->setPremium( FALSE );
        $td10->setReward( FALSE );
        $manager->persist( $td10 );

        /**
         * artillery
         */
        $spg1 = new Tank();
        $spg1->setName( 'RenaultBS' );
        $spg1->setTier( $tier2 );
        $spg1->setNationality( $nationality );
        $spg1->setClass( $spg );
        $spg1->setPremium( FALSE );
        $spg1->setReward( FALSE );
        $manager->persist( $spg1 );

        $spg2 = new Tank();
        $spg2->setName( 'Lorraine39 L AM' );
        $spg2->setTier( $tier3 );
        $spg2->setNationality( $nationality );
        $spg2->setClass( $spg );
        $spg2->setPremium( FALSE );
        $spg2->setReward( FALSE );
        $manager->persist( $spg2 );

        $spg3 = new Tank();
        $spg3->setName( '105 leFH18B2' );
        $spg3->setTier( $tier4 );
        $spg3->setNationality( $nationality );
        $spg3->setClass( $spg );
        $spg3->setPremium( TRUE );
        $spg3->setReward( FALSE );
        $manager->persist( $spg3 );

        $spg4 = new Tank();
        $spg4->setName( 'AMX 105AM' );
        $spg4->setTier( $tier4 );
        $spg4->setNationality( $nationality );
        $spg4->setClass( $spg );
        $spg4->setPremium( FALSE );
        $spg4->setReward( FALSE );
        $manager->persist( $spg4 );

        $spg5 = new Tank();
        $spg5->setName( 'AMX 13 F3 AM' );
        $spg5->setTier( $tier5 );
        $spg5->setNationality( $nationality );
        $spg5->setClass( $spg );
        $spg5->setPremium( FALSE );
        $spg5->setReward( FALSE );
        $manager->persist( $spg5 );

        $spg6 = new Tank();
        $spg6->setName( 'Lorraine155 50' );
        $spg6->setTier( $tier6 );
        $spg6->setNationality( $nationality );
        $spg6->setClass( $spg );
        $spg6->setPremium( FALSE );
        $spg6->setReward( FALSE );
        $manager->persist( $spg6 );

        $spg7 = new Tank();
        $spg7->setName( 'Lorraine155 51' );
        $spg7->setTier( $tier7 );
        $spg7->setNationality( $nationality );
        $spg7->setClass( $spg );
        $spg7->setPremium( FALSE );
        $spg7->setReward( FALSE );
        $manager->persist( $spg7 );

        $spg1 = new Tank();
        $spg1->setName( 'Bat Chatillon 155' );
        $spg1->setTier( $tier8 );
        $spg1->setNationality( $nationality );
        $spg1->setClass( $spg );
        $spg1->setPremium( FALSE );
        $spg1->setReward( FALSE );
        $manager->persist( $spg1 );

        $manager->flush();
    }
}