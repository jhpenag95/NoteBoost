<?php include 'styles.php';?>

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
                <a href="../controllers/cerrar_session/logout.php"><i class='bx bx-log-out'></i></a>
            </div>
        </li>
    </ul>
</div>

