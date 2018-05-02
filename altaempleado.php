<?php

function altaEmpleado ($empleado){

        if (count($this->empleados) == 0){
            $this->empleados[] = $empleado;
        }

        else {
            $aux = false;
            for ($i = 0; (($i < count($this->empleados)) && ($aux == false)); $i++){
                        if ($this->empleados[$i] == null){
                            $this->empleados[$i] = $empleado;
                            $aux = true;

                        }

            }
            if ($aux == false){
                for ($i = count($this->empleados); $i > 0; $i--){
                    $this->empleados[$i] = $this->empleados[$i-1];
                }
                $this->empleados[0] = $empleado;

            }

        }     

    }

?>