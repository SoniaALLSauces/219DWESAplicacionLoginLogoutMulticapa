
<!--  Author: Sonia Antón Llanes
  --  Created on: 22-diciembre-2021
  --  Last Modify: 22-diciembre-2021
  --  vLogin PROYECTO LOGIN LOGOUT: ventana que da valor a $vistaEnCurso cuando se muestra login 
  -->


    <div class="div">
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table class="login">
                <tr>
                    <th colspan="2"><h3>LogIN</h3></th>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="dato"><label for="LbUsuario">Usuario <span class="ast">*</span></label></div>
                        <div class="datoUsu"><input type="text" name="usuario" id="LbUsuario"
                               placeholder=""></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="dato"><label for="LbPassword">Contraseña  <span class="ast">*</span></label></div>
                        <div class="datoUsu"><input type="password" name="password" id="LbPassword"
                               placeholder=""></div>

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="error"><?php
                                if ($aErrores['usuario']!=NULL || $aErrores['password']!=NULL) { //si hay errores muestra el mensaje
                                    echo "<span style=\"color:red;\">".$aIdiomas[$_COOKIE['idioma']]['error']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                }
                             ?></div>
                    </td>
                </tr>
                <tr><td class="vacio"></td></tr>
                <tr class="buttonForm">
                    <th><input id="login" name="login" type="submit" value="Iniciar Sesion"></th>
                </tr>
            </table>
        </form>
    </div>
