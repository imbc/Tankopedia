<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM\Radio;

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
        $radio1 = new Radio( 'Signal Flags', $tier1, $nationality, 0, 1, 90 );
        $radio1->addTank( $tankRepo->getTankByName( 'MS-1' ));
        $manager->persist( $radio1 );

//        "II","USSR","71-TK-1","265 m",180,"50 kg","MS-1, AT-1, SU-18, BT-2, 
//         T-26"
        $radio2 = new Radio( '71-TK-1', $tier2, $nationality, 180, 50, 265 );
        $radio2->addTank( $tankRepo->getTankByName( 'MS-1' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT-1' ));
        $radio2->addTank( $tankRepo->getTankByName( 'SU-18' ));
        $radio2->addTank( $tankRepo->getTankByName( 'BT-2' ));
        $radio2->addTank( $tankRepo->getTankByName( 'T-26' ));
        $manager->persist( $radio2 );

//        "III","USSR","71-TK-3","300 m",570,"100 kg","AT-1, SU-18, BT-2, T-26, 
//         BT-7, T-46, SU-26, T-28, SU-5, T-50, T-50-2"
        $radio3 = new Radio( '71-TK-3', $tier3, $nationality, 570, 100, 300 );
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
        $radio4 = new Radio( '71-TK-3', $tier3, $nationality, 0, 100, 300 );
        $radio4->addTank( $tankRepo->getTankByName( 'T-127' ));
        $radio4->addTank( $tankRepo->getTankByName( 'BT-SV' ));
        $manager->persist( $radio4 );

//        "IV","USSR","SCR 209","325 m",0,"80 kg","M3 Stuart Lend Lease"
        $radio5 = new Radio( 'SCR 209', $tier4, $nationality, 0, 80, 325 );
        $radio5->addTank( $tankRepo->getTankByName( 'M3 Stuart Lend Lease' ));
        $manager->persist( $radio5 );

//        "IV","USSR","71-TK-3U","440 m",0,"100 kg","A-32"
        $radio6 = new Radio( '71-TK-3U', $tier4, $nationality, 0, 100, 440 );
        $radio6->addTank( $tankRepo->getTankByName( 'A-32' ));
        $manager->persist( $radio6 );

//        "IV","USSR","9R","325 m",1980,"80 kg","SU-76, SU-85B, A-20, T-34, 
//         SU-85, SU-100, T-34-85, T-43, SU-100M1"
        $radio7 = new Radio( '9R', $tier4, $nationality, 1980, 80, 325 );
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
        $radio8 = new Radio( '10R', $tier5, $nationality, 3660, 100, 360 );
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
        $radio9 = new Radio( '10R', $tier5 , $nationality, 0, 100, 360 );
        $radio9->addTank( $tankRepo->getTankByName( 'KV-220 Beta-Test' ));
        $radio9->addTank( $tankRepo->getTankByName( 'KV-220' ));
        $manager->persist( $radio9 );

//        "V","USSR","9RK","350 m",3240,"80 kg","SU-18, SU-26, SU-5"
        $radio10 = new Radio( '9RK', $tier5, $nationality, 3240, 80, 350 );
        $radio10->addTank( $tankRepo->getTankByName( 'SU-18' ));
        $radio10->addTank( $tankRepo->getTankByName( 'SU-26' ));
        $radio10->addTank( $tankRepo->getTankByName( 'SU-5' ));
        $manager->persist( $radio10 );

//        "VII","USSR","Type 9","545 m",0,"100 kg","Tetrarch"
        $radio11 = new Radio( 'Type 9', $tier7, $nationality, 0, 100, 545 );
        $radio11->addTank( $tankRepo->getTankByName( 'Tetrarch' ));
        $manager->persist( $radio11 );

//        "VII","USSR","10RK","440 m",18600,"100 kg","KV-1, T-150, KV-1S, KV-2, 
//         SU-152, KV-13, KV-3, IS, KV-4, ISU-152, IS-3, IS-8, ST-I, Object 704"
        $radio12 = new Radio( '10RK', $tier7, $nationality, 18600, 100, 440 );
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
        $radio13 = new Radio( '10RKM', $tier7, $nationality, 0, 100, 440 );
        $radio13->addTank( $tankRepo->getTankByName( 'KV-5' ));
        $radio13->addTank( $tankRepo->getTankByName( 'IS-6' ));
        $manager->persist( $radio13 );

//        "VIII","USSR","9RM","525 m",24240,"100 kg","SU-76, SU-85B, T-34, SU-85, 
//         SU-100, T-34-85, T-43, SU-100M1, T-44, SU-101, T-54, SU-122-54"
        $radio14 = new Radio( '9RM', $tier8, $nationality, 24240, 100, 525 );
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
        $radio15 = new Radio( '9RM', $tier8, $nationality, 0, 100, 525 );
        $radio15->addTank( $tankRepo->getTankByName( 'SU-85I' ));
        $manager->persist( $radio15 );

//        "IX","USSR","KRSTB","630 m",37500,"100 kg","T-50, T-50-2"
        $radio16 = new Radio( 'KRSTB', $tier9, $nationality, 37500, 100, 630 );
        $radio16->addTank( $tankRepo->getTankByName( 'T-50' ));
        $radio16->addTank( $tankRepo->getTankByName( 'T-50-2' ));
        $manager->persist( $radio16 );

//        "IX","USSR","Mk19R","570 m",0,"110 kg","Valentine II, Churchill III, 
//         Matilda IV"
        $radio17 = new Radio( 'Mk19R', $tier9, $nationality, 0, 110, 570 );
        $radio17->addTank( $tankRepo->getTankByName( 'Valentine II' ));
        $radio17->addTank( $tankRepo->getTankByName( 'Churchill III' ));
        $radio17->addTank( $tankRepo->getTankByName( 'Matilda IV' ));
        $manager->persist( $radio17 );

//        "IX","USSR","12LL","615 m",33600,"110 kg","BT-7, SU-26, A-20, SU-5"
        $radio18 = new Radio( '12LL', $tier9, $nationality, 33600, 110, 615 );
        $radio18->addTank( $tankRepo->getTankByName( 'BT-7' ));
        $radio18->addTank( $tankRepo->getTankByName( 'SU-26' ));
        $radio18->addTank( $tankRepo->getTankByName( 'A-20' ));
        $radio18->addTank( $tankRepo->getTankByName( 'SU-5' ));
        $manager->persist( $radio18 );

//        "IX","USSR","12RT","625 m",33600,"110 kg","SU-8, S-51, SU-14, SU-152, 
//         KV-13, KV-3, IS, Object 212, KV-4, ISU-152, IS-3, Object 261, IS-8, 
//         ST-I, Object 704"
        $radio19 = new Radio( '12RT', $tier9, $nationality, 33600, 110, 625 );
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
        $radio20 = new Radio( '9RS', $tier9, $nationality, 0, 100, 700 );
        $radio20->addTank( $tankRepo->getTankByName( 'SU-122-44' ));
        $manager->persist( $radio20 );

//        "X","USSR","R113","730 m",52200,"80 kg","T-50-2, KV-3, T-44, KV-4, 
//         SU-101, IS-3, T-54, SU-122-54, IS-8, ST-I, Object 704"
        $radio21 = new Radio( 'R113', $tier10, $nationality, 52200, 80, 730 );
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
        $radio22 = new Radio( 'R113M', $tier10, $nationality, 52200, 80, 730 );
        $radio22->addTank( $tankRepo->getTankByName( 'Object 268' ));
        $manager->persist( $radio22 );

//        "X","USSR","R-123","850 m",51600,"80 kg","T-62A"
        $radio23 = new Radio( 'R-123', $tier10, $nationality, 51600, 80, 850 );
        $radio23->addTank( $tankRepo->getTankByName( 'T-62A' ));
        $manager->persist( $radio23 );

//        "X","USSR","10RK-26","720 m",51600,"160 kg","Object 263, IS-4, IS-7"
        $radio24 = new Radio( '10RK-26', $tier10, $nationality, 51600, 160, 720 );
        $radio24->addTank( $tankRepo->getTankByName( 'Object 263' ));
        $radio24->addTank( $tankRepo->getTankByName( 'IS-4' ));
        $radio24->addTank( $tankRepo->getTankByName( 'IS-7' ));
        $manager->persist( $radio24 );

//        "X","USSR","10RT-26E","760 m",56500,"120 kg","Object 261, SU-122-54"
        $radio25 = new Radio( '10RT-26E', $tier10, $nationality, 56500, 120, 760 );
        $radio25->addTank( $tankRepo->getTankByName( 'Object 261' ));
        $radio25->addTank( $tankRepo->getTankByName( 'SU-122-54' ));
        $manager->persist( $radio25 );

        $manager->flush();
    }
}