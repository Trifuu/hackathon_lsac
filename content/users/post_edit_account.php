<?php
/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");


$content = _ROOT_CONTENT . $page . "/default.php";


if (!isset($_POST["email"]) || !isset($_POST["nume"]) || !isset($_POST["id"])) {
        die("POST fields missing");
}

$title_app_title = "Editare in curs...";


$email = $_POST["email"];
$nume = $_POST["nume"];
$prenume = $_POST["prenume"];
$id = $_POST["id"];
$tel = isset($_POST["tel"]) ? strip_tags($_POST["tel"]) : "";

if (strlen($nume) < 1 || !filter_var($email, FILTER_VALIDATE_EMAIL) || !is_numeric($id)) {
        die("Incorrect data");
}


if (get_email($email) != null && $email != $user["email"]) {
        redirect(getUrl("users", "edit", false, ["message" => "Adresa de email $email exista deja.", "status" => "nok"]));
}

if ($user["id"] == $id) {
        try {
                $stmt = $db->prepare("update user set nume = :nume,prenume= :prenume, email = :email, tel = :tel where id = :id");
                $stmt->bindParam(":nume", $nume, PDO::PARAM_STR, 64);
                $stmt->bindParam(":prenume", $prenume, PDO::PARAM_STR, 64);
                $stmt->bindParam(":email", $email, PDO::PARAM_STR, 64);
                $stmt->bindParam(":tel", $tel, PDO::PARAM_STR, 15);
                $stmt->bindParam(":id", $user["id"], PDO::PARAM_INT);
                $stmt->execute();
        } catch (PDOException $e) {
                die("A aparut o eroare la modificarea detelor personale.");
        }
} else {
        
}

redirect(getUrl("users", "edit", false, ["message" => "Cont modificat cu succes", "status" => "ok"]));
