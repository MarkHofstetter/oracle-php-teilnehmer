<?php

require_once('DBParent.php');
// model/Product.php
/**
 * @Entity @Table(name="products")
 **/

class Product extends DBParent
{
   
     /** @Column(type="string") **/
    protected $name;

     /** @Column(type="string", nullable=true) **/
    protected $pcomment;

	/**
     * @ManyToOne(targetEntity="ProductType", inversedBy="productTypes")
    **/
	protected $ProductType;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPComment()
    {
        return $this->pcomment;
    }

    public function setPComment($value)
    {
        $this->pcomment = $value;
    }

    public function getProductType()
    {
        return $this->ProductType;
    }

    public function setProductType($value)
    {
        $this->ProductType = $value;
    }

}
