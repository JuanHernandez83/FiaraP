-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema fiara
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema fiara
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `fiara` DEFAULT CHARACTER SET utf8 ;
USE `fiara` ;

-- -----------------------------------------------------
-- Table `fiara`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fiara`.`clientes` (
  `id_cliente` INT(11) NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `Placa` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fiara`.`empleados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fiara`.`empleados` (
  `idempleado` VARCHAR(45) NOT NULL,
  `nombre_empleado` VARCHAR(45) NOT NULL,
  `apellido_empleado` VARCHAR(45) NOT NULL,
  `numero_empleado` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idempleado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fiara`.`vehiculos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fiara`.`vehiculos` (
  `EstadoVehiculo` VARCHAR(45) NOT NULL,
  `Vehiculo` VARCHAR(45) NOT NULL,
  `Placa` VARCHAR(45) NOT NULL,
  `Motor` VARCHAR(45) NOT NULL,
  `Marca` VARCHAR(45) NOT NULL,
  `Modelo` VARCHAR(45) NOT NULL,
  `Tipo` VARCHAR(45) NOT NULL,
  `Kilometraje` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Placa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fiara`.`tipo_de_trabajo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fiara`.`tipo_de_trabajo` (
  `idtrabajo` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_trabajo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtrabajo`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fiara`.`zonas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fiara`.`zonas` (
  `id_zona` INT(11) NOT NULL AUTO_INCREMENT,
  `empleado` VARCHAR(45) NOT NULL,
  `nombre_zona` VARCHAR(45) NOT NULL,
  `vehiculo` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_zona`),
  INDEX `empleado_idx` (`empleado` ASC) VISIBLE,
  CONSTRAINT `empleado`
    FOREIGN KEY (`empleado`)
    REFERENCES `fiara`.`empleados` (`idempleado`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fiara`.`ordenes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fiara`.`ordenes` (
  `id_orden` INT(11) NOT NULL AUTO_INCREMENT,
  `Falla` VARCHAR(45) NOT NULL,
  `Zona_de_trabajo` INT(11) NOT NULL,
  `Grado_daño` VARCHAR(45) NOT NULL,
  `Trabajo_a_realizar` INT(11) NOT NULL,
  `Observaciones` LONGBLOB NOT NULL,
  `fecha_de_entrada` VARCHAR(45) NOT NULL,
  `Placa` VARCHAR(45) NOT NULL,
  `ClienteAtendido` INT(11) NOT NULL,
  PRIMARY KEY (`id_orden`),
  INDEX `Placa_idx` (`Placa` ASC) VISIBLE,
  INDEX `Trabajo_idx` (`Trabajo_a_realizar` ASC) VISIBLE,
  INDEX `ZonaTrabajo_idx` (`Zona_de_trabajo` ASC) VISIBLE,
  INDEX `Cliente_idx` (`ClienteAtendido` ASC) VISIBLE,
  CONSTRAINT `Cliente`
    FOREIGN KEY (`ClienteAtendido`)
    REFERENCES `fiara`.`clientes` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Placa`
    FOREIGN KEY (`Placa`)
    REFERENCES `fiara`.`vehiculos` (`Placa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Trabajo`
    FOREIGN KEY (`Trabajo_a_realizar`)
    REFERENCES `fiara`.`tipo_de_trabajo` (`idtrabajo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ZonaTrabajo`
    FOREIGN KEY (`Zona_de_trabajo`)
    REFERENCES `fiara`.`zonas` (`id_zona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 18
DEFAULT CHARACTER SET = utf8
COMMENT = '			';


-- -----------------------------------------------------
-- Table `fiara`.`facturas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fiara`.`facturas` (
  `idFacturas` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_taller` VARCHAR(45) NOT NULL,
  `Precio_de_trabajo` INT(11) NOT NULL,
  `IVA` DECIMAL(5,0) NOT NULL,
  `Valor_total` INT(11) NOT NULL,
  `Garantia` VARCHAR(45) NOT NULL,
  `fecha_hora` VARCHAR(45) NOT NULL,
  `trabajo_realizado` INT(11) NOT NULL,
  `Placa` VARCHAR(45) NOT NULL,
  `id_cliente` INT(11) NOT NULL,
  `idorden` INT(11) NOT NULL,
  PRIMARY KEY (`idFacturas`),
  INDEX `NombreTaller_idx` (`nombre_taller` ASC) VISIBLE,
  INDEX `idordenes_idx` (`idorden` ASC) VISIBLE,
  CONSTRAINT `idordenes`
    FOREIGN KEY (`idorden`)
    REFERENCES `fiara`.`ordenes` (`id_orden`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 17
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fiara`.`historial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fiara`.`historial` (
  `idOrden` INT(11) NOT NULL,
  `fecha_de_emision` VARCHAR(45) NOT NULL,
  `fecha_de_salida` VARCHAR(45) NOT NULL,
  `cliente` INT(11) NOT NULL,
  `vehiculo_Reparado` VARCHAR(45) NOT NULL,
  INDEX `PlacaC_idx` (`vehiculo_Reparado` ASC) VISIBLE,
  CONSTRAINT `PlacaC`
    FOREIGN KEY (`vehiculo_Reparado`)
    REFERENCES `fiara`.`vehiculos` (`Placa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `fiara`.`inicio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fiara`.`inicio` (
  `idLogin` INT(11) NOT NULL AUTO_INCREMENT,
  `Usuario` VARCHAR(45) NOT NULL,
  `Contraseña` VARCHAR(255) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Nombres` VARCHAR(45) NOT NULL,
  `Apellidos` VARCHAR(45) NOT NULL,
  `Telefono` VARCHAR(45) NOT NULL,
  `NombreTaller` VARCHAR(45) NOT NULL,
  `TamañoTaller` VARCHAR(45) NOT NULL,
  `NIT` VARCHAR(45) NOT NULL,
  `Identificacion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idLogin`))
ENGINE = InnoDB
AUTO_INCREMENT = 83
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
