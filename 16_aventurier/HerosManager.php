<?php

require('Heros.php');

class HerosManager
{
    private $_db; // Instance de PDO.

    public function __construct($db)
    {
        $this->set_db($db);
    }

    /*     public function getHeros ($_nom){
        $req=$this-> _co->prepare("SELECT * FROM 'heros' WHERE 'nom_r'=:nom_r");
        $req->bindValue ('nom_heros',$_nom);
        $req->execute();
        $data=$req->fetch(PDO::FETCH_ASSOC);
        return $data;
        print_r($data);
    }
 */
    public function getHeros($_nom_heros)
    {
        $select = $this->_db->prepare('SELECT * FROM heros WHERE nom_heros=?;');
        $select->bindParam(1, $_nom_heros);
        $select->execute();
        if ($select->rowCount() > 0) {
            $reponse = $select->fetch();
            $heros = new Heros($reponse);
            return $heros;
        }
    }

    public function get_img($_nom_heros)
    {
        $select = $this->_db->prepare('SELECT `photo_heros` FROM heros WHERE nom_heros=?;');
        $select->bindParam(1, $_nom_heros);
        $select->execute();
        if ($select->rowCount() > 0) {
            $reponse = $select->fetch();
            $photo = new Heros($reponse);
            return $photo;
        }
    }

    public function set_db()
    {
        $this->_co = new PDO('mysql:host=localhost;dbname=aventurier;charset=utf8', 'stagiaire', 'stagiaire');
        return $this;
    }


    public function get_db()
    {
        return $this->_db;
    }
}




/* try
{
    $bdd = new PDO('mysql:host=localhost;dbname=aventurier', 'stagiaire', 'stagiaire');
}
catch (Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM `heros`');

print_r($reponse);




if (!$_POST['nom_heros']) {
    header('Location: index.php');
    echo "perso n'existe pas";
} */

/* 
$strdo = implode ($donnees);

if ($strdo === $donneescookie) {
    echo 'Identification réussie !';
    header('Location: index.php');
    
} else {
    echo 'Identifaction échouée, mauvais identifiant...';
    header('Location: index.php');
}
 */
