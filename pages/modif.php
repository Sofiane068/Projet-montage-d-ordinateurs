<?php

$sth = $connection->prepare("SELECT * FROM modele where idModele_= :id ");

$sth->setFetchMode(PDO::FETCH_CLASS, Modele::class);

$sth->execute([
    ':id' => $_GET['id'],
]);
$modele = $sth->fetch();

//////////

$carteMereSql = 'SELECT DISTINCT idComposant,nom FROM pieces where categorie="carte_mere" ';
$sthcarteMere= $connection->query($carteMereSql);
$carteMeres = $sthcarteMere->fetchAll();

$processeurSql = 'SELECT DISTINCT idComposant,nom FROM pieces where categorie="processeur"';
$sthProcesseur= $connection->query($processeurSql);
$processeurs = $sthProcesseur->fetchAll();

$memoireViveSql = 'SELECT DISTINCT idComposant,nom FROM pieces where categorie="memoire_vive"';
$sthMemoireVive= $connection->query($memoireViveSql);
$memoireVives = $sthMemoireVive->fetchAll();

$carteGraphiqueSql = 'SELECT DISTINCT idComposant,nom FROM pieces where categorie="carte_graphique"';
$sthcarteGraphique= $connection->query($carteGraphiqueSql);
$carteGraphiques = $sthcarteGraphique->fetchAll();


$clavierSql = 'SELECT DISTINCT idComposant,nom FROM pieces where categorie="clavier"';
$sthClavier= $connection->query($clavierSql);
$claviers = $sthClavier->fetchAll();

$sourisPadSql = 'SELECT * FROM pieces INNER JOIN souris_pad ON souris_pad.idComposant = pieces.idComposant where categorie="souris_pad"';
$sthSourisPad= $connection->query($sourisPadSql);
$sourisPads = $sthSourisPad->fetchAll();



$ecranSql = 'SELECT DISTINCT idComposant,nom FROM pieces where categorie="ecran"';
$sthEcran= $connection->query($ecranSql);
$ecrans = $sthEcran->fetchAll();

$alimentationSql = 'SELECT DISTINCT idComposant,nom FROM pieces where categorie="alimentation"';
$sthAlimentation= $connection->query($alimentationSql);
$alimentations = $sthAlimentation->fetchAll();

$disqueDurSsdSql = 'SELECT DISTINCT idComposant,nom FROM pieces where categorie="disque_dur__ssd"';
$sthdisqueDurSsd= $connection->query($disqueDurSsdSql);
$disqueDurSsds = $sthdisqueDurSsd->fetchAll();

if (!empty($_POST)) {
$update = $connection->prepare("UPDATE modele SET nom = :nom, description = :description, nombreExemplaire = :exemplaire, quantite = :quantite, pcPortable = :pcPortable WHERE idModele_ = :id");

$update->execute([
    ':nom' => $_POST['nom'],
    ':description' => $_POST['description'],
    ':exemplaire' => $_POST['exemplaire'],
    ':quantite' => $_POST['quantite'],
    ':pcPortable' => $_POST['pcPortable'],
 ':id' => $_GET['id'],

]);
header('Location: ?page=pageMod');
}

?>

<form action="" method="POST">
  
    <div class="form-group col-md-6">

    <label for="inputNom">Nom</label>
    <input type="text" class="form-control" id="nomText" name="nom" placeholder="Nom" value="<?= $modele->getNom()?>">
  
  
    <label for="inputAddress">Description</label>
    <input type="text" class="form-control" id="descriptionText" name="description" placeholder="Description" value="<?= $modele->getDescription() ?>">
    </div>

 <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="typeOrdiText" name="pcPortable" value="1" <?php if ($modele-> getpcPortable()==1) {echo 'checked';}?>>
      <label class="form-check-label" for="gridCheck">
        Ordinateur Portable
      </label>
    </div>
  </div>

<div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="typeOrdiText" name="pcPortable" value="0"<?php if ($modele-> getpcPortable()==0) {echo 'checked';}?>>
      <label class="form-check-label" for="gridCheck">
        Ordinateur Fix
      </label>
    </div>
  </div>

<div class="form-group">
    <label for="inputAddress">nombre d'exemplaires</label>
    <input type="text" class="form-control" id="nombreExText" name = "exemplaire" placeholder="nombre d'exemplaires" value="<?= $modele->getNombreExemplaire() ?>">
  </div>

  <div class="form-group">
    <label for="inputAddress">stock</label>
    <input type="text" class="form-control" id="descriptionText" name = "quantite" placeholder="stock" value="<?= $modele->getQuantite() ?>">
  </div>
  <div>
   
  <label for="">carte mère</label>
    <select class="form-control">
    <?php foreach( $carteMeres as $carteMere){ ?> 
      <option value="<?php echo $carteMere['nom']; ?>"><?php echo $carteMere['nom']; ?></option>
                    <?php }; ?></option>
    </select>
  </div>

  <label for="">processeur</label>
    <select class="form-control">
    <?php foreach( $processeurs as $processeur){ ?> 
      <option value="<?php echo $processeur['nom']; ?>"><?php echo $processeur['nom']; ?></option>
                    <?php }; ?></option>
    </select>
  </div>

<label for="">memoireVive</label>
    <select class="form-control">
    <?php foreach( $memoireVives as $memoireVive){ ?> 
      <option value="<?php echo $memoireVive['nom']; ?>"><?php echo $memoireVive['nom']; ?></option>
                    <?php }; ?></option>
    </select>
  </div>

<label for="">Carte graphique</label>
    <select class="form-control">
    <?php foreach( $carteGraphiques as $carteGraphique){ ?> 
      <option value="<?php echo $carteGraphique['nom']; ?>"><?php echo $carteGraphique['nom']; ?></option>
                    <?php }; ?></option>
    </select>
  </div>

<label for="">Souris</label>
    <select class="form-control">
    <?php foreach( $sourisPads as $sourisPad){ ?> 
      <option value="<?php echo $sourisPad['nom']; ?>"><?php echo $sourisPad['nom']; ?></option>
                    <?php }; ?></option>
    </select>
  </div>

<label for="">ecran</label>
    <select class="form-control">
    <?php foreach( $ecrans as $ecran){ ?> 
      <option value="<?php echo $ecran['nom']; ?>"><?php echo $ecran['nom']; ?></option>
                    <?php }; ?></option>
    </select>
  </div>

<label for="">alimentation</label>
    <select class="form-control">
    <?php foreach( $alimentations as $alimentation){ ?> 
      <option value="<?php echo $alimentation['nom']; ?>"><?php echo $alimentation['nom']; ?></option>
                    <?php }; ?></option>
    </select>
  </div>

<label for="">disque dur SSD</label>
    <select class="form-control">
    <?php foreach( $disqueDurSsds as $disqueDurSsd){ ?> 
      <option value="<?php echo $disqueDurSsd['nom']; ?>"><?php echo $disqueDurSsd['nom']; ?></option>
                    <?php }; ?></option>
    </select>
  </div>



  <button type="submit" class="btn btn-primary">Confirmer</button>
</form>