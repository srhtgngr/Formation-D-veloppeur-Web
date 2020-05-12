<?php

function dernierElementTableau()
{
    $last = ['salut', 'tout', 'le', 'monde'];
    $value = (key_exists(1, $last)) ? $last[count($last) - 1] : 'null';

    print_r($value);
}

echo '<pre>';
echo dernierElementTableau();
echo '</pre>';



/*La fonction que j'ai trouvé  est 
    array_key_last
renvoie le dernier element du tableau si vide renvoie null
mais impossible de la faire fonctionner
j'ai lu qu'elle est valable depuis php 7.3 et je suis sous 7.2
*/

/*$last = ['salut', 'tout', 'le', 'monde'];
$value = $last[array_key_last($last)];

var_dump($value);
print_r($last);
 */
