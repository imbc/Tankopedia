<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Radio;

class LoadBritishRadioData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 12;
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
        $nationality = $this->getReference( 'uk' );

//        "Tier","Nation","Name","Signal Range","Price","Weight","Compatibility"
//        "I","UK","Signal flags","90 m",0,"1 kg","Vickers Medium Mk. I"
        $radio1 = new Radio();
        $radio1->setTier( $tier1 );
        $radio1->setNationality( $nationality );
        $radio1->setName( 'Signal flags' );
        $radio1->setSignalRange( 90 );
        $radio1->setCost( 0 );
        $radio1->setWeight( 1 );
        $radio1->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. I' ));
        $manager->persist( $radio1 );

//        "II","UK","WS No. 14","250 m",180,"40 kg","Vickers Medium Mk. I, 
//        Cruiser Mk. I, Vickers Medium Mk. II, Vickers Medium Mk. III"
        $radio2 = new Radio();
        $radio2->setTier( $tier2 );
        $radio2->setNationality( $nationality );
        $radio2->setName( 'WS No. 14' );
        $radio2->setSignalRange( 250 );
        $radio2->setCost( 180 );
        $radio2->setWeight( 40 );
        $radio2->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. I' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Cruiser Mk. I' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. II' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. III' ));
        $manager->persist( $radio2 );

//        "III","UK","WS No. 11","350 m",600,"40 kg","Cruiser Mk. I, 
//         Vickers Medium Mk. II, Cruiser Mk. III, Cruiser Mk. II, 
//         Vickers Medium Mk. III, Cruiser Mk. IV, Valentine, Matilda"
        $radio3 = new Radio();
        $radio3->setTier( $tier3 );
        $radio3->setNationality( $nationality );
        $radio3->setName( 'WS No. 11' );
        $radio3->setSignalRange( 350 );
        $radio3->setCost( 600 );
        $radio3->setWeight( 40 );
        $radio3->addTank( $tankRepo->getTankByName( 'Cruiser Mk. I' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. II' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Cruiser Mk. III' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Cruiser Mk. II' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. III' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Cruiser Mk. IV' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Valentine' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Matilda' ));
        $manager->persist( $radio3 );

//        "V","UK","WS No. 9","375 m",3600,"40 kg","Cruiser Mk. I, 
//         Vickers Medium Mk. II, Cruiser Mk. III, Cruiser Mk. II, 
//         Vickers Medium Mk. III, Cruiser Mk. IV, Covenanter, Valentine, 
//         Matilda, Crusader"
        $radio4 = new Radio();
        $radio4->setTier( $tier5 );
        $radio4->setNationality( $nationality );
        $radio4->setName( 'WS No. 9' );
        $radio4->setSignalRange( 375 );
        $radio4->setCost( 3600 );
        $radio4->setWeight( 40 );
        $radio4->addTank( $tankRepo->getTankByName( 'Cruiser Mk. I' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. II' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Cruiser Mk. III' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Cruiser Mk. II' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. III' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Cruiser Mk. IV' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Covenanter' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Valentine' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Matilda' ));
        $radio4->addTank( $tankRepo->getTankByName( 'Crusader' ));
        $manager->persist( $radio4 );

//        "VI","UK","WS No. 19 Mk. I","400 m",15000,"40 kg","Cruiser Mk. III, 
//         Cruiser Mk. II, Cruiser Mk. IV, Covenanter, Valentine, Matilda, 
//         Churchill I, Crusader, Cromwell, Churchill VII"
        $radio5 = new Radio();
        $radio5->setTier( $tier6 );
        $radio5->setNationality( $nationality );
        $radio5->setName( '"WS No. 19 Mk. I' );
        $radio5->setSignalRange( 400 );
        $radio5->setCost( 15000 );
        $radio5->setWeight( 40 );
        $radio5->addTank( $tankRepo->getTankByName( 'Cruiser Mk. III' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Cruiser Mk. II' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Cruiser Mk. IV' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Covenanter' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Valentine' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Matilda' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Churchill I' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Crusader' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Cromwell' ));
        $radio5->addTank( $tankRepo->getTankByName( 'Churchill VII' ));
        $manager->persist( $radio5 );

//        "VII","UK","WS No. 19 Mk. II","450 m",21000,"40 kg","Cruiser Mk. III, 
//         Cruiser Mk. II, Cruiser Mk. IV, Covenanter, Valentine, Matilda, 
//         Churchill I, Crusader, Cromwell, Churchill VII, Comet, Black Prince"
        $radio6 = new Radio();
        $radio6->setTier( $tier7 );
        $radio6->setNationality( $nationality );
        $radio6->setName( 'WS No. 19 Mk. II' );
        $radio6->setSignalRange( 450 );
        $radio6->setCost( 21000 );
        $radio6->setWeight( 40 );
        $radio6->addTank( $tankRepo->getTankByName( 'Cruiser Mk. III' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Cruiser Mk. II' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Cruiser Mk. IV' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Covenanter' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Valentine' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Matilda' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Churchill I' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Crusader' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Cromwell' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Churchill VII' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Comet' ));
        $radio6->addTank( $tankRepo->getTankByName( 'Black Prince' ));
        $manager->persist( $radio6 );

//        "VIII","UK","WS No. 19 Mk. III","550 m",22000,"40 kg","Covenanter, 
//         Churchill I, Crusader, Cromwell, Churchill VII, Comet, Black Prince, 
//         Centurion Mk. I, Caernarvon, Centurion Mk. 7/1, Conqueror"
        $radio7 = new Radio();
        $radio7->setTier( $tier8 );
        $radio7->setNationality( $nationality );
        $radio7->setName( 'WS No. 19 Mk. III' );
        $radio7->setSignalRange( 550 );
        $radio7->setCost( 22000 );
        $radio7->setWeight( 40 );
        $radio7->addTank( $tankRepo->getTankByName( 'Covenanter' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Churchill I' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Crusader' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Cromwell' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Churchill VII' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Comet' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Black Prince' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Centurion Mk. I' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Caernarvon' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Centurion Mk. 7/1' ));
        $radio7->addTank( $tankRepo->getTankByName( 'Conqueror' ));
        $manager->persist( $radio7 );

//        "VIII","UK","WS No. 22","700 m",25000,"40 kg","Comet, Black Prince, 
//         Centurion Mk. I, Caernarvon, Centurion Mk. 7/1, Conqueror"
        $radio8 = new Radio();
        $radio8->setTier( $tier8 );
        $radio8->setNationality( $nationality );
        $radio8->setName( 'WS No. 22' );
        $radio8->setSignalRange( 700 );
        $radio8->setCost( 25000 );
        $radio8->setWeight( 40 );
        $radio8->addTank( $tankRepo->getTankByName( 'Comet' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Black Prince' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Centurion Mk. I' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Caernarvon' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Centurion Mk. 7/1' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Conqueror' ));
        $manager->persist( $radio8 );

//        "IX","UK","WS No. 19 Special","570 m",0,"40 kg","Matilda Black Prince, 
//         TOG II*, AT-15A"
        $radio9 = new Radio();
        $radio9->setTier( $tier9 );
        $radio9->setNationality( $nationality );
        $radio9->setName( 'WS No. 19 Special' );
        $radio9->setSignalRange( 570 );
        $radio9->setCost( 0 );
        $radio9->setWeight( 40 );
        $radio9->addTank( $tankRepo->getTankByName( 'Matilda Black Prince' ));
        $radio9->addTank( $tankRepo->getTankByName( 'TOG II*' ));
        $radio9->addTank( $tankRepo->getTankByName( 'AT-15A' ));
        $manager->persist( $radio9 );

//        "X","UK","SR C42","750 m",54000,"40 kg","Centurion Mk. I, Caernarvon, 
//         Centurion Mk. 7/1, Conqueror"
        $radio10 = new Radio();
        $radio10->setTier( $tier10 );
        $radio10->setNationality( $nationality );
        $radio10->setName( 'SR C42' );
        $radio10->setSignalRange( 750 );
        $radio10->setCost( 54000 );
        $radio10->setWeight( 40 );
        $radio10->addTank( $tankRepo->getTankByName( 'Centurion Mk. I' ));
        $radio10->addTank( $tankRepo->getTankByName( 'Caernarvon' ));
        $radio10->addTank( $tankRepo->getTankByName( 'Centurion Mk. 7/1' ));
        $radio10->addTank( $tankRepo->getTankByName( 'Conqueror' ));
        $manager->persist( $radio10 );

//        "X","UK","SR C45","750 m",45600,"40 kg","FV4202, FV215b"
        $radio11 = new Radio();
        $radio11->setTier( $tier10 );
        $radio11->setNationality( $nationality );
        $radio11->setName( 'SR C45' );
        $radio11->setSignalRange( 750 );
        $radio11->setCost( 45600 );
        $radio11->setWeight( 40 );
        $radio11->addTank( $tankRepo->getTankByName( 'FV4202' ));
        $radio11->addTank( $tankRepo->getTankByName( 'FV215b' ));
        $manager->persist( $radio11 );

        $manager->flush();
    }
}