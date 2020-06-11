<?php

    $contenido = ("../vista/plantilla.phtml"); 

    if( isset($_REQUEST['boton']) )
    {

        require("../controlador/datos_ingreso.php");

        if( $usu == "" || $con == "" )
        {

            

        }else{

            header('Location: ../vista/ejemplo.phtml');

        }

        

    }

    require_once("../vista/plantilla.phtml");

?>