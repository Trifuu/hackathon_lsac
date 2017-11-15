<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */
defined("autorizare") or die("Nu aveti autorizare");
?>
<div class="container-fluid" style="height: 100%">

    <div style="position: absolute;left:50%;margin-left: -150px;color:#37C4EC;margin-top:70px;" class="div_login">
        <form class="form-inline" action="<?php getUrl("login", "login-action", true); ?>" method="post" id="login_form" style="width:230px;padding: 10px;">

            <?php if (isset($_SESSION["error"])) { ?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <i class="fa fa-exclamation-triangle"></i> <?php echo htmlspecialchars($_SESSION["error"], ENT_QUOTES); ?>
                </div>
                <?php
                $_SESSION["error"] = null;
                unset($_SESSION["error"]);
                ?>
            <?php } ?>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="color: #37C4EC;">
                <input class="mdl-textfield__input" type="text" name="email" id="email">
                <label class="mdl-textfield__label" for="email" style="color: #37C4EC;">Email</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="color: #37C4EC;">
                <input class="mdl-textfield__input" type="password" name="parola" id="parola">
                <label class="mdl-textfield__label" for="parola" style="color: #37C4EC;">Parola</label>
            </div>
            <div style="margin-left:44px;margin-top:28px;display: inline">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="background-color:#018EBE;padding-left: 10px;padding-right: 10px;"><i class="fa fa-user-circle"></i>  Autentificare</button>
                    <a href="<?php echo _SITE_BASE;?>" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="background-color:#018EBE;padding-left: 7px;padding-right: 6px;"><i class="fa fa-home"></i>  Home</a>
                </div>
            </div>
        </form>
    </div>
    <img src="<?php echo _SITE_CSS."img/wall+flames.png";?>" style="margin-top:350px;width: 100%;">
</div>