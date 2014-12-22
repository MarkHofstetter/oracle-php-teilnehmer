<?php

require_once('db/Teilnehmer.php');
require_once('db/Gender.php');

# Teilnehmer
$teilnehmer = new DB_Teilnehmer;
$teilnehmer->name = 'Werner';
$teilnehmer-> height = 1.71;

$teilnehmer->print_name();

# Gender
$gender = new DB_Gender;
$gender->name  = 'Frau';

$gender->print_name();

