<?php
// Archivo: dbCon.php

$servername = "localhost";
$username = "root"; // Cambia según tus credenciales
$password = "";     // Coloca tu contraseña
$dbname = "ColegioChacabuco";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
