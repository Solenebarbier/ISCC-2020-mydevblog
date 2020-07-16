<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="design.css">
</head>

<?php
require("header.php");
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'Accueil') {
        require("Accueil.php");
    } else if ($_GET['page'] == 'Article') {
        require("Article.php");
    } else if ($_GET['page'] == 'Articles') {
        require("Articles.php");
    } else if ($_GET['page'] == 'Contact') {
        require("Contact.php");
    }
}
?>
