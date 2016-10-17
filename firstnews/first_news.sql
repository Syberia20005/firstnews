-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 18 2016 г., 00:01
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `first_news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `alias` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `is_published` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `alias`, `title`, `description`, `is_published`) VALUES
(1, 'news-ods', 'Новости Одессы', 'Новости, описывающие последние события в Одессе', 1),
(2, 'news-kyiv', 'Новости Киева', 'Новости, описывающие события в Киеве', 1),
(3, 'new-lviv', 'Новости Львова', 'Новости про Львов', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(1, 'test', 'test mail', ''),
(2, 'test1', 'test@test.test', 'test text'),
(7, 'тест2', 'test@test.test', 'тест текст2');

-- --------------------------------------------------------

--
-- Структура таблицы `my_log`
--

CREATE TABLE `my_log` (
  `page_id` varchar(32) NOT NULL DEFAULT '',
  `all` int(11) NOT NULL DEFAULT '0',
  `today` int(11) NOT NULL DEFAULT '0',
  `date` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `my_log`
--

INSERT INTO `my_log` (`page_id`, `all`, `today`, `date`) VALUES
('38da12cc7b7be951f1f476b61087c0e9', 84, 1, 1476826949),
('38da12cc7b7be951f1f476b61087c0e9', 84, 1, 1476826949),
('38da12cc7b7be951f1f476b61087c0e9', 84, 1, 1476826949),
('38da12cc7b7be951f1f476b61087c0e9', 84, 1, 1476826949),
('38da12cc7b7be951f1f476b61087c0e9', 84, 1, 1476826949),
('38da12cc7b7be951f1f476b61087c0e9', 84, 1, 1476826949),
('53960d85cab2eff18b23200c11d55e30', 11, 11, 1476739916),
('c906726800cfe07227b959360ecf7d88', 2, 3, 1476826471),
('3ef2ae291f5eea8020c44c2f678a5b2b', 4, 4, 1476739938),
('bfb0ea1eb7ae1207fd734752b6363e0f', 7, 7, 1476740462),
('63fc9045af2e0482cc12da042268c1e2', 36, 36, 1476740579),
('9fde06e0380ccbaa1aa6717ddf977b1f', 8, 8, 1476742379),
('792306224ee8623603a1a3bbbe4eb4dc', 458, 458, 1476744304),
('dbabe8ae3ac2728f178d79bdd7ae43b6', 1163, 1163, 1476744426),
('0efb05a8088db9314c0f37d641abd969', 3, 3, 1476805218),
('5fb94a13cca3ad8d99980a4b554e6bb6', 1, 1, 1476805222),
('22a6f3dc04fe002602cf22d516c63a31', 3, 3, 1476808875),
('087ec2b303f63841b7b17ddfee916e1c', 1, 1, 1476808878),
('f6277c18bf6a8e9fea0fb719847a881f', 1, 1, 1476826906),
('61a6a17f52cf0a438a452d398bbb9dec', 1, 1, 1476826920),
('b6229f40527aabe04b54f6e74deb23c4', 1, 1, 1476826932);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `nid` int(10) UNSIGNED NOT NULL,
  `cid` int(10) UNSIGNED NOT NULL,
  `alias` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `adt` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `tags` varchar(1000) NOT NULL,
  `count_view` int(10) UNSIGNED NOT NULL,
  `is_published` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`nid`, `cid`, `alias`, `title`, `adt`, `content`, `image`, `tags`, `count_view`, `is_published`) VALUES
(1, 3, 'news-one', 'Новость Один', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.\r\n\r\nIn tation necessitatibus eam, tation munere ocurreret te per. Ad nec appetere efficiendi. Ei sea vitae diceret, discere euismod ne usu. Exerci delenit an duo. Ut pro atqui doctus dolores, porro habemus mentitum nec ad. Impedit constituam suscipiantur mel in. Ea qui alterum neglegentur, ea eruditi adipisci mel, meis quando dicunt in pro.', 'pic01.jpg', 'погода,фестиваль,контрабанда,финансовые прогнозы,финансовые новости', 0, 1),
(3, 2, 'news-two', 'Новость Два', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.\r\n\r\nIn tation necessitatibus eam, tation munere ocurreret te per. Ad nec appetere efficiendi. Ei sea vitae diceret, discere euismod ne usu. Exerci delenit an duo. Ut pro atqui doctus dolores, porro habemus mentitum nec ad. Impedit constituam suscipiantur mel in. Ea qui alterum neglegentur, ea eruditi adipisci mel, meis quando dicunt in pro.', '', 'погода,рок,контрабанда,финансовые прогнозы,финансовые новости', 0, 1),
(4, 1, 'news-three', 'Новость Три', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.\r\n\r\nIn tation necessitatibus eam, tation munere ocurreret te per. Ad nec appetere efficiendi. Ei sea vitae diceret, discere euismod ne usu. Exerci delenit an duo. Ut pro atqui doctus dolores, porro habemus mentitum nec ad. Impedit constituam suscipiantur mel in. Ea qui alterum neglegentur, ea eruditi adipisci mel, meis quando dicunt in pro.', '', 'фестиваль', 0, 1),
(5, 2, 'news-four', 'Новость Четыре', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.\r\n\r\nIn tation necessitatibus eam, tation munere ocurreret te per. Ad nec appetere efficiendi. Ei sea vitae diceret, discere euismod ne usu. Exerci delenit an duo. Ut pro atqui doctus dolores, porro habemus mentitum nec ad. Impedit constituam suscipiantur mel in. Ea qui alterum neglegentur, ea eruditi adipisci mel, meis quando dicunt in pro.', '', 'спорт,фестиваль,контрабанда,финансовые прогнозы,финансовые новости', 0, 1),
(6, 3, 'news-dva', 'Новость Два', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.\r\n\r\nIn tation necessitatibus eam, tation munere ocurreret te per. Ad nec appetere efficiendi. Ei sea vitae diceret, discere euismod ne usu. Exerci delenit an duo. Ut pro atqui doctus dolores, porro habemus mentitum nec ad. Impedit constituam suscipiantur mel in. Ea qui alterum neglegentur, ea eruditi adipisci mel, meis quando dicunt in pro.', '', 'погода,фестиваль,рок', 0, 1),
(7, 2, 'news-five', 'Новость Пять', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.\r\n\r\nIn tation necessitatibus eam, tation munere ocurreret te per. Ad nec appetere efficiendi. Ei sea vitae diceret, discere euismod ne usu. Exerci delenit an duo. Ut pro atqui doctus dolores, porro habemus mentitum nec ad. Impedit constituam suscipiantur mel in. Ea qui alterum neglegentur, ea eruditi adipisci mel, meis quando dicunt in pro.', '', 'погода,фестиваль,контрабанда', 0, 1),
(8, 2, 'news-six', 'Новость Шесть', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.\r\n\r\nIn tation necessitatibus eam, tation munere ocurreret te per. Ad nec appetere efficiendi. Ei sea vitae diceret, discere euismod ne usu. Exerci delenit an duo. Ut pro atqui doctus dolores, porro habemus mentitum nec ad. Impedit constituam suscipiantur mel in. Ea qui alterum neglegentur, ea eruditi adipisci mel, meis quando dicunt in pro.', '', 'погода,фестиваль,контрабанда,спорт,финансовые прогнозы,финансовые новости', 0, 1),
(9, 3, 'news-seven', 'Новость Семь', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.\r\n\r\nIn tation necessitatibus eam, tation munere ocurreret te per. Ad nec appetere efficiendi. Ei sea vitae diceret, discere euismod ne usu. Exerci delenit an duo. Ut pro atqui doctus dolores, porro habemus mentitum nec ad. Impedit constituam suscipiantur mel in. Ea qui alterum neglegentur, ea eruditi adipisci mel, meis quando dicunt in pro.', '', 'здоровье,погода,фестиваль,контрабанда,финансовые прогнозы,финансовые новости', 0, 1),
(10, 3, 'news-eight', 'Новость Восемь', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.\r\n\r\nIn tation necessitatibus eam, tation munere ocurreret te per. Ad nec appetere efficiendi. Ei sea vitae diceret, discere euismod ne usu. Exerci delenit an duo. Ut pro atqui doctus dolores, porro habemus mentitum nec ad. Impedit constituam suscipiantur mel in. Ea qui alterum neglegentur, ea eruditi adipisci mel, meis quando dicunt in pro.', '', 'погода,фестиваль,контрабанда', 0, 1),
(11, 3, 'news-nine', 'Новость Девять', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.', 'Lorem ipsum dolor sit amet, ex mei bonorum maiestatis voluptaria. An duo stet minim iisque. Cum te evertitur incorrupte, ea eos graeci complectitur. Perfecto intellegat qui id. Dico altera assueverit eum ne, volumus democritum usu ad.\r\n\r\nIn tation necessitatibus eam, tation munere ocurreret te per. Ad nec appetere efficiendi. Ei sea vitae diceret, discere euismod ne usu. Exerci delenit an duo. Ut pro atqui doctus dolores, porro habemus mentitum nec ad. Impedit constituam suscipiantur mel in. Ea qui alterum neglegentur, ea eruditi adipisci mel, meis quando dicunt in pro.', '', 'погода,фестиваль,контрабанда', 0, 1),
(25, 3, 'test', 'tets', 'test', 'test', 'news1.jpg', 'test', 0, 1),
(26, 3, 'testqq', 'wwww', 'aweqwe', 'qweqw', '', 'qwe', 0, 1),
(27, 3, 'testqqq', 'wwww', 'aweqwe', 'qweqw', '', 'qwe', 0, 1),
(28, 3, 'test1qqq', 'wwww', 'aweqwe', 'qweqw', '', 'qwe', 0, 1),
(29, 3, 'testtest', 'wwww', 'aweqwe', 'qweqw', '', 'qwe', 0, 1),
(30, 3, 'qweqweqwe', 'qweqwe', 'qweqwe', 'qweqwe', '', 'qweqwe', 0, 1),
(31, 3, '1qqq', 'wwww', 'aweqwe', 'qweqw', 'favicon.ico', 'qwe', 0, 1),
(32, 3, 'qweqwe', 'qweqweqwe', 'qweqwe', 'wqeqwe', '', 'qweqwe', 0, 1),
(33, 3, 'ddfgdfg', 'dfgdfg', 'qwewqe', 'wqeqwe', 'favicon.ico', 'sdfds', 0, 1),
(34, 3, 'news-lv2', 'новость Львова', 'Reprimique instructior vel et. Commune evertitur at his, nullam aperiri omnesque cu sed, ex vim veri nominavi. Eum ei falli quaestio. Ei eam atomorum dignissim, mazim salutandi in nec.', 'Reprimique instructior vel et. Commune evertitur at his, nullam aperiri omnesque cu sed, ex vim veri nominavi. Eum ei falli quaestio. Ei eam atomorum dignissim, mazim salutandi in nec.\r\n\r\nQuas maiorum intellegam pri ad, id brute aeque abhorreant nec. Nobis possit theophrastus sed cu, duis solum ad pro, ei reque necessitatibus eam. Per tale tempor an. Duo te debitis lobortis.', 'pic01.jpg', '', 0, 1),
(35, 3, 'newslv2', 'новость Львова', 'Reprimique instructior vel et. Commune evertitur at his, nullam aperiri omnesque cu sed, ex vim veri nominavi. Eum ei falli quaestio. Ei eam atomorum dignissim, mazim salutandi in nec.', 'Reprimique instructior vel et. Commune evertitur at his, nullam aperiri omnesque cu sed, ex vim veri nominavi. Eum ei falli quaestio. Ei eam atomorum dignissim, mazim salutandi in nec.\r\n\r\nQuas maiorum intellegam pri ad, id brute aeque abhorreant nec. Nobis possit theophrastus sed cu, duis solum ad pro, ei reque necessitatibus eam. Per tale tempor an. Duo te debitis lobortis.', 'img_chania.jpg', '', 0, 1),
(36, 1, 'finance-news', 'Финансовые новости Одессы', 'Cum fabellas scriptorem et, mei vidit prodesset ex. Pericula gloriatur delicatissimi at pri, causae assentior in eam, te legimus albucius vix. Atqui labore sea cu. Omnis necessitatibus his ex. ', 'Cum fabellas scriptorem et, mei vidit prodesset ex. Pericula gloriatur delicatissimi at pri, causae assentior in eam, te legimus albucius vix. Atqui labore sea cu. Omnis necessitatibus his ex. Nobis pertinax democritum cum eu, ornatus adipisci sea ei, est id saepe labitur intellegam. Nisl graeci an cum, est id quot harum nostro, et exerci ornatus usu.', '', 'финансовые новости, контрабанда', 0, 1),
(37, 2, 'finance-news-kyiv', 'Финансовые новости Киева', 'Ex solet praesent vix, omnis ignota reformidans in vel. Nec in nobis doctus. Putant dolores repudiare ei eam, nam no docendi adolescens honestatis. Ea ius splendide elaboraret.', 'Ex solet praesent vix, omnis ignota reformidans in vel. Nec in nobis doctus. Putant dolores repudiare ei eam, nam no docendi adolescens honestatis. Ea ius splendide elaboraret. Quo in erat quas legimus, posse zril nostrum eu his, vim ex corrumpit honestatis. Minimum repudiare iracundia ne duo, eam dolorem nostrum salutatus ad. Est ex suas nonumy, ei torquatos percipitur intellegam qui, nec autem aliquip qualisque ut.', '', 'финансовые новости, финансовая погода', 0, 1),
(38, 1, 'finance-news-1', 'Экономика ', 'Cum fabellas scriptorem et, mei vidit prodesset ex. Pericula gloriatur delicatissimi at pri, causae assentior in eam, te legimus albucius vix.', 'Cum fabellas scriptorem et, mei vidit prodesset ex. Pericula gloriatur delicatissimi at pri, causae assentior in eam, te legimus albucius vix. Atqui labore sea cu. Omnis necessitatibus his ex. Nobis pertinax democritum cum eu, ornatus adipisci sea ei, est id saepe labitur intellegam. Nisl graeci an cum, est id quot harum nostro, et exerci ornatus usu.', '', 'финансовые прогнозы', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `alias` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text,
  `is_published` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `alias`, `title`, `content`, `is_published`) VALUES
(1, 'about', 'About Us', 'Test content', 1),
(2, 'test', 'Test Page', 'Another Test page', 1),
(6, 'New page', 'Page new', 'Content new page', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `login` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(45) NOT NULL DEFAULT 'admin',
  `password` char(32) NOT NULL,
  `is_active` tinyint(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `role`, `password`, `is_active`) VALUES
(1, 'admin', 'rocktop911@gmail.com', 'admin', 'd394ed530c4c024b0d4333cf196d4e45', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
