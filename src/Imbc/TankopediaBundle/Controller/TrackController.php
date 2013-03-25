<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\Track;
use Imbc\TankopediaBundle\Form\Type\TrackType;

/**
 * Track controller.
 *
 */
class TrackController extends Controller
{
    public function indexAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Track' );
        $tracks = $repo->findAll();
        $newTrack = new Track();
        $form = $this->createForm( new TrackType(), $newTrack );
        if ( null !== $request->get( $form->getName() ) )
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $newTrack );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_track' ) );
            }
        }
        return $this->render( 'ImbcTankopediaBundle:Track:index.html.twig', array(
            'tracks' => $tracks,
            'form'  => $form->createView(),
        ));
    }

    public function showAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Track' );
        if ( null === $track = $repo->findOneBy( array(
                        'slug' => $request->get( 'slug' ))
                ))
        {
            throw $this->createNotFoundException( 'Track does not exist' );
        }
        return $this->render( 'ImbcTankopediaBundle:Track:show.html.twig', array(
            'track' => $track,
        ));
    }

    public function editAction( Request $request )
    {
        $edit = false;
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Track' );
        $track = new Track();
        if ( $request->get( 'slug' ) )
        {
            $edit = true;
            $track = $repo->findOneBy( array(
                        'slug' => $request->get( 'slug' )
            ));
        }
        $form = $this->createForm( new TrackType(), $track );
        if ( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $track );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_track' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:Track:edit.html.twig', array(
            'edit'  => $edit,
            'track'  => $form->createView(),
        ));
    }
}
