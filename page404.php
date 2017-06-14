<?php
$title = "Oops, page inconnue ! - Ile-de-Musique";
$meta_desc = 'La page que vous recherchez est inconnue, n\'existe pas ou plus';
require_once "header.php";
?>

    <main class="container" id="page404">
        <div class="row">
            <div class="path col-sm-8 col-sm-offset-1">
                <ul>
                    <li><a href="index.php">Retour à l'accueil</a></li>
                </ul>
            </div>
            <div class="content-404 col-sm-10 col-sm-offset-1">
                <h2>Page non trouvée</h2>
                <p>Oops, il semblerait que la page que vous recherchez n'existe pas. Il est possible que l'URL de la page soit erroné.</p>
            </div>
        </div>
    </main>

<?php
require_once 'footer.php';