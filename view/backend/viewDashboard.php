<?php $title = 'Tableau de bord'; ?>
<?php ob_start(); ?>
<div class="separat1">
</div>
<section class="fontPage">
    <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=deconnect" class="submit deco">Déconnexion</a>
    <h2>Publier un nouveau Chapitre</h2>
    <form action="<?php echo($GLOBALS["app_url"]); ?>index.php?action=addPost" method="post" class="formTiny">
        <label for="title">Titre</label> : <input type="text" name="title" id="title" value="Chapitre " required /><br /> 
        <textarea type="text" name="content" id="editorTiny"></textarea><br />
        <input type="submit" class="submit" value="Publier" />
    </fom>
</section>
<div class="separat2">
</div>
<div class="separat1">
</div>
<section class="fontPage postModif">
    <h2>Mes Chapitres</h2>
    <?php 
        while ($data = $posts->fetch())
        {
    ?>
        <article>
            <h3><?= $data['title'] ?></h3>
            <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=postUp&amp;id=<?= $data['id'] ?>">Modifier</a>
            <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=deletePost&amp;id=<?= $data['id'] ?>">Supprimer</a>
            <div class="articleContent"><?= $data['content'] ?></div>
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
<section class="fontPage commentsSignal">
    <h2>Commentaires signalés</h2>
    <article>
        <?php
            while ($comments = $reportComments->fetch())
            {
        ?>
                <h3>Commentaires <?= $comments['postTitle'] ?></h3>
                <h4><?= htmlspecialchars($comments['pseudo']) ?>  le <?= $comments['commentDateFr'] ?> :</h4>
                <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=delReport&amp;id=<?= $comments['id'] ?>">Supprimer signalement</a>
                <a href="<?php echo($GLOBALS["app_url"]); ?>index.php?action=delCommentReport&amp;id=<?= $comments['id'] ?>">Supprimer</a>
                <div class="articleContent"><?= htmlspecialchars($comments['comment']) ?></div>
        <?php
            }
        ?>
    </article>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>