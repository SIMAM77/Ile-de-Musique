<?php
$title = 'Louez les instruments de vos artistes favoris - Ile-de-Musique';
$meta_desc = 'Louez les mêmes instruments que vos artistes préférés ! Ile-de-Musique vous propose de trouver les instruments utilisés par vos artistes préférés et de les louez pour partager leurs expériences';
require_once 'header.php';
?>

<main class="container" id="homepage">
    <section class="home-intro">
        <div class="home-intro-inner">
            <h2>Ile-de-Musique</h2>
            <p>Trouvez les instruments utilisés par vos artistes préférés<br>
                et louez-les dans toute l'Ile-de-France afin de découvrir leurs sonorités</p>
            <div><a href="#genres" class="btn-search">Rechercher un artiste</a></div>
            <div><a href="#process" class="btn-process">Comment ça marche ?</a></div>
        </div>

    </section>
    <section class="genre-list row" id="genres">
        <h3>Rechercher un artiste</h3>
        <ul>
            <li class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-lg-4">
                <div>
                    <img src="img-content/registres/pop.jpg" alt="Pop music"><a href="liste.php?type=Pop"><span>Pop</span></a>
                </div>
            </li>
            <li class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-lg-4">
                <div><img src="img-content/registres/grunge.jpg" alt="Grunge music"><a
                        href="liste.php?type=Grunge"><span>Grunge</span></a></div>
            </li>
            <li class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-lg-4">
                <div><img src="img-content/registres/indie.jpg" alt="Indie music"><a href="liste.php?type=Indie"><span>Indie</span></a>
                </div>
            </li>
            <li class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-lg-4">
                <div><img src="img-content/registres/blues.jpg" alt="Blues music"><a href="liste.php?type=Blues"><span>Blues</span></a>
                </div>
            </li>
            <li class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-lg-4">
                <div><img src="img-content/registres/heavymetal.jpg" alt="Heavy metal music"><a
                        href="liste.php?type=Heavy%20Metal"><span>Heavy Metal</span></a>
                </div>
            </li>
            <li class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-lg-4">
                <div><a href="liste.php"><span>Voir tous les artistes</span></a></div>
            </li>
        </ul>
    </section>
    <section class="how-to row" id="process">
        <h3>Comment ça marche ?</h3>
        <div class="steps container">
            <div class="row">
                <div class="step col-xs-12 col-sm-6 col-sm-offset-1 col-lg-5 col-lg-offset-2">
                    <span>1</span>
                    <p><strong>Trouvez</strong>
                        l'instrument ou le matériel sono que votre groupe de musique ou votre artiste préféré utilise,
                        et ajoutez les à votre panier</p>
                </div>
            </div>
            <div class="row">
                <div class="step col-xs-12 col-sm-6 col-sm-offset-5 col-lg-5">
                    <span>2</span>
                    <p><strong>Louez</strong>
                        en vérifiant votre identité (pièce d'identité valide et justificatif de
                        domicile) et procédez au paiement sécurisé du montant de votre panier ainsi que des dépôts de
                        garantie
                        associés</p>
                    <p>Pour en savoir plus : <a href="mentions-legales.php">Mentions légales</a> et <a href="cgl.php">CGL</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="step col-xs-12 col-sm-6 col-sm-offset-1 col-lg-5 col-lg-offset-2">
                    <span>3</span>
                    <p><strong>Faites-vous livrer</strong>
                        par notre livreur (et expert) salarié. Un chèque de caution vous sera demandé. </p>
                </div>
            </div>
            <div class="row">
                <div class="step col-xs-12 col-sm-6 col-sm-offset-5 col-lg-5">
                    <span>4</span>
                    <p><strong>Rendez votre matériel</strong>
                        à notre livreur suite à un rendez-vous conclu entre vous et Ile-de-Musique. Après examen du
                        matériel,
                        celui-ci vous rendra votre chèque de caution si aucun dégât n'a été constaté</p>
                </div>
            </div>
            <div class="row">
                <div class="step col-xs-12 col-sm-6 col-sm-offset-1 col-lg-5 col-lg-offset-2">
                    <span>5</span>
                    <p><strong>Contribuez</strong>
                        si vous voyez un oubli, une erreur quant aux informations données sur notre site,
                        n'hésitez pas à <a href="contribuer.php">amener votre contribution</a> à la communauté
                        d'Ile-de-Musique</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once "footer.php"; ?>
