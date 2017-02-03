<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class IndexController extends Controller
{
    /**
     * @Route("/index", name = "homepage")
     **/
    public function indexAction()
    {
        return $this->render('index/index.html.twig', array(

        ));
    }

    /**
     * @Route("index/camp", name= "campeonatosIndex")
     **/

    public function campAction()
    {
        $em = $this->getDoctrine()->getManager();
        $campeonatos = $em->getRepository('AppBundle:Campeonato')->findAll();

        return $this->render('index/campeonatos.html.twig', array(
            'campeonatos' => $campeonatos,
        ));
    }

    /**
     * @Route("index/comp", name= "complejosIndex")
     **/
    public function compAction()
    {
        $em = $this->getDoctrine()->getManager();

        $complejos = $em->getRepository('AppBundle:Complejo')->findAll();

        return $this->render('index/complejos.html.twig', array(
            'complejos' => $complejos,
        ));
    }

    /**
     * Finds and displays a complejo description.
     *
     * @Route("index/comp/decrip_cancha/{id}", name="descripIndex")
     * @Method("GET")
     */
    public function desc_canchaAction($id)
    {
//
//        $descrip = $this->getDoctrine()
//            ->getRepository('AppBundle:Complejo')
//            ->find($id);
//
//
//        if (!$descrip) {
//            throw $this->createNotFoundException(
//                'No product found for id '.$id
//            );
//        }
        $em = $this->getDoctrine()->getEntityManager();
        $db = $em->getConnection();
        $query = "SELECT * FROM comp_serv INNER JOIN complejo ON comp_serv.id_comp = complejo.id_comp INNER JOIN servicio ON comp_serv.id_serv = servicio.id_serv WHERE comp_serv.id_comp = ".$id;
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $descrip = $stmt->fetchAll();

        foreach ($descrip as $descri){
            $array = $descri;
        }
        return $this->render('index/desc_cancha.html.twig', array(
            'descri' => $array
    ));

    }
    
    
    /**
     * @Route("index/contact", name= "contactIndex")
     **/
    public function contactAction()
    {
        return $this->render('index/contact.html.twig', array(

        ));
    }
    
    /**
     * @Route("index/descrip_cancha/calendar", name= "calendar")
     **/
    public function calendarAction()
    {
        return $this->render('index/calendario.html.twig', array(

        ));
    }


    /**
     * @Route("index/descrip_cancha/calendar/email", name= "send_email")
     **/
    public function emailAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Team tarjetaroja.com')
            ->setFrom('santycabj95@gmail.com')
            ->setTo('sandronicolasm@gmail.com')
            ->setBody(
                $this->renderView(
                    'index/email.html.twig',
                    array()
                ),
                'text/html'
            )
        ;
        $this->get('mailer')->send($message);

        return $this->render(':index:email_send.html.twig',array());
    }
}