/*
SQLyog Ultimate v8.61 
MySQL - 5.5.32 : Database - escuela
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`escuela` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `escuela`;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(100) DEFAULT NULL,
  `apellido_paterno` varchar(100) DEFAULT NULL,
  `apellido_materno` varchar(100) DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `numero_externo` int(10) DEFAULT NULL,
  `numero_interno` int(10) DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cp` int(10) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `nivel` int(10) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alumno` */

/*Table structure for table `alumno_grupo` */

DROP TABLE IF EXISTS `alumno_grupo`;

CREATE TABLE `alumno_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `alumno_grupo` */

insert  into `alumno_grupo`(`id`,`id_alumno`,`id_grupo`) values (1,3,3),(3,3,2),(24,6,3),(28,11,1),(31,5,17);

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

insert  into `grupo`(`id_grupo`,`nombre`,`estatus`) values (15,'A',1),(16,'B',1),(17,'C',1),(18,'D',1),(19,'E',1);

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `id_maestro` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_maestro`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

insert  into `maestro_materia`(`id_maestro`,`id_materia`,`id`) values (2,2,NULL),(6,6,2),(7,3,NULL),(9,1,7),(10,8,8),(11,3,7),(12,11,7);

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`id_materia`,`nombre`,`estatus`) values (1,'Matematicas',1),(2,'Español',1),(3,'Base de datos',1),(4,'Fisica',1),(5,'Quimica',1),(6,'Administracion de negocios',1),(7,'Programacion',1),(8,'Mantenimiento',1),(9,'Sistemas Operativos',1),(10,'Administracion de Recursos',1),(11,'Administracion del tiempo',1);

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(250) DEFAULT NULL,
  `apellido_paterno` varchar(250) DEFAULT NULL,
  `apellido_materno` varchar(250) DEFAULT NULL,
  `Telefono` varchar(250) DEFAULT NULL,
  `NumeroExterior` int(11) DEFAULT NULL,
  `NumeroInterior` int(11) DEFAULT NULL,
  `Colonia` varchar(250) DEFAULT NULL,
  `Municipio` varchar(250) DEFAULT NULL,
  `Estado` varchar(250) DEFAULT NULL,
  `CP` int(11) DEFAULT NULL,
  `Correo` varchar(250) DEFAULT NULL,
  `Usuario` varchar(250) DEFAULT NULL,
  `Contrasena` varchar(250) DEFAULT NULL,
  `Nivel` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id_usuario`,`Nombre`,`apellido_paterno`,`apellido_materno`,`Telefono`,`NumeroExterior`,`NumeroInterior`,`Colonia`,`Municipio`,`Estado`,`CP`,`Correo`,`Usuario`,`Contrasena`,`Nivel`,`status`) values (1,'Pedro','Meza','Ramirez','123456789',234,234,'centro','tenango','mexico',3456,'Qgmail.com','misa','12345','2','1'),(2,'Carlos','Solano','mmmm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(4,'Juan','Carlos','Martinez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(5,'Laura','Jimenez','Rosales',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
