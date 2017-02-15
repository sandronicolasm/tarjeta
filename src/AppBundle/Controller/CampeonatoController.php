<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Campeonato;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Campeonato controller.
 *
 * @Route("admin/campeonato")
 */
class CampeonatoController extends Controller
{
    /**
     * Lists all campeonato entities.
     *
     * @Route("/", name="campeonato_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $campeonatos = $em->getRepository('AppBundle:Campeonato')->findAll();

        return $this->render('campeonato/index.html.twig', array(
            'campeonatos' => $campeonatos,
        ));
    }

    /**
     * Creates a new campeonato entity.
     *
     * @Route("/new", name="campeonato_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $campeonato = new Campeonato();
        $form = $this->createForm('AppBundle\Form\CampeonatoType', $campeonato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($campeonato);
            $em->flush($campeonato);

            return $this->redirectToRoute('campeonato_show', array('id' => $campeonato->getIdCamp()));
        }

        return $this->render('campeonato/new.html.twig', array(
            'campeonato' => $campeonato,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a campeonato entity.
     *
     * @Route("/{id}", name="campeonato_show")
     * @Method("GET")
     */
    public function showAction(Campeonato $campeonato)
    {
        $deleteForm = $this->createDeleteForm($campeonato);

        return $this->render('campeonato/show.html.twig', array(
            'campeonato' => $campeonato,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing campeonato entity.
     *
     * @Route("/{id}/edit", name="campeonato_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Campeonato $campeonato)
    {
        $deleteForm = $this->createDeleteForm($campeonato);
        $editForm = $this->createForm('AppBundle\Form\CampeonatoType', $campeonato);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('campeonato_edit', array('id' => $campeonato->getIdCamp()));
        }

        return $this->render('campeonato/edit.html.twig', array(
            'campeonato' => $campeonato,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a campeonato entity.
     *
     * @Route("/{id}", name="campeonato_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Campeonato $campeonato)
    {
        $form = $this->createDeleteForm($campeonato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($campeonato);
            $em->flush($campeonato);
        }

        return $this->redirectToRoute('campeonato_index');
    }

    /**
     * Creates a form to delete a campeonato entity.
     *
     * @param Campeonato $campeonato The campeonato entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Campeonato $campeonato)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('campeonato_delete', array('id' => $campeonato->getIdCamp())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
