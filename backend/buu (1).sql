-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 05:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buu`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `uid` text DEFAULT NULL,
  `title_th` text DEFAULT NULL,
  `title_en` text DEFAULT NULL,
  `cover_path` text DEFAULT NULL,
  `banner_path` text DEFAULT NULL,
  `alt_cover` text NOT NULL,
  `alt_banner` text NOT NULL,
  `des_th` text DEFAULT NULL,
  `des_en` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `uid`, `title_th`, `title_en`, `cover_path`, `banner_path`, `alt_cover`, `alt_banner`, `des_th`, `des_en`, `created_at`, `updated_at`) VALUES
(2, '98fa20ce-370b-47dd-bde8-7160653135f2', 'Aquaculture and Fishery', 'การเพาะเลี้ยงสัตว์น้ำ ภาคตะวันออก', 'storage/categories/16826099437894599.png', 'storage/categories/16826099432816023.png', '', '', '', '', '2023-04-20 14:23:16', '2023-05-11 14:29:30'),
(3, '99207e3c-b610-49a5-bc3d-b6c9feab359a', 'Agriculture', 'การเกษตร ภาคตะวันออก', 'storage/categories/16836483599119164.jpg', 'storage/categories/16836483594955370.png', 'test1', 'test1', '', '', '2023-05-09 16:05:59', '2023-05-11 14:29:00'),
(4, '992461db-cc39-4b2e-8d56-ea7658945499', 'Forestry', 'ป่าไม้', 'storage/categories/16838153962876467.png', 'storage/categories/16838153964477083.png', '', '', '', '', '2023-05-11 14:29:56', '2023-05-11 14:29:56'),
(5, '9924620f-bb02-4763-8101-669673fbe540', 'Natyral Resources', 'ลุ่มน้ำ', 'storage/categories/16838154309349154.png', 'storage/categories/16838154302572510.png', '', '', '', '', '2023-05-11 14:30:30', '2023-05-11 14:30:30'),
(6, '9924626d-cf59-4bef-8861-d92a89310b42', 'Population', 'ประชากร', 'storage/categories/16838154927179307.png', 'storage/categories/16838154921668681.png', '', '', '', '', '2023-05-11 14:31:32', '2023-05-11 14:31:32'),
(7, '99246369-dfae-4050-9c9b-817c43775cba', 'Climate Change', 'การเปลี่ยนแปลงภูมิอากาศ', 'storage/categories/16838156572622693.png', 'storage/categories/16838156575549317.png', '', '', '', '', '2023-05-11 14:34:17', '2023-05-11 14:34:17'),
(8, '9924638f-c974-4a94-b84d-3be7b31e1c91', 'Marine Coastal Resources', 'ทรัพยากรทางทะเลชายฝั่ง', 'storage/categories/16838156829942892.png', 'storage/categories/16838156823415593.png', '', '', '', '', '2023-05-11 14:34:42', '2023-05-11 14:34:42'),
(9, '992463b1-45f0-4029-a79c-b4c927b43924', 'Economics', 'เศรษฐศาสตร์', 'storage/categories/16838157046141813.png', 'storage/categories/1683815704868787.png', '', '', '', '', '2023-05-11 14:35:04', '2023-05-11 14:35:04'),
(10, '992463dd-a776-43ba-b05e-8439e78fef9e', 'Gastronomy', 'อาหาร', 'storage/categories/16838157333050838.png', 'storage/categories/16838157336093343.png', '', '', '', '', '2023-05-11 14:35:33', '2023-05-11 14:35:33'),
(11, '99246400-c012-430b-899b-2938488dbf5c', 'Logistics', 'การขนส่ง', 'storage/categories/16838157565314541.png', 'storage/categories/16838157567158818.png', '', '', '', '', '2023-05-11 14:35:56', '2023-05-11 14:35:56'),
(12, '9924641c-f6d4-4da4-abad-d198f4f36ed0', 'Sustainable Development Goals', 'การพัฒนาที่ยั่งยืน', 'storage/categories/16838157748627288.png', 'storage/categories/16838157746820763.png', '', '', '', '', '2023-05-11 14:36:14', '2023-05-11 14:36:14'),
(13, '9924643b-70e7-456b-a158-ec702449d7ed', 'Others', 'อื่นๆ', 'storage/categories/16838157943075331.png', 'storage/categories/16838157947930578.png', '', '', '', '', '2023-05-11 14:36:34', '2023-05-11 14:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title_th` text DEFAULT NULL,
  `title_en` text DEFAULT NULL,
  `path` text DEFAULT NULL,
  `alt` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `uid`, `title_th`, `title_en`, `path`, `alt`, `created_at`, `updated_at`) VALUES
(1, '99082400-8c27-462d-ad1f-ebfc01e83ffd', 'ไม่มีคณะ', 'None Department', 'storage/department/16826024283911040.png', '', '2023-04-27 13:37:23', '2023-04-27 13:37:23'),
(2, '99084181-8f64-4224-90f6-89b814c94aa4', 'คณะที่ 1', 'Department 1', 'storage/department/16826073778771093.png', '', '2023-04-27 14:57:17', '2023-04-27 14:57:17'),
(3, '990841a6-61db-473c-ae41-9ce005dbb14d', 'คณะที่ 2', 'Department  2', 'storage/department/16826074023360516.png', '', '2023-04-27 14:57:12', '2023-04-27 14:57:12'),
(4, '990841c1-1507-4f4e-ad13-ece75ec3cf40', 'คณะที่ 3', 'Department 3', 'storage/department/16826098046032389.png', '', '2023-04-27 15:36:44', '2023-04-27 15:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` int(11) NOT NULL,
  `contact_us_th` text DEFAULT NULL,
  `contact_us_en` text DEFAULT NULL,
  `contact_us_path` text DEFAULT NULL,
  `contact_us_path_banner` text DEFAULT NULL,
  `address_th` text DEFAULT NULL,
  `address_en` text DEFAULT NULL,
  `address_path` text DEFAULT NULL,
  `address_path_banner` text DEFAULT NULL,
  `index_cover_path` text DEFAULT NULL,
  `alt_index_cover_path` text DEFAULT NULL,
  `index_cover_path_type` varchar(255) DEFAULT NULL,
  `index_header_title` text DEFAULT NULL,
  `index_title_content` text DEFAULT NULL,
  `index_content` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `line` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `alt_contact_us_path` text NOT NULL,
  `alt_contact_us_path_banner` text NOT NULL,
  `alt_address_path` text NOT NULL,
  `alt_address_path_banner` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`id`, `contact_us_th`, `contact_us_en`, `contact_us_path`, `contact_us_path_banner`, `address_th`, `address_en`, `address_path`, `address_path_banner`, `index_cover_path`, `alt_index_cover_path`, `index_cover_path_type`, `index_header_title`, `index_title_content`, `index_content`, `email`, `tel`, `facebook`, `line`, `youtube`, `alt_contact_us_path`, `alt_contact_us_path_banner`, `alt_address_path`, `alt_address_path_banner`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'storage/banner/16822209322464921.png', 'storage/banner/16822209321018005.png', 'test_th1', 'test_en1', 'storage/banner/16822209327818635.png', 'storage/banner/16822209321408880.png', 'https://www.youtube.com/watch?v=FIyuLGcQwcA', 'test', 'video', 'test', 'test', 'test', 'arees@go.buu.ac.th', '0393900000', 'www.facebook.com', '@line', 'www.youtube.com', 'dwqd', 'dwqd', '', 'dwqqd', '2023-05-16 13:26:13', '2023-05-16 13:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `index_banner`
--

CREATE TABLE `index_banner` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `path` text NOT NULL,
  `alt` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `index_banner`
--

INSERT INTO `index_banner` (`id`, `uid`, `path`, `alt`, `type`, `enable`, `created_at`, `updated_at`) VALUES
(4, '99207597-52e9-4164-b21e-31f16ccf1dae', 'storage/index-banner/16836469087552225.png', 'test', 'image', 1, '2023-05-10 13:18:26', '2023-05-10 12:55:01'),
(5, '99224d93-1ba2-4010-8df9-35657d5599a2', 'storage/index-banner/16842414933393652.jpg', '', 'image', 1, '2023-05-16 12:51:33', '2023-05-16 12:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `personnels`
--

CREATE TABLE `personnels` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `position` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `name_surname_th` text DEFAULT NULL,
  `name_surname_en` text DEFAULT NULL,
  `path` text DEFAULT NULL,
  `alt` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personnels`
--

INSERT INTO `personnels` (`id`, `uid`, `department_id`, `position`, `detail`, `name_surname_th`, `name_surname_en`, `path`, `alt`, `created_at`, `updated_at`) VALUES
(2, '99085558-1662-43fa-bb82-1658bf10111d', 1, 'test', 'test', 'test', 'test', 'storage/personnel/1682610706724683.png', '', '2023-04-27 15:51:46', '2023-04-27 15:51:46'),
(3, '99085571-c2b4-4ffd-bea7-b3b359de12e1', 2, 'test1', 'test1', 'test1', 'test1', 'storage/personnel/16826107239120725.png', 'etst', '2023-05-09 16:54:37', '2023-05-09 16:54:37'),
(4, '99208fbb-4df5-499d-8fa2-089cea2ee693', 1, 'tete', 'tet', 'tet', 'etet', 'storage/personnel/16836512941876647.png', 'test', '2023-05-09 16:54:54', '2023-05-09 16:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title_th` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `des_th` text DEFAULT NULL,
  `des_en` text DEFAULT NULL,
  `path` text DEFAULT NULL,
  `alt` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `uid`, `name`, `created_at`, `updated_at`) VALUES
(1, '98f5dff8-7ae1-4ead-a418-1ed768fdf238', 'Admin', '2023-04-18 11:38:40', '2023-04-18 11:38:40'),
(2, '98f5e015-0073-4dea-8595-44a849cb967b', 'Mg', '2023-04-18 11:38:58', '2023-04-18 11:38:58'),
(3, '992076ce-fa03-42e0-9ba1-a91f2d224ce2', 'test', '2023-05-09 15:45:12', '2023-05-09 15:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `role_settings`
--

CREATE TABLE `role_settings` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `setting_id` int(11) NOT NULL,
  `enable` tinyint(2) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_settings`
--

INSERT INTO `role_settings` (`id`, `role_id`, `setting_id`, `enable`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-04-18 11:38:40', '2023-04-18 11:38:40'),
(2, 1, 2, 1, '2023-04-18 11:38:40', '2023-04-18 11:38:40'),
(3, 1, 3, 1, '2023-04-18 11:38:40', '2023-04-18 11:38:40'),
(4, 1, 4, 1, '2023-04-18 11:38:40', '2023-04-18 11:38:40'),
(5, 2, 1, 1, '2023-04-18 11:38:58', '2023-04-18 11:38:58'),
(6, 2, 2, 1, '2023-04-18 11:38:58', '2023-04-18 11:38:58'),
(7, 2, 3, 1, '2023-04-18 11:38:58', '2023-04-18 11:38:58'),
(8, 2, 4, 1, '2023-04-18 11:38:58', '2023-04-18 11:38:58'),
(9, 3, 1, 1, '2023-05-09 15:45:12', '2023-05-09 15:45:12'),
(10, 3, 2, 0, '2023-05-09 15:45:12', '2023-05-09 15:45:12'),
(11, 3, 3, 0, '2023-05-09 15:45:12', '2023-05-09 15:45:12'),
(12, 3, 4, 0, '2023-05-09 15:45:12', '2023-05-09 15:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'แก้ไขหน้าเว็บไซต์', NULL, NULL),
(2, 'แก้ไขระบบ Data', NULL, NULL),
(3, 'แก้ไข สมาชิก', NULL, NULL),
(4, 'แก้ไขบทความ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title_th` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `des_th` text DEFAULT NULL,
  `des_en` text DEFAULT NULL,
  `path` text DEFAULT NULL,
  `alt` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `uid`, `categorie_id`, `title_th`, `title_en`, `des_th`, `des_en`, `path`, `alt`, `created_at`, `updated_at`) VALUES
(1, '992083df-eeb3-4a48-9261-033b7d1acd8e', 2, 'test', 'test', '', '', 'storage/sub_categories/16836493041215415.png', 'test', '2023-05-09 16:23:36', '2023-05-09 16:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` text DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `role_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '98da13da-1fae-4608-948b-45618f744655', 1, 'admin', 'admin@admin.com', '$2y$10$q/5tcukzC58FCl1cVN88/.FKPZuBF/e6SnxPElo5PwL9JZ1.AXpUi', NULL, '2022-08-10 20:32:06', '2023-04-04 09:02:33'),
(31, '98f5e6c3-ddd4-412c-84ab-c881d2155615', 3, 'test', 'test@mail.com', '$2y$10$6RCCmJrgQwUyCbwPveDg1.VDH/OyjJnf0abK/PIAuaiRgALMCCUfu', NULL, '2023-04-18 11:57:40', '2023-05-09 15:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `workgroups`
--

CREATE TABLE `workgroups` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title_th` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `path` text DEFAULT NULL,
  `alt` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `workgroups`
--

INSERT INTO `workgroups` (`id`, `uid`, `title_th`, `title_en`, `path`, `alt`, `created_at`, `updated_at`) VALUES
(3, '990821b6-24b4-48d1-8052-462f25deab7e', 'test', 'test', 'storage/workgroup/16826097919036869.png', '', '2023-04-27 15:36:31', '2023-04-27 15:36:31'),
(4, '99208bb2-9f61-469e-a6d7-d1152aaa4e0d', 'tewst', 'terst', 'storage/workgroup/16836506178497617.png', 'test111', '2023-05-09 16:48:11', '2023-05-09 16:48:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_banner`
--
ALTER TABLE `index_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_settings`
--
ALTER TABLE `role_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workgroups`
--
ALTER TABLE `workgroups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9223372036854775807;

--
-- AUTO_INCREMENT for table `index_banner`
--
ALTER TABLE `index_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_settings`
--
ALTER TABLE `role_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `workgroups`
--
ALTER TABLE `workgroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
