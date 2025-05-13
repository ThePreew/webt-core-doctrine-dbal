<?php
require_once "../vendor/autoload.php"; // Composer Autoloader für Doctrine DBAL

use Doctrine\DBAL\DriverManager;

$connectionParams = array(
    'dbname' => 'usarsps_championship',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

$conn = DriverManager::getConnection($connectionParams);
?>
