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
    /**
     * Lists all Type entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImbcTankopediaBundle:TankClass')->findAll();

        return $this->render('ImbcTankopediaBundle:TankClass:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Type entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new TankClass();
        $form = $this->createForm(new TankClassType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_class_show', array('id' => $entity->getId())));
        }

        return $this->render('ImbcTankopediaBundle:TankClass:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Type entity.
     *
     */
    public function newAction()
    {
        $entity = new TankClass();
        $form   = $this->createForm(new TankClassType(), $entity);

        return $this->render('ImbcTankopediaBundle:TankClass:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Type entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:TankClass')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Type entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:TankClass:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Type entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:TankClass')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Type entity.');
        }

        $editForm = $this->createForm(new TankClass(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:TankClass:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Type entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:TankClass')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Type entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TankClass(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_class_edit', array('id' => $id)));
        }

        return $this->render('ImbcTankopediaBundle:TankClass:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Type entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImbcTankopediaBundle:TankClass')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Type entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tankopedia_class'));
    }

    /**
     * Creates a form to delete a Type entity by id.
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
