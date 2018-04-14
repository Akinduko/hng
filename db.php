<?php

require_once 'config.php';

try {
    $conn = new PDO('mysql:host=10.11.0.218;dbname=porte;port=3307','porte','3x0du5P@55w0rd');
    // echo "Connected to ". DB_DATABASE . " successfully.</br>";
} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}


