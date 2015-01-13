<?php
use Doctrine\Common\Collections\ArrayCollections;
require_once('DBparent.php');
// model/Product.php
/**
 * @Entity @Table(name="products")
 **/
class Product extends DBparent
{    
    /** @Column(type="string") **/
    protected $name;

	/** @Column(type="string", nullable=true) **/
    protected $pcomment;
	
	/**
	* @ManyToOne(targetEntity="ProductType")
	*/
	protected $ProductType;
#inversedBy="product_types"		
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPcomment()
    {
        return $this->pcomment;
    }

    public function setPcomment($value)
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
