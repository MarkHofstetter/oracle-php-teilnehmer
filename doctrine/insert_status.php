<?php

require_once ("bootstrap.php");

$status = new Status();
$status->setName('active');
$entityManager->persist($status);

$status = new Status();
$status->setName('inactive');
$entityManager->persist($status);

$entityManager->flush();