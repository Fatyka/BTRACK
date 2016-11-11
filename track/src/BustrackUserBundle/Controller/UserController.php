<?php

namespace BustrackUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('BustrackUserBundle:User:index.html.twig');
    }
    public function trouverAction()
    {
        return $this->render('BustrackUserBundle:User:trouver.html.twig');
    }
    public function oublierAction()
    {
        return $this->render('BustrackUserBundle:User:oublier.html.twig');
    }
}
