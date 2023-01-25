<?php

$host = "localhost"; // ejemplo: localhost
$user = "root"; // el nombre de usuario para conectarse a la base de datos
$password = ""; // la contraseña del usuario
$dbname = "restfinder"; // el nombre de la base de datos

// Connect to database
$conn = new mysqli($host, $user, $password, $dbname);
echo "hola";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user input
$username =  $_POST['nombre_usuario'];
$password =  $_POST['password'];
echo "hola";

// Check if user and password exist
$sql = "SELECT * FROM sesion WHERE USUARIO = '$username' AND CONTRASENA = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start session and store necessary information
    session_start();
    $_SESSION['username'] = $username;
    mysqli_close($conn);
    // Redirect to protected page
    header("Location: index.php");
    exit();
} else {
    echo "Invalid username or password";
}

$conn->close();
?>