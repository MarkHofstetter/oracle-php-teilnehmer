<?php

require_once ("bootstrap.php");

$user = $entityManager->getRepository('User')
           ->findOneBy(array('name' => 'Werner'));      # findOneBy ... nur ein Satz wird geliefert

$status = $entityManager->getRepository('Status')
           ->findOneBy(array('name' => 'active'));      # ... status ermitteln
		   
#print $user->getBirthday() ."\n";

$user->setStatus($status);                              # ... status für 'Werner' setzen
#$user->setStatusByName('active');                    

$entityManager->persist($user);


$user = $entityManager->getRepository('User')
           ->findOneBy(array('name' => 'Birgit'));      # findOneBy ... nur ein Satz wird geliefert

$status = $entityManager->getRepository('Status')
           ->findOneBy(array('name' => 'inactive'));      # ... status ermitteln
		   
#print $user->getBirthday() ."\n";

$user->setStatus($status);                              # ... status für 'Werner' setzen
#$user->setStatusByName('active');                    

$entityManager->persist($user);


$user = $entityManager->getRepository('User')
           ->findOneBy(array('name' => 'Mark'));      # findOneBy ... nur ein Satz wird geliefert

$status = $entityManager->getRepository('Status')
           ->findOneBy(array('name' => 'active'));      # ... status ermitteln
		   
#print $user->getBirthday() ."\n";

$user->setStatus($status);                              # ... status für 'Werner' setzen
#$user->setStatusByName('active');                    

$entityManager->persist($user);

$entityManager->flush();