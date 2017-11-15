<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */
ob_start();
define("autorizare", 1);

chdir('../../');
define("_ROOT", getcwd() . "/");

include "includes/config.php";

$col = $_POST["col"];
$id = $_POST["id"];
$val = $_POST["val"];
$user2 = get_user($id);
$tip_user = get_user_type($user["categorie"], "users");
global $db;
if ($tip_user == 0 || $tip_user == 1) {
    if (($tip_user != 0 && get_user_type($user2["categorie"], "users") == 0) || $id == 3) {
        echo getUrl("users", "dashboard", false, ["message" => "Nu aveti drepturi pentru a edita user-ul " . $user2["nume"] . " " . $user2["prenume"] . ".", "status" => "nok"]);
    } else {
        if ($col=="email" && get_email($val) != null && $val!=$user2["email"]) {
            echo getUrl("users", "dashboard", false, ["message" => "Exista deja un user cu aceasta adresa de email.", "status" => "nok"]);
        } else {
            if ($col == "nume" || $col == "tel" || $col == "email" || $col == "categorie" || $col == "prenume") {
                try {
                    $stmt = $db->prepare("update user set $col=:col where id=:id");
                    $stmt->bindParam(':col', $val, PDO::PARAM_STR);
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                } catch (Exception $ex) {
                    die($ex->getMessage());
                }
                log_update_user($id, $col, $user2[$val], $val);
            } else {
                echo getUrl("users", "dashboard", false, ["message" => "Nu se poate edita coloana " . $col . ".", "status" => "nok"]);
            }
        }
    }
} else {
    echo getUrl("users", "dashboard", false, ["message" => "Nu aveti dreptul pentru a edita utilizatori.", "status" => "nok"]);
}
ob_end_flush();