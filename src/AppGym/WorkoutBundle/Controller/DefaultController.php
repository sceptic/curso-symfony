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
        return array('name' => "XXXX".$name);
    }


    /**
     * @Route("/respuesta/")
     */
    public function responseAction()
    {
        return new Response("Adrián!!!");
    }

    /**
     * @Route("/json/")
     */
    public function jsonAction()
    {
    	$res = new Response(json_encode(array("name"=>"Adrián", "apellidos" =>"M.F", "profesion"=>"desempleado/programador web")));
        $res->headers->set("Content-Type" , "application/json");
        $res->setCharset("UTF8");
        return $res;
    }

    
}
