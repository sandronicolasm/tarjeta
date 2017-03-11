<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Campeonato;
use Symfony\Component\HttpFoundation\Request;

class ChampController extends Controller
{
    public function indexAction($id)
    {
        if ($id == null) {
            echo "No existe Ningun Campeonato Cargado";

        } else {
            $em = $this->getDoctrine()->getManager();

            $db = $em->getConnection();
            $query = "SELECT * FROM campeonato INNER JOIN complejo ON complejo.id_comp= campeonato.id_comp WHERE complejo.id_comp = " . $id;
            $stmt = $db->prepare($query);
            $params = array();
            $stmt->execute($params);
            $descrip = $stmt->fetchAll();

        }
        return $this->render(':Champ:index.html.twig', array(
            'campeonatos' => $descrip,
            'id_complejo' => $id
                )
        );
    }

    /**
     * Creates a new campeonato entity.
     */
    public function newAction(Request $request, $id)
    {
        $campeonato = new Campeonato();
        $campeonato->setIdComp($id);

        $form = $this->createForm('AppBundle\Form\ChampType', $campeonato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();


            $em->persist($campeonato);
            $em->flush($campeonato);

            return $this->redirectToRoute('index_champ_show', array('id' => $campeonato->getIdCamp()));
        }

        return $this->render(':Champ:new.html.twig', array(
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

        return $this->render(':Champ:show.html.twig', array(
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

            return $this->redirectToRoute('index_champ_edit', array('id' => $campeonato->getIdCamp()));
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
            ->getForm();
    }
}
