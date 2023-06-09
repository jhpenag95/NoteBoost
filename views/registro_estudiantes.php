<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Estudiantes</title>

    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/crear_estudiante/crear_estudiante.css">
    <link rel="stylesheet" href="../css/crear_estudiante/validarFormulario.css">

</head>
<body>
    <main>
        <div class="container">
            <form action="#" method="post" enctype="multipart/form-data" id="formEstudiantes">
                <h1>Registro de Estudiantes</h1>
                <label for="imagen">
                    <em>Sube tu imagen (Voluntario):</em>
                    <div class="image-upload">
                        <input type="file" id="imagen" name="imagen" accept="image/*" onchange="previewImage(event)">
                        <span></span>
                        <img id="preview" src="#">
                    </div>
                </label>

                <div class="cont-label">
                    <label>
                        <em>Código:</em>
                        <input type="number" id="codigo" name="codigo" placeholder="Ingrese su código" required>
                        <span></span>
                    </label>
                    <label>
                        <em>Nombres:</em>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                        <span></span>
                    </label>
                    <label>
                        <em>Apellidos:</em>
                        <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
                        <span></span>
                    </label>
                    <label>
                        <em>Correo:</em>
                        <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" required>
                        <span></span>
                    </label>
                    <label>
                        <em>Contraseña:</em>
                        <input type="password" id="clave" name="clave" placeholder="Ingrese su contraseña" required>
                        <span></span>
                    </label>
                    <label>
                        <em>Semestre:</em>
                        <select id="semestre" name="semestre" required>
                            <option value="">Seleccione un semestre</option>
                            <option value="1">Primer Semestre</option>
                            <option value="2">Segundo Semestre</option>
                            <option value="2">Tercero Semestre</option>
                        </select>
                        <span></span>
                    </label>
                    <label>
                        <em>Grupo:</em>
                        <select id="grupo" name="grupo" required>
                            <option value="">Seleccione un grupo</option>
                            <option value="1">Grupo-1</option>
                            <option value="2">Grupo-2</option>
                            <option value="2">Grupo-3</option>
                        </select>
                        <span></span>
                    </label>
                    <label>
                        <em>Materia:</em>
                        <select id="materia" name="materia" required>
                            <option value="">Seleccione una materia</option>
                            <option value="1">Materia-1</option>
                            <option value="2">Materia-2</option>
                            <option value="2">Materia-3</option>
                        </select>
                        <span></span>
                    </label>
                </div>

                <button type="submit">Crear Estudiante</button>
            </form>
        </div>
    </main>
    <script src="../js/crear_estudiante/crearEstudiantes.js"></script>
    <script src="../js/crear_estudiante/previsualizarImagen.js"></script>
</body>

</html>