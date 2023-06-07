<?php
require_once 'conn.php';

// Create Actividad
if (isset($_POST['submitActividad'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO Actividad (Nombre, Descripcion) VALUES ('$nombre', '$descripcion')";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}

// Read Actividad
$actividades = array();
$query = "SELECT * FROM Actividad";
$result = mysqli_query($connection, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $actividades[] = $row;
    }
} else {
    die('Query failed: ' . mysqli_error($connection));
}

// Update Actividad
if (isset($_POST['updateActividad'])) {
    $idActividad = $_POST['idActividad'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $query = "UPDATE Actividad SET Nombre = '$nombre', Descripcion = '$descripcion' WHERE IdActividad = $idActividad";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}

// Delete Actividad
if (isset($_POST['deleteActividad'])) {
    $idActividad = $_POST['idActividad'];

    $query = "DELETE FROM Actividad WHERE IdActividad = $idActividad";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}

mysqli_close($connection);

?>