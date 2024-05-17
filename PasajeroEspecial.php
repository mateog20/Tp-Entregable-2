<?php
class PasajeroEspecial extends Pasajero{
    private $necesidad;
    public function __construct($pNombre,$pApellido,$ticket,$asiento,$necesidad)
    {
        parent :: __construct($pNombre,$pApellido,$ticket,$asiento);
        $this->necesidad=$necesidad;
    }
    public function getNecesidad()
    {
        return $this->necesidad;
    }
    public function setNecesidad($necesidad)
    {
        $this->necesidad=$necesidad;
    }
    public function darIncremento()
    {   
        $incremento = 0;
        if ($this->getNecesidad() == 1 || $this->getNecesidad() == 2) {
            $incremento = 0.15;
        }else {
            $incremento = 0.30;
        }
        return $incremento;
    }
}