<?php
class Empleado {
    var $nombre;
    var $fechanac;
    function __construct ($nombre,$fechanac){
        $this->nombre = $nombre;
        $this->fechanac = $fechanac;
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function getFechaNac (){
        return $this->fechanac;
    }

    function setFechaNac($fechanac){
        $this->fechanac = $fechanac;
    }
    function getNumVuelos (){
        return $this->numvuelos;
    }

}

?>