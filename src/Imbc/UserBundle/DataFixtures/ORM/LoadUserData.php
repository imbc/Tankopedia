<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface {
	public function getOrder() {
		return 1;
	}

	public function load(ObjectManager $manager) {
		$tier1 = new Tier('I');
		$manager->persist($tier1);

		$manager->flush();
	}
}
