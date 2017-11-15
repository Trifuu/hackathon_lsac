<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");
?>
<div class="container-fluid standard-container container-page row" style="top:0px;height:100%;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 30px;margin-top: 30px;text-align: center;">
        <h2><?php echo $echipa["echipa"]; ?></h2>
        <h5>
            <?php // echo traducere_stare($echipa["stare_echipa"]); ?>
            Status:În așteptare
        </h5>
        <h3 style="margin-top: 50px;text-align: left;">
            Problemă propusă: <a target='_blank' href='#' style="pointer-events: none;" class='btn btn-warning btn-sm link_cv'>click</a>
        </h3>
        <h3 style="text-align: left;">
            Timp rămas: <p id="cronometrua" style="display: inline;">48:00:00</p>
        </h3>
        <h6 style="text-align: left;">Perioada de rezolvare a problemei: 16 - 17 noiembrie.</h6>

        <div style="margin-top: 30px;text-align: left;">
            <div style="max-width: 450px;">
                În urma problemei rezolvate și a CV-urilor, există posibilitatea să ne vedem în 
                weekend-ul 25-26 noiembrie. Astfel, dorim să știm câteva lucruri despre tine și 
                echipa ta.
            </div>
            <h4 style="">Marime tricouri:</h4>
            <?php if ($detalii_echipa == null) { ?>
                <div style="margin-left: 50px;">
                    &bull; Membru 1<span style="font-size: 20px;">
                        <input type="radio" checked="" name="membru1" value="S">S
                        <input type="radio" name="membru1" value="M">M
                        <input type="radio" name="membru1" value="L">L
                        <input type="radio" name="membru1" value="XL">XL
                    </span><br>
                    &bull; Membru 2<span style="font-size: 20px;">
                        <input type="radio" checked="" name="membru2" value="S">S
                        <input type="radio" name="membru2" value="M">M
                        <input type="radio" name="membru2" value="L">L
                        <input type="radio" name="membru2" value="XL">XL
                    </span><br>
                    &bull; Membru 3<span style="font-size: 20px;">
                        <input type="radio" checked="" name="membru3" value="S">S
                        <input type="radio" name="membru3" value="M">M
                        <input type="radio" name="membru3" value="L">L
                        <input type="radio" name="membru3" value="XL">XL
                    </span>
                </div>
                <h4>Există preferințe legate de mâncare?</h4>
                <table style="margin-left: 50px;">
                    <tbody>
                        <tr>
                            <td>&bull; Vegetarieni</td>
                            <td><input id="vegetarieni" type="text" style="max-width:35px;"></td>
                        </tr>
                        <tr>
                            <td>&bull; Vegani</td>
                            <td><input id="vegani" type="text" style="max-width:35px;"></td>
                        </tr>
                        <tr>
                            <td>&bull; Nu există preferințe</td>
                            <td><input id="preferinte" type="text" style="max-width:35px;"></td>
                        </tr>
                        <tr>
                            <td>&bull; Alte observații</td>
                            <td><input id="observatii" type="text" style="max-width:200px;"></td>
                        </tr>
                    </tbody>
                </table>
                <h4>Cu ce echipamente veți veni?</h4>
                <div style="margin-left: 50px;">
                    <table>
                        <tbody>
                            <tr>
                                <td>&bull; Membru 1 &nbsp;&nbsp;</td>
                                <td>&nbsp;<input id="laptop1" type="checkbox">Laptop</td>
                                <td>&nbsp;<input id="unitate1" type="checkbox">Unitate PC</td>
                                <td>&nbsp;<input id="monitor1" type="checkbox">Monitor</td>
                            </tr>
                            <tr>
                                <td>&bull; Membru 2 &nbsp;&nbsp;</td>
                                <td>&nbsp;<input id="laptop2" type="checkbox">Laptop</td>
                                <td>&nbsp;<input id="unitate2" type="checkbox">Unitate PC</td>
                                <td>&nbsp;<input id="monitor2" type="checkbox">Monitor</td>
                            </tr>
                            <tr>
                                <td>&bull; Membru 3 &nbsp;&nbsp;</td>
                                <td>&nbsp;<input id="laptop3" type="checkbox">Laptop</td>
                                <td>&nbsp;<input id="unitate3" type="checkbox">Unitate PC</td>
                                <td>&nbsp;<input id="monitor3" type="checkbox">Monitor</td>
                            </tr>
                            <tr>
                                <td>&bull; Alte echipamente</td>
                                <td colspan="3">
                                    <input id="echipamente" type="text">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h4>Doriți să ne mai transmiteți ceva?</h4>
                <div style="max-width: 428px;">
                    <input id="mesaj" type="text" style="width:100%;">
                </div>
            <?php } else { ?>
                <div style="margin-left: 50px;">
                    &bull; Membru 1<span style="font-size: 20px;">
                        <input type="radio" <?php echo $detalii_echipa["tricou1"]=="S"? 'checked=""':""; ?> name="membru1" value="S">S
                        <input type="radio" <?php echo $detalii_echipa["tricou1"]=="M"? 'checked=""':""; ?> name="membru1" value="M">M
                        <input type="radio" <?php echo $detalii_echipa["tricou1"]=="L"? 'checked=""':""; ?> name="membru1" value="L">L
                        <input type="radio" <?php echo $detalii_echipa["tricou1"]=="XL"? 'checked=""':""; ?> name="membru1" value="XL">XL
                    </span><br>
                    &bull; Membru 2<span style="font-size: 20px;">
                        <input type="radio" <?php echo $detalii_echipa["tricou2"]=="S"? 'checked=""':""; ?> checked="" name="membru2" value="S">S
                        <input type="radio" <?php echo $detalii_echipa["tricou2"]=="M"? 'checked=""':""; ?> name="membru2" value="M">M
                        <input type="radio" <?php echo $detalii_echipa["tricou2"]=="L"? 'checked=""':""; ?> name="membru2" value="L">L
                        <input type="radio" <?php echo $detalii_echipa["tricou2"]=="XL"? 'checked=""':""; ?> name="membru2" value="XL">XL
                    </span><br>
                    &bull; Membru 3<span style="font-size: 20px;">
                        <input type="radio" <?php echo $detalii_echipa["tricou3"]=="S"? 'checked=""':""; ?> checked="" name="membru3" value="S">S
                        <input type="radio" <?php echo $detalii_echipa["tricou3"]=="M"? 'checked=""':""; ?> name="membru3" value="M">M
                        <input type="radio" <?php echo $detalii_echipa["tricou3"]=="L"? 'checked=""':""; ?> name="membru3" value="L">L
                        <input type="radio" <?php echo $detalii_echipa["tricou3"]=="XL"? 'checked=""':""; ?> name="membru3" value="XL">XL
                    </span>
                </div>
                <h4>Există preferințe legate de mâncare?</h4>
                <table style="margin-left: 50px;">
                    <tbody>
                        <tr>
                            <td>&bull; Vegetarieni</td>
                            <td><input value="<?php echo $detalii_echipa["vegetarieni"];?>" id="vegetarieni" type="text" style="max-width:35px;"></td>
                        </tr>
                        <tr>
                            <td>&bull; Vegani</td>
                            <td><input value="<?php echo $detalii_echipa["vegani"];?>" id="vegani" type="text" style="max-width:35px;"></td>
                        </tr>
                        <tr>
                            <td>&bull; Nu există preferințe</td>
                            <td><input value="<?php echo $detalii_echipa["preferinte"];?>" id="preferinte" type="text" style="max-width:35px;"></td>
                        </tr>
                        <tr>
                            <td>&bull; Alte observații</td>
                            <td><input value="<?php echo $detalii_echipa["observatii"];?>" id="observatii" type="text" style="max-width:200px;"></td>
                        </tr>
                    </tbody>
                </table>
                <h4>Cu ce echipamente veți veni?</h4>
                <div style="margin-left: 50px;">
                    <table>
                        <tbody>
                            <tr>
                                <td>&bull; Membru 1 &nbsp;&nbsp;</td>
                                <td>&nbsp;<input <?php echo $detalii_echipa["laptop"]>0? 'checked=""':""; ?> id="laptop1" type="checkbox">Laptop</td>
                                <td>&nbsp;<input <?php echo $detalii_echipa["unitate"]>0? 'checked=""':""; ?> id="unitate1" type="checkbox">Unitate PC</td>
                                <td>&nbsp;<input <?php echo $detalii_echipa["monitor"]>0? 'checked=""':""; ?> id="monitor1" type="checkbox">Monitor</td>
                            </tr>
                            <tr>
                                <td>&bull; Membru 2 &nbsp;&nbsp;</td>
                                <td>&nbsp;<input <?php echo $detalii_echipa["laptop"]>1? 'checked=""':""; ?> id="laptop2" type="checkbox">Laptop</td>
                                <td>&nbsp;<input <?php echo $detalii_echipa["unitate"]>1? 'checked=""':""; ?> id="unitate2" type="checkbox">Unitate PC</td>
                                <td>&nbsp;<input <?php echo $detalii_echipa["monitor"]>1? 'checked=""':""; ?> id="monitor2" type="checkbox">Monitor</td>
                            </tr>
                            <tr>
                                <td>&bull; Membru 3 &nbsp;&nbsp;</td>
                                <td>&nbsp;<input <?php echo $detalii_echipa["laptop"]>2? 'checked=""':""; ?> id="laptop3" type="checkbox">Laptop</td>
                                <td>&nbsp;<input <?php echo $detalii_echipa["unitate"]>2? 'checked=""':""; ?> id="unitate3" type="checkbox">Unitate PC</td>
                                <td>&nbsp;<input <?php echo $detalii_echipa["monitor"]>2? 'checked=""':""; ?> id="monitor3" type="checkbox">Monitor</td>
                            </tr>
                            <tr>
                                <td>&bull; Alte echipamente</td>
                                <td colspan="3">
                                    <input value="<?php echo $detalii_echipa["echipamente"];?>" id="echipamente" type="text">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h4>Doriți să ne mai transmiteți ceva?</h4>
                <div style="max-width: 428px;">
                    <input value="<?php echo $detalii_echipa["mesaj"];?>" id="mesaj" type="text" style="width:100%;">
                </div>
            <?php } ?>
        </div>
    </div>
    <div>
        <button id="detalii_submit" type="submit" class="btn btn-primary" style="margin-bottom: 50px;margin-top: 50px;margin-left: 180px;">Submit</button>
    </div>

</div>
<script>var id_echipa =<?php echo $echipa["id"]; ?>;</script>