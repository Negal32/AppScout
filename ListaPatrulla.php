<?php
require 'Patrulla.php'; 
// Mostrar lista de patrullas
echo "<h2>Lista de Patrullas</h2>";
echo "<table>";
echo "<tr><th>IdPatrulla</th><th>Nombre</th></tr>";

foreach ($patrullas as $patrulla) {
    echo "<tr>";
    echo "<td>" . $patrulla['IdPatrulla'] . "</td>";
    echo "<td>" . $patrulla['Nombre'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
