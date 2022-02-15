<?php

$dsn = 'mysql:dbname=projetmontageordinateur;port=3306;host=127.0.0.1';
$user = 'root'; 
$password = '63202';
try {
   
    $connection = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    exit('Connexion échouée : ' . $e->getMessage());
}

