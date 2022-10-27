-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 192.168.2.9    Database: sixsense
-- ------------------------------------------------------
-- Server version	5.7.40-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CoursesCatalogue`
--

DROP TABLE IF EXISTS `CoursesCatalogue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CoursesCatalogue` (
  `course_id` int(100) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `course_code` varchar(45) NOT NULL,
  `year` varchar(100) NOT NULL,
  `course_cluster` varchar(100) NOT NULL,
  `cut_off_point` int(100) NOT NULL,
  `course_url` varchar(300) NOT NULL,
  `school` varchar(100) NOT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `key_name` (`course_code`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CoursesCatalogue`
--

LOCK TABLES `CoursesCatalogue` WRITE;
/*!40000 ALTER TABLE `CoursesCatalogue` DISABLE KEYS */;
INSERT INTO `CoursesCatalogue` VALUES (4,'Accountancy and Finance','C98','3','Business and Management',12,'https://www.nyp.edu.sg/schools/sbm/full-time-courses/accountancy-and-finance.html','Nanyang Polytechnic'),(5,'Advanced and Digital Manufacturing','C62','3','Engineering',24,'https://www.nyp.edu.sg/schools/seg/full-time-courses/advanced-and-digital-manufacturing.html','Nanyang Polytechnic'),(6,'Aeronautical and Aerospace Technology','C51','3','Engineering',16,'https://www.nyp.edu.sg/schools/seg/full-time-courses/aeronautical-and-aerospace-technology.html','Nanyang Polytechnic'),(7,'Aeronautical Engineering','S88','3','Engineering',17,'https://www.sp.edu.sg/engineering-cluster/mae/courses/full-time-diplomas/aeronautical-engineering-','Singapore Polytechnic'),(8,'Aerospace Electronics','T50','3','Engineering',18,'https://www.tp.edu.sg/schools/eng/aerospace-electronics','Temasek Polytechnic'),(9,'Aerospace Electronics','S90','3','Engineering',13,'https://www.sp.edu.sg/engineering-cluster/eee/courses/full-time-diplomas/aerospace-electronics','Singapore Polytechnic'),(10,'Aerospace Engineering','T51','3','Engineering',16,'https://www.tp.edu.sg/schools/eng/aerospace-engineering','Temasek Polytechnic'),(11,'Aerospace Engineering','R40','3','Engineering',26,'https://www.rp.edu.sg/SEG/full-time-diplomas/Details/r40','Republic Polytechnic'),(12,'Aerospace Engineering','N65','3','Engineering',19,'https://www.np.edu.sg/soe/Pages/aeg.aspx','Ngee Ann Polytechnic'),(13,'Aerospace Systems and Management','C52','3','Engineering',18,'https://www.nyp.edu.sg/schools/seg/full-time-courses/aerospace-systems-and-management.html','Nanyang Polytechnic'),(14,'AI and Data Engineering','C31','3','Engineering',9,'https://www.nyp.edu.sg/schools/seg/full-time-courses/ai-and-data-engineering.html','Nanyang Polytechnic'),(15,'Animation, Games & Visual Effects','C29','3','Media and Design',-1,'https://www.nyp.edu.sg/schools/sdm/full-time-courses/animation-games-visual-effects.html','Nanyang Polytechnic'),(16,'Apparel Design and Merchandising','T20','3','Media and Design',11,'https://www.tp.edu.sg/schools/des/apparel-design-and-merchandising','Temasek Polytechnic'),(17,'Applied AI and Analytics','S30','3','Information and Digital Technologies',8,'https://www.sp.edu.sg/soc/courses/full-time-diplomas/data-analytics-and-artificial-intelligence-(ai)','Singapore Polytechnic'),(18,'Applied AI and Analytics','C43','3','Information and Digital Technologies',11,'https://www.nyp.edu.sg/schools/sit/full-time-courses/applied-ai-and-analytics.html','Nanyang Polytechnic'),(19,'Applied Artificial Intelligence','T69','3','Information and Digital Technologies',12,'https://www.tp.edu.sg/schools/iit/applied-artificial-intelligence','Temasek Polytechnic'),(20,'Applied Chemistry','S64','3','Applied Sciences',9,'https://www.sp.edu.sg/cls/courses/full-time-diplomas/applied-chemistry','Singapore Polytechnic'),(21,'Applied Chemistry','R17','3','Applied Sciences',17,'https://www.rp.edu.sg/SAS/full-time-diplomas/Details/r17','Republic Polytechnic'),(22,'Applied Chemistry','C45','3','Applied Sciences',9,'https://www.nyp.edu.sg/schools/sas/full-time-courses/applied-chemistry.html','Nanyang Polytechnic'),(23,'Architectural Technology and Building Services','T29','3','Built Environment',16,'https://www.tp.edu.sg/schools/eng/architectural-technology-and-building-services','Temasek Polytechnic'),(24,'Architecture','S66','3','Built Environment',13,'https://www.sp.edu.sg/abe/courses/full-time-diplomas/architecture','Singapore Polytechnic'),(25,'Architecture','C38','3','Built Environment',14,'https://www.nyp.edu.sg/schools/sdm/full-time-courses/architecture.html','Nanyang Polytechnic'),(26,'Arts and Theatre Management','R25','3','Media and Design',20,'https://www.rp.edu.sg/STA/full-time-diplomas/Details/r25','Republic Polytechnic'),(27,'Arts Business Management','N91','3','Business and Management',13,'https://www.np.edu.sg/hms/Pages/abm.aspx','Ngee Ann Polytechnic'),(28,'Nanotechnology and Materials Science','C50','3','Engineering',14,'https://www.nyp.edu.sg/schools/seg/full-time-courses/nanotechnology-and-materials-science.html','Nanyang Polytechnic'),(29,'Nautical Studies','DNS','3','Maritime Studies',-1,'https://www.sp.edu.sg/sma/courses/full-time-diplomas/nautical-studies','Singapore Polytechnic'),(30,'Nursing','N69','3','Health Sciences',28,'https://www.np.edu.sg/hs/Pages/nsg.aspx','Ngee Ann Polytechnic'),(31,'Nursing','C97','3','Health Sciences',28,'https://www.nyp.edu.sg/schools/shss/full-time-courses/nursing.html','Nanyang Polytechnic'),(32,'Optometry','S67','3','Health Sciences',12,'https://www.sp.edu.sg/cls/courses/full-time-diplomas/optometry','Singapore Polytechnic'),(33,'Optometry','N83','3','Health Sciences',13,'https://www.np.edu.sg/hs/Pages/opt.aspx','Ngee Ann Polytechnic'),(34,'Oral Health Therapy','C72','3','Health Sciences',11,'https://www.nyp.edu.sg/schools/shss/full-time-courses/oral-health-therapy.html','Nanyang Polytechnic'),(35,'Outdoor and Adventure Learning','R33','3','Business and Management',26,'https://www.rp.edu.sg/shl/full-time-diplomas/details/r33','Republic Polytechnic'),(36,'Perfumery and Cosmetic Science','S38','3','Applied Sciences',11,'https://www.sp.edu.sg/cls/courses/full-time-diplomas/perfumery-cosmetic-science','Singapore Polytechnic'),(37,'Pharmaceutical Science','T25','3','Applied Sciences',11,'https://www.tp.edu.sg/schools/asc/pharmaceutical-science','Temasek Polytechnic'),(38,'Pharmaceutical Science','R22','3','Applied Sciences',17,'https://www.rp.edu.sg/SAS/full-time-diplomas/Details/r22','Republic Polytechnic'),(39,'Pharmaceutical Science','N73','3','Applied Sciences',9,'https://www.np.edu.sg/lsct/Pages/pharm.aspx','Ngee Ann Polytechnic'),(40,'Pharmaceutical Science','C65','3','Applied Sciences',9,'https://www.nyp.edu.sg/schools/sas/full-time-courses/pharmaceutical-science.html','Nanyang Polytechnic'),(41,'Product Experience and Design','T35','3','Media and Design',17,'https://www.tp.edu.sg/schools-and-courses/students/schools/des/product-experience-and-design.html','Temasek Polytechnic'),(42,'Psychology Studies','T48','3','Humanities',8,'https://www.tp.edu.sg/schools/hss/psychology-studies','Temasek Polytechnic'),(43,'Real Estate Business','N48','3','Built Environment',14,'https://www.np.edu.sg/de/Pages/reb.aspx','Ngee Ann Polytechnic'),(44,'Restaurant and Culinary Operations','R46','3','Business and Management',26,'https://www.rp.edu.sg/soh/full-time-diplomas/details/r46','Republic Polytechnic'),(45,'Robotics and Mechatronics','C87','3','Engineering',18,'https://www.nyp.edu.sg/schools/seg/full-time-courses/robotics-and-mechatronics.html','Nanyang Polytechnic'),(46,'Social Sciences in Gerontology','T53','3','Humanities',14,'https://www.tp.edu.sg/schools/hss/social-sciences-in-gerontology','Temasek Polytechnic'),(47,'Social Work','C47','3','Humanities',12,'https://www.nyp.edu.sg/schools/shss/full-time-courses/social-work.html','Nanyang Polytechnic'),(48,'Sonic Arts','R24','3','Media and Design',19,'https://www.rp.edu.sg/STA/full-time-diplomas/Details/r24','Republic Polytechnic'),(49,'Sport and Exercise Science','R26','3','Health Sciences',16,'https://www.rp.edu.sg/shl/full-time-diplomas/details/r26','Republic Polytechnic'),(50,'Sport and Wellness Management','C81','3','Business and Management',15,'https://www.nyp.edu.sg/schools/sbm/full-time-courses/sports-and-wellness.html','Nanyang Polytechnic'),(51,'Sport Coaching','R49','3','Health Sciences',18,'https://www.rp.edu.sg/shl/full-time-diplomas/details/r49','Republic Polytechnic'),(52,'Supply Chain Management','R21','3','Business and Management',25,'https://www.rp.edu.sg/SEG/full-time-diplomas/Details/r21','Republic Polytechnic'),(53,'Sustainable Built Environment','R61','3','Built Environment',26,'https://www.rp.edu.sg/SEG/full-time-diplomas/Details/diploma-in-sustainable-built-environment','Republic Polytechnic'),(54,'123','123','12','123',123123,'132','NP'),(55,'123','321','321','321',321,'312','321');
/*!40000 ALTER TABLE `CoursesCatalogue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Planner`
--

DROP TABLE IF EXISTS `Planner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Planner` (
  `Planner_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Course_ID` int(11) NOT NULL,
  `Priority` int(11) NOT NULL,
  `Email_ID` varchar(200) NOT NULL,
  `Remarks` varchar(200) NOT NULL,
  PRIMARY KEY (`Planner_ID`),
  KEY `idCourses_idx` (`Course_ID`),
  CONSTRAINT `idCourses` FOREIGN KEY (`Course_ID`) REFERENCES `CoursesCatalogue` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=446 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Planner`
--

LOCK TABLES `Planner` WRITE;
/*!40000 ALTER TABLE `Planner` DISABLE KEYS */;
INSERT INTO `Planner` VALUES (97,6,0,'apple@xxx.com','a'),(98,4,1,'apple@xxx.com',''),(99,12,2,'apple@xxx.com',''),(288,4,0,'123@gmail.com','test'),(289,5,1,'123@gmail.com',''),(290,4,2,'123@gmail.com',''),(291,4,3,'123@gmail.com',''),(445,26,0,'testuser@gmail.com','');
/*!40000 ALTER TABLE `Planner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `User` (
  `idUser` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(45) NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'123@abc.com','$2y$10$RvZJQw8UUDv0IOhrPPUUrefy6/8sjr3k5mFivYZqfkXnHUly23KHW','admin'),(2,'testuser@gmail.com','$2y$10$2yCWYFYD6MCg6jAoO5paDe3oUv1TRWTFnaBNITjDwrPTeACn7439G','user'),(3,'apple@xxx.com','$2y$10$w48pUcpQkx2E7fY3kqX1EO06TtnaeCXMYX/0ootWwAa2Dnc2l4J.W','user'),(4,'abb@a.com','$2y$10$w6O.8is9uPLnC2c7KmpN.upgy1bLgUxl9aQO.MT23MaZJkJQAIyG.','admin'),(5,'heyhey@gmail.com','$2y$10$fuVVUiTCQ5M1Vw8iUKr4sO34COwwU.k59eKreydKt7Teskk2O454C','user'),(6,'1234@abc.com','$2y$10$DQ0iCTafhP7A7HuOjk7x1.ARYlbl6Iu307lYuZx7kTQ0o/nF0kCrS','user'),(7,'12345@abc.com','$2y$10$wKYaO2ZOb3KKD4IXbK0TR.RZ1u6Bie0RlwNAoMU/MPRFmrD9.bH8u','user'),(8,'123@gmail.com','$2y$10$Ehzoar0G8YzzAoyjCgMA3elNWQzQM2d7VKkFIwvtlypzO8tBNckQW','user');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-28  0:17:26
