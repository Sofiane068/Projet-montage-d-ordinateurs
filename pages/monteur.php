<?php

if(isset($_POST{"key"})){
    $sth = $connection->prepare("SELECT * FROM modele WHERE idModele_= .$_POST[key].");
$sth->setFetchMode(PDO::FETCH_CLASS, modele::class);
$sth->execute();

$modeles = $sth->fetchAll();
}
?>


<label for="">Choisir un modèle :</label>
<form action="" method="POST">
<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <?php foreach($modeles as $key => $modele){ ?> <option name="key" value="<?php $key ?>"><?php $modele -> getNom(); ?></option><?php } ?>
</select>
<button type="submit" class="btn btn-primary btn-lg btn-block">Validé</button>
</form>
<a href="?page=derniercom">
<button type="button" class="btn btn-primary btn-lg btn-block">afficher dernier commentaire</button>
</a>