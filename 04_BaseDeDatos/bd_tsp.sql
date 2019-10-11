-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema bd_tsp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_tsp` DEFAULT CHARACTER SET latin1 ;


-- -----------------------------------------------------
-- Table `bd_tsp`.`Login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tsp`.`Login` (
  `idLogin` INT(11) NOT NULL AUTO_INCREMENT,
  `Usuario` VARCHAR(45) NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Contraseña` VARCHAR(45) NOT NULL,
  `Tipo` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idLogin`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_tsp`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tsp`.`Admin` (
  `idAdmin` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Puesto` VARCHAR(45) NOT NULL,
  `Login_idLogin` INT(11) NOT NULL,
  PRIMARY KEY (`idAdmin`),
  INDEX `fk_Admin_Login1_idx` (`Login_idLogin` ASC),
  CONSTRAINT `fk_Admin_Login1`
    FOREIGN KEY (`Login_idLogin`)
    REFERENCES `bd_tsp`.`Login` (`idLogin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_tsp`.`Docente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tsp`.`Docente` (
  `idDocente` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreDocente` VARCHAR(45) NOT NULL,
  `Division` VARCHAR(45) NOT NULL,
  `Login_idLogin` INT(11) NOT NULL,
  PRIMARY KEY (`idDocente`),
  INDEX `fk_Asesor_Login1_idx` (`Login_idLogin` ASC),
  CONSTRAINT `fk_Asesor_Login1`
    FOREIGN KEY (`Login_idLogin`)
    REFERENCES `bd_tsp`.`Login` (`idLogin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_tsp`.`Estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tsp`.`Estudiante` (
  `idEstudiante` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreEstudiante` VARCHAR(45) NOT NULL,
  `Carrera` VARCHAR(45) NOT NULL,
  `Login_idLogin` INT(11) NOT NULL,
  PRIMARY KEY (`idEstudiante`),
  INDEX `fk_Estudiante_Login1_idx` (`Login_idLogin` ASC),
  CONSTRAINT `fk_Estudiante_Login1`
    FOREIGN KEY (`Login_idLogin`)
    REFERENCES `bd_tsp`.`Login` (`idLogin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_tsp`.`Expediente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tsp`.`Expediente` (
  `idExpediente` INT(11) NOT NULL AUTO_INCREMENT,
  `Folio` VARCHAR(45) NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Estudiante_idEstudiante` INT(11) NOT NULL,
  PRIMARY KEY (`idExpediente`),
  INDEX `fk_Expediente_Estudiante1_idx` (`Estudiante_idEstudiante` ASC),
  CONSTRAINT `fk_Expediente_Estudiante1`
    FOREIGN KEY (`Estudiante_idEstudiante`)
    REFERENCES `bd_tsp`.`Estudiante` (`idEstudiante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_tsp`.`Documento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tsp`.`Documento` (
  `idDocumento` INT(11) NOT NULL AUTO_INCREMENT,
  `Titulo` VARCHAR(45) NOT NULL,
  `Tipo` VARCHAR(45) NOT NULL,
  `Contenido` LONGBLOB NOT NULL,
  `Expediente_idExpediente` INT(11) NOT NULL,
  PRIMARY KEY (`idDocumento`),
  INDEX `fk_Documento_Expediente1_idx` (`Expediente_idExpediente` ASC),
  CONSTRAINT `fk_Documento_Expediente1`
    FOREIGN KEY (`Expediente_idExpediente`)
    REFERENCES `bd_tsp`.`Expediente` (`idExpediente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_tsp`.`Evaluacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tsp`.`Evaluacion` (
  `idEvaluacion` INT(11) NOT NULL AUTO_INCREMENT,
  `Criterios` VARCHAR(45) NOT NULL,
  `Puntaje` DECIMAL(3,0) NOT NULL,
  `Expediente_idExpediente` INT(11) NOT NULL,
  PRIMARY KEY (`idEvaluacion`),
  INDEX `fk_Evaluacion_Expediente1_idx` (`Expediente_idExpediente` ASC),
  CONSTRAINT `fk_Evaluacion_Expediente1`
    FOREIGN KEY (`Expediente_idExpediente`)
    REFERENCES `bd_tsp`.`Expediente` (`idExpediente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bd_tsp`.`JefeDepartamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tsp`.`JefeDepartamento` (
  `idJefeDepartamento` INT NOT NULL AUTO_INCREMENT,
  `NombreJefe` VARCHAR(45) NOT NULL,
  `NombreDep` VARCHAR(45) NOT NULL,
  `Login_idLogin` INT(11) NOT NULL,
  PRIMARY KEY (`idJefeDepartamento`),
  INDEX `fk_JefeDepartamento_Login1_idx` (`Login_idLogin` ASC),
  CONSTRAINT `fk_JefeDepartamento_Login1`
    FOREIGN KEY (`Login_idLogin`)
    REFERENCES `bd_tsp`.`Login` (`idLogin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_tsp`.`Docente_has_Expediente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_tsp`.`Docente_has_Expediente` (
  `Docente_idDocente` INT(11) NOT NULL,
  `Expediente_idExpediente` INT(11) NOT NULL,
  `Tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Docente_idDocente`, `Expediente_idExpediente`),
  INDEX `fk_Docente_has_Expediente_Expediente1_idx` (`Expediente_idExpediente` ASC),
  INDEX `fk_Docente_has_Expediente_Docente1_idx` (`Docente_idDocente` ASC),
  CONSTRAINT `fk_Docente_has_Expediente_Docente1`
    FOREIGN KEY (`Docente_idDocente`)
    REFERENCES `bd_tsp`.`Docente` (`idDocente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Docente_has_Expediente_Expediente1`
    FOREIGN KEY (`Expediente_idExpediente`)
    REFERENCES `bd_tsp`.`Expediente` (`idExpediente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;