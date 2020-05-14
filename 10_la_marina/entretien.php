<?php
/**
 * @author Isabelle Thomas Serhat
 * 
 * @class entretien
 */


class entretien
{
    /**
     * @var int identification de l'entretien
     * @var varchar type de l'entretien
     */


    private $_id;
    private $_type_entretien;


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

        if (isset($donnees['type_entretien']))
            {
                $this->_type_entretien=$donnees['type_entretien'];
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
     * Get the value of _type_entretien
     */ 
    public function get_type_entretien()
    {
        return $this->_type_entretien;
    }
    
    /**
     * Set the value of _type_entretien
     *
     * @return  self
     */ 
    public function set_type_entretien($_type_entretien)
    {
        $this->_type_entretien = $_type_entretien;

        return $this;
    }
}

try
{
    $conn = new PDO("mysql:host=localhost;dbname=La_Marina", 'stagiaire', 'stagiaire'); // connexion à la BDD

    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "SELECT * FROM entretien";
    $req = $conn->query($sql);   
    
    //$resultat = $req->fetch();
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
        
    
}
catch(Exception $e)
{
    die(print_r($e));
}

$entretien = new entretien($donnees);
echo $entretien->get_id();
echo $entretien->get_type_entretien();