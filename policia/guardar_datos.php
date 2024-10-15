<?php
$conexion = new mysqli("localhost", "root", "", "antecedentes");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $nacionalidad = $_POST['nacionalidad'];
    $sexo = $_POST['sexo'];
    $user_discord = $_POST['discord'];
    $motivo = $_POST['motivo'];

    $sql = "INSERT INTO antecedentes (Rut, Nombre, Apellido, Nacionalidad, Sexo, user_discord, motivo) 
            VALUES ('$rut', '$nombre', '$apellido', '$nacionalidad', '$sexo', '$user_discord', '$motivo')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

$conexion->close();
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Antecedentes</title>
</head>
<body>
    <h1>Registrar Antecedente</h1>
    <form action="guardar_datos.php" method="POST">
        <label for="Rut">Rut:</label>
        <input type="text" id="Rut" name="Rut" required><br>

        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" required><br>

        <label for="Apellido">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido" required><br>

        <label for="Nacionalidad">Nacionalidad:</label>
        <input type="text" id="Nacionalidad" name="Nacionalidad" required><br>

        <label for="Sexo">Sexo:</label>
        <select id="Sexo" name="Sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br>

        <label for="user_discord">Usuario de Discord:</label>
        <input type="text" id="user_discord" name="user_discord" required><br>

        <label for="motivo">Motivo del Antecedente:</label>
        <input type="text" id="motivo" name="motivo" required><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
