<?php

    /**
     * Esta funcion guarda las sedes.
     * @param   texto   El nombre del estado del usuario.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_estado_usuario($nombre_estado){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid");
        $sql= "INSERT INTO sedes(nombre_estado)";
        $sql.="VALUES ('$nombre_estado');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>