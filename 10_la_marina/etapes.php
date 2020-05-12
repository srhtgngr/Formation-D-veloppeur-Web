<?php
/**
 * @author Isabelle Thomas Serhat
 * 
 * @class entretien etend la class bateau
 */


class etape{
    /**
     * @var int$_id identification de l'entretien
     * @var varchar$_gps  periodicité du controle
     * @var varchar$_port date du précédent controle
     */


    private $_id;
    private $_gps;
    private $_port;

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

        if (isset($donnees['gps']))
            {
                $this->_gps=$donnees['gps'];
            }

        if (isset($donnees['port']))
            {
                $this->_port=$donnees['port'];
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
     * Get the value of _gps
     */ 
    public function get_gps()
    {
        return $this->_gps;
    }

    /**
     * Set the value of _gps
     *
     * @return  self
     */ 
    public function set_gps($_gps)
    {
        $this->_gps = $_gps;

        return $this;
    }

    /**
     * Get the value of _port
     */ 
    public function get_port()
    {
        return $this->_port;
    }

    /**
     * Set the value of _port
     *
     * @return  self
     */ 
    public function set_port($_port)
    {
        $this->_port = $_port;

        return $this;
    }


}


try
{
    $conn = new PDO("mysql:host=localhost;dbname=La_Marina", 'stagiaire', 'stagiaire'); // connexion à la BDD

    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "SELECT * FROM etape";
    $req = $conn->query($sql);   
    
    //$resultat = $req->fetch();
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
        
    
}
catch(Exception $e)
{
    die(print_r($e));
}


$test = new etape($donnees);
echo $test->get_id();
echo $test->get_port();
echo $test->get_gps();


