<?php
require_once 'conn.php';

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

mysqli_close($connection);

?>
