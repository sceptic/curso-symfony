<?php

namespace My\RecipesBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class RecipeController extends Controller
{
    public function listAction($page)
    {
    	//return $this->redirect($this->generateUrl('recipes_home'));
        return $this->render('MyRecipesBundle:Recipe:list.html.twig', array('page' => "Lista ".$page));
    }


    public function showAction($recipe)
    {
        return $this->render('MyRecipesBundle:Recipe:recipe.html.twig', array('recipe' => "Muestra ".$recipe));
    }


   

    public function setsessionAction(Request $req)
    {
    	$session = $req->getSession();
    	$session->set('nombre', 'Adrian MF');

    }



    public function getsession(Request $req)
    {
    	$session = $req->getSession();
    	$session->set('nombre', 'Adrian MF');
    }



}
