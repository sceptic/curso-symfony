<?php

namespace AppGym\WorkoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/gym/{name}")
     * @Route("/gimnasio/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }


    /**
     * @Route("/respuesta/")
     */
    public function responseAction()
    {
        return new Response("OK!!!");
    }

    /**
     * @Route("/json/")
     */
    public function jsonAction()
    {
    	$res = new Response(json_encode(array("name"=>"Adrián")));
        $res->headers->set("Content-Type" , "application/json; charset=UTF-8");
        $res->headers->set("Charset" , "UTF8");
        return $res;
    }

    
}
