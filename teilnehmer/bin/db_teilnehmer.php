<?php

require_once('db/Teilnehmer.php');
require_once('db/Gender.php');

# Teilnehmer
$teilnehmer = new DB_Teilnehmer;

$teilnehmer->readByName('MARK');

echo $teilnehmer->getBirthdayAsString() ."\n";
echo $teilnehmer->getBirthday()->format('Y')."\n";

echo $teilnehmer->getHeight() ."\n";
echo $teilnehmer->getGender()->getName() ."\n";


