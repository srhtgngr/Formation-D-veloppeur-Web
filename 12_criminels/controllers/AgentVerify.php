<?php


namespace serhat;
require ("../vendor/autoload.php");

require ('connexion_bdd.php');

$pseudo = htmlspecialchars($_POST['pseudo_a']);
$mdp = htmlspecialchars($_POST['mot_de_passe_a']);


try {

    $db = new connexion_bdd;
    $dbh = $db->get_dbh();
    $sqlr = 'SELECT * FROM agents WHERE pseudo_a = \''.$pseudo.'\'';
    $stmt = $dbh->prepare($sqlr);
    $stmt->execute([$pseudo]);
    $pass = $stmt->fetch();
} catch (\PDOException $err) {
    die('Erreur : ' . $err->getMessage());
}

if (password_verify($mdp, $pass['mot_de_passe_a']))
    header('Location:../models/AgentManager.php');
else {
    echo 'mot de passe invalide';
}
