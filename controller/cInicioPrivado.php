<?php


    /**
     * @author Sonia Anton Llanes
     * @created 22/12/2021
     * @updated: 13/01/2021
     */


        //Deserializamos el objeto guardado en la session guardandolo en una variable:
            $usuarioActual = $_SESSION['usuario219DWESAplicacionLoginLogOutMulticapa'];
                $descripcion = $usuarioActual->getDescUsuario(); //recuperamos la descripción del usuario
                $conexiones = $usuarioActual->getNumConexiones(); //recuperamos el numero de conexiones del usuario
                $conexionAnterior = $usuarioActual->getFechaHoraConexionAnterior(); //recuperamos la fecha de la conexion anterior del usuario
            
            

    //salida:
    require_once 'view/Layout.php';    //llamamos que se ejecute layout