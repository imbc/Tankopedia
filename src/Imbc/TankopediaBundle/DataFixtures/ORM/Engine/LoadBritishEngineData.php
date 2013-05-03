<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM\Engine;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Engine;

class LoadBritishEngineData extends AbstractFixture implements
		OrderedFixtureInterface {

	public function getOrder() {
		return 18;
	}

	public function load(ObjectManager $manager) {
		$tankRepo = $manager->getRepository('ImbcTankopediaBundle:Tank');
		$gazoline = \Imbc\TankopediaBundle\Entity\Engine::gazoline;
		$diesel = \Imbc\TankopediaBundle\Entity\Engine::diesel;
		//        ref for tier
		$tier1 = $this->getReference('tier-1');
		$tier2 = $this->getReference('tier-2');
		$tier3 = $this->getReference('tier-3');
		$tier4 = $this->getReference('tier-4');
		$tier5 = $this->getReference('tier-5');
		$tier6 = $this->getReference('tier-6');
		$tier7 = $this->getReference('tier-7');
		$tier8 = $this->getReference('tier-8');
		$tier9 = $this->getReference('tier-9');
		$tier10 = $this->getReference('tier-10');
		//         ref for nationality
		$nationality = $this->getReference('uk');

		// Name, Tier, Nationality, Price, Weight, Power, Chance of Fire, Fuel Type, Compatibility
		$engine1 = new Engine('Rolls-Royce Phantom', $tier1, $nationality, 300,
				340, 120, 20, $gazoline);
		$engine1->addTank($tankRepo->getTankByName('Cruiser Mk. I'));
		$engine1->addTank($tankRepo->getTankByName('Cruiser Mk. II'));
		$manager->persist($engine1);

		$engine2 = new Engine('Armstrong Siddeley V8', $tier1, $nationality, 0,
				200, 90, 20, $gazoline);
		$engine2->addTank($tankRepo->getTankByName('Vickers Medium Mk. I'));
		$engine2->addTank($tankRepo->getTankByName('Vickers Medium Mk. II'));
		$manager->persist($engine2);

		$engine3 = new Engine('Armstrong Siddeley V8 SC', $tier1, $nationality,
				350, 200, 110, 20, $gazoline);
		$engine3->addTank($tankRepo->getTankByName('Vickers Medium Mk. I'));
		$engine3->addTank($tankRepo->getTankByName('Vickers Medium Mk. II'));
		$manager->persist($engine3);

		$engine4 = new Engine('Ford V8-221', $tier1, $nationality, 0, 238, 85,
				20, $gazoline);
		$engine4->addTank($tankRepo->getTankByName('Universal Carrier 2-pdr'));
		$manager->persist($engine4);

		$engine5 = new Engine('Ford V8-239', $tier1, $nationality, 350, 258,
				100, 20, $gazoline);
		$engine5->addTank($tankRepo->getTankByName('Universal Carrier 2-pdr'));
		$manager->persist($engine5);

		$engine6 = new Engine('AEC A189', $tier2, $nationality, 2150, 800, 135,
				20, $gazoline);
		$engine6->addTank($tankRepo->getTankByName('Valentine'));
		$engine6->addTank($tankRepo->getTankByName('Valentine AT'));
		$manager->persist($engine6);

		$engine7 = new Engine('AEC Type 179', $tier2, $nationality, 1200, 360,
				150, 20, $gazoline);
		$engine7->addTank($tankRepo->getTankByName('Cruiser Mk. I'));
		$engine7->addTank($tankRepo->getTankByName('Cruiser Mk. II'));
		$manager->persist($engine7);

		$engine8 = new Engine('2x AEC', $tier3, $nationality, 4550, 331, 174,
				15, $diesel);
		$engine8->addTank($tankRepo->getTankByName('Matilda'));
		$manager->persist($engine8);

		$engine9 = new Engine('AEC A190', $tier3, $nationality, 2500, 800, 131,
				15, $diesel);
		$engine9->addTank($tankRepo->getTankByName('Valentine'));
		$engine9->addTank($tankRepo->getTankByName('Valentine AT'));
		$manager->persist($engine9);

		$engine10 = new Engine('2x Armstrong Siddeley', $tier3, $nationality,
				4550, 400, 180, 20, $gazoline);
		$engine10->addTank($tankRepo->getTankByName('Vickers Medium Mk. III'));
		$manager->persist($engine10);

		$engine11 = new Engine('2x Leyland E164', $tier3, $nationality, 4000,
				331, 190, 15, $diesel);
		$engine11->addTank($tankRepo->getTankByName('Matilda'));
		$manager->persist($engine11);

		$engine12 = new Engine('2x Leyland E165', $tier3, $nationality, 0, 331,
				190, 15, $diesel);
		$engine12->addTank($tankRepo->getTankByName('Matilda Black Prince'));
		$manager->persist($engine12);

		$engine13 = new Engine('Nuffield Liberty Mk. II', $tier3, $nationality,
				500, 383, 340, 20, $gazoline);
		$engine13->addTank($tankRepo->getTankByName('Cruiser Mk. III'));
		$engine13->addTank($tankRepo->getTankByName('Cruiser Mk. IV'));
		$engine13->addTank($tankRepo->getTankByName('AT 2'));
		$manager->persist($engine13);

		$engine14 = new Engine('Sunbeam Amazon', $tier3, $nationality, 3000,
				340, 160, 20, $gazoline);
		$engine14->addTank($tankRepo->getTankByName('Vickers Medium Mk. II'));
		$manager->persist($engine14);

		$engine15 = new Engine('Meadows H.O.P', $tier3, $nationality, 0, 362,
				162, 20, $gazoline);
		$engine15->addTank($tankRepo->getTankByName('Alecto'));
		$manager->persist($engine15);

		$engine16 = new Engine('Meadows H.O.P O.C.', $tier3, $nationality,
				4700, 362, 180, 20, $diesel);
		$engine16->addTank($tankRepo->getTankByName('Alecto'));
		$manager->persist($engine16);

		$engine17 = new Engine('GMC 6004 6-71S', $tier4, $nationality, 9000,
				991, 138, 15, $diesel);
		$engine17->addTank($tankRepo->getTankByName('Valentine'));
		$engine17->addTank($tankRepo->getTankByName('Valentine AT'));
		$manager->persist($engine17);

		$engine18 = new Engine('Meadows D.A.V.', $tier4, $nationality, 9000,
				724, 300, 20, $gazoline);
		$engine18->addTank($tankRepo->getTankByName('Covenanter'));
		$engine18->addTank($tankRepo->getTankByName('Churchill I'));
		$engine18->addTank($tankRepo->getTankByName('Churchill VII'));
		$engine18->addTank($tankRepo->getTankByName('Churchill Gun Carrier'));
		$manager->persist($engine18);

		$engine19 = new Engine('Meadows D.A.V. O.C.', $tier4, $nationality,
				11200, 724, 360, 40, $gazoline);
		$engine19->addTank($tankRepo->getTankByName('Covenanter'));
		$manager->persist($engine19);

		$engine20 = new Engine('Nuffield Liberty Mk. III', $tier4,
				$nationality, 11500, 383, 395, 20, $gazoline);
		$engine20->addTank($tankRepo->getTankByName('Cruiser Mk. III'));
		$engine20->addTank($tankRepo->getTankByName('Cruiser Mk. IV'));
		$engine20->addTank($tankRepo->getTankByName('Crusader'));
		$engine20->addTank($tankRepo->getTankByName('AT 2'));
		$manager->persist($engine20);

		$engine21 = new Engine('2x Rolls-Royce Phantom II', $tier4,
				$nationality, 10000, 680, 220, 20, $gazoline);
		$engine21->addTank($tankRepo->getTankByName('Vickers Medium Mk. III'));
		$manager->persist($engine21);

		$engine22 = new Engine('Bedford Twin-Six', $tier4, $nationality, 11000,
				1531, 350, 20, $gazoline);
		$engine22->addTank($tankRepo->getTankByName('Churchill I'));
		$engine22->addTank($tankRepo->getTankByName('Churchill VII'));
		$engine22->addTank($tankRepo->getTankByName('Black Prince'));
		$engine22->addTank($tankRepo->getTankByName('Churchill Gun Carrier'));
		$manager->persist($engine22);

		$engine23 = new Engine('GMC 6004 6-71A', $tier5, $nationality, 11000,
				991, 165, 15, $diesel);
		$engine23->addTank($tankRepo->getTankByName('Valentine'));
		$engine23->addTank($tankRepo->getTankByName('Valentine AT'));
		$manager->persist($engine23);

		$engin24 = new Engine('Nuffield Liberty Mk. V', $tier5, $nationality,
				11500, 383, 410, 20, $gazoline);
		$engin24->addTank($tankRepo->getTankByName('Crusader'));
		$engin24->addTank($tankRepo->getTankByName('Cromwell'));
		$manager->persist($engin24);

		$engine25 = new Engine('Rolls-Royce Meteor', $tier5, $nationality,
				14000, 744, 600, 20, $gazoline);
		$engine25->addTank($tankRepo->getTankByName('Cromwell'));
		$engine25->addTank($tankRepo->getTankByName('Comet'));
		$engine25->addTank($tankRepo->getTankByName('Black Prince'));
		$engine25->addTank($tankRepo->getTankByName('Centurion Mk. I'));
		$manager->persist($engine25);

		$engine26 = new Engine('Rolls-Royce Meteor Mk. IVB', $tier5,
				$nationality, 16000, 744, 650, 20, $gazoline);
		$engine26->addTank($tankRepo->getTankByName('Cromwell'));
		$engine26->addTank($tankRepo->getTankByName('Comet'));
		$engine26->addTank($tankRepo->getTankByName('Centurion Mk. I'));
		$engine26->addTank($tankRepo->getTankByName('Caernarvon'));
		$engine26->addTank($tankRepo->getTankByName('Centurion Mk. 7/1'));
		$engine26->addTank($tankRepo->getTankByName('Conqueror'));
		$manager->persist($engine26);

		$engine27 = new Engine('Paxman 12TP', $tier5, $nationality, 0, 3000,
				600, 15, $diesel);
		$engine27->addTank($tankRepo->getTankByName('TOG II*'));
		$manager->persist($engine27);

		$engine28 = new Engine('Rolls-Royce Meteor MK. IVB', $tier5,
				$nationality, 0, 744, 650, 20, $gazoline);
		$engine28->addTank($tankRepo->getTankByName('AT-15A'));
		$manager->persist($engine28);

		$engine29 = new Engine('Rolls-Royce Meteor M120', $tier9, $nationality,
				92000, 744, 810, 20, $gazoline);
		$engine29->addTank($tankRepo->getTankByName('Caernarvon'));
		$engine29->addTank($tankRepo->getTankByName('Conqueror'));
		$manager->persist($engine29);

		$engine30 = new Engine('Rolls-Royce Meteor Mk. IVC', $tier9,
				$nationality, 84000, 744, 750, 20, $gazoline);
		$engine30->addTank($tankRepo->getTankByName('Centurion Mk. I'));
		$engine30->addTank($tankRepo->getTankByName('Caernarvon'));
		$engine30->addTank($tankRepo->getTankByName('Centurion Mk. 7/1'));
		$engine30->addTank($tankRepo->getTankByName('Conqueror'));
		$manager->persist($engine30);

		$engine31 = new Engine('Rolls-Royce Griffon', $tier10, $nationality,
				100000, 952, 950, 20, $gazoline);
		$engine31->addTank($tankRepo->getTankByName('Centurion Mk. 7/1'));
		$engine31->addTank($tankRepo->getTankByName('Conqueror '));
		$engine31->addTank($tankRepo->getTankByName('FV215b'));
		$manager->persist($engine31);

		$engine32 = new Engine('Rolls-Royce Meteor M120A', $tier10,
				$nationality, 50000, 744, 810, 20, $gazoline);
		$engine32->addTank($tankRepo->getTankByName('FV4202'));
		$manager->persist($engine32);

		$manager->flush();
	}
}
