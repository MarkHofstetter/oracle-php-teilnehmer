<?php

require('Singleton.php');

$s = new Singleton;
$s->getInstance();
echo $s->x ."\n";

$s1 = new Singleton;
$s1->getInstance();
echo $s1->x ."\n";
