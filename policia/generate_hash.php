<?php
$password = 'aa'; // Cambia esto por la contraseña que deseas hashear
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo $hashed_password;
?>
