<?php

    /**
     * @author Sonia Anton Llanes
     * @created  21/12/2021
     * @updated  10/01/2022
     */

     /**
      * @class Usuario
      * 
      * 
      */

        class Usuario{
            
            private $codUsuario;
            private $password;
            private $descUsuario;
            private $numConexiones;
            private $fechaHoraUltimaHora;
            private $fechaHoraConexionAnterior;
            private $perfil;
            
            //Constructor
            /**
             * Metodo mágico __construct() - constructor de la clase Usuario
             * 
             * @param string $codUsuario - codigo del usuario 
             * @param string $password - contraseña/password del usuario
             * @param string $descUsuario - nombre y apellidos del usuario
             */
                public function __construct($codUsuario,$password,$descUsuario) {
                    $this->$codUsuario = $codUsuario;
                    $this->$password = $password;
                    $this->$descUsuario = $descUsuario;
                    $this->$numAccesos = 0;
                        $ahora = new DateTime();
                    $this->$fechaHoraUltimaHora = $ahora->getTimestamp();
                    $this->$perfil = "usuario";
                }
            
            //Getter
            /**
             * Metodo mágico __get() - devuelve el valor del atributo pasado por parámetro
             * 
             * @param @var $atributo - atributo de la clase Usuario que deseamos conocer
             * @return string,int - devuelve el valor del atributo indicado
             */
                public function __get($atributo) {
                    return $this->$atributo;
                }
            
            //Setter
            /**
             * Metodo mágico __set() - modifica el valor del atributo, ambos pasados por parámetro
             * 
             * @param @var $atributo - atributo que se desea modificar
             * @param string,int $valor - nuevo valor que se quiere dar al atributo
             */
                public function __set($atributo, $valor){
                    $this->$atributo = $valor;
                }
            
        }
        