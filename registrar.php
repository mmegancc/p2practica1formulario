<?php
// Credenciales de conexión a XAMPP
$servidor   = "localhost";
$usuario    = "root";
$password   = "";
$base_datos = "megan"; 

$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Recibir los datos enviados por el formulario
$correo        = $_POST['correo'];
$contrasena    = $_POST['contrasena']; 
$domicilio     = $_POST['domicilio'];
$colonia       = $_POST['colonia'];
$codigo_postal = $_POST['codigo_postal'];
$pais          = $_POST['pais']; // Recibe el número de opción (1, 2, 3, etc.)

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (correo, contrasena, domicilio, colonia, codigo_postal, pais) 
        VALUES ('$correo', '$contrasena', '$domicilio', '$colonia', '$codigo_postal', '$pais')";

// Ejecutar y verificar
if (mysqli_query($conexion, $sql)) {
    echo "¡Registro completado con éxito!";
} else {
    echo "Error al registrar: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
