<?php

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $file = fopen("usuarios.txt","a");
    fwrite($file, $usuario . ":" . password_hash($password, PASSWORD_DEFAULT) . "\n");
    fclose($file);


echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<title>Proceso de Registro</title>';
echo '<link rel="stylesheet" href="../CSS/procesarregistro.css">';
echo '</head>';
echo '<body>';
echo '<div class="cont"';
echo '<h1>Usuario registrado correctamente</h1><br><br><br>';
echo '<p><a href="login.php">Iniciar sesión</a></p>';
echo '</div>';
echo '</body>';
echo '</html>';
