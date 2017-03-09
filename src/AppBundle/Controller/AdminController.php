<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    public function adminAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        $userId = $user->getId();

        die();

    }

    public function superAction()
    {
        $user = $this->getUser();

        $userId = $user->getId();

        $em = $this->getDoctrine()->getManager();



        $lista_repo = $em->getRepository("AppBundle:Complejo");

        $lista_comp = $lista_repo->findBy(array("idUser"=>$userId));

        //return $this->render(':Admin:page_content.html.twig', array(
        //    'compl' => $arreglo,


        var_dump($lista_comp);

        die();

//        return $this->render(':Admin:page_content_super.html.twig', array(
//

    }


}
