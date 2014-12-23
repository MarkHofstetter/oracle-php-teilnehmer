<?php
require_once('config.php');
require_once('DB/Teilnehmer.php');
require_once('DB/Gender.php');
$config=new config;
$teilnehmer=new DB_Teilnehmer($config);
$teilnehmer->readByName('Mark');
echo $teilnehmer->getBirthdayString()."\n";
echo $teilnehmer->getBirthday()->format('Y')."\n";
echo $teilnehmer->getHeight()."\n";
echo $teilnehmer->getGender()->getName() ."\n";
