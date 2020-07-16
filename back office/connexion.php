<head>
    <title>Connexion</title>
</head>

<form action="securite.php" method="post">
    <label for="login">Login</label>
    <input size="20" maxlength="40" name="login" />
    <label for="password">Mot de passe :</label>
    <input size="20" maxlength="40" name="password" />
    <input type="submit" value="Envoyer" name="connexion" />
</form>
<?php
if (isset($_GET["error"])&& $_GET["error"]=='connexion'){
    echo "<p>Utilisateur introuvable/mot de passe incorrect</p>";
}

?> 
