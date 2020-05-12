<?php

namespace serhat;

class condamnation extends recherches
{
    private $_id_c;
    private $_libelle_affaire_c;
    private $_date_c;
    private $_duree_c;
    private $_date_liberation_c;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        if (isset($donnees['id_c'])) {
            $this->_id_c = $donnees['id_c'];
        }
        if (isset($donnees['libelle_affaire_c'])) {
            $this->_libelle_affaire_c = $donnees['libelle_affaire_c'];
        }
        if (isset($donnees['date_c'])) {
            $this->_date_c = $donnees['date_c'];
        }
        if (isset($donnees['duree_c'])) {
            $this->_duree_c = $donnees['duree_c'];
        }
        if (isset($donnees['date_liberation_c'])) {
            $this->_date_liberation_c = $donnees['date_liberation_c'];
        }
    }

    /**
     * Get the value of _id_c
     */
    public function get_id_c()
    {
        return $this->_id_c;
    }

    /**
     * Set the value of _id_c
     *
     * @return  self
     */
    public function set_id_c($_id_c)
    {
        $this->_id_c = $_id_c;

        return $this;
    }

    /**
     * Get the value of _libelle_affaire_c
     */
    public function get_libelle_affaire_c()
    {
        return $this->_libelle_affaire_c;
    }

    /**
     * Set the value of _libelle_affaire_c
     *
     * @return  self
     */
    public function set_libelle_affaire_c($_libelle_affaire_c)
    {
        $this->_libelle_affaire_c = $_libelle_affaire_c;

        return $this;
    }

    /**
     * Get the value of _date_c
     */
    public function get_date_c()
    {
        return $this->_date_c;
    }

    /**
     * Set the value of _date_c
     *
     * @return  self
     */
    public function set_date_c($_date_c)
    {
        $this->_date_c = $_date_c;

        return $this;
    }

    /**
     * Get the value of _duree_c
     */
    public function get_duree_c()
    {
        return $this->_duree_c;
    }

    /**
     * Set the value of _duree_c
     *
     * @return  self
     */
    public function set_duree_c($_duree_c)
    {
        $this->_duree_c = $_duree_c;

        return $this;
    }

    /**
     * Get the value of _date_liberation_c
     */
    public function get_date_liberation_c()
    {
        return $this->_date_liberation_c;
    }

    /**
     * Set the value of _date_liberation_c
     *
     * @return  self
     */
    public function set_date_liberation_c($_date_liberation_c)
    {
        $this->_date_liberation_c = $_date_liberation_c;

        return $this;
    }
}

try {
    $conn = new \PDO("mysql:host=localhost;dbname=criminels", 'stagiaire', 'stagiaire');

    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM condamnations";
    $req = $conn->query($sql);

    //$resultat = $req->fetch();
    $donnees = $req->fetch(\PDO::FETCH_ASSOC);
    $req->closeCursor();
} catch (\Exception $e) {
    die(print_r($e));
}
$z = new condamnation($donnees);
print_r($donnees);
