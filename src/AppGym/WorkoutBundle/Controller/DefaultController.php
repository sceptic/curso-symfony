<?php

namespace AppGym\WorkoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
}
