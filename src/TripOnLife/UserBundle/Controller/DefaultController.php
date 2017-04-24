<?php

namespace TripOnLife\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TripOnLifeUserBundle:Default:index.html.twig');
    }
}
