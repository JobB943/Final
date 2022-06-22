
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
  PRIMARY KEY (`id_cronogra`),
  UNIQUE INDEX `citas_id` (`citas_id` ASC) VISIBLE,
  CONSTRAINT `cronograma_ibfk_1`
    FOREIGN KEY (`citas_id`)
    REFERENCES `seguridad`.`citas` (`id_cita`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


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
  PRIMARY KEY (`id_alarm`),
  UNIQUE INDEX `crono_id` (`crono_id` ASC) VISIBLE,
  CONSTRAINT `alarma_ibfk_1`
    FOREIGN KEY (`crono_id`)
    REFERENCES `seguridad`.`cronograma` (`id_cronogra`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `seguridad`.`enfermedad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`enfermedad` (
  `id_enfermedad` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(225) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  PRIMARY KEY (`id_enfermedad`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

INSERT INTO `enfermedad` (`id_enfermedad`, `nombre`) VALUES
(1, 'Alzheimer'),
(2, 'insuficiencia'),
(3,'');


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

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'Paciente'),
(2, 'Doctor'),
(3,'Familiar');
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
  PRIMARY KEY (`user_id`),
  UNIQUE INDEX `rol_id` (`rol_id` ASC) VISIBLE,
  UNIQUE INDEX `histo_id` (`histo_id` ASC) VISIBLE,
  UNIQUE INDEX `cita_id` (`cita_id` ASC) VISIBLE,
  CONSTRAINT `users_ibfk_1`
    FOREIGN KEY (`rol_id`)
    REFERENCES `seguridad`.`roles` (`id_rol`),
  CONSTRAINT `users_ibfk_2`
    FOREIGN KEY (`histo_id`)
    REFERENCES `seguridad`.`historia` (`id_histo`),
  CONSTRAINT `users_ibfk_3`
    FOREIGN KEY (`cita_id`)
    REFERENCES `seguridad`.`citas` (`id_cita`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `seguridad`.`users_has_enfermedad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`users_has_enfermedad` (
  `users_user_id` INT(11) NOT NULL,
  `enfermedad_id_enfermedad` INT(11) NOT NULL,
  PRIMARY KEY (`users_user_id`, `enfermedad_id_enfermedad`),
  INDEX `fk_users_has_enfermedad_enfermedad1_idx` (`enfermedad_id_enfermedad` ASC) VISIBLE,
  INDEX `fk_users_has_enfermedad_users1_idx` (`users_user_id` ASC) VISIBLE,
  CONSTRAINT `fk_users_has_enfermedad_users1`
    FOREIGN KEY (`users_user_id`)
    REFERENCES `seguridad`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_enfermedad_enfermedad1`
    FOREIGN KEY (`enfermedad_id_enfermedad`)
    REFERENCES `seguridad`.`enfermedad` (`id_enfermedad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `seguridad`.`enfermedad_has_medicamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seguridad`.`enfermedad_has_medicamento` (
  `enfermedad_id_enfermedad` INT(11) NOT NULL,
  `medicamento_id_medica` INT(11) NOT NULL,
  PRIMARY KEY (`enfermedad_id_enfermedad`, `medicamento_id_medica`),
  INDEX `fk_enfermedad_has_medicamento_medicamento1_idx` (`medicamento_id_medica` ASC) VISIBLE,
  INDEX `fk_enfermedad_has_medicamento_enfermedad1_idx` (`enfermedad_id_enfermedad` ASC) VISIBLE,
  CONSTRAINT `fk_enfermedad_has_medicamento_enfermedad1`
    FOREIGN KEY (`enfermedad_id_enfermedad`)
    REFERENCES `seguridad`.`enfermedad` (`id_enfermedad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_enfermedad_has_medicamento_medicamento1`
    FOREIGN KEY (`medicamento_id_medica`)
    REFERENCES `seguridad`.`medicamento` (`id_medica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


