<?php

    /**
     * Esta funcion guarda las sedes.
     * @param   texto   El nombre del nivel del curso.
     * @return  numero  1 para exito, 0 para error.
     */

    function guardar_nivel_curso($nombre_nivel){
        $salida=0;
        
        $conexion= mysqli_connect("localhost","root","toor","control_covid");
        $sql= "INSERT INTO sedes(nombre_nivel)";
        $sql.="VALUES ('$nombre_nivel');";
        $conexion->query($sql);

        if(mysqli_affected_rows($conexion)>0){

            $salida=1;
        }

        return $salida;
    
    }

?>