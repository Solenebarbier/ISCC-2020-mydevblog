<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<?php
session_start();
require("header.php");
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'ajout-article') {
        require("ajout-article.php");
    } else if ($_GET['page'] == 'ajout-utilisateur') {
        require("ajout-utilisateur.php");
    } else if ($_GET['page'] == 'connexion') {
        require("connexion.php");
    } else if ($_GET['page'] == 'utilisateur') {
        require("utilisateur.php");
    }

    if ($_GET['page'] != 'connexion' && (isset($_SESSION['id']) || isset($_COOKIE['id']))) {
        echo "<p> login : " . $_SESSION['id'] . "</p>";
    } elseif (isset($_GET['page']) && $_GET['page'] != 'connexion') {
        header('location: back.php?page=connexion');
    }
} else {
    header('location: back.php?page=connexion');
}

?>

</body>

</html>