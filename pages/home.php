

<?php
$sth = $connection->prepare("SELECT * FROM utilisateur WHERE adresseMail = :id AND motDePasse = :mp");
if (isset($_POST['email']) && isset($_POST['key'])) {
    $_SESSION['email'] = $_POST['email'];
    var_dump($_SESSION);
    $sth->bindValue(':id', $_SESSION['email']);
    $sth->bindValue(':mp', $_POST['key']);
    $sth->setFetchMode(PDO::FETCH_CLASS, Utilisateur::class);
    $sth->execute();

    $utilisateur = $sth->fetch();

    if ($utilisateur == null) { ?> <div class="alert alert-danger" role="alert">information saisie invalide</div>
<?php
    } elseif ($utilisateur->getAddresseMail() == 'concepteur@cldl.com' && $utilisateur !== null) {
        header("Location: concepteur.php");
    } elseif ($utilisateur->getAddresseMail() == 'monteur@cldl.com' && $utilisateur !== null) {
        header("Location: monteur.php");
    }
}

?>



<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap mt-5">
                    <h1>Connectez-vous </h1>
                    <form role="form" action="" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Adresse mail </label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="idconcepteur@cldl.com">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Mot de passe </label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="Mot de passe">
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block " value="Connexion">
                        </div>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>