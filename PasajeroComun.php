<?php
class PasajeroComun extends Pasajero
{
    public function __construct($pNombre,$pApellido,$ticket,$asiento)
    {
        parent::__construct($pNombre,$pApellido,$ticket,$asiento);
    }
    public function darIncremento()
    {
        $incremento=0.10;
        return $incremento;
    }
}