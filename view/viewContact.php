<?php $title = 'Contactez Jean FORTEROCHE'; ?>
<?php ob_start(); ?>
<section id="contact">
    <div id="formContact">
        <h2>Contactez-moi</h2>
        <form method="post" action="">
            <p>
                <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="Votre nom">
            </p>
            <p>
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Votre adresse e-mail">
            </p>
            <p>
                <label for="subject"></label>
                <input type="text" name="subject" id="subject" placeholder="Objet">
            </p>
            <p>
                <textarea name="message" id="message" rows="10" placeholder="Votre message"></textarea>
            </p>
            <p>
                <input class="submit" type="submit" value="Envoyer">
            </p>
        </form>
    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>