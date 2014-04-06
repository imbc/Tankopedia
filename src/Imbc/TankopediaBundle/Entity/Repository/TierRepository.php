<?php

namespace Imbc\TankopediaBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class TierRepository extends EntityRepository
{
    /**
     * Get Tier by value
     *
     * @param string $name
     * @return \Imbc\TankopediaBundle\Entity\Tier
     */
    public function getTierByName( $name )
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select( 't' );
        $qb->from( 'ImbcTankopediaBundle:Tier', 't' );
        $qb->add( 'where', $qb->expr()->eq( 't.name', ':name' ));
        $qb->setParameter( 'name', $name );

        return $qb->getQuery()->getSingleResult();
    }

    public function getTiers()
    {
        $data = array();
        $entities = $this->createQueryBuilder( 'tc' )
                         ->orderBy( 'n.name', 'DESC' )
                         ->getQuery()->getResult();
         foreach( $entities as $e )
         {
             $data[$e->getId()] = $e->getName();
         }
         return $data;
    }
}
