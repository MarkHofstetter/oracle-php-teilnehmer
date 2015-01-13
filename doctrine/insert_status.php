<?php

require_once('bootstrap.php');

$sts = array(
  'aktiv',
  'inaktiv'
);

foreach ($sts as $st) {
  $status = new Status();
  $status->setName($st);
  $entityManager->persist($status);
}  

$entityManager->flush();