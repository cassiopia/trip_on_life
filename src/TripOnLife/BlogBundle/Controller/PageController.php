<?php

namespace TripOnLife\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('TripOnLifeBlogBundle:Page:index.html.twig');
    }

}