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
global $db;
$id_user = $user["id"];
$multiple = $_POST["multiple"];
$tip_user = get_user_type($user["categorie"], "users");
if ($tip_user == 0 || $tip_user == 1) {
    if ($multiple == "true") {
        $id = $_POST["id"];
        for ($i = 0; $i < count($id); $i++) {
            $duser = get_user($id[$i]);
            if(($tip_user!=0 && get_user_type($duser["categorie"], "users")==0) || $id[$i] == 3) {
                //nu se sterg utilizatori pentru care nu are acces
            } else {
                if ($id[$i] != $id_user) {
                    try {
                        $stmt = $db->prepare("delete from user where id=:id");
                        $stmt->bindParam(':id', $id[$i], PDO::PARAM_INT);
                        $stmt->execute();
                    } catch (Exception $ex) {
                        die($ex->getMessage());
                    }
                    log_delete_user($id[$i], $duser["categorie"]);
                }
            }
        }
        echo getUrl("users", "dashboard", false, ["message" => (count($id) == 1 ? "Userul a fost sters" : "Userii au fost stersi") . " cu succes.", "status" => "ok"]);
    } else {
        $id = $_POST["id"];
        $duser = get_user($id);
        if (($tip_user != 0 && get_user_type($duser["categorie"], "users") == 0) || $id == 3) {
            echo getUrl("users", "dashboard", false, ["message" => "Nu aveti drepturi pentru a sterge un utilizator din categoria " . $duser["categorie"] . "!", "status" => "nok"]);
        } else {
            if ($id != $id_user) {
                try {
                    $stmt = $db->prepare("delete from user where id=:id");
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                } catch (Exception $ex) {
                    die($ex->getMessage());
                }
                log_delete_user($id, $duser["categorie"]);
                echo getUrl("users", "dashboard", false, ["message" => "Userul " . $duser["nume"] . " " . $duser["prenume"] . " a fost sters cu succes.", "status" => "ok"]);
            } else {
                echo getUrl("users", "dashboard", false, ["message" => "Nu poti sterge user-ul " . $duser["nume"] . " " . $duser["prenume"] . " a fost creat cu succes", "status" => "nok"]);
            }
        }
    }
} else {
    echo getUrl("users", "dashboard", false, ["message" => "Nu aveti drepturi pentru a sterge utilizatori!", "status" => "nok"]);
}
ob_end_flush();