<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

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
        $china = $this->getReference( 'cn' );

        // light tanks
        $lt1 = new Tank();
        $lt1->setName( 'Renault NC-31' );
        $lt1->setTier( $tier1 );
        $lt1->setNationality( $china );
        $lt1->setClass( $light );
        $lt1->setPremium( FALSE );
        $lt1->setReward( FALSE );
        $manager->persist( $lt1 );

        $lt2 = new Tank();
        $lt2->setName( 'Vickers Mk. E Type B' );
        $lt2->setTier( $tier2 );
        $lt2->setNationality( $china );
        $lt2->setClass( $light );
        $lt2->setPremium( FALSE );
        $lt2->setReward( FALSE );
        $manager->persist( $lt2 );

        $lt3 = new Tank();
        $lt3->setName( 'Type 2597 Chi-Ha' );
        $lt3->setTier( $tier3 );
        $lt3->setNationality( $china );
        $lt3->setClass( $light );
        $lt3->setPremium( FALSE );
        $lt3->setReward( FALSE );
        $manager->persist( $lt3 );

        $lt4 = new Tank();
        $lt4->setName( 'M5A1 Stuart' );
        $lt4->setTier( $tier4 );
        $lt4->setNationality( $china );
        $lt4->setClass( $light );
        $lt4->setPremium( FALSE );
        $lt4->setReward( FALSE );
        $manager->persist( $lt4 );

        $lt5 = new Tank();
        $lt5->setName( '59-16' );
        $lt5->setTier( $tier6 );
        $lt5->setNationality( $china );
        $lt5->setClass( $light );
        $lt5->setPremium( FALSE );
        $lt5->setReward( FALSE );
        $manager->persist( $lt5 );

        $lt6 = new Tank();
        $lt6->setName( 'Type 62' );
        $lt6->setTier( $tier7 );
        $lt6->setNationality( $china );
        $lt6->setClass( $light );
        $lt6->setPremium( TRUE );
        $lt6->setReward( TRUE );
        $manager->persist( $lt6 );

        $lt7 = new Tank();
        $lt7->setName( 'WZ-131' );
        $lt7->setTier( $tier7 );
        $lt7->setNationality( $china );
        $lt7->setClass( $light );
        $lt7->setPremium( FALSE );
        $lt7->setReward( FALSE );
        $manager->persist( $lt7 );

        $lt8 = new Tank();
        $lt8->setName( 'WZ-132' );
        $lt8->setTier( $tier8 );
        $lt8->setNationality( $china );
        $lt8->setClass( $light );
        $lt8->setPremium( FALSE );
        $lt8->setReward( FALSE );
        $manager->persist( $lt8 );

        // medium tanks
        $mt1 = new Tank();
        $mt1->setName( 'Type T-34' );
        $mt1->setTier( $tier5 );
        $mt1->setNationality( $china );
        $mt1->setClass( $medium );
        $mt1->setPremium( FALSE );
        $mt1->setReward( FALSE );
        $manager->persist( $mt1 );

        $mt2 = new Tank();
        $mt2->setName( 'Type 58' );
        $mt2->setTier( $tier6 );
        $mt2->setNationality( $china );
        $mt2->setClass( $medium );
        $mt2->setPremium( FALSE );
        $mt2->setReward( FALSE );
        $manager->persist( $mt2 );

        $mt3 = new Tank();
        $mt3->setName( 'T-34-1' );
        $mt3->setTier( $tier7 );
        $mt3->setNationality( $china );
        $mt3->setClass( $medium );
        $mt3->setPremium( FALSE );
        $mt3->setReward( FALSE );
        $manager->persist( $mt3 );

        $mt4 = new Tank();
        $mt4->setName( 'T-34-2' );
        $mt4->setTier( $tier8 );
        $mt4->setNationality( $china );
        $mt4->setClass( $medium );
        $mt4->setPremium( FALSE );
        $mt4->setReward( FALSE );
        $manager->persist( $mt4 );

        $mt5 = new Tank();
        $mt5->setName( 'Type 59' );
        $mt5->setTier( $tier8 );
        $mt5->setNationality( $china );
        $mt5->setClass( $medium );
        $mt5->setPremium( TRUE );
        $mt5->setReward( TRUE );
        $manager->persist( $mt5 );

        $mt6 = new Tank();
        $mt6->setName( 'Type 59 G' );
        $mt6->setTier( $tier8 );
        $mt6->setNationality( $china );
        $mt6->setClass( $light );
        $mt6->setPremium( TRUE );
        $mt6->setReward( TRUE );
        $manager->persist( $mt6 );

        $mt7 = new Tank();
        $mt7->setName( 'WZ-120' );
        $mt7->setTier( $tier9 );
        $mt7->setNationality( $china );
        $mt7->setClass( $medium );
        $mt7->setPremium( FALSE );
        $mt7->setReward( FALSE );
        $manager->persist( $mt7 );

        $mt8 = new Tank();
        $mt8->setName( '121' );
        $mt8->setTier( $tier10 );
        $mt8->setNationality( $china );
        $mt8->setClass( $medium );
        $mt8->setPremium( FALSE );
        $mt8->setReward( FALSE );
        $manager->persist( $mt8 );

        // heavy tanks
        $ht1 = new Tank();
        $ht1->setName( 'IS-2' );
        $ht1->setTier( $tier7 );
        $ht1->setNationality( $china );
        $ht1->setClass( $heavy );
        $ht1->setPremium( FALSE );
        $ht1->setReward( FALSE );
        $manager->persist( $ht1 );

        $ht2 = new Tank();
        $ht2->setName( '110' );
        $ht2->setTier( $tier8 );
        $ht2->setNationality( $china );
        $ht2->setClass( $heavy );
        $ht2->setPremium( FALSE );
        $ht2->setReward( FALSE );
        $manager->persist( $ht2 );

        $ht3 = new Tank();
        $ht3->setName( 'WZ-111' );
        $ht3->setTier( $tier8 );
        $ht3->setNationality( $china );
        $ht3->setClass( $heavy );
        $ht3->setPremium( TRUE );
        $ht3->setReward( TRUE );
        $manager->persist( $ht3 );

        $ht4 = new Tank();
        $ht4->setName( 'WZ-111 model 1-4' );
        $ht4->setTier( $tier9 );
        $ht4->setNationality( $china );
        $ht4->setClass( $heavy );
        $ht4->setPremium( FALSE );
        $ht4->setReward( FALSE );
        $manager->persist( $ht4 );

        $ht5 = new Tank();
        $ht5->setName( '113' );
        $ht5->setTier( $tier10 );
        $ht5->setNationality( $china );
        $ht5->setClass( $heavy );
        $ht5->setPremium( FALSE );
        $ht5->setReward( FALSE );
        $manager->persist( $ht5 );

        $manager->flush();
    }
}