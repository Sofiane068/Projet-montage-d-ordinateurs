<p> Bienvenue sur la partie concepteur </p>
<?php

$sth = $connection->prepare("SELECT * FROM commentaire  ORDER BY dateCommentaire DESC");

$sth->setFetchMode(PDO::FETCH_CLASS, Commentaire::class);

$sth->execute();

$commentaires = $sth->fetchAll();


?>

<div class="container">
    <?php foreach ($commentaires as $key => $commentaire) {
    ?>

        <div class="row">
            <div class="col-8">
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
            <?php if ($commentaire->getreponse()==true){ ?>
            <div class="col-4">
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
            <?php }; ?>


        </div>
    <?php }; ?>
</div>