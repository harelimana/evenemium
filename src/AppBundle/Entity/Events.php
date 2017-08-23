<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventsRepository")
 */
class Events
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="datetime")
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="datetime")
     */
    private $fin;
    
    
    /**
     * @var Categories
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categories", inversedBy="events")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id", onDelete="cascade")
     */
    private $categories;
    
    /**
     * @var Images
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Images", cascade={"persist"})
     */
    private $images;
    
    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Users", mappedBy="events")
     *
     */
    private $users;
    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Events
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Events
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Events
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Events
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }
    
    /**
     * @return \AppBundle\Entity\Categories
     */
    public function getCategories()
    {
        return $this->categories;
    }
    
    /**
     * @param \AppBundle\Entity\Categories $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }
    
    /**
     * @return \AppBundle\Entity\Images
     */
    public function getImages()
    {
        return $this->images;
    }
    
    /**
     * @param \AppBundle\Entity\Images $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }
    
    /**
     * @return \AppBundle\Entity\ArrayCollection
     */
    public function getUsers()
    {
        return $this->users;
    }
    
    /**
     * @param \AppBundle\Entity\ArrayCollection $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }
    
    
}

