<?php
/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */


defined("autorizare") or die("Nu aveti autorizare");


$js[] = "app/detalii/dashboard.js";
$title_app_title = "Detalii";
$user_type=  get_user_type($user["categorie"], "");
$echipa=get_echipa($user["email"]);
$detalii_echipa=get_detalii_echipa($echipa["id"]);
//var_dump_custom($detalii_echipa);

$content = _ROOT_CONTENT . $page . "/tmpl_dashboard.php";