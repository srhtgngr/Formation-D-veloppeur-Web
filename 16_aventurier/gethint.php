<?php
    
    try {
        $cnx = new PDO("mysql:host=localhost;dbname=aventurier;charset=utf8","stagiaire","stagiaire");
    } catch (\Throwable $th) {
        //throw $th;
    }

    $req = $cnx->prepare("SELECT `photo_familier` 
        FROM `familier` 
        WHERE `heros_id_heros` LIKE :query"
        
    );
    $req->execute([ 'query' => $_REQUEST["q"].'%']);
    $familiers = $req->fetchAll(PDO::FETCH_ASSOC);

    $hint = '';
    foreach($familiers as $familier) {
        $hint .= $familier['photo_familier'].'<br/>';
    }
    
    echo $hint === ""
        ? "no suggestion"
        : '<div class="jumbotron"><h1>'.$hint.'</h1></div>';

