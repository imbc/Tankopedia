<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\Nationality;
use Imbc\TankopediaBundle\Form\Type\NationalityType;

class NationalityController extends Controller
{
    public function indexAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Nationality' );
        $nationalities = $repo->findAll();
        $thisNationality = new Nationality();
        $form = $this->createForm( new NationalityType(), $thisNationality );
        if ( null !== $request->get( $form->getName() ) )
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $thisNationality );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_nationality' ) );
            }
        }
        $breadcrumbs = $this->get( 'white_october_breadcrumbs' );
        $breadcrumbs->addItem( 'Home', $this->get( 'router' )->generate( 'tankopedia_nationality' ));
        return $this->render( 'ImbcTankopediaBundle:Nationality:index.html.twig', array(
            'nationalities' => $nationalities,
            'form'  => $form->createView(),
        ));
    }

    public function showAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $nationalityRepo = $em->getRepository( 'ImbcTankopediaBundle:Nationality' );
        $tankRepo = $em->getRepository( 'ImbcTankopediaBundle:Tank' );
        if ( null === $nationality = $nationalityRepo->find( $request->get( 'id' ) ))
        {
            throw $this->createNotFoundException( 'Nationality does not exist' );
        }
        $breadcrumbs = $this->get( 'white_october_breadcrumbs' );
        $breadcrumbs->addItem( $nationality->getName(), $this->get( 'router' )->generate( 'tankopedia_nationality' ));
        return $this->render( 'ImbcTankopediaBundle:Nationality:show.html.twig', array(
            'nationality' => $nationality,
            'tanks' => $tankRepo->getTankByNationality( $nationality )
        ));
    }

    public function editAction( Request $request )
    {
        $edit = false;
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Nationality' );
        $nationality = new Nationality();
        if ( $request->get( 'id' ) )
        {
            $edit = true;
            $nationality = $repo->find( $request->get( 'id' ));
        }
        $form = $this->createForm( new NationalityType(), $nationality );
        if ( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $nationality );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_nationality' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:Nationality:edit.html.twig', array(
            'edit' => $edit,
            'nationality'  => $form->createView(),
        ));
    }
}
