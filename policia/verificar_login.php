<?php
session_start();
include 'conexion.php'; // Asegúrate de incluir el archivo de conexión a la base de datos.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar usuario y contraseña en la base de datos
    $sql = "SELECT * FROM usuarios WHERE username = ? LIMIT 1"; // Asegúrate de que el nombre de la tabla y columna sean correctos
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Verificar la contraseña
        if (password_verify($password, $user['password'])) {
            // Almacenar información del usuario en sesión
            echo("contrasena ok<br>");
            $_SESSION['user_id'] = $user['id']; // Asegúrate de que 'id' sea la columna correcta
            header('Location: formulario.php'); // Redirigir al formulario después de iniciar sesión
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
