<?php

namespace serhat;



class connexion_bdd
{
    private $_dbh;

    CONST ADRESS = 'mysql:host=localhost;dbname=criminels';
    CONST USER  = 'stagiaire';
    CONST PASS = 'stagiaire';
    
    function __construct()
    {
        
        try{
        $db =  new \PDO(self::ADRESS, self::USER, self::PASS, array(
            \PDO::ATTR_PERSISTENT => true
        ));
        } catch (\PDOException $Exception){

            }
            $this->set_dbh($db);
            return $db;
    }


    /**
     * Get the value of _dbh
     */ 
    public function get_dbh()
    {
        return $this->_dbh;
    }

    /**
     * Set the value of _dbh
     *
     * @return  self
     */ 
    public function set_dbh($_dbh)
    {
        $this->_dbh = $_dbh;

        return $this;
    }
}