-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 06:27 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opendesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_items`
--

CREATE TABLE `category_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_items`
--

INSERT INTO `category_items` (`id`, `name`, `path`, `description`, `image`, `image_mobile`, `level`, `parent_id`, `type`, `order`, `isActive`, `created_at`, `updated_at`, `seo_id`) VALUES
(6, 'Dự Án', 'du-an', NULL, '0', NULL, 0, NULL, 0, 1, 1, '2018-08-30 02:35:56', '2018-08-30 02:35:56', 9),
(7, 'Coffee Shop', 'coffee-shop', NULL, '0', NULL, 1, 6, 0, 1, 1, '2018-08-30 02:37:12', '2018-08-30 02:37:12', 10),
(8, 'Homestay', 'homestay', NULL, '0', NULL, 1, 6, 0, 1, 1, '2018-08-30 02:37:27', '2018-08-30 02:37:27', 11),
(9, 'Khách Sạn', 'khach-san', NULL, 'http://localhost:8080/opendesign/', NULL, 1, 6, 0, 1, 1, '2018-08-30 02:37:35', '2018-08-30 02:37:49', 12),
(10, 'Nhà Phố', 'nha-pho', NULL, 'http://localhost:8080/opendesign/', NULL, 1, 6, 0, 1, 1, '2018-08-30 02:37:58', '2018-08-30 02:38:04', 13),
(11, 'Nội Thất Nhà Ở', 'noi-that-nha-o', NULL, 'http://localhost:8080/opendesign/', NULL, 1, 6, 0, 1, 1, '2018-08-30 02:38:17', '2018-08-30 02:38:22', 14),
(12, 'Shop', 'shop', NULL, '0', NULL, 1, 6, 0, 1, 1, '2018-08-30 02:38:33', '2018-08-30 02:38:33', 15),
(13, 'Villa', 'villa', NULL, '0', NULL, 1, 6, 0, 1, 1, '2018-08-30 02:38:45', '2018-08-30 02:38:45', 16),
(14, 'Tiệm Nail', 'tiem-nail', NULL, '0', NULL, 1, 6, 0, 1, 1, '2018-08-30 03:46:33', '2018-08-30 03:46:33', 24),
(15, 'Dịch Vụ', 'dich-vu', NULL, '0', NULL, 0, NULL, 0, 1, 1, '2018-08-31 02:08:52', '2018-08-31 02:08:52', 27);

-- --------------------------------------------------------

--
-- Table structure for table `category_many`
--

CREATE TABLE `category_many` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_many`
--

INSERT INTO `category_many` (`category_id`, `item_id`, `created_at`, `updated_at`) VALUES
(6, 3, '2018-08-30 03:53:08', '2018-08-30 03:53:08'),
(6, 4, '2018-08-30 03:52:59', '2018-08-30 03:52:59'),
(6, 5, '2018-08-30 03:52:47', '2018-08-30 03:52:47'),
(6, 6, '2018-08-30 03:52:40', '2018-08-30 03:52:40'),
(6, 7, '2018-08-30 03:52:30', '2018-08-30 03:52:30'),
(6, 8, '2018-08-30 03:52:24', '2018-08-30 03:52:24'),
(6, 9, '2018-08-30 03:52:17', '2018-08-30 03:52:17'),
(6, 10, '2018-08-30 03:52:10', '2018-08-30 03:52:10'),
(6, 11, '2018-08-30 03:52:00', '2018-08-30 03:52:00'),
(8, 4, '2018-08-30 02:55:50', '2018-08-30 02:55:50'),
(9, 3, '2018-08-30 02:40:11', '2018-08-30 02:40:11'),
(9, 5, '2018-08-30 03:17:22', '2018-08-30 03:17:22'),
(10, 6, '2018-08-30 03:20:13', '2018-08-30 03:20:13'),
(10, 7, '2018-08-30 03:25:55', '2018-08-30 03:25:55'),
(11, 8, '2018-08-30 03:29:07', '2018-08-30 03:29:07'),
(11, 9, '2018-08-30 03:40:36', '2018-08-30 03:40:36'),
(13, 11, '2018-08-30 03:52:00', '2018-08-30 03:52:00'),
(14, 10, '2018-08-30 03:49:14', '2018-08-30 03:49:14'),
(15, 12, '2018-08-31 02:14:55', '2018-08-31 02:14:55'),
(15, 13, '2018-08-31 02:15:15', '2018-08-31 02:15:15'),
(15, 14, '2018-08-31 02:15:42', '2018-08-31 02:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `category_permissions`
--

CREATE TABLE `category_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_permissions`
--

INSERT INTO `category_permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Role', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(2, 'User', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(3, 'Menu', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(4, 'Page', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(5, 'Post', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(7, 'Product', '2018-03-27 03:05:29', '2018-03-27 03:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `content`, `description`, `order`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'config-contact', '<p style="text-align: center;">\r\n	<span style="color:#ffffff;"><strong><em>Hotline hỗ trợ tư vấn và phản hồi ý kiến</em></strong><em>:&nbsp;</em></span>\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<span style="color:#ffffff;"><strong><em>Hân hạnh được phục vụ quý khách hàng.!</em></strong></span>\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<span style="color:#ffffff;"><strong><em>157 Nguyễn Thượng Hiền, P.6 Quận Bình Thạnh, TPHCM</em></strong></span>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>', NULL, 3, 1, NULL, '2018-08-08 15:10:24'),
(3, 'email-receive', 'trangnh.sml@gmail.com', 'Cấu Hình Email Nhận Báo Giá', 1, 1, '2017-08-26 06:53:20', '2018-08-08 07:40:29'),
(4, 'email-sender-subject', 'Re: Thông Tin Ứng Tuyển', 'Cấu Hình Subject Gửi Khách Hàng', 2, 1, '2017-08-26 06:53:20', '2018-08-08 07:40:30'),
(5, 'email-sender-from', 'Thông Tin Ứng Tuyển Tuấn 123', 'Cấu Hình From Gửi Khách Hàng', 3, 1, '2017-08-26 06:53:21', '2018-08-08 07:40:30'),
(6, 'email-receive-subject', 'Thông Tin Ứng Tuyển Từ Ứng Viên', 'Cấu Hình Subject Nhận Báo Giá', 4, 1, '2017-08-26 06:53:21', '2018-08-08 07:40:30'),
(7, 'email-receive-from', 'Thông Tin Ứng Tuyển Từ Ứng Viên', 'Cấu Hình From Nhận Báo Giá', 5, 1, '2017-08-26 06:53:21', '2018-08-08 07:40:30'),
(8, 'email-signatures', '', 'Cấu Hình Chữ Ký', 7, 1, '2017-08-26 06:53:21', '2018-05-11 10:13:42'),
(9, 'email-sender-content', '<h1 style="margin-left:0cm; margin-right:0cm">\r\n	<span style="font-size:24pt">Chúng tôi đã nhận được mail, mọi thông tin về ứng tuyển sẽ được phản hồi trong vòng 24h. Xin cảm ơn!</span>\r\n</h1>', 'Cấu Hình Nội Dung Gửi Khách Hàng', 6, 1, '2017-08-26 06:53:21', '2018-08-08 07:40:30'),
(13, 'config-phone', '0984.929.097', NULL, 2, 1, NULL, '2018-08-08 15:10:24'),
(14, 'config-email', 'congtycophantuan123@gmail.com', NULL, 8, 1, NULL, '2018-08-08 15:10:24'),
(15, 'config-address', '202B Hoàng Văn Thụ Phường 9 Quận Phú Nhuận TP.HCM', NULL, 9, 1, NULL, '2018-08-08 15:10:24'),
(16, 'config-name', 'Phạm Anh Tuân', NULL, 4, 1, NULL, '2018-08-08 15:10:24'),
(18, 'config-introduce', '<p>\r\n	Công ty Bất động sản Tuấn 123 tiền thân là Công ty TNHH Tuấn 123 với 5 năm kinh nghiệm trong lĩnh vực Bất động sản Thổ cư tại Việt Nam. Khởi đầu từ một Công ty Môi giới Nhà đất, Tuấn 123 lần lượt phát triển về quy mô nhân sự cũng như các lĩnh vực hoạt động. Ở tất cả các lĩnh vực: Môi giới Bất động sản, Định giá Bất động sản, Đào tạo Môi giới &hellip; công ty đều chứng tỏ sự chuyên nghiệp và chất lượng dịch vụ của mình.\r\n</p>\r\n\r\n<p>\r\n	<em><strong>Công ty Bất động sản Tuấn 123</strong>&nbsp;</em>đã được biết đến là đơn vị Môi giới Bất động sản Thổ cư lớn nhất Hà Nội và từng bước tiến đến lớn nhất Việt Nam với dấu mốc thành lập Trụ sở Miền Nam từ đầu năm 2017.\r\n</p>\r\n\r\n<p>\r\n	Bất động sản Tuấn 123&nbsp;mong muốn cung cấp những sản phẩm và dịch vụ gắn liền với thương hiệu Tuấn 123, đảm bảo quy trình chuyên nghiệp, tư vấn nhiệt thành đáp ứng nhu cầu rất lớn của thị trường Bất động sản. Không ngừng đổi mới và phát triển để khẳng định tầm vóc của một doanh nghiệp Việt Nam năng động, sáng tạo, tiên phong trong cả lĩnh vực kinh doanh và các hoạt động cộng đồng.\r\n</p>', NULL, 5, 1, NULL, '2018-08-08 02:57:48'),
(20, 'config-company-name', 'Công Ty BĐS Tuấn 123', NULL, 1, 1, NULL, '2018-08-08 09:28:25'),
(21, 'config-seo-title', 'qwe', NULL, 10, 1, NULL, '2018-08-13 07:52:08'),
(22, 'config-seo-description', 'asdas', NULL, 11, 1, NULL, '2018-08-13 07:52:08'),
(23, 'config-seo-keywords', 'qwe,sadasd', NULL, 12, 1, NULL, '2018-08-13 07:52:08'),
(24, 'config-seo-image', 'images/uploads/images/gt_1.jpg', NULL, 13, 1, NULL, '2018-08-13 07:52:08'),
(25, 'config-favicon', NULL, NULL, 14, 1, NULL, NULL),
(26, 'config-slider', '', NULL, 2, 1, NULL, '2018-08-30 14:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(3) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `parent_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_14_140923_create_entrust_setup_tables', 1),
(4, '2018_07_12_085612_create_seos_table', 2),
(5, '2018_07_12_090313_add_seo_id_to_posts_table', 3),
(6, '2018_07_12_091007_add_seo_id_to_products_table', 4),
(7, '2018_07_12_091116_add_seo_id_to_category_items_table', 5),
(8, '2018_07_17_084914_create_category_many_table', 6),
(9, '2018_08_31_100756_create_post_project_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `category_permission_id`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Xem Danh Sách Quyền', 'Được Xem Danh Sách Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(2, 'role-create', 'Tạo Quyền Mới', 'Được Tạo Quyền Mới', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(3, 'role-edit', 'Cập Nhật Quyền', 'Được Cập Nhật Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(4, 'role-delete', 'Xóa Quyền', 'Được Xóa Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(5, 'user-list', 'Xem Danh Sách Users', 'Được Xem Danh Sách Users', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(6, 'user-create', 'Tạo User', 'Được Tạo User Mới', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(7, 'user-edit', 'Cập Nhật User', 'Được Cập Nhật User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(8, 'user-delete', 'Xóa user', 'Được Xóa User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(9, 'menu-list', 'Toàn Quyền Menu', 'Được Toàn Quyền Menu', 3, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(10, 'menu-create', 'Thêm Mới Menu', 'Được Thêm Mới Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(11, 'menu-edit', 'Cập Nhật Menu', 'Được Cập Nhật Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(12, 'menu-delete', 'Xóa Menu', 'Được Xóa Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(13, 'page-list', 'Toàn Quyền Trang', 'Được Toàn Quyền Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(14, 'page-create', 'Thêm Mới Trang', 'Được Thêm Mới Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(15, 'page-edit', 'Cập Nhật Trang', 'Được Cập Nhật Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(16, 'page-delete', 'Xóa Trang', 'Được Xóa Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(17, 'post-list', 'Toàn Quyền Bài Viết', 'Được Toàn Quyền Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(18, 'post-create', 'Thêm Mới Bài Viết', 'Được Thêm Mới Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(19, 'post-edit', 'Cập Nhật Bài Viết', 'Được Cập Nhật Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(20, 'post-delete', 'Xóa Bài Viết', 'Được Xóa Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(21, 'product-list', 'Toàn Quyền Sản Phẩm', 'Được Toàn Quyền Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(22, 'product-create', 'Thêm Mới Sản Phẩm', 'Được Thêm Mới Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(23, 'product-edit', 'Cập Nhật Sản Phẩm', 'Được Cập Nhật Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(24, 'product-delete', 'Xóa Sản Phẩm', 'Được Xóa Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `category_item_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `path`, `description`, `content`, `image`, `post_type`, `isActive`, `category_item_id`, `user_id`, `created_at`, `updated_at`, `seo_id`) VALUES
(3, 'Khách Sạn Mini Đà Nẵng', 'khach-san-mini-da-nang', '<p>\r\n	Khách Sạn Mini Đà Nẵng\r\n</p>', '<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/khachsan/khachsan_mini_danang.jpg" style="width: 80%; height: 80%;">\r\n</p>', 'images/uploads/images/khachsan/khachsan_mini_danang.jpg', 1, 1, NULL, 1, '2018-08-30 02:40:11', '2018-08-30 03:02:03', 17),
(4, 'Homestay Hội An', 'homestay-hoi-an', '<p>\r\n	Homestay Hội An\r\n</p>', '<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/homestay/homestay_hoian.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/homestay/homestay_hoian_2.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/homestay/homestay_hoian_3.jpg" style="width: 80%; height: 80%;">\r\n</p>', 'images/uploads/images/homestay/homestay_hoian.jpg', 1, 1, NULL, 1, '2018-08-30 02:55:49', '2018-08-30 02:55:49', 18),
(5, 'Khách Sạn Mini', 'khach-san-mini', '<p>\r\n	Khách Sạn Mini\r\n</p>', '<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/khachsan/khachsan_mini.jpg" style="width: 80%; height: 80%;">\r\n</p>', 'images/uploads/images/khachsan/khachsan_mini.jpg', 1, 1, NULL, 1, '2018-08-30 03:17:22', '2018-08-30 03:17:22', 19),
(6, 'Nhà Phố 3 Tầng 5x20m', 'nha-pho-3-tang-5x20m', '<p>\r\n	Nhà Phố 3 Tầng 5x20m\r\n</p>', '<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/nhapho/nhapho_3_tang_5x20_1.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/nhapho/nhapho_3_tang_5x20_2.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/nhapho/nhapho_3_tang_5x20_3.jpg" style="width: 80%; height: 80%;">\r\n</p>', 'images/uploads/images/nhapho/nhapho_3_tang_5x20_1.jpg', 1, 1, NULL, 1, '2018-08-30 03:20:13', '2018-08-30 03:20:13', 20),
(7, 'Nhà Phố 3.7m x 15m', 'nha-pho-37m-x-15m', '<p>\r\n	Nhà Phố 3.7m x 15m\r\n</p>', '<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/nhapho/nhapho_3m7x15m_2.jpg" style="width: 80%; height: 80%;"><img alt="" src="http://localhost:8080/opendesign/images/uploads/images/nhapho/nhapho_3m7x15m_1.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/nhapho/nhapho_3m7x15m_3.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>', 'images/uploads/images/nhapho/nhapho_3m7x15m_1.jpg', 1, 1, NULL, 1, '2018-08-30 03:25:55', '2018-08-30 03:25:55', 21),
(8, 'Phòng Ngủ Mộc', 'phong-ngu-moc', '<p>\r\n	Phòng Ngủ Mộc\r\n</p>', '<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/phongngu_moc_1.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/phongngu_moc_2.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/phongngu_moc_3.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/phongngu_moc_4.jpg" style="width: 80%; height: 80%;">\r\n</p>', 'images/uploads/images/noithatnhao/phongngu_moc_1.jpg', 1, 1, NULL, 1, '2018-08-30 03:29:07', '2018-08-30 03:29:07', 22),
(9, 'Nội Thất Nhà Phố 3.7m x 14m', 'noi-that-nha-pho-37m-x-14m', '<p>\r\n	Nội Thất Nhà Phố 3.7m x 14m\r\n</p>', '<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/noithatnhapho_3m7x14m_1.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/noithatnhapho_3m7x14m_2.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/noithatnhapho_3m7x14m_3.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/noithatnhapho_3m7x14m_4.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/noithatnhapho_3m7x14m_5.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/noithatnhapho_3m7x14m_6.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/noithatnhapho_3m7x14m_7.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/noithatnhao/noithatnhapho_3m7x14m_8.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>', 'images/uploads/images/noithatnhao/noithatnhapho_3m7x14m_1.jpg', 1, 1, NULL, 1, '2018-08-30 03:40:36', '2018-08-30 03:40:36', 23),
(10, 'Nail Minh Thiên Đà Nẵng', 'nail-minh-thien-da-nang', '<p>\r\n	Nail Minh Thiên Đà Nẵng\r\n</p>', '<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/nail/nail_minh_thien_1.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/nail/nail_minh_thien_2.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/nail/nail_minh_thien_3.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/nail/nail_minh_thien_4.jpg" style="width: 80%; height: 80%;">\r\n</p>', 'images/uploads/images/nail/nail_minh_thien_1.jpg', 1, 1, NULL, 1, '2018-08-30 03:49:14', '2018-08-30 03:49:14', 25),
(11, 'Villa Hội An', 'villa-hoi-an', '<p>\r\n	Villa Hội An\r\n</p>', '<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/villa/villa_hoian_1.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/villa/villa_hoian_2.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/villa/villa_hoian_3.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/villa/villa_hoian_4.jpg" style="width: 80%; height: 80%;">\r\n</p>', 'images/uploads/images/villa/villa_hoian_1.jpg', 1, 1, NULL, 1, '2018-08-30 03:52:00', '2018-08-30 03:52:00', 26),
(12, 'Thiết Kế Nhà Ở', 'thiet-ke-nha-o', '<p>\r\n	Với nhân sự gồm 10 Kiến Trúc Sư Dự Án trẻ, nhiệt huyết, sáng tạo cùng với môi trường làm việc khoa học, chuyên nghiệp. Open Design cam kết với khách hàng tạo ra những sản phẩm đảm bảo các nhu cầu ở hoàn hảo nhất !\r\n</p>', '<p>\r\n	Chủ nhà luôn mong muốn căn nhà mình: Biệt thự hay nhà phố khi xây dựng lên phải có tính thẩm mỹ và sự riêng biệt cao đồng thời phải toát lên sự sang trọng, lịch sự.&nbsp; Vì vậy bạn nên lựa chọn một đơn vị tư vấn thiết kế xây dựng một cách hợp lý\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/nhapho/nhapho_3_tang_5x20_2.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p>\r\n	Với nhiều năm kinh nghiệm trong lĩnh vực xây dựng: Tòa nhà, trung tâm thương mại, nhà công nghiệp, nhà phố, biệt thự. Công Ty TNHH Tư Vấn Và Xây DỰng Open Design&nbsp;đã mang lại sự hài lòng cho rất nhiều khách hàng với các công trình có tính thẩm mỹ và công năng cao\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	&nbsp;<strong>Quy trình tư vấn, thiết kế, thi công xây dựng nhà&nbsp; biệt thự, nhà phố:</strong>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<strong>&nbsp; -&nbsp;</strong>Tư vấn thiết kế nhà biệt thự, nhà phố\r\n</p>\r\n\r\n<p>\r\n	&nbsp; - Thiết kế nhà biệt thự, nhà phố\r\n</p>\r\n\r\n<p>\r\n	&nbsp; - Xây dựng nhà biệt thự, nhà phố\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<strong>&nbsp;Quy trình thiết kế dự án cụ thể khách hàng có thể tham khảo dưới đây:</strong>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	&nbsp;<span style="color:#edb50c;"><strong>Bước 1:Tiếp nhận thông tin từ khách hàng</strong></span>\r\n</p>\r\n\r\n<p>\r\n	<strong>&nbsp;</strong>Quý khách hàng có thể liên hệ trực tiếp với chúng tôi qua điện thoại, Chúng tôi sẽ tư vấn, tiếp nhận yêu cầu và hẹn lịch làm việc cụ thể với quý khách hàng.\r\n</p>\r\n\r\n<p>\r\n	<span style="color:#edb50c;">&nbsp;<strong>Bước 2: Khảo sát công trình, tiếp nhận yêu cầu cụ thể.</strong></span>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Bộ phận kinh doanh kết hợp với phòng Kỹ thuật gặp gỡ và tiếp nhận yêu cầu từ khách hàng, thu thập các tài liệu liên quan tới công trình, khảo sát công trình\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Trao đổi sơ bộ và tư vấn cho khách hàng về dịch vụ thi công xây dựng.\r\n</p>\r\n\r\n<p>\r\n	&nbsp;<span style="color:#edb50c;"><strong>Bước 3: Bóc tách khối lượng, lập dự toán báo giá với khách hàng.</strong></span>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Phòng kỹ thuật bóc tách khối lượng công trình, lập dự toán thi công xây dựng công trình.\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Gửi báo giá đến khách hàng.\r\n</p>\r\n\r\n<p>\r\n	&nbsp;<span style="color:#edb50c;"><strong>Bước 4: Ký kết hợp đồng xây dựng.</strong></span>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Nếu khách hàng duyệt báo giá thì phòng Kinh doanh soạn thảo hợp đồng, thương lượng các điều kiện cụ thể với khách hàng trong hợp đồng.\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Giám đốc công ty ký kết hợp đồng với khách hàng.\r\n</p>\r\n\r\n<p>\r\n	<span style="color:#edb50c;">&nbsp;<strong>Bước 5: Thực hiện hợp đồng.</strong></span>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Chuẩn bị nhân lực, vật tư, máy thi công phục vụ cho công trình.\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Thực hiện thi công công trình theo các nội dung đã ký trong hợp đồng.\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Bố trí kỹ sư giám sát thi công xây dựng công trình, nghiệm thu các hạng mục bị che khuất theo quy định.\r\n</p>\r\n\r\n<p>\r\n	<span style="color:#edb50c;">&nbsp;<strong>Bước 6: Nghiệm thu công trình, Thanh lý hợp đồng, Bảo hành công trình</strong></span>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Làm hồ sơ hoàn công công trình. Biên bản nghiệm thu bàn giao công trình.\r\n</p>\r\n\r\n<p>\r\n	<span style="color:#edb50c;">&nbsp;<strong>Bước 7: Thanh lý hợp đồng và bảo hành công trình</strong></span>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Thanh lý hợp đồng theo các nội dung đã ký kết\r\n</p>\r\n\r\n<p>\r\n	&nbsp;- Thực hiện bảo hành công trình theo quy định\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	Với đội ngũ kỹ sư, kiến trúc sư giàu kinh nghiệm, các tổ công nhân kỹ thuật chuyên nghiệp chúng tôi cam kết mang chất lượng công trình cho quý khách tốt nhất, giá ưu đãi nhất.\r\n</p>\r\n\r\n<p>\r\n	<strong>Để được hỗ trợ tư vấn xin vui lòng liên hệ:</strong>\r\n</p>\r\n\r\n<p>\r\n	<strong>Hotline: <span style="color:#edb50c;">0905.725.255 - 0905.888.435</span></strong>\r\n</p>\r\n\r\n<p>\r\n	<strong>Email: <span style="color:#edb50c;">congtykientrucopendesign@gmail.com</span></strong>\r\n</p>', 'images/uploads/images/noithatnhao/noithatnhapho_3m7x14m_2.jpg', 1, 1, NULL, 1, '2018-08-31 02:14:54', '2018-09-04 13:15:46', 31),
(13, 'Thiết Kế Văn Phòng', 'thiet-ke-van-phong', '<p>\r\n	Open Design&nbsp;luôn tự tin mang đến dịch vụ thiết kế thi công nội thất văn phòng cho quý khách hàng một cách chuyên nghiệp. Đội ngũ tư vấn có kiến thức sâu rộng trong lĩnh vực văn phòng, song song đó là đội ngũ thi công kinh nghiệm thi công thực tế hoàn thành xuất sắc hàng trăm dự án.&nbsp;\r\n</p>', '<p>\r\n	Văn phòng là nơi tập trung cho việc phát triển ý tưởng của công ty, tập đoàn. Chính vì vậy việc&nbsp;<span style="color:#edb50c;"><strong>thiết kế nội thất&nbsp;văn phòng</strong></span>&nbsp;đẹp về không gian, màu sắc và cách sắp xếp đồ đạc gọn gàng phù hợp với từng công ty là luôn điều cần thiết. Nói một cách khác, văn phòng làm việc phải thể hiện được phong cách và cá tính của doanh nghiệp, góp phần quan trọng giúp khách hàng và đối tác ghi nhớ sâu sắc thương hiệu của công ty.\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/vanphong/mau-thiet-ke-van-phong-10.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/vanphong/4.png" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<em>Phương án thiết kế nội thất văn phòng công ty Open Design với không gian mở gồm quầy lễ tân phòng làm việc nhân viên, phòng họp, phòng giám đốc...</em>\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<span style="color:#edb50c;"><strong>Hãy để Open Design&nbsp;mang đến thiết kế và thi công nội thất tuyệt vời nhất cho văn phòng của bạn</strong></span>\r\n</p>\r\n\r\n<p>\r\n	Thiết kế nội thất&nbsp;văn phòng&nbsp;đẹp là một trong những khiến nhiều doanh nghiệp quan tâm ngay từ đầu bởi đây cũng là cốt lõi mang tới sự thành công của mỗi doanh nghiệp. Việc thiết kế bài trí&nbsp;nội thất văn phòng&nbsp;sao cho văn phòng làm việc hiệu quả nhất chuyên nghiệp nhất giúp công ty gặt hái được những thành công, hơn nữa đây cũng là bộ mặt đại diện cho công ty.\r\n</p>\r\n\r\n<p>\r\n	Bày trí không gian văn phòng không đơn giản chỉ là sắp xếp nội thất đẹp mắt, thuận tiện mà còn bao gồm rất nhiều kiến thức về phong thủy, tận dụng không gian vừa hài hòa thoáng đãng, vừa tận dụng tối đa diện tích văn phòng. Rất nhiều chủ doanh nghiệp tin rằng một văn phòng với phong cách thiết kế hợp mệnh sẽ giúp cho công việc làm ăn thuận lợi và suôn sẻ hơn.\r\n</p>\r\n\r\n<p>\r\n	Với hơn 10 năm kinh nghiệm&nbsp;thiết kế nội thất&nbsp;cho nhiều văn phòng lớn nhỏ như văn phòng tập đoàn quốc tế ABC, văn phòng IVY, văn phòng VIT TOWER, văn phòng Nippon Paint, thiết kế&nbsp;sàn giao dich bất động sản Capitaland, nội thất văn phòng Queen Land,&hellip;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/vanphong/21844067_1246031232167448_1589292327_o.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/vanphong/tkcn-7.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<em>Cách sắp xếp thiết kế văn phòng đẹp<strong> </strong>Open Design hướng tới là phong cách hiện đại, trẻ trung nhằm kích thích sự sáng tạo và khả năng làm việc của nhân viên.</em>\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	Open Design tự hào là đơn vị dẫn đầu trong lĩnh vực thiết kế nội thất văn phòng, giúp các đơn vị có một không gian độc đáo,&nbsp;hiện đại,&nbsp;sang trọng và đảm bảo phong cách riêng của mỗi văn phòng.\r\n</p>\r\n\r\n<h3>\r\n	<span style="color:#edb50c;"><strong>Các bước lưu ý khi&nbsp;thiết kế nội thất văn phòng tại Open Design</strong></span>\r\n</h3>\r\n\r\n<h3>\r\n	- Khảo sát mặt bằng, lên ý tưởng, tư vấn ban đầu cho khách hàng\r\n</h3>\r\n\r\n<p>\r\n	- Phác thảo mặt bằng và ý tưởng: bước này là quan trọng nhất đối với kiến trúc sư họa sỹ của&nbsp;Solution và với khách hàng\r\n</p>\r\n\r\n<p>\r\n	- Xây dựng ý tưởng trên số liệu thực tế:&nbsp;Solution cung cấp bản vẽ tính toán sơ bộ của công trình&nbsp;<span style="color:#edb50c;"><strong>thiết kế nội thất&nbsp;văn phòng</strong></span>&nbsp;trên mặt bằng 2D&nbsp;\r\n</p>\r\n\r\n<p>\r\n	- Duyệt thiết kế 3D: kiến trúc, họa sỹ thiết kế sẽ mô phỏng&nbsp;văn phòng&nbsp;thật của bạn trên bản vẽ 3D.&nbsp;\r\n</p>\r\n\r\n<p>\r\n	- Duyệt hồ sơ thiết kế: Sau khi kết thúc quá trình&nbsp;thiết kế &amp; trang trí nội thất, phác thảo và chi tiết,&nbsp;Solution sẽ cung cấp cho bạn bộ hồ sơ đầy đủ chi tiết về nội ngoại thất, Khách hàng có thể chủ động thi công hoặc tìm đối tác thi công\r\n</p>\r\n\r\n<p>\r\n	- Thi công, sản xuất: bước cuối cùng để có 1 văn phòng như ý muốn. Khi có bộ hồ sơ chi tiết quý khách có thể nhờ&nbsp;Solution&nbsp;tư vấn nhà thầu hoặc trực tiếp thi công cho quý khách.\r\n</p>\r\n\r\n<p>\r\n	Nếu doanh nghiệp đang có nhu cầu tìm kiếm&nbsp;<span style="color:#edb50c;"><strong>đơn vị thiết kế nội thất văn phòng chuyên nghiệp</strong></span>&nbsp;xin vui lòng liên hệ với chúng tôi để nhận được tư vấn tốt nhất.\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<span style="color:#edb50c;"><strong>CÔNG TY TNHH TƯ VẤN VÀ THIẾT KẾ OPEN DESIGN</strong></span>\r\n</p>\r\n\r\n<p>\r\n	<strong>Hotline:&nbsp;<span style="color:#edb50c;">0905.725.255 - 0905.888.435</span></strong>\r\n</p>\r\n\r\n<p>\r\n	<strong>Email:&nbsp;<span style="color:#edb50c;">congtykientrucopendesign@gmail.com</span></strong>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>', 'images/uploads/images/vanphong/mau-thiet-ke-van-phong-10.jpg', 1, 1, NULL, 1, '2018-08-31 02:15:15', '2018-09-04 13:30:53', 32),
(14, 'Thiết Kế Quán Cà Phê', 'thiet-ke-quan-ca-phe', '<p>\r\n	Open Design chuyên thiết kế quán cafe trọn gói mang nhiều phong cách hiện đại trẻ trung. Với nhiều kinh nghiệm trong nghề thiết kế và thi công, chúng tôi hoàn toàn tự tin mang lại cho khách hàng những sản phẩm tốt nhất với giá thành phải chăng nhất.&nbsp;\r\n</p>', '<p>\r\n	Ngày nay việc thưởng thức, nhâm nhi một ly café thơm ngon trong không gian ấn tượng, ấm cúng đã trở thành một sở thích quen thuộc của rất nhiều người dân xứ Việt. Những người chủ quán Cafe, quán Bar&nbsp;luôn mong muốn thiết kế nội thất quán mang đậm cá tính và phong cách riêng độc đáo, đồng thời thể hiện phương châm kinh doanh, cách thức thu hút khách của họ.\r\n</p>\r\n\r\n<p>\r\n	Còn đối với khách hàng, không gian&nbsp;<strong><span style="color:#edb50c;">thiết kế nội thất quán Cafe, Bar</span>&nbsp;</strong>đẹp tựa như một sức hút để họ đế tận hưởng không gian lý tưởng trong thời đại mới, vừa sang trọng, quý phái những cũng không kém phần tĩnh lặng trên nền những bản nhạc du dương. Có thể nói, để làm nên sự cuốn hút, các quán cafe&nbsp;luôn quan tâm đến hai yếu tố quan trọng là thức uống độc đáo và nội thất không gian mới lạ.\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/coffeeshop/Lake-Coffee.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/coffeeshop/thiet-ke-quan-cafe-san-vuon-urban-garden-01.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p>\r\n	<span style="color:#edb50c;"><strong>Open Design&ndash; Đơn vị thiết kế và thi công nội thất quán Café, quán Bar hàng đầu Việt Nam</strong></span>\r\n</p>\r\n\r\n<p>\r\n	Tại Open Design, chúng thôi luôn thấu hiểu những mong muốn từ phía khách hàng để hỗ trợ và đưa ra những ý tưởng thiết kế và thi công quán Cafe, quán Bar sáng tạo nhất. Với kinh nghiệm hơn 10&nbsp;năm trong lĩnh vực&nbsp;<span style="color:#edb50c;"><strong>thiết kế và thi công nội thất</strong></span>&nbsp;cũng những dự án tiếng tăm mà Open Design đã thực hiện thành công, chúng tôi cam kết mỗi mẫu thiết kế nổi bật mà Open Design&nbsp;đã trải qua luôn là những tác phẩm nghệ thuật riêng biệt, truyền tải đầy đủ nét văn hóa sống động và thông điệp của chủ quán đến khách hàng.\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/opendesign/images/uploads/images/coffeeshop/Vintage-1976-Cafe-Deli.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<h2>\r\n	<span style="color:#edb50c;"><strong>Quy trình thiết kế và thi công nội thất quán cà phê&nbsp;tại Open Design</strong></span>\r\n</h2>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	- Khảo sát mặt bằng, lên ý tưởng, tư vấn ban đầu cho khách hàng.\r\n</p>\r\n\r\n<p>\r\n	- Phác thảo mặt bằng và ý tưởng: Bước này là quan trọng nhất đối với kiến trúc sư họa sỹ của&nbsp;Open Design và với khách hàng.\r\n</p>\r\n\r\n<p>\r\n	- Xây dựng ý tưởng trên số liệu thực tế:&nbsp;Open Design cung cấp bản vẽ tính toán sơ bộ của công trình&nbsp;thiết kế nội thất&nbsp;quán Cafe, Bar&nbsp;trên mặt bằng 2D.\r\n</p>\r\n\r\n<p>\r\n	- Duyệt thiết kế 3D: Kiến trúc, họa sỹ thiết kế sẽ mô phỏng không gian quán&nbsp;thật của bạn trên bản vẽ 3D.&nbsp;\r\n</p>\r\n\r\n<p>\r\n	- Duyệt hồ sơ thiết kế: Sau khi kết thúc quá trình&nbsp;thiết kế &amp; trang trí nội thất, phác thảo và chi tiết,&nbsp;Open Design sẽ cung cấp cho bạn bộ hồ sơ đầy đủ chi tiết về nội ngoại thất, Khách hàng có thể chủ động thi công hoặc tìm đối tác thi công.\r\n</p>\r\n\r\n<p>\r\n	- Thi công, sản xuất: bước cuối cùng để có 1 không gian nội thất như ý muốn. Khi có bộ hồ sơ chi tiết quý khách có thể nhờ&nbsp;Open Design&nbsp;tư vấn nhà thầu hoặc trực tiếp thi công cho quý khách.\r\n</p>\r\n\r\n<p>\r\n	<span style="color:#edb50c;"><strong>Hãy để thiết kế nội thất uy tín - Open Design truyền tải thông điệp ý nghĩa tới thực khách của bạn</strong></span>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	Không gian nội thất quán Cafe, Bar thực sự là một ngôn ngữ diệu kỳ để khách hàng ấn tượng và tìm lại thêm nhiều lần nữa. Để làm được điều đó, đội ngũ tư vấn hỗ trợ và những chuyên gia thiết kế hàng đầu tại Open Design sẽ đem tới khách hàng những giải pháp tối ưu, ngay cả với những quán Café diện tích nhỏ hẹp. Phong cách quán hiện đại, trẻ trung, hay cổ điển sẽ được phân tích đa chiều theo diện tích mặt bằng sẵn có và theo đối tượng khách hàng mục tiêu mà chủ quán hướng đến để tạo nên những bản thiết kế bắt mắt, thu hút khách hàng trong mọi góc độ không gian<strong>.</strong>\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<strong><img alt="" src="http://localhost:8080/opendesign/images/uploads/images/coffeeshop/tu-van-thiet-ke-noi-quan-cafe.jpg" style="width: 80%; height: 80%;"></strong>\r\n</p>\r\n\r\n<p>\r\n	Nếu bạn còn những băn khoăn cách tận dụng diện tích không gian quán Cafe&nbsp;hợp lý nhất, sử dụng bàn tròn hay bàn vuông để tiết kiệm không gian, làm thế nào để có không gian nội thất quán café,&nbsp;quán Bar đẹpnhất, hãy liên hệ với chúng tôi để được hỗ trợ nhanh chóng và tốt nhất.&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<span style="color:#edb50c;"><strong>CÔNG TY TNHH TƯ VẤN VÀ THIẾT KẾ OPEN DESIGN</strong></span>\r\n</p>\r\n\r\n<p>\r\n	<strong>Hotline:&nbsp;<span style="color:#edb50c;">0905.725.255 - 0905.888.435</span></strong>\r\n</p>\r\n\r\n<p>\r\n	<strong>Email:&nbsp;<span style="color:#edb50c;">congtykientrucopendesign@gmail.com</span></strong>\r\n</p>', 'images/uploads/images/nail/nail_minh_thien_3.jpg', 1, 1, NULL, 1, '2018-08-31 02:15:42', '2018-09-04 13:46:35', 33);

-- --------------------------------------------------------

--
-- Table structure for table `post_project`
--

CREATE TABLE `post_project` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_project`
--

INSERT INTO `post_project` (`post_id`, `project_id`, `created_at`, `updated_at`) VALUES
(12, 8, '2018-08-31 16:30:37', '2018-08-31 16:30:37'),
(12, 9, '2018-08-31 15:49:51', '2018-08-31 15:49:51'),
(12, 10, '2018-08-31 16:30:37', '2018-08-31 16:30:37'),
(13, 8, '2018-09-04 13:28:32', '2018-09-04 13:28:32'),
(13, 10, '2018-09-04 13:28:32', '2018-09-04 13:28:32'),
(13, 11, '2018-09-04 13:28:32', '2018-09-04 13:28:32'),
(14, 7, '2018-09-04 13:44:46', '2018-09-04 13:44:46'),
(14, 9, '2018-09-04 13:44:46', '2018-09-04 13:44:46'),
(14, 10, '2018-09-04 13:44:46', '2018-09-04 13:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `sale` int(11) NOT NULL DEFAULT '0',
  `final_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'administer the website and manage users', '2018-03-14 07:23:50', '2018-03-14 07:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `seo_title`, `seo_description`, `seo_keywords`, `seo_image`, `created_at`, `updated_at`) VALUES
(4, 'test1-1', 'test1-1', 'test1,1', '', '2018-07-17 02:24:13', '2018-07-17 02:24:13'),
(6, 'test bài viết', 'test bài viết', 'test bài viết', '', '2018-07-17 03:13:47', '2018-07-17 03:13:47'),
(9, NULL, NULL, NULL, NULL, '2018-08-30 02:35:56', '2018-08-30 02:35:56'),
(10, NULL, NULL, NULL, NULL, '2018-08-30 02:37:12', '2018-08-30 02:37:12'),
(11, NULL, NULL, NULL, NULL, '2018-08-30 02:37:27', '2018-08-30 02:37:27'),
(12, NULL, NULL, NULL, NULL, '2018-08-30 02:37:35', '2018-08-30 02:37:35'),
(13, NULL, NULL, NULL, NULL, '2018-08-30 02:37:58', '2018-08-30 02:37:58'),
(14, NULL, NULL, NULL, NULL, '2018-08-30 02:38:17', '2018-08-30 02:38:17'),
(15, NULL, NULL, NULL, NULL, '2018-08-30 02:38:33', '2018-08-30 02:38:33'),
(16, NULL, NULL, NULL, NULL, '2018-08-30 02:38:45', '2018-08-30 02:38:45'),
(17, NULL, NULL, NULL, 'images/uploads/images/khachsan/khachsan_mini_danang.jpg', '2018-08-30 02:40:11', '2018-08-30 03:02:03'),
(18, NULL, NULL, NULL, 'images/uploads/images/homestay/homestay_hoian.jpg', '2018-08-30 02:55:49', '2018-08-30 02:55:49'),
(19, NULL, NULL, NULL, 'images/uploads/images/khachsan/khachsan_mini.jpg', '2018-08-30 03:17:22', '2018-08-30 03:17:22'),
(20, NULL, NULL, NULL, 'images/uploads/images/nhapho/nhapho_3_tang_5x20_1.jpg', '2018-08-30 03:20:13', '2018-08-30 03:20:13'),
(21, NULL, NULL, NULL, 'images/uploads/images/nhapho/nhapho_3m7x15m_1.jpg', '2018-08-30 03:25:55', '2018-08-30 03:25:55'),
(22, NULL, NULL, NULL, 'images/uploads/images/noithatnhao/phongngu_moc_1.jpg', '2018-08-30 03:29:07', '2018-08-30 03:29:07'),
(23, NULL, NULL, NULL, 'images/uploads/images/noithatnhao/noithatnhapho_3m7x14m_1.jpg', '2018-08-30 03:40:36', '2018-08-30 03:40:36'),
(24, NULL, NULL, NULL, NULL, '2018-08-30 03:46:33', '2018-08-30 03:46:33'),
(25, NULL, NULL, NULL, 'images/uploads/images/nail/nail_minh_thien_1.jpg', '2018-08-30 03:49:14', '2018-08-30 03:49:14'),
(26, NULL, NULL, NULL, 'images/uploads/images/villa/villa_hoian_1.jpg', '2018-08-30 03:52:00', '2018-08-30 03:52:00'),
(27, NULL, NULL, NULL, NULL, '2018-08-31 02:08:52', '2018-08-31 02:08:52'),
(31, NULL, NULL, NULL, NULL, '2018-08-31 02:14:54', '2018-08-31 02:14:54'),
(32, NULL, NULL, NULL, NULL, '2018-08-31 02:15:15', '2018-08-31 02:15:15'),
(33, NULL, NULL, NULL, NULL, '2018-08-31 02:15:42', '2018-08-31 02:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$mStg572JFNI89/0Cg7TOGOUkACFaBl/nsNeOvx8zglr1qyJPA0tj6', 'RQlsgmk0UzRUeXVHhJrU4TGWGTy5iR8VKE0aFheEnZWSHkCH4moWEjB6Ut2E', '2018-03-14 07:24:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_items`
--
ALTER TABLE `category_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_items_seo_id_foreign` (`seo_id`);

--
-- Indexes for table `category_many`
--
ALTER TABLE `category_many`
  ADD PRIMARY KEY (`category_id`,`item_id`);

--
-- Indexes for table `category_permissions`
--
ALTER TABLE `category_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_permissions_name_unique` (`name`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configs_user_id_foreign` (`user_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_category_permission_id_foreign` (`category_permission_id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_seo_id_foreign` (`seo_id`);

--
-- Indexes for table `post_project`
--
ALTER TABLE `post_project`
  ADD PRIMARY KEY (`post_id`,`project_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_product_id_foreign` (`category_product_id`),
  ADD KEY `products_seo_id_foreign` (`seo_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_items`
--
ALTER TABLE `category_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `category_permissions`
--
ALTER TABLE `category_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_items`
--
ALTER TABLE `category_items`
  ADD CONSTRAINT `category_items_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `configs`
--
ALTER TABLE `configs`
  ADD CONSTRAINT `configs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_category_permission_id_foreign` FOREIGN KEY (`category_permission_id`) REFERENCES `category_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_product_id_foreign` FOREIGN KEY (`category_product_id`) REFERENCES `category_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
