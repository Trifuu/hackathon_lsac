<?php
/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");


switch ($view):
        case "login-action":
                require_once _ROOT_CONTENT . $page . "/view_login_process.php";
                break;
        case "login":
                require_once _ROOT_CONTENT . $page . "/view_login.php";
                break;
        case "logout":
                require_once _ROOT_CONTENT . $page . "/view_logout.php";
                break;
        default:
                header("HTTP/1.0 404 Not Found");
                $title_app_title = "404 - Pagina Inexistenta";
                $content = _ROOT_CONTENT . "404.php";
                break;
endswitch;
