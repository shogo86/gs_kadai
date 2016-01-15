-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2016 年 1 月 14 日 14:05
-- サーバのバージョン： 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table2`
--

CREATE TABLE `gs_an_table2` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table2`
--

INSERT INTO `gs_an_table2` (`id`, `name`, `email`, `age`, `comment`, `indate`) VALUES
(1, 'anmitsu', 'aaaa', 12, 'おいしいです。', '2016-01-09 17:43:26'),
(2, 'あんみつ', 'aaa@aaaa', 23, 'こんばんわ', '2016-01-09 17:45:32'),
(3, 'おい', 'oi@oioi', 10, 'おいです', '2016-01-09 17:49:43'),
(4, 'かなこ↑↑', 'kanakodayo@momoclo.co.jp', 20, 'かなよだよ', '2016-01-11 21:16:26'),
(5, 'ももか', 'momoka', 35, 'ももかだよ', '2016-01-11 21:25:39'),
(6, 'れに', 'renirei', 22, 'れにれにだよ', '2016-01-11 21:31:07'),
(7, 'しおりん', 'shiorin@momoclo.co.jp', 20, 'しおりんだよ', '2016-01-12 09:28:52'),
(8, 'あーりん', 'a-rindayo@momoclo.co.jp', 20, 'あーりんだよ', '2016-01-12 19:55:07'),
(9, '山崎', 'yamasaki@gmail.com', 14, 'やまざきいいい', '2016-01-12 20:04:00'),
(10, 'まりな', 'marimari@marina.co.jp', 14, '聖母です。', '2016-01-12 20:06:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table2`
--
ALTER TABLE `gs_an_table2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table2`
--
ALTER TABLE `gs_an_table2`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;