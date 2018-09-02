<?php

/**
 * Configuration for database connection
 *
 */

$host       = "10.159.143.107";
$username   = "root";
$password   = "root";
$dbname     = "test";
$port		= "13306";
$dsn        = "mysql:host=$host;port=$port;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );