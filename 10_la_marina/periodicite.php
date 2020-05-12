<?php
/**
 * @author Isabelle Thomas Serhat
 * 
 * @class entretien etend la class bateau
 */


class periodicite_entretien{
    /**
     * @var int identification de l'entretien
     * @var varchar periodicite
     * @var varchar dernier entretien
     * @var varchar prochain entretien
     */

    private $_id;
    private $_periodicite_en_annee;
    private $_dernier_entretien;
    private $_prochain_entretien;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).

    public function hydrate(array $donnees)

    {

        if (isset($donnees['id'])){
                $this->_id=$donnees['id'];
            }

        if (isset($donnees['periodicite_en_annee']))
            {
                $this->_periodicite_en_annee=$donnees['periodicite_en_annee'];
            }

        if (isset($donnees['dernier_entretien']))
            {
                $this->_dernier_entretien=$donnees['dernier_entretien'];
            }

        if (isset($donnees['prochain_entretien']))
            {
                $this->_prochain_entretien=$donnees['prochain_entretien'];
            }
    }

    /**
     * @var getter des private 
     * @var setter des private
     */

    /**
     * Get the value of _id
     */ 
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Set the value of _id
     *
     * @return  self
     */ 
    public function set_id($_id)
    {
        $this->_id = $_id;

        return $this;
    }

    /**
     * Get the value of _periodicite_en_annee
     */ 
    public function get_periodicite_en_annee()
    {
        return $this->_periodicite_en_annee;
    }

    /**
     * Set the value of _periodicit"_en_annee
     *
     * @return  self
     */ 
    public function set_periodicite_en_annee($_periodicite_en_annee)
    {
        $this->_periodicite_en_annee = $_periodicite_en_annee;

        return $this;
    }

    /**
     * Get the value of _dernier_entretien
     */ 
    public function get_dernier_entretien()
    {
        return $this->_dernier_entretien;
    }

    /**
     * Set the value of _dernier_entretien
     *
     * @return  self
     */ 
    public function set_dernier_entretien($_dernier_entretien)
    {
        $this->_dernier_entretien = $_dernier_entretien;

        return $this;
    }

    /**
     * Get the value of _prochain_entretien
     */ 
    public function get_prochain_entretien()
    {
        return $this->_prochain_entretien;
    }

    /**
     * Set the value of8 _prochain_entretien
     *
     * @return  self
     */ 
    public function set_prochain_entretien($_prochain_entretien)
    {
        $this->_prochain_entretien = $_prochain_entretien;

        return $this;
    }
}

try
{
    $conn = new PDO("mysql:host=localhost;dbname=La_Marina", 'stagiaire', 'stagiaire'); // connexion à la BDD

    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "SELECT * FROM periodicite_entretien";
    $req = $conn->query($sql);   
    
    //$resultat = $req->fetch();
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
        
    
}
catch(Exception $e)
{
    die(print_r($e));
}

$periodicite_entretien = new periodicite_entretien($donnees);
echo $periodicite_entretien->get_id();
echo $periodicite_entretien->get_dernier_entretien();