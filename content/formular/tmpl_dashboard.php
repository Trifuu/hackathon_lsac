<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");
?>
<main class = "mdl-layout__content style1" style="margin-left:15px;background-image: url('<?php echo _SITE_CSS . "img/form.png"; ?>')">       
    <?php
    if (isset($_GET["message"])) {
        if (isset($_GET["status"]) && $_GET["status"] == "ok") {
            ?>
            <div class="alert alert-success">
                <a href="<?php getUrl("$page", "$view", true); ?>" class="close">&times;
                </a>
                <strong><i class="fa fa-check-circle"></i></strong> <?php echo htmlspecialchars($_GET["message"], ENT_QUOTES); ?>
            </div>
            <?php
        } else if (isset($_GET["status"]) && $_GET["status"] == "nok") {
            ?>
            <div class="alert alert-danger">
                <a href="<?php getUrl("$page", "$view", true); ?>" class="close">&times;
                </a>
                <strong><i class="fa fa-exclamation-circle"></i></strong> <?php echo htmlspecialchars($_GET["message"], ENT_QUOTES); ?>
            </div>
            <?php
        }
    }
    ?>
    <button id="go_back" class="back_home back_style" title="Go home">Home</button>
    <form action="<?php getUrl("formular", "post_submit", true); ?>" method="post" id="validate_formular">
        <h4 style="text-align:center;font-family: got;">
            <?php echo $limba == "en" ? "Team Registration" : "Înscrierea echipei"; ?>	
        </h4>
        <div class = "mdl-grid" style="margin-top:-10px;"> 
            <div class="mdl-cell mdl-cell--4-col"></div>
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="nume_echipa" class="mdl-textfield__label"><?php echo $limba == "en" ? "Team Name" : "Nume echipă"; ?><span class="obligatoriu">*</span></label>
                    <input style="color:black" type="text" name="nume_echipa" id="nume_echipa" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="nume_echipa" style="font-size:14px;"><?php echo $limba == "en" ? "Team Name (minimum 3 characters)" : "Numele echipei (minim 3 caractere)"; ?></div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col"></div>
        </div>
        <div class = "mdl-grid" style="margin-top:-30px;"> 
            <div class="mdl-cell mdl-cell--4-col">
                <h4 style="font-family: got;"><?php echo $limba == "en" ? "Team Captain" : "Căpitanul echipei"; ?></h4>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="nume1" class="mdl-textfield__label"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="nume1" id="nume1" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="nume1" style="font-size:14px;"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="prenume1" class="mdl-textfield__label"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="prenume1" id="prenume1" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="prenume1" style="font-size:14px;"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="email1" class="mdl-textfield__label"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                    <input type="email" name="email1" id="email1" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="email1" style="font-size:14px;"><?php echo $limba == "en" ? "Email" : "Email"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="telefon1" class="mdl-textfield__label"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?><span class="obligatoriu">*</span></label>
                    <input type="tel" name="telefon1" id="telefon1" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="telefon1" style="font-size:14px;"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?></div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <h4 style="font-family: got;"><?php echo $limba == "en" ? "Member" : "Membru"; ?></h4>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="nume2" class="mdl-textfield__label"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="nume2" id="nume2" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="nume2" style="font-size:14px;"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="prenume2" class="mdl-textfield__label"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="prenume2" id="prenume2" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="prenume2" style="font-size:14px;"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="email2" class="mdl-textfield__label"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                    <input type="email" name="email2" id="email2" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="email2" style="font-size:14px;"><?php echo $limba == "en" ? "Email" : "Email"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="telefon2" class="mdl-textfield__label"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?><span class="obligatoriu">*</span></label>
                    <input type="tel" name="telefon2" id="telefon2" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="telefon2" style="font-size:14px;"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?></div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <h4 style="font-family: got;"><?php echo $limba == "en" ? "Member" : "Membru"; ?></h4>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="nume3" class="mdl-textfield__label"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="nume3" id="nume3" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="nume3" style="font-size:14px;"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="prenume3" class="mdl-textfield__label"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="prenume3" id="prenume3" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="prenume3" style="font-size:14px;"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="email3" class="mdl-textfield__label"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                    <input type="email" name="email3" id="email3" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="email3" style="font-size:14px;"><?php echo $limba == "en" ? "Email" : "Email"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="telefon3" class="mdl-textfield__label"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?><span class="obligatoriu">*</span></label>
                    <input type="tel" name="telefon3" id="telefon3" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="telefon3" style="font-size:14px;"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?></div>
                </div>
                <br>
            </div>
        </div>
        <div class = "mdl-grid"> 
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular" style="width:100%;max-width: 400px;">
                    <label for="limbaje" class="mdl-textfield__label"><?php echo $limba == "en" ? "Programming languages" : "Limbaje de programare cunoscute"; ?></label>
                    <input type="text" name="limbaje" id="limbaje" class="mdl-textfield__input" placeholder="Ex: C,C++,PHP,Java...etc">
                    <div class="mdl-tooltip" data-mdl-for="limbaje" style="font-size:14px;"><?php echo $limba == "en" ? "What programming languages do you know?" : "Ce limbaje de programare cunoașteți?"; ?></div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular" style="width:100%;max-width: 400px;">
                    <label for="evenimente" class="mdl-textfield__label"><?php echo $limba == "en" ? "Other events you have attended (together or separately)" : "Alte evenimente la care ați participat (împreună sau separat)"; ?></label>
                    <input type="text" name="evenimente" id="evenimente" class="mdl-textfield__input" placeholder="<?php echo $limba == "en" ? "Details" : "Detalii"; ?>">
                    <div class="mdl-tooltip" data-mdl-for="evenimente" style="font-size:14px;"><?php echo $limba == "en" ? "Have you ever attended other hackathons or programming contests?" : "Ați mai participat la alte hackathoane sau concursuri de programare?"; ?></div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular" style="width:100%;max-width: 400px;">
                    <label for="cv" class="mdl-textfield__label"><?php echo $limba == "en" ? "Link CV" : "Link CV"; ?><span class="obligatoriu">*</span></label>
                    <input type="url" name="cv" id="cv" class="mdl-textfield__input" placeholder="<?php echo $limba == "en" ? "Link with the CVs of each member" : "Introduceți un link către CV-urile echipei"; ?>">
                    <div class="mdl-tooltip" data-mdl-for="cv" style="font-size:14px;"><?php echo $limba == "en" ? "Enter a valid link that contain the CVs of each member (ex: Google Drive)" : "Introduceți un link valid care să conțină CV-urile fiecărui membru al echipei (ex: Google Drive)"; ?></div>
                </div>
            </div>
        </div>
        <div class = "mdl-grid"> 
            <div class="mdl-cell mdl-cell--12-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular" style="width:100%;max-width: 400px;">
                    <label for="comentariu" class="mdl-textfield__label"><?php echo $limba == "en" ? "Notifications" : "Observații"; ?></label>
                    <input type="text" name="comentariu" id="comentariu" class="mdl-textfield__input" placeholder="<?php echo $limba == "en" ? "Another questions?" : "Doriți să ne mai transmiteți ceva?"; ?>">
                    <div class="mdl-tooltip" data-mdl-for="comentariu" style="font-size:14px;"><?php echo $limba == "en" ? "Other problems or questions" : "Scrieți despre orice problemă sau nelămurire"; ?></div>
                </div>
            </div>
        </div>
        <br>
        <button id="submit_formular" type="submit" class="btn btn-primary" style="margin-bottom: 50px;">Submit</button>

    </form>

</div>
</main>
