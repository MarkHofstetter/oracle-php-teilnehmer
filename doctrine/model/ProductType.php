<?php
# use Doctrine\Common\Collections\ArrayCollections;
require_once('DBparent.php');
/**
 * @Entity @Table(name="product_types")
 **/
class ProductType extends DBparent
{
    /** @Column(type="string") **/
    protected $name;
	
    /**
	* @OneToMany(targetEntity="Product", mappedBy="ProductType")
	*/
	protected $products;
		
	
	public function __construct() {
	#  $this->products = new ArrayCollection();
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
