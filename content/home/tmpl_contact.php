<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */


defined("autorizare") or die("Nu aveti autorizare");
?>
<div class="container-fluid row" style="margin-top: 60px;text-align: center;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 40px;">
        <h2 style="color:#018EBE;font-family: got;">CONTACT</h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div id="casuta_contact_persoana" style="border-radius: 10px;margin: auto;margin-bottom: 15px;width: 355px;height: 150px;background-color: #4f4f4f;padding: 15px">
            <img src="<?php echo _SITE_CSS . "img/Macovei_Alexandra.jpg"; ?>" style="float:left;width: 120px;height: 120px;margin: auto;">
            <div style="text-align:left;margin-left: 125px;">
                <p style="margin-bottom:0px;margin-top:10px;color:white;font-family: got;font-size: 15px;">Macovei Alexandra</p>
                <p style="margin-bottom:0px;margin-top:5px;color:#37C4EC;font-family: got;font-size: 11px;">Project Manager</p>
                <p id="email_about" style="margin-bottom:0px;margin-top:-5px;color:#37C4EC;font-size: 11px;">alexandra.macovei@lsacbucuresti.ro</p>
                <p style="margin-bottom:0px;margin-top:-10px;color:#37C4EC;font-size: 11px;">+40 734 109 445</p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div style="border-radius: 10px;margin: auto;color:#37C4EC;max-width: 100%;height: 380px;max-height:100%;background-color: #4f4f4f;padding: 15px">
            <div id="email_contact" style="text-align: left;font-size: 20px;font-family: got;"><i class="fa fa-envelope-o fa-2x"></i> CONTACT<span style="font-size: 30px;">@</span>LSACBUCURESTI.RO</div>
            <!--<form action="#" id="contact_form">-->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                    <label for="nume" class="mdl-textfield__label" style="color:#37C4EC;"><?php echo $limba == "en" ? "Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                    <input style="color:black" type="text" name="nume" id="nume" class="mdl-textfield__input" >
                    <div class="mdl-tooltip" data-mdl-for="nume" style="font-size:14px;"><?php echo $limba == "en" ? "Complet name" : "Numele complet"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                    <label for="email" class="mdl-textfield__label" style="color:#37C4EC;"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                    <input style="color:black" type="email" name="email" id="email" class="mdl-textfield__input" >
                    <div class="mdl-tooltip" data-mdl-for="email" style="font-size:14px;"><?php echo $limba == "en" ? "Your Email adress" : "Email-ul dumneavoastra"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                    <label for="comentariu" class="mdl-textfield__label" style="color:#37C4EC;"><?php echo $limba == "en" ? "Mesaj" : "Mesaj"; ?><span class="obligatoriu">*</span></label>
                    <textarea class="mdl-textfield__input" name="comentariu" id="comentariu" rows="3"></textarea>
                    <div class="mdl-tooltip" data-mdl-for="comentariu" style="font-size:14px;"><?php echo $limba == "en" ? "Enter your questions" : "Scrieti intrebarile"; ?></div>
                </div>
                <button id="submit_contact" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><?php echo $limba == "en" ? "Send" : "Trimite"; ?></button>
<!--            </form>-->
        </div>
    </div>
</div>
<img src="<?php echo _SITE_CSS . "img/wall+flames.png"; ?>" style="width: 100%;margin-top: 20px;">