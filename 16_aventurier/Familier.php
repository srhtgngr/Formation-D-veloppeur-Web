<?php

class Familier
{

    private $_id;
    private $_nom_familier;
    private $_vie_max_familier;
    private $_vie_familier;
    private $_force_familier;
    private $_niveau_familier;
    private $_photo_familier;
    private $_created_at;
    private $_heros_id_heros;

    public function __construct(array $array)
    {
        $this->hydrate_agent($array);
    }

    public function hydrate_agent(array $array)
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
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Get the value of _nom_familier
     */
    public function get_nom_familier()
    {
        return $this->_nom_familier;
    }

    /**
     * Get the value of _vie_max_familier
     */
    public function get_vie_max_familier()
    {
        return $this->_vie_max_familier;
    }

    /**
     * Get the value of _vie_familier
     */
    public function get_vie_familier()
    {
        return $this->_vie_familier;
    }

    /**
     * Get the value of _force_familier
     */
    public function get_force_familier()
    {
        return $this->_force_familier;
    }

    /**
     * Get the value of _niveau_familier
     */
    public function get_niveau_familier()
    {
        return $this->_niveau_familier;
    }

    /**
     * Get the value of _photo_familier
     */
    public function get_photo_familier()
    {
        return $this->_photo_familier;
    }

    /**
     * Get the value of _created_at
     */
    public function get_created_at()
    {
        return $this->_created_at;
    }

    /**
     * Get the value of _heros_id_heros
     */
    public function get_heros_id_heros()
    {
        return $this->_heros_id_heros;
    }
}