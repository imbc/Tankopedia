<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM\Tank;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Tank;

class LoadRussianTankData extends AbstractFixture implements
		OrderedFixtureInterface {
	public function getOrder() {
		return 5;
	}

	public function load(ObjectManager $manager) {
		// ref for tankclass
		$light = $this->getReference('light');
		$medium = $this->getReference('medium');
		$heavy = $this->getReference('heavy');
		$td = $this->getReference('td');
		$spg = $this->getReference('spg');
		// ref for tier
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
		$nationality = $this->getReference('ussr');

		/**
		 * light tanks
		 */
		$lt1 = new Tank('MS-1', $light, $tier1, $nationality, FALSE, FALSE);
		$manager->persist($lt1);

		$lt2 = new Tank('BT-2', $light, $tier2, $nationality, FALSE, FALSE);
		$manager->persist($lt2);

		$lt3 = new Tank('Tetrarch', $light, $tier2, $nationality, TRUE, TRUE);
		$manager->persist($lt3);

		$lt4 = new Tank('T-26', $light, $tier2, $nationality, FALSE, FALSE);
		$manager->persist($lt4);

		$lt5 = new Tank('BT-7', $light, $tier3, $nationality, FALSE, FALSE);
		$manager->persist($lt5);

		$lt6 = new Tank('BT-SV', $light, $tier3, $nationality, TRUE, TRUE);
		$manager->persist($lt6);

		$lt7 = new Tank('M3 Stuart Lend Lease', $light, $tier3, $nationality,
				TRUE, TRUE);
		$manager->persist($lt7);

		$lt8 = new Tank('T-127', $light, $tier3, $nationality, TRUE, FALSE);
		$manager->persist($lt8);

		$lt9 = new Tank('T-46', $light, $tier3, $nationality, FALSE, FALSE);
		$manager->persist($lt9);

		$lt10 = new Tank('A-20', $light, $tier4, $nationality, FALSE, FALSE);
		$manager->persist($lt10);

		$lt11 = new Tank('T-50', $light, $tier4, $nationality, FALSE, FALSE);
		$manager->persist($lt11);

		$lt12 = new Tank('Valentine II', $light, $tier4, $nationality, TRUE,
				FALSE);
		$manager->persist($lt12);

		$lt13 = new Tank('T-50-2', $light, $tier5, $nationality, FALSE, FALSE);
		$manager->persist($lt13);

		/**
		 * medium tanks
		 */
		$mt1 = new Tank('A-32', $medium, $tier4, $nationality, TRUE, TRUE);
		$manager->persist($mt1);

		$mt2 = new Tank('T-28', $medium, $tier4, $nationality, FALSE, FALSE);
		$manager->persist($mt2);

		$mt3 = new Tank('Matilda IV', $medium, $tier5, $nationality, TRUE,
				FALSE);
		$manager->persist($mt3);

		$mt4 = new Tank('T-34', $medium, $tier5, $nationality, FALSE, FALSE);
		$manager->persist($mt4);

		$mt5 = new Tank('T-34-85', $medium, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($mt5);

		$mt6 = new Tank('KV-13', $medium, $tier7, $nationality, FALSE, FALSE);
		$manager->persist($mt6);

		$mt7 = new Tank('T-43', $medium, $tier7, $nationality, FALSE, FALSE);
		$manager->persist($mt7);

		$mt8 = new Tank('T-44', $medium, $tier8, $nationality, FALSE, FALSE);
		$manager->persist($mt8);

		$mt9 = new Tank('T-54', $medium, $tier9, $nationality, FALSE, FALSE);
		$manager->persist($mt9);

		$mt10 = new Tank('T-62A', $medium, $tier10, $nationality, FALSE, FALSE);
		$manager->persist($mt10);

		/**
		 * heavy tanks
		 */
		$ht1 = new Tank('Churchill III', $heavy, $tier5, $nationality, TRUE,
				FALSE);
		$manager->persist($ht1);

		$ht2 = new Tank('KV', $heavy, $tier5, $nationality, TRUE, TRUE);
		$manager->persist($ht2);

		$ht3 = new Tank('KV-1', $heavy, $tier5, $nationality, FALSE, FALSE);
		$manager->persist($ht3);

		$ht4 = new Tank('KV-220', $heavy, $tier5, $nationality, TRUE, TRUE);
		$manager->persist($ht4);

		$ht5 = new Tank('KV-220 Beta-Test', $heavy, $tier5, $nationality, TRUE,
				TRUE);
		$manager->persist($ht5);

		$ht6 = new Tank('KV-1S', $heavy, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($ht6);

		$ht7 = new Tank('KV-2', $heavy, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($ht7);

		$ht8 = new Tank('T-150', $heavy, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($ht8);

		$ht9 = new Tank('IS', $heavy, $tier7, $nationality, FALSE, FALSE);
		$manager->persist($ht9);

		$ht10 = new Tank('KV-3', $heavy, $tier7, $nationality, FALSE, FALSE);
		$manager->persist($ht10);

		$ht11 = new Tank('IS-3', $heavy, $tier8, $nationality, FALSE, FALSE);
		$manager->persist($ht11);

		$ht12 = new Tank('IS-6', $heavy, $tier8, $nationality, TRUE, FALSE);
		$manager->persist($ht12);

		$ht13 = new Tank('KV-4', $heavy, $tier8, $nationality, FALSE, FALSE);
		$manager->persist($ht13);

		$ht14 = new Tank('KV-5', $heavy, $tier8, $nationality, TRUE, TRUE);
		$manager->persist($ht14);

		$ht15 = new Tank('IS-8', $heavy, $tier9, $nationality, FALSE, FALSE);
		$manager->persist($ht15);

		$ht16 = new Tank('ST-I', $heavy, $tier9, $nationality, FALSE, FALSE);
		$manager->persist($ht16);

		$ht17 = new Tank('IS-4', $heavy, $tier10, $nationality, FALSE, FALSE);
		$manager->persist($ht17);

		$ht18 = new Tank('IS-7', $heavy, $tier10, $nationality, FALSE, FALSE);
		$manager->persist($ht18);

		/**
		 * tank destroyers
		 */
		$td1 = new Tank('AT-1', $td, $tier2, $nationality, FALSE, FALSE);
		$manager->persist($td1);

		$td2 = new Tank('SU-76', $td, $tier3, $nationality, FALSE, FALSE);
		$manager->persist($td2);

		$td3 = new Tank('SU-85B', $td, $tier4, $nationality, FALSE, FALSE);
		$manager->persist($td3);

		$td4 = new Tank('SU-85', $td, $tier5, $nationality, FALSE, FALSE);
		$manager->persist($td4);

		$td5 = new Tank('SU-85I', $td, $tier5, $nationality, TRUE, TRUE);
		$manager->persist($td5);

		$td6 = new Tank('SU-100', $td, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($td6);

		$td7 = new Tank('SU-100Y', $td, $tier6, $nationality, TRUE, FALSE);
		$manager->persist($td7);

		$td8 = new Tank('SU-100M1', $td, $tier7, $nationality, FALSE, FALSE);
		$manager->persist($td8);

		$td9 = new Tank('SU-122-44', $td, $tier7, $nationality, TRUE, FALSE);
		$manager->persist($td9);

		$td10 = new Tank('SU-152', $td, $tier7, $nationality, FALSE, FALSE);
		$manager->persist($td10);

		$td11 = new Tank('ISU-152', $td, $tier8, $nationality, FALSE, FALSE);
		$manager->persist($td11);

		$td12 = new Tank('SU-101', $td, $tier8, $nationality, FALSE, FALSE);
		$manager->persist($td12);

		$td13 = new Tank('Object 704', $td, $tier9, $nationality, FALSE, FALSE);
		$manager->persist($td13);

		$td14 = new Tank('SU-122-54', $td, $tier9, $nationality, FALSE, FALSE);
		$manager->persist($td14);

		$td15 = new Tank('Object 263', $td, $tier10, $nationality, FALSE, FALSE);
		$manager->persist($td15);

		$td16 = new Tank('Object 268', $td, $tier10, $nationality, FALSE, FALSE);
		$manager->persist($td16);

		/**
		 * artillery
		 */
		$spg1 = new Tank('SU-18', $spg, $tier2, $nationality, FALSE, FALSE);
		$manager->persist($spg1);

		$spg2 = new Tank('SU-26', $spg, $tier3, $nationality, FALSE, FALSE);
		$manager->persist($spg2);

		$spg3 = new Tank('SU-5', $spg, $tier4, $nationality, FALSE, FALSE);
		$manager->persist($spg3);

		$spg4 = new Tank('SU-8', $spg, $tier5, $nationality, FALSE, FALSE);
		$manager->persist($spg4);

		$spg5 = new Tank('S-51', $spg, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($spg5);

		$spg6 = new Tank('SU-14', $spg, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($spg6);

		$spg7 = new Tank('Object 212', $spg, $tier7, $nationality, FALSE, FALSE);
		$manager->persist($spg7);

		$spg8 = new Tank('Object 261', $spg, $tier8, $nationality, FALSE, FALSE);
		$manager->persist($spg8);

		$manager->flush();
	}
}
