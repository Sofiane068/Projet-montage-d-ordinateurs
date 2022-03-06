<?php
$dernierCom = $connection->prepare("SELECT * FROM commentaire  ORDER BY dateCommentaire DESC limit 1");

$dernierCom->execute();
$commentaire = $dernierCom -> fetch();
header('Location: ?page=monteur');
?>