            <nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">        
                <h5>Chemin :</h5>
                <ul>
                    <li class="is-active"><a href="#" aria-current="page">2. Sommaire travaux</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<?php include_once 'data/works_table.php'; ?>

<?php
echo "<div class=\"section\">";
echo "<div class=\"box\">";
echo "<h2 class=\"title is-2\">Sommaire de mes travaux</h2>";
if (!empty($works)) {
    
    echo "<ul>";
    foreach ($works as $key => $work) {
        echo "<div class=\"block\">";
        echo "<li>";
        echo "<h3 class=\"title is-3\">{$work['title']}</h3>";
        // TODO: insert main subtitle. Add data in array
        echo "<small>Date : " . date('d-m-Y', strtotime($work['date'])) . "</small><br>";
        echo "<a href=\"index.php?loc=work&id={$key}\">Voir en détail</a>";
        echo "</li>";
        echo "</div>";
    }
    echo "</ul>";
    echo "</div></div>";
} else {
    echo "<div class=\"section\">";
    echo "<div class=\"box\">";
    echo "<p>Aucun travail disponible.</p>";
    echo "</div></div>";
}
?>
