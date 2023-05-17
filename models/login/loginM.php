<?php
require '../../conexion.php';

class loginModel{
    public function login($usuario, $password, $userType){
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password' AND tipo = '$userType'";
    }

}
