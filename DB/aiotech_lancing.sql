/*
SQLyog Ultimate v12.09 (32 bit)
MySQL - 5.6.16 : Database - freelancing
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `client_email_password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `btc_address` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nid` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `registration_date` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user_photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nid_photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payza_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payza_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`full_name`,`email`,`password`,`client_email_password`,`mobile_no`,`btc_address`,`address`,`date_of_birth`,`nid`,`registration_date`,`user_photo`,`nid_photo`,`payza_id`,`payza_password`,`group`,`bank_name`,`account_type`,`account_no`,`role`,`is_active`) values (4,'lahrin','lahrin@gmail.com','','654321','01987654332','btc-1234','Dhaka Bangladesh','27-12-1995','0987654321','27-12-2016','http://localhost/freelancing/upload/images/lahrin.jpg','http://freelancing.dev/upload/images/0760a7dc6f8d55f41babaca9349a0a56.jpg','payza3@gmail.com','123456','Khulna-Royals','AB Bank Ltd','Business','3245678923',NULL,1),(3,'Tania Hasan','tania@gmail.com','','123456','01987654321','Freelancing-12345','Dhaka Bangladesh','12-27-1995','1234567890098','26-12-2016','http://localhost/freelancing/upload/images/khusi.jpg','http://freelancing.dev/upload/images/1.jpg','payza@gmail.com','123456','Khulna Royals','AB Bank LTD.','Business','34567890432',NULL,1),(5,'dfdf','tani@web.com','','fdfg','dfgf','fgg','gfg','ggfgf','gfgf','gfgfg','http://localhost/freelancing/upload/images/','http://freelancing.dev/upload/images/','fgfg','fg','fgggf','AB Bank','FDR','12354',NULL,1),(6,'admin','admin@aiotech.us','123456','admin','fdgf','gfg','gfg','fgdgf','dgfgf','dgfg','http://localhost/freelancing/upload/images/Capture.PNG','http://freelancing.dev/upload/images/Calming_Field.jpg','gffg','gfgf','gfgf','gfgfg','gfg','fgf','admin',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
