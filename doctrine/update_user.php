<?php

require_once('bootstrap.php');

$user = $entityManager->getRepository('User')
            ->findOneBy(array('name' => 'Claus', 
			                 ));
			
$status = $entityManager->getRepository('Status')
            ->findOneBy(array('name' => 'aktiv', ));
			
print $user->getStatus() ."\n";			

$user->setStatus($status);

$entityManager->persist($user);
$entityManager->flush();