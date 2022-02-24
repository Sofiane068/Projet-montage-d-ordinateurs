<?php

$sth = $connection->prepare("SELECT * FROM pieces");

$sth->setFetchMode(PDO::FETCH_CLASS, Piece::class);

$sth->execute();

$pieces = $sth->fetchAll();
?>



<div class="container">
    <div class="row mt-3">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">marque</th>
                    <th scope="col">quantite en stock</th>
                    <th scope="col">prix</th>
                    <th scope="col">nombre de modèles creer</th>
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