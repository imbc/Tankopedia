<?php

namespace Imbc\TankopediaBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class Tank extends EntityRepository
{
    public function getTankByNationality( $nationality )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopedia:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.nationality', ':nationality' ));
        $qb->setParameter( 'nationality', $nationality );

        return $qb->getQuery()->getResult();
    }

    public function getTankByTier( $tier )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopedia:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.tier', ':tier' ));
        $qb->setParameter( 'tier', $tier );

        return $qb->getQuery()->getResult();
    }

    public function getTankByType( $type )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopedia:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.type', ':type' ));
        $qb->setParameter( 'type', $type );

        return $qb->getQuery()->getResult();
    }
}
