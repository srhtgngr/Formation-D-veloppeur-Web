<?php

function plusPetit2(){
    $value = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $test = (key_exists(1, $value)) ? min($value) : 'null';

    echo $test;
}

echo '<pre>';
echo plusPetit2();
echo '</pre>';