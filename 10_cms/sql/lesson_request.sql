-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2016 年 2 月 11 日 14:54
-- サーバのバージョン： 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `language_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `lesson_request`
--

CREATE TABLE `lesson_request` (
  `id` int(15) NOT NULL,
  `request_user_id` int(15) NOT NULL,
  `entry_user_id` int(15) NOT NULL,
  `lesson_id` int(15) NOT NULL,
  `matching` int(1) NOT NULL COMMENT '1：成立 2.不成立',
  `create_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `lesson_request`
--

INSERT INTO `lesson_request` (`id`, `request_user_id`, `entry_user_id`, `lesson_id`, `matching`, `create_time`) VALUES
(4, 5, 1, 2, 0, '0000-00-00 00:00:00'),
(5, 5, 2, 3, 0, '0000-00-00 00:00:00'),
(6, 5, 1, 2, 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lesson_request`
--
ALTER TABLE `lesson_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lesson_request`
--
ALTER TABLE `lesson_request`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;