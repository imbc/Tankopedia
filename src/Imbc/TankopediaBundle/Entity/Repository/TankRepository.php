<?php

namespace Imbc\TankopediaBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Imbc\TankopediaBundle\Entity\Tier;
use Imbc\TankopediaBundle\Entity\Type;
use Imbc\TankopediaBundle\Entity\Nationality;


class TankRepository extends EntityRepository
{
    public function getTankByNationality( Nationality $nationality )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopedia:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.nationality', ':nationality' ));
        $qb->setParameter( 'nationality', $nationality );

        return $qb->getQuery()->getResult();
    }

    public function getTankByTier( Tier $tier )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopedia:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.tier', ':tier' ));
        $qb->setParameter( 'tier', $tier );

        return $qb->getQuery()->getResult();
    }

    public function getTankByType( Type $type )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopedia:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.type', ':type' ));
        $qb->setParameter( 'type', $type );

        return $qb->getQuery()->getResult();
    }

    public function getTankByNationalityAndTier( Nationality $nationality, Tier $tier )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopedia:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.tier', ':tier' ));
        $qb->setParameter( 'tier', $tier );
        $qb->andWhere( $qb->expr()->eq( 't.nationality' , ':nationality' ));
        $qb->setParameter( 'nationality', $nationality );

        return $qb->getQuery()->getResult();

    }
}
