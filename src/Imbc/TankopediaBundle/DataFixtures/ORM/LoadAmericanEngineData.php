<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

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

//        Tier,Nationality,Name,Power,Chance of Fire,Type,Price,Weight,Compatibility
//        I,usa,Cunningham V-type,110 hp,20 %,Gasoline,0,200 kg,T1 Cunningham
        $engine1 = new Engine();
        $engine1->setTier( $tier1 );
        $engine1->setNationality( $nationality );
        $engine1->setName( 'Cunningham V-type' );
        $engine1->setPower( 110 );
        $engine1->setFireChance( 20 );
        $engine1->setFuelType( $gazoline );
        $engine1->setCost( 0 );
        $engine1->setWeight( 200 );
        $engine1->addTank( $tankRepo->getTankByName( 'T1 Cunningham' ));
        $manager->persist( $engine1 );

//        II,usa,Cunningham V8,132 hp,20 %,Gasoline,650,300 kg,T1 Cunningham
        $engine2 = new Engine();
        $engine2->setTier( $tier2 );
        $engine2->setNationality( $nationality );
        $engine2->setName( 'Cunningham V8' );
        $engine2->setPower( 132 );
        $engine2->setFireChance( 20 );
        $engine2->setFuelType( $gazoline );
        $engine2->setCost( 650 );
        $engine2->setWeight( 300 );
        $engine2->addTank( $tankRepo->getTankByName( 'T1 Cunningham' ));
        $manager->persist( $engine2 );

//        II,usa,Liberty,330 hp,20 %,Gasoline,990,450 kg,T2 Medium Tank
        $engine3 = new Engine();
        $engine3->setTier( $tier2 );
        $engine3->setNationality( $nationality );
        $engine3->setName( 'Liberty' );
        $engine3->setPower( 330 );
        $engine3->setFireChance( 20 );
        $engine3->setFuelType( $gazoline );
        $engine3->setCost( 990 );
        $engine3->setWeight( 450 );
        $engine3->addTank( $tankRepo->getTankByName( 'T2 Medium Tank' ));
        $manager->persist( $engine3 );

//        III,usa,Continental R670-7,250 hp,20 %,Gasoline,2000,256 kg,M2 Light Tank
        $engine4 = new Engine();
        $engine4->setTier( $tier3 );
        $engine4->setNationality( $nationality );
        $engine4->setName( 'Continental R670-7' );
        $engine4->setPower( 250 );
        $engine4->setFireChance( 20 );
        $engine4->setFuelType( $gazoline );
        $engine4->setCost( 2000 );
        $engine4->setWeight( 256 );
        $engine4->addTank( $tankRepo->getTankByName( 'M2 Light Tank' ));
        $manager->persist( $engine4 );

//        III,usa,Continental W-670,268 hp,20 %,Gasoline,8200,256 kg,"T18, T57, T82, M3 Stuart"
        $engine5 = new Engine();
        $engine5->setTier( $tier3 );
        $engine5->setNationality( $nationality );
        $engine5->setName( 'Continental W-670' );
        $engine5->setPower( 268 );
        $engine5->setFireChance( 20 );
        $engine5->setFuelType( $gazoline );
        $engine5->setCost( 8200 );
        $engine5->setWeight( 256 );
        $engine5->addTank( $tankRepo->getTankByName( 'T18' ));
        $engine5->addTank( $tankRepo->getTankByName( 'T57' ));
        $engine5->addTank( $tankRepo->getTankByName( 'T82' ));
        $engine5->addTank( $tankRepo->getTankByName( 'M3 Stuart' ));
        $manager->persist( $engine5 );

//        III,usa,Continental W-670-7,262 hp,20 %,Gasoline,5600,256 kg,M2 Light Tank
        $engine6 = new Engine();
        $engine6->setTier( $tier3 );
        $engine6->setNationality( $nationality );
        $engine6->setName( 'Continental W-670-7' );
        $engine6->setPower( 262 );
        $engine6->setFireChance( 20 );
        $engine6->setFuelType( $gazoline );
        $engine6->setCost( 5600 );
        $engine6->setWeight( 256 );
        $engine6->addTank( $tankRepo->getTankByName( 'M2 Light Tank' ));
        $manager->persist( $engine6 );

//        III,usa,Cuiberson T-10204,220 hp,20 %,Gasoline,500,331 kg,M2 Light Tank
        $engine7 = new Engine();
        $engine7->setTier( $tier3 );
        $engine7->setNationality( $nationality );
        $engine7->setName( 'Cuiberson T-10204' );
        $engine7->setPower( 220 );
        $engine7->setFireChance( 20 );
        $engine7->setFuelType( $gazoline );
        $engine7->setCost( 500 );
        $engine7->setWeight( 331 );
        $engine7->addTank( $tankRepo->getTankByName( 'M2 Light Tank' ));
        $manager->persist( $engine7 );

//        III,usa,Guiberson T-1020-4,245 hp,12 %,Diesel,5000,331 kg,"T18, T57, T82, M3 Stuart"
        $engine8 = new Engine();
        $engine8->setTier( $tier3 );
        $engine8->setNationality( $nationality );
        $engine8->setName( 'Guiberson T-1020-4' );
        $engine8->setPower( 245 );
        $engine8->setFireChance( 12 );
        $engine8->setFuelType( $diesel );
        $engine8->setCost( 5000 );
        $engine8->setWeight( 331 );
        $engine8->addTank( $tankRepo->getTankByName( 'T18' ));
        $engine8->addTank( $tankRepo->getTankByName( 'T57' ));
        $engine8->addTank( $tankRepo->getTankByName( 'T82' ));
        $engine8->addTank( $tankRepo->getTankByName( 'M3 Stuart' ));
        $manager->persist( $engine8 );

//        III,usa,Hercules HXE,240 hp,12 %,Gasoline,0,331 kg,MTLS-1G14
        $engine9 = new Engine();
        $engine9->setTier( $tier3 );
        $engine9->setNationality( $nationality );
        $engine9->setName( 'Hercules HXE' );
        $engine9->setPower( 240 );
        $engine9->setFireChance( 12 );
        $engine9->setFuelType( $gazoline );
        $engine9->setCost( 0 );
        $engine9->setWeight( 331 );
        $engine9->addTank( $tankRepo->getTankByName( 'MTLS-1G14' ));
        $manager->persist( $engine9 );

//        III,usa,Wright Continental R-975C2,340 hp,20 %,Gasoline,9200,549 kg,"T2 Medium Tank, M2 Medium Tank"
        $engine10 = new Engine();
        $engine10->setTier( $tier3 );
        $engine10->setNationality( $nationality );
        $engine10->setName( 'Wright Continental R-975C2' );
        $engine10->setPower( 340 );
        $engine10->setFireChance( 20 );
        $engine10->setFuelType( $gazoline );
        $engine10->setCost( 9200 );
        $engine10->setWeight( 549 );
        $engine10->addTank( $tankRepo->getTankByName( 'T2 Medium Tank' ));
        $engine10->addTank( $tankRepo->getTankByName( 'M2 Medium Tank' ));
        $manager->persist( $engine10 );

//        IV,usa,American LaFrance 312A V-12,244 hp,20 %,Gasoline,,800 kg,T1E6
        $engine11 = new Engine();
        $engine11->setTier( $tier4 );
        $engine11->setNationality( $nationality );
        $engine11->setName( 'American LaFrance 312A V-12' );
        $engine11->setPower( 244 );
        $engine11->setFireChance( 20 );
        $engine11->setFuelType( $gazoline );
        $engine11->setCost( 0 );
        $engine11->setWeight( 800 );
        $engine11->addTank( $tankRepo->getTankByName( 'T1E6' ));
        $manager->persist( $engine11 );

//        IV,usa,Buick Series 60,330 hp,20 %,Gasoline,10400,756 kg,T49
        $engine12 = new Engine();
        $engine12->setTier( $tier4 );
        $engine12->setNationality( $nationality );
        $engine12->setName( 'Buick Series 60' );
        $engine12->setPower( 330 );
        $engine12->setFireChance( 20 );
        $engine12->setFuelType( $gazoline );
        $engine12->setCost( 10400 );
        $engine12->setWeight( 756 );
        $engine12->addTank( $tankRepo->getTankByName( 'T49' ));
        $manager->persist( $engine12 );

//        IV,usa,Continental R-670-5,265 hp,20 %,Gasoline,0,256 kg,T2 Light Tank
        $engine13 = new Engine();
        $engine13->setTier( $tier4 );
        $engine13->setNationality( $nationality );
        $engine13->setName( 'Continental R-670-5' );
        $engine13->setPower( 265 );
        $engine13->setFireChance( 20 );
        $engine13->setFuelType( $gazoline );
        $engine13->setCost( 0 );
        $engine13->setWeight( 256 );
        $engine13->addTank( $tankRepo->getTankByName( 'T2 Light Tank' ));
        $manager->persist( $engine13 );

//        IV,usa,Continental R-975-C1,350 hp,20 %,Gasoline,10500,500 kg,"T18, T57, T82, M3 Stuart, M8A1, M5 Stuart"
        $engine14 = new Engine();
        $engine14->setTier( $tier4 );
        $engine14->setNationality( $nationality );
        $engine14->setName( 'Continental R-975-C1' );
        $engine14->setPower( 350 );
        $engine14->setFireChance( 20 );
        $engine14->setFuelType( $gazoline );
        $engine14->setCost( 10500 );
        $engine14->setWeight( 500 );
        $engine14->addTank( $tankRepo->getTankByName( 'T18' ));
        $engine14->addTank( $tankRepo->getTankByName( 'T57' ));
        $engine14->addTank( $tankRepo->getTankByName( 'T82' ));
        $engine14->addTank( $tankRepo->getTankByName( 'M3 Stuart' ));
        $engine14->addTank( $tankRepo->getTankByName( 'M8A1' ));
        $engine14->addTank( $tankRepo->getTankByName( 'M5 Stuart' ));
        $manager->persist( $engine14 );

//        IV,usa,Lycoming 0-435t,192 hp,20 %,Gasoline,0,256 kg,M22 Locust
        $engine15 = new Engine();
        $engine15->setTier( $tier4 );
        $engine15->setNationality( $nationality );
        $engine15->setName( 'Lycoming 0-435t' );
        $engine15->setPower( 192 );
        $engine15->setFireChance( 20 );
        $engine15->setFuelType( $gazoline );
        $engine15->setCost( 0 );
        $engine15->setWeight( 256 );
        $engine15->addTank( $tankRepo->getTankByName( 'M22 Locust' ));
        $manager->persist( $engine15 );

//        IV,usa,Twin Cadillac 42A series,320 hp,20 %,Gasoline,10350,530 kg,M41
        $engine16 = new Engine();
        $engine16->setTier( $tier4 );
        $engine16->setNationality( $nationality );
        $engine16->setName( 'Twin Cadillac 42A series' );
        $engine16->setPower( 320 );
        $engine16->setFireChance( 20 );
        $engine16->setFuelType( $gazoline );
        $engine16->setCost( 10350 );
        $engine16->setWeight( 530 );
        $engine16->addTank( $tankRepo->getTankByName( 'M41' ));
        $manager->persist( $engine16 );

//        IV,usa,Twin Cadillac 42 series,320 hp,20 %,Gasoline,10350,530 kg,"M37, M8A1, M5 Stuart"
        $engine17 = new Engine();
        $engine17->setTier( $tier4 );
        $engine17->setNationality( $nationality );
        $engine17->setName( 'Twin Cadillac 42 series' );
        $engine17->setPower( 320 );
        $engine17->setFireChance( 20 );
        $engine17->setFuelType( $gazoline );
        $engine17->setCost( 10350 );
        $engine17->setWeight( 530 );
        $engine17->addTank( $tankRepo->getTankByName( 'M37' ));
        $engine17->addTank( $tankRepo->getTankByName( 'M8A1' ));
        $engine17->addTank( $tankRepo->getTankByName( 'M5 Stuart' ));
        $manager->persist( $engine17 );

//        IV,usa,Twin Cadillac series 44T4,240 hp,20 %,Gasoline,8100,529 kg,"M37, M41"
        $engine18 = new Engine();
        $engine18->setTier( $tier4 );
        $engine18->setNationality( $nationality );
        $engine18->setName( 'Twin Cadillac series 44T4' );
        $engine18->setPower( 240 );
        $engine18->setFireChance( 20 );
        $engine18->setFuelType( $gazoline );
        $engine18->setCost( 8100 );
        $engine18->setWeight( 529 );
        $engine18->addTank( $tankRepo->getTankByName( 'M37' ));
        $engine18->addTank( $tankRepo->getTankByName( 'M41' ));
        $manager->persist( $engine18 );

//        IV,usa,Wright Continental R-975C1,380 hp,20 %,Gasoline,11000,549 kg,"M7 Priest, 
//         M4 Sherman, M7, M10 Wolverine, M24 Chaffee, M36 Jackson, M4A3E8 Sherman, 
//         M18 Hellcat, M4A3E2 Sherman Jumbo, M40/M43"
        $engine19 = new Engine();
        $engine19->setTier( $tier4 );
        $engine19->setNationality( $nationality );
        $engine19->setName( 'Wright Continental R-975C1' );
        $engine19->setPower( 380 );
        $engine19->setFireChance( 20 );
        $engine19->setFuelType( $gazoline );
        $engine19->setCost( 11000 );
        $engine19->setWeight( 549 );
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

//        IV,usa,Wright Continental R-975EC2,350 hp,20 %,Gasoline,10500,515 kg,"M7 Priest, 
//         M4 Sherman, M7, M10 Wolverine, M36 Jackson, M18 Hellcat, M40/M43"
        $engine20 = new Engine();
        $engine20->setTier( $tier4 );
        $engine20->setNationality( $nationality );
        $engine20->setName( 'Wright Continental R-975EC2' );
        $engine20->setPower( 350 );
        $engine20->setFireChance( 20 );
        $engine20->setFuelType( $gazoline );
        $engine20->setCost( 10500 );
        $engine20->setWeight( 515 );
        $engine20->addTank( $tankRepo->getTankByName( 'M7 Priest' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M4 Sherman' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M7' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M10 Wolverine' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M36 Jackson' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M18 Hellcat' ));
        $engine20->addTank( $tankRepo->getTankByName( 'M40/M43' ));
        $manager->persist( $engine20 );

//        IV,usa,Wright R-975EC2,400 hp,20 %,Gasoline,11600,515 kg,"M2 Medium Tank, T40, M3 Lee, M12"
        $engine21 = new Engine();
        $engine21->setTier( $tier4 );
        $engine21->setNationality( $nationality );
        $engine21->setName( 'Wright R-975EC2' );
        $engine21->setPower( 400 );
        $engine21->setFireChance( 20 );
        $engine21->setFuelType( $gazoline );
        $engine21->setCost( 11600 );
        $engine21->setWeight( 515 );
        $engine21->addTank( $tankRepo->getTankByName( 'M2 Medium Tank' ));
        $engine21->addTank( $tankRepo->getTankByName( 'T40' ));
        $engine21->addTank( $tankRepo->getTankByName( 'M3 Lee' ));
        $engine21->addTank( $tankRepo->getTankByName( 'M12' ));
        $manager->persist( $engine21 );

//        IV,usa,2x44E24 V-8 Cadillac,300 hp,20 %,Gasoline,8000,256 kg,M24 Chaffee
        $engine22 = new Engine();
        $engine22->setTier( $tier4 );
        $engine22->setNationality( $nationality );
        $engine22->setName( '2x44E24 V-8 Cadillac' );
        $engine22->setPower( 300 );
        $engine22->setFireChance( 20 );
        $engine22->setFuelType( $gazoline );
        $engine22->setCost( 8000 );
        $engine22->setWeight( 256 );
        $engine22->addTank( $tankRepo->getTankByName( 'M24 Chaffee' ));
        $manager->persist( $engine22 );

//        V,usa,Chrysler A57,440 hp,20 %,Gasoline,13900,570 kg,"T40, M3 Lee, M12"
        $engine23 = new Engine();
        $engine23->setTier( $tier5 );
        $engine23->setNationality( $nationality );
        $engine23->setName( 'Chrysler A57' );
        $engine23->setPower( 440 );
        $engine23->setFireChance( 20 );
        $engine23->setFuelType( $gazoline );
        $engine23->setCost( 13900 );
        $engine23->setWeight( 570 );
        $engine23->addTank( $tankRepo->getTankByName( 'T40' ));
        $engine23->addTank( $tankRepo->getTankByName( 'M3 Lee' ));
        $engine23->addTank( $tankRepo->getTankByName( 'M12' ));
        $manager->persist( $engine23 );

//        V,usa,Continental AOI-628-1,340 hp,20 %,Gasoline,14000,498 kg,T71
        $engine24 = new Engine();
        $engine24->setTier( $tier5 );
        $engine24->setNationality( $nationality );
        $engine24->setName( 'Continental AOI-628-1' );
        $engine24->setPower( 340 );
        $engine24->setFireChance( 20 );
        $engine24->setFuelType( $gazoline );
        $engine24->setCost( 14000 );
        $engine24->setWeight( 498 );
        $engine24->addTank( $tankRepo->getTankByName( 'T71' ));
        $manager->persist( $engine24 );

//        V,usa,Wright Continental R-975C3,440 hp,20 %,Gasoline,0,569 kg,Ram-II
        $engine25 = new Engine();
        $engine25->setTier( $tier5 );
        $engine25->setNationality( $nationality );
        $engine25->setName( 'Wright Continental R-975C3' );
        $engine25->setPower( 440 );
        $engine25->setFireChance( 20 );
        $engine25->setFuelType( $gazoline );
        $engine25->setCost( 0 );
        $engine25->setWeight( 569 );
        $engine25->addTank( $tankRepo->getTankByName( 'Ram-II' ));
        $manager->persist( $engine25 );

//        V,usa,GMC 6046,420 hp,15 %,Diesel,13500,549 kg,"M10 Wolverine, M36 Jackson"
        $engine26 = new Engine();
        $engine26->setTier( $tier5 );
        $engine26->setNationality( $nationality );
        $engine26->setName( 'GMC 6046' );
        $engine26->setPower( 420 );
        $engine26->setFireChance( 15 );
        $engine26->setFuelType( $diesel );
        $engine26->setCost( 13500 );
        $engine26->setWeight( 549 );
        $engine26->addTank( $tankRepo->getTankByName( 'M10 Wolverine' ));
        $engine26->addTank( $tankRepo->getTankByName( 'M36 Jackson' ));
        $manager->persist( $engine26 );

//        V,usa,General Motors 6046,420 hp,15 %,Diesel,0,549 kg,M4A2E4
        $engine27 = new Engine();
        $engine27->setTier( $tier5 );
        $engine27->setNationality( $nationality );
        $engine27->setName( 'General Motors 6046' );
        $engine27->setPower( 420 );
        $engine27->setFireChance( 15 );
        $engine27->setFuelType( $diesel );
        $engine27->setCost( 0 );
        $engine27->setWeight( 549 );
        $engine27->addTank( $tankRepo->getTankByName( 'M4A2E4' ));
        $manager->persist( $engine27 );

//        V,usa,Wright Continental R-975C4,460 hp,20 %,Gasoline,13900,549 kg,"M7 Priest, 
//         M4 Sherman, M7, T49, M4A3E8 Sherman, M18 Hellcat, M4A3E2 Sherman Jumbo, 
//         M40/M43, T21, T69"
        $engine28 = new Engine();
        $engine28->setTier( $tier5 );
        $engine28->setNationality( $nationality );
        $engine28->setName( 'Wright Continental R-975C4' );
        $engine28->setPower( 460 );
        $engine28->setFireChance( 20 );
        $engine28->setFuelType( $gazoline );
        $engine28->setCost( 13900 );
        $engine28->setWeight( 549 );
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

//        V,usa,Wright G200 M795C9GC1,700 hp,20 %,Gasoline,22500,612 kg,T1 Heavy Tank
        $engine29 = new Engine();
        $engine29->setTier( $tier5 );
        $engine29->setNationality( $nationality );
        $engine29->setName( 'Wright G200 M795C9GC1' );
        $engine29->setPower( 700 );
        $engine29->setFireChance( 20 );
        $engine29->setFuelType( $gazoline );
        $engine29->setCost( 22500 );
        $engine29->setWeight( 612 );
        $engine29->addTank( $tankRepo->getTankByName( 'T1 Heavy Tank' ));
        $manager->persist( $engine29 );

//        VI,usa,Ford GAF,440 hp,20 %,Gasoline,25300,569 kg,"T28, T28 Prototype, T92, T95"
        $engine30 = new Engine();
        $engine30->setTier( $tier6 );
        $engine30->setNationality( $nationality );
        $engine30->setName( 'Ford GAF' );
        $engine30->setPower( 440 );
        $engine30->setFireChance( 20 );
        $engine30->setFuelType( $gazoline );
        $engine30->setCost( 25300 );
        $engine30->setWeight( 569 );
        $engine30->addTank( $tankRepo->getTankByName( 'T28' ));
        $engine30->addTank( $tankRepo->getTankByName( 'T28 Prototype' ));
        $engine30->addTank( $tankRepo->getTankByName( 'T92' ));
        $engine30->addTank( $tankRepo->getTankByName( 'T95' ));
        $manager->persist( $engine30 );

//        VI,usa,Ford GAFM2A1,510 hp,20 %,Gasoline,34600,569 kg,"T28, T28 Prototype, T95"
        $engine31 = new Engine();
        $engine31->setTier( $tier6 );
        $engine31->setNationality( $nationality );
        $engine31->setName( 'Ford GAFM2A1' );
        $engine31->setPower( 510 );
        $engine31->setFireChance( 20 );
        $engine31->setFuelType( $gazoline );
        $engine31->setCost( 34600 );
        $engine31->setWeight( 569 );
        $engine31->addTank( $tankRepo->getTankByName( 'T28' ));
        $engine31->addTank( $tankRepo->getTankByName( 'T28 Prototype' ));
        $engine31->addTank( $tankRepo->getTankByName( 'T95' ));
        $manager->persist( $engine31 );

//        VI,usa,Ford GAFM2A2,530 hp,20 %,Gasoline,38700,569 kg,T92
        $engine32 = new Engine();
        $engine32->setTier( $tier6 );
        $engine32->setNationality( $nationality );
        $engine32->setName( 'Ford GAFM2A2' );
        $engine32->setPower( 530 );
        $engine32->setFireChance( 20 );
        $engine32->setFuelType( $gazoline );
        $engine32->setCost( 38700 );
        $engine32->setWeight( 569 );
        $engine32->addTank( $tankRepo->getTankByName( 'T92' ));
        $manager->persist( $engine32 );

//        VI,usa,Ford GAF V8,500 hp,20 %,Gasoline,0,569 kg,T26E4 Super Pershing
        $engine33 = new Engine();
        $engine33->setTier( $tier6 );
        $engine33->setNationality( $nationality );
        $engine33->setName( 'Ford GAF V8' );
        $engine33->setPower( 500 );
        $engine33->setFireChance( 20 );
        $engine33->setFuelType( $gazoline );
        $engine33->setCost( 0 );
        $engine33->setWeight( 569 );
        $engine33->addTank( $tankRepo->getTankByName( 'T26E4 Super Pershing' ));
        $manager->persist( $engine33 );

//        VI,usa,Wright G2X M781C9GC1,825 hp,20 %,Gasoline,30000,612 kg,"T1 Heavy Tank, M6"
        $engine34 = new Engine();
        $engine34->setTier( $tier6 );
        $engine34->setNationality( $nationality );
        $engine34->setName( 'Wright G2X M781C9GC1' );
        $engine34->setPower( 825 );
        $engine34->setFireChance( 20 );
        $engine34->setFuelType( $gazoline );
        $engine34->setCost( 30000 );
        $engine34->setWeight( 612 );
        $engine34->addTank( $tankRepo->getTankByName( 'T1 Heavy Tank' ));
        $engine34->addTank( $tankRepo->getTankByName( 'M6' ));
        $manager->persist( $engine34 );

//        VII,usa,Continental AOI-628-2,400 hp,20 %,Diesel(?),34000,498 kg,T71
        $engine35 = new Engine();
        $engine35->setTier( $tier7 );
        $engine35->setNationality( $nationality );
        $engine35->setName( 'Continental AOI-628-2' );
        $engine35->setPower( 400 );
        $engine35->setFireChance( 20 );
        $engine35->setFuelType( $diesel );
        $engine35->setCost( 34000 );
        $engine35->setWeight( 498 );
        $engine35->addTank( $tankRepo->getTankByName( 'T71' ));
        $manager->persist( $engine35 );

//        VII,usa,Continental AOS-895-1,500 hp,20 %,Gasoline,38500,256 kg,M24 Chaffee
        $engine36 = new Engine();
        $engine36->setTier( $tier7 );
        $engine36->setNationality( $nationality );
        $engine36->setName( 'Continental AOS-895-1' );
        $engine36->setPower( 500 );
        $engine36->setFireChance( 20 );
        $engine36->setFuelType( $gazoline );
        $engine36->setCost( 38500 );
        $engine36->setWeight( 256 );
        $engine36->addTank( $tankRepo->getTankByName( 'M24 Chaffee' ));
        $manager->persist( $engine36 );

//        VII,usa,Continental AOS-895-3,500 hp,20 %,Gasoline,31000,771 kg,T69
        $engine37 = new Engine();
        $engine37->setTier( $tier7 );
        $engine37->setNationality( $nationality );
        $engine37->setName( 'Continental AOS-895-3' );
        $engine37->setPower( 500 );
        $engine37->setFireChance( 20 );
        $engine37->setFuelType( $gazoline );
        $engine37->setCost( 31000 );
        $engine37->setWeight( 771 );
        $engine37->addTank( $tankRepo->getTankByName( 'T69' ));
        $manager->persist( $engine37 );

//        VII,usa,Ford GAA,520 hp,20 %,Gasoline,36000,569 kg,"M7 Priest, M4A3E8 Sherman, M4A3E2 Sherman Jumbo, T20"
        $engine38 = new Engine();
        $engine38->setTier( $tier7 );
        $engine38->setNationality( $nationality );
        $engine38->setName( 'Ford GAA' );
        $engine38->setPower( 520 );
        $engine38->setFireChance( 20 );
        $engine38->setFuelType( $gazoline );
        $engine38->setCost( 36000 );
        $engine38->setWeight( 569 );
        $engine38->addTank( $tankRepo->getTankByName( 'M7 Priest' ));
        $engine38->addTank( $tankRepo->getTankByName( 'M4A3E8 Sherman' ));
        $engine38->addTank( $tankRepo->getTankByName( 'M4A3E2 Sherman Jumbo' ));
        $engine38->addTank( $tankRepo->getTankByName( 'T20' ));
        $manager->persist( $engine38 );

//        VII,usa,Ford GAZ,720 hp,20 %,Gasoline,43500,556 kg,"T29, T32"
        $engine39 = new Engine();
        $engine39->setTier( $tier7 );
        $engine39->setNationality( $nationality );
        $engine39->setName( 'Ford GAZ' );
        $engine39->setPower( 720 );
        $engine39->setFireChance( 20 );
        $engine39->setFuelType( $gazoline );
        $engine39->setCost( 43500 );
        $engine39->setWeight( 556 );
        $engine39->addTank( $tankRepo->getTankByName( 'T29' ));
        $engine39->addTank( $tankRepo->getTankByName( 'T32' ));
        $manager->persist( $engine39 );

//        VII,usa,Ford GAZ,720 hp,20 %,Gasoline,0,556 kg,T14
        $engine40 = new Engine();
        $engine40->setTier( $tier7 );
        $engine40->setNationality( $nationality );
        $engine40->setName( 'Ford GAZ' );
        $engine40->setPower( 720 );
        $engine40->setFireChance( 20 );
        $engine40->setFuelType( $gazoline );
        $engine40->setCost( 0 );
        $engine40->setWeight( 556 );
        $engine40->addTank( $tankRepo->getTankByName( 'T14' ));
        $manager->persist( $engine40 );

//        VII,usa,Ford GAN,560 hp,20 %,Gasoline,37200,569 kg,"T25 AT, T20, T21, T25/2, M26 Pershing, M46 Patton"
        $engine41 = new Engine();
        $engine41->setTier( $tier7 );
        $engine41->setNationality( $nationality );
        $engine41->setName( 'Ford GAN' );
        $engine41->setPower( 560 );
        $engine41->setFireChance( 20 );
        $engine41->setFuelType( $gazoline );
        $engine41->setCost( 37200 );
        $engine41->setWeight( 569 );
        $engine41->addTank( $tankRepo->getTankByName( 'T25 AT' ));
        $engine41->addTank( $tankRepo->getTankByName( 'T20' ));
        $engine41->addTank( $tankRepo->getTankByName( 'T21' ));
        $engine41->addTank( $tankRepo->getTankByName( 'T25/2' ));
        $engine41->addTank( $tankRepo->getTankByName( 'M26 Pershing' ));
        $engine41->addTank( $tankRepo->getTankByName( 'M46 Patton' ));
        $manager->persist( $engine41 );

//        VII,usa,Wright G200 M781C9GC1,960 hp,20 %,Gasoline,47600,612 kg,"T1 Heavy Tank, M6"
        $engine42 = new Engine();
        $engine42->setTier( $tier7 );
        $engine42->setNationality( $nationality );
        $engine42->setName( 'Wright G200 M781C9GC1' );
        $engine42->setPower( 960 );
        $engine42->setFireChance( 20 );
        $engine42->setFuelType( $gazoline );
        $engine42->setCost( 47600 );
        $engine42->setWeight( 612 );
        $engine42->addTank( $tankRepo->getTankByName( 'T1 Heavy Tank' ));
        $engine42->addTank( $tankRepo->getTankByName( 'M6' ));
        $manager->persist( $engine42 );

//        VIII,usa,Continental AOSI-895-5,600 hp,20 %,Gasoline,43000,771 kg,T69
        $engine43 = new Engine();
        $engine43->setTier( $tier8 );
        $engine43->setNationality( $nationality );
        $engine43->setName( 'Continental AOSI-895-5' );
        $engine43->setPower( 600 );
        $engine43->setFireChance( 20 );
        $engine43->setFuelType( $gazoline );
        $engine43->setCost( 43000 );
        $engine43->setWeight( 771 );
        $engine43->addTank( $tankRepo->getTankByName( 'T69' ));
        $manager->persist( $engine43 );

//        VIII,usa,Continental AV-1790-1,704 hp,20 %,Gasoline,45000,569 kg,"T25 AT, 
//         T25/2, M26 Pershing, T54E1, T92, M46 Patton"
        $engine44 = new Engine();
        $engine44->setTier( $tier8 );
        $engine44->setNationality( $nationality );
        $engine44->setName( 'Continental AV-1790-1' );
        $engine44->setPower( 704 );
        $engine44->setFireChance( 20 );
        $engine44->setFuelType( $gazoline );
        $engine44->setCost( 45000 );
        $engine44->setWeight( 569 );
        $engine44->addTank( $tankRepo->getTankByName( 'T25 AT' ));
        $engine44->addTank( $tankRepo->getTankByName( 'T25/2' ));
        $engine44->addTank( $tankRepo->getTankByName( 'M26 Pershing' ));
        $engine44->addTank( $tankRepo->getTankByName( 'T54E1' ));
        $engine44->addTank( $tankRepo->getTankByName( 'T92' ));
        $engine44->addTank( $tankRepo->getTankByName( 'M46 Patton' ));
        $manager->persist( $engine44 );

//        VIII,usa,Continental AV-1790-3,800 hp,20 %,Gasoline,59000,569 kg,"T29, 
//         T32, T30, T54E1"
        $engine45 = new Engine();
        $engine45->setTier( $tier8 );
        $engine45->setNationality( $nationality );
        $engine45->setName( 'Continental AV-1790-3' );
        $engine45->setPower( 800 );
        $engine45->setFireChance( 20 );
        $engine45->setFuelType($gazoline  );
        $engine45->setCost( 59000 );
        $engine45->setWeight( 569 );
        $engine45->addTank( $tankRepo->getTankByName( 'T29' ));
        $engine45->addTank( $tankRepo->getTankByName( 'T32' ));
        $engine45->addTank( $tankRepo->getTankByName( 'T30' ));
        $engine45->addTank( $tankRepo->getTankByName( 'T54E1' ));
        $manager->persist( $engine45 );

//        VIII,usa,GMC Allison V1710-E32,760 hp,20 %,Gasoline,48500,556 kg,"T29, T32"
        $engine46 = new Engine();
        $engine46->setTier( $tier8 );
        $engine46->setNationality( $nationality );
        $engine46->setName( 'GMC Allison V1710-E32' );
        $engine46->setPower( 760 );
        $engine46->setFireChance( 20 );
        $engine46->setFuelType( $gazoline );
        $engine46->setCost( 48500 );
        $engine46->setWeight( 556 );
        $engine46->addTank( $tankRepo->getTankByName( 'T29' ));
        $engine46->addTank( $tankRepo->getTankByName( 'T32' ));
        $manager->persist( $engine46 );

//        IX,usa,AV-1790-5A,820 hp,20 %,Gasoline,99000,569 kg,M46 Patton
        $engine47 = new Engine();
        $engine47->setTier( $tier9 );
        $engine47->setNationality( $nationality );
        $engine47->setName( 'AV-1790-5A' );
        $engine47->setPower( 820 );
        $engine47->setFireChance( 20 );
        $engine47->setFuelType( $gazoline );
        $engine47->setCost( 99000 );
        $engine47->setWeight( 569 );
        $engine47->addTank( $tankRepo->getTankByName( 'M46 Patton' ));
        $manager->persist( $engine47 );

//        IX,usa,Continental AV-1790-3A1,810 hp,20 %,Gasoline,0,1057 kg,T34
        $engine48 = new Engine();
        $engine48->setTier( $tier9 );
        $engine48->setNationality( $nationality );
        $engine48->setName( 'Continental AV-1790-3A1' );
        $engine48->setPower( 810 );
        $engine48->setFireChance( 20 );
        $engine48->setFuelType( $gazoline );
        $engine48->setCost( 0 );
        $engine48->setWeight( 1057 );
        $engine48->addTank( $tankRepo->getTankByName( 'T34' ));
        $manager->persist( $engine48 );

//        IX,usa,Continental AV-1790-5B,810 hp,20 %,Gasoline,80000,569 kg,"T54E1, M103"
        $engine49 = new Engine();
        $engine49->setTier( $tier9 );
        $engine49->setNationality( $nationality );
        $engine49->setName( 'Continental AV-1790-5B' );
        $engine49->setPower( 810 );
        $engine49->setFireChance( 20 );
        $engine49->setFuelType( $gazoline );
        $engine49->setCost( 80000 );
        $engine49->setWeight( 569 );
        $engine49->addTank( $tankRepo->getTankByName( 'T54E1' ));
        $engine49->addTank( $tankRepo->getTankByName( 'M103' ));
        $manager->persist( $engine49 );

//        X,usa,AOI-1490,875 hp,20 %,Gasoline,100000,1200 kg,"T110E5, T110E4, T110E3"
        $engine50 = new Engine();
        $engine50->setTier( $tier10 );
        $engine50->setNationality( $nationality );
        $engine50->setName( 'AOI-1490' );
        $engine50->setPower( 875 );
        $engine50->setFireChance( 20 );
        $engine50->setFuelType( $gazoline );
        $engine50->setCost( 100000 );
        $engine50->setWeight( 1200 );
        $engine50->addTank( $tankRepo->getTankByName( 'T110E5' ));
        $engine50->addTank( $tankRepo->getTankByName( 'T110E4' ));
        $engine50->addTank( $tankRepo->getTankByName( 'T110E3' ));
        $manager->persist( $engine50 );

//        X,usa,Continental AV-1790-5,860 hp,20 %,Gasoline,100000,569 kg,T30
        $engine51 = new Engine();
        $engine51->setTier( $tier10 );
        $engine51->setNationality( $nationality );
        $engine51->setName( 'Continental AV-1790-5' );
        $engine51->setPower( 860 );
        $engine51->setFireChance( 20 );
        $engine51->setFuelType( $gazoline );
        $engine51->setCost( 100000 );
        $engine51->setWeight( 569 );
        $engine51->addTank( $tankRepo->getTankByName( 'T30' ));
        $manager->persist( $engine51 );

//        X,usa,Continental AV-1790-5C,810 hp,20 %,Gasoline,99000,1159 kg,T57 Heavy Tank
        $engine52 = new Engine();
        $engine52->setTier( $tier10 );
        $engine52->setNationality( $nationality );
        $engine52->setName( 'Continental AV-1790-5C' );
        $engine52->setPower( 810 );
        $engine52->setFireChance( 20 );
        $engine52->setFuelType( $gazoline );
        $engine52->setCost( 99000 );
        $engine52->setWeight( 1159 );
        $engine52->addTank( $tankRepo->getTankByName( 'T57 Heavy Tank' ));
        $manager->persist( $engine52 );

//        X,usa,Continental AV-1790-7B,810 hp,12 %,Gasoline,100000,569 kg,M48A1
        $engine53 = new Engine();
        $engine53->setTier( $tier10 );
        $engine53->setNationality( $nationality );
        $engine53->setName( 'Continental AV-1790-7B' );
        $engine53->setPower( 810 );
        $engine53->setFireChance( 12 );
        $engine53->setFuelType( $gazoline );
        $engine53->setCost( 100000 );
        $engine53->setWeight( 569 );
        $engine53->addTank( $tankRepo->getTankByName( 'M48A1' ));
        $manager->persist( $engine53 );

//        X,usa,Continental AV-1790-7C,860 hp,20 %,Gasoline,100000,569 kg,M103
        $engine54 = new Engine();
        $engine54->setTier( $tier10 );
        $engine54->setNationality( $nationality );
        $engine54->setName( 'Continental AV-1790-7C' );
        $engine54->setPower( 860 );
        $engine54->setFireChance( 20 );
        $engine54->setFuelType( $gazoline );
        $engine54->setCost( 100000 );
        $engine54->setWeight( 569 );
        $engine54->addTank( $tankRepo->getTankByName( 'M103' ));
        $manager->persist( $engine54 );

//        X,usa,Wright G200 M781 C9GC5,960 hp,20 %,Gasoline,0,612 kg,M6A2E1
        $engine55 = new Engine();
        $engine55->setTier( $tier10 );
        $engine55->setNationality( $nationality );
        $engine55->setName( ',Wright G200 M781 C9GC5' );
        $engine55->setPower( 960 );
        $engine55->setFireChance( 20 );
        $engine55->setFuelType( $gazoline );
        $engine55->setCost( 0 );
        $engine55->setWeight( 612 );
        $engine55->addTank( $tankRepo->getTankByName( 'M6A2E1' ));
        $manager->persist( $engine55 );

        $manager->flush();
    }
}