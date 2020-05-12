<?php
//on récupere les variables du formulaire
$idn = $_GET['idn'];
$nom = $_GET['nom'];
$mdp = $_GET['mdp'];

//on defini la valeur de la variable cookie
$cookie = $idn.$nom.$mdp;

// on defini le cookie 
setcookie("donneescookie", $cookie);

//on defini une variable avec la valeur du cookie
$donneescookie = $_COOKIE["donneescookie"];

//on se connecte à la base de données

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=banque', 'stagiaire', 'stagiaire');
}
catch (Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT `idn`,`nom`,`mdp` FROM `user`');

//On cherche seulement les valeurs de la BDD
$donnees = $reponse->fetch(PDO::FETCH_ASSOC);

//On convertit le tableau de la BDD en string (chaine de caractères)
$strdo = implode ($donnees);

//on compare le cookie à la base de données
if ($strdo === $donneescookie) {   // Si connexion réussie, on redirige l'owner vers l'index et on lui signifie que l'identification est réussie.
    echo 'Identification réussie !';
    header('Location: index.php');
    
} else {                                // Si connexion échoué, on redirige l'owner vers l'index et on lui signifie que "l'identification" a échoué.
    echo 'Identifaction échouée, mauvais identifiant...';
    header('Location: index.php');
}
?>