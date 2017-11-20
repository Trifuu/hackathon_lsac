<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");
?>
<div class="container-fluid standard-container container-page row" style="top:0px;height:100%;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 30px;margin-top: 10px;text-align: center;">

        <div style="text-align: left;">
            <select class="selectpicker" id="lista_select">
                <?php
                for ($i = 0; $i < count($echipe); $i++) {
                    echo "<option value='".$i."'>" . ($i+1) . ". " . $echipe[$i]["echipa"] . "</option>";
                }
                ?>
            </select>
           
            <h4 style="">Marime tricouri:</h4>
            <div style="margin-left: 50px;">
                &bull; Membru 1<span style="font-size: 20px;">
                    <input type="radio" checked="">
                    <p id="membru1" style="display: inline;"><?php echo isset($detalii_echipe[0]["tricou1"])? $detalii_echipe[0]["tricou1"]:""; ?></p>
                </span><br>
                &bull; Membru 2<span style="font-size: 20px;">
                    <input type="radio" checked="">
                    <p id="membru2" style="display: inline;"><?php echo isset($detalii_echipe[0]["tricou2"])? $detalii_echipe[0]["tricou2"]:""; ?></p>
                </span><br>
                &bull; Membru 3<span style="font-size: 20px;">
                    <input type="radio" checked="">
                    <p id="membru3" style="display: inline;"><?php echo isset($detalii_echipe[0]["tricou3"])? $detalii_echipe[0]["tricou3"]:""; ?></p>
                </span>
            </div>
            <h4>Există preferințe legate de mâncare?</h4>
            <table style="margin-left: 50px;">
                <tbody>
                    <tr>
                        <td>&bull; Vegetarieni</td>
                        <td><input value="<?php echo isset($detalii_echipe[0]["vegetarieni"])? $detalii_echipe[0]["vegetarieni"]:""; ?>"  id="vegetarieni" type="text" style="max-width:35px;"></td>
                    </tr>
                    <tr>
                        <td>&bull; Vegani</td>
                        <td><input value="<?php echo isset($detalii_echipe[0]["vegani"])? $detalii_echipe[0]["vegani"]:""; ?>"  id="vegani" type="text" style="max-width:35px;"></td>
                    </tr>
                    <tr>
                        <td>&bull; Nu există preferințe</td>
                        <td><input value="<?php echo isset($detalii_echipe[0]["preferinte"])? $detalii_echipe[0]["preferinte"]:""; ?>"  id="preferinte" type="text" style="max-width:35px;"></td>
                    </tr>
                    <tr>
                        <td>&bull; Alte observații</td>
                        <td><input value="<?php echo isset($detalii_echipe[0]["observatii"])? $detalii_echipe[0]["observatii"]:""; ?>"  id="observatii" type="text" style="max-width:200px;"></td>
                    </tr>
                </tbody>
            </table>
            <h4>Cu ce echipamente veți veni?</h4>
            <div style="margin-left: 50px;">
                <table>
                    <tbody>
                        <tr>
                            <td>&bull; Laptop</td>
                            <td><input value="<?php echo isset($detalii_echipe[0]["laptop"])? $detalii_echipe[0]["laptop"]:""; ?>"  id="laptop" type="text" style="max-width:35px;"></td>
                        </tr>
                        <tr>
                            <td>&bull; Unitate PC</td>
                            <td><input value="<?php echo isset($detalii_echipe[0]["unitate"])? $detalii_echipe[0]["unitate"]:""; ?>"  id="unitate" type="text" style="max-width:35px;"></td>
                        </tr>
                        <tr>
                            <td>&bull; Monitor</td>
                            <td><input value="<?php echo isset($detalii_echipe[0]["monitor"])? $detalii_echipe[0]["monitor"]:""; ?>"  id="monitor" type="text" style="max-width:35px;"></td>
                        </tr>
                        <tr>
                            <td>&bull; Alte echipamente</td>
                            <td colspan="3">
                                <input value="<?php echo isset($detalii_echipe[0]["echipamente"])? $detalii_echipe[0]["echipamente"]:""; ?>"  id="echipamente" type="text">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h4>Doriți să ne mai transmiteți ceva?</h4>
            <div style="max-width: 428px;">
                <input value="<?php echo isset($detalii_echipe[0]["mesaj"])? $detalii_echipe[0]["mesaj"]:""; ?>"  id="mesaj" type="text" style="width:100%;">
            </div>
        </div>
    </div>

</div>
<script>var echipe =<?php echo json_encode($detalii_echipe); ?>;</script>