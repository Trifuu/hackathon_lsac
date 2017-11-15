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

if(!isset($_POST["id"])){
    die("post missing");
}

$tip_user = get_user_type($user["categorie"], "participanti");
$id=$_POST["id"];

if ($tip_user == 0) {
    global $db;
    try {
        $stmt = $db->prepare("delete from participanti where id=:id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
}
ob_end_flush();
