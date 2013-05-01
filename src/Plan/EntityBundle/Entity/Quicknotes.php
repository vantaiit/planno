<?php

namespace Plan\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Plan\EntityBundle\Entity\user;

/**
 * Quicknotes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Plan\EntityBundle\Entity\QuicknotesRepository")
 */
class Quicknotes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="enabled", type="smallint")
     */
    private $enabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="sort", type="string", length=10)
     */
    private $sort;

    /**
     * @var integer
     *
     * @ORM\Column(name="location", type="integer")
     */
    private $location;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reminder", type="boolean")
     */
    private $reminder;

    /**
     *
     * @ORM\Column(name="user_id", type="bigint")
    */
    private $userId;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="QuickNotes")
     * @ORM\JoinColumns(name="user_id", referencedColumnName="id", onDelete="cascade")
    */
    private $user;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Quicknotes
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Quicknotes
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     * @return Quicknotes
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Quicknotes
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set sort
     *
     * @param string $sort
     * @return Quicknotes
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    
        return $this;
    }

    /**
     * Get sort
     *
     * @return string 
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set location
     *
     * @param integer $location
     * @return Quicknotes
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return integer 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set reminder
     *
     * @param boolean $reminder
     * @return Quicknotes
     */
    public function setReminder($reminder)
    {
        $this->reminder = $reminder;
    
        return $this;
    }

    /**
     * Get reminder
     *
     * @return boolean 
     */
    public function getReminder()
    {
        return $this->reminder;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return QuickNotes
    */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \plan\EntityBundle\Entity\User
    */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set user
     *
     * @paran \Plan\EntityBundle\Entity\User $user
     * @return Quicknotes
    */
    public function setUser(\Plan\EntityBundle\Entity\User $user = null)
    {
        $this->user= $user;

        return $this;
    }

    /**
     * Get user
     *
     * return \Plan\EntityBundle\Entity\User
    */
    public function getUser()
    {
        return $this->user;
    }
}
