<?php
/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */


defined("autorizare") or die("Nu aveti autorizare");


$js[] = "app/participanti/dashboard.js";
$js[] = "datatables.js";
$css[] = "datatables.css";
$title_app_title = "Participanti";
$participanti=  get_participanti();
$user_type=  get_user_type($user["categorie"], "participanti");

$content = _ROOT_CONTENT . $page . "/tmpl_dashboard.php";
//create_excel();