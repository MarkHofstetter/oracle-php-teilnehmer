<?php
use Doctrine\Common\Collections\ArrayCollections;
require_once('DBParent.php');
// model/Status.php
/**
 * @Entity @Table(name="status")
 **/

class Status extends DBParent
{  
     /** @Column(type="string") **/
    protected $name;

	/**
     * @OneToMany(targetEntity="User", mappedBy="Status")
    **/
	protected $users;

	/*
	public function __construct()
    {
        return $this->users = new ArrayCollection();
    }
    */
	
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
	
    public function getUsers()
    {
        return $this->users;
    }

    public function setUsers($value)
    {
        $this->users = $value;
    }

}
