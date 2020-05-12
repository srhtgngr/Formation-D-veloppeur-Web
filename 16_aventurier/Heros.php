<?php

class Heros
{

    private $_id_heros;
    private $_nom_heros;
    private $_vie_max_heros;
    private $_vie_heros;
    private $_force_heros;
    private $_niveau_heros;
    private $_photo_heros;

    public function __construct(array $array)
    {
        $this->hydrate($array);
    }


    public function hydrate(array $array)
    {
        //on fait appel à une boucle pour parcourir
        //le tableau de réponse provenant de la base
        foreach ($array as $key => $value) {
            //on construit la chaîne de caractère
            //qui va représenter la méthode à appeler pour définir l'attribut
            $method = 'set_' . $key;

            //on vérifie que la méthode existe
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of _id_heros
     */
    public function get_id_heros()
    {
        return $this->_id_heros;
    }

    /**
     * Set the value of _id_heros
     *
     * @return  self
     */
    public function set_id_heros($_id_heros)
    {
        $this->_id_heros = $_id_heros;

        return $this;
    }

    /**
     * Get the value of _nom_heros
     */
    public function get_nom_heros()
    {
        return $this->_nom_heros;
    }

    /**
     * Set the value of _nom_heros
     *
     * @return  self
     */
    public function set_nom_heros($_nom_heros)
    {
        $this->_nom_heros = $_nom_heros;

        return $this;
    }

    /**
     * Get the value of _vie_max_heros
     */
    public function get_vie_max_heros()
    {
        return $this->_vie_max_heros;
    }

    /**
     * Set the value of _vie_max_heros
     *
     * @return  self
     */
    public function set_vie_max_heros($_vie_max_heros)
    {
        $this->_vie_max_heros = $_vie_max_heros;

        return $this;
    }

    /**
     * Get the value of _vie_heros
     */
    public function get_vie_heros()
    {
        return $this->_vie_heros;
    }

    /**
     * Set the value of _vie_heros
     *
     * @return  self
     */
    public function set_vie_heros($_vie_heros)
    {
        $this->_vie_heros = $_vie_heros;

        return $this;
    }

    /**
     * Get the value of _force_heros
     */
    public function get_force_heros()
    {
        return $this->_force_heros;
    }

    /**
     * Set the value of _force_heros
     *
     * @return  self
     */
    public function set_force_heros($_force_heros)
    {
        $this->_force_heros = $_force_heros;

        return $this;
    }

    /**
     * Get the value of _niveau_heros
     */
    public function get_niveau_heros()
    {
        return $this->_niveau_heros;
    }

    /**
     * Set the value of _niveau_heros
     *
     * @return  self
     */
    public function set_niveau_heros($_niveau_heros)
    {
        $this->_niveau_heros = $_niveau_heros;

        return $this;
    }

    /**
     * Get the value of _photo_heros
     */
    public function get_photo_heros()
    {
        return $this->_photo_heros;
    }

    /**
     * Set the value of _photo_heros
     *
     * @return  self
     */
    public function set_photo_heros($_photo_heros)
    {
        $this->_photo_heros = $_photo_heros;

        return $this;
    }
}
