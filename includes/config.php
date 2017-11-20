<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");

session_start();

define("_ROOT_CONTENT", _ROOT . "content/");
define("_ROOT_INCLUDES", _ROOT . "includes/");
define("_ROOT_ASSETS", _ROOT . "assets/");

require_once _ROOT_INCLUDES . "functions.php";
require_once _ROOT_INCLUDES . "functions_user.php";
require_once _ROOT_INCLUDES . "functions_participanti.php";
require_once _ROOT_INCLUDES . "functions_detalii.php";



$title_app_name = "HACK IT ALL";
$title_app_separator = " - ";
$title_app_title = "Default Title";
$site = "local";
if ($site == "local") {
    define("_SITE_BASE", "http://localhost/hack2/");

    define("_SITE_CSS", _SITE_BASE . "assets/css/");
    define("_SITE_JS", _SITE_BASE . "assets/js/");

    # -- MySQL DB intialisation
    try {
        $db = new PDO("mysql:host=localhost;dbname=hack", "root", "nan587");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        die("A aparut o eroare (verifica user/parola/host pentru MySQL):<br>" . $ex->getMessage());
    }
} else if ($site="test") {
    define("_SITE_BASE", "http://testhack.lsacbucuresti.ro/");

    define("_SITE_CSS", _SITE_BASE . "assets/css/");
    define("_SITE_JS", _SITE_BASE . "assets/js/");

    # -- MySQL DB intialisation
    try {
        $db = new PDO("mysql:host=localhost;dbname=lsacbucu_test", "lsacbucu_mihaita", "zaq12wsx?");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        die("A aparut o eroare (verifica user/parola/host pentru MySQL):<br>" . $ex->getMessage());
    }
} else {
    define("_SITE_BASE", "http://hack.lsacbucuresti.ro/");

    define("_SITE_CSS", _SITE_BASE . "assets/css/");
    define("_SITE_JS", _SITE_BASE . "assets/js/");

    # -- MySQL DB intialisation
    try {
        $db = new PDO("mysql:host=localhost;dbname=lsacbucu_test", "lsacbucu_mihaita", "zaq12wsx?");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        die("A aparut o eroare (verifica user/parola/host pentru MySQL):<br>" . $ex->getMessage());
    }
}

#stabilirea limbii paginilor
if (!isset($_SESSION["limba"])) {
    $_SESSION["limba"] = "en";
}
$limba = $_SESSION["limba"];

# -- variable declare
$sid = session_id();
$sha256_session_id = hash("sha256", $sid);
$user = get_logged_in_user();
