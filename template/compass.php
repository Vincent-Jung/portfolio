<!-- 
<div class="box">
    <div class="columns">
        <div class="column">Page: <?= $thispage ?>/ max_pages</div>
        <div>
            <button class="button">Button previous page</button>
        </div>
        <div>
            <button class="button">Button next page</button>
        </div>

    </div>
</div>
 -->


  <nav class="compass">
 
    <div class="compass-center">
      <!-- Affichage du numéro de page actuel -->
      <p id="page-number" class="compass-item">Page 1</p>
    </div>
    <div class="compass-right">
      <!-- Boutons de navigation : Page précédente et suivante -->
      <button id="prev-page" class="compass-item">⬅️<br>Page précédente</button>
      <button id="next-page" class="compass-item">➡️<br>Page suivante</button>
    </div>
  </nav>

<script>
    
              // Liste des URLs des pages avec leur numéro de page correspondant
              const pages = [
                { number: 1, url: 'index.php?loc=home' },
                { number: 2, url: 'index.php?loc=works' },
                { number: 3, url: 'index.php?loc=watches' },
                { number: 4, url: 'index.php?loc=cv' },
                { number: 5, url: 'index.php?loc=contact' },
                { number: 6, url: 'index.php?loc=quests' }
                // Ajoutez autant de pages que nécessaire
            ];

            // Fonction pour obtenir le numéro de page actuel à partir de l'URL
            function getCurrentPageNumber() {
                const urlParams = new URLSearchParams(window.location.search);
                return parse_str(urlParams.get('')) || 1; // Page 1 par défaut si pas de numéro
            }

            // Fonction pour mettre à jour le numéro de page affiché
            function updatePageNumber() {
                const currentPageNumber = getCurrentPageNumber();
                document.getElementById('page-number').innerText = `Page ${currentPageNumber}`;
            }

            // Fonction pour naviguer vers la page suivante ou précédente
            function navigateToPage(offset) {
                const currentPageNumber = getCurrentPageNumber();
                const newPage = pages.find(p => p.number === currentPageNumber + offset);
                
                if (newPage) {
                window.location.href = newPage.url;
                }
            }

            // Gestion des boutons "Page suivante" et "Page précédente"
            document.getElementById('next-page').addEventListener('click', function() {
                navigateToPage(1); // Avance d'une page
            });

            document.getElementById('prev-page').addEventListener('click', function() {
                navigateToPage(-1); // Recule d'une page
            });

            // Mettre à jour le numéro de page au chargement de la page
            document.addEventListener('DOMContentLoaded', function() {
                updatePageNumber();
            });


            document.getElementById('scrollToTop').addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' }); 
            });

              // Fonction pour désactiver les boutons si on est à la première ou dernière page
            function updateNavigationButtons() {
                const currentPageNumber = getCurrentPageNumber();

                // Désactiver le bouton "Page précédente" si on est sur la première page
                document.getElementById('prev-page').disabled = (currentPageNumber === 1);

                // Désactiver le bouton "Page suivante" si on est sur la dernière page
                document.getElementById('next-page').disabled = (currentPageNumber === pages.length);
            }

            // Mettre à jour les boutons au chargement de la page
            document.addEventListener('DOMContentLoaded', function() {
                updateNavigationButtons();
            });

</script>
  