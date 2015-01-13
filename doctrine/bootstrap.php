<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

# require_once "vendor/autoload.php";
require_once(__DIR__."/model/Product.php");
require_once(__DIR__."/model/ProductType.php");
require_once(__DIR__."/model/User.php");
require_once(__DIR__."/model/Status.php");
require_once(__DIR__."/model/Interest.php");

require_once("Doctrine\ORM\Tools\Setup.php");

// Create a simple "default" Doctrine ORM configuration for Annotations
Setup::registerAutoloadPEAR();
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/model"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver'   => 'oci8',
    'dbname'   => 'kurs2',
	'user'     => 'wifi',
	'password' => 'wifi',
	'host'     => 'localhost',
	
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
$dbh = $entityManager->getConnection();
$sth =$dbh->prepare("ALTER SESSION SET NLS_DATE_FORMAT='YYYY-MM-DD HH24:MI:SS'");
$sth->execute();
