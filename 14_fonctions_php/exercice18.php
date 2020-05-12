<?php

function remplacerLesLettres(){

    $arrFrom = array("e","i","o");
    $arrTo = array("3","1","0");
    $word = "Les cours de programmation Web sont trops cools";
    echo str_replace($arrFrom, $arrTo, $word);
}
echo remplacerLesLettres();