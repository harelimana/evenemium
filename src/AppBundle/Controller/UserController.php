<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/addUser", name="addUser")
     */
    public function addUserAction()
    {
        $user = new Users;
        $form = $this->createForm(UsersType::class, $user);
        /*   ->add('nom', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
           ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
           ->add('Sauver', SubmitType::class, array('attr' => array('label' => 'Create Todo','class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
           ->getForm(); */
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addflash('notice', 'User ajouté');
            return $this->redirectToroute('retrieveAllUsers');
        }
        return $this->render('AppBundle:User:add_user.html.twig', array('form'=>$form->createView()
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
     * @Route("/retrieveAll",name="retrieveAllUsers")
     */
    public function retrieveAllAction()
    {
        $users = $this->getDoctrine()->getRepository('AppBundle:Users')->findAll();
        return $this->render('AppBundle:User:retrieve_all.html.twig', array('users'=>$users
            
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
