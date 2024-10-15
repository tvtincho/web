<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['user_id']; ?></h1>
    <form action="guardar_datos.php" method="post">
        <label for="rut">Rut:</label>
        <input type="text" id="rut" name="rut" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" id="nacionalidad" name="nacionalidad" required><br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select><br>

        <label for="discord">Usuario de Discord:</label>
        <input type="text" id="discord" name="discord" required><br>

        <label for="motivo">Motivo del Antecedente:</label>
        <input type="text" id="motivo" name="motivo" required><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

