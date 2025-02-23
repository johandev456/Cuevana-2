<?php
include 'conexion.php';
include 'getIP.php';

function loginf() {
    global $conexion; // Ensure $conexion is accessible within the function

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['username'];
        $clave = $_POST['password'];

        // Prepare the SQL statement
        $consulta = $conexion->prepare("SELECT * FROM usuario WHERE usuario = ? AND password = ?");
        $consulta->bind_param("ss", $usuario, $clave);

        // Execute the statement
        $consulta->execute();
        $resultado = $consulta->get_result();

        if ($resultado->num_rows > 0) {
            foreach ($resultado as $row) {
                if ($row['usuario'] == $usuario && $row['password'] == $clave) {
                    $ip = obtenerIP();
                    $logConsulta = $conexion->prepare("INSERT INTO ipusuario (ip) VALUES (?)");
                    $logConsulta->bind_param("s", $ip);
                    $logConsulta->execute();

                    // Redirect to the index page
                    header("Location: index.php");
                    exit();
                }
            }
        } else {
            // Handle login failure
            // Redirect back to the login page with an error message
            header("Location: login.php?error=1");
            exit();
        }
    }
}

// Call the loginf function to handle the form submission
loginf();
?>