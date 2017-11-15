<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */



defined("autorizare") or die("Nu aveti autorizare");


$js[] = "app/home/faq.js";

$title_app_title = "FAQ";

$ro=["Din cine este format juriul?",
    "Juriul este format din persoane competente, ale UiPath - sponsor principal.",
    "Cum sunt selectate echipele?",
    "Echipele participante sunt selectate de către sponsorul evenimentului.",
    "Trebuie să vin cu laptop-ul/computer-ul meu?",
    "Da, fiecare membru al echipei vine cu laptop-ul/computer-ul personal.",
    "Trebuie să folosim anumite limbaje de programare?",
    "Atât timp cât programul funcționează, nu sunt restricții ale limbajelor de programare.",
    "Trebuie să vin cu mâncare?",
    "Mesele și băutura sunt asigurate de către organizatori.",
    "Pentru a participa, este necesar să plătesc o taxă de înscriere?",
    "Nu, înscrierea este gratuită.",
    "Pot participa dacă nu am mai participat până acum?",
    "Da.",
    "Ce se întâmplă cu proiectul meu după terminarea competiției?",
    "Proiectul îi aparține echipei în totalitate și doar ea alege ce să facă cu el.",
    "O să avem conexiune la Internet?",
    "Da, conexiunea la Internet este asigurată de noi!",
    "Cât durează competiția?",
    "Competiția este reprezentată de 24 de h de coding.",
    "Câți membri are o echipă?",
    "O echipă este formtă din 3 membri."];
$en=["Who is in the jury?",
    "The jury consists of employees of UiPath - the main sponsor.",
    "How are teams selected?",
    "The participating teams are selected by the sponsor of the event.",
    "Do I have to come up with my laptop / computer?",
    "Yes, every team member comes with his own personal laptop / computer.",
    "Do we have to use certain programming languages?",
    "There are no programming language restrictions.",
    "Do I have to buy food on my own during the hackathon?",
    "Meals and drinks are provided by the organizing team.",
    "Do I have to pay a registration fee to participate?",
    "No registration fee is required.",
    "Can I register to HackITall, even if this would be my first hackathon?",
    "Yes, we encourage you to register because “You learn by doing”.",
    "What happens with my project after the competition?",
    "The project belongs entirely to the team and it is up to you how you use it further.",
    "Will we have Internet connection?",
    "Yes, the Internet connection is provided by us!",
    "How long does the competition last?",
    "The competition is represented by 24 hours of coding, after which each team presents its application and the jury decides the winning teams.",
    "What is the structure of a team?",
    "A team consists of 3 students enrolled to a faculty of technic profile in Bucharest."];
if($limba=="en"){
    $mesaj=$en;
}else{
    $mesaj=$ro;
}

$content = _ROOT_CONTENT . $page . "/tmpl_faq.php";