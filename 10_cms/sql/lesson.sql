-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2016 年 2 月 11 日 14:53
-- サーバのバージョン： 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `language_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `lesson`
--

CREATE TABLE `lesson` (
  `id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `start_time` datetime NOT NULL,
  `time` int(1) NOT NULL COMMENT '1:30分 2:1時間 3:1時間30分 4:2時間',
  `location` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `lesson`
--

INSERT INTO `lesson` (`id`, `user_id`, `title`, `start_time`, `time`, `location`, `detail`, `picture`, `indate`) VALUES
(1, 4, '英語', '2016-02-12 14:00:00', 1, '渋谷', 'てすと', '', '0000-00-00 00:00:00'),
(2, 1, '中国語学ぼう', '2016-02-05 18:00:00', 2, '新宿', 'idテスト', '', '0000-00-00 00:00:00'),
(3, 2, '日本語を学ぼう', '2016-02-19 13:00:00', 2, '東京都渋谷区タリーズコーヒー', 'われらがアイドルももクロ！', '', '0000-00-00 00:00:00'),
(4, 3, '日本語でデートしよう！', '2016-02-19 13:00:00', 2, 'ぼくの家', '', '', '0000-00-00 00:00:00'),
(5, 4, '日本茶を飲みましょう', '2016-02-22 15:00:00', 2, '私の家', '', '', '0000-00-00 00:00:00'),
(6, 5, 'i love chinese', '2016-02-20 16:00:00', 2, 'デジタルハリウッド', 'よろしゅうね', '', '0000-00-00 00:00:00'),
(7, 1, '英語が大好き！', '2016-02-26 16:00:00', 4, '浅草', 'てすとでつ', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;