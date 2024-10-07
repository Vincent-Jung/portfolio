<?php include_once 'data/watches_table.php'; ?>

<?php 
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, [
    'options' => [
        'min_range' => 1, // Assure que l'ID est un entier positif
    ]
]);

// Vérification si l'ID est valide et correspond à une réalisation existante
if ($id && isset($watches[$id])) {
    // Récupération des détails de la réalisation correspondant à l'ID
    $watch = $watches[$id];

    // Suppression de la ligne var_dump après vérification
    // var_dump($watches); 

    // Affichage des détails de la réalisation
    echo "<h1>{$watch['title']}</h1>";
    echo "<p>{$watch['description']}</p>";
    echo "<small>Date de réalisation : " . date('d-m-Y', strtotime($watch['date'])) . "</small>";
} else {
    // Si l'ID n'est pas valide ou n'existe pas dans le tableau, afficher un message d'erreur
    echo "<h1>Erreur</h1>";
    echo "<p>Le travail demandé n'existe pas.</p>";
}

// Liens de navigation vers les autres réalisations
echo '<nav>';
foreach ($watches as $key => $watch) {
    echo "<a href=\"index.php?loc=watch&id={$key}\">{$watch['title']}</a><br>";
}
echo '</nav>';
?>