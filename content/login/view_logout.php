<?php
/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");


$content = _ROOT_CONTENT . $page . "/default.php";

 
try {
        $stmt = $db->prepare("update user set sid = '' where id = :id");
        $stmt->bindParam(":id", $user["id"], PDO::PARAM_INT);
        $stmt->execute();
        
        
} catch (PDOException $e) {
        die($e->getMessage());
}
redirect(_SITE_BASE);
