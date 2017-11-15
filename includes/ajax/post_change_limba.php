<?php

/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */
session_start();

if(!isset($_POST["limba"])){
    die("Post parameters missing!");
}

$_SESSION["limba"]=$_POST["limba"];