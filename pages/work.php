<?php 
include_once 'data/works_table.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, [
    'options' => [
        'min_range' => 1,
    ]
]);

if ($id && isset($works[$id])) {
    $work = $works[$id]; ?>
            <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
                <h5>Chemin :</h5>
                <ul>
                    <li><a href="index.php?loc=works">Travaux</a></li>
                    <li class="is-active"><a href="#" aria-current="page"><?= "{$work['title']}"; ?></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<?php 
    echo "<div class=\"section\">";
    echo "<div class=\"box\">";
    echo "<h2 class=\"title is-2\">{$work['title']}</h2>";
    echo "<small>Date de réalisation : " . date('d-m-Y', strtotime($work['date'])) . "</small>";
    echo "<p>{$work['description']}</p>";
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
foreach ($works as $key => $work) {
    echo "<a href=\"index.php?loc=work&id={$key}\">{$work['title']}</a><br>";
}
echo '</nav>';
echo "</div></div>";
?>