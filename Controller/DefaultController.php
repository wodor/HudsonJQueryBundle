<?php

namespace Hudson\JQueryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('HudsonjQueryBundle:Default:index.html.twig', array('name' => $name));
    }
}
