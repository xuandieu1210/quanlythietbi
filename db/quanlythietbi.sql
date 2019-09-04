-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 12:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlythietbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_tokens`
--

CREATE TABLE `access_tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(300) NOT NULL,
  `expires_at` int(11) NOT NULL,
  `auth_code` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `app_id` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `authorization_codes`
--

CREATE TABLE `authorization_codes` (
  `id` int(11) NOT NULL,
  `code` varchar(150) NOT NULL,
  `expires_at` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `app_id` varchar(255) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donvi`
--

CREATE TABLE `donvi` (
  `id_donvi` int(11) NOT NULL,
  `ten_donvi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cap` int(11) NOT NULL,
  `captren` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dotkiemke`
--

CREATE TABLE `dotkiemke` (
  `id_dot` int(11) NOT NULL,
  `ten_dot` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_tram` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lichsukiemke`
--

CREATE TABLE `lichsukiemke` (
  `id_lichsu` int(11) NOT NULL,
  `id_thietbi` int(11) NOT NULL,
  `id_dot` int(11) NOT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhomthietbi`
--

CREATE TABLE `nhomthietbi` (
  `id_nhom` int(11) NOT NULL,
  `ten_nhom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_user` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_donvi` int(11) NOT NULL,
  `dienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thietbi`
--

CREATE TABLE `thietbi` (
  `id_thietbi` int(11) NOT NULL,
  `ten_thietbi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_nhom` int(11) NOT NULL,
  `id_tram` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thietbi_thuoctinh`
--

CREATE TABLE `thietbi_thuoctinh` (
  `id` int(11) NOT NULL,
  `id_thietbi` int(11) NOT NULL,
  `id_thuoctinh` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thongbaothaydoi`
--

CREATE TABLE `thongbaothaydoi` (
  `id_thongbao` int(11) NOT NULL,
  `id_thietbi` int(11) NOT NULL,
  `id_tramnguon` int(11) DEFAULT NULL,
  `id_tramdich` int(11) DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuoctinh`
--

CREATE TABLE `thuoctinh` (
  `id_thuoctinh` int(11) NOT NULL,
  `ten_thuoctinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `donvitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tram`
--

CREATE TABLE `tram` (
  `id_tram` int(11) NOT NULL,
  `ten_tram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_donvi` int(11) NOT NULL,
  `quanly` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'dist/img/default_picture.png',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'uGB7E0DTPhSfyQpVaVaGcTuI7umlteNl', '$2y$13$J4x6JdhyFINYImoLgXrPT.uBmTZzdgdHBbttFpUAspyZrafQiaSJq', NULL, 'admin', 'dist/img/1_ava.png', 10, 1532577440, 1545728466);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_tokens`
--
ALTER TABLE `access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorization_codes`
--
ALTER TABLE `authorization_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`id_donvi`);

--
-- Indexes for table `dotkiemke`
--
ALTER TABLE `dotkiemke`
  ADD PRIMARY KEY (`id_dot`),
  ADD KEY `fk_dot_tram` (`id_tram`),
  ADD KEY `fk_dot_user` (`created_by`);

--
-- Indexes for table `lichsukiemke`
--
ALTER TABLE `lichsukiemke`
  ADD PRIMARY KEY (`id_lichsu`),
  ADD KEY `fk_lichsu_thietbi` (`id_thietbi`),
  ADD KEY `fk_lichsu_dot` (`id_dot`);

--
-- Indexes for table `nhomthietbi`
--
ALTER TABLE `nhomthietbi`
  ADD PRIMARY KEY (`id_nhom`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_donvi_profile` (`id_donvi`);

--
-- Indexes for table `thietbi`
--
ALTER TABLE `thietbi`
  ADD PRIMARY KEY (`id_thietbi`),
  ADD KEY `fk_thietbi_tram` (`id_tram`),
  ADD KEY `fk_thietbi_nhom` (`id_nhom`);

--
-- Indexes for table `thietbi_thuoctinh`
--
ALTER TABLE `thietbi_thuoctinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tb_tt` (`id_thietbi`),
  ADD KEY `fk_tt_tb` (`id_thuoctinh`);

--
-- Indexes for table `thongbaothaydoi`
--
ALTER TABLE `thongbaothaydoi`
  ADD PRIMARY KEY (`id_thongbao`),
  ADD KEY `fk_tb_tbi` (`id_thietbi`),
  ADD KEY `fk_tb_tramnguon` (`id_tramnguon`),
  ADD KEY `fk_tb_tramdich` (`id_tramdich`);

--
-- Indexes for table `thuoctinh`
--
ALTER TABLE `thuoctinh`
  ADD PRIMARY KEY (`id_thuoctinh`);

--
-- Indexes for table `tram`
--
ALTER TABLE `tram`
  ADD PRIMARY KEY (`id_tram`),
  ADD KEY `fk_user_quanly` (`quanly`),
  ADD KEY `fk_donvi_quanly` (`id_donvi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_tokens`
--
ALTER TABLE `access_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `authorization_codes`
--
ALTER TABLE `authorization_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donvi`
--
ALTER TABLE `donvi`
  MODIFY `id_donvi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dotkiemke`
--
ALTER TABLE `dotkiemke`
  MODIFY `id_dot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lichsukiemke`
--
ALTER TABLE `lichsukiemke`
  MODIFY `id_lichsu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhomthietbi`
--
ALTER TABLE `nhomthietbi`
  MODIFY `id_nhom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thietbi`
--
ALTER TABLE `thietbi`
  MODIFY `id_thietbi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thietbi_thuoctinh`
--
ALTER TABLE `thietbi_thuoctinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thongbaothaydoi`
--
ALTER TABLE `thongbaothaydoi`
  MODIFY `id_thongbao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thuoctinh`
--
ALTER TABLE `thuoctinh`
  MODIFY `id_thuoctinh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tram`
--
ALTER TABLE `tram`
  MODIFY `id_tram` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dotkiemke`
--
ALTER TABLE `dotkiemke`
  ADD CONSTRAINT `fk_dot_tram` FOREIGN KEY (`id_tram`) REFERENCES `tram` (`id_tram`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dot_user` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lichsukiemke`
--
ALTER TABLE `lichsukiemke`
  ADD CONSTRAINT `fk_lichsu_dot` FOREIGN KEY (`id_dot`) REFERENCES `dotkiemke` (`id_dot`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lichsu_thietbi` FOREIGN KEY (`id_thietbi`) REFERENCES `thietbi` (`id_thietbi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_donvi_profile` FOREIGN KEY (`id_donvi`) REFERENCES `donvi` (`id_donvi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_profile` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thietbi`
--
ALTER TABLE `thietbi`
  ADD CONSTRAINT `fk_thietbi_nhom` FOREIGN KEY (`id_nhom`) REFERENCES `nhomthietbi` (`id_nhom`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_thietbi_tram` FOREIGN KEY (`id_tram`) REFERENCES `tram` (`id_tram`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thietbi_thuoctinh`
--
ALTER TABLE `thietbi_thuoctinh`
  ADD CONSTRAINT `fk_tb_tt` FOREIGN KEY (`id_thietbi`) REFERENCES `thietbi` (`id_thietbi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tt_tb` FOREIGN KEY (`id_thuoctinh`) REFERENCES `thuoctinh` (`id_thuoctinh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thongbaothaydoi`
--
ALTER TABLE `thongbaothaydoi`
  ADD CONSTRAINT `fk_tb_tbi` FOREIGN KEY (`id_thietbi`) REFERENCES `thietbi` (`id_thietbi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tb_tramdich` FOREIGN KEY (`id_tramdich`) REFERENCES `tram` (`id_tram`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tb_tramnguon` FOREIGN KEY (`id_tramnguon`) REFERENCES `tram` (`id_tram`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tram`
--
ALTER TABLE `tram`
  ADD CONSTRAINT `fk_donvi_quanly` FOREIGN KEY (`id_donvi`) REFERENCES `donvi` (`id_donvi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_quanly` FOREIGN KEY (`quanly`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
