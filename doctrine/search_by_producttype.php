<?php

require_once('bootstrap.php');
		
$producttype = $entityManager->getRepository('ProductType')
            ->findOneBy(array('name' => 'Obst', ));
						
foreach ($producttype->getProducts() as $product) {
  print $product->getName() ."\n";
}


$product = $entityManager->getRepository('Product')
            ->findOneBy(array('name' => 'Apfel', ));
			
printf("%s %s\n", $product->getPcomment(), 
                  $product->getProductType()->getName());
				  


