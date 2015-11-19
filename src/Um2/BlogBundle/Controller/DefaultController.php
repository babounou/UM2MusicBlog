<?php

namespace Um2\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Um2BlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
