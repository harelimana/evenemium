<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 22.08.17
 * Time: 21:41
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Categories;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixtures implements FixtureInterface
{
    /**
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     * @return \AppBundle\DataFixtures\ORM\Response
     */
    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        Fixtures::load(__DIR__.'/fixtures.yml',$manager);
        $categ = New Categories();
        $categ->setNom('nom'.rand(1,10));
        $categ->setDescription('description'.rand(1,10));
        $em = $this->getDoctrine()->getmanager();
        $em->persist($categ);
        $em->flush();
        return  new Response('<html><body>Catégorie created !</body></html>');
    }
}