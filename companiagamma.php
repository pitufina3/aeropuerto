<?php

require_once ("companiaaerea.php");

class CompaniaGamma extends CompaniaAerea {
    var $anofundacion;

    function __construct ($nombre,$telefonoemergencia,$anofundacion){
        parent::__construct($nombre,$telefonoemergencia);
        $this->anofundacion = $anofundacion;
    }
    function getAnoFundacion (){
        return $this->anofundacion;
    }
    function setAnoFundacion($anofundacion){
        $this->anofundacion = $anofundacion;
    }
}

?>