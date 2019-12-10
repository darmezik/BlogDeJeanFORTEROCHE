<?php $title = $post['title']; ?>
<?php ob_start(); ?>
<?php
    while($data = $post->fetch())
    {
?>
    <article>
        <h4><?= $data['title'] ?></h4>
        <p><?= $data['content'] ?></p>
    </article>
<?php
    }
    $post->closeCursor();
?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>