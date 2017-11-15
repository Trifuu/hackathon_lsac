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
} catch (Exception $ex) {
    die($ex->getMessage());
}
redirect(getUrl("users", "dashboard"));