SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Структура таблицы `article`

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` char(50) NOT NULL,
  `text` text NOT NULL,
  `author` char(15) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `text`, `author`, `status`, `date`) VALUES
(1, 'Привет мир! 4', 'Привет мир!!!', '1', 1, '2017-10-15 15:37:20'),
(2, 'TEST', 'Задача организации, в особенности же дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание направлений прогрессивного развития. Не следует, однако забывать, что дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям. Не следует, однако забывать, что рамки и место обучения кадров требуют от нас анализа модели развития. Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач. Таким образом постоянный количественный рост и сфера нашей активности влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям. Не следует, однако забывать, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий.', '1', 0, '2017-10-15 15:37:20'),
(3, 'my new article', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '1', 1, '2017-10-16 15:42:24'),
(9, 'dasd', 'Разнообразный и богатый опыт постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке направлений прогрессивного развития. Не следует, однако забывать, что реализация намеченных плановых заданий способствует подготовки и реализации модели развития. Таким образом укрепление и развитие структуры играет важную роль в формировании дальнейших направлений развития. Товарищи! дальнейшее развитие различных форм деятельности способствует подготовки и реализации дальнейших направлений развития. Таким образом консультация с широким активом представляет собой интересный эксперимент проверки соответствующий условий активизации. Значимость этих проблем настолько очевидна, что консультация с широким активом позволяет выполнять важные задания по разработке дальнейших направлений развития.\r\n\r\nТаким образом постоянное информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Задача организации, в особенности же постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки соответствующий условий активизации. Товарищи! дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание новых предложений. Повседневная практика показывает, что рамки и место обучения кадров требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач. Повседневная практика показывает, что реализация намеченных плановых заданий позволяет оценить значение соответствующий условий активизации. Идейные соображения высшего порядка, а также постоянное информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа дальнейших направлений развития.\r\n\r\nИдейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Идейные соображения высшего порядка, а также сложившаяся структура организации позволяет оценить значение систем массового участия. Таким образом рамки и место обучения кадров способствует подготовки и реализации существенных финансовых и административных условий. Значимость этих проблем настолько очевидна, что рамки и место обучения кадров в значительной степени обуславливает создание дальнейших направлений развития.', '1', 1, '2017-10-27 01:35:59'),
(10, 'new article', 'Повседневная практика показывает, что сложившаяся структура организации позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности требуют определения и уточнения систем массового участия. Идейные соображения высшего порядка, а также реализация намеченных плановых заданий требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Идейные соображения высшего порядка, а также постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки систем массового участия. Равным образом сложившаяся структура организации позволяет выполнять важные задания по разработке существенных финансовых и административных условий.', '1', 1, '2017-10-27 14:17:48'),
(13, 'Проверка блога', 'Всем привет!', '1', 1, '2017-11-10 12:58:40'),
(14, '223', 'dsadsadasd', '1', 0, '2018-02-16 19:04:09'),
(12, 'my first articke', 'oooooooooooooooooooooooo', '1', 1, '2017-10-27 16:02:51'),
(11, 'my new artlicle', 'text tex text', '1', 1, '2017-10-27 15:19:28');

-- --------------------------------------------------------

--
-- Структура таблицы `article_comment`
--

CREATE TABLE `article_comment` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idArticle` int(11) NOT NULL,
  `text` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article_comment`
--

INSERT INTO `article_comment` (`id`, `idUser`, `idArticle`, `text`, `date`) VALUES
(1, 1, 3, 'text zhenia', '2017-10-15 15:14:10'),
(2, 1, 3, 'text other user', '2017-10-16 16:05:07'),
(3, 1, 2, 'text for 2 article', '2017-10-16 05:10:08'),
(14, 1, 2, '888888888888888888888888', '2017-10-27 14:25:22'),
(13, 1, 2, 'dsadsad', '2017-10-27 14:25:04'),
(7, 1, 2, '9999', '2017-10-17 15:45:13'),
(8, 1, 3, '88888ttt', '2017-10-17 15:47:46'),
(9, 1, 3, 'jjjjjjjjjjjjjjjjjjjjj', '2017-10-17 15:49:02'),
(10, 1, 1, '22', '2017-10-26 15:04:34'),
(11, 1, 9, '000', '2017-10-27 02:01:59'),
(12, 1, 9, '999', '2017-10-27 02:03:12'),
(15, 1, 10, 'sdadasdasdasd', '2017-10-27 14:26:15'),
(16, 1, 2, 'my comment 555', '2017-10-27 15:55:52'),
(17, 1, 2, 'yo', '2017-11-10 12:50:40'),
(18, 1, 2, 'yo2', '2017-11-10 12:51:03'),
(19, 1, 1, 'kjhgjhgjh', '2017-11-11 17:50:02'),
(20, 1, 1, 'dfdsfdsfdsf', '2017-11-23 15:40:28'),
(21, 10, 2, 'xD', '2018-02-16 11:33:02'),
(22, 1, 3, '', '2018-02-16 18:21:27'),
(23, 1, 3, '111', '2018-02-16 18:21:31');

-- --------------------------------------------------------

--
-- Структура таблицы `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `mailTitle` char(20) NOT NULL,
  `mailText` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mail`
--

INSERT INTO `mail` (`id`, `userId`, `mailTitle`, `mailText`, `status`, `date`) VALUES
(21, 1, '1111', '22222', 0, '2018-02-16 16:29:24');

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` char(50) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`id`, `title`, `text`, `date`) VALUES
(1, 'About us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n\r\nIt was popularised in the 1960s with the release Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nThere are many variations of passages of Lorem IpsumLorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of.', '2017-10-16 17:03:11');

-- --------------------------------------------------------

--
-- Структура таблицы `site_info`
--

CREATE TABLE `site_info` (
  `id` int(11) NOT NULL,
  `contactName` char(15) NOT NULL,
  `contactPosition` int(15) NOT NULL,
  `contactAdress` int(25) NOT NULL,
  `contactAdress2_1` int(25) NOT NULL,
  `contactAdress2_2` int(25) NOT NULL,
  `contactAdress2_3` int(25) NOT NULL,
  `contactAdress2_4` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `pass` char(250) NOT NULL,
  `userGroup` tinyint(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `photo` char(50) NOT NULL,
  `regDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `userGroup`, `status`, `photo`, `regDate`) VALUES
(1, 'Yevhenii', 'tzhenia31@gmail.com', '123456', 10, 1, 'profile_small.jpg', '2017-10-14'),
(2, 'Иван', 'test@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', 1, 1, 'profile_small.jpg', '2017-10-14'),
(5, 'mikola', 'mikola@gmail.com', '47fdeb2966d7363f81813639ecf53bb7', 1, 1, '', '2017-10-27'),
(10, 'test', 'user@example.com', '123123', 10, 1, '', '2018-02-16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_comment`
--
ALTER TABLE `article_comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `article_comment`
--
ALTER TABLE `article_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
