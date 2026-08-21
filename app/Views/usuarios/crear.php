<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Supernova | Nuevo usuario</title>

    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/usuarios.css') ?>"
    >

</head>

<body>


    <aside class="menu-lateral" id="menuLateral">

        <a
            href="<?= base_url('usuarios') ?>"
            class="logo"
        >

            <span class="logo-icono">
                S
            </span>

            <span>SUPERNOVA</span>

        </a>

        <div class="empresa">

            <span class="empresa-icono">
                SE
            </span>

            <div class="empresa-informacion">

                <strong>Supernova</strong>

                <small>Casa matriz</small>

            </div>

            <span>⌄</span>

        </div>

        <nav class="navegacion">

            <small class="titulo-menu">
                PRINCIPAL
            </small>

            <a href="#">
                <span>⌂</span>
                Inicio
            </a>

            <a href="#">
                <span>▣</span>
                Ventas
            </a>

            <a href="#">
                <span>▤</span>
                Facturación electrónica
            </a>

            <a href="#">
                <span>◇</span>
                Inventario
            </a>

            <a href="#">
                <span>$</span>
                Finanzas
            </a>

            <small class="titulo-menu">
                ADMINISTRACIÓN
            </small>

            <a
                href="<?= base_url('usuarios') ?>"
                class="activo"
            >
                <span>♙</span>
                Usuarios y permisos
            </a>

            <a href="#">
                <span>⚙</span>
                Configuración
            </a>

        </nav>

        <div class="usuario-menu">

            <span class="avatar-menu">
                LE
            </span>

            <div>

                <strong>Luisa Escobar</strong>

                <small>Administradora</small>

            </div>

            <button type="button">
                ⋮
            </button>

        </div>

    </aside>

    <main class="contenido-principal">

        <header class="barra-superior">

            <button
                type="button"
                class="boton-menu"
                id="botonMenu"
            >
                ☰
            </button>

            <div class="espacio"></div>

            <button
                type="button"
                class="notificaciones"
            >
                ♢
                <span></span>
            </button>

            <div class="usuario-superior">

                <span class="avatar-superior">
                    LE
                </span>

                <div>

                    <strong>Luisa Escobar</strong>

                    <small>Administradora</small>

                </div>

            </div>

        </header>

        <section class="contenido contenido-formulario">

            <p class="ruta">

                <a href="<?= base_url('usuarios') ?>">
                    Usuarios
                </a>

                /

                <strong>Nuevo usuario</strong>

            </p>

            <div class="encabezado-pagina">

                <div>

                    <h1>Crear nuevo usuario</h1>

                    <p class="descripcion">
                        Completa la información y define el acceso
                        que tendrá dentro del sistema.
                    </p>

                </div>

            </div>

            <form
                class="formulario-usuario"
                id="formularioUsuario"
            >

                <?= csrf_field() ?>

                <section class="seccion-formulario">

                    <div class="titulo-seccion">

                        <span>1</span>

                        <div>

                            <h2>Información personal</h2>

                            <p>
                                Datos generales del colaborador.
                            </p>

                        </div>

                    </div>

                    <div class="rejilla-formulario">

                        <label>

                            Nombres *

                            <input
                                type="text"
                                name="nombres"
                                placeholder="Ej. Andrea"
                                required
                            >

                        </label>

                        <label>

                            Apellidos *

                            <input
                                type="text"
                                name="apellidos"
                                placeholder="Ej. Hernández"
                                required
                            >

                        </label>

                        <label>

                            Correo electrónico *

                            <input
                                type="email"
                                name="correo"
                                placeholder="usuario@empresa.com"
                                required
                            >

                        </label>

                        <label>

                            Teléfono

                            <input
                                type="tel"
                                name="telefono"
                                placeholder="+503 0000-0000"
                            >

                        </label>

                    </div>

                </section>

                <section class="seccion-formulario">

                    <div class="titulo-seccion">

                        <span>2</span>

                        <div>

                            <h2>Información empresarial</h2>

                            <p>
                                Ubicación y función dentro de la empresa.
                            </p>

                        </div>

                    </div>

                    <div class="rejilla-formulario">

                        <label>

                            Empresa *

                            <select name="empresa" required>

                                <option value="Supernova">
                                    Supernova S.A. de C.V.
                                </option>

                            </select>

                        </label>

                        <label>

                            Sucursal *

                            <select name="sucursal" required>

                                <option value="">
                                    Seleccionar sucursal
                                </option>

                                <option value="Casa matriz">
                                    Casa matriz
                                </option>

                                <option value="Santa Ana">
                                    Santa Ana
                                </option>

                                <option value="San Miguel">
                                    San Miguel
                                </option>

                            </select>

                        </label>

                        <label>

                            Cargo

                            <input
                                type="text"
                                name="cargo"
                                placeholder="Ej. Ejecutivo de ventas"
                            >

                        </label>

                        <label>

                            Rol *

                            <select
                                name="rol"
                                id="rolUsuario"
                                required
                            >

                                <option value="">
                                    Seleccionar rol
                                </option>

                                <option value="Administrador">
                                    Administrador
                                </option>

                                <option value="Vendedor">
                                    Vendedor
                                </option>

                                <option value="Inventario">
                                    Encargado de inventario
                                </option>

                                <option value="Finanzas">
                                    Finanzas
                                </option>

                                <option value="Supervisor">
                                    Supervisor
                                </option>

                            </select>

                        </label>

                    </div>

                </section>

                <section class="seccion-formulario">

                    <div class="titulo-seccion">

                        <span>3</span>

                        <div>

                            <h2>Acceso y seguridad</h2>

                            <p>
                                Configura cómo podrá ingresar al sistema.
                            </p>

                        </div>

                    </div>

                    <div class="rejilla-formulario">

                        <label>

                            Nombre de usuario *

                            <input
                                type="text"
                                name="usuario"
                                placeholder="Ej. ahernandez"
                                required
                            >

                        </label>

                        <label>

                            Contraseña temporal *

                            <div class="entrada-contrasena">

                                <input
                                    type="password"
                                    name="contrasena"
                                    id="contrasenaTemporal"
                                    placeholder="Mínimo 8 caracteres"
                                    minlength="8"
                                    required
                                >

                                <button
                                    type="button"
                                    id="mostrarContrasena"
                                    aria-label="Mostrar contraseña"
                                >
                                    ◉
                                </button>

                            </div>

                        </label>

                    </div>

                    <label class="opcion-interruptor">

                        <span>

                            <strong>Usuario activo</strong>

                            <small>
                                Podrá acceder inmediatamente
                                después de guardar.
                            </small>

                        </span>

                        <input
                            type="checkbox"
                            name="activo"
                            checked
                        >

                    </label>

                    <label class="opcion-interruptor">

                        <span>

                            <strong>
                                Solicitar cambio de contraseña
                            </strong>

                            <small>
                                Deberá crear una contraseña nueva
                                al iniciar sesión por primera vez.
                            </small>

                        </span>

                        <input
                            type="checkbox"
                            name="cambiar_contrasena"
                            checked
                        >

                    </label>

                </section>

                <section class="seccion-formulario">

                    <div class="titulo-seccion">

                        <span>4</span>

                        <div>

                            <h2>Permisos del sistema</h2>

                            <p>
                                Se asignan según el rol seleccionado,
                                pero pueden personalizarse.
                            </p>

                        </div>

                    </div>

                    <div class="encabezado-permisos">

                        <span>

                            Permisos para:

                            <strong id="nombreRol">
                                Selecciona un rol
                            </strong>

                        </span>

                        <button
                            type="button"
                            id="restablecerPermisos"
                        >
                            Restablecer permisos
                        </button>

                    </div>

                    <div class="contenedor-permisos">

                        <div class="fila-permisos encabezado">

                            <span>MÓDULO</span>
                            <span>VER</span>
                            <span>CREAR</span>
                            <span>EDITAR</span>
                            <span>ANULAR</span>

                        </div>

                        <div
                            class="fila-permisos"
                            data-modulo="ventas"
                        >

                            <strong>Ventas</strong>

                            <input
                                type="checkbox"
                                name="permisos[ventas][ver]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[ventas][crear]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[ventas][editar]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[ventas][anular]"
                            >

                        </div>

                        <div
                            class="fila-permisos"
                            data-modulo="facturacion"
                        >

                            <strong>Facturación electrónica</strong>

                            <input
                                type="checkbox"
                                name="permisos[facturacion][ver]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[facturacion][crear]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[facturacion][editar]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[facturacion][anular]"
                            >

                        </div>

                        <div
                            class="fila-permisos"
                            data-modulo="inventario"
                        >

                            <strong>Inventario</strong>

                            <input
                                type="checkbox"
                                name="permisos[inventario][ver]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[inventario][crear]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[inventario][editar]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[inventario][anular]"
                            >

                        </div>

                        <div
                            class="fila-permisos"
                            data-modulo="finanzas"
                        >

                            <strong>Finanzas</strong>

                            <input
                                type="checkbox"
                                name="permisos[finanzas][ver]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[finanzas][crear]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[finanzas][editar]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[finanzas][anular]"
                            >

                        </div>

                        <div
                            class="fila-permisos"
                            data-modulo="usuarios"
                        >

                            <strong>Usuarios</strong>

                            <input
                                type="checkbox"
                                name="permisos[usuarios][ver]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[usuarios][crear]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[usuarios][editar]"
                            >

                            <input
                                type="checkbox"
                                name="permisos[usuarios][anular]"
                            >

                        </div>

                    </div>

                </section>

                <div class="acciones-formulario">

                    <a
                        href="<?= base_url('usuarios') ?>"
                        class="boton-cancelar"
                    >
                        Cancelar
                    </a>

                    <button
                        type="submit"
                        class="boton-principal"
                    >
                        Guardar usuario
                    </button>

                </div>

                <p
                    class="mensaje-formulario"
                    id="mensajeFormulario"
                ></p>

            </form>

        </section>

    </main>

    <script>

        const rolUsuario =
            document.getElementById('rolUsuario');

        const nombreRol =
            document.getElementById('nombreRol');

        const formulario =
            document.getElementById('formularioUsuario');

        const mensaje =
            document.getElementById('mensajeFormulario');

        const botonMostrar =
            document.getElementById('mostrarContrasena');

        const contrasena =
            document.getElementById('contrasenaTemporal');

        const botonMenu =
            document.getElementById('botonMenu');

        const menuLateral =
            document.getElementById('menuLateral');

        const restablecer =
            document.getElementById('restablecerPermisos');

        const permisosPorRol = {

            Administrador: {
                ventas: [true, true, true, true],
                facturacion: [true, true, true, true],
                inventario: [true, true, true, true],
                finanzas: [true, true, true, true],
                usuarios: [true, true, true, true]
            },

            Vendedor: {
                ventas: [true, true, true, false],
                facturacion: [true, true, false, false],
                inventario: [true, false, false, false],
                finanzas: [false, false, false, false],
                usuarios: [false, false, false, false]
            },

            Inventario: {
                ventas: [false, false, false, false],
                facturacion: [false, false, false, false],
                inventario: [true, true, true, false],
                finanzas: [false, false, false, false],
                usuarios: [false, false, false, false]
            },

            Finanzas: {
                ventas: [true, false, false, false],
                facturacion: [true, false, false, false],
                inventario: [true, false, false, false],
                finanzas: [true, true, true, false],
                usuarios: [false, false, false, false]
            },

            Supervisor: {
                ventas: [true, false, false, false],
                facturacion: [true, false, false, false],
                inventario: [true, false, false, false],
                finanzas: [true, false, false, false],
                usuarios: [false, false, false, false]
            }

        };

        function asignarPermisos() {

            const rol = rolUsuario.value;

            nombreRol.textContent =
                rol === ''
                    ? 'Selecciona un rol'
                    : rol;

            document
                .querySelectorAll('.fila-permisos[data-modulo]')
                .forEach(function (fila) {

                    const modulo = fila.dataset.modulo;

                    const casillas =
                        fila.querySelectorAll(
                            'input[type="checkbox"]'
                        );

                    const permisos =
                        permisosPorRol[rol]?.[modulo] ??
                        [false, false, false, false];

                    casillas.forEach(function (casilla, posicion) {

                        casilla.checked = permisos[posicion];

                    });

                });
        }

        rolUsuario.addEventListener(
            'change',
            asignarPermisos
        );

        restablecer.addEventListener(
            'click',
            asignarPermisos
        );

        botonMostrar.addEventListener('click', function () {

            if (contrasena.type === 'password') {

                contrasena.type = 'text';
                botonMostrar.textContent = '◎';

            } else {

                contrasena.type = 'password';
                botonMostrar.textContent = '◉';

            }

        });

        botonMenu.addEventListener('click', function () {

            menuLateral.classList.toggle('mostrar');

        });

        formulario.addEventListener('submit', function (evento) {

            evento.preventDefault();

            mensaje.textContent =
                'Usuario guardado correctamente. Esta es una demostración visual.';

            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: 'smooth'
            });

        });

    </script>

</body>

</html>