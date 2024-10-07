<?php include_once 'data/works_table.php'; ?>

<?php
echo "<h2>Mes travaux</h2>";
if (!empty($works)) {
    echo "<ul>";
    foreach ($works as $key => $work) {
        echo "<li>";
        echo "<h2>{$work['title']}</h2>";
        echo "<p>{$work['description']}</p>";
        echo "<small>Date : " . date('d-m-Y', strtotime($work['date'])) . "</small><br>";
        echo "<a href=\"index.php?loc=work&id={$key}\">Voir en détail</a>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Aucun travail disponible.</p>";
}
?>
