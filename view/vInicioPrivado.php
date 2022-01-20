
<!--  Author: Sonia Antón Llanes
  --  Created on: 10-enero-2022
  --  Last Modify: 10-enero-2022
  --  vInicio PROYECTO LOGIN LOGOUT: cuando el valor de $vistaEnCurso  se muestra ventana Bienvenido
  -->


    <section class="inicio">

        <div class="volver">
            <form name="volver" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input id="volver" name="volver" type="submit" value="">
            </form>
        </div>

        <table class="tablaBotones">
            <tr>
                <form name="inicio" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <td class="botones"><input type="submit" id="editarPerfil" value="Editar Perfil" name="editarPerfil"></td>
                    <td class="botones"><input type="submit" id="detalle" value="Detalle" name="detalle"></td>
                    <td class="botones"><input type="submit" id="cerrarSesion" value="Cerrar sesión" name="cerrarSesion"></td>
                </form>
            </tr>
            <tr>
                <form name="workingProgress" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <td class="mtoDepartamentos" colspan="3"><input type="submit" id="workingProgress" value="Mantenimiento Departamentos" name="workingProgress"></td>
                </form>
            </tr>
        </table>
            
            

        <section class="datosUsuario">
            
            <article  class="saludo">
                <p>BIENVENID@   <?php echo $descripcion ?></p>
                
                <?php
                    if ($conexiones==1){
                        echo "<p>Esta es la PRIMERA vez que se conecta.</p>";
                    } else{
                        echo "<p>Es la ".$conexiones."ª vez que se conecta.</p>";
                        $ultimaConexion = new DateTime();
                        $ultimaConexionFormat = $ultimaConexion-> setTimestamp($conexionAnterior) -> format ('d-m-Y H:i:s');
                        echo "<p>Y se conectó por ultima vez el: $ultimaConexionFormat </p>";
                    }
                ?>
                
            </article>
            
            
        </section>
    </section>