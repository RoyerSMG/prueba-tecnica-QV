<!DOCTYPE html>
<html lang="en">
<?php require_once "views/layouts/head.php" ?>

<body>
    <?php require_once "views/layouts/header.php" ?>

    <section class="container-section">
        <div class="contenido-section">
            <div>
                <h1>Novedades</h1>
            </div>
            <div class="novedades">
                <div class="primera-columna">
                    <div class="primera-novedad">
                        <img src="assets/img/novedad1.jpg" alt="novedad1">
                        <h2>Bienevenido a IzyAcademy</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod unde dolor quas soluta
                            dignissimos possimus, obcaecati sapiente architecto culpa velit similique harum aut commodi
                            recusandae in alias maxime debitis ut earum vel et dicta cupiditate voluptatibus? Perferendis
                            ipsum officia dolores laborum voluptatum cumque quam modi voluptate? Harum architecto est ducimus.</p>
                    </div>
                </div>
                <div class="segunda-columna">
                    <div class="segunda-novedad">
                        <img src="assets/img/novedad2.jpg" alt="novedad2">
                        <h4>Generación de comunidad</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod unde dolor quas soluta
                            dignissimos possimus, obcaecati sapiente architecto culpa velit similique harum aut commodi
                            recusandae.</p>
                    </div>
                    <div class="tercera-novedad">
                        <img src="assets/img/novedad3.jpg" alt="novedad2">
                        <h4>Generación de comunidad</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod unde dolor quas soluta
                            dignissimos possimus, obcaecati sapiente architecto culpa velit similique harum aut commodi
                            recusandae.</p>
                    </div>
                    <div class="cuarta-novedad">
                        <img src="assets/img/novedad4.jpg" alt="novedad2">
                        <h4>Generación de comunidad</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod unde dolor quas soluta
                            dignissimos possimus, obcaecati sapiente architecto culpa velit similique harum aut commodi
                            recusandae</p>
                    </div>
                    <div class="quinta-novedad">
                        <img src="assets/img/novedad5.jpg" alt="novedad2">
                        <h4>Generación de comunidad</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod unde dolor quas soluta
                            dignissimos possimus, obcaecati sapiente architecto culpa velit similique harum aut commodi
                            recusandae.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div><h1 style="text-align: center;">Aliados aqui</h1></div>
    </section>
    <section class="container-section">
        <div class="contenido">
            <div class="registro">
                <div class="img">
                    <div class="container-img">
                        <img src="assets/img/form1.png" alt="">
                    </div>
                </div>
                <div class="formulario">
                    <div class="container-formulario">
                        <form action="web/actions/actionRegistrarUsuario" method="POST">
                            <h1 style="text-align: center; color: #1D3A6C;" >Registrate</h1>
                            <div>
                                <label for="nombre">Nombre</label>
                                <input class="formu-input" type="text" id="nombre" name="nombre">
                            </div>
                            <div>
                                <label for="apellido">Apellido</label>
                                <input class="formu-input" type="text" id="apellido" name="apellido">
                            </div>
                            <div>
                                <label for="correo">Correo Electronico</label>
                                <input class="formu-input" type="text" id="correo" name="correo">
                            </div>
                            <div>
                                <label for="password">Contraseña</label>
                                <input class="formu-input" type="text" id="password" name="password">
                            </div>
                            <div>
                                <label for="confirmar_password">Confirmar Contraseña</label>
                                <input class="formu-input" type="text" id="confirmar_password" name="confirmar_password">
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox"><strong><a href="https://izyacademy.com/mod/page/view.php?id=3181">Acepto Términos y condiciones</a></strong>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox1"><strong><a href="https://izyacademy.com/mod/page/view.php?id=3682" >Acepto Política de tratamiento de datos</a></strong>
                            </div>

                            <input type="submit" value="Registrarse" class="boton-registrarse" id="">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once "views/layouts/footer.php" ?>
    <?php require_once "views/layouts/scripts.php" ?>
</body>

</html>