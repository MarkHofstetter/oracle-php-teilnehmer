<?php

require_once ("bootstrap.php");

$product = $entityManager->getRepository('Product')
           ->findOneBy(array('name' => 'Apfel', 
		                 'pcomment' => 'steirisch'));       # findOneBy ... nur ein Satz wird geliefert

$producttype = $entityManager->getRepository('ProductType')
           ->findOneBy(array('name' => 'Obst'));            # ... producttype ermitteln
		   
print $product->getPcomment() ."\n";

$product->setProductType($producttype);                     # ... producttype für 'Apfel' setzen
#$product->setProductTypeByName('Obst');                    

$entityManager->persist($product);
$entityManager->flush();