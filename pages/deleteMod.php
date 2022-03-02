
<?php
$deleteMod = $connection->prepare("DELETE FROM modele WHERE idModele_= :id");
$deleteMod->execute([
':id' => $_GET['id'],    
]);
header('Location: ?page=pageMod');
?>