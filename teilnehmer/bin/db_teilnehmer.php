<?php

require_once('DB/Teilnehmer.php');
require_once('DB/Gender.php');

$teilnehmer = new DB_Teilnehmer;

$teilnehmer->readByName('Mark');

echo $teilnehmer->getBirthdayAsString()."\n";
echo $teilnehmer->getBirthday()->format('Y')."\n";
echo $teilnehmer->getHeight() ."\n";
echo $teilnehmer->getGender()->getName() ."\n";



