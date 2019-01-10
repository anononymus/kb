-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: chatbot
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ans_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ques_id` int(11) NOT NULL,
  `para_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kb_mains`
--

DROP TABLE IF EXISTS `kb_mains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kb_mains` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `para` longtext CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kb_mains`
--

LOCK TABLES `kb_mains` WRITE;
/*!40000 ALTER TABLE `kb_mains` DISABLE KEYS */;
INSERT INTO `kb_mains` VALUES (1,'ৱিকিপিডিয়া','<p>\"<a title=\"ৱিকিপিডিয়া\" href=\"https://as.wikipedia.org/wiki/%E0%A7%B1%E0%A6%BF%E0%A6%95%E0%A6%BF%E0%A6%AA%E0%A6%BF%E0%A6%A1%E0%A6%BF%E0%A6%AF%E0%A6%BC%E0%A6%BE\">ৱিকিপিডিয়া</a>\" এখন বিশ্বকোষ। বিশ্বৰ যিকোনো বিষয়ৰ ওপৰত শুদ্ধ আৰু নিৰপেক্ষভাৱে জ্ঞান সংগ্ৰহ কৰি সকলোলৈকে বিনামূল্যে উপলব্ধ কৰোৱাৰ প্ৰয়াসেৰে এই আন্তৰ্জাতিক আৰু বহুভাষিক প্ৰকল্পৰ সূচনা কৰা হৈছে। পৃথিৱীৰ বিভিন্ন স্বেচ্ছাসেৱক লেখকে বিভিন্ন স্থানৰ পৰা নিজৰ নিজৰ অৰ্হতা অনুসৰি কোনো বিষয়ত অৱদান দি বিভিন্ন ভাষাত ৱিকিপিডিয়া প্ৰতিষ্ঠা কৰিছে। \"<a title=\"ৱিকিমিডিয়া ফাউণ্ডেশ্যন\" href=\"https://as.wikipedia.org/wiki/%E0%A7%B1%E0%A6%BF%E0%A6%95%E0%A6%BF%E0%A6%AE%E0%A6%BF%E0%A6%A1%E0%A6%BF%E0%A6%AF%E0%A6%BC%E0%A6%BE_%E0%A6%AB%E0%A6%BE%E0%A6%89%E0%A6%A3%E0%A7%8D%E0%A6%A1%E0%A7%87%E0%A6%B6%E0%A7%8D%E0%A6%AF%E0%A6%A8\">ৱিকিমিডিয়া ফাউণ্ডেশ্যনে</a>\" ২০০১ চনত প্ৰথমতে <a title=\"ৱিকিপিডিয়া\" href=\"https://as.wikipedia.org/wiki/%E0%A7%B1%E0%A6%BF%E0%A6%95%E0%A6%BF%E0%A6%AA%E0%A6%BF%E0%A6%A1%E0%A6%BF%E0%A6%AF%E0%A6%BC%E0%A6%BE\">ইংৰাজী ৱিকিপিডিয়াৰ</a>পৰা আৰম্ভ কৰা এই প্ৰকল্পৰ অধীনত এতিয়ালৈকে প্ৰায় ৪০ নিযুত প্ৰবন্ধ সম্বলিত ৩০১ টা ভাষাৰ ৱিকিপিডিয়া মুকলি হ&rsquo;ল। বৰ্তমান বিশ্বৰ প্ৰায় ৫০০ নিযুত মানুহে ব্যৱহাৰ কৰা এই ৱিকিপিডিয়াবোৰৰ সংখ্যা ভৱিষ্যতলৈও বাঢ়ি গৈ থাকিব। এই ৱিকিপিডিয়াবোৰত তথ্যৰ শুদ্ধতা আৰু নিৰপেক্ষতাৰ ওপৰত অতিশয় গুৰুত্ব আৰোপ কৰা হয়। বিশ্বৰ যিকোনো স্থানৰপৰা যিকোনো মানুহে ইণ্টাৰনেটৰ জৰিয়তে বিনামূল্যে যিকোনো ৱিকিপিডিয়াৰ পৰা জ্ঞান আহৰণ আৰু উপভোগ কৰিব পাৰে। &ldquo;ৰাইজৰ দ্বাৰা ৰাইজৰ বাবে&rdquo; সংকলিত এই ৱিকিপিডিয়াক থোৰতে &ldquo;গণবিশ্বকোষ&rdquo; বুলিব পা</p>','2018-12-22 18:30:00','2018-12-24 18:30:00'),(2,'এনিমেছন','<p><strong><a title=\"এনিমেছন\" href=\"https://as.wikipedia.org/wiki/%E0%A6%8F%E0%A6%A8%E0%A6%BF%E0%A6%AE%E0%A7%87%E0%A6%9B%E0%A6%A8\">এনিমেছন</a></strong> (<a title=\"ইংৰাজী ভাষা\" href=\"https://as.wikipedia.org/wiki/%E0%A6%87%E0%A6%82%E0%A7%B0%E0%A6%BE%E0%A6%9C%E0%A7%80_%E0%A6%AD%E0%A6%BE%E0%A6%B7%E0%A6%BE\">ইংৰাজী</a>: <span lang=\"en\">Animation</span>) (বা এনিমেশ্যন) হৈছে স্থিৰ চিত্ৰৰ এটা ক্ৰম, যাক বিশেষ প্ৰক্ৰিয়াৰে লক্ষ্য কৰিলে গতিৰ ভ্ৰম সৃষ্টি হয়। সহজ অৰ্থক ইয়াক \"চলমান চিত্ৰ\" বুলিও ক\'ব পাৰি। <a title=\"চলচ্চিত্ৰ\" href=\"https://as.wikipedia.org/wiki/%E0%A6%9A%E0%A6%B2%E0%A6%9A%E0%A7%8D%E0%A6%9A%E0%A6%BF%E0%A6%A4%E0%A7%8D%E0%A7%B0\">চলচ্চিত্ৰ</a>ৰ আৰু এনিমেছনৰ সংজ্ঞা আৰু মূল কাৰিকৰী নীতি একেই। চলচ্চিত্ৰৰ সংজ্ঞাই এনিমেছনকো সাঙুৰি লয়। নিৰ্মাণ প্ৰক্ৰিয়াৰ ভিন্নতা অনুসৰি চলচ্চিত্ৰক <em>জীৱম্ত গতি</em> (live action), বা <em>এনিমেছন</em> এই দুটা বহল ভাগত ভগাব পাৰি। জীৱন্ত গতি চলচ্চিত্ৰ নিৰ্মাণ কৰোঁতে চলমান বস্তু এটাক কেমেৰাৰ সহায়েৰে সময়ৰ ক্ষুদ্ৰ ক্ষুদ্ৰ অন্তৰালত (পাৰম্পৰিকভাৱে ছেকেণ্ডত ২৪ খন) ফটো তোলা হয়। এই ছবিবোৰত চলমান বস্তুটোৰ বিভিন্ন মূহুৰ্তক স্থিৰ চিত্ৰ কৰি পেলোৱা হয়। প্ৰতিখন ছবিকে একোখন \'ফ্ৰেম\' বোলা হয়। পাছত প্ৰজেক্টৰৰ সহায়েৰে এই \'ফ্ৰেম\' বোৰক ক্ৰম অনুসৰি পৰ্দাত প্ৰক্ষেপণ কৰা হয়। <em><a title=\"দৃষ্টিৰ জড়তা\" href=\"https://as.wikipedia.org/wiki/%E0%A6%A6%E0%A7%83%E0%A6%B7%E0%A7%8D%E0%A6%9F%E0%A6%BF%E0%A7%B0_%E0%A6%9C%E0%A6%A1%E0%A6%BC%E0%A6%A4%E0%A6%BE\">দৃষ্টিৰ জড়তা</a></em> (Persistence of vision) পৰিঘটনাৰ বাবে আমাৰ চকুৱে সিখনৰ পাছত সিখনকৈ প্ৰক্ষেপিত স্থিৰ চিত্ৰৰ ক্ৰমক গতিৰ ভ্ৰমলৈ ৰূপান্তৰিত কৰে আৰু আমি ছবিখন চলি থকা দেখোঁ। বৰ্তমান <a title=\"কম্পিউটাৰ\" href=\"https://as.wikipedia.org/wiki/%E0%A6%95%E0%A6%AE%E0%A7%8D%E0%A6%AA%E0%A6%BF%E0%A6%89%E0%A6%9F%E0%A6%BE%E0%A7%B0\">কম্পিউটাৰ</a>ৰ সহায়ত এনিমেছন নিৰ্মাণ কৰাটো এক জনপ্ৰিয় উপায়।</p>','2018-12-27 12:46:26','2018-12-27 12:46:26');
/*!40000 ALTER TABLE `kb_mains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (11,'2014_10_12_000000_create_users_table',1),(12,'2014_10_12_100000_create_password_resets_table',1),(13,'2018_12_21_174921_create_kb_mains_table',1),(14,'2018_12_21_175717_create_questiions_table',1),(15,'2018_12_21_175724_create_answers_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questiions`
--

DROP TABLE IF EXISTS `questiions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questiions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` text CHARACTER SET utf8 NOT NULL,
  `para_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questiions`
--

LOCK TABLES `questiions` WRITE;
/*!40000 ALTER TABLE `questiions` DISABLE KEYS */;
/*!40000 ALTER TABLE `questiions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-10 13:05:02
