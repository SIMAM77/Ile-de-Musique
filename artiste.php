<?php
require_once('connect.php');


if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location: recherche.php');
}

$sql = "SELECT
`id`,
`type`,
`band`,
`guitar1`,
`bass`,
`drum`,
`amp`,
`commentaire`,
`img_band`,
`img_guitar1`,
`img_bass`,
`img_drum`,
`img_amp`


FROM 
  `content`
WHERE 
id = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) {
    header('Location: groupes2.php');
}
?>

<?php
$title = $row['band'] . ' - Ile-de-Musique';
$meta_desc = "Retrouvez l'ensemble des instruments utilisé par " . $row['band'] . " sur Ile-de-Musique";
require_once "header.php"; ?>

    <main class="container" id="artiste">
        <div class="row">
            <div class="path col-xs-12">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="liste.php">Rechercher un artiste</a></li>
                    <li class="active"><a href="#"><?= $row['band']; ?></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <section class="presentation clearfix">
                <figure class="col-xs-12 col-sm-6"><img src="./<?= $row['img_band']; ?>" alt="<?= $row['band']; ?>">
                </figure>
                <div class="band-infos col-xs-12 col-sm-6">
                    <h2><?= $row['band']; ?></h2>
                    <p class="description"><?= $row['commentaire']; ?></p>

                </div>
            </section>
        </div>
        <div class="row">
            <section class="equipment col-xs-12">
                <h3>Instruments utilisés par <?= $row['band']; ?></h3>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="instrument">
                        <figure><img src="./<?= $row['img_guitar1']; ?>" alt="<?= $row['guitar1']; ?>"></figure>
                        <div class="instrument-infos">
                            <p class="type">Guitare </p>
                            <p class="model"><?= $row['guitar1']; ?></p>
                            <p class="price">25€/j</p>
                            <button class="rent-cta">Louer</button>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="instrument">
                        <figure><img src="./<?= $row['img_bass']; ?>" alt="<?= $row['bass']; ?>"></figure>
                        <div class="instrument-infos">
                            <p class="type">Bass </p>
                            <p class="model"><?= $row['bass']; ?></p>
                            <p class="price">30€/j</p>
                            <button class="rent-cta">Louer</button>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="instrument">
                        <figure><img src="./<?= $row['img_drum']; ?>" alt="<?= $row['drum']; ?>"></figure>
                        <div class="instrument-infos">
                            <p class="type">Batterie</p>
                            <p class="model"><?= $row['drum']; ?></p>
                            <p class="price">30€/j</p>
                            <button class="rent-cta">Louer</button>
                        </div>
                    </article>
                </div>
                </section>
            </div>
        <div class="row">
            <section class="equipment col-xs-12">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <article class="instrument">
                <figure><img src="./<?= $row['img_amp']; ?>" alt="<?= $row['amp']; ?>"></figure>
                <div class="instrument-infos">
                    <p class="type">Amplificateur </p>
                    <p class="model"><?= $row['amp']; ?></p>
                    <p class="price">30€/j</p>
                    <button class="rent-cta">Louer</button>
                </div>
            </article>
        </div>
        </section>
            </div>
</div>
    </main>

<?php
require_once "footer.php";