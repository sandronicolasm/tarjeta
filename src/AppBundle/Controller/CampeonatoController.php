<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Campeonato;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Campeonato controller.
 */
class CampeonatoController extends Controller
{
    /**
     * Lists all campeonato entities.
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

            return $this->redirectToRoute('champ_show', array('id' => $campeonato->getIdCamp()));
        }

        return $this->render('campeonato/new.html.twig', array(
            'campeonato' => $campeonato,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a campeonato entity.
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
     */
    public function editAction(Request $request, Campeonato $campeonato)
    {
        $deleteForm = $this->createDeleteForm($campeonato);
        $editForm = $this->createForm('AppBundle\Form\CampeonatoType', $campeonato);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('champ_edit', array('id' => $campeonato->getIdCamp()));
        }

        return $this->render('campeonato/edit.html.twig', array(
            'campeonato' => $campeonato,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a campeonato entity.

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

        return $this->redirectToRoute('champ_index');
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
            ->setAction($this->generateUrl('champ_delete', array('id' => $campeonato->getIdCamp())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
