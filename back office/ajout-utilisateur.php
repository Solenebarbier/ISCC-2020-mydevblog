<!DOCTYPE html>

<html>

<head>
    <title>Ajout d'utilisateurs</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<form action="back.php?page=ajout-utilisateur" method="post">
    <fieldset>
        <label for="nom">Nom d'utilisateur </label>
        <input size="14" maxlength="40" />
    </fieldset>
    <fieldset>
        <label for="login">Login</label>
        <input size="20" maxlength="40" />
    </fieldset>
    <fieldset>
        <label for="password">Mot de passe</label>
        <input size="14" maxlength="40" />
    </fieldset>
    <fieldset>
        <input style="float:center;" type="submit" value="Envoyer" name="Envoyer" />
    </fieldset>
</form>

</html>