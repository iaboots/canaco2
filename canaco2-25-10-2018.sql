/*
SQLyog Community v13.0.1 (32 bit)
MySQL - 5.6.39-log : Database - canacodb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`canacodb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `canacodb`;

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `cat_num_ctrl` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cat_num_ctrl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `categoria` */

/*Table structure for table `socios` */

DROP TABLE IF EXISTS `socios`;

CREATE TABLE `socios` (
  `soc_num_ctrl` int(11) NOT NULL AUTO_INCREMENT,
  `soc_nombre` varchar(100) DEFAULT NULL,
  `cat_num_ctrl` int(11) DEFAULT NULL,
  `soc_email` varchar(100) DEFAULT NULL,
  `soc_rfc` varchar(13) DEFAULT NULL,
  `soc_estatus` tinyint(1) DEFAULT NULL,
  `soc_usuariocreacion` varchar(15) DEFAULT NULL,
  `soc_fechacreacion` datetime DEFAULT NULL,
  `soc_usuariomodif` varchar(15) DEFAULT NULL,
  `soc_fechamodif` datetime DEFAULT NULL,
  PRIMARY KEY (`soc_num_ctrl`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `socios` */

insert  into `socios`(`soc_num_ctrl`,`soc_nombre`,`cat_num_ctrl`,`soc_email`,`soc_rfc`,`soc_estatus`,`soc_usuariocreacion`,`soc_fechacreacion`,`soc_usuariomodif`,`soc_fechamodif`) values 
(1,'Pepe',3,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `usu_num_ctrl` int(11) NOT NULL AUTO_INCREMENT,
  `usu_clave` varchar(25) NOT NULL,
  `usu_nombre` varchar(30) NOT NULL,
  `usu_rol` int(11) NOT NULL COMMENT '(1 admin,2 capturista)',
  PRIMARY KEY (`usu_num_ctrl`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`usu_num_ctrl`,`usu_clave`,`usu_nombre`,`usu_rol`) values 
(1,'123','admin',1),
(2,'123','invitado',2);

/*Table structure for table `votacion` */

DROP TABLE IF EXISTS `votacion`;

CREATE TABLE `votacion` (
  `vot_num_ctrl` int(11) NOT NULL AUTO_INCREMENT,
  `vot_id` varchar(12) DEFAULT NULL,
  `vot_anio` varchar(4) DEFAULT NULL,
  `soc_num_ctrl` int(11) DEFAULT NULL,
  `vot_fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`vot_num_ctrl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `votacion` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
