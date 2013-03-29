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

//        Tier,Nationality,Name,Power,Chance of Fire,Type,Price,Weight,Compatibility
//        I,ussr,AMO-3,70 hp,20 %,Gasoline,340,920 kg,"MS-1, SU-18"
        $engine1 = new Engine();
        $engine1->setTier( $tier1 );
        $engine1->setNationality( $nationality );
        $engine1->setName( 'AMO-3' );
        $engine1->setPower( 70 );
        $engine1->setFireChance( 20 );
        $engine1->setFuelType( $gazoline );
        $engine1->setCost( 340 );
        $engine1->setWeight( 920 );
        $engine1->addTank( $tankRepo->getTankByName( 'MS-1' ));
        $engine1->addTank( $tankRepo->getTankByName( 'SU-18' ));
        $manager->persist( $engine1 );

//        I,ussr,GAZ-M1,55 hp,20 %,Gasoline,310,215 kg,"MS-1, SU-18"
        $engine2 = new Engine();
        $engine2->setTier( $tier1 );
        $engine2->setNationality( $nationality );
        $engine2->setName( 'GAZ-M1' );
        $engine2->setPower( 55 );
        $engine2->setFireChance( 20 );
        $engine2->setFuelType( $gazoline );
        $engine2->setCost( 310 );
        $engine2->setWeight( 215 );
        $engine2->addTank( $tankRepo->getTankByName( 'MS-1' ));
        $engine2->addTank( $tankRepo->getTankByName( 'SU-18' ));
        $manager->persist( $engine2 );

//        I,ussr,MS-1,43 hp,20 %,Gasoline,0,266 kg,"MS-1, SU-18"
        $engine3 = new Engine();
        $engine3->setTier( $tier1 );
        $engine3->setNationality( $nationality );
        $engine3->setName( 'MS-1' );
        $engine3->setPower( 43 );
        $engine3->setFireChance( 20 );
        $engine3->setFuelType( $gazoline );
        $engine3->setCost( 0 );
        $engine3->setWeight( 266 );
        $engine3->addTank( $tankRepo->getTankByName( 'MS-1' ));
        $engine3->addTank( $tankRepo->getTankByName( 'SU-18' ));
        $manager->persist( $engine3 );

//        I,ussr,T-26,90 hp,20 %,Gasoline,770,545 kg,"AT-1, T-26, SU-26, SU-5"
        $engine4 = new Engine();
        $engine4->setTier( $tier1 );
        $engine4->setNationality( $nationality );
        $engine4->setName( 'T-26' );
        $engine4->setPower( 90 );
        $engine4->setFireChance( 20 );
        $engine4->setFuelType( $gazoline );
        $engine4->setCost( 770 );
        $engine4->setWeight( 545 );
        $engine4->addTank( $tankRepo->getTankByName( 'AT-1' ));
        $engine4->addTank( $tankRepo->getTankByName( 'T-26' ));
        $engine4->addTank( $tankRepo->getTankByName( 'SU-26' ));
        $engine4->addTank( $tankRepo->getTankByName( 'SU-5' ));
        $manager->persist( $engine4 );

//        II,ussr,GAZ-11,80 hp,20 %,Gasoline,810,275 kg,SU-76
        $engine5 = new Engine();
        $engine5->setTier( $tier2 );
        $engine5->setNationality( $nationality );
        $engine5->setName( 'GAZ-11' );
        $engine5->setPower( 80 );
        $engine5->setFireChance( 20 );
        $engine5->setFuelType( $gazoline );
        $engine5->setCost( 810 );
        $engine5->setWeight( 275 );
        $engine5->addTank( $tankRepo->getTankByName( 'SU-76' ));
        $manager->persist( $engine5 );

//        II,ussr,T-26F,130 hp,20 %,Gasoline,1500,545 kg,"AT-1, T-26, SU-26, SU-5"
        $engine6 = new Engine();
        $engine6->setTier( $tier2 );
        $engine6->setNationality( $nationality );
        $engine6->setName( 'T-26F' );
        $engine6->setPower( 130 );
        $engine6->setFireChance( 20 );
        $engine6->setFuelType( $gazoline );
        $engine6->setCost( 1500 );
        $engine6->setWeight( 545 );
        $engine6->addTank( $tankRepo->getTankByName( 'AT-1' ));
        $engine6->addTank( $tankRepo->getTankByName( 'T-26' ));
        $engine6->addTank( $tankRepo->getTankByName( 'SU-26' ));
        $engine6->addTank( $tankRepo->getTankByName( 'SU-5' ));
        $manager->persist( $engine6 );

//        II,ussr,T-26M,100 hp,20 %,Gasoline,1230,545 kg,"AT-1, T-26, SU-26, SU-5"
        $engine7 = new Engine();
        $engine7->setTier( $tier2 );
        $engine7->setNationality( $nationality );
        $engine7->setName( 'T-26M' );
        $engine7->setPower( 100 );
        $engine7->setFireChance( 20 );
        $engine7->setFuelType( $gazoline );
        $engine7->setCost( 1230 );
        $engine7->setWeight( 545 );
        $engine7->addTank( $tankRepo->getTankByName( 'AT-1' ));
        $engine7->addTank( $tankRepo->getTankByName( 'T-26' ));
        $engine7->addTank( $tankRepo->getTankByName( 'SU-26' ));
        $engine7->addTank( $tankRepo->getTankByName( 'SU-5' ));
        $manager->persist( $engine7 );

//        III,ussr,AEC3,274 hp,15 %,Gasoline,0,400 kg,Matilda IV
        $engine8 = new Engine();
        $engine8->setTier( $tier3 );
        $engine8->setNationality( $nationality );
        $engine8->setName( 'AEC3' );
        $engine8->setPower( 274 );
        $engine8->setFireChance( 15 );
        $engine8->setFuelType( $gazoline );
        $engine8->setCost( 0 );
        $engine8->setWeight( 400 );
        $engine8->addTank( $tankRepo->getTankByName( 'Matilda IV' ));
        $manager->persist( $engine8 );

//        III,ussr,AEC-A190,140 hp,15 %,Gasoline,0,800 kg,Valentine II
        $engine9 = new Engine();
        $engine9->setTier( $tier3 );
        $engine9->setNationality( $nationality );
        $engine9->setName( 'AEC-A190' );
        $engine9->setPower( 140 );
        $engine9->setFireChance( 15 );
        $engine9->setFuelType( $gazoline );
        $engine9->setCost( 0 );
        $engine9->setWeight( 800 );
        $engine9->addTank( $tankRepo->getTankByName( 'Valentine II' ));
        $manager->persist( $engine9 );

//        III,ussr,GAZ-203,140 hp,20 %,Gasoline,3830,362 kg,"SU-76, SU-85B"
        $engine10 = new Engine();
        $engine10->setTier( $tier3 );
        $engine10->setNationality( $nationality );
        $engine10->setName( 'GAZ-203' );
        $engine10->setPower( 140 );
        $engine10->setFireChance( 20 );
        $engine10->setFuelType( $gazoline );
        $engine10->setCost( 3830 );
        $engine10->setWeight( 362 );
        $engine10->addTank( $tankRepo->getTankByName( 'SU-76' ));
        $engine10->addTank( $tankRepo->getTankByName( 'SU-85B' ));
        $manager->persist( $engine10 );

//        III,ussr,GAZ-203F,158 hp,20 %,Gasoline,4120,362 kg,SU-85B
        $engine11 = new Engine();
        $engine11->setTier( $tier3 );
        $engine11->setNationality( $nationality );
        $engine11->setName( 'GAZ-203F' );
        $engine11->setPower( 158 );
        $engine11->setFireChance( 20 );
        $engine11->setFuelType( $gazoline );
        $engine11->setCost( 4120 );
        $engine11->setWeight( 362 );
        $engine11->addTank( $tankRepo->getTankByName( 'SU-85B' ));
        $manager->persist( $engine11 );

//        III,ussr,GMC,210 hp,15 %,Diesel,4500,400 kg,SU-85B
        $engine12 = new Engine();
        $engine12->setTier( $tier3 );
        $engine12->setNationality( $nationality );
        $engine12->setName( 'GMC' );
        $engine12->setPower( 210 );
        $engine12->setFireChance( 15 );
        $engine12->setFuelType( $diesel );
        $engine12->setCost( 4500 );
        $engine12->setWeight( 400 );
        $engine12->addTank( $tankRepo->getTankByName( 'SU-85B' ));
        $manager->persist( $engine12 );

//        III,ussr,M-80,170 hp,20 %,Gasoline,4130,362 kg,SU-76
        $engine13 = new Engine();
        $engine13->setTier( $tier3 );
        $engine13->setNationality( $nationality );
        $engine13->setName( 'M-80' );
        $engine13->setPower( 170 );
        $engine13->setFireChance( 20 );
        $engine13->setFuelType( $gazoline );
        $engine13->setCost( 4130 );
        $engine13->setWeight( 362 );
        $engine13->addTank( $tankRepo->getTankByName( 'SU-76' ));
        $manager->persist( $engine13 );

//        III,ussr,Medous MAT,180 hp,20 %,Gasoline,0,362 kg,Tetrarch
        $engine14 = new Engine();
        $engine14->setTier( $tier3 );
        $engine14->setNationality( $nationality );
        $engine14->setName( 'Medous MAT' );
        $engine14->setPower( 180 );
        $engine14->setFireChance( 20 );
        $engine14->setFuelType( $gazoline );
        $engine14->setCost( 0 );
        $engine14->setWeight( 362 );
        $engine14->addTank( $tankRepo->getTankByName( 'Tetrarch' ));
        $manager->persist( $engine14 );

//        IV,ussr,Continental W-670,268 hp,20 %,Gasoline,0,256 kg,M3 Stuart Lend Lease
        $engine15 = new Engine();
        $engine15->setTier( $tier4 );
        $engine15->setNationality( $nationality );
        $engine15->setName( 'Continental W-670' );
        $engine15->setPower( 268 );
        $engine15->setFireChance( 20 );
        $engine15->setFuelType( $gazoline );
        $engine15->setCost( 0 );
        $engine15->setWeight( 256 );
        $engine15->addTank( $tankRepo->getTankByName( 'M3 Stuart Lend Lease' ));
        $manager->persist( $engine15 );

//        IV,ussr,D-744,250 hp,15 %,Diesel,0,500 kg,T-127
        $engine16 = new Engine();
        $engine16->setTier( $tier4 );
        $engine16->setNationality( $nationality );
        $engine16->setName( 'D-744' );
        $engine16->setPower( 250 );
        $engine16->setFireChance( 15 );
        $engine16->setFuelType( $diesel );
        $engine16->setCost( 0 );
        $engine16->setWeight( 500 );
        $engine16->addTank( $tankRepo->getTankByName( 'T-127' ));
        $manager->persist( $engine16 );

//        IV,ussr,M-17F,500 hp,20 %,Gasoline,13460,610 kg,"BT-7, T-28, KV-1, SU-8, KV-2"
        $engine17 = new Engine();
        $engine17->setTier( $tier4 );
        $engine17->setNationality( $nationality );
        $engine17->setName( 'M-17F' );
        $engine17->setPower( 500 );
        $engine17->setFireChance( 20 );
        $engine17->setFuelType( $gazoline );
        $engine17->setCost( 13460 );
        $engine17->setWeight( 610 );
        $engine17->addTank( $tankRepo->getTankByName( 'BT-7' ));
        $engine17->addTank( $tankRepo->getTankByName( 'T-28' ));
        $engine17->addTank( $tankRepo->getTankByName( 'KV-1' ));
        $engine17->addTank( $tankRepo->getTankByName( 'SU-8' ));
        $engine17->addTank( $tankRepo->getTankByName( 'KV-2' ));
        $manager->persist( $engine17 );

//        IV,ussr,M-17FO,500 hp,20 %,Gasoline,0,610 kg,BT-SV
        $engine18 = new Engine();
        $engine18->setTier( $tier4 );
        $engine18->setNationality( $nationality );
        $engine18->setName( 'M-17FO' );
        $engine18->setPower( 500 );
        $engine18->setFireChance( 20 );
        $engine18->setFuelType( $gazoline );
        $engine18->setCost( 0 );
        $engine18->setWeight( 610 );
        $engine18->addTank( $tankRepo->getTankByName( 'BT-SV' ));
        $manager->persist( $engine18 );

//        IV,ussr,M-17T,450 hp,20 %,Gasoline,10770,610 kg,"BT-2, BT-7, T-28, KV-1, SU-8"
        $engine19 = new Engine();
        $engine19->setTier( $tier4 );
        $engine19->setNationality( $nationality );
        $engine19->setName( 'M-17T' );
        $engine19->setPower( 450 );
        $engine19->setFireChance( 20 );
        $engine19->setFuelType( $gazoline );
        $engine19->setCost( 10770 );
        $engine19->setWeight( 610 );
        $engine19->addTank( $tankRepo->getTankByName( 'BT-2' ));
        $engine19->addTank( $tankRepo->getTankByName( 'BT-7' ));
        $engine19->addTank( $tankRepo->getTankByName( 'T-28' ));
        $engine19->addTank( $tankRepo->getTankByName( 'KV-1' ));
        $engine19->addTank( $tankRepo->getTankByName( 'SU-8' ));
        $manager->persist( $engine19 );

//        IV,ussr,M-5-400,400 hp,20 %,Gasoline,10230,410 kg,"BT-2, T-28"
        $engine20 = new Engine();
        $engine20->setTier( $tier4 );
        $engine20->setNationality( $nationality );
        $engine20->setName( 'M-5-400' );
        $engine20->setPower( 400 );
        $engine20->setFireChance( 20 );
        $engine20->setFuelType( $gazoline );
        $engine20->setCost( 10230 );
        $engine20->setWeight( 410 );
        $engine20->addTank( $tankRepo->getTankByName( 'BT-2' ));
        $engine20->addTank( $tankRepo->getTankByName( 'T-28' ));
        $manager->persist( $engine20 );

//        IV,ussr,M-5-400F,440 hp,20 %,Gasoline,10000,410 kg,SU-8
        $engine21 = new Engine();
        $engine21->setTier( $tier4 );
        $engine21->setNationality( $nationality );
        $engine21->setName( 'M-5-400F' );
        $engine21->setPower( 440 );
        $engine21->setFireChance( 20 );
        $engine21->setFuelType( $gazoline );
        $engine21->setCost( 10000 );
        $engine21->setWeight( 410 );
        $engine21->addTank( $tankRepo->getTankByName( 'SU-8' ));
        $manager->persist( $engine21 );

//        IV,ussr,MT-5-1,350 hp,20 %,Gasoline,10200,920 kg,T-46
        $engine22 = new Engine();
        $engine22->setTier( $tier4 );
        $engine22->setNationality( $nationality );
        $engine22->setName( 'MT-5-1' );
        $engine22->setPower( 350 );
        $engine22->setFireChance( 20 );
        $engine22->setFuelType( $gazoline );
        $engine22->setCost( 10200 );
        $engine22->setWeight( 920 );
        $engine22->addTank( $tankRepo->getTankByName( 'T-46' ));
        $manager->persist( $engine22 );

//        IV,ussr,Maybach HL 120 TRM,440 hp,20 %,Gasoline,,510 kg,SU-85I
        $engine23 = new Engine();
        $engine23->setTier( $tier4 );
        $engine23->setNationality( $nationality );
        $engine23->setName( 'Maybach HL 120 TRM' );
        $engine23->setPower( 440 );
        $engine23->setFireChance( 20 );
        $engine23->setFuelType( $gazoline );
        $engine23->setCost( 0 );
        $engine23->setWeight( 510 );
        $engine23->addTank( $tankRepo->getTankByName( 'SU-85I' ));
        $manager->persist( $engine23 );

//        IV,ussr,V-4,300 hp,15 %,Diesel,9000,500 kg,"T-46, T-50, T-50-2"
        $engine24 = new Engine();
        $engine24->setTier( $tier4 );
        $engine24->setNationality( $nationality );
        $engine24->setName( 'V-4' );
        $engine24->setPower( 300 );
        $engine24->setFireChance( 15 );
        $engine24->setFuelType( $diesel );
        $engine24->setCost( 9000 );
        $engine24->setWeight( 500 );
        $engine24->addTank( $tankRepo->getTankByName( 'T-46' ));
        $engine24->addTank( $tankRepo->getTankByName( 'T-50' ));
        $engine24->addTank( $tankRepo->getTankByName( 'T-50-2' ));
        $manager->persist( $engine24 );

//        V,ussr,BD-2,540 hp,15 %,Diesel,,750 kg,A-32
        $engine25 = new Engine();
        $engine25->setTier( $tier5 );
        $engine25->setNationality( $nationality );
        $engine25->setName( 'BD-2' );
        $engine25->setPower( 540 );
        $engine25->setFireChance( 15 );
        $engine25->setFuelType( $diesel );
        $engine25->setCost( 0 );
        $engine25->setWeight( 750 );
        $engine25->addTank( $tankRepo->getTankByName( 'A-32' ));
        $manager->persist( $engine25 );

//        V,ussr,Bedford Twin-Six,374 hp,15 %,Gasoline,0,1531 kg,Churchill III
        $engine26 = new Engine();
        $engine26->setTier( $tier5 );
        $engine26->setNationality( $nationality );
        $engine26->setName( 'Bedford Twin-Six' );
        $engine26->setPower( 374 );
        $engine26->setFireChance( 15 );
        $engine26->setFuelType( $gazoline );
        $engine26->setCost( 0 );
        $engine26->setWeight( 1531 );
        $engine26->addTank( $tankRepo->getTankByName( 'Churchill III' ));
        $manager->persist( $engine26 );

//        V,ussr,M-5-400F Bis,440 hp,20 %,Gasoline,16100,410 kg,"T-50, T-50-2"
        $engine27 = new Engine();
        $engine27->setTier( $tier5 );
        $engine27->setNationality( $nationality );
        $engine27->setName( 'M-5-400F Bis' );
        $engine27->setPower( 440 );
        $engine27->setFireChance( 20 );
        $engine27->setFuelType( $gazoline );
        $engine27->setCost(16100  );
        $engine27->setWeight( 410 );
        $engine27->addTank( $tankRepo->getTankByName( 'T-50' ));
        $engine27->addTank( $tankRepo->getTankByName( 'T-50-2' ));
        $manager->persist( $engine27 );

//        V,ussr,V-2,480 hp,15 %,Diesel,18750,750 kg,"BT-7, A-20, T-34, SU-85"
        $engine28 = new Engine();
        $engine28->setTier( $tier5 );
        $engine28->setNationality( $nationality );
        $engine28->setName( 'V-2' );
        $engine28->setPower( 480 );
        $engine28->setFireChance( 15 );
        $engine28->setFuelType( $diesel );
        $engine28->setCost( 18750 );
        $engine28->setWeight( 750 );
        $engine28->addTank( $tankRepo->getTankByName( 'BT-7' ));
        $engine28->addTank( $tankRepo->getTankByName( 'A-20' ));
        $engine28->addTank( $tankRepo->getTankByName( 'T-34' ));
        $engine28->addTank( $tankRepo->getTankByName( 'SU-85' ));
        $manager->persist( $engine28 );

//        VI,ussr,M-17E,550 hp,20 %,Gasoline,29300,610 kg,"T-50, T-50-2"
        $engine29 = new Engine();
        $engine29->setTier( $tier6 );
        $engine29->setNationality( $nationality );
        $engine29->setName( 'M-17E' );
        $engine29->setPower( 550 );
        $engine29->setFireChance( 20 );
        $engine29->setFuelType( $gazoline );
        $engine29->setCost( 29300 );
        $engine29->setWeight( 610 );
        $engine29->addTank( $tankRepo->getTankByName( 'T-50' ));
        $engine29->addTank( $tankRepo->getTankByName( 'T-50-2' ));
        $manager->persist( $engine29 );

//        VI,ussr,V-2-34,500 hp,15 %,Diesel,27860,750 kg,"A-20, T-34, SU-85, SU-100, T-34-85, SU-100M1"
        $engine30 = new Engine();
        $engine30->setTier( $tier6 );
        $engine30->setNationality( $nationality );
        $engine30->setName( 'V-2-34' );
        $engine30->setPower( 500 );
        $engine30->setFireChance( 15 );
        $engine30->setFuelType( $diesel );
        $engine30->setCost( 27860 );
        $engine30->setWeight( 750 );
        $engine30->addTank( $tankRepo->getTankByName( 'A-20' ));
        $engine30->addTank( $tankRepo->getTankByName( 'T-34' ));
        $engine30->addTank( $tankRepo->getTankByName( 'SU-85' ));
        $engine30->addTank( $tankRepo->getTankByName( 'SU-100' ));
        $engine30->addTank( $tankRepo->getTankByName( 'T-34-85' ));
        $engine30->addTank( $tankRepo->getTankByName( 'SU-100M1' ));
        $manager->persist( $engine30 );

//        VI,ussr,V-2-34M,520 hp,15 %,Diesel,29500,750 kg,"SU-100, T-34-85, T-43, SU-100M1"
        $engine31 = new Engine();
        $engine31->setTier( $tier6 );
        $engine31->setNationality( $nationality );
        $engine31->setName( 'V-2-34M' );
        $engine31->setPower( 520 );
        $engine31->setFireChance( 15 );
        $engine31->setFuelType( $diesel );
        $engine31->setCost( 29500 );
        $engine31->setWeight( 750 );
        $engine31->addTank( $tankRepo->getTankByName( 'SU-100' ));
        $engine31->addTank( $tankRepo->getTankByName( 'T-34-85' ));
        $engine31->addTank( $tankRepo->getTankByName( 'T-43' ));
        $engine31->addTank( $tankRepo->getTankByName( 'SU-100M1' ));
        $manager->persist( $engine31 );

//        VI,ussr,V-2K,500 hp,15 %,Diesel,23050,750 kg,"KV-1, T-150, KV-1S, KV-2, S-51, SU-14, SU-152, KV-13"
        $engine32 = new Engine();
        $engine32->setTier( $tier6 );
        $engine32->setNationality( $nationality );
        $engine32->setName( 'V-2K' );
        $engine32->setPower( 500 );
        $engine32->setFireChance( 15 );
        $engine32->setFuelType( $diesel );
        $engine32->setCost( 23050 );
        $engine32->setWeight( 750 );
        $engine32->addTank( $tankRepo->getTankByName( 'KV-1' ));
        $engine32->addTank( $tankRepo->getTankByName( 'T-150' ));
        $engine32->addTank( $tankRepo->getTankByName( 'KV-1S' ));
        $engine32->addTank( $tankRepo->getTankByName( 'KV-2' ));
        $engine32->addTank( $tankRepo->getTankByName( 'S-51' ));
        $engine32->addTank( $tankRepo->getTankByName( 'SU-14' ));
        $engine32->addTank( $tankRepo->getTankByName( 'SU-152' ));
        $engine32->addTank( $tankRepo->getTankByName( 'KV-13' ));
        $manager->persist( $engine32 );

//        VI,ussr,V-2KT,650 hp,15 %,Diesel,0,700 kg,"KV-220 Beta-Test, KV-220"
        $engine33 = new Engine();
        $engine33->setTier( $tier6 );
        $engine33->setNationality( $nationality );
        $engine33->setName( 'V-2KT' );
        $engine33->setPower( 650 );
        $engine33->setFireChance( 15 );
        $engine33->setFuelType( $diesel );
        $engine33->setCost( 0 );
        $engine33->setWeight( 700 );
        $engine33->addTank( $tankRepo->getTankByName( 'KV-220 Beta-Test' ));
        $engine33->addTank( $tankRepo->getTankByName( 'KV-220' ));
        $manager->persist( $engine33 );

//        VI,ussr,V-44,500 hp,15 %,Diesel,0,750 kg,SU-122-44
        $engine34 = new Engine();
        $engine34->setTier( $tier6 );
        $engine34->setNationality( $nationality );
        $engine34->setName( 'V-44' );
        $engine34->setPower( 500 );
        $engine34->setFireChance( 15 );
        $engine34->setFuelType( $diesel );
        $engine34->setCost( 0 );
        $engine34->setWeight( 750 );
        $engine34->addTank( $tankRepo->getTankByName( 'SU-122-44' ));
        $manager->persist( $engine34 );

//        VI,ussr,V-5,560 hp,15 %,Diesel,27860,700 kg,"T-150, KV-2, KV-3"
        $engine35 = new Engine();
        $engine35->setTier( $tier6 );
        $engine35->setNationality( $nationality );
        $engine35->setName( 'V-5' );
        $engine35->setPower( 560 );
        $engine35->setFireChance( 15 );
        $engine35->setFuelType( $diesel );
        $engine35->setCost( 27860 );
        $engine35->setWeight( 700 );
        $engine35->addTank( $tankRepo->getTankByName( 'T-150' ));
        $engine35->addTank( $tankRepo->getTankByName( 'KV-2' ));
        $engine35->addTank( $tankRepo->getTankByName( 'KV-3' ));
        $manager->persist( $engine35 );

//        VI,ussr,V-5U,580 hp,15 %,Diesel,27860,700 kg,Object 212
        $engine36 = new Engine();
        $engine36->setTier( $tier6 );
        $engine36->setNationality( $nationality );
        $engine36->setName( 'V-5U' );
        $engine36->setPower( 580 );
        $engine36->setFireChance( 15 );
        $engine36->setFuelType( $diesel );
        $engine36->setCost( 27860 );
        $engine36->setWeight( 700 );
        $engine36->addTank( $tankRepo->getTankByName( 'Object 212' ));
        $manager->persist( $engine36 );

//        VII,ussr,V-2IS,600 hp,15 %,Diesel,36000,750 kg,"KV-1S, S-51, SU-14, 
//         SU-152, KV-13, KV-3, IS, Object 212, ISU-152"
        $engine37 = new Engine();
        $engine37->setTier( $tier7 );
        $engine37->setNationality( $nationality );
        $engine37->setName( 'V-2IS' );
        $engine37->setPower( 600 );
        $engine37->setFireChance( 15 );
        $engine37->setFuelType( $diesel );
        $engine37->setCost( 36000 );
        $engine37->setWeight( 750 );
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

//        VII,ussr,V-5F,700 hp,15 %,Diesel,39000,750 kg,T-150
        $engine38 = new Engine();
        $engine38->setTier( $tier7 );
        $engine38->setNationality( $nationality );
        $engine38->setName( 'V-5F' );
        $engine38->setPower( 700 );
        $engine38->setFireChance( 15 );
        $engine38->setFuelType( $diesel );
        $engine38->setCost( 39000 );
        $engine38->setWeight( 750 );
        $engine38->addTank( $tankRepo->getTankByName( 'T-150' ));
        $manager->persist( $engine38 );

//        VIII,ussr,V-11,650 hp,15 %,Diesel,55270,750 kg,"IS-3, Object 261, ST-I, Object 704"
        $engine39 = new Engine();
        $engine39->setTier( $tier8 );
        $engine39->setNationality( $nationality );
        $engine39->setName( 'V-11' );
        $engine39->setPower( 650 );
        $engine39->setFireChance( 15 );
        $engine39->setFuelType( $diesel );
        $engine39->setCost( 55270 );
        $engine39->setWeight( 750 );
        $engine39->addTank( $tankRepo->getTankByName( 'IS-3' ));
        $engine39->addTank( $tankRepo->getTankByName( 'Object 261' ));
        $engine39->addTank( $tankRepo->getTankByName( 'ST-I' ));
        $engine39->addTank( $tankRepo->getTankByName( 'Object 704' ));
        $manager->persist( $engine39 );

//        VIII,ussr,V-2-44,560 hp,12 %,Diesel,49740,750 kg,"T-43, T-44, SU-101"
        $engine40 = new Engine();
        $engine40->setTier( $tier8 );
        $engine40->setNationality( $nationality );
        $engine40->setName( 'V-2-44' );
        $engine40->setPower( 560 );
        $engine40->setFireChance( 12 );
        $engine40->setFuelType( $diesel );
        $engine40->setCost( 49740 );
        $engine40->setWeight( 750 );
        $engine40->addTank( $tankRepo->getTankByName( 'T-43' ));
        $engine40->addTank( $tankRepo->getTankByName( 'T-44' ));
        $engine40->addTank( $tankRepo->getTankByName( 'SU-101' ));
        $manager->persist( $engine40 );

//        VIII,ussr,V-2SN,750 hp,15 %,Diesel,17000,750 kg,KV-3
        $engine41 = new Engine();
        $engine41->setTier( $tier8 );
        $engine41->setNationality( $nationality );
        $engine41->setName( 'V-2SN' );
        $engine41->setPower( 750 );
        $engine41->setFireChance( 15 );
        $engine41->setFuelType( $diesel );
        $engine41->setCost( 17000 );
        $engine41->setWeight( 750 );
        $engine41->addTank( $tankRepo->getTankByName( 'KV-3' ));
        $manager->persist( $engine41 );

//        VIII,ussr,V-54K,600 hp,12 %,Diesel,58000,750 kg,"T-34-85, T-43, SU-100M1"
        $engine42 = new Engine();
        $engine42->setTier( $tier8 );
        $engine42->setNationality( $nationality );
        $engine42->setName( 'V-54K' );
        $engine42->setPower( 600 );
        $engine42->setFireChance( 12 );
        $engine42->setFuelType( $diesel );
        $engine42->setCost( 58000 );
        $engine42->setWeight( 750 );
        $engine42->addTank( $tankRepo->getTankByName( 'T-34-85' ));
        $engine42->addTank( $tankRepo->getTankByName( 'T-43' ));
        $engine42->addTank( $tankRepo->getTankByName( 'SU-100M1' ));
        $manager->persist( $engine42 );

//        IX,ussr,M-50TD,950 hp,15 %,Diesel,98000s,700 kg,Object 261
        $engine43 = new Engine();
        $engine43->setTier( $tier9 );
        $engine43->setNationality( $nationality );
        $engine43->setName( 'M-50TD' );
        $engine43->setPower( 950 );
        $engine43->setFireChance( 15 );
        $engine43->setFuelType( $diesel );
        $engine43->setCost( 98000 );
        $engine43->setWeight( 700 );
        $engine43->addTank( $tankRepo->getTankByName( 'Object 261' ));
        $manager->persist( $engine43 );

//        IX,ussr,M-50D,1200 hp,15 %,Diesel,0,700 kg,KV-5
        $engine44 = new Engine();
        $engine44->setTier( $tier9 );
        $engine44->setNationality( $nationality );
        $engine44->setName( 'M-50D' );
        $engine44->setPower( 1200 );
        $engine44->setFireChance( 15 );
        $engine44->setFuelType( $diesel );
        $engine44->setCost( 0 );
        $engine44->setWeight( 700 );
        $engine44->addTank( $tankRepo->getTankByName( 'KV-5' ));
        $manager->persist( $engine44 );

//        IX,ussr,M-40,1000 hp,15 %,Diesel,85000,1250 kg,KV-4
        $engine45 = new Engine();
        $engine45->setTier( $tier9 );
        $engine45->setNationality( $nationality );
        $engine45->setName( 'M-40' );
        $engine45->setPower( 1000 );
        $engine45->setFireChance( 15 );
        $engine45->setFuelType( $diesel );
        $engine45->setCost( 85000 );
        $engine45->setWeight( 1250 );
        $engine45->addTank( $tankRepo->getTankByName( 'KV-4' ));
        $manager->persist( $engine45 );

//        IX,ussr,M-50D,900 hp,15 %,Diesel,87000,700 kg,Object 261
        $engine46 = new Engine();
        $engine46->setTier( $tier9 );
        $engine46->setNationality( $nationality );
        $engine46->setName( 'M-50D' );
        $engine46->setPower( 900 );
        $engine46->setFireChance( 15 );
        $engine46->setFuelType( $diesel );
        $engine46->setCost( 87000 );
        $engine46->setWeight( 700 );
        $engine46->addTank( $tankRepo->getTankByName( 'Object 261' ));
        $manager->persist( $engine46 );

//        IX,ussr,V-12-5,700 hp,15 %,Diesel,84000,1024 kg,IS-8
        $engine47 = new Engine();
        $engine47->setTier( $tier9 );
        $engine47->setNationality( $nationality );
        $engine47->setName( 'V-12-5' );
        $engine47->setPower( 700 );
        $engine47->setFireChance( 15 );
        $engine47->setFuelType( $diesel );
        $engine47->setCost( 84000 );
        $engine47->setWeight( 1024 );
        $engine47->addTank( $tankRepo->getTankByName( 'IS-8' ));
        $manager->persist( $engine47 );

//        IX,ussr,V-12-6,750 hp,15 %,Diesel,84200,1024 kg,IS-8
        $engine48 = new Engine();
        $engine48->setTier( $tier9 );
        $engine48->setNationality( $nationality );
        $engine48->setName( 'V-12-6' );
        $engine48->setPower( 750 );
        $engine48->setFireChance( 15 );
        $engine48->setFuelType( $diesel );
        $engine48->setCost( 84200 );
        $engine48->setWeight( 1024 );
        $engine48->addTank( $tankRepo->getTankByName( 'IS-8' ));
        $manager->persist( $engine48 );

//        IX,ussr,V-12 A,700 hp,15 %,Diesel,0,750 kg,IS-6
        $engine49 = new Engine();
        $engine49->setTier( $tier9 );
        $engine49->setNationality( $nationality );
        $engine49->setName( 'V-12 A' );
        $engine49->setPower( 700 );
        $engine49->setFireChance( 15 );
        $engine49->setFuelType( $diesel );
        $engine49->setCost( 0 );
        $engine49->setWeight( 750 );
        $engine49->addTank( $tankRepo->getTankByName( 'IS-6' ));
        $manager->persist( $engine49 );

//        IX,ussr,V-12P,700 hp,15 %,Diesel,84000,1024 kg,ST-I
        $engine50 = new Engine();
        $engine50->setTier( $tier9 );
        $engine50->setNationality( $nationality );
        $engine50->setName( 'V-12P' );
        $engine50->setPower( 700 );
        $engine50->setFireChance( 15 );
        $engine50->setFuelType( $diesel );
        $engine50->setCost( 84000 );
        $engine50->setWeight( 1024 );
        $engine50->addTank( $tankRepo->getTankByName( 'ST-I' ));
        $manager->persist( $engine50 );

//        IX,ussr,V-2-54,620 hp,12 %,Diesel,79290,700 kg,"T-44, SU-101, T-54, SU-122-54"
        $engine51 = new Engine();
        $engine51->setTier( $tier9 );
        $engine51->setNationality( $nationality );
        $engine51->setName( 'V-2-54' );
        $engine51->setPower( 620 );
        $engine51->setFireChance( 12 );
        $engine51->setFuelType( $diesel );
        $engine51->setCost( 79290 );
        $engine51->setWeight( 700 );
        $engine51->addTank( $tankRepo->getTankByName( 'T-44' ));
        $engine51->addTank( $tankRepo->getTankByName( 'SU-101' ));
        $engine51->addTank( $tankRepo->getTankByName( 'T-54' ));
        $engine51->addTank( $tankRepo->getTankByName( 'SU-122-54' ));
        $manager->persist( $engine51 );

        //IX,ussr,V-2-54IS,700 hp,12 %,Diesel,79290,700 kg,"IS, ISU-152, IS-3, Object 704"
        $engine52 = new Engine();
        $engine52->setTier( $tier9 );
        $engine52->setNationality( $nationality );
        $engine52->setName( 'V-2-54IS' );
        $engine52->setPower( 700 );
        $engine52->setFireChance( 12 );
        $engine52->setFuelType( $diesel );
        $engine52->setCost( 79290 );
        $engine52->setWeight( 700 );
        $engine52->addTank( $tankRepo->getTankByName( 'IS' ));
        $engine52->addTank( $tankRepo->getTankByName( 'ISU-152' ));
        $engine52->addTank( $tankRepo->getTankByName( 'IS-3' ));
        $engine52->addTank( $tankRepo->getTankByName( 'Object 704' ));
        $manager->persist( $engine52 );

//        IX,ussr,2x V-2K-F,1200 hp,15 %,Diesel,87500,1500 kg,KV-4
        $engine53 = new Engine();
        $engine53->setTier( $tier9 );
        $engine53->setNationality( $nationality );
        $engine53->setName( '2x V-2K-F' );
        $engine53->setPower( 1200 );
        $engine53->setFireChance( 15 );
        $engine53->setFuelType( $diesel );
        $engine53->setCost( 87500 );
        $engine53->setWeight( 1500 );
        $engine53->addTank( $tankRepo->getTankByName( 'KV-4' ));
        $manager->persist( $engine53 );

//        IX,ussr,V-54-6,680 hp,12 %,Diesel,82300,700 kg,"T-44, SU-101"
        $engine54 = new Engine();
        $engine54->setTier( $tier9 );
        $engine54->setNationality( $nationality );
        $engine54->setName( 'V-54-6' );
        $engine54->setPower( 680 );
        $engine54->setFireChance( 12 );
        $engine54->setFuelType( $diesel );
        $engine54->setCost( 82300 );
        $engine54->setWeight( 700 );
        $engine54->addTank( $tankRepo->getTankByName( 'T-44' ));
        $engine54->addTank( $tankRepo->getTankByName( 'SU-101' ));
        $manager->persist( $engine54 );

//        IX,ussr,V-14,700 hp,12 %,Diesel,82300,700 kg,"T-54, SU-122-54"
        $engine55 = new Engine();
        $engine55->setTier( $tier9 );
        $engine55->setNationality( $nationality );
        $engine55->setName( 'V-14' );
        $engine55->setPower( 700 );
        $engine55->setFireChance( 12 );
        $engine55->setFuelType( $diesel );
        $engine55->setCost( 82300 );
        $engine55->setWeight( 700 );
        $engine55->addTank( $tankRepo->getTankByName( 'T-54' ));
        $engine55->addTank( $tankRepo->getTankByName( 'SU-122-54' ));
        $manager->persist( $engine55 );

//        X,ussr,M-50T,1050 hp,15 %,Diesel,132000,700 kg,"Object 263, IS-7"
        $engine56 = new Engine();
        $engine56->setTier( $tier10 );
        $engine56->setNationality( $nationality );
        $engine56->setName( 'M-50T' );
        $engine56->setPower( 1050 );
        $engine56->setFireChance( 15 );
        $engine56->setFuelType( $diesel );
        $engine56->setCost( 132000 );
        $engine56->setWeight( 700 );
        $engine56->addTank( $tankRepo->getTankByName( 'Object 263' ));
        $engine56->addTank( $tankRepo->getTankByName( 'IS-7' ));
        $manager->persist( $engine56 );

//        X,ussr,V-12,750 hp,15 %,Diesel,128000,1024 kg,IS-4
        $engine57 = new Engine();
        $engine57->setTier( $tier10 );
        $engine57->setNationality( $nationality );
        $engine57->setName( 'V-12' );
        $engine57->setPower( 750 );
        $engine57->setFireChance( 15 );
        $engine57->setFuelType( $diesel );
        $engine57->setCost( 128000 );
        $engine57->setWeight( 1024 );
        $engine57->addTank( $tankRepo->getTankByName( 'IS-4' ));
        $manager->persist( $engine57 );

//        X,ussr,V-16FN,800 hp,12 %,Diesel,84200,1024 kg,Object 268
        $engine58 = new Engine();
        $engine58->setTier( $tier10 );
        $engine58->setNationality( $nationality );
        $engine58->setName( 'V-16FN' );
        $engine58->setPower( 800 );
        $engine58->setFireChance( 12 );
        $engine58->setFuelType( $diesel );
        $engine58->setCost( 84200 );
        $engine58->setWeight( 1024 );
        $engine58->addTank( $tankRepo->getTankByName( 'Object 268' ));
        $manager->persist( $engine58 );

//        X,ussr,V-55,580 hp,10 %,Diesel,132000,700 kg,T-62A
        $engine59 = new Engine();
        $engine59->setTier( $tier10 );
        $engine59->setNationality( $nationality );
        $engine59->setName( 'V-55' );
        $engine59->setPower( 580 );
        $engine59->setFireChance( 10 );
        $engine59->setFuelType( $diesel );
        $engine59->setCost( 132000 );
        $engine59->setWeight( 700 );
        $engine59->addTank( $tankRepo->getTankByName( 'T-62A' ));
        $manager->persist( $engine59 );

        $manager->flush();
    }
}