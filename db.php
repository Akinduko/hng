<?php

require_once 'config.php';

try {
    $conn = new PDO("mysql:host=". DB_HOST. ";port=" . DB_PORT. "; dbname=". DB_DATABASE. , DB_USER, DB_PASSWORD);
    // echo "Connected to ". DB_DATABASE . " successfully.</br>";
} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}