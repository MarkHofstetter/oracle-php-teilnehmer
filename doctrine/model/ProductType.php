<?php
use Doctrine\Common\Collections\ArrayCollections;
require_once('DBParent.php');
// model/ProductType.php
/**
 * @Entity @Table(name="productTypes")
 **/

class ProductType extends DBParent
{  
     /** @Column(type="string") **/
    protected $name;

	/**
     * @OneToMany(targetEntity="Product", mappedBy="ProductType")
    **/
	protected $products;

	public function __construct()
    {
        return $this->products = new ArrayCollection();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
	
    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts($value)
    {
        $this->products = $value;
    }

}
