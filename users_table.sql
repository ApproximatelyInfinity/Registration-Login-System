CREATE TABLE `users` 
( `id` INT(11) NOT NULL AUTO_INCREMENT , 
`firstname` VARCHAR(255) NOT NULL , 
`lastname` VARCHAR(255) NOT NULL , 
`username` VARCHAR(255) NOT NULL , 
`email` VARCHAR(255) NOT NULL , 
`password` VARCHAR(255) NOT NULL , 
PRIMARY KEY (`id`), 
UNIQUE (`username`), 
UNIQUE (`email`)) ENGINE = InnoDB;