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
        
    
    //Si pulso en volver:
        if (isset($_REQUEST['volver'])){
            $paginaActual=$_SESSION['pagina'];     //guardo la pagina actual en una variable, por si queremos volver
            $_SESSION['pagina']=$_SESSION['paginaAnterior']; //cambio el valor de la pagina actual a la que teniamos guardada en anterior
            $_SESSION['paginaAnterior']=$paginaActual;     //y la pagina anterior la que habiamos guardado en la variable antes de cambiarla
            header('Location: index.php');  //recargo el fichero index.php con la ventana detalle
                exit;
        }
    
    //Si pulso en detalle:
        if (isset($_REQUEST['detalle'])){
            $_SESSION['paginaAnterior']=$_SESSION['pagina']; //guardo la pagina actual en $_SESSION por si queremos volver
            $_SESSION['pagina']='detalle';     //cambio el valor en $_SESSION a 'detalle'
            header('Location: index.php');     //recargo el fichero index.php con la ventana detalle
                exit;
        }
        
    //Si pulso en Log Out:
        if (isset($_REQUEST['cerrarSesion'])){
            session_destroy();              //destruyo la sesion
            header('Location: index.php');  //recargo el fichero index.php sin sesion, ventana inicio publico
                exit;
        }    
            

    //salida:
    require_once 'view/Layout.php';    //llamamos que se ejecute layout