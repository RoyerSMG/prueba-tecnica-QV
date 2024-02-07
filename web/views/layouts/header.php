<header class="header">
    <div class="contenido-header ">
        <div class="barra">
            <div class="logo">
                <img src="assets/img/logo_izy.png" alt="">
            </div>
            <nav class="navegacion">
                <ul class="menu-horizontal">
                    <li><a href="web/views/inicio.php">Inicio</a></li>
                    <li>
                        <a href="">Rutas De Formación <span class="material-symbols-outlined">expand_more</span> </a>
                        <ul class="menu-vertical">
                            <li><a href="">Cientifico de Datos</a></li>
                            <li><a href="web/actions/actionDefaultFormacionNet">Ruta De Formación En .NET</a></li>
                            <li><a href="">Ruta De Formación En Automatizacion</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Cursos <span class="material-symbols-outlined">expand_more</span></a>
                        <ul class="menu-vertical">
                            <li><a href="">Desarrollo y Logica De Programación</a></li>
                            <li><a href="">Automatización</a></li>
                            <li><a href="">Inteligencia Artificial</a></li>
                            <li><a href="">Metodologias De Pruebas y Calidad Del Software</a></li>
                            <li><a href="">Pruebas Funcionales Manuales</a></li>
                            <li><a href="">Pruebas No Funcionales</a></li>
                            <li><a href="">Cientifico De Datos</a></li>
                            <li><a href="">Cloud</a></li>
                            <li><a href="">Ciberseguridad</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Entrenamientos <span class="material-symbols-outlined">expand_more</span></a>
                        <ul class="menu-vertical">
                            <li><a href="">Automatización Con Selenium y POM</a></li>
                            <li><a href="">Certificación En ISTQB (CTFL 4.0)</a></li>
                            <li><a href="">Entrenamiento + Certificación En Scrum Master</a></li>
                        </ul>
                    </li>
                    <li><a href="">Quiénes somos</a></li>
                </ul>
            </nav>
        </div>
        <div class="login">
            <div class="iniciar-sesion">
                <?php 
                    if (isset($_SESSION["usuario"]) && isset($_SESSION["usuario"]["nombre"]) && isset($_SESSION["usuario"]["apellido"])) {
                        // Si hay información de usuario en la sesión, muestra el nombre y apellido
                        $nombreCompleto = $_SESSION["usuario"]["nombre"] . " " . $_SESSION["usuario"]["apellido"];
                        echo '<a>' . $nombreCompleto . '</a>';
                    } else {
                        // Si no hay información de usuario en la sesión, muestra el enlace de inicio de sesión
                        echo '<a href="web/actions/actionDefaultLogin" id="open-login"><span class="material-symbols-outlined icono-person">person</span>Inicio de sesion</a>';
                    }
                ?>
                <!-- <a href="web/actions/actionDefaultLogin" id="open-login"><span class="material-symbols-outlined icono-person">person</span>Inicio de sesion</a> -->
            </div>
            <div class="search">
                <span class="material-symbols-outlined">
                    search
                </span>
            </div>
        </div>
    </div>
    <div class="titulo">
        <h1 class="titulo-principal">Continúa tu formación con IzyAcademy</h1>
        <p class="descripcion">Te ofrecemos una experiencia de aprendizaje basada en la formación por proyectos,
            apoyada en el uso de recursos interactivos para que tu aprendizaje sea efectivo.
        </p>
    </div>
</header>