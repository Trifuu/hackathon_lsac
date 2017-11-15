<?php

ob_start();
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

define("autorizare", 1);

chdir('../../');
define("_ROOT", getcwd() . "/");

include "includes/config.php";

if(!isset($_POST["id"]) || !isset($_POST["link_nou"])){
    die("post missing");
}

$tip_user = get_user_type($user["categorie"], "participanti");
$id=$_POST["id"];
$link_nou=$_POST["link_nou"];
if ($tip_user == 0 || $tip_user==2) {
    global $db;
    try {
        $stmt = $db->prepare("update participanti set link_cv=:link_nou where id=:id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':link_nou', $link_nou, PDO::PARAM_STR);
        $stmt->execute();
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
}
ob_end_flush();
