<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Supernova | Iniciar sesión</title>

    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/login.css') ?>"
    >
</head>

<body>

    <main class="contenedor-login">

        <section class="panel-informativo">

            <a class="logo" href="<?= base_url('login') ?>">
                <span class="logo-icono">S</span>
                <span>SUPERNOVA</span>
            </a>

            <div class="informacion-principal">

                <span class="subtitulo">
                    GESTIÓN EMPRESARIAL
                </span>

                <h1>
                    Todo tu negocio,
                    <br>

                    <span>
                        en una sola órbita.
                    </span>
                </h1>

                <p>
                    Facturación electrónica, inventarios,
                    ventas y finanzas conectadas en una
                    sola plataforma.
                </p>

                <div class="caracteristicas">

                    <span>
                        ✓ Facturación electrónica
                    </span>

                    <span>
                        ✓ Inventario en tiempo real
                    </span>

                    <span>
                        ✓ Reportes inteligentes
                    </span>

                </div>

            </div>

            <small>
                © <?= date('Y') ?> Supernova S.A. de C.V.
            </small>

        </section>

        <section class="panel-formulario">

            <form class="tarjeta-login" method="post" action="#">

                <?= csrf_field() ?>

                <div class="icono-bienvenida">
                    ↗
                </div>

                <h2>Bienvenido de nuevo</h2>

                <p class="descripcion">
                    Ingresa tus credenciales para acceder al sistema.
                </p>
                 <?php if (session('mensaje')): ?>

                    <div class="mensaje-exito">

                    <?= esc(session('mensaje')) ?>

                    </div>

                <?php endif; ?>

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

                <label for="contrasena">
                    Contraseña
                </label>

                <div class="grupo-input">

                    <span>⌁</span>

                    <input
                        type="password"
                        id="contrasena"
                        name="contrasena"
                        placeholder="Ingresa tu contraseña"
                        required
                    >

                    <button
                        type="button"
                        class="mostrar-contrasena"
                        id="mostrarContrasena"
                    >
                        ◉
                    </button>

                </div>

                <div class="opciones-login">

                    <label class="recordarme">

                        <input
                            type="checkbox"
                            name="recordarme"
                        >

                        Recordarme

                    </label>

                    <a href="<?= base_url('recuperar-contrasena') ?>">
                        ¿Olvidaste tu contraseña?
                    </a>

                </div>

                <button class="boton-login" type="submit">

                    Iniciar sesión

                    <span>→</span>

                </button>

                <p class="soporte">

                    ¿Necesitas ayuda?

                    <a href="mailto:soporte@supernova.com">
                        Contactar a soporte
                    </a>

                </p>

            </form>

        </section>

    </main>

    <script>
        const botonMostrar = document.getElementById(
            'mostrarContrasena'
        );

        const inputContrasena = document.getElementById(
            'contrasena'
        );

        botonMostrar.addEventListener('click', function () {

            if (inputContrasena.type === 'password') {
                inputContrasena.type = 'text';
                botonMostrar.textContent = '◎';
            } else {
                inputContrasena.type = 'password';
                botonMostrar.textContent = '◉';
            }

        });
    </script>

</body>
</html>