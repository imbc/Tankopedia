<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Tank;

class LoadGermanTankData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 8;
    }

    public function load( ObjectManager $manager )
    {
        // ref for tankclass
        $light = $this->getReference( 'light' );
        $medium = $this->getReference( 'medium' );
        $heavy = $this->getReference( 'heavy' );
        $td = $this->getReference( 'td' );
        $spg = $this->getReference( 'spg' );
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
        $nationality = $this->getReference( 'de' );

        /**
         * light tanks
         */
        $lt1 = new Tank();
        $lt1->setName( 'Leichttraktor' );
        $lt1->setTier( $tier1 );
        $lt1->setNationality( $nationality );
        $lt1->setClass( $light );
        $lt1->setPremium( false );
        $lt1->setReward( false );
        $manager->persist( $lt1 );

        $lt2 = new Tank();
        $lt2->setName( 'PzKpfw 35 (t)' );
        $lt2->setTier( $tier2 );
        $lt2->setNationality( $nationality );
        $lt2->setClass( $light );
        $lt2->setPremium( false );
        $lt2->setReward( false );
        $manager->persist( $lt2 );

        $lt3 = new Tank();
        $lt3->setName( 'PzKpfw 38H735 (f)' );
        $lt3->setTier( $tier2 );
        $lt3->setNationality( $nationality );
        $lt3->setClass( $light );
        $lt3->setPremium( true );
        $lt3->setReward( true );
        $manager->persist( $lt3 );

        $lt4 = new Tank();
        $lt4->setName( 'Pz.Kpfw. I' );
        $lt4->setTier( $tier2 );
        $lt4->setNationality( $nationality );
        $lt4->setClass( $light );
        $lt4->setPremium( false );
        $lt4->setReward( false );
        $manager->persist( $lt4 );

        $lt5 = new Tank();
        $lt5->setName( 'PzKpfw II' );
        $lt5->setTier( $tier3 );
        $lt5->setNationality( $nationality );
        $lt5->setClass( $light );
        $lt5->setPremium( false );
        $lt5->setReward( false );
        $manager->persist( $lt5 );

        $lt6 = new Tank();
        $lt6->setName( 'PzKpfw 38 (t)' );
        $lt6->setTier( $tier3 );
        $lt6->setNationality( $nationality );
        $lt6->setClass( $light );
        $lt6->setPremium( false );
        $lt6->setReward( false );
        $manager->persist( $lt6 );

        $lt7 = new Tank();
        $lt7->setName( 'Panzer I Ausf. C' );
        $lt7->setTier( $tier3 );
        $lt7->setNationality( $nationality );
        $lt7->setClass( $light );
        $lt7->setPremium( false );
        $lt7->setReward( false );
        $manager->persist( $lt7 );

        $lt8 = new Tank();
        $lt8->setName( 'Pz.Kpfw. II Ausf. G' );
        $lt8->setTier( $tier3 );
        $lt8->setNationality( $nationality );
        $lt8->setClass( $light );
        $lt8->setPremium( false );
        $lt8->setReward( false );
        $manager->persist( $lt8 );

        $lt9 = new Tank();
        $lt9->setName( 'PzKpfw II Ausf. J' );
        $lt9->setTier( $tier3 );
        $lt9->setNationality( $nationality );
        $lt9->setClass( $light );
        $lt9->setPremium( true );
        $lt9->setReward( true );
        $manager->persist( $lt9 );

        $lt10 = new Tank();
        $lt10->setName( 'PzKpfw II Luchs' );
        $lt10->setTier( $tier4 );
        $lt10->setNationality( $nationality );
        $lt10->setClass( $light );
        $lt10->setPremium( false );
        $lt10->setReward( false );
        $manager->persist( $lt10 );

        $lt11 = new Tank();
        $lt11->setName( 'PzKpfw III Ausf. A' );
        $lt11->setTier( $tier3 );
        $lt11->setNationality( $nationality );
        $lt11->setClass( $light );
        $lt11->setPremium( false );
        $lt11->setReward( false );
        $manager->persist( $lt11 );

        $lt12 = new Tank();
        $lt12->setName( 'T-15' );
        $lt12->setTier( $tier3 );
        $lt12->setNationality( $nationality );
        $lt12->setClass( $light );
        $lt12->setPremium( true );
        $lt12->setReward( false );
        $manager->persist( $lt12 );

        $lt13 = new Tank();
        $lt13->setName( 'PzKpfw 38 nA' );
        $lt13->setTier( $tier4 );
        $lt13->setNationality( $nationality );
        $lt13->setClass( $light );
        $lt13->setPremium( false );
        $lt13->setReward( false );
        $manager->persist( $lt13 );

        $lt14 = new Tank();
        $lt14->setName( 'VK 1602 Leopard' );
        $lt14->setTier( $tier5 );
        $lt14->setNationality( $nationality );
        $lt14->setClass( $light );
        $lt14->setPremium( false );
        $lt14->setReward( false );
        $manager->persist( $lt14 );

        $lt15 = new Tank();
        $lt15->setName( 'VK 2801' );
        $lt15->setTier( $tier6 );
        $lt15->setNationality( $nationality );
        $lt15->setClass( $light );
        $lt15->setPremium( false );
        $lt15->setReward( false );
        $manager->persist( $lt15 );

        /**
         * medium tanks
         */
        $mt1 = new Tank();
        $mt1->setName( 'PzKpfw S35 739 (f)' );
        $mt1->setTier( $tier3 );
        $mt1->setNationality( $nationality );
        $mt1->setClass( $medium );
        $mt1->setPremium( TRUE );
        $mt1->setReward( FALSE );
        $manager->persist( $mt1 );

        $mt2 = new Tank();
        $mt2->setName( 'PzKpfw III' );
        $mt2->setTier( $tier4 );
        $mt2->setNationality( $nationality );
        $mt2->setClass( $medium );
        $mt2->setPremium( FALSE );
        $mt2->setReward( FALSE );
        $manager->persist( $mt2 );

        $mt3 = new Tank();
        $mt3->setName( 'PzKpfw III/IV' );
        $mt3->setTier( $tier5 );
        $mt3->setNationality( $nationality );
        $mt3->setClass( $medium );
        $mt3->setPremium( FALSE );
        $mt3->setReward( FALSE );
        $manager->persist( $mt3 );

        $mt4 = new Tank();
        $mt4->setName( 'PzKpfw IV' );
        $mt4->setTier( $tier5 );
        $mt4->setNationality( $nationality );
        $mt4->setClass( $medium );
        $mt4->setPremium( FALSE );
        $mt4->setReward( FALSE );
        $manager->persist( $mt4 );

        $mt5 = new Tank();
        $mt5->setName( 'PzKpfw IV Hydraulic' );
        $mt5->setTier( $tier5 );
        $mt5->setNationality( $nationality );
        $mt5->setClass( $medium );
        $mt5->setPremium( TRUE );
        $mt5->setReward( TRUE );
        $manager->persist( $mt5 );

        $mt6 = new Tank();
        $mt6->setName( 'T-25' );
        $mt6->setTier( $tier5 );
        $mt6->setNationality( $nationality );
        $mt6->setClass( $medium );
        $mt6->setPremium( TRUE );
        $mt6->setReward( FALSE );
        $manager->persist( $mt6 );

        $mt7 = new Tank();
        $mt7->setName( 'PzKpfw IV Schmalturm' );
        $mt7->setTier( $tier6 );
        $mt7->setNationality( $nationality );
        $mt7->setClass( $medium );
        $mt7->setPremium( TRUE );
        $mt7->setReward( FALSE );
        $manager->persist( $mt7 );

        $mt8 = new Tank();
        $mt8->setName( 'PzKpfw V-IV' );
        $mt8->setTier( $tier6 );
        $mt8->setNationality( $nationality );
        $mt8->setClass( $medium );
        $mt8->setPremium( TRUE );
        $mt8->setReward( TRUE );
        $manager->persist( $mt8 );

        $mt9 = new Tank();
        $mt9->setName( 'PzKpfw V-IV Alpha' );
        $mt9->setTier( $tier6 );
        $mt9->setNationality( $nationality );
        $mt9->setClass( $medium );
        $mt9->setPremium( TRUE );
        $mt9->setReward( TRUE );
        $manager->persist( $mt9 );

        $mt10 = new Tank();
        $mt10->setName( 'VK 3001 (H)' );
        $mt10->setTier( $tier6 );
        $mt10->setNationality( $nationality );
        $mt10->setClass( $medium );
        $mt10->setPremium( FALSE );
        $mt10->setReward( FALSE );
        $manager->persist( $mt10 );

        $mt11 = new Tank();
        $mt11->setName( 'VK 3001 (P)' );
        $mt11->setTier( $tier6 );
        $mt11->setNationality( $nationality );
        $mt11->setClass( $medium );
        $mt11->setPremium( FALSE );
        $mt11->setReward( FALSE );
        $manager->persist( $mt11 );

        $mt12 = new Tank();
        $mt12->setName( 'VK 3601 (H)' );
        $mt12->setTier( $tier6 );
        $mt12->setNationality( $nationality );
        $mt12->setClass( $medium );
        $mt12->setPremium( FALSE );
        $mt12->setReward( FALSE );
        $manager->persist( $mt12 );

        $mt13 = new Tank();
        $mt13->setName( 'Panther-M10' );
        $mt13->setTier( $tier7 );
        $mt13->setNationality( $nationality );
        $mt13->setClass( $medium );
        $mt13->setPremium( FALSE );
        $mt13->setReward( FALSE );
        $manager->persist( $mt13 );

        $mt14 = new Tank();
        $mt14->setName( 'PzKpfw V Panther' );
        $mt14->setTier( $tier7 );
        $mt14->setNationality( $nationality );
        $mt14->setClass( $medium );
        $mt14->setPremium( FALSE );
        $mt14->setReward( FALSE );
        $manager->persist( $mt14 );

        $mt15 = new Tank();
        $mt15->setName( 'VK 3002 (DB)' );
        $mt15->setTier( $tier7 );
        $mt15->setNationality( $nationality );
        $mt15->setClass( $medium );
        $mt15->setPremium( FALSE );
        $mt15->setReward( FALSE );
        $manager->persist( $mt15 );

        $mt16 = new Tank();
        $mt16->setName( 'Panther II' );
        $mt16->setTier( $tier8 );
        $mt16->setNationality( $nationality );
        $mt16->setClass( $medium );
        $mt16->setPremium( FALSE );
        $mt16->setReward( FALSE );
        $manager->persist( $mt16 );

        $mt17 = new Tank();
        $mt17->setName( 'E-50' );
        $mt17->setTier( $tier9 );
        $mt17->setNationality( $nationality );
        $mt17->setClass( $medium );
        $mt17->setPremium( FALSE );
        $mt17->setReward( FALSE );
        $manager->persist( $mt17 );

        $mt18 = new Tank();
        $mt18->setName( 'E-50 Ausf. M' );
        $mt18->setTier( $tier10 );
        $mt18->setNationality( $nationality );
        $mt18->setClass( $medium );
        $mt18->setPremium( FALSE );
        $mt18->setReward( FALSE );
        $manager->persist( $mt18 );

        /**
         * heavy tanks
         */
        $ht1 = new Tank();
        $ht1->setName( 'PzKpfw B2 740 (f)' );
        $ht1->setTier( $tier4 );
        $ht1->setNationality( $nationality );
        $ht1->setClass( $heavy );
        $ht1->setPremium( TRUE );
        $ht1->setReward( TRUE );
        $manager->persist( $ht1 );

        $ht2 = new Tank();
        $ht2->setName( 'PzKpfw VI Tiger' );
        $ht2->setTier( $tier7 );
        $ht2->setNationality( $nationality );
        $ht2->setClass( $heavy );
        $ht2->setPremium( FALSE );
        $ht2->setReward( FALSE );
        $manager->persist( $ht2 );

        $ht3 = new Tank();
        $ht3->setName( 'PzKpfw VI Tiger (P)' );
        $ht3->setTier( $tier7 );
        $ht3->setNationality( $nationality );
        $ht3->setClass( $heavy );
        $ht3->setPremium( FALSE );
        $ht3->setReward( FALSE );
        $manager->persist( $ht3 );

        $ht4 = new Tank();
        $ht4->setName( 'Löwe' );
        $ht4->setTier( $tier8 );
        $ht4->setNationality( $nationality );
        $ht4->setClass( $heavy );
        $ht4->setPremium( TRUE );
        $ht4->setReward( FALSE );
        $manager->persist( $ht4 );

        $ht5 = new Tank();
        $ht5->setName( 'PzKpfw VIB Tiger II' );
        $ht5->setTier( $tier8 );
        $ht5->setNationality( $nationality );
        $ht5->setClass( $heavy );
        $ht5->setPremium( FALSE );
        $ht5->setReward( FALSE );
        $manager->persist( $ht5 );

        $ht6 = new Tank();
        $ht6->setName( 'VK 4502 (P) Ausf. A' );
        $ht6->setTier( $tier8 );
        $ht6->setNationality( $nationality );
        $ht6->setClass( $heavy );
        $ht6->setPremium( FALSE );
        $ht6->setReward( FALSE );
        $manager->persist( $ht6 );

        $ht7 = new Tank();
        $ht7->setName( 'E-75' );
        $ht7->setTier( $tier9 );
        $ht7->setNationality( $nationality );
        $ht7->setClass( $heavy );
        $ht7->setPremium( FALSE );
        $ht7->setReward( FALSE );
        $manager->persist( $ht7 );

        $ht8 = new Tank();
        $ht8->setName( 'VK 4502 (P) Ausf. B' );
        $ht8->setTier( $tier9 );
        $ht8->setNationality( $nationality );
        $ht8->setClass( $heavy );
        $ht8->setPremium( FALSE );
        $ht8->setReward( FALSE );
        $manager->persist( $ht8 );

        $ht9 = new Tank();
        $ht9->setName( 'E-100' );
        $ht9->setTier( $tier10 );
        $ht9->setNationality( $nationality );
        $ht9->setClass( $heavy );
        $ht9->setPremium( FALSE );
        $ht9->setReward( FALSE );
        $manager->persist( $ht9 );

        $ht10 = new Tank();
        $ht10->setName( 'Maus' );
        $ht10->setTier( $tier10 );
        $ht10->setNationality( $nationality );
        $ht10->setClass( $heavy );
        $ht10->setPremium( FALSE );
        $ht10->setReward( FALSE );
        $manager->persist( $ht10 );

        /**
         * tank destroyers
         */
        $td1 = new Tank();
        $td1->setName( 'Panzerjäger I' );
        $td1->setTier( $tier2 );
        $td1->setNationality( $nationality );
        $td1->setClass( $td );
        $td1->setPremium( FALSE );
        $td1->setReward( FALSE );
        $manager->persist( $td1 );

        $td2 = new Tank();
        $td2->setName( 'Marder II' );
        $td2->setTier( $tier3 );
        $td2->setNationality( $nationality );
        $td2->setClass( $td );
        $td2->setPremium( FALSE );
        $td2->setReward( FALSE );
        $manager->persist( $td2 );

        $td3 = new Tank();
        $td3->setName( 'Hetzer' );
        $td3->setTier( $tier4 );
        $td3->setNationality( $nationality );
        $td3->setClass( $td );
        $td3->setPremium( FALSE );
        $td3->setReward( FALSE );
        $manager->persist( $td3 );

        $td4 = new Tank();
        $td4->setName( 'StuG III' );
        $td4->setTier( $tier5 );
        $td4->setNationality( $nationality );
        $td4->setClass( $td );
        $td4->setPremium( FALSE );
        $td4->setReward( FALSE );
        $manager->persist( $td4 );

        $td5 = new Tank();
        $td5->setName( 'Dicker Max' );
        $td5->setTier( $tier6 );
        $td5->setNationality( $nationality );
        $td5->setClass( $td );
        $td5->setPremium( TRUE );
        $td5->setReward( FALSE );
        $manager->persist( $td5 );

        $td6 = new Tank();
        $td6->setName( 'JagdPz IV' );
        $td6->setTier( $tier6 );
        $td6->setNationality( $nationality );
        $td6->setClass( $td );
        $td6->setPremium( FALSE );
        $td6->setReward( FALSE );
        $manager->persist( $td6 );

        $td7 = new Tank();
        $td7->setName( 'Jagdpanther' );
        $td7->setTier( $tier7 );
        $td7->setNationality( $nationality );
        $td7->setClass( $td );
        $td7->setPremium( FALSE );
        $td7->setReward( FALSE );
        $manager->persist( $td7 );

        $td8 = new Tank();
        $td8->setName( '8.8 cm PaK 43 Jagdtiger' );
        $td8->setTier( $tier8 );
        $td8->setNationality( $nationality );
        $td8->setClass( $td );
        $td8->setPremium( TRUE );
        $td8->setReward( FALSE );
        $manager->persist( $td8 );

        $td9 = new Tank();
        $td9->setName( 'Ferdinand' );
        $td9->setTier( $tier8 );
        $td9->setNationality( $nationality );
        $td9->setClass( $td );
        $td9->setPremium( FALSE );
        $td9->setReward( FALSE );
        $manager->persist( $td9 );

        $td10 = new Tank();
        $td10->setName( 'Jagdpanther II' );
        $td10->setTier( $tier8 );
        $td10->setNationality( $nationality );
        $td10->setClass( $td );
        $td10->setPremium( FALSE );
        $td10->setReward( FALSE );
        $manager->persist( $td10 );

        $td11 = new Tank();
        $td11->setName( 'Jagdtiger' );
        $td11->setTier( $tier9 );
        $td11->setNationality( $nationality );
        $td11->setClass( $td );
        $td11->setPremium( FALSE );
        $td11->setReward( FALSE );
        $manager->persist( $td11 );

        $td12 = new Tank();
        $td12->setName( 'JagdPz E-100' );
        $td12->setTier( $tier10 );
        $td12->setNationality( $nationality );
        $td12->setClass( $td );
        $td12->setPremium( FALSE );
        $td12->setReward( FALSE );
        $manager->persist( $td12 );

        /**
         * artillery
         */
        $spg1 = new Tank();
        $spg1->setName( 'Sturmpanzer I Bison' );
        $spg1->setTier( $tier2 );
        $spg1->setNationality( $nationality );
        $spg1->setClass( $spg );
        $spg1->setPremium( FALSE );
        $spg1->setReward( FALSE );
        $manager->persist( $spg1 );

        $spg2 = new Tank();
        $spg2->setName( 'Sturmpanzer II' );
        $spg2->setTier( $tier3 );
        $spg2->setNationality( $nationality );
        $spg2->setClass( $spg );
        $spg2->setPremium( FALSE );
        $spg2->setReward( FALSE );
        $manager->persist( $spg2 );

        $spg3 = new Tank();
        $spg3->setName( 'Wespe' );
        $spg3->setTier( $tier3 );
        $spg3->setNationality( $nationality );
        $spg3->setClass( $spg );
        $spg3->setPremium( FALSE );
        $spg3->setReward( FALSE );
        $manager->persist( $spg3 );

        $spg4 = new Tank();
        $spg4->setName( 'Grille' );
        $spg4->setTier( $tier4 );
        $spg4->setNationality( $nationality );
        $spg4->setClass( $spg );
        $spg4->setPremium( FALSE );
        $spg4->setReward( FALSE );
        $manager->persist( $spg4 );

        $spg5 = new Tank();
        $spg5->setName( 'Hummel' );
        $spg5->setTier( $tier5 );
        $spg5->setNationality( $nationality );
        $spg5->setClass( $spg );
        $spg5->setPremium( FALSE );
        $spg5->setReward( FALSE );
        $manager->persist( $spg5 );

        $spg6 = new Tank();
        $spg6->setName( 'GW Panther' );
        $spg6->setTier( $tier6 );
        $spg6->setNationality( $nationality );
        $spg6->setClass( $spg );
        $spg6->setPremium( FALSE );
        $spg6->setReward( FALSE );
        $manager->persist( $spg6 );

        $spg7 = new Tank();
        $spg7->setName( 'GW Tiger' );
        $spg7->setTier( $tier7 );
        $spg7->setNationality( $nationality );
        $spg7->setClass( $spg );
        $spg7->setPremium( FALSE );
        $spg7->setReward( FALSE );
        $manager->persist( $spg7 );

        $spg8 = new Tank();
        $spg8->setName( 'GW Typ E' );
        $spg8->setTier( $tier8 );
        $spg8->setNationality( $nationality );
        $spg8->setClass( $spg );
        $spg8->setPremium( FALSE );
        $spg8->setReward( FALSE );
        $manager->persist( $spg8 );

        $manager->flush();
    }
}