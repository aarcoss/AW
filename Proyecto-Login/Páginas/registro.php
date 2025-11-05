<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="../CSS/registro.css">
</head>

<body>
    <div class="registerbox">
    <h2>Registro</h2>

    <form action="procesar_registro.php" method="post">
    <div class="input2">
        <label>Usuario:</label>
        <input type="text" name="usuario" required placeholder="Nuevo Usuario"><br><br>
    </div>

    <div class="input2">
        <label>Contraseña:</label>
        <input type="password" name="password" required placeholder="********"><br><br>
    </div>
    
    <button type="submit">Registrarse</button>
    </form>
 

    <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>

</body>

</html>