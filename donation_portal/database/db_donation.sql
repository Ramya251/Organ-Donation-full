/*
SQLyog - Free MySQL GUI v5.19
Host - 5.5.15 : Database - db_donation_portal
*********************************************************************
Server version : 5.5.15
*/

SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `db_donation_portal`;

USE `db_donation_portal`;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert into `admin` (`aid`,`email`,`password`) values (1,'admin@gmail.com','12345');

/*Table structure for table `donate` */

DROP TABLE IF EXISTS `donate`;

CREATE TABLE `donate` (
  `did` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) DEFAULT NULL,
  `age` varchar(5) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `organ` varchar(100) DEFAULT NULL,
  `blood` varchar(5) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `donate` */

insert into `donate` (`did`,`uid`,`age`,`gender`,`organ`,`blood`,`address`,`city`,`district`,`pincode`,`state`,`country`) values (1,1,'30','Male','Any Part of My Body','O-','AABS Infotech,2nd floor, NM Complex, ARRS MUltiplex Road','salem','salem','636004','tamilnadu','India');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert into `user` (`uid`,`email`,`password`,`name`,`mobile`,`address`) values (1,'pgsbaskar@gmail.com','baskar','Baskar P','9003620888','AABS Infotech,2nd floor, NM Complex, ARRS MUltiplex Road');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
