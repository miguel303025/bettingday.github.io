<?php
session_start();
session_destroy(); // Cierra la sesión
header("Location: login.html"); // Redirige al login
exit();
?>
