<?php

/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");

switch ($view):
    case "about":
        require_once _ROOT_CONTENT . $page . "/view_about.php";
        break;
    case "contact":
        require_once _ROOT_CONTENT . $page . "/view_contact.php";
        break;
    case "dashboard":
        require_once _ROOT_CONTENT . $page . "/view_dashboard.php";
        break;
    case "faq":
        require_once _ROOT_CONTENT . $page . "/view_faq.php";
        break;
    case "partners":
        require_once _ROOT_CONTENT . $page . "/view_partners.php";
        break;
    case "email":
        require_once _ROOT_CONTENT . $page . "/post_send_email.php";
        break;
    case "cronometru":
        require_once _ROOT_CONTENT . $page . "/view_cronometru.php";
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        $title_app_title = "404 - Pagina Inexistenta";
        $content = _ROOT_CONTENT . "404.php";
        break;
endswitch;
