<?php

require_once('db/Teilnehmer.php');
require_once('db/Gender.php');

# Teilnehmer
$teilnehmer = new DB_Teilnehmer;
$teilnehmer->setName('Werner');
$teilnehmer->setHeight(1.71);

$bd = new DateTime('now');
$teilnehmer->setBirthday($bd);

$teilnehmer->print_name();
#echo $teilnehmer->getBirthday()->format('Y-m-d') ."\n";
echo $teilnehmer->getBirthdayAsString() ."\n";

# Gender
$gender = new DB_Gender;
$gender->setName('Frau');

$teilnehmer->setGender($gender);

$gender->print_name();

echo $teilnehmer->getGender()->getName() ."\n";

