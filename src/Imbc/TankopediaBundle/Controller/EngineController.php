<?php

namespace Imbc\TankopediaBundle\Controller;

use Doctrine\Common\Annotations\Annotation\Required;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Imbc\TankopediaBundle\Entity\Engine;
use Imbc\TankopediaBundle\Form\Type\EngineType;

/**
 * Engine controller.
 */
class EngineController extends Controller
{
    /**
     * Show all Engines
     *
     * @param Request $request Symfony request object
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Engine' );
        $engines = $repo->findAll();
        $thisEngine = new Engine();
        $form = $this->createForm( new EngineType(), $thisEngine );
        if( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if( $form->isValid() )
            {
                $em->persist( $thisEngine );
                $em->flush();

                return $this->redirect( $this->generateUrl( 'tankopedia_engine' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:Engine:index.html.twig', array(
            'engines'   => $engines,
            'form'      => $form->createView(),
        ));
    }

    /**
     * Show single Engine
     *
     * @param Request $request request object
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Engine' );
        if ( null === $engine = $repo->find( $request->get( 'id' ) ))
        {
            throw $this->createNotFoundException( 'Engine does not exist' );
        }

        return $this->render( 'ImbcTankopediaBundle:Engine:show.html.twig', array(
            'engine' => $engine,
        ));
    }

    /**
     * Edit single Engine
     *
     * @param Request $request Symfony Request Object
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction( Request $request )
    {
        $edit = false;
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Engine' );
        $engine = new Engine();
        if( $request->get( 'id' ))
        {
            $edit = true;
            $engine = $repo->find( $request->get( 'id' ));
        }
        $form = $this->createForm( new EngineType(), $engine );
        if( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if( $form->isValid() )
            {
                $em->persist( $engine );
                $em->flush();

                return $this->redirect( $this->generateUrl( 'tankopedia_engine' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:Engine:edit.html.twig', array(
            'edit'      => $edit,
            'engine'    => $form->createView(),
        ));
    }

    /**
     * Deletes a Engine entity.
     *
     * @param Request $request Symfony Request Object
     * @param integer $id      id of the Engine to delete
     */
    public function deleteAction( Request $request, $id )
    {
        // to be implemented
    }
}
