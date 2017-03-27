<?php

namespace TripOnLife\PhotoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('TripOnLifePhotoBundle:Page:index.html.twig');
    }

}