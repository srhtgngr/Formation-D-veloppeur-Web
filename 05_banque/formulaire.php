<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Connexion</title>
</head>
<body>
<nav>
    <h1>Veuillez vous connecter</h1>
    </nav>
    <form action="controller.php" method="get">
        <fieldset>
            <legend> <strong>VOS INFORMATIONS</strong> </legend>
            <div>
                <label for="idnumerique">Votre identifiant numérique :</label><br>
                <input type="number" name="idn" id="idnumerique">
            </div>
            <div>
                <label for="nom">Votre nom :</label>
                <input type="text" name="nom" id="nom">
            </div>
            <div>
                <label for="mdp">Votre mot de passe :</label>
                <input type="text" id="mdp" name="mdp">
            </div>
            <div>
                <button type="submit">Se connecter</button>
            </div>
        </fieldset>
    </form>
</body>
</html>