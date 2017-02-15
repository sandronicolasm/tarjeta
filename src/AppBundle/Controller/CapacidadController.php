<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Capacidad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Capacidad controller.
 *
 * @Route("admin/super/capacidad")
 */
class CapacidadController extends Controller
{
    /**
     * Lists all capacidad entities.
     *
     * @Route("/", name="super_capacidad_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $capacidads = $em->getRepository('AppBundle:Capacidad')->findAll();

        return $this->render('capacidad/index.html.twig', array(
            'capacidads' => $capacidads,
        ));
    }

    /**
     * Creates a new capacidad entity.
     *
     * @Route("/new", name="super_capacidad_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $capacidad = new Capacidad();
        $form = $this->createForm('AppBundle\Form\CapacidadType', $capacidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($capacidad);
            $em->flush($capacidad);

            return $this->redirectToRoute('super_capacidad_show', array('id' => $capacidad->getId()));
        }

        return $this->render('capacidad/new.html.twig', array(
            'capacidad' => $capacidad,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a capacidad entity.
     *
     * @Route("/{id}", name="super_capacidad_show")
     * @Method("GET")
     */
    public function showAction(Capacidad $capacidad)
    {
        $deleteForm = $this->createDeleteForm($capacidad);

        return $this->render('capacidad/show.html.twig', array(
            'capacidad' => $capacidad,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing capacidad entity.
     *
     * @Route("/{id}/edit", name="super_capacidad_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Capacidad $capacidad)
    {
        $deleteForm = $this->createDeleteForm($capacidad);
        $editForm = $this->createForm('AppBundle\Form\CapacidadType', $capacidad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('super_capacidad_edit', array('id' => $capacidad->getId()));
        }

        return $this->render('capacidad/edit.html.twig', array(
            'capacidad' => $capacidad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a capacidad entity.
     *
     * @Route("/{id}", name="super_capacidad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Capacidad $capacidad)
    {
        $form = $this->createDeleteForm($capacidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($capacidad);
            $em->flush($capacidad);
        }

        return $this->redirectToRoute('super_capacidad_index');
    }

    /**
     * Creates a form to delete a capacidad entity.
     *
     * @param Capacidad $capacidad The capacidad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Capacidad $capacidad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('super_capacidad_delete', array('id' => $capacidad->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
