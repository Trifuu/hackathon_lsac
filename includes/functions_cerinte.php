<?php

/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */
defined("autorizare") or die("Nu aveti autorizare");

function run_query($nr){
    if($nr==1)
        return get_query1();
    else if($nr==2)
        return get_query2();
    else if($nr==3)
        return get_query3();
    else if($nr==4)
        return get_query4();
    else if($nr==5)
        return get_query5();
    else if($nr==6)
        return get_query6();
    else if($nr==7)
        return get_query7();
    else if($nr==8)
        return get_query8();
    else if($nr==9)
        return get_query9();
    else if($nr==10)
        return get_query10();
}
function get_nume_coloane($nr){
    $nume=[];
    if($nr==1){
        $nume[0]="nume";
        $nume[1]="prenume";
        $nume[2]="mancare";
        $nume[3]="bautura";
    }else if($nr==2){
        $nume[0]="echipa";
        $nume[1]="mancare";
        $nume[2]="bautura";
    }else if($nr==3){
        $nume[0]="echipa";
        $nume[1]="premiu";
        $nume[2]="valoare";
    }else if($nr==4){
        $nume[0]="echipa";
        $nume[1]="laptop";
        $nume[2]="unitate";
        $nume[3]="monitor";
    }else if($nr==5){
        $nume[0]="echipa";
        $nume[1]="tricou1";
        $nume[2]="tricou2";
        $nume[3]="tricou3";
    }else if($nr==6){
        $nume[0]="mancare";
        $nume[1]="bautura";
        $nume[2]="premiu";
        $nume[3]="valoare";
    }else if($nr==7){
        $nume[0]="premiu";
        $nume[1]="valoare";
    }else if($nr==8){
        $nume[0]="echipa";
        $nume[1]="stare_echipa";
        $nume[2]="nume capitan";
        $nume[3]="prenume capitan";
    }else if($nr==9){
        $nume[0]="nume";
        $nume[1]="prenume";
        $nume[2]="categorie";
        $nume[3]="email";
    }else if($nr==10){
        $nume[0]="echipa";
        $nume[1]="nume capitan";
        $nume[2]="prenume capitan";
        $nume[3]="stare_echipa";
    }
    return $nume;
}
//interogari simple
function get_query1() {
    global $db;
    try {
        $stmt = $db->prepare("select user.nume as nr1,user.prenume as nr2,consumatie_user.mancare as nr3,consumatie_user.bautura as nr4 "
                . "from user "
                . "inner join consumatie_user on consumatie_user.id_user=user.id");
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat;
}
function get_query2() {
    global $db;
    try {
        $stmt = $db->prepare("select participanti.echipa as nr1,consumatie_echipa.mancare as nr2,consumatie_echipa.bautura as nr3 "
                . "from participanti "
                . "inner join consumatie_echipa on consumatie_echipa.id_echipa=participanti.id");
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat;
}
function get_query3() {
    global $db;
    try {
        $stmt = $db->prepare("select participanti.echipa as nr1,premii.premiu as nr2,premii.valoare as nr3 "
                . "from participanti "
                . "inner join premii on premii.id_echipa=participanti.id");
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat;
}
function get_query4() {
    global $db;
    try {
        $stmt = $db->prepare("select participanti.echipa as nr1,detalii.laptop as nr2,detalii.unitate as nr3,detalii.monitor as nr4 "
                . "from participanti "
                . "inner join detalii on detalii.id_echipa=participanti.id");
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat;
}
function get_query5() {
    global $db;
    try {
        $stmt = $db->prepare("select participanti.echipa as nr1,detalii.tricou1 as nr2,detalii.tricou2 as nr3,detalii.tricou3 as nr4 "
                . "from participanti "
                . "inner join detalii on detalii.id_echipa=participanti.id");
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat;
}
function get_query6() {
    global $db;
    try {
        $stmt = $db->prepare("select consumatie_echipa.mancare as nr1,consumatie_echipa.bautura as nr2,premii.premiu as nr3,premii.valoare as nr4 "
                . "from consumatie_echipa "
                . "inner join premii on consumatie_echipa.id_echipa=premii.id_echipa");
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat;
}

//interogari complexe

function get_query7() {
    global $db;
    try {
        $stmt = $db->prepare("select t.premiu as nr1,t.valoare as nr2 from (select * from premii where valoare>(select avg(valoare) from premii ) ) as t");
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat;
}
function get_query8() {
    global $db;
    try {
        $stmt = $db->prepare("select t.echipa as nr1, t.stare_echipa as nr2, t.nume1 as nr3, t.prenume1 as nr4 from (select participanti.* from participanti "
                . "inner join premii "
                . "on participanti.id=premii.id_echipa ) as t");
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat;
}
function get_query9() {
    global $db;
    try {
        $stmt = $db->prepare("select t.nume as nr1, t.prenume as nr2, t.categorie as nr3, t.email as nr4 "
                . "from (select user.* from user "
                . "inner join consumatie_user on user.id=consumatie_user.id_user where consumatie_user.bautura='sprite') as t");
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat;
}
function get_query10() {
    global $db;
    try {
        $stmt = $db->prepare("select t.echipa as nr1, t.nume1 as nr2, t.prenume1 as nr3, t.stare_echipa as nr4 from"
                . "(select participanti.* from participanti "
                . "inner join (select * from detalii where laptop=3 and tricou1='M') as t2 where t2.id_echipa=participanti.id) as t");
        $stmt->execute();
        $rezultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $rezultat;
}