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

        // Light Tanks
        $light1 = new Tank();
        $light1->setName( 'Leichttraktor' );
        $light1->setTier( $tier1 );
        $light1->setNationality( $germany );
        $light1->setClass( $light );
        $light1->setPremium( false );
        $light1->setReward( false );
        $manager->persist( $light1 );

        $light2 = new Tank();
        $light2->setName( 'PzKpfw 35 (t)' );
        $light2->setTier( $tier2 );
        $light2->setNationality( $germany );
        $light2->setClass( $light );
        $light2->setPremium( false );
        $light2->setReward( false );
        $manager->persist( $light2 );

        $light3 = new Tank();
        $light3->setName( 'PzKpfw 38H735 (f)' );
        $light3->setTier( $tier2 );
        $light3->setNationality( $germany );
        $light3->setClass( $light );
        $light3->setPremium( true );
        $light3->setReward( true );
        $manager->persist( $light3 );

        $light4 = new Tank();
        $light4->setName( 'Pz.Kpfw. I' );
        $light4->setTier( $tier2 );
        $light4->setNationality( $germany );
        $light4->setClass( $light );
        $light4->setPremium( false );
        $light4->setReward( false );
        $manager->persist( $light4 );

        $light5 = new Tank();
        $light5->setName( 'PzKpfw II' );
        $light5->setTier( $tier3 );
        $light5->setNationality( $germany );
        $light5->setClass( $light );
        $light5->setPremium( false );
        $light5->setReward( false );
        $manager->persist( $light5 );

        $light6 = new Tank();
        $light6->setName( 'PzKpfw 38 (t)' );
        $light6->setTier( $tier3 );
        $light6->setNationality( $germany );
        $light6->setClass( $light );
        $light6->setPremium( false );
        $light6->setReward( false );
        $manager->persist( $light6 );

        $light7 = new Tank();
        $light7->setName( 'Panzer I Ausf. C' );
        $light7->setTier( $tier3 );
        $light7->setNationality( $germany );
        $light7->setClass( $light );
        $light7->setPremium( false );
        $light7->setReward( false );
        $manager->persist( $light7 );

        $light8 = new Tank();
        $light8->setName( 'Pz.Kpfw. II Ausf. G' );
        $light8->setTier( $tier3 );
        $light8->setNationality( $germany );
        $light8->setClass( $light );
        $light8->setPremium( false );
        $light8->setReward( false );
        $manager->persist( $light8 );

        $light9 = new Tank();
        $light9->setName( 'PzKpfw II Ausf. J' );
        $light9->setTier( $tier3 );
        $light9->setNationality( $germany );
        $light9->setClass( $light );
        $light9->setPremium( true );
        $light9->setReward( true );
        $manager->persist( $light9 );

        $light10 = new Tank();
        $light10->setName( 'PzKpfw II Luchs' );
        $light10->setTier( $tier4 );
        $light10->setNationality( $germany );
        $light10->setClass( $light );
        $light10->setPremium( false );
        $light10->setReward( false );
        $manager->persist( $light10 );

        $light11 = new Tank();
        $light11->setName( 'PzKpfw III Ausf. A' );
        $light11->setTier( $tier3 );
        $light11->setNationality( $germany );
        $light11->setClass( $light );
        $light11->setPremium( false );
        $light11->setReward( false );
        $manager->persist( $light11 );

        $light12 = new Tank();
        $light12->setName( 'T-15' );
        $light12->setTier( $tier3 );
        $light12->setNationality( $germany );
        $light12->setClass( $light );
        $light12->setPremium( true );
        $light12->setReward( false );
        $manager->persist( $light12 );

        $light13 = new Tank();
        $light13->setName( 'PzKpfw 38 nA' );
        $light13->setTier( $tier4 );
        $light13->setNationality( $germany );
        $light13->setClass( $light );
        $light13->setPremium( false );
        $light13->setReward( false );
        $manager->persist( $light13 );

        $light14 = new Tank();
        $light14->setName( 'VK 1602 Leopard' );
        $light14->setTier( $tier5 );
        $light14->setNationality( $germany );
        $light14->setClass( $light );
        $light14->setPremium( false );
        $light14->setReward( false );
        $manager->persist( $light14 );

        $light15 = new Tank();
        $light15->setName( 'VK 2801' );
        $light15->setTier( $tier6 );
        $light15->setNationality( $germany );
        $light15->setClass( $light );
        $light15->setPremium( false );
        $light15->setReward( false );
        $manager->persist( $light15 );

        $manager->flush();
    }
}