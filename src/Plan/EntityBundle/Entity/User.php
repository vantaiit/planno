<?php

namespace Plan\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Plan\EntityBundle\Entity\UserRepository")
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=25)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=25)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="gender", type="smallint")
     */
    private $gender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=100)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="livesin", type="string", length=255)
     */
    private $livesin;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=255)
     */
    private $locale;

    /**
     * @var string
     *
     * @ORM\Column(name="languages", type="string", length=50)
     */
    private $languages;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255)
     */
    private $avatar;

    /**
     * @var integer
     *
     * @ORM\Column(name="notes_count", type="integer")
     */
    private $notesCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="friend_count", type="integer")
     */
    private $friendCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="diskusage", type="integer")
     */
    private $diskusage;

    /**
     * @var string
     *
     * @ORM\Column(name="job_title", type="string", length=100)
     */
    private $jobTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="enabled", type="smallint")
     */
    private $enabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime")
     */
    private $lastLogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $createAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="fb_like_count", type="integer")
     */
    private $fbLikeCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="fb_share_count", type="integer")
     */
    private $fbShareCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="level_id", type="integer")
     */
    private $levelId;

    /**
     * @var integer
     *
     * @ORM\Column(name="percent", type="smallint")
     */
    private $percent;


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
     * @return User
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
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    
        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set livesin
     *
     * @param string $livesin
     * @return User
     */
    public function setLivesin($livesin)
    {
        $this->livesin = $livesin;
    
        return $this;
    }

    /**
     * Get livesin
     *
     * @return string 
     */
    public function getLivesin()
    {
        return $this->livesin;
    }

    /**
     * Set locale
     *
     * @param string $locale
     * @return User
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    
        return $this;
    }

    /**
     * Get locale
     *
     * @return string 
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set languages
     *
     * @param string $languages
     * @return User
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;
    
        return $this;
    }

    /**
     * Get languages
     *
     * @return string 
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    
        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set notesCount
     *
     * @param integer $notesCount
     * @return User
     */
    public function setNotesCount($notesCount)
    {
        $this->notesCount = $notesCount;
    
        return $this;
    }

    /**
     * Get notesCount
     *
     * @return integer 
     */
    public function getNotesCount()
    {
        return $this->notesCount;
    }

    /**
     * Set friendCount
     *
     * @param integer $friendCount
     * @return User
     */
    public function setFriendCount($friendCount)
    {
        $this->friendCount = $friendCount;
    
        return $this;
    }

    /**
     * Get friendCount
     *
     * @return integer 
     */
    public function getFriendCount()
    {
        return $this->friendCount;
    }

    /**
     * Set diskusage
     *
     * @param integer $diskusage
     * @return User
     */
    public function setDiskusage($diskusage)
    {
        $this->diskusage = $diskusage;
    
        return $this;
    }

    /**
     * Get diskusage
     *
     * @return integer 
     */
    public function getDiskusage()
    {
        return $this->diskusage;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     * @return User
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    
        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string 
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     * @return User
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
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     * @return User
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
    
        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return User
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;
    
        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime 
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return User
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
     * Set fbLikeCount
     *
     * @param integer $fbLikeCount
     * @return User
     */
    public function setFbLikeCount($fbLikeCount)
    {
        $this->fbLikeCount = $fbLikeCount;
    
        return $this;
    }

    /**
     * Get fbLikeCount
     *
     * @return integer 
     */
    public function getFbLikeCount()
    {
        return $this->fbLikeCount;
    }

    /**
     * Set fbShareCount
     *
     * @param integer $fbShareCount
     * @return User
     */
    public function setFbShareCount($fbShareCount)
    {
        $this->fbShareCount = $fbShareCount;
    
        return $this;
    }

    /**
     * Get fbShareCount
     *
     * @return integer 
     */
    public function getFbShareCount()
    {
        return $this->fbShareCount;
    }

    /**
     * Set levelId
     *
     * @param integer $levelId
     * @return User
     */
    public function setLevelId($levelId)
    {
        $this->levelId = $levelId;
    
        return $this;
    }

    /**
     * Get levelId
     *
     * @return integer 
     */
    public function getLevelId()
    {
        return $this->levelId;
    }

    /**
     * Set percent
     *
     * @param integer $percent
     * @return User
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
    
        return $this;
    }

    /**
     * Get percent
     *
     * @return integer 
     */
    public function getPercent()
    {
        return $this->percent;
    }
}
