<!DOCTYPE html>

<head>
    <title>Espace Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <form action="front.php?page=Contact" method="post">
        <fieldset>
            <label for="nom et prénom">Nom-Prénom</label>
            <input size="20" maxlength="40" />

        </fieldset>
        <fieldset>
            <label for="email">Votre email :</label>
            <input size="20" maxlength="40" />
        </fieldset>
        
        <fieldset>
            <label for="message">Souhaitez-vous nous dire quelque chose ?</label>
            <input size="20" maxlength="40" />
        </fieldset>
         <fieldset>
             <input type="submit" value="Envoyer" name="Envoyer" />
        </fieldset>
    </form>
</body>