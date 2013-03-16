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
        $germany = $this->getReference( 'de' );

        /**
         * light tanks
         */
        $lt1 = new Tank();
        $lt1->setName( 'Leichttraktor' );
        $lt1->setTier( $tier1 );
        $lt1->setNationality( $germany );
        $lt1->setClass( $light );
        $lt1->setPremium( false );
        $lt1->setReward( false );
        $manager->persist( $lt1 );

        $lt2 = new Tank();
        $lt2->setName( 'PzKpfw 35 (t)' );
        $lt2->setTier( $tier2 );
        $lt2->setNationality( $germany );
        $lt2->setClass( $light );
        $lt2->setPremium( false );
        $lt2->setReward( false );
        $manager->persist( $lt2 );

        $lt3 = new Tank();
        $lt3->setName( 'PzKpfw 38H735 (f)' );
        $lt3->setTier( $tier2 );
        $lt3->setNationality( $germany );
        $lt3->setClass( $light );
        $lt3->setPremium( true );
        $lt3->setReward( true );
        $manager->persist( $lt3 );

        $lt4 = new Tank();
        $lt4->setName( 'Pz.Kpfw. I' );
        $lt4->setTier( $tier2 );
        $lt4->setNationality( $germany );
        $lt4->setClass( $light );
        $lt4->setPremium( false );
        $lt4->setReward( false );
        $manager->persist( $lt4 );

        $lt5 = new Tank();
        $lt5->setName( 'PzKpfw II' );
        $lt5->setTier( $tier3 );
        $lt5->setNationality( $germany );
        $lt5->setClass( $light );
        $lt5->setPremium( false );
        $lt5->setReward( false );
        $manager->persist( $lt5 );

        $lt6 = new Tank();
        $lt6->setName( 'PzKpfw 38 (t)' );
        $lt6->setTier( $tier3 );
        $lt6->setNationality( $germany );
        $lt6->setClass( $light );
        $lt6->setPremium( false );
        $lt6->setReward( false );
        $manager->persist( $lt6 );

        $lt7 = new Tank();
        $lt7->setName( 'Panzer I Ausf. C' );
        $lt7->setTier( $tier3 );
        $lt7->setNationality( $germany );
        $lt7->setClass( $light );
        $lt7->setPremium( false );
        $lt7->setReward( false );
        $manager->persist( $lt7 );

        $lt8 = new Tank();
        $lt8->setName( 'Pz.Kpfw. II Ausf. G' );
        $lt8->setTier( $tier3 );
        $lt8->setNationality( $germany );
        $lt8->setClass( $light );
        $lt8->setPremium( false );
        $lt8->setReward( false );
        $manager->persist( $lt8 );

        $lt9 = new Tank();
        $lt9->setName( 'PzKpfw II Ausf. J' );
        $lt9->setTier( $tier3 );
        $lt9->setNationality( $germany );
        $lt9->setClass( $light );
        $lt9->setPremium( true );
        $lt9->setReward( true );
        $manager->persist( $lt9 );

        $lt10 = new Tank();
        $lt10->setName( 'PzKpfw II Luchs' );
        $lt10->setTier( $tier4 );
        $lt10->setNationality( $germany );
        $lt10->setClass( $light );
        $lt10->setPremium( false );
        $lt10->setReward( false );
        $manager->persist( $lt10 );

        $lt11 = new Tank();
        $lt11->setName( 'PzKpfw III Ausf. A' );
        $lt11->setTier( $tier3 );
        $lt11->setNationality( $germany );
        $lt11->setClass( $light );
        $lt11->setPremium( false );
        $lt11->setReward( false );
        $manager->persist( $lt11 );

        $lt12 = new Tank();
        $lt12->setName( 'T-15' );
        $lt12->setTier( $tier3 );
        $lt12->setNationality( $germany );
        $lt12->setClass( $light );
        $lt12->setPremium( true );
        $lt12->setReward( false );
        $manager->persist( $lt12 );

        $lt13 = new Tank();
        $lt13->setName( 'PzKpfw 38 nA' );
        $lt13->setTier( $tier4 );
        $lt13->setNationality( $germany );
        $lt13->setClass( $light );
        $lt13->setPremium( false );
        $lt13->setReward( false );
        $manager->persist( $lt13 );

        $lt14 = new Tank();
        $lt14->setName( 'VK 1602 Leopard' );
        $lt14->setTier( $tier5 );
        $lt14->setNationality( $germany );
        $lt14->setClass( $light );
        $lt14->setPremium( false );
        $lt14->setReward( false );
        $manager->persist( $lt14 );

        $lt15 = new Tank();
        $lt15->setName( 'VK 2801' );
        $lt15->setTier( $tier6 );
        $lt15->setNationality( $germany );
        $lt15->setClass( $light );
        $lt15->setPremium( false );
        $lt15->setReward( false );
        $manager->persist( $lt15 );

        $manager->flush();
    }
}