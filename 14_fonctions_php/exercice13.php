<?php

function plusGrand2(){
    $value = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $test = (key_exists(1, $value)) ? max($value) : 'null';

    echo $test;
}

echo '<pre>';
echo plusGrand2();
echo '</pre>';