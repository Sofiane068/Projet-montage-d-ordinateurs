<?php

$sql = 'SELECT * FROM pieces where idComposant=' . $_GET['id'] . '';

$stmt = $connection->prepare($sql);

$stmt->setFetchMode(PDO::FETCH_CLASS, Piece::class);

$stmt->execute();

$piece = $stmt->fetch();

if (isset($_POST['nom'])) {
    $updateSql = 'UPDATE pieces
SET 
    nom=:nom,
    marque=:marque,
    categorie=:categorie,
    prix=:prix,
    compatiblePortable_=:compatiblePortable_
WHERE idComposant=' . $_GET['id'] . '';

    $sth = $connection->prepare($updateSql);


    $sth->execute(
        $params = [
            ':nom' => $_POST['nom'],
            ':marque' => $_POST['marque'],
            ':categorie' => $_POST['categorie'],
            ':prix' => $_POST['prix'],
            ':compatiblePortable_' => $_POST['compatiblePortable_'],
        ]

    );
    header('location:?page=gestionPieces');
}

$categorieSql = 'SELECT DISTINCT categorie FROM pieces';
$sthCategorie = $connection->query($categorieSql);
$categories = $sthCategorie->fetchAll();

?>

<div class="container"> 
    <form method="post" action="">
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" name='nom' value="<?php echo $piece->getNom(); ?>">
        </div>
        <div class="mb-3">
            <label for="Nom" class="form-label">Marque :</label>
            <input type="text" class="form-control" name='marque' value="<?php echo $piece->getMarque(); ?>">
        </div>
        <label for="">catégorie :</label>
        <select class="form-select" name="categorie" aria-label="Default select example">
            <?php
            foreach ($categories as $key => $categorie) {
            ?>
                <option value="<?php echo $categorie['categorie']; ?>" <?php if ( $piece->getCategorie()==$categorie['categorie']){ echo 'selected';} ?>><?php echo $categorie['categorie']; ?></option>
            <?php }; ?>
        </select>
        <div class="mb-3">
            <label for="Nom" class="form-label">Prix :</label>
            <input type="number" min="0" max="1399.00" step="0.01" name='prix' value="<?php echo $piece->getPrix(); ?>">
        </div>
        <label for="">Compatible pc portable :</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault1" name='compatiblePortable_' value='1' <?php if ($piece->getCompatiblePortable() == 1) {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>>
            <label class="form-check-label" for="flexRadioDefault1">
                oui
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault2" name='compatiblePortable_' value='0' <?php if ($piece->getCompatiblePortable() == 0) {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>>
            <label class="form-check-label" for="flexRadioDefault2">
                non
            </label>
        </div>

        <input type="submit" class="btn btn-primary" value="Modifier">
    </form>
</div>