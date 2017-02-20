<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Complejo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{

    public function adminAction()
    {
        return $this->render(':Admin:page_content.html.twig', array(

        ));
    }

    public function superAction()
    {
        return $this->render(':Admin:page_content_super.html.twig', array(

        ));
    }


}
