<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM\Radio;

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
        $radio1 = new Radio( 'Signal flags', $tier1, $nationality, 0, 1, 90 );
        $radio1->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. I' ));
        $manager->persist( $radio1 );

//        "II","UK","WS No. 14","250 m",180,"40 kg","Vickers Medium Mk. I, 
//        Cruiser Mk. I, Vickers Medium Mk. II, Vickers Medium Mk. III"
        $radio2 = new Radio( 'WS No. 14', $tier2, $nationality, 180, 40, 250 );
        $radio2->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. I' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Cruiser Mk. I' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. II' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. III' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Universal Carrier 2-pdr' ));
        $manager->persist( $radio2 );

//        "III","UK","WS No. 11","350 m",600,"40 kg","Cruiser Mk. I, 
//         Vickers Medium Mk. II, Cruiser Mk. III, Cruiser Mk. II, 
//         Vickers Medium Mk. III, Cruiser Mk. IV, Valentine, Matilda"
        $radio3 = new Radio( 'WS No. 11', $tier3, $nationality, 600, 40, 350 );
        $radio3->addTank( $tankRepo->getTankByName( 'Cruiser Mk. I' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. II' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Cruiser Mk. III' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Cruiser Mk. II' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Vickers Medium Mk. III' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Cruiser Mk. IV' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Valentine' ));
        $radio3->addTank( $tankRepo->getTankByName( 'Matilda' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Universal Carrier 2-pdr' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Valentine AT' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Alecto' ));
        $manager->persist( $radio3 );

//        "V","UK","WS No. 9","375 m",3600,"40 kg","Cruiser Mk. I, 
//         Vickers Medium Mk. II, Cruiser Mk. III, Cruiser Mk. II, 
//         Vickers Medium Mk. III, Cruiser Mk. IV, Covenanter, Valentine, 
//         Matilda, Crusader"
        $radio4 = new Radio( 'WS No. 9', $tier5, $nationality, 3600, 40, 375 );
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
        $radio2->addTank( $tankRepo->getTankByName( 'Universal Carrier 2-pdr' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Valentine AT' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Alecto' ));
        $manager->persist( $radio4 );

//        "VI","UK","WS No. 19 Mk. I","400 m",15000,"40 kg","Cruiser Mk. III, 
//         Cruiser Mk. II, Cruiser Mk. IV, Covenanter, Valentine, Matilda, 
//         Churchill I, Crusader, Cromwell, Churchill VII"
        $radio5 = new Radio( 'WS No. 19 Mk. I', $tier6, $nationality, 15000, 40, 400 );
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
        $radio2->addTank( $tankRepo->getTankByName( 'Valentine AT' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Alecto' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT 2' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Churchill Gun Carrier' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT 8' ));
        $manager->persist( $radio5 );

//        "VII","UK","WS No. 19 Mk. II","450 m",21000,"40 kg","Cruiser Mk. III, 
//         Cruiser Mk. II, Cruiser Mk. IV, Covenanter, Valentine, Matilda, 
//         Churchill I, Crusader, Cromwell, Churchill VII, Comet, Black Prince"
        $radio6 = new Radio( 'WS No. 19 Mk. II', $tier7, $nationality, 21000, 40, 450 );
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
        $radio2->addTank( $tankRepo->getTankByName( 'Valentine AT' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Alecto' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT 2' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Churchill Gun Carrier' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT 8' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT 7' ));
        $manager->persist( $radio6 );

//        "VIII","UK","WS No. 19 Mk. III","550 m",22000,"40 kg","Covenanter, 
//         Churchill I, Crusader, Cromwell, Churchill VII, Comet, Black Prince, 
//         Centurion Mk. I, Caernarvon, Centurion Mk. 7/1, Conqueror"
        $radio7 = new Radio( 'WS No. 19 Mk. III', $tier8, $nationality, 22000, 40, 550 );
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
        $radio2->addTank( $tankRepo->getTankByName( 'AT 2' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Churchill Gun Carrier' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT 8' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT 7' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT 15' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Tortoise' ));
        $manager->persist( $radio7 );

//        "VIII","UK","WS No. 22","700 m",25000,"40 kg","Comet, Black Prince, 
//         Centurion Mk. I, Caernarvon, Centurion Mk. 7/1, Conqueror"
        $radio8 = new Radio( 'WS No. 22', $tier8, $nationality, 25000, 40, 700 );
        $radio8->addTank( $tankRepo->getTankByName( 'Comet' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Black Prince' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Centurion Mk. I' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Caernarvon' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Centurion Mk. 7/1' ));
        $radio8->addTank( $tankRepo->getTankByName( 'Conqueror' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT 7' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT 15' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Tortoise' ));
        $manager->persist( $radio8 );

//        "IX","UK","WS No. 19 Special","570 m",0,"40 kg","Matilda Black Prince, 
//         TOG II*, AT-15A"
        $radio9 = new Radio( 'WS No. 19 Special', $tier9, $nationality, 0, 40, 570 );
        $radio9->addTank( $tankRepo->getTankByName( 'Matilda Black Prince' ));
        $radio9->addTank( $tankRepo->getTankByName( 'TOG II*' ));
        $radio9->addTank( $tankRepo->getTankByName( 'AT-15A' ));
        $manager->persist( $radio9 );

//        "X","UK","SR C42","750 m",54000,"40 kg","Centurion Mk. I, Caernarvon, 
//         Centurion Mk. 7/1, Conqueror"
        $radio10 = new Radio( 'SR C42', $tier10, $nationality, 54000, 40, 750 );
        $radio10->addTank( $tankRepo->getTankByName( 'Centurion Mk. I' ));
        $radio10->addTank( $tankRepo->getTankByName( 'Caernarvon' ));
        $radio10->addTank( $tankRepo->getTankByName( 'Centurion Mk. 7/1' ));
        $radio10->addTank( $tankRepo->getTankByName( 'Conqueror' ));
        $radio2->addTank( $tankRepo->getTankByName( 'AT 15' ));
        $radio2->addTank( $tankRepo->getTankByName( 'Tortoise' ));
        $manager->persist( $radio10 );

//        "X","UK","SR C45","750 m",45600,"40 kg","FV4202, FV215b"
        $radio11 = new Radio( 'SR C45', $tier10, $nationality, 45600, 40, 750 );
        $radio11->addTank( $tankRepo->getTankByName( 'FV4202' ));
        $radio11->addTank( $tankRepo->getTankByName( 'FV215b' ));
        $radio11->addTank( $tankRepo->getTankByName( 'FV215b (183)' ));
        $manager->persist( $radio11 );

        $manager->flush();
    }
}