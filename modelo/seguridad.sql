-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- ----------------------------------------------------- 
-- -----------------------------------------------------
-- Schema seguridad

-- -----------------------------------------------------
-- Schema seguridad
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `seguridad` DEFAULT CHARACTER SET utf8mb4 ;
USE `seguridad` ;

-- -----------------------------------------------------
-- Table `seguridad`.`citas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`citas` (
  `id_cita` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `enfermedad` INT(11) NOT NULL,
  `fecha` VARCHAR(22) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `hora` VARCHAR(22) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`id_cita`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `seguridad`.`cronograma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`cronograma` (
  `id_cronogra` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `fecha` DATE NULL DEFAULT NULL,
  `hora` TIME NOT NULL,
  `citas_id` INT(11) NOT NULL,
  PRIMARY KEY (`id_cronogra`));




-- -----------------------------------------------------
-- Table `seguridad`.`alarma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`alarma` (
  `id_alarm` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `fecha` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `recordatorio` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `crono_id` INT(11) NOT NULL,
  PRIMARY KEY (`id_alarm`));

-- Table `seguridad`.`enfermedad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`enfermedad` (
  `id_enfermedad` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(225) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  PRIMARY KEY (`id_enfermedad`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `seguridad`.`historia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`historia` (
  `id_histo` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_his` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `fecha` DATE NOT NULL,
  `descripcion` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`id_histo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `seguridad`.`medicamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`medicamento` (
  `id_medica` INT(11) NOT NULL AUTO_INCREMENT,
  `dosis` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `fecha_expe` DATE NULL DEFAULT NULL,
  `fecha_venci` DATE NOT NULL,
  `nombre` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`id_medica`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `seguridad`.`messages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`messages` (
  `msg_id` INT(11) NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` INT(225) NOT NULL,
  `outgoing_msg_id` INT(225) NOT NULL,
  `msg` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`msg_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `seguridad`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`roles` (
  `id_rol` INT(11) NOT NULL AUTO_INCREMENT,
  `rol` VARCHAR(225) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_rol`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `seguridad`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`users` (
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `unique_id` INT(225) NOT NULL,
  `fname` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `lname` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `email` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `password` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `img` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `status` VARCHAR(225) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `rol_id` INT(11) NOT NULL,
  `histo_id` INT(11) NOT NULL,
  `cita_id` INT(11) NOT NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `seguridad`.`users_has_enfermedad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`users_has_enfermedad` (
  `users_user_id` INT(11) NOT NULL,
  `enfermedad_id_enfermedad` INT(11) NOT NULL,
  PRIMARY KEY (`users_user_id`, `enfermedad_id_enfermedad`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `seguridad`.`enfermedad_has_medicamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`enfermedad_has_medicamento` (
  `enfermedad_id_enfermedad` INT(11) NOT NULL,
  `medicamento_id_medica` INT(11) NOT NULL,
  PRIMARY KEY (`enfermedad_id_enfermedad`, `medicamento_id_medica`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

select * from enfermedad;
insert into enfermedad(nombre)value("consulta");
insert into enfermedad(nombre)value("odontologia");
insert into enfermedad(nombre)value("Pediatría");
select * from enfermedad;