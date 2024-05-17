<?php
include_once "Pasajero.php";
include_once "PasajeroComun.php";
include_once "PasajeroEspecial.php";
include_once "PasajeroVip.php";
include_once "Viaje.php";
function menuPrincipal()
{
    $menuTipo =
        "MENU PRINCIPAL:\n" .
        "1. Cargar informacion del viaje\n" .
        "2. Agregar/Modificar pasajeros\n" .
        "0. Salir\n";
    return $menuTipo;
}
function menuDatos()
{
    $menu=
    "Nombre :"."\n".
    "Apellido:"."\n".
    "Numero ticket: "."\n".
    "Numero de asiento: "."\n";
    return $menu;
}
function menuPasajero()
{
    $menu=
    "1. Pasajero Comun"."\n".
    "2. Pasajero Vip"."\n".
    "3. Pasajero Especial."."\n";
    return $menu;
}
function menuNecesidades()
{
    $menu=
    "1. Silla de ruedas"."\n".
    "2. Asistencia y comidas especiales" ."\n";
    return $menu;
}
do
{
 echo menuPrincipal();
 $opcion=trim(fgets(STDIN));
 if ($opcion == 1) {
    // Cargar informacion del viaje
    echo "Ingrese el codigo del viaje: ";
    $codigo = trim(fgets(STDIN));
    echo "Ingrese el destino del viaje: ";
    $destino = trim(fgets(STDIN));
    echo "Ingrese la cantidad maxima de pasajeros: ";
    $cantPasajero = trim(fgets(STDIN));
    $viaje= new Viaje($codigo,$destino,$cantPasajero,$pasajero,$responsable);
    echo "Se ha creado el viaje .\n";
 }
 if ($opcion == 2)
    // Menu de datos generales del pasajero
    echo menuDatos();
    echo "Nombre del pasajero: ";
    $nombre = trim(fgets(STDIN));
    echo "Apellido del pasajero: ";
    $apellido = trim(fgets(STDIN));
    echo "Numero de ticket: ";
    $ticket = trim(fgets(STDIN));
    echo "Numero de asiento: ";
    $asiento = trim(fgets(STDIN));
    // Menu para elegir tipo de pasajero
    echo menuPasajero();
    $opcionPasajero=trim(fgets(STDIN));
   switch ($opcionPasajero) 
   {
    case 1:
        $pasajero = new PasajeroComun($nombre,$apellido,$ticket,$asiento);
        break;
    case 2:
        echo "Numero de viajero: ";
        $viajero = trim(fgets(STDIN));
        echo "Cantidad de millas acumuladas: ";
        $millas = trim(fgets(STDIN));
        $pasajero= new PasajeroVip($nombre,$apellido,$ticket,$asiento,$viajero,$millas);
        break;
    case 3;
        echo menuNecesidades();
        $necesidades = trim(fgets(STDIN));
        $pasajero = new PasajeroEspecial($nombre,$apellido,$ticket,$asiento,$necesidades);
        break;
    default:
    echo "Opcion invalida";
        break;
   }



}while($opcion != 0);
