<?php

namespace TripOnLife\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use TripOnLife\BlogBundle\Entity\Repository;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('TripOnLifeBlogBundle:Page:index.html.twig');
    }

    public function listPostAction($type)
    {
        $em = $this->getDoctrine()->getManager();

        $blogs = $em->getRepository('TripOnLifeBlogBundle:Blog')->getPostsByBlogSectionName($type);

        return $this->render('TripOnLifeBlogBundle:Page:list-post.html.twig', array(
            'blogs' => $blogs
        ));
    }

    public function showPostAction($type, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('TripOnLifeBlogBundle:Blog')->find($id);

        return $this->render('TripOnLifeBlogBundle:Page:show-post.html.twig', array(
            'blog' => $blog
        ));

    }

}