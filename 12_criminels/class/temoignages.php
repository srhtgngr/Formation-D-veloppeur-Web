<?php

namespace serhat;

class temoignages extends recherches
{
    private $_id_temoignage;
    private $_localisation_t;
    private $_nature_t;
    private $_temoin_t;
    private $_numero_tel_temoin_t;
    private $_adresse_temoin_t;
    private $_date_s;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        if (isset($donnees['id_temoignage'])) {
            $this->_id_temoignage = $donnees['id_temoignage'];
        }
        if (isset($donnees['localisation_t'])) {
            $this->_localisation_t = $donnees['localisation_t'];
        }
        if (isset($donnees['nature_t'])) {
            $this->_nature_t = $donnees['nature_t'];
        }
        if (isset($donnees['temoin_t'])) {
            $this->_temoin_t = $donnees['temoin_t'];
        }
        if (isset($donnees['numero_tel_temoin_t'])) {
            $this->_numero_tel_temoin_t = $donnees['numero_tel_temoin_t'];
        }
        if (isset($donnees['adresse_temoin_t'])) {
            $this->_adresse_temoin_t = $donnees['adresse_temoin_t'];
        }
        if (isset($donnees['date_s'])) {
            $this->_date_s = $donnees['date_s'];
        }
    }

    /**
     * Get the value of _id_temoignage
     */
    public function get_id_temoignage()
    {
        return $this->_id_temoignage;
    }

    /**
     * Set the value of _id_temoignage
     *
     * @return  self
     */
    public function set_id_temoignage($_id_temoignage)
    {
        $this->_id_temoignage = $_id_temoignage;

        return $this;
    }

    /**
     * Get the value of _localisation_t
     */
    public function get_localisation_t()
    {
        return $this->_localisation_t;
    }

    /**
     * Set the value of _localisation_t
     *
     * @return  self
     */
    public function set_localisation_t($_localisation_t)
    {
        $this->_localisation_t = $_localisation_t;

        return $this;
    }

    /**
     * Get the value of _nature_t
     */
    public function get_nature_t()
    {
        return $this->_nature_t;
    }

    /**
     * Set the value of _nature_t
     *
     * @return  self
     */
    public function set_nature_t($_nature_t)
    {
        $this->_nature_t = $_nature_t;

        return $this;
    }

    /**
     * Get the value of _temoin_t
     */
    public function get_temoin_t()
    {
        return $this->_temoin_t;
    }

    /**
     * Set the value of _temoin_t
     *
     * @return  self
     */
    public function set_temoin_t($_temoin_t)
    {
        $this->_temoin_t = $_temoin_t;

        return $this;
    }

    /**
     * Get the value of _numero_tel_temoin_t
     */
    public function get_numero_tel_temoin_t()
    {
        return $this->_numero_tel_temoin_t;
    }

    /**
     * Set the value of _numero_tel_temoin_t
     *
     * @return  self
     */
    public function set_numero_tel_temoin_t($_numero_tel_temoin_t)
    {
        $this->_numero_tel_temoin_t = $_numero_tel_temoin_t;

        return $this;
    }

    /**
     * Get the value of _adresse_temoin_t
     */
    public function get_adresse_temoin_t()
    {
        return $this->_adresse_temoin_t;
    }

    /**
     * Set the value of _adresse_temoin_t
     *
     * @return  self
     */
    public function set_adresse_temoin_t($_adresse_temoin_t)
    {
        $this->_adresse_temoin_t = $_adresse_temoin_t;

        return $this;
    }

    /**
     * Get the value of _date_s
     */
    public function get_date_s()
    {
        return $this->_date_s;
    }

    /**
     * Set the value of _date_s
     *
     * @return  self
     */
    public function set_date_s($_date_s)
    {
        $this->_date_s = $_date_s;

        return $this;
    }
}
try {
    $conn = new \PDO("mysql:host=localhost;dbname=criminels", 'stagiaire', 'stagiaire');

    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM temoignages";
    $req = $conn->query($sql);

    //$resultat = $req->fetch();
    $donnees = $req->fetch(\PDO::FETCH_ASSOC);
    $req->closeCursor();
} catch (\Exception $e) {
    die(print_r($e));
}
$z = new temoignages($donnees);
echo $z->get_adresse_temoin_t();
