
<!--  Author: Sonia Antón Llanes
  --  Created on: 10-enero-2022
  --  Last Modify: 10-enero-2022
  --  vInicio PROYECTO LOGIN LOGOUT: cuando el valor de $vistaEnCurso  se muestra ventana Bienvenido
  -->


    <section class="inicio">

<!--        <div class="volver">
            <a class="volver" href="">
                <img src="webroot/images/volver.png">
            </a>
        </div>-->
<!--        <div class="volver">
            <form name="volver" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="image" id="volver" src="webroot/images/volver.png" alt="Volver" title="Volver" width="100px">
            </form>
        </div>-->

<!--        <section class="botones">
            <button>Editar Perfil</button>
            <button>Detalle</button>
            <button>Log Out</button>
        </section>-->
        <form class="botones" name="inicio" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="submit" id="editarPerfil" value="Editar Perfil" name="editarPerfil">
            <input type="submit" id="detalle" value="Detalle" name="detalle">
            <input type="submit" id="cerrarSesion" value="Cerrar sesión" name="cerrarSesion">
        </form>

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