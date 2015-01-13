<?php

require_once('DBParent.php');
// model/Interest.php
/**
 * @Entity @Table(name="interests")
 **/

class Interest extends DBParent
{
   
     /** @Column(type="string") **/
    protected $name;

    /**
     * @ManyToMany(targetEntity="User", mappedBy="interests")
     **/
    private $users;

    public function __construct() {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

}
