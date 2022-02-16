<?php

require_once 'includes/db.php';

$sql = "INSERT INTO utilisateur (adresseMail,motDePasse) VALUES ('monteur@cldl.com','titi')";

$count = $connection->exec($sql);
