<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/addUser")
     */
    public function addUserAction()
    {
        return $this->render('AppBundle:User:add_user.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/findUser")
     */
    public function findUserAction()
    {
        return $this->render('AppBundle:User:find_user.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/retrieveAll")
     */
    public function retrieveAllAction()
    {
        return $this->render('AppBundle:User:retrieve_all.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteUser")
     */
    public function deleteUserAction()
    {
        return $this->render('AppBundle:User:delete_user.html.twig', array(
            // ...
        ));
    }

}
