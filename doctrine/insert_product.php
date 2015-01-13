<?php

require_once('bootstrap.php');

$product = new Product();
$product->setName('Apfel');
$product->setPcomment('steirisch');
$entityManager->persist($product);

$product = new Product();
$product->setName('Banane');
$product->setPcomment('gelb');

$entityManager->persist($product);
$entityManager->flush();