<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM\Engine;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Engine;

class LoadAmericanEngineData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 16;
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
        $nationality = $this->getReference( 'usa' );

        $engine1 = new Engine( 'Cunningham V-type', $tier1, $nationality, 0, 200, 110, 20, $gazoline );
        $engine1->addTank( $tankRepo->getTankByName( 'T1 Cunningham' ));
        $manager->persist( $engine1 );

        $engine2 = new Engine( 'Cunningham V8', $tier2, $nationality, 650, 300, 132, 20, $gazoline );
        $engine2->addTank( $tankRepo->getTankByName( 'T1 Cunningham' ));
        $manager->persist( $engine2 );

        $engine3 = new Engine( 'Liberty', $tier2, $nationality, 990, 450, 330, 20, $gazoline );
        $engine3->addTank( $tankRepo->getTankByName( 'T2 Medium Tank' ));
        $manager->persist( $engine3 );

        $engine4 = new Engine( 'Continental R670-7', $tier3, $nationality, 2000, 256, 250, 20, $gazoline );
        $engine4->addTank( $tankRepo->getTankByName( 'M2 Light Tank' ));
        $manager->persist( $engine4 );

        $engine5 = new Engine( 'Continental W-670', $tier3, $nationality, 8200, 256, 268, 20, $gazoline );
        $engine5->addTank( $tankRepo->getTankByName( 'T18' ));
        $engine5->addTank( $tankRepo->getTankByName( 'T57' ));
        $engine5->addTank( $tankRepo->getTankByName( 'T82' ));
        $engine5->addTank( $tankRepo->getTankByName( 'M3 Stuart' ));
        $manager->persist( $engine5 );

        $engine6 = new Engine( 'Continental W-670-7', $tier3, $nationality, 5600, 256, 262, 20, $gazoline );
        $engine6->addTank( $tankRepo->getTankByName( 'M2 Light Tank' ));
        $manager->persist( $engine6 );

        $engine7 = new Engine( 'Cuiberson T-10204', $tier3, $nationality, 500, 331, 220, 20, $gazoline );
        $engine7->addTank( $tankRepo->getTankByName( 'M2 Light Tank' ));
        $manager->persist( $engine7 );

        $engine8 = new Engine( 'Guiberson T-1020-4', $tier3, $nationality, 5000, 331, 245, 12, $diesel );
        $engine8->addTank( $tankRepo->getTankByName( 'T18' ));
        $engine8->addTank( $tankRepo->getTankByName( 'T57' ));
        $engine8->addTank( $tankRepo->getTankByName( 'T82' ));
        $engine8->addTank( $tankRepo->getTankByName( 'M3 Stuart' ));
        $manager->persist( $engine8 );

        $engine9 = new Engine( 'Hercules HXE', $tier3, $nationality, 0, 331, 240, 12, $gazoline );
        $engine9->addTank( $tankRepo->getTankByName( 'MTLS-1G14' ));
        $manager->persist( $engine9 );

        $engine10 = new Engine( 'Wright Continental R-975C2', $tier3, $nationality, 9200, 549, 340, 20, $gazoline );
        $engine10->addTank( $tankRepo->getTankByName( 'T2 Medium Tank' ));
        $engine10->addTank( $tankRepo->getTankByName( 'M2 Medium Tank' ));
        $manager->persist( $engine10 );

        $engine11 = new Engine( 'American LaFrance 312A V-12', $tier4, $nationality, 0, 800, 244, 20, $gazoline );
        $engine11->addTank( $tankRepo->getTankByName( 'T1E6' ));
        $manager->persist( $engine11 );

        $engine12 = new Engine( 'Buick Series 60', $tier4, $nationality, 10400, 756, 330, 20, $gazoline );
        $engine12->addTank( $tankRepo->getTankByName( 'T49' ));
        $manager->persist( $engine12 );

        $engine13 = new Engine( 'Continental R-670-5', $tier4, $nationality, 0, 256, 265, 20, $gazoline );
        $engine13->addTank( $tankRepo->getTankByName( 'T2 Light Tank' ));
        $manager->persist( $engine13 );

        $engine14 = new Engine( 'Continental R-975-C1', $tier4, $nationality, 10500, 500, 350, 20, $gazoline );
        $engine14->addTank( $tankRepo->getTankByName( 'T18' ));
        $engine14->addTank( $tankRepo->getTankByName( 'T57' ));
        $engine14->addTank( $tankRepo->getTankByName( 'T82' ));
        $engine14->addTank( $tankRepo->getTankByName( 'M3 Stuart' ));
        $engine14->addTank( $tankRepo->getTankByName( 'M8A1' ));
        $engine14->addTank( $tankRepo->getTankByName( 'M5 Stuart' ));
        $manager->persist( $engine14 );

        $engine15 = new Engine( 'Lycoming 0-435t', $tier4, $nationality, 0, 256, 192, 20, $gazoline );
        $engine15->addTank( $tankRepo->getTankByName( 'M22 Locust' ));
        $manager->persist( $engine15 );

        $engine16 = new Engine( 'Twin Cadillac 42A series', $tier4, $nationality, 10350, 530, 320, 20, $gazoline );
        $engine16->addTank( $tankRepo->getTankByName( 'M41' ));
        $manager->persist( $engine16 );

        $engine17 = new Engine( 'Twin Cadillac 42 series', $tier4, $nationality, 10350, 530, 320, 20, $gazoline );
        $engine17->addTank( $tankRepo->getTankByName( 'M37' ));
        $engine17->addTank( $tankRepo->getTankByName( 'M8A1' ));
        $engine17->addTank( $tankRepo->getTankByName( 'M5 Stuart' ));
        $manager->persist( $engine17 );

        $engine18 = new Engine( 'Twin Cadillac series 44T4', $tier4, $nationality, 8100, 529, 240, 20, $gazoline );
        $engine18->addTank( $tankRepo->getTankByName( 'M37' ));
        $engine18->addTank( $tankRepo->getTankByName( 'M41' ));
        $manager->persist( $engine18 );

        $engine19 = new Engine( 'Wright Continental R-975C1', $tier4, $nationality, 11000, 549, 380, 20, $gazoline );
        $engine19->addTank( $tankRepo->getTankByName( 'M7 Priest' ));
        $engine19->addTank( $tankRepo->getTankByName( 'M4 Sherman' ));
        $engine19->addTank( $tankRepo->getTankByName( 'M7' ));
        $engine19->addTank( $tankRepo->getTankByName( 'M10 Wolverine' ));
        $engine19->addTank( $tankRepo->getTankByName( 'M24 Chaffee' ));
        $engine19->addTank( $tankRepo->getTankByName( 'M36 Jackson' ));
        $engine19->addTank( $tankRepo->getTankByName( 'M4A3E8 Sherman' ));
        $engine19->addTank( $tankRepo->getTankByName( 'M18 Hellcat' ));
        $engine19->addTank( $tankRepo->getTankByName( 'M4A3E2 Sherman Jumbo' ));
        $engine19->addTank( $tankRepo->getTankByName( 'M40/M43' ));
        $manager->persist( $engine19 );

        $engine20 = new Engine( 'Wright Continental R-975EC2', $tier4, $nationality, 10500, 515, 350, 20, $gazoline );
        $engine20->addTank( $tankRepo->getTankByName( 'M7 Priest' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M4 Sherman' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M7' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M10 Wolverine' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M36 Jackson' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M18 Hellcat' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M40/M43' ));
        $manager->persist( $engine20 );

        $engine21 = new Engine( 'Wright R-975EC2', $tier4, $nationality, 11600, 515, 400, 20, $gazoline );
        $engine21->addTank( $tankRepo->getTankByName( 'M2 Medium Tank' ));
        $engine21->addTank( $tankRepo->getTankByName( 'T40' ));
        $engine21->addTank( $tankRepo->getTankByName( 'M3 Lee' ));
        $engine21->addTank( $tankRepo->getTankByName( 'M12' ));
        $manager->persist( $engine21 );

        $engine22 = new Engine( '2x44E24 V-8 Cadillac', $tier4, $nationality, 8000, 256, 300, 20, $gazoline );
        $engine22->addTank( $tankRepo->getTankByName( 'M24 Chaffee' ));
        $manager->persist( $engine22 );

        $engine23 = new Engine( 'Chrysler A57', $tier5, $nationality, 13900, 570, 440, 20, $gazoline );
        $engine23->addTank( $tankRepo->getTankByName( 'T40' ));
        $engine23->addTank( $tankRepo->getTankByName( 'M3 Lee' ));
        $engine23->addTank( $tankRepo->getTankByName( 'M12' ));
        $manager->persist( $engine23 );

        $engine24 = new Engine( 'Continental AOI-628-1', $tier5, $nationality, 14000, 498, 340, 20, $gazoline );
        $engine24->addTank( $tankRepo->getTankByName( 'T71' ));
        $manager->persist( $engine24 );

        $engine25 = new Engine( 'Wright Continental R-975C3', $tier5, $nationality, 0, 569, 440, 20, $gazoline );
        $engine25->addTank( $tankRepo->getTankByName( 'Ram-II' ));
        $manager->persist( $engine25 );

        $engine26 = new Engine( 'GMC 6046', $tier5, $nationality, 13500, 549, 420, 15, $gazoline );
        $engine26->addTank( $tankRepo->getTankByName( 'M10 Wolverine' ));
        $engine26->addTank( $tankRepo->getTankByName( 'M36 Jackson' ));
        $manager->persist( $engine26 );

        $engine27 = new Engine( 'General Motors 6046', $tier5, $nationality, 0, 549, 420, 15, $diesel );
        $engine27->addTank( $tankRepo->getTankByName( 'M4A2E4' ));
        $manager->persist( $engine27 );

        $engine28 = new Engine( 'Wright Continental R-975C4', $tier5, $nationality, 13900, 549, 460, 20, $gazoline );
        $engine28->addTank( $tankRepo->getTankByName( 'M7 Priest' ));
        $engine28->addTank( $tankRepo->getTankByName( 'M4 Sherman' ));
        $engine28->addTank( $tankRepo->getTankByName( 'M7' ));
        $engine28->addTank( $tankRepo->getTankByName( 'T49' ));
        $engine28->addTank( $tankRepo->getTankByName( 'M4A3E8 Sherman' ));
        $engine28->addTank( $tankRepo->getTankByName( 'M18 Hellcat' ));
        $engine28->addTank( $tankRepo->getTankByName( 'M4A3E2 Sherman Jumbo' ));
        $engine28->addTank( $tankRepo->getTankByName( 'M40/M43' ));
        $engine28->addTank( $tankRepo->getTankByName( 'T21' ));
        $engine28->addTank( $tankRepo->getTankByName( 'T69' ));
        $manager->persist( $engine28 );

        $engine29 = new Engine( 'Wright G200 M795C9GC1', $tier5, $nationality, 22500, 612, 700, 20, $gazoline );
        $engine29->addTank( $tankRepo->getTankByName( 'T1 Heavy Tank' ));
        $manager->persist( $engine29 );

        $engine30 = new Engine( 'Ford GAF', $tier6, $nationality, 25300, 569, 440, 20, $gazoline );
        $engine30->addTank( $tankRepo->getTankByName( 'T28' ));
        $engine30->addTank( $tankRepo->getTankByName( 'T28 Prototype' ));
        $engine30->addTank( $tankRepo->getTankByName( 'T92' ));
        $engine30->addTank( $tankRepo->getTankByName( 'T95' ));
        $manager->persist( $engine30 );

        $engine31 = new Engine( 'Ford GAFM2A1', $tier6, $nationality, 34600, 569, 510, 20, $gazoline );
        $engine31->addTank( $tankRepo->getTankByName( 'T28' ));
        $engine31->addTank( $tankRepo->getTankByName( 'T28 Prototype' ));
        $engine31->addTank( $tankRepo->getTankByName( 'T95' ));
        $manager->persist( $engine31 );

        $engine32 = new Engine( 'Ford GAFM2A2', $tier6, $nationality, 38700, 569, 530, 20, $gazoline );
        $engine32->addTank( $tankRepo->getTankByName( 'T92' ));
        $manager->persist( $engine32 );

        $engine33 = new Engine( 'Ford GAF V8', $tier6, $nationality, 0, 569, 500, 20, $gazoline );
        $engine33->addTank( $tankRepo->getTankByName( 'T26E4 Super Pershing' ));
        $manager->persist( $engine33 );

        $engine34 = new Engine( 'Wright G2X M781C9GC1', $tier6, $nationality, 30000, 612, 825, 20, $gazoline );
        $engine34->addTank( $tankRepo->getTankByName( 'T1 Heavy Tank' ));
        $engine34->addTank( $tankRepo->getTankByName( 'M6' ));
        $manager->persist( $engine34 );

        $engine35 = new Engine( 'Continental AOI-628-2', $tier7, $nationality, 34000, 498, 400, 20, $gazoline );
        $engine35->addTank( $tankRepo->getTankByName( 'T71' ));
        $manager->persist( $engine35 );

        $engine36 = new Engine( 'Continental AOS-895-1', $tier7, $nationality, 38500, 256, 500, 20, $gazoline );
        $engine36->addTank( $tankRepo->getTankByName( 'M24 Chaffee' ));
        $manager->persist( $engine36 );

        $engine37 = new Engine( 'Continental AOS-895-3', $tier7, $nationality, 31000, 771, 500, 20, $gazoline );
        $engine37->addTank( $tankRepo->getTankByName( 'T69' ));
        $manager->persist( $engine37 );

        $engine38 = new Engine( 'Ford GAA', $tier7, $nationality, 36000, 569, 520, 20, $gazoline );
        $engine38->addTank( $tankRepo->getTankByName( 'M7 Priest' ));
        $engine38->addTank( $tankRepo->getTankByName( 'M4A3E8 Sherman' ));
        $engine38->addTank( $tankRepo->getTankByName( 'M4A3E2 Sherman Jumbo' ));
        $engine38->addTank( $tankRepo->getTankByName( 'T20' ));
        $manager->persist( $engine38 );

        $engine39 = new Engine( 'Ford GAZ', $tier7, $nationality, 43500, 556, 720, 20, $gazoline );
        $engine39->addTank( $tankRepo->getTankByName( 'T29' ));
        $engine39->addTank( $tankRepo->getTankByName( 'T32' ));
        $manager->persist( $engine39 );

        $engine40 = new Engine( 'Ford GAZ', $tier7, $nationality, 0, 556, 720, 20, $gazoline );
        $engine40->addTank( $tankRepo->getTankByName( 'T14' ));
        $manager->persist( $engine40 );

        $engine41 = new Engine( 'Ford GAN', $tier7, $nationality, 37200, 569, 560, 20, $gazoline );
        $engine41->addTank( $tankRepo->getTankByName( 'T25 AT' ));
        $engine41->addTank( $tankRepo->getTankByName( 'T20' ));
        $engine41->addTank( $tankRepo->getTankByName( 'T21' ));
        $engine41->addTank( $tankRepo->getTankByName( 'T25/2' ));
        $engine41->addTank( $tankRepo->getTankByName( 'M26 Pershing' ));
        $engine41->addTank( $tankRepo->getTankByName( 'M46 Patton' ));
        $manager->persist( $engine41 );

        $engine42 = new Engine( 'Wright G200 M781C9GC1', $tier7, $nationality, 47600, 612, 960, 20, $gazoline );
        $engine42->addTank( $tankRepo->getTankByName( 'T1 Heavy Tank' ));
        $engine42->addTank( $tankRepo->getTankByName( 'M6' ));
        $manager->persist( $engine42 );

        $engine43 = new Engine( 'Continental AOSI-895-5', $tier8, $nationality, 43000, 771, 600, 20, $gazoline );
        $engine43->addTank( $tankRepo->getTankByName( 'T69' ));
        $manager->persist( $engine43 );

        $engine44 = new Engine( 'Continental AV-1790-1', $tier8, $nationality, 45000, 569, 704, 20, $gazoline );
        $engine44->addTank( $tankRepo->getTankByName( 'T25 AT' ));
        $engine44->addTank( $tankRepo->getTankByName( 'T25/2' ));
        $engine44->addTank( $tankRepo->getTankByName( 'M26 Pershing' ));
        $engine44->addTank( $tankRepo->getTankByName( 'T54E1' ));
        $engine44->addTank( $tankRepo->getTankByName( 'T92' ));
        $engine44->addTank( $tankRepo->getTankByName( 'M46 Patton' ));
        $manager->persist( $engine44 );

        $engine45 = new Engine( 'Continental AV-1790-3', $tier8, $nationality, 59000, 569, 800, 20, $gazoline );
        $engine45->addTank( $tankRepo->getTankByName( 'T29' ));
        $engine45->addTank( $tankRepo->getTankByName( 'T32' ));
        $engine45->addTank( $tankRepo->getTankByName( 'T30' ));
        $engine45->addTank( $tankRepo->getTankByName( 'T54E1' ));
        $manager->persist( $engine45 );

        $engine46 = new Engine( 'GMC Allison V1710-E32', $tier8, $nationality, 48500, 556, 760, 20, $gazoline );
        $engine46->addTank( $tankRepo->getTankByName( 'T29' ));
        $engine46->addTank( $tankRepo->getTankByName( 'T32' ));
        $manager->persist( $engine46 );

        $engine47 = new Engine( 'AV-1790-5A', $tier9, $nationality, 99000, 569, 820, 20, $gazoline );
        $engine47->addTank( $tankRepo->getTankByName( 'M46 Patton' ));
        $manager->persist( $engine47 );

        $engine48 = new Engine( 'Continental AV-1790-3A1', $tier9, $nationality, 0, 1057, 810, 20, $gazoline );
        $engine48->addTank( $tankRepo->getTankByName( 'T34' ));
        $manager->persist( $engine48 );

        $engine49 = new Engine( 'Continental AV-1790-5B', $tier9, $nationality, 80000, 569, 810, 20, $gazoline );
        $engine49->addTank( $tankRepo->getTankByName( 'T54E1' ));
        $engine49->addTank( $tankRepo->getTankByName( 'M103' ));
        $manager->persist( $engine49 );

        $engine50 = new Engine( 'AOI-1490', $tier10, $nationality, 100000, 1200, 875, 20, $gazoline );
        $engine50->addTank( $tankRepo->getTankByName( 'T110E5' ));
        $engine50->addTank( $tankRepo->getTankByName( 'T110E4' ));
        $engine50->addTank( $tankRepo->getTankByName( 'T110E3' ));
        $manager->persist( $engine50 );

        $engine51 = new Engine( 'Continental AV-1790-5', $tier10, $nationality, 100000, 569, 860, 20, $gazoline );
        $engine51->addTank( $tankRepo->getTankByName( 'T30' ));
        $manager->persist( $engine51 );

        $engine52 = new Engine( 'Continental AV-1790-5C', $tier10, $nationality, 99000, 11,59, 810, 20, $gazoline );
        $engine52->addTank( $tankRepo->getTankByName( 'T57 Heavy Tank' ));
        $manager->persist( $engine52 );

        $engine53 = new Engine( 'Continental AV-1790-7B', $tier10, $nationality, 100000, 569, 810, 12, $gazoline );
        $engine53->addTank( $tankRepo->getTankByName( 'M48A1' ));
        $manager->persist( $engine53 );

        $engine54 = new Engine( 'Continental AV-1790-7C', $tier10, $nationality, 100000, 569, 860, 20, $gazoline );
        $engine54->addTank( $tankRepo->getTankByName( 'M103' ));
        $manager->persist( $engine54 );

        $engine55 = new Engine( 'Wright G200 M781 C9GC5', $tier10, $nationality, 0, 612, 960, 20, $gazoline );
        $engine55->addTank( $tankRepo->getTankByName( 'M6A2E1' ));
        $manager->persist( $engine55 );

        $manager->flush();
    }
}