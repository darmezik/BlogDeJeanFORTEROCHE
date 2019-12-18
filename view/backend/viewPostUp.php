<?php $title = 'Modifier Chapitre '; ?>
<?php ob_start(); ?>
<div class="separat1">
</div>
<section class="fontPage">
    <h2>Modifier Chapitre</h2>
    <form action="<?php echo($GLOBALS["app_url"]); ?>index.php?action=modifPost&amp;id=<?= $post['id'] ?>" method="post" class="formTiny">
        <label for="title">Titre</label> : <input type="text" name="title" id="title" value="<?= $post['title'] ?>" required /><br />
        <textarea type="text" name="content" id="editorTiny"><?= $post['content'] ?></textarea><br />
        <input type="submit" class="submit" value="Modifier" />
    </form>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>