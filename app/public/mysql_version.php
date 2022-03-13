<?php

$username = 'tutorial';
$password = 'secret';

$pdo = new PDO('mysql:dbname=tutorialdb;host=mysql', $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');
$row = $query->fetch();
echo 'MySQL version: '.$row['Value'];

?>