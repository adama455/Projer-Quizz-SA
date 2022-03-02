<?php
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>
    <ul>
        <li><a class="active" href="<?=WEB_ROOT."?controllers=users&action=accueil"?>">Accueil</a></li>
        <?php if(is_admin()): ?>   
            <li><a href="<?=WEB_ROOT."?controllers=users&action=liste.joueur"?>">Liste des joueurs</a></li>
        <?php endif ?>
        <li><a href="<?=WEB_ROOT."?controller=securites&action=deconnexion"?>">Déconnexion</a></li>
    </ul>

    <?php
        echo $content_for_views;
    ?>

<?php
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>