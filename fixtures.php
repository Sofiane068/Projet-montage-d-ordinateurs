<?php

require_once 'includes/db.php';

$sql = "INSERT IGNORE INTO utilisateur (adresseMail,motDePasse) VALUES ('monteur@cldl.com','titi')";

$count = $connection->exec($sql);

$piece= "INSERT IGNORE INTO pieces (nom,prix,categorie,marque,quantite,nbDeModeleCreer,dateAjout,compatiblePortable) VALUES ('ASUS PRIME B450',88.64,'carte mère','ASUS',10,5,2020-04-26,0),('Gigabyte B450 Aorus Elite',94.99,'carte mère','Gigabyte',6,3,2021-01-04,0),('MSI B450 Gaming Plus Max',87.79,'carte mère','MSI',3,2,2021-06-25,1),('ROG STRIX B550-F GAMING',201.95,'carte mère','ROG',5,3,2021-11-10,0)";

$count = $connection->exec($piece);