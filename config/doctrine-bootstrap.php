<?php
/**
 * created by zhaoyi at 2017-08-20 21:44
 * made better by you.
 */

require_once __DIR__ . "/../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = true;

$paths = [__DIR__ . "/doctrine"];

// database configuration parameters
$conn = [
    'driver'   => 'oci8',
    'user'     => 'zhaoyi',
    'password' => '123456',
    'host'     => '192.168.56.101',
    'dbname'   => 'XE',
    'charset'  => 'UTF8'
];

// Create a Doctrine ORM configuration for YAML
$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
