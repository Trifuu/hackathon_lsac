<?php
/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */
defined("autorizare") or die("Nu aveti autorizare");

$js[] = "app/cerinte/dashboard.js";
$js[] = "datatables.js";
$css[] = "datatables.css";

if(isset($_GET["query"])){
    $query=$_GET["query"];
}else{
    $query=1;
}
$title_app_title = "Cerinte";

$users=run_query($query);
$nume=  get_nume_coloane($query);

$content = _ROOT_CONTENT . $page . "/tmpl_dashboard.php";

