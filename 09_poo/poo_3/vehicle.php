<?php

/**
 * @author serhat
 * 
 * class vehicle
 * permet de préparer la classe
 */

class Vehicle
{
    private $_wheel_condition;
    private $_fuel_level;
    private $_engine_state;
    private $_engine_power;

    const LOW_ENGINE_POWER = 90;
    const MID_ENGINE_POWER = 110;
    const HIGH_ENGINE_POWER = 130;

    public function __construct($_wheel_condition, $_fuel_level, $_engine_state, $_engine_power)
    {
        $this->set_wheel_condition($_wheel_condition);
        $this->set_fuel_level($_fuel_level);
        $this->set_engine_state($_engine_state);
        $this->set_engine_power($_engine_power);
    }


    /**
     * Get the value of _wheel_condition
     */
    public function get_wheel_condition()
    {
        return $this->_wheel_condition;
    }

    /**
     * Set the value of _wheel_condition
     *
     * @return  self
     */
    public function set_wheel_condition($_wheel_condition)
    {
        $this->_wheel_condition = $_wheel_condition;

        return $this;
    }

    /**
     * Get the value of _fuel_level
     */
    public function get_fuel_level()
    {
        return $this->_fuel_level;
    }

    /**
     * Set the value of _fuel_level
     *
     * @return  self
     */
    public function set_fuel_level($_fuel_level)
    {
        $this->_fuel_level = $_fuel_level;

        return $this;
    }

    /**
     * Get the value of _engine_state
     */
    public function get_engine_state()
    {
        return $this->_engine_state;
    }

    /**
     * Set the value of _engine_state
     *
     * @return  self
     */
    public function set_engine_state($_engine_state)
    {
        $this->_engine_state = $_engine_state;

        return $this;
    }

        /**
     * Get the value of _engine_power
     */ 
    public function get_engine_power()
    {
        return $this->_engine_power;
    }

    /**
     * Set the value of _engine_power
     *
     * @return  self
     */ 
    public function set_engine_power($_engine_power)
    {    

        if (in_array($_engine_power, [self::LOW_ENGINE_POWER, self::MID_ENGINE_POWER, self::HIGH_ENGINE_POWER]))

        $this->_engine_power = $_engine_power;
        return $this;
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
