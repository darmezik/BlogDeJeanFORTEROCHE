<?php $title = 'Livre de Jean FORTEROCHE'; ?>
<?php ob_start(); ?>
<div class="separat1">
</div>
<section class="fontPage book">
    <h2>Mon livre par chapitre</h2>
    <p>Vous trouverez ici tous les chapitres de mon livre</p>
    <?php 
        while ($data = $posts->fetch())
        {
    ?>
        <article>
            <h3><?= $data['title'] ?></h3>
            <div><?= $data['content'] ?></div>
            <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=comments&amp;id=<?= $data['id'] ?>">Voir ou écrire un commentaire</a>
        </article>
    <?php
        }
        $posts->closeCursor();
    ?>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>