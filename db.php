<?php

require_once 'config.php';

try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=hng;port=3306','root','4k1nduk0');
    // echo "Connected to ". DB_DATABASE . " successfully.</br>";
} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}


