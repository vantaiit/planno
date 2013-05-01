<?php

namespace Plan\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Plan\EntityBundle\Entity\User;

/**
 * Relationships
 *
 * @ORM\Table()
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
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint")
     */
    private $userId;

    /**
     * @var integer
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
     * set user
     *
     * @param \Plan\EntityBundle\Entity\User $user
     * @return Relationships
    */
    public function setUser(\Plan\EntityBundle\Entity\User $user = null){
        $this->user = $user;

        return $this;
    }

}
