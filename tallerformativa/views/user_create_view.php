<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form method="POST" action="user_create.php">
        <input type="text" name="name" placeholder="Nombre" required><br>
        <input type="text" name="cedula" placeholder="Cédula" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
        <button type="submit">Crear Usuario</button>
    </form>
</body>
</html>
