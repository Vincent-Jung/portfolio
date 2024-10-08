<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
                <h5>Chemin :</h5>
                <ul>
                    <li class="is-active"><a href="#" aria-current="page">3. Sommaire veilles</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<?php include_once 'data/watches_table.php'; ?>

<?php
echo "<div class=\"section\">";
echo "<div class=\"box\">";
echo "<h2 class=\"title is-2\">Sommaire de mes veilles</h2>";
if (!empty($watches)) {

    echo "<ul>";
    foreach ($watches as $key => $watch) {
        echo "<div class=\"block\">";
        echo "<li>";
        echo "<h3 class=\"title is-3\">{$watch['title']}</h3>";
        echo "<small>Date : " . date('d-m-Y', strtotime($watch['date'])) . "</small><br>";
        echo "<p>{$watch['description']}</p>";
        echo "<a href=\"index.php?loc=watch&id={$key}\">Voir en détail</a>";
        echo "</li>";
        echo "</div>";
    }
    echo "</ul>";
    echo "</div></div>";
} else {
    echo "<div class=\"section\">";
    echo "<div class=\"box\">";
    echo "<p>Aucune veille disponible.</p>";
    echo "</div></div>";
}
?>
