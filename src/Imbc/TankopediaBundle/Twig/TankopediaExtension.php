<?php

namespace Imbc\TankopediaBundle\Twig;

use Symfony\Bridge\Doctrine\RegistryInterface;

class TankopediaExtension extends \Twig_Extension
{
    protected $doctrine;

    public function __construct( RegistryInterface $doctrine )
    {
        $this->doctrine = $doctrine;
    }

    public function getName()
    {
        return 'tankopedia_extension';
    }

    public function getFilters()
    {
        return array(
            'get_tankByTier' => new \Twig_Function_Method( $this, 'getTankByTier' ),
            'get_tankByType' => new \Twig_Function_Method( $this, 'getTankByType' ),
            'get_tankByNationality' => new \Twig_Function_Method( $this, 'getTankByNationality' )
        );
    }

    public function getTankByTier( $tier )
    {
        return $this->getDoctrine()->getEntityManager()->getRepository( 'ImbcTankopedia:Tank' )->getTankByTier( $tier );
    }

    public function getTankByType( $type )
    {
        return $this->getDoctrine()->getEntityManager()->getRepository( 'ImbcTankopedia:Tank' )->getTankByType( $type );
    }

    public function getTankByNationality( $nationality )
    {
        return $this->getDoctrine()->getEntityManager()->getRepository( 'ImbcTankopedia:Tank' )->getTankByNationality( $nationality );
    }
}