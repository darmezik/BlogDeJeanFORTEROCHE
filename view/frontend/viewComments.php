<?php $title = 'Commentaire du ' .  $post['title']; ?>
<?php ob_start(); ?>
<div class="separat1">
</div>
<section class="fontPage"> 
    <article>
        <h2><?= $post['title'] ?></h2>
        <div class="articleContent"><?= $post['content'] ?></div>
        <p class="comm">N'hésitez pas à laisser un commentaire</p>
    </article>
</section>
<div class="separat2">
</div>
<div class="separat1">
</div>
<section class="fontPage comments">
    <h3>Commentaires</h3>
        <?php
            while ($comment = $comments->fetch())
            {
        ?>
            <article>
                <h4><?= htmlspecialchars($comment['pseudo']) ?> le <?= $comment['commentDateFr'] ?> :</h4>
                <div class="articleContent comment"><?= htmlspecialchars($comment['comment']) ?></div>
                <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=reportComment&amp;id=<?= $comment['id'] ?>">Signaler</a>
            </article>
        <?php
            }
        ?>
    <article>
        <form action="<?php echo($GLOBALS["app_url"]); ?>index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <label for="pseudo">Pseudo</label> :<br />
            <input type="text" name="pseudo" id="pseudo" value="" required /><br />
            <label for="comment">Commentaire</label> :<br />
            <textarea type="text" name="comment" id="comment" required></textarea><br />
            <label><input type="checkbox" name="valid" required /> Comfirmer le commentaire à laisser</label><br />
            <input type="submit" class="submit" value="Envoyer" />
        </form>
    </article>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>