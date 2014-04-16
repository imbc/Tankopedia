<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class TankopediaController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $nationRepo = $em->getRepository( 'ImbcTankopediaBundle:Nationality' );
        $nationalities = $nationRepo->findAll();
        $tierRepo = $em->getRepository( 'ImbcTankopediaBundle:Tier' );
        $tiers = $tierRepo->findAll();
        $classRepo = $em->getRepository( 'ImbcTankopediaBundle:TankClass' );
        $classes = $classRepo->findAll();

        return $this->render( 'ImbcTankopediaBundle:Tankopedia:index.html.twig', array(
            'nationalities' => $nationalities,
            'tiers'         => $tiers,
            'classes'       => $classes,
        ));
    }

    public function autocompleteAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Tank' );
        $term = $request->get( 'term' );

        $tanks = $repo->getAutocomplete( $term );

        ladybug_dump_die($tanks);

        try
        {
            return new Response( json_encode( $tanks ));
        }
        catch( \Doctrine\Orm\NoResultException $e )
        {
            return $e;
        }
    }
}
