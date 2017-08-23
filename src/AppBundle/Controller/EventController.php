<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EventController extends Controller
{
    /**
     * @Route("/addEvent")
     */
    public function addEventAction()
    {
        return $this->render('AppBundle:Event:add_event.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/findEvent")
     */
    public function findEventAction()
    {
        return $this->render('AppBundle:Event:find_event.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/retrieveAllEvent")
     */
    public function retrieveAllEventAction()
    {
        return $this->render('AppBundle:Event:retrieve_all_event.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteEvent")
     */
    public function deleteEventAction()
    {
        return $this->render('AppBundle:Event:delete_event.html.twig', array(
            // ...
        ));
    }

}
