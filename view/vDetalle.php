<
<!--  Author: Sonia Antón Llanes
  --  Created on: 14-enero-2022
  --  Last Modify: 14-enero-2022
  --  vLogin PROYECTO LOGIN LOGOUT: $vistaEnCurso tiene como valor login : mostramos el formulario
  -->


  <section class="login">
        
<!--        <div class="volver">
            <form name="volver" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="image" id="volver" src="webroot/images/volver.png" alt="Volver" title="Volver" width="100px">
            </form>
        </div>-->
      
        <div>
            <!-- $_SESSION -->
                <table class="tableVariable">
                    <tr>
                        <td class="nombreVariable"><h4>Variable $_SESSION</h4></td>
                    </tr>
                </table>
                <table class="tableVariable">
                    <?php
//                        foreach ($_SESSION as $elemento => $valor) {
//                            echo "<tr>";
//                            print_r("<td class=\"td\">$elemento</td> <td class=\"td\">$valor</td>");
//                            echo "</tr>";
//                        }
                    ?>
                </table>

                    <!-- $_SERVER -->
                <table class="tableVariable">
                    <tr>
                        <td class="nombreVariable"><h4>Variable $_SERVER</h4></td>
                    </tr>
                </table>
                <table class="tableVariable">
                    <?php
                        foreach ($_SERVER as $elemento => $valor) {
                            echo "<tr>";
                            print_r("<td class=\"td\">$elemento</td> <td class=\"td\">$valor</td>");
                            echo "</tr>";
                        }
                echo "</table>";        
                    ?>
                
                    
                <table class="tableVariable">
                    <tr>
                        <td class="nombreVariable"><h4>PHPINFO()</h4></td>
                    </tr>
                </table>
                    <?php
                    /* Mostramos phpinfo() */            
                        phpinfo();

                    ?>
            </div>
  </section>