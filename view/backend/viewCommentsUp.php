<?php $title = 'Gérer les commentaires'; ?>
<?php ob_start(); ?>
<div class="separat1">
</div>
<section class="fontPage commentsUp">
    <article>
        <h2>Commentaires du <?= $post['title'] ?></h2>
        <?php
            while ($comment = $comments->fetch())
            {
        ?>
                <h3><?= htmlspecialchars($comment['pseudo']) ?>  le <?= $comment['commentDateFr'] ?> :</h3>
                <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=deleteComment&amp;id=<?= $comment['id'] ?>&amp;postId=<?= $post['id'] ?>">Supprimer</a>
                <div class="articleContent"><?= htmlspecialchars($comment['comment']) ?></div>
        <?php
            }
        ?>
    </article>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>