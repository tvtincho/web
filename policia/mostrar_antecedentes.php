<?php
$conexion = new mysqli("localhost", "root", "", "antecedentes");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$sql = "SELECT Rut, Nombre, Apellido, Nacionalidad, Sexo, user_discord, motivo FROM antecedentes";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Antecedentes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        body {
            background-image: url('Diseño_sin_título-removebg-preview.png');
            background-position: top right;
            background-repeat: no-repeat;
            background-size: 150px;
        }
    </style>
</head>
<body>

<h1>Antecedentes Registrados</h1>

<table>
    <tr>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nacionalidad</th>
        <th>Sexo</th>
        <th>User Discord</th>
        <th>Motivo</th>
    </tr>
    <?php
    if ($resultado->num_rows > 0) {
        while($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Rut"] . "</td>";
            echo "<td>" . $row["Nombre"] . "</td>";
            echo "<td>" . $row["Apellido"] . "</td>";
            echo "<td>" . $row["Nacionalidad"] . "</td>";
            echo "<td>" . $row["Sexo"] . "</td>";
            echo "<td>" . $row["user_discord"] . "</td>";
            echo "<td>" . $row["motivo"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No se encontraron resultados</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
$conexion->close();
?>
