<?php
/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */


defined("autorizare") or die("Nu aveti autorizare");

$js[] = "jquery.validate.min.js";
$js[] = "messages_ro.js";
$js[] = "app/formular/dashboard.js";
$js[] = "material.min.js";
$css[] = "material_icons";
$css[] = "material.min.css";

$title_app_title = "Formular";



$content = _ROOT_CONTENT . $page . "/tmpl_dashboard.php";
