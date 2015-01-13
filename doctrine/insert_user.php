<?php

require_once ("bootstrap.php");

$user = new User();
$user->setName('Werner');
$bdate = DateTime::createFromFormat('Ymd','19580803');
$user->setBirthday($bdate);
$status = $entityManager->getRepository('Status')->findOneBy(array('name' => 'active'));
$user->setStatus($status);

$entityManager->persist($user);


$user = new User();
$user->setName('Birgit');
$user->setBirthday(DateTime::createFromFormat('Ymd','19601125'));
$status = $entityManager->getRepository('Status')->findOneBy(array('name' => 'inactive'));
$user->setStatus($status);
$entityManager->persist($user);

$user = new User();
$user->setName('Mark');
$user->setBirthday(new DateTime("now"));
$status = $entityManager->getRepository('Status')->findOneBy(array('name' => 'active'));
$user->setStatus($status);
$entityManager->persist($user);

$entityManager->flush();