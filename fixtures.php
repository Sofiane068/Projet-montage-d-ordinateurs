<?php

require_once 'includes/db.php';

$sql = "INSERT INTO utilisateur (adresseMail,motDePasse) VALUES ('concepteur@cdlc.com','toto')";

$count = $connection->exec($sql);
