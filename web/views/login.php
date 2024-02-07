<!DOCTYPE html>
<html lang="en">
<?php require_once "web/views/layouts/head.php" ?>

<body>
    <div class="contenido-login" id="contenido-login">
        <div class="modal-login" id="modal-login">
            <div class="modal">
                <form class="" action="web/actions/actionAutenticarUsuario" method="POST">
                    <h3 style="text-align: center; color: #1D3A6C; ">Inicie sesión en su cuenta</h3>
                    <div class="container-form">
                        <label for="correo"><i class="fas fa-user"></i> Correo Electronico:</label>
                        <input type="text" id="correo" name="correo" placeholder="Ingrese Un Usuario" required>
                    
                        <label for="password"><i class="fas fa-lock"></i> Contraseña:</label>
                        <input type="password" id="password" placeholder="Ingrese una Contraseña" name="password" required>
                    </div>

                    <div class="container-boton">
                        <input type="submit" value="Acceder" class="boton" id="close-login">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php require_once "web/views/layouts/scripts.php" ?>
</body>

</html>