<?php

$server_name = 'mysql';
$username = 'tutorial';
$password = 'secret';
$db_name = 'tutorialdb';

try {
    $connection = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successfully done!";
} catch (PDOException $e) {
    echo "Connection failed: ".$e->getMessage();
}

?>