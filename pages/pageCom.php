<?php

$sth = $connection->prepare("SELECT * FROM commentaire  ORDER BY dateCommentaire ");

$sth->setFetchMode(PDO::FETCH_CLASS, Commentaire::class);

$sth->execute();

$commentaires = $sth->fetchAll();



?>

<div class="container">
    <div class="row mt-3 ">
        <h3>Tous les commentaires :</h3>
        <h3><a href="?page=concepteur" class="btn btn-primary">Accueil</a></h3>
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
                                        <a href="#"><b><?php if ($key == 1|| $key == 4) {
                                                            echo $commentaires[2]->getAdresseMail();
                                                        } ?></b></a>
                                        a commenté
                                    </div>
                                    <h6 class="text-muted time">
                                        <?php if ($key == 1) {
                                            echo $commentaires[2]->getdate()->format('d/m/Y');
                                        } 
                                        if ($key == 4) {
                                            echo $commentaires[5]->getdate()->format('d/m/Y');
                                        } ?>
                                    </h6>
                                </div>
                            </div>
                            <div class="post-description">
                                <p>
                                    <?php if ($key == 1) {
                                        echo $commentaires[2]->gettexte();
                                    } elseif ($key == 4) {
                                        echo $commentaires[5]->gettexte();
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