<?php

require_once('bootstrap.php');

$user = new User();
$user->setName('Claus');
$user->setBirthday(DateTime::createFromFormat('Ymd','19720924'));
$entityManager->persist($user);

$entityManager->flush();