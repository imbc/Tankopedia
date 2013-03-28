<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Radio;

class LoadRussianRadioData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 11;
    }

    public function load( ObjectManager $manager )
    {
        $tankRepo = $manager->getRepository( 'ImbcTankopediaBundle:Tank' );
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
        $nationality = $this->getReference( 'ussr' );

//        "I","USSR","Signal Flags","90 m",0,"1 kg","MS-1"
        $radio1 = new Radio();
        $radio1->setTier( $tier1 );
        $radio1->setNationality( $nationality );
        $radio1->setName( 'Signal Flags' );
        $radio1->setSignalRange( 90 );
        $radio1->setCost( 0 );
        $radio1->setWeight( 1 );
        $radio1->addTank( $tankRepo->getTankByName( 'MS-1' ));
        $manager->persist( $radio1 );

//        "II","USSR","71-TK-1","265 m",180,"50 kg","MS-1, AT-1, SU-18, BT-2, 
//         T-26"
        $radio2 = new Radio();
        $radio2->setTier( $tier2 );
        $radio2->setNationality( $nationality );
        $radio2->setName( '71-TK-1' );
        $radio2->setSignalRange( 265 );
        $radio2->setCost( 180 );
        $radio2->setWeight( 50 );
        $radio2->addTank( $tankRepo->getTankByName( 'MS-1' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT-1' ));
        $radio2->addTank( $tankRepo->getTankByName( 'SU-18' ));
        $radio2->addTank( $tankRepo->getTankByName( 'BT-2' ));
        $radio2->addTank( $tankRepo->getTankByName( 'T-26' ));
        $manager->persist( $radio2 );

//        "III","USSR","71-TK-3","300 m",570,"100 kg","AT-1, SU-18, BT-2, T-26, 
//         BT-7, T-46, SU-26, T-28, SU-5, T-50, T-50-2"
        $radio3 = new Radio();
        $radio3->setTier( $tier3 );
        $radio3->setNationality( $nationality );
        $radio3->setName( '71-TK-3' );
        $radio3->setSignalRange( 300 );
        $radio3->setCost( 570 );
        $radio3->setWeight( 100 );
        $radio3->addTank( $tankRepo->getTankByName( 'AT-1' ));
        $radio3->addTank( $tankRepo->getTankByName( 'SU-18' ));
        $radio3->addTank( $tankRepo->getTankByName( 'BT-2' ));
        $radio3->addTank( $tankRepo->getTankByName( 'T-26' ));
        $radio3->addTank( $tankRepo->getTankByName( 'BT-7' ));
        $radio3->addTank( $tankRepo->getTankByName( 'T-46' ));
        $radio3->addTank( $tankRepo->getTankByName( 'SU-26' ));
        $radio3->addTank( $tankRepo->getTankByName( 'T-28' ));
        $radio3->addTank( $tankRepo->getTankByName( 'SU-5' ));
        $radio3->addTank( $tankRepo->getTankByName( 'T-50' ));
        $radio3->addTank( $tankRepo->getTankByName( 'T-50-2' ));
        $manager->persist( $radio3 );

//        "III","USSR","71-TK-3","300 m",0,"100 kg","T-127, BT-SV"
        $radio4 = new Radio();
        $radio4->setTier( $tier3 );
        $radio4->setNationality( $nationality );
        $radio4->setName( '71-TK-3' );
        $radio4->setSignalRange( 300 );
        $radio4->setCost( 0 );
        $radio4->setWeight( 100 );
        $radio4->addTank( $tankRepo->getTankByName( 'T-127' ));
        $radio4->addTank( $tankRepo->getTankByName( 'BT-SV' ));
        $manager->persist( $radio4 );

//        "IV","USSR","SCR 209","325 m",0,"80 kg","M3 Stuart Lend Lease"
        $radio5 = new Radio();
        $radio5->setTier( $tier4 );
        $radio5->setNationality( $nationality );
        $radio5->setName( 'SCR 209' );
        $radio5->setSignalRange( 325 );
        $radio5->setCost( 0 );
        $radio5->setWeight( 80 );
        $radio5->addTank( $tankRepo->getTankByName( 'M3 Stuart Lend Lease' ));
        $manager->persist( $radio5 );

//        "IV","USSR","71-TK-3U","440 m",0,"100 kg","A-32"
        $radio6 = new Radio();
        $radio6->setTier( $tier4 );
        $radio6->setNationality( $nationality );
        $radio6->setName( '71-TK-3U' );
        $radio6->setSignalRange( 440 );
        $radio6->setCost( 0 );
        $radio6->setWeight( 100 );
        $radio6->addTank( $tankRepo->getTankByName( 'A-32' ));
        $manager->persist( $radio6 );

//        "IV","USSR","9R","325 m",1980,"80 kg","SU-76, SU-85B, A-20, T-34, 
//         SU-85, SU-100, T-34-85, T-43, SU-100M1"
        $radio7 = new Radio();
        $radio7->setTier( $tier4 );
        $radio7->setNationality( $nationality );
        $radio7->setName( '9R' );
        $radio7->setSignalRange( 325 );
        $radio7->setCost( 1980 );
        $radio7->setWeight( 80 );
        $radio7->addTank( $tankRepo->getTankByName( 'SU-76' ));
        $radio7->addTank( $tankRepo->getTankByName( 'SU-85B' ));
        $radio7->addTank( $tankRepo->getTankByName( 'A-20' ));
        $radio7->addTank( $tankRepo->getTankByName( 'T-34' ));
        $radio7->addTank( $tankRepo->getTankByName( 'SU-85' ));
        $radio7->addTank( $tankRepo->getTankByName( 'SU-100' ));
        $radio7->addTank( $tankRepo->getTankByName( 'T-34-85' ));
        $radio7->addTank( $tankRepo->getTankByName( 'T-43' ));
        $radio7->addTank( $tankRepo->getTankByName( 'SU-100M1' ));
        $manager->persist( $radio7 );

//        "V","USSR","10R","360 m",3660,"100 kg","T-46, T-28, KV-1, SU-8, T-150, 
//         KV-1S, KV-2, S-51, SU-14, SU-152, KV-3, Object 212, ISU-152, Object 261"
        $radio8 = new Radio();
        $radio8->setTier( $tier5 );
        $radio8->setNationality( $nationality );
        $radio8->setName( '10R' );
        $radio8->setSignalRange( 360 );
        $radio8->setCost( 3660 );
        $radio8->setWeight( 100 );
        $radio8->addTank( $tankRepo->getTankByName( 'T-46' ));
        $radio8->addTank( $tankRepo->getTankByName( 'T-28' ));
        $radio8->addTank( $tankRepo->getTankByName( 'KV-1' ));
        $radio8->addTank( $tankRepo->getTankByName( 'SU-8' ));
        $radio8->addTank( $tankRepo->getTankByName( 'T-150' ));
        $radio8->addTank( $tankRepo->getTankByName( 'KV-1S' ));
        $radio8->addTank( $tankRepo->getTankByName( 'KV-2' ));
        $radio8->addTank( $tankRepo->getTankByName( 'S-51' ));
        $radio8->addTank( $tankRepo->getTankByName( 'SU-14' ));
        $radio8->addTank( $tankRepo->getTankByName( 'SU-152' ));
        $radio8->addTank( $tankRepo->getTankByName( 'KV-3' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Object 212' ));
        $radio8->addTank( $tankRepo->getTankByName( 'ISU-152' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Object 261' ));
        $manager->persist( $radio8 );

//        "V","USSR","10R","360 m",0,"100 kg","KV-220 Beta-Test, KV-220"
        $radio9 = new Radio();
        $radio9->setTier( $tier5 );
        $radio9->setNationality( $nationality );
        $radio9->setName( '10R' );
        $radio9->setSignalRange( 360 );
        $radio9->setCost( 0 );
        $radio9->setWeight( 100 );
        $radio9->addTank( $tankRepo->getTankByName( 'KV-220 Beta-Test' ));
        $radio9->addTank( $tankRepo->getTankByName( 'KV-220' ));
        $manager->persist( $radio9 );

//        "V","USSR","9RK","350 m",3240,"80 kg","SU-18, SU-26, SU-5"
        $radio10 = new Radio();
        $radio10->setTier( $tier5 );
        $radio10->setNationality( $nationality );
        $radio10->setName( '9RK' );
        $radio10->setSignalRange( 350 );
        $radio10->setCost( 3240 );
        $radio10->setWeight( 80 );
        $radio10->addTank( $tankRepo->getTankByName( 'SU-18' ));
        $radio10->addTank( $tankRepo->getTankByName( 'SU-26' ));
        $radio10->addTank( $tankRepo->getTankByName( 'SU-5' ));
        $manager->persist( $radio10 );

//        "VII","USSR","Type 9","545 m",0,"100 kg","Tetrarch"
        $radio11 = new Radio();
        $radio11->setTier( $tier7 );
        $radio11->setNationality( $nationality );
        $radio11->setName( 'Type 9' );
        $radio11->setSignalRange( 545 );
        $radio11->setCost( 0 );
        $radio11->setWeight( 100 );
        $radio11->addTank( $tankRepo->getTankByName( 'Tetrarch' ));
        $manager->persist( $radio11 );

//        "VII","USSR","10RK","440 m",18600,"100 kg","KV-1, T-150, KV-1S, KV-2, 
//         SU-152, KV-13, KV-3, IS, KV-4, ISU-152, IS-3, IS-8, ST-I, Object 704"
        $radio12 = new Radio();
        $radio12->setTier( $tier7 );
        $radio12->setNationality( $nationality );
        $radio12->setName( '10RK' );
        $radio12->setSignalRange( 440 );
        $radio12->setCost( 18600 );
        $radio12->setWeight( 100 );
        $radio12->addTank( $tankRepo->getTankByName( 'KV-1' ));
        $radio12->addTank( $tankRepo->getTankByName( 'T-150' ));
        $radio12->addTank( $tankRepo->getTankByName( 'KV-1S' ));
        $radio12->addTank( $tankRepo->getTankByName( 'KV-2' ));
        $radio12->addTank( $tankRepo->getTankByName( 'SU-152' ));
        $radio12->addTank( $tankRepo->getTankByName( 'KV-13' ));
        $radio12->addTank( $tankRepo->getTankByName( 'KV-3' ));
        $radio12->addTank( $tankRepo->getTankByName( 'IS' ));
        $radio12->addTank( $tankRepo->getTankByName( 'KV-4' ));
        $radio12->addTank( $tankRepo->getTankByName( 'ISU-152' ));
        $radio12->addTank( $tankRepo->getTankByName( 'IS-3' ));
        $radio12->addTank( $tankRepo->getTankByName( 'IS-8' ));
        $radio12->addTank( $tankRepo->getTankByName( 'ST-I' ));
        $radio12->addTank( $tankRepo->getTankByName( 'Object 704' ));
        $manager->persist( $radio12 );

//        "VII","USSR","10RKM","440 m",0,"100 kg","KV-5, IS-6"
        $radio13 = new Radio();
        $radio13->setTier( $tier7 );
        $radio13->setNationality( $nationality );
        $radio13->setName( '10RKM' );
        $radio13->setSignalRange( 440 );
        $radio13->setCost( 0 );
        $radio13->setWeight( 100 );
        $radio13->addTank( $tankRepo->getTankByName( 'KV-5' ));
        $radio13->addTank( $tankRepo->getTankByName( 'IS-6' ));
        $manager->persist( $radio13 );

//        "VIII","USSR","9RM","525 m",24240,"100 kg","SU-76, SU-85B, T-34, SU-85, 
//         SU-100, T-34-85, T-43, SU-100M1, T-44, SU-101, T-54, SU-122-54"
        $radio14 = new Radio();
        $radio14->setTier( $tier8 );
        $radio14->setNationality( $nationality );
        $radio14->setName( '9RM' );
        $radio14->setSignalRange( 525 );
        $radio14->setCost( 24240 );
        $radio14->setWeight( 100 );
        $radio14->addTank( $tankRepo->getTankByName( 'SU-76' ));
        $radio14->addTank( $tankRepo->getTankByName( 'SU-85B' ));
        $radio14->addTank( $tankRepo->getTankByName( 'T-34' ));
        $radio14->addTank( $tankRepo->getTankByName( 'SU-85' ));
        $radio14->addTank( $tankRepo->getTankByName( 'SU-100' ));
        $radio14->addTank( $tankRepo->getTankByName( 'T-34-85' ));
        $radio14->addTank( $tankRepo->getTankByName( 'T-43' ));
        $radio14->addTank( $tankRepo->getTankByName( 'SU-100M1' ));
        $radio14->addTank( $tankRepo->getTankByName( 'T-44' ));
        $radio14->addTank( $tankRepo->getTankByName( 'SU-101' ));
        $radio14->addTank( $tankRepo->getTankByName( 'T-54' ));
        $radio14->addTank( $tankRepo->getTankByName( 'SU-122-54' ));
        $manager->persist( $radio14 );

//        "VIII","USSR","9RM","525 m",0,"100 kg","SU-85I"
        $radio15 = new Radio();
        $radio15->setTier( $tier8 );
        $radio15->setNationality( $nationality );
        $radio15->setName( '9RM' );
        $radio15->setSignalRange( 525 );
        $radio15->setCost( 0 );
        $radio15->setWeight( 100 );
        $radio15->addTank( $tankRepo->getTankByName( 'SU-85I' ));
        $manager->persist( $radio15 );

//        "IX","USSR","KRSTB","630 m",37500,"100 kg","T-50, T-50-2"
        $radio16 = new Radio();
        $radio16->setTier( $tier9 );
        $radio16->setNationality( $nationality );
        $radio16->setName( 'KRSTB' );
        $radio16->setSignalRange( 630 );
        $radio16->setCost( 37500 );
        $radio16->setWeight( 100 );
        $radio16->addTank( $tankRepo->getTankByName( 'T-50' ));
        $radio16->addTank( $tankRepo->getTankByName( 'T-50-2' ));
        $manager->persist( $radio16 );

//        "IX","USSR","Mk19R","570 m",0,"110 kg","Valentine II, Churchill III, 
//         Matilda IV"
        $radio17 = new Radio();
        $radio17->setTier( $tier9 );
        $radio17->setNationality( $nationality );
        $radio17->setName( 'Mk19R' );
        $radio17->setSignalRange( 570 );
        $radio17->setCost( 0 );
        $radio17->setWeight( 110 );
        $radio17->addTank( $tankRepo->getTankByName( 'Valentine II' ));
        $radio17->addTank( $tankRepo->getTankByName( 'Churchill III' ));
        $radio17->addTank( $tankRepo->getTankByName( 'Matilda IV' ));
        $manager->persist( $radio17 );

//        "IX","USSR","12LL","615 m",33600,"110 kg","BT-7, SU-26, A-20, SU-5"
        $radio18 = new Radio();
        $radio18->setTier( $tier9 );
        $radio18->setNationality( $nationality );
        $radio18->setName( '12LL' );
        $radio18->setSignalRange( 615 );
        $radio18->setCost( 33600 );
        $radio18->setWeight( 110 );
        $radio18->addTank( $tankRepo->getTankByName( 'BT-7' ));
        $radio18->addTank( $tankRepo->getTankByName( 'SU-26' ));
        $radio18->addTank( $tankRepo->getTankByName( 'A-20' ));
        $radio18->addTank( $tankRepo->getTankByName( 'SU-5' ));
        $manager->persist( $radio18 );

//        "IX","USSR","12RT","625 m",33600,"110 kg","SU-8, S-51, SU-14, SU-152, 
//         KV-13, KV-3, IS, Object 212, KV-4, ISU-152, IS-3, Object 261, IS-8, 
//         ST-I, Object 704"
        $radio19 = new Radio();
        $radio19->setTier( $tier9 );
        $radio19->setNationality( $nationality );
        $radio19->setName( '12RT' );
        $radio19->setSignalRange( 625 );
        $radio19->setCost( 33600 );
        $radio19->setWeight( 110 );
        $radio19->addTank( $tankRepo->getTankByName( 'SU-8' ));
        $radio19->addTank( $tankRepo->getTankByName( 'S-51' ));
        $radio19->addTank( $tankRepo->getTankByName( 'SU-14' ));
        $radio19->addTank( $tankRepo->getTankByName( 'SU-152' ));
        $radio19->addTank( $tankRepo->getTankByName( 'KV-13' ));
        $radio19->addTank( $tankRepo->getTankByName( 'KV-3' ));
        $radio19->addTank( $tankRepo->getTankByName( 'IS' ));
        $radio19->addTank( $tankRepo->getTankByName( 'Object 212' ));
        $radio19->addTank( $tankRepo->getTankByName( 'KV-4' ));
        $radio19->addTank( $tankRepo->getTankByName( 'ISU-152' ));
        $radio19->addTank( $tankRepo->getTankByName( 'IS-3' ));
        $radio19->addTank( $tankRepo->getTankByName( 'Object 261' ));
        $radio19->addTank( $tankRepo->getTankByName( 'IS-8' ));
        $radio19->addTank( $tankRepo->getTankByName( 'ST-I' ));
        $radio19->addTank( $tankRepo->getTankByName( 'Object 704' ));
        $manager->persist( $radio19 );

//        "IX","USSR","9RS","700 m",0,"100 kg","SU-122-44"
        $radio20 = new Radio();
        $radio20->setTier( $tier9 );
        $radio20->setNationality( $nationality );
        $radio20->setName( '9RS' );
        $radio20->setSignalRange( 700 );
        $radio20->setCost( 0 );
        $radio20->setWeight( 100 );
        $radio20->addTank( $tankRepo->getTankByName( 'SU-122-44' ));
        $manager->persist( $radio20 );

//        "X","USSR","R113","730 m",52200,"80 kg","T-50-2, KV-3, T-44, KV-4, 
//         SU-101, IS-3, T-54, SU-122-54, IS-8, ST-I, Object 704"
        $radio21 = new Radio();
        $radio21->setTier( $tier10 );
        $radio21->setNationality( $nationality );
        $radio21->setName( 'R113' );
        $radio21->setSignalRange( 730 );
        $radio21->setCost( 52200 );
        $radio21->setWeight( 80 );
        $radio21->addTank( $tankRepo->getTankByName( 'T-50-2' ));
        $radio21->addTank( $tankRepo->getTankByName( 'KV-3' ));
        $radio21->addTank( $tankRepo->getTankByName( 'T-44' ));
        $radio21->addTank( $tankRepo->getTankByName( 'KV-4' ));
        $radio21->addTank( $tankRepo->getTankByName( 'SU-101' ));
        $radio21->addTank( $tankRepo->getTankByName( 'IS-3' ));
        $radio21->addTank( $tankRepo->getTankByName( 'T-54' ));
        $radio21->addTank( $tankRepo->getTankByName( 'SU-122-54' ));
        $radio21->addTank( $tankRepo->getTankByName( 'IS-8' ));
        $radio21->addTank( $tankRepo->getTankByName( 'ST-I' ));
        $radio21->addTank( $tankRepo->getTankByName( 'Object 704' ));
        $manager->persist( $radio21 );

//        "X","USSR","R113M","730 m",52200,"80 kg","Object 268"
        $radio22 = new Radio();
        $radio22->setTier( $tier10 );
        $radio22->setNationality( $nationality );
        $radio22->setName( 'R113M' );
        $radio22->setSignalRange( 730 );
        $radio22->setCost( 52200 );
        $radio22->setWeight( 80 );
        $radio22->addTank( $tankRepo->getTankByName( 'Object 268' ));
        $manager->persist( $radio22 );

//        "X","USSR","R-123","850 m",51600,"80 kg","T-62A"
        $radio23 = new Radio();
        $radio23->setTier( $tier10 );
        $radio23->setNationality( $nationality );
        $radio23->setName( 'R-123' );
        $radio23->setSignalRange( 850 );
        $radio23->setCost( 51600 );
        $radio23->setWeight( 80 );
        $radio23->addTank( $tankRepo->getTankByName( 'T-62A' ));
        $manager->persist( $radio23 );

//        "X","USSR","10RK-26","720 m",51600,"160 kg","Object 263, IS-4, IS-7"
        $radio24 = new Radio();
        $radio24->setTier( $tier10 );
        $radio24->setNationality( $nationality );
        $radio24->setName( '10RK-26' );
        $radio24->setSignalRange( 720 );
        $radio24->setCost( 51600 );
        $radio24->setWeight( 160 );
        $radio24->addTank( $tankRepo->getTankByName( 'Object 263' ));
        $radio24->addTank( $tankRepo->getTankByName( 'IS-4' ));
        $radio24->addTank( $tankRepo->getTankByName( 'IS-7' ));
        $manager->persist( $radio24 );

//        "X","USSR","10RT-26E","760 m",56500,"120 kg","Object 261, SU-122-54"
        $radio25 = new Radio();
        $radio25->setTier( $tier10 );
        $radio25->setNationality( $nationality );
        $radio25->setName( '10RT-26E' );
        $radio25->setSignalRange( 760 );
        $radio25->setCost( 56500 );
        $radio25->setWeight( 120 );
        $radio25->addTank( $tankRepo->getTankByName( 'Object 261' ));
        $radio25->addTank( $tankRepo->getTankByName( 'SU-122-54' ));
        $manager->persist( $radio25 );

        $manager->flush();
    }
}