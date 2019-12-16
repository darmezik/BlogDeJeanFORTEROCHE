<?php $title = 'Commentaire du ' .  $post['title']; ?>
<?php ob_start(); ?>
<div class="separat1">
</div>
<section class="fontPage"> 
    <article>
        <h2><?= $post['title'] ?></h2>
        <p><?= $post['content'] ?></p>
    </article>
    <p class="comm">N'hésitez pas à laisser un commentaire</p>
</section>
<section class="fontPage">
    <article>
        <?php
            while ($comment = $comments->fetch())
            {
        ?>
                <h5><?= htmlspecialchars($comment['pseudo']) ?> le <?= $comment['commentDateFr'] ?> :</h5>
                <p><?= htmlspecialchars($comment['comment']) ?></p>
                <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=reportComment&amp;id=<?= $comment['id'] ?>">Signaler</a>
        <?php
            }
        ?>
        <form action="<?php echo($GLOBALS["app_url"]); ?>index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="" required /><br />
            <label for="comment">Commentaire</label> : <textarea type="text" name="comment" id="comment" required></textarea><br />
            <label><input type="checkbox" name="valid" required /> Comfirmer le commentaire à laisser</label><br />
            <input type="submit" class="submit" value="Envoyer" />
        </form>
    </article>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>