<?php

$sth = $connection->prepare("SELECT * FROM modele where idModele_= :id ");

$sth->setFetchMode(PDO::FETCH_CLASS, Modele::class);

$sth->execute([
    ':id' => $_GET['id'],
]);

$modele = $sth->fetch();

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


  <button type="submit" class="btn btn-primary">Confirmer</button>
</form>