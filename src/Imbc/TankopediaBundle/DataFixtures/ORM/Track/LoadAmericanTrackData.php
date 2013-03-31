<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Track;

class LoadAmericanTrackData extends AbstractFixture implements OrderedFixtureInterface
{

    public function getOrder()
    {
        return 22;
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
        $nationality = $this->getReference( 'usa' );

        // Name, Tier, Nationality, Price, Weight, loadLimit, Traverse, Compatibility


       $track1 = new Track( "Cunningham E1", $tier1, $nationality, 0, 2000, 7.6, 34);
       $track1->addTank( $tankRepo->getTankByName( "T1 Cunningham" ));
       $manager->persist( $track1 );

       $track2 = new Track( "T18E1", $tier1, $nationality, 270, 3000, 14, 28);
       $track2->addTank( $tankRepo->getTankByName( "T18" ));
       $manager->persist( $track2 );

       $track3 = new Track( "Vickers E", $tier1, $nationality,  0, 2000, 11.1, 42);
       $track3->addTank( $tankRepo->getTankByName( "T1E6" ));
       $manager->persist( $track3 );

       $track4 = new Track( "VVSS T36E6", $tier1, $nationality, 270, 3300, 15.2, 18);
       $track4->addTank( $tankRepo->getTankByName( "T57" ));
       $manager->persist( $track4 );

       $track5 = new Track( "VVSS T16E1", $tier1, $nationality, 330, 3300, 11.5, 36);
       $track5->addTank( $tankRepo->getTankByName( "M2 Light Tank" ));
       $manager->persist( $track5 );

       $track6 = new Track( "T2E1", $tier1, $nationality, 340, 4300, 15.6, 38);
       $track6->addTank( $tankRepo->getTankByName( "T2 Medium Tank" ));
       $manager->persist( $track6 );

       $track7 = new Track( "Cunningham E2", $tier2, $nationality, 500, 2000, 8.3, 38);
       $track7->addTank( $tankRepo->getTankByName( "T1 Cunningham" ));
       $manager->persist( $track7 );

       $track8 = new Track( "T16E2", $tier2, $nationality,  0, 1800, 8.3, 47);
       $track8->addTank( $tankRepo->getTankByName( "T2 Light Tank" ));
       $manager->persist( $track8 );

       $track9 = new Track( "T18E2", $tier2, $nationality, 580, 3000, 15, 30);
       $track9->addTank( $tankRepo->getTankByName( "T18" ));
       $manager->persist( $track9 );

       $track10 = new Track( "VVSS T55E1", $tier2, $nationality, 550, 3300, 16.3, 20);
       $track10->addTank( $tankRepo->getTankByName( "T57" ));
       $manager->persist( $track10 );

       $track11 = new Track( "VVSS T16E2", $tier2, $nationality, 620, 3300, 11.5, 40);
       $track11->addTank( $tankRepo->getTankByName( "M2 Light Tank" ));
       $manager->persist( $track11 );

       $track12 = new Track( "T2E4", $tier2, $nationality, 650, 4300, 16.2, 40);
       $track12->addTank( $tankRepo->getTankByName( "T2 Medium Tank" ));
       $manager->persist( $track12 );

       $track13 = new Track( "T82T55E2", $tier2, $nationality, 1850, 3000, 14, 30);
       $track13->addTank( $tankRepo->getTankByName( "T82" ));
       $manager->persist( $track13 );

       $track14 = new Track( "T48", $tier2, $nationality, 670, 4800, 21.5, 35);
       $track14->addTank( $tankRepo->getTankByName( "M2 Medium Tank" ));
       $manager->persist( $track14 );

       $track15 = new Track( "Stuart E1", $tier2, $nationality, 660, 3000, 12.5, 40);
       $track15->addTank( $tankRepo->getTankByName( "M3 Stuart" ));
       $manager->persist( $track15 );

       $track16 = new Track( "T85E1", $tier2, $nationality, 690, 5100, 16, 18);
       $track16->addTank( $tankRepo->getTankByName( "M37" ));
       $manager->persist( $track16 );

       $track17 = new Track( "VVST78", $tier3, $nationality,  0, 1200, 7.59, 40);
       $track17->addTank( $tankRepo->getTankByName( "M22 Locust" ));
       $manager->persist( $track17 );

       $track18 = new Track( "T82T55E4", $tier3, $nationality, 740, 3000, 15.8, 32);
       $track18->addTank( $tankRepo->getTankByName( "T82" ));
       $manager->persist( $track18 );

       $track19 = new Track( "T49", $tier3, $nationality, 2100, 4800, 23.5, 40);
       $track19->addTank( $tankRepo->getTankByName( "M2 Medium Tank" ));
       $manager->persist( $track19 );

       $track20 = new Track( "Stuart E2", $tier3, $nationality, 1850, 3000, 14.5, 45);
       $track20->addTank( $tankRepo->getTankByName( "M3 Stuart" ));
       $manager->persist( $track20 );

       $track21 = new Track( "T85E2", $tier3, $nationality, 1950, 5100, 23.6, 20);
       $track21->addTank( $tankRepo->getTankByName( "M37" ));
       $manager->persist( $track21 );

       $track22 = new Track( "T40T41", $tier3, $nationality, 1850, 6200, 22.5, 30);
       $track22->addTank( $tankRepo->getTankByName( "T40" ));
       $manager->persist( $track22 );

       $track23 = new Track( "VVSS T41", $tier3, $nationality, 1870, 5000, 28.7, 40);
       $track23->addTank( $tankRepo->getTankByName( "M3 Lee" ));
       $manager->persist( $track23 );

       $track24 = new Track( "VVS T16", $tier3, $nationality, 1850, 3000, 16.2, 35);
       $track24->addTank( $tankRepo->getTankByName( "M8A1" ));
       $manager->persist( $track24 );

       $track25 = new Track( "VVSS T16E3", $tier3, $nationality, 1500, 3000, 15.5, 40);
       $track25->addTank( $tankRepo->getTankByName( "M5 Stuart" ));
       $manager->persist( $track25 );

       $track26 = new Track( "VVSS T49", $tier3, $nationality, 1180, 6200, 22.66, 18);
       $track26->addTank( $tankRepo->getTankByName( "M7 Priest" ));
       $manager->persist( $track26 );

       $track27 = new Track( "T40T48", $tier4, $nationality, 4500, 6200, 24, 32);
       $track27->addTank( $tankRepo->getTankByName( "T40" ));
       $manager->persist( $track27 );

       $track28 = new Track( "VVSS T48", $tier4, $nationality, 4650, 5000, 29.9, 43);
       $track28->addTank( $tankRepo->getTankByName( "M3 Lee" ));
       $manager->persist( $track28 );

       $track29 = new Track( "T36 E6", $tier4, $nationality, 5850, 3000, 17.5, 40);
       $track29->addTank( $tankRepo->getTankByName( "M8A1" ));
       $manager->persist( $track29 );

       $track30 = new Track( "VVSS T36E8", $tier4, $nationality, 5050, 3000, 17.4, 45);
       $track30->addTank( $tankRepo->getTankByName( "M5 Stuart" ));
       $manager->persist( $track30 );

       $track31 = new Track( "VVSS T51", $tier4, $nationality, 4750, 6200, 23.96, 20);
       $track31->addTank( $tankRepo->getTankByName( "M7 Priest" ));
       $manager->persist( $track31 );

       $track32 = new Track( "T41", $tier4, $nationality, 4450, 8000, 30, 35);
       $track32->addTank( $tankRepo->getTankByName( "M4 Sherman" ));
       $manager->persist( $track32 );

       $track33 = new Track( "VVSS T48", $tier4, $nationality, 4450, 4000, 24.5, 46);
       $track33->addTank( $tankRepo->getTankByName( "M7" ));
       $manager->persist( $track33 );

       $track34 = new Track( "M10T41", $tier4, $nationality, 4300, 2000, 13.65, 30);
       $track34->addTank( $tankRepo->getTankByName( "T49" ));
       $manager->persist( $track34 );

       $track35 = new Track( "M10T41", $tier4, $nationality, 4300, 7000, 28.49, 28);
       $track35->addTank( $tankRepo->getTankByName( "M10 Wolverine" ));
       $manager->persist( $track35 );

       $track36 = new Track( "HVSS T31", $tier4, $nationality, 4050, 10600, 57.88, 20);
       $track36->addTank( $tankRepo->getTankByName( "T1 Heavy Tank" ));
       $manager->persist( $track36 );

       $track37 = new Track( "M24T91", $tier4, $nationality, 4450, 4200, 18.3, 42);
       $track37->addTank( $tankRepo->getTankByName( "M24 Chaffee" ));
       $manager->persist( $track37 );

       $track38 = new Track( "T72", $tier4, $nationality, 4300, 6200, 19.2, 18);
       $track38->addTank( $tankRepo->getTankByName( "M41" ));
       $manager->persist( $track38 );

       $track39 = new Track( "M4A2E4T42", $tier5, $nationality,  0, 8000, 33.3, 37);
       $track39->addTank( $tankRepo->getTankByName( "M4A2E4" ));
       $manager->persist( $track39 );

       $track40 = new Track( "VVSS WE210", $tier5, $nationality,  0, 8300, 31, 37);
       $track40->addTank( $tankRepo->getTankByName( "Ram-II" ));
       $manager->persist( $track40 );

       $track41 = new Track( "T42", $tier5, $nationality, 8300, 8000, 32.3, 37);
       $track41->addTank( $tankRepo->getTankByName( "M4 Sherman" ));
       $manager->persist( $track41 );

       $track42 = new Track( "VVSS T48A", $tier5, $nationality, 8000, 4000, 25.5, 48);
       $track42->addTank( $tankRepo->getTankByName( "M7" ));
       $manager->persist( $track42 );

       $track43 = new Track( "VVSS T48M1A1", $tier5, $nationality, 8300, 5300, 23.2, 58);
       $track43->addTank( $tankRepo->getTankByName( "T21" ));
       $manager->persist( $track43 );

       $track44 = new Track( "T49E2", $tier5, $nationality, 10200, 2000, 16.4, 32);
       $track44->addTank( $tankRepo->getTankByName( "T49" ));
       $manager->persist( $track44 );

       $track45 = new Track( "M10T42", $tier5, $nationality, 10000, 7000, 31.7, 30);
       $track45->addTank( $tankRepo->getTankByName( "M10 Wolverine" ));
       $manager->persist( $track45 );

       $track46 = new Track( "HVSS T35", $tier5, $nationality, 9600, 10600, 61.5, 25);
       $track46->addTank( $tankRepo->getTankByName( "T1 Heavy Tank" ));
       $manager->persist( $track46 );

       $track47 = new Track( "M24T95", $tier5, $nationality, 9750, 4200, 21, 46);
       $track47->addTank( $tankRepo->getTankByName( "M24 Chaffee" ));
       $manager->persist( $track47 );

       $track48 = new Track( "T72E1", $tier5, $nationality, 8700, 6200, 25.2, 20);
       $track48->addTank( $tankRepo->getTankByName( "M41" ));
       $manager->persist( $track48 );

       $track49 = new Track( "M36T41", $tier5, $nationality, 6400, 7000, 28.89, 28);
       $track49->addTank( $tankRepo->getTankByName( "M36 Jackson" ));
       $manager->persist( $track49 );

       $track50 = new Track( "HVS1", $tier5, $nationality, 9700, 15000, 57.6, 21);
       $track50->addTank( $tankRepo->getTankByName( "M6" ));
       $manager->persist( $track50 );

       $track51 = new Track( "NVSS T66", $tier5, $nationality, 9600, 8300, 33, 37);
       $track51->addTank( $tankRepo->getTankByName( "M4A3E8 Sherman" ));
       $manager->persist( $track51 );

       $track52 = new Track( "M18 T67", $tier5, $nationality, 8600, 4000, 17.95, 30);
       $track52->addTank( $tankRepo->getTankByName( "M18 Hellcat" ));
       $manager->persist( $track52 );

       $track53 = new Track( "VVSST48E2", $tier5, $nationality, 9630, 8300, 34, 30);
       $track53->addTank( $tankRepo->getTankByName( "M4A3E2 Sherman Jumbo" ));
       $manager->persist( $track53 );

       $track54 = new Track( "M12T48", $tier5, $nationality, 7300, 4200, 22.5, 18);
       $track54->addTank( $tankRepo->getTankByName( "M12" ));
       $manager->persist( $track54 );

       $track55 = new Track( "MTLS T1", $tier6, $nationality,  0, 2000, 17.35, 40);
       $track55->addTank( $tankRepo->getTankByName( "MTLS-1G14" ));
       $manager->persist( $track55 );

       $track56 = new Track( "T14", $tier6, $nationality,  0, 14800, 49.8, 20);
       $track56->addTank( $tankRepo->getTankByName( "T14" ));
       $manager->persist( $track56 );

       $track57 = new Track( "M36T42", $tier6, $nationality, 22100, 7000, 30.5, 30);
       $track57->addTank( $tankRepo->getTankByName( "M36 Jackson" ));
       $manager->persist( $track57 );

       $track58 = new Track( "HVS2", $tier6, $nationality, 15900, 15,000, 61, 25);
       $track58->addTank( $tankRepo->getTankByName( "M6" ));
       $manager->persist( $track58 );

       $track59 = new Track( "NVSS T80", $tier6, $nationality, 16300, 8300, 34.5, 40);
       $track59->addTank( $tankRepo->getTankByName( "M4A3E8 Sherman" ));
       $manager->persist( $track59 );

       $track60 = new Track( "M18 T69", $tier6, $nationality, 17000, 4000, 21.8, 30);
       $track60->addTank( $tankRepo->getTankByName( "M18 Hellcat" ));
       $manager->persist( $track60 );

       $track61 = new Track( "VVSS T48M1A2", $tier6, $nationality, 16000, 5300, 26.0, 60);
       $track61->addTank( $tankRepo->getTankByName( "T21" ));
       $manager->persist( $track61 );

       $track62 = new Track( "VVSST51E2", $tier6, $nationality, 16350, 8300, 38.5, 32);
       $track62->addTank( $tankRepo->getTankByName( "M4A3E2 Sherman Jumbo" ));
       $manager->persist( $track62 );

       $track63 = new Track( "M12T51", $tier6, $nationality, 17300, 4200, 28.95, 20);
       $track63->addTank( $tankRepo->getTankByName( "M12" ));
       $manager->persist( $track63 );

       $track64 = new Track( "T25T1", $tier6, $nationality, 15000, 10200, 39.21, 30);
       $track64->addTank( $tankRepo->getTankByName( "T25 AT" ));
       $manager->persist( $track64 );

       $track65 = new Track( "HVSS T48", $tier6, $nationality, 11900, 5400, 30, 37);
       $track65->addTank( $tankRepo->getTankByName( "T20" ));
       $manager->persist( $track65 );

       $track66 = new Track( "T71", $tier6, $nationality, 15000, 4500, 18, 54);
       $track66->addTank( $tankRepo->getTankByName( "T71" ));
       $manager->persist( $track66 );

       $track67 = new Track( "T84E1", $tier6, $nationality, 13400, 11500, 63.5, 20);
       $track67->addTank( $tankRepo->getTankByName( "T29" ));
       $manager->persist( $track67 );

       $track68 = new Track( "M40", $tier6, $nationality, 19070, 4200, 35.6, 20);
       $track68->addTank( $tankRepo->getTankByName( "M40/M43" ));
       $manager->persist( $track68 );

       $track69 = new Track( "HVSS T51", $tier7, $nationality, 17900, 5400, 34, 37);
       $track69->addTank( $tankRepo->getTankByName( "T20" ));
       $manager->persist( $track69 );

       $track70 = new Track( "T25/2T1", $tier7, $nationality, 19200, 10200, 43.805, 30);
       $track70->addTank( $tankRepo->getTankByName( "T25/2" ));
       $manager->persist( $track70 );

       $track71 = new Track( "T25/2T4", $tier7, $nationality, 19200, 10200, 45.8, 30);
       $track71->addTank( $tankRepo->getTankByName( "T25/2" ));
       $manager->persist( $track71 );

       $track72 = new Track( "T71A1", $tier7, $nationality, 18000, 4500, 20, 56);
       $track72->addTank( $tankRepo->getTankByName( "T71" ));
       $manager->persist( $track72 );

       $track73 = new Track( "T84E3", $tier7, $nationality, 22000, 11500, 66.8, 25);
       $track73->addTank( $tankRepo->getTankByName( "T29" ));
       $manager->persist( $track73 );

       $track74 = new Track( "M43", $tier7, $nationality, 30000, 4200, 40.7, 22);
       $track74->addTank( $tankRepo->getTankByName( "M40/M43" ));
       $manager->persist( $track74 );

       $track75 = new Track( "M26T80E1", $tier7, $nationality, 16300, 10000, 42.35, 36);
       $track75->addTank( $tankRepo->getTankByName( "M26 Pershing" ));
       $manager->persist( $track75 );

       $track76 = new Track( "T28VVSS T46", $tier7, $nationality, 16500, 12000, 59.8, 18);
       $track76->addTank( $tankRepo->getTankByName( "T28" ));
       $manager->persist( $track76 );

       $track77 = new Track( "T84E1", $tier7, $nationality, 16300, 8000, 34.56, 35);
       $track77->addTank( $tankRepo->getTankByName( "T69" ));
       $manager->persist( $track77 );

       $track78 = new Track( "T84E1A", $tier7, $nationality, 20200, 12000, 54.83, 20);
       $track78->addTank( $tankRepo->getTankByName( "T32" ));
       $manager->persist( $track78 );

       $track79 = new Track( "T28P E2", $tier7, $nationality, 16000, 12000, 68.8, 18);
       $track79->addTank( $tankRepo->getTankByName( "T28 Prototype" ));
       $manager->persist( $track79 );

       $track80 = new Track( "T92 T80E1", $tier7, $nationality, 16000, 10200, 57.69, 20);
       $track80->addTank( $tankRepo->getTankByName( "T92" ));
       $manager->persist( $track80 );

       $track81 = new Track( "T25T2", $tier8, $nationality, 32720, 10200, 43.8, 30);
       $track81->addTank( $tankRepo->getTankByName( "T25 AT" ));
       $manager->persist( $track81 );

       $track82 = new Track( "М26Т80Е1", $tier8, $nationality,  0, 10000, 52.5, 32);
       $track82->addTank( $tankRepo->getTankByName( "T26E4 Super Pershing" ));
       $manager->persist( $track82 );

       $track83 = new Track( "M6A2E1HVSS", $tier8, $nationality,  0, 15000, 70.5, 24);
       $track83->addTank( $tankRepo->getTankByName( "M6A2E1" ));
       $manager->persist( $track83 );

       $track84 = new Track( "T80E3", $tier8, $nationality,  0, 10000, 71.85, 22);
       $track84->addTank( $tankRepo->getTankByName( "T34" ));
       $manager->persist( $track84 );

       $track85 = new Track( "M26T81", $tier8, $nationality, 30250, 10000, 45.05, 38);
       $track85->addTank( $tankRepo->getTankByName( "M26 Pershing" ));
       $manager->persist( $track85 );

       $track86 = new Track( "T28VVSS T56", $tier8, $nationality, 33300, 12000, 62.45, 20);
       $track86->addTank( $tankRepo->getTankByName( "T28" ));
       $manager->persist( $track86 );

       $track87 = new Track( "T54E1", $tier8, $nationality, 31700, 10000, 54.5, 44);
       $track87->addTank( $tankRepo->getTankByName( "T54E1" ));
       $manager->persist( $track87 );

       $track88 = new Track( "T84E3A", $tier8, $nationality, 38100, 12000, 60.5, 25);
       $track88->addTank( $tankRepo->getTankByName( "T32" ));
       $manager->persist( $track88 );

       $track89 = new Track( "T28P E4", $tier8, $nationality, 35000, 12000, 76.8, 20);
       $track89->addTank( $tankRepo->getTankByName( "T28 Prototype" ));
       $manager->persist( $track89 );

       $track90 = new Track( "T92 T82E4", $tier8, $nationality, 39100, 10200, 60.6, 22);
       $track90->addTank( $tankRepo->getTankByName( "T92" ));
       $manager->persist( $track90 );

       $track91 = new Track( "M46T80E1", $tier8, $nationality, 31700, 10000, 41.2, 36);
       $track91->addTank( $tankRepo->getTankByName( "M46 Patton" ));
       $manager->persist( $track91 );

       $track92 = new Track( "T95", $tier8, $nationality, 33000, 8000, 36.56, 40);
       $track92->addTank( $tankRepo->getTankByName( "T69" ));
       $manager->persist( $track92 );

       $track93 = new Track( "T95HVSS", $tier8, $nationality, 29300, 18000, 86.89, 16);
       $track93->addTank( $tankRepo->getTankByName( "T95" ));
       $manager->persist( $track93 );

       $track94 = new Track( "T80E3A", $tier8, $nationality, 42500, 10000, 64.05, 20);
       $track94->addTank( $tankRepo->getTankByName( "T30" ));
       $manager->persist( $track94 );

       $track95 = new Track( "T97E1", $tier8, $nationality, 31500, 8000, 57.5, 26);
       $track95->addTank( $tankRepo->getTankByName( "M103" ));
       $manager->persist( $track95 );

       $track96 = new Track( "M46T81", $tier9, $nationality, 60500, 10000, 45.05, 38);
       $track96->addTank( $tankRepo->getTankByName( "M46 Patton" ));
       $manager->persist( $track96 );

       $track97 = new Track( "T54E1M2", $tier9, $nationality, 61000, 10000, 57.5, 46);
       $track97->addTank( $tankRepo->getTankByName( "T54E1" ));
       $manager->persist( $track97 );

       $track98 = new Track( "T95HVSSM2", $tier9, $nationality, 62500, 18000, 91.89, 18);
       $track98->addTank( $tankRepo->getTankByName( "T95" ));
       $manager->persist( $track98 );

       $track99 = new Track( "T84E38", $tier9, $nationality, 60000, 10000, 69.05, 22);
       $track99->addTank( $tankRepo->getTankByName( "T30" ));
       $manager->persist( $track99 );

       $track100 = new Track( "T97E2", $tier9, $nationality, 61500, 8000, 62.5, 28);
       $track100->addTank( $tankRepo->getTankByName( "M103" ));
       $manager->persist( $track100 );

       $track101 = new Track( "T97", $tier10, $nationality, 82500, 11000, 58.0, 30);
       $track101->addTank( $tankRepo->getTankByName( "T57 Heavy Tank" ));
       $manager->persist( $track101 );

       $track102 = new Track( "T97E2", $tier10, $nationality, 82500, 8000, 50.35, 50);
       $track102->addTank( $tankRepo->getTankByName( "M48A1" ));
       $manager->persist( $track102 );

       $track103 = new Track( "T110E27", $tier10, $nationality, 82500, 8000, 60.05, 30);
       $track103->addTank( $tankRepo->getTankByName( "T110E5" ));
       $manager->persist( $track103 );

       $track104 = new Track( "T110E4", $tier10, $nationality, 82500, 8000, 67, 26);
       $track104->addTank( $tankRepo->getTankByName( "T110E4" ));
       $manager->persist( $track104 );

       $track105 = new Track( "T110E3", $tier10, $nationality, 82500, 8000, 78, 24);
       $track105->addTank( $tankRepo->getTankByName( "T110E3" ));
       $manager->persist( $track105 );

       $manager->flush();
    }
}