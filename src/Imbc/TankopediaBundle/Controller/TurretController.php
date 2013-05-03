<?php

namespace Imbc\TankopediaBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\Turret;
use Imbc\TankopediaBundle\Form\Type\TurretType;

class TurretController extends Controller
{
    public function indexAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Turret' );
        $turrets = $repo->findAll();
        $newTurret = new Turret();
        $form = $this->createForm( new TurretType(), $newTurret );
        if ( null !== $request->get( $form->getName() ) )
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $newTurret );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_turret' ) );
            }
        }
        return $this->render( 'ImbcTankopediaBundle:Turret:index.html.twig', array(
            'turrets' => $turrets,
            'form'  => $form->createView(),
        ));
    }

    public function showAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Turret' );
        if ( null === $turret=  $repo->find( $request->get( 'id' ) ))
        {
            throw $this->createNotFoundException( 'Turret does not exist' );
        }
        return $this->render( 'ImbcTankopediaBundle:Turret:show.html.twig', array(
            'turret' => $turret,
        ));
    }

    public function editAction( Request $request )
    {
        $edit = false;
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Turret' );
        $turret = new Turret();
        if ( $request->get( 'id' ) )
        {
            $edit = true;
            $turret = $repo->find( $request->get( 'id' ));
        }
        $form = $this->createForm( new TurretType(), $turret );
        if ( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $turret );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_radio' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:Turret:edit.html.twig', array(
            'edit' => $edit,
            'turret'  => $form->createView(),
        ));
    }
}
