<?php 

// récupère les variables du formulaire
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mot_de_passe'];
$desc = $_POST['description'];

//connecte a la base de donnée
try 
{ 
    $bdd = new PDO('mysql:host=localhost;dbname=crud', 'stagiaire', 'stagiaire');
} 
catch (PDOException $e) 
{
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
// modifie les valeurs
$requete = $bdd->prepare('UPDATE `user` SET `mot_de_passe`= ? ,`description`= ? WHERE `pseudo`=\''.$pseudo.'\'');
$requete->bindParam(1, $mdp);
$requete->bindParam(2, $desc);
$requete->execute();

if($requete->rowcount() > 0) {
echo "Informations modifiées avec succés";

} else {
echo "Valeurs entrées incorrectes";
}
?>