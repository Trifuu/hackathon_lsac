/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS `hack`;

USE hack;


CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL,
  `prenume` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL,
  `parola` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL,
  `tel` VARCHAR(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `categorie` VARCHAR(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT "administrator",
  `sid` VARCHAR(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT "0",
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#parola pentru conturi este "parola"
INSERT INTO `user` (`id`,`nume`, `prenume`, `parola`, `email`, `tel`, `sid`, `categorie`) VALUES
    (1,"Trifu", "Marius", "a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312", "trifumarius01@gmail.com", "0764310664", "4js66jribkk2tduot8cutr8aj0", "administrator"),
    (2,"Ionel", "Bogdan", "a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312", "ionelbogdan@gmail.com", "0764852345","0", "administrator");

CREATE TABLE IF NOT EXISTS `participanti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `echipa` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `nume1` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `prenume1` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `email1` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `telefon1` VARCHAR(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `nume2` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `prenume2` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `email2` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `telefon2` VARCHAR(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `nume3` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `prenume3` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `email3` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `telefon3` VARCHAR(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT "",
  `link_cv` TEXT COLLATE utf8_unicode_ci,
  `data_inscriere` BIGINT(22) COLLATE utf8_unicode_ci,
  `comentariu` TEXT COLLATE utf8_unicode_ci,
  `limbaje` TEXT COLLATE utf8_unicode_ci,
  `evenimente` TEXT COLLATE utf8_unicode_ci,
  
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `hack`.detalii ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `id_echipa` INT NOT NULL , 
    `tricou1` VARCHAR(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , 
    `tricou2` VARCHAR(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , 
    `tricou3` VARCHAR(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , 
    `vegetarieni` VARCHAR(150) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL , 
    `vegani` VARCHAR(150) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL , 
    `preferinte` VARCHAR(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL , 
    `observatii` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , 
    `laptop` INT NOT NULL , 
    `unitate` INT NOT NULL , 
    `monitor` INT NOT NULL , 
    `echipamente` TEXT CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL , 
    `mesaj` TEXT CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL , 

    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;