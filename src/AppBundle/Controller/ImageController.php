<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ImageController extends Controller
{
    /**
     * @Route("/addImage")
     */
    public function addImageAction()
    {
        return $this->render('AppBundle:Image:add_image.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/findImage")
     */
    public function findImageAction()
    {
        return $this->render('AppBundle:Image:find_image.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/retrieveAllImage")
     */
    public function retrieveAllImageAction()
    {
        return $this->render('AppBundle:Image:retrieve_all_image.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteImage")
     */
    public function deleteImageAction()
    {
        return $this->render('AppBundle:Image:delete_image.html.twig', array(
            // ...
        ));
    }

}
