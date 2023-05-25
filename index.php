<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('location: views/dashboard.php'); // Redirige al dashboard si ya hay una sesión activa
}
require_once 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Gloogle font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">


    <!--Mis estilos-->
    <link rel="stylesheet" href="css/index/index.css">
    <link rel="stylesheet" href="css/index/validarCampos.css">
    <link rel="stylesheet" href="css/global.css">

    <title>NoteBoost | Login</title>

    <?php require 'views/styles.php'; ?>
</head>

<body>
    <main>
        <form action="controllers/login/loginC.php" method="post" class="contLogin" id="loginForm">
            <h1>Ingresar al sistema</h1>
            <div class="group_input">
                <label>
                    <p class="nameLabel">Correo:</p>
                    <input type="email" name="email" id="email" placeholder="Ingrese por favor su correo">
                    <span></span>
                </label>
                <label for="password">
                    <p class="nameLabel">Contraseña:</p>
                    <input type="password" name="password" id="password" placeholder="Ingrese por favor su contraseña">
                    <span></span>
                </label>
                <label class="userType">
                    <?php
                    $query_rol = $conexion->query("SELECT * FROM roles WHERE id_rol IN (2, 3)"); // Solo selecciona los roles 2 y 3
                    $result_consulta = $query_rol->rowCount();
                    ?>
                    <em>Tipo de usuario:</em>
                    <select id="userType" name="userType" class="selectUser" required>
                        <option value="">Seleccione un tipo de usuario</option>
                        <?php
                        if ($result_consulta > 0) {
                            while ($rol = $query_rol->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                                <option value="<?php echo $rol['id_rol'] ?>"><?php echo $rol['nombre_rol'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <span></span>
                </label>
            </div>
            <div class="btn-cont">
                <button type="submit" name="validar" class="btn_ingresar" onclick="valida(event)">Ingresar</button>
                <a href="views/recuperarPassWord.html" class="links">¿Problemas para ingresar?</a>
            </div>
            <!-- Alertas -->
            <div class="alertFormBuscar">
                <?php if (isset($_SESSION['noExist'])) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>¡Error!</strong> <?php echo $_SESSION['noExist']; ?>
                    </div>
                    <?php unset($_SESSION['noExist']); ?>
                <?php endif; ?>
            </div>
        </form>
    </main>


    </main>
    <!-- <script src="js/login/validaCampos.js"></script> -->
    <script src="js/login/validarCampos.js"></script>
</body>

</html>