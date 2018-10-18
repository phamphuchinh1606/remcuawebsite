-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: vidakhacten_v1
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_public` int(11) NOT NULL DEFAULT '0',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (189,'2014_10_12_000000_create_users_table',1),(190,'2014_10_12_100000_create_password_resets_table',1),(191,'2018_09_13_033850_create_setting_colors_table',1),(192,'2018_09_13_034121_create_setting_sizes_table',1),(193,'2018_09_13_034203_create_vendors_table',1),(194,'2018_09_13_034744_create_product_types_table',1),(195,'2018_09_13_034939_create_product_colors_table',1),(196,'2018_09_13_035528_create_products_table',1),(197,'2018_09_13_042541_create_product_images_table',1),(198,'2018_09_13_043237_create_blogs_table',1),(199,'2018_09_13_044027_create_order_statuses_table',1),(200,'2018_09_13_044139_create_orders_table',1),(201,'2018_09_13_044639_create_order_addresses_table',1),(202,'2018_09_13_044835_create_order_payments_table',1),(203,'2018_09_13_045016_create_order_details_table',1),(204,'2018_09_21_090833_create_setting_banners_table',1),(205,'2018_09_24_030107_create_setting_top_banners_table',1),(206,'2018_09_24_064222_create_setting_tags_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_addresses`
--

DROP TABLE IF EXISTS `order_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_addresses`
--

LOCK TABLES `order_addresses` WRITE;
/*!40000 ALTER TABLE `order_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` bigint(20) NOT NULL,
  `product_compare_price` bigint(20) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `note` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_money` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_payments`
--

DROP TABLE IF EXISTS `order_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `payment_amount` bigint(20) NOT NULL,
  `payment_received` bigint(20) NOT NULL,
  `payment_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_payments`
--

LOCK TABLES `order_payments` WRITE;
/*!40000 ALTER TABLE `order_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_statuses`
--

DROP TABLE IF EXISTS `order_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_statuses`
--

LOCK TABLES `order_statuses` WRITE;
/*!40000 ALTER TABLE `order_statuses` DISABLE KEYS */;
INSERT INTO `order_statuses` VALUES (1,'Đơn hàng mới',NULL,NULL),(2,'Đang giao hàng',NULL,NULL),(3,'Hoàn thành',NULL,NULL);
/*!40000 ALTER TABLE `order_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `total_product_money` bigint(20) NOT NULL,
  `note` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_of_money` bigint(20) NOT NULL,
  `ship_money` bigint(20) NOT NULL,
  `tax_percent` int(11) NOT NULL,
  `tax_money` bigint(20) NOT NULL,
  `total_amount` bigint(20) NOT NULL,
  `payment_amount` bigint(20) NOT NULL,
  `status_order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
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
  `created_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `product_colors`
--

DROP TABLE IF EXISTS `product_colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_colors` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_colors`
--

LOCK TABLES `product_colors` WRITE;
/*!40000 ALTER TABLE `product_colors` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_types`
--

DROP TABLE IF EXISTS `product_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `image_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_public` int(11) NOT NULL DEFAULT '0',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_types`
--

LOCK TABLES `product_types` WRITE;
/*!40000 ALTER TABLE `product_types` DISABLE KEYS */;
INSERT INTO `product_types` VALUES (1,'Ví khắc cung hoàng đạo',NULL,'product_types/1537764639_sidebarleft_icon1.png',1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(2,'Ví phong cảnh',NULL,'product_types/1537764886_sidebarleft_icon2.png',1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(3,'Túi ví',NULL,'product_types/1537764895_sidebarleft_icon3.png',1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(4,'Ví thời trang nữ',NULL,'product_types/1537764902_sidebarleft_icon4.png',1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(5,'Ví thời trang nam',NULL,'product_types/1537764915_sidebarleft_icon5.png',1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(6,'Ví tình ca',NULL,'product_types/1537764928_sidebarleft_icon6.png',1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(7,'Ví năm mới',NULL,'product_types/1537764936_sidebarleft_icon7.png',1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(8,'Ví giảm giá',NULL,'product_types/1537764947_sidebarleft_icon9.png',1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(9,'Sản phẩm hot',NULL,'product_types/1537764955_sidebarleft_icon8.png',1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(10,'Ví cầu an',NULL,'product_types/1537764962_sidebarleft_icon10.png',1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(11,'Ví khắc con mèo',1,NULL,1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(12,'Ví khắc con ngựa',1,NULL,1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(13,'Cảnh quê hương',2,NULL,1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(14,'Cảnh công viên',2,NULL,1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(15,'Cảnh hiện đại',2,NULL,1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(16,'Ví phong cách',3,NULL,1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(17,'Ví da cá sấu',4,NULL,1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46'),(18,'Ví tiện lợi',4,NULL,1,0,'2018-09-24 07:33:46','2018-09-24 07:33:46');
/*!40000 ALTER TABLE `product_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  `product_price` bigint(20) DEFAULT NULL,
  `product_cost_price` bigint(20) DEFAULT NULL,
  `product_compare_price` bigint(20) DEFAULT NULL,
  `product_sale_percent` int(11) DEFAULT NULL,
  `product_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_qty` bigint(20) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_public` int(11) NOT NULL DEFAULT '0',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting_banners`
--

DROP TABLE IF EXISTS `setting_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting_banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `src_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting_banners`
--

LOCK TABLES `setting_banners` WRITE;
/*!40000 ALTER TABLE `setting_banners` DISABLE KEYS */;
INSERT INTO `setting_banners` VALUES (1,'banners/1537759093_bn2.jpg',NULL,NULL),(2,'banners/1537759097_bn3.jpg',NULL,NULL),(3,'banners/1537759101_bn4.png',NULL,NULL);
/*!40000 ALTER TABLE `setting_banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting_colors`
--

DROP TABLE IF EXISTS `setting_colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting_colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting_colors`
--

LOCK TABLES `setting_colors` WRITE;
/*!40000 ALTER TABLE `setting_colors` DISABLE KEYS */;
/*!40000 ALTER TABLE `setting_colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting_sizes`
--

DROP TABLE IF EXISTS `setting_sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting_sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `size_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_cde` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting_sizes`
--

LOCK TABLES `setting_sizes` WRITE;
/*!40000 ALTER TABLE `setting_sizes` DISABLE KEYS */;
/*!40000 ALTER TABLE `setting_sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting_tags`
--

DROP TABLE IF EXISTS `setting_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_type` int(11) DEFAULT '1',
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  `sort_number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting_tags`
--

LOCK TABLES `setting_tags` WRITE;
/*!40000 ALTER TABLE `setting_tags` DISABLE KEYS */;
INSERT INTO `setting_tags` VALUES (1,1,'Giầy thể thao',11,NULL,'2018-09-24 08:21:53','2018-09-24 08:21:53'),(2,1,'Giày tập golf',11,NULL,'2018-09-24 08:22:03','2018-09-24 08:22:03'),(3,1,'Giày chơi bóng rổ',11,NULL,'2018-09-24 08:22:14','2018-09-24 08:22:14'),(4,1,'Giày đạp xe',11,NULL,'2018-09-24 08:22:22','2018-09-24 08:22:22'),(5,1,'Giày trượt ván',11,NULL,'2018-09-24 08:22:32','2018-09-24 08:22:32'),(6,1,'Giày cao gót',11,NULL,'2018-09-24 08:22:43','2018-09-24 08:22:43'),(7,1,'Giày Sneaker',11,NULL,'2018-09-24 08:22:53','2018-09-24 08:22:53'),(8,1,'Giày chạy bộ',11,NULL,'2018-09-24 08:23:05','2018-09-24 08:23:05'),(9,1,'Giày đá bòng',11,NULL,'2018-09-24 08:23:15','2018-09-24 08:23:15'),(10,1,'Giày chơi cầu lông',11,NULL,'2018-09-24 08:23:29','2018-09-24 08:23:29'),(11,2,'Áo sơ mi nam',11,NULL,'2018-09-24 08:24:29','2018-09-24 08:24:29'),(12,2,'Áo thun nữ',11,NULL,'2018-09-24 08:26:02','2018-09-24 08:26:02'),(13,2,'Áo thun công sở',11,NULL,'2018-09-24 08:26:11','2018-09-24 08:26:11'),(14,2,'Áo thun nhăn',11,NULL,'2018-09-24 08:26:16','2018-09-24 08:26:16'),(15,2,'Áo thun tay ngắn',11,NULL,'2018-09-24 08:26:23','2018-09-24 08:26:23'),(16,2,'Áo thun cá tính',11,NULL,'2018-09-24 08:26:30','2018-09-24 08:26:30'),(17,2,'Áó thun cặp',11,NULL,'2018-09-24 08:26:37','2018-09-24 08:26:37'),(18,2,'Áo sát nách nam',11,NULL,'2018-09-24 08:26:44','2018-09-24 08:26:44'),(19,2,'Áo thun ngắn tay',11,NULL,'2018-09-24 08:26:49','2018-09-24 08:26:49'),(20,2,'Áo thun dạo phố',11,NULL,'2018-09-24 08:26:54','2018-09-24 08:26:54'),(21,1,'Giày thể thao',11,NULL,'2018-09-24 08:44:28','2018-09-24 08:44:28'),(22,1,'Giày leo núi',11,NULL,'2018-09-24 08:44:35','2018-09-24 08:44:35'),(23,1,'Giày tập thể hình',11,NULL,'2018-09-24 08:44:41','2018-09-24 08:44:41'),(24,1,'Giày lười',11,NULL,'2018-09-24 08:44:45','2018-09-24 08:44:45'),(25,1,'Giày Converse',11,NULL,'2018-09-24 08:44:51','2018-09-24 08:44:51'),(26,1,'Giày Phong Cách',11,NULL,'2018-09-24 08:45:33','2018-09-24 08:45:33'),(27,2,'Kiểu xẻ nách',11,NULL,'2018-09-24 08:46:10','2018-09-24 08:46:10'),(28,2,'Áo thun cổ dài',11,NULL,'2018-09-24 08:46:16','2018-09-24 08:46:16'),(29,2,'Áo thun dài tay',11,NULL,'2018-09-24 08:46:23','2018-09-24 08:46:23'),(30,2,'Áo thun mỏng',11,NULL,'2018-09-24 08:46:28','2018-09-24 08:46:28'),(31,2,'Áo sát nách nữ',11,NULL,'2018-09-24 08:46:40','2018-09-24 08:46:40'),(32,2,'Gym',11,NULL,'2018-09-24 08:46:44','2018-09-24 08:46:44');
/*!40000 ALTER TABLE `setting_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting_top_banners`
--

DROP TABLE IF EXISTS `setting_top_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting_top_banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `src_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting_top_banners`
--

LOCK TABLES `setting_top_banners` WRITE;
/*!40000 ALTER TABLE `setting_top_banners` DISABLE KEYS */;
INSERT INTO `setting_top_banners` VALUES (1,'top_banners/1537758874_banner_top_1.jpg',NULL,NULL),(2,'top_banners/1537758879_banner_top_2.jpeg',NULL,NULL),(3,'top_banners/1537758884_banner_top_3.jpg',NULL,NULL);
/*!40000 ALTER TABLE `setting_top_banners` ENABLE KEYS */;
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
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendors`
--

LOCK TABLES `vendors` WRITE;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-24 17:20:30
