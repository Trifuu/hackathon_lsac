<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */
$content = "";
if (strlen($_POST["cv"]) == 0 ||
        strlen($_POST["nume1"]) == 0 || strlen($_POST["prenume1"]) == 0 || strlen($_POST["email1"]) == 0 || strlen($_POST["telefon1"]) == 0 ||
        strlen($_POST["nume2"]) == 0 || strlen($_POST["prenume2"]) == 0 || strlen($_POST["email2"]) == 0 || strlen($_POST["telefon2"]) == 0 ||
        strlen($_POST["nume3"]) == 0 || strlen($_POST["prenume3"]) == 0 || strlen($_POST["email3"]) == 0 || strlen($_POST["telefon3"]) == 0
) {
    redirect(getUrl("formular", "dashboard", false, ["message" => "Nu ai completat toate campurile obligatorii!", "status" => "nok"]));
} elseif (strlen($_POST["nume_echipa"]) < 3) {
    redirect(getUrl("formular", "dashboard", false, ["message" => "Numele echipei trebuie sa aiba minim 3 caractere!", "status" => "nok"]));
} elseif (!filter_var($_POST["cv"], FILTER_VALIDATE_URL)) {
    redirect(getUrl("formular", "dashboard", false, ["message" => "Nu ati introdus un link valid pentru CV.!", "status" => "nok"]));
} else {
    $echipa = htmlspecialchars($_POST["nume_echipa"], ENT_QUOTES);
    $nume1 = htmlspecialchars($_POST["nume1"], ENT_QUOTES);
    $prenume1 = htmlspecialchars($_POST["prenume1"], ENT_QUOTES);
    $email1 = htmlspecialchars($_POST["email1"], ENT_QUOTES);
    $telefon1 = htmlspecialchars($_POST["telefon1"], ENT_QUOTES);
    $nume2 = htmlspecialchars($_POST["nume2"], ENT_QUOTES);
    $prenume2 = htmlspecialchars($_POST["prenume2"], ENT_QUOTES);
    $email2 = htmlspecialchars($_POST["email2"], ENT_QUOTES);
    $telefon2 = htmlspecialchars($_POST["telefon2"], ENT_QUOTES);
    $nume3 = htmlspecialchars($_POST["nume3"], ENT_QUOTES);
    $prenume3 = htmlspecialchars($_POST["prenume3"], ENT_QUOTES);
    $email3 = htmlspecialchars($_POST["email3"], ENT_QUOTES);
    $telefon3 = htmlspecialchars($_POST["telefon3"], ENT_QUOTES);
    $link_cv = htmlspecialchars($_POST["cv"], ENT_QUOTES);
    $comentariu = isset($_POST["comentariu"]) ? htmlspecialchars($_POST["comentariu"], ENT_QUOTES) : "";
    $limbaje = isset($_POST["limbaje"]) ? htmlspecialchars($_POST["limbaje"], ENT_QUOTES) : "";
    $evenimente = isset($_POST["evenimente"]) ? htmlspecialchars($_POST["evenimente"], ENT_QUOTES) : "";
   
    $raspuns_email=verify_echipa_email($email1,$email2,$email3);
    
    $raspuns_telefon=  verify_echipa_telefon($telefon1, $telefon2, $telefon3);
    
    if($raspuns_email!=false) {
        redirect(getUrl("formular", "dashboard", false, ["message" => "Email-ul ".$raspuns_email." a mai fost folosit, va rugam sa introduceti altul.", "status" => "nok"]));
    }elseif($raspuns_telefon!=false){
        redirect(getUrl("formular", "dashboard", false, ["message" => "Numarul de telefon ".$raspuns_telefon." a mai fost folosit, va rugam sa introduceti altul.", "status" => "nok"]));
    }else {
         
        add_participanti($echipa, $nume1, $prenume1, $email1, $telefon1, $nume2, $prenume2, $email2, $telefon2, $nume3, $prenume3, $email3, $telefon3, $link_cv, $comentariu, $limbaje, $evenimente);

        redirect(getUrl("formular", "dashboard", false, ["message" => "V-ati inscris cu succes.", "status" => "ok"]));
    }
}