<?php
$sql = 'SELECT * FROM pieces';
$criteria = [];
$params = [];
if (isset($_POST['categorie']) && $_POST['categorie']) {
    $criteria[] = 'categorie = :categorie';
    $params[':categorie'] =  $_POST['categorie'];
}

if (isset($_POST['marque']) && $_POST['marque']) {
    $criteria[] = 'marque = :marque';
    $params[':marque'] =  $_POST['marque'];
}

if (isset($_POST['compatiblePortable_']) && $_POST['compatiblePortable_']) {
    $criteria[] = 'compatiblePortable_= :compatiblePortable_';
    $params[':compatiblePortable_'] =  $_POST['compatiblePortable_'];
}

if (isset($_POST['quantite']) && $_POST['quantite'] == 1) {
    $criteria[] = ' quantite >= :quantite';
    $params[':quantite'] =  $_POST['quantite'];
} elseif (isset($_POST['quantite']) && $_POST['quantite'] == 0) {
    $criteria[] = 'quantite = :quantite';
    $params[':quantite'] =  $_POST['quantite'];
}

if (isset($_POST['prixMin']) && $_POST['prixMin']) {
    $criteria[] = 'prix >= :prixMin';
    $params[':prixMin'] =  $_POST['prixMin'];
}

if (isset($_POST['prixMax']) && $_POST['prixMax']) {
    $criteria[] = 'prix <= :prixMax';
    $params[':prixMax'] =  $_POST['prixMax'];
}

if (!empty($criteria)) {
    $sql .= ' WHERE ';
    $sql .= implode(' AND ', $criteria);
}
if (isset($_GET['tri']) && isset($_GET['order'])) {
    $sql .= ' ORDER BY ' . $_GET['tri'] . ' ' . $_GET['order'] . '';
}
$sth = $connection->prepare($sql);

$sth->setFetchMode(PDO::FETCH_CLASS, Piece::class);

$sth->execute($params);

$pieces = $sth->fetchAll();


$marqueSql = 'SELECT DISTINCT marque FROM pieces';
$sthMarque = $connection->query($marqueSql);
$marques = $sthMarque->fetchAll();

$categorieSql = 'SELECT DISTINCT categorie FROM pieces';
$sthCategorie = $connection->query($categorieSql);
$categories = $sthCategorie->fetchAll();


$portableSql = 'SELECT DISTINCT compatiblePortable_ FROM pieces';
$sthPortable = $connection->query($portableSql);
$portables = $sthPortable->fetchAll();

$quantiteSql = 'SELECT DISTINCT quantite FROM pieces';
$sthQuantite = $connection->query($quantiteSql);
$quantites = $sthQuantite->fetchAll();

$prixSql = 'SELECT DISTINCT prix FROM pieces';
$sthPrix = $connection->query($prixSql);
$prix = $sthPrix->fetchAll();


if (isset($_GET['idDelete']) && isset($_GET['table'])) {


    $deleteTableSql = "DELETE FROM " . $_GET['table'] . " WHERE idComposant = :id";

    $stmt = $connection->prepare($deleteTableSql);

    $stmt->execute([
        ':id' => $_GET['idDelete'],
    ]);

    $deleteStockSql = "DELETE FROM stock WHERE idComposant = :id";

    $stmt = $connection->prepare($deleteStockSql);

    $stmt->execute([
        ':id' => $_GET['idDelete'],
    ]);

    $deletePiecesSql = "DELETE FROM pieces WHERE idComposant = :id";

    $stmt = $connection->prepare($deletePiecesSql);

    $stmt->execute([
        ':id' => $_GET['idDelete'],
    ]);
}


?>



<div class="container">
    <div class="row mt-3">
        <div class="col-2">
            <h5>filtrer par :</h5>
        </div>
        <div class="col-6">
            <form action="" method="post">
                <!-- ////CATEGORIE-->
                <label for="">catégorie :</label>
                <select class="form-select" name="categorie" aria-label="Default select example">
                    <option value="">Tous</option>
                    <?php
                    foreach ($categories as $key => $categorie) {
                    ?>
                        <option value="<?php echo $categorie['categorie']; ?>"><?php echo $categorie['categorie']; ?></option>
                    <?php }; ?>
                </select>
                <!-- ////MARQUE-->
                <label for="">marque :</label>
                <select class="form-select" name="marque" aria-label="Default select example">
                    <option value="">Tous</option>
                    <?php
                    foreach ($marques as $key => $marque) {
                    ?>
                        <option value="<?php echo $marque['marque']; ?>"><?php echo $marque['marque']; ?></option>
                    <?php }; ?>
                </select>
                <!-- ////PORTABLE-->
                <label for="">Type de pc :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="compatiblePortable_" value="0" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Tous
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="compatiblePortable_" value='1' id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Pc portable
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="compatiblePortable_" value="null" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Pc fixe
                    </label>
                </div>
                <!-- ////STOCK -->
                <label for="">Stock :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="quantite" value="3" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Tous
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="quantite" value="1" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                        En stock
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="quantite" value="0" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Rupture de stock
                    </label>
                </div>
                <!-- ////PRIX-->
                <label for="">Prix :</label>
                <div>
                    <input type="number" id="min" name="prixMin" min="0" max="1399.00" step="0.10">
                    <label for="prixMin">Prix min</label>
                </div>

                <div>
                    <input type="number" id="max" name="prixMax" min="0" max="1399.00" step="0.10">
                    <label for="prixMax">Prix max</label>
                </div>


                <input class="btn btn-primary" type="submit" value="Validez">
            </form>
        </div>

    </div>
    <div class="row mt-3">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">nom <a href="?page=gestionPieces&tri=nom&order=desc"><i class="icon-chevron-sign-down"></i></a> <a href="?page=gestionPieces&tri=nom&order=asc"><i class="icon-chevron-sign-up"></i></th>
                    <th scope="col">marque <a href="?page=gestionPieces&tri=marque&order=desc"><i class="icon-chevron-sign-down"></i></a> <a href="?page=gestionPieces&tri=marque&order=asc"><i class="icon-chevron-sign-up"></i></th>
                    <th scope="col">quantite <a href="?page=gestionPieces&tri=quantite&order=desc"><i class="icon-chevron-sign-down"></i></a> <a href="?page=gestionPieces&tri=quantite&order=asc"><i class="icon-chevron-sign-up"></i></th>
                    <th scope="col">prix <a href="?page=gestionPieces&tri=prix&order=desc"><i class="icon-chevron-sign-down"></i></a> <a href="?page=gestionPieces&tri=prix&order=asc"><i class="icon-chevron-sign-up"></i></th>
                    <th scope="col">nombre modèles <a href="?page=gestionPieces&tri=nbDeModeleCreer&order=desc"><i class="icon-chevron-sign-down"></i></a> <a href="?page=gestionPieces&tri=nbDeModeleCreer&order=asc"><i class="icon-chevron-sign-up"></i></th>
                    <th scope="col">catégorie <a href="?page=gestionPieces&tri=categorie&order=desc"><i class="icon-chevron-sign-down"></i></a> <a href="?page=gestionPieces&tri=categorie&order=asc"><i class="icon-chevron-sign-up"></i></th>
                    <th scope="col">date d'ajout <a href="?page=gestionPieces&tri=dateAjout&order=desc"><i class="icon-chevron-sign-down"></i></a> <a href="?page=gestionPieces&tri=dateAjout&order=asc"><i class="icon-chevron-sign-up"></i></th>
                    <th>supprimer</th>
                    <th>archiver</th>
                    <th>modifier</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pieces as $key => $piece) { ?>
                    <tr>
                        <td><?php echo $piece->getNom(); ?></td>
                        <td><?php echo $piece->getMarque(); ?></td>
                        <td><?php echo $piece->getQuantite(); ?></td>
                        <td><?php echo $piece->getPrix(); ?> €</td>
                        <td><?php echo $piece->getNdDeModeleCree(); ?></td>
                        <td><?php echo $piece->getCategorie(); ?></td>
                        <td><?php echo $piece->getDateAjout(); ?></td>
                        <td>
                            <?php if ($piece->getNdDeModeleCree() > 0) { ?>

                                <a href="?page=gestionPieces&idDelete=<?php echo $piece->idComposant ?>&table=<?php echo $piece->getCategorie(); ?>" class=" btn btn-danger close">Supprimer
                                </a>
                            <?php } ?>
                        </td>
                        <td><input type="submit" class=" btn btn-success " name="archiver" value="archiver"> </input>
                        </td>
                        <td>
                            <input type="button" class=" btn btn-info " name="modifier" value="modifier" <?php if ($piece->getNdDeModeleCree() > 0) {
                                                                                                                echo 'disabled';
                                                                                                            } ?>>
                            </input>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>