<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" />
        <link rel="icon" href="public/images/favIcone.png" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://cdn.tiny.cloud/1/ql6jp735l1g21k7kxholonxxghe37aepv7r5r9vtqgh86xyl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: '#editorTiny',

                forced_root_block : false,
                force_br_newlines : true,
                force_p_newlines : false
            });
        </script>
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