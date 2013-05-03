<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM\Engine;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Engine;

class LoadFrenchEngineData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 19;
    }

    public function load( ObjectManager $manager )
    {
        $tankRepo = $manager->getRepository( 'ImbcTankopediaBundle:Tank' );
        $gazoline = \Imbc\TankopediaBundle\Entity\Engine::gazoline;
        $diesel = \Imbc\TankopediaBundle\Entity\Engine::diesel;
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
        $nationality = $this->getReference( 'fr' );

        // Name, Tier, Nationality, Price, Weight, Power, Chance of Fire, Fuel Type, Compatibility
        $engine1 = new Engine( 'Berliet MDP', $tier1, $nationality,  0, 200, 91, 15, $diesel );
        $engine1->addTank( $tankRepo->getTankByName( 'FCM36 PaK40' ));
        $manager->persist( $engine1 );

        $engine2 = new Engine( 'Delahaye 103', $tier1, $nationality, 350, 266, 70, 20, $gazoline );
        $engine2->addTank( $tankRepo->getTankByName( 'Lorraine39 L AM' ));
        $manager->persist( $engine2 );

        $engine3 = new Engine( 'Delahaye 103TT', $tier1, $nationality, 370, 266, 75, 20, $gazoline );
        $engine3->addTank( $tankRepo->getTankByName( 'Lorraine39 L AM' ));
        $manager->persist( $engine3 );

        $engine4 = new Engine( 'Delahaye 135', $tier1, $nationality, 450, 266, 90, 20, $gazoline );
        $engine4->addTank( $tankRepo->getTankByName( 'Lorraine39 L AM' ));
        $manager->persist( $engine4 );

        $engine5 = new Engine( 'Franklin', $tier1, $nationality, 330, 266, 100, 20, $gazoline );
        $engine5->addTank( $tankRepo->getTankByName( 'RenaultFT' ));
        $engine5->addTank( $tankRepo->getTankByName( 'RenaultBS' ));
        $manager->persist( $engine5 );

        $engine6 = new Engine( 'Hotchkiss 35', $tier1, $nationality, 400, 266, 75, 20, $gazoline );
        $engine6->addTank( $tankRepo->getTankByName( 'Hotchkiss H35' ));
        $manager->persist( $engine6 );

        $engine7 = new Engine( 'Renault', $tier1, $nationality, 0, 266, 39, 20, $gazoline );
        $engine7->addTank( $tankRepo->getTankByName( 'RenaultFT' ));
        $engine7->addTank( $tankRepo->getTankByName( 'RenaultFT AC' ));
        $engine7->addTank( $tankRepo->getTankByName( 'RenaultBS' ));
        $manager->persist( $engine7 );

        $engine8 = new Engine( 'Renault 85', $tier1, $nationality, 1500, 300, 38, 15, $diesel );
        $engine8->addTank( $tankRepo->getTankByName( 'Renault UE 57' ));
        $manager->persist( $engine8 );

        $engine9 = new Engine( 'Renault M26/27', $tier1, $nationality, 300, 266, 45, 20, $gazoline );
        $engine9->addTank( $tankRepo->getTankByName( 'RenaultFT' ));
        $engine9->addTank( $tankRepo->getTankByName( 'RenaultFT AC' ));
        $engine9->addTank( $tankRepo->getTankByName( 'RenaultBS' ));
        $manager->persist( $engine9 );

        $engine10 = new Engine( 'Renault S4', $tier1, $nationality, 310, 266, 65, 20, $gazoline );
        $engine10->addTank( $tankRepo->getTankByName( 'D1' ));
        $manager->persist( $engine10 );

        $engine11 = new Engine( 'Renault S4F', $tier1, $nationality, 350, 266, 74, 20, $gazoline );
        $engine11->addTank( $tankRepo->getTankByName( 'D1' ));
        $manager->persist( $engine11 );

        $engine12 = new Engine( 'Aster', $tier2, $nationality, 750, 540, 150, 15, $diesel );
        $engine12->addTank( $tankRepo->getTankByName( 'AMX 38' ));
        $engine12->addTank( $tankRepo->getTankByName( 'AMX 40' ));
        $manager->persist( $engine12 );

        $engine13 = new Engine( 'Renault ACL', $tier2, $nationality, 5000, 400, 48, 20, $gazoline );
        $engine13->addTank( $tankRepo->getTankByName( 'Renault UE 57' ));
        $manager->persist( $engine13 );

        $engine14 = new Engine( 'Renault S6', $tier2, $nationality, 700, 540, 150, 20, $gazoline );
        $engine14->addTank( $tankRepo->getTankByName( 'D2' ));
        $manager->persist( $engine14 );

        $engine15 = new Engine( 'Renault V4', $tier2, $nationality, 480, 266, 82, 20, $gazoline );
        $engine15->addTank( $tankRepo->getTankByName( 'Hotchkiss H35' ));
        $manager->persist( $engine15 );

        $engine16 = new Engine( 'AMX B 270', $tier3, $nationality, 5100, 340, 200, 20, $gazoline );
        $engine16->addTank( $tankRepo->getTankByName( 'AMX 12t' ));
        $manager->persist( $engine16 );

        $engine17 = new Engine( 'Aster M', $tier3, $nationality, 4500, 600, 160, 15, $diesel );
        $engine17->addTank( $tankRepo->getTankByName( 'AMX 38' ));
        $manager->persist( $engine17 );

        $engine18 = new Engine( 'Renault S6Bis', $tier3, $nationality, 3500, 540, 180, 20, $gazoline );
        $engine18->addTank( $tankRepo->getTankByName( 'D2' ));
        $engine18->addTank( $tankRepo->getTankByName( 'B1' ));
        $manager->persist( $engine18 );

        $engine19 = new Engine( 'Somua LM', $tier3, $nationality, 4500, 540, 190, 20, $gazoline );
        $engine19->addTank( $tankRepo->getTankByName( 'AMX 40' ));
        $manager->persist( $engine19 );

        $engine20 = new Engine( 'Renault A', $tier4, $nationality,  0, 540, 307, 20, $gazoline );
        $engine20->addTank( $tankRepo->getTankByName( '105 leFH18B2' ));
        $manager->persist( $engine20 );

        $engine21 = new Engine( 'Renault BDR', $tier4, $nationality, 11120, 540, 350, 20, $gazoline );
        $engine21->addTank( $tankRepo->getTankByName( 'B1' ));
        $manager->persist( $engine21 );

        $engine22 = new Engine( 'Renault Naeder-FIEUX', $tier4, $nationality, 10000, 540, 307, 20, $gazoline );
        $engine22->addTank( $tankRepo->getTankByName( 'B1' ));
        $manager->persist( $engine22 );

        $engine23 = new Engine( 'Renault T12', $tier4, $nationality, 13000, 540, 350, 20, $gazoline );
        $engine23->addTank( $tankRepo->getTankByName( 'BDR G1B' ));
        $engine23->addTank( $tankRepo->getTankByName( 'ARL V39' ));
        $manager->persist( $engine23 );

        $engine24 = new Engine( 'Somua S-40', $tier4, $nationality, 10420, 400, 220, 20, $gazoline );
        $engine24->addTank( $tankRepo->getTankByName( 'Somua SAu-40' ));
        $engine24->addTank( $tankRepo->getTankByName( 'S-35 CA' ));
        $manager->persist( $engine24 );

        $engine25 = new Engine( 'Sovam de 150 cv', $tier4, $nationality, 700, 340, 150, 20, $gazoline );
        $engine25->addTank( $tankRepo->getTankByName( 'AMX 105AM' ));
        $engine25->addTank( $tankRepo->getTankByName( 'ELC AMX' ));
        $engine25->addTank( $tankRepo->getTankByName( 'AMX 13 F3 AM' ));
        $manager->persist( $engine25 );

        $engine26 = new Engine( 'MATHIS', $tier5, $nationality, 20000, 400, 250, 20, $gazoline );
        $engine26->addTank( $tankRepo->getTankByName( 'AMX 12t' ));
        $manager->persist( $engine26 );

        $engine27 = new Engine( 'Renault T14', $tier5, $nationality, 22300, 750, 450, 15, $gazoline );
        $engine27->addTank( $tankRepo->getTankByName( 'BDR G1B' ));
        $engine27->addTank( $tankRepo->getTankByName( 'ARL V39' ));
        $manager->persist( $engine27 );

        $engine28 = new Engine( 'SOFAM 8Gxb', $tier5, $nationality, 16000, 400, 250, 20, $gazoline );
        $engine28->addTank( $tankRepo->getTankByName( 'AMX 105AM' ));
        $engine28->addTank( $tankRepo->getTankByName( 'ELC AMX' ));
        $engine28->addTank( $tankRepo->getTankByName( 'AMX 13 F3 AM' ));
        $engine28->addTank( $tankRepo->getTankByName( 'AMX 13 75' ));
        $engine28->addTank( $tankRepo->getTankByName( 'AMX 13 90' ));
        $manager->persist( $engine28 );

        $engine29 = new Engine( 'Somua S-40 Bis', $tier5, $nationality, 16100, 400, 260, 20, $gazoline );
        $engine29->addTank( $tankRepo->getTankByName( 'Somua SAu-40' ));
        $engine29->addTank( $tankRepo->getTankByName( 'S-35 CA' ));
        $manager->persist( $engine29 );

        $engine30 = new Engine( 'Maybach HL 230', $tier6, $nationality, 26000, 700, 575, 20, $gazoline );
        $engine30->addTank( $tankRepo->getTankByName( 'ARL 44' ));
        $engine30->addTank( $tankRepo->getTankByName( 'Lorraine155 50' ));
        $engine30->addTank( $tankRepo->getTankByName( 'AMX AC Mle. 1946' ));
        $engine30->addTank( $tankRepo->getTankByName( 'AMX M4(1945)' ));
        $engine30->addTank( $tankRepo->getTankByName( 'Lorraine155 51' ));
        $engine30->addTank( $tankRepo->getTankByName( 'AMX 50 100' ));
        $engine30->addTank( $tankRepo->getTankByName( 'AMX AC Mle. 1948' ));
        $manager->persist( $engine30 );

        $engine31 = new Engine( '6F11SRY', $tier6, $nationality, 27000, 400, 280, 15, $diesel );
        $engine31->addTank( $tankRepo->getTankByName( 'AMX 13 75' ));
        $engine31->addTank( $tankRepo->getTankByName( 'AMX 13 90' ));
        $manager->persist( $engine31 );

        $engine32 = new Engine( 'Maybach V-12 ACC', $tier6, $nationality,  0, 750, 1000, 20, $gazoline );
        $engine32->addTank( $tankRepo->getTankByName( 'FCM 50 t' ));
        $manager->persist( $engine32 );

        $engine33 = new Engine( 'Detroit Diesel 6V53T', $tier7, $nationality, 37000, 770, 300, 15, $diesel );
        $engine33->addTank( $tankRepo->getTankByName( 'AMX 13 75' ));
        $engine33->addTank( $tankRepo->getTankByName( 'AMX 13 90' ));
        $manager->persist( $engine33 );

        $engine34 = new Engine( 'Detroit Diesel 6V53T-S', $tier7, $nationality, 39740, 770, 350, 12, $diesel );
        $engine34->addTank( $tankRepo->getTankByName( 'AMX 13 90' ));
        $manager->persist( $engine34 );

        $engine35 = new Engine( 'Maybach HL 230 P 45F', $tier8, $nationality, 55000, 750, 750, 20, $gazoline );
        $engine35->addTank( $tankRepo->getTankByName( 'ARL 44' ));
        $engine35->addTank( $tankRepo->getTankByName( 'Lorraine155 50' ));
        $engine35->addTank( $tankRepo->getTankByName( 'AMX AC Mle. 1946' ));
        $engine35->addTank( $tankRepo->getTankByName( 'AMX M4(1945)' ));
        $engine35->addTank( $tankRepo->getTankByName( 'Lorraine155 51' ));
        $engine35->addTank( $tankRepo->getTankByName( 'AMX 50 100' ));
        $engine35->addTank( $tankRepo->getTankByName( 'AMX AC Mle. 1948' ));
        $manager->persist( $engine35 );

        $engine36 = new Engine( 'Maybach HL 234P45', $tier9, $nationality, 98730, 750, 850, 20, $gazoline );
        $engine36->addTank( $tankRepo->getTankByName( 'Lorraine155 50' ));
        $engine36->addTank( $tankRepo->getTankByName( 'Lorraine155 51' ));
        $engine36->addTank( $tankRepo->getTankByName( 'Lorraine 40 t' ));
        $manager->persist( $engine36 );

        $engine37 = new Engine( 'Maybach HL 295', $tier9, $nationality, 78000, 750, 850, 20, $gazoline );
        $engine37->addTank( $tankRepo->getTankByName( 'AMX AC Mle. 1946' ));
        $engine37->addTank( $tankRepo->getTankByName( 'AMX M4(1945)' ));
        $engine37->addTank( $tankRepo->getTankByName( 'AMX 50 100' ));
        $engine37->addTank( $tankRepo->getTankByName( 'AMX AC Mle. 1948' ));
        $engine37->addTank( $tankRepo->getTankByName( 'AMX 50 120' ));
        $engine37->addTank( $tankRepo->getTankByName( 'AMX 50 Foch' ));
        $manager->persist( $engine37 );

        $engine38 = new Engine( 'SOFAM 12GSds', $tier9, $nationality, 86050, 2100, 680, 15, $diesel );
        $engine38->addTank( $tankRepo->getTankByName( 'Bat Chatillon 155' ));
        $manager->persist( $engine38 );

        $engine39 = new Engine( 'Saurer', $tier9, $nationality, 99800, 750, 1000, 20, $gazoline );
        $engine39->addTank( $tankRepo->getTankByName( 'AMX 50 120' ));
        $engine39->addTank( $tankRepo->getTankByName( 'AMX 50 Foch' ));
        $manager->persist( $engine39 );

        $engine40 = new Engine( 'Hispano-Suiza HS110', $tier10, $nationality, 94250, 2100, 720, 10, $diesel );
        $engine40->addTank( $tankRepo->getTankByName( 'Bat Chatillon 155' ));
        $engine40->addTank( $tankRepo->getTankByName( 'Bat Chatillon 25 t' ));
        $manager->persist( $engine40 );

        $engine41 = new Engine( 'Maybach HL 234P50', $tier10, $nationality, 125000, 750, 980, 15, $gazoline );
        $engine41->addTank( $tankRepo->getTankByName( 'Lorraine 40 t' ));
        $manager->persist( $engine41 );

        $engine42 = new Engine( 'Maybach HL 295 F', $tier10, $nationality, 123000, 750, 1200, 15, $gazoline );
        $engine42->addTank( $tankRepo->getTankByName( 'AMX 50B' ));
        $engine42->addTank( $tankRepo->getTankByName( 'AMX-50 Foch (155)' ));
        $manager->persist( $engine42 );

        $manager->flush();
    }
}