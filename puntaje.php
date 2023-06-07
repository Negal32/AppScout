<?php
require_once 'conn.php';

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

    $query = "UPDATE Puntaje SET Fecha = '$fecha', IdActividad = $idActividad, IdPatrulla = $idPatrulla WHERE IdPuntaje = $idPuntaje";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}

// Delete Puntaje
if (isset($_POST['deletePuntaje'])) {
    $idPuntaje = $_POST['idPuntaje'];

    $query = "DELETE FROM Puntaje WHERE IdPuntaje = $idPuntaje";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($connection));
    }
}

mysqli_close($connection);

?>
