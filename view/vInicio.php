
<!--  Author: Sonia Antón Llanes
  --  Created on: 10-enero-2022
  --  Last Modify: 10-enero-2022
  --  vInicio PROYECTO LOGIN LOGOUT: cuando el valor de $vistaEnCurso  se muestra ventana Bienvenido
  -->


    <section class="inicio">

        <div class="volver">
            <a class="volver" href="">
                <img src="../webroot/images/volver.png">
            </a>
        </div>

        <section class="botones">
            <button><a href="">Editar Perfil</a></button>
            <button><a href="">Detalle</a></button>
            <button><a href="">Log Out</a></button>
        </section>

        <section class="datos">

            <?php

            /* 
             * Author: Sonia Antón Llanes
             * Created on: 10-enero-2022
             * Ejercicio: ventana que se muestra cuando el login es correcto
             */

                    try{
                        $miDB = new PDO (HOST, USER, PASSWORD);  //establezco conexión con objeto PDO 
                        $miDB ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //y siempre lanzo excepción utilizando manejador propio PDOException cuando se produce un error
                        $sqlUsuario = <<<EOD
                                           SELECT * FROM T01_Usuario WHERE 
                                           T01_CodUsuario='{$usuario}';
                                         EOD;
                        $consultaUsuario = $miDB -> prepare($sqlUsuario);  //Con consulta preparada, preparo la consulta
                        $consultaUsuario ->execute();
                        $consulta = $consultaUsuario ->fetchObject();
                            $descUsuario = $consulta -> T01_DescUsuario;
                            $numConexiones = $consulta -> T01_NumConexiones;

                        echo "<div class='saludo'>";
                            echo "<h3>HOLA $descUsuario</h3>";
                            if ($numConexiones==1){
                                echo "<p>Es la PRIMERA vez que se conecta.</p>";
                            } else{
                                echo "<p>Es la ".$numConexiones."ª vez que se conecta.</p>";
                                $ultimaConexion = new DateTime();
                                $ultimaConexionFormat = $ultimaConexion-> setTimestamp($fechaHoraUltimaConexion) -> format ('d-m-Y H:i:s');
                                echo "<p>Se conectó por ultima vez el: $ultimaConexionFormat </p>";
                            }
                        echo "</div>";
                    }
                    catch (PDOException $excepcion){  //codigo si se produce error utilizando PDOException
                        echo "<p>Error: ".$excepcion->getCode()."</p>";  //getCode() nos devuelve el codigo del error que salte
                        echo "<p style='color: red'>Código del error: ".$excepcion->getMessage()."</p>";  //getMessage() nos devuelve el mensaje que genera el error que saltó
                    }
                    finally {  
                        unset($miDB);  //finalizamos conexion con database
                    }

            ?>

        </section>
    </section>