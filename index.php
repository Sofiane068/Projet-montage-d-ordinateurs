<?php
$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
require_once 'header.php';
require_once 'pages/' . $page . '.php';
require_once 'footer.php';
