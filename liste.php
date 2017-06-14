
<?php
require_once "connect.php";
if(isset($_GET['type']))
{
    $type = htmlspecialchars($_GET['type']);

    $sql = "SELECT
    `id`, 
    `type`, 
    `band`, 
    `guitar1`,
    `bass`, 
    `drum`, 
    `visible`, 
    `commentaire`,
    `img_band`
    FROM 
    `content`
    WHERE 
    `visible` = 1
    AND
    `type` = :type
    ;";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':type', $type, PDO::PARAM_STR);
    $stmt->execute();

}
else if(isset($_POST['search']))
{
    $post = htmlspecialchars($_POST['search']);
    $sql = "SELECT
        `type`, 
        `id`, 
        `band`, 
        `guitar1`, 
        
        `bass`, 
        `drum`, 
        `visible`, 
        `commentaire`,
        `img_band`
        FROM 
        `content`
        WHERE 
        visible = 1
        AND (
            `type` LIKE :search
            OR `band` LIKE :search
            OR `guitar1` LIKE :search        
            
            OR `bass` LIKE :search  
            OR `drum` LIKE :search  
            OR `visible` LIKE :search     
            OR `commentaire` LIKE :search
            OR `img_band` LIKE :search                     
            )
        ";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':search', '%'.$post.'%', PDO::PARAM_STR);
    $stmt->execute();

}
else
{
    $sql = "SELECT 
    `id`,
    `type`, 
    `band`, 
    `guitar1`, 

    `bass`, 
    `drum`, 
    `visible`, 
    `commentaire`,
    `img_band`
    FROM 
    `content` 
    WHERE 
    `visible` = :visible 
    ;";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':visible', 1);
    $stmt->execute();
}

$title = "Rechercher un artiste - Ile-de-Musique";
$meta_desc = 'Recherchez un artiste et le matériel qu\'il utilise sur Ile-de-Musique';
require_once "header.php";
?>


<main class="container" id="liste-artistes">
    <div class="row banner-search">
        <section class="container-search col-xs-12">
            <div class="search-bar col-sm-8">
                <form action="liste.php" method="post">
                    <label for="search">Rechercher un artiste</label>
                    <input type="search" id="search" name="search">
                    <input type="submit" value="GO">
                </form>
            </div>
        </section>
    </div>
    <div class="row">
        <div class="path col-sm-10">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li class="active"><a href="#">Rechercher un artiste</a></li>
            </ul>
        </div>
        <section class="artists col-sm-10">
            <h2>Liste des artistes / groupes</h2>
            <div class="alphabet"></div>

            <?php
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                <article class="band row">
                    <figure class="col-sm-6 col-md-4">
                        <img src="<?= $row['img_band']; ?>" alt="<?= $row['band']; ?>">
                    </figure>
                    <div class="description col-md-8">
                        <h3><?=$row['band'];?></h3>
                        <p><?=$row['commentaire'];?>.</p>
                        <div class="read-more"><a href="artiste.php?id=<?=$row['id'];?>">Voir ce qu'ils utilisent</a></div>
                    </div>
                </article>
            <?php endwhile;?>
        </section>
    </div>
</main>

<?php
require_once 'footer.php';
