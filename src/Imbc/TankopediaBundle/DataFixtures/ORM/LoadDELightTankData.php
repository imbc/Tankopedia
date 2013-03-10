<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Tank;

class LoadDELightTankData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 5;
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
        // ref for nationality
        $germany = $this->getReference( 'de' );

        // Light Tanks
        $tank1 = new Tank();
        $tank1->setName( 'Leichttraktor' );
        $tank1->setTier( $tier1 );
        $tank1->setNationality( $germany );
        $tank1->setClass( $light );
        $tank1->setPremium( 0 );
        $tank1->setReward( 0 );
        $manager->persist( $tank1 );

        $tank2 = new Tank();
        $tank2->setName( 'PzKpfw 35 (t)' );
        $tank2->setTier( $tier2 );
        $tank2->setNationality( $germany );
        $tank2->setClass( $light );
        $tank2->setPremium( 0 );
        $tank2->setReward( 0 );
        $manager->persist( $tank2 );

        $tank3 = new Tank();
        $tank3->setName( 'PzKpfw 38H735 (f)' );
        $tank3->setTier( $tier2 );
        $tank3->setNationality( $germany );
        $tank3->setClass( $light );
        $tank3->setPremium( 1 );
        $tank3->setReward( 1 );
        $manager->persist( $tank3 );

        $tank4 = new Tank();
        $tank4->setName( 'Pz.Kpfw. I' );
        $tank4->setTier( $tier2 );
        $tank4->setNationality( $germany );
        $tank4->setClass( $light );
        $tank4->setPremium( 0 );
        $tank4->setReward( 0 );
        $manager->persist( $tank4 );

        $tank5 = new Tank();
        $tank5->setName( 'PzKpfw II' );
        $tank5->setTier( $tier3 );
        $tank5->setNationality( $germany );
        $tank5->setClass( $light );
        $tank5->setPremium( 0 );
        $tank5->setReward( 0 );
        $manager->persist( $tank5 );

        $tank6 = new Tank();
        $tank6->setName( 'PzKpfw 38 (t)' );
        $tank6->setTier( $tier3 );
        $tank6->setNationality( $germany );
        $tank6->setClass( $light );
        $tank6->setPremium( 0 );
        $tank6->setReward( 0 );
        $manager->persist( $tank6 );

        $tank7 = new Tank();
        $tank7->setName( 'Panzer I Ausf. C' );
        $tank7->setTier( $tier3 );
        $tank7->setNationality( $germany );
        $tank7->setClass( $light );
        $tank7->setPremium( 0 );
        $tank7->setReward( 0 );
        $manager->persist( $tank7 );

        $tank8 = new Tank();
        $tank8->setName( 'Pz.Kpfw. II Ausf. G' );
        $tank8->setTier( $tier3 );
        $tank8->setNationality( $germany );
        $tank8->setClass( $light );
        $tank8->setPremium( 0 );
        $tank8->setReward( 0 );
        $manager->persist( $tank8 );

        $tank9 = new Tank();
        $tank9->setName( 'PzKpfw II Ausf. J' );
        $tank9->setTier( $tier3 );
        $tank9->setNationality( $germany );
        $tank9->setClass( $light );
        $tank9->setPremium( 1 );
        $tank9->setReward( 1 );
        $manager->persist( $tank9 );

        $tank10 = new Tank();
        $tank10->setName( 'PzKpfw II Luchs' );
        $tank10->setTier( $tier4 );
        $tank10->setNationality( $germany );
        $tank10->setClass( $light );
        $tank10->setPremium( 0 );
        $tank10->setReward( 0 );
        $manager->persist( $tank10 );

        $tank11 = new Tank();
        $tank11->setName( 'PzKpfw III Ausf. A' );
        $tank11->setTier( $tier3 );
        $tank11->setNationality( $germany );
        $tank11->setClass( $light );
        $tank11->setPremium( 0 );
        $tank11->setReward( 0 );
        $manager->persist( $tank11 );

        $tank12 = new Tank();
        $tank12->setName( 'T-15' );
        $tank12->setTier( $tier3 );
        $tank12->setNationality( $germany );
        $tank12->setClass( $light );
        $tank12->setPremium( 1 );
        $tank12->setReward( 0 );
        $manager->persist( $tank12 );

        $tank13 = new Tank();
        $tank13->setName( 'PzKpfw 38 nA' );
        $tank13->setTier( $tier4 );
        $tank13->setNationality( $germany );
        $tank13->setClass( $light );
        $tank13->setPremium( 0 );
        $tank13->setReward( 0 );
        $manager->persist( $tank13 );

        $tank14 = new Tank();
        $tank14->setName( 'VK 1602 Leopard' );
        $tank14->setTier( $tier5 );
        $tank14->setNationality( $germany );
        $tank14->setClass( $light );
        $tank14->setPremium( 0 );
        $tank14->setReward( 0 );
        $manager->persist( $tank14 );

        $tank15 = new Tank();
        $tank15->setName( 'VK 2801' );
        $tank15->setTier( $tier5 );
        $tank15->setNationality( $germany );
        $tank15->setClass( $light );
        $tank15->setPremium( 0 );
        $tank15->setReward( 0 );
        $manager->persist( $tank15 );

        $manager->flush();
    }
}