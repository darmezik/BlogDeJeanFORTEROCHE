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
                <img src="public/images/photoJean.jpg" alt="Photo de Jean FORTEROCHE" />
                <h4>Auteur et écrivain</h4>
            </div>
            <div>
                <div>
                    <h1>Blog de Jean FORTEROCHE</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php?action=home">Accueil</a></li>
                        <li><a href="index.php?action=Roman">Roman</a></li>
                        <li><a href="index.php?action=bibliographie">Bibliographie</a></li>
                        <li><a href="index.php?action=contact">Contact</a></li>
                        <li><a href="#">Connexion</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="blocPage">
            <section class="container col-md-10 col-md-offset-1">
                <?= $content ?>
            </section>
            <footer>
                <div id="sociaux">
                    <a href="https://www.facebook.com/" target="_blank"><img id="facebook" src="public/images/facebook.png" /></a>
                    <a href="https://twitter.com/" target="_blank"><img id="twitter" src="public/images/twitter.png" /></a>
                    <a href="https://www.instagram.com/" target="_blank"><img id="instagram" src="public/images/instagram.png" /></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php?action=home">Accueil</a></li>
                        <li><a href="index.php?action=Roman">Roman</a></li>
                        <li><a href="index.php?action=bibliographie">Bibliographie</a></li>
                        <li><a href="index.php?action=contact">Contact</a></li>
                        <li><a href="#">Connexion</a></li>
                    </ul>
                </nav>
                <p>© 2019 - Tout droits réservés / Site réalisé par Killian D.</p>
            </footer>
        </div>
    </body>
</html>