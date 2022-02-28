<?php
if (!empty($_POST)){
$insert = $connection->prepare("INSERT INTO modele ( nom, description, pcPortable,nombreExemplaire, archive, quantite) VALUE (:nom, :description, :pcPortable, :nombreExemplaire,:archive,:quantite)");

$insert->execute([
    ':nom' => $_POST['nom'],
    ':description' => $_POST['description'],
    ':pcPortable' => $_POST['pcPortable'],
    ':nombreExemplaire' => $_POST['exemplaire'],
    ':archive'=> $_POST[':archive'],
    ':quantite' => $_POST['quantite'],

]);
header('Location: ?page=pageMod');
};
?>

<h2>Nouveau Modele</h2>
<form action="" method="POST">
  
    <div class="form-group col-md-6">

    <label for="inputNom">Nom</label>
    <input type="text" class="form-control" id="nomText" name="nom" placeholder="Nom">
  
  
    <label for="inputAddress">Description</label>
    <input type="text" class="form-control" id="descriptionText" name="description" placeholder="Description">
    </div>

 <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="typeOrdiText" name="pcPortable" value="1">
      <label class="form-check-label" for="gridCheck">
        Ordinateur Portable
      </label>
    </div>
  </div>

<div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="typeOrdiText" name="pcPortable">
      <label class="form-check-label" for="gridCheck">
        Ordinateur Fix
      </label>
    </div>
  </div>

<div class="form-group">
    <label for="inputAddress">nombre d'exemplaires</label>
    <input type="text" class="form-control" id="nombreExText" name = "exemplaire" placeholder="nombre d'exemplaires">
  </div>

  <div class="form-group">
    <label for="inputAddress">stock</label>
    <input type="text" class="form-control" id="descriptionText" name = "quantite" placeholder="stock">
  </div>


  <button type="submit" class="btn btn-primary">Confirmer</button>
</form>