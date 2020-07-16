<!DOCTYPE html>

<html>

<head>
    <title>Ajout d'article</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="back.php?page=ajout-article" method="post">

        <fieldset>
            <label for="titre">Un titre</label>
            <input size="20" maxlength="40" name="titre" />
        </fieldset>
        <fieldset>
            <label for="image">Une image</label>
            <input size="20" maxlength="40" name="image" />
        </fieldset>
        <fieldset>
            <label for="date">Date de publication</label>
            <input size="20" maxlength="40" name="date" />
        </fieldset>
        <fieldset>
            <label for="auteur">Auteur</label>
            <input size="20" maxlength="40" name="auteur" />
        </fieldset>
        <fieldset>
            <label for="contenu">Texte/Contenu</label>
            <input size="20" maxlength="10000" name="contenu" />
        </fieldset>
        <fieldset>
            <label for="extrait">Extrait</label>
            <input size="20" maxlength="300" name="extrait" />
        </fieldset>
        <fieldset>
            <input style="float:center;" type="submit" value="Envoyer" name="submit" />
        </fieldset>
    </form>
</body>

</html>