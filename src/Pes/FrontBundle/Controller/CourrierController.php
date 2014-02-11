<?php

namespace Pes\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// a retirer
use Symfony\Component\HttpFoundation\Response;

use Pes\FrontBundle\Entity\Courrier;
use Pes\FrontBundle\Form\CourrierType;
use Doctrine\Common\Util\Debug;

/**
 * Courrier controller.
 *
 */
class CourrierController extends Controller
{

    /**
     * Lists all Courrier entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $courriers = $em->getRepository('PesFrontBundle:Courrier')->findAll();

        return $this->render('PesFrontBundle:Courrier:index.html.twig', array(
            'courriers' => $courriers,
        ));
    }
    /**
     * Creates a new Courrier entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Courrier();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

			$this->get('session')->getFlashBag()->add('info', 'Votre message a bien été envoyé');

			return $this->redirect($this->generateUrl('pes_courrier_new'));
        }
		return $this->render('PesFrontBundle:Courrier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Courrier entity.
    *
    * @param Courrier $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Courrier $entity)
    {
        $form = $this->createForm(new CourrierType(), $entity, array(
            'action' => $this->generateUrl('pes_courrier_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Courrier entity.
     *
     */
    public function newAction()
    {
        $entity = new Courrier();
        $form   = $this->createCreateForm($entity);

        return $this->render('PesFrontBundle:Courrier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Courrier entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PesFrontBundle:Courrier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Courrier entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PesFrontBundle:Courrier:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
		));
    }

    /**
     * Displays a form to edit an existing Courrier entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PesFrontBundle:Courrier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Courrier entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PesFrontBundle:Courrier:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Courrier entity.
    *
    * @param Courrier $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Courrier $entity)
    {
        $form = $this->createForm(new CourrierType(), $entity, array(
            'action' => $this->generateUrl('courrier_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Courrier entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PesFrontBundle:Courrier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Courrier entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('courrier_edit', array('id' => $id)));
        }

        return $this->render('PesFrontBundle:Courrier:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Courrier entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PesFrontBundle:Courrier')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Courrier entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('courrier'));
    }

    /**
     * Creates a form to delete a Courrier entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('courrier_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
