<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
        <link rel="stylesheet" href="assets/styles.css" />
        <title>Portefolio</title> 
        <!-- TODO: utiliser $loc pour afficher le titre en dynamique -->
        <!-- TODO: add icon -->
    </head>

    <body>
        
    <?php 
        $loc = filter_input(INPUT_GET, "loc");
        $GLOBALS['loc'] = $loc;
        $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
        // echo "(Your input: $loc)";

        include 'template/header.php';
        include 'template/compass.php';

        // TODO: create a Router class
        switch ($loc) {
            case 'home':
                include 'pages/home.php';
                break;
            case 'works':
                include 'pages/works_summary.php';
                break;
            case 'work':
                if ($id) {
                    include 'pages/work.php';
                } else {
                    include 'pages/404.php';
                }
                break;
            case 'watches':
                include 'pages/watches_summary.php';
                break;
            case 'watch':
                if ($id) {
                    include 'pages/watch.php';
                } else {
                    include 'pages/404.php';
                }
                break;
            case 'cv':
                include 'pages/cv.php';
                break;
            case 'contact':
                include 'pages/contact.php';
                break;
            case 'quests':
                include 'pages/quests.php';
                break;
            default:
                include 'pages/home.php';
                break;
        }
        include 'template/footer.php';
        ?>

        <button id="toggle-navbar" class="fixed-button">📍</button>

        <div id="vertical-navbar" class="vertical-navbar">
        <a class="navbar-item" href="index.php?loc=home">🏠<br>Page d'accueil</a>
        <button id="scrollToTop" class="navbar-item">⬆️<br>Haut de page</button>
        <button class="navbar-item" onclick="history.back()">⬅️<br>Page consultée précédente</button>
        <button class="navbar-item" onclick="history.forward()">➡️<br>Page consultée suivante</button>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const navbar = document.getElementById('vertical-navbar');
                const toggleButton = document.getElementById('toggle-navbar');

                toggleButton.addEventListener('click', function (event) {
                    event.stopPropagation(); 
                    navbar.classList.toggle('open');
                });

                document.addEventListener('click', function (event) {
                if (!navbar.contains(event.target) && !toggleButton.contains(event.target)) {
                    navbar.classList.remove('open'); 
                }
            });
        });

            window.onscroll = function() {
                const scrollToTopButton = document.getElementById('scrollToTop');
                if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                scrollToTopButton.style.display = "block";
                } else {
                scrollToTopButton.style.display = "none";
                }
            };

            document.getElementById('scrollToTop').addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' }); 
            });
            </script>


    </body>
</html>

