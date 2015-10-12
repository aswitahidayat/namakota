<?php

namespace NamaKota\ProvinsiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use NamaKota\ProvinsiBundle\Entity\Provinsi;
use NamaKota\ProvinsiBundle\Form\ProvinsiType;

/**
 * Provinsi controller.
 *
 * @Route("/provinsi")
 */
class ProvinsiController extends Controller
{

    /**
     * Lists all Provinsi entities.
     *
     * @Route("/", name="provinsi")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NamaKotaProvinsiBundle:Provinsi')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Provinsi entity.
     *
     * @Route("/", name="provinsi_create")
     * @Method("POST")
     * @Template("NamaKotaProvinsiBundle:Provinsi:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Provinsi();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('provinsi_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Provinsi entity.
     *
     * @param Provinsi $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Provinsi $entity)
    {
        $form = $this->createForm(new ProvinsiType(), $entity, array(
            'action' => $this->generateUrl('provinsi_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Provinsi entity.
     *
     * @Route("/new", name="provinsi_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Provinsi();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Provinsi entity.
     *
     * @Route("/{id}", name="provinsi_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NamaKotaProvinsiBundle:Provinsi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Provinsi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Provinsi entity.
     *
     * @Route("/{id}/edit", name="provinsi_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NamaKotaProvinsiBundle:Provinsi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Provinsi entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Provinsi entity.
    *
    * @param Provinsi $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Provinsi $entity)
    {
        $form = $this->createForm(new ProvinsiType(), $entity, array(
            'action' => $this->generateUrl('provinsi_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Provinsi entity.
     *
     * @Route("/{id}", name="provinsi_update")
     * @Method("PUT")
     * @Template("NamaKotaProvinsiBundle:Provinsi:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NamaKotaProvinsiBundle:Provinsi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Provinsi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('provinsi_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Provinsi entity.
     *
     * @Route("/{id}", name="provinsi_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NamaKotaProvinsiBundle:Provinsi')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Provinsi entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('provinsi'));
    }

    /**
     * Creates a form to delete a Provinsi entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('provinsi_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
