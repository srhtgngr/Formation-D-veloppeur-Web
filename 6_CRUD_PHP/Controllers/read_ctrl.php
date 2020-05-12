<?php

// récupère les variables du formulaire
$pseudo = $_POST['pseudo'];
$description = $_POST['description'];
$mot_de_passe = $_POST['mot_de_passe'];

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=crud', 'stagiaire', 'stagiaire');
}
catch (Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

session_start();

$reponse = $bdd->query('SELECT `pseudo`,`mot_de_passe`,`description` FROM `user` WHERE `pseudo`=\''.$pseudo.'\' ');

while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>pseudo</strong> : <?php echo $donnees['pseudo']; ?><br />
    mot de passe : <?php echo $donnees['mot_de_passe']; ?><br />
    voici les informations : <?php echo $donnees['description']; ?></p>
<?php
}

$reponse->closeCursor();

?>