<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Imbc\TankopediaBundle\Entity\Radio;
use Imbc\TankopediaBundle\Form\Type\RadioType;

class RadioController extends Controller
{
    public function indexAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Radio' );
        $radios = $repo->findAll();
        $thisRadio = new Radio();
        $form = $this->createForm( new RadioType(), $thisRadio );
        if( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if( $form->isValid() )
            {
                $em->persist( $thisRadio );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_radio' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:Radio:index.html.twig', array(
            'radios' => $radios,
            'form' => $form->createView(),
        ));
    }

    public function showAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Radio' );
        if( null === $radio = $repo->find( $request->get( 'id' ) ))
        {
            throw $this->createNotFoundException( 'Radio does not exist' );
        }

        return $this->render( 'ImbcTankopediaBundle:Radio:show.html.twig', array(
            'radio' => $radio,
        ));
    }

    public function editAction( Request $request )
    {
        $edit = false;
        $entityManager = $this->getDoctrine()->getManager();
        $repo = $entityManager->getRepository( 'ImbcTankopediaBundle:Radio' );
        $radio = new Radio();
        if( $request->get( 'id' ))
        {
            $edit = true;
            $radio = $repo->find( $request->get( 'id' ));
        }
        $form = $this->createForm( new RadioType(), $radio );
        if( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if( $form->isValid() )
            {
                $entityManager->persist( $radio );
                $entityManager->flush();

                return $this->redirect( $this->generateUrl( 'tankopedia_radio' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:Radio:edit.html.twig', array(
            'edit'      => $edit,
            'radio'     => $form->createView(),
        ));
    }
}
