<?php
/**
 * @author Isabelle Thomas Serhat
 * 
 * @class  bateaux
 */


class bateaux{
    /**
     * @var int identification du bateau
     * @var varchar nom du bateau
     * @var varchar modele
     * @var varchar taille en mètres
     * @var varchar propriétaire
     */


    private $_id;
    private $_nom;
    private $_modele;
    private $_taille;
    private $_proprietaire;


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

        if (isset($donnees['nom']))
            {
                $this->_nom=$donnees['nom'];
            }

        if (isset($donnees['modele']))
            {
                $this->_modele=$donnees['modele'];
            }

        if (isset($donnees['taille']))
            {
                $this->_taille=$donnees['taille'];
            }

        if (isset($donnees['proprietaire']))
            {
                $this->_proprietaire=$donnees['proprietaire'];
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
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _modele
     */ 
    public function get_modele()
    {
        return $this->_modele;
    }

    /**
     * Set the value of _modele
     *
     * @return  self
     */ 
    public function set_modele($_modele)
    {
        $this->_modele = $_modele;

        return $this;
    }

    /**
     * Get the value of _taille
     */ 
    public function get_taille()
    {
        return $this->_taille;
    }

    /**
     * Set the value of _taille
     *
     * @return  self
     */ 
    public function set_taille($_taille)
    {
        $this->_taille = $_taille;

        return $this;
    }
        /**
     * Get the value of _proprietaire
     */ 
    public function get_proprietaire()
    {
        return $this->_proprietaire;
    }

    /**
     * Set the value of _proprietaire
     *
     * @return  self
     */ 
    public function set_proprietaire($_proprietaire)
    {
        $this->_proprietaire = $_proprietaire;

        return $this;
    }

}

try
{
    $conn = new PDO("mysql:host=localhost;dbname=La_Marina", 'stagiaire', 'stagiaire'); // connexion à la BDD

    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "SELECT * FROM bateaux";
    $req = $conn->query($sql);   
    
    //$resultat = $req->fetch();
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
}
catch(Exception $e)
{
    die(print_r($e));
}

$bateau1 = new bateaux($donnees);
echo $bateau1->get_id();
echo $bateau1->get_nom();
