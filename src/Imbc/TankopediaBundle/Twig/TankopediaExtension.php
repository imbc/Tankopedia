<?php

namespace Imbc\TankopediaBundle\Twig;

use Symfony\Bridge\Doctrine\RegistryInterface;

class TankopediaExtension extends \Twig_Extension {
	protected $em;

	public function __construct(RegistryInterface $doctrine) {
		$this->em = $doctrine->getManager();
	}

	public function getName() {
		return 'tankopedia_extension';
	}

	public function getFunctions() {
		return array(
				'get_tierAll' => new \Twig_Function_Method($this, 'getTierAll'),
				'get_tankByTier' => new \Twig_Function_Method($this,
						'getTankByTier'),
				'get_tankByType' => new \Twig_Function_Method($this,
						'getTankByType'),
				'get_tankByNationality' => new \Twig_Function_Method($this,
						'getTankByNationality'),
				'get_tankByNationalityAndTier' => new \Twig_Function_Method(
						$this, 'getTankByNationalityAndTier'));
	}

	public function getTierAll() {
		return $this->em->getRepository('ImbcTankopediaBundle:Tier')->findAll();
	}

	public function getTankByTier($tier) {
		return $this->em->getRepository('ImbcTankopediaBundle:Tank')
				->getTankByTier($tier);
	}

	public function getTankByType($type) {
		return $this->em->getRepository('ImbcTankopediaBundle:Tank')
				->getTankByType($type);
	}

	public function getTankByNationality($nationality) {
		return $this->em->getRepository('ImbcTankopediaBundle:Tank')
				->getTankByNationality($nationality);
	}

	public function getTankByNationalityAndTier($nationality, $tier) {
		return $this->em->getRepository('ImbcTankopediaBundle:Tank')
				->getTankByNationalityAndTier($nationality, $tier);
	}
}
