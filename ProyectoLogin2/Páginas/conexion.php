<?php
$host = "localhost";
$user = "adrian1";
$pass = "P@ssw0rd";
$db = "ProyectoLogin2";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>