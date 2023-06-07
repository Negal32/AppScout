<?php

// Database connection variables
$servername = "localhost";
$username = "AppScout";
$password = "AppScout1";
$dbname = "AppScout";

// Create database connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check if connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create Puntaje
if (isset($_POST['submitPuntaje'])) {
    $fecha = $_POST['fecha'];
    $idActividad = $_POST['idActividad'];
    $idPatrulla = $_POST['idPatrulla'];

    $query = "INSERT INTO Puntaje (Fecha, IdActividad, IdPatrulla) VALUES ('$fecha', $idActividad, $idPatrulla)";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}

// Read Puntaje
$puntajes = array();
$query = "SELECT * FROM Puntaje";
$result = mysqli_query($connection, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $puntajes[] = $row;
    }
} else {
    die('Query failed: ' . mysqli_error($connection));
}

// Update Puntaje
if (isset($_POST['updatePuntaje'])) {
    $idPuntaje = $_POST['idPuntaje'];
    $fecha = $_POST['fecha'];
    $idActividad = $_POST['idActividad'];
    $idPatrulla = $_POST['idPatrulla'];

    $query = "UPDATE Puntaje SET Fecha = '$fecha', IdActividad = $idActividad, IdPatrulla = $idPatrulla WHERE IdPuntajeActividad = $idPuntaje";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}

// Delete Puntaje
if (isset($_POST['deletePuntaje'])) {
    $idPuntaje = $_POST['idPuntaje'];

    $query = "DELETE FROM Puntaje WHERE IdPuntajeActividad = $idPuntaje";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}


// Create Actividad
if (isset($_POST['submitActividad'])) {
    $idActividad = $_POST['idActividad'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO Actividad (IdActividad, Nombre, Descripcion) VALUES ($idActividad, '$nombre', '$descripcion')";
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

// Create Patrulla
if (isset($_POST['submitPatrulla'])) {
    $nombre = $_POST['nombre'];

    $query = "INSERT INTO Patrulla (Nombre) VALUES ('$nombre')";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}

// Read Patrulla
$patrullas = array();
$query = "SELECT * FROM Patrulla";
$result = mysqli_query($connection, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $patrullas[] = $row;
    }
} else {
    die('Query failed: ' . mysqli_error($connection));
}

// Update Patrulla
if (isset($_POST['updatePatrulla'])) {
    $idPatrulla = $_POST['idPatrulla'];
    $nombre = $_POST['nombre'];

    $query = "UPDATE Patrulla SET Nombre = '$nombre' WHERE IdPatrulla = $idPatrulla";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}

// Delete Patrulla
if (isset($_POST['deletePatrulla'])) {
    $idPatrulla = $_POST['idPatrulla'];

    $query = "DELETE FROM Patrulla WHERE IdPatrulla = $idPatrulla";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}
// Close the database connection
mysqli_close($connection);

?>
