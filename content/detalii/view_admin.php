<?php

/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */


defined("autorizare") or die("Nu aveti autorizare");


$js[] = "app/detalii/admin.js";
$title_app_title = "Detalii";
$user_type = get_user_type($user["categorie"], "users");
$echipe = get_nume_echipe();

$detalii_echipe2 = get_detalii();
for ($i = 0; $i < count($echipe); $i++) {
    $detalii_echipe[$i] = "";
    for ($j = 0; $j < count($detalii_echipe2); $j++) {
        
        if ($detalii_echipe2[$j]["id_echipa"] == $echipe[$i]["id"]) {
            $detalii_echipe[$i] = $detalii_echipe2[$j];
            break;
        }
    }
}
//var_dump_custom($detalii_echipe);
try_sql();

$content = _ROOT_CONTENT . $page . "/tmpl_admin.php";
