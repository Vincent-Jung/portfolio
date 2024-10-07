<?php include_once 'data/watches_table.php'; ?>

<?php
echo "<h2>Mes veilles</h2>";
if (!empty($watches)) {
    echo "<ul>";
    foreach ($watches as $key => $watch) {
        echo "<li>";
        echo "<h2>{$watch['title']}</h2>";
        echo "<p>{$watch['description']}</p>";
        echo "<small>Date : " . date('d-m-Y', strtotime($watch['date'])) . "</small><br>";
        echo "<a href=\"index.php?loc=watch&id={$key}\">Voir en détail</a>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Aucune veille disponible.</p>";
}
?>
