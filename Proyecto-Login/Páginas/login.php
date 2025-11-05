<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../CSS/login1.css">
</head>

<body>
    <div class="loginbox">
    <h2>Login</h2>

    <form action="procesar_login.php" method="post">
    <div class="input2">
        <label>Usuario:</label>
        <input type="text" name="usuario" required placeholder="Tu usuario"><br><br>
    </div>

    <div class="input2">
        <label>Contraseña:</label>
        <input type="password" name="password" required placeholder="*********"><br><br>
    </div>

    <button type="submit">Entrar</button>
    </form>

    <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </div>

</body>
</html>