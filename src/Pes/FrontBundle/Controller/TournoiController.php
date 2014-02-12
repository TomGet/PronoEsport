<?php

namespace Pes\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pes\FrontBundle\Entity\Tournoi;
use Pes\FrontBundle\Form\TournoiType;

/**
 * Tournoi controller.
 *
 */
class TournoiController extends Controller
{

    /**
     * Lists all Tournoi entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PesFrontBundle:Tournoi')->findAll();

        return $this->render('PesFrontBundle:Tournoi:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Tournoi entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Tournoi();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pes_tournoi_show', array('id' => $entity->getId())));
        }

        return $this->render('PesFrontBundle:Tournoi:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Tournoi entity.
    *
    * @param Tournoi $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Tournoi $entity)
    {
        $form = $this->createForm(new TournoiType(), $entity, array(
            'action' => $this->generateUrl('pes_tournoi_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tournoi entity.
     *
     */
    public function newAction()
    {
        $entity = new Tournoi();
        $form   = $this->createCreateForm($entity);

        return $this->render('PesFrontBundle:Tournoi:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tournoi entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PesFrontBundle:Tournoi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tournoi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PesFrontBundle:Tournoi:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tournoi entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PesFrontBundle:Tournoi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tournoi entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PesFrontBundle:Tournoi:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tournoi entity.
    *
    * @param Tournoi $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Tournoi $entity)
    {
        $form = $this->createForm(new TournoiType(), $entity, array(
            'action' => $this->generateUrl('pes_tournoi_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tournoi entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PesFrontBundle:Tournoi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tournoi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('pes_tournoi_edit', array('id' => $id)));
        }

        return $this->render('PesFrontBundle:Tournoi:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tournoi entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PesFrontBundle:Tournoi')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tournoi entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pes_tournoi'));
    }

    /**
     * Creates a form to delete a Tournoi entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pes_tournoi_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
