<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<link rel="stylesheet" href="../css/nav/nav.css">
<link rel="stylesheet" href="../css/crear_usuario/crear_usuario.css">
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bx-book'></i>
            <span class="logo_name">NoteBoost</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Menú</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Menú</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i><img src="../assets/icons/estudiante.svg" alt=""></i>
                        <span class="link_name">Estudiantes</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Estudiantes</a></li>
                    <li><a href="#">Crear Estudiantes</a></li>
                    <li><a href="#">Lista Estudiantes</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i><img src="../assets/icons/materias.svg" alt="imagen para metarrias"></i>
                        <span class="link_name">Materias</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Materias</a></li>
                    <li><a href="#">Imgresar Materias</a></li>
                    <li><a href="#">Lista de Materias</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i><img src="../assets/icons/grupos.svg" alt="Imagen de grupos"></i>
                        <span class="link_name">Grupos</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Grupos</a></li>
                    <li><a href="#">Crear Grupos</a></li>
                    <li><a href="#">Lista Grupos</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i><img src="../assets/icons/conceptos.svg" alt="Imagen para conceptos"></i>
                        <span class="link_name">Conceptos</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Conceptos</a></li>
                    <li><a href="#">Crear Conceptos</a></li>
                    <li><a href="#">Lista Conceptos</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i><img src="../assets/icons/usuarios.svg" alt="Imagen para notas"></i>
                        <span class="link_name">Usuarios</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Usuarios</a></li>
                    <li><a href="#">Crear Usuarios</a></li>
                    <li><a href="#">Lista Usuarios</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i><img src="../assets/icons/notas.svg" alt="Imagen para notas"></i>
                        <span class="link_name">Notas</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Notas</a></li>
                    <li><a href="#">Crear Notas</a></li>
                    <li><a href="#">Lista Notas</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="../assets/image/imagenUser.jpg" alt="profileImg">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Johan Peña</div>
                        <div class="job">Estudiante</div>
                    </div>
                    <a href="../index.html"><i class='bx bx-log-out'></i></a>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">NoteBoost - DashBoard</span>
        </div>
        <div>
        </div>
    </section>
    
    <script src="../js/nav/app.js" type="module"></script>
</body>

</html>