<?php

namespace TripOnLife\InfoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use TripOnLife\InfoBundle\Entity\Enquiry;
use TripOnLife\InfoBundle\Form\EnquiryType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {

    }


    public function contactAction(Request $request)
    {
        $enquiry = new Enquiry();

        $form = $this->createForm(EnquiryType::class, $enquiry);

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('TripOnLifeInfoBundle_contact'));
            }
        }

        return $this->render('TripOnLifeInfoBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }

}