<?php

require_once('bootstrap.php');

$product = $entityManager->getRepository('Product')
            ->findOneBy(array('name' => 'Banane', 
			                 ));
			
$producttype = $entityManager->getRepository('ProductType')
            ->findOneBy(array('name' => 'Obst', ));
			
print $product->getPcomment() ."\n";			

$product->setProductType($producttype);
# $product->setProductTypeByName('Obst');

$entityManager->persist($product);
$entityManager->flush();