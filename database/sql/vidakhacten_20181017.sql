-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: vidakhacten_v1
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
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `blog_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_public` int(11) NOT NULL DEFAULT '0',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Thời trang tương đồng của Gigi Hadid và Kendall Jenner',NULL,'2018-09-25 03:13:45','Gigi Hadid và Kendall Jenner là đôi bạn thân người mẫu nổi tiếng nhất thế giới. Phong cách thời trang của họ vì thế cũng liên quan đến nhau, không ít lần có sự đồng điệu thú vị.','<p><span style=\"color: rgb(15, 15, 15);\">Gigi Hadid và Kendall Jenner là đôi bạn thân người mẫu nổi tiếng nhất thế giới. Phong cách thời trang của họ vì thế cũng liên quan đến nhau, không ít lần có sự đồng điệu thú vị.</span></p><p class=\"ql-align-center\"><img src=\"http://localhost:9000/storage/images_editor/1537845041.jpeg\"></p><p><span style=\"color: rgb(15, 15, 15);\">Gigi và Kendall chọn phong cách thời thượng khi đi dạo phố. Cả hai đều diện áo crop top, quần skinny jeans, áo khoác ngoài cá tính và kính mặt gương.</span></p><p><strong style=\"color: rgb(15, 15, 15);\">Gigi và Kendall cùng diện phong cách của thập niên 90. Trong khi Kendall chọn quần nhung cạp cao thì Gigi diện xu hướng áo phông in họa tiết nhuộm màu trên vải. Cả 2 chọn sneakers trắng và kính mát để hoàn thiện set đồ.</strong></p><p class=\"ql-align-center\"><img src=\"http://localhost:9000/storage/images_editor/1537845188.jpeg\"></p>','blogs/1/1537845119_blog2_3f69220f25d34aa68b894d2c5a942801_grande.jpg',1,0,'2018-09-25 02:43:09','2018-09-25 03:13:45'),(2,'Cách phối họa tiết kẻ mùa hè ấn tượng như sao ngoại',NULL,'2018-09-25 03:17:49','Những thiết kế họa tiết kẻ năng động, trẻ trung luôn được lòng các mỹ nhân Hollywood khi phối đồ ngày hè.Gabrielle Union gây ấn tượng với cách phối đồ mới lạ. Cô diện áo tank top đen trắng mix cùng chân váy bó màu xanh với phần chân váy xòe sọc ngang trắng-xanh-đen thú vị','<p><span style=\"color: rgb(15, 15, 15);\">Những thiết kế họa tiết kẻ năng động, trẻ trung luôn được lòng các mỹ nhân Hollywood khi phối đồ ngày hè.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537845402.jpeg\"></p><p>Gabrielle Union gây ấn tượng với cách phối đồ mới lạ. Cô diện áo tank top đen trắng mix cùng chân váy bó màu xanh với phần chân váy xòe sọc ngang trắng-xanh-đen thú vị.<img src=\"http://localhost:9000/storage/images_editor/1537845427.jpeg\"></p><p><span style=\"color: rgb(15, 15, 15);\">Gigi Hadid sử dụng 2 gam màu cơ bản là trắng đen cho chiếc áo cúp ngực cut out. Cách phối họa tiết ngang, dọc, chéo kết hợp giúp chiếc áo của cô trông cá tính hơn.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537845444.jpeg\"></p>','blogs/2/1537845469_blog1_c22673e0c0334f00b45e6aa180dfe42f_grande.jpg',1,0,'2018-09-25 03:17:49','2018-09-25 03:17:49'),(3,'Chọn đồ mùa hè che khuyết điểm cánh tay',NULL,'2018-09-25 03:21:17','Dưới đây là bí quyết giúp bạn thoải mái diện những thiết kế không tay, 2 dây mát mẻ ngày hè mà vẫn che được khuyết điểm cánh tay kém xinh.','<p><span style=\"color: rgb(15, 15, 15);\">Dưới đây là bí quyết giúp bạn thoải mái diện những thiết kế không tay, 2 dây mát mẻ ngày hè mà vẫn che được khuyết điểm cánh tay kém xinh.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537845642.jpeg\"></p><p><strong style=\"color: rgb(15, 15, 15);\">Đừng mặc áo quá ôm:&nbsp;</strong><span style=\"color: rgb(15, 15, 15);\">Một chiếc áo quá ôm không chỉ khiến bạn cảm thấy không thoải mái mà còn dễ làm lộ các khuyết điểm như vùng mỡ thừa xấu xí ở lưng, nách và tạo sự chú ý vào phần cánh tay không đẹp. Hãy chọn những chiếc áo không tay hơi rộng, chúng giúp bạn trông nhẹ nhàng và sang trọng hơn.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537845660.jpeg\"></p><p><strong style=\"color: rgb(15, 15, 15);\">Tay áo không khoét quá sâu hoặc quá cao:&nbsp;</strong><span style=\"color: rgb(15, 15, 15);\">Hãy đảm bảo bạn có thể dễ dàng hoạt động và không làm lộ phần áo lót bên trong.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537845674.jpeg\"></p>','blogs/3/1537845677_blog4_grande.jpg',1,0,'2018-09-25 03:21:17','2018-09-25 03:21:17'),(4,'Phối quần jeans cạp cao theo phong cách thập niên 1970',NULL,'2018-09-25 03:22:17','Quần jeans cạp cao xuất hiện từ những năm 1970 đã quay trở lại, được nhiều tín đồ thời trang yêu thích và phối cá tính theo hơi hướng hiện đại, trẻ trung.','<p><span style=\"color: rgb(15, 15, 15);\">Quần jeans cạp cao xuất hiện từ những năm 1970 đã quay trở lại, được nhiều tín đồ thời trang yêu thích và phối cá tính theo hơi hướng hiện đại, trẻ trung.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537845707.jpeg\"></p><p><span style=\"color: rgb(15, 15, 15);\">Item phảng phất nét bụi bặm này vẫn trông nhẹ nhàng khi phối với áo lụa dài tay và giày cao gót họa tiết da trăn.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537845723.jpeg\"></p><p><span style=\"color: rgb(15, 15, 15);\">Một biến thể nữ tính khác của quần jeans cạp cao khi kết hợp áo sơ mi đăng-ten cầu kỳ.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537845736.jpeg\"></p><p><br></p>','blogs/4/1537845737_blog2_grande.jpg',1,0,'2018-09-25 03:22:17','2018-09-25 03:22:17'),(5,'8 công thức phối đồ mùa hè của Karlie Kloss',NULL,'2018-09-25 03:27:46','Một số bí quyết nhỏ giúp chân dài nổi tiếng luôn trẻ trung, tươi tắn và cá tính ngày hè.Crop top + váy đồng màu: Karlie diện crop top ôm sát trễ vai gợi cảm cùng họa tiết kẻ sọc đỏ - trắng với chân váy dài tạo nên sự trẻ trung, thoải mái nhưng không kém phần duyên dáng.','<p><span style=\"color: rgb(15, 15, 15);\">Một số bí quyết nhỏ giúp chân dài nổi tiếng luôn trẻ trung, tươi tắn và cá tính ngày hè.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537846044.jpeg\"></p><p><strong style=\"color: rgb(15, 15, 15);\">Crop top + váy đồng màu:&nbsp;</strong><span style=\"color: rgb(15, 15, 15);\">Karlie diện crop top ôm sát trễ vai gợi cảm cùng họa tiết kẻ sọc đỏ - trắng với chân váy dài tạo nên sự trẻ trung, thoải mái nhưng không kém phần duyên dáng.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537846063.jpeg\"></p>','blogs/5/1537846066_blog3_b0b2d402ec1a4997bb2f1f1014aa1616_grande.jpg',1,0,'2018-09-25 03:27:46','2018-09-25 03:27:46'),(6,'Diện váy xẻ cao quyến rũ như Miranda Kerr',NULL,'2018-09-25 05:05:25','Với lợi thế đôi chân thon dài kết hợp cùng thân hình chuẩn của một siêu mẫu, Miranda Kerr lựa chọn váy xẻ tà cao để khoe khéo ưu điểm này mỗi khi xuất hiện.','<p><span style=\"color: rgb(15, 15, 15);\">Với lợi thế đôi chân thon dài kết hợp cùng thân hình chuẩn của một siêu mẫu, Miranda Kerr lựa chọn váy xẻ tà cao để khoe khéo ưu điểm này mỗi khi xuất hiện.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537846125.jpeg\"></p><p><span style=\"color: rgb(15, 15, 15);\">Cựu thiên thần nội y nhiều lần khoe vẻ sexy khi diện váy maxi xẻ cao đi sự kiện hoặc dạo phố.</span></p><p><img src=\"http://localhost:9000/storage/images_editor/1537846179.jpeg\"></p><p><br></p>','blogs/6/1537846202_blog1_grande.jpg',0,0,'2018-09-25 03:30:02','2018-09-25 05:05:25');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `districts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `districts`
--

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=338 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (297,'2014_10_12_000000_create_users_table',1),(298,'2014_10_12_100000_create_password_resets_table',1),(299,'2018_09_13_033850_create_setting_colors_table',1),(300,'2018_09_13_034121_create_setting_sizes_table',1),(301,'2018_09_13_034203_create_vendors_table',1),(302,'2018_09_13_034744_create_product_types_table',1),(303,'2018_09_13_034939_create_product_colors_table',1),(304,'2018_09_13_035528_create_products_table',1),(305,'2018_09_13_042541_create_product_images_table',1),(306,'2018_09_13_043237_create_blogs_table',1),(307,'2018_09_13_044027_create_order_statuses_table',1),(308,'2018_09_13_044139_create_orders_table',1),(309,'2018_09_13_044639_create_order_addresses_table',1),(310,'2018_09_13_044835_create_order_payments_table',1),(311,'2018_09_13_045016_create_order_details_table',1),(312,'2018_09_21_090833_create_setting_banners_table',1),(313,'2018_09_24_030107_create_setting_top_banners_table',1),(314,'2018_09_24_064222_create_setting_tags_table',1),(315,'2018_09_25_064316_create_setting_app_infos_table',1),(316,'2014_10_12_000000_create_users_table',1),(317,'2014_10_12_100000_create_password_resets_table',1),(318,'2018_09_13_033850_create_setting_colors_table',1),(319,'2018_09_13_034121_create_setting_sizes_table',1),(320,'2018_09_13_034203_create_vendors_table',1),(321,'2018_09_13_034744_create_product_types_table',1),(322,'2018_09_13_034939_create_product_colors_table',1),(323,'2018_09_13_035528_create_products_table',1),(324,'2018_09_13_042541_create_product_images_table',1),(325,'2018_09_13_043237_create_blogs_table',1),(326,'2018_09_13_044027_create_order_statuses_table',1),(327,'2018_09_13_044139_create_orders_table',1),(328,'2018_09_13_044639_create_order_addresses_table',1),(329,'2018_09_13_044835_create_order_payments_table',1),(330,'2018_09_13_045016_create_order_details_table',1),(331,'2018_09_21_090833_create_setting_banners_table',1),(332,'2018_09_24_030107_create_setting_top_banners_table',1),(333,'2018_09_24_064222_create_setting_tags_table',1),(334,'2018_09_25_064316_create_setting_app_infos_table',1),(335,'2018_09_27_085515_create_countries_table',1),(336,'2018_09_27_085555_create_provinces_table',1),(337,'2018_09_27_085627_create_districts_table',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (1,1,'products/1/1537864485467_upload_83d6aff88ce446e18952a0f03074796c_grande.jpg','2018-09-25 08:35:00','2018-09-25 08:35:00'),(2,1,'products/1/1537864488708_upload_935fec0a5acb4cd69cc71a7f6f074d5c_grande.jpg','2018-09-25 08:35:00','2018-09-25 08:35:00'),(3,1,'products/1/1537864491090_upload_74317ff4855f473fb754b9a6f3edd738_master.jpg','2018-09-25 08:35:00','2018-09-25 08:35:00'),(4,1,'products/1/1537864493125_upload_9700393f2c014d8dae43725b805d3fff_grande.jpg','2018-09-25 08:35:00','2018-09-25 08:35:00'),(5,2,'products/2/1537865179942_upload_6ab7aa1a9ac9449fabff4a94f301b004_grande.jpg','2018-09-25 08:46:24','2018-09-25 08:46:24'),(6,2,'products/2/1537865182305_upload_04017362185944ef82975656c6d48ef0_grande.jpg','2018-09-25 08:46:24','2018-09-25 08:46:24'),(7,3,'products/3/1537865285055_upload_0ae2b8cf9cc6422faee895d813799bf1_grande.jpg','2018-09-25 08:48:24','2018-09-25 08:48:24'),(8,3,'products/3/1537865287223_upload_741e05d2524f42a0b2e97d351bbb0ef7_grande.jpg','2018-09-25 08:48:24','2018-09-25 08:48:24'),(9,3,'products/3/1537865349_upload_7d7f8a25a2d24b75b188562b9ae66634_grande.jpg','2018-09-25 08:49:09','2018-09-25 08:49:09'),(10,4,'products/4/1537865938505_upload_75004946e43141aab41bdce887c52d46_grande.jpg','2018-09-25 08:59:04','2018-09-25 08:59:04'),(11,4,'products/4/1537865940460_upload_a9675855798b404d8e1c108be47c1de9_grande.jpg','2018-09-25 08:59:04','2018-09-25 08:59:04'),(12,4,'products/4/1537865942413_upload_b4753a718a864c468fdfb7f65c026d01_grande.jpg','2018-09-25 08:59:04','2018-09-25 08:59:04'),(13,5,'products/5/1537866018584_upload_9c173a074a6b4d738293d0cc3cfc6d28_grande.jpg','2018-09-25 09:00:23','2018-09-25 09:00:23'),(14,5,'products/5/1537866021304_upload_c3722a5d8ff34f4f9de6430dd4266aee_grande.jpg','2018-09-25 09:00:23','2018-09-25 09:00:23');
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
INSERT INTO `product_types` VALUES (1,'Ví khắc cung hoàng đạo',NULL,'product_types/1537764639_sidebarleft_icon1.png',1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(2,'Ví phong cảnh',NULL,'product_types/1537764886_sidebarleft_icon2.png',1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(3,'Túi ví',NULL,'product_types/1537764895_sidebarleft_icon3.png',1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(4,'Ví thời trang nữ',NULL,'product_types/1537764902_sidebarleft_icon4.png',1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(5,'Ví thời trang nam',NULL,'product_types/1537764915_sidebarleft_icon5.png',1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(6,'Ví tình ca',NULL,'product_types/1537764928_sidebarleft_icon6.png',1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(7,'Ví năm mới',NULL,'product_types/1537764936_sidebarleft_icon7.png',1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(8,'Ví giảm giá',NULL,'product_types/1537764947_sidebarleft_icon9.png',1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(9,'Sản phẩm hot',NULL,'product_types/1537764955_sidebarleft_icon8.png',1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(10,'Ví cầu an',NULL,'product_types/1537764962_sidebarleft_icon10.png',1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(11,'Ví khắc con mèo',1,NULL,1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(12,'Ví khắc con ngựa',1,NULL,1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(13,'Cảnh quê hương',2,NULL,1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(14,'Cảnh công viên',2,NULL,1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(15,'Cảnh hiện đại',2,NULL,1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(16,'Ví phong cách',3,NULL,1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(17,'Ví da cá sấu',4,NULL,1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43'),(18,'Ví tiện lợi',4,NULL,1,0,'2018-09-25 07:02:43','2018-09-25 07:02:43');
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
  `qty_sale_order` bigint(20) DEFAULT '0',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_public` int(11) NOT NULL DEFAULT '0',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Áo sơ mi Aristino ASS17-MO57','STMF-07',1,11,435000,725000,290000,40,'Với sự kết hợp giữa màu hồng cùng họa tiết ô vuông tinh tế, áo sơ mi nam ASS17-MO57 giúp khẳng định vẻ ngoài nam tính và hiện đại của...','<p class=\"ql-align-justify\"><strong>Chi tiết</strong>:</p><p class=\"ql-align-justify\">- Với sự kết hợp giữa màu hồng cùng họa tiết ô vuông tinh tế,&nbsp;<strong>áo sơ mi nam ASS17-MO57</strong>&nbsp;giúp khẳng định vẻ ngoài nam tính và hiện đại của bạn. Kiểu dáng slimfit ôm sát vào cơ thể giúp tôn lên body người mặc.</p><p class=\"ql-align-justify\">- Kiểu dáng đơn giản với cổ bẻ kết hợp với tay ngắn gập khéo léo cùng đường nét tỉ mỉ, tinh tế mang đến cho bạn một diện mạo hoàn chỉnh mỗi khi xuất hiện.</p><p class=\"ql-align-justify\"><strong>Chất liệu</strong>:</p><p class=\"ql-align-justify\">-&nbsp;<strong>Áo sơ mi ASS17-MO57</strong>&nbsp;là sự kết hợp hài hòa giữa sợ Modal và sợi Poly spun mang đến cảm giác mát lạnh khi được chạm vào, khả năng thấm hút, chống nhăn tốt thoải mái, dễ chịu khi mặc. Đây là một trong những sản phẩm chiếm được cảm tình nhiều nhất của tín đồ Aristino trong mùa hè này.</p><p><br></p>','products/1/1537864500_upload_55eeae8e177f40f08a2594555a01ff06_grande.jpg',0,NULL,'1',0,2018,'2018-09-25 08:55:22','0000-00-00 00:00:00'),(2,'Áo sơ mi dài tay Aristino ALS021','STMF-04',1,11,339000,565000,226000,40,'Với sự kết hợp giữa màu hồng cùng họa tiết ô vuông tinh tế, áo sơ mi nam ASS17-MO57 giúp khẳng định vẻ ngoài nam tính và hiện đại của...','<p class=\"ql-align-justify\"><strong>Chi tiết</strong>:</p><p class=\"ql-align-justify\">- Với sự kết hợp giữa màu hồng cùng họa tiết ô vuông tinh tế,&nbsp;<strong>áo sơ mi nam ASS17-MO57</strong>&nbsp;giúp khẳng định vẻ ngoài nam tính và hiện đại của bạn. Kiểu dáng slimfit ôm sát vào cơ thể giúp tôn lên body người mặc.</p><p class=\"ql-align-justify\">- Kiểu dáng đơn giản với cổ bẻ kết hợp với tay ngắn gập khéo léo cùng đường nét tỉ mỉ, tinh tế mang đến cho bạn một diện mạo hoàn chỉnh mỗi khi xuất hiện.</p><p class=\"ql-align-justify\"><strong>Chất liệu</strong>:</p><p class=\"ql-align-justify\">-&nbsp;<strong>Áo sơ mi ASS17-MO57</strong>&nbsp;là sự kết hợp hài hòa giữa sợ Modal và sợi Poly spun mang đến cảm giác mát lạnh khi được chạm vào, khả năng thấm hút, chống nhăn tốt thoải mái, dễ chịu khi mặc. Đây là một trong những sản phẩm chiếm được cảm tình nhiều nhất của tín đồ Aristino trong mùa hè này.</p><p><br></p>','products/2/1537865184_upload_6ebd03d020f442779e85a8fe8951ca22_grande.jpg',0,NULL,'1',0,2018,'2018-09-25 08:55:13','0000-00-00 00:00:00'),(3,'Áo sơ mi nam Aristino ASS17-MO08','STMF-05',1,11,435000,725000,290000,40,'Áo sơ mi ngắn tay ASS17-MO58 được thiết kế với kiểu dáng slimfit ôm trọn cơ thể giúp tôn lên body người mặc. Kết hợp với sắc xanh gốm...','<p class=\"ql-align-justify\"><strong>CHI TIẾT:</strong></p><p class=\"ql-align-justify\"><strong>- Áo sơ mi ngắn tay</strong>&nbsp;ASS17-MO58 được thiết kế với kiểu dáng slimfit ôm trọn cơ thể giúp tôn lên body người mặc. Kết hợp với sắc xanh gốm cùng hoạ tiết phẩy sọc đầy tinh tế khiến chiếc áo trở lên thu hút hơn.</p><p class=\"ql-align-justify\">- Người mặc có thể dễ dàng hơn khi kết hợp trang phục phù hợp với từng hoàn cảnh như đi làm, đi chơi hoặc tham gia các sự kiện quan trọng.</p><p class=\"ql-align-justify\"><strong>CHẤT LIỆU:</strong></p><p class=\"ql-align-justify\">- Chất liệu tạo nên&nbsp;<strong>mẫu áo sơ mi đẹp</strong>&nbsp;cả về kiểu dáng và chất lượng chính là sự kết hợp hài hòa giữa sợi Modal với khả năng thấm hút mạnh mẽ cao gấp 1.5 lần cotton, không nhăn nhàu, luôn giữ form dáng luôn như mới và sợi Poly Spun có tính hút ẩm rất tốt, đặc biệt dễ dàng là ủi trong thời tiết mùa hè oi bức.</p><p><br></p>','products/3/1537865304_upload_f2ed2871afeb4b2fb1ffbffae1093f52_grande.jpg',0,NULL,'1',0,2018,'2018-09-25 08:54:47','0000-00-00 00:00:00'),(4,'Áo sơ mi nam Aristino ASS17-MO58','STMF-06',1,11,435000,725000,290000,15,'Áo sơ mi ngắn tay ASS17-MO58 được thiết kế với kiểu dáng slimfit ôm trọn cơ thể giúp tôn lên body người mặc. Kết hợp với sắc xanh gốm...','<p class=\"ql-align-justify\"><strong>CHI TIẾT:</strong></p><p class=\"ql-align-justify\"><strong>- Áo sơ mi ngắn tay</strong>&nbsp;ASS17-MO58 được thiết kế với kiểu dáng slimfit ôm trọn cơ thể giúp tôn lên body người mặc. Kết hợp với sắc xanh gốm cùng hoạ tiết phẩy sọc đầy tinh tế khiến chiếc áo trở lên thu hút hơn.</p><p class=\"ql-align-justify\">- Người mặc có thể dễ dàng hơn khi kết hợp trang phục phù hợp với từng hoàn cảnh như đi làm, đi chơi hoặc tham gia các sự kiện quan trọng.</p><p class=\"ql-align-justify\"><strong>CHẤT LIỆU:</strong></p><p class=\"ql-align-justify\">- Chất liệu tạo nên&nbsp;<strong>mẫu áo sơ mi đẹp</strong>&nbsp;cả về kiểu dáng và chất lượng chính là sự kết hợp hài hòa giữa sợi Modal với khả năng thấm hút mạnh mẽ cao gấp 1.5 lần cotton, không nhăn nhàu, luôn giữ form dáng luôn như mới và sợi Poly Spun có tính hút ẩm rất tốt, đặc biệt dễ dàng là ủi trong thời tiết mùa hè oi bức.</p><p><br></p>','products/4/1537865944_upload_0ca95ba05e3a4a40bcc53e599bd0f2f9_grande.jpg',0,NULL,'1',0,2018,'2018-09-25 08:59:04','0000-00-00 00:00:00'),(5,'Áo sơ mi nam Aristino ASS17-MO58 X1','STMF-01',1,11,300000,500000,200000,45,'Với sự kết hợp giữa màu hồng cùng họa tiết ô vuông tinh tế, áo sơ mi nam ASS17-MO57 giúp khẳng định vẻ ngoài nam tính và hiện đại của...','<p class=\"ql-align-justify\"><strong>Chi tiết</strong>:</p><p class=\"ql-align-justify\">- Với sự kết hợp giữa màu hồng cùng họa tiết ô vuông tinh tế,&nbsp;<strong>áo sơ mi nam ASS17-MO57</strong>&nbsp;giúp khẳng định vẻ ngoài nam tính và hiện đại của bạn. Kiểu dáng slimfit ôm sát vào cơ thể giúp tôn lên body người mặc.</p><p class=\"ql-align-justify\">- Kiểu dáng đơn giản với cổ bẻ kết hợp với tay ngắn gập khéo léo cùng đường nét tỉ mỉ, tinh tế mang đến cho bạn một diện mạo hoàn chỉnh mỗi khi xuất hiện.</p><p class=\"ql-align-justify\"><strong>Chất liệu</strong>:</p><p class=\"ql-align-justify\">-&nbsp;<strong>Áo sơ mi ASS17-MO57</strong>&nbsp;là sự kết hợp hài hòa giữa sợ Modal và sợi Poly spun mang đến cảm giác mát lạnh khi được chạm vào, khả năng thấm hút, chống nhăn tốt thoải mái, dễ chịu khi mặc. Đây là một trong những sản phẩm chiếm được cảm tình nhiều nhất của tín đồ Aristino trong mùa hè này.</p><p><br></p>','products/5/1537866023_upload_c9335cbfd440497fb693bc290a7a8123_grande.jpg',0,NULL,'1',0,2018,'2018-09-25 09:00:23','0000-00-00 00:00:00'),(6,'Áo khoác cao cấp PX','SP_001',2,11,1900000,2200000,300000,15,'Thêm vào bộ sưu tập Thu Đông năm nay của bạn chiếc áo cardigan độc đáo đến từ thương hiệu ZALORA. Áo có chất liệu cotton mang lại cảm giác...','<p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">Thêm vào bộ sưu tập Thu Đông năm nay của bạn chiếc áo cardigan độc đáo đến từ thương hiệu ZALORA. Áo có chất liệu cotton mang lại cảm giác mềm mại, ấm áp khi mặc. Với màu sắc tối, kiểu dáng đơn giản nhưng được khéo léo phối da ở viền cổ áo và tay áo khiến bạn trông thật dịu dàng nhưng vẫn có cá tính riêng.</span></p><p><br></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Chất liệu cotton</span></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Cổ chữ V</span></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Tay dài, gấu tay có phối da</span></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Không có lót</span></p>','products/6/1537866239_1511595751-1-min_grande.jpg',0,NULL,'1',0,2018,'2018-09-25 09:03:59','0000-00-00 00:00:00'),(7,'Áo khoác hiện đại KTA','SP_002',2,13,2100000,2300000,200000,10,'Thêm vào bộ sưu tập Thu Đông năm nay của bạn chiếc áo cardigan độc đáo đến từ thương hiệu ZALORA. Áo có chất liệu cotton mang lại cảm giác...','<p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">Thêm vào bộ sưu tập Thu Đông năm nay của bạn chiếc áo cardigan độc đáo đến từ thương hiệu ZALORA. Áo có chất liệu cotton mang lại cảm giác mềm mại, ấm áp khi mặc. Với màu sắc tối, kiểu dáng đơn giản nhưng được khéo léo phối da ở viền cổ áo và tay áo khiến bạn trông thật dịu dàng nhưng vẫn có cá tính riêng.</span></p><p><br></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Chất liệu cotton</span></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Cổ chữ V</span></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Tay dài, gấu tay có phối da</span></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Không có lót</span></p>','products/7/1537866375_1511595791-2-min_grande.jpg',0,NULL,'1',0,2018,'2018-09-25 09:06:15','0000-00-00 00:00:00'),(8,'Áo khoác nữ XT-OM','SP_003',2,13,340000,380000,40000,10,'Cho một mùa đông ấm áp nhưng không mất đi nét tinh tế, thời thượng cùng áo khoác có nón đến từ thương hiệu ZALORA. Áo được tạo từ chất...','<p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">Cho một mùa đông ấm áp nhưng không mất đi nét tinh tế, thời thượng cùng áo khoác có nón đến từ thương hiệu ZALORA. Áo được tạo từ chất liệu dày, xù thích hợp để giữ ấm cơ thể, kiểu dáng áo suông, rộng mang lại cảm giác thoải mái cho người mặc.</span></p><p><br></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Chất liệu acrylic pha</span></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Áo có nón</span></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Tay dài</span></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Dáng suông</span></p><p><span style=\"background-color: rgb(244, 248, 250); color: rgb(15, 15, 15);\">- Không có lót</span></p>','products/8/1537866529_1511595288-5_grande.jpg',0,NULL,'1',0,2018,'2018-09-25 09:08:49','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provinces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting_app_infos`
--

DROP TABLE IF EXISTS `setting_app_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting_app_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_src_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting_app_infos`
--

LOCK TABLES `setting_app_infos` WRITE;
/*!40000 ALTER TABLE `setting_app_infos` DISABLE KEYS */;
INSERT INTO `setting_app_infos` VALUES (1,'Trang Sức Cao Cấp',NULL,'0932 373 807','08.38666237','vidabokhactensaigon@gmail.com','vidabokhactensaigon','60/30 Đồng Đen ,phường 14 ,Quận Tân Bình','2018-09-25 07:35:50','2018-09-25 07:53:59');
/*!40000 ALTER TABLE `setting_app_infos` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting_tags`
--

LOCK TABLES `setting_tags` WRITE;
/*!40000 ALTER TABLE `setting_tags` DISABLE KEYS */;
INSERT INTO `setting_tags` VALUES (1,1,'Giày thể thao',11,NULL,NULL,NULL),(2,1,'Giày tập golf',11,NULL,NULL,NULL),(3,1,'Giày chơi bóng rổ',11,NULL,NULL,NULL),(4,1,'Giày đạp xe',11,NULL,NULL,NULL),(5,1,'Giày trượt ván',11,NULL,NULL,NULL),(6,1,'Giày cao gót',11,NULL,NULL,NULL),(7,1,'Giày Sneaker',11,NULL,NULL,NULL),(8,1,'Giày chạy bộ',11,NULL,NULL,NULL),(9,1,'Giày đá bòng',11,NULL,NULL,NULL),(10,1,'Giày chơi cầu lông',11,NULL,NULL,NULL),(11,1,'Giày thể thao',11,NULL,NULL,NULL),(12,1,'Giày leo núi',11,NULL,NULL,NULL),(13,1,'Giày tập thể hình',11,NULL,NULL,NULL),(14,1,'Giày lười',11,NULL,NULL,NULL),(15,1,'Giày Converse',11,NULL,NULL,NULL),(16,1,'Giày Phong Cách',11,NULL,NULL,NULL),(17,2,'Áo sơ mi nam',11,NULL,NULL,NULL),(18,2,'Áo thun nữ',11,NULL,NULL,NULL),(19,2,'Áo thun công sở',11,NULL,NULL,NULL),(20,2,'Áo thun nhăn',11,NULL,NULL,NULL),(21,2,'Áo thun tay ngắn',11,NULL,NULL,NULL),(22,2,'Áo thun cá tính',11,NULL,NULL,NULL),(23,2,'Áó thun cặp',11,NULL,NULL,NULL),(24,2,'Áo sát nách nam',11,NULL,NULL,NULL),(25,2,'Áo thun ngắn tay',11,NULL,NULL,NULL),(26,2,'Áo thun dạo phố',11,NULL,NULL,NULL),(27,2,'Kiểu xẻ nách',11,NULL,NULL,NULL),(28,2,'Áo thun cổ dài',11,NULL,NULL,NULL),(29,2,'Áo thun dài tay',11,NULL,NULL,NULL),(30,2,'Áo thun mỏng',11,NULL,NULL,NULL),(31,2,'Áo sát nách nữ',11,NULL,NULL,NULL),(32,2,'Gym',11,NULL,NULL,NULL),(33,NULL,NULL,NULL,NULL,'2018-09-25 07:28:37','2018-09-25 07:28:37');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendors`
--

LOCK TABLES `vendors` WRITE;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;
INSERT INTO `vendors` VALUES (1,'Aristino','0','2018-09-25 08:05:52','2018-09-25 08:05:52'),(2,'Zalora','0','2018-09-25 09:03:16','2018-09-25 09:03:16');
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

-- Dump completed on 2018-10-17 17:04:37
