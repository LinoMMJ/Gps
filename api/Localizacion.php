<?php
$servername = "154.12.254.242"; // Dirección IP del servidor de base de datos
$username = "ratiosof74bo_uv_bd_user"; // Nombre de usuario
$password = "Estudiantes@2024"; // Contraseña
$dbname = "ratiosof74bo_uv_bd"; // Nombre de la base de datos
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
 
// Consulta para obtener la última coordenada
$sql = "SELECT latitud, longitud FROM datos_gps ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $coordenadas = array(
        "latitud" => $row["latitud"],
        "longitud" => $row["longitud"]
    );
    echo json_encode($coordenadas);
} else {
    echo "Sin coordenadas disponibles";
}
 
$conn->close();
?>