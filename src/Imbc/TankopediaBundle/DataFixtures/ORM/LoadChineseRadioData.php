<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Radio;

class LoadChineseRadioData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 15;
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
//        // ref for nationality
        $nationality = $this->getReference( 'cn' );

//        "Tier","Nation","Name","Signal Range","Price","Weight","Compatibility"
//        "I","CN","Signal Flags","90 m",0,"1 kg","Renault NC-31, 
//         Vickers Mk. E Type B"
        $radio1 = new Radio( 'Signal Flags', $tier1, $nationality, 0, 1, 90 );
        $radio1->addTank( $tankRepo->getTankByName( 'Renault NC-31' ));
        $radio1->addTank( $tankRepo->getTankByName( 'Vickers Mk. E Type B' ));
        $manager->persist( $radio1 );

//        "II","CN","Marconi SB-4a","250 m",180,"50 kg","Vickers Mk. E Type B"
        $radio2 = new Radio( 'Marconi SB-4a', $tier2, $nationality, 180, 50, 250 );
        $radio2->addTank( $tankRepo->getTankByName( 'Vickers Mk. E Type B' ));
        $manager->persist( $radio2 );

//        "II","CN","Type 94 Hei","250 m",180,"90 kg","Type 2597 Chi-Ha"
        $radio3 = new Radio( 'Type 94 Hei', $tier2, $nationality, 180, 90, 250 );
        $radio3->addTank( $tankRepo->getTankByName( 'Type 2597 Chi-Ha' ));
        $manager->persist( $radio3 );

//        "III","CN","ER-52","300 m",600,"100 kg","Renault NC-31"
        $radio4 = new Radio( 'ER-52', $tier3, $nationality, 600, 100, 300 );
        $radio4->addTank( $tankRepo->getTankByName( 'Renault NC-31' ));
        $manager->persist( $radio4 );

//        "III","CN","71-TK-3","300 m",570,"50 kg","Vickers Mk. E Type B"
        $radio5 = new Radio( '71-TK-3', $tier3, $nationality, 570, 50, 300 );
        $radio5->addTank( $tankRepo->getTankByName( 'Vickers Mk. E Type B' ));
        $manager->persist( $radio5 );

//        "IV","CN","9R","325 m",1980,"80 kg","Type T-34, Type 58, IS-2"
        $radio6 = new Radio( '9R', $tier4, $nationality, 1980, 80, 325 );
        $radio6->addTank( $tankRepo->getTankByName( 'Type T-34' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Type 58' ));
        $radio6->addTank( $tankRepo->getTankByName( 'IS-2' ));
        $manager->persist( $radio6 );

//        "VI","CN","Type 96 Bo","400 m",14000,"50 kg","Type 2597 Chi-Ha"
        $radio7 = new Radio( 'Type 96 Bo', $tier4, $nationality, 14000, 50, 400 );
        $radio7->addTank( $tankRepo->getTankByName( 'Type 2597 Chi-Ha' ));
        $manager->persist( $radio7 );

//        "VI","CN","SCR 508","395 m",21600,"91 kg","M5A1 Stuart"
        $radio8 = new Radio( 'SCR 508', $tier4, $nationality, 21600, 91, 395 );
        $radio8->addTank( $tankRepo->getTankByName( 'M5A1 Stuart' ));
        $manager->persist( $radio8 );

//        "VIII","CN","9RM","525 m",24240,"100 kg","Type T-34, 59-16, Type 58, IS-2"
        $radio9 = new Radio( '9RM', $tier8, $nationality, 24240, 100, 525 );
        $radio9->addTank( $tankRepo->getTankByName( 'Type T-34' ));
        $radio9->addTank( $tankRepo->getTankByName( '59-16' ));
        $radio9->addTank( $tankRepo->getTankByName( 'Type 58' ));
        $radio9->addTank( $tankRepo->getTankByName( 'IS-2' ));
        $manager->persist( $radio9 );

//        "VIII","CN","SCR 506","615 m",33600,"97 kg","M5A1 Stuart"
        $radio10 = new Radio( 'SCR 506', $tier8, $nationality, 33600, 97, 615 );
        $radio10->addTank( $tankRepo->getTankByName( 'M5A1 Stuart' ));
        $manager->persist( $radio10 );

//        "VIII","CN","Type 3 Otsu","700 m",22000,"240 kg","Type 2597 Chi-Ha"
        $radio11 = new Radio( 'Type 3 Otsu', $tier8, $nationality, 22000, 240, 700 );
        $radio11->addTank( $tankRepo->getTankByName( 'Type 2597 Chi-Ha' ));
        $manager->persist( $radio11 );

//        "VIII","CN","A-220","600 m",0,"100 kg","Type 62"
        $radio12 = new Radio( 'A-220', $tier8, $nationality, 0, 100, 600 );
        $radio12->addTank( $tankRepo->getTankByName( 'Type 62' ));
        $manager->persist( $radio12 );

//        "VIII","CN","9RM","600 m",0,"100 kg","Type 59, Type 59 G, WZ-111"
        $radio13 = new Radio( '9RM', $tier8, $nationality, 0, 100, 600 );
        $radio13->addTank( $tankRepo->getTankByName( 'Type 59' ));
        $radio13->addTank( $tankRepo->getTankByName( 'Type 59 G' ));
        $radio13->addTank( $tankRepo->getTankByName( 'WZ-111' ));
        $manager->persist( $radio13 );

//        "IX","CN","A-220","600 m",38000,"40 kg","59-16, T-34-1, T-34-2, 
//         WZ-120, 110, WZ-111 model 1-4, WZ-131, WZ-132"
        $radio14 = new Radio( 'A-220', $tier9, $nationality, 38000, 40, 600 );
        $radio14->addTank( $tankRepo->getTankByName( '59-16' ));
        $radio14->addTank( $tankRepo->getTankByName( 'T-34-1' ));
        $radio14->addTank( $tankRepo->getTankByName( 'T-34-2' ));
        $radio14->addTank( $tankRepo->getTankByName( 'WZ-120' ));
        $radio14->addTank( $tankRepo->getTankByName( '110' ));
        $radio14->addTank( $tankRepo->getTankByName( 'WZ-111 model 1-4' ));
        $radio14->addTank( $tankRepo->getTankByName( 'WZ-131' ));
        $radio14->addTank( $tankRepo->getTankByName( 'WZ-132' ));
        $manager->persist( $radio14 );

//        "X","CN","A-220A","750 m",54000,"40 kg","59-16, T-34-1, T-34-2, 
//         WZ-120, IS-2, 110, WZ-111 model 1-4, WZ-131, WZ-132"
        $radio15 = new Radio( 'A-220A', $tier10, $nationality, 54000, 40, 750 );
        $radio14->addTank( $tankRepo->getTankByName( '59-16' ));
        $radio14->addTank( $tankRepo->getTankByName( 'T-34-1' ));
        $radio14->addTank( $tankRepo->getTankByName( 'T-34-2' ));
        $radio14->addTank( $tankRepo->getTankByName( 'WZ-120' ));
        $radio15->addTank( $tankRepo->getTankByName( 'IS-2' ));
        $radio14->addTank( $tankRepo->getTankByName( '110' ));
        $radio14->addTank( $tankRepo->getTankByName( 'WZ-111 model 1-4' ));
        $radio14->addTank( $tankRepo->getTankByName( 'WZ-131' ));
        $radio14->addTank( $tankRepo->getTankByName( 'WZ-132' ));
        $manager->persist( $radio15 );

//        "X","CN","A-220B","750 m",54000,"40 kg","121, 113"
        $radio16 = new Radio( 'A-220B', $tier10, $nationality, 54000, 40, 750 );
        $radio16->addTank( $tankRepo->getTankByName( '121' ));
        $radio16->addTank( $tankRepo->getTankByName( '113' ));
        $manager->persist( $radio16 );

        $manager->flush();
    }
}