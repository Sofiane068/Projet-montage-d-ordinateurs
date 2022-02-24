<?php

$sth = $connection->prepare("SELECT * FROM pieces");

$sth->setFetchMode(PDO::FETCH_CLASS, Piece::class);

$sth->execute();

$pieces = $sth->fetchAll();
?>



<div class="container">
    <div class="row mt-3">
        <div class="col-2">
            <h5>Trier par :</h5>
        </div>
        <div class="col-6">
            <select class="form-select" aria-label="Default select example">
                <option value="1">nom</option>
                <option value="2">marque</option>
                <option value="3">quantite en stock</option>
                <option value="4">prix</option>
                <option value="5">nombre de modèles créés</option>
                <option value="6">date d'ajout</option>
            </select>
        </div>
        <div class="col">
            <a href="" class="btn btn-primary">Validez</a>
        </div>
    </div>
    <div class="row mt-3">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">marque</th>
                    <th scope="col">quantite en stock</th>
                    <th scope="col">prix</th>
                    <th scope="col">nombre de modèles créés</th>
                    <th scope="col">catégorie</th>
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

                    </tr>
                    <tr>

                    </tr>
                    <tr>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>