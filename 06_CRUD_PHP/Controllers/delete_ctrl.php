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
// suprime un user
$requete = $bdd->prepare('DELETE FROM `user` WHERE pseudo = ? AND mot_de_passe = ? AND description = ?');
$requete->bindParam(1, $pseudo);
$requete->bindParam(2, $mdp);
$requete->bindParam(3, $desc);
$requete->execute();

if($requete->rowcount() > 0) {
echo "Compte supprimé !";

} else {
echo "Valeurs entrées incorrectes";
}
?>