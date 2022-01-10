
<!--  Author: Sonia Antón Llanes
  --  Created on: 22-diciembre-2021
  --  Last Modify: 22-diciembre-2021
  --  vLogin PROYECTO LOGIN LOGOUT: ventana que da valor a $vistaEnCurso cuando se muestra login 
  -->


    <section class="login">

        <div class="div">
            <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <table class="tLogin">
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
                            <div class="error"></div>
                        </td>
                    </tr>
                    <tr><td class="vacio"></td></tr>
                    
                    <tr class="buttonForm">
                        <th><input id="login" name="login" type="submit" value="Iniciar Sesion"></th>
                        <th><input id="register" name="register" type="submit" value="Registrarse"></th>
                    </tr>
                </table>
            </form>
        </div>
    </section>
