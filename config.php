<?php

/**
 * Configuration for database connection
 *
 */

$host       = "172.30.89.178";
$username   = "raffaele";
$password   = "raffaele";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
