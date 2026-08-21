<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Supernova | Recuperar contraseña</title>

    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/login.css') ?>"
    >

</head>

<body class="pagina-recuperacion">

    <a
        class="logo logo-recuperacion"
        href="<?= base_url('login') ?>"
    >

        <span class="logo-icono">
            S
        </span>

        <span>
            SUPERNOVA
        </span>

    </a>

    <main class="tarjeta-recuperacion">

        <div class="icono-recuperacion">
            ✉
        </div>

        <h1>
            Recupera tu contraseña
        </h1>

        <p class="descripcion-recuperacion">
            Escribe el correo asociado a tu cuenta y
            te enviaremos instrucciones para restablecerla.
        </p>

        <form id="formularioRecuperacion">

            <?= csrf_field() ?>

            <label for="correo">
                Correo electrónico
            </label>

            <div class="grupo-input">

                <span>✉</span>

                <input
                    type="email"
                    id="correo"
                    name="correo"
                    placeholder="usuario@empresa.com"
                    required
                >

            </div>

            <button
                class="boton-login"
                type="submit"
            >

                Enviar enlace

                <span>→</span>

            </button>

            <div
                class="mensaje-correo"
                id="mensajeCorreo"
            >

                <strong>
                    Correo enviado
                </strong>

                <span>
                    Revisa tu bandeja de entrada y
                    la carpeta de correo no deseado.
                </span>

            </div>

        </form>

        <a
            class="regresar-login"
            href="<?= base_url('login') ?>"
        >
            ← Regresar al inicio de sesión
        </a>

    </main>

    <script>

        const formulario = document.getElementById(
            'formularioRecuperacion'
        );

        const mensaje = document.getElementById(
            'mensajeCorreo'
        );

        formulario.addEventListener('submit', function (evento) {

            evento.preventDefault();

            mensaje.style.display = 'flex';

        });

    </script>

</body>

</html>