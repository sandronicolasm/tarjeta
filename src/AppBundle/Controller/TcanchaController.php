<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tcancha;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tcancha controller.
 *
 * @Route("admin/super/tcancha")
 */
class TcanchaController extends Controller
{
    /**
     * Lists all tcancha entities.
     *
     * @Route("/", name="admin_tcancha_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tcanchas = $em->getRepository('AppBundle:Tcancha')->findAll();

        return $this->render('tcancha/index.html.twig', array(
            'tcanchas' => $tcanchas,
        ));
    }

    /**
     * Creates a new tcancha entity.
     *
     * @Route("/new", name="admin_tcancha_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tcancha = new Tcancha();
        $form = $this->createForm('AppBundle\Form\TcanchaType', $tcancha);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tcancha);
            $em->flush($tcancha);

            return $this->redirectToRoute('type_courtes_show', array('id' => $tcancha->getIdTipo()));
        }

        return $this->render('tcancha/new.html.twig', array(
            'tcancha' => $tcancha,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tcancha entity.
     *
     * @Route("/{id}", name="admin_tcancha_show")
     * @Method("GET")
     */
    public function showAction(Tcancha $tcancha)
    {
        $deleteForm = $this->createDeleteForm($tcancha);

        return $this->render('tcancha/show.html.twig', array(
            'tcancha' => $tcancha,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tcancha entity.
     *
     * @Route("/{id}/edit", name="admin_tcancha_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tcancha $tcancha)
    {
        $deleteForm = $this->createDeleteForm($tcancha);
        $editForm = $this->createForm('AppBundle\Form\TcanchaType', $tcancha);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_courtes_edit', array('id' => $tcancha->getIdTipo()));
        }

        return $this->render('tcancha/edit.html.twig', array(
            'tcancha' => $tcancha,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tcancha entity.
     *
     * @Route("/{id}", name="admin_tcancha_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tcancha $tcancha)
    {
        $form = $this->createDeleteForm($tcancha);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tcancha);
            $em->flush($tcancha);
        }

        return $this->redirectToRoute('type_courtes_index');
    }

    /**
     * Creates a form to delete a tcancha entity.
     *
     * @param Tcancha $tcancha The tcancha entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tcancha $tcancha)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('type_courtes_delete', array('id' => $tcancha->getIdTipo())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
