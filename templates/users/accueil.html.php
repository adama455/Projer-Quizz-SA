<?php
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>

    <!-- 
        ###########################################################
        ************************* MENU *************************** 
        ############################################################
    -->
    <!-- <ul>
        <li><a class="active" href="<?=WEB_ROOT."?controllers=users&action=accueil"?>">Accueil</a></li>
        <?php if(is_admin()): ?>   
            <li><a href="<?=WEB_ROOT."?controllers=users&action=liste.joueur"?>">Liste des joueurs</a></li>
        <?php endif ?>
        <li><a href="<?=WEB_ROOT."?controller=securites&action=deconnexion"?>">Déconnexion</a></li>
    </ul> -->

    <!-- Tableau de bord -->

    <div class="container">
        <div class="haut">
            <h1>CREER ET PARAMETRER VOS QUIZ</h1>
            <button type"button"><a href="<?=WEB_ROOT."?controller=securites&action=deconnexion"?>"> Déconnexion</a></button>
        </div>
        <div class="contenu">
            <!-- <div class="tableau_de_bord"> -->
                <!-- <div class="tete">
                
                </div> -->
                <nav>
                    <div class="avatar">
                        <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."avatar.png"?>" alt="">
                        <p>Adama</p>
                    </div>

                    <div class="page" id="page1">
                        <p>Liste Questions</p>
                        <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-liste.png"?>" alt="">
                    </div>
                    <div class="page" id="page2">
                        <p>Créer Admin</p>
                        <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>" alt="">
                    </div>
                    <div class="page" id="page3">
                        <?php if(is_admin()): ?>   
                            <p>Liste joueurs</p>
                            <a href="<?=WEB_ROOT."?controllers=users&action=liste.joueur"?>">
                                <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-liste.png"?>" alt="">
                            </a>
                        <?php endif ?>
                    </div>
                    <div class="page" id="page4">
                        <p>Créer Questions</p>
                        <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>" alt="">
                    </div>
            </nav>

            <div class="page-variante">
                <?php
                    echo $content_for_views;
                ?>
            </div>
        </div>
    </div>


<?php
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>