<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 */
class Users
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
     * @ORM\Column(name="username", type="string", length=128)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="profile_picture", type="string", length=45)
     */
    private $profilePicture;
    
    
    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Events", inversedBy="users")
     * @ORM\JoinTable(name="event_has_user")
     */
    private $events;
    
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
     * Set username
     *
     * @param string $username
     *
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set profilePicture
     *
     * @param string $profilePicture
     *
     * @return Users
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;

        return $this;
    }

    /**
     * Get profilePicture
     *
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }
    
    /**
     * @return \AppBundle\Entity\ArrayCollection
     */
    public function getEvents()
    {
        return $this->events;
    }
    
    /**
     * @param \AppBundle\Entity\ArrayCollection $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }
    
    
}

