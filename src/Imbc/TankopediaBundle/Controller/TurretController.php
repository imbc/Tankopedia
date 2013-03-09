<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\Turret;
use Imbc\TankopediaBundle\Form\TurretType;

/**
 * Turret controller.
 *
 */
class TurretController extends Controller
{
    /**
     * Lists all Turret entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImbcTankopediaBundle:Turret')->findAll();

        return $this->render('ImbcTankopediaBundle:Turret:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Turret entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Turret();
        $form = $this->createForm(new TurretType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_turret_show', array('id' => $entity->getId())));
        }

        return $this->render('ImbcTankopediaBundle:Turret:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Turret entity.
     *
     */
    public function newAction()
    {
        $entity = new Turret();
        $form   = $this->createForm(new TurretType(), $entity);

        return $this->render('ImbcTankopediaBundle:Turret:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Turret entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Turret')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Turret entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Turret:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Turret entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Turret')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Turret entity.');
        }

        $editForm = $this->createForm(new TurretType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Turret:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Turret entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Turret')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Turret entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TurretType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_turret_edit', array('id' => $id)));
        }

        return $this->render('ImbcTankopediaBundle:Turret:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Turret entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImbcTankopediaBundle:Turret')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Turret entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tankopedia_turret'));
    }

    /**
     * Creates a form to delete a Turret entity by id.
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
