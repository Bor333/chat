-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Авг 09 2024 г., 10:44
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `message_id` int NOT NULL,
  `author` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `message_id`, `author`, `text`) VALUES
(7, 27, 'Игорь', 'Во как!');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `heading` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `heading`, `author`, `preview`, `text`) VALUES
(26, 'Московский зоопарк показал претендентку на роль невесты манула Тимофея', 'Светлана Акулова', 'Московский зоопарк активно обсуждает возможную невесту манула Тимофея', 'МОСКВА, 7 авг — РИА Новости. В Московском зоопарке обсуждают кандидатуру невесты для манула Тимофея, сообщила гендиректор зоосада Светлана Акулова в Telegram-канале. Она рассказала, что в Московский зоопарк приехали две подруги из Китая, большие поклонницы Тимофея. Они специально выбрались в Россию, чтобы проведать кота и посмотреть, как он живет. Фото, опубликованное Светланой Акуловой - РИА Новости, 1920, 07.08.2024 © Фото : Светлана Акулова/Telegram Поклонницы манула Тимофея, приехавшие из Китая \"Наши гостьи очень хотят, чтобы у Тимофея поскорее появилась невеста. Они сватают для Тимоши прекрасную Адель, которая живет в Новосибирске\", — написала Акулова. Она подчеркнула, что этот важный вопрос требует тщательной проработки и подготовки. Сейчас зоопарк находится на стадии активного обсуждения и организации всех необходимых условий.'),
(27, 'Детеныш домашнего яка в Московском зоопарке почти удвоил вес', 'Федор Иванов', 'Детеныш домашнего яка в Московском зоопарке почти удвоил вес и пробует сено', 'МОСКВА, 8 авг — РИА Новости. Детеныш домашнего яка родился в Московском зоопарке в июне, сейчас он почти удвоил вес при рождении и понемногу пробует сено и траву, сообщили в Telegram-канале столичного зоосада. ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_id` (`message_id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
