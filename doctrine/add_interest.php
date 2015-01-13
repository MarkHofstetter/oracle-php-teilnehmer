<?php

require_once ("bootstrap.php");

/*
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

$v_interests = array (
    'Arbeit',
	'Kultur',
	'Sport',
	);

foreach ($v_interests as $v_interest) {
  $interest = new Interest();
  $interest->setName($v_interest);
  $entityManager->persist($interest);
}
*/
$user = $entityManager->getRepository('User')
           ->findOneBy(array('name' => 'Werner'));      # findOneBy ... nur ein Satz wird geliefert
		   
$interest1 = new Interest();
$interest1->setName('Arbeit');
$entityManager->persist($interest1);
		   
$user->addInterest($interest1);
$entityManager->persist($user);

$entityManager->flush();