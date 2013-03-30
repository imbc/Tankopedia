<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Engine;

class LoadRussianEngineData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 17;
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
        $nationality = $this->getReference( 'ussr' );

        $engine1 = new Engine( 'AMO-3', $tier1, $nationality, 340, 920, 70, 20, $gazoline );
        $engine1->addTank( $tankRepo->getTankByName( 'MS-1' ));
        $engine1->addTank( $tankRepo->getTankByName( 'SU-18' ));
        $manager->persist( $engine1 );

        $engine2 = new Engine( 'GAZ-M1', $tier1, $nationality, 310, 215, 55, 20, $gazoline );
        $engine2->addTank( $tankRepo->getTankByName( 'MS-1' ));
        $engine2->addTank( $tankRepo->getTankByName( 'SU-18' ));
        $manager->persist( $engine2 );

        $engine3 = new Engine( 'MS-1', $tier1, $nationality, 0, 266, 43, 20, $gazoline );
        $engine3->addTank( $tankRepo->getTankByName( 'MS-1' ));
        $engine3->addTank( $tankRepo->getTankByName( 'SU-18' ));
        $manager->persist( $engine3 );

        $engine4 = new Engine( 'T-26', $tier1, $nationality , 770, 545, 90, 20, $gazoline);
        $engine4->addTank( $tankRepo->getTankByName( 'AT-1' ));
        $engine4->addTank( $tankRepo->getTankByName( 'T-26' ));
        $engine4->addTank( $tankRepo->getTankByName( 'SU-26' ));
        $engine4->addTank( $tankRepo->getTankByName( 'SU-5' ));
        $manager->persist( $engine4 );

        $engine5 = new Engine( 'GAZ-11', $tier2, $nationality, 810, 275, 80, 20, $gazoline );
        $engine5->addTank( $tankRepo->getTankByName( 'SU-76' ));
        $manager->persist( $engine5 );

        $engine6 = new Engine( 'T-26F', $tier2, $nationality, 1500, 545, 130, 20, $gazoline );
        $engine6->addTank( $tankRepo->getTankByName( 'AT-1' ));
        $engine6->addTank( $tankRepo->getTankByName( 'T-26' ));
        $engine6->addTank( $tankRepo->getTankByName( 'SU-26' ));
        $engine6->addTank( $tankRepo->getTankByName( 'SU-5' ));
        $manager->persist( $engine6 );

        $engine7 = new Engine( 'T-26M', $tier2, $nationality, 1230, 545, 100, 20, $gazoline );
        $engine7->addTank( $tankRepo->getTankByName( 'AT-1' ));
        $engine7->addTank( $tankRepo->getTankByName( 'T-26' ));
        $engine7->addTank( $tankRepo->getTankByName( 'SU-26' ));
        $engine7->addTank( $tankRepo->getTankByName( 'SU-5' ));
        $manager->persist( $engine7 );

        $engine8 = new Engine( 'AEC3', $tier3, $nationality, 0, 400, 274, 15, $gazoline );
        $engine8->addTank( $tankRepo->getTankByName( 'Matilda IV' ));
        $manager->persist( $engine8 );

        $engine9 = new Engine( 'AEC-A190', $tier3, $nationality, 0, 800, 140, 15, $gazoline );
        $engine9->addTank( $tankRepo->getTankByName( 'Valentine II' ));
        $manager->persist( $engine9 );

        $engine10 = new Engine( 'GAZ-203', $tier3, $nationality, 3830, 362, 140, 20, $gazoline );
        $engine10->addTank( $tankRepo->getTankByName( 'SU-76' ));
        $engine10->addTank( $tankRepo->getTankByName( 'SU-85B' ));
        $manager->persist( $engine10 );

        $engine11 = new Engine( 'GAZ-203F', $tier3, $nationality, 4120, 362, 158, 20, $gazoline );
        $engine11->addTank( $tankRepo->getTankByName( 'SU-85B' ));
        $manager->persist( $engine11 );

        $engine12 = new Engine( 'GMC', $tier3, $nationality, 4500, 400, 210, 15, $diesel );
        $engine12->addTank( $tankRepo->getTankByName( 'SU-85B' ));
        $manager->persist( $engine12 );

        $engine13 = new Engine( 'M-80', $tier3, $nationality, 4130, 362, 170, 20, $gazoline );
        $engine13->addTank( $tankRepo->getTankByName( 'SU-76' ));
        $manager->persist( $engine13 );

        $engine14 = new Engine( 'Medous MAT', $tier3, $nationality, 0, 362, 180, 20, $gazoline );
        $engine14->addTank( $tankRepo->getTankByName( 'Tetrarch' ));
        $manager->persist( $engine14 );

        $engine15 = new Engine( 'Continental W-670', $tier4, $nationality, 0, 256, 268, 20, $gazoline );
        $engine15->addTank( $tankRepo->getTankByName( 'M3 Stuart Lend Lease' ));
        $manager->persist( $engine15 );

        $engine16 = new Engine( 'D-744', $tier4, $nationality, 0, 500, 250, 15, $diesel );
        $engine16->addTank( $tankRepo->getTankByName( 'T-127' ));
        $manager->persist( $engine16 );

        $engine17 = new Engine( 'M-17F', $tier4, $nationality, 13460, 500, 20, $gazoline );
        $engine17->addTank( $tankRepo->getTankByName( 'BT-7' ));
        $engine17->addTank( $tankRepo->getTankByName( 'T-28' ));
        $engine17->addTank( $tankRepo->getTankByName( 'KV-1' ));
        $engine17->addTank( $tankRepo->getTankByName( 'SU-8' ));
        $engine17->addTank( $tankRepo->getTankByName( 'KV-2' ));
        $manager->persist( $engine17 );

        $engine18 = new Engine( 'M-17FO', $tier4, $nationality, 0, 610, 500, 20, $gazoline );
        $engine18->addTank( $tankRepo->getTankByName( 'BT-SV' ));
        $manager->persist( $engine18 );

        $engine19 = new Engine( 'M-17T', $tier4, $nationality, 10770, 610, 450, 20, $gazoline );
        $engine19->addTank( $tankRepo->getTankByName( 'BT-2' ));
        $engine19->addTank( $tankRepo->getTankByName( 'BT-7' ));
        $engine19->addTank( $tankRepo->getTankByName( 'T-28' ));
        $engine19->addTank( $tankRepo->getTankByName( 'KV-1' ));
        $engine19->addTank( $tankRepo->getTankByName( 'SU-8' ));
        $manager->persist( $engine19 );

        $engine20 = new Engine( 'M-5-400', $tier4, $nationality, 10230, 410, 400, 20, $gazoline );
        $engine20->addTank( $tankRepo->getTankByName( 'BT-2' ));
        $engine20->addTank( $tankRepo->getTankByName( 'T-28' ));
        $manager->persist( $engine20 );

        $engine21 = new Engine( 'M-5-400F', $tier4, $nationality, 10000, 410, 440, 20, $gazoline );
        $engine21->addTank( $tankRepo->getTankByName( 'SU-8' ));
        $manager->persist( $engine21 );

        $engine22 = new Engine( 'MT-5-1', $tier4, $nationality, 10200, 920, 350, 20, $gazoline );
        $engine22->addTank( $tankRepo->getTankByName( 'T-46' ));
        $manager->persist( $engine22 );

        $engine23 = new Engine( 'Maybach HL 120 TRM', $tier4, $nationality, 0, 510, 440, 20, $gazoline );
        $engine23->addTank( $tankRepo->getTankByName( 'SU-85I' ));
        $manager->persist( $engine23 );

        $engine24 = new Engine( 'V-4', $tier4, $nationality, 9000, 500, 300, 15, $diesel );
        $engine24->addTank( $tankRepo->getTankByName( 'T-46' ));
        $engine24->addTank( $tankRepo->getTankByName( 'T-50' ));
        $engine24->addTank( $tankRepo->getTankByName( 'T-50-2' ));
        $manager->persist( $engine24 );

        $engine25 = new Engine( 'BD-2', $tier5, $nationality, 0, 750, 540, 15, $diesel );
        $engine25->addTank( $tankRepo->getTankByName( 'A-32' ));
        $manager->persist( $engine25 );

        $engine26 = new Engine( 'Bedford Twin-Six', $tier5, $nationality, 0, 1531, 374, 15, $gazoline );
        $engine26->addTank( $tankRepo->getTankByName( 'Churchill III' ));
        $manager->persist( $engine26 );

        $engine27 = new Engine( 'M-5-400F Bis', $tier5, $nationality, 16100, 410, 440, 20, $gazoline );
        $engine27->addTank( $tankRepo->getTankByName( 'T-50' ));
        $engine27->addTank( $tankRepo->getTankByName( 'T-50-2' ));
        $manager->persist( $engine27 );

        $engine28 = new Engine( 'V-2', $tier5, $nationality, 18750, 750, 480, 15, $diesel );
        $engine28->addTank( $tankRepo->getTankByName( 'BT-7' ));
        $engine28->addTank( $tankRepo->getTankByName( 'A-20' ));
        $engine28->addTank( $tankRepo->getTankByName( 'T-34' ));
        $engine28->addTank( $tankRepo->getTankByName( 'SU-85' ));
        $manager->persist( $engine28 );

        $engine29 = new Engine( 'M-17E', $tier6, $nationality, 29300, 610, 550, 20, $gazoline );
        $engine29->addTank( $tankRepo->getTankByName( 'T-50' ));
        $engine29->addTank( $tankRepo->getTankByName( 'T-50-2' ));
        $manager->persist( $engine29 );

        $engine30 = new Engine( 'V-2-34', $tier6, $nationality, 27860, 750, 500, 15, $diesel );
        $engine30->addTank( $tankRepo->getTankByName( 'A-20' ));
        $engine30->addTank( $tankRepo->getTankByName( 'T-34' ));
        $engine30->addTank( $tankRepo->getTankByName( 'SU-85' ));
        $engine30->addTank( $tankRepo->getTankByName( 'SU-100' ));
        $engine30->addTank( $tankRepo->getTankByName( 'T-34-85' ));
        $engine30->addTank( $tankRepo->getTankByName( 'SU-100M1' ));
        $manager->persist( $engine30 );

        $engine31 = new Engine( 'V-2-34M', $tier6, $nationality, 29500, 750, 520, 15, $diesel );
        $engine31->addTank( $tankRepo->getTankByName( 'SU-100' ));
        $engine31->addTank( $tankRepo->getTankByName( 'T-34-85' ));
        $engine31->addTank( $tankRepo->getTankByName( 'T-43' ));
        $engine31->addTank( $tankRepo->getTankByName( 'SU-100M1' ));
        $manager->persist( $engine31 );

        $engine32 = new Engine( 'V-2K', $tier6, $nationality, 23050, 750, 500, 15, $diesel );
        $engine32->addTank( $tankRepo->getTankByName( 'KV-1' ));
        $engine32->addTank( $tankRepo->getTankByName( 'T-150' ));
        $engine32->addTank( $tankRepo->getTankByName( 'KV-1S' ));
        $engine32->addTank( $tankRepo->getTankByName( 'KV-2' ));
        $engine32->addTank( $tankRepo->getTankByName( 'S-51' ));
        $engine32->addTank( $tankRepo->getTankByName( 'SU-14' ));
        $engine32->addTank( $tankRepo->getTankByName( 'SU-152' ));
        $engine32->addTank( $tankRepo->getTankByName( 'KV-13' ));
        $manager->persist( $engine32 );

        $engine33 = new Engine( 'V-2KT', $tier6, $nationality, 0, 700, 650, 15, $diesel );
        $engine33->addTank( $tankRepo->getTankByName( 'KV-220 Beta-Test' ));
        $engine33->addTank( $tankRepo->getTankByName( 'KV-220' ));
        $manager->persist( $engine33 );

        $engine34 = new Engine( 'V-44', $tier6, $nationality, 0, 750, 500, 15, $diesel );
        $engine34->addTank( $tankRepo->getTankByName( 'SU-122-44' ));
        $manager->persist( $engine34 );

        $engine35 = new Engine( 'V-5', $tier6, $nationality, 27860, 700, 560, 15, $diesel );
        $engine35->addTank( $tankRepo->getTankByName( 'T-150' ));
        $engine35->addTank( $tankRepo->getTankByName( 'KV-2' ));
        $engine35->addTank( $tankRepo->getTankByName( 'KV-3' ));
        $manager->persist( $engine35 );

        $engine36 = new Engine( 'V-5U', $tier6, $nationality, 27860, 700, 580, 15, $diesel );
        $engine36->addTank( $tankRepo->getTankByName( 'Object 212' ));
        $manager->persist( $engine36 );

        $engine37 = new Engine( 'V-2IS', $tier7, $nationality, 36000, 750, 600, 15, $diesel );
        $engine37->addTank( $tankRepo->getTankByName( 'KV-1S' ));
        $engine37->addTank( $tankRepo->getTankByName( 'S-51' ));
        $engine37->addTank( $tankRepo->getTankByName( 'SU-14' ));
        $engine37->addTank( $tankRepo->getTankByName( 'SU-152' ));
        $engine37->addTank( $tankRepo->getTankByName( 'KV-13' ));
        $engine37->addTank( $tankRepo->getTankByName( 'KV-3' ));
        $engine37->addTank( $tankRepo->getTankByName( 'IS' ));
        $engine37->addTank( $tankRepo->getTankByName( 'Object 212' ));
        $engine37->addTank( $tankRepo->getTankByName( 'ISU-152' ));
        $manager->persist( $engine37 );

        $engine38 = new Engine( 'V-5F', $tier7, $nationality, 39000, 750, 700, 15, $diesel );
        $engine38->addTank( $tankRepo->getTankByName( 'T-150' ));
        $manager->persist( $engine38 );

        $engine39 = new Engine( 'V-11', $tier8 , $nationality , 55270, 750, 650, 15, $diesel);
        $engine39->addTank( $tankRepo->getTankByName( 'IS-3' ));
        $engine39->addTank( $tankRepo->getTankByName( 'Object 261' ));
        $engine39->addTank( $tankRepo->getTankByName( 'ST-I' ));
        $engine39->addTank( $tankRepo->getTankByName( 'Object 704' ));
        $manager->persist( $engine39 );

        $engine40 = new Engine( 'V-2-44', $tier8, $nationality, 49740, 750, 560, 12, $diesel );
        $engine40->addTank( $tankRepo->getTankByName( 'T-43' ));
        $engine40->addTank( $tankRepo->getTankByName( 'T-44' ));
        $engine40->addTank( $tankRepo->getTankByName( 'SU-101' ));
        $manager->persist( $engine40 );

        $engine41 = new Engine( 'V-2SN', $tier8, $nationality, 17000, 750, 750, 15, $diesel );
        $engine41->addTank( $tankRepo->getTankByName( 'KV-3' ));
        $manager->persist( $engine41 );

        $engine42 = new Engine( 'V-54K', $tier8, $nationality, 58000, 750, 600, 12, $diesel );
        $engine42->addTank( $tankRepo->getTankByName( 'T-34-85' ));
        $engine42->addTank( $tankRepo->getTankByName( 'T-43' ));
        $engine42->addTank( $tankRepo->getTankByName( 'SU-100M1' ));
        $manager->persist( $engine42 );

        $engine43 = new Engine( 'M-50TD', $tier9, $nationality, 98000, 700, 950, 15, $diesel );
        $engine43->addTank( $tankRepo->getTankByName( 'Object 261' ));
        $manager->persist( $engine43 );

        $engine44 = new Engine( 'M-50D', $tier9 , $nationality, 0, 700, 1200, 15, $diesel );
        $engine44->addTank( $tankRepo->getTankByName( 'KV-5' ));
        $manager->persist( $engine44 );

        $engine45 = new Engine( 'M-40', $tier9, $nationality, 85000, 1250, 1000, 15, $diesel );
        $engine45->addTank( $tankRepo->getTankByName( 'KV-4' ));
        $manager->persist( $engine45 );

        $engine46 = new Engine( 'M-50D', $tier9, $nationality, 87000, 700, 900, 15, $diesel );
        $engine46->addTank( $tankRepo->getTankByName( 'Object 261' ));
        $manager->persist( $engine46 );

        $engine47 = new Engine( 'V-12-5', $tier9, $nationality, 84000, 1024, 700, 15, $diesel );
        $engine47->addTank( $tankRepo->getTankByName( 'IS-8' ));
        $manager->persist( $engine47 );

        $engine48 = new Engine( 'V-12-6', $tier9, $nationality, 84200, 1024, 750, 15, $diesel );
        $engine48->addTank( $tankRepo->getTankByName( 'IS-8' ));
        $manager->persist( $engine48 );

        $engine49 = new Engine( 'V-12 A', $tier9, $nationality, 0, 750, 700, 15, $diesel );
        $engine49->addTank( $tankRepo->getTankByName( 'IS-6' ));
        $manager->persist( $engine49 );

        $engine50 = new Engine( 'V-12P', $tier9, $nationality, 84000, 1024, 700, 15, $diesel );
        $engine50->addTank( $tankRepo->getTankByName( 'ST-I' ));
        $manager->persist( $engine50 );

        $engine51 = new Engine( 'V-2-54', $tier9, $nationality, 79290, 700, 620, 12, $diesel );
        $engine51->addTank( $tankRepo->getTankByName( 'T-44' ));
        $engine51->addTank( $tankRepo->getTankByName( 'SU-101' ));
        $engine51->addTank( $tankRepo->getTankByName( 'T-54' ));
        $engine51->addTank( $tankRepo->getTankByName( 'SU-122-54' ));
        $manager->persist( $engine51 );

        $engine52 = new Engine( 'V-2-54IS', $tier9, $nationality, 79290, 700, 700, 12, $diesel );
        $engine52->addTank( $tankRepo->getTankByName( 'IS' ));
        $engine52->addTank( $tankRepo->getTankByName( 'ISU-152' ));
        $engine52->addTank( $tankRepo->getTankByName( 'IS-3' ));
        $engine52->addTank( $tankRepo->getTankByName( 'Object 704' ));
        $manager->persist( $engine52 );

        $engine53 = new Engine( '2x V-2K-F', $tier9, $nationality, 87500, 1500, 1200, 15, $diesel );
        $engine53->addTank( $tankRepo->getTankByName( 'KV-4' ));
        $manager->persist( $engine53 );

        $engine54 = new Engine( 'V-54-6', $tier9, $nationality, 82300, 700, 680, 12, $diesel );
        $engine54->addTank( $tankRepo->getTankByName( 'T-44' ));
        $engine54->addTank( $tankRepo->getTankByName( 'SU-101' ));
        $manager->persist( $engine54 );

        $engine55 = new Engine( 'V-14', $tier9, $nationality, 82300, 700, 700, 12, $diesel );
        $engine55->addTank( $tankRepo->getTankByName( 'T-54' ));
        $engine55->addTank( $tankRepo->getTankByName( 'SU-122-54' ));
        $manager->persist( $engine55 );

        $engine56 = new Engine( 'M-50T', $tier10, $nationality, 132000, 700, 1050, 15, $diesel );
        $engine56->addTank( $tankRepo->getTankByName( 'Object 263' ));
        $engine56->addTank( $tankRepo->getTankByName( 'IS-7' ));
        $manager->persist( $engine56 );

        $engine57 = new Engine( 'V-12', $tier10, $nationality, 128000, 1024, 750, 15, $diesel );
        $engine57->addTank( $tankRepo->getTankByName( 'IS-4' ));
        $manager->persist( $engine57 );

        $engine58 = new Engine( 'V-16FN', $tier10, $nationality, 84200, 1024, 800, 12, $diesel );
        $engine58->addTank( $tankRepo->getTankByName( 'Object 268' ));
        $manager->persist( $engine58 );

        $engine59 = new Engine( 'V-55', $tier10, $nationality, 132000, 700, 580, 10, $diesel );
        $engine59->addTank( $tankRepo->getTankByName( 'T-62A' ));
        $manager->persist( $engine59 );

        $manager->flush();
    }
}