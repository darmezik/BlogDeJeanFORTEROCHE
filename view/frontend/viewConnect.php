<?php $title = 'Accès administration'; ?>
<?php ob_start(); ?>
<div class="separat1">
</div>
<section class="fontPage">
    <form action="<?php echo($GLOBALS["app_url"]); ?>index.php?action=testConnect" method="post" id="formConnect">
        <label for="pseudo">Pseudo</label><input type="text" name="pseudo" id="pseudo" required /><br /><br />
        <label for="pass">Mot de passe</label><input type="password" name="pass" id="pass" required /><br /><br />
        <input type="submit" class="submit" value="Envoyer" />
    </form>
</section>
<div class="separat2">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>