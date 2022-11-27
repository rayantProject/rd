<?php
 $host_name = 'localhost';
 $database = 'test';
 $user_name = 'root';
 $password = '';
//$host_name = 'db5010483237.hosting-data.io';
//$database = 'dbs8878831';
//$user_name = 'dbu520988';
//$password = 'XuoeBmne0hb5kv1mY5#ZPF4k2$qN30ajjxe38x1rRK';

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