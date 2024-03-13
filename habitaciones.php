<?php
// Conexión a la base de datos (asumiendo que ya tienes una conexión establecida)

// Credenciales de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$database = "hotel_hilton";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener las habitaciones
$sql = "SELECT * FROM Habitaciones";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Arreglo para almacenar las habitaciones
    $habitaciones = array();

    // Obtener los datos de cada habitación y almacenarlos en el arreglo
    while ($row = $result->fetch_assoc()) {
        $habitacion = array(
            'ID_habitacion' => $row['ID_habitacion'],
            'tipo_habitacion' => $row['tipo_habitacion'],
            'precio' => $row['precio'],
            'descripcion' => $row['descripcion'],
            'imagen_url' => $row['imagen_url']
        );
        $habitaciones[] = $habitacion;
    }

    // Convertir el arreglo de habitaciones a formato JSON
    $json_habitaciones = json_encode($habitaciones);

    // Mostrar el JSON
    echo $json_habitaciones;
} else {
    echo "No se encontraron habitaciones.";
}

// Cerrar la conexión
$conn->close();
?>
