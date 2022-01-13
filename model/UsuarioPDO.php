<?php

    /**
     * @author Sonia Anton Llanes
     * @created  10/01/2022
     * @updated  11/01/2022
     */


     /**
      * @class UsuarioPDO
      * 
      * 
      */

        class UsuarioPDO{
            /**
             * validarUsuario() - comprueba en la base de datos si el usuario y su contraseña se han escrito correctamente
             * @param type $entrada_codUsuario - codigo con el que el usuario está registrado
             * @param type $entrada_password - password con el que el usuario está registrado
             * @return false si no se ha encontrado ningun usuario
             *         o el objeto PDOStatment con el registro del usuario encontrado
             */
            public static function validarUsuario($entrada_codUsuario, $entrada_password) {
                $oUsuario;  //variable objeto para guardar los datos del usuario obtenidos de la base de datos
                
                $consultaSQL = <<<EOD
                                   SELECT * FROM T01_Usuario WHERE 
                                   T01_CodUsuario=:usuario AND 
                                   T01_Password=:password;
                                 EOD;
                $parametros = [':usuario' => $entrada_codUsuario,
                               ':password' => hash('sha256',($entrada_codUsuario.$entrada_password))];
                    
                $rdoConsulta = DBPDO::ejecutaConsulta($consultaSQL, $parametros);
                $oUsuario = $rdoConsulta ->fetchObject();  //guardo la consulta con todos los datos del registro encontrado
                    if ($rdoConsulta->rowCount()==0){  //si no encuentra ningún registro (usuario y contraseña)
                        return false;
                    } else{
                        return $oUsuario;
                    }
            }
            
            /**
             * 
             * @param type $entrada_codUsuario - codigo del usuario en el cual quiero modificar el numero de conexiones y la fecha de la ultima conexion
             */
            public static function entradaUsuario($entrada_codUsuario){
                //Actualizo los datos: fecha ultima conexion y numero de conexiones del usuario que se ha logeado
                $sqlUpdate = <<<EOD
                                  UPDATE T01_Usuario SET 
                                    T01_NumConexiones = T01_NumConexiones+1 ,
                                    T01_FechaHoraUltimaConexionAnterior = T01_FechaHoraUltimaConexion,
                                    T01_FechaHoraUltimaConexion = :ultimaconexion
                                  WHERE T01_CodUsuario=:codUsuario;
                                EOD;
                $fechaAhora = new DateTime();  //variable para guardar la fecha y hora del momento de la conexion
                $ahora = $fechaAhora->getTimestamp();
                $parametros = [':ultimaconexion' => $ahora,
                               ':codUsuario' => $entrada_codUsuario];
                
                $rdoUpdate = DBPDO::ejecutaConsulta($sqlUpdate, $parametros);
            }
            
            public static function altaUsuario(){
                
            }
            
            public static function modificarUsuario(){
                
            }
            
            public static function borrarUsuario(){
                
            }
            
            public static function validarCodNoExiste(){
                
            }
            
        }