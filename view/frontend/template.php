<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" />
        <link rel="icon" href="public/images/favIcone.png" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <header>
            <div id="auteur">
                <img src="public/images/photoJean.jpg" alt="Jean FORTEROCHE" />
                <h3>Auteur et écrivain</h3>
            </div>
            <div id="menu">
                <h1>Blog de Jean FORTEROCHE</h1>
                <nav>
                    <ul>
                        <li><a id="defaultLeft" href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=home">Accueil</a></li>
                        <li><a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=book">Livre</a></li>
                        <li><a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=contact">Contact</a></li>
                        <li><a id="defaultRight" href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=dashboard">Connexion</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="blocPage">
                <?= $content ?>
        </div>
        <footer>
            <nav>
                <ul>
                    <li><a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=home">Accueil</a></li>
                    <li><a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=book">Livre</a></li>
                    <li><a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=contact">Contact</a></li>
                    <li><a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=dashboard">Connexion</a></li>
                </ul>
            </nav>
            <p>© 2019 - Tout droits réservés / Site réalisé par Killian D. dans le cadre d'une formation OpenClassrooms</p>
        </footer>
    </body>
</html>