<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Complejo;

class AdminController extends Controller
{

    public function adminAction()
    {
        $user = $this->getUser();

        $userId = $user->getId();

        $em = $this->getDoctrine()->getManager();

//        $em = $this->getDoctrine()->getRepository('AppBundle:Complejo')->findBy(array('idUser' => $userId));

        $db = $em->getConnection();
        $query = "SELECT * FROM complejo INNER JOIN fos_user ON complejo.id_user = fos_user.id WHERE complejo.id_user = ".$userId;
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $descrip = $stmt->fetchAll();

        foreach ($descrip as $lista_comp){
            $array = $lista_comp;
        }


        return $this->render(':Admin:page_content.html.twig', array(
            'lista_compl' => $array)
        );

    }

    public function superAction()
    {
        $em = $this->getDoctrine()->getManager();

        return $this->render(':Admin:page_content_super.html.twig', array(

            )

        );


    }


}
