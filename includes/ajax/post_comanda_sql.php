<?php

/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

define("autorizare", 1);

chdir('../../');
define("_ROOT", getcwd() . "/");

include "includes/config.php";

global $db;
try{
    $stmt=$db->prepare($_POST["comanda"]);
    $stmt->execute();
    $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    die($ex->getMessage());
}
//var_dump_custom($stmt);
redirect(getUrl("users", "dashboard"));