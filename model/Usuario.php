<?php

    /**
     * @author Sonia Anton Llanes
     * @created  21/12/2021
     * @updated  10/01/2022
     */


        /**
         * 
         */

        class Usuario{
            
            private $codUsuario;
            private $password;
            private $descUsuario;
            private $numConexiones;
            private $fechaHoraUltimaConexion;
            private $fechaHoraConexionAnterior;
            private $perfil;
            private $imagenUsuario;
            private $listaOpinionesUsuario;
            
            //Constructor
            /**
             * Metodo mágico __construct() - constructor de la clase Usuario
             * 
             * @param string $codUsuario - codigo del usuario 
             * @param string $password - contraseña/password del usuario
             * @param string $descUsuario - nombre y apellidos del usuario
             */

                public function __construct($codUsuario,$password,$descUsuario,$numConexiones,$fechaHoraUltimaConexion,$fechaHoraConexionAnterior,$perfil) {
                    $this->codUsuario = $codUsuario;
                    $this->password = $password;
                    $this->descUsuario = $descUsuario;
                    $this->numConexiones = $numConexiones;
                    $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
                    $this->fechaHoraConexionAnterior = $fechaHoraConexionAnterior;
                    $this->perfil = $perfil;
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
                
                public function getCodUsuario(){
                    return $this->codUsuario;
                }
                public function getDescUsuario(){
                    return $this->descUsuario;
                }
                public function getNumConexiones(){
                    return $this->numConexiones;
                }
                public function getFechaHoraUltimaConexion(){
                    return $this->fechaHoraUltimaConexion;
                }
                public function getFechaHoraConexionAnterior(){
                    return $this->fechaHoraConexionAnterior;
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
                
                public function setNumConexiones($numConexiones){
                    $this->numConexiones = $numConexiones;
                }
                public function setFechaHoraUltimaConexion($fechaHoraUltimaConexion){
                    $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
                }
                public function setFechaHoraConexionAnterior($fechaHoraConexionAnterior){
                    $this->fechaHoraConexionAnterior = $fechaHoraConexionAnterior;
                }
                
        }
        