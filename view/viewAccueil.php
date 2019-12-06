<?php $title = 'Blog de Jean FORTEROCHE'; ?>
<?php ob_start(); ?>
<div id="titre">
    <h2>Billet simple pour l'Alaska</h2>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>