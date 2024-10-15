<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #f2f2f2;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .login-box {
            margin-top: 100px;
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        input[type="text"], input[type="password"] {
            display: block;
            width: 80%;
            margin: 10px auto;
            padding: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login Oficial</h2>
        <form action="validar_login.php" method="post">
            <input type="text" name="username" placeholder="Usuario" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>
