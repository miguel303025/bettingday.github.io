<?php
$servername = "localhost";
$username = "root"; // Usuario predeterminado en XAMPP
$password = ""; // Normalmente vacío en XAMPP
$database = "apuestas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
