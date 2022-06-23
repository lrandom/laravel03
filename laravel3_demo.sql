got/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80026
 Source Host           : localhost:3306
 Source Schema         : laravel3_demo

 Target Server Type    : MySQL
 Target Server Version : 80026
 File Encoding         : 65001

 Date: 23/06/2022 21:57:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES (1, 'PHP', NULL, NULL, 1);
INSERT INTO `categories` VALUES (2, 'Java', NULL, NULL, 2);
INSERT INTO `categories` VALUES (3, 'Laravel', NULL, NULL, 2);
INSERT INTO `categories` VALUES (4, 'JS', NULL, NULL, 1);
INSERT INTO `categories` VALUES (5, 'JS0', NULL, NULL, 1);
INSERT INTO `categories` VALUES (6, 'JS1', NULL, NULL, 1);
INSERT INTO `categories` VALUES (7, 'JS2', NULL, NULL, 1);
INSERT INTO `categories` VALUES (8, 'JS3', NULL, NULL, 1);
INSERT INTO `categories` VALUES (9, 'JS4', NULL, NULL, 1);
INSERT INTO `categories` VALUES (10, 'JS5', NULL, NULL, 1);
INSERT INTO `categories` VALUES (11, 'JS6', NULL, NULL, 1);
INSERT INTO `categories` VALUES (12, 'JS7', NULL, NULL, 1);
INSERT INTO `categories` VALUES (13, 'JS8', NULL, NULL, 1);
INSERT INTO `categories` VALUES (14, 'JS9', NULL, NULL, 1);
INSERT INTO `categories` VALUES (15, 'JS0', NULL, NULL, 1);
INSERT INTO `categories` VALUES (16, 'JS1', NULL, NULL, 1);
INSERT INTO `categories` VALUES (17, 'JS2', NULL, NULL, 1);
INSERT INTO `categories` VALUES (18, 'JS3', NULL, NULL, 1);
INSERT INTO `categories` VALUES (19, 'JS4', NULL, NULL, 1);
INSERT INTO `categories` VALUES (20, 'JS5', NULL, NULL, 1);
INSERT INTO `categories` VALUES (21, 'JS6', NULL, NULL, 1);
INSERT INTO `categories` VALUES (22, 'JS7', NULL, NULL, 1);
INSERT INTO `categories` VALUES (23, 'JS8', NULL, NULL, 1);
INSERT INTO `categories` VALUES (24, 'JS9', NULL, NULL, 1);
INSERT INTO `categories` VALUES (25, 'JS0', NULL, NULL, 1);
INSERT INTO `categories` VALUES (26, 'JS1', NULL, NULL, 1);
INSERT INTO `categories` VALUES (27, 'JS2', NULL, NULL, 1);
INSERT INTO `categories` VALUES (28, 'JS3', NULL, NULL, 1);
INSERT INTO `categories` VALUES (29, 'JS4', NULL, NULL, 1);
INSERT INTO `categories` VALUES (30, 'JS5', NULL, NULL, 1);
INSERT INTO `categories` VALUES (31, 'JS6', NULL, NULL, 1);
INSERT INTO `categories` VALUES (32, 'JS7', NULL, NULL, 1);
INSERT INTO `categories` VALUES (33, 'JS8', NULL, NULL, 1);
INSERT INTO `categories` VALUES (34, 'JS9', NULL, NULL, 1);
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` bigint NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of images
-- ----------------------------
BEGIN;
INSERT INTO `images` VALUES (1, 'App\\Models\\Post', 1, 'https://meta.vn/Data/image/2022/01/13/anh-dep-thien-nhien-3.jpg', NULL, NULL);
INSERT INTO `images` VALUES (2, 'App\\Models\\Post', 2, 'https://i-vnexpress.vnecdn.net/2019/07/30/anh-thien-nhien-dep-thang-7-1564483719_680x0.jpg', NULL, NULL);
INSERT INTO `images` VALUES (3, 'App\\Models\\Product', 1, 'https://hopphat.com/media/news/1906_dieu-hoa-daikin-inverter.jpg', NULL, NULL);
INSERT INTO `images` VALUES (4, 'App\\Models\\Product', 1, 'https://dienlanhdienmay.com/files/products/.tmb/420x512_daikin-nong-thuong.jpg', NULL, NULL);
INSERT INTO `images` VALUES (5, 'App\\Models\\Post', 1, 'https://meta.vn/Data/image/2022/01/13/anh-dep-thien-nhien-3.jpg', NULL, NULL);
INSERT INTO `images` VALUES (6, 'App\\Models\\Post', 2, 'https://i-vnexpress.vnecdn.net/2019/07/30/anh-thien-nhien-dep-thang-7-1564483719_680x0.jpg', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (6, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (7, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_06_14_124554_create_posts_table', 1);
INSERT INTO `migrations` VALUES (13, '2022_06_14_130436_create_categories', 2);
INSERT INTO `migrations` VALUES (14, '2022_06_14_130624_alter_categories_add_parent_id_column', 2);
INSERT INTO `migrations` VALUES (15, '2022_06_14_140320_alter_post_add_column_category_id', 3);
INSERT INTO `migrations` VALUES (16, '2022_06_21_130748_alter_posts_add_soft_delete', 4);
INSERT INTO `migrations` VALUES (17, '2022_06_23_124652_create_user_infos_table', 5);
INSERT INTO `migrations` VALUES (18, '2022_06_23_131853_create_products_table', 6);
INSERT INTO `migrations` VALUES (19, '2022_06_23_131916_create_types_table', 6);
INSERT INTO `migrations` VALUES (20, '2022_06_23_131948_create_type_products_table', 6);
INSERT INTO `migrations` VALUES (22, '2022_06_23_140635_create_images_table', 7);
INSERT INTO `migrations` VALUES (23, '2022_06_23_143525_create_type_pivots_table', 8);
INSERT INTO `migrations` VALUES (24, '2022_06_23_144501_alter_type_pivots_add_type_id', 9);
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `views` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
BEGIN;
INSERT INTO `posts` VALUES (1, 'Bài viết 1', NULL, 1, NULL, NULL, 1, NULL);
INSERT INTO `posts` VALUES (2, 'Bài viết 2', NULL, 2, NULL, NULL, 2, NULL);
INSERT INTO `posts` VALUES (3, 'Bài viết 3', NULL, 2, NULL, NULL, 2, NULL);
INSERT INTO `posts` VALUES (4, 'Bài viết 4', NULL, 2, NULL, NULL, 2, NULL);
INSERT INTO `posts` VALUES (5, 'Bài viết 5', NULL, 2, NULL, NULL, 2, NULL);
COMMIT;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES (1, 'Điều hoà Daikin', 'Điều hoà inverter', 9000000, NULL, NULL);
INSERT INTO `products` VALUES (2, 'Macbook Pro 2020', 'Macbook Pro lập trình siêu khét', 30000000, NULL, NULL);
INSERT INTO `products` VALUES (3, 'Iphone 13', 'Iphone siêu nét', 30000000, NULL, NULL);
INSERT INTO `products` VALUES (4, 'Loa Bluetooth JBL', 'Loa siêu trầm', 3000000, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for type_pivots
-- ----------------------------
DROP TABLE IF EXISTS `type_pivots`;
CREATE TABLE `type_pivots` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `typepivotable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typepivotable_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_id` bigint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of type_pivots
-- ----------------------------
BEGIN;
INSERT INTO `type_pivots` VALUES (1, 'App\\Models\\Post', 1, NULL, NULL, 4);
INSERT INTO `type_pivots` VALUES (2, 'App\\Models\\Post', 2, NULL, NULL, 5);
INSERT INTO `type_pivots` VALUES (3, 'App\\Models\\Product', 1, NULL, NULL, 1);
INSERT INTO `type_pivots` VALUES (4, 'App\\Models\\Product', 2, NULL, NULL, 3);
INSERT INTO `type_pivots` VALUES (5, 'App\\Models\\Product', 3, NULL, NULL, 3);
COMMIT;

-- ----------------------------
-- Table structure for type_products
-- ----------------------------
DROP TABLE IF EXISTS `type_products`;
CREATE TABLE `type_products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint NOT NULL,
  `type_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of type_products
-- ----------------------------
BEGIN;
INSERT INTO `type_products` VALUES (1, 1, 1, NULL, NULL);
INSERT INTO `type_products` VALUES (2, 1, 3, NULL, NULL);
INSERT INTO `type_products` VALUES (3, 2, 2, NULL, NULL);
INSERT INTO `type_products` VALUES (4, 2, 3, NULL, NULL);
INSERT INTO `type_products` VALUES (5, 3, 2, NULL, NULL);
INSERT INTO `type_products` VALUES (6, 3, 3, NULL, NULL);
INSERT INTO `type_products` VALUES (7, 4, 2, NULL, NULL);
INSERT INTO `type_products` VALUES (8, 4, 3, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for types
-- ----------------------------
DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of types
-- ----------------------------
BEGIN;
INSERT INTO `types` VALUES (1, 'Nhà cửa - đời sống', NULL, NULL);
INSERT INTO `types` VALUES (2, 'Thiết bị nghe nhìn', NULL, NULL);
INSERT INTO `types` VALUES (3, 'Điện - Điện tử - Điện lạnh', NULL, NULL);
INSERT INTO `types` VALUES (4, 'Sức khoẻ', NULL, NULL);
INSERT INTO `types` VALUES (5, 'Kinh tế', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for user_infos
-- ----------------------------
DROP TABLE IF EXISTS `user_infos`;
CREATE TABLE `user_infos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of user_infos
-- ----------------------------
BEGIN;
INSERT INTO `user_infos` VALUES (1, 0, '0868120920', 'Quảng Ninh0', NULL, NULL);
INSERT INTO `user_infos` VALUES (2, 1, '0868120921', 'Quảng Ninh1', NULL, NULL);
INSERT INTO `user_infos` VALUES (3, 2, '0868120922', 'Quảng Ninh2', NULL, NULL);
INSERT INTO `user_infos` VALUES (4, 3, '0868120923', 'Quảng Ninh3', NULL, NULL);
INSERT INTO `user_infos` VALUES (5, 4, '0868120924', 'Quảng Ninh4', NULL, NULL);
INSERT INTO `user_infos` VALUES (6, 5, '0868120925', 'Quảng Ninh5', NULL, NULL);
INSERT INTO `user_infos` VALUES (7, 6, '0868120926', 'Quảng Ninh6', NULL, NULL);
INSERT INTO `user_infos` VALUES (8, 7, '0868120927', 'Quảng Ninh7', NULL, NULL);
INSERT INTO `user_infos` VALUES (9, 8, '0868120928', 'Quảng Ninh8', NULL, NULL);
INSERT INTO `user_infos` VALUES (10, 9, '0868120929', 'Quảng Ninh9', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'lrandom0', 'lrandom@gmail.com0', NULL, '$2y$10$8CIqXA/NL5Q0bVaN5wc8EO8JQ9l1xEe3NW7rlIKdfwsUbZFmexGse', NULL, NULL, NULL);
INSERT INTO `users` VALUES (2, 'lrandom1', 'lrandom@gmail.com1', NULL, '$2y$10$hwPp8st1RKkF/pAFOEErA.JJS5yME02Jsowikn8cHs0SICG7dml7S', NULL, NULL, NULL);
INSERT INTO `users` VALUES (3, 'lrandom2', 'lrandom@gmail.com2', NULL, '$2y$10$lUPUBLP/Nl8oPl/TxFbNvuQ8EzE/z7hsA8quTRoZUCos.OKsopAJi', NULL, NULL, NULL);
INSERT INTO `users` VALUES (4, 'lrandom3', 'lrandom@gmail.com3', NULL, '$2y$10$diFIUNd8/WpqsgbpbyBc8OS3jLRnKr1JBwUAukCd.DyzXRcRDD2.S', NULL, NULL, NULL);
INSERT INTO `users` VALUES (5, 'lrandom4', 'lrandom@gmail.com4', NULL, '$2y$10$k4Li3yzs82tWlMfH0awX4.LadrHi8QBvCVXYpSKmVdgXuHtjdICQS', NULL, NULL, NULL);
INSERT INTO `users` VALUES (6, 'lrandom5', 'lrandom@gmail.com5', NULL, '$2y$10$K1I83J2k02d1dOSOKVGI0eofAb7KAO6jGMTxgozwNKQfAxT6tbsqS', NULL, NULL, NULL);
INSERT INTO `users` VALUES (7, 'lrandom6', 'lrandom@gmail.com6', NULL, '$2y$10$q/RaEqnx9OmpuWkywF0aMeqNLzesEv58uiu9gZyCgrJ4UFQ5jexMG', NULL, NULL, NULL);
INSERT INTO `users` VALUES (8, 'lrandom7', 'lrandom@gmail.com7', NULL, '$2y$10$dkGNu.le5FCZdHSkw5v9uOOpZ9brv3B1gBWWzMeqxiFsz3pvrdvoW', NULL, NULL, NULL);
INSERT INTO `users` VALUES (9, 'lrandom8', 'lrandom@gmail.com8', NULL, '$2y$10$bXGQVXMCgNYIgYUKtEVOIuzYIJjZMTZmI7lvFk7i/qt2hQ0HJN0vO', NULL, NULL, NULL);
INSERT INTO `users` VALUES (10, 'lrandom9', 'lrandom@gmail.com9', NULL, '$2y$10$Ja5G5cePZkO35bC79ztM6uCxHorzMER41104H06JLfAomKWEruA7.', NULL, NULL, NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
