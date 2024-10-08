<?php include_once 'data/watches_table.php'; ?>

<?php 
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, [
    'options' => [
        'min_range' => 1, 
    ]
]);

if ($id && isset($watches[$id])) {
    $watch = $watches[$id]; ?>
            <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
                <h5>Chemin :</h5>
                <ul>
                    <li><a href="index.php?loc=watches">Veilles</a></li>
                    <li class="is-active"><a href="#" aria-current="page"><?= "{$watch['title']}"; ?></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<?php 
    echo "<div class=\"section\">";
    echo "<div class=\"box\">";
    echo "<h2 class=\"title is-2\">{$watch['title']}</h2>";
    echo "<small>Date de réalisation : " . date('d-m-Y', strtotime($watch['date'])) . "</small>";
    echo "<p>{$watch['description']}</p>";
    echo "</div></div>";
} else {
    echo "<div class=\"section\">";
    echo "<div class=\"box\">";
    echo "<h2 class=\"title is-2\">Erreur</h2>";
    echo "<p>Le travail demandé n'existe pas.</p>";
    echo "</div></div>";
}
echo "<div class=\"section\">";
echo "<div class=\"box\">";
echo '<nav>';
foreach ($watches as $key => $watch) {
    echo "<a href=\"index.php?loc=watch&id={$key}\">{$watch['title']}</a><br>";
}
echo '</nav>';
echo "</div></div>";
?>