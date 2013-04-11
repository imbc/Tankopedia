<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\Tier;
use Imbc\TankopediaBundle\Form\Type\TierType;

class TierController extends Controller
{
    public function indexAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Tier' );
        $tiers = $repo->findAll();
        $newTier = new Tier();
        $form = $this->createForm( new TierType(), $newTier );
        if ( null !== $request->get( $form->getName() ) )
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $newTier );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_tier' ) );
            }
        }
        return $this->render( 'ImbcTankopediaBundle:Tier:index.html.twig', array(
            'tiers' => $tiers,
            'form'  => $form->createView(),
        ));
    }

    public function showAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Tier' );
        if ( null === $tier = $repo->findOneBy( array(
                        'slug' => $request->get( 'slug' ))
                ))
        {
            throw $this->createNotFoundException( 'Tier does not exist' );
        }
        return $this->render( 'ImbcTankopediaBundle:Tier:show.html.twig', array(
            'tier' => $tier,
        ));
    }

    public function editAction( Request $request )
    {
        $edit = false;
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Tier' );
        $tier = new Tier();
        if ( $request->get( 'slug' ) )
        {
            $edit = true;
            $tier = $repo->findOneBy( array(
                        'slug' => $request->get( 'slug' )
            ));
        }
        $form = $this->createForm( new TierType(), $tier );
        if ( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $tier );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_tier' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:Tier:edit.html.twig', array(
            'edit'  => $edit,
            'tier'  => $form->createView(),
        ));
    }
}
