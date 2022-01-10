<?php


    /**
     * @author Sonia Anton Llanes
     * @created 22/12/2021
     * @updated: 22/12/2021
     */


//Importamos todos los archivos necesarios para index
    require_once 'config/confApp.php'; //archivo que contiene todos los archivos y los arrays de archivos necesarios

//HTML
    $vistaEnCurso= $vistas['login'];   //la vista en curso es el archivo vLogin.php
    require_once 'view/Layout.php';    //llamamos que se ejecute layout