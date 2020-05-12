<?php

namespace serhat;

class recherches
{
    private $_id_r;
    private $_nom_r;
    private $_prenom_r;
    private $_date_naissance_r;
    private $_signe_distinctif_r;
    private $_profil_psy_r;
    private $_niveau_accreditation;
    private $_nom_photo_r;
    private $_informations_r;
    private $_derniere_adresse_r;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        if (isset($donnees['id_r'])) {
            $this->_id_r = $donnees['id_r'];
        }
        if (isset($donnees['nom_r'])) {
            $this->_nom_r = $donnees['nom_r'];
        }
        if (isset($donnees['prenom_r'])) {
            $this->_prenom_r = $donnees['prenom_r'];
        }
        if (isset($donnees['date_naissance_r'])) {
            $this->_date_naissance_r = $donnees['date_naissance_r'];
        }
        if (isset($donnees['signe_distinctif_r'])) {
            $this->_signe_distinctif_r = $donnees['signe_distinctif_r'];
        }
        if (isset($donnees['profil_psy_r'])) {
            $this->_profil_psy_r = $donnees['profil_psy_r'];
        }
        if (isset($donnees['niveau_accreditation'])) {
            $this->_niveau_accreditation = $donnees['niveau_accreditation'];
        }
        if (isset($donnees['nom_photo_r'])) {
            $this->_nom_photo_r = $donnees['nom_photo_r'];
        }
        if (isset($donnees['informations_r'])) {
            $this->_informations_r = $donnees['informations_r'];
        }
        if (isset($donnees['derniere_adresse_r'])) {
            $this->_derniere_adresse_r = $donnees['derniere_adresse_r'];
        }
    }

    /**
     * Get the value of _id_r
     */
    public function get_id_r()
    {
        return $this->_id_r;
    }

    /**
     * Set the value of _id_r
     *
     * @return  self
     */
    public function set_id_r($_id_r)
    {
        $this->_id_r = $_id_r;

        return $this;
    }

    /**
     * Get the value of _nom_r
     */
    public function get_nom_r()
    {
        return $this->_nom_r;
    }

    /**
     * Set the value of _nom_r
     *
     * @return  self
     */
    public function set_nom_r($_nom_r)
    {
        $this->_nom_r = $_nom_r;

        return $this;
    }

    /**
     * Get the value of _prenom_r
     */
    public function get_prenom_r()
    {
        return $this->_prenom_r;
    }

    /**
     * Set the value of _prenom_r
     *
     * @return  self
     */
    public function set_prenom_r($_prenom_r)
    {
        $this->_prenom_r = $_prenom_r;

        return $this;
    }

    /**
     * Get the value of _date_naissance_r
     */
    public function get_date_naissance_r()
    {
        return $this->_date_naissance_r;
    }

    /**
     * Set the value of _date_naissance_r
     *
     * @return  self
     */
    public function set_date_naissance_r($_date_naissance_r)
    {
        $this->_date_naissance_r = $_date_naissance_r;

        return $this;
    }

    /**
     * Get the value of _signe_distinctif_r
     */
    public function get_signe_distinctif_r()
    {
        return $this->_signe_distinctif_r;
    }

    /**
     * Set the value of _signe_distinctif_r
     *
     * @return  self
     */
    public function set_signe_distinctif_r($_signe_distinctif_r)
    {
        $this->_signe_distinctif_r = $_signe_distinctif_r;

        return $this;
    }

    /**
     * Get the value of _profil_psy_r
     */
    public function get_profil_psy_r()
    {
        return $this->_profil_psy_r;
    }

    /**
     * Set the value of _profil_psy_r
     *
     * @return  self
     */
    public function set_profil_psy_r($_profil_psy_r)
    {
        $this->_profil_psy_r = $_profil_psy_r;

        return $this;
    }

    /**
     * Get the value of _niveau_accreditation
     */
    public function get_niveau_accreditation()
    {
        return $this->_niveau_accreditation;
    }

    /**
     * Set the value of _niveau_accreditation
     *
     * @return  self
     */
    public function set_niveau_accreditation($_niveau_accreditation)
    {
        $this->_niveau_accreditation = $_niveau_accreditation;

        return $this;
    }

    /**
     * Get the value of _nom_photo_r
     */
    public function get_nom_photo_r()
    {
        return $this->_nom_photo_r;
    }

    /**
     * Set the value of _nom_photo_r
     *
     * @return  self
     */
    public function set_nom_photo_r($_nom_photo_r)
    {
        $this->_nom_photo_r = $_nom_photo_r;

        return $this;
    }

    /**
     * Get the value of _informations_r
     */
    public function get_informations_r()
    {
        return $this->_informations_r;
    }

    /**
     * Set the value of _informations_r
     *
     * @return  self
     */
    public function set_informations_r($_informations_r)
    {
        $this->_informations_r = $_informations_r;

        return $this;
    }

    /**
     * Get the value of _derniere_adresse_r
     */
    public function get_derniere_adresse_r()
    {
        return $this->_derniere_adresse_r;
    }

    /**
     * Set the value of _derniere_adresse_r
     *
     * @return  self
     */
    public function set_derniere_adresse_r($_derniere_adresse_r)
    {
        $this->_derniere_adresse_r = $_derniere_adresse_r;

        return $this;
    }
}
try {
    $conn = new \PDO("mysql:host=localhost;dbname=criminels", 'stagiaire', 'stagiaire');

    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM recherches";
    $req = $conn->query($sql);

    //$resultat = $req->fetch();
    $donnees = $req->fetch(\PDO::FETCH_ASSOC);
    $req->closeCursor();
} catch (\Exception $e) {
    die(print_r($e));
}
$z = new recherches($donnees);
echo $z->get_prenom_r();
echo $z->get_signe_distinctif_r();
