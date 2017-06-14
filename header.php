<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo $meta_desc; ?>" />
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/screen.min.css">
</head>

<body>

        <header class="container">
            <div class="row">
                <div class="logo col-xs-6 col-sm-4">
                    <h1><img src="img-layout/logo.png" alt=""></h1> </div>
                <div class="burger-menu hidden-md hidden-lg">
                    <div class="burger-icon">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <p>Menu</p>
                    </div>
                </div>
                <nav class="burger-menu-inner hidden-md hidden-lg">
                    <ul><li>Menu</li>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="liste.php">Rechercher un artiste</a></li>
                        <li><a href="contribuer.php">Contribuer</a></li>
                        <li><a href="cart.html"><i class="icomoon icon-bag"></i>Mon Panier</a></li>
                    </ul>
                </nav>
                <nav class="hidden-xs hidden-sm col-sm-8 main-nav">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="liste.php">Rechercher un artiste</a></li>
                        <li><a href="contribuer.php">Contribuer</a></li>
                        <li><a href="cart.html"><i class="icomoon icon-bag"></i></a></li>
                    </ul>
                </nav>
            </div>
        </header>
