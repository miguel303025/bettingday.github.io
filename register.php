<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['register-username'];
    $fullname = $_POST['register-fullname'];
    $password = password_hash($_POST['register-password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO usuarios (username, fullname, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $fullname, $password);

    if ($stmt->execute()) {
        // Redirigir a la página de inicio tras el registro exitoso
        header("Location: pagina de inicio.html");
        exit();
    } else {
        echo "Error al registrar usuario.";
    }

    $stmt->close();
    $conn->close();
}
?>
