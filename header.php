<?php
session_start();
spl_autoload_register(function ($class) {
    require_once "class/$class.php";
});
require_once 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLDL</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php if (isset($_SESSION['email'])) { ?>
        <nav class="nav nav-pills nav-fill">

            <a class="nav-item nav-link disabled" href="#">CLDL</a>
            <a class="nav-item nav-link"></a>
            <a class="nav-item nav-link active" href="?page=logout">Deconnexion</a>
        </nav>
    <?php }; ?>