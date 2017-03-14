<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Complejo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Complejo controller.
 *
 * @Route("admin/complejo")
 */
class ComplejoController extends Controller
{
    /**
     * Lists all complejo entities.
     *
     * @Route("/", name="complejo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $complejos = $em->getRepository('AppBundle:Complejo')->findAll();

        return $this->render('complejo/index.html.twig', array(
            'complejos' => $complejos,
        ));
    }

    /**
     * Creates a new complejo entity.
     *
     * @Route("/new", name="complejo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $complejo = new Complejo();
        $form = $this->createForm('AppBundle\Form\ComplejoType', $complejo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($complejo);
            $em->flush($complejo);

            return $this->redirectToRoute('complex_show', array('id' => $complejo->getIdComp()));
        }

        return $this->render('complejo/new.html.twig', array(
            'complejo' => $complejo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a complejo entity.
     *
     * @Route("/{id}", name="complejo_show")
     * @Method("GET")
     */
    public function showAction(Complejo $complejo)
    {
        $deleteForm = $this->createDeleteForm($complejo);

        return $this->render('complejo/show.html.twig', array(
            'complejo' => $complejo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing complejo entity.
     *
     * @Route("/{id}/edit", name="complejo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Complejo $complejo)
    {
        $deleteForm = $this->createDeleteForm($complejo);
        $editForm = $this->createForm('AppBundle\Form\ComplejoType', $complejo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('complex_edit', array('id' => $complejo->getIdComp()));
        }

        return $this->render('complejo/edit.html.twig', array(
            'complejo' => $complejo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a complejo entity.
     *
     * @Route("/{id}", name="complejo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Complejo $complejo)
    {
        $form = $this->createDeleteForm($complejo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($complejo);
            $em->flush($complejo);
        }

        return $this->redirectToRoute('complex_index');
    }

    /**
     * Creates a form to delete a complejo entity.
     *
     * @param Complejo $complejo The complejo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Complejo $complejo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('complex_delete', array('id' => $complejo->getIdComp())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
