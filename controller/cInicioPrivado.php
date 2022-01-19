<?php


    /**
     * @author Sonia Anton Llanes
     * @created 22/12/2021
     * @updated: 13/01/2021
     */


        //Si hay objeto guardado en la sesion: lo deserializamos el objeto guardado en la session guardandolo en una variable:
            if($_SESSION['usuario219DWESAplicacionLoginLogOutMulticapa']!=null){
                $usuarioActual = $_SESSION['usuario219DWESAplicacionLoginLogOutMulticapa'];
                    $descripcion = $usuarioActual->getDescUsuario(); //recuperamos la descripción del usuario
                    $conexiones = $usuarioActual->getNumConexiones(); //recuperamos el numero de conexiones del usuario
                    $conexionAnterior = $usuarioActual->getFechaHoraConexionAnterior(); //recuperamos la fecha de la conexion anterior del usuario
            }
    
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
            $_SESSION['usuario219DWESAplicacionLoginLogOutMulticapa']= ""; //elimino el usuario guardado en la sesion
            $_SESSION['pagina']='inicioPublico';     //y guardo login para la recarga de index
            header('Location: index.php');   //recargo el fichero index.php con la ventana login
                exit;
        }    
            

    //salida:
    require_once 'view/Layout.php';    //llamamos que se ejecute layout