<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Portefolio</title> 
        <!-- TODO: utiliser $loc pour afficher le titre en dynamique -->
        <!-- TODO: add icon -->
        <link rel="stylesheet" href="assets/style.css" />
    </head>

    <body>
        
    <?php 
        include 'template/header.php';
        include 'template/compass.php';

        $loc = filter_input(INPUT_GET, "loc");
        $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

        echo "(Your input: $loc)";

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

    </body>

</html>
