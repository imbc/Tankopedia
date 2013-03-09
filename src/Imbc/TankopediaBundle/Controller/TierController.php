<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\Tier;
use Imbc\TankopediaBundle\Form\TierType;

/**
 * Tier controller.
 *
 */
class TierController extends Controller
{
    /**
     * Lists all Tier entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImbcTankopediaBundle:Tier')->findAll();

        return $this->render('ImbcTankopediaBundle:Tier:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Tier entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Tier();
        $form = $this->createForm(new TierType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_tier_show', array('id' => $entity->getId())));
        }

        return $this->render('ImbcTankopediaBundle:Tier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Tier entity.
     *
     */
    public function newAction()
    {
        $entity = new Tier();
        $form   = $this->createForm(new TierType(), $entity);

        return $this->render('ImbcTankopediaBundle:Tier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tier entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Tier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tier entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Tier:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tier entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Tier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tier entity.');
        }

        $editForm = $this->createForm(new TierType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Tier:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Tier entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Tier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tier entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TierType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_tier_edit', array('id' => $id)));
        }

        return $this->render('ImbcTankopediaBundle:Tier:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tier entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImbcTankopediaBundle:Tier')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tier entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tankopedia_tier'));
    }

    /**
     * Creates a form to delete a Tier entity by id.
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
