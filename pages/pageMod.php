<?php

$sth = $connection->prepare("SELECT * FROM modele order by idModele_ ");

$sth->setFetchMode(PDO::FETCH_CLASS, Modele::class);

$sth->execute();

$modeles = $sth->fetchAll();

?>

<div class="container">
    <div class="row mt-3 ">
        <h3>modèles : </h3>
        <h3><a href="?page=concepteur" class="btn btn-primary">Accueil</a></h3>
    </div>
    <div class="row">
        <?php
        
        foreach ($modeles as $key => $modele) {
        ?>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $modele->getNom();?></h5>
                    <p class="card-text"><?php echo $modele->getDescription();?></p>
                    <p class="card-text"><?php if ($modele->getpcPortable() == true){
                            echo "PC PORTAAAAABLEU";
                        } else{
                            echo "pc Fixeeeeeeu";
                        }
                        ?>
                    </p>
                    <p class="card-text">
                        <?php
                        echo $modele->getNombreExemplaire() . " exemplaires";
                        ?>
                    </p>

                        
                        <p class="card-text">
                        <?php
                        echo $modele->getQuantite() . " en stock";
                        ?>
                        </p>
            </div>
         
                    <a href="#" class="btn btn-primary">Modifier</a>   
                    <?php if($modele->getArchive()==0){?>
                      <a href="?page=archiveMod&id=<?= $modele->idModele_;?>&archive=<?= $modele->getArchive();?>" class="btn btn-primary">Archiver</a>
                      <?php }elseif($modele->getArchive()==1){ ?>
                          <a href="?page=archiveMod&id=<?= $modele->idModele_;?>&archive=<?= $modele->getArchive();?>" class="btn btn-primary">Desarchiver</a>
                     <?php };?>
    </div> 
</div>
<?php
        };
?>
</div>

    </div>
</div>
