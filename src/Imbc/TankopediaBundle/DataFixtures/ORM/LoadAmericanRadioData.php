<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Radio;

class LoadAmericanRadioData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 10;
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
        $nationality = $this->getReference( 'usa' );

//        "I","USA","Signal Flags","90 m",0,"1 kg","T1 Cunningham"
        $radio1 = new Radio();
        $radio1->setTier( $tier1 );
        $radio1->setNationality( $nationality );
        $radio1->setName( "Signal Flags" );
        $radio1->setSignalRange( 90 );
        $radio1->setCost( 0 );
        $radio1->setWeight( 1 );
        $radio1->addTank( $tankRepo->getTankByName( 'T1 Cunningham' ));
        $manager->persist( $radio1 );

//        "II","USA","SCR 193","325 m",0,"80 kg","T1E6"
        $radio2 = new Radio();
        $radio2->setTier( $tier2 );
        $radio2->setNationality( $nationality );
        $radio2->setName( "SCR 193" );
        $radio2->setSignalRange( 325 );
        $radio2->setCost( 0 );
        $radio2->setWeight( 80 );
        $radio2->addTank( $tankRepo->getTankByName( 'T1E6' ));
        $manager->persist( $radio2 );

//        "II","USA","SCR 200","265 m",180,"40 kg",
//        "T1 Cunningham, T18, T57, M2 Light Tank, T2 Medium Tank, T82,
//        M2 Medium Tank, M3 Stuart, T40, M3 Lee"
        $radio3 = new Radio();
        $radio3->setTier( $tier2 );
        $radio3->setNationality( $nationality );
        $radio3->setName( 'SCR 200' );
        $radio3->setSignalRange( 265 );
        $radio3->setCost( 180 );
        $radio3->setWeight( 40 );
        $radio3->addTank( $tankRepo->getTankByName( 'T1 Cunningham' ));
        $radio3->addTank( $tankRepo->getTankByName( 'T18' ));
        $radio3->addTank( $tankRepo->getTankByName( 'T57' ));
        $radio3->addTank( $tankRepo->getTankByName( 'M2 Light Tank' ));
        $radio3->addTank( $tankRepo->getTankByName( 'T2 Medium Tank' ));
        $radio3->addTank( $tankRepo->getTankByName( 'T82' ));
        $radio3->addTank( $tankRepo->getTankByName( 'M2 Medium Tank' ));
        $radio3->addTank( $tankRepo->getTankByName( 'M3 Stuart' ));
        $radio3->addTank( $tankRepo->getTankByName( 'T40' ));
        $radio3->addTank( $tankRepo->getTankByName( 'M3 Lee' ));
        $manager->persist( $radio3 );

//        "IV","USA","SCR 210","325 m",1980,"80 kg","T18, T57, M2 Light Tank,
//        T2 Medium Tank, T82, M2 Medium Tank, M3 Stuart, M37, T40, M3 Lee"
        $radio4 = new Radio();
        $radio4->setTier( $tier4 );
        $radio4->setNationality( $nationality );
        $radio4->setName( 'SCR 210' );
        $radio4->setSignalRange( 325 );
        $radio4->setCost( 1980 );
        $radio4->setWeight( 80 );
        $radio4->addTank( $tankRepo->getTankByName( 'T18' ));
        $radio4->addTank( $tankRepo->getTankByName( 'T57' ));
        $radio4->addTank( $tankRepo->getTankByName( 'M2 Light Tank' ));
        $radio4->addTank( $tankRepo->getTankByName( 'T2 Medium Tank' ));
        $radio4->addTank( $tankRepo->getTankByName( 'T82' ));
        $radio4->addTank( $tankRepo->getTankByName( 'M2 Medium Tank' ));
        $radio4->addTank( $tankRepo->getTankByName( 'M3 Stuart' ));
        $radio4->addTank( $tankRepo->getTankByName( 'M37' ));
        $radio4->addTank( $tankRepo->getTankByName( 'T40' ));
        $radio4->addTank( $tankRepo->getTankByName( 'M3 Lee' ));
        $manager->persist( $radio4 );

//        "IV","USA","SCR 210","325 m",0,"80 kg","T2 Light Tank, MTLS-1G14"
        $radio5 = new Radio();
        $radio5->setTier( $tier4 );
        $radio5->setNationality( $nationality );
        $radio5->setName( 'SCR 210' );
        $radio5->setSignalRange( 325 );
        $radio5->setCost( 0 );
        $radio5->setWeight( 80 );
        $radio5->addTank( $tankRepo->getTankByName( 'T2 Light Tank' )); //gold
        $radio5->addTank( $tankRepo->getTankByName( 'MTLS-1G14' )); //gold
        $manager->persist( $radio5 );


//        "IV","USA","SCR 510","325 m",1980,"80 kg","M8A1, T49, M41,
//        M18 Hellcat, M12, M40/M43, T92"
        $radio6 = new Radio();
        $radio6->setTier( $tier4 );
        $radio6->setNationality( $nationality );
        $radio6->setName( 'SCR 510' );
        $radio6->setSignalRange( 325 );
        $radio6->setCost( 1980 );
        $radio6->setWeight( 80 );
        $radio6->addTank( $tankRepo->getTankByName( 'M8A1' ));
        $radio6->addTank( $tankRepo->getTankByName( 'T49' ));
        $radio6->addTank( $tankRepo->getTankByName( 'M41' ));
        $radio6->addTank( $tankRepo->getTankByName( 'M18 Hellcat' ));
        $radio6->addTank( $tankRepo->getTankByName( 'M12' ));
        $radio6->addTank( $tankRepo->getTankByName( 'M40/M43' ));
        $radio6->addTank( $tankRepo->getTankByName( 'T92' ));
        $manager->persist( $radio6 );

//        "IV","USA","SCR 510 M2","395 m",0,"80 kg","M22 Locust"
        $radio7 = new Radio();
        $radio7->setTier( $tier4 );
        $radio7->setNationality( $nationality );
        $radio7->setName( 'SCR 510 M2' );
        $radio7->setSignalRange( 395 );
        $radio7->setCost( 0 );
        $radio7->setWeight( 80 );
        $radio7->addTank( $tankRepo->getTankByName( 'M22 Locust' ));
        $manager->persist( $radio7 );

//        "VI","USA","AN/GRC-3","410 m",21600,"120 kg","T71, T54E1, M103"
        $radio8 = new Radio();
        $radio8->setTier( $tier6 );
        $radio8->setNationality( $nationality );
        $radio8->setName( 'AN/GRC-3' );
        $radio8->setSignalRange( 410 );
        $radio8->setCost( 21600 );
        $radio8->setWeight( 120 );
        $radio8->addTank( $tankRepo->getTankByName( 'T71' ));
        $radio8->addTank( $tankRepo->getTankByName( 'T54E1' ));
        $radio8->addTank( $tankRepo->getTankByName( 'M103' ));
        $manager->persist( $radio8 );

//        "VI","USA","SCR 508","395 m",21600,"100 kg","M5 Stuart, M7 Priest,
//        M4 Sherman, M7, M10 Wolverine, T1 Heavy Tank, M24 Chaffee,
//        M36 Jackson, M6, M4A3E8 Sherman, M4A3E2 Sherman Jumbo, T21, T25 AT,
//        T20, T25/2, T29, M26 Pershing, T28, T32, T28 Prototype, M46 Patton,
//        T95, T30"
        $radio9 = new Radio();
        $radio9->setTier( $tier6 );
        $radio9->setNationality( $nationality );
        $radio9->setName( 'SCR 508' );
        $radio9->setSignalRange( 395 );
        $radio9->setCost( 21600 );
        $radio9->setWeight( 100 );
        $radio9->addTank( $tankRepo->getTankByName( 'M5 Stuart' ));
        $radio9->addTank( $tankRepo->getTankByName( 'M7 Priest' ));
        $radio9->addTank( $tankRepo->getTankByName( 'M4 Sherman' ));
        $radio9->addTank( $tankRepo->getTankByName( 'M7' ));
        $radio9->addTank( $tankRepo->getTankByName( 'M10 Wolverine' ));
        $radio9->addTank( $tankRepo->getTankByName( 'T1 Heavy Tank' ));
        $radio9->addTank( $tankRepo->getTankByName( 'M24 Chaffee' ));
        $radio9->addTank( $tankRepo->getTankByName( 'M36 Jackson' ));
        $radio9->addTank( $tankRepo->getTankByName( 'M6' ));
        $radio9->addTank( $tankRepo->getTankByName( 'M4A3E8 Sherman' ));
        $radio9->addTank( $tankRepo->getTankByName( 'M4A3E2 Sherman Jumbo' ));
        $radio9->addTank( $tankRepo->getTankByName( 'T21' ));
        $radio9->addTank( $tankRepo->getTankByName( 'T25 AT' ));
        $radio9->addTank( $tankRepo->getTankByName( 'T20' ));
        $radio9->addTank( $tankRepo->getTankByName( 'T25/2' ));
        $radio9->addTank( $tankRepo->getTankByName( 'T29' ));
        $radio9->addTank( $tankRepo->getTankByName( 'M26 Pershing' ));
        $radio9->addTank( $tankRepo->getTankByName( 'T28' ));
        $radio9->addTank( $tankRepo->getTankByName( 'T32' ));
        $radio9->addTank( $tankRepo->getTankByName( 'T28 Prototype' ));
        $radio9->addTank( $tankRepo->getTankByName( 'M46 Patton' ));
        $radio9->addTank( $tankRepo->getTankByName( 'T95' ));
        $radio9->addTank( $tankRepo->getTankByName( 'T30' ));
        $manager->persist( $radio9 );

//        "VI","USA","SCR 610","420 m",24600,"100 kg","T69, M8A1, T49, M41,
//        M18 Hellcat, M12, M40/M43, T92"
        $radio10 = new Radio();
        $radio10->setTier( $tier6 );
        $radio10->setNationality( $nationality );
        $radio10->setName( 'SCR 610' );
        $radio10->setSignalRange( 420 );
        $radio10->setCost( 24600 );
        $radio10->setWeight( 100 );
        $radio10->addTank( $tankRepo->getTankByName( 'T69' ));
        $radio10->addTank( $tankRepo->getTankByName( 'M8A1' ));
        $radio10->addTank( $tankRepo->getTankByName( 'T49' ));
        $radio10->addTank( $tankRepo->getTankByName( 'M41' ));
        $radio10->addTank( $tankRepo->getTankByName( 'M18 Hellcat' ));
        $radio10->addTank( $tankRepo->getTankByName( 'M12' ));
        $radio10->addTank( $tankRepo->getTankByName( 'M40/M43' ));
        $radio10->addTank( $tankRepo->getTankByName( 'T92' ));
        $manager->persist( $radio10 );

//        "VII","USA","SCR 538","480 m",22800,"100 kg","M7, T1 Heavy Tank,
//        M6, T21"
        $radio11 = new Radio();
        $radio11->setTier( $tier7 );
        $radio11->setNationality( $nationality );
        $radio11->setName( 'SCR 538' );
        $radio11->setSignalRange( 480 );
        $radio11->setCost( 22800 );
        $radio11->setWeight( 100 );
        $radio11->addTank( $tankRepo->getTankByName( 'M7' ));
        $radio11->addTank( $tankRepo->getTankByName( 'T1 Heavy Tank' ));
        $radio11->addTank( $tankRepo->getTankByName( 'M6' ));
        $radio11->addTank( $tankRepo->getTankByName( 'T21' ));
        $manager->persist( $radio11 );

//        "VIII","USA","SCR 508/1","570 m",0,"100 kg","M4A2E4, T14, M6A2E1"
        $radio12 = new Radio();
        $radio12->setTier( $tier8 );
        $radio12->setNationality( $nationality );
        $radio12->setName( 'SCR 508/1' );
        $radio12->setSignalRange( 570 );
        $radio12->setCost( 0 );
        $radio12->setWeight( 100 );
        $radio12->addTank( $tankRepo->getTankByName( 'M4A2E4' ));
        $radio12->addTank( $tankRepo->getTankByName( 'T14' ));
        $radio12->addTank( $tankRepo->getTankByName( 'M6A2E1' ));
        $manager->persist( $radio12 );

        //"IX","USA","British Wireless set N19","570 m",0,"110 kg","Ram-II"
        $radio13 = new Radio();

        //"IX","USA","SCR 506","615 m",33600,"110 kg","T57, M2 Light Tank,
        //T2 Medium Tank, T82, M2 Medium Tank, M3 Stuart, M37, T40, M3 Lee,
        //M5 Stuart, M7 Priest, M4 Sherman, M10 Wolverine, M24 Chaffee,
        //M36 Jackson, M4A3E8 Sherman, M4A3E2 Sherman Jumbo, T25 AT, T20, T25/2"
        $radio14 = new Radio();

        //"X","USA","AN/GRC-7","745 m",54000,"120 kg","T71, T54E1, M103"
        $radio15 = new Radio();

        //"X","USA","AN/VRC-7","745 m",54000,"100 kg","M48A1"
        $radio16 = new Radio();

        //"X","USA","AN/VRC-3","745 m",51600,"160 kg","T57 Heavy Tank,
        //T110E5, T110E4, T110E3"
        $radio17 = new Radio();

        //"X","USA","SCR 528","745 m",54000,"80 kg","M7 Priest, M7,
        //M24 Chaffee, T29, M26 Pershing, T28, T32, T28 Prototype,
        //M46 Patton, T95, T30"
        $radio18 = new Radio();

        //"X","USA","SCR 528A1","745 m",0,"91 kg","T26E4 Super Pershing, T34"
        $radio19 = new Radio();

        //"X","USA","SCR 528F","750 m",54000,"80 kg","T21"
        $radio20 = new Radio();

        //"X","USA","SCR 619","750 m",54000,"80 kg","T69, M8A1, T49, M41,
        //M18 Hellcat, M12, M40/M43, T92"
        $radio21 = new Radio();

        $manager->flush();
    }
}