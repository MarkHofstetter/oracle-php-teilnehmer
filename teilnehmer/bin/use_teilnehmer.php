<?php
require_once('DB/Teilnehmer.php');
require_once('DB/Gender.php');
$teilnehmer=new DB_Teilnehmer;
$teilnehmer->name='Mark';
$teilnehmer->height=174;
$teilnehmer->print_name();
$gender=new DB_Gender;
$gender->name='Frau';
$gender->print_name();