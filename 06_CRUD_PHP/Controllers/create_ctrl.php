<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=crud', 'stagiaire', 'stagiaire');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

$tab = array(
':pseudo' => $_POST['pseudo'],
':mot_de_passe' => $_POST['mot_de_passe'],
':description' => $_POST['description'],
);

$sql = "INSERT INTO `user` (`pseudo`, `mot_de_passe`, `description`) 
VALUES (:pseudo, :mot_de_passe, :description)" ;

$req = $bdd->prepare($sql);
$result = $req->execute($tab);

if (!$result) {
echo "Une erreur est survenue : " . $req->errorCode();
print_r($req->errorInfo());

} else 
{
    echo "Bienvenue votre compte à été créé avec succès";
}

if ($bdd) {
$bdd = NULL;
}

?>
