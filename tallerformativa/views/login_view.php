<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="login.php">
        <input type="text" name="cedula" placeholder="Cédula" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
        <button type="submit">Iniciar sesión</button>
    </form>
    <?php if (isset($_GET['error'])) { echo "<p style='color:red;'>Credenciales incorrectas</p>"; } ?>
</body>
</html>
