<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\Tank;
use Imbc\TankopediaBundle\Form\Type\TankType;

/**
 * Tank controller.
 */
class TankController extends Controller
{
    public function indexAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Tank' );
        $tanks = $repo->findAll();
        $newTank = new Tank();
        $tankForm = $this->createForm( new TankType(), $newTank );
        if ( null !== $request->get( $tankForm->getName() ) )
        {
            $tankForm->bind( $request );
            if ( $tankForm->isValid() )
            {
                $em->persist( $newTank );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_tank' ) );
            }
        }

        $gridService = $this->get( 'imbc.grid.tank' );
        $grid = $gridService->getGrid();
        if ( $grid->isReadyForRedirect() )
        {
            if ( $grid->isReadyForExport() ) return $grid->getGridResponse();
            return $this->redirect( $grid->getRouteUrl() );
        }
        else
        {
            return $this->render( 'ImbcTankopediaBundle:Tank:index.html.twig', array(
                'grid'  => $grid,
                'tanks' => $tanks,
                'form'  => $tankForm->createView(),
            ));
        }
    }

    public function showAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Tank' );
        if ( null === $tank = $repo->find( $request->get( 'id' ) ))
        {
            throw $this->createNotFoundException( 'Tank does not exist' );
        }
        return $this->render( 'ImbcTankopediaBundle:Tank:show.html.twig', array(
            'tank' => $tank,
        ));
    }

    public function editAction( Request $request )
    {
        $edit = false;
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Tank' );
        $tank = new Tank();
        if ( $request->get( 'id' ) )
        {
            $edit = true;
            $tank = $repo->find( $request->get( 'id' ));
        }
        $form = $this->createForm( new TankType(), $tank );
        if ( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $tank );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_tank' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:Tank:edit.html.twig', array(
            'edit'  => $edit,
            'tank'  => $form->createView(),
        ));
    }

}
