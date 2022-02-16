<?php

require_once 'includes/db.php';

$sql = "INSERT INTO utilisateur (adresseMail,motDePasse) VALUES ('concepteur@cldl.com','toto')";

$count = $connection->exec($sql);
