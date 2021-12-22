<?php


    /**
     * @author Sonia Anton Llanes
     * @created 21/12/2021
     * @updated: 22/12/2021
     */


//Importamos todos los archivos necesarios para la aplicación
    //Libreria de validacion
        require_once 'core/libreriaValidacion.php';
    
    //para la cookie idioma:
        require_once 'idiomas.php';
        
    //Clases del modelo:
        require_once 'model/Usuario.php';
        require_once 'model/UsuarioPDO.php';
        require_once 'model/DBPDO.php';

//Array con los controladores
    $controladores = [
        'login' => 'controller/cLogin.php',
        'inicio' => 'controller/cInicio.php'
    ];

//Array con las vistas
    $vistas = [
        'layout' => 'view/Layout.php',
        'login' => 'view/vLogin.php',
        'inicio' => 'view/vInicio.php'
    ];