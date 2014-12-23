<?php
require_once('DB/Teilnehmer.php');
require_once('DB/Gender.php');

//new macht neues Objekt oder Instanz
$teilnehmer=new DB_Teilnehmer;



$teilnehmer->setName('Mark');
$teilnehmer->setHeight(174);


$bd=new DateTime('now');
$teilnehmer->setBirthday($bd);

echo$teilnehmer->getBirthdayString()."\n";
$teilnehmer->print_name();


$gender=new DB_Gender;
$gender->setName('Frau');
$gender->print_name();
$teilnehmer->setGender($gender);
$gender->print_name();

echo$teilnehmer->getGender()->getName()."\n";