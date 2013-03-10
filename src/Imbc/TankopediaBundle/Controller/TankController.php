<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\Tank;
use Imbc\TankopediaBundle\Form\TankType;

/**
 * Tank controller.
 *
 */
class TankController extends Controller
{
    /**
     * Lists all Tank entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImbcTankopediaBundle:Tank')->findAll();

        return $this->render('ImbcTankopediaBundle:Tank:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Tank entity.
     *
     */
    public function createAction( Request $request )
    {
        $entity  = new Tank();
        $form = $this->createForm( new TankType(), $entity );
        $form->bind( $request );

        if ( $form->isValid() ) {
            $em = $this->getDoctrine()->getManager();
            $em->persist( $entity );
            $em->flush();

            return $this->redirect( $this->generateUrl( 'tankopedia_tank_show', array(
                    'id' => $entity->getId(),
                )
            ));
        }

        return $this->render( 'ImbcTankopediaBundle:Tank:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Tank entity.
     *
     */
    public function newAction()
    {
        $entity = new Tank();
        $form   = $this->createForm(new TankType(), $entity);

        return $this->render('ImbcTankopediaBundle:Tank:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tank entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Tank')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tank entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Tank:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tank entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Tank')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tank entity.');
        }

        $editForm = $this->createForm(new TankType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Tank:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Tank entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Tank')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tank entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TankType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_tank_edit', array('id' => $id)));
        }

        return $this->render('ImbcTankopediaBundle:Tank:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tank entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImbcTankopediaBundle:Tank')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tank entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tankopedia_tank'));
    }

    /**
     * Creates a form to delete a Tank entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
