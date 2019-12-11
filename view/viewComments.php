<?php $title = 'Commentaire du ' .  $post['title']; ?>
<?php ob_start(); ?>
<div class="separat1">
</div>
<section class="fontChapitre"> 
    <article>
        <h2><?= $post['title'] ?></h2>
        <p><?= $post['content'] ?></p>
    </article>
    <p class="comm">N'hésitez pas à laisser un commentaire</p>
</section>
<section class="fontChapitre">
    <article>
        <?php
            while ($comment = $comments->fetch())
            {
        ?>
                <h5><?= htmlspecialchars($comment['pseudo']) ?> le <?= $comment['commentDateFr'] ?> :</h5>
                <p><?= htmlspecialchars($comment['comment']) ?></p>
        <?php
            }
        ?>
        <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="" /><br />
            <label for="comment">Commentaire</label> : <input type="text" name="comment" id="comment" /><br />
            <label><input type="checkbox" name="valid" required /> Comfirmer le commentaire à laisser</label><br />
            <input type="submit" class="submit" value="Envoyer" />
        </form>
    </article>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>