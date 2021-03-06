<?php

namespace Pes\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pes\FrontBundle\Entity\Competition;
use Pes\FrontBundle\Form\CompetitionType;

/**
 * Competition controller.
 *
 */
class CompetitionController extends Controller
{

    /**
     * Lists all Competition entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PesFrontBundle:Competition')->findAll();

        return $this->render('PesFrontBundle:Competition:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Competition entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Competition();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pes_competition_show', array('id' => $entity->getId())));
        }

		\Doctrine\Common\Util\Debug::dump($form);
		var_dump($form);

        return $this->render('PesFrontBundle:Competition:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Competition entity.
    *
    * @param Competition $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Competition $entity)
    {
        $form = $this->createForm(new CompetitionType(), $entity, array(
            'action' => $this->generateUrl('pes_competition_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Competition entity.
     *
     */
    public function newAction()
    {
        $entity = new Competition();
        $form   = $this->createCreateForm($entity);

        return $this->render('PesFrontBundle:Competition:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Competition entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PesFrontBundle:Competition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Competition entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PesFrontBundle:Competition:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Competition entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PesFrontBundle:Competition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Competition entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PesFrontBundle:Competition:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Competition entity.
    *
    * @param Competition $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Competition $entity)
    {
        $form = $this->createForm(new CompetitionType(), $entity, array(
            'action' => $this->generateUrl('competition_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Competition entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PesFrontBundle:Competition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Competition entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('competition_edit', array('id' => $id)));
        }

        return $this->render('PesFrontBundle:Competition:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Competition entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PesFrontBundle:Competition')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Competition entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('competition'));
    }

    /**
     * Creates a form to delete a Competition entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('competition_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
