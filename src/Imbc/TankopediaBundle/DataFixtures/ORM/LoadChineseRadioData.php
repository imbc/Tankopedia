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
        $radio1 = new Radio();
        $radio1->setTier( $tier1 );
        $radio1->setNationality( $nationality );
        $radio1->setName( 'Signal Flags' );
        $radio1->setSignalRange( 90 );
        $radio1->setCost( 0 );
        $radio1->setWeight( 1 );
        $radio1->addTank( $tankRepo->getTankByName( 'Renault NC-31' ));
        $radio1->addTank( $tankRepo->getTankByName( 'Vickers Mk. E Type B' ));
        $manager->persist( $radio1 );

//        "II","CN","Marconi SB-4a","250 m",180,"50 kg","Vickers Mk. E Type B"
        $radio2 = new Radio();
        $radio2->setTier( $tier2 );
        $radio2->setNationality( $nationality );
        $radio2->setName( 'Marconi SB-4a' );
        $radio2->setSignalRange( 250 );
        $radio2->setCost( 180 );
        $radio2->setWeight( 50 );
        $radio2->addTank( $tankRepo->getTankByName( 'Vickers Mk. E Type B' ));
        $manager->persist( $radio2 );

//        "II","CN","Type 94 Hei","250 m",180,"90 kg","Type 2597 Chi-Ha"
        $radio3 = new Radio();
        $radio3->setTier( $tier2 );
        $radio3->setNationality( $nationality );
        $radio3->setName( 'Type 94 Hei' );
        $radio3->setSignalRange( 250 );
        $radio3->setCost( 180 );
        $radio3->setWeight( 90 );
        $radio3->addTank( $tankRepo->getTankByName( 'Type 2597 Chi-Ha' ));
        $manager->persist( $radio3 );

//        "III","CN","ER-52","300 m",600,"100 kg","Renault NC-31"
        $radio4 = new Radio();
        $radio4->setTier( $tier3 );
        $radio4->setNationality( $nationality );
        $radio4->setName( 'ER-52' );
        $radio4->setSignalRange( 300 );
        $radio4->setCost( 600 );
        $radio4->setWeight( 100 );
        $radio4->addTank( $tankRepo->getTankByName( 'Renault NC-31' ));
        $manager->persist( $radio4 );

//        "III","CN","71-TK-3","300 m",570,"50 kg","Vickers Mk. E Type B"
        $radio5 = new Radio();
        $radio5->setTier( $tier3 );
        $radio5->setNationality( $nationality );
        $radio5->setName( '71-TK-3' );
        $radio5->setSignalRange( 300 );
        $radio5->setCost( 570 );
        $radio5->setWeight( 50 );
        $radio5->addTank( $tankRepo->getTankByName( 'Vickers Mk. E Type B' ));
        $manager->persist( $radio5 );

//        "IV","CN","9R","325 m",1980,"80 kg","Type T-34, Type 58, IS-2"
        $radio6 = new Radio();
        $radio6->setTier( $tier4 );
        $radio6->setNationality( $nationality );
        $radio6->setName( '9R' );
        $radio6->setSignalRange( 325 );
        $radio6->setCost( 1980 );
        $radio6->setWeight( 80 );
        $radio6->addTank( $tankRepo->getTankByName( 'Type T-34' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Type 58' ));
        $radio6->addTank( $tankRepo->getTankByName( 'IS-2' ));
        $manager->persist( $radio6 );

//        "VI","CN","Type 96 Bo","400 m",14000,"50 kg","Type 2597 Chi-Ha"
        $radio7 = new Radio();
        $radio7->setTier( $tier4 );
        $radio7->setNationality( $nationality );
        $radio7->setName( 'Type 96 Bo' );
        $radio7->setSignalRange(400  );
        $radio7->setCost( 14000 );
        $radio7->setWeight( 50 );
        $radio7->addTank( $tankRepo->getTankByName( 'Type 2597 Chi-Ha' ));
        $manager->persist( $radio7 );

//        "VI","CN","SCR 508","395 m",21600,"91 kg","M5A1 Stuart"
        $radio8 = new Radio();
        $radio8->setTier( $tier4 );
        $radio8->setNationality( $nationality );
        $radio8->setName( 'SCR 508' );
        $radio8->setSignalRange( 395 );
        $radio8->setCost( 21600 );
        $radio8->setWeight( 91 );
        $radio8->addTank( $tankRepo->getTankByName( 'M5A1 Stuart' ));
        $manager->persist( $radio8 );

//        "VIII","CN","9RM","525 m",24240,"100 kg","Type T-34, 59-16, Type 58, IS-2"
        $radio9 = new Radio();
        $radio9->setTier( $tier8 );
        $radio9->setNationality( $nationality );
        $radio9->setName( '9RM' );
        $radio9->setSignalRange( 525 );
        $radio9->setCost( 24240 );
        $radio9->setWeight( 100 );
        $radio9->addTank( $tankRepo->getTankByName( 'Type T-34' ));
        $radio9->addTank( $tankRepo->getTankByName( '59-16' ));
        $radio9->addTank( $tankRepo->getTankByName( 'Type 58' ));
        $radio9->addTank( $tankRepo->getTankByName( 'IS-2' ));
        $manager->persist( $radio9 );

//        "VIII","CN","SCR 506","615 m",33600,"97 kg","M5A1 Stuart"
        $radio10 = new Radio();
        $radio10->setTier( $tier8 );
        $radio10->setNationality( $nationality );
        $radio10->setName( 'SCR 506' );
        $radio10->setSignalRange( 615 );
        $radio10->setCost( 33600 );
        $radio10->setWeight( 97 );
        $radio10->addTank( $tankRepo->getTankByName( 'M5A1 Stuart' ));
        $manager->persist( $radio10 );

//        "VIII","CN","Type 3 Otsu","700 m",22000,"240 kg","Type 2597 Chi-Ha"
        $radio11 = new Radio();
        $radio11->setTier( $tier8 );
        $radio11->setNationality( $nationality );
        $radio11->setName( 'Type 3 Otsu' );
        $radio11->setSignalRange( 700 );
        $radio11->setCost( 22000 );
        $radio11->setWeight( 240 );
        $radio11->addTank( $tankRepo->getTankByName( 'Type 2597 Chi-Ha' ));
        $manager->persist( $radio11 );

//        "VIII","CN","A-220","600 m",0,"100 kg","Type 62"
        $radio12 = new Radio();
        $radio12->setTier( $tier8 );
        $radio12->setNationality( $nationality );
        $radio12->setName( 'A-220' );
        $radio12->setSignalRange( 600 );
        $radio12->setCost( 0 );
        $radio12->setWeight( 100 );
        $radio12->addTank( $tankRepo->getTankByName( 'Type 62' ));
        $manager->persist( $radio12 );

//        "VIII","CN","9RM","600 m",0,"100 kg","Type 59, Type 59 G, WZ-111"
        $radio13 = new Radio();
        $radio13->setTier( $tier8 );
        $radio13->setNationality( $nationality );
        $radio13->setName( '9RM' );
        $radio13->setSignalRange( 600 );
        $radio13->setCost( 0 );
        $radio13->setWeight( 100 );
        $radio13->addTank( $tankRepo->getTankByName( 'Type 59' ));
        $radio13->addTank( $tankRepo->getTankByName( 'Type 59 G' ));
        $radio13->addTank( $tankRepo->getTankByName( 'WZ-111' ));
        $manager->persist( $radio13 );

//        "IX","CN","A-220","600 m",38000,"40 kg","59-16, T-34-1, T-34-2, 
//         WZ-120, 110, WZ-111 model 1-4, WZ-131, WZ-132"
        $radio14 = new Radio();
        $radio14->setTier( $tier9 );
        $radio14->setNationality( $nationality );
        $radio14->setName( 'A-220' );
        $radio14->setSignalRange( 600 );
        $radio14->setCost( 38000 );
        $radio14->setWeight( 40 );
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
        $radio15 = new Radio();
        $radio15->setTier( $tier10 );
        $radio15->setNationality( $nationality );
        $radio15->setName( 'A-220A' );
        $radio15->setSignalRange( 750 );
        $radio15->setCost( 54000 );
        $radio15->setWeight( 40 );
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
        $radio16 = new Radio();
        $radio16->setTier( $tier10 );
        $radio16->setNationality( $nationality );
        $radio16->setName( 'A-220B' );
        $radio16->setSignalRange( 750 );
        $radio16->setCost( 54000 );
        $radio16->setWeight( 40 );
        $radio16->addTank( $tankRepo->getTankByName( '121' ));
        $radio16->addTank( $tankRepo->getTankByName( '113' ));
        $manager->persist( $radio16 );

        $manager->flush();
    }
}