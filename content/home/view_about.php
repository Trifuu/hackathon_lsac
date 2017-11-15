<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */



defined("autorizare") or die("Nu aveti autorizare");


$js[] = "app/home/about.js";

$title_app_title = "About";

$organizatori["nume"]=["Macovei Alexandra-Oana","Marin Corina",
    "Pascal Bogdan-Andrei","Trifu Marius-Constantin","Petre Cosmin",
    "Dragomir Dan","Nazare Ana-Karina","Petrescu Mihnea-Andrei"];
$organizatori["departament"]=["Project Manager","Manager Public Relations",
    "Manager Fund Raising","Manager IT","Manager Logistica",
    "Manager Human Resources","Manager Design","Manager Multimedia"];
$organizatori["poza"]=["Macovei_Alexandra.jpg","Corina_Marin.jpg",
    "Bogdan_Pascal.jpg","Trifu_Marius.jpg","Cosmin_Petre.jpg",
    "Dan_Dragomir.jpg","Karina_Nazare.jpg","Mihnea_Petrescu.jpg"];

$content = _ROOT_CONTENT . $page . "/tmpl_about.php";