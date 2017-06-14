<?php
$title = "Plan du site - Ile-de-Musique";
$meta_desc = 'Plan du site Ile-de-Musique.fr';
require_once 'header.php';
?>

<main class="container plan-du-site">
    <div class="row">
        <div class="path col-sm-8 col-sm-offset-1">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li class="active"><a href="#">Plan du site</a></li>
            </ul>
        </div>
        <div class="plan-site col-sm-10 col-sm-offset-1">
            <h2>Plan du site</h2>
            <ul>
                <li>
                    <a href="index.php" class="link-page">Accueil</a>
                </li>
                <li>
                    <a href="liste.php" class="link-page">Rechercher un artiste</a>
                </li>
                <li>
                    <a href="contribuer.php" class="link-page">Contribuer</a>
                </li>
                <li>
                    <a href="page404.php" class="link-page">Votre panier</a>
                </li>
                <li>
                    <a href="#" class="link-page">Informations légales</a>
                    <ul>
                        <li>
                            <a href="cgl.html" class="link-page-child">Conditions Générales de Location</a>
                        </li>
                        <li>
                            <a href="mentions-legales.php" class="link-page-child">Mentions légales</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</main>

<?php
require_once 'footer.php';
?>













