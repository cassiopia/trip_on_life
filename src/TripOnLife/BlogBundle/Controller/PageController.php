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

        $posts = $em->getRepository('TripOnLifeBlogBundle:Post')->getPostsByPostSectionName($type);

        return $this->render('TripOnLifeBlogBundle:Page:list-post.html.twig', array(
            'posts' => $posts
        ));
    }

    public function showPostAction($type, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('TripOnLifeBlogBundle:Post')->find($id);

        $comments = $em->getRepository('TripOnLifeBlogBundle:Comment')->findBy(['post'=> $id]);

        return $this->render('TripOnLifeBlogBundle:Page:show-post.html.twig', array(
            'post' => $post,
            'comments' => $comments
        ));

    }

}