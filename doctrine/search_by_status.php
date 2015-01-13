<?php

require_once ("bootstrap.php");

$status = $entityManager->getRepository('Status')
               ->findOneBy(array('name' => 'active',));

foreach ($status->getUsers() as $user) {
  print $user->getName() ."\n";
  
#$user = $entityManager->getRepository('User')
#               ->findOneBy(array('name' => 'Werner',));

printf("%s %s\n", $user->getBirthday()->format('d.m.Y')."\n",
                  $user->getStatus()->getName());		
}