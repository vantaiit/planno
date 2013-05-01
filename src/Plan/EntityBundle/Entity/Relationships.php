<?php

namespace Plan\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Plan\EntityBundle\Entity\User;

/**
 * Relationships
 *
 * @ORM\Table(name="relationships", uniqueConstraints={@ORM\uniqueConstraint(columns={"user_id", "friend_user_id"})})
 * @ORM\Entity(repositoryClass="Plan\EntityBundle\Entity\RelationshipsRepository")
 */
class Relationships
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="user_id", type="bigint")
     */
    private $userId;

    /**
     *
     * @ORM\Column(name="friend_user_id", type="bigint")
     */
    private $friendUserId;

    /**
     * @var integer $status
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="relation_name", type="string", length=50)
     */
    private $relationName;


    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="friends")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="cascade")
     */
    private $user;
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="friendsWithMe")
     * @ORM\JoinColumn(name="friend_user_id", referencedColumnName="id", onDelete="cascade")
     */
    private $friend;

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
     * Set userId
     *
     * @param integer $userId
     * @return Relationships
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set friendUserId
     *
     * @param integer $friendUserId
     * @return Relationships
     */
    public function setFriendUserId($friendUserId)
    {
        $this->friendUserId = $friendUserId;
    
        return $this;
    }

    /**
     * Get friendUserId
     *
     * @return integer 
     */
    public function getFriendUserId()
    {
        return $this->friendUserId;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Relationships
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Relationships
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
     * Set relationName
     *
     * @param string $relationName
     * @return Relationships
     */
    public function setRelationName($relationName)
    {
        $this->relationName = $relationName;
    
        return $this;
    }

    /**
     * Get relationName
     *
     * @return string 
     */
    public function getRelationName()
    {
        return $this->relationName;
    }

    /**
     * Set user
     *
     * @param \Plan\EntityBundle\Entity\User $user
     * @return Relationships
     */
    public function setUser(\Plan\EntityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Plan\EntityBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set friend
     *
     * @param \Plan\EntityBundle\Entity\User $friend
     * @return Relationships
     */
    public function setFriend(\Plan\EntityBundle\Entity\User $friend = null)
    {
        $this->friend = $friend;

        return $this;
    }

    /**
     * Get friend
     *
     * @return \Plan\EntityBundle\Entity\User
     */
    public function getFriend()
    {
        return $this->friend;
    }
}
