<?php

namespace serhat;

class acolytes
{
    private $_coopere;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
    public function hydrate(array $donnees)
    {
        if (isset($donnees['coopere'])) {
            $this->_coopere = $donnees['coopere'];
        }
    }

    /**
     * Get the value of _coopere
     */
    public function get_coopere()
    {
        return $this->_coopere;
    }

    /**
     * Set the value of _coopere
     *
     * @return  self
     */
    public function set_coopere($_coopere)
    {
        $this->_coopere = $_coopere;

        return $this;
    }
}
try {
    $conn = new \PDO("mysql:host=localhost;dbname=criminels", 'stagiaire', 'stagiaire');

    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM acolytes";
    $req = $conn->query($sql);

    //$resultat = $req->fetch();
    $donnees = $req->fetch(\PDO::FETCH_ASSOC);
    $req->closeCursor();
} catch (\Exception $e) {
    die(print_r($e));
}
$z = new acolytes($donnees);
echo $z->get_coopere();
