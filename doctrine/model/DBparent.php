<?php

abstract class DBparent 
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;
	
    public function getId()
    {
        return $this->id;
    }

}	