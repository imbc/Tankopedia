<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Tank;

class LoadRussianTankData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 5;
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
        $russia = $this->getReference( 'ussr' );

        /**
         * light tanks
         */
        $lt1 = new Tank();
        $lt1->setName( 'MS-1' );
        $lt1->setTier( $tier1 );
        $lt1->setNationality( $russia );
        $lt1->setClass( $light );
        $lt1->setPremium( FALSE );
        $lt1->setReward( FALSE );
        $manager->persist( $lt1 );

        $lt2 = new Tank();
        $lt2->setName( 'BT-2' );
        $lt2->setTier( $tier2 );
        $lt2->setNationality( $russia );
        $lt2->setClass( $light );
        $lt2->setPremium( FALSE );
        $lt2->setReward( FALSE );
        $manager->persist( $lt2 );

        $lt3 = new Tank();
        $lt3->setName( 'Tetrarch' );
        $lt3->setTier( $tier2 );
        $lt3->setNationality( $russia );
        $lt3->setClass( $light );
        $lt3->setPremium( TRUE );
        $lt3->setReward( TRUE );
        $manager->persist( $lt3 );

        $lt4 = new Tank();
        $lt4->setName( 'T-26' );
        $lt4->setTier( $tier2 );
        $lt4->setNationality( $russia );
        $lt4->setClass( $light );
        $lt4->setPremium( FALSE );
        $lt4->setReward( FALSE );
        $manager->persist( $lt4 );

        $lt5 = new Tank();
        $lt5->setName( 'BT-7' );
        $lt5->setTier( $tier3 );
        $lt5->setNationality( $russia );
        $lt5->setClass( $light );
        $lt5->setPremium( FALSE );
        $lt5->setReward( FALSE );
        $manager->persist( $lt5 );

        $lt6 = new Tank();
        $lt6->setName( 'BT-SV' );
        $lt6->setTier( $tier3 );
        $lt6->setNationality( $russia );
        $lt6->setClass( $light );
        $lt6->setPremium( TRUE );
        $lt6->setReward( TRUE );
        $manager->persist( $lt6 );

        $lt7 = new Tank();
        $lt7->setName( 'M3 Stuart Lend Lease' );
        $lt7->setTier( $tier3 );
        $lt7->setNationality( $russia );
        $lt7->setClass( $light );
        $lt7->setPremium( TRUE );
        $lt7->setReward( TRUE );
        $manager->persist( $lt7 );

        $lt8 = new Tank();
        $lt8->setName( 'T-127' );
        $lt8->setTier( $tier3 );
        $lt8->setNationality( $russia );
        $lt8->setClass( $light );
        $lt8->setPremium( TRUE );
        $lt8->setReward( FALSE );
        $manager->persist( $lt8 );

        $lt9 = new Tank();
        $lt9->setName( 'T-46' );
        $lt9->setTier( $tier3 );
        $lt9->setNationality( $russia );
        $lt9->setClass( $light );
        $lt9->setPremium( FALSE );
        $lt9->setReward( FALSE );
        $manager->persist( $lt9 );

        $lt10 = new Tank();
        $lt10->setName( 'A-20' );
        $lt10->setTier( $tier4 );
        $lt10->setNationality( $russia );
        $lt10->setClass( $light );
        $lt10->setPremium( FALSE );
        $lt10->setReward( FALSE );
        $manager->persist( $lt10 );

        $lt11 = new Tank();
        $lt11->setName( 'T-50' );
        $lt11->setTier( $tier4 );
        $lt11->setNationality( $russia );
        $lt11->setClass( $light );
        $lt11->setPremium( FALSE );
        $lt11->setReward( FALSE );
        $manager->persist( $lt11 );

        $lt12 = new Tank();
        $lt12->setName( 'Valentine II' );
        $lt12->setTier( $tier4 );
        $lt12->setNationality( $russia );
        $lt12->setClass( $light );
        $lt12->setPremium( TRUE );
        $lt12->setReward( FALSE );
        $manager->persist( $lt12 );

        $lt13 = new Tank();
        $lt13->setName( 'T-50-2' );
        $lt13->setTier( $tier5 );
        $lt13->setNationality( $russia );
        $lt13->setClass( $light );
        $lt13->setPremium( FALSE );
        $lt13->setReward( FALSE );
        $manager->persist( $lt13 );

        /**
         * medium tanks
         */
        $mt1 = new Tank();
        $mt1->setName( 'A-32' );
        $mt1->setTier( $tier4 );
        $mt1->setNationality( $russia );
        $mt1->setClass( $medium );
        $mt1->setPremium( TRUE );
        $mt1->setReward( TRUE );
        $manager->persist( $mt1 );

        $mt2 = new Tank();
        $mt2->setName( 'T-28' );
        $mt2->setTier( $tier4 );
        $mt2->setNationality( $russia );
        $mt2->setClass( $medium );
        $mt2->setPremium( FALSE );
        $mt2->setReward( FALSE );
        $manager->persist( $mt2 );

        $mt3 = new Tank();
        $mt3->setName( 'Matilda IV' );
        $mt3->setTier( $tier5 );
        $mt3->setNationality( $russia );
        $mt3->setClass( $medium );
        $mt3->setPremium( TRUE );
        $mt3->setReward( FALSE );
        $manager->persist( $mt3 );

        $mt4 = new Tank();
        $mt4->setName( 'T-34' );
        $mt4->setTier( $tier5 );
        $mt4->setNationality( $russia );
        $mt4->setClass( $medium );
        $mt4->setPremium( FALSE );
        $mt4->setReward( FALSE );
        $manager->persist( $mt4 );

        $mt5 = new Tank();
        $mt5->setName( 'T-34-85' );
        $mt5->setTier( $tier6 );
        $mt5->setNationality( $russia );
        $mt5->setClass( $medium );
        $mt5->setPremium( FALSE );
        $mt5->setReward( FALSE );
        $manager->persist( $mt5 );

        $mt6 = new Tank();
        $mt6->setName( 'KV-13' );
        $mt6->setTier( $tier7 );
        $mt6->setNationality( $russia );
        $mt6->setClass( $medium );
        $mt6->setPremium( FALSE );
        $mt6->setReward( FALSE );
        $manager->persist( $mt6 );

        $mt7 = new Tank();
        $mt7->setName( 'T-43' );
        $mt7->setTier( $tier7 );
        $mt7->setNationality( $russia );
        $mt7->setClass( $medium );
        $mt7->setPremium( FALSE );
        $mt7->setReward( FALSE );
        $manager->persist( $mt7 );

        $mt8 = new Tank();
        $mt8->setName( 'T-44' );
        $mt8->setTier( $tier8 );
        $mt8->setNationality( $russia );
        $mt8->setClass( $medium );
        $mt8->setPremium( FALSE );
        $mt8->setReward( FALSE );
        $manager->persist( $mt8 );

        $mt9 = new Tank();
        $mt9->setName( 'T-54' );
        $mt9->setTier( $tier9 );
        $mt9->setNationality( $russia );
        $mt9->setClass( $medium );
        $mt9->setPremium( FALSE );
        $mt9->setReward( FALSE );
        $manager->persist( $mt9 );

        $mt10 = new Tank();
        $mt10->setName( 'T-62A' );
        $mt10->setTier( $tier10 );
        $mt10->setNationality( $russia );
        $mt10->setClass( $medium );
        $mt10->setPremium( FALSE );
        $mt10->setReward( FALSE );
        $manager->persist( $mt10 );

        /**
         * heavy tanks
         */
        $ht1 = new Tank();
        $ht1->setName( 'Churchill III' );
        $ht1->setTier( $tier5 );
        $ht1->setNationality( $russia );
        $ht1->setClass( $heavy );
        $ht1->setPremium( TRUE );
        $ht1->setReward( FALSE );
        $manager->persist( $ht1 );

        $ht2 = new Tank();
        $ht2->setName( 'KV' );
        $ht2->setTier( $tier5 );
        $ht2->setNationality( $russia );
        $ht2->setClass( $heavy );
        $ht2->setPremium( TRUE );
        $ht2->setReward( TRUE );
        $manager->persist( $ht2 );

        $ht3 = new Tank();
        $ht3->setName( 'KV-1' );
        $ht3->setTier( $tier5 );
        $ht3->setNationality( $russia );
        $ht3->setClass( $heavy );
        $ht3->setPremium( FALSE );
        $ht3->setReward( FALSE );
        $manager->persist( $ht3 );

        $ht4 = new Tank();
        $ht4->setName( 'KV-220' );
        $ht4->setTier( $tier5 );
        $ht4->setNationality( $russia );
        $ht4->setClass( $heavy );
        $ht4->setPremium( TRUE );
        $ht4->setReward( TRUE );
        $manager->persist( $ht4 );

        $ht5 = new Tank();
        $ht5->setName( 'KV-220 Beta-Test' );
        $ht5->setTier( $tier5 );
        $ht5->setNationality( $russia );
        $ht5->setClass( $heavy );
        $ht5->setPremium( TRUE );
        $ht5->setReward( TRUE );
        $manager->persist( $ht5 );

        $ht6 = new Tank();
        $ht6->setName( 'KV-1S' );
        $ht6->setTier( $tier6 );
        $ht6->setNationality( $russia );
        $ht6->setClass( $heavy );
        $ht6->setPremium( FALSE );
        $ht6->setReward( FALSE );
        $manager->persist( $ht6 );

        $ht7 = new Tank();
        $ht7->setName( 'KV-2' );
        $ht7->setTier( $tier6 );
        $ht7->setNationality( $russia );
        $ht7->setClass( $heavy );
        $ht7->setPremium( FALSE );
        $ht7->setReward( FALSE );
        $manager->persist( $ht7 );

        $ht8 = new Tank();
        $ht8->setName( 'T-150' );
        $ht8->setTier( $tier6 );
        $ht8->setNationality( $russia );
        $ht8->setClass( $heavy );
        $ht8->setPremium( FALSE );
        $ht8->setReward( FALSE );
        $manager->persist( $ht8 );

        $ht9 = new Tank();
        $ht9->setName( 'IS' );
        $ht9->setTier( $tier7 );
        $ht9->setNationality( $russia );
        $ht9->setClass( $heavy );
        $ht9->setPremium( FALSE );
        $ht9->setReward( FALSE );
        $manager->persist( $ht9 );

        $ht10 = new Tank();
        $ht10->setName( 'KV-3' );
        $ht10->setTier( $tier7 );
        $ht10->setNationality( $russia );
        $ht10->setClass( $heavy );
        $ht10->setPremium( FALSE );
        $ht10->setReward( FALSE );
        $manager->persist( $ht10 );

        $ht11 = new Tank();
        $ht11->setName( 'IS-3' );
        $ht11->setTier( $tier8 );
        $ht11->setNationality( $russia );
        $ht11->setClass( $heavy );
        $ht11->setPremium( FALSE );
        $ht11->setReward( FALSE );
        $manager->persist( $ht11 );

        $ht12 = new Tank();
        $ht12->setName( 'IS-6' );
        $ht12->setTier( $tier8 );
        $ht12->setNationality( $russia );
        $ht12->setClass( $heavy );
        $ht12->setPremium( TRUE );
        $ht12->setReward( FALSE );
        $manager->persist( $ht12 );

        $ht13 = new Tank();
        $ht13->setName( 'KV-4' );
        $ht13->setTier( $tier8 );
        $ht13->setNationality( $russia );
        $ht13->setClass( $heavy );
        $ht13->setPremium( FALSE );
        $ht13->setReward( FALSE );
        $manager->persist( $ht13 );

        $ht14 = new Tank();
        $ht14->setName( 'KV-5' );
        $ht14->setTier( $tier8 );
        $ht14->setNationality( $russia );
        $ht14->setClass( $heavy );
        $ht14->setPremium( TRUE );
        $ht14->setReward( TRUE );
        $manager->persist( $ht14 );

        $ht15 = new Tank();
        $ht15->setName( 'IS-8' );
        $ht15->setTier( $tier9 );
        $ht15->setNationality( $russia );
        $ht15->setClass( $heavy );
        $ht15->setPremium( FALSE );
        $ht15->setReward( FALSE );
        $manager->persist( $ht15 );

        $ht16 = new Tank();
        $ht16->setName( 'ST-I' );
        $ht16->setTier( $tier9 );
        $ht16->setNationality( $russia );
        $ht16->setClass( $heavy );
        $ht16->setPremium( FALSE );
        $ht16->setReward( FALSE );
        $manager->persist( $ht16 );

        $ht17 = new Tank();
        $ht17->setName( 'IS-4' );
        $ht17->setTier( $tier10 );
        $ht17->setNationality( $russia );
        $ht17->setClass( $heavy );
        $ht17->setPremium( FALSE );
        $ht17->setReward( FALSE );
        $manager->persist( $ht17 );

        $ht18 = new Tank();
        $ht18->setName( 'IS-7' );
        $ht18->setTier( $tier10 );
        $ht18->setNationality( $russia );
        $ht18->setClass( $heavy );
        $ht18->setPremium( FALSE );
        $ht18->setReward( FALSE );
        $manager->persist( $ht18 );

        /**
         * tank destroyers
         */
        $td1 = new Tank();
        $td1->setName( 'AT-1' );
        $td1->setTier( $tier2 );
        $td1->setNationality( $russia );
        $td1->setClass( $td );
        $td1->setPremium( FALSE );
        $td1->setReward( FALSE );
        $manager->persist( $td1 );

        $td2 = new Tank();
        $td2->setName( 'SU-76' );
        $td2->setTier( $tier3 );
        $td2->setNationality( $russia );
        $td2->setClass( $td );
        $td2->setPremium( FALSE );
        $td2->setReward( FALSE );
        $manager->persist( $td2 );

        $td3 = new Tank();
        $td3->setName( 'SU-85B' );
        $td3->setTier( $tier4 );
        $td3->setNationality( $russia );
        $td3->setClass( $td );
        $td3->setPremium( FALSE );
        $td3->setReward( FALSE );
        $manager->persist( $td3 );

        $td4 = new Tank();
        $td4->setName( 'SU-85' );
        $td4->setTier( $tier5 );
        $td4->setNationality( $russia );
        $td4->setClass( $td );
        $td4->setPremium( FALSE );
        $td4->setReward( FALSE );
        $manager->persist( $td4 );

        $td5 = new Tank();
        $td5->setName( 'SU-85I' );
        $td5->setTier( $tier5 );
        $td5->setNationality( $russia );
        $td5->setClass( $td );
        $td5->setPremium( TRUE );
        $td5->setReward( TRUE );
        $manager->persist( $td5 );

        $td6 = new Tank();
        $td6->setName( 'SU-100' );
        $td6->setTier( $tier6 );
        $td6->setNationality( $russia );
        $td6->setClass( $td );
        $td6->setPremium( FALSE );
        $td6->setReward( FALSE );
        $manager->persist( $td6 );

        $td7 = new Tank();
        $td7->setName( 'SU-100Y' );
        $td7->setTier( $tier6 );
        $td7->setNationality( $russia );
        $td7->setClass( $td );
        $td7->setPremium( TRUE );
        $td7->setReward( FALSE );
        $manager->persist( $td7 );

        $td8 = new Tank();
        $td8->setName( 'SU-100M1' );
        $td8->setTier( $tier7 );
        $td8->setNationality( $russia );
        $td8->setClass( $td );
        $td8->setPremium( FALSE );
        $td8->setReward( FALSE );
        $manager->persist( $td8 );

        $td9 = new Tank();
        $td9->setName( 'SU-122-44' );
        $td9->setTier( $tier7 );
        $td9->setNationality( $russia );
        $td9->setClass( $td );
        $td9->setPremium( TRUE );
        $td9->setReward( FALSE );
        $manager->persist( $td9 );

        $td10 = new Tank();
        $td10->setName( 'SU-152' );
        $td10->setTier( $tier7 );
        $td10->setNationality( $russia );
        $td10->setClass( $td );
        $td10->setPremium( FALSE );
        $td10->setReward( FALSE );
        $manager->persist( $td10 );

        $td11 = new Tank();
        $td11->setName( 'ISU-152' );
        $td11->setTier( $tier8 );
        $td11->setNationality( $russia );
        $td11->setClass( $td );
        $td11->setPremium( FALSE );
        $td11->setReward( FALSE );
        $manager->persist( $td11 );

        $td12 = new Tank();
        $td12->setName( 'SU-101' );
        $td12->setTier( $tier8 );
        $td12->setNationality( $russia );
        $td12->setClass( $td );
        $td12->setPremium( FALSE );
        $td12->setReward( FALSE );
        $manager->persist( $td12 );

        $td13 = new Tank();
        $td13->setName( 'Object 704' );
        $td13->setTier( $tier9 );
        $td13->setNationality( $russia );
        $td13->setClass( $td );
        $td13->setPremium( FALSE );
        $td13->setReward( FALSE );
        $manager->persist( $td13 );

        $td14 = new Tank();
        $td14->setName( 'SU-122-54' );
        $td14->setTier( $tier9 );
        $td14->setNationality( $russia );
        $td14->setClass( $td );
        $td14->setPremium( FALSE );
        $td14->setReward( FALSE );
        $manager->persist( $td14 );

        $td15 = new Tank();
        $td15->setName( 'Object 263' );
        $td15->setTier( $tier10 );
        $td15->setNationality( $russia );
        $td15->setClass( $td );
        $td15->setPremium( FALSE );
        $td15->setReward( FALSE );
        $manager->persist( $td15 );

        $td16 = new Tank();
        $td16->setName( 'Object 268' );
        $td16->setTier( $tier10 );
        $td16->setNationality( $russia );
        $td16->setClass( $td );
        $td16->setPremium( FALSE );
        $td16->setReward( FALSE );
        $manager->persist( $td16 );

        /**
         * artillery
         */
        $spg1 = new Tank();
        $spg1->setName( 'SU-18' );
        $spg1->setTier( $tier2 );
        $spg1->setNationality( $russia );
        $spg1->setClass( $spg );
        $spg1->setPremium( FALSE );
        $spg1->setReward( FALSE );
        $manager->persist( $spg1 );

        $spg2 = new Tank();
        $spg2->setName( 'SU-26' );
        $spg2->setTier( $tier3 );
        $spg2->setNationality( $russia );
        $spg2->setClass( $spg );
        $spg2->setPremium( FALSE );
        $spg2->setReward( FALSE );
        $manager->persist( $spg2 );

        $spg3 = new Tank();
        $spg3->setName( 'SU-5' );
        $spg3->setTier( $tier4 );
        $spg3->setNationality( $russia );
        $spg3->setClass( $spg );
        $spg3->setPremium( FALSE );
        $spg3->setReward( FALSE );
        $manager->persist( $spg3 );

        $spg4 = new Tank();
        $spg4->setName( 'SU-8' );
        $spg4->setTier( $tier5 );
        $spg4->setNationality( $russia );
        $spg4->setClass( $spg );
        $spg4->setPremium( FALSE );
        $spg4->setReward( FALSE );
        $manager->persist( $spg4 );

        $spg5 = new Tank();
        $spg5->setName( 'S-51' );
        $spg5->setTier( $tier6 );
        $spg5->setNationality( $russia );
        $spg5->setClass( $spg );
        $spg5->setPremium( FALSE );
        $spg5->setReward( FALSE );
        $manager->persist( $spg5 );

        $spg6 = new Tank();
        $spg6->setName( 'SU-14' );
        $spg6->setTier( $tier6 );
        $spg6->setNationality( $russia );
        $spg6->setClass( $spg );
        $spg6->setPremium( FALSE );
        $spg6->setReward( FALSE );
        $manager->persist( $spg6 );

        $spg7 = new Tank();
        $spg7->setName( 'Object 212' );
        $spg7->setTier( $tier7 );
        $spg7->setNationality( $russia );
        $spg7->setClass( $spg );
        $spg7->setPremium( FALSE );
        $spg7->setReward( FALSE );
        $manager->persist( $spg7 );

        $spg8 = new Tank();
        $spg8->setName( 'Object 261' );
        $spg8->setTier( $tier8 );
        $spg8->setNationality( $russia );
        $spg8->setClass( $spg );
        $spg8->setPremium( FALSE );
        $spg8->setReward( FALSE );
        $manager->persist( $spg8 );

        $manager->flush();
    }
}