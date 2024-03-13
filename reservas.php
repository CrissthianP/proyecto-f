<?php
// Configuración de CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Conexión a la base de datos
$mysqli = new mysqli("127.0.0.1:3306", "root", "root", "hotel_hilton");

// Consulta SQL
$sql = "SELECT * FROM Reservas";

// Ejecución de la consulta
$resultado = $mysqli->query($sql);

// Conversión del resultado a JSON
$json = array();
while($fila = $resultado->fetch_assoc()) {
  $json[] = $fila;
}

// Salida del JSON
header('Content-Type: application/json');
echo json_encode($json);

?>
