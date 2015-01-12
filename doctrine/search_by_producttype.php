<?php

require_once ("bootstrap.php");

$producttype = $entityManager->getRepository('ProductType')
               ->findOneBy(array('name' => 'Obst',));

foreach ($producttype->getProducts() as $product) {
  print $product->getName() ."\n";
}