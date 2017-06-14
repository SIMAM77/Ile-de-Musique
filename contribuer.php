<?php
$title = "Envoyer une contribution - Ile-de-Musique";
$meta_desc = "Une erreur concernant les informations du site ? Une proposition à faire ? Contribuez à la communauté Ile-de-Musique en proposant un artiste et ses instruments.";
require_once 'header.php';
?>

<main class="container" id="contribution">
    <div class="row">
        <div class="path col-sm-8">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li class="active"><a href="#">Contribuer</a></li>
            </ul>
        </div>
        <div class="intro col-sm-8 col-lg-7">
            <h2>Contributions</h2>
            <p class="intro-title">Comment contribuer ?</p>
            <p>Si vous souhaitez participer à l'agrandissement de notre communauté et nous permettre de proposer plus de
                matériel à louer, rien de plus simple !</p>
            <p>Remplissez le formulaire ci-dessous et votre contribution sera soumise à notre équipe qui se chargera de
                vérifier les informations fournies.</p>
            <p>Une fois cette dernière étape remplie, nous chercherons un
                partenariat afin de mettre le matériel en location sur Ile-de-Musique.</p>
        </div>
        <div class="col-sm-8 col-lg-7">
            <form id="formulaire" action="add.php" method="post" name="setBand">
                <div>
                    <label for="band">Nom du groupe<span class="required">*</span></label>
                    <input type="text" id="bandname" name="band" placeholder="ex. Nirvana" required>
                </div>
                <div>
                    <label for="type">Genre<span class="required">*</span></label>
                    <select id="genre" name="type" required>
                        <option value="pop">Pop</option>
                        <option value="heavymetal">Heavy Metal</option>
                        <option value="blues">Blues</option>
                        <option value="grunge">Grunge</option>
                        <option value="indie">Indie</option>
                    </select>
                </div>
                <div>
                    <label for="guitar1">Guitare<span class="required">*</span></label>
                    <input type="text" id="guitar" name="guitar1" required>
                </div>
                <div>
                    <label for="bass">Basse</label>
                    <input type="text" id="bass" name="bass">
                </div>
                <div>
                    <label for="drum">Batterie</label>
                    <input type="text" id="drums" name="drum">
                </div>
                <div>
                    <label for="amp">Ampli</label>
                    <input type="text" id="amp" name="amp">
                </div>
                <div>
                    <label for="commentaire">Commentaires</label>
                    <textarea id="comments" name="commentaire">En effet, une mélodie ne se limite pas aux instruments ci-dessus, n'hésitez à rajouter d'autres instruments ici</textarea>
                </div>
                <input type="submit" value="Envoyer ma contribution">
            </form>
        </div>
    </div>
</main>

<?php
require_once 'footer.php';

