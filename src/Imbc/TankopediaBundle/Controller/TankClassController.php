<?php

namespace Imbc\TankopediaBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\TankClass;
use Imbc\TankopediaBundle\Form\Type\TankClassType;

/**
 * Type controller.
 *
 */
class TankClassController extends Controller
{
    public function indexAction( Request $request )
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repo = $entityManager->getRepository( 'ImbcTankopediaBundle:TankClass' );
        $classes = $repo->findAll();
        $thisTankClass = new TankClass();
        $form = $this->createForm( new TankClassType(), $thisTankClass );
        if ( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $entityManager->persist( $thisTankClass );
                $entityManager->flush();

                return $this->redirect( $this->generateUrl( 'tankopedia_class' ) );
            }
        }

        return $this->render( 'ImbcTankopediaBundle:TankClass:index.html.twig', array(
            'classes'   => $classes,
            'form'      => $form->createView(),
        ));
    }

    public function showAction( Request $request )
    {
        $entityManager = $this->getDoctrine()->getManager();
        $classRepo = $entityManager->getRepository( 'ImbcTankopediaBundle:TankClass' );
        $tankRepo = $entityManager->getRepository( 'ImbcTankopediaBundle:Tank' );
        if ( null === $class = $classRepo->findOneBy( array(
                        'slug' => $request->get( 'slug' ))
            ))
        {
            throw $this->createNotFoundException( 'TankClass does not exist' );
        }

        return $this->render( 'ImbcTankopediaBundle:TankClass:show.html.twig', array(
            'class' => $class,
            'tanks' => $tankRepo->getTankByClass( $class )
        ));
    }

    public function editAction( Request $request )
    {
        $edit = false;
        $entityManager = $this->getDoctrine()->getManager();
        $repo = $entityManager->getRepository( 'ImbcTankopediaBundle:TankClass' );
        $class = new TankClass();
        if ( $request->get( 'slug' ))
        {
            $edit = true;
            $class = $repo->findOneBy( array(
                        'slug' => $request->get( 'slug' )
            ));
        }
        $form = $this->createForm( new TankClassType(), $class );
        if ( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $entityManager->persist( $class );
                $entityManager->flush();

                return $this->redirect( $this->generateUrl( 'tankopedia_class' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:TankClass:edit.html.twig', array(
            'edit'      => $edit,
            'class'     => $form->createView(),
        ));
    }
}
