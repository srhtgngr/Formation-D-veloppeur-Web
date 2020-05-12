<?php

namespace serhat;

require "../vendor/autoload.php";

class CriminelsManager
{

    public function get_id_r()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT `id_r` FROM `recherches` WHERE `nom_r`=\'' . $_POST['nom_r'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);

        return $post;
    }

    public function get_nom_r()
    {

        $db = $this->dbConnect();
        $req = $db->query('SELECT `nom_r` FROM `recherches` WHERE `nom_r`=\'' . $_POST['nom_r'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);

        return $post;
    }

    public function get_prenom_r()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT `prenom_r` FROM `recherches` WHERE `nom_r`=\'' . $_POST['nom_r'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);

        return $post;
    }

    public function get_date_naissance_r()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT `date_naissance_r` FROM `recherches` WHERE `nom_r`=\'' . $_POST['nom_r'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);

        return $post;
    }
    public function get_signe_distinctif_r()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT `signe_distinctif_r` FROM `recherches` WHERE `nom_r`=\'' . $_POST['nom_r'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);

        return $post;
    }
    public function get_profil_psy_r()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT `profil_psy_r` FROM `recherches` WHERE `nom_r`=\'' . $_POST['nom_r'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);

        return $post;
    }
    public function get_niveau_accreditation()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT `niveau_accreditation` FROM `recherches` WHERE `nom_r`=\'' . $_POST['nom_r'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);

        return $post;
    }
    public function get_nom_photo_r()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT `nom_photo_r` FROM `recherches` WHERE `nom_r`=\'' . $_POST['nom_r'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);

        return $post;
    }
    public function get_informations_r()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT `informations_r` FROM `recherches` WHERE `nom_r`=\'' . $_POST['nom_r'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);

        return $post;
    }
    public function get_derniere_adresse_r()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT `derniere_adresse_r` FROM `recherches` WHERE `nom_r`=\'' . $_POST['nom_r'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);

        return $post;
    }


    public function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=criminels;charset=utf8', 'stagiaire', 'stagiaire');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM recherches";
        $req = $db->query($sql);
        return $db;

        $req->closeCursor();
    }
}


$a = new CriminelsManager;

echo '<pre>';

print_r($a->get_id_r());
print_r($a->get_nom_r());
print_r($a->get_prenom_r());
print_r($a->get_date_naissance_r());
print_r($a->get_signe_distinctif_r());
print_r($a->get_profil_psy_r());
print_r($a->get_niveau_accreditation());
print_r($a->get_nom_photo_r());
print_r($a->get_informations_r());
print_r($a->get_derniere_adresse_r());

echo '</pre>';