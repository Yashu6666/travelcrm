/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.36 : Database - travelcrm
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`travelcrm` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `travelcrm`;

/*Table structure for table `b2bcustomerquery` */

DROP TABLE IF EXISTS `b2bcustomerquery`;

CREATE TABLE `b2bcustomerquery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b2bcompanyName` varchar(255) DEFAULT NULL,
  `b2bEmail` varchar(255) DEFAULT NULL,
  `b2bfirstName` varchar(255) DEFAULT NULL,
  `b2blastName` varchar(255) DEFAULT NULL,
  `b2bmobileNumber` varchar(255) DEFAULT NULL,
  `reportsTo` varchar(255) DEFAULT NULL,
  `b2bagent_remarks` varchar(255) DEFAULT NULL,
  `query_id` varchar(11) DEFAULT NULL,
  `lead_stage` varchar(50) NOT NULL DEFAULT 'Inprogress',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `Package` varchar(50) DEFAULT 'Inprogress',
  `Transfer` varchar(50) DEFAULT 'Inprogress',
  `Hotel` varchar(50) DEFAULT 'Inprogress',
  `Excursion` varchar(50) DEFAULT 'Inprogress',
  `Visa` varchar(50) DEFAULT 'Inprogress',
  `Meals` varchar(50) DEFAULT 'Inprogress',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=456 DEFAULT CHARSET=utf8mb4;

/*Data for the table `b2bcustomerquery` */

insert  into `b2bcustomerquery`(`id`,`b2bcompanyName`,`b2bEmail`,`b2bfirstName`,`b2blastName`,`b2bmobileNumber`,`reportsTo`,`b2bagent_remarks`,`query_id`,`lead_stage`,`created_at`,`status`,`Package`,`Transfer`,`Hotel`,`Excursion`,`Visa`,`Meals`) values 
(454,'sekar','sekar@gmail.com','sekar ','raja','9629751192','Admin',NULL,'8952','Inprogress','2022-08-10 23:30:22','pending','Inprogress','Inprogress','Inprogress','Inprogress','Inprogress','Inprogress'),
(455,'raja','raja@gmail.com','raja','test','9629751192','Admin',NULL,'8190','Confirmed','2022-08-11 00:30:22','pending','Inprogress','Inprogress','Inprogress','Inprogress','Inprogress','Inprogress');

/*Table structure for table `cities` */

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cityName` varchar(100) DEFAULT NULL,
  `noNights` varchar(10) DEFAULT NULL,
  `fromDay` varchar(100) DEFAULT NULL,
  `toDay` varchar(100) DEFAULT NULL,
  `cityId` varchar(10) NOT NULL,
  `package_id` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cities` */

insert  into `cities`(`id`,`cityName`,`noNights`,`fromDay`,`toDay`,`cityId`,`package_id`) values 
(81,'','','','','3846','1623'),
(82,'','2','Fri May 13 2022','Sun May 15 2022','6139','4757'),
(83,'','2','Fri May 13 2022','Sun May 15 2022','8532','9584'),
(84,'','3','Fri May 13 2022','Mon May 16 2022','4287','2329'),
(85,'','1','Fri May 13 2022','Sat May 14 2022','5956','8400'),
(86,'','2','Fri May 13 2022','Sun May 15 2022','5837','8779'),
(87,'','3','Fri May 13 2022','Mon May 16 2022','4566','5323'),
(88,'banglore','2','Fri May 13 2022','Sun May 15 2022','6990','8483'),
(89,'','2','Fri May 13 2022','Sun May 15 2022','7819','3467'),
(90,'banglore','2','Fri May 13 2022','Sun May 15 2022','9989','2995'),
(91,'hydrabad','2','Fri May 13 2022','Sun May 15 2022','3206','5451'),
(92,'banglore','2','Fri May 13 2022','Sun May 15 2022','3374','8158'),
(93,'banglore','0','Fri May 13 2022','Fri May 13 2022','9603','9440'),
(94,'banglore','2','Fri May 13 2022','Sun May 15 2022','5532','9549'),
(95,'Dubai Bhurj Kalifa','0','Fri May 13 2022','Fri May 13 2022','1579','2335'),
(96,'bhurj kalifa dubai','2','Fri May 13 2022','Sun May 15 2022','3422','9940'),
(97,'bhurj kalifa','2','Fri May 13 2022','Sun May 15 2022','4909','4715'),
(98,'','2','','Invalid Date','7937','8474'),
(99,'','2','','Invalid Date','6368','8474'),
(100,'','2','','Invalid Date','2367','4592'),
(101,'','1','','Invalid Date','8252','7932'),
(102,'','1','','Invalid Date','5880','2262'),
(103,'','1','','Invalid Date','7581','2262'),
(104,'','2','','Invalid Date','7771','2262'),
(105,'','1','','Invalid Date','7852','3958'),
(106,'','1','','Invalid Date','7928','3958'),
(107,'','2','','Invalid Date','2817','9796'),
(108,'','3','','Invalid Date','1147','9796'),
(109,'','1','','Invalid Date','9466','9393'),
(110,'','','','','4488','7688'),
(111,'','2','','Invalid Date','4714','7688'),
(112,'','','','','6072','8204'),
(113,'','','','','8936','4460'),
(114,'','','','','5257','4460'),
(115,'','','','','5210','4723'),
(116,'','','','','9159','2847'),
(117,'','','','','5669','1977'),
(118,'','','','','7730','1977'),
(119,'','','','','5918','9506'),
(120,'','','','','7777','5259'),
(121,'','','','','3795','5219'),
(122,'','','','','4295','4550'),
(123,'','','','','5397','3638'),
(124,'','','','','7654','7584'),
(125,'','','','','5037','9931'),
(126,'','','','','1186','5712'),
(127,'','','','','8892','8240'),
(128,'','','','','7295','4393'),
(129,'','','','','6882','8767'),
(130,'banglore','2','','Invalid Date','5346','8767'),
(131,'','','','','8646','4226'),
(132,'','','','','8032','1487'),
(133,'Abu dubai','2','Fri May 13 2022','Sun May 15 2022','2311','6273'),
(134,'Bhurj Kalifa','4','Fri May 13 2022','Tue May 17 2022','4107','6273'),
(135,'bhurj kalifa ','3','Fri May 13 2022','Mon May 16 2022','9611','9148'),
(136,'Banglore','','','','7326',NULL),
(137,'banglore','2','Mon May 16 2022','Wed May 18 2022','1672','3198'),
(138,'','','','','7574','3198');

/*Table structure for table `city_master` */

DROP TABLE IF EXISTS `city_master`;

CREATE TABLE `city_master` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `city_master` */

insert  into `city_master`(`id`,`city_name`) values 
(1,'Dubai'),
(2,'AbuDhabi'),
(3,'Sharjah'),
(4,'Ajman'),
(5,'Sir Baniyas'),
(6,'Umm Al-Quwain'),
(7,'Fujairah'),
(8,'Ras Al Khaimah'),
(9,'Al Ain');

/*Table structure for table `excursion` */

DROP TABLE IF EXISTS `excursion`;

CREATE TABLE `excursion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tourname` varchar(100) DEFAULT NULL,
  `tourdesc` text NOT NULL,
  `adultprice` int(10) DEFAULT NULL,
  `childprice` varchar(50) DEFAULT NULL,
  `infantprice` varchar(50) DEFAULT NULL,
  `tourmapaddress` varchar(100) DEFAULT NULL,
  `operating_from` varchar(10) DEFAULT NULL,
  `operating_to` varchar(30) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `pax` varchar(50) NOT NULL,
  `vehicle_price` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `excursion` */

insert  into `excursion`(`id`,`tourname`,`tourdesc`,`adultprice`,`childprice`,`infantprice`,`tourmapaddress`,`operating_from`,`operating_to`,`type`,`pax`,`vehicle_price`) values 
(4,'Test Excursion Name','<p>adadfdsf daasadd</p>\r\n',20000,'','','banglore','2022-04-22','2022-04-30','','',''),
(5,'Dubai Aquarium & Under Water Zoo  -  Dubai, United Arab Emirates','<p>Dubai Aquarium &amp; Under Water Zoo &nbsp;-&nbsp;<strong>&nbsp;Dubai, United Arab Emirates</strong></p>\r\n',100,'200','1200','Bangalore North ','10:29','15:24','PVT','6','1000'),
(8,'testinrtyuip','<p>sdfrgthyjukil;rtyulo;</p>\r\n',100,'100','100','wertylowe34r','03:30','20:36','SIC','2','600'),
(9,'testing','<p>teseting 12</p>\r\n',200,'','','dubai test','23:30','04:25','SIC','6','500'),
(10,'burj','<p>test sic</p>\r\n',100,'','','test','11:14','12:14','PVT','6','100'),
(11,'burj','<p>testt</p>\r\n',300,'','','test ADD','13:49','13:53','PVT','10','600');

/*Table structure for table `followups` */

DROP TABLE IF EXISTS `followups`;

CREATE TABLE `followups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `followUptype` varchar(255) DEFAULT NULL,
  `followUpday` varchar(255) DEFAULT NULL,
  `followUpTime` varchar(255) DEFAULT NULL,
  `followUpCustomer` varchar(255) DEFAULT NULL,
  `followUpAssignTo` varchar(255) DEFAULT NULL,
  `followUpdetails` varchar(255) DEFAULT NULL,
  `followUpQueryStatus` varchar(255) DEFAULT NULL,
  `followUpRemarks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `followups` */

insert  into `followups`(`id`,`followUptype`,`followUpday`,`followUpTime`,`followUpCustomer`,`followUpAssignTo`,`followUpdetails`,`followUpQueryStatus`,`followUpRemarks`) values 
(2,'call','tomorrow','12:10','Megha','Self','test','No Status','test remarks');

/*Table structure for table `hotel` */

DROP TABLE IF EXISTS `hotel`;

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotelname` varchar(100) DEFAULT NULL,
  `hoteldesc` longblob,
  `hotelmapaddress` varchar(15) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `hotelamenities` varchar(1000) DEFAULT NULL,
  `checkintime` varchar(50) DEFAULT NULL,
  `checkouttime` varchar(50) DEFAULT NULL,
  `hotelpolicy` longblob,
  `hotelpayments` varchar(50) DEFAULT NULL,
  `hotelemail` varchar(50) DEFAULT NULL,
  `hotelwebsite` varchar(50) DEFAULT NULL,
  `hotelphone` varchar(50) DEFAULT NULL,
  `hotelstars` varchar(11) DEFAULT NULL,
  `propertytype` varchar(50) DEFAULT NULL,
  `total_markup` varchar(100) DEFAULT NULL,
  `total_markup_per` varchar(50) DEFAULT NULL,
  `hotelstatus` varchar(50) DEFAULT NULL,
  `supplier` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `hotel` */

insert  into `hotel`(`id`,`hotelname`,`hoteldesc`,`hotelmapaddress`,`latitude`,`longitude`,`hotelamenities`,`checkintime`,`checkouttime`,`hotelpolicy`,`hotelpayments`,`hotelemail`,`hotelwebsite`,`hotelphone`,`hotelstars`,`propertytype`,`total_markup`,`total_markup_per`,`hotelstatus`,`supplier`) values 
(12,'taj','<p>gjhgjhgjh</p>\r\n','Dubai',NULL,NULL,'Airport Transport,Business Center,Disabled Facilities,Night Club,Laundry Service,Restaurant,Wi-Fi Internet,Bar Lounge','12 AM','11 AM','test','Credit Card,Credit Card,Credit Card,Credit Card,Cr','sdg@gmail.com','https://test.com','099878789','2','Guest House',NULL,NULL,NULL,'Monish R H'),
(14,'testing yashwanth hotel new','<p>okay&nbsp; bangalore</p>\r\n','Dubai',NULL,NULL,'Airport Transport,Business Center,Night Club,Laundry Service,Restaurant','12 AM','06 AM','okertyuiop','Wire Transfer,American Express,Wire Transfer,Ameri','yashu@hotel.com456789','yrpit,cghjk,ertyu','987654332123w','3','Guest House',NULL,NULL,'Yes','hel lo'),
(16,'test hotel','<p>testing</p>\r\n','Sharjah',NULL,NULL,'Night Club','12 AM','12 AM','test','Credit Card,Credit Card','hotel@gmail.com','adAFf9629751192','9629751192','1','Apartment',NULL,NULL,NULL,'Monish R H'),
(17,'test hotel 2','<p>dsgvszdva</p>\r\n','Fujairah',NULL,NULL,'Shuttle Bus Service','03 AM','01 AM','asaF','Paypal','hotel@gmail.com','adAFf9629751192','9629751192','1','Apartment',NULL,NULL,NULL,'Monish R H');

/*Table structure for table `hotel_voucher_confirmation` */

DROP TABLE IF EXISTS `hotel_voucher_confirmation`;

CREATE TABLE `hotel_voucher_confirmation` (
  `id` int(11) NOT NULL,
  `query_id` varchar(255) NOT NULL,
  `query_hotel_id` varchar(255) NOT NULL,
  `confirmation_id` varchar(255) NOT NULL,
  `board` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `hotel_voucher_confirmation` */

insert  into `hotel_voucher_confirmation`(`id`,`query_id`,`query_hotel_id`,`confirmation_id`,`board`,`created_at`,`updated_at`) values 
(1,'8845','2','1234',NULL,'2022-07-26 15:42:16','2022-07-28 15:58:25'),
(2,'8845','3','5678',NULL,'2022-07-26 15:42:16','2022-07-28 15:58:25'),
(1,'8845','2','1234',NULL,'2022-07-26 15:42:16','2022-07-28 15:58:57'),
(2,'8845','3','5678',NULL,'2022-07-26 15:42:16','2022-07-28 15:58:57'),
(0,'8700','1','1234456',NULL,'2022-07-28 16:03:13','2022-07-28 16:03:13');

/*Table structure for table `invoice` */

DROP TABLE IF EXISTS `invoice`;

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billTo` varchar(255) DEFAULT NULL,
  `clientName` varchar(255) DEFAULT NULL,
  `invoiceCurrency` varchar(255) DEFAULT NULL,
  `invoiceDate` date DEFAULT NULL,
  `invoicePayment` varchar(255) DEFAULT NULL,
  `invoiceNumber` varchar(255) DEFAULT NULL,
  `invoiceClientAddress` varchar(255) DEFAULT NULL,
  `invoicePhoneNumber` varchar(255) DEFAULT NULL,
  `ClientCity` varchar(255) DEFAULT NULL,
  `ClientVat` varchar(255) DEFAULT NULL,
  `invoiceCategory` varchar(255) DEFAULT NULL,
  `invoiceNum` varchar(255) DEFAULT NULL,
  `invoiceComment` varchar(255) DEFAULT NULL,
  `invoiceQty` varchar(255) DEFAULT NULL,
  `invoiceRate` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `invoiceDiscountChoice` varchar(255) DEFAULT NULL,
  `invoiceDiscount` varchar(255) DEFAULT NULL,
  `invoiceAmount` varchar(255) DEFAULT NULL,
  `invoiceMarkupChoice` varchar(255) DEFAULT NULL,
  `invoiceMarkup` varchar(255) DEFAULT NULL,
  `invoiceSubtotal` varchar(255) DEFAULT NULL,
  `invoiceVatChoice` varchar(255) DEFAULT NULL,
  `invoiceVat` varchar(255) DEFAULT NULL,
  `invoiceTotalAmount` varchar(255) DEFAULT NULL,
  `finalSubtotal` varchar(255) DEFAULT NULL,
  `finalVAT` varchar(255) DEFAULT NULL,
  `finalTotalInvoice` varchar(255) DEFAULT NULL,
  `finalAdvance` varchar(255) DEFAULT NULL,
  `finalBalance` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `TrmsCond` varchar(255) DEFAULT NULL,
  `query_id` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `invoice` */

insert  into `invoice`(`id`,`billTo`,`clientName`,`invoiceCurrency`,`invoiceDate`,`invoicePayment`,`invoiceNumber`,`invoiceClientAddress`,`invoicePhoneNumber`,`ClientCity`,`ClientVat`,`invoiceCategory`,`invoiceNum`,`invoiceComment`,`invoiceQty`,`invoiceRate`,`total`,`invoiceDiscountChoice`,`invoiceDiscount`,`invoiceAmount`,`invoiceMarkupChoice`,`invoiceMarkup`,`invoiceSubtotal`,`invoiceVatChoice`,`invoiceVat`,`invoiceTotalAmount`,`finalSubtotal`,`finalVAT`,`finalTotalInvoice`,`finalAdvance`,`finalBalance`,`notes`,`TrmsCond`,`query_id`) values 
(2,'ABC Company',NULL,NULL,'2022-05-26','2022-05-29','1232334','abc@gmail.com','3452345678','Banglore',NULL,NULL,'1232323',NULL,NULL,NULL,'200','%','10','','%','10','','','9.9',NULL,'198','9.9','207.9','120','0','<p>Test</p>\r\n','<p>Test</p>\r\n',NULL),
(3,'Yrp Solutions',NULL,'USD','2022-05-27','2022-05-28','3423121','yrp@gmail.com','9878907678','Chikaballapur','Yes','Flight','2323','test','2','1000','2000','%','20','1900','Fixed','900','2800','','950','19950','19000','950','19950','1900','0','<p>Testing Notes</p>\r\n','<p>Testing Terms</p>\r\n',NULL),
(4,'B2B Company','Megha','INR','2022-05-28','2022-05-29','342123434','megha@gmail.com','98898675678','Banglore','123421212','Hotel','','','2','1000','2000','Fixed','100','1900','Fixed','20','1920','','191','3820','3820','191','4011','500','3511','<p>Tetsing</p>\r\n','<p>tesing</p>\r\n',NULL),
(5,'Monisj','wsedrf','USD','2022-06-08','2022-06-15','1232335','rhmonish@gmail.com','123456787654321','xcvbhj',NULL,'',NULL,NULL,NULL,'1000','1000',NULL,NULL,'1000','Fixed','5','1005',NULL,'50.25','1055.25','1005','50.25','1055.25','','0.00','<p>test</p>\r\n','<p>test</p>\r\n',NULL),
(6,'Test','Test','AED','2022-07-12','2022-07-27','1232335','test@gmail.com','9740687413',NULL,NULL,NULL,NULL,NULL,'4','3000',NULL,NULL,NULL,'6000',NULL,NULL,'6000',NULL,'5','6000','6000','300','6300','0','6300','<p>TEST 1</p>\r\n','<p>TEST2</p>\r\n',NULL),
(7,'Test','Test','AED','2022-07-12','2022-07-27','1232335','test1@gmail.com','9740687413',NULL,NULL,NULL,NULL,NULL,'4','300',NULL,NULL,NULL,NULL,NULL,NULL,'1200','60','5','1200','1200','60','1260','0','630','<p>test123</p>\r\n','<p>test1234</p>\r\n',NULL),
(8,'Test','Test','AED','2022-07-12','2022-07-27','1232335','test2@gmail.com','9740687413',NULL,NULL,NULL,NULL,NULL,'4','300',NULL,NULL,NULL,NULL,NULL,NULL,'600','30','5','600','600','30','630','30','600','<p>test123</p>\r\n','<p>test1234</p>\r\n',NULL),
(9,'Test','Test','AED','2022-07-12','2022-07-27','1232335','test3@gmail.com','9740687413',NULL,NULL,NULL,NULL,NULL,'6','400',NULL,NULL,NULL,NULL,NULL,NULL,'1400','70','5','1400','1400','70','1470','70','1400','<p>test1234</p>\r\n','<p>teast12345</p>\r\n',NULL),
(10,'Test','Test','AED','2022-07-12','2022-07-27','1232335','test4@gmail.com','9740687413',NULL,NULL,NULL,NULL,NULL,'4','200',NULL,NULL,NULL,NULL,NULL,NULL,'400','20','5','400','400','20','420','10','410','','',NULL),
(12,'Test','Test','AED','2022-07-12','2022-07-27','1232335','test@gmail.com','9740687413',NULL,NULL,'dgvzsg,gdggss',NULL,NULL,'4','300',NULL,NULL,NULL,NULL,NULL,NULL,'600','30','5','600','600','30','630','0','630','<p>dzgz</p>\r\n','<p>dsgzs</p>\r\n',8858);

/*Table structure for table `invoicepayment` */

DROP TABLE IF EXISTS `invoicepayment`;

CREATE TABLE `invoicepayment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payId` varchar(11) DEFAULT NULL,
  `payAmount` varchar(255) DEFAULT NULL,
  `payType` varchar(255) DEFAULT NULL,
  `payDate` varchar(255) DEFAULT NULL,
  `payNotes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `invoicepayment` */

insert  into `invoicepayment`(`id`,`payId`,`payAmount`,`payType`,`payDate`,`payNotes`) values 
(1,'2','20','Net Banking','',''),
(2,'2','40','Debit Card','2022-05-27','test'),
(3,'2','40','Credit Card','2022-05-28','sadd'),
(4,'','100','Credit Card','2022-06-15','12345'),
(5,'','2000','Credit Card','2022-06-08','1234'),
(6,'3','500','Cash','2022-06-15','qq'),
(7,'3','450','Net Banking','2022-07-11','');

/*Table structure for table `itinerary` */

DROP TABLE IF EXISTS `itinerary`;

CREATE TABLE `itinerary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Itinerary_name` varchar(255) DEFAULT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `starting_from` varchar(255) DEFAULT NULL,
  `going_to` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `to_date` varchar(255) DEFAULT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `no_nights` varchar(255) NOT NULL,
  `query_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `itinerary` */

/*Table structure for table `itinery_data` */

DROP TABLE IF EXISTS `itinery_data`;

CREATE TABLE `itinery_data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `query_id` int(10) DEFAULT NULL,
  `day` int(10) DEFAULT NULL,
  `hotel_name` varchar(250) DEFAULT NULL,
  `hotel_category` varchar(250) DEFAULT NULL,
  `hotel_room_type` varchar(250) DEFAULT NULL,
  `hotel_no_pax` int(10) DEFAULT NULL,
  `hotel_check_in_date` date DEFAULT NULL,
  `hotel_checkout_date` date DEFAULT NULL,
  `transfer_type` varchar(250) DEFAULT NULL,
  `transfer_pax` int(10) DEFAULT NULL,
  `transfer_from_date` date DEFAULT NULL,
  `transfer_pickup` varchar(250) DEFAULT NULL,
  `transfer_dropoff` varchar(250) DEFAULT NULL,
  `transfer_route_name` varchar(250) DEFAULT NULL,
  `transfer` varchar(250) DEFAULT NULL,
  `meal_resturant_name` varchar(250) DEFAULT NULL,
  `meal` varchar(250) DEFAULT NULL,
  `meal_type` varchar(250) DEFAULT NULL,
  `meal_adult` int(10) DEFAULT NULL,
  `meal_child` int(10) DEFAULT NULL,
  `excursion_type` varchar(250) DEFAULT NULL,
  `excursion_name` varchar(250) DEFAULT NULL,
  `excursion_adult` int(10) DEFAULT NULL,
  `excursion_child` int(10) DEFAULT NULL,
  `excursion_infant` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `itinery_data` */

insert  into `itinery_data`(`id`,`query_id`,`day`,`hotel_name`,`hotel_category`,`hotel_room_type`,`hotel_no_pax`,`hotel_check_in_date`,`hotel_checkout_date`,`transfer_type`,`transfer_pax`,`transfer_from_date`,`transfer_pickup`,`transfer_dropoff`,`transfer_route_name`,`transfer`,`meal_resturant_name`,`meal`,`meal_type`,`meal_adult`,`meal_child`,`excursion_type`,`excursion_name`,`excursion_adult`,`excursion_child`,`excursion_infant`) values 
(6,8700,1,'taj','2','Two-Bedroom Apartment',0,'2022-06-26','2022-06-26','Internal TransferTransArrival',0,'2022-06-26','DXB','sharjah Airport','DXB- sharajah aiprport onPVT basis','Internal TransferTransArrival','Standard','Lunch','Non-Veg',2,1,'SIC','testinrtyui;p\'',1,1,1),
(5,8700,2,'testing yashwanth hotel new','3','One-Bedroom Apartment',0,'2022-06-26','2022-06-27','Point to Point TransferTransDeparture',0,'2022-06-26','burj kalifa','citymax hotel','burj-citymax hotel','Point to Point TransferTransDeparture','Premium','Dinner','Non-Veg',2,1,'SIC','testinrtyui;p\'',1,1,1),
(7,8700,3,'taj','2','Two-Bedroom Apartment',0,'2022-06-26','2022-06-28','Internal TransferTransDeparture',0,'2022-06-26','DXB','sharjah Airport','DXB- sharajah aiprport onPVT basis','Internal TransferTransDeparture','Standard','Dinner','Non-Veg',2,1,'SIC','testinrtyui;p\'',1,1,1),
(8,8700,4,'testing yashwanth hotel new','3','One-Bedroom Apartment',0,'2022-06-26','2022-06-28','Internal TransferTransDeparture',0,'2022-06-26','DXB','sharjah Airport','DXB- sharajah aiprport onPVT basis','Internal TransferTransDeparture','Standard','Dinner','Non-Veg',2,1,'SIC','testinrtyui;p\'',1,1,1),
(9,8858,1,'','','',0,'0000-00-00','0000-00-00','',0,'0000-00-00','','','','','','','',0,0,'','',0,0,0),
(10,8858,3,'','','',0,'0000-00-00','0000-00-00','',0,'0000-00-00','','','','','','','',0,0,'','',0,0,0),
(11,8858,4,'','','',0,'0000-00-00','0000-00-00','',0,'0000-00-00','','','','','','','',0,0,'','',0,0,0),
(12,8858,2,'','','',0,'0000-00-00','0000-00-00','',0,'0000-00-00','','','','','','','',0,0,'','',0,0,0);

/*Table structure for table `meals` */

DROP TABLE IF EXISTS `meals`;

CREATE TABLE `meals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meal_name` varchar(100) NOT NULL,
  `meal_type` varchar(100) NOT NULL,
  `adult_price` int(50) NOT NULL,
  `resturant_type` varchar(250) NOT NULL,
  `child_rate` int(50) NOT NULL,
  `resturant_name` varchar(50) DEFAULT NULL,
  `transfer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `meals` */

insert  into `meals`(`id`,`meal_name`,`meal_type`,`adult_price`,`resturant_type`,`child_rate`,`resturant_name`,`transfer`) values 
(4,'Dinner','Veg',2000,'Standard',1000,'Vegworld','with_transfer'),
(5,'Dinner','Veg',2500,'Standard',2000,'Standard','with_transfer'),
(6,'Lunch','Veg',4500,'Standard',2500,'Rajdhani','with_transfer'),
(7,'Lunch','Veg',12000,'Premium',6000,'Maharaja Bhaog','without_transfer'),
(8,'Lunch','Veg',7000,'Premium',3500,'Rasoigar','without_transfer'),
(9,'Dinner','Veg',6000,'Premium',3000,'Lapita - Bol Gappa Resturant','without_transfer'),
(10,'Lunch','Non-veg',8000,'Premium',4000,'Non veg Hotel','without_transfer'),
(11,'Lunch','Veg',1223344,'Standard',2114,'  test1','with_transfer');

/*Table structure for table `package` */

DROP TABLE IF EXISTS `package`;

CREATE TABLE `package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `query_id` varchar(50) NOT NULL,
  `package_title` longblob NOT NULL,
  `inclusion_supplier` varchar(50) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `distance_covered` longblob NOT NULL,
  `hotel_city` varchar(50) NOT NULL,
  `checkin` varchar(50) NOT NULL,
  `nights` varchar(10) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `meal_plan` varchar(50) NOT NULL,
  `transport_type` varchar(50) NOT NULL,
  `fromdate_transport` varchar(50) NOT NULL,
  `fromcity_transport` varchar(100) NOT NULL,
  `todate_transport` varchar(50) NOT NULL,
  `tocity_transport` varchar(100) NOT NULL,
  `transport_desc` varchar(250) NOT NULL,
  `visa_details` longblob NOT NULL,
  `price_per_adult` varchar(50) NOT NULL,
  `total_cost_visa` varchar(50) NOT NULL,
  `markup_visa` varchar(50) NOT NULL,
  `final_cost_visa` varchar(50) NOT NULL,
  `transfer_details` longblob NOT NULL,
  `pricing_info_type` varchar(50) NOT NULL,
  `pricing_info_curreny` varchar(50) NOT NULL,
  `visa_total_cost_per` varchar(50) NOT NULL,
  `visa_total_cost` varchar(50) NOT NULL,
  `visa_total_markup` varchar(50) NOT NULL,
  `package_total_cost_per` varchar(50) NOT NULL,
  `package_total_cost` varchar(50) NOT NULL,
  `package_markup` varchar(50) NOT NULL,
  `total_package_cost` varchar(50) NOT NULL,
  `inclusions` longblob NOT NULL,
  `exclusions` longblob NOT NULL,
  `cancelation_policy` longblob NOT NULL,
  `general_info` longblob NOT NULL,
  `booking_terms` longblob NOT NULL,
  `refund` longblob NOT NULL,
  `whyuseus` longblob NOT NULL,
  `buildPackageConditions` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `package` */

insert  into `package`(`id`,`query_id`,`package_title`,`inclusion_supplier`,`supplier`,`distance_covered`,`hotel_city`,`checkin`,`nights`,`hotel_name`,`room_type`,`meal_plan`,`transport_type`,`fromdate_transport`,`fromcity_transport`,`todate_transport`,`tocity_transport`,`transport_desc`,`visa_details`,`price_per_adult`,`total_cost_visa`,`markup_visa`,`final_cost_visa`,`transfer_details`,`pricing_info_type`,`pricing_info_curreny`,`visa_total_cost_per`,`visa_total_cost`,`visa_total_markup`,`package_total_cost_per`,`package_total_cost`,`package_markup`,`total_package_cost`,`inclusions`,`exclusions`,`cancelation_policy`,`general_info`,`booking_terms`,`refund`,`whyuseus`,`buildPackageConditions`) values 
(1,'8204','Quick Package','Hotel','m1m software technologies','test','AM','2022-06-25','1','tst','tst','FB','Cab','2022-06-25','Bangalore','2022-06-28','tes','ok','ok','1000','8000','2000','10000','ok','onlyPrice','AED','1000','100','1100','1000','1100','100','2200','okay','oka','ok','ok','kk','ok','k','ok');

/*Table structure for table `pricing_info` */

DROP TABLE IF EXISTS `pricing_info`;

CREATE TABLE `pricing_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `query_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `hotel_price` int(20) DEFAULT '0',
  `meal_price` int(20) DEFAULT '0',
  `transfer_price` int(20) DEFAULT '0',
  `excursion_price` int(20) DEFAULT '0',
  `package_price` int(20) DEFAULT '0',
  `visa_price` int(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `pricing_info` */

insert  into `pricing_info`(`id`,`query_id`,`user_id`,`user_name`,`hotel_price`,`meal_price`,`transfer_price`,`excursion_price`,`package_price`,`visa_price`) values 
(1,8700,11,'Admin',9700,3333,200,100,500,100),
(3,8701,13,'test',2000,600,300,200,600,200),
(6,8858,11,'Admin',0,3030,300,2100,51058,2000);

/*Table structure for table `queries` */

DROP TABLE IF EXISTS `queries`;

CREATE TABLE `queries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `checkin_date` varchar(10) DEFAULT NULL,
  `no_pax` int(20) DEFAULT NULL,
  `no_nights` int(10) DEFAULT NULL,
  `destinations` varchar(100) DEFAULT NULL,
  `query_stages` varchar(100) DEFAULT NULL,
  `handled_by` varchar(100) DEFAULT NULL,
  `added_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `queries` */

insert  into `queries`(`id`,`date`,`contact`,`description`,`type`,`checkin_date`,`no_pax`,`no_nights`,`destinations`,`query_stages`,`handled_by`,`added_by`) values 
(12,'4/9/2022','9740687413','test','Single Roo','4/22/2022',2,2,'singapore','xyz','jhon','User'),
(13,'4/16/2022','987654321','test rgfdgfdd','Single Roo','4/22/2022',3,3,'singapore','xyz','jhon','Admin'),
(14,'4/2/2022','9740687413','test dfdfs','Single Room','4/23/2022',2,2,'singapore','xyz','ssssa','Admin');

/*Table structure for table `query_hotel` */

DROP TABLE IF EXISTS `query_hotel`;

CREATE TABLE `query_hotel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `query_id` int(10) DEFAULT NULL,
  `hotel_city` varchar(250) DEFAULT NULL,
  `checkin` varchar(50) DEFAULT NULL,
  `nights` varchar(50) DEFAULT NULL,
  `hotel_id` int(10) DEFAULT NULL,
  `room_type` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `booked_by` varchar(50) DEFAULT NULL,
  `buildPackageInclusions` longblob,
  `buildPackageExclusions` longblob,
  `buildPackageConditions` longblob,
  `buildPackageCancellations` longblob,
  `buildPackageRefund` longblob,
  `category` varchar(50) DEFAULT NULL,
  `total_price` int(50) DEFAULT '0',
  `created_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=271 DEFAULT CHARSET=latin1;

/*Data for the table `query_hotel` */

insert  into `query_hotel`(`id`,`query_id`,`hotel_city`,`checkin`,`nights`,`hotel_id`,`room_type`,`created_at`,`booked_by`,`buildPackageInclusions`,`buildPackageExclusions`,`buildPackageConditions`,`buildPackageCancellations`,`buildPackageRefund`,`category`,`total_price`,`created_by`) values 
(266,8893,'Dubai','2022-08-08','0',0,'Select','2022-08-08','','','','    v  Rooms and rates are subject to availability at the time of actual booking.\n\n    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.\n\n    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance\n\n    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles\n\n    v  Any change in the number of passengers will lead to a revision of the quote.\n\n    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.\n\n    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage\n\n    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai\n\n    v  OK TO BOARD Message update as per airline’s policy\n\n    v  Visa processing may take anywhere between 3 – 5 working days to get approved\n\n    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.\n\n    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).\n\n    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.\n\n    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.\n\n    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.\n\n    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.\n  ','        Cancellation Terms: FIT\n        Cancellation Terms:  Groups (MICE)\n\n        25% cancellation within 30 days before travel.\n        25% cancellation within 30 days before travel.\n\n        50% cancellation within 10 days before Travel. \n        50% cancellation within 15 days before Travel.\n\n        75% cancellation within 07 days before Travel.  \n        100% cancellation within 07 days before Travel.\n        \n        Any cancellation within 04 days will lead to 100% cancellation charge. \n        Any cancellation within 04 days will lead to 100% cancellation charge.\n  ',NULL,'1',0,'11'),
(270,8858,'Dubai','2022-07-07','0',0,'Select','2022-08-09','','','','    v  Rooms and rates are subject to availability at the time of actual booking.\n\n    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.\n\n    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance\n\n    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles\n\n    v  Any change in the number of passengers will lead to a revision of the quote.\n\n    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.\n\n    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage\n\n    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai\n\n    v  OK TO BOARD Message update as per airline’s policy\n\n    v  Visa processing may take anywhere between 3 – 5 working days to get approved\n\n    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.\n\n    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).\n\n    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.\n\n    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.\n\n    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.\n\n    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.\n  ','        Cancellation Terms: FIT\n        Cancellation Terms:  Groups (MICE)\n\n        25% cancellation within 30 days before travel.\n        25% cancellation within 30 days before travel.\n\n        50% cancellation within 10 days before Travel. \n        50% cancellation within 15 days before Travel.\n\n        75% cancellation within 07 days before Travel.  \n        100% cancellation within 07 days before Travel.\n        \n        Any cancellation within 04 days will lead to 100% cancellation charge. \n        Any cancellation within 04 days will lead to 100% cancellation charge.\n  ',NULL,'1',0,'11'),
(199,8465,'Dubai','2022-08-07','0',0,'Select','2022-08-07','','','','    v  Rooms and rates are subject to availability at the time of actual booking.\n\n    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.\n\n    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance\n\n    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles\n\n    v  Any change in the number of passengers will lead to a revision of the quote.\n\n    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.\n\n    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage\n\n    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai\n\n    v  OK TO BOARD Message update as per airline’s policy\n\n    v  Visa processing may take anywhere between 3 – 5 working days to get approved\n\n    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.\n\n    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).\n\n    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.\n\n    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.\n\n    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.\n\n    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.\n  ','        Cancellation Terms: FIT\n        Cancellation Terms:  Groups (MICE)\n\n        25% cancellation within 30 days before travel.\n        25% cancellation within 30 days before travel.\n\n        50% cancellation within 10 days before Travel. \n        50% cancellation within 15 days before Travel.\n\n        75% cancellation within 07 days before Travel.  \n        100% cancellation within 07 days before Travel.\n        \n        Any cancellation within 04 days will lead to 100% cancellation charge. \n        Any cancellation within 04 days will lead to 100% cancellation charge.\n  ',NULL,'1',0,'11'),
(117,8700,'Dubai','2022-06-26','Select',0,'Select','2022-08-02','','','','    v  Rooms and rates are subject to availability at the time of actual booking.\n\n    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.\n\n    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance\n\n    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles\n\n    v  Any change in the number of passengers will lead to a revision of the quote.\n\n    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.\n\n    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage\n\n    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai\n\n    v  OK TO BOARD Message update as per airline’s policy\n\n    v  Visa processing may take anywhere between 3 – 5 working days to get approved\n\n    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.\n\n    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).\n\n    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.\n\n    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.\n\n    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.\n\n    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.\n  ','        Cancellation Terms: FIT\n        Cancellation Terms:  Groups (MICE)\n\n        25% cancellation within 30 days before travel.\n        25% cancellation within 30 days before travel.\n\n        50% cancellation within 10 days before Travel. \n        50% cancellation within 15 days before Travel.\n\n        75% cancellation within 07 days before Travel.  \n        100% cancellation within 07 days before Travel.\n        \n        Any cancellation within 04 days will lead to 100% cancellation charge. \n        Any cancellation within 04 days will lead to 100% cancellation charge.\n  ','','1',0,'11'),
(41,8701,'Dubai','2022-06-28','2',14,'One-Bedroom Apartment','2022-07-27','','','','    v  Rooms and rates are subject to availability at the time of actual booking.\n\n    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.\n\n    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance\n\n    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles\n\n    v  Any change in the number of passengers will lead to a revision of the quote.\n\n    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.\n\n    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage\n\n    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai\n\n    v  OK TO BOARD Message update as per airline’s policy\n\n    v  Visa processing may take anywhere between 3 – 5 working days to get approved\n\n    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.\n\n    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).\n\n    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.\n\n    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.\n\n    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.\n\n    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.\n  ','        Cancellation Terms: FIT\n        Cancellation Terms:  Groups (MICE)\n\n        25% cancellation within 30 days before travel.\n        25% cancellation within 30 days before travel.\n\n        50% cancellation within 10 days before Travel. \n        50% cancellation within 15 days before Travel.\n\n        75% cancellation within 07 days before Travel.  \n        100% cancellation within 07 days before Travel.\n        \n        Any cancellation within 04 days will lead to 100% cancellation charge. \n        Any cancellation within 04 days will lead to 100% cancellation charge.\n  ','','3',500,'12'),
(114,8364,'Dubai','2022-07-29','Select',0,'Select','2022-07-31','','','','    v  Rooms and rates are subject to availability at the time of actual booking.\n\n    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.\n\n    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance\n\n    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles\n\n    v  Any change in the number of passengers will lead to a revision of the quote.\n\n    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.\n\n    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage\n\n    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai\n\n    v  OK TO BOARD Message update as per airline’s policy\n\n    v  Visa processing may take anywhere between 3 – 5 working days to get approved\n\n    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.\n\n    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).\n\n    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.\n\n    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.\n\n    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.\n\n    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.\n  ','        Cancellation Terms: FIT\n        Cancellation Terms:  Groups (MICE)\n\n        25% cancellation within 30 days before travel.\n        25% cancellation within 30 days before travel.\n\n        50% cancellation within 10 days before Travel. \n        50% cancellation within 15 days before Travel.\n\n        75% cancellation within 07 days before Travel.  \n        100% cancellation within 07 days before Travel.\n        \n        Any cancellation within 04 days will lead to 100% cancellation charge. \n        Any cancellation within 04 days will lead to 100% cancellation charge.\n  ','','1',0,'11');

/*Table structure for table `query_meals` */

DROP TABLE IF EXISTS `query_meals`;

CREATE TABLE `query_meals` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `query_id` int(50) NOT NULL,
  `adult` int(10) DEFAULT NULL,
  `child` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `resturent_name` varchar(250) DEFAULT NULL,
  `meal` varchar(250) DEFAULT NULL,
  `meal_type` varchar(250) DEFAULT NULL,
  `pricing` varchar(250) DEFAULT NULL,
  `buildPackageInclusions` longblob NOT NULL,
  `buildPackageExclusions` longblob NOT NULL,
  `buildPackageConditions` longblob NOT NULL,
  `buildPackageCancellations` longblob NOT NULL,
  `buildPackageRefund` longblob NOT NULL,
  `total_price` int(50) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `transfer` varchar(50) DEFAULT NULL,
  `resturant_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=218 DEFAULT CHARSET=latin1;

/*Data for the table `query_meals` */

insert  into `query_meals`(`id`,`query_id`,`adult`,`child`,`date`,`resturent_name`,`meal`,`meal_type`,`pricing`,`buildPackageInclusions`,`buildPackageExclusions`,`buildPackageConditions`,`buildPackageCancellations`,`buildPackageRefund`,`total_price`,`created_by`,`transfer`,`resturant_name`) values 
(86,8700,0,0,'2022-06-26 00:00:00','Standard','Lunch','Veg',NULL,'','','    v  Rooms and rates are subject to availability at the time of actual booking.\n\n    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.\n\n    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance\n\n    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles\n\n    v  Any change in the number of passengers will lead to a revision of the quote.\n\n    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.\n\n    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage\n\n    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai\n\n    v  OK TO BOARD Message update as per airline’s policy\n\n    v  Visa processing may take anywhere between 3 – 5 working days to get approved\n\n    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.\n\n    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).\n\n    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.\n\n    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.\n\n    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.\n\n    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.\n  ','        Cancellation Terms: FIT\n        Cancellation Terms:  Groups (MICE)\n\n        25% cancellation within 30 days before travel.\n        25% cancellation within 30 days before travel.\n\n        50% cancellation within 10 days before Travel. \n        50% cancellation within 15 days before Travel.\n\n        75% cancellation within 07 days before Travel.  \n        100% cancellation within 07 days before Travel.\n        \n        Any cancellation within 04 days will lead to 100% cancellation charge. \n        Any cancellation within 04 days will lead to 100% cancellation charge.\n  ','',0,NULL,NULL,NULL),
(146,8465,0,0,'2022-08-07 00:00:00','Standard','Lunch','Veg',NULL,'','','    v  Rooms and rates are subject to availability at the time of actual booking.\n\n    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.\n\n    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance\n\n    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles\n\n    v  Any change in the number of passengers will lead to a revision of the quote.\n\n    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.\n\n    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage\n\n    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai\n\n    v  OK TO BOARD Message update as per airline’s policy\n\n    v  Visa processing may take anywhere between 3 – 5 working days to get approved\n\n    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.\n\n    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).\n\n    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.\n\n    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.\n\n    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.\n\n    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.\n  ','        Cancellation Terms: FIT\n        Cancellation Terms:  Groups (MICE)\n\n        25% cancellation within 30 days before travel.\n        25% cancellation within 30 days before travel.\n\n        50% cancellation within 10 days before Travel. \n        50% cancellation within 15 days before Travel.\n\n        75% cancellation within 07 days before Travel.  \n        100% cancellation within 07 days before Travel.\n        \n        Any cancellation within 04 days will lead to 100% cancellation charge. \n        Any cancellation within 04 days will lead to 100% cancellation charge.\n  ','',0,NULL,NULL,NULL),
(84,8364,1,0,'2022-07-29 00:00:00','Standard','Lunch','Veg',NULL,'','','    v  Rooms and rates are subject to availability at the time of actual booking.\n\n    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.\n\n    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance\n\n    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles\n\n    v  Any change in the number of passengers will lead to a revision of the quote.\n\n    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.\n\n    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage\n\n    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai\n\n    v  OK TO BOARD Message update as per airline’s policy\n\n    v  Visa processing may take anywhere between 3 – 5 working days to get approved\n\n    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.\n\n    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).\n\n    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.\n\n    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.\n\n    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.\n\n    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.\n  ','        Cancellation Terms: FIT\n        Cancellation Terms:  Groups (MICE)\n\n        25% cancellation within 30 days before travel.\n        25% cancellation within 30 days before travel.\n\n        50% cancellation within 10 days before Travel. \n        50% cancellation within 15 days before Travel.\n\n        75% cancellation within 07 days before Travel.  \n        100% cancellation within 07 days before Travel.\n        \n        Any cancellation within 04 days will lead to 100% cancellation charge. \n        Any cancellation within 04 days will lead to 100% cancellation charge.\n  ','',600,11,NULL,NULL),
(213,8893,0,0,'2022-08-08 00:00:00','Standard','Lunch','Veg',NULL,'','','    v  Rooms and rates are subject to availability at the time of actual booking.\n\n    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.\n\n    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance\n\n    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles\n\n    v  Any change in the number of passengers will lead to a revision of the quote.\n\n    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.\n\n    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage\n\n    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai\n\n    v  OK TO BOARD Message update as per airline’s policy\n\n    v  Visa processing may take anywhere between 3 – 5 working days to get approved\n\n    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.\n\n    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).\n\n    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.\n\n    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.\n\n    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.\n\n    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.\n  ','        Cancellation Terms: FIT\n        Cancellation Terms:  Groups (MICE)\n\n        25% cancellation within 30 days before travel.\n        25% cancellation within 30 days before travel.\n\n        50% cancellation within 10 days before Travel. \n        50% cancellation within 15 days before Travel.\n\n        75% cancellation within 07 days before Travel.  \n        100% cancellation within 07 days before Travel.\n        \n        Any cancellation within 04 days will lead to 100% cancellation charge. \n        Any cancellation within 04 days will lead to 100% cancellation charge.\n  ','',0,NULL,NULL,NULL),
(217,8858,0,0,'2022-07-07 00:00:00','Standard','Lunch','Veg',NULL,'','','    v  Rooms and rates are subject to availability at the time of actual booking.\n\n    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.\n\n    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance\n\n    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles\n\n    v  Any change in the number of passengers will lead to a revision of the quote.\n\n    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.\n\n    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage\n\n    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai\n\n    v  OK TO BOARD Message update as per airline’s policy\n\n    v  Visa processing may take anywhere between 3 – 5 working days to get approved\n\n    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.\n\n    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).\n\n    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.\n\n    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.\n\n    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.\n\n    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.\n  ','        Cancellation Terms: FIT\n        Cancellation Terms:  Groups (MICE)\n\n        25% cancellation within 30 days before travel.\n        25% cancellation within 30 days before travel.\n\n        50% cancellation within 10 days before Travel. \n        50% cancellation within 15 days before Travel.\n\n        75% cancellation within 07 days before Travel.  \n        100% cancellation within 07 days before Travel.\n        \n        Any cancellation within 04 days will lead to 100% cancellation charge. \n        Any cancellation within 04 days will lead to 100% cancellation charge.\n  ','',0,NULL,'','select');

/*Table structure for table `queryexcusion` */

DROP TABLE IF EXISTS `queryexcusion`;

CREATE TABLE `queryexcusion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queryId` varchar(11) DEFAULT NULL,
  `created_date` varchar(255) DEFAULT NULL,
  `Edestination` varchar(255) DEFAULT NULL,
  `EtourDate` varchar(255) DEFAULT NULL,
  `ENatioality` varchar(255) DEFAULT NULL,
  `EnoOfPax` varchar(255) DEFAULT NULL,
  `Eadults` varchar(255) DEFAULT NULL,
  `Echild` varchar(255) DEFAULT NULL,
  `Eremarks` varchar(255) DEFAULT NULL,
  `EassignTo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `queryexcusion` */

insert  into `queryexcusion`(`id`,`queryId`,`created_date`,`Edestination`,`EtourDate`,`ENatioality`,`EnoOfPax`,`Eadults`,`Echild`,`Eremarks`,`EassignTo`) values 
(1,'8234',NULL,'','2022-05-21','aXZ','2','23','','','Self'),
(2,'8071',NULL,'qeqwe','2022-05-19','qwe','2','20','sdf','dsf','ABC'),
(3,'8838','2022-06-07','kashi','2022-06-17','india','20','18','2','mnbvc','XYZ');

/*Table structure for table `queryhotel` */

DROP TABLE IF EXISTS `queryhotel`;

CREATE TABLE `queryhotel` (
  `id` int(11) NOT NULL,
  `query_id` varchar(50) NOT NULL,
  `package_title` longblob NOT NULL,
  `inclusion_supplier` varchar(50) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `distance_covered` longblob NOT NULL,
  `hotel_city` varchar(50) NOT NULL,
  `checkin` varchar(50) NOT NULL,
  `nights` varchar(10) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `meal_plan` varchar(50) NOT NULL,
  `transport_type` varchar(50) NOT NULL,
  `fromdate_transport` varchar(50) NOT NULL,
  `fromcity_transport` varchar(100) NOT NULL,
  `todate_transport` varchar(50) NOT NULL,
  `tocity_transport` varchar(100) NOT NULL,
  `transport_desc` varchar(250) NOT NULL,
  `visa_details` longblob NOT NULL,
  `price_per_adult` varchar(50) NOT NULL,
  `total_cost_visa` varchar(50) NOT NULL,
  `markup_visa` varchar(50) NOT NULL,
  `final_cost_visa` varchar(50) NOT NULL,
  `transfer_details` longblob NOT NULL,
  `pricing_info_type` varchar(50) NOT NULL,
  `pricing_info_curreny` varchar(50) NOT NULL,
  `visa_total_cost_per` varchar(50) NOT NULL,
  `visa_total_cost` varchar(50) NOT NULL,
  `visa_total_markup` varchar(50) NOT NULL,
  `package_total_cost_per` varchar(50) NOT NULL,
  `package_total_cost` varchar(50) NOT NULL,
  `package_markup` varchar(50) NOT NULL,
  `total_package_cost` varchar(50) NOT NULL,
  `inclusions` longblob NOT NULL,
  `exclusions` longblob NOT NULL,
  `cancelation_policy` longblob NOT NULL,
  `general_info` longblob NOT NULL,
  `booking_terms` longblob NOT NULL,
  `refund` longblob NOT NULL,
  `whyuseus` longblob NOT NULL,
  `buildPackageConditions` longblob NOT NULL,
  `created_at` date NOT NULL,
  `booked_by` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `queryhotel` */

insert  into `queryhotel`(`id`,`query_id`,`package_title`,`inclusion_supplier`,`supplier`,`distance_covered`,`hotel_city`,`checkin`,`nights`,`hotel_name`,`room_type`,`meal_plan`,`transport_type`,`fromdate_transport`,`fromcity_transport`,`todate_transport`,`tocity_transport`,`transport_desc`,`visa_details`,`price_per_adult`,`total_cost_visa`,`markup_visa`,`final_cost_visa`,`transfer_details`,`pricing_info_type`,`pricing_info_curreny`,`visa_total_cost_per`,`visa_total_cost`,`visa_total_markup`,`package_total_cost_per`,`package_total_cost`,`package_markup`,`total_package_cost`,`inclusions`,`exclusions`,`cancelation_policy`,`general_info`,`booking_terms`,`refund`,`whyuseus`,`buildPackageConditions`,`created_at`,`booked_by`) values 
(1,'8700','Quick Package','Hotel','m1m software technologies','test','AG','2022-06-26','1','tst','tst','BB','Cab','2022-06-26','Bangalore','','tes','ok','ok','1000','8000','2000','10000','','onlyPrice','AED','1000','100','1100','1000','1100','100','2200','ok','ok','ok','ok','ok','ok','ok','ok','2022-06-26','');

/*Table structure for table `querypackage` */

DROP TABLE IF EXISTS `querypackage`;

CREATE TABLE `querypackage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queryId` varchar(11) DEFAULT NULL,
  `created_date` varchar(255) DEFAULT NULL,
  `goingTo` varchar(655) DEFAULT NULL,
  `goingFrom` varchar(655) DEFAULT NULL,
  `specificDate` varchar(255) DEFAULT NULL,
  `noDaysFrom` varchar(255) DEFAULT NULL,
  `hotelPrefrence` varchar(655) DEFAULT NULL,
  `Packagetravelers` varchar(255) DEFAULT NULL,
  `currency` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `night` varchar(50) NOT NULL,
  `adult` varchar(50) NOT NULL,
  `child` varchar(50) NOT NULL,
  `child_age` int(10) NOT NULL,
  `infant` varchar(50) NOT NULL,
  `transfer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

/*Data for the table `querypackage` */

insert  into `querypackage`(`id`,`queryId`,`created_date`,`goingTo`,`goingFrom`,`specificDate`,`noDaysFrom`,`hotelPrefrence`,`Packagetravelers`,`currency`,`room`,`type`,`night`,`adult`,`child`,`child_age`,`infant`,`transfer`) values 
(38,'8952','2022-08-10','United Arab Emirates','Dubai','2022-08-10','2022-08-12','2','1','AED','1','Package','2','1','1',10,'1',NULL),
(39,'8952','2022-08-10','United Arab Emirates','Dubai','2022-08-10','2022-08-12','2','1','AED','1','Hotel','2','2','1',10,'1',NULL),
(40,'8952','2022-08-10','United Arab Emirates','Dubai','2022-08-11','2022-08-12','2','1','AED','1','Transfer','2','3','1',10,'1',NULL),
(41,'8190','2022-08-10','United Arab Emirates','Dubai','2022-08-11','2022-08-13','2','3','AED','1','Hotel','2','3','2',8,'1',NULL);

/*Table structure for table `querytransfer` */

DROP TABLE IF EXISTS `querytransfer`;

CREATE TABLE `querytransfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queryId` varchar(255) DEFAULT NULL,
  `created_date` varchar(255) DEFAULT NULL,
  `qtype` varchar(255) DEFAULT NULL,
  `TgoingTo` varchar(255) DEFAULT NULL,
  `TgoingFrom` varchar(255) DEFAULT NULL,
  `TspecificDate` varchar(255) DEFAULT NULL,
  `TnoOfDays` varchar(255) DEFAULT NULL,
  `Ttravelers` varchar(255) DEFAULT NULL,
  `pickUp` varchar(255) DEFAULT NULL,
  `Tpreference` varchar(255) DEFAULT NULL,
  `Tremarks` varchar(255) DEFAULT NULL,
  `Tassignto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `querytransfer` */

insert  into `querytransfer`(`id`,`queryId`,`created_date`,`qtype`,`TgoingTo`,`TgoingFrom`,`TspecificDate`,`TnoOfDays`,`Ttravelers`,`pickUp`,`Tpreference`,`Tremarks`,`Tassignto`) values 
(3,'8213','2022-06-06',NULL,'Mysysu','bangakore','2022-06-07','2022-06-14','1','Dubai','Standard','test','');

/*Table structure for table `queryvisa` */

DROP TABLE IF EXISTS `queryvisa`;

CREATE TABLE `queryvisa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queryId` varchar(255) DEFAULT NULL,
  `created_date` varchar(255) DEFAULT NULL,
  `visaCountry` varchar(255) DEFAULT NULL,
  `vCategory` varchar(255) DEFAULT NULL,
  `visaEntryType` varchar(255) DEFAULT NULL,
  `visaDateofTravel` varchar(255) DEFAULT NULL,
  `visaApplicants` varchar(255) DEFAULT NULL,
  `visaDuration` varchar(255) DEFAULT NULL,
  `visaNationality` varchar(255) DEFAULT NULL,
  `visaAssignTo` varchar(255) DEFAULT NULL,
  `visaTraveler` varchar(255) DEFAULT NULL,
  `visaFirstname` varchar(255) DEFAULT NULL,
  `visaLastname` varchar(255) DEFAULT NULL,
  `visaPax` varchar(255) DEFAULT NULL,
  `visaComment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `queryvisa` */

insert  into `queryvisa`(`id`,`queryId`,`created_date`,`visaCountry`,`vCategory`,`visaEntryType`,`visaDateofTravel`,`visaApplicants`,`visaDuration`,`visaNationality`,`visaAssignTo`,`visaTraveler`,`visaFirstname`,`visaLastname`,`visaPax`,`visaComment`) values 
(1,NULL,NULL,'Andorra','Tourism','Double Entry','2022-05-20','ZXX','23','erwfa','','Other','leads','test','Child','sdfdsf'),
(2,'8838','2022-06-07','india','Transit','Multi Entery','2022-06-08','5','a','AZ','Self','Other','cvbnm','sdfcvbn','Adult','aa');

/*Table structure for table `registration` */

DROP TABLE IF EXISTS `registration`;

CREATE TABLE `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `reg_type` varchar(20) DEFAULT NULL,
  `logged_in` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `registration` */

insert  into `registration`(`id`,`username`,`password`,`reg_type`,`logged_in`) values 
(1,'Admin','admin','Admin',1),
(2,'user','user','User',1),
(3,'a','a',NULL,NULL);

/*Table structure for table `room_type_master` */

DROP TABLE IF EXISTS `room_type_master`;

CREATE TABLE `room_type_master` (
  `id` int(11) DEFAULT NULL,
  `room_type` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `room_type_master` */

insert  into `room_type_master`(`id`,`room_type`) values 
(1,'SINGLE'),
(2,'DOUBLE'),
(3,'TWIN'),
(4,'TRIPLE'),
(5,'STUDIO'),
(6,'ONE BEDROOM'),
(7,'TWO BEDROOM'),
(8,'THREE BEDROOM'),
(9,'FOUR BEDROOM');

/*Table structure for table `rooms` */

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotelname` varchar(100) DEFAULT NULL,
  `hotel_id` varchar(50) NOT NULL,
  `roomtype` varchar(100) DEFAULT NULL,
  `room_desc` longblob,
  `roomamenities` varchar(1000) DEFAULT NULL,
  `netrate` varchar(250) DEFAULT NULL,
  `netrate_double` varchar(250) DEFAULT NULL,
  `netrate_extra` varchar(250) DEFAULT NULL,
  `vat` varchar(250) DEFAULT NULL,
  `vat_double` varchar(250) DEFAULT NULL,
  `vat_extra` varchar(250) DEFAULT NULL,
  `roomstatus` varchar(11) DEFAULT NULL,
  `bed` varchar(11) DEFAULT NULL,
  `bedtype` varchar(11) DEFAULT NULL,
  `adultsbase` varchar(11) NOT NULL,
  `childbase` varchar(11) DEFAULT NULL,
  `adultsmax` varchar(10) NOT NULL,
  `childmax` varchar(10) DEFAULT NULL,
  `guestmax` varchar(10) DEFAULT NULL,
  `from_date` varchar(10) NOT NULL,
  `to_date` varchar(50) DEFAULT NULL,
  `currency` varchar(10) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `netrate_extra_child` varchar(250) NOT NULL,
  `vat_extra_child` varchar(250) NOT NULL,
  `vat_extra_wo` varchar(250) NOT NULL,
  `netrate_extra_wo` varchar(250) NOT NULL,
  `supplementary_cost` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

/*Data for the table `rooms` */

insert  into `rooms`(`id`,`hotelname`,`hotel_id`,`roomtype`,`room_desc`,`roomamenities`,`netrate`,`netrate_double`,`netrate_extra`,`vat`,`vat_double`,`vat_extra`,`roomstatus`,`bed`,`bedtype`,`adultsbase`,`childbase`,`adultsmax`,`childmax`,`guestmax`,`from_date`,`to_date`,`currency`,`supplier`,`netrate_extra_child`,`vat_extra_child`,`vat_extra_wo`,`netrate_extra_wo`,`supplementary_cost`) values 
(10,'14','','One-Bedroom Apartment','<p>test9nmfdyuiopfghio&nbsp;test9nmfdyuiopfghiotest9nmfdyuiopfghiotest9nmfdyuiopfghiotest9nmfdyuiopfghiotest9nmfdyuiopfghiotest9nmfdyuiopfghiotest9nmfdyuiopfghiotest9nmfdyuiopfghiotest9nmfdyuiopfghio</p>\r\n','Climate control,Courtyard view,Individually decorated,In-room safe (laptop compatible),Shower/tub combination,Welcome amenities,Free Wi-Fi,Handheld showerhead','10098,1009,10034,1002','1001,1004,1002,1001','100,100,100,1000','109,100,107,108','523,51,55,56','15,85,75,50',NULL,'Twin Bed','Mattres','1','1','1',NULL,NULL,'2022-06-26','2022-06-30','AED','','100,2000,3000,4000','5,8,9,7','5,6,7,8','1000,2000,3000,2000',NULL),
(11,'12','','Two-Bedroom Apartment','                                <p>good</p>\r\n                            ','Extra towels/bedding,Individually decorated,Refrigerator','1000,,,','1200,,,','1000,,,','1000,,,','1000,,,','0,,,',NULL,'Twin Bed','No Extra Be','1','1','1',NULL,NULL,'2022-07-01','2022-07-31','AED','','500,,,','0,,,','0,,,','500,,,',NULL),
(12,'12','','SINGLE','','exterior corridors,Climate control,Extra towels/bedding,Individually decorated','1000,,,','2000,,,','500,,,','100,,,','200,,,',',,,',NULL,'Twin Bed','No Extra Be','2','1','1',NULL,NULL,'2022-08-01','2022-08-31','AED','','400,,,',',,,',',,,','300,,,',NULL),
(13,'12','','TWIN','','exterior corridors,Climate control,Extra towels/bedding,Individually decorated','2000,,,','4000,,,','1000,,,','200,,,','400,,,',',,,',NULL,'Twin Bed','No Extra Be','2','1','1',NULL,NULL,'2022-08-01','2022-08-31','AED','','900,,,',',,,',',,,','800,,,',NULL),
(14,'12','','Triple Rooms','','exterior corridors,Climate control','1000,,,','1000,,,','500,,,','100,,,','100,,,',NULL,NULL,'Twin Bed','No Extra Be','1','1','0',NULL,NULL,'2022-08-01','2022-09-05','AED','','400,,,','','','300,,,',5000),
(15,'12','','One-Bedroom Apartment','<p>gfbfgbn</p>\r\n','exterior corridors,Climate control,Extra towels/bedding','1000,,,','1000,,,','500,,,','100,,,','100,,,',NULL,NULL,'Twin Bed','','0','0','0',NULL,NULL,'','','AED','',',,,','','',',,,',0),
(17,'12','','One-Bedroom Apartment','                \r\n              ','exterior corridors,Bathroom phone,Climate control','1000,,,','1000,,,','500,,,','100,,,','100,,,',NULL,NULL,'Queen Bed','Mattres','2','1','1',NULL,NULL,'2022-08-07','2022-08-09','AED','','400,,,','','',',,,',5000),
(18,'12','','Two-Bedroom Apartment','                \r\n              ','exterior corridors,Bathroom phone,Climate control','2000,,,','2000,,,','1000,,,','200,,,','200,,,',NULL,NULL,'Queen Bed','Mattres','2','1','1',NULL,NULL,'2022-08-07','2022-08-09','AED','',',,,','','',',,,',5000),
(19,'12','','One-Bedroom Apartment','                \r\n              ','exterior corridors,Bathroom phone,Climate control','1000,,,','1000,,,','500,,,','100,,,','100,,,',NULL,NULL,'Queen Bed','Mattres','2','1','1',NULL,NULL,'2022-08-07','2022-08-09','AED','',',,,','','',',,,',5000),
(20,'12','','Two-Bedroom Apartment','','Bathroom phone,Climate control,Courtyard view',',,,','01,,,','01,,,','100,,,','100,,,',NULL,NULL,'Queen Bed','Mattres','1','1','1',NULL,NULL,'2022-08-07','2022-08-09','AED','','10,,,','','','10,,,',5000),
(21,'12','','One-Bedroom Apartment','                \r\n              ','Bathroom phone,Courtyard view',',,,',',,,',',,,',',,,',',,,',NULL,NULL,'Twin Bed','','0','0','0',NULL,NULL,'','','AED','',',,,','','',',,,',0),
(22,'12','','Studio Apartment With Creek View','                \r\n              ','Bathroom phone,Courtyard view',',,,',',,,',',,,',',,,',',,,',NULL,NULL,'Twin Bed','','0','0','0',NULL,NULL,'','','AED','',',,,','','',',,,',0),
(23,'12','','One-Bedroom Apartment','                \r\n              ','Hair dryer,In-room safe (laptop compatible)','1000,,,','1000,,,',',,,',',,,',',,,',NULL,NULL,'Twin Bed','','0','0','0',NULL,NULL,'','','AED','',',,,','','',',,,',0),
(24,'12','','Studio Apartment With Creek View','                \r\n              ','Hair dryer,In-room safe (laptop compatible)',',,,',',,,',',,,',',,,',',,,',NULL,NULL,'Twin Bed','','0','0','0',NULL,NULL,'','','AED','',',,,','','',',,,',0);

/*Table structure for table `stocks` */

DROP TABLE IF EXISTS `stocks`;

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` varchar(50) NOT NULL,
  `ticket_name` varchar(100) NOT NULL,
  `no_ticket` int(11) NOT NULL,
  `remaining_ticket` int(11) NOT NULL,
  `validity` varchar(50) NOT NULL,
  `uploaded_by` varchar(50) NOT NULL,
  `uploaded_files` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `stocks` */

insert  into `stocks`(`id`,`created_at`,`ticket_name`,`no_ticket`,`remaining_ticket`,`validity`,`uploaded_by`,`uploaded_files`) values 
(1,'06-03-2021','testng',5,5,'2022-05-20','moni',''),
(2,'06-03-2022','Testing',107,107,'2022-06-03','Admin','./public/uploads/stocks/Gupshup_WhatsApp_API_Docum'),
(3,'06-03-2022','Testing',107,47,'2022-06-17','Admin','./public/uploads/stocks/Gupshup_WhatsApp_API_Docum'),
(4,'06-04-2022','Testing',107,7,'2022-06-04','stockadmin','./public/uploads/stocks/Gupshup_WhatsApp_API_Docum'),
(5,'06-09-2022','Testing',3,0,'2022-06-16','stockadmin','./public/uploads/stocks/EH765.pdf'),
(6,'06-09-2022','Testing',3,1,'2022-06-23','stockadmin','./public/uploads/stocks/EH7651.pdf');

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `salulation` varchar(10) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `acc_name` varchar(100) DEFAULT NULL,
  `acc_num` varchar(100) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `ifsc_code` varchar(100) DEFAULT NULL,
  `swift_code` varchar(100) DEFAULT NULL,
  `isPrimary` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `supplier` */

insert  into `supplier`(`id`,`company_name`,`salulation`,`firstName`,`lastName`,`email`,`mobile_no`,`designation`,`country`,`state`,`address`,`category`,`services`,`city`,`acc_name`,`acc_num`,`bank_name`,`ifsc_code`,`swift_code`,`isPrimary`,`comments`) values 
(1,'Diamond Tours','\"\"','Self','','\"\"','\"\"','Dubai','DUBAI','test','test','Hotel','test','Dubai','1234456','1234567','testbank','2324','32322',NULL,'test'),
(2,'m1m software technologies','Select Sal','Monish','R H','rhmonish@gmail.com','+919740687413','11','United Arab Emirates','test','No 5 5th cross 2nd main pampa extension kempapura','Hotel','test','Dubai','11','11','11','11','11',NULL,'test'),
(3,'xyz','Select Sal','hel','lo','hello@gmail.com','9876543212','bangalore','india','test','#87 gandhinagar mysore','Meals','test','bangalore','eerty123','1234567874','ertyuiu','ertyuiug','wettd',NULL,'test'),
(4,'m1m software technologies','Mr','Monish','R H','rhmonish@gmail.com','+919740687413','234','India','test','No 5 5th cross 2nd main pampa extension kempapura','Visa','test','bangalore','11','23e','23e4r','234e','3e4r',NULL,'234');

/*Table structure for table `todo` */

DROP TABLE IF EXISTS `todo`;

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `Todotype` varchar(255) DEFAULT NULL,
  `Tododay` varchar(255) DEFAULT NULL,
  `TodoTime` varchar(255) DEFAULT NULL,
  `TodoCustomer` varchar(255) DEFAULT NULL,
  `TodoAssigned` varchar(255) DEFAULT NULL,
  `TodoDetails` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `serial_number` int(20) DEFAULT NULL,
  `query_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `todo` */

insert  into `todo`(`id`,`Todotype`,`Tododay`,`TodoTime`,`TodoCustomer`,`TodoAssigned`,`TodoDetails`,`created_date`,`status`,`created_by`,`serial_number`,`query_id`) values 
(9,'call','','15:01','abc (abc@gmail.com)','XYZ','test','2022-05-26 19:30:59','Pending','Admin',NULL,NULL),
(10,'call','2022-05-26','15:02','sdasd','ABC','sadasd','2022-05-26 19:31:39','Pending','Admin',NULL,NULL),
(11,'call','','14:01','sered','XYZ','dsad','2022-05-26 19:31:51','Active','Admin',NULL,NULL),
(12,'call','2022-05-27','14:02','ZX','ABC','zX','2022-05-26 19:32:44','Pending','Admin',NULL,NULL),
(13,'meeting','2022-05-28','','dzd','ABC','zxZX','2022-05-26 20:33:08','Active','Admin',NULL,NULL),
(14,'meeting','2022-05-29','17:05','xzc','ABC','xscxz','2022-05-26 20:33:48','Pending','Admin',NULL,NULL),
(15,'meeting','2022-05-26','17:13','asssssas','Admin','asaS','2022-07-18 00:00:53','Active','Admin',NULL,8700);

/*Table structure for table `transfer_route` */

DROP TABLE IF EXISTS `transfer_route`;

CREATE TABLE `transfer_route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transport_type` varchar(100) DEFAULT NULL,
  `start_city` varchar(100) DEFAULT NULL,
  `dest_city` varchar(100) DEFAULT NULL,
  `route_name` varchar(100) DEFAULT NULL,
  `start_city1` varchar(250) NOT NULL,
  `dest_city1` varchar(250) NOT NULL,
  `route_name1` varchar(250) NOT NULL,
  `seat_capacity` varchar(100) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `cost` varchar(100) DEFAULT NULL,
  `seat_capacity_hour` varchar(100) DEFAULT NULL,
  `currency_hour` varchar(100) DEFAULT NULL,
  `per_hour_cost` varchar(100) DEFAULT NULL,
  `cost_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

/*Data for the table `transfer_route` */

insert  into `transfer_route`(`id`,`transport_type`,`start_city`,`dest_city`,`route_name`,`start_city1`,`dest_city1`,`route_name1`,`seat_capacity`,`currency`,`cost`,`seat_capacity_hour`,`currency_hour`,`per_hour_cost`,`cost_type`) values 
(27,'oneway','DXB ','sharjah Airport','DXB- sharajah aiprport onPVT basis','','','','6','AED','300','','AED','','Normal'),
(28,'round','burj kalifa','citymax hotel','burj-citymax hotel','','','','6','AED','500','','AED','','Normal'),
(29,'oneway','lapita hotel','DXB airport','lapita hotel- DXB airport','','','','','AED','','4','AED','600','HourBased'),
(30,'oneway','dubai','sharja airport','subai-sharja-test','','','','','AED','','1','AED','100','HourBased'),
(34,'round','dxb','shj','dxb-shj','shj','dxb','shj-dxb','6','AED','300','','AED','','Normal'),
(35,'round','dxb','shj','dxb-shj','shj','dxb','shj-dxb','10','AED','600','','AED','','Normal');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `emialId` varchar(255) DEFAULT NULL,
  `userPhoto` varchar(100) DEFAULT NULL,
  `modules` varchar(255) DEFAULT NULL,
  `userType` varchar(255) DEFAULT NULL,
  `logged_in` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`UserName`,`password`,`firstName`,`LastName`,`Address`,`phoneNumber`,`emialId`,`userPhoto`,`modules`,`userType`,`logged_in`) values 
(9,'gcmegha','gcmegha','Megha','G C','Banglore','9889098789','megha@gmail.com','./public/uploads/users/avatar-removebg-preview.png','Excursion,Package,Hotel','Admin',NULL),
(11,'Admin','admin','Admin','Admin','Banglore','1112223333','admin@gmail.com','./public/uploads/users/avatar-removebg-preview1.png','Excursion,Package','Super Admin',NULL),
(12,'stockadmin','stockadmin','Admin','Admin','Banglore','1112223333','admin@gmail.com','./public/uploads/users/avatar-removebg-preview1.png','Excursion,Package','Stocks',NULL),
(20,'sekar','123456','raja','sekar','12345','1234567890','raja@gmail.com','','Invoice','Admin',NULL),
(21,'sekar1','123456','sekar1','sekar1','sekat','72389924','sekar1@gmail.com','./public/uploads/users/img_avatar.png','Invoice,Itinerary,Todo,ReportName','Super Admin',NULL);

/*Table structure for table `vehicle` */

DROP TABLE IF EXISTS `vehicle`;

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(15) DEFAULT NULL,
  `car_name` varchar(50) DEFAULT NULL,
  `seat_capacity` varchar(10) DEFAULT NULL,
  `ac` varchar(5) DEFAULT NULL,
  `files` varchar(100) DEFAULT NULL,
  `files1` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `vehicle` */

insert  into `vehicle`(`id`,`car_type`,`car_name`,`seat_capacity`,`ac`,`files`,`files1`) values 
(13,'SUV','Rent','23','Yes','./public/uploads/vehicle/telephone.png','./public/uploads/vehicle/telephone1.png');

/*Table structure for table `visa` */

DROP TABLE IF EXISTS `visa`;

CREATE TABLE `visa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visa_category` varchar(255) DEFAULT NULL,
  `entry_type` varchar(255) DEFAULT NULL,
  `process_time` varchar(255) DEFAULT NULL,
  `visa_validity` varchar(255) DEFAULT NULL,
  `adult` varchar(255) DEFAULT NULL,
  `infant` varchar(255) DEFAULT NULL,
  `child` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;

/*Data for the table `visa` */

insert  into `visa`(`id`,`visa_category`,`entry_type`,`process_time`,`visa_validity`,`adult`,`infant`,`child`) values 
(63,'Tourism','Single Entry','fgu','2022-06-16','1','1','8'),
(68,'48_hrs','Double Entry','100','3 Month','100','369','400'),
(69,'Immigrant','Double Entry','100','5 Years','100','369','400'),
(70,'Tourism','Single Entry','45','1 Month','1000','500','800'),
(71,'96_hrs','Single Entry','45','1 Month','1000','500','800');

/*Table structure for table `visa_documents` */

DROP TABLE IF EXISTS `visa_documents`;

CREATE TABLE `visa_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_submission` varchar(100) DEFAULT NULL,
  `interview` varchar(100) DEFAULT NULL,
  `occupation_proof` varchar(100) DEFAULT NULL,
  `old_passport` varchar(100) DEFAULT NULL,
  `pancard` varchar(100) DEFAULT NULL,
  `original_passport` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `biometrics` varchar(100) NOT NULL,
  `basic_requirements` varchar(100) DEFAULT NULL,
  `photo2` varchar(100) DEFAULT NULL,
  `passport_scan` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `photo3` varchar(100) DEFAULT NULL,
  `visa_id` varchar(255) DEFAULT NULL,
  `rowids` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4;

/*Data for the table `visa_documents` */

insert  into `visa_documents`(`id`,`doc_submission`,`interview`,`occupation_proof`,`old_passport`,`pancard`,`original_passport`,`photo`,`biometrics`,`basic_requirements`,`photo2`,`passport_scan`,`address`,`photo3`,`visa_id`,`rowids`) values 
(90,'Yes','Yes','./public/uploads/visadocuments/mannequin-36163557.jpg','','','','','','','','','','','62','faqs-row0'),
(91,'Yes','Yes','','./public/uploads/visadocuments/site-logo-75x7510.png','','','','','','','','','','62','faqs-row0'),
(92,'Yes','Yes','./public/uploads/visadocuments/ring-jewelry-jewellery-jewel-silver-bright-833724-pxhere_com_.jpg','','','','','','','','','','','62','faqs-row0');

/*Table structure for table `visa_report` */

DROP TABLE IF EXISTS `visa_report`;

CREATE TABLE `visa_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `QueryId` varchar(50) NOT NULL,
  `iternary` longblob NOT NULL,
  `excusions` longblob NOT NULL,
  `currency` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `markup` varchar(50) NOT NULL,
  `vat` varchar(50) NOT NULL,
  `total_price` varchar(50) NOT NULL,
  `advance_amount` varchar(50) NOT NULL,
  `inclusions` longblob NOT NULL,
  `exclusions` longblob NOT NULL,
  `booking_terms` longblob NOT NULL,
  `difference` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `booked_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `visa_report` */

insert  into `visa_report`(`id`,`QueryId`,`iternary`,`excusions`,`currency`,`total`,`markup`,`vat`,`total_price`,`advance_amount`,`inclusions`,`exclusions`,`booking_terms`,`difference`,`created_at`,`booked_by`) values 
(1,'8775','<p>testing visa</p>\r\n','Test Excursion Name','AED','2000','100','5%','2100','100','<p>ok</p>','<p>ok</p>','<p>ok</p>','4','2022-06-26 08:53:44','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
