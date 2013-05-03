<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM\Tank;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Tank;

class LoadBritishTankData extends AbstractFixture implements
		OrderedFixtureInterface {
	public function getOrder() {
		return 6;
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
		$nationality = $this->getReference('uk');

		/**
		 * light tanks
		 */
		$lt1 = new Tank('Cruiser Mk. I', $light, $tier2, $nationality, FALSE,
				FALSE);
		$manager->persist($lt1);

		$lt2 = new Tank('Cruiser Mk. III', $light, $tier2, $nationality, FALSE,
				FALSE);
		$manager->persist($lt2);

		$lt3 = new Tank('Cruiser Mk. II', $light, $tier3, $nationality, FALSE,
				FALSE);
		$manager->persist($lt3);

		$lt4 = new Tank('Cruiser Mk. IV', $light, $tier3, $nationality, FALSE,
				FALSE);
		$manager->persist($lt4);

		$lt5 = new Tank('Covenanter', $light, $tier4, $nationality, FALSE,
				FALSE);
		$manager->persist($lt5);

		$lt6 = new Tank('Valentine', $light, $tier4, $nationality, FALSE, FALSE);
		$manager->persist($lt6);

		$lt7 = new Tank('Crusader', $light, $tier5, $nationality, FALSE, FALSE);
		$manager->persist($lt7);

		/**
		 * medium tanks
		 */
		$mt1 = new Tank('Vickers Medium Mk. I', $medium, $tier1, $nationality,
				FALSE, FALSE);
		$manager->persist($mt1);

		$mt2 = new Tank('Vickers Medium Mk. II', $medium, $tier2, $nationality,
				FALSE, FALSE);
		$manager->persist($mt2);

		$mt3 = new Tank('Vickers Medium Mk. III', $medium, $tier2,
				$nationality, FALSE, FALSE);
		$manager->persist($mt3);

		$mt4 = new Tank('Matilda', $medium, $tier4, $nationality, FALSE, FALSE);
		$manager->persist($mt4);

		$mt5 = new Tank('Matilda Black Prince', $medium, $tier5, $nationality,
				TRUE, FALSE);
		$manager->persist($mt5);

		$mt6 = new Tank('Cromwell', $medium, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($mt6);

		$mt7 = new Tank('Comet', $medium, $tier7, $nationality, FALSE, FALSE);
		$manager->persist($mt7);

		$mt8 = new Tank('Centurion Mk. I', $medium, $tier8, $nationality,
				FALSE, FALSE);
		$manager->persist($mt8);

		$mt9 = new Tank('Centurion Mk. 7/1', $medium, $tier9, $nationality,
				FALSE, FALSE);
		$manager->persist($mt9);

		$mt10 = new Tank('FV4202', $medium, $tier10, $nationality, FALSE, FALSE);
		$manager->persist($mt10);

		/**
		 * heavy tanks
		 */
		$ht1 = new Tank('Churchill I', $heavy, $tier5, $nationality, FALSE,
				FALSE);
		$manager->persist($ht1);

		$ht2 = new Tank('Churchill VII', $heavy, $tier6, $nationality, FALSE,
				FALSE);
		$manager->persist($ht2);

		$ht3 = new Tank('TOG II*', $heavy, $tier6, $nationality, TRUE, FALSE);
		$manager->persist($ht3);

		$ht4 = new Tank('Black Prince', $heavy, $tier7, $nationality, FALSE,
				FALSE);
		$manager->persist($ht4);

		$ht5 = new Tank('Caernarvon', $heavy, $tier8, $nationality, FALSE,
				FALSE);
		$manager->persist($ht5);

		$ht6 = new Tank('Conqueror', $heavy, $tier9, $nationality, FALSE, FALSE);
		$manager->persist($ht6);

		$ht7 = new Tank('FV215b', $heavy, $tier10, $nationality, FALSE, FALSE);
		$manager->persist($ht7);

		/**
		 * tank destroyers
		 */
		$td1 = new Tank('Universal Carrier 2-pdr', $td, $tier2, $nationality,
				FALSE, FALSE);
		$manager->persist($td1);

		$td2 = new Tank('Valentine AT', $td, $tier3, $nationality, FALSE, FALSE);
		$manager->persist($td2);

		$td3 = new Tank('Alecto', $td, $tier4, $nationality, FALSE, FALSE);
		$manager->persist($td3);

		$td4 = new Tank('AT 2', $td, $tier5, $nationality, FALSE, FALSE);
		$manager->persist($td4);

		$td5 = new Tank('Churchill Gun Carrier', $td, $tier6, $nationality,
				FALSE, FALSE);
		$manager->persist($td5);

		$td6 = new Tank('AT 8', $td, $tier6, $nationality, FALSE, FALSE);
		$manager->persist($td6);

		$td7 = new Tank('AT-15A', $td, $tier7, $nationality, TRUE, FALSE);
		$manager->persist($td7);

		$td8 = new Tank('AT 7', $td, $tier7, $nationality, FALSE, FALSE);
		$manager->persist($td8);

		$td9 = new Tank('AT 15', $td, $tier8, $nationality, FALSE, FALSE);
		$manager->persist($td9);

		$td10 = new Tank('Tortoise', $td, $tier9, $nationality, FALSE, FALSE);
		$manager->persist($td10);

		$td11 = new Tank('FV215b (183)', $td, $tier10, $nationality, FALSE,
				FALSE);
		$manager->persist($td11);

		$manager->flush();
	}
}
