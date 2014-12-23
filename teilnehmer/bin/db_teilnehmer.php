<?php


require_once('Config.php');
require_once('DB/Teilnehmer.php');
require_once('DB/Gender.php');

$config = new Config;

$teilnehmer = new DB_Teilnehmer($config);

$teilnehmer->readByName('Mark');

echo $teilnehmer->getBirthdayAsString()."\n";
echo $teilnehmer->getBirthday()->format('Y')."\n";
echo $teilnehmer->getHeight() ."\n";
echo $teilnehmer->getGender()->getName() ."\n";



