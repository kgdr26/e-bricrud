/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.11.4-MariaDB : Database - db_e_bri_crud
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_e_bri_crud` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;

USE `db_e_bri_crud`;

/*Table structure for table `mst_anggunan` */

DROP TABLE IF EXISTS `mst_anggunan`;

CREATE TABLE `mst_anggunan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `mst_anggunan` */

insert  into `mst_anggunan`(`id`,`name`,`is_active`,`update_by`,`last_update`) values 
(1,'KPR',1,1,'2023-08-12 19:10:40');

/*Table structure for table `mst_role` */

DROP TABLE IF EXISTS `mst_role`;

CREATE TABLE `mst_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

/*Data for the table `mst_role` */

insert  into `mst_role`(`id`,`name`,`is_active`,`update_by`,`last_update`) values 
(1,'MANAGER',1,1,'2023-08-12 00:57:54'),
(2,'KARYAWAN',1,1,'2023-08-12 00:58:04');

/*Table structure for table `mst_status` */

DROP TABLE IF EXISTS `mst_status`;

CREATE TABLE `mst_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_status` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `lasta_update` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `mst_status` */

insert  into `mst_status`(`id`,`name_status`,`is_active`,`update_by`,`lasta_update`) values 
(1,'Waiting Approval',1,1,'2023-08-13 07:32:37'),
(2,'Approved',1,1,'2023-08-13 07:32:56'),
(3,'Not Approved',1,1,'2023-08-13 07:34:35');

/*Table structure for table `trx_nasabah` */

DROP TABLE IF EXISTS `trx_nasabah`;

CREATE TABLE `trx_nasabah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `no_ktp` varchar(20) DEFAULT NULL,
  `upload_ktp` varchar(255) DEFAULT NULL,
  `apr_ktp` int(11) DEFAULT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `upload_kk` varchar(255) DEFAULT NULL,
  `apr_kk` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_npwp` varchar(20) DEFAULT NULL,
  `upload_npwp` varchar(255) DEFAULT NULL,
  `apr_npwp` int(11) DEFAULT NULL,
  `upload_bukunikah` varchar(255) DEFAULT NULL,
  `apr_bukunikah` int(11) DEFAULT NULL,
  `upload_slipgaji` varchar(255) DEFAULT NULL,
  `apr_slip_gaji` int(11) DEFAULT NULL,
  `upload_rek` varchar(255) DEFAULT NULL,
  `apr_rek` int(11) DEFAULT NULL,
  `id_anggunan` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `id_input` int(11) DEFAULT NULL,
  `date_input` datetime DEFAULT NULL,
  `id_approval` int(11) DEFAULT NULL,
  `date_approval` timestamp NULL DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `trx_nasabah` */

insert  into `trx_nasabah`(`id`,`name`,`no_tlp`,`no_ktp`,`upload_ktp`,`apr_ktp`,`no_kk`,`upload_kk`,`apr_kk`,`alamat`,`no_npwp`,`upload_npwp`,`apr_npwp`,`upload_bukunikah`,`apr_bukunikah`,`upload_slipgaji`,`apr_slip_gaji`,`upload_rek`,`apr_rek`,`id_anggunan`,`harga`,`is_active`,`id_input`,`date_input`,`id_approval`,`date_approval`,`id_status`) values 
(1,'n1','n2','n3','48124.png',NULL,'n4','15167.png',NULL,'n5','n6','92585.png',NULL,'73494.png',NULL,'18529.png',NULL,'17363.png',NULL,1,NULL,1,1,'2023-08-12 23:08:43',NULL,NULL,3),
(2,'a1','q2','a3','37920.png',1,'a4','22588.png',1,'aa5','a6','90525.png',1,'84770.png',1,'61647.png',1,'72347.png',1,1,5000000,1,1,'2023-08-12 23:08:54',NULL,NULL,2);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`pass`,`role_id`,`name`,`email`,`foto`,`is_active`,`update_by`,`last_update`) values 
(1,'kgdr','$2y$10$3LpQZJs3nxD0HOaTfSX81..lY0COorTPmQryCy25eyI2uos0mnnTO','1',1,'Kang Dru','kgdr@gmail.com','default.jpg',1,1,'2023-08-12 01:19:01'),
(2,'kry','1','1',2,'Karyawan 12','kry@gmail.com','37001.png',1,1,'2023-08-13 10:04:10'),
(3,'tes','$2y$10$yeo9H9MzcelV.0J7X9FK2OU4lsN7VJMm.oK0qvis5omaKgKK9jCNi','1',1,'Tes name','tes@name.com','80828.png',2,1,'2023-08-13 09:47:11');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
