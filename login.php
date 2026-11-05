<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar sesión | PortLabs</title>

    <link rel="stylesheet" href="css/login-registro.css">
    <script src="js/login.js" defer></script>
</head>

<body>
    <main class="tarjeta">

        <section class="portada" aria-label="Presentación de PortLabs">
            <img class="imagen-puerto" src="img/puerto.png" alt="Buque atracado en un puerto con el mar en calma">

            <span class="marca">PortLabs</span>

            <div class="texto-portada">
                <p class="etiqueta">AVANZA HACIA EL FUTURO</p>
                <h1>Tu futuro estará en el puerto.</h1>
                <p>
                    Prepárate a tu ritmo y avanza hacia
                    tu plaza de Policía Portuaria.
                </p>
            </div>
        </section>

        <section class="acceso" aria-labelledby="titulo-login">
            <header>
                <p class="bienvenida">CONTINUA TU TRAVESÍA</p>
                <h2 id="titulo-login">Iniciar sesión</h2>
                <p>Continúa tu preparación con PortLabs.</p>
            </header>

            <form action="login.php" method="POST" id="formularioLogin">
                <div class="campo">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" placeholder="Tu correo electrónico"
                        autocomplete="username" required>
                </div>

                <div class="campo">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Tu contraseña"
                        autocomplete="current-password" required>
                </div>

                <label class="recordar">
                    <input type="checkbox" name="recordar" value="1">
                    Mantener la sesión iniciada
                </label>

                <button type="submit" class="boton-entrar">
                    Entrar
                </button>
            </form>

            <div class="zona-google">
                <!-- Curva decorativa con forma de ola -->
                <svg class="ola" viewBox="0 0 400 50" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M0 25 C100 0 130 50 230 25 S330 0 400 25 L400 50 L0 50 Z" />
                </svg>

                <div class="contenido-google">
                    <p>Accede o registrate</p>

                    <a href="google.php" class="boton-google">
                        Google
                    </a>
                </div>
            </div>

            <p class="registro">
                ¿Todavía no tienes cuenta?
                <a href="registro.php">Regístrate</a>
            </p>
        </section>

    </main>
</body>

</html>