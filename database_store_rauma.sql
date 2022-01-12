-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th1 12, 2022 lúc 04:34 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database_store_rauma`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `prioty` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `prioty`, `created_at`, `updated_at`) VALUES
(1, 'MENU - RAU MÁ MIX', 1, 0, '2021-12-23 17:00:00', '2021-12-23 17:00:00'),
(2, 'COMBO RAU MÁ MIX', 1, 0, '2021-12-24 13:12:18', '2021-12-24 13:12:18'),
(3, 'TOPPING', 1, 0, '2021-12-23 17:00:00', '2021-12-23 17:00:00'),
(4, 'BÁNH TRÁNG MIX', 1, 0, '2021-12-24 13:13:47', '2021-12-24 13:13:47'),
(5, 'NƯỚC NGỌT', 1, 10, '2022-01-06 18:44:41', '2022-01-06 18:44:41'),
(21, 'Nước giải khác & thanh mát', 1, 10, '2022-01-07 18:19:25', '2022-01-07 18:19:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_23_164644_create_admins_table', 1),
(6, '2021_12_24_084519_product', 1),
(7, '2021_12_24_084951_category', 1),
(8, '2021_12_24_085033_orders', 1),
(9, '2021_12_24_085351_orders_details', 1),
(11, '2021_12_26_125010_product', 3),
(12, '2018_12_23_120000_create_shoppingcart_table', 4),
(15, '2021_12_28_091155_customer', 5),
(16, '2021_12_28_163656_tbl_customer', 6),
(19, '2021_12_28_171840_shipping', 7),
(20, '2021_12_30_135901_tbl_payment', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_total` int(100) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `customer_quantity` int(11) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descreption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `descreption`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Rau má đậu xanh mix Macchiato', 20000, 'Rau-ma-dau-xanh-mix-Macchiato-600x600.jpg', NULL, 1, 1, '2021-12-26 16:26:45', '0000-00-00 00:00:00'),
(2, 'Rau má đậu xanh mix Macchiato', 15000, 'Rau-ma-mix-Macchiato.jpg', NULL, 1, 1, '2021-12-26 16:27:32', NULL),
(3, 'Rau Má Mix Sầu Riêng Sữa Dừa (MỚI)', 22000, 'rau-ma-sau-rieng-sua-dua.jpg', NULL, 1, 1, '2021-12-26 16:28:24', NULL),
(4, 'Rau má nguyên chất', 12000, 'rau-ma-nguyen-chat-22.jpg', NULL, 1, 1, '2021-12-26 16:28:59', NULL),
(5, 'Rau má sữa dừa', 18000, 'rau-ma-sua-dua-1.jpg', NULL, 1, 1, '2021-12-26 16:29:31', NULL),
(6, 'Rau má mix đậu xanh sữa dừa', 20000, 'rau-ma-dau-xanh-sua-dua.jpg', NULL, 1, 1, '2022-01-06 18:34:13', NULL),
(7, 'Rau má mix khoai môn sữa dừa', 20000, 'rau-ma-khoai-mon-sua-dua31.jpg', NULL, 1, 1, '2021-12-26 16:30:19', NULL),
(8, 'Đậu xanh sữa dừa', 12000, 'dau-xanh-sua-dua-1.jpg', NULL, 1, 1, '2021-12-26 16:30:48', NULL),
(9, 'Khoai môn sữa dừa', 20000, 'khoai-mon-sua-dua-1.jpg', NULL, 1, 1, '2021-12-26 16:31:30', NULL),
(11, 'Sương Sáo Hạt Chia', 7000, 'Suong-sao-hat-chia.jpg', NULL, 1, 3, '2021-12-26 16:32:00', NULL),
(12, 'Thạch củ năng', 7000, 'Thạch củ năng', NULL, 1, 3, '2021-12-26 16:32:24', NULL),
(13, 'Thạch lá dứa', 5000, 'Thach-la-dua.jpg', NULL, 1, 3, '2022-01-06 18:32:18', NULL),
(14, 'Trân châu lá dứa', 5000, 'Tran-chau-la-dua.jpg', NULL, 1, 3, '2022-01-06 18:35:31', NULL),
(15, 'Trân châu tuyết trắng', 7000, 'Tran-chau-tuyet-trang.jpg', NULL, 1, 3, '2022-01-06 18:36:06', NULL),
(16, 'Thạch nha đam', 7000, 'Thach-nha-dam.jpg', NULL, 1, 3, '2022-01-06 18:36:27', NULL),
(17, 'Combo 2', 28000, 'combo-2-71.jpg', NULL, 1, 2, '2022-01-06 18:37:18', NULL),
(18, 'Combo 7', 30000, 'combo-72.jpg', NULL, 1, 2, '2022-01-06 18:37:49', NULL),
(19, 'Combo 8', 30000, 'combo-73.jpg', NULL, 1, 2, '2022-01-06 18:38:15', NULL),
(20, 'Combo 6', 30000, 'combo-74.jpg', NULL, 1, 2, '2022-01-06 18:38:56', NULL),
(21, 'Combo 5', 30000, 'combo-81.jpg', NULL, 1, 2, '2022-01-06 18:39:21', NULL),
(22, 'Combo 4', 30000, 'combo-82.jpg', NULL, 1, 2, '2022-01-06 18:39:45', NULL),
(23, 'Combo 3', 30000, 'combo-83.jpg', NULL, 1, 2, '2022-01-06 18:40:10', NULL),
(24, 'Combo 1', 30000, '	\r\ncombo-84.jpg', NULL, 1, 2, '2022-01-06 18:40:37', NULL),
(25, 'Bánh Tráng Mix Tôm Hành', 17000, 'banh-trang-mix-tom-hanh91.jpg', NULL, 1, 4, '2022-01-06 18:41:09', NULL),
(26, 'Bánh Tráng Mix Khô Bò', 17000, 'banh-trang-mix-kho-bo92.jpg', NULL, 1, 4, '2022-01-06 18:42:19', NULL),
(27, 'Bánh Tráng Mix Phô Mai', 17000, 'banh-trang-mix-pho-mai93.jpg', NULL, 1, 4, '2022-01-06 18:43:30', NULL),
(28, 'Bánh Tráng Mix Khô Gà Lá Chanh', 17000, 'banh-trang-mix-kho-ga-la-chanh94.jpg', NULL, 1, 4, '2022-01-06 18:44:05', NULL),
(29, 'Sting', 15000, 'nuoc-tang-luc-sting-dau-lon-330ml.jpg', NULL, 1, 5, '2022-01-06 18:45:57', NULL),
(30, 'Coca', 15000, 'uong-coca-co-beo-khong-2.jpg', NULL, 1, 5, '2022-01-06 18:46:53', NULL),
(31, 'Pepsi', 12000, '', NULL, 1, 21, '2022-01-07 18:20:35', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'Huynh Ngân', '123456', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_nopad_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_nopad_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_nopad_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'huỳnh ngân', 'nganhuynh@gmail.com', '123', '09876354', NULL, NULL),
(2, 'huỳnh ngân', 'nganhuynh@gmail.com', '123', '09876354', NULL, NULL),
(3, 'Huỳnh Ngânn', 'admin@gmail.com', '123', '0987263534', NULL, NULL),
(4, 'kh', 'kh@gmail.com', '202cb962ac59075b964b07152d234b70', '123', NULL, NULL),
(5, 'Huỳnh Ngân', 'nganhuynh@gmail.com', '202cb962ac59075b964b07152d234b70', '0321456987', NULL, NULL),
(6, 'Huỳnh Ngân', 'nganhuynh@gmail.com', '202cb962ac59075b964b07152d234b70', '031265479', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Đang chờ xử lý', NULL, NULL),
(2, '1', 'Đang chờ xử lý', NULL, NULL),
(3, '1', 'Đang chờ xử lý', NULL, NULL),
(4, '1', 'Đang chờ xử lý', NULL, NULL),
(5, NULL, 'Đang chờ xử lý', NULL, NULL),
(6, NULL, 'Đang chờ xử lý', NULL, NULL),
(7, NULL, 'Đang chờ xử lý', NULL, NULL),
(8, NULL, 'Đang chờ xử lý', NULL, NULL),
(9, NULL, 'Đang chờ xử lý', NULL, NULL),
(10, NULL, 'Đang chờ xử lý', NULL, NULL),
(11, NULL, 'Đang chờ xử lý', NULL, NULL),
(12, NULL, 'Đang chờ xử lý', NULL, NULL),
(13, NULL, 'Đang chờ xử lý', NULL, NULL),
(14, NULL, 'Đang chờ xử lý', NULL, NULL),
(15, NULL, 'Đang chờ xử lý', NULL, NULL),
(16, NULL, 'Đang chờ xử lý', NULL, NULL),
(17, NULL, 'Đang chờ xử lý', NULL, NULL),
(18, NULL, 'Đang chờ xử lý', NULL, NULL),
(19, NULL, 'Đang chờ xử lý', NULL, NULL),
(20, NULL, 'Đang chờ xử lý', NULL, NULL),
(21, NULL, 'Đang chờ xử lý', NULL, NULL),
(22, NULL, 'Đang chờ xử lý', NULL, NULL),
(23, NULL, 'Đang chờ xử lý', NULL, NULL),
(24, NULL, 'Đang chờ xử lý', NULL, NULL),
(25, NULL, 'Đang chờ xử lý', NULL, NULL),
(26, NULL, 'Đang chờ xử lý', NULL, NULL),
(27, NULL, 'Đang chờ xử lý', NULL, NULL),
(28, NULL, 'Đang chờ xử lý', NULL, NULL),
(29, NULL, 'Đang chờ xử lý', NULL, NULL),
(30, NULL, 'Đang chờ xử lý', NULL, NULL),
(31, '2', 'Đang chờ xử lý', NULL, NULL),
(32, '2', 'Đang chờ xử lý', NULL, NULL),
(33, '2', 'Đang chờ xử lý', NULL, NULL),
(34, '2', 'Đang chờ xử lý', NULL, NULL),
(35, NULL, 'Đang chờ xử lý', NULL, NULL),
(36, NULL, 'Đang chờ xử lý', NULL, NULL),
(37, NULL, 'Đang chờ xử lý', NULL, NULL),
(38, NULL, 'Đang chờ xử lý', NULL, NULL),
(39, NULL, 'Đang chờ xử lý', NULL, NULL),
(40, NULL, 'Đang chờ xử lý', NULL, NULL),
(41, NULL, 'Đang chờ xử lý', NULL, NULL),
(42, NULL, 'Đang chờ xử lý', NULL, NULL),
(43, NULL, 'Đang chờ xử lý', NULL, NULL),
(44, NULL, 'Đang chờ xử lý', NULL, NULL),
(45, NULL, 'Đang chờ xử lý', NULL, NULL),
(46, NULL, 'Đang chờ xử lý', NULL, NULL),
(47, NULL, 'Đang chờ xử lý', NULL, NULL),
(48, '2', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_email`, `shipping_phone`, `shipping_address`, `shipping_notes`, `created_at`, `updated_at`) VALUES
(26, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(28, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(29, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(30, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(31, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(32, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(33, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(34, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(35, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(36, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(37, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(38, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(39, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(40, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(41, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(42, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(43, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(44, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(45, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(46, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(47, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(48, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(49, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(51, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(52, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(53, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(54, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(55, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(56, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(57, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(58, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(59, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(60, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(61, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(62, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(63, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(64, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(65, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(66, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(67, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(68, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(69, 'HUỲNH NGÂN', 'NGAN@GMAIL.COM', '09876', '135', NULL, NULL, NULL),
(70, 'Nhân', '@vưnbjh', '1234', 'hàng', NULL, NULL, NULL),
(71, 'Nhân', '@vưnbjh', '1234', 'hàng', NULL, NULL, NULL),
(72, 'Hunhf Ngân', 'hưdjqfj', '1jhjrh', 'ngan', 'ldjdj', NULL, NULL),
(73, 'Hunhf Ngân', 'hưdjqfj', '1jhjrh', 'ngan', 'ldjdj', NULL, NULL),
(74, 'Hunhf Ngân', 'hưdjqfj', '1jhjrh', 'ngan', 'ldjdj', NULL, NULL),
(75, 'Hunhf Ngân', 'hưdjqfj', '1jhjrh', 'ngan', 'ldjdj', NULL, NULL),
(76, 'Hunhf Ngân', 'hưdjqfj', '1jhjrh', 'ngan', 'ldjdj', NULL, NULL),
(77, 'Hunhf Ngân', 'hưdjqfj', '1jhjrh', 'ngan', 'ldjdj', NULL, NULL),
(78, 'a', 'a', 'a', 'a', 'a', NULL, NULL),
(79, 'Huỳnh Ngân', 'huynhthihongngancna@gmail.com', '0313654789', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(80, 'Huỳnh Ngân', '1911546868@nttu.edu.vn', '+84372058164', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(81, 'Huỳnh Ngân', 'hthnngan@gmail.com', '+84987624312', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(82, 'Huỳnh Ngân', 'hthnngan@gmail.com', '+84987624312', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(83, 'Huỳnh Ngân', 'huynhthihongngancna@gmail.com', '0313654789', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(84, 'Huỳnh Ngân', 'huynhthihongngancna@gmail.com', '0313654789', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(85, 'Huỳnh Ngân', 'huynhthihongngancna@gmail.com', '0313654789', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(86, 'Huỳnh Ngân', 'hthnngan@gmail.com', '+84987624312', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(87, 'Huỳnh Ngân', 'hthnngan@gmail.com', '+84987624312', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(88, 'Huỳnh Ngân', 'hthnngan@gmail.com', '+84987624312', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(89, 'Huỳnh Ngân', 'huynhthihongngancna@gmail.com', '0313654789', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(90, 'Huỳnh Ngân', 'hthnngan@gmail.com', '+84987624312', 'ấp Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, TRà Vinh', 'hàng dễ vỡ chú ý nhé', NULL, NULL),
(91, 'Huỳnh ngân', 'hthnngan@gmail.com', '0372058166', 'mlb-cầu ngang-tv', NULL, NULL, NULL),
(92, 'Huỳnh Ngân', 'nganhuynh@gmail.com', '0123654123', '20 Mỹ Thập, Mỹ Long Bắc, Cầu Ngang, Trà Vinh', NULL, NULL, NULL),
(93, 'Huỳnh Ngân', 'nganhuynh@gmail.com', '98716253', 'kp1, p. An Phú , q.12, tp.HCM', 'hàng dễ vỡ nhớ chú ý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
