<?php

function premierElementTableau()
{
    $first = ['salut', 'tout', 'le', 'monde', 1];
    $value = (key_exists(1, $first)) ? $first[0] : 'null';
    echo $value;
}

echo '<pre>';
echo premierElementTableau();
echo '</pre>';


/*La fonction que j'ai trouvé  est 

    array_key_first

renvoie le premier element du tableau si vide renvoie null
mais impossible de la faire fonctionner
j'ai lu qu'elle est valable depuis php 7.3 et je suis sous 7.2
*/


/*function premierElementTableau()
{
    $first = ['salut', 'tout', 'le', 'monde', 1];
    $firstKey = array_key_first($first);
    print_r ($firstKey);
}

echo '<pre>';
echo premierElementTableau();
echo '</pre>';
 */
