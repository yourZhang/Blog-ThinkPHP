/*
SQLyog Ultimate v12.08 (64 bit)
MySQL - 8.0.16 : Database - tp_blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tp_blog` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `tp_blog`;

/*Table structure for table `tp_admin` */

DROP TABLE IF EXISTS `tp_admin`;

CREATE TABLE `tp_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `delete_time` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tp_admin` */

insert  into `tp_admin`(`id`,`username`,`pwd`,`delete_time`) values (1,'admin','admin',NULL);

/*Table structure for table `tp_art` */

DROP TABLE IF EXISTS `tp_art`;

CREATE TABLE `tp_art` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `descs` varchar(255) NOT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `is_top` enum('0','1') DEFAULT NULL,
  `care_id` int(11) DEFAULT NULL,
  `create_tiem` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tp_art` */

/*Table structure for table `tp_cate` */

DROP TABLE IF EXISTS `tp_cate`;

CREATE TABLE `tp_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catename` varchar(20) NOT NULL,
  `sort` int(11) NOT NULL,
  `create_tiem` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tp_cate` */

/*Table structure for table `tp_comment` */

DROP TABLE IF EXISTS `tp_comment`;

CREATE TABLE `tp_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(50) DEFAULT NULL,
  `wenzhang_id` int(11) DEFAULT NULL,
  `yonghu_id` int(11) DEFAULT NULL,
  `create_tiem` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tp_comment` */

/*Table structure for table `tp_member` */

DROP TABLE IF EXISTS `tp_member`;

CREATE TABLE `tp_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `create_tiem` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tp_member` */

/*Table structure for table `tp_sys` */

DROP TABLE IF EXISTS `tp_sys`;

CREATE TABLE `tp_sys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webname` varchar(50) DEFAULT NULL,
  `copyright` varchar(50) DEFAULT NULL,
  `create_tiem` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tp_sys` */

/*Table structure for table `tp_users` */

DROP TABLE IF EXISTS `tp_users`;

CREATE TABLE `tp_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `statuss` enum('0','1') NOT NULL,
  `is_super` enum('0','1') NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `tp_users` */

insert  into `tp_users`(`id`,`username`,`pwd`,`nickname`,`email`,`statuss`,`is_super`,`create_time`,`update_time`,`delete_time`) values (2,'001','001','大飞','1169277016@qq.com','0','0',1568959247,1568959247,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
