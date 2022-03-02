<?php
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
    if(isset($_SESSION[KEY_ERROR])){
        $error = $_SESSION[KEY_ERROR];
        unset($_SESSION[KEY_ERROR]);
    }
?>
    <header>
        <img class="log" src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."logo-QuizzSA.png"?>" />
        <h1> Le plaisir de jouer</h1>
    </header>
    <div id="container"> 
        <div class="entete">
            <h3>Login Form</h3>
            <span>x</span>   
        </div>
        <form action="<?=WEB_ROOT ?>" method="POST"> 
            <input type="hidden"   name="controller" value="securite">
            <input type="hidden"   name="action" value="connexion">
            <?php if(isset($error['connexion'])):?>
                <span style="color:red">
                    <?= $error['connexion'];?>
                </span>
            <?php endif?>
            <div class="input-icone">
                <input type="text" placeholder="Login" name="login" value="">
                <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-login.png"?>" alt=""/> 
            </div>

            <?php if(isset($error['login'])):?>
                <span style="color:red">
                    <?= $error['login'];?>
                </span>
            <?php endif?>
            
            <div class="input-icone">
                <input type="password" placeholder="Password" name="password" value="">
                <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."ic-password.png"?>" alt=""/>
            </div>
            <?php if(isset($error['password'])):?>
                <span style="color:red">
                    <?= $error['password'];?>
                </span>
            <?php endif?>
            <input type="submit" id='submit' value='CONNEXION' >
            <p class="texte"> S'inscrire pour jouer</p>
        </form>
    </div>
<?php
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>
