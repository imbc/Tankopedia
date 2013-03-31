<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM\Radio;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Radio;

class LoadGermanRadioData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 14;
    }

    public function load( ObjectManager $manager )
    {
        $tankRepo = $manager->getRepository( 'ImbcTankopediaBundle:Tank' );
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
        $nationality = $this->getReference( 'de' );

//        "Tier","Nation","Name","Signal Range","Price","Weight","Compatibility"
//        "I","DE","Signal Flags","90 m",0,"1 kg","Leichttraktor"
        $radio1 = new Radio( 'Signal Range', $tier1, $nationality, 0, 1, 90 );
        $radio1->addTank( $tankRepo->getTankByName( 'Leichttraktor' ));
        $manager->persist( $radio1 );

//        "II","DE","FuG 2","265 m",180,"40 kg","Leichttraktor, PzKpfw II, 
//         Panzerjäger I, Sturmpanzer I Bison, Marder II"
        $radio2 = new Radio( 'FuG 2', $tier2, $nationality, 180, 40, 265 );
        $radio2->addTank( $tankRepo->getTankByName( 'Leichttraktor' ));
        $radio2->addTank( $tankRepo->getTankByName( 'PzKpfw II' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Panzerjäger I' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Sturmpanzer I Bison' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Marder II' ));
        $manager->persist( $radio2 );

//        "II","DE","FuG 37","290 m",180,"40 kg","PzKpfw 35 (t), PzKpfw 38 (t), 
//         Hetzer, PzKpfw 38 nA, Grille"
        $radio3 = new Radio( 'FuG 37', $tier2, $nationality, 180, 40, 290 );
        $radio3->addTank( $tankRepo->getTankByName( 'PzKpfw 35 (t)' ));
        $radio3->addTank( $tankRepo->getTankByName( 'PzKpfw 38 (t)' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Hetzer' ));
        $radio3->addTank( $tankRepo->getTankByName( 'PzKpfw 38 nA' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Grille' ));
        $manager->persist( $radio3 );

//        "III","DE","FuG 5","310 m",630,"50 kg","Panzerjäger I, 
//         Sturmpanzer I Bison, PzKpfw 35 (t), PzKpfw 38 (t), 
//         PzKpfw III Ausf. A, PzKpfw II Luchs, Marder II, Wespe, 
//         Sturmpanzer II, PzKpfw III, PzKpfw 38 nA, VK 1602 Leopard, 
//         PzKpfw III/IV, PzKpfw IV, StuG III, Hummel, VK 3001 (H), 
//         JagdPz IV, VK 3001 (P), VK 3601 (H), GW Panther, VK 3002 (DB), 
//         GW Tiger, GW Typ E"
        $radio4 = new Radio( 'FuG 5', $tier3, $nationality, 630, 50, 310 );
        $radio4->addTank( $tankRepo->getTankByName( 'Panzerjäger I' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Sturmpanzer I Bison' ));
        $radio4->addTank( $tankRepo->getTankByName( 'PzKpfw 35 (t)' ));
        $radio4->addTank( $tankRepo->getTankByName( 'PzKpfw 38 (t)' ));
        $radio4->addTank( $tankRepo->getTankByName( 'PzKpfw III Ausf. A' ));
        $radio4->addTank( $tankRepo->getTankByName( 'PzKpfw II Luchs' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Marder II' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Wespe' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Sturmpanzer II' ));
        $radio4->addTank( $tankRepo->getTankByName( 'PzKpfw III' ));
        $radio4->addTank( $tankRepo->getTankByName( 'PzKpfw 38 nA' ));
        $radio4->addTank( $tankRepo->getTankByName( 'VK 1602 Leopard' ));
        $radio4->addTank( $tankRepo->getTankByName( 'PzKpfw III/IV' ));
        $radio4->addTank( $tankRepo->getTankByName( 'PzKpfw IV' ));
        $radio4->addTank( $tankRepo->getTankByName( 'StuG III' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Hummel' ));
        $radio4->addTank( $tankRepo->getTankByName( 'VK 3001 (H)' ));
        $radio4->addTank( $tankRepo->getTankByName( 'JagdPz IV' ));
        $radio4->addTank( $tankRepo->getTankByName( 'VK 3001 (P)' ));
        $radio4->addTank( $tankRepo->getTankByName( 'VK 3601 (H)' ));
        $radio4->addTank( $tankRepo->getTankByName( 'GW Panther' ));
        $radio4->addTank( $tankRepo->getTankByName( 'VK 3002 (DB)' ));
        $radio4->addTank( $tankRepo->getTankByName( 'GW Tiger' ));
        $radio4->addTank( $tankRepo->getTankByName( 'GW Typ E' ));
        $manager->persist( $radio4 );

//        "IV","DE","FuG 6","345 m",0,"70 kg","PzKpfw II Ausf. J"
        $radio5 = new Radio( 'FuG 6', $tier4, $nationality, 0, 70, 345 );
        $radio5->addTank( $tankRepo->getTankByName( 'PzKpfw II Ausf. J' ));
        $manager->persist( $radio5 );

//        "VI","DE","FuG5 mit 20 WS.E.","620 m",,"50 kg","Dicker Max, 
//         PzKpfw IV Schmalturm"
        $radio6 = new Radio( 'FuG5 mit 20 WS.E.', $tier6, $nationality, 0, 50, 620 );
        $radio6->addTank( $tankRepo->getTankByName( 'Dicker Max' ));
        $radio6->addTank( $tankRepo->getTankByName( 'PzKpfw IV Schmalturm' ));
        $manager->persist( $radio6 );

//        "VI","DE","FuG 7","415 m",8160,"70 kg","PzKpfw II, 
//         PzKpfw III Ausf. A, PzKpfw II Luchs, PzKpfw III, Grille, 
//         VK 1602 Leopard, PzKpfw III/IV, PzKpfw IV, StuG III, Hummel, VK 2801, 
//         VK 3001 (H), JagdPz IV, VK 3001 (P), VK 3601 (H), GW Panther, 
//         Jagdpanther, VK 3002 (DB), PzKpfw V Panther, PzKpfw VI Tiger, 
//         PzKpfw VI Tiger (P), GW Tiger, Panther II, VK 4502 (P) Ausf. A, 
//         PzKpfw VIB Tiger II, Jagdpanther II, Ferdinand, GW Typ E, E-50, 
//         Jagdtiger, E-75, VK 4502 (P) Ausf. B"
        $radio7 = new Radio( 'FuG 7', $tier6, $nationality, 8160, 70, 415 );
        $radio7->addTank( $tankRepo->getTankByName( 'PzKpfw II' ));
        $radio7->addTank( $tankRepo->getTankByName( 'PzKpfw III Ausf. A' ));
        $radio7->addTank( $tankRepo->getTankByName( 'PzKpfw II Luchs' ));
        $radio7->addTank( $tankRepo->getTankByName( 'PzKpfw III' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Grille' ));
        $radio7->addTank( $tankRepo->getTankByName( 'VK 1602 Leopard' ));
        $radio7->addTank( $tankRepo->getTankByName( 'PzKpfw III/IV' ));
        $radio7->addTank( $tankRepo->getTankByName( 'PzKpfw IV' ));
        $radio7->addTank( $tankRepo->getTankByName( 'StuG III' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Hummel' ));
        $radio7->addTank( $tankRepo->getTankByName( 'VK 2801' ));
        $radio7->addTank( $tankRepo->getTankByName( 'VK 3001 (H)' ));
        $radio7->addTank( $tankRepo->getTankByName( 'JagdPz IV' ));
        $radio7->addTank( $tankRepo->getTankByName( 'VK 3001 (P)' ));
        $radio7->addTank( $tankRepo->getTankByName( 'VK 3601 (H)' ));
        $radio7->addTank( $tankRepo->getTankByName( 'GW Panther' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Jagdpanther' ));
        $radio7->addTank( $tankRepo->getTankByName( 'VK 3002 (DB)' ));
        $radio7->addTank( $tankRepo->getTankByName( 'PzKpfw V Panther' ));
        $radio7->addTank( $tankRepo->getTankByName( 'PzKpfw VI Tiger' ));
        $radio7->addTank( $tankRepo->getTankByName( 'PzKpfw VI Tiger (P)' ));
        $radio7->addTank( $tankRepo->getTankByName( 'GW Tiger' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Panther II' ));
        $radio7->addTank( $tankRepo->getTankByName( 'VK 4502 (P) Ausf. A' ));
        $radio7->addTank( $tankRepo->getTankByName( 'PzKpfw VIB Tiger II' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Jagdpanther II' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Ferdinand' ));
        $radio7->addTank( $tankRepo->getTankByName( 'GW Typ E' ));
        $radio7->addTank( $tankRepo->getTankByName( 'E-50' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Jagdtiger' ));
        $radio7->addTank( $tankRepo->getTankByName( 'E-75' ));
        $radio7->addTank( $tankRepo->getTankByName( 'VK 4502 (P) Ausf. B' ));
        $manager->persist( $radio7 );

//        "VI","DE","FuG 7 Ausf. F","710 m",0,"70 kg","T-15, T-25, 
//         PzKpfw IV Hydraulic, PzKpfw V-IV Alpha, PzKpfw V-IV, 
//         Panther-M10, 8.8 cm PaK 43 Jagdtiger"
        $radio8 = new Radio( 'FuG 7 Ausf. F', $tier6, $nationality, 0, 70, 710 );
        $radio8->addTank( $tankRepo->getTankByName( 'T-15' ));
        $radio8->addTank( $tankRepo->getTankByName( 'T-25' ));
        $radio8->addTank( $tankRepo->getTankByName( 'PzKpfw IV Hydraulic' ));
        $radio8->addTank( $tankRepo->getTankByName( 'PzKpfw V-IV Alpha' ));
        $radio8->addTank( $tankRepo->getTankByName( 'PzKpfw V-IV' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Panther-M10' ));
        $radio8->addTank( $tankRepo->getTankByName( '8.8 cm PaK 43 Jagdtiger' ));
        $manager->persist( $radio8 );

//        "VII","DE","FuG 10","455 m",21600,"100 kg","Hetzer"
        $radio9 = new Radio( 'FuG 10', $tier7, $nationality, 21600, 100, 455 );
        $radio9->addTank( $tankRepo->getTankByName( 'Hetzer' ));
        $manager->persist( $radio9 );

//        "VII","DE","FuG Spr. 1","455 m",21600,"150 kg","PzKpfw II, 
//         PzKpfw III Ausf. A, PzKpfw II Luchs, Wespe, Sturmpanzer II"
        $radio10 = new Radio( 'FuG Spr. 1', $tier7, $nationality, 21600, 150, 455 );
        $radio10->addTank( $tankRepo->getTankByName( 'PzKpfw II' ));
        $radio10->addTank( $tankRepo->getTankByName( 'PzKpfw III Ausf. A' ));
        $radio10->addTank( $tankRepo->getTankByName( 'PzKpfw II Luchs' ));
        $radio10->addTank( $tankRepo->getTankByName( 'Wespe' ));
        $radio10->addTank( $tankRepo->getTankByName( 'Sturmpanzer II' ));
        $manager->persist( $radio10 );

//        "VIII","DE","FuG 8","525 m",24240,"50 kg","PzKpfw 35 (t), 
//         PzKpfw 38 (t), PzKpfw 38 nA"
        $radio11 = new Radio( 'FuG 8', $tier8, $nationality, 24240, 50, 525 );
        $radio11->addTank( $tankRepo->getTankByName( 'PzKpfw 35 (t)' ));
        $radio11->addTank( $tankRepo->getTankByName( 'PzKpfw 38 (t)' ));
        $radio11->addTank( $tankRepo->getTankByName( 'PzKpfw 38 nA' ));
        $manager->persist( $radio11 );

//        "VIII","DE","FuG 8","525 m",0,"50 kg","PzKpfw 38H735 (f), 
//         PzKpfw S35 739 (f), PzKpfw B2 740 (f)"
        $radio12 = new Radio( 'FuG 8', $tier8, $nationality, 0, 50, 525 );
        $radio12->addTank( $tankRepo->getTankByName( 'PzKpfw 38H735 (f)' ));
        $radio12->addTank( $tankRepo->getTankByName( 'PzKpfw S35 739 (f)' ));
        $radio12->addTank( $tankRepo->getTankByName( 'PzKpfw B2 740 (f)' ));
        $manager->persist( $radio12 );

//        "VIII","DE","FuG Spr. A","700 m",27000,"150 kg","VK 1602 Leopard, 
//         VK 2801"
        $radio13 = new Radio( 'FuG Spr. A', $tier8, $nationality, 27000, 150, 700 );
        $radio13->addTank( $tankRepo->getTankByName( 'VK 1602 Leopard' ));
        $radio13->addTank( $tankRepo->getTankByName( 'VK 2801' ));
        $manager->persist( $radio13 );

//        "IX","DE","FuG 11","615 m",33600,"70 kg","Hetzer"
        $radio14 = new Radio( 'FuG 11', $tier9, $nationality, 33600, 70, 615 );
        $radio14->addTank( $tankRepo->getTankByName( 'Hetzer' ));
        $manager->persist( $radio14 );

//        "IX","DE","FuG 12","710 m",43200,"150 kg","PzKpfw III, 
//         Grille, PzKpfw III/IV, PzKpfw IV, Hummel, VK 2801, VK 3001 (H), 
//         VK 3001 (P), VK 3601 (H), GW Panther, Jagdpanther, VK 3002 (DB), 
//         PzKpfw V Panther, PzKpfw VI Tiger, PzKpfw VI Tiger (P), GW Tiger, 
//         Panther II, VK 4502 (P) Ausf. A, PzKpfw VIB Tiger II, Jagdpanther II, 
//         Ferdinand, GW Typ E, E-50, Jagdtiger, E-75, VK 4502 (P) Ausf. B"
        $radio15 = new Radio( 'FuG 12', $tier9, $nationality, 43200, 150, 710 );
        $radio15->addTank( $tankRepo->getTankByName( 'PzKpfw III' ));
        $radio15->addTank( $tankRepo->getTankByName( 'Grille' ));
        $radio15->addTank( $tankRepo->getTankByName( 'PzKpfw III/IV' ));
        $radio15->addTank( $tankRepo->getTankByName( 'PzKpfw IV' ));
        $radio15->addTank( $tankRepo->getTankByName( 'Hummel' ));
        $radio15->addTank( $tankRepo->getTankByName( 'VK 2801' ));
        $radio15->addTank( $tankRepo->getTankByName( 'VK 3001 (H)' ));
        $radio15->addTank( $tankRepo->getTankByName( 'VK 3001 (P)' ));
        $radio15->addTank( $tankRepo->getTankByName( 'VK 3601 (H)' ));
        $radio15->addTank( $tankRepo->getTankByName( 'GW Panther' ));
        $radio15->addTank( $tankRepo->getTankByName( 'Jagdpanther' ));
        $radio15->addTank( $tankRepo->getTankByName( 'VK 3002 (DB)' ));
        $radio15->addTank( $tankRepo->getTankByName( 'PzKpfw V Panther' ));
        $radio15->addTank( $tankRepo->getTankByName( 'PzKpfw VI Tiger' ));
        $radio15->addTank( $tankRepo->getTankByName( 'PzKpfw VI Tiger (P)' ));
        $radio15->addTank( $tankRepo->getTankByName( 'GW Tiger' ));
        $radio15->addTank( $tankRepo->getTankByName( 'Panther II' ));
        $radio15->addTank( $tankRepo->getTankByName( 'VK 4502 (P) Ausf. A' ));
        $radio15->addTank( $tankRepo->getTankByName( 'PzKpfw VIB Tiger II' ));
        $radio15->addTank( $tankRepo->getTankByName( 'Jagdpanther II' ));
        $radio15->addTank( $tankRepo->getTankByName( 'Ferdinand' ));
        $radio15->addTank( $tankRepo->getTankByName( 'GW Typ E' ));
        $radio15->addTank( $tankRepo->getTankByName( 'E-50' ));
        $radio15->addTank( $tankRepo->getTankByName( 'Jagdtiger' ));
        $radio15->addTank( $tankRepo->getTankByName( 'E-75' ));
        $radio15->addTank( $tankRepo->getTankByName( 'VK 4502 (P) Ausf. B' ));
        $manager->persist( $radio15 );

//        "IX","DE","FuG 12A","710 m",,"150 kg","Löwe"
        $radio16 = new Radio( 'FuG 12A', $tier9, $nationality, 0, 150, 710 );
        $radio16->addTank( $tankRepo->getTankByName( 'Löwe' ));
        $manager->persist( $radio16 );

//        "X","DE","10WSc","720 m",51600,"160 kg","E-50 Ausf. M, E-100, Maus, 
//         JagdPz E-100"
        $radio17 = new Radio( '10WSc', $tier10, $nationality, 51600, 160, 720 );
        $radio17->addTank( $tankRepo->getTankByName( 'E-50 Ausf. M' ));
        $radio17->addTank( $tankRepo->getTankByName( 'E-100' ));
        $radio17->addTank( $tankRepo->getTankByName( 'Maus' ));
        $radio17->addTank( $tankRepo->getTankByName( 'JagdPz E-100' ));
        $manager->persist( $radio17 );

        $manager->flush();
    }
}