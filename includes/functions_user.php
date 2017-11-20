<?php

/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");

function get_logged_in_user() {
    global $db, $sid;
    try {
        $stmt = $db->prepare("select * from user where sid = :sid");
        $stmt->bindParam(':sid', $sid, PDO::PARAM_STR, 64);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    return $user === false ? null : $user;
}

function get_email($id) {
    global $db;
    try {
        $stmt = $db->prepare("select email from user where id=:id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $email = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $email==false? null:$email;
}
function check_if_email_exist($email) {
    global $db;
    try {
        $stmt = $db->prepare("select email from user where email=:email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $email = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $email==false? null:$email;
}
function get_users() {
    global $db;
    try {
        $stmt = $db->prepare("select * from user");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $users == false ? null : $users;
}

function get_user($id) {
    global $db;
    try {
        $stmt = $db->prepare("select * from user where id=:id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    return $user;
}
function get_user_type($categorie,$page){
    if($categorie=="super admin"){
        return 0;
    }
    if($categorie=="admin"){
        if($page=="users"){
            return 1;
        }
        if($page=="participanti"){
            return 1;
        }
    }
    if($categorie=="juriu"){
        if($page=="users"){
            return 2;
        }
        if($page=="participanti"){
            return 1;
        }
    }
    return 3;
}
