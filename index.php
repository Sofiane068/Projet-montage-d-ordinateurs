<?php
require_once 'header.php';
?>

<?php 
if( isset($_POST['key']) && isset($_POST['email']) && strpos($_POST['email'], 'concepteur@cldl.com') && $_POST['key']=== $mpConcepteur){
    header("Location: concepteur.php");
}elseif(isset($_POST['key']) && isset($_POST['email']) && strpos($_POST['email'], 'monteur@cldl.com') && $_POST['key'] === $mpMonteur){
    header("Location: monteur.php");
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
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>




<?php
require_once 'footer.php';
?>