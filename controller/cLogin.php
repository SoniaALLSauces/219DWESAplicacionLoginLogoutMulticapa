<?php


    /**
     * @author Sonia Anton Llanes
     * @created 22/12/2021
     * @updated: 22/12/2021
     */


//Importamos todos los archivos necesarios
    require_once 'config/confApp.php'; //archivo que contiene todos los archivos y los arrays de archivos necesarios

//Si se ha pulsado "Iniciar Sesion"
    //Array para guardar los errores del formulario:
        $aErrores = ['usuario' => null,   //E inicializo cada elemento
                     'password' => null];

    if (isset($_REQUEST['login'])){
        //Valido los campos del formulario
        $aErrores['usuario']= validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 8, 1, 1);
        $aErrores['password']= validacionFormularios::comprobarAlfabetico($_REQUEST['password'], 8, 1, 1);
                                
        
    }
    
//Si aun no se ha pulsado "Iniciar Sesion"
    $vistaEnCurso= $vistas['login'];   //la vista en curso es el archivo vLogin.php
    require_once 'view/Layout.php';    //llamamos que se ejecute layout