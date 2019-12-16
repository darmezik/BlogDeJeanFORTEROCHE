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
            <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=commentsUp&amp;id=<?= $data['id'] ?>">Voir et gérer les commentaires</a>
        </article>
    <?php
        }
        $posts->closeCursor();
    ?>
</section>
<div class="separat2">
</div>
<div class="separat1">
</div>
<section class="fontPage">
    <h2>Commentaires signalés</h2>
    <article>
        <?php
            while ($comments = $reportComments->fetch())
            {
        ?>
                <h3>Commentaires du Chapitre <?= $comments['postId'] ?></h3>
                <h4><?= htmlspecialchars($comments['pseudo']) ?>  le <?= $comments['commentDateFr'] ?> :</h4>
                <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=deleteComment&amp;id=<?= $comments['id'] ?>">Supprimer</a>
                <p><?= htmlspecialchars($comments['comment']) ?></p>
        <?php
            }
        ?>
    </article>
    <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=deconnect" class="submit">Déconnexion</a>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>