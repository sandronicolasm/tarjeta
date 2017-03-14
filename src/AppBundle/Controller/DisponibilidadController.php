<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Disponibilidad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Disponibilidad controller.
 *
 */
class DisponibilidadController extends Controller
{
    /**
     * Lists all disponibilidad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $disponibilidads = $em->getRepository('AppBundle:Disponibilidad')->findAll();

        return $this->render('disponibilidad/index.html.twig', array(
            'disponibilidads' => $disponibilidads,
        ));
    }

    /**
     * Creates a new disponibilidad entity.
     *
     */
    public function newAction(Request $request)
    {
        $disponibilidad = new Disponibilidad();
        $form = $this->createForm('AppBundle\Form\DisponibilidadType', $disponibilidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($disponibilidad);
            $em->flush($disponibilidad);

            return $this->redirectToRoute('disponibilidad_show', array('id' => $disponibilidad->getId()));
        }

        return $this->render('disponibilidad/new.html.twig', array(
            'disponibilidad' => $disponibilidad,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a disponibilidad entity.
     *
     */
    public function showAction(Disponibilidad $disponibilidad)
    {
        $deleteForm = $this->createDeleteForm($disponibilidad);

        return $this->render('disponibilidad/show.html.twig', array(
            'disponibilidad' => $disponibilidad,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing disponibilidad entity.
     *
     */
    public function editAction(Request $request, Disponibilidad $disponibilidad)
    {
        $deleteForm = $this->createDeleteForm($disponibilidad);
        $editForm = $this->createForm('AppBundle\Form\DisponibilidadType', $disponibilidad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('disponibilidad_edit', array('id' => $disponibilidad->getId()));
        }

        return $this->render('disponibilidad/edit.html.twig', array(
            'disponibilidad' => $disponibilidad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a disponibilidad entity.
     *
     */
    public function deleteAction(Request $request, Disponibilidad $disponibilidad)
    {
        $form = $this->createDeleteForm($disponibilidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($disponibilidad);
            $em->flush($disponibilidad);
        }

        return $this->redirectToRoute('disponibilidad_index');
    }

    /**
     * Creates a form to delete a disponibilidad entity.
     *
     * @param Disponibilidad $disponibilidad The disponibilidad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Disponibilidad $disponibilidad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('disponibilidad_delete', array('id' => $disponibilidad->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
