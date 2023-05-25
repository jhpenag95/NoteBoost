<?php
require '../../conexion.php';

class loginModel
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function login($email, $password, $id_rol)
    {
        $data = null; // Inicializamos la variable $data como null

        if ($id_rol == 2) {
            $sql = "SELECT * FROM profesores WHERE correo = :email AND contrasena = :password";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            $row_count = $stmt->rowCount();

            if ($row_count > 0) {
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        } elseif ($id_rol == 3) {
            $sql = "SELECT * FROM estudiantes WHERE correo_electronico = :email AND contrasena = :password";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            $row_count = $stmt->rowCount();

            if ($row_count > 0) {
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                $data = null; // Establecemos $data como null si el estudiante no existe
            }
        }

        return $data; // Devolvemos los datos del usuario (si existe) o null (si no existe)
    }
}
