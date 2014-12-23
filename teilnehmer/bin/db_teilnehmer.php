<?php

require_once('Config.php');
require_once('db/Teilnehmer.php');
require_once('db/Gender.php');


$config = new Config;

# Teilnehmer
$teilnehmer = new DB_Teilnehmer($config);

$teilnehmer->readByName('MARK');

echo $teilnehmer->getBirthdayAsString() ."\n";
echo $teilnehmer->getBirthday()->format('Y')."\n";

echo $teilnehmer->getHeight() ."\n";
echo $teilnehmer->getGender()->getName() ."\n";


