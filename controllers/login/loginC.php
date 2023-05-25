<?php
session_start();

require_once '../../models/login/loginM.php';

// Crear una instancia del modelo de login
$model = new loginModel($conexion);

// Crear un arreglo de datos para enviar al modelo

if (isset($_REQUEST['validar'])) {
    $valida = $model->login($_REQUEST['email'], $_REQUEST['password'], $_REQUEST['userType']);
    if ($valida == true) {
        session_start();
        $_SESSION['s1']=$_REQUEST['email'];
        header("location: ../../views/dashboard.php");
    }else{
        // Ha ocurrido un error al crear la orden
        $_SESSION['noExist'] = "Correo o contraseña incorrestos, por favor valide";
        header("Location: ../../index.php");
        exit();
    }
}

?>