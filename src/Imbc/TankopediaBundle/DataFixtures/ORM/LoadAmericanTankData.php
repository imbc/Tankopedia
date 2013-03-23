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
        $american = $this->getReference( 'usa' );

        /**
         * Light Tanks
         */
        $lt1=  new Tank();
        $lt1->setName( 'T1 Cunningham' );
        $lt1->setTier( $tier1 );
        $lt1->setNationality( $american );
        $lt1->setClass( $light );
        $lt1->setPremium( FALSE );
        $lt1->setReward( FALSE );
        $lt1->setHitPoints( 105 );
        $lt1->setArmorFront( 10 );
        $lt1->setArmorSide( 10 );
        $lt1->setArmorRear( 10 );
        $manager->persist( $lt1 );

        $lt2 = new Tank();
        $lt2->setName( 'M2 Light Tank' );
        $lt2->setTier( $tier2 );
        $lt2->setNationality( $american );
        $lt2->setClass( $light );
        $lt2->setPremium( FALSE );
        $lt2->setReward( FALSE );
        $lt2->setHitPoints( 140 );
        $lt2->setArmorFront( 25 );
        $lt2->setArmorSide( 25 );
        $lt2->setArmorRear( 25 );
        $manager->persist( $lt2 );

        $lt3 = new Tank();
        $lt3->setName( 'T1E6' );
        $lt3->setTier( $tier2 );
        $lt3->setNationality( $american );
        $lt3->setClass( $light );
        $lt3->setPremium( TRUE );
        $lt3->setReward( TRUE );
        $lt3->setHitPoints( 160 );
        $lt3->setArmorFront( 15.9 );
        $lt3->setArmorSide( 6.4 );
        $lt3->setArmorRear( 6.4 );
        $manager->persist( $lt3 );

        $lt4 = new Tank();
        $lt4->setName( 'T2 Light Tank' );
        $lt4->setTier( $tier2 );
        $lt4->setNationality( $american );
        $lt4->setClass( $light );
        $lt4->setPremium( TRUE );
        $lt4->setReward( FALSE );
        $lt4->setHitPoints( 150 );
        $lt4->setArmorFront( 17 );
        $lt4->setArmorSide( 15 );
        $lt4->setArmorRear( 6 );
        $manager->persist( $lt4 );

        $lt5 = new Tank();
        $lt5->setName( 'M22 Locust' );
        $lt5->setTier( $tier3 );
        $lt5->setNationality( $american );
        $lt5->setClass( $light );
        $lt5->setPremium( TRUE );
        $lt5->setReward( FALSE );
        $lt5->setHitPoints( 250 );
        $lt5->setArmorFront( 25 );
        $lt5->setArmorSide( 13 );
        $lt5->setArmorRear( 13 );
        $manager->persist( $lt5 );

        $lt6 = new Tank();
        $lt6->setName( 'M3 Stuart' );
        $lt6->setTier( $tier3 );
        $lt6->setNationality( $american );
        $lt6->setClass( $light );
        $lt6->setPremium( FALSE );
        $lt6->setReward( FALSE );
        $lt6->setHitPoints( 220 );
        $lt6->setArmorFront( 38 );
        $lt6->setArmorSide( 25 );
        $lt6->setArmorRear( 25 );
        $manager->persist( $lt6 );

        $lt7 = new Tank();
        $lt7->setName( 'MTLS-1G14' );
        $lt7->setTier( $tier3 );
        $lt7->setNationality( $american );
        $lt7->setClass( $light );
        $lt7->setPremium( TRUE );
        $lt7->setReward( TRUE );
        $lt7->setHitPoints( 220 );
        $lt7->setArmorFront( 38.1 );
        $lt7->setArmorSide( 25.4 );
        $lt7->setArmorRear( 25.4 );
        $manager->persist( $lt7 );

        $lt8 = new Tank();
        $lt8->setName( 'M5 Stuart' );
        $lt8->setTier( $tier4 );
        $lt8->setNationality( $american );
        $lt8->setClass( $light );
        $lt8->setPremium( FALSE );
        $lt8->setReward( FALSE );
        $lt8->setHitPoints( 290 );
        $lt8->setArmorFront( 29 );
        $lt8->setArmorSide( 25 );
        $lt8->setArmorRear( 25 );
        $manager->persist( $lt8 );

        $lt9 = new Tank();
        $lt9->setName( 'M24 Chaffee' );
        $lt9->setTier( $tier5 );
        $lt9->setNationality( $american );
        $lt9->setClass( $light );
        $lt9->setPremium( FALSE );
        $lt9->setReward( FALSE );
        $lt9->setHitPoints( 530 );
        $lt9->setArmorFront( 25 );
        $lt9->setArmorSide( 25 );
        $lt9->setArmorRear( 19 );
        $manager->persist( $lt9 );

        $lt10 = new Tank();
        $lt10->setName( 'T21' );
        $lt10->setTier( $tier6 );
        $lt10->setNationality( $american );
        $lt10->setClass( $light );
        $lt10->setPremium( FALSE );
        $lt10->setReward( FALSE );
        $lt10->setHitPoints( 590 );
        $lt10->setArmorFront( 28 );
        $lt10->setArmorSide( 25 );
        $lt10->setArmorRear( 22 );
        $manager->persist( $lt10 );

        $lt11 = new Tank();
        $lt11->setName( 'T71' );
        $lt11->setTier( $tier7 );
        $lt11->setNationality( $american );
        $lt11->setClass( $light );
        $lt11->setPremium( FALSE );
        $lt11->setReward( FALSE );
        $lt11->setHitPoints( 840 );
        $lt11->setArmorFront( 25 );
        $lt11->setArmorSide( 22 );
        $lt11->setArmorRear( 19 );
        $manager->persist( $lt11 );

        /**
         * medium tanks
         */
        $mt1 = new Tank();
        $mt1->setName( 'T2 Medium Tank' );
        $mt1->setTier( $tier2 );
        $mt1->setNationality( $american );
        $mt1->setClass( $medium );
        $mt1->setPremium( FALSE );
        $mt1->setReward( FALSE );
        $mt1->setHitPoints( 155 );
        $mt1->setArmorFront( 22 );
        $mt1->setArmorSide( 22 );
        $mt1->setArmorRear( 22 );
        $manager->persist( $mt1 );

        $mt2 = new Tank();
        $mt2->setName( 'M2 Medium Tank' );
        $mt2->setTier( $tier3 );
        $mt2->setNationality( $american );
        $mt2->setClass( $medium );
        $mt2->setPremium( FALSE );
        $mt2->setReward( FALSE );
        $mt2->setHitPoints( 180 );
        $mt2->setArmorFront( 32 );
        $mt2->setArmorSide( 18 );
        $mt2->setArmorRear( 13 );
        $manager->persist( $mt2 );

        $mt3 = new Tank();
        $mt3->setName( 'M3 Lee' );
        $mt3->setTier( $tier4 );
        $mt3->setNationality( $american );
        $mt3->setClass( $medium );
        $mt3->setPremium( FALSE );
        $mt3->setReward( FALSE );
        $mt3->setHitPoints( 310 );
        $mt3->setArmorFront( 51 );
        $mt3->setArmorSide( 38 );
        $mt3->setArmorRear( 38 );
        $manager->persist( $mt3 );

        $mt4 = new Tank();
        $mt4->setName( 'M4 Sherman' );
        $mt4->setTier( $tier5 );
        $mt4->setNationality( $american );
        $mt4->setClass( $medium );
        $mt4->setPremium( FALSE );
        $mt4->setReward( FALSE );
        $mt4->setHitPoints( 400 );
        $mt4->setArmorFront( 51 );
        $mt4->setArmorSide( 38 );
        $mt4->setArmorRear( 38 );
        $manager->persist( $mt4 );

        $mt5 = new Tank();
        $mt5->setName( 'M4A2E4' );
        $mt5->setTier( $tier5 );
        $mt5->setNationality( $american );
        $mt5->setClass( $medium );
        $mt5->setPremium( TRUE );
        $mt5->setReward( TRUE );
        $mt5->setHitPoints( 480 );
        $mt5->setArmorFront( 64 );
        $mt5->setArmorSide( 38 );
        $mt5->setArmorRear( 38 );
        $manager->persist( $mt5 );

        $mt6 = new Tank();
        $mt6->setName( 'M7' );
        $mt6->setTier( $tier5 );
        $mt6->setNationality( $american );
        $mt6->setClass( $medium );
        $mt6->setPremium( FALSE );
        $mt6->setReward( FALSE );
        $mt6->setHitPoints( 400 );
        $mt6->setArmorFront( 38 );
        $mt6->setArmorSide( 32 );
        $mt6->setArmorRear( 25 );
        $manager->persist( $mt6 );

        $mt7 = new Tank();
        $mt7->setName( 'Ram-II' );
        $mt7->setTier( $tier5 );
        $mt7->setNationality( $american );
        $mt7->setClass( $medium );
        $mt7->setPremium( TRUE );
        $mt7->setReward( FALSE );
        $mt7->setHitPoints( 610 );
        $mt7->setArmorFront( 76.2 );
        $mt7->setArmorSide( 63 );
        $mt7->setArmorRear( 38 );
        $manager->persist( $mt7 );

        $mt8 = new Tank();
        $mt8->setName( 'M4A3E2 Sherman Jumbo' );
        $mt8->setTier( $tier6 );
        $mt8->setNationality( $american );
        $mt8->setClass( $medium );
        $mt8->setPremium( FALSE );
        $mt8->setReward( FALSE );
        $mt8->setHitPoints( 730 );
        $mt8->setArmorFront( 101.6 );
        $mt8->setArmorSide( 76.2 );
        $mt8->setArmorRear( 38.1 );
        $manager->persist( $mt8 );

        $mt9 = new Tank();
        $mt9->setName( 'M4A3E8 Sherman' );
        $mt9->setTier( $tier6 );
        $mt9->setNationality( $american );
        $mt9->setClass( $medium );
        $mt9->setPremium( FALSE );
        $mt9->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $mt9 );

        $mt10 = new Tank();
        $mt10->setName( 'T20' );
        $mt10->setTier( $tier7 );
        $mt10->setNationality( $american );
        $mt10->setClass( $medium );
        $mt10->setPremium( FALSE );
        $mt10->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $mt10 );

        $mt11 = new Tank();
        $mt11->setName( 'M26 Pershing' );
        $mt11->setTier( $tier8 );
        $mt11->setNationality( $american );
        $mt11->setClass( $medium );
        $mt11->setPremium( FALSE );
        $mt11->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $mt11 );

        $mt12 = new Tank();
        $mt12->setName( 'T23' );
        $mt12->setTier( $tier8 );
        $mt12->setNationality( $american );
        $mt12->setClass( $medium );
        $mt12->setPremium( TRUE );
        $mt12->setReward( TRUE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $mt12 );

        $mt13 = new Tank();
        $mt13->setName( 'T26E4 Super Pershing' );
        $mt13->setTier( $tier8 );
        $mt13->setNationality( $american );
        $mt13->setClass( $medium );
        $mt13->setPremium( TRUE );
        $mt13->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $mt13 );

        $mt14 = new Tank();
        $mt14->setName( 'T69' );
        $mt14->setTier( $tier8 );
        $mt14->setNationality( $american );
        $mt14->setClass( $medium );
        $mt14->setPremium( FALSE );
        $mt14->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $mt14 );

        $mt15 = new Tank();
        $mt15->setName( 'M46 Patton' );
        $mt15->setTier( $tier9 );
        $mt15->setNationality( $american );
        $mt15->setClass( $medium );
        $mt15->setPremium( FALSE );
        $mt15->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $mt15 );

        $mt16 = new Tank();
        $mt16->setName( 'T54E1' );
        $mt16->setTier( $tier9 );
        $mt16->setNationality( $american );
        $mt16->setClass( $medium );
        $mt16->setPremium( FALSE );
        $mt16->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $mt16 );

        $mt17 = new Tank();
        $mt17->setName( 'M48A1' );
        $mt17->setTier( $tier10 );
        $mt17->setNationality( $american );
        $mt17->setClass( $medium );
        $mt17->setPremium( FALSE );
        $mt17->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $mt17 );

        /**
         * heavy tanks
         */
        $ht1 = new Tank();
        $ht1->setName( 'T1 Heavy Tank' );
        $ht1->setTier( $tier5 );
        $ht1->setNationality( $american );
        $ht1->setClass( $heavy );
        $ht1->setPremium( FALSE );
        $ht1->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $ht1 );

        $ht2 = new Tank();
        $ht2->setName( 'T14' );
        $ht2->setTier( $tier5 );
        $ht2->setNationality( $american );
        $ht2->setClass( $heavy );
        $ht2->setPremium( TRUE );
        $ht2->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $ht2 );

        $ht3 = new Tank();
        $ht3->setName( 'M6' );
        $ht3->setTier( $tier6 );
        $ht3->setNationality( $american );
        $ht3->setClass( $heavy );
        $ht3->setPremium( FALSE );
        $ht3->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $ht3 );

        $ht4 = new Tank();
        $ht4->setName( 'T29' );
        $ht4->setTier( $tier7 );
        $ht4->setNationality( $american );
        $ht4->setClass( $heavy );
        $ht4->setPremium( FALSE );
        $ht4->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $ht4 );

        $ht5 = new Tank();
        $ht5->setName( 'M6A2E1' );
        $ht5->setTier( $tier8 );
        $ht5->setNationality( $american );
        $ht5->setClass( $heavy );
        $ht5->setPremium( TRUE );
        $ht5->setReward( TRUE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $ht5 );

        $ht6 = new Tank();
        $ht6->setName( 'T32' );
        $ht6->setTier( $tier8 );
        $ht6->setNationality( $american );
        $ht6->setClass( $heavy );
        $ht6->setPremium( FALSE );
        $ht6->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $ht6 );

        $ht7 = new Tank();
        $ht7->setName( 'T34' );
        $ht7->setTier( $tier9 );
        $ht7->setNationality( $american );
        $ht7->setClass( $heavy );
        $ht7->setPremium( TRUE );
        $ht7->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $ht7 );

        $ht8 = new Tank();
        $ht8->setName( 'M103' );
        $ht8->setTier( $tier9 );
        $ht8->setNationality( $american );
        $ht8->setClass( $heavy );
        $ht8->setPremium( FALSE );
        $ht8->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $ht8 );

        $ht9 = new Tank();
        $ht9->setName( 'T110E5' );
        $ht9->setTier( $tier10 );
        $ht9->setNationality( $american );
        $ht9->setClass( $heavy );
        $ht9->setPremium( FALSE );
        $ht9->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $ht9 );

        $ht10 = new Tank();
        $ht10->setName( 'T57 Heavy Tank' );
        $ht10->setTier( $tier10 );
        $ht10->setNationality( $american );
        $ht10->setClass( $heavy );
        $ht10->setPremium( FALSE );
        $ht10->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $ht10 );

        /**
         * tank destroyer
         */
        $td1 = new Tank();
        $td1->setName( 'T18' );
        $td1->setTier( $tier2 );
        $td1->setNationality( $american );
        $td1->setClass( $td );
        $td1->setPremium( FALSE );
        $td1->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td1 );

        $td2 = new Tank();
        $td2->setName( 'T82' );
        $td2->setTier( $tier3 );
        $td2->setNationality( $american );
        $td2->setClass( $td );
        $td2->setPremium( FALSE );
        $td2->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td2 );

        $td3 = new Tank();
        $td3->setName( 'M8A1' );
        $td3->setTier( $tier4 );
        $td3->setNationality( $american );
        $td3->setClass( $td );
        $td3->setPremium( FALSE );
        $td3->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td3 );

        $td4 = new Tank();
        $td4->setName( 'T40' );
        $td4->setTier( $tier4 );
        $td4->setNationality( $american );
        $td4->setClass( $td );
        $td4->setPremium( FALSE );
        $td4->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td4 );

        $td5 = new Tank();
        $td5->setName( 'M10 Wolverine' );
        $td5->setTier( $tier5 );
        $td5->setNationality( $american );
        $td5->setClass( $td );
        $td5->setPremium( FALSE );
        $td5->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td5 );

        $td6 = new Tank();
        $td6->setName( 'T49' );
        $td6->setTier( $tier5 );
        $td6->setNationality( $american );
        $td6->setClass( $td );
        $td6->setPremium( FALSE );
        $td6->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td6 );

        $td7 = new Tank();
        $td7->setName( 'M18 Hellcat' );
        $td7->setTier( $tier6 );
        $td7->setNationality( $american );
        $td7->setClass( $td );
        $td7->setPremium( FALSE );
        $td7->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td7 );

        $td8 = new Tank();
        $td8->setName( 'M36 Jackson' );
        $td8->setTier( $tier6 );
        $td8->setNationality( $american );
        $td8->setClass( $td );
        $td8->setPremium( FALSE );
        $td8->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td8 );

        $td9 = new Tank();
        $td9->setName( 'T25 AT' );
        $td9->setTier( $tier7 );
        $td9->setNationality( $american );
        $td9->setClass( $td );
        $td9->setPremium( FALSE );
        $td9->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td9 );

        $td10 = new Tank();
        $td10->setName( 'T25/2' );
        $td10->setTier( $tier7 );
        $td10->setNationality( $american );
        $td10->setClass( $td );
        $td10->setPremium( FALSE );
        $td10->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td10 );

        $td11 = new Tank();
        $td11->setName( 'T28' );
        $td11->setTier( $tier8 );
        $td11->setNationality( $american );
        $td11->setClass( $td );
        $td11->setPremium( FALSE );
        $td11->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td11 );

        $td12 = new Tank();
        $td12->setName( 'T28 Prototype' );
        $td12->setTier( $tier8 );
        $td12->setNationality( $american );
        $td12->setClass( $td );
        $td12->setPremium( FALSE );
        $td12->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td12 );

        $td13 = new Tank();
        $td13->setName( 'T30' );
        $td13->setTier( $tier9 );
        $td13->setNationality( $american );
        $td13->setClass( $td );
        $td13->setPremium( FALSE );
        $td13->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td13 );

        $td14 = new Tank();
        $td14->setName( 'T95' );
        $td14->setTier( $tier9 );
        $td14->setNationality( $american );
        $td14->setClass( $td );
        $td14->setPremium( FALSE );
        $td14->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td14 );

        $td15 = new Tank();
        $td15->setName( 'T110E3' );
        $td15->setTier( $tier10 );
        $td15->setNationality( $american );
        $td15->setClass( $td );
        $td15->setPremium( FALSE );
        $td15->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td15 );

        $td16 = new Tank();
        $td16->setName( 'T110E4' );
        $td16->setTier( $tier10 );
        $td16->setNationality( $american );
        $td16->setClass( $td );
        $td16->setPremium( FALSE );
        $td16->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $td16 );

        /**
         * Artillery
         */
        $spg1 = new Tank();
        $spg1->setName( 'T57' );
        $spg1->setTier( $tier2 );
        $spg1->setNationality( $american );
        $spg1->setClass( $spg );
        $spg1->setPremium( FALSE );
        $spg1->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $spg1 );

        $spg2 = new Tank();
        $spg2->setName( 'M37' );
        $spg2->setTier( $tier3 );
        $spg2->setNationality( $american );
        $spg2->setClass( $spg );
        $spg2->setPremium( FALSE );
        $spg2->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $spg2 );

        $spg3 = new Tank();
        $spg3->setName( 'M7 Priest' );
        $spg3->setTier( $tier4 );
        $spg3->setNationality( $american );
        $spg3->setClass( $spg );
        $spg3->setPremium( FALSE );
        $spg3->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $spg3 );

        $spg4 = new Tank();
        $spg4->setName( 'M41' );
        $spg4->setTier( $tier5 );
        $spg4->setNationality( $american );
        $spg4->setClass( $spg );
        $spg4->setPremium( FALSE );
        $spg4->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $spg4 );

        $spg5 = new Tank();
        $spg5->setName( 'M12' );
        $spg5->setTier( $tier6 );
        $spg5->setNationality( $american );
        $spg5->setClass( $spg );
        $spg5->setPremium( FALSE );
        $spg5->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $spg5 );

        $spg6 = new Tank();
        $spg6->setName( 'M40/M43' );
        $spg6->setTier( $tier7 );
        $spg6->setNationality( $american );
        $spg6->setClass( $spg );
        $spg6->setPremium( FALSE );
        $spg6->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $spg6 );

        $spg7 = new Tank();
        $spg7->setName( 'T92' );
        $spg7->setTier( $tier8 );
        $spg7->setNationality( $american );
        $spg7->setClass( $spg );
        $spg7->setPremium( FALSE );
        $spg7->setReward( FALSE );
        $lt7->setHitPoints(  );
        $lt7->setArmorFront(  );
        $lt7->setArmorSide(  );
        $lt7->setArmorRear(  );
        $manager->persist( $spg7 );

        $manager->flush();

        $this->addReference( 'lt1' , $lt1 );
        $this->addReference( 'lt2' , $lt2 );
        $this->addReference( 'lt3' , $lt3 );
        $this->addReference( 'lt4' , $lt4 );
        $this->addReference( 'lt5' , $lt5 );
        $this->addReference( 'lt6' , $lt6 );
        $this->addReference( 'lt7' , $lt7 );
        $this->addReference( 'lt8' , $lt8 );
        $this->addReference( 'lt9' , $lt9 );
        $this->addReference( 'lt10' , $lt10 );
        $this->addReference( 'lt11' , $lt11 );
    }
    //put your code here
}