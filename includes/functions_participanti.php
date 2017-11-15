<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */
defined("autorizare") or die("Nu aveti autorizare");

function add_participanti($echipa, $nume1, $prenume1, $email1, $telefon1, $nume2, $prenume2, $email2, $telefon2, $nume3, $prenume3, $email3, $telefon3, $link_cv, $comentariu, $limbaje, $evenimente) {
    global $db;
    try {
        $stmt = $db->prepare("insert into `participanti` (`echipa`,`nume1`,`prenume1`,`email1`,`telefon1`,"
                . "                                         `nume2`,`prenume2`,`email2`,`telefon2`,"
                . "                                         `nume3`,`prenume3`,`email3`,`telefon3`,"
                . "                                         `link_cv`,`comentariu`,`limbaje`,`evenimente`,`data_inscriere`"
                . "                                     ) values ("
                . "                                         :echipa, :nume1, :prenume1, :email1, :telefon1, "
                . "                                         :nume2, :prenume2, :email2, :telefon2, "
                . "                                         :nume3, :prenume3, :email3, :telefon3, "
                . "                                         :link_cv, :comentariu, :limbaje, :evenimente,"
                . "                                         UNIX_TIMESTAMP())");
        $stmt->bindParam(':echipa', $echipa, PDO::PARAM_STR, 64);
        $stmt->bindParam(':nume1', $nume1, PDO::PARAM_STR, 64);
        $stmt->bindParam(':prenume1', $prenume1, PDO::PARAM_STR, 64);
        $stmt->bindParam(':email1', $email1, PDO::PARAM_STR, 64);
        $stmt->bindParam(':telefon1', $telefon1, PDO::PARAM_STR, 15);
        $stmt->bindParam(':nume2', $nume2, PDO::PARAM_STR, 64);
        $stmt->bindParam(':prenume2', $prenume2, PDO::PARAM_STR, 64);
        $stmt->bindParam(':email2', $email2, PDO::PARAM_STR, 64);
        $stmt->bindParam(':telefon2', $telefon2, PDO::PARAM_STR, 15);
        $stmt->bindParam(':nume3', $nume3, PDO::PARAM_STR, 64);
        $stmt->bindParam(':prenume3', $prenume3, PDO::PARAM_STR, 64);
        $stmt->bindParam(':email3', $email3, PDO::PARAM_STR, 64);
        $stmt->bindParam(':telefon3', $telefon3, PDO::PARAM_STR, 15);
        $stmt->bindParam(':link_cv', $link_cv, PDO::PARAM_LOB);
        $stmt->bindParam(':comentariu', $comentariu, PDO::PARAM_LOB);
        $stmt->bindParam(':limbaje', $limbaje, PDO::PARAM_LOB);
        $stmt->bindParam(':evenimente', $evenimente, PDO::PARAM_LOB);
        $stmt->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function get_participanti($table = false) {
    global $db;
    try {
        $stmt = $db->prepare("select * from participanti");
        $stmt->execute();
        $participanti = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    if ($table == false) {
        return $participanti ? $participanti : null;
    } else {
        return json_encode($participanti);
    }
}

function traducere_stare($numar, $culoare = false) {
    if ($culoare == false) {
        if ($numar == 1) {
            return "Acceptat";
        } elseif ($numar == 2) {
            return "Respins";
        } else {
            return "In asteptare";
        }
    } else {
        if ($numar == 1) {
            return "green";
        } elseif ($numar == 2) {
            return "red";
        } else {
            return "yellow";
        }
    }
}

function update_stare_echipa($id, $stare,$nume) {
    global $db;
    
    try {
        $stmt = $db->prepare("update participanti set stare_echipa=:stare,user_stare_change=:user where id=:id");
        $stmt->bindParam(':stare', $stare, PDO::PARAM_INT);
        $stmt->bindParam(':user', $nume, PDO::PARAM_STR, 64);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
}
function verify_email($email){
    global $db;
    try{
        $stmt=$db->prepare("select * from participanti where email1=:email or email2=:email or email3=:email");
        $stmt->bindParam(':email',$email,PDO::PARAM_STR,64);
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
        
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat==false? null:$email;
}
function verify_telefon($telefon){
    global $db;
    try{
        $stmt=$db->prepare("select * from participanti where telefon1=:telefon or telefon2=:telefon or telefon3=:telefon");
        $stmt->bindParam(':telefon',$telefon,PDO::PARAM_STR,64);
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat==false? null:$telefon;
}
function verify_echipa_email($email1,$email2,$email3){
    if(verify_email($email1)!=null){
        return $email1;
    }
    if(verify_email($email2)!=null){
        return $email2;
    }
    if(verify_email($email3)!=null){
        return $email3;
    }
    return false;
}
function verify_echipa_telefon($telefon1,$telefon2,$telefon3){
    if(verify_telefon($telefon1)!=null){
        return $telefon1;
    }
    if(verify_telefon($telefon2)!=null){
        return $telefon2;
    }
    if(verify_telefon($telefon3)!=null){
        return $telefon3;
    }
    return false;
}
function get_stare_by_id($id){
    global $db;
    try{
        $stmt=$db->prepare("select stare_echipa from participanti where id=:id");
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $stare=$stmt->fetch(PDO::FETCH_ASSOC)["stare_echipa"];
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    if($stare==1){
        $stare="Acceptat";
    }elseif($stare == 2){
        $stare="Respins";
    }else{
        $stare="In asteptare";
    }
    return $stare;
}
function get(){
    global $db;
    try{
        $stmt=$db->prepare("select * from participanti");
        $stmt->execute();
        $tot=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $tot;
}
function get_echipa($email_capitan){
    global $db;
    try{
        $stmt=$db->prepare("select * from participanti where email1='$email_capitan'");
        $stmt->execute();
        $date=$stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $date;
}
function get_nume_echipe(){
    global $db;
    try{
        $stmt=$db->prepare("select echipa from participanti");
        $stmt->execute();
        $nume=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $nume;
}