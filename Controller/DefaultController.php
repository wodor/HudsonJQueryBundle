<?php

namespace Hudson\JQueryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{

    public function indexAction($name)
    {
        return $this->render('HudsonJQueryBundle:Default:index.html.twig', array('name' => $name));
    }
}
