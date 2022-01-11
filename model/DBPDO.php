<?php

    /**
     * @author Sonia Anton Llanes
     * @created  11/01/2022
     * @updated  11/01/2022
     */

     /**
      * @class DBPDO
      * 
      * 
      */

        class DBPDO{
            /**
             * 
             * @param string $entrada_sentenciaSQL - variable heredoc, que contiene la sentecia sql a ejecutar
             * @param array $entrada_parametros - array con los parámetros que se le pasan a la consulta SQL
             * @return object PDOStatement 
             */
            public static function ejecutaConsulta($entrada_sentenciaSQL, $entrada_parametros) {
                
                require_once '../config/confDB.php';  //importamos archivo que contiene los parametros de la conexion
                    
                try{
                    $miDB = new PDO (HOST, USER, PASSWORD);  //establezco conexión con objeto PDO 
                    $miDB ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //y siempre lanzo excepción utilizando manejador propio PDOException cuando se produce un error
                    
                    $consulta = $miDB -> prepare($entrada_sentenciaSQL);  //preparo la consulta, con consulta preparada
                    $consulta ->execute($entrada_parametros);             //ejecuto la consulta, con parámetros si existen
                }
                catch (PDOException $excepcion){  //codigo si se produce error utilizando PDOException
                    $consulta = null;
                    echo "<p>Error: ".$excepcion->getCode()."</p>";  //getCode() nos devuelve el codigo del error que salte
                    echo "<p style='color: red'>Código del error: ".$excepcion->getMessage()."</p>";  //getMessage() nos devuelve el mensaje que genera el error que saltó
                }
                finally {  
                    unset($miDB);  //finalizamos conexion con database
                }
                
                return $consulta;
            }

            
        }