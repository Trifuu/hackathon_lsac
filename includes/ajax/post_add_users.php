<?php
ob_start();
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

define("autorizare", 1);

chdir('../../');
define("_ROOT", getcwd() . "/");

include "includes/config.php";

$tip_user = get_user_type($user["categorie"], "users");
$nume = $_POST["nume"];
$prenume = $_POST["prenume"];
$email = $_POST["email"];
$telefon = $_POST["telefon"];
$categorie = $_POST["categorie"];
if ($tip_user != 0 && get_user_type($categorie, "users") == 0) {
    echo getUrl("users", "dashboard", false, ["message" => "Nu aveti drepturi pentru a adauga un user de tip " . $categorie . " !", "status" => "nok"]);
} elseif ($tip_user == 0 || $tip_user == 1) {
    if (check_if_email_exist($email) != null) {
        echo getUrl("users", "dashboard", false, ["message" => "Exista deja un user cu aceasta adresa de email.", "status" => "nok"]);
    } else {
        if ($categorie != "super admin" && $categorie != "admin" && $categorie != "juriu" && $categorie!="participant") {
            echo getUrl("users", "dashboard", false, ["message" => "Categorie incorecta, acestea sunt: super admin, admin, juriu sau participant.", "status" => "nok"]);
        } else {
            global $db;
            try {
                $stmt = $db->prepare("INSERT INTO `user` (`nume`,`prenume`, `parola`, `email`, `tel`, `categorie`) VALUES (:nume, :prenume, 'a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312', :email, :tel,:categ)");
                $stmt->bindParam(':nume', $nume, PDO::PARAM_STR);
                $stmt->bindParam(':prenume', $prenume, PDO::PARAM_STR);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':tel', $telefon, PDO::PARAM_STR);
                $stmt->bindParam(':categ', $categorie, PDO::PARAM_STR);
                $stmt->execute();
            } catch (Exception $ex) {
                die($ex->getMessage());
            }
            log_create_user($nume, $prenume, $email, $categorie);
            echo getUrl("users", "dashboard", false, ["message" => "Userul " . $nume . " " . $prenume . " a fost creat cu succes.", "status" => "ok"]);
        }
    }
} else {
    echo getUrl("users", "dashboard", false, ["message" => "Nu aveti drepturi pentru a adauga un user!", "status" => "nok"]);
}
ob_end_flush();