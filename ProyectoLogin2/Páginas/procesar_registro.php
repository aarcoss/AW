<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'conexion.php';

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $hash);

echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <title>Registro</title>
    <link rel='stylesheet' href='../CSS/estilos.css'>
</head>
<body>";

try {
    $stmt->execute();
    echo "<div class='mensaje exito'>";
    echo "¡Usuario registrado correctamente! <a href='login.php'>Inicia sesión aquí</a>";
    echo "</div>";

} catch (mysqli_sql_exception $e) {
    if ($e->getCode() == 1062) {
    echo "<div class='mensaje error'>";
    echo "Error: el usuario ya existe. <a href='registro.php'>Volver al registro</a>";
    echo "</div>";

    } else {
        echo "<h1>Error inesperado: " . $e->getMessage() . "</h1>";
    }
}
$stmt->close();
$conn->close();
?>