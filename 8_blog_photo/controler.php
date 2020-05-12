<?php
//à relier au bouton onclick du formulaire en js (echec pour le moment)
//sinon rajouter balise <form method="POST" action="controler.php" dans la modal
//Xavier

//recuparation donnée
//to do: actualiser les variables dans le formulaire modal
$email = htmlspecialchars($_Post['email']);
$mdp = htmlspecialchars($_Post['mot_de_passe']);

//connexion à la base de donnée
//to do: actualiser le PDO
try
{
        $bdd = new PDO('mysql:host=localhost;dbname=clients;charset=utf8', 'phpmyadmin', 'stagiaire');
        echo 'connexion on';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
        echo 'connexion off';
}

//insertion incription
$insertion = $bdd->prepare("INSERT INTO clients (email, mot_de_passe) VALUES (:email, :mdp )");
$insertion->bindParam(':email', $email);
$insertion->bindParam(':mdp', $mdp);
$message= ($insertion->execute());

//message retour
if ($message)
{
    echo "inscription réussie";
}
else 
{
    echo "inscription échouée";
}

//retour description avec pseudo
$selection = $bdd->prepare('SELECT mot_de_passe from client where pseudo = :pseu');    // surement erreur
$selection->bindParam(':pseu', $pseu);                                                 // tester les noms de variables 
$selection->execute();                                                                 // avec print_r
if ("mot_de_passe" = $mdp)                                                             //idem +syntaxe fonction
{
    session_start();   // faire isset session sur page commande
}                      // avec retour sur page courante
else
{
    echo "le mot de passe est incorrect";
}

?>

