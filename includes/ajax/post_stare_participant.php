<?php

/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

define("autorizare", 1);

chdir('../../');
define("_ROOT", getcwd() . "/");

include "includes/config.php";

$id=$_POST["id"];
$stare=$_POST["stare"];
if($stare==0 || $stare==1 || $stare==2){
    $nume=$user["nume"]." ".$user["prenume"];
    log_stare_participant($id, get_stare_by_id($id), $stare==1? "acceptat":($stare==2? "respins":"in asteptare"));
    update_stare_echipa($id,$stare,$nume);
    echo $nume;
}