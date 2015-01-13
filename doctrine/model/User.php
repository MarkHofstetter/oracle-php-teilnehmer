<?php

require_once('DBParent.php');
// model/User.php
/**
 * @Entity @Table(name="users")
 **/

class User extends DBParent
{
   
     /** @Column(type="string") **/
    protected $name;

     /** @Column(type="datetime", nullable=true) **/
    protected $birthday;

	/**
     * @ManyToOne(targetEntity="Status")
    **/
	# ,inversedBy="status"      ...    
	protected $Status;

    /**
     * @ManyToMany(targetEntity="Interest", inversedBy="users")
     * @JoinTable(name="users_interests")
     **/
    private $interests;

    public function __construct() {
        $this->interests = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($value)
    {
        $this->birthday = $value;
    }

    public function getStatus()
    {
        return $this->Status;
    }

    public function setStatus($value)
    {
        $this->Status = $value;
    }

    public function getInterests()
    {
        return $this->interests;
    }

    public function setInterests($value)
    {
        $this->interests = $value;
    }

    public function addInterest(Interest $interest)
    {
        $interest->addUser($this); // synchronously updating inverse side
        $this->interests[] = $interest;
    }

}
