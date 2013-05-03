<?php

namespace Imbc\TankopediaBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Imbc\TankopediaBundle\Entity\Tier;
use Imbc\TankopediaBundle\Entity\TankClass;
use Imbc\TankopediaBundle\Entity\Nationality;

class TankRepository extends EntityRepository
{
    /**
     * Get tanks by Nationality
     *
     * @param \Imbc\TankopediaBundle\Entity\Nationality $nationality
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTankByNationality( Nationality $nationality )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopediaBundle:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.nationality', ':nationality' ));
        $qb->setParameter( 'nationality', $nationality );

        return $qb->getQuery()->getResult();
    }

    /**
     * Get tanks by Tier
     *
     * @param \Imbc\TankopediaBundle\Entity\Tier $tier
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTankByTier( Tier $tier )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopediaBundle:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.tier', ':tier' ));
        $qb->setParameter( 'tier', $tier );

        return $qb->getQuery()->getResult();
    }

    /**
     * Get tanks by Class
     *
     * @param \Imbc\TankopediaBundle\Entity\TankClass $class
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTankByClass( TankClass $class )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopediaBundle:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.class', ':class' ));
        $qb->setParameter( 'class', $class );

        return $qb->getQuery()->getResult();
    }

    /**
     * Get tanks by Nationality and Tier
     *
     * @param \Imbc\TankopediaBundle\Entity\Nationality $nationality
     * @param \Imbc\TankopediaBundle\Entity\Tier $tier
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTankByNationalityAndTier( Nationality $nationality, Tier $tier )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopediaBundle:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.tier', ':tier' ));
        $qb->setParameter( 'tier', $tier );
        $qb->andWhere( $qb->expr()->eq( 't.nationality', ':nationality' ));
        $qb->setParameter( 'nationality', $nationality );

        return $qb->getQuery()->getResult();
    }

    /**
     * Get tanks by Nationality and TankClass
     *
     * @param \Imbc\TankopediaBundle\Entity\Nationality $nationality
     * @param \Imbc\TankopediaBundle\Entity\TankClass $class
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTankByNationalityAndClass( Nationality $nationality, TankClass $class )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopediaBundle:Tank', 't' );
        $qb->where( $qb->expr()->eq( 't.class', ':class' ));
        $qb->setParameter( 'class', $class );
        $qb->andWhere( $qb->expr()->eq( 't.nationality', ':nationality' ));
        $qb->setParameter( 'nationality', $nationality );

        return $qb->getQuery()->getResult();
    }

    /**
     * Get Tank by name
     *
     * @param string $name
     * @return \Imbc\TankopediaBundle\Entity\Tank
     */
    public function getTankByName( $name )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopediaBundle:Tank', 't' );
        $qb->add( 'where', $qb->expr()->eq( 't.name', ':name' ));
        $qb->setParameter( 'name', $name );

        return $qb->getQuery()->getSingleResult();
    }
}
