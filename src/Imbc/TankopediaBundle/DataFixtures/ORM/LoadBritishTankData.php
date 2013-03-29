<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Tank;

class LoadBritishTankData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 6;
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
        $nationality = $this->getReference( 'uk' );

        /**
         * light tanks
         */
        $lt1 = new Tank();
        $lt1->setName( 'Cruiser Mk. I' );
        $lt1->setTier( $tier2 );
        $lt1->setNationality( $nationality );
        $lt1->setClass( $light );
        $lt1->setPremium( FALSE );
        $lt1->setReward( FALSE );
        $manager->persist( $lt1 );

        $lt2 = new Tank();
        $lt2->setName( 'Cruiser Mk. III' );
        $lt2->setTier( $tier2 );
        $lt2->setNationality( $nationality );
        $lt2->setClass( $light );
        $lt2->setPremium( FALSE );
        $lt2->setReward( FALSE );
        $manager->persist( $lt2 );

        $lt3 = new Tank();
        $lt3->setName( 'Cruiser Mk. II' );
        $lt3->setTier( $tier3 );
        $lt3->setNationality( $nationality );
        $lt3->setClass( $light );
        $lt3->setPremium( FALSE );
        $lt3->setReward( FALSE );
        $manager->persist( $lt3 );

        $lt4 = new Tank();
        $lt4->setName( 'Cruiser Mk. IV' );
        $lt4->setTier( $tier3 );
        $lt4->setNationality( $nationality );
        $lt4->setClass( $light );
        $lt4->setPremium( FALSE );
        $lt4->setReward( FALSE );
        $manager->persist( $lt4 );

        $lt5 = new Tank();
        $lt5->setName( 'Covenanter' );
        $lt5->setTier( $tier4 );
        $lt5->setNationality( $nationality );
        $lt5->setClass( $light );
        $lt5->setPremium( FALSE );
        $lt5->setReward( FALSE );
        $manager->persist( $lt5 );

        $lt6 = new Tank();
        $lt6->setName( 'Valentine' );
        $lt6->setTier( $tier4 );
        $lt6->setNationality( $nationality );
        $lt6->setClass( $light );
        $lt6->setPremium( FALSE );
        $lt6->setReward( FALSE );
        $manager->persist( $lt6 );

        $lt7 = new Tank();
        $lt7->setName( 'Crusader' );
        $lt7->setTier( $tier5 );
        $lt7->setNationality( $nationality );
        $lt7->setClass( $light );
        $lt7->setPremium( FALSE );
        $lt7->setReward( FALSE );
        $manager->persist( $lt7 );

        /**
         * medium tanks
         */
        $mt1 = new Tank();
        $mt1->setName( 'Vickers Medium Mk. I' );
        $mt1->setTier( $tier1 );
        $mt1->setNationality( $nationality );
        $mt1->setClass( $medium );
        $mt1->setPremium( FALSE );
        $mt1->setReward( FALSE );
        $manager->persist( $mt1 );

        $mt2 = new Tank();
        $mt2->setName( 'Vickers Medium Mk. II' );
        $mt2->setTier( $tier2 );
        $mt2->setNationality( $nationality );
        $mt2->setClass( $medium );
        $mt2->setPremium( FALSE );
        $mt2->setReward( FALSE );
        $manager->persist( $mt2 );

        $mt3 = new Tank();
        $mt3->setName( 'Vickers Medium Mk. III' );
        $mt3->setTier( $tier3 );
        $mt3->setNationality( $nationality );
        $mt3->setClass( $medium );
        $mt3->setPremium( FALSE );
        $mt3->setReward( FALSE );
        $manager->persist( $mt3 );

        $mt4 = new Tank();
        $mt4->setName( 'Matilda' );
        $mt4->setTier( $tier4 );
        $mt4->setNationality( $nationality );
        $mt4->setClass( $medium );
        $mt4->setPremium( FALSE );
        $mt4->setReward( FALSE );
        $manager->persist( $mt4 );

        $mt5 = new Tank();
        $mt5->setName( 'Matilda Black Prince' );
        $mt5->setTier( $tier5 );
        $mt5->setNationality( $nationality );
        $mt5->setClass( $medium );
        $mt5->setPremium( TRUE );
        $mt5->setReward( FALSE );
        $manager->persist( $mt5 );

        $mt6 = new Tank();
        $mt6->setName( 'Cromwell' );
        $mt6->setTier( $tier6 );
        $mt6->setNationality( $nationality );
        $mt6->setClass( $medium );
        $mt6->setPremium( FALSE );
        $mt6->setReward( FALSE );
        $manager->persist( $mt6 );

        $mt7 = new Tank();
        $mt7->setName( 'Comet' );
        $mt7->setTier( $tier7 );
        $mt7->setNationality( $nationality );
        $mt7->setClass( $medium );
        $mt7->setPremium( FALSE );
        $mt7->setReward( FALSE );
        $manager->persist( $mt7 );

        $mt8 = new Tank();
        $mt8->setName( 'Centurion Mk. I' );
        $mt8->setTier( $tier8 );
        $mt8->setNationality( $nationality );
        $mt8->setClass( $medium );
        $mt8->setPremium( FALSE );
        $mt8->setReward( FALSE );
        $manager->persist( $mt8 );

        $mt9 = new Tank();
        $mt9->setName( 'Centurion Mk. 7/1' );
        $mt9->setTier( $tier9 );
        $mt9->setNationality( $nationality );
        $mt9->setClass( $medium );
        $mt9->setPremium( FALSE );
        $mt9->setReward( FALSE );
        $manager->persist( $mt9 );

        $mt10 = new Tank();
        $mt10->setName( 'FV4202' );
        $mt10->setTier( $tier10 );
        $mt10->setNationality( $nationality );
        $mt10->setClass( $medium );
        $mt10->setPremium( FALSE );
        $mt10->setReward( FALSE );
        $manager->persist( $mt10 );

        /**
         * heavy tanks
         */
        $ht1 = new Tank();
        $ht1->setName( 'Churchill I' );
        $ht1->setTier( $tier5 );
        $ht1->setNationality( $nationality );
        $ht1->setClass( $heavy );
        $ht1->setPremium( FALSE );
        $ht1->setReward( FALSE );
        $manager->persist( $ht1 );

        $ht2 = new Tank();
        $ht2->setName( 'Churchill VII' );
        $ht2->setTier( $tier6 );
        $ht2->setNationality( $nationality );
        $ht2->setClass( $heavy );
        $ht2->setPremium( FALSE );
        $ht2->setReward( FALSE );
        $manager->persist( $ht2 );

        $ht3 = new Tank();
        $ht3->setName( 'TOG II*' );
        $ht3->setTier( $tier6 );
        $ht3->setNationality( $nationality );
        $ht3->setClass( $heavy );
        $ht3->setPremium( TRUE );
        $ht3->setReward( FALSE );
        $manager->persist( $ht3 );

        $ht4 = new Tank();
        $ht4->setName( 'Black Prince' );
        $ht4->setTier( $tier7 );
        $ht4->setNationality( $nationality );
        $ht4->setClass( $heavy );
        $ht4->setPremium( FALSE );
        $ht4->setReward( FALSE );
        $manager->persist( $ht4 );

        $ht5 = new Tank();
        $ht5->setName( 'Caernarvon' );
        $ht5->setTier( $tier8 );
        $ht5->setNationality( $nationality );
        $ht5->setClass( $heavy );
        $ht5->setPremium( FALSE );
        $ht5->setReward( FALSE );
        $manager->persist( $ht5 );

        $ht6 = new Tank();
        $ht6->setName( 'Conqueror' );
        $ht6->setTier( $tier9 );
        $ht6->setNationality( $nationality );
        $ht6->setClass( $heavy );
        $ht6->setPremium( FALSE );
        $ht6->setReward( FALSE );
        $manager->persist( $ht6 );

        $ht7 = new Tank();
        $ht7->setName( 'FV215b' );
        $ht7->setTier( $tier10 );
        $ht7->setNationality( $nationality );
        $ht7->setClass( $heavy );
        $ht7->setPremium( FALSE );
        $ht7->setReward( FALSE );
        $manager->persist( $ht7 );

        /**
         * tank destroyers
         */
        $td1 = new Tank();
        $td1->setName( 'Universal Carrier 2-pdr' );
        $td1->setTier( $tier2 );
        $td1->setNationality( $nationality );
        $td1->setClass( $td );
        $td1->setPremium( FALSE );
        $td1->setReward( FALSE );
        $manager->persist( $td1 );

        $td2 = new Tank();
        $td2->setName( 'Valentine AT' );
        $td2->setTier( $tier3 );
        $td2->setNationality( $nationality );
        $td2->setClass( $td );
        $td2->setPremium( FALSE );
        $td2->setReward( FALSE );
        $manager->persist( $td2 );

        $td3 = new Tank();
        $td3->setName( 'Alecto' );
        $td3->setTier( $tier4 );
        $td3->setNationality( $nationality );
        $td3->setClass( $td );
        $td3->setPremium( FALSE );
        $td3->setReward( FALSE );
        $manager->persist( $td3 );

        $td4 = new Tank();
        $td4->setName( 'AT 2' );
        $td4->setTier( $tier5 );
        $td4->setNationality( $nationality );
        $td4->setClass( $td );
        $td4->setPremium( FALSE );
        $td4->setReward( FALSE );
        $manager->persist( $td4 );

        $td5 = new Tank();
        $td5->setName( 'Churchill Gun Carrier' );
        $td5->setTier( $tier6 );
        $td5->setNationality( $nationality );
        $td5->setClass( $td );
        $td5->setPremium( FALSE );
        $td5->setReward( FALSE );
        $manager->persist( $td5 );

        $td6 = new Tank();
        $td6->setName( 'AT 8' );
        $td6->setTier( $tier6 );
        $td6->setNationality( $nationality );
        $td6->setClass( $td );
        $td6->setPremium( FALSE );
        $td6->setReward( FALSE );
        $manager->persist( $td6 );

        $td7 = new Tank();
        $td7->setName( 'AT-15A' );
        $td7->setTier( $tier7 );
        $td7->setNationality( $nationality );
        $td7->setClass( $td );
        $td7->setPremium( TRUE );
        $td7->setReward( FALSE );
        $manager->persist( $td7 );

        $td8 = new Tank();
        $td8->setName( 'AT 7' );
        $td8->setTier( $tier7 );
        $td8->setNationality( $nationality );
        $td8->setClass( $td );
        $td8->setPremium( FALSE );
        $td8->setReward( FALSE );
        $manager->persist( $td8 );

        $td9 = new Tank();
        $td9->setName( 'AT 15' );
        $td9->setTier( $tier8 );
        $td9->setNationality( $nationality );
        $td9->setClass( $td );
        $td9->setPremium( FALSE );
        $td9->setReward( FALSE );
        $manager->persist( $td9 );

        $td10 = new Tank();
        $td10->setName( 'Tortoise' );
        $td10->setTier( $tier9 );
        $td10->setNationality( $nationality );
        $td10->setClass( $td );
        $td10->setPremium( FALSE );
        $td10->setReward( FALSE );
        $manager->persist( $td10 );

        $td11 = new Tank();
        $td11->setName( 'FV215b (183)' );
        $td11->setTier( $tier10 );
        $td11->setNationality( $nationality );
        $td11->setClass( $td );
        $td11->setPremium( FALSE );
        $td11->setReward( FALSE );
        $manager->persist( $td11 );

        $manager->flush();
    }
}