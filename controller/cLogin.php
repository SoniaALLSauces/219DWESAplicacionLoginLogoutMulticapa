<?php


    /**
     * @author Sonia Anton Llanes
     * @created 22/12/2021
     * @updated: 22/12/2021
     */


    
        $entradaOK = true;  //Variable para indicar que el formulario esta correcto
    //Array para guardar los errores del formulario:
        $aErrores = ['usuario' => null,   //E inicializo cada elemento
                     'password' => null];
        
//Si se ha pulsado "Iniciar Sesion"
    if (isset($_REQUEST['login'])){
        //Valido los campos del formulario con la libreria de validacion
            $aErrores['usuario']= validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 8, 1, 1);
            $aErrores['password']= validacionFormularios::comprobarAlfabetico($_REQUEST['password'], 8, 1, 1);
                foreach ($aErrores as $campo => $error){  //Recorro array errores y compruebo si se ha incluido algún error
                        if ($error!=null){         //si es distinto de null
                            $entradaOK = false;    //si hay algun error entradaOK es false
                        }
                        else {     //Valido que el usuario existe
                            $oUsuario=UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password']);
                                if (!$oUsuario){  //si no encuentra ningún registro (usuario y contraseña)
                                    $aErrores['usuario']= "usuario no encontrado";
                                    $entradaOK = false;
                                } else{  //EXISTE USUARIO
                                    UsuarioPDO::entradaUsuario($_REQUEST['usuario']);
                                    $_SESSION['usuario219DWESAplicacionLoginLogOutMulticapa']= $oUsuario;  //Guardamos el registro en la sesion
                                }
                        }
                }
    }
    else{  //aun no se ha pulsado el boton enviar
        $entradaOK = false;   // si no se pulsa enviar, entradaOK es false
    }

    if($entradaOK){  //Si todas las entradas son correctas
        $vistaEnCurso= $vistas['inicio'];  //la vista en curso es el archivo vInicio.php
    }   
    else{   //Si no son correctas o aun no se ha pulsado "Iniciar Sesion"
        $vistaEnCurso= $vistas['login'];   //la vista en curso es el archivo vLogin.php
    }
    

    
    require_once 'view/Layout.php';    //llamamos que se ejecute layout