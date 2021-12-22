<?php

    /* 
     * Author: Sonia Antón Llanes
     * Created on: 22-diciembre-2021
     * Last Modify: 22-diciembre-2021
     * LAYOUT PROYECTO LOGIN LOGOUT: ventana para 
     */

    //Importamos todos los archivos necesarios
        require_once 'config/confApp.php'; //archivo que contiene todos los archivos y los arrays de archivos para que funcione la aplicacion
   
?>




<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sonia Anton Llanes - Login Logout Multicapa</title>
        <meta name="author" content="Sonia Antón Llanes">
        <meta name="description" content="Proyecto DAW2">
        <meta name="keywords" content="">
        <link href="webroot/css/estiloej.css" rel="stylesheet" type="text/css">
        <link href="webroot/images/mariposa_vintage.png" rel="icon" type="image/png">	
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    </head>
    <body class="container">
	<main class="main">
            <header class="divh2">
                <h2 class="centrado"><a href="../../proyectoDWES/indexProyectoDWES.php" style="border-bottom: 2px solid black; color:black;">DWES</a> -
                    Proyecto Login Logout Tema 5</h2> 
            </header>
            <section>
                <?php require_once $vistaEnCurso; ?>
            </section>
        </main>
        <footer class="footer">
            <nav class="fnav">
                <ul>
                    <li class="ftexto"><a href="../index.html">&copy 2020-21. Sonia Anton LLanes - v.2 - 03/12/2021</a></li>
                    <li>                       
                        <a class="maxMedia" href="doc/curriculum_SALL.pdf" target="_blank"><img src="webroot/images/CV.png" alt="imagen_CV"></a>
                        <a class="maxMedia" href=""><img src="webroot/images/linkedin.png" alt="imagen_linkedIn"></a>
                        <a class="maxMedia" href="https://github.com/SoniaALLSauces/219DWESProyectoLoginLogoutTema5.git" target="_blank"><img src="webroot/images/github.png" alt="imagen_github"></a>
                    </li>
                </ul>
            </nav>
        </footer>       
    </body>
</html>