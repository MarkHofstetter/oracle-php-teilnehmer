<?php

require_once('DB/Teilnehmer.php');
require_once('DB/Gender.php');

$teilnehmer = new DB_Teilnehmer;

$teilnehmer->setName('Mark');
$teilnehmer->setHeight(174);

$bd = new DateTime('now');
$teilnehmer->setBirthday($bd);

echo $teilnehmer->getBirthday()->format('Y-m-d') ."\n";
echo $teilnehmer->getBirthdayAsString()."\n";

$teilnehmer->print_name();

$gender = new DB_Gender;

$gender->setName('Frau'); 
$teilnehmer->setGender($gender);
$gender->print_name();

echo $teilnehmer->getGender()->getName() ."\n";

