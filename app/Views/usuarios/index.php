<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Supernova | Gestión de usuarios</title>

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

            <span>
                SUPERNOVA
            </span>

        </a>

        <div class="empresa">

            <span class="empresa-icono">
                SE
            </span>

            <div class="empresa-informacion">

                <strong>
                    Supernova
                </strong>

                <small>
                    Casa matriz
                </small>

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

                <strong>
                    Luisa Escobar
                </strong>

                <small>
                    Administradora
                </small>

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

            <div class="contenedor-usuario-superior">

    <button
        type="button"
        class="usuario-superior"
        id="botonUsuario"
    >

        <span class="avatar-superior">
            LE
        </span>

        <span class="datos-usuario-superior">

            <strong>
                Luisa Escobar
            </strong>

            <small>
                Administradora
            </small>

        </span>

        <span class="flecha-usuario">
            ⌄
        </span>

    </button>

    <div
        class="menu-usuario-superior"
        id="menuUsuario"
    >

        <div class="informacion-menu-usuario">

            <strong>
                Luisa Escobar
            </strong>

            <small>
                Administradora
            </small>

        </div>

        <a href="#">
            Mi perfil
        </a>

        <a
            href="<?= base_url('cerrar-sesion') ?>"
            class="boton-cerrar-sesion"
        >
            <span>↪</span>
            Cerrar sesión
        </a>

    </div>

</div>

        </header>

        <section class="contenido">

            <div class="encabezado-pagina">

                <div>

                    <p class="ruta">
                        Administración /
                        <strong>Usuarios</strong>
                    </p>

                    <h1>
                        Gestión de usuarios
                    </h1>

                    <p class="descripcion">
                        Administra los accesos, roles y
                        permisos de tu equipo.
                    </p>

                </div>

                <a
                    href="<?= base_url('usuarios/nuevo') ?>"
                    class="boton-principal"
                    >
                    ＋ Nuevo usuario
            </a>

            </div>


            <div class="tarjetas-estadisticas">

                <article class="tarjeta-estadistica">

                    <span class="icono-estadistica morado">
                        ♙
                    </span>

                    <div>

                        <small>
                            Total de usuarios
                        </small>

                        <strong>
                            24
                        </strong>

                        <em>
                            +3 este mes
                        </em>

                    </div>

                </article>

                <article class="tarjeta-estadistica">

                    <span class="icono-estadistica verde">
                        ✓
                    </span>

                    <div>

                        <small>
                            Usuarios activos
                        </small>

                        <strong>
                            21
                        </strong>

                        <em>
                            87.5% del total
                        </em>

                    </div>

                </article>

                <article class="tarjeta-estadistica">

                    <span class="icono-estadistica naranja">
                        ◷
                    </span>

                    <div>

                        <small>
                            Invitaciones pendientes
                        </small>

                        <strong>
                            2
                        </strong>

                        <em>
                            Esperando registro
                        </em>

                    </div>

                </article>

                <article class="tarjeta-estadistica">

                    <span class="icono-estadistica azul">
                        ⌘
                    </span>

                    <div>

                        <small>
                            Roles configurados
                        </small>

                        <strong>
                            6
                        </strong>

                        <em>
                            Ver roles
                        </em>

                    </div>

                </article>

            </div>


            <section class="tarjeta-tabla">

                <div class="filtros">

                    <div class="buscador">

                        <span>⌕</span>

                        <input
                            type="search"
                            id="buscarUsuario"
                            placeholder="Buscar por nombre o correo..."
                        >

                    </div>

                    <select id="filtroRol">

                        <option value="">
                            Todos los roles
                        </option>

                        <option value="Administradora">
                            Administradora
                        </option>

                        <option value="Vendedor">
                            Vendedor
                        </option>

                        <option value="Inventario">
                            Inventario
                        </option>

                        <option value="Finanzas">
                            Finanzas
                        </option>

                    </select>

                    <select id="filtroEstado">

                        <option value="">
                            Todos los estados
                        </option>

                        <option value="Activo">
                            Activo
                        </option>

                        <option value="Inactivo">
                            Inactivo
                        </option>

                        <option value="Pendiente">
                            Pendiente
                        </option>

                    </select>

                    <button
                        type="button"
                        class="boton-secundario"
                    >
                        ⚙ Más filtros
                    </button>

                </div>

                <div class="contenedor-tabla">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    <input type="checkbox">
                                </th>

                                <th>USUARIO</th>
                                <th>ROL</th>
                                <th>SUCURSAL</th>
                                <th>ESTADO</th>
                                <th>ÚLTIMO ACCESO</th>
                                <th></th>

                            </tr>

                        </thead>

                        <tbody id="tablaUsuarios">

                            <tr
                                data-rol="Administradora"
                                data-estado="Activo"
                            >

                                <td>
                                    <input type="checkbox">
                                </td>

                                <td>

                                    <div class="datos-usuario">

                                        <span class="avatar morado-avatar">
                                            AM
                                        </span>

                                        <div>

                                            <strong>
                                                Ana Martínez
                                            </strong>

                                            <small>
                                                ana@empresa.com
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>Administradora</td>
                                <td>Casa matriz</td>

                                <td>
                                    <span class="estado activo">
                                        ● Activo
                                    </span>
                                </td>

                                <td>
                                    Hoy, 9:42 a. m.
                                </td>

                                <td>
                                    <button class="acciones">
                                        ⋮
                                    </button>
                                </td>

                            </tr>

                            <tr
                                data-rol="Vendedor"
                                data-estado="Activo"
                            >

                                <td>
                                    <input type="checkbox">
                                </td>

                                <td>

                                    <div class="datos-usuario">

                                        <span class="avatar azul-avatar">
                                            CL
                                        </span>

                                        <div>

                                            <strong>
                                                Carlos López
                                            </strong>

                                            <small>
                                                carlos@empresa.com
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>Vendedor</td>
                                <td>Santa Ana</td>

                                <td>
                                    <span class="estado activo">
                                        ● Activo
                                    </span>
                                </td>

                                <td>
                                    Ayer, 4:15 p. m.
                                </td>

                                <td>
                                    <button class="acciones">
                                        ⋮
                                    </button>
                                </td>

                            </tr>

                            <tr
                                data-rol="Inventario"
                                data-estado="Inactivo"
                            >

                                <td>
                                    <input type="checkbox">
                                </td>

                                <td>

                                    <div class="datos-usuario">

                                        <span class="avatar naranja-avatar">
                                            MP
                                        </span>

                                        <div>

                                            <strong>
                                                María Pérez
                                            </strong>

                                            <small>
                                                maria@empresa.com
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>Inventario</td>
                                <td>Casa matriz</td>

                                <td>
                                    <span class="estado inactivo">
                                        ● Inactivo
                                    </span>
                                </td>

                                <td>
                                    02 ago. 2026
                                </td>

                                <td>
                                    <button class="acciones">
                                        ⋮
                                    </button>
                                </td>

                            </tr>

                            <tr
                                data-rol="Finanzas"
                                data-estado="Pendiente"
                            >

                                <td>
                                    <input type="checkbox">
                                </td>

                                <td>

                                    <div class="datos-usuario">

                                        <span class="avatar verde-avatar">
                                            JR
                                        </span>

                                        <div>

                                            <strong>
                                                José Ramírez
                                            </strong>

                                            <small>
                                                jose@empresa.com
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td>Finanzas</td>
                                <td>San Salvador</td>

                                <td>
                                    <span class="estado pendiente">
                                        ● Pendiente
                                    </span>
                                </td>

                                <td>
                                    Nunca
                                </td>

                                <td>
                                    <button class="acciones">
                                        ⋮
                                    </button>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                    <p
                        class="sin-resultados"
                        id="sinResultados"
                    >
                        No se encontraron usuarios.
                    </p>

                </div>

                <footer class="paginacion">

                    <span>
                        Mostrando 1-4 de 24 usuarios
                    </span>

                    <div>

                        <button disabled>←</button>
                        <button class="seleccionado">1</button>
                        <button>2</button>
                        <button>3</button>
                        <button>→</button>

                    </div>

                </footer>

            </section>

        </section>

    </main>

    <script>

        const buscarUsuario =
            document.getElementById('buscarUsuario');

        const filtroRol =
            document.getElementById('filtroRol');

        const filtroEstado =
            document.getElementById('filtroEstado');

        const filas =
            document.querySelectorAll('#tablaUsuarios tr');

        const sinResultados =
            document.getElementById('sinResultados');

        function filtrarUsuarios() {

            const texto =
                buscarUsuario.value.toLowerCase();

            const rol =
                filtroRol.value;

            const estado =
                filtroEstado.value;

            let cantidadVisible = 0;

            filas.forEach(function (fila) {

                const contenido =
                    fila.textContent.toLowerCase();

                const coincideTexto =
                    contenido.includes(texto);

                const coincideRol =
                    rol === '' ||
                    fila.dataset.rol === rol;

                const coincideEstado =
                    estado === '' ||
                    fila.dataset.estado === estado;

                const mostrar =
                    coincideTexto &&
                    coincideRol &&
                    coincideEstado;

                fila.style.display =
                    mostrar ? '' : 'none';

                if (mostrar) {
                    cantidadVisible++;
                }

            });

            sinResultados.style.display =
                cantidadVisible === 0
                    ? 'block'
                    : 'none';
        }

        buscarUsuario.addEventListener(
            'input',
            filtrarUsuarios
        );

        filtroRol.addEventListener(
            'change',
            filtrarUsuarios
        );

        filtroEstado.addEventListener(
            'change',
            filtrarUsuarios
        );

        const botonMenu =
            document.getElementById('botonMenu');

        const menuLateral =
            document.getElementById('menuLateral');

        botonMenu.addEventListener('click', function () {

            menuLateral.classList.toggle('mostrar');

        });
        const botonUsuario =
        document.getElementById('botonUsuario');

    const menuUsuario =
        document.getElementById('menuUsuario');

    botonUsuario.addEventListener('click', function (evento) {

        evento.stopPropagation();

        menuUsuario.classList.toggle('visible');

    });

    document.addEventListener('click', function (evento) {

        const clicDentro =
            menuUsuario.contains(evento.target);

        if (!clicDentro) {

            menuUsuario.classList.remove('visible');

        }

    });

    </script>

</body>

</html>