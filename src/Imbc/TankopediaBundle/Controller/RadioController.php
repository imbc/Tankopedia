<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\Radio;
use Imbc\TankopediaBundle\Form\Type\RadioType;

/**
 * Radio controller.
 *
 */
class RadioController extends Controller
{
    /**
     * Lists all Radio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImbcTankopediaBundle:Radio')->findAll();

        return $this->render('ImbcTankopediaBundle:Radio:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Radio entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Radio();
        $form = $this->createForm(new RadioType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_radio_show', array('id' => $entity->getId())));
        }

        return $this->render('ImbcTankopediaBundle:Radio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Radio entity.
     *
     */
    public function newAction()
    {
        $entity = new Radio();
        $form   = $this->createForm(new RadioType(), $entity);

        return $this->render('ImbcTankopediaBundle:Radio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Radio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Radio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Radio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Radio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Radio entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Radio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Radio entity.');
        }

        $editForm = $this->createForm(new RadioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Radio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Radio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Radio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Radio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new RadioType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_radio_edit', array('id' => $id)));
        }

        return $this->render('ImbcTankopediaBundle:Radio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Radio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImbcTankopediaBundle:Radio')->find($id);

            if ( !$entity )
            {
                throw $this->createNotFoundException('Unable to find Radio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tankopedia_radio'));
    }

    /**
     * Creates a form to delete a Radio entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder( array(
            'id' => $id
        ))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
