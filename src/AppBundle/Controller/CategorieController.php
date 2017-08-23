<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categories;
use AppBundle\Form\CategoriesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{
    /**
     * @Route("/addCategorie")
     */
    public function addCategorieAction(Request $request)
    {
        $categorie = new Categories;
        $form = $this->createForm(CategoriesType::class, $categorie);
         /*   ->add('nom', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('Sauver', SubmitType::class, array('attr' => array('label' => 'Create Todo','class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm(); */
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            $this->addflash('notice', 'Catégorie ajoutée');
            return $this->redirectToroute('retrieveAllCategorie');
        }
        return $this->render('AppBundle:Categorie:add_categorie.html.twig', array('form' => $form->createView()
            // ...
        ));
    }

    /**
     * @Route("/findCategorie")
     */
    public function findCategorieAction()
    {
        return $this->render('AppBundle:Categorie:find_categorie.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/retrieveAllCategorie",name="retrieveAllCategorie")
     */
    public function retrieveAllCategorieAction()
    
    {
        $categorie = $this->getDoctrine()->getRepository('AppBundle:Categories')->findAll();
        return $this->render('AppBundle:Categorie:retrieve_all_categorie.html.twig', array('categorie' => $categorie
            // ...
        ));
    }

    /**
     * @Route("/deleteCategorie")
     */
    public function deleteCategorieAction()
    {
        return $this->render('AppBundle:Categorie:delete_categorie.html.twig', array(
            // ...
        ));
    }

}
