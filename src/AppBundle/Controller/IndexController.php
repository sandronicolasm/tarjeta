<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class IndexController extends Controller
{
    /**
     * @Route("{_locale}/index", name = "homepage")
     **/
//    public function indexAction(Request $request)
//    {
//
//        return $this->render('index/index.html.twig', array(
//            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
//            'locale' => $request->getLocale(),
//        ));
//    }

    public function indexAction(Request $request) {

        return $this->render('index/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
            'locale' => $request->getLocale(),
        ));
    }

    /**
     * @Route("{_locale}/index/camp", name= "campeonatosIndex")
     **/

    public function campAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $campeonatos = $em->getRepository('AppBundle:Campeonato')->findAll();


        return $this->render('index/campeonatos.html.twig', array(
            'campeonatos' => $campeonatos,
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
            'locale' => $request->getLocale(),
        ));
    }

    /**
     * @Route("{_locale}/index/comp", name= "complejosIndex")
     **/
    public function compAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $complejos = $em->getRepository('AppBundle:Complejo')->findAll();

        return $this->render('index/complejos.html.twig', array(
            'complejos' => $complejos,
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
            'locale' => $request->getLocale(),
        ));
    }

    /**
     * Finds and displays a complejo description.
     *
     * @Route("{_locale}/index/comp/decrip_cancha/{id}", name="descripIndex")
     * @Method("GET")
     */
    public function desc_canchaAction($id, Request $request)
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
            'descri' => $array,
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
            'locale' => $request->getLocale(),
    ));

    }
    
    
    /**
     * @Route("{_locale}/index/contact", name= "contactIndex")
     **/
    public function contactAction(Request $request)
    {
        return $this->render('index/contact.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
            'locale' => $request->getLocale(),
        ));
    }
    
    /**
     * @Route("{_locale}/index/descrip_cancha/calendar", name= "calendar")
     **/
    public function calendarAction(Request $request)
    {
        return $this->render('index/calendario.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
            'locale' => $request->getLocale(),
        ));
    }


    /**
     * @Route("{_locale}/index/descrip_cancha/calendar/email", name= "send_email")
     **/
    public function emailAction(Request $request)
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

        return $this->render(':index:email_send.html.twig',array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
            'locale' => $request->getLocale(),
        ));
    }
}