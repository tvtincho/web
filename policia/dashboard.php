<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?></h1>
    <a href="logout.php">Cerrar sesión</a>
    <!-- Aquí puedes añadir más funcionalidades como agregar antecedentes -->
</body>
</html>
