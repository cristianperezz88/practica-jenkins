<?php
// Se obtiene la contraseña inyectada por Jenkins
$pass = getenv('ROOT_PASSWORD'); 
$host = 'db'; 
$user = 'root';

$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
echo "¡Conexión exitosa Practica 4.1 Terminada cpergar696!"; 
?>
