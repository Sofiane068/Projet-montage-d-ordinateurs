
<?php
if($_GET['archive']==0){
$sth = $connection->prepare("UPDATE modele SET archive=1 where idModele_=".$_GET['id']."");
}else{
$sth = $connection->prepare("UPDATE modele SET archive=0 where idModele_=".$_GET['id']."");
}
$sth->execute();
header('location:?page=pageMod');

?>
