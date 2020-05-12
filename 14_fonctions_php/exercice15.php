<?php

function verificationPassword()
{

    $password = readline("Commande : ");

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);

    if (!$uppercase || !$lowercase || !$number || strlen($password) <= 8) {
        echo 'Mot de passe non conforme';
    }else{
        echo 'Good job';
    }
}


echo verificationPassword();
