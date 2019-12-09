<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="public/bootstrap/bootstrap.min.css" rel="stylesheet" />
        <link href="public/css/style.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <div id="auteur">
                <img src="public/images/photoJean.jpg" alt="Jean FORTEROCHE" />
                <h4>Auteur et écrivain</h4>
            </div>
            <div>
                <h1>Blog de Jean FORTEROCHE</h1>
                <nav>
                    <ul>
                        <li><a id="defaultLeft" href="index.php?action=home">Accueil</a></li>
                        <li><a href="index.php?action=book">Livre</a></li>
                        <li><a href="index.php?action=contact">Contact</a></li>
                        <li><a id="defaultRight" href="#">Connexion</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="blocPage">
                <?= $content ?>
        </div>
        <footer>
            <div id="sociaux">
                <a href="https://www.facebook.com/" target="_blank"><img id="facebook" src="public/images/facebook.png" /></a>
                <a href="https://twitter.com/" target="_blank"><img id="twitter" src="public/images/twitter.png" /></a>
                <a href="https://www.instagram.com/" target="_blank"><img id="instagram" src="public/images/instagram.png" /></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php?action=home">Accueil</a></li>
                    <li><a href="index.php?action=book">Livre</a></li>
                    <li><a href="index.php?action=contact">Contact</a></li>
                    <li><a href="#">Connexion</a></li>
                </ul>
            </nav>
            <p>© 2019 - Tout droits réservés / Site réalisé par Killian D.</p>
        </footer>
    </body>
</html>