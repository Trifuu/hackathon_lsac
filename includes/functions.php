<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");

function getUrl($page, $view, $echo = false, $query = []) {
    //$curl = _SITE_BASE . "$page/$view/";
    $curl = _SITE_BASE . "?page=$page&view=$view";
    if (count($query)) {
        $cnt = 0;
        foreach ($query as $key => $value) {
            $curl .= ( ++$cnt == 1 ? "&" : "&") . "$key=" . urlencode($value);
        }
    }
    if ($echo) {
        echo $curl;
    } else {
        return $curl;
    }
}

function redirect($url) {
    $url = str_replace("&amp;", "&", urldecode($url));
    @header("Location: " . $url);
    die("<meta http-equiv='refresh' content='0;url=" . $url . "' /><a href='$url'>$url</a>");
}

function var_dump_custom($output) {
    echo "<pre>";
    var_dump($output);
    echo "</pre>";
}

function nli_pages() {
    global $page, $view, $user;
    return $user == null && !(($page == "login") && ($view == "login-action" || $view == "logout")) ? true : false;
}

function log_create_user($nume, $prenume, $email, $categorie) {
    $user = get_logged_in_user();
    $file = fopen(_ROOT . "log/create.txt", "a");
    fwrite($file, "Data: " . date('d/m/Y h:i:s', time()) . "\n" .
            "User: " . $user["nume"] . " " . $user["prenume"] . " " . $user["email"] . " " . $user["categorie"] . "\n" .
            "Create: " . $nume . " " . $prenume . " " . $email . " " . $categorie . "\n");
    fclose($file);
}

function log_update_user($id, $camp, $val_veche, $val_noua) {
    $user = get_logged_in_user();
    $file = fopen(_ROOT . "log/update.txt", "a");
    fwrite($file, "Data: " . date('d/m/Y h:i:s a', time()) . "\n" .
            "User: " . $user["nume"] . " " . $user["prenume"] . " " . $user["email"] . " " . $user["categorie"] . "\n" .
            "Update: " . $id . ", camp: " . $camp . " " . $val_veche . "->" . $val_noua . "\n");
    fclose($file);
}

function log_delete_user($id, $categorie) {
    $user = get_logged_in_user();
    $file = fopen(_ROOT . "log/delete.txt", "a");
    fwrite($file, "Data: " . date('d/m/Y h:i:s a', time()) . "\n" .
            "User: " . $user["nume"] . " " . $user["prenume"] . " " . $user["email"] . " " . $user["categorie"] . "\n" .
            "Delete: " . $id . ", categorie: " . $categorie . "\n");
    fclose($file);
}

function log_stare_participant($id, $stare_veche, $stare_noua) {
    $user = get_logged_in_user();
    $file = fopen(_ROOT . "log/stare.txt", "a");
    fwrite($file, "Data: " . date('d/m/Y h:i:s a', time()) . "\n" .
            "User: " . $user["nume"] . " " . $user["prenume"] . " " . $user["email"] . " " . $user["categorie"] . "\n" .
            "ID: " . $id . ", stare: " . $stare_veche . "->" . $stare_noua . "\n");
    fclose($file);
}

function log_user_login() {
    $user = get_logged_in_user();
    $file = fopen(_ROOT . "log/login.txt", "a");
    fwrite($file, "Data: " . date('d/m/Y h:i:s a', time()) . "\n" .
            "User: " . $user["nume"] . " " . $user["prenume"] . " " . $user["email"] . " " . $user["categorie"] . "\n");
    fclose($file);
}

function create_excel() {
    require_once _ROOT_INCLUDES . "Class/PHPExcel.php";

    $excel = new PHPExcel();
    $excel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Hello')
            ->setCellValue('B1', 'World');
    
//    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//    header('Content-Disposition: attachment; filename="test.xlsx"');
//    header('Cache-Control: max-age=0');
    $file = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
//    var_dump_custom($file);
$file->save('test.xls');
}
?>