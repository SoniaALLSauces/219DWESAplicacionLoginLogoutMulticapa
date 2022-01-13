
<!--  Author: Sonia Antón Llanes
  --  Created on: 10-enero-2022
  --  Last Modify: 10-enero-2022
  --  vInicio PROYECTO LOGIN LOGOUT: cuando el valor de $vistaEnCurso  se muestra ventana Bienvenido
  -->


    <section class="inicio">

        <div class="volver">
            <a class="volver" href="">
                <img src="webroot/images/volver.png">
            </a>
        </div>

        <section class="botones">
            <button>Editar Perfil</button>
            <button>Detalle</button>
            <button>Log Out</button>
        </section>

        <section class="datosUsuario">
            
            <article  class="saludo">
                <p>BIENVENID@   <?php echo $_SESSION['usuario219DWESAplicacionLoginLogOutMulticapa']->T01_DescUsuario ?></p>
                
                <?php
                    if ($_SESSION['usuario219DWESAplicacionLoginLogOutMulticapa']->T01_NumConexiones==1){
                        echo "<p>Esta es la PRIMERA vez que se conecta.</p>";
                    } else{
                        echo "<p>Es la ".$_SESSION['usuario219DWESAplicacionLoginLogOutMulticapa']->T01_NumConexiones."ª vez que se conecta.</p>";
                        $ultimaConexion = new DateTime();
                        $ultimaConexionFormat = $ultimaConexion-> setTimestamp($_SESSION['usuario219DWESAplicacionLoginLogOutMulticapa']->T01_FechaHoraUltimaConexionAnterior) -> format ('d-m-Y H:i:s');
                        echo "<p>Y se conectó por ultima vez el: $ultimaConexionFormat </p>";
                    }
                ?>
                
            </article>
            
            
        </section>
    </section>