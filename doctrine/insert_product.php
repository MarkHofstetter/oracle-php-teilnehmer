<?php

require_once('bootstrap.php');

$product = new Product();

$product->setName('Apfel');
$product->setPcomment('steirisch');

$entityManager->persist($product);
$entityManager->flush();