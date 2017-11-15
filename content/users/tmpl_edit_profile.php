<?php
/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");

?>

<div class="container container-page" style="background:#ecf0f1;">
    <div class="row">
                <div class="col-md-12">
                        <h1 class="page-title">Editeaza profilul</h1>
                </div>
        </div>

        <div class="row">
            <?php if($user["categorie"]!="participant") {?>
                <div class="col-md-6">
                        <h2 class="page-title">Date personale</h2>
                        <form action="<?php getUrl("users", "post_edit_account", true); ?>" method="post" id="edit_account">
                                <input type="hidden" value="<?php echo isset($_GET["id"]) ? htmlspecialchars($_GET["id"], ENT_QUOTES) : htmlspecialchars($user["id"], ENT_QUOTES); ?>" id="id" name="id">
                                <div class="form-group">
                                        <label for="nume"><i class="fa fa-user-circle"></i> Nume</label>
                                        <input type="text" class="form-control input-lg" id="nume" name="nume" placeholder="Nume" value="<?php echo htmlspecialchars($user["nume"], ENT_QUOTES); ?>">
                                </div>
                                <div class="form-group">
                                        <label for="prenume"><i class="fa fa-user-circle"></i> Prenume</label>
                                        <input type="text" class="form-control input-lg" id="prenume" name="prenume" placeholder="Prenume" value="<?php echo htmlspecialchars($user["prenume"], ENT_QUOTES); ?>">
                                </div>
                                <div class="form-group">
                                        <label for="email"><i class="fa fa-envelope"></i> E-mail</label>
                                        <input type="text" class="form-control input-lg" id="email" name="email" placeholder="E-mail" value="<?php echo htmlspecialchars($user["email"], ENT_QUOTES); ?>">
                                </div>
                                <div class="form-group">
                                        <label for="tel"><i class="fa fa-phone"></i> Telefon</label>
                                        <input type="text" class="form-control input-lg" id="tel" name="tel" placeholder="Telefon" value="<?php echo htmlspecialchars($user["tel"], ENT_QUOTES); ?>">
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-md-12 col-lg-12">
                                                <button type="submit" class="btn btn-success"><i class="fa fa-send"></i>  Salveaza</button>
                                        </div>
                                </div>
                        </form>
                </div>
            <?php } ?>
                <div class="col-md-6">
                        <h2 class="page-title">Schimba parola</h2>
                        <form action="<?php getUrl("users", "post_edit_password", true); ?>" method="post" id="edit_password">
                                <input type="hidden" value="<?php echo isset($_GET["id"]) ? htmlspecialchars($_GET["id"], ENT_QUOTES) : htmlspecialchars($user["id"], ENT_QUOTES); ?>" id="id" name="id">
                                <div class="form-group">
                                        <label for="parola"><i class="fa fa-lock"></i> Introdu o parola noua</label>
                                        <input type="password" class="form-control input-lg" id="parola" name="parola" placeholder="Parola">
                                </div>
                                <div class="form-group">
                                        <label for="parola_noua"><i class="fa fa-lock"></i> Re-introdu parola noua</label>
                                        <input type="password" class="form-control input-lg" id="parola_noua" name="parola_noua" placeholder="Re-introdu Parola">
                                </div>
                                <div class="form-group">
                                        <label for="parola_veche"><i class="fa fa-lock"></i> Introdu parola actuala</label>
                                        <input type="password" class="form-control input-lg" id="parola_veche" name="parola_veche" placeholder="Parola Actuala">
                                </div>


                                <div class="row">
                                        <div class="col-xs-12 col-md-12 col-lg-12" style="margin-top: 12px;">
                                                <button type="submit" class="btn btn-success"><i class="fa fa-send"></i>  Schimba parola</button>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>

</div>
