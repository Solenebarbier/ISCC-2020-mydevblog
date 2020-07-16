<!DOCTYPE html>
<html>

  <head>
    <title>Article</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="design.css">
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
  $articles = $pdo-> query("SELECT * FROM article")->fetchAll();
 
  echo"";
  foreach($articles as $article){
      echo "<h2>$article[titre]</h2>" ; 
      echo "<p>$article[contenu]</p>";
      echo "<img src= $article[image] width=202></img>";
      echo "<p>$article[date_de_publication]</p>";
      echo "<p>$article[auteur]";
  }
  echo"";
  ?>