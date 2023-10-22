-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 22, 2023 at 04:36 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phong_vu_php_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `banners_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `slug`, `banner_type`, `photo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Banner header 01', 'banner-header-01', 'banner_header', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-header.jpg', '<p>Banner header</p>', 'active', '2023-10-19 20:39:10', '2023-10-19 20:39:10'),
(2, 'Banner header 02', 'banner-header-02', 'banner_header', 'http://127.0.0.1:8000/storage/photos/1/banner/header_banner.jpeg', '<p>Banner header 02<br></p>', 'active', '2023-10-19 20:40:47', '2023-10-19 20:40:47'),
(3, 'Carousel 01', 'carousel-01', 'main_carousel', 'http://127.0.0.1:8000/storage/photos/1/banner/main-carousel-01.jpg', '<p>Carousel 01<br></p>', 'active', '2023-10-19 21:01:55', '2023-10-19 21:01:55'),
(4, 'Carousel 02', 'carousel-02', 'main_carousel', 'http://127.0.0.1:8000/storage/photos/1/banner/main-carousel-02.jpg', '<p>Carousel 02<br></p>', 'active', '2023-10-19 21:02:17', '2023-10-19 21:02:17'),
(5, 'Carousel 03', 'carousel-03', 'main_carousel', 'http://127.0.0.1:8000/storage/photos/1/banner/main-carousel-03.jpg', '<p>Carousel 03<br></p>', 'active', '2023-10-19 21:02:35', '2023-10-19 21:02:35'),
(6, 'Banner right 01', 'banner-right-01', 'carousel_right', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-right-01.gif', '<p>Banner right 01<br></p>', 'active', '2023-10-19 21:06:07', '2023-10-19 21:06:07'),
(7, 'Banner right 02', 'banner-right-02', 'carousel_right', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-right-02.gif', '<p>Banner right 02<br></p>', 'active', '2023-10-19 21:06:42', '2023-10-19 21:06:42'),
(8, 'Banner bottom 01', 'banner-bottom-01', 'banner_bottom', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-bottom-01.jpg', '<p>Banner bottom 01<br></p>', 'active', '2023-10-19 21:12:16', '2023-10-19 21:12:16'),
(9, 'Banner bottom 02', 'banner-bottom-02', 'banner_bottom', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-bottom-02.jpg', '<p>Banner bottom 02<br></p>', 'active', '2023-10-19 21:12:33', '2023-10-19 21:12:33'),
(10, 'Banner bottom 03', 'banner-bottom-03', 'banner_bottom', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-bottom-03.jpg', '<p>Banner bottom 03<br></p>', 'active', '2023-10-19 21:12:48', '2023-10-19 21:12:48'),
(11, 'Banner bottom 04', 'banner-bottom-04', 'banner_bottom', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-bottom-04.jpg', '<p>Banner bottom 04<br></p>', 'active', '2023-10-19 21:13:02', '2023-10-19 21:13:02'),
(12, 'Carousel 04', 'carousel-04', 'main_carousel', 'http://127.0.0.1:8000/storage/photos/1/banner/main-carousel-04.jpg', '<p>Carousel 04<br></p>', 'active', '2023-10-19 21:13:41', '2023-10-19 21:13:41'),
(13, 'Carousel 05', 'carousel-05', 'main_carousel', 'http://127.0.0.1:8000/storage/photos/1/banner/main-carousel-05.jpg', '<p>Carousel 05<br></p>', 'active', '2023-10-19 21:14:12', '2023-10-19 21:14:12'),
(14, 'Carousel 06', 'carousel-06', 'main_carousel', 'http://127.0.0.1:8000/storage/photos/1/banner/main-carousel-06.jpg', '<p>Carousel 06<br></p>', 'active', '2023-10-19 21:14:27', '2023-10-19 21:14:27'),
(15, 'Carousel 07', 'carousel-07', 'main_carousel', 'http://127.0.0.1:8000/storage/photos/1/banner/main-carousel-07.jpg', '<p>Carousel 07<br></p>', 'active', '2023-10-19 21:14:46', '2023-10-19 21:14:46'),
(16, 'Carousel 08', 'carousel-08', 'main_carousel', 'http://127.0.0.1:8000/storage/photos/1/banner/main-carousel-08.jpg', '<p>Carousel 08<br></p>', 'active', '2023-10-19 21:15:21', '2023-10-19 21:15:21'),
(17, 'Carousel 09', 'carousel-09', 'main_carousel', 'http://127.0.0.1:8000/storage/photos/1/banner/main-carousel-09.jpg', '<p>Carousel 09<br></p>', 'active', '2023-10-19 21:16:14', '2023-10-19 21:16:14'),
(18, 'Carousel 10', 'carousel-10', 'main_carousel', 'http://127.0.0.1:8000/storage/photos/1/banner/main-carousel-10.jpg', '<p>Carousel 10<br></p>', 'active', '2023-10-19 21:16:30', '2023-10-19 21:16:30'),
(19, 'Banner tab 01', 'banner-tab-01', 'banner_tab', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-tab-01.jpg', '<p>Banner tab 01<br></p>', 'active', '2023-10-19 21:51:24', '2023-10-19 21:51:24'),
(20, 'Banner tab 02', 'banner-tab-02', 'banner_tab', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-tab-02.jpg', '<p>Banner tab 02<br></p>', 'active', '2023-10-19 21:51:38', '2023-10-19 21:51:38'),
(21, 'Banner tab 03', 'banner-tab-03', 'banner_tab', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-tab-03.jpg', '<p>Banner tab 03<br></p>', 'active', '2023-10-19 21:51:52', '2023-10-19 21:51:52'),
(22, 'Banner tab 04', 'banner-tab-04', 'banner_tab', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-tab-04.jpg', '<p>Banner tab 04<br></p>', 'active', '2023-10-19 21:52:08', '2023-10-19 21:52:08'),
(23, 'Banner tab 05', 'banner-tab-05', 'banner_tab', 'http://127.0.0.1:8000/storage/photos/1/banner/tab1.png', '<p>Banner tab 05<br></p>', 'active', '2023-10-19 22:01:07', '2023-10-19 22:01:07'),
(24, 'Banner news 01', 'banner-news-01', 'banner_news', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-news-01.jpg', '<p>Banner news 01<br></p>', 'active', '2023-10-19 23:44:12', '2023-10-19 23:44:12'),
(25, 'Banner news 02', 'banner-news-02', 'banner_news', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-news-02.jpg', '<p>Banner news 02<br></p>', 'active', '2023-10-19 23:44:28', '2023-10-19 23:44:28'),
(26, 'Banner news 03', 'banner-news-03', 'banner_news', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-news-03.jpg', '<p>Banner news 03<br></p>', 'active', '2023-10-19 23:44:41', '2023-10-19 23:44:41'),
(27, 'Banner product 01', 'banner-product-01', 'banner_products', 'http://127.0.0.1:8000/storage/photos/1/banner/dien-may-1479458300011.jpg', '<p>Banner product 01<br></p>', 'active', '2023-10-20 00:39:31', '2023-10-20 00:39:31'),
(28, 'Banner product 02', 'banner-product-02', 'banner_products', 'http://127.0.0.1:8000/storage/photos/1/banner/dien-may-1479458300011.jpg', '<p>Banner product 01<br></p>', 'active', '2023-10-20 00:39:57', '2023-10-20 00:39:57'),
(29, 'Banner product 03', 'banner-product-03', 'banner_products', 'http://127.0.0.1:8000/storage/photos/1/banner/dmx-thanh-phu-km.jpg', '<p>Banner product 03<br></p>', 'active', '2023-10-20 00:40:16', '2023-10-20 00:40:16'),
(30, 'Banner product 04', 'banner-product-04', 'banner_products', 'http://127.0.0.1:8000/storage/photos/1/banner/khai-truong-dmx-nui-sap-1.jpg', '<p>Banner product 04<br></p>', 'active', '2023-10-20 00:40:34', '2023-10-20 00:40:34'),
(31, 'Banner product 05', 'banner-product-05', 'banner_products', 'http://127.0.0.1:8000/storage/photos/1/banner/dien-may-1479458300011.jpg', '<p>Banner product 05<br></p>', 'active', '2023-10-20 00:41:03', '2023-10-20 00:41:03'),
(32, 'Banner product 06', 'banner-product-06', 'banner_products', 'http://127.0.0.1:8000/storage/photos/1/banner/dmx-thanh-phu-km.jpg', '<p>Banner product 06<br></p>', 'active', '2023-10-20 00:41:22', '2023-10-20 00:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brands_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'apple', 'http://127.0.0.1:8000/storage/photos/1/brand/apple-laptop-lineup-20220825-3-medium.jpg', 'active', '2023-10-19 23:27:32', '2023-10-19 23:27:32'),
(2, 'Asus', 'asus', 'http://127.0.0.1:8000/storage/photos/1/brand/2812_top-6-laptop-asus-mong-nhe-dang-mua-nhat-thoi-diem-nay-1.jpg', 'active', '2023-10-19 23:29:07', '2023-10-19 23:29:07'),
(3, 'Acer', 'acer', 'http://127.0.0.1:8000/storage/photos/1/brand/Acer-Nitro-5-2020-i5-10300H-GTX-1650-01.jpg', 'active', '2023-10-19 23:29:56', '2023-10-19 23:29:56'),
(4, 'MSI', 'msi', 'http://127.0.0.1:8000/storage/photos/1/brand/716sWoIVxDS.jpg', 'active', '2023-10-19 23:30:50', '2023-10-19 23:30:50'),
(5, 'Lenovo', 'lenovo', 'http://127.0.0.1:8000/storage/photos/1/brand/8162_2_goi_bao_hanh_lenovo_premier_support_premium_care_h3.jpg', 'active', '2023-10-19 23:31:30', '2023-10-19 23:31:30'),
(6, 'Logitech', 'logitech', 'http://127.0.0.1:8000/storage/photos/1/brand/669622c974f48f48b41e8e76689571e3.jpeg', 'active', '2023-10-19 23:33:10', '2023-10-19 23:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `price` bigint NOT NULL,
  `status` enum('new','progress','delivered','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `quantity` int NOT NULL,
  `amount` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_product_id_foreign` (`product_id`),
  KEY `carts_user_id_foreign` (`user_id`),
  KEY `carts_order_id_foreign` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `order_id`, `user_id`, `price`, `status`, `quantity`, `amount`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, 1, 16170000, 'new', 1, 21000000, '2023-10-22 00:47:48', '2023-10-22 00:47:48'),
(2, 3, NULL, 1, 16000000, 'new', 2, 36000000, '2023-10-22 01:55:41', '2023-10-22 01:56:49'),
(3, 12, NULL, 1, 11000000, 'new', 1, 11000000, '2023-10-22 04:10:01', '2023-10-22 04:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `added_by` bigint UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  KEY `categories_added_by_foreign` (`added_by`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `summary`, `photo`, `parent_id`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(6, 'PC - Máy tính bộ', 'pc-may-tinh-bo', NULL, NULL, 0, NULL, 'active', '2023-10-19 03:28:45', '2023-10-19 03:28:45'),
(7, 'Macbook', 'macbook', NULL, NULL, 5, NULL, 'active', '2023-10-19 03:29:11', '2023-10-19 03:29:11'),
(2, 'Laptop', 'laptop', '<p>Laptop</p>', 'http://127.0.0.1:8000/storage/photos/1/categories/220715122428-macbook-air-m2-review-9.jpg', 0, NULL, 'active', '2023-10-18 03:20:49', '2023-10-18 03:20:49'),
(5, 'Sản phẩm Apple', 'san-pham-apple', NULL, NULL, 0, NULL, 'active', '2023-10-19 03:28:24', '2023-10-19 03:28:24'),
(8, 'iMac', 'imac', NULL, NULL, 5, NULL, 'active', '2023-10-19 03:29:21', '2023-10-19 03:29:21'),
(9, 'Macbook Pro', 'macbook-pro', NULL, NULL, 7, NULL, 'active', '2023-10-19 03:29:39', '2023-10-19 03:29:39'),
(10, 'Macbook Air', 'macbook-air', NULL, NULL, 7, NULL, 'active', '2023-10-19 03:29:53', '2023-10-19 03:29:53'),
(11, 'iMac Mini', 'imac-mini', NULL, NULL, 8, NULL, 'active', '2023-10-19 03:30:08', '2023-10-19 03:30:08'),
(12, 'Điện máy - Điện gia dụng', 'dien-may-dien-gia-dung', NULL, NULL, 0, NULL, 'active', '2023-10-19 23:05:28', '2023-10-19 23:05:28'),
(13, 'PC - Màn hình máy tính', 'pc-man-hinh-may-tinh', NULL, NULL, 0, NULL, 'active', '2023-10-19 23:05:52', '2023-10-19 23:05:52'),
(14, 'PC - Linh kiện máy tính', 'pc-linh-kien-may-tinh', NULL, NULL, 0, NULL, 'active', '2023-10-20 00:30:36', '2023-10-20 00:30:36'),
(15, 'PC - Phụ kiện máy tính', 'pc-phu-kien-may-tinh', NULL, NULL, 0, NULL, 'active', '2023-10-20 00:30:47', '2023-10-20 00:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fixed',
  `value` decimal(20,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `coupons_code_unique` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abhFTyngIKZjnrhbrupdate', 'percent', '20.00', 'active', '2023-10-18 19:38:52', '2023-10-18 20:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `conetnt` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_17_103506_create_categories_table', 1),
(23, '2023_10_17_191454_create_banners_table', 3),
(24, '2023_10_18_065544_create_brands_table', 4),
(28, '2023_10_18_070414_create_carts_table', 6),
(9, '2023_10_18_070631_create_coupons_table', 1),
(29, '2023_10_18_070841_create_orders_table', 7),
(11, '2023_10_18_071006_create_posts_table', 1),
(12, '2023_10_18_071154_create_post_categories_table', 1),
(13, '2023_10_18_071233_create_post_comments_table', 1),
(14, '2023_10_18_071325_create_post_tags_table', 1),
(15, '2023_10_18_071426_create_messages_table', 1),
(16, '2023_10_18_071507_create_notifications_table', 1),
(22, '2023_10_18_071556_create_products_table', 2),
(18, '2023_10_18_071720_create_product_reviews_table', 1),
(19, '2023_10_18_071821_create_settings_table', 1),
(20, '2023_10_18_071902_create_shippings_table', 1),
(21, '2023_10_18_071937_create_wishlists_table', 1),
(26, '2023_10_20_141447_create_product_images_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `sub_total` double(8,2) NOT NULL,
  `shipping_id` bigint UNSIGNED DEFAULT NULL,
  `coupon` double(8,2) DEFAULT NULL,
  `total_amount` double(8,2) NOT NULL,
  `quantity` int NOT NULL,
  `payment_method` enum('cod','paypal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cod',
  `payment_status` enum('paid','unpaid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `status` enum('new','process','delivered','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orders_order_number_unique` (`order_number`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_shipping_id_foreign` (`shipping_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `quote` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_cat_id` bigint UNSIGNED DEFAULT NULL,
  `post_tag_id` bigint UNSIGNED DEFAULT NULL,
  `added_by` bigint UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_post_cat_id_foreign` (`post_cat_id`),
  KEY `posts_post_tag_id_foreign` (`post_tag_id`),
  KEY `posts_added_by_foreign` (`added_by`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `summary`, `description`, `quote`, `photo`, `tags`, `post_cat_id`, `post_tag_id`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bài viết công nghệ', 'bai-viet-cong-nghe', '<p>Bài viết công nghệ<br></p>', '<p>Bài viết công nghệ<br></p>', '<p>Bài viết công nghệ<br></p>', 'http://127.0.0.1:8000/storage/photos/1/post/samsung-galaxy-a24-black-thumb-600x600.jpeg', 'Bài viết công nghệ', 1, NULL, 1, 'active', '2023-10-19 02:07:00', '2023-10-19 02:07:00'),
(2, 'Laptop acer giá rẻ', 'laptop-acer-gia-re', '<p>Laptop acer giá rẻ<br></p>', '<p>Laptop acer giá rẻ<br></p>', '<p>Laptop acer giá rẻ<br></p>', 'http://127.0.0.1:8000/storage/photos/1/post/samsung-galaxy-a24-black-thumb-600x600.jpeg', 'Bài viết công nghệ', 1, NULL, 1, 'active', '2023-10-19 02:10:54', '2023-10-19 02:10:54'),
(4, 'greg', 'greg', '<p>greg<br></p>', '<p>greg<br></p>', '<p>greg<br></p>', 'http://127.0.0.1:8000/storage/photos/1/post/samsung-galaxy-a24-black-thumb-600x600.jpeg', 'Tin tức', 1, NULL, 1, 'active', '2023-10-19 11:03:17', '2023-10-19 11:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
CREATE TABLE IF NOT EXISTS `post_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_categories_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tin công nghệ', 'tin-cong-nghe', 'active', '2023-10-19 01:08:08', '2023-10-19 01:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

DROP TABLE IF EXISTS `post_comments`;
CREATE TABLE IF NOT EXISTS `post_comments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `post_id` bigint UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `replied_comment` text COLLATE utf8mb4_unicode_ci,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_comments_user_id_foreign` (`user_id`),
  KEY `post_comments_post_id_foreign` (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
CREATE TABLE IF NOT EXISTS `post_tags` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_tags_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bài viết công nghệ', 'bai-viet-cong-nghe', 'active', '2023-10-19 01:31:30', '2023-10-19 01:31:30'),
(3, 'Tin tức', 'tin-tuc', 'active', '2023-10-19 02:15:19', '2023-10-19 02:15:19'),
(4, 'Tin hot', 'tin-hot', 'active', '2023-10-19 02:15:27', '2023-10-19 02:15:27'),
(5, 'Laptop giá rẻ', 'laptop-gia-re', 'active', '2023-10-19 02:15:34', '2023-10-19 02:15:34'),
(6, 'Laptop học sinh', 'laptop-hoc-sinh', 'active', '2023-10-19 02:15:40', '2023-10-19 02:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int NOT NULL DEFAULT '1',
  `condition` enum('default','new','hot') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `price` bigint NOT NULL,
  `discount` double(8,2) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `cat_id` bigint UNSIGNED DEFAULT NULL,
  `child_cat_id` bigint UNSIGNED DEFAULT NULL,
  `brand_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_brand_id_foreign` (`brand_id`),
  KEY `products_cat_id_foreign` (`cat_id`),
  KEY `products_child_cat_id_foreign` (`child_cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `summary`, `description`, `photo`, `stock`, `condition`, `status`, `price`, `discount`, `is_featured`, `cat_id`, `child_cat_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 'Bàn phím cơ', 'ban-phim-co', '<p>Bàn phím cơ<br></p>', '<p>Bàn phím cơ<br></p>', 'http://127.0.0.1:8000/storage/photos/1/product/eos_m50_m15-45_b1.png', 50, 'hot', 'active', 19000000, 10.00, 1, 6, NULL, 4, '2023-10-19 03:53:09', '2023-10-19 03:53:09'),
(3, 'Macbook', 'macbook', '<p>Macbook<br></p>', '<p>Macbook<br></p>', 'http://127.0.0.1:8000/storage/photos/1/product/eos_m50_m15-45_b1.png', 23, 'hot', 'active', 20000000, 20.00, 1, 5, NULL, 1, '2023-10-20 00:32:14', '2023-10-20 01:33:52'),
(4, 'Laptop Acer', 'laptop-acer', '<p>Laptop Acer<br></p>', '<p>Laptop Acer<br></p>', 'http://127.0.0.1:8000/storage/photos/1/brand/Acer-Nitro-5-2020-i5-10300H-GTX-1650-01.jpg', 67, 'hot', 'active', 21000000, 23.00, 1, 2, NULL, 3, '2023-10-20 00:56:53', '2023-10-20 00:56:53'),
(5, 'Laptop Asus', 'laptop-asus', '<p>Laptop Asus<br></p>', '<p>Laptop Asus<br></p>', 'http://127.0.0.1:8000/storage/photos/1/brand/2812_top-6-laptop-asus-mong-nhe-dang-mua-nhat-thoi-diem-nay-1.jpg', 34, 'hot', 'active', 22000000, 23.00, 1, 2, NULL, 2, '2023-10-20 01:12:28', '2023-10-20 01:34:05'),
(6, 'Laptop acer nitro 5', 'laptop-acer-nitro-5', '<p>Laptop acer nitro 5<br></p>', '<p>Laptop acer nitro 5<br></p>', 'http://127.0.0.1:8000/storage/photos/1/brand/Acer-Nitro-5-2020-i5-10300H-GTX-1650-01.jpg', 34, 'hot', 'active', 20000000, 23.00, 1, 2, NULL, 3, '2023-10-20 01:13:22', '2023-10-20 01:34:15'),
(7, 'Laptop Lenovo', 'laptop-lenovo', '<p>Laptop Lenovo<br></p>', '<p>Laptop Lenovo<br></p>', 'http://127.0.0.1:8000/storage/photos/1/brand/8162_2_goi_bao_hanh_lenovo_premier_support_premium_care_h3.jpg', 67, 'hot', 'active', 20000000, 34.00, 1, 2, NULL, 5, '2023-10-20 01:14:07', '2023-10-20 01:14:07'),
(8, 'Update mul', 'update-mul', '<p>Update mul<br></p>', '<p>Update mul<br></p>', 'http://127.0.0.1:8000/storage/photos/1/product/eos_m50_m15-45_b1.png', 67, 'new', 'active', 20000000, 45.00, 1, 12, NULL, 1, '2023-10-20 07:35:37', '2023-10-20 07:35:37'),
(9, 'Update mul02', 'update-mul02', '<p>Update mul02<br></p>', '<p>Update mul02<br></p>', 'http://127.0.0.1:8000/storage/photos/1/banner/banner-bottom-01.jpg', 66, 'new', 'active', 20000000, 45.00, 1, 2, NULL, 2, '2023-10-20 07:38:34', '2023-10-20 07:38:34'),
(10, 'Update mul03', 'update-mul03', '<p>Update mul03<br></p>', '<p>Update mul03<br></p>', 'http://127.0.0.1:8000/storage/photos/1/categories/220715122428-macbook-air-m2-review-9.jpg', 67, 'new', 'active', 20000000, 45.00, 1, 2, NULL, 3, '2023-10-20 07:46:34', '2023-10-20 07:46:34'),
(11, 'Update mul03', 'update-mul03-2310205434-416', '<p>Update mul03<br></p>', '<p>Update mul03<br></p>', 'http://127.0.0.1:8000/storage/photos/1/categories/220715122428-macbook-air-m2-review-9.jpg', 67, 'new', 'active', 20000000, 45.00, 1, 2, NULL, 3, '2023-10-20 07:54:34', '2023-10-20 07:54:34'),
(12, 'Tai nghe 01', 'tai-nghe-01', '<p>Tai nghe 01<br></p>', '<p>Tai nghe 01<br></p>', 'http://127.0.0.1:8000/storage/photos/1/product/eos_m50_m15-45_b1.png', 78, 'new', 'active', 20000000, 45.00, 1, 14, NULL, 2, '2023-10-20 07:55:15', '2023-10-20 07:55:15'),
(13, 'Laptop 11', 'laptop-09', '<p>Laptop 11<br></p>', '<p>Laptop 11<br></p>', 'http://127.0.0.1:8000/storage/photos/1/brand/cate_brand1.jpg', 89, 'default', 'active', 20000002, 55.00, 1, 5, NULL, 1, '2023-10-20 07:59:08', '2023-10-20 08:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE IF NOT EXISTS `product_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image_path`, `image_name`, `product_id`, `created_at`, `updated_at`) VALUES
(10, '/storage/photos/1/product/Xo3BQyPKBtfuhG5Ui4vn.jpg', '716sWoIVxDS.jpg', 13, '2023-10-20 08:43:45', '2023-10-20 08:43:45'),
(12, '/storage/photos/1/product/Osug6yaabcL0lJqIlVZl.jpg', '8162_2_goi_bao_hanh_lenovo_premier_support_premium_care_h3.jpg', 13, '2023-10-20 08:43:45', '2023-10-20 08:43:45'),
(11, '/storage/photos/1/product/nt96rKr5NSuSX3eshWAc.jpg', '2812_top-6-laptop-asus-mong-nhe-dang-mua-nhat-thoi-diem-nay-1.jpg', 13, '2023-10-20 08:43:45', '2023-10-20 08:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

DROP TABLE IF EXISTS `product_reviews`;
CREATE TABLE IF NOT EXISTS `product_reviews` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `rate` tinyint NOT NULL DEFAULT '0',
  `review` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_reviews_user_id_foreign` (`user_id`),
  KEY `product_reviews_product_id_foreign` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

DROP TABLE IF EXISTS `shippings`;
CREATE TABLE IF NOT EXISTS `shippings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `role`, `provider`, `provider_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tuấn Lộc', 'tuanloc@gmail.com', NULL, '$2y$10$tgKAIG6/MQChUKEU055eDe9LqyvkO9Mlvonx1OPFAh1ljQ3LeAMvq', 'http://127.0.0.1:8000/storage/photos/1/user/Lionel-Messi-Argentina-2022-FIFA-World-Cup_(cropped).jpg', 'admin', NULL, NULL, 'active', NULL, '2023-10-18 02:51:27', '2023-10-22 09:02:38'),
(2, 'member 01', 'member01@gmail.com', NULL, '$2y$10$KLJc28gF.rfKN379BWizIOgSJFEnmDMpe8Yq5OEZbp6CjP2/9u6mu', 'http://127.0.0.1:8000/storage/photos/1/user/5556468.png', 'user', NULL, NULL, 'active', NULL, '2023-10-22 04:45:30', '2023-10-22 04:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `cart_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wishlists_product_id_foreign` (`product_id`),
  KEY `wishlists_user_id_foreign` (`user_id`),
  KEY `wishlists_cart_id_foreign` (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
