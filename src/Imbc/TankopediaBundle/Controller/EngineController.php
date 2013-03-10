<?php

namespace Imbc\TankopediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbc\TankopediaBundle\Entity\Engine;
use Imbc\TankopediaBundle\Form\Type\EngineType;

/**
 * Engine controller.
 *
 */
class EngineController extends Controller
{
    /**
     * Lists all Engine entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImbcTankopediaBundle:Engine')->findAll();

        return $this->render('ImbcTankopediaBundle:Engine:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Engine entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Engine();
        $form = $this->createForm(new EngineType(), $entity);
        $form->bind($request);

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_engine_show', array('id' => $entity->getId())));
        }

        return $this->render('ImbcTankopediaBundle:Engine:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Engine entity.
     *
     */
    public function newAction()
    {
        $entity = new Engine();
        $form   = $this->createForm(new EngineType(), $entity);

        return $this->render('ImbcTankopediaBundle:Engine:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Engine entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Engine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Engine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Engine:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Engine entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Engine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Engine entity.');
        }

        $editForm = $this->createForm(new EngineType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbcTankopediaBundle:Engine:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Engine entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbcTankopediaBundle:Engine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Engine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EngineType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tankopedia_engine_edit', array('id' => $id)));
        }

        return $this->render('ImbcTankopediaBundle:Engine:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Engine entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImbcTankopediaBundle:Engine')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Engine entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tankopedia_engine'));
    }

    /**
     * Creates a form to delete a Engine entity by id.
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
