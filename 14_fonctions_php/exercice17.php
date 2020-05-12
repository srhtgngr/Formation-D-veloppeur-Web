<?php
function listHTML(){

    $liste = "Capitale";
    $ville = array('Paris', 'Berlin', 'Moscou');

    echo '<h3>'.$liste.'</h3><ul>'.$ville.'</ul>';
    
}
echo listHTML();
