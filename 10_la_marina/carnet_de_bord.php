<?php
/**
 * @author Isabelle Thomas Serhat
 * 
 * @class entretien etend la class bateau
 */


class carnet_de_bord{
    

    private $_id;
    private $_depart;
    private $_arrivee;
    

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

        if (isset($donnees['depart']))
            {
                $this->_depart=$donnees['depart'];
            }

        if (isset($donnees['arrivee']))
            {
                $this->_arrivee=$donnees['arrivee'];
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
     * Get the value of _depart
     */ 
    public function get_depart()
    {
        return $this->_depart;
    }

    /**
     * Set the value of _depart
     *
     * @return  self
     */ 
    public function set_depart($_depart)
    {
        $this->_depart = $_depart;

        return $this;
    }

    /**
     * Get the value of _arrivee
     */ 
    public function get_arrivee()
    {
        return $this->_arrivee;
    }

    /**
     * Set the value of _arrivee
     *
     * @return  self
     */ 
    public function set_arrivee($_arrivee)
    {
        $this->_arrivee = $_arrivee;

        return $this;
    }

}


try
{
    $conn = new PDO("mysql:host=localhost;dbname=La_Marina", 'stagiaire', 'stagiaire'); // connexion à la BDD

    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "SELECT * FROM carnet_de_bord";
    $req = $conn->query($sql);   
    
    //$resultat = $req->fetch();
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
        
    
}
catch(Exception $e)
{
    die(print_r($e));
}


$test = new carnet_de_bord($donnees);
echo $test->get_id();
echo $test->get_arrivee();