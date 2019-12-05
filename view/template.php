<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="../public/css/style.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <div>
                <img src="../public/images/photoJean.jpg" alt="Photo de Jean FORTEROCHE" />
            </div>
            <div>
                <h1>Blog de Jean FORTEROCHE</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Livre</a></li>
                    <li><a href="#">Bibliographie</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Connexion</a></li>
                </ul>
            </nav>
        </header>
        <?= $content ?>
    </body>
</html>