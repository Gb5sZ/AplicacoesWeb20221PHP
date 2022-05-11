CREATE DATABASE empresa;
CREATE TABLE IF NOT EXISTS `empresa`.`funcionaio` (
  `idfuncionaio` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `cargo` VARCHAR(45) NULL,
  `salarioBruto` DOUBLE NULL,
  `salarioLiquido` DOUBLE NULL,
  `inss` FLOAT NULL,
  PRIMARY KEY (`idfuncionaio`))
ENGINE = InnoDB

select * from funcionaio;