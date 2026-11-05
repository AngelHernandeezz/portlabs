<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crear cuenta | PortLabs</title>

    <link rel="stylesheet" href="css/login-registro.css">
</head>

<body>
    <main class="tarjeta">

        <section class="portada" aria-label="Presentación de PortLabs">
            <img class="imagen-puerto" src="img/puerto.png" alt="Buque atracado en un puerto con el mar en calma">

            <span class="marca">PortLabs</span>

            <div class="texto-portada">
                <p class="etiqueta">EMPIEZA TU TRAVESÍA</p>
                <h1>Tu próxima etapa empieza aquí.</h1>
                <p>
                    Crea tu cuenta y empieza a preparar
                    tu plaza de Policía Portuaria.
                </p>
            </div>
        </section>

        <section class="acceso" aria-labelledby="titulo-registro">
            <header>
                <p class="bienvenida">BIENVENIDO A BORDO</p>
                <h2 id="titulo-registro">Crear cuenta</h2>
                <p>Únete a PortLabs y avanza a tu ritmo.</p>
            </header>

            <form action="registro.php" method="POST" id="formularioRegistro">
                <div class="campo">
                    <label for="nombre">Nombre y apellidos *</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre y apellidos" autocomplete="given-name"
                        maxlength="80" required>
                </div>

                <div class="campo">
                    <label for="email">Correo electrónico *</label>
                    <input type="email" id="email" name="email" placeholder="Tu correo electrónico"
                        autocomplete="username" required>
                </div>

                <div class="campo">
                    <label for="password">Contraseña *</label>
                    <input type="password" id="password" name="password" placeholder="Al menos 12 caracteres"
                        autocomplete="new-password" minlength="12" required>
                </div>

                <div class="campo">
                    <label for="repetirPassword">
                        Repite la contraseña *
                    </label>
                    <input type="password" id="repetirPassword" name="repetirPassword"
                        placeholder="Repite tu contraseña" autocomplete="new-password" minlength="12" required>
                </div>

                <button type="submit" class="boton-entrar">
                    Crear cuenta
                </button>
            </form>

            <p class="registro">
                ¿Ya tienes cuenta?
                <a href="login.php">Inicia sesión</a>
            </p>
        </section>

    </main>
</body>

</html>