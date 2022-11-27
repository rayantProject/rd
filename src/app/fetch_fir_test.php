<?php
$host_name = 'localhost';
$database = 'test';
$user_name = 'root';
$password = '';
$dbh = null;

try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
} catch (PDOException $e) {
    echo "Erreur!:" . $e->getMessage() . "<br/>";
    die();
}



$artistesStatement = $dbh->prepare('SELECT * FROM artistes');
$artistesStatement->execute();
$artistes = $artistesStatement->fetchAll();





?>