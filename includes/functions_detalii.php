<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

defined("autorizare") or die("Nu aveti autorizare");

function get_detalii() {
    global $db;
    try {
        $stmt = $db->prepare("select * from detalii");
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat;
}

function insert_detalii($id_echipa,$tricou1,$tricou2,$tricou3,$vegetarieni,$vegani,$preferinte,
            $observatii,$laptop,$unitate,$monitor,$echipamente,$mesaj){
    global$db;
    try{
        $stmt = $db->prepare("insert into detalii (id_echipa,tricou1,tricou2,tricou3,"
                . "vegetarieni,vegani,preferinte,observatii,laptop,unitate,monitor,echipamente,mesaj)"
                . " values (:id_echipa,:tricou1,:tricou2,:tricou3,:vegetarieni,:vegani,:preferinte,"
                . ":observatii,:laptop,:unitate,:monitor,:echipamente,:mesaj)");
        $stmt->bindParam(":id_echipa",$id_echipa,PDO::PARAM_INT);
        $stmt->bindParam(":tricou1",$tricou1,PDO::PARAM_STR);
        $stmt->bindParam(":tricou2",$tricou2,PDO::PARAM_STR);
        $stmt->bindParam(":tricou3",$tricou3,PDO::PARAM_STR);
        $stmt->bindParam(":vegetarieni",$vegetarieni,PDO::PARAM_STR);
        $stmt->bindParam(":vegani",$vegani,PDO::PARAM_STR);
        $stmt->bindParam(":preferinte",$preferinte,PDO::PARAM_STR);
        $stmt->bindParam(":observatii",$observatii,PDO::PARAM_STR);
        $stmt->bindParam(":laptop",$laptop,PDO::PARAM_INT);
        $stmt->bindParam(":unitate",$unitate,PDO::PARAM_INT);
        $stmt->bindParam(":monitor",$monitor,PDO::PARAM_INT);
        $stmt->bindParam(":echipamente",$echipamente,PDO::PARAM_STR);
        $stmt->bindParam(":mesaj",$mesaj,PDO::PARAM_STR);
        $stmt->execute();
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
}
function get_detalii_echipa($id_echipa){
    
    global $db;
    try{
        $stmt=$db->prepare("select * from detalii where id_echipa=:id_echipa");
        $stmt->bindParam(":id_echipa",$id_echipa,PDO::PARAM_INT);
        $stmt->execute();
        $total=$stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    //var_dump_custom($total);
    return $total==false? null:$total;
}
function update_detalii_echipa($id_echipa,$tricou1,$tricou2,$tricou3,$vegetarieni,$vegani,$preferinte,
            $observatii,$laptop,$unitate,$monitor,$echipamente,$mesaj){
    global $db;
    try{
        $stmt = $db->prepare("update detalii set id_echipa=:id_echipa,tricou1=:tricou1,tricou2=:tricou2"
                . ",tricou3=:tricou3,vegetarieni=:vegetarieni,vegani=:vegani,preferinte=:preferinte"
                . ",observatii=:observatii,laptop=:laptop,unitate=:unitate,monitor=:monitor"
                . ",echipamente=:echipamente,mesaj=:mesaj where id_echipa=:id_echipa");
        $stmt->bindParam(":id_echipa",$id_echipa,PDO::PARAM_INT);
        $stmt->bindParam(":tricou1",$tricou1,PDO::PARAM_STR);
        $stmt->bindParam(":tricou2",$tricou2,PDO::PARAM_STR);
        $stmt->bindParam(":tricou3",$tricou3,PDO::PARAM_STR);
        $stmt->bindParam(":vegetarieni",$vegetarieni,PDO::PARAM_STR);
        $stmt->bindParam(":vegani",$vegani,PDO::PARAM_STR);
        $stmt->bindParam(":preferinte",$preferinte,PDO::PARAM_STR);
        $stmt->bindParam(":observatii",$observatii,PDO::PARAM_STR);
        $stmt->bindParam(":laptop",$laptop,PDO::PARAM_INT);
        $stmt->bindParam(":unitate",$unitate,PDO::PARAM_INT);
        $stmt->bindParam(":monitor",$monitor,PDO::PARAM_INT);
        $stmt->bindParam(":echipamente",$echipamente,PDO::PARAM_STR);
        $stmt->bindParam(":mesaj",$mesaj,PDO::PARAM_STR);
        $stmt->execute();
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
}
function try_sql(){
    
    global $db;
    try{
        $stmt=$db->prepare("show tables");
        $stmt->execute();
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    
}