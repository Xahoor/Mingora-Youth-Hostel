/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.19-MariaDB : Database - hostel_sb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hostel_sb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `hostel_sb`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `admin` */

insert  into `admin`(`email`,`password`) values 
('admin@gmail.com','112233');

/*Table structure for table `allotte_room` */

DROP TABLE IF EXISTS `allotte_room`;

CREATE TABLE `allotte_room` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `rid` int(11) DEFAULT NULL,
  PRIMARY KEY (`aid`),
  KEY `id` (`id`),
  KEY `rid` (`rid`),
  CONSTRAINT `allotte_room_ibfk_1` FOREIGN KEY (`id`) REFERENCES `visitors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `allotte_room_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `rooms` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `allotte_room` */

insert  into `allotte_room`(`aid`,`id`,`date`,`rid`) values 
(10,1,'2021-08-19',10),
(11,2,'2021-08-19',9);

/*Table structure for table `annoncements` */

DROP TABLE IF EXISTS `annoncements`;

CREATE TABLE `annoncements` (
  `Aid` int(11) NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`Aid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `annoncements` */

insert  into `annoncements`(`Aid`,`description`,`date`) values 
(1,'From Wednesday to Thursday hostel will be closed.','2021-08-19'),
(2,'All memeber submit their documents with 2 passport size pictures.','2021-08-20');

/*Table structure for table `beds` */

DROP TABLE IF EXISTS `beds`;

CREATE TABLE `beds` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) DEFAULT NULL,
  `bed_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`bid`),
  KEY `rid` (`rid`),
  CONSTRAINT `beds_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `rooms` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `beds` */

/*Table structure for table `bills` */

DROP TABLE IF EXISTS `bills`;

CREATE TABLE `bills` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `month` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `food` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `electricity` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `room_charges` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `services_tax` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arrers` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`bid`),
  KEY `aid` (`aid`),
  CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `allotte_room` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bills` */

insert  into `bills`(`bid`,`aid`,`month`,`food`,`electricity`,`room_charges`,`services_tax`,`arrers`) values 
(12,10,'jan','1200','1300','1000','','2000'),
(13,10,'Feb','1200','200','1000','',''),
(14,10,'Mar','1200','1200','1000','',''),
(15,11,'Mar','1300','1000','1100',NULL,NULL);

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `day` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brakfast` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lunch` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dinner` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `menu` */

insert  into `menu`(`day`,`brakfast`,`lunch`,`dinner`) values 
('sunday','Egg+Paratha+Tea','pullao','dal'),
('monday','Eggy Bread + Tea','chicken soup','Beans soup'),
('tuesday','Egg+Paratha+Tea','Beef curry','Biryani'),
('wednesday','Egg+Paratha+Tea','fish fry','chicken fry'),
('thursday','Egg+Paratha+Tea','Nihari','Haleem'),
('friday','Egg+Paratha+Tea','Paya','chicken bbq'),
('saturday','Egg+Paratha+Tea','Kebabs','beef bbq');

/*Table structure for table `paid` */

DROP TABLE IF EXISTS `paid`;

CREATE TABLE `paid` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `aid` int(11) DEFAULT NULL,
  PRIMARY KEY (`pid`),
  KEY `aid` (`aid`),
  CONSTRAINT `paid_ibfk_3` FOREIGN KEY (`aid`) REFERENCES `allotte_room` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `paid` */

insert  into `paid`(`pid`,`month`,`amount`,`aid`) values 
(5,'Jan','1200',10),
(6,'Jan','1300',11);

/*Table structure for table `room_pictures` */

DROP TABLE IF EXISTS `room_pictures`;

CREATE TABLE `room_pictures` (
  `picid` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) DEFAULT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`picid`),
  KEY `rid` (`rid`),
  CONSTRAINT `room_pictures_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `rooms` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `room_pictures` */

insert  into `room_pictures`(`picid`,`rid`,`picture`) values 
(19,1,'r1.jpg'),
(25,2,'room2a589950747.jpg'),
(26,3,'room1.jfif'),
(27,4,'room1a.jpg'),
(28,5,'c2.jpg'),
(29,6,'placeholder.png'),
(30,7,'pic1.jpg'),
(31,8,'pic2.jpg'),
(32,9,'pic3.jpg'),
(33,10,'room2.jfif');

/*Table structure for table `rooms` */

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `room_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `total_bed` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `heater` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ac` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=839 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `rooms` */

insert  into `rooms`(`rid`,`room_no`,`room_type`,`total_bed`,`fan`,`heater`,`ac`) values 
(1,'1','','1','yes','yes','no'),
(2,'2','','1','yes','yes','no'),
(3,'3','','2','yes','yes','no'),
(4,'4','','1','yes','yes','no'),
(5,'5','','2','yes','yes','no'),
(6,'6','','1','yes','yes','no'),
(7,'7','','2','yes','yes','no'),
(8,'8','','1','yes','yes','no'),
(9,'9','','2','yes','yes','no'),
(10,'10','','1','yes','yes','no');

/*Table structure for table `visitor_complains` */

DROP TABLE IF EXISTS `visitor_complains`;

CREATE TABLE `visitor_complains` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complain` blob NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`vid`),
  KEY `id` (`id`),
  CONSTRAINT `visitor_complains_ibfk_1` FOREIGN KEY (`id`) REFERENCES `visitors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `visitor_complains` */

insert  into `visitor_complains`(`vid`,`id`,`subject`,`complain`,`date`) values 
(1,1,'Electricity','I am writing a complaint in regards to the rising electricity bill. The electricity bill has been extremely high lately.','2021-08-18');

/*Table structure for table `visitors` */

DROP TABLE IF EXISTS `visitors`;

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cnic` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `visitors` */

insert  into `visitors`(`id`,`name`,`email`,`password`,`phone`,`cnic`,`picture`,`age`) values 
(1,'Aziz Khan','aziz@gmail.com','112233','034566436363','15602','aziz904054709.jpeg',''),
(2,'Obaid Khan','obaid@gmail.com','112233','03456373256','15603','',''),
(3,'Abid Khan','abid@gmail.com','112233','03737473734','15604','',''),
(4,'Zahoor','zahoor@gmail.com','112233','0373727373','15605','',''),
(5,'Junaid','junaid@gmail.com','112233','037376373','15606','','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
