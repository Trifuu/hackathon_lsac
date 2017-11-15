<?php
/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");


$title_app_title = "Editeaza profilul";

$js[] = "jquery.validate.min.js";
$js[] = "messages_ro.js";
$js[] = "app/users/edit_profile.js";

$content = _ROOT_CONTENT . $page . "/tmpl_edit_profile.php";
