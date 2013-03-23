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
        return 6;
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
        // ref for tanks
        $lt1 = $this->getReference( 'lt1' );
        $lt2 = $this->getReference( 'lt2' );
        $lt3 = $this->getReference( 'lt3' );
        $lt4 = $this->getReference( 'lt4' );
        $lt5 = $this->getReference( 'lt5' );
        $lt6 = $this->getReference( 'lt6' );
        $lt7 = $this->getReference( 'lt7' );
        $lt8 = $this->getReference( 'lt8' );
        $lt9 = $this->getReference( 'lt9' );
        $lt10 = $this->getReference( 'lt10' );
        $lt11 = $this->getReference( 'lt11' );

        //"I","USA","Signal Flags","90 m",0,"1 kg","T1 Cunningham"
        $radio1 = new Radio();
        $radio1->setTier( $tier1 );
        $radio1->setNationality( $nationality );
        $radio1->setName( "Signal Flags" );
        $radio1->setSignalRange( 90 );
        $radio1->setWeight( 1 );
        $radio1->setCost( 0 );
        $radio1->addTank( $tankRepo->findOneBy( array( 'name' => 'T1 Cunningham' )));
        $manager->persist( $radio1 );

        //"II","USA","SCR 193","325 m",0,"80 kg","T1E6"
        $radio2 = new Radio();
        $radio2->setTier( $tier2 );
        $radio2->setNationality( $nationality );
        $radio2->setName( "SCR 193" );
        $radio2->setSignalRange( 325 );
        $radio2->setCost( 0 );
        $radio2->setWeight( 80 );
        $radio2->addTank( $tankRepo->findOneBy( array( 'name' => 'T1E6' )) );
        $manager->persist( $radio2 );

        //"II","USA","SCR 200","265 m",180,"40 kg",
        //"T1 Cunningham, T18, T57, M2 Light Tank, T2 Medium Tank, T82, 
        //M2 Medium Tank, M3 Stuart, T40, M3 Lee"
        $radio3 = new Radio();
        $radio3->setTier( $tier2 );
        $radio3->setNationality( $nationality );
        $radio3->setName( 'SCR 200' );
        $radio3->setSignalRange( 265 );
        $radio3->setCost( 180 );
        $radio3->setWeight( 40 );
        $radio3->addTank( $tankRepo->findOneBy( array( 'name' => 'T1 Cunningham' )) );
        $radio3->addTank( $tankRepo->findOneBy( array( 'name' => 'T18' )) );
        $radio3->addTank( $tankRepo->findOneBy( array( 'name' => 'T57' )) );
        $radio3->addTank( $tankRepo->findOneBy( array( 'name' => 'M2 Light Tank' )) );
        $radio3->addTank( $tankRepo->findOneBy( array( 'name' => 'T2 Medium Tank' )) );
        $radio3->addTank( $tankRepo->findOneBy( array( 'name' => 'T82' )) );
        $radio3->addTank( $tankRepo->findOneBy( array( 'name' => 'M2 Medium Tank' )) );
        $radio3->addTank( $tankRepo->findOneBy( array( 'name' => 'M3 Stuart' )) );
        $radio3->addTank( $tankRepo->findOneBy( array( 'name' => 'T40' )) );
        $radio3->addTank( $tankRepo->findOneBy( array( 'name' => 'M3 Lee' )) );


        //"IV","USA","SCR 210","325 m",1980,"80 kg","T18, T57, M2 Light Tank, 
        //T2 Medium Tank, T82, M2 Medium Tank, M3 Stuart, M37, T40, M3 Lee"

        //"IV","USA","SCR 210","325 m",0,"80 kg","T2 Light Tank, MTLS-1G14"

        //"IV","USA","SCR 510","325 m",1980,"80 kg","M8A1, T49, M41, 
        //M18 Hellcat, M12, M40/M43, T92"

        //"IV","USA","SCR 510 M2","395 m",0,"80 kg","M22 Locust"

        //"VI","USA","AN/GRC-3","410 m",21600,"120 kg","T71, T54E1, M103"

        //"VI","USA","SCR 508","395 m",21600,"100 kg","M5 Stuart, M7 Priest, 
        //M4 Sherman, M7, M10 Wolverine, T1 Heavy Tank, M24 Chaffee, 
        //M36 Jackson, M6, M4A3E8 Sherman, M4A3E2 Sherman Jumbo, T21, T25 AT, 
        //T20, T25/2, T29, M26 Pershing, T28, T32, T28 Prototype, M46 Patton, 
        //T95, T30"

        //"VI","USA","SCR 610","420 m",24600,"100 kg","T69, M8A1, T49, M41, 
        //M18 Hellcat, M12, M40/M43, T92"

        //"VII","USA","SCR 538","480 m",22800,"100 kg","M7, T1 Heavy Tank, 
        //M6, T21"

        //"VIII","USA","SCR 508/1","570 m",0,"100 kg","M4A2E4, T14, M6A2E1"

        //"IX","USA","British Wireless set N19","570 m",0,"110 kg","Ram-II"

        //"IX","USA","SCR 506","615 m",33600,"110 kg","T57, M2 Light Tank, 
        //T2 Medium Tank, T82, M2 Medium Tank, M3 Stuart, M37, T40, M3 Lee, 
        //M5 Stuart, M7 Priest, M4 Sherman, M10 Wolverine, M24 Chaffee, 
        //M36 Jackson, M4A3E8 Sherman, M4A3E2 Sherman Jumbo, T25 AT, T20, T25/2"

        //"X","USA","AN/GRC-7","745 m",54000,"120 kg","T71, T54E1, M103"

        //"X","USA","AN/VRC-7","745 m",54000,"100 kg","M48A1"

        //"X","USA","AN/VRC-3","745 m",51600,"160 kg","T57 Heavy Tank, 
        //T110E5, T110E4, T110E3"

        //"X","USA","SCR 528","745 m",54000,"80 kg","M7 Priest, M7, 
        //M24 Chaffee, T29, M26 Pershing, T28, T32, T28 Prototype, 
        //M46 Patton, T95, T30"

        //"X","USA","SCR 528A1","745 m",0,"91 kg","T26E4 Super Pershing, T34"

        //"X","USA","SCR 528F","750 m",54000,"80 kg","T21"

        //"X","USA","SCR 619","750 m",54000,"80 kg","T69, M8A1, T49, M41, 
        //M18 Hellcat, M12, M40/M43, T92"

        $manager->flush();
    }
}