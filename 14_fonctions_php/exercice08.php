<?php

function elleEstMajeure(int $age)
{
    $majeur = ($age >= 18) ? true : false;

    echo $majeur;

}

echo elleEstMajeure(25);
