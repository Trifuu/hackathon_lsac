<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */


defined("autorizare") or die("Nu aveti autorizare");
?>
<div class="container-fluid row" style="margin-top: 10px;text-align: center;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div style="height: 250px;margin-top: 25px;">
            <img id="logo_lsac_about" src="<?php echo _SITE_CSS . "img/logo_hack.png"; ?>" style="max-height: 300px;max-width: 300px;">
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:50px;"></div>
    
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="scris_about" id="data">
            <?php echo $limba == "en" ? "Date" : "Data"; ?> <br>
            <span style="font-size:40px;">25-26</span>
            <span> XI </span> 
            <span style="font-size:40px;">2017</span>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" id="uipath">
        <div class="powered_by_style">
            <?php echo $limba == "en" ? "Powered By" : "Powered By"; ?>:
        </div>
        <img src="<?php echo _SITE_CSS . "img/logo_uipath.png"; ?>" style="max-height: 150px;max-width: 150px;margin-bottom: 40px;">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="scris_about" id="locatia">
            <?php echo $limba == "en" ? "Location" : "Locația"; ?> <br>
            <?php echo $limba == "en" ? "UPB LIBRARY" : "Biblioteca UPB"; ?>
        </div>
    </div>

    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:50px;"></div>
    
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="scris_about2">
            <p class="numere_about" id="participanti">0</p> <br>
            <p class="scris_about_numere">
                <?php echo $limba == "en" ? "Participants" : "Participanți"; ?> 
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="scris_about2">
            <p class="numere_about" id="ore">0</p> <br>
            <p class="scris_about_numere">
                <?php echo $limba == "en" ? "Hours" : "Ore"; ?>    
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="scris_about2">
            <p class="numere_about" id="echipe">0</p> <br>
            <p class="scris_about_numere">
                <?php echo $limba == "en" ? "Teams" : "Echipe"; ?> 
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="scris_about2">
            <p class="numere_about" id="castigatori">0</p> <br>
            <p class="scris_about_numere">
                <?php echo $limba == "en" ? "Winners" : "Câștigători"; ?>    
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:100px;"></div>
    <div class="col-lg-1"></div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <img id="img1" src="<?php echo _SITE_CSS . "img/about_poza.jpg"; ?>" style="max-width: 440px;max-height: 230px;margin: auto;">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align: left;color:white;margin-top: 10px;left: 20px;font-family: Raleway;">
        <h3 style="font-family: got;">
            <?php echo $limba == "en" ? "ABOUT HACKITALL" : "Despre HACKITALL"; ?>
        </h3>
        <p>
            <?php
            if ($limba == "en") {
                echo "Starting with this year, LSAC Bucharest will introduce two editions of HackITall,
        one of the most attractive programming competition. The contest offers the 
        chance for all technology and innovation enthusiasts to showcase their talents.
        The third edition of HackITall comes with new challenges, providing each participant 
        with 24 hours to find original and optimal solutions and come out with unique ideas within a certain specified theme. 
        UiPath, our official sponsor, is ready to meet young enthusiasts and reward the best of them.
        Register with your team until November 15th and demonstrate what you are capable of!";
            } else {
                echo "LSAC București oferă șansa tuturor pasionaților de domeniul tehnologiei și 
        inovației să fie participanți la HackITall, introducând de anul acesta două ediții 
        ale celei mai dorite competiții de programare. HackITall vine cu noi provocări, 
        punând la dispoziție fiecărui participant 24 de ore de idei unice și o temă inedită, 
        în care să găsească soluții originale și optime. Sponsorul oficial UiPath este 
        pregătit să întâlnească tineri entuziaști și să-i premieze pe cei mai buni dintre 
        ei. Înscrie-te până pe data de 15 noiembrie, alături de echipa ta și demonstreză 
        tuturor de ce ești în stare! ";
            }
            ?>
        </p>
    </div>
    <div class="col-lg-1"></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:100px;"></div>
    <div class="col-lg-1"></div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <img id="img2" src="<?php echo _SITE_CSS . "img/editia_2017.jpg"; ?>" style="max-width: 440px;max-height: 230px;margin: auto;">
    </div>
    
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align: left;color:white;font-family: Raleway;">
        <h3 style="font-family: got;margin-top: 20px;">
            <?php echo $limba == "en" ? "Previous editions" : "Editiile anterioare"; ?>
        </h3>
        <p style="margin-top: 50px;">
            <?php
            if ($limba == "en") {
                echo "For the second hackathon edition, the number of teams enrolled 
        increased to 55, while 20 teams were selected by the main sponsor, Avira, to 
        participate. This time, the hackathon theme proposed was creating the best 
        application using Amazon Polly.";
            } else {
                echo "La cea de-a doua ediție de hackathon, numărul echipelor înscrise a 
        crescut la 55, iar 20 de echipe au fost selecționate pentru participarea de 
        către sponsorul principal, Avira. Și de această dată, tot el a fost cel care a 
        propus și tema hackathonu-ului - crearea unei aplicații care să folosească Amazon 
        Polly - și a ales câștigătorii.";
            }
            ?>
        </p>
    </div>
    <div class="col-lg-1"></div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:100px;"></div>
    <div class="col-lg-1"></div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align: left;color:white;margin-top: 30px;font-family: Raleway;">
        <p style="margin-top: 60px;">
            <?php
            if ($limba == "en") {
                echo "The first HackITall edition was a real success for the LSAC team. 
        It has enjoyed a large number of registered teams: 30 in number, of which only 
        10 have been selected for participation. The main sponsor was Avira, who also 
        came up with the theme of the hackathon, with competitors creating a community-based 
        application. So, for 24 hours, students tried to give everything they could to 
        win the prize.";
            } else {
                echo "Prima ediție de HackITalll a fost un adevărat succes pentru echipa 
        LSAC. Aceasta s-a bucurat de un număr mare de echipe înscrise: 30 la număr, dintre 
        care doar 10 au fost selecționate pentru participare. Sponsorul principal a fost 
        firma Avira, care a propus și tema hackathon-ului, concurenții având de creat o 
        aplicație în folosul comunității. Așadar, timp de 24 de ore, studenții au încercat 
        să dea tot ce au mai bun pentru a câștiga premiul I.";
            }
            ?>
        </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <img id="img3" src="<?php echo _SITE_CSS . "img/editia_2016.jpg"; ?>" style="max-width: 440px;max-height: 230px;margin: auto;">
    </div>
    <div class="col-lg-1"></div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:150px;"></div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 20px;text-align: center;font-size: 38px;color: white;">
        <?php echo $limba=="en"? "Team Organization":"Echipa de organizare"; ?>
    </div>

    <?php for ($i = 0; $i < 8; $i++) { ?>
        <div class="col-xs-6 col-sm-6<?php echo ($i==0 ||$i==1)? "col-md-6 col-lg-6":"col-md-4 col-lg-4"; ?> " style="margin-top:30px;">
            <div style="border-radius: 10px;margin: auto;width: 355px;height: 150px;background-color: #4f4f4f;padding: 15px" class="organizatori_casute">
                <img src="<?php echo _SITE_CSS . "img/".$organizatori["poza"][$i]; ?>" style="float:left;width: 120px;height: 120px;margin: auto;">
                <div style="text-align:left;margin-left: 125px;">
                    <p style="margin-bottom:0px;margin-top:10px;color:white;font-family: got;font-size: 15px;"><?php echo $organizatori["nume"][$i];?></p>
                    <p style="margin-bottom:0px;margin-top:15px;color:#37C4EC;font-family: got;font-size: 11px;"><?php echo $organizatori["departament"][$i];?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<img src="<?php echo _SITE_CSS . "img/wall+flames.png"; ?>" style="width: 100%;margin-top: 35px;">