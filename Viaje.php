<?php
/**
 * ANOTACIONES 
 * De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
 * El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero
 * La clase Viaje debe hacer referencia al responsable de realizar el viaje.
 */
class Viaje{

    private $codigo;
    private $destino;
    private $cantMaxPasajero;
    private $colPasajero;
    private $objResponsable;
    private $costo;
    //Construct
    public function __construct($pCodigo,$pDestino,$nMaxPasajero,$pObjResponsable,$costo,$costoTotal)
    {
        $this->codigo=$pCodigo;
        $this->destino=$pDestino;
        $this->cantMaxPasajero=$nMaxPasajero;
        $this->colPasajero=array();
        $this->objResponsable=$pObjResponsable;
        $this->costo=$costo;
    }
    //Metodos de acceso
    //GET
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getDestino()
    {
        return $this->destino;
    }
    public function getMaxPasajero()
    {
        return $this->cantMaxPasajero;
    }
    public function getColPasajero()
    {
        return $this->colPasajero;
    }
    public function getResponsable()
    {
        return $this->objResponsable;
    }
    public function getCosto()
    {
        return $this->costo;
    }
    //SET
    public function setCodigo($nCodigo)
    {
        $this->codigo=$nCodigo;
    }
    public function setDestino($nDestino)
    {
        $this->destino=$nDestino;
    }
    public function setMaxPasajero($nMaxPasajero)
    {
        $this->cantMaxPasajero=$nMaxPasajero;
    }
    public function setColPasajero($nPasajero)
    {
        $this->colPasajero[]=$nPasajero;
    }
    public function setResponsable($nResponsable)
    {
        $this->objResponsable=$nResponsable;
    }
    public function setCosto($costo)
    {
        $this->costo=$costo;
    }
    //Metodo __tostring
    public function __toString()
    {
     $mostrar=
     "Datos del vuelo "  ."\n". 
     "Codigo de vuelo: ". $this->getCodigo()."\n".
     "Destino: ". $this->getDestino()."\n".
     "Cantidad maxima de pasajeros: ". $this->getMaxPasajero()."\n";
     return $mostrar;
    }
    // Metodos de la clase


    public function comprobarPasajero($objPasajeroComprobar)
    {
        $mismaPersona=false;
        foreach ($this->getPasajero() as $pasajero) {
            if ($pasajero->getDocumento() == $objPasajeroComprobar->getDocumento()) {
                $mismaPersona=true;
            }
    }
    return $mismaPersona;
}
public function venderPasaje($objPasajero)
{
    $agregarPasajero=array();
    if ($this->comprobarPasajero($objPasajero)) 
    {
        array_push($agregarPasajero,$objPasajero);
        $this->setColPasajero($agregarPasajero);
        $precioTotal = $this->getCosto() * $objPasajero -> darIncremento();
    }
}
}