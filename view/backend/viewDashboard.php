<?php $title = 'Tableau de bord'; ?>
<?php ob_start(); ?>
<div class="separat1">
</div>
<section class="fontPage">
    <h2>Mes Chapitres</h2>
    <?php 
        while ($data = $posts->fetch())
        {
    ?>
        <article>
            <h3><?= $data['title'] ?></h3>
            <p><?= $data['content'] ?></p>
            <a href="index.php?action=commentsUp&amp;id=<?= $data['id'] ?>">Voir et gérer les commentaires</a>
        </article>
    <?php
        }
        $posts->closeCursor();
    ?>
    <a href="index.php?action=deconnect" class="submit">Déconnexion</a>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>