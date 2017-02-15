<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cancha;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Cancha controller.
 *
 * @Route("admin/cancha")
 */
class CanchaController extends Controller
{
    /**
     * Lists all cancha entities.
     *
     * @Route("/", name="cancha_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $canchas = $em->getRepository('AppBundle:Cancha')->findAll();

        return $this->render('cancha/index.html.twig', array(
            'canchas' => $canchas,
        ));
    }

    /**
     * Creates a new cancha entity.
     *
     * @Route("/new", name="cancha_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $cancha = new Cancha();
        $form = $this->createForm('AppBundle\Form\CanchaType', $cancha);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cancha);
            $em->flush($cancha);

            return $this->redirectToRoute('cancha_show', array('id' => $cancha->getIdCanch()));
        }

        return $this->render('cancha/new.html.twig', array(
            'cancha' => $cancha,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cancha entity.
     *
     * @Route("/{id}", name="cancha_show")
     * @Method("GET")
     */
    public function showAction(Cancha $cancha)
    {
        $deleteForm = $this->createDeleteForm($cancha);

        return $this->render('cancha/show.html.twig', array(
            'cancha' => $cancha,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cancha entity.
     *
     * @Route("/{id}/edit", name="cancha_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cancha $cancha)
    {
        $deleteForm = $this->createDeleteForm($cancha);
        $editForm = $this->createForm('AppBundle\Form\CanchaType', $cancha);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cancha_edit', array('id' => $cancha->getIdCanch()));
        }

        return $this->render('cancha/edit.html.twig', array(
            'cancha' => $cancha,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cancha entity.
     *
     * @Route("/{id}", name="cancha_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Cancha $cancha)
    {
        $form = $this->createDeleteForm($cancha);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cancha);
            $em->flush($cancha);
        }

        return $this->redirectToRoute('cancha_index');
    }

    /**
     * Creates a form to delete a cancha entity.
     *
     * @param Cancha $cancha The cancha entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cancha $cancha)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cancha_delete', array('id' => $cancha->getIdCanch())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
