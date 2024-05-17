<?php
/**
 * Clase para almacenar informacion de un pasajero
 * Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.
 */
class Pasajero{
    private $nombre;
    private $apellido;
    private $numTicket;
    private $numAsiento;
    //Construct
    public function __construct($pNombre,$pApellido,$ticket,$asiento)
    {
        $this->nombre=$pNombre;
        $this->apellido=$pApellido;
        $this->numAsiento=$asiento;
        $this->numTicket=$ticket;
    }
    //Metodos de acceso
    //GET
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getAsiento()
    {
        return $this->numAsiento;
    }

    public function getTicket()
    {
        return $this->numTicket;
    }
    //SET
    public function setNombre($nNombre)
    {
        $this->nombre=$nNombre;
    }
    public function setApellido($nApellido)
    {
        $this->apellido=$nApellido;
    }
    public function setAsiento($asiento)
    {
        return $this->numAsiento=$asiento;
    }
    public function setTicket($ticket)
    {
        return $this->numTicket=$ticket;
    }
    
    //Metodo __tostring
    public function __toString()
    {
        $mostrar=
        "Datos del pasajero"."\n".
        "Nombre: ". $this->getNombre()."\n".
        "Apellido: ". $this->getApellido()."\n";
        return $mostrar;
    }
    public function darIncremento()
    {
        $incremento=0;
        return $incremento;
    }
}
