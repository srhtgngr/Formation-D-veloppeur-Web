<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=insertion_sql', 'stagiaire', 'stagiaire');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$tab = array(
    ':nom'          => $_POST['nom'],
    ':prenom'        => $_POST['prenom'],
    ':mot_de_passe'    => $_POST['mot_de_passe'],
);
        


$sql = "INSERT INTO `user` (`nom`, `prenom`, `mot_de_passe`) 
    VALUES (:nom, :prenom, :mot_de_passe)" ;

echo $sql;

$req = $bdd->prepare($sql);
$result = $req->execute($tab);

if (!$result) {
    echo "Une erreur est survenue : " . $req->errorCode();

    print_r($req->errorInfo());
}


if ($bdd) {
    $bdd = NULL;
}

?>