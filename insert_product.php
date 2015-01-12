<?php

require_once ("bootstrap.php");

$product = new Product();
$product->setName('Banane');

$entityManager->persist($product);
$entityManager->flush();