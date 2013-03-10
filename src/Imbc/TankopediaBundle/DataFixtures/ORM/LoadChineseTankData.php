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
        return 4;
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

        $tank1 = new Tank();
        $tank1->setName( 'Renault NC-31' );
        $tank1->setTier( $tier1 );
        $tank1->setNationality( $china );
        $tank1->setClass( $light );
        $tank1->setPremium( 0 );
        $tank1->setReward( 0 );
        $manager->persist( $tank1 );

        $tank2 = new Tank();
        $tank2->setName( 'Vickers Mk. E Type B' );
        $tank2->setTier( $tier2 );
        $tank2->setNationality( $china );
        $tank2->setClass( $light );
        $tank2->setPremium( 0 );
        $tank2->setReward( 0 );
        $manager->persist( $tank2 );

        $tank3 = new Tank();
        $tank3->setName( 'Type 2597 Chi-Ha' );
        $tank3->setTier( $tier3 );
        $tank3->setNationality( $china );
        $tank3->setClass( $light );
        $tank3->setPremium( 0 );
        $tank3->setReward( 0 );
        $manager->persist( $tank3 );

        $tank4 = new Tank();
        $tank4->setName( 'M5A1 Stuart' );
        $tank4->setTier( $tier4 );
        $tank4->setNationality( $china );
        $tank4->setClass( $light );
        $tank4->setPremium( 0 );
        $tank4->setReward( 0 );
        $manager->persist( $tank4 );

        $tank5 = new Tank();
        $tank5->setName( '59-16' );
        $tank5->setTier( $tier6 );
        $tank5->setNationality( $china );
        $tank5->setClass( $light );
        $tank5->setPremium( 0 );
        $tank5->setReward( 0 );
        $manager->persist( $tank5 );

        $tank6 = new Tank();
        $tank6->setName( 'Type 62' );
        $tank6->setTier( $tier7 );
        $tank6->setNationality( $china );
        $tank6->setClass( $light );
        $tank6->setPremium( 1 );
        $tank6->setReward( 1 );
        $manager->persist( $tank6 );

        $tank7 = new Tank();
        $tank7->setName( 'WZ-131' );
        $tank7->setTier( $tier7 );
        $tank7->setNationality( $china );
        $tank7->setClass( $light );
        $tank7->setPremium( 0 );
        $tank7->setReward( 0 );
        $manager->persist( $tank7 );

        $tank8 = new Tank();
        $tank8->setName( 'WZ-132' );
        $tank8->setTier( $tier8 );
        $tank8->setNationality( $china );
        $tank8->setClass( $light );
        $tank8->setPremium( 0 );
        $tank8->setReward( 0 );
        $manager->persist( $tank8 );

        $tank9 = new Tank();
        $tank9->setName( 'Type T-34' );
        $tank9->setTier( $tier5 );
        $tank9->setNationality( $china );
        $tank9->setClass( $medium );
        $tank9->setPremium( 0 );
        $tank9->setReward( 0 );
        $manager->persist( $tank9 );

        $tank10 = new Tank();
        $tank10->setName( 'Type 58' );
        $tank10->setTier( $tier6 );
        $tank10->setNationality( $china );
        $tank10->setClass( $medium );
        $tank10->setPremium( 0 );
        $tank10->setReward( 0 );
        $manager->persist( $tank10 );

        $tank11 = new Tank();
        $tank11->setName( 'T-34-1' );
        $tank11->setTier( $tier7 );
        $tank11->setNationality( $china );
        $tank11->setClass( $medium );
        $tank11->setPremium( 0 );
        $tank11->setReward( 0 );
        $manager->persist( $tank11 );

        $tank12 = new Tank();
        $tank12->setName( 'T-34-2' );
        $tank12->setTier( $tier8 );
        $tank12->setNationality( $china );
        $tank12->setClass( $medium );
        $tank12->setPremium( 0 );
        $tank12->setReward( 0 );
        $manager->persist( $tank12 );

        $tank13 = new Tank();
        $tank13->setName( 'Type 59' );
        $tank13->setTier( $tier8 );
        $tank13->setNationality( $china );
        $tank13->setClass( $medium );
        $tank13->setPremium( 1 );
        $tank13->setReward( 1 );
        $manager->persist( $tank13 );

        $tank14 = new Tank();
        $tank14->setName( 'Type 59 G' );
        $tank14->setTier( $tier8 );
        $tank14->setNationality( $china );
        $tank14->setClass( $light );
        $tank14->setPremium( 1 );
        $tank14->setReward( 1 );
        $manager->persist( $tank14 );

        $tank15 = new Tank();
        $tank15->setName( 'WZ-120' );
        $tank15->setTier( $tier9 );
        $tank15->setNationality( $china );
        $tank15->setClass( $medium );
        $tank15->setPremium( 0 );
        $tank15->setReward( 0 );
        $manager->persist( $tank15 );

        $tank16 = new Tank();
        $tank16->setName( '121' );
        $tank16->setTier( $tier10 );
        $tank16->setNationality( $china );
        $tank16->setClass( $medium );
        $tank16->setPremium( 0 );
        $tank16->setReward( 0 );
        $manager->persist( $tank16 );

        $tank17 = new Tank();
        $tank17->setName( 'IS-2' );
        $tank17->setTier( $tier7 );
        $tank17->setNationality( $china );
        $tank17->setClass( $heavy );
        $tank17->setPremium( 0 );
        $tank17->setReward( 0 );
        $manager->persist( $tank17 );

        $tank18 = new Tank();
        $tank18->setName( '110' );
        $tank18->setTier( $tier8 );
        $tank18->setNationality( $china );
        $tank18->setClass( $heavy );
        $tank18->setPremium( 0 );
        $tank18->setReward( 0 );
        $manager->persist( $tank18 );

        $tank19 = new Tank();
        $tank19->setName( 'WZ-111' );
        $tank19->setTier( $tier8 );
        $tank19->setNationality( $china );
        $tank19->setClass( $heavy );
        $tank19->setPremium( 1 );
        $tank19->setReward( 1 );
        $manager->persist( $tank19 );

        $tank20 = new Tank();
        $tank20->setName( 'WZ-111 model 1-4' );
        $tank20->setTier( $tier9 );
        $tank20->setNationality( $china );
        $tank20->setClass( $heavy );
        $tank20->setPremium( 0 );
        $tank20->setReward( 0 );
        $manager->persist( $tank20 );

        $tank21 = new Tank();
        $tank21->setName( '113' );
        $tank21->setTier( $tier10 );
        $tank21->setNationality( $china );
        $tank21->setClass( $heavy );
        $tank21->setPremium( 0 );
        $tank21->setReward( 0 );
        $manager->persist( $tank21 );

        $manager->flush();
    }
}