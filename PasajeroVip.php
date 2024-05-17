<?php
class PasajeroVip extends Pasajero
{
    private $numViajero;
    private $millas;
    public function __construct($pNombre,$pApellido,$ticket,$asiento,$numViajero,$millas)
    {
        parent::__construct($pNombre,$pApellido,$ticket,$asiento);
        $this->numViajero=$numViajero;
        $this->millas=$millas;
    }
    public function getViajero()
    {
        return $this->numViajero;
    }
    public function setViajero($viajero)
    {
        $this->numViajero=$viajero;
    }
    public function getMillas()
    {
        return $this->millas;
    }
    public function setMillas($millas)
    {
        $this->millas=$millas;
    }
    public function darIncremento()
    {
        $incremento=0.35;
        if ($this->getMillas() > 300) {
            $incremento=0.30;
        }
        return $incremento;
    }
}