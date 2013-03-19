<?php

namespace SM\LogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        /** @var $logger \Symfony\Bridge\Monolog\Logger */
        $logger = $this->get('logger');
        $logger->info('I just got the logger');
        $logger->error('Here is an error');
        return $this->render('SMLogBundle:Default:index.html.twig', array('name' => $name));
    }
}
