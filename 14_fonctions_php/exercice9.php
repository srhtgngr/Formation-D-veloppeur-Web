<?php

function plusGrand()
{
    $a = 10;
    $b = 5;
    
    $verif = ($a > $b) ? $a : $b;

    echo $verif;

}

echo plusGrand();