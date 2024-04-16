<header>
    <?php if($admin) {?>
    <nav class="nav-admin"  >
        <div class="profile">
            <img src="/build/img/admin.webp" alt="profile image">
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="/admin" class="admin-inicio">Inicio</a></li>
                <li class="admin-usuario"><a href="/usuario">Usuario</a></li>
                <li>Estudiantes</li>
                <li>Acudiente</li>
                <li>Profesor</li>
                <li>Materia</li>
                <li>Grado</li>
                <li>Notas</li>
                <li>Reportes</li>
                <li>Salir</li>
            </ul>
        </div>
    </nav>

    <div class="welcome-admin">
        <h1>Bienvenido: Manuela Ortíz</h1>
        <p>Rol: Admin</p>
    </div>
    <?php }; ?>

</header>