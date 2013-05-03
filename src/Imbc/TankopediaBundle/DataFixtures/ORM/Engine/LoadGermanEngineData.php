<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM\Engine;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Engine;

class LoadGermanEngineData extends AbstractFixture implements
		OrderedFixtureInterface {

	public function getOrder() {
		return 20;
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
		$nationality = $this->getReference('de');

		// Name, Tier, Nationality, Price, Weight, Power, Chance of Fire, Fuel Type, Compatibility
		$engine1 = new Engine('Hotchkiss', $tier1, $nationality, 0, 200, 75,
				20, $gazoline);
		$engine1->addTank($tankRepo->getTankByName('PzKpfw 38H735 (f)'));
		$manager->persist($engine1);

		$engine2 = new Engine('Krupp M301', $tier1, $nationality, 0, 200, 51,
				20, $gazoline);
		$engine2->addTank($tankRepo->getTankByName('Leichttraktor'));
		$manager->persist($engine2);

		$engine3 = new Engine('Krupp M305', $tier1, $nationality, 290, 220, 65,
				20, $gazoline);
		$engine3->addTank($tankRepo->getTankByName('Sturmpanzer I Bison'));
		$manager->persist($engine3);

		$engine4 = new Engine('Krupp M311', $tier2, $nationality, 400, 300, 85,
				20, $gazoline);
		$engine4->addTank($tankRepo->getTankByName('Leichttraktor'));
		$engine4->addTank($tankRepo->getTankByName('Panzerjäger I'));
		$engine4->addTank($tankRepo->getTankByName('Sturmpanzer I Bison'));
		$manager->persist($engine4);

		$engine5 = new Engine('Maybach HL 57 TR', $tier2, $nationality, 1120,
				540, 130, 20, $gazoline);
		$engine5->addTank($tankRepo->getTankByName('PzKpfw II'));
		$engine5->addTank($tankRepo->getTankByName('Marder II'));
		$engine5->addTank($tankRepo->getTankByName('Wespe'));
		$engine5->addTank($tankRepo->getTankByName('Sturmpanzer II'));
		$manager->persist($engine5);

		$engine6 = new Engine('Maybach HL 38 TR', $tier2, $nationality, 700,
				500, 100, 20, $gazoline);
		$engine6->addTank($tankRepo->getTankByName('Leichttraktor'));
		$engine6->addTank($tankRepo->getTankByName('Panzerjäger I'));
		$engine6->addTank($tankRepo->getTankByName('Sturmpanzer I Bison'));
		$manager->persist($engine6);

		$engine7 = new Engine('Praga TNPS', $tier2, $nationality, 1150, 350,
				120, 20, $gazoline);
		$engine7->addTank($tankRepo->getTankByName('PzKpfw 38 (t)'));
		$engine7->addTank($tankRepo->getTankByName('Hetzer'));
		$manager->persist($engine7);

		$engine8 = new Engine('Praga TN 100', $tier2, $nationality, 800, 340,
				100, 20, $gazoline);
		$engine8->addTank($tankRepo->getTankByName('Hetzer'));
		$engine8->addTank($tankRepo->getTankByName('Grille'));
		$manager->persist($engine8);

		$engine9 = new Engine('Skoda T-11', $tier2, $nationality, 840, 320,
				120, 20, $gazoline);
		$engine9->addTank($tankRepo->getTankByName('PzKpfw 35 (t)'));
		$manager->persist($engine9);

		$engine10 = new Engine('Maybach HL 62 TR', $tier3, $nationality, 4220,
				550, 140, 20, $gazoline);
		$engine10->addTank($tankRepo->getTankByName('PzKpfw II'));
		$engine10->addTank($tankRepo->getTankByName('PzKpfw II Luchs'));
		$engine10->addTank($tankRepo->getTankByName('Marder II'));
		$engine10->addTank($tankRepo->getTankByName('Wespe'));
		$engine10->addTank($tankRepo->getTankByName('Sturmpanzer II'));
		$manager->persist($engine10);

		$engine11 = new Engine('Maybach HL 62 TRM', $tier3, $nationality, 5000,
				550, 160, 20, $gazoline);
		$engine11->addTank($tankRepo->getTankByName('PzKpfw II'));
		$engine11->addTank($tankRepo->getTankByName('Marder II'));
		$engine11->addTank($tankRepo->getTankByName('Wespe'));
		$engine11->addTank($tankRepo->getTankByName('Sturmpanzer II'));
		$manager->persist($engine11);

		$engine12 = new Engine('Praga EPA/2', $tier3, $nationality, 4220, 470,
				140, 20, $gazoline);
		$engine12->addTank($tankRepo->getTankByName('PzKpfw 38 (t)'));
		$engine12->addTank($tankRepo->getTankByName('Grille'));
		$manager->persist($engine12);

		$engin13 = new Engine('Scania Vabis 1664', $tier3, $nationality, 4980,
				400, 165, 15, $diesel);
		$engin13->addTank($tankRepo->getTankByName('Hetzer'));
		$manager->persist($engin13);

		$engine14 = new Engine('Skoda T-15', $tier3, $nationality, 9110, 420,
				220, 20, $gazoline);
		$engine14->addTank($tankRepo->getTankByName('PzKpfw 35 (t)'));
		$manager->persist($engine14);

		$engine15 = new Engine('Maybach HL 45 P', $tier4, $nationality, 0, 500,
				160, 20, $gazoline);
		$engine15->addTank($tankRepo->getTankByName('PzKpfw II Ausf. J'));
		$manager->persist($engine15);

		$engine16 = new Engine('Maybach HL 66 P', $tier4, $nationality, 8650,
				550, 200, 20, $gazoline);
		$engine16->addTank($tankRepo->getTankByName('PzKpfw II Luchs'));
		$manager->persist($engine16);

		$engine17 = new Engine('Maybach HL 108 TR', $tier4, $nationality, 9460,
				450, 320, 20, $gazoline);
		$engine17->addTank($tankRepo->getTankByName('PzKpfw III Ausf. A'));
		$engine17->addTank($tankRepo->getTankByName('PzKpfw III'));
		$engine17->addTank($tankRepo->getTankByName('PzKpfw IV'));
		$engine17->addTank($tankRepo->getTankByName('StuG III'));
		$engine17->addTank($tankRepo->getTankByName('JagdPz IV'));
		$manager->persist($engine17);

		$engine18 = new Engine('Maybach HL 120 TR', $tier4, $nationality,
				10430, 510, 350, 20, $gazoline);
		$engine18->addTank($tankRepo->getTankByName('PzKpfw III Ausf. A'));
		$engine18->addTank($tankRepo->getTankByName('PzKpfw III'));
		$engine18->addTank($tankRepo->getTankByName('VK 1602 Leopard'));
		$engine18->addTank($tankRepo->getTankByName('PzKpfw III/IV'));
		$engine18->addTank($tankRepo->getTankByName('PzKpfw IV'));
		$engine18->addTank($tankRepo->getTankByName('StuG III'));
		$engine18->addTank($tankRepo->getTankByName('Hummel'));
		$engine18->addTank($tankRepo->getTankByName('JagdPz IV'));
		$manager->persist($engine18);

		$engine19 = new Engine('Maybach HL 120 TRM', $tier4, $nationality,
				19900, 510, 440, 20, $gazoline);
		$engine19->addTank($tankRepo->getTankByName('PzKpfw III Ausf. A'));
		$engine19->addTank($tankRepo->getTankByName('PzKpfw III'));
		$engine19->addTank($tankRepo->getTankByName('VK 1602 Leopard'));
		$engine19->addTank($tankRepo->getTankByName('PzKpfw III/IV'));
		$engine19->addTank($tankRepo->getTankByName('PzKpfw IV'));
		$engine19->addTank($tankRepo->getTankByName('StuG III'));
		$engine19->addTank($tankRepo->getTankByName('Hummel'));
		$engine19->addTank($tankRepo->getTankByName('JagdPz IV'));
		$manager->persist($engine19);

		$engine20 = new Engine('Maybach HL 120 TRM', $tier4, $nationality, 0,
				510, 440, 20, $gazoline);
		$engine20->addTank($tankRepo->getTankByName('PzKpfw IV Hydraulic'));
		$manager->persist($engine20);

		$engine21 = new Engine('Maybach HL 120 TRM V12', $tier4, $nationality,
				0, 510, 300, 20, $gazoline);
		$engine21->addTank($tankRepo->getTankByName('PzKpfw IV Schmalturm'));
		$manager->persist($engine21);

		$engine22 = new Engine('Maybach HL 120 TRM 112', $tier4, $nationality,
				0, 510, 272, 20, $gazoline);
		$engine22->addTank($tankRepo->getTankByName('Dicker Max'));
		$manager->persist($engine22);

		$engine23 = new Engine('Praga C9', $tier4, $nationality, 0, 510, 450,
				20, $gazoline);
		$engine23->addTank($tankRepo->getTankByName('T-25'));
		$manager->persist($engine23);

		$engine24 = new Engine('Praga EPA/3', $tier4, $nationality, 10810, 470,
				200, 20, $gazoline);
		$engine24->addTank($tankRepo->getTankByName('PzKpfw 38 (t)'));
		$engine24->addTank($tankRepo->getTankByName('PzKpfw 38 nA'));
		$engine24->addTank($tankRepo->getTankByName('Grille'));
		$manager->persist($engine24);

		$engine25 = new Engine('Praga NR', $tier4, $nationality, 12300, 470,
				274, 20, $gazoline);
		$engine25->addTank($tankRepo->getTankByName('PzKpfw 38 nA'));
		$manager->persist($engine25);

		$engine26 = new Engine('Praga NRi', $tier4, $nationality, 0, 470, 274,
				20, $gazoline);
		$engine26->addTank($tankRepo->getTankByName('T-15'));
		$manager->persist($engine26);

		$engine27 = new Engine('Somua S-40', $tier4, $nationality, 0, 400, 220,
				20, $gazoline);
		$engine27->addTank($tankRepo->getTankByName('PzKpfw S35 739 (f)'));
		$manager->persist($engine27);

		$engine28 = new Engine('Tatra Typ 103', $tier4, $nationality, 9120,
				500, 220, 15, $diesel);
		$engine28->addTank($tankRepo->getTankByName('Hetzer'));
		$manager->persist($engine28);

		$engine29 = new Engine('Maybach HL 90', $tier5, $nationality, 16400,
				550, 360, 20, $gazoline);
		$engine29->addTank($tankRepo->getTankByName('PzKpfw II Luchs'));
		$manager->persist($engine29);

		$engine30 = new Engine('Maybach HL 157 P', $tier5, $nationality, 20000,
				580, 585, 20, $gazoline);
		$engine30->addTank($tankRepo->getTankByName('VK 1602 Leopard'));
		$engine30->addTank($tankRepo->getTankByName('PzKpfw III/IV'));
		$engine30->addTank($tankRepo->getTankByName('Hummel'));
		$engine30->addTank($tankRepo->getTankByName('VK 2801'));
		$engine30->addTank($tankRepo->getTankByName('VK 3001 (H)'));
		$manager->persist($engine30);

		$engine31 = new Engine('Maybach HL 87', $tier5, $nationality, 13200,
				370, 330, 20, $gazoline);
		$engine31->addTank($tankRepo->getTankByName('GW Panther'));
		$manager->persist($engine31);

		$engine32 = new Engine('Maybach HL 110 P 30', $tier5, $nationality,
				17400, 370, 380, 20, $gazoline);
		$engine32->addTank($tankRepo->getTankByName('GW Panther'));
		$manager->persist($engine32);

		$engine33 = new Engine('Renault', $tier5, $nationality, 0, 400, 340,
				20, $gazoline);
		$engine33->addTank($tankRepo->getTankByName('PzKpfw B2 740 (f)'));
		$manager->persist($engine33);

		$engine34 = new Engine('Maybach HL 174', $tier6, $nationality, 26250,
				670, 610, 20, $gazoline);
		$engine34->addTank($tankRepo->getTankByName('VK 2801'));
		$engine34->addTank($tankRepo->getTankByName('VK 3001 (H)'));
		$engine34->addTank($tankRepo->getTankByName('VK 3601 (H)'));
		$engine34->addTank($tankRepo->getTankByName('Jagdpanther'));
		$engine34->addTank($tankRepo->getTankByName('PzKpfw V Panther'));
		$engine34->addTank($tankRepo->getTankByName('PzKpfw VI Tiger'));
		$engine34->addTank($tankRepo->getTankByName('GW Tiger'));
		$engine34->addTank($tankRepo->getTankByName('Panther II'));
		$engine34->addTank($tankRepo->getTankByName('Jagdpanther II'));
		$engine34->addTank($tankRepo->getTankByName('GW Typ E'));
		$manager->persist($engine34);

		$engine35 = new Engine('Maybach HL 130 P 50', $tier6, $nationality,
				26500, 370, 460, 20, $gazoline);
		$engine35->addTank($tankRepo->getTankByName('GW Panther'));
		$manager->persist($engine35);

		$engine36 = new Engine('2x Porsche Typ 100', $tier6, $nationality,
				24850, 670, 420, 20, $gazoline);
		$engine36->addTank($tankRepo->getTankByName('VK 3001 (P)'));
		$manager->persist($engine36);

		$engine37 = new Engine('2x Porsche Typ 100/1', $tier6, $nationality,
				29900, 670, 600, 20, $gazoline);
		$engine37->addTank($tankRepo->getTankByName('VK 3001 (P)'));
		$engine37->addTank($tankRepo->getTankByName('PzKpfw VI Tiger (P)'));
		$engine37->addTank($tankRepo->getTankByName('VK 4502 (P) Ausf. A'));
		$engine37->addTank($tankRepo->getTankByName('Ferdinand'));
		$engine37->addTank($tankRepo->getTankByName('VK 4502 (P) Ausf. B'));
		$manager->persist($engine37);

		$engine38 = new Engine('2x Porsche Typ 100/1 Ausf. A', $tier6,
				$nationality, 27500, 670, 550, 20, $gazoline);
		$engine38->addTank($tankRepo->getTankByName('PzKpfw VI Tiger (P)'));
		$manager->persist($engine38);

		$engine39 = new Engine('Maybach HL 210 P 30', $tier7, $nationality,
				36000, 720, 650, 20, $gazoline);
		$engine39->addTank($tankRepo->getTankByName('VK 2801'));
		$engine39->addTank($tankRepo->getTankByName('VK 3001 (H)'));
		$engine39->addTank($tankRepo->getTankByName('VK 3601 (H)'));
		$engine39->addTank($tankRepo->getTankByName('Jagdpanther'));
		$engine39->addTank($tankRepo->getTankByName('VK 3002 (DB)'));
		$engine39->addTank($tankRepo->getTankByName('PzKpfw V Panther'));
		$engine39->addTank($tankRepo->getTankByName('PzKpfw VI Tiger'));
		$engine39->addTank($tankRepo->getTankByName('GW Tiger'));
		$engine39->addTank($tankRepo->getTankByName('Panther II'));
		$engine39->addTank($tankRepo->getTankByName('PzKpfw VIB Tiger II'));
		$engine39->addTank($tankRepo->getTankByName('Jagdpanther II'));
		$engine39->addTank($tankRepo->getTankByName('GW Typ E'));
		$engine39->addTank($tankRepo->getTankByName('Jagdtiger'));
		$engine39->addTank($tankRepo->getTankByName('E-75'));
		$manager->persist($engine39);

		$engine40 = new Engine('Maybach HL 210 P 30', $tier7, $nationality, 0,
				750, 870, 20, $gazoline);
		$engine40->addTank($tankRepo->getTankByName('PzKpfw V-IV Alpha'));
		$engine40->addTank($tankRepo->getTankByName('PzKpfw V-IV'));
		$manager->persist($engine40);

		$engine41 = new Engine('Maybach HL 230 P 30', $tier7, $nationality, 0,
				1200, 700, 20, $gazoline);
		$engine41->addTank($tankRepo->getTankByName('8.8 cm PaK 43 Jagdtiger'));
		$manager->persist($engine41);

		$engine42 = new Engine('2x Porsche Typ 100/3', $tier7, $nationality,
				39850, 720, 670, 20, $gazoline);
		$engine42->addTank($tankRepo->getTankByName('VK 3001 (P)'));
		$engine42->addTank($tankRepo->getTankByName('PzKpfw VI Tiger (P)'));
		$engine42->addTank($tankRepo->getTankByName('VK 4502 (P) Ausf. A'));
		$engine42->addTank($tankRepo->getTankByName('Ferdinand'));
		$engine42->addTank($tankRepo->getTankByName('VK 4502 (P) Ausf. B'));
		$manager->persist($engine42);

		$engine43 = new Engine('Daimler-Benz DB-603A2', $tier8, $nationality,
				54520, 900, 750, 15, $diesel);
		$engine43->addTank($tankRepo->getTankByName('VK 3002 (DB)'));
		$manager->persist($engine43);

		$engine44 = new Engine('Maybach HL 230 P 30', $tier8, $nationality,
				55000, 1400, 700, 20, $gazoline);
		$engine44->addTank($tankRepo->getTankByName('Panther-M10'));
		$manager->persist($engine44);

		$engine45 = new Engine('Maybach HL 230 P 45', $tier8, $nationality,
				55000, 750, 750, 20, $gazoline);
		$engine45->addTank($tankRepo->getTankByName('VK 3601 (H)'));
		$engine45->addTank($tankRepo->getTankByName('Jagdpanther'));
		$engine45->addTank($tankRepo->getTankByName('PzKpfw V Panther'));
		$engine45->addTank($tankRepo->getTankByName('PzKpfw VI Tiger'));
		$engine45->addTank($tankRepo->getTankByName('GW Tiger'));
		$engine45->addTank($tankRepo->getTankByName('Panther II'));
		$engine45->addTank($tankRepo->getTankByName('PzKpfw VIB Tiger II'));
		$engine45->addTank($tankRepo->getTankByName('Jagdpanther II'));
		$engine45->addTank($tankRepo->getTankByName('GW Typ E'));
		$engine45->addTank($tankRepo->getTankByName('E-50'));
		$engine45->addTank($tankRepo->getTankByName('Jagdtiger'));
		$engine45->addTank($tankRepo->getTankByName('E-75'));
		$manager->persist($engine45);

		$engine46 = new Engine('Maybach HL 234 P 30 Ausf. A', $tier8,
				$nationality, 0, 750, 800, 20, $gazoline);
		$engine46->addTank($tankRepo->getTankByName('Löwe'));
		$manager->persist($engine46);

		$engine47 = new Engine('Porsche Deutz Typ 180/2', $tier8, $nationality,
				45300, 720, 840, 15, $diesel);
		$engine47->addTank($tankRepo->getTankByName('VK 4502 (P) Ausf. A'));
		$engine47->addTank($tankRepo->getTankByName('Ferdinand'));
		$engine47->addTank($tankRepo->getTankByName('VK 4502 (P) Ausf. B'));
		$manager->persist($engine47);

		$engine48 = new Engine('Maybach HL 234', $tier9, $nationality, 80000,
				750, 870, 20, $gazoline);
		$engine48->addTank($tankRepo->getTankByName('PzKpfw VI Tiger'));
		$engine48->addTank($tankRepo->getTankByName('Panther II'));
		$engine48->addTank($tankRepo->getTankByName('PzKpfw VIB Tiger II'));
		$engine48->addTank($tankRepo->getTankByName('Jagdpanther II'));
		$engine48->addTank($tankRepo->getTankByName('GW Typ E'));
		$engine48->addTank($tankRepo->getTankByName('E-50'));
		$engine48->addTank($tankRepo->getTankByName('Jagdtiger'));
		$engine48->addTank($tankRepo->getTankByName('E-75'));
		$manager->persist($engine48);

		$engine49 = new Engine('MB507', $tier10, $nationality, 132000, 750,
				1750, 12, $diesel);
		$engine49->addTank($tankRepo->getTankByName('Maus'));
		$manager->persist($engine49);

		$engine50 = new Engine('Maybach HL 295 Ausf. A', $tier10, $nationality,
				123000, 750, 1200, 15, $gazoline);
		$engine50->addTank($tankRepo->getTankByName('E-50'));
		$engine50->addTank($tankRepo->getTankByName('E-75'));
		$manager->persist($engine50);

		$engine51 = new Engine('Maybach HL 295 Ausf. B', $tier10, $nationality,
				135000, 750, 1200, 15, $gazoline);
		$engine51->addTank($tankRepo->getTankByName('E-100'));
		$engine51->addTank($tankRepo->getTankByName('JagdPz E-100'));
		$manager->persist($engine51);

		$engine52 = new Engine('Maybach HL 235', $tier10, $nationality, 123000,
				750, 1200, 12, $gazoline);
		$engine52->addTank($tankRepo->getTankByName('E-50 Ausf. M'));
		$manager->persist($engine52);

		$manager->flush();
	}
}
