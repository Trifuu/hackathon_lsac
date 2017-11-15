<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

define("autorizare", 1);

$name = $_POST['name'];
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

echo "merge ";
$subject = "Inscriere Perpetuum";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: lsacbucu@truster-2.webhosting4.net" . "\r\n";
$headers .= "Return-Path: lsacbucu@truster-2.webhosting4.net" . "\r\n";
$template = '<div>Salutare,<br/><br/>'
        . 'Echipa ' . $name . ' a fost inregistrata cu succes! Va multumim ca ati acceptat provocarea de a lua parte la Concursul de Inginerie Perpetuum!<br/><br/>'
        . 'Urmatorul pas este etapa de calificare, ce presupune faptul ca veti primi un mail pe data de <b>25 martie, ora 12:00</b> cu un test online de echipa si veti avea la dispozitie <b>36h</b> pentru a-l trimite, alaturi de formularele pe care le veti primi tot atunci. <b>Deadline-ul</b>  este pe data de <b>26 martie, ora 23:59</b>, iar raspunsul il veti primi pe data de 27 martie dimineata.<br/><br/>'
        . 'Nu ezita sa ne contactezi daca ai intrebari, nelamuriri.<br/><br/>'
        . 'Cu drag,<br/>Echipa LSAC<br/><br/>'
        . 'Andrei Dumitrescu<br/>Coordonator eveniment<br/>andrei_dumitrescu_96@yahoo.com<br/>'
        . '<br/>Mihai Stan<br/>Coordonator eveniment<br/>stan.mihaioctavian@gmail.com</div>';
$sendmessage = wordwrap($template, 70);
mail($email, $subject, $sendmessage, $headers);
echo "merge ";
