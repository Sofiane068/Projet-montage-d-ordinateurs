<?php

require_once 'includes/db.php';

$connection->exec('SET foreign_key_checks = 0;TRUNCATE pieces; TRUNCATE utilisateur; TRUNCATE concepteur; TRUNCATE monteur; TRUNCATE commentaire; TRUNCATE modele; TRUNCATE alimentation; TRUNCATE carte_graphique; TRUNCATE carte_mere;TRUNCATE clavier;TRUNCATE disque_dur__ssd; TRUNCATE ecran; TRUNCATE memoire_vive;TRUNCATE processeur;  TRUNCATE souris_pad; SET foreign_key_checks = 1;');

$sql = "INSERT INTO utilisateur (adresseMail,motDePasse) VALUES ('monteur@cldl.com','titi'),('concepteur@cldl.com','toto')";

$count = $connection->exec($sql);

$sql = "INSERT INTO monteur (adresseMail) VALUES ('monteur@cldl.com'); INSERT INTO concepteur (adresseMail) VALUES ('concepteur@cldl.com');";

$count = $connection->exec($sql);


$piece = "INSERT INTO pieces (nom,prix,categorie,marque,quantite,nbDeModeleCreer,dateAjout,compatiblePortable_) VALUES 
    ('ASUS PRIME B450',88.64,'carte mère','ASUS',10,5,'2020-04-26',0),
    ('Gigabyte B450 Aorus Elite',94.99,'carte mère','Gigabyte',6,3,'2021-01-04',0),
    ('MSI B450 Gaming Plus Max',87.79,'carte mère','MSI',3,2,'2021-06-25',1),
    ('ROG STRIX B550-F GAMING',201.95,'carte mère','ROG',5,3,'2021-11-10',0),
    ('AMD RYZEN 5',144.99,'processeur','AMD',7,3,'2021-08-11',1),
    ('AMD RYZEN 7',319.99,'processeur','AMD',4,2,'2022-01-11',1),
    ('Intel Core i3',94.96,'processeur','INTEL',2,2,'2020-09-21',1),
    ('Intel Core i5',159.96,'processeur','INTEL',3,1,'2020-11-30',1),
    ('Intel Core i7',457.00,'processeur','INTEL',5,4,'2020-12-15',1),
    ('Mémoire RAM Corsair',42.90,'memoire vive','CORSAIR',7,4,'2021-07-05',0),
    ('Mémoire RAM Crucial',77.00,'memoire vive','CRUCIAL',2,1,'2021-04-04',1),
    ('Mémoire RAM Kingston',234.08,'memoire vive','KINGSTON',5,3,'2021-02-27',0),
    ('Mémoire RAM Novatech',12.39,'memoire vive','NOVATECH',3,3,'2021-01-01',1),
    ('Mémoire RAM Juhor',164.43,'memoire vive','JUHOR',8,2,'2021-06-22',0),
    ('MSI GeForce RTX 3060 Ti',869.99,'carte graphique','NVIDIA',4,2,'2021-03-08',0),
    ('Gigabyte Radeon RX 6500 XT',359.99,'carte graphique','AMD',3,1,'2021-06-12',0),
    ('Gigabyte GeForce RTX 2060',599.99,'carte graphique','NVIDIA',6,3,'2021-01-01',0),
    ('Carte graphique GTX 970M',158.74,'carte graphique','NVIDIA',3,1,'2021-10-02',1),
    ('Carte graphique AMD M92',11.64,'carte graphique','AMD',1,1,'2021-01-23',1),
    ('Clavier ALIENWARE RGB',109.26,'clavier','DELL',5,3,'2020-03-07',0),
    ('Clavier sans fil Gamer Corsair',99.99,'clavier','CORSAIR',3,2,'2021-05-06',1),
    ('Clavier Trust Veza',27.91,'clavier','Trust Veza',4,4,'2021-01-29',1),
    ('Clavier Razer BlackWidow V3',109.99,'clavier','RAZER',2,2,'2021-07-11',0),
    ('Clavier MSI Vigor',34.99,'clavier','MSI',8,2,'2021-01-04',0),
    ('Souris Gaming Logitech G203',26.59,'souris','LOGITECH',6,3,'2021-07-14',1),
    ('Souris Razer Basilisk X ',69.90,'souris','RAZER',4,1,'2021-03-03',1),
    ('Souris Gaming sans fil LOGITEC',167.99,'souris','LOGITEC',3,3,'2021-11-09',1),
    ('Souris Corsair Scimitar ELITE RGB ',69.95,'souris','CORSAIR',6,1,'2021-10-01',1),
    ('Souris Microsoft NGX 00012 Pro',83.46,'souris','MICROSOFT',5,4,'2021-07-12',1),
    ('Ecran PC OPTIX G24C6',189.90,'ecran','MSI',6,3,'2021-08-03',0),
    ('Ecran AOC C27G2ZE Adaptive Sync ',254.99,'ecran','AOC',2,1,'2021-02-07',0),
    ('Ecran PC SAMSUNG ODYSSEY G9 49',1399.00,'ecran','SAMSUNG',5,3,'2021-06-06',0),
    ('Ecran PC Gamer Asus TUF VG247Q1A',199.00,'ecran','ASUS',2,2,'2021-08-21',0),
    ('Ecran ACER Nitro VG270bmipx',198.00,'ecran','ACER',3,2,'2021-01-19',0),
    ('Alimentation Corsair PC VS350',41.95,'alimentation','CORSAIR',3,1,'2021-09-09',0),
    ('Alimentation Thermaltake LitePower 550W',38.99, 'alimentation', 'Thermaltake',2,1,'2021-11-11',0),
    ('Alimentation EVGA 100-W1-0600-K2',56.37, 'alimentation','EVGA',6,3,'2021-04-13',0),
    ('Alimentation Corsair RM650',79.99, 'alimentation','CORSAIR',5,1,'2021-05-01',0),
    ('Alimentation Cooler Master V650',109.99, 'alimentation','COOLER MASTER',4,2,'2021-07-25',0),
    ('Samsung Disque SSD 870 QVO 1To',99.99,'disque dur/ssd','SAMSUNG',4,4,'2021-12-10',0),
    ('SanDisk SSD Plus',78.99, 'disque dur/ssd', 'SanDisk',5,2,'2021-04-21',0),
    ('Crucial 500Go CT500MX500SSD1 SSD',54.99, 'disque dur/ssd','CRUCIAL',3,1,'2021-06-17',0),
    ('Seagate 8To BARRACUDA 3.5',209.99, 'disque dur/ssd','SEAGATE',2,2,'2021-10-03',0),
    ('Toshiba – Disque dur interne',19.99, 'disque dur/ssd','TOSHIBA',4,2,'2021-02-14',0)";

$count = $connection->exec($piece);


$modele = "INSERT INTO modele (pcPortable,nom,description,nombreExemplaire,archive,quantite) VALUES 

(1,'Asus Monster','Le Asus Monster est le fruit de l\'association entre AMD et Asus. Il embarque les processeur et GPU les plus performants d\'AMD dans un châssis qui a fait ses preuves',5,1,20),
(1,'The Asus Prime','Le Asus prime est un véritable concentré de puissance qui donne vie à vos idées',6,1,10),
(0,'Asus C22','Le Asus C22 est l\'exemple même de la perfection',3,0,3),
(0,'Asus X22B','Melangez rapidité et fluidité est obtenez le nouvel Asus X22B',4,1,5),
(0,'Sohafa','On ne le presente plus le Sohafa est le pc parfait pour naviguer sur le web',5,0,7),
(1,'Hafi36','Le pc le plus leger du monde parfait pour voyager',6,0,8),
(1,'Kika','Le pc qui resiste a la chaleur',4,1,4),
(1,'Asus Kitty Kat','Les enfants se l\'arrache voici le nouveau pc Asus Kitty Kat',5,0,6),
(0,'DelRosso','Le DelRosso est petit rapide et puissant',3,1,10)";

$count = $connection->exec($modele);


$commentaire = "INSERT INTO commentaire (dateCommentaire,texte,repondue,adresseMail,idModele_,adresseMail_1) VALUES 
('2021-05-21','Tout est fonctionnel !',0,null,1,'monteur@cldl.com'),
('2021-04-13','Le processeur surchauffe beaucoup trop pour les jeux recents !',1,null,4,'monteur@cldl.com'),
('2021-04-14','Merci pour votre retour, nous allons revoir la conception de ce modèle.',0,'concepteur@cldl.com',1,null),
('2021-08-17','Très puissant, tout les jeux tournent parfaitement en 240 fps constant',0,null,2,'monteur@cldl.com'),
('2021-09-18','Prise en main très agreable, très léger comme prévu rien a redire !',0,null,6,'monteur@cldl.com'),
('2021-07-11','Le pc est actuellement HS, je l ai utilisé en plein soleil',1,null,7,'monteur@cldl.com'),
('2021-07-12','Merci pour votre retour, Actuellement le pc peut resister jusqu à 50 degrès si vous depassez ce seuil cela est normal qu il disfonctionne !',0,'concepteur@cldl.com',1,null),    
('2021-09-21','Jamais vu un pc pareil jai chercher tout les defauts possibles il n en a aucun cest affolant !',0,null,3,'monteur@cldl.com'),
('2021-02-21','Tout est opperationnel !',0,null,8,'monteur@cldl.com')";

$count = $connection->exec($commentaire);
///////////////////////////////////////

$statement = $connection->query("select * from pieces where categorie = 'alimentation'");
$alimentations = $statement->fetchAll();

foreach ($alimentations as $alimentation) {
    $id = $alimentation['idComposant'];
    $sql = "INSERT INTO alimentation (idComposant, puissance) VALUES ($id, 550)";
    $count = $connection->exec($sql);
}




//////////////////////////////

$statement = $connection->query("select * from pieces where categorie = 'carte graphique'");
$carteGraphiques = $statement->fetchAll();

foreach ($carteGraphiques as $carteGraphique) {
    $id = $carteGraphique['idComposant'];
    $sql = "INSERT INTO carte_graphique (idComposant, memoire, chipset) VALUES ($id, 2.5,0)";
    $count = $connection->exec($sql);
}



/////////////////////////////////

$statement = $connection->query("select * from pieces where categorie = 'carte mère'");
$carteMeres = $statement->fetchAll();

foreach ($carteMeres as $carteMere) {
    $id = $carteMere['idComposant'];
    $sql = "INSERT INTO carte_mere (idComposant, socket___chipset, format_) VALUES ($id, 0,'format test')";
    $count = $connection->exec($sql);
}



////////////////////////////////////

$statement = $connection->query("select * from pieces where categorie = 'clavier'");
$claviers = $statement->fetchAll();

foreach ($claviers as $clavier) {
    $id = $clavier['idComposant'];
    $sql = "INSERT INTO clavier (idComposant, sansFil, paveNum, typeTouche ) VALUES ($id, 0,0,'typeTouche test')";
    $count = $connection->exec($sql);
}



/////////////////////////////////////////////

$statement = $connection->query("select * from pieces where categorie = 'disque dur/ssd'");
$disqueDurSsds = $statement->fetchAll();

foreach ($disqueDurSsds as $disqueDurSsd) {
    $id = $disqueDurSsd['idComposant'];
    $sql = "INSERT INTO disque_dur__ssd (idComposant, capacite,ssd) VALUES ($id, 250,0)";
    $count = $connection->exec($sql);
}



////////////////////////////


$statement = $connection->query("select * from pieces where categorie = 'ecran'");
$ecrans = $statement->fetchAll();

foreach ($ecrans as $ecran) {
    $id = $ecran['idComposant'];
    $sql = "INSERT INTO ecran (idComposant, taille ) VALUES ($id, 24)";
    $count = $connection->exec($sql);
}



/////////////////////////////////////

$statement = $connection->query("select * from pieces where categorie = 'memoire vive'");
$memoirevives = $statement->fetchAll();

foreach ($memoirevives as $memoirevive) {
    $id = $memoirevive['idComposant'];
    $sql = "INSERT INTO memoire_vive (idComposant,capacite,nombre_de_barrettes,type__frequence___norme_memoire) VALUES ($id, 2.4,2,2.7)";
    $count = $connection->exec($sql);
}


/////////////////////

$statement = $connection->query("select * from pieces where categorie = 'processeur'");
$processeurs = $statement->fetchAll();

foreach ($processeurs as $processeur) {
    $id = $processeur['idComposant'];
    $sql = "INSERT INTO processeur (idComposant,nombre_de_coeur,chipsets_compatibles,frequence_CPU_) VALUES ($id, 2.5, 0,2.5)";
    $count = $connection->exec($sql);
}



////////////////////////////

$statement = $connection->query("select * from pieces where categorie = 'souris'");
$sourisPads = $statement->fetchAll();

foreach ($sourisPads as $sourisPad) {
    $id = $sourisPad['idComposant'];
    $sql = "INSERT INTO souris_pad (idComposant,sansFil,nbTouche) VALUES ($id, 0,26)";
    $count = $connection->exec($sql);
}

