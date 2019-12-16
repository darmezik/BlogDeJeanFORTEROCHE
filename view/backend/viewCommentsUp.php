<?php $title = 'Gérer les commentaires'; ?>
<?php ob_start(); ?>
<div class="separat1">
</div>
<section class="fontPage" id="commentUp">
    <article>
        <h2>Commentaires du <?= $post['title'] ?></h2>
        <?php
            while ($comment = $comments->fetch())
            {
        ?>
                <h3><?= htmlspecialchars($comment['pseudo']) ?>  le <?= $comment['commentDateFr'] ?> :</h3>
                <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=deleteComment&amp;id=<?= $comment['id'] ?>">Supprimer</a>
                <p><?= htmlspecialchars($comment['comment']) ?></p>
        <?php
            }
        ?>
    </article>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>