<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Hora;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Hora controller.
 *
 * @Route("admin/super/hora")
 */
class HoraController extends Controller
{
    /**
     * Lists all hora entities.
     *
     * @Route("/", name="super_hora_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $horas = $em->getRepository('AppBundle:Hora')->findAll();

        return $this->render('hora/index.html.twig', array(
            'horas' => $horas,
        ));
    }

    /**
     * Creates a new hora entity.
     *
     * @Route("/new", name="super_hora_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $hora = new Hora();
        $form = $this->createForm('AppBundle\Form\HoraType', $hora);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hora);
            $em->flush($hora);

            return $this->redirectToRoute('super_hora_show', array('id' => $hora->getId()));
        }

        return $this->render('hora/new.html.twig', array(
            'hora' => $hora,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a hora entity.
     *
     * @Route("/{id}", name="super_hora_show")
     * @Method("GET")
     */
    public function showAction(Hora $hora)
    {
        $deleteForm = $this->createDeleteForm($hora);

        return $this->render('hora/show.html.twig', array(
            'hora' => $hora,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing hora entity.
     *
     * @Route("/{id}/edit", name="super_hora_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Hora $hora)
    {
        $deleteForm = $this->createDeleteForm($hora);
        $editForm = $this->createForm('AppBundle\Form\HoraType', $hora);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('super_hora_edit', array('id' => $hora->getId()));
        }

        return $this->render('hora/edit.html.twig', array(
            'hora' => $hora,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a hora entity.
     *
     * @Route("/{id}", name="super_hora_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Hora $hora)
    {
        $form = $this->createDeleteForm($hora);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($hora);
            $em->flush($hora);
        }

        return $this->redirectToRoute('super_hora_index');
    }

    /**
     * Creates a form to delete a hora entity.
     *
     * @param Hora $hora The hora entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Hora $hora)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('super_hora_delete', array('id' => $hora->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
