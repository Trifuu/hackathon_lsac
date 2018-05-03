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
                    <tr>
                        <?php
                        echo isset($users[0]["nr1"])? ("<th>".$nume[0]."</th>"):"";
                        echo isset($users[0]["nr2"])? ("<th>".$nume[1]."</th>"):"";
                        echo isset($users[0]["nr3"])? ("<th>".$nume[2]."</th>"):"";
                        echo isset($users[0]["nr4"])? ("<th>".$nume[3]."</th>"):"";
                        echo isset($users[0]["nr5"])? ("<th>".$nume[4]."</th>"):"";
                        echo isset($users[0]["nr6"])? ("<th>".$nume[5]."</th>"):"";
                        echo isset($users[0]["nr7"])? ("<th>".$nume[6]."</th>"):"";
                        echo isset($users[0]["nr8"])? ("<th>".$nume[7]."</th>"):"";
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $row) {
                        echo "<tr>";
                            echo isset($users[0]["nr1"])? ("<td>" . htmlspecialchars($row["nr1"], ENT_QUOTES) . "</td>"):"";
                            echo isset($users[0]["nr2"])? ("<td>" . htmlspecialchars($row["nr2"], ENT_QUOTES) . "</td>"):"";
                            echo isset($users[0]["nr3"])? ("<td>" . htmlspecialchars($row["nr3"], ENT_QUOTES) . "</td>"):"";
                            echo isset($users[0]["nr4"])? ("<td>" . htmlspecialchars($row["nr4"], ENT_QUOTES) . "</td>"):"";
                            echo isset($users[0]["nr5"])? ("<td>" . htmlspecialchars($row["nr5"], ENT_QUOTES) . "</td>"):"";
                            echo isset($users[0]["nr6"])? ("<td>" . htmlspecialchars($row["nr6"], ENT_QUOTES) . "</td>"):"";
                            echo isset($users[0]["nr7"])? ("<td>" . htmlspecialchars($row["nr7"], ENT_QUOTES) . "</td>"):"";
                            echo isset($users[0]["nr8"])? ("<td>" . htmlspecialchars($row["nr8"], ENT_QUOTES) . "</td>"):"";
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
