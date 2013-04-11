<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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
            'nationalities'  => $nationalities,
            'tiers' => $tiers,
            'classes'  => $classes
        ));
    }
}