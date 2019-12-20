<?php $title = 'Blog de Jean FORTEROCHE'; ?>
<?php ob_start(); ?>
<section id="headerHome">
    <img src="public/images/fondEcran.jpg" alt="Photo de montagne" />
    <div>
        <h2>Bienvenue sur mon blog et bonne lecture !</h2>
        <h3>Venez découvrir mon nouveau roman en ligne : Billet simple pour l'Alaska</h3>
        <a href="#fontChapitreHome">Derniers épisodes</a>
        <a href="#fontPresentation">En savoir plus</a>
    </div>
</section>
<div class="separat1">
</div>
<section id="fontPresentation">
    <div class="presentation">
        <p>Je m'appelle Jean Forteroche, auteur de Roman mon métier, ma passion.<br /> 
            Je vis en Bretagne, dont je suis originaire. Vous trouverez sur ce site :<br />
             - <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=book">les chapitres de mon nouveau roman</a><br />
             - <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=contact">une page contact si vous souhaitez me poser des questions complémentaires</a><br />
            Bonne visite !!</p>
        <img src="public/images/photoJean.jpg" alt="Jean Forteroche" />
    </div>
</section>
<div class="separat2">
</div>
<div class="separat1">
</div>
<section class="fontPage" id="fontChapitreHome">
    <article>
        <h3>Le dernier chapitre de mon livre : <?= $post['title'] ?></h3>
        <div><?= $post['content'] ?></div>
    </article>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>