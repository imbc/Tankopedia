<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Radio;

class LoadFrenchRadioData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 13;
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
//        // ref for nationality
        $nationality = $this->getReference( 'fr' );

//        "Tier","Nation","Name","Signal Range","Price","Weight","Compatibility"
//        "I","FR","Signal Flags","90 m",0,"1 kg","RenaultFT, RenaultFT AC"
        $radio1 = new Radio( 'Signal Flags', $tier1, $nationality, 0, 1, 90 );
        $radio1->addTank( $tankRepo->getTankByName( 'RenaultFT' ));
        $radio1->addTank( $tankRepo->getTankByName( 'RenaultFT AC' ));
        $manager->persist( $radio1 );

//        "III","FR","ER 51","290 m",500,"100 kg","B1, BDR G1B, AMX 12t, ARL V39"
        $radio2 = new Radio( 'ER 51', $tier3, $nationality, 500, 100, 290 );
        $radio2->addTank( $tankRepo->getTankByName( 'B1' ));
        $radio2->addTank( $tankRepo->getTankByName( 'BDR G1B' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AMX 12t' ));
        $radio2->addTank( $tankRepo->getTankByName( 'ARL V39' ));
        $manager->persist( $radio2 );

//        "III","FR","ER 52","300 m",600,"100 kg","RenaultFT, RenaultFT AC, 
//         RenaultBS, D1, Hotchkiss H35, AMX 38, D2, Renault UE 57, 
//         Lorraine39 L AM, Somua SAu-40, AMX 40, AMX 105AM, ELC AMX, S-35 CA, 
//         AMX 13 F3 AM, Lorraine155 50, Lorraine155 51"
        $radio3 = new Radio( 'ER 52', $tier3, $nationality, 600, 100, 300 );
        $radio3->addTank( $tankRepo->getTankByName( 'RenaultFT' ));
        $radio3->addTank( $tankRepo->getTankByName( 'RenaultFT AC' ));
        $radio3->addTank( $tankRepo->getTankByName( 'RenaultBS' ));
        $radio3->addTank( $tankRepo->getTankByName( 'D1' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Hotchkiss H35' ));
        $radio3->addTank( $tankRepo->getTankByName( 'AMX 38' ));
        $radio3->addTank( $tankRepo->getTankByName( 'D2' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Renault UE 57' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Lorraine39 L AM' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Somua SAu-40' ));
        $radio3->addTank( $tankRepo->getTankByName( 'AMX 40' ));
        $radio3->addTank( $tankRepo->getTankByName( 'AMX 105AM' ));
        $radio3->addTank( $tankRepo->getTankByName( 'ELC AMX' ));
        $radio3->addTank( $tankRepo->getTankByName( 'S-35 CA' ));
        $radio3->addTank( $tankRepo->getTankByName( 'AMX 13 F3 AM' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Lorraine155 50' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Lorraine155 51' ));
        $manager->persist( $radio3 );

//        "III","FR","FuG Spr. D","310 m",0,"50 kg","FCM36 PaK40"
        $radio4 = new Radio( 'FuG Spr. D', $tier3, $nationality, 0, 50, 310 );
        $radio4->addTank( $tankRepo->getTankByName( 'FCM36 PaK40' ));
        $manager->persist( $radio4 );

//        "V","FR","ER 53","360 m",3650,"100 kg","RenaultBS, D1, Hotchkiss H35, 
//         AMX 38, D2, Renault UE 57, Lorraine39 L AM, Somua SAu-40, AMX 40, 
//         AMX 105AM, B1, ELC AMX, BDR G1B, S-35 CA, AMX 13 F3 AM, ARL V39, 
//         Lorraine155 50, Lorraine155 51"
        $radio5 = new Radio( 'ER 53', $tier5, $nationality, 3650, 100, 360 );
        $radio5->addTank( $tankRepo->getTankByName( 'RenaultBS' ));
        $radio5->addTank( $tankRepo->getTankByName( 'D1' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Hotchkiss H35' ));
        $radio5->addTank( $tankRepo->getTankByName( 'AMX 38' ));
        $radio5->addTank( $tankRepo->getTankByName( 'D2' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Renault UE 57' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Lorraine39 L AM' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Somua SAu-40' ));
        $radio5->addTank( $tankRepo->getTankByName( 'AMX 40' ));
        $radio5->addTank( $tankRepo->getTankByName( 'AMX 105AM' ));
        $radio5->addTank( $tankRepo->getTankByName( 'B1' ));
        $radio5->addTank( $tankRepo->getTankByName( 'ELC AMX' ));
        $radio5->addTank( $tankRepo->getTankByName( 'BDR G1B' ));
        $radio5->addTank( $tankRepo->getTankByName( 'S-35 CA' ));
        $radio5->addTank( $tankRepo->getTankByName( 'AMX 13 F3 AM' ));
        $radio5->addTank( $tankRepo->getTankByName( 'ARL V39' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Lorraine155 50' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Lorraine155 51' ));
        $manager->persist( $radio5 );

//        "VI","FR","FuG Spr.F","525 m",0,"50 kg","105 leFH18B2"
        $radio6 = new Radio( 'FuG Spr.F', $tier6, $nationality, 0, 50, 525 );
        $radio6->addTank( $tankRepo->getTankByName( '105 leFH18B2' ));
        $manager->persist( $radio6 );

//        "VI","FR","SCR 508","400 m",21600,"100 kg","ARL 44, AMX 13 75, 
//         AMX AC Mle. 1946, AMX M4(1945), AMX 13 90, AMX 50 100, 
//         AMX AC Mle. 1948, Bat Chatillon 155, Lorraine 40 t, AMX 50 120, 
//         AMX 50 Foch"
        $radio7 = new Radio( 'SCR 508', $tier6, $nationality, 21600, 100, 400 );
        $radio7->addTank( $tankRepo->getTankByName( 'ARL 44' ));
        $radio7->addTank( $tankRepo->getTankByName( 'AMX 13 75' ));
        $radio7->addTank( $tankRepo->getTankByName( 'AMX AC Mle. 1946' ));
        $radio7->addTank( $tankRepo->getTankByName( 'AMX M4(1945)' ));
        $radio7->addTank( $tankRepo->getTankByName( 'AMX 13 90' ));
        $radio7->addTank( $tankRepo->getTankByName( 'AMX 50 100' ));
        $radio7->addTank( $tankRepo->getTankByName( 'AMX AC Mle. 1948' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Bat Chatillon 155' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Lorraine 40 t' ));
        $radio7->addTank( $tankRepo->getTankByName( 'AMX 50 120' ));
        $radio7->addTank( $tankRepo->getTankByName( 'AMX 50 Foch' ));
        $manager->persist( $radio7 );

//        "VII","FR","ER 56","455 m",21600,"150 kg","Renault UE 57, 
//         Lorraine39 L AM, Somua SAu-40, S-35 CA"
        $radio8 = new Radio( 'ER 56', $tier7, $nationality, 21600, 150, 455 );
        $radio8->addTank( $tankRepo->getTankByName( 'Renault UE 57' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Lorraine39 L AM' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Somua SAu-40' ));
        $radio8->addTank( $tankRepo->getTankByName( 'S-35 CA' ));
        $manager->persist( $radio8 );

//        "IX","FR","ER 55","710 m",44100,"150 kg","AMX 105AM, B1, BDR G1B, 
//         AMX 13 F3 AM, ARL V39, Lorraine155 50, Lorraine155 51"
        $radio9 = new Radio( 'ER 55', $tier9, $nationality, 44100, 150, 710 );
        $radio9->addTank( $tankRepo->getTankByName( 'AMX 105AM' ));
        $radio9->addTank( $tankRepo->getTankByName( 'B1' ));
        $radio9->addTank( $tankRepo->getTankByName( 'BDR G1B' ));
        $radio9->addTank( $tankRepo->getTankByName( 'AMX 13 F3 AM' ));
        $radio9->addTank( $tankRepo->getTankByName( 'ARL V39' ));
        $radio9->addTank( $tankRepo->getTankByName( 'Lorraine155 50' ));
        $radio9->addTank( $tankRepo->getTankByName( 'Lorraine155 51' ));
        $manager->persist( $radio9 );

//        "X","FR","SCR 528F","750 m",54000,"80 kg","AMX 12t, ARL 44, 
//         AMX 13 75, AMX AC Mle. 1946, AMX M4(1945), AMX 13 90, AMX 50 100, 
//         AMX AC Mle. 1948, Bat Chatillon 155, Lorraine 40 t, AMX 50 120, 
//         AMX 50 Foch, Bat Chatillon 25 t"
        $radio10 = new Radio( 'SCR 528F', $tier10, $nationality, 54000, 80, 750 );
        $radio10->addTank( $tankRepo->getTankByName( 'AMX 12t' ));
        $radio10->addTank( $tankRepo->getTankByName( 'ARL 44' ));
        $radio10->addTank( $tankRepo->getTankByName( 'AMX 13 75' ));
        $radio10->addTank( $tankRepo->getTankByName( 'AMX AC Mle. 1946' ));
        $radio10->addTank( $tankRepo->getTankByName( 'AMX M4(1945)' ));
        $radio10->addTank( $tankRepo->getTankByName( 'AMX 13 90' ));
        $radio10->addTank( $tankRepo->getTankByName( 'AMX 50 100' ));
        $radio10->addTank( $tankRepo->getTankByName( 'AMX AC Mle. 1948' ));
        $radio10->addTank( $tankRepo->getTankByName( 'Bat Chatillon 155' ));
        $radio10->addTank( $tankRepo->getTankByName( 'Lorraine 40 t' ));
        $radio10->addTank( $tankRepo->getTankByName( 'AMX 50 120' ));
        $radio10->addTank( $tankRepo->getTankByName( 'AMX 50 Foch' ));
        $radio10->addTank( $tankRepo->getTankByName( 'Bat Chatillon 25 t' ));
        $manager->persist( $radio10 );

//        "X","FR","SCR 528F","750 m",0,"80 kg","FCM 50 t"
        $radio11 = new Radio( 'SCR 528F', $tier10, $nationality, 0, 80, 750 );
        $radio11->addTank( $tankRepo->getTankByName( 'FCM 50 t' ));
        $manager->persist( $radio11 );

//        "X","FR","SCR 619","750 m",54000,"80 kg","AMX 50B, AMX-50 Foch (155)"
        $radio12 = new Radio( 'SCR 619', $tier10, $nationality, 54000, 80, 750 );
        $radio12->addTank( $tankRepo->getTankByName( 'AMX 50B' ));
        $radio12->addTank( $tankRepo->getTankByName( 'AMX-50 Foch (155)' ));
        $manager->persist( $radio12 );

        $manager->flush();
    }
}