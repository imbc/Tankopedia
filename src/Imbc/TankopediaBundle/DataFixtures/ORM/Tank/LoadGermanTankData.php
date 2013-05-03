<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM\Tank;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Tank;

class LoadGermanTankData extends AbstractFixture implements
		OrderedFixtureInterface {
	public function getOrder() {
		return 8;
	}

	public function load(ObjectManager $manager) {
		// ref for tankclass
		$light = $this->getReference('light');
		$medium = $this->getReference('medium');
		$heavy = $this->getReference('heavy');
		$td = $this->getReference('td');
		$spg = $this->getReference('spg');
		//ref for tier
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
		// ref for nationality
		$nationality = $this->getReference('de');

		/**
		 * light tanks
		 */
		$lt1 = new Tank('Leichttraktor', $light, $tier1, $nationality, FALSE,
				FALSE);
		$manager->persist($lt1);

		$lt2 = new Tank('PzKpfw 35 (t)', $light, $tier2, $nationality, FALSE,
				FALSE);
		$manager->persist($lt2);

		$lt3 = new Tank('PzKpfw 38H735 (f)', $light, $tier2, $nationality,
				TRUE, TRUE);
		$manager->persist($lt3);

		$lt4 = new Tank('Pz.Kpfw. I', $light, $tier2, $nationality, FALSE,
				FALSE);
		$manager->persist($lt4);

		$lt5 = new Tank('PzKpfw II', $light, $tier3, $nationality, FALSE, FALSE);
		$manager->persist($lt5);

		$lt6 = new Tank('PzKpfw 38 (t)', $light, $tier3, $nationality, FALSE,
				FALSE);
		$manager->persist($lt6);

		$lt7 = new Tank('Panzer I Ausf. C', $light, $tier3, $nationality,
				FALSE, FALSE);
		$manager->persist($lt7);

		$lt8 = new Tank('Pz.Kpfw. II Ausf. G', $light, $tier3, $nationality,
				FALSE, FALSE);
		$manager->persist($lt8);

		$lt9 = new Tank('PzKpfw II Ausf. J', $light, $tier3, $nationality,
				TRUE, TRUE);
		$manager->persist($lt9);

		$lt10 = new Tank('PzKpfw II Luchs', $light, $tier4, $nationality,
				FALSE, FALSE);
		$manager->persist($lt10);

		$lt11 = new Tank('PzKpfw III Ausf. A', $light, $tier3, $nationality,
				FALSE, FALSE);
		$manager->persist($lt11);

		$lt12 = new Tank('T-15', $light, $tier3, $nationality, TRUE, FALSE);
		$manager->persist($lt12);

		$lt13 = new Tank('PzKpfw 38 nA', $light, $tier4, $nationality, FALSE,
				FALSE);
		$manager->persist($lt13);

		$lt14 = new Tank('VK 1602 Leopard', $light, $tier5, $nationality,
				FALSE, FALSE);
		$manager->persist($lt14);

		$lt15 = new Tank('VK 2801', $light, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($lt15);

		/**
		 * medium tanks
		 */
		$mt1 = new Tank('PzKpfw S35 739 (f)', $medium, $tier3, $nationality,
				TRUE, FALSE);
		$manager->persist($mt1);

		$mt2 = new Tank('PzKpfw III', $medium, $tier4, $nationality, FALSE,
				FALSE);
		$manager->persist($mt2);

		$mt3 = new Tank('PzKpfw III/IV', $medium, $tier3, $nationality, FALSE,
				FALSE);
		$manager->persist($mt3);

		$mt4 = new Tank('PzKpfw IV', $medium, $tier5, $nationality, FALSE,
				FALSE);
		$manager->persist($mt4);

		$mt5 = new Tank('PzKpfw IV Hydraulic', $medium, $tier5, $nationality,
				TRUE, TRUE);
		$manager->persist($mt5);

		$mt6 = new Tank('T-25', $medium, $tier5, $nationality, TRUE, FALSE);
		$manager->persist($mt6);

		$mt7 = new Tank('PzKpfw IV Schmalturm', $medium, $tier6, $nationality,
				TRUE, FALSE);
		$manager->persist($mt7);

		$mt8 = new Tank('PzKpfw V-IV', $medium, $tier6, $nationality, TRUE,
				TRUE);
		$manager->persist($mt8);

		$mt9 = new Tank('PzKpfw V-IV Alpha', $medium, $tier6, $nationality,
				TRUE, TRUE);
		$manager->persist($mt9);

		$mt10 = new Tank('VK 3001 (H)', $medium, $tier6, $nationality, FALSE,
				FALSE);
		$manager->persist($mt10);

		$mt11 = new Tank('VK 3001 (P)', $medium, $tier6, $nationality, FALSE,
				FALSE);
		$manager->persist($mt11);

		$mt12 = new Tank('VK 3601 (H)', $medium, $tier6, $nationality, FALSE,
				FALSE);
		$manager->persist($mt12);

		$mt13 = new Tank('Panther-M10', $medium, $tier7, $nationality, TRUE,
				FALSE);
		$manager->persist($mt13);

		$mt14 = new Tank('PzKpfw V Panther', $medium, $tier7, $nationality,
				FALSE, FALSE);
		$manager->persist($mt14);

		$mt15 = new Tank('VK 3002 (DB)', $medium, $tier7, $nationality, FALSE,
				FALSE);
		$manager->persist($mt15);

		$mt16 = new Tank('Panther II', $medium, $tier8, $nationality, FALSE,
				FALSE);
		$manager->persist($mt16);

		$mt17 = new Tank('E-50', $medium, $tier9, $nationality, FALSE, FALSE);
		$manager->persist($mt17);

		$mt18 = new Tank('E-50 Ausf. M', $medium, $tier10, $nationality, FALSE,
				FALSE);
		$manager->persist($mt18);

		/**
		 * heavy tanks
		 */
		$ht1 = new Tank('PzKpfw B2 740 (f)', $heavy, $tier4, $nationality,
				TRUE, TRUE);
		$manager->persist($ht1);

		$ht2 = new Tank('PzKpfw VI Tiger', $heavy, $tier7, $nationality, FALSE,
				FALSE);
		$manager->persist($ht2);

		$ht3 = new Tank('PzKpfw VI Tiger (P)', $heavy, $tier7, $nationality,
				FALSE, FALSE);
		$manager->persist($ht3);

		$ht4 = new Tank('Löwe', $heavy, $tier8, $nationality, TRUE, FALSE);
		$manager->persist($ht4);

		$ht5 = new Tank('PzKpfw VIB Tiger II', $heavy, $tier8, $nationality,
				FALSE, FALSE);
		$manager->persist($ht5);

		$ht6 = new Tank('VK 4502 (P) Ausf. A', $heavy, $tier8, $nationality,
				FALSE, FALSE);
		$manager->persist($ht6);

		$ht7 = new Tank('E-75', $heavy, $tier9, $nationality, FALSE, FALSE);
		$manager->persist($ht7);

		$ht8 = new Tank('VK 4502 (P) Ausf. B', $heavy, $tier9, $nationality,
				FALSE, FALSE);
		$manager->persist($ht8);

		$ht9 = new Tank('E-100', $heavy, $tier10, $nationality, FALSE, FALSE);
		$manager->persist($ht9);

		$ht10 = new Tank('Maus', $heavy, $tier10, $nationality, FALSE, FALSE);
		$manager->persist($ht10);

		/**
		 * tank destroyers
		 */
		$td1 = new Tank('Panzerjäger I', $td, $tier2, $nationality, FALSE,
				FALSE);
		$manager->persist($td1);

		$td2 = new Tank('Marder II', $td, $tier3, $nationality, FALSE, FALSE);
		$manager->persist($td2);

		$td3 = new Tank('Hetzer', $td, $tier4, $nationality, FALSE, FALSE);
		$manager->persist($td3);

		$td4 = new Tank('StuG III', $td, $tier5, $nationality, FALSE, FALSE);
		$manager->persist($td4);

		$td5 = new Tank('Dicker Max', $td, $tier6, $nationality, TRUE, FALSE);
		$manager->persist($td5);

		$td6 = new Tank('JagdPz IV', $td, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($td6);

		$td7 = new Tank('Jagdpanther', $td, $tier7, $nationality, FALSE, FALSE);
		$manager->persist($td7);

		$td8 = new Tank('8.8 cm PaK 43 Jagdtiger', $td, $tier8, $nationality,
				TRUE, FALSE);
		$manager->persist($td8);

		$td9 = new Tank('Ferdinand', $td, $tier8, $nationality, FALSE, FALSE);
		$manager->persist($td9);

		$td10 = new Tank('Jagdpanther II', $td, $tier8, $nationality, FALSE,
				FALSE);
		$manager->persist($td10);

		$td11 = new Tank('Jagdtiger', $td, $tier9, $nationality, FALSE, FALSE);
		$manager->persist($td11);

		$td12 = new Tank('JagdPz E-100', $td, $tier10, $nationality, FALSE,
				FALSE);
		$manager->persist($td12);

		/**
		 * artillery
		 */
		$spg1 = new Tank('Sturmpanzer I Bison', $spg, $tier2, $nationality,
				FALSE, FALSE);
		$manager->persist($spg1);

		$spg2 = new Tank('Sturmpanzer II', $spg, $tier2, $nationality, FALSE,
				FALSE);
		$manager->persist($spg2);

		$spg3 = new Tank('Wespe', $spg, $tier3, $nationality, FALSE, FALSE);
		$manager->persist($spg3);

		$spg4 = new Tank('Grille', $spg, $tier4, $nationality, FALSE, FALSE);
		$manager->persist($spg4);

		$spg5 = new Tank('Hummel', $spg, $tier5, $nationality, FALSE, FALSE);
		$manager->persist($spg5);

		$spg6 = new Tank('GW Panther', $spg, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($spg6);

		$spg7 = new Tank('GW Tiger', $spg, $tier7, $nationality, FALSE, FALSE);
		$manager->persist($spg7);

		$spg8 = new Tank('GW Typ E', $spg, $tier8, $nationality, FALSE, FALSE);
		$manager->persist($spg8);

		$manager->flush();
	}
}
