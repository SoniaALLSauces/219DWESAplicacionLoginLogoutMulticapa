<?php


    /**
     * @author Sonia Anton Llanes
     * @created 21/12/2021
     * @updated: 21/12/2021
     */



//Importamos todos los archivos necesarios para la aplicación
    //Clases del modelo:
        require_once 'model/Usuario.php';

//Array con los controladores
    $controladores = [
        'login' => 'controller/cLogin.php',
        'inicio' => 'controller/cInicio.php'
    ];

//Array con las vistas
    $vistas = [
        'login' => 'view/vLoginphp',
        'inicio' => 'view/vInicio.php'
    ];