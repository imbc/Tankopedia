<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Engine;

class LoadChineseEngineData extends AbstractFixture implements OrderedFixtureInterface
{

    public function getOrder()
    {
        return 21;
    }

    public function load( ObjectManager $manager )
    {
        $tankRepo = $manager->getRepository( 'ImbcTankopediaBundle:Tank' );
        $gazoline = \Imbc\TankopediaBundle\Entity\Engine::gazoline;
        $diesel = \Imbc\TankopediaBundle\Entity\Engine::diesel;
//        ref for tier
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
//         ref for nationality
        $nationality = $this->getReference( 'cn' );

        // Name, Tier, Nationality, Price, Weight, Power, Chance of Fire, Fuel Type, Compatibility
        $engine1 = new Engine( 'Renault M26/27', $tier1, $nationality, 0, 266, 45, 20, $gazoline );
        $engine1->addTank( $tankRepo->getTankByName( 'Renault NC-31' ));
        $manager->persist( $engine1 );

        $engine2 = new Engine( 'Renault 62CV', $tier1, $nationality, 350, 266, 62, 20, $gazoline );
        $engine2->addTank( $tankRepo->getTankByName( 'Renault NC-31' ));
        $manager->persist( $engine2 );

        $engine3 = new Engine( 'Renault NC-2', $tier1, $nationality, 370, 266, 75, 20, $gazoline );
        $engine3->addTank( $tankRepo->getTankByName( 'Renault NC-31' ));
        $manager->persist( $engine3 );

        $engine4 = new Engine( 'Armstrong Siddeley V4', $tier1, $nationality, 770, 545, 92, 20, $diesel );
        $engine4->addTank( $tankRepo->getTankByName( 'Vickers Mk. E Type B' ));
        $manager->persist( $engine4 );

        $engine5 = new Engine( 'Franklin', $tier2, $nationality, 800, 266, 100, 20, $diesel );
        $engine5->addTank( $tankRepo->getTankByName( 'Vickers Mk. E Type B' ));
        $manager->persist( $engine5 );

        $engine6 = new Engine( 'Mitsubishi Type 97', $tier3, $nationality, 5000, 750, 170, 15, $diesel );
        $engine6->addTank( $tankRepo->getTankByName( 'Type 2597 Chi-Ha' ));
        $manager->persist( $engine6 );

        $engine7 = new Engine( 'Type 100 V-12 W', $tier4, $nationality, 8600, 750, 200, 15, $diesel );
        $engine7->addTank( $tankRepo->getTankByName( 'Type 2597 Chi-Ha' ));
        $manager->persist( $engine7 );

        $engine8 = new Engine( 'Type 100 V-12 A', $tier4, $nationality, 10500, 750, 240, 15, $diesel );
        $engine8->addTank( $tankRepo->getTankByName( 'Type 2597 Chi-Ha' ));
        $manager->persist( $engine8 );

        $engine9 = new Engine( 'Twin Cadillac, Series 42', $tier4, $nationality, 10350, 530, 296, 20, $diesel );
        $engine9->addTank( $tankRepo->getTankByName( 'M5A1 Stuart' ));
        $manager->persist( $engine9 );

        $engine10 = new Engine( 'Continental R-975-C1', $tier4, $nationality, 10500, 516, 400, 20, $diesel );
        $engine10->addTank( $tankRepo->getTankByName( 'M5A1 Stuart' ));
        $manager->persist( $engine10 );

        $engine11 = new Engine( 'V-2', $tier5, $nationality, 18750, 750, 480, 15, $diesel );
        $engine11->addTank( $tankRepo->getTankByName( 'Type T-34' ));
        $manager->persist( $engine11 );

        $engine12 = new Engine( 'Type 102', $tier5, $nationality, 10000, 700, 400, 12, $diesel );
        $engine12->addTank( $tankRepo->getTankByName( '59-16' ));
        $manager->persist( $engine12 );

        $engine13 = new Engine( '12150L-3', $tier5, $nationality, 17000, 700, 430, 12, $diesel );
        $engine13->addTank( $tankRepo->getTankByName( '59-16' ));
        $engine13->addTank( $tankRepo->getTankByName( 'WZ-131' ));
        $manager->persist( $engine13 );

        $engine14 = new Engine( 'V-2-34', $tier6, $nationality, 27860, 750, 500, 15, $diesel );
        $engine14->addTank( $tankRepo->getTankByName( 'Type T-34' ));
        $engine14->addTank( $tankRepo->getTankByName( 'Type 58' ));
        $manager->persist( $engine14 );

        $engine15 = new Engine( 'Type 102S', $tier7, $nationality, 15000, 750, 480, 12, $diesel );
        $engine15->addTank( $tankRepo->getTankByName( 'T-34-1' ));
        $manager->persist( $engine15 );

        $engine16 = new Engine( 'Type 102S1', $tier7, $nationality, 38000, 750, 500, 12, $diesel );
        $engine16->addTank( $tankRepo->getTankByName( 'Type 58' ));
        $engine16->addTank( $tankRepo->getTankByName( 'T-34-1' ));
        $engine16->addTank( $tankRepo->getTankByName( 'T-34-2' ));
        $manager->persist( $engine16 );

        $engine17 = new Engine( '12150L-3', $tier7, $nationality,  0, 700, 430, 12, $diesel );
        $engine17->addTank( $tankRepo->getTankByName( 'Type 62' ));
        $manager->persist( $engine17 );

        $engine18 = new Engine( '12150L', $tier8, $nationality, 48000, 750, 520, 12, $diesel );
        $engine18->addTank( $tankRepo->getTankByName( 'WZ-131' ));
        $engine18->addTank( $tankRepo->getTankByName( 'WZ-132' ));
        $engine18->addTank( $tankRepo->getTankByName( 'Type 58' ));
        $engine18->addTank( $tankRepo->getTankByName( 'T-34-1' ));
        $engine18->addTank( $tankRepo->getTankByName( 'T-34-2' ));
        $engine18->addTank( $tankRepo->getTankByName( 'WZ-120' ));
        $engine18->addTank( $tankRepo->getTankByName( 'IS-2' ));
        $engine18->addTank( $tankRepo->getTankByName( '110' ));
        $manager->persist( $engine18 );

        $engine19 = new Engine( '8V135', $tier8, $nationality, 43000, 740, 520, 12, $diesel );
        $engine19->addTank( $tankRepo->getTankByName( 'WZ-132' ));
        $manager->persist( $engine19 );

        $engine20 = new Engine( 'NORINCO 12150L', $tier8, $nationality,  0, 750, 520, 12, $diesel );
        $engine20->addTank( $tankRepo->getTankByName( 'WZ-111' ));
        $manager->persist( $engine20 );

        $engine21 = new Engine( 'NORINCO 12150L7', $tier9, $nationality,  0, 750, 520, 12, $diesel );
        $engine21->addTank( $tankRepo->getTankByName( 'Type 59' ));
        $manager->persist( $engine21 );

        $engine22 = new Engine( '12150LS', $tier9, $nationality, 99500, 750, 580, 12, $diesel );
        $engine22->addTank( $tankRepo->getTankByName( 'T-34-2' ));
        $engine22->addTank( $tankRepo->getTankByName( 'WZ-120' ));
        $engine22->addTank( $tankRepo->getTankByName( 'IS-2' ));
        $engine22->addTank( $tankRepo->getTankByName( '110' ));
        $engine22->addTank( $tankRepo->getTankByName( 'WZ-111 model 1-4' ));
        $manager->persist( $engine22 );

        $engine23 = new Engine( '12150LT', $tier10, $nationality, 120000, 750, 600, 12, $diesel );
        $engine23->addTank( $tankRepo->getTankByName( 'WZ-120' ));
        $engine23->addTank( $tankRepo->getTankByName( 'WZ-111 model 1-4' ));
        $manager->persist( $engine23 );

        $engine24 = new Engine( '12150L7', $tier10, $nationality, 25000, 935, 580, 12, $diesel );
        $engine24->addTank( $tankRepo->getTankByName( '121' ));
        $manager->persist( $engine24 );

        $engine25 = new Engine( 'V-2-54SC', $tier10, $nationality, 25000, 1045, 750, 12, $diesel );
        $engine25->addTank( $tankRepo->getTankByName( '113' ));
        $manager->persist( $engine25 );

        $manager->flush();
    }
}