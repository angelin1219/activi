<?php

    /**
     * Esta funcion guarda las sedes.
     * @param   texto   El nombre de la sede.
     * @param   texto   La direccion de la sede.
     * @param   texto   Numero de contacto de la sede.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_ubicacion($nombre_ubicacion,$descripcion,$id_sede){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid");
        $sql= "INSERT INTO sedes(nombre_ubicacion,descripcion,id_sede)";
        $sql.="VALUES ('$nombre_ubicacion','$descripcion','$id_sede');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>