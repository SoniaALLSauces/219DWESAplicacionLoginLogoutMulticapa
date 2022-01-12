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
            
            public static function validarUsuario($entrada_codUsuario, $entrada_password) {
                $oUsuario;  //objeto para guardar los datos del usuario obtenidos de la base de datos
                
                $consultaSQL = <<<EOD
                                   SELECT * FROM T01_Usuario WHERE 
                                   T01_CodUsuario=:usuario AND 
                                   T01_Password=:password;
                                 EOD;
                $parametros = array (
                    ':usuario' => $entrada_codUsuario,
                    ':password' => hash('sha256',($entrada_codUsuario.$entrada_password))
                );
                    
                $rdoConsulta = DBPDO::ejecutaConsulta($consultaSQL, $parametros);
                $oUsuario = $rdoConsulta ->fetchObject();  //guardo la consulta con todos los datos del registro encontrado
                //Buscamos en la tabla si algun registro coindice con el usuario-contraseña introducida
                    if ($rdoConsulta->rowCount()==0){  //si no encuentra ningún registro (usuario y contraseña)
                        return false;
                    } else{
                        return $oUsuario;
                    }

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