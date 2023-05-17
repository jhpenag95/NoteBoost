<?php
// Configuración de la conexión a la base de datos
$host = 'localhost'; // Cambia esto por el nombre del servidor de la base de datos
$dbName = 'noteboost'; // Cambia esto por el nombre de tu base de datos
$username = 'root'; // Cambia esto por tu nombre de usuario de la base de datos
$password = ''; // Cambia esto por tu contraseña de la base de datos

// Intentar establecer la conexión
try {
    // Establecer una conexión segura utilizando PDO
    $dsn = "mysql:host=$host;dbname=$dbName;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Habilitar el modo de error y lanzar excepciones en caso de error
        PDO::ATTR_EMULATE_PREPARES => false, // Desactivar la emulación de consultas preparadas
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Configurar el modo de recuperación de resultados a modo de arreglo asociativo
    ];

    $conexion = new PDO($dsn, $username, $password, $options); // Crear una nueva instancia de PDO con los parámetros de conexión

    // Realizar operaciones con la base de datos...

} catch (PDOException $e) {
    // Manejar cualquier error en la conexión
    echo "Error de conexión: " . $e->getMessage();
}
?>
