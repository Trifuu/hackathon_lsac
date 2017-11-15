<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");
?>
<div class="container-fluid standard-container container-page" style="top:20px;">
    <div class="row">
        <div class="col-lg-12 input_change">
            <table id="participanti_table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Stare Echipa</th>
                        <th>Echipa</th>
                        <th>Data inscriere</th>
                        <th>Link CV</th>
                        <th>Capitan</th>
                        <th>Actiuni</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($participanti as $row) {
                        echo "<tr>";
                        echo "<td title='" . htmlspecialchars($row["user_stare_change"], ENT_QUOTES) . "' style='width:120px;background-color:" . traducere_stare($row["stare_echipa"], true) . "'> " . traducere_stare($row["stare_echipa"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["echipa"], ENT_QUOTES) . "</td>";
                        echo "<td>" . date('d-M-Y H:i:s', htmlspecialchars($row["data_inscriere"], ENT_QUOTES)) . "</td>";
                        echo "<td><a target='_blank' href='" . htmlspecialchars($row["link_cv"], ENT_QUOTES) . "' class='btn btn-info btn-sm link_cv'>link</a>";
                        if ($user_type == 2 || $user_type == 0) {
                            echo " <a href='#' data-id='" . htmlspecialchars($row["id"], ENT_QUOTES) . "' class='btn btn-sm btn-success edit_link' title='Editeaza link-ul pentru CV al echipei.'> Edit</a>";
                        }
                        echo "</td>";
                        echo "<td>" . htmlspecialchars($row["nume1"], ENT_QUOTES) . " " . htmlspecialchars($row["prenume1"], ENT_QUOTES) . "</td>";
                        echo "<td>";
                        if ($user_type < 2) {
                            echo "<a href='#' data-id='" . htmlspecialchars($row["id"], ENT_QUOTES) . "' class='btn btn-sm btn-success accepta' title='Accepta echipa care va merge mai departe.'> Accepta</a> ";
                            echo "<a href='#' data-id='" . htmlspecialchars($row["id"], ENT_QUOTES) . "' class='btn btn-danger btn-sm respinge' title='Echipa respinsa nu va merge mai departe.'>Respinge</a> ";
                            echo "<a href='#' data-id='" . htmlspecialchars($row["id"], ENT_QUOTES) . "' class='btn btn-warning btn-sm hold' title='Echipa nu este respinsa nici acceptata.'>Hold</a> ";
                        }
                        if ($user_type == 0) {
                            echo "<a href='#' data-id='" . htmlspecialchars($row["id"], ENT_QUOTES) . "' class='btn btn-danger btn-sm sterge' title='Delete echipa.'>Sterge</a> ";
                        }
                        echo "<a data-id='" . htmlspecialchars($row["id"], ENT_QUOTES) . "' class='btn btn-info btn-sm deschide' title='Detalii despre toti membri echipei.'>Detalii</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- The modal -->
    <div class="modal fade" id="modal_comentariu" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalLabel">Comentariu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="continut_comentariu" style="word-wrap: break-word;">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_limbaje" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalLabel">Limbaje</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="continut_limbaje" style="word-wrap: break-word;">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_evenimente" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalLabel">Evenimente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="continut_evenimente" style="word-wrap: break-word;">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>var participanti =<?php echo json_encode($participanti); ?>;</script>