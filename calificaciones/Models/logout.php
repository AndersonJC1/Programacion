<?php
session_start();

// Destruir la sesión actual
session_destroy();

// Redirigir al usuario a la página de inicio de sesión o a otra página
header("Location: ../Views/login.html");
exit;
?>