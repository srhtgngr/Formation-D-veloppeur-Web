<?php

/**
 * @author serhat
 * 
 * class vehicle
 * permet de préparer la classe
 */

class Vehicle
{
    private $_wheel_condition = TRUE;
    private $_fuel_level = 100;
    private $_engine_state = FALSE;

    public function WheelCondition()
    {
        return $this->_wheel_condition;
    }

    public function FuelLevel()
    {
        return $this->_fuel_level;
    }

    public function EngineState()
    {
        return $this->_engine_state;
    }


    /**
     * @param start_engine  possibilité de ne pas démarrer de 20/100
     * @return _engine_state etat du moteur
     */

    public function EngineStart()
    {
        $start_engine = rand(0, 100);

        $this->_engine_state = ($start_engine > 20) ? 'engine started well' : 'engine did not start well';
        
    }
}  