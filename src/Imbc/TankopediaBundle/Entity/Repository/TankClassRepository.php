<?php

namespace Imbc\TankopediaBundle\Entity\Repository;
use Doctrine\ORM\EntityRepository;

class TankClassRepository extends EntityRepository {
	/**
	 * Get TankClass by name
	 *
	 * @param string $name
	 * @return \Imbc\TankopediaBundle\Entity\TankClass
	 */
	public function getTankClassByName($name) {
		$qb = $this->_em->createQueryBuilder();
		$qb->select('t');
		$qb->from('ImbcTankopediaBundle:TankClass', 't');
		$qb->add('where', $qb->expr()->eq('t.name', ':name'));
		$qb->setParameter('name', $name);

		return $qb->getQuery()->getSingleResult();
	}
}
