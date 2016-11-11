<?php

namespace BustrackUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BustrackUserBundle:Default:index.html.twig');
    }
}
