-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2016 年 2 月 11 日 14:55
-- サーバのバージョン： 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `language_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `facebook` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sex` int(1) NOT NULL COMMENT '男性:1 女性:2',
  `age` int(3) NOT NULL,
  `main_language` int(1) NOT NULL COMMENT '日本語:1 英語:2 中国語:3',
  `sub_language` int(1) NOT NULL COMMENT '日本語:1 英語:2 中国語:3',
  `picture` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `introduction` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `facebook`, `email`, `password`, `name`, `sex`, `age`, `main_language`, `sub_language`, `picture`, `introduction`, `create_time`, `update_time`) VALUES
(1, '', 'show.go.0329@gmail.com', 'ea81bf7ebb9c7b47946da27261c39f76', '渥美翔吾', 1, 29, 1, 3, 'kanako_choki.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', 'kanako@gmail.com', '8f83e0a07ceae4a346fdc443f5f92113', 'かなこ', 2, 18, 3, 1, 'kanako_choki2.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', 'maikeru', '02810a0125b12409f28e48930fbda4e0', 'maikeru', 1, 30, 2, 1, 'maikeru.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', 'monika', '6f3fc039bfe1efdb272111f276a0e84a', 'monika', 2, 20, 2, 1, 'monika.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '', 'nicol', 'aa05a7001d61bffb408b59c65336432d', 'nicol', 2, 18, 2, 3, 'nicol.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;