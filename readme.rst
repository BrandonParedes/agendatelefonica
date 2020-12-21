###################
Agenda telefónica
###################

Agenda de contactos elaborada con framework Codeigniter (PHP)

*******************
QUERY BD
*******************

CREATE DATABASE `bdagenda` 

CREATE TABLE `bdagenda`.`tb_contacto`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(25) NOT NULL,
    `telefono` VARCHAR(15) NOT NULL,
    `direccion` VARCHAR(25) NOT NULL,
    `correo` VARCHAR(25) NOT NULL,
    PRIMARY KEY(`id`)
) ENGINE = INNODB;


*******************
URL PARA EJECUCIÓN
*******************

http://localhost/agendatelefonica/index.php/Contacto/nuevocontacto


*******************
Funcionalidades
*******************

- Registrar nuevo contacto
- Mostrar lista de contactos
- Actualizar contacto
- Eliminar contacto

***********************
Tecnologías utilizadas
***********************

- PHP
- XAMPP
- CSS
- JAVASCRIPT



*******************
Requerimientos
*******************

PHP version 8.0.0 
XAMPP Control Panel V.3.2.4
phpMyAdmin version 5.0.4

***************
Datos de creador
***************

Brandon Alecxander Paredes Cueto
brandon.sped@homail.com 
