<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */


# -- start output buffer
ob_start();

define("_ROOT", getcwd() . "/");
define("autorizare", 1);

require _ROOT . "includes/config.php";

$page = isset($_GET["page"]) ? htmlspecialchars(strip_tags($_GET["page"]), ENT_QUOTES) : "home";
$view = isset($_GET["view"]) ? htmlspecialchars(strip_tags($_GET["view"]), ENT_QUOTES) : "dashboard";

$content = null;

$js = [];
$css = [];
if ($user == null && ($page == "users" || $page == "participanti")) {
    $page = "home";
    $view = "dashboard";
}

if (get_user_type($user["categorie"], "users") == 3 && ($page == "users" || $page == "participanti") && $view == "dashboard") {
    $page = "detalii";
}

if (get_user_type($user["categorie"], "users") == 2 && ($page == "users" || $page == "detalii") && $view == "dashboard") {
    $page = "participanti";
}
if ($user == null && ($page == "users" || $page == "participanti" || $page == "detalii")) {
    $page = "home";
    $view = "dashboard";
}
//global $db;
//try{
//    $stmt = $db->prepare("CREATE TABLE `hack`.detalii ( 
//    `id` INT NOT NULL AUTO_INCREMENT , 
//    `id_echipa` INT NOT NULL , 
//    `tricou1` VARCHAR(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , 
//    `tricou2` VARCHAR(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , 
//    `tricou3` VARCHAR(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , 
//    `vegetarieni` VARCHAR(150) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL , 
//    `vegani` VARCHAR(150) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL , 
//    `preferinte` VARCHAR(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL , 
//    `observatii` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , 
//    `laptop` INT NOT NULL , 
//    `unitate` INT NOT NULL , 
//    `monitor` INT NOT NULL , 
//    `echipamente` TEXT CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL , 
//    `mesaj` TEXT CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL , 
//
//    PRIMARY KEY (`id`)
//) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;");
//
//$stmt->execute();
//} catch (Exception $ex) {
//    die($ex->getMessage());
//}

//update_detalii_echipa(1,"K","S","S","1","1","1","sfd",1,2,2,"sdfs","sdfds");
//var_dump_custom(get_detalii());
//$total = get();
//for ($i = 0; $i < count($total); $i++) {
//    global $db;
//    try {
//        $stmt = $db->prepare("INSERT INTO `user` (`nume`,`prenume`, `parola`, `email`, `tel`, `categorie`) VALUES (:nume, :prenume, 'a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312', :email, :tel,'participant')");
//        $stmt->bindParam(':nume', $total[$i]["nume1"], PDO::PARAM_STR);
//        $stmt->bindParam(':prenume', $total[$i]["prenume1"], PDO::PARAM_STR);
//        $stmt->bindParam(':email', $total[$i]["email1"], PDO::PARAM_STR);
//        $stmt->bindParam(':tel', $total[$i]["telefon1"], PDO::PARAM_STR);
//        $stmt->execute();
//    } catch (Exception $ex) {
//        die($ex->getMessage());
//    }
//}

switch ($page):
    case "home":
        require_once _ROOT_CONTENT . "home/controller.php";
        break;
    case "users":
        require_once _ROOT_CONTENT . "users/controller.php";
        break;
    case "participanti":
        require_once _ROOT_CONTENT . "participanti/controller.php";
        break;
    case "formular":
        require_once _ROOT_CONTENT . "formular/controller.php";
        break;
    case "login":
        require_once _ROOT_CONTENT . "login/controller.php";
        break;
    case "detalii":
        require_once _ROOT_CONTENT . "detalii/controller.php";
        break;
    case "cerinte":
        require_once _ROOT_CONTENT . "cerinte/controller.php";
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        $content = _ROOT_CONTENT . "404.php";
        break;
endswitch;

require_once _ROOT_CONTENT . "template.php";

# -- end output buffer
ob_end_flush();
