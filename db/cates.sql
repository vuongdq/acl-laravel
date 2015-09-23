-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2015 at 05:09 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acl-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE IF NOT EXISTS `cates` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `catetype_id` int(10) unsigned NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `catetype_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(0, 'none', 'none', 1, 0, 1, 'none', 'none', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Quần áo nam', 'quan-ao-nam', 1, 0, 1, 'Quần áo nam', 'Quần áo nam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'quan ao nu da sua', 'quan-ao-nu-da-sua', 0, 5, 1, 'Quan ao nu', 'Quan ao nu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'vuongdq', 'vuongdq', 0, 5, 1, 'vuongdq', 'vuongdq', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '123', '123', 123, 5, 2, '123', '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'test222222', 'test222222', 0, 5, 1, 'test2', 'test2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`),
  ADD KEY `cates_catetype_id_foreign` (`catetype_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cates`
--
ALTER TABLE `cates`
  ADD CONSTRAINT `cates_catetype_id_foreign` FOREIGN KEY (`catetype_id`) REFERENCES `catetypes` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
