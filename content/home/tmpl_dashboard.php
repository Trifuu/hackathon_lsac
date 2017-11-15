<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

defined("autorizare") or die("Nu aveti autorizare");
?>

<div class="container-fluid row" style="margin-top: 60px;text-align: center;">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <img src="<?php echo _SITE_CSS . "img/logo_hack.png"; ?>" style="max-height: 300px;max-width: 300px;" id="logo_lsac">

    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" id="componente_mijloc">
        <div style="margin-top: 90px" id="buton_register">
            <a href="<?php getUrl("formular", "dashboard", true) ?>" class="btn btn-success btn-lg" style=""><?php echo $limba=="en"? "Register":"Înscrie-te";?></a>
        </div>
        <div id="timer" class="timer" style="margin-top: 30px;">
            <span id="days" class="numere_home"></span>
            <span>D</span>
            <span id="hours" class="numere_home"></span>
            <span>H</span>
            <span id="minut" class="numere_home"></span>
            <span>M</span>
            <span id="second" class="numere_home"></span>
            <span>S</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="height: 300px;margin-top: 40px;" id="logo_uipath">
        <div class="powered_by_style">
            <?php echo $limba=="en"? "Powered By":"Powered By";?>:
        </div>
        <img src="<?php echo _SITE_CSS . "img/logo_uipath.png"; ?>" style="max-height: 200px;max-width: 200px;">
    </div>
</div>
<img src="<?php echo _SITE_CSS . "img/wall+flames.png"; ?>" style="width: 100%">