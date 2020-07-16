<?php
function connect_to_database()
{

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "base-blog-routing";

    $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
session_start();
if (isset($_POST['connexion']) && isset($_POST['password']) && isset($_POST["login"])) {

    try {
        $pdo = connect_to_database();
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM utilisateurs WHERE login = '$login' and password = '$password'";
        $req = $pdo->query($sql);
     
        if ($req -> rowCount()==1) {
            $_SESSION["id"]=$_POST['login'];
            setcookie("id", $_POST['login']);
            header('location: back.php?page=ajout-article');
        } else {
           header('location: back.php?page=connexion&error=connexion');
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
}

?>