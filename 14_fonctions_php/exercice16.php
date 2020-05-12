<?php

function capital(string $ville)
{
    switch ($ville) {
        case 'France':
            echo 'Paris';
            break;
        case 'Allemagne':
            echo 'Berlin';
            break;
        case 'Italie':
            echo 'Rome';
            break;
        case 'Maroc':
            echo 'Rabat';
            break;
        case 'Espagne':
            echo 'Madrid';
            break;
        case 'Portugal':
            echo 'Lisbonne';
            break;
        case 'Angleterre':
            echo 'Londres';
            break;
        default:
            echo 'Inconnu';
            break;
    }
}
echo capital(readline("Commande : "));
