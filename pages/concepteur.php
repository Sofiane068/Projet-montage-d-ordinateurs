<?php

$sth = $connection->prepare("SELECT * FROM commentaire  ORDER BY dateCommentaire DESC limit 3");

$sth->setFetchMode(PDO::FETCH_CLASS, Commentaire::class);

$sth->execute();

$commentaires = $sth->fetchAll();

//////////////

$sth = $connection->prepare("SELECT * FROM modele order by idModele_ desc LIMIT 3");

$sth->setFetchMode(PDO::FETCH_CLASS, Modele::class);

$sth->execute();

$modeles = $sth->fetchAll();

?>

<div class="container">
    <div class="row mt-3 ">
        <h3>Commentaire récent :</h3>
        <h3><a href="?page=pageCom" class="btn btn-primary">voir tous les commentaires</a></h3>
    </div>

    <?php foreach ($commentaires as $key => $commentaire) {

        if ($commentaire->getAdresseMail_1() != null) {
    ?>

            <div class="row">
                <div class="col-6">
                    <div class="card card-white p-4 mb-2">
                        <div class="post-heading">
                            <div class="float-left image">
                                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                            </div>
                            <div class="float-left meta">
                                <div class="title h5">
                                    <a href="#"><b><?php if ($commentaire->getAdresseMail() != null) {
                                                        echo $commentaire->getAdresseMail();
                                                    } else {
                                                        echo $commentaire->getAdresseMail_1();
                                                    } ?></b></a>
                                    a commenté
                                </div>
                                <h6 class="text-muted time"><?php echo $commentaire->getdate()->format('d/m/Y'); ?></h6>
                            </div>
                        </div>
                        <div class="post-description">
                            <p><?php echo $commentaire->gettexte(); ?></p>

                        </div>
                        <div>
                            <?php if ($commentaire->getreponse() == true) { ?>
                                <p class="text-muted time">répondu</p>
                            <?php } else { ?>
                                <p class="text-muted time">non répondu</p>
                            <?php } ?>
                        </div>

                    </div>
                </div>
                <!-- /////////////// -->
                <?php if ($commentaire->getreponse() == true) { ?>
                    <div class='col-1 '>
                        <h1 class="ms-3 mt-5"><i class="icon-arrow-right fa-5x"></i></h1>
                    </div>
                    <div class="col-5">
                        <div class="card card-white p-4 mb-2">
                            <div class="post-heading">
                                <div class="float-left image">
                                    <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                                </div>
                                <div class="float-left meta">
                                    <div class="title h5">
                                        <a href="#"><b><?php if ($key == 4 || $key == 7) {
                                                            echo $commentaires[3]->getAdresseMail();
                                                        } ?></b></a>
                                        a commenté
                                    </div>
                                    <h6 class="text-muted time">
                                        <?php if ($key == 4) {
                                            echo $commentaires[3]->getdate()->format('d/m/Y');
                                        } elseif ($key == 7) {
                                            echo $commentaires[6]->getdate()->format('d/m/Y');
                                        } ?>
                                    </h6>
                                </div>
                            </div>
                            <div class="post-description">
                                <p>
                                    <?php if ($key == 4) {
                                        echo $commentaires[3]->gettexte();
                                    } elseif ($key == 7) {
                                        echo $commentaires[6]->gettexte();
                                    } ?>
                                </p>

                            </div>
                            <div>
                                <?php if ($commentaire->getreponse() == true) { ?>
                                    <p class="text-muted time">répondu</p>
                                <?php } else { ?>
                                    <p class="text-muted time">non répondu</p>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                <?php }; ?>


            </div>
    <?php }
    }; ?>
    <div class="row mt-3 ">
        <h3>modèles : </h3>
        <h3><a href="?page=pageMod" class="btn btn-primary">voir tous les modèles</a></h3>
    </div>
    <div class="row">
        <?php

        foreach ($modeles as $key => $modele) {
        ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $modele->getNom(); ?></h5>
                        <p class="card-text"><?php echo $modele->getDescription(); ?></p>
                        <p class="card-text"><?php if ($modele->getpcPortable() == true) {
                                                    echo "PC PORTAAAAABLEU";
                                                } else {
                                                    echo "pc Fixeeeeeeu";
                                                }
                                                ?>
                        </p>
                        <p class="card-text">
                            <?php
                            echo $modele->getNombreExemplaire() . " exemplaires";
                            ?>
                        </p>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" <?php if ($modele->getArchive() == true) { ?> checked disabled<?php } else { ?>disabled <?php } ?> />
                            <label class="form-check-label" for="flexCheckCheckedDisabled">archivé</label>
                        </div>
                        <p class="card-text">
                            <?php
                            echo $modele->getQuantite() . " en stock";
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php
        };
        ?>
    </div>
<div class="row mt-3 ">
    <h3>Pièces : </h3>
    <h3><a href="?page=gestionPieces" class="btn btn-primary">Gestion des pièces</a></h3>
</div>
</div>

</div>