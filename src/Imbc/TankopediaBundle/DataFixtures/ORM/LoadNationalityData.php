<?php

namespace Imbc\TankopediaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imbc\TankopediaBundle\Entity\Nationality;

class LoadNationalityData extends AbstractFixture implements
		OrderedFixtureInterface {
	public function getOrder() {
		return 3;
	}

	public function load(ObjectManager $manager) {
		$usa = new Nationality('USA', 'United States');
		//        $usa->setImage( 'img/nations/usa.png' );
		$manager->persist($usa);

		$ussr = new Nationality('USSR', 'Soviet Union');
		//        $ussr->setImage( 'img/nations/ussr.png' );
		$manager->persist($ussr);

		$uk = new Nationality('UK', 'Great Britain');
		//        $uk->setImage( 'img/nations/uk.png' );
		$manager->persist($uk);

		$fr = new Nationality('FR', 'France');
		//        $fr->setImage( 'img/nations/france.png' );
		$manager->persist($fr);

		$de = new Nationality('DE', 'Germany');
		//        $de->setImage( 'img/nations/germany.png' );
		$manager->persist($de);

		$cn = new Nationality('CN', 'China');
		//        $cn->setImage( 'img/nations/china.png' );
		$manager->persist($cn);

		$manager->flush();

		$this->addReference('usa', $usa);
		$this->addReference('ussr', $ussr);
		$this->addReference('uk', $uk);
		$this->addReference('fr', $fr);
		$this->addReference('de', $de);
		$this->addReference('cn', $cn);
	}
}
