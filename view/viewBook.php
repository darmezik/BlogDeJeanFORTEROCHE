<?php $title = 'Livre de Jean FORTEROCHE'; ?>
<?php ob_start(); ?>
<section class="fontChapitre">
    <h2>Mon livre par chapitre</h2>
    <p>Vous trouverez ici tous les chapitres de mon livre</p>
    <?php 
        while ($data = $posts->fetch())
        {
    ?>
        <article>
            <h3><?= $data['title'] ?></h3>
            <p><?= $data['content'] ?></p>
        </article>
    <?php
        }
        $posts->closeCursor();
    ?>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>