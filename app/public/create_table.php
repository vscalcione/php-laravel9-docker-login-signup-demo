<?php

$server_name = 'mysql';
$username = 'tutorial';
$password = 'secret';
$db_name = 'tutorialdb';

try {
    $connection = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE my_guest(
        id          INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname   VARCHAR(30) NOT NULL,
        lastname    VARCHAR(30) NOT NULL,
        email       VARCHAR(30) NOT NULL,
        reg_date    TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
    )";

    if($connection->query($sql)) {
        echo "Table my_guest created successfully";
    } else {
        echo "Error creating table: ".$connection->error;
    }
} catch(PDOException $e) {
    echo "General Error: ".$e->getMessage();
    die();
}

?>