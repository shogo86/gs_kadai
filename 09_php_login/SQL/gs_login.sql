-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2016 年 1 月 29 日 13:21
-- サーバのバージョン： 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_login`
--

CREATE TABLE `gs_login` (
  `id` int(12) NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_login`
--

INSERT INTO `gs_login` (`id`, `email`, `password`, `name`, `kanri_flg`) VALUES
(15, 'show.go.0329@gmail.com', 'ea81bf7ebb9c7b47946da27261c39f76', 'あんみつ', 0),
(16, 'arin@gmail.com', '92b622722a993c1df446461cc3fe0ad7', 'あーりん', 1),
(17, 'shiorin@momoclo.co.jp', '2fe863a2c57bc9a46db265b909199fde', 'しおりん', 0),
(18, 'kanakodayo@momoclo.co.jp', '8f83e0a07ceae4a346fdc443f5f92113', 'かなこ', 1),
(19, 'momoka@gmail.com', '462e6343172caf6ffe352d34ff0cecdc', 'ももか', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_login`
--
ALTER TABLE `gs_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_login`
--
ALTER TABLE `gs_login`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;