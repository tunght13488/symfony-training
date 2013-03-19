<?php

namespace SM\LogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SMLogBundle:Default:index.html.twig', array('name' => $name));
    }
}
