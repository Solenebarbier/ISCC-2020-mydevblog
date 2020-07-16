<!DOCTYPE html>

<html>

<head>
    <title>Liste des utilisateurs</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>


<?php
  function connect_to_database()
  {
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $databasename = "base-blog-routing";
      try {
          $pdo = new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
          $pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
          return $pdo;
      }catch (PDOException $e){
          echo "Connection failed: " . $e -> getMessage();
      }
   }
  $pdo = connect_to_database();
  $utilisateurs = $pdo-> query("SELECT * FROM utilisateurs")->fetchAll();
   
function delete($nom_utilisateur)
{
  $pdo = connect_to_database();
  $utilisateurs = $pdo-> prepare("DELETE FROM utilisateurs WHERE nom_utilisateur=$nom_utilisateur");
  $utilisateurs-> execute();
}
echo"<ul>";
foreach($utilisateurs as $utilisateur){
    echo "<form action=" .$_SERVER['PHP_SELF'] ." method='post'>";
    echo "<li>$utilisateur[nom_utilisateur]  <input type='reset' value='Supprimer' name='Supprimer'/></li>" ; 
    echo "<form>";
}
echo"</ul>";

if(!empty($_POST['supprimer'])) {
    echo "Supprimer";
}
?>



</html>