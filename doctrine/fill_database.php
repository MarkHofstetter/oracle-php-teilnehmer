<?php

require_once ("bootstrap.php");

$pts = array (
    'Obst',
	'Fleisch',
	'Gemüse',
	);

foreach ($pts as $pt) {
  $productType = new ProductType();
  $productType->setName($pt);
  $entityManager->persist($productType);
}	

$entityManager->flush();