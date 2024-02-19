-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 19 2024 г., 22:30
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
-- База данных: `tropical`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `surname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `password` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `roles` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `surname`, `name`, `email`, `number`, `password`, `roles`) VALUES
(1, 'Беброва', 'Мяу', 'bebra@mail.cum', '8 800 555 2525', '$2y$10$L/MHzzd5lN4uHDd347Tpq.DPfBP8K1WuUQt62gIaMZbYo.GZOZni2', 0),
(2, 'Горин', 'Гена', 'gena@gena.cum', '8 909 272 82 01', '$2y$10$BdtekUr5YgGhaV9re2d5WeGLkmbPn4Bo4uPd8EwYpYQ0/m65b41cG', 0),
(3, 'Морий', 'Арка', 'arka@mail.cum', '9 876 25 13', '$2y$10$0olQyAzVmj4fSaKJ7BHfPuBIRtCFsuOd2hxfQaT0ZOnNHscrYQ9v6', 0),
(4, 'Мава', 'Лола', 'lol@mail.xum', '8 903 455 23 41', '$2y$10$/x4y7/gn3jKwMjEB4nALFe9QAUUsRrfubV3M/LpFhl/DfmYxSvqL2', 0),
(5, 'Пиро', 'Топор', 'topor@mail.cum', '8 902 777 77 77', '$2y$10$0U1HKWlDJgSHBp5vkDfom.DN90aBThnZJighq0PczNecSBLIiMDwi', 0),
(6, 'Йошикаге', 'Кира', '123@123.cum', '8 900 999 99 99', '$2y$10$KMrEImNKlfBDboxXb2iRXO5Yo8J/b8pSM9UeMxStm19Nr0CWf/2tK', 0),
(7, 'Биба', '123', '1234@1234', '1234', '$2y$10$B0gHQCliZVRUfFCoLqjmsOs3zeK9R7ziP2UCwEJfp7cScZvjtg/Km', 1),
(8, 'Олеговна', 'Олега', '123@122', '123', '$2y$10$oc3a26hYqbE4OQhu0/xW.uzEe.GtiizdJhgJO9rVtP7OTq25vsTby', 0),
(9, 'Гора', 'Бибов', '1233@133', '123321123', '$2y$10$odyt189mBRANI58hhfIH8OgBA4KBn.4oW4e01jcN2NGNfSOoAkV56', 0),
(10, 'Ростилов', 'Паша', 'rost@rost', '8 800 555 35 55', '$2y$10$xd6156VT2peckVhLOdJph.ewHGyjYiDG/C0RMbxZyudWaDNZrlI9i', 0),
(11, 'Нечипоренко', 'Роман', 'kis@mail.ru', '8 800 555 35 35', '$2y$10$4nFY33PHopZcJsmekUYCYe7MhH4849IXPP/wfVnKYL97AWxrtjL6i', 0),
(12, 'Андреев', 'Олег', 'apas@mai.ru', '88005553535', '$2y$10$7tc9.5jvFoKr33WEsXPRNO5142u1OsjJYuabypMgp0fzthk2vEjzi', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
