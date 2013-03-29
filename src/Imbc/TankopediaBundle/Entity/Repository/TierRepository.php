<?php

namespace Imbc\TankopediaBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class TierRepository extends EntityRepository
{
    /**
     * Get Tier by value
     *
     * @param string $value
     * @return \Imbc\TankopediaBundle\Entity\Tier
     */
    public function getTierByValue( $value )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopediaBundle:Tier', 't' );
        $qb->add( 'where', $qb->expr()->eq( 't.value', ':value' ));
        $qb->setParameter( 'value', $value );

        return $qb->getQuery()->getSingleResult();
    }

}
