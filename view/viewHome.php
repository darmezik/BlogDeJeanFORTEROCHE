<?php $title = 'Blog de Jean FORTEROCHE'; ?>
<?php ob_start(); ?>
<section id="headerHome">
    <img src="public/images/fondEcran.jpg" alt="Fond d'écran de montagnes" />
    <div>
        <h2>Bienvenue sur mon blog et bonne lecture !</h2>
        <h3>Venez découvrir mon nouveau roman en ligne : Billet simple pour l'Alaska</h3>
        <a href="#">Derniers épsiodes</a>
        <a href="#fontPresentation">En savoir plus</a>
    </div>
</section>
<section id="fontPresentation">
    <div class="presentation">
        <p>Je m'appelle Jean Forteroche, auteur de Roman mon métier, ma passion.<br /> 
            Je vis en Bretagne, dont je suis originaire. Vous trouverez sur ce site :<br />
             - <a href="index.php?action=book">les chapitres de mon nouveau roman</a><br />
             - <a href="index.php?action=contact">une page contact si vous souhaitez me poser des questions complémentaires</a><br />
            Bonne visite !!</p>
        <img src="public/images/photoJean.jpg" alt="Jean Forteroche" />
    </div>
</section>
<section class="fontChapitre">
    <?php
        while($data = $post->fetch())
        {
    ?>
        <h4>Le dernier chapitre de mon livre : <?= $data['title'] ?></h4>
        <article>
            <p><?= $data['content'] ?></p>
        </article>
    <?php
        }
        $post->closeCursor();
    ?>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>