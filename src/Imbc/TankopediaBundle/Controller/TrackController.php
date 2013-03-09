<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\Track;
use Imbc\TankopediaBundle\Form\TrackType;

/**
 * Track controller.
 *
 */
class TrackController extends Controller
{
    /**
     * Lists all Track entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImbcTankopediaBundle:Track')->findAll();

        return $this->render('ImbcTankopediaBundle:Track:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Track entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Track();
        $form = $this->createForm(new TrackType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_track_show', array('id' => $entity->getId())));
        }

        return $this->render('ImbcTankopediaBundle:Track:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Track entity.
     *
     */
    public function newAction()
    {
        $entity = new Track();
        $form   = $this->createForm(new TrackType(), $entity);

        return $this->render('ImbcTankopediaBundle:Track:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Track entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Track')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Track entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Track:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Track entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Track')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Track entity.');
        }

        $editForm = $this->createForm(new TrackType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Track:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Track entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Track')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Track entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TrackType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_track_edit', array('id' => $id)));
        }

        return $this->render('ImbcTankopediaBundle:Track:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Track entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImbcTankopediaBundle:Track')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Track entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tankopedia_track'));
    }

    /**
     * Creates a form to delete a Track entity by id.
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
