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
        if ( null !== $request->get( $form->getName() ) )
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $thisGun );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_gun' ) );
            }
        }
        return $this->render( 'ImbcTankopediaBundle:Gun:index.html.twig', array(
            'guns' => $guns,
            'form'  => $form->createView(),
        ));
    }

    public function showAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository( 'ImbcTankopediaBundle:Gun' );
        if ( null === $gun = $repo->find( $request->get( 'id' ) ))
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
        if ( $request->get( 'id' ) )
        {
            $edit = true;
            $gun = $repo->find( $request->get( 'id' ));
        }
        $form = $this->createForm( new GunType(), $gun );
        if ( null !== $request->get( $form->getName() ))
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $gun );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'tankopedia_gun' ));
            }
        }

        return $this->render( 'ImbcTankopediaBundle:Gun:edit.html.twig', array(
            'edit'  => $edit,
            'gun'  => $form->createView(),
        ));
    }


    /**
     * Creates a new Gun entity.
     *
     */
//    public function createAction(Request $request)
//    {
//        $entity  = new Gun();
//        $form = $this->createForm(new GunType(), $entity);
//        $form->bind($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($entity);
//            $em->flush();
//
//            return $this->redirect($this->generateUrl('tankopedia_gun_show', array('id' => $entity->getId())));
//        }
//
//        return $this->render('ImbcTankopediaBundle:Gun:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }

    /**
     * Displays a form to create a new Gun entity.
     *
     */
//    public function newAction()
//    {
//        $entity = new Gun();
//        $form   = $this->createForm(new GunType(), $entity);
//
//        return $this->render('ImbcTankopediaBundle:Gun:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }

    /**
     * Finds and displays a Gun entity.
     *
     */
//    public function showAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('ImbcTankopediaBundle:Gun')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Gun entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
//
//        return $this->render('ImbcTankopediaBundle:Gun:show.html.twig', array(
//            'entity'      => $entity,
//            'delete_form' => $deleteForm->createView(),        ));
//    }

    /**
     * Displays a form to edit an existing Gun entity.
     *
     */
//    public function editAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('ImbcTankopediaBundle:Gun')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Gun entity.');
//        }
//
//        $editForm = $this->createForm(new GunType(), $entity);
//        $deleteForm = $this->createDeleteForm($id);
//
//        return $this->render('ImbcTankopediaBundle:Gun:edit.html.twig', array(
//            'entity'      => $entity,
//            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }

    /**
     * Edits an existing Gun entity.
     *
     */
//    public function updateAction(Request $request, $id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('ImbcTankopediaBundle:Gun')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Gun entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
//        $editForm = $this->createForm(new GunType(), $entity);
//        $editForm->bind($request);
//
//        if ($editForm->isValid()) {
//            $em->persist($entity);
//            $em->flush();
//
//            return $this->redirect($this->generateUrl('tankopedia_gun_edit', array('id' => $id)));
//        }
//
//        return $this->render('ImbcTankopediaBundle:Gun:edit.html.twig', array(
//            'entity'      => $entity,
//            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }

    /**
     * Deletes a Gun entity.
     *
     */
//    public function deleteAction(Request $request, $id)
//    {
//        $form = $this->createDeleteForm($id);
//        $form->bind($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $entity = $em->getRepository('ImbcTankopediaBundle:Gun')->find($id);
//
//            if (!$entity) {
//                throw $this->createNotFoundException('Unable to find Gun entity.');
//            }
//
//            $em->remove($entity);
//            $em->flush();
//        }
//
//        return $this->redirect($this->generateUrl('tankopedia_gun'));
//    }

    /**
     * Creates a form to delete a Gun entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
//    private function createDeleteForm($id)
//    {
//        return $this->createFormBuilder(array('id' => $id))
//            ->add('id', 'hidden')
//            ->getForm()
//        ;
//    }
}
