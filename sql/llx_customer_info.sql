CREATE TABLE `llx_customer_info` ( 
 `rowid` INT(11) NOT NULL AUTO_INCREMENT,
 `name` VARCHAR(255) NOT NULL UNIQUE,
 `value` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE = InnoDB;