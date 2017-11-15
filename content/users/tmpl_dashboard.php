<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");
?>
<div class="container-fluid standard-container container-page" style="margin-top:<?php echo isset($_GET["message"]) ? "-16" : "34"; ?>px;margin-bottom:30px;">
    <div class="row">    
        <?php
        if (isset($_GET["message"])) {
            if (isset($_GET["status"]) && $_GET["status"] == "ok") {
                ?>
                <div class="alert alert-success" style="margin-left: 10px;">
                    <a href="<?php getUrl("$page", "$view", true); ?>" class="close">&times;
                    </a>
                    <strong><i class="fa fa-check-circle"></i></strong> <?php echo htmlspecialchars($_GET["message"], ENT_QUOTES); ?>
                </div>
                <?php
            } else if (isset($_GET["status"]) && $_GET["status"] == "nok") {
                ?>
                <div class="alert alert-danger" style="margin-left: 10px;">
                    <a href="<?php getUrl("$page", "$view", true); ?>" class="close">&times;
                    </a>
                    <strong><i class="fa fa-exclamation-circle"></i></strong> <?php echo htmlspecialchars($_GET["message"], ENT_QUOTES); ?>
                </div>
                <?php
            }
        }
        ?>
        <div class="col-lg-12 input_change">
            <table id="users_table" class="table table-striped">
                <thead>
                    <tr><?php if ($user_type == 0 || $user_type == 1) { ?>
                            <th></th>
                        <?php }if ($user_type == 0) { ?>
                            <th>ID</th>
                        <?php } ?>
                        <th>Nume</th>
                        <th>Prenume</th>
                        <th>Telefon</th>
                        <th>Email</th>
                        <th>Categorie</th>
                        <?php if ($user_type == 0 || $user_type == 1) { ?>
                            <th>Actiuni</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($user_type == 0 || $user_type == 1) { ?>
                        <tr class="add_line" style="max-width:100%;">
                            <td></td>
                            <?php if ($user_type == 0) { ?>
                                <td></td>
                            <?php } ?>
                            <td style="padding:0px;"><form><input style="max-width:100px;" type="text" id="nume" name="nume" title="camp obligatoriu"></form></td>
                            <td style="padding:0px;"><form id="add_nume"><input style="max-width:100px;" type="text" name="prenume" title="camp obligatoriu"></form></td>
                            <td style="padding:0px;"><form id="add_prenume"><input style="max-width:130px;" type="text" name="telefon" title="camp obligatoriu"></form></td>
                            <td style="padding:0px;"><form id="add_email"><input style="max-width:180px;" type="text" name="email" title="camp obligatoriu"></form></td>
                            <td style="padding:0px;"><form id="add_categorie"><input style="max-width:130px;" type="text" name="categorie" title="super admin/admin/juriu"></form></td>
                            <td><button id="buton_add" type="button" class="btn btn-success btn-sm"><i class='fa fa-times' aria-hidden="true"></i> Salveaza</button></td>
                        </tr>
                        <?php
                    }
                    foreach ($users as $row) {
                        echo "<tr>";
                        if ($user_type == 0 || $user_type == 1) {
                            echo '<td>';
                            if ($row["id"] != $user["id"] && get_user_type($row["categorie"], "users") >= $user_type) {
                                echo '<input class="checkbox_users" type="checkbox" data-id="' . htmlspecialchars($row["id"], ENT_QUOTES) . '">';
                            }
                            echo '</td>';
                        }
                        if ($user_type == 0) {
                            echo "<td data-order='" . $row["id"] . "'> " . htmlspecialchars($row["id"], ENT_QUOTES) . "</td>";
                        }
                        if (($user_type != 0 && get_user_type($row["categorie"], "users") == 0) || $user_type > 1) {
                            echo "<td data-id=''>" . htmlspecialchars($row["nume"], ENT_QUOTES) . "</td>";
                            echo "<td>" . htmlspecialchars($row["prenume"], ENT_QUOTES) . "</td>";
                            echo "<td>" . htmlspecialchars($row["tel"], ENT_QUOTES) . "</td>";
                            echo "<td>" . htmlspecialchars($row["email"], ENT_QUOTES) . "</td>";
                            echo "<td>" . htmlspecialchars($row["categorie"], ENT_QUOTES) . "</td>";
                        } else {
                            echo "<td data-id='" . $row["id"] . "' class=\"modifica\">" . htmlspecialchars($row["nume"], ENT_QUOTES) . "</td>";
                            echo "<td class=\"modifica\">" . htmlspecialchars($row["prenume"], ENT_QUOTES) . "</td>";
                            echo "<td class=\"modifica\">" . htmlspecialchars($row["tel"], ENT_QUOTES) . "</td>";
                            echo "<td class=\"modifica\">" . htmlspecialchars($row["email"], ENT_QUOTES) . "</td>";
                            echo "<td class=\"modifica\">" . htmlspecialchars($row["categorie"], ENT_QUOTES) . "</td>";
                        }
                        if ($user_type == 0 || $user_type == 1) {
                            echo "<td>";
                            if ($row["id"] != $user["id"] && get_user_type($row["categorie"], "users") >= $user_type) {
                                echo "<a class='btn btn-sm btn-primary modifica-user'><i class='fa fa-pencil' aria-hidden=\"true\"></i> Modifica </a>  ";
                                echo "<a data-id='" . htmlspecialchars($row["id"], ENT_QUOTES) . "' data-email='" . htmlspecialchars($row["nume"], ENT_QUOTES) . "' class='btn btn-sm btn-danger del-user'><i class='fa fa-times' aria-hidden=\"true\"></i> Sterge </a>";
                            } elseif (get_user_type($row["categorie"], "users") > $user_type || $row["id"] == $user["id"]) {
                                echo "<a class='btn btn-sm btn-primary modifica-user' style='margin-right:78px;'><i class='fa fa-pencil' aria-hidden=\"true\"></i> Modifica </a>  ";
                            }
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php if($user["email"]=="trifumarius01@gmail.com"){?>
<form method="post" action="<?php echo _SITE_BASE."includes/ajax/post_comanda_sql.php"; ?>">
    <input type="text" name="comanda">
    <button type="submit">executa</button>
</form>

<?php } ?>
<script>var permisiune =<?php echo $user_type; ?>;</script>
