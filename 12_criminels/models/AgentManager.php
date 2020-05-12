<?php

namespace serhat;

require "../vendor/autoload.php";
require "../controllers/connexion_bdd.php";


class AgentManager
{

    public function get_id_agents()
    {
        $db = new connexion_bdd;
        $req = $db->get_dbh('SELECT `id_agents` FROM `agents` WHERE `pseudo_a` = \'' . $_POST['pseudo_a'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);
        return $post;
    }

    public function get_pseudo_a()
    {
        $db = new connexion_bdd;
        $req = $db->get_dbh('SELECT `pseudo_a` FROM `agents` WHERE `pseudo_a` = \'' . $_POST['pseudo_a'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);
        return $post;
    }

    public function get_mot_de_passe_a()
    {
        $db = new connexion_bdd;
        $req = $db->get_dbh('SELECT `mot_de_passe_a` FROM `agents` WHERE `pseudo_a` = \'' . $_POST['pseudo_a'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);
        return $post;
    }

    public function get_niveau_accreditation_a()
    {
        $db = new connexion_bdd;
        $req = $db->get_dbh('SELECT `niveau_accreditation_a` FROM `agents` WHERE `pseudo_a` = \'' . $_POST['pseudo_a'] . '\'');
        $req->execute();
        $post = $req->fetch(\PDO::FETCH_ASSOC);
        return $post;
    }

    
}

$a = new AgentManager;

echo '<pre>';

print_r($a->get_pseudo_a());
print_r($a->get_id_agents());
print_r($a->get_mot_de_passe_a());
print_r($a->get_niveau_accreditation_a());

echo '</pre>';
