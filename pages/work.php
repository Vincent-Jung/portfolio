<?php include_once 'data/works_table.php'; ?>

<?php 
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, [
    'options' => [
        'min_range' => 1, // Assure que l'ID est un entier positif
    ]
]);

// Vérification si l'ID est valide et correspond à une réalisation existante
if ($id && isset($works[$id])) {
    // Récupération des détails de la réalisation correspondant à l'ID
    $work = $works[$id];

    // Suppression de la ligne var_dump après vérification
    // var_dump($works); 

    // Affichage des détails de la réalisation
    echo "<h1>{$work['title']}</h1>";
    echo "<p>{$work['description']}</p>";
    echo "<small>Date de réalisation : " . date('d-m-Y', strtotime($work['date'])) . "</small>";
} else {
    // Si l'ID n'est pas valide ou n'existe pas dans le tableau, afficher un message d'erreur
    echo "<h1>Erreur</h1>";
    echo "<p>Le travail demandé n'existe pas.</p>";
}

// Liens de navigation vers les autres réalisations
echo '<nav>';
foreach ($works as $key => $work) {
    echo "<a href=\"index.php?loc=work&id={$key}\">{$work['title']}</a><br>";
}
echo '</nav>';
?>