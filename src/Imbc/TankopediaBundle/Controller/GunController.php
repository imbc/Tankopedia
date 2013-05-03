<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Imbc\TankopediaBundle\Entity\Gun;
use Imbc\TankopediaBundle\Form\Type\GunType;

/**
 * Gun controller.
 *
 */
class GunController extends Controller
{
    public function indexAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Gun' );
        $guns = $repo->findAll();
        $thisGun = new Gun();
        $form = $this->createForm( new GunType(), $thisGun );
        if( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if( $form->isValid() )
            {
                $em->persist( $thisGun );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_gun' ));
            }
        }

        return $this>render( 'ImbcTankopediaBundle:Gun:index.html.twig', array(
            'guns'  => $guns,
            'form'  => $form->createView(),
        ));
    }

    public function showAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Gun' );
        if( null === $gun = $repo->find( $request->get( 'id' ) ))
        {
            throw $this->createNotFoundException( 'Gun does not exist' );
        }
        return $this->render( 'ImbcTankopediaBundle:Gun:show.html.twig', array(
            'gun' => $gun,
        ));
    }

    public function editAction( Request $request )
    {
        $edit = false;
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Gun' );
        $gun = new Gun();
        if( $request->get( 'id' ))
        {
            $edit = true;
            $gun = $repo->find( $request->get( 'id' ));
        }
        $form = $this->createForm( new GunType(), $gun );
        if( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if( $form->isValid() )
            {
                $em->persist( $gun );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_gun' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:Gun:edit.html.twig', array(
            'edit'  => $edit,
            'gun'   => $form->createView(),
        ));
    }
}
