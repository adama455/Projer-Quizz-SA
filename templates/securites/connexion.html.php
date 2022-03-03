<?php
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
    if(isset($_SESSION[KEY_ERROR])){
        $error = $_SESSION[KEY_ERROR];
        unset($_SESSION[KEY_ERROR]);
    }
?>
    <!-- <header>
        <img class="log" src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."logo-QuizzSA.png"?>" />
        <h1> Le plaisir de jouer</h1>
    </header> -->
    <div id="container"> 
        <div class="entete">
            <h3>Login Form</h3>
            <span>x</span>   
        </div>
        <form class="form-login" action="<?=WEB_ROOT ?>" method="POST" onsubmit="return validation()"> 
            <input type="hidden"   name="controller" value="securite">
            <input type="hidden"   name="action" value="connexion">
            <?php if(isset($error['connexion'])):?>
                <span style="color:red">
                    <?= $error['connexion'];?>
                </span>
            <?php endif?>
            <div class="input-icone form-control">
                <input autocomplete="off" type="text" placeholder="Login" name="login" value="">
                <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-login.png"?>" alt=""/>
                
                <!-- //erreur -->
                <span id="email_error">Entrer votre email svp!</span> 
            </div>

            <?php if(isset($error['login'])):?>
                <span style="color:red">
                    <?= $error['login'];?>
                </span>
            <?php endif?>
            
            <div class="input-icone form-control">
                <input type="password" placeholder="Password" name="password" value="">
                
                <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-password.png"?>" alt=""/>
                <!-- //erreur -->
                <span id="pass_error">Entrer votre mot de passe svp!</span> 
            </div>
            <?php if(isset($error['password'])):?>
                <span style="color:red">
                    <?= $error['password'];?>
                </span>
            <?php endif?>
            <div class="btn-text">
                <input type="submit" id='submit' value='CONNEXION' >
                <p> S'inscrire pour jouer</p>
            </div>
        </form>
    </div>

<?php
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>
