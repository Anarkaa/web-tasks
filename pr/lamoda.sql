-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 23 2018 г., 11:26
-- Версия сервера: 10.1.36-MariaDB
-- Версия PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lamoda`
--

-- --------------------------------------------------------

--
-- Структура таблицы `s`
--

CREATE TABLE `s` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `s`
--

INSERT INTO `s` (`ID`, `Image`, `Name`, `Price`) VALUES
(1, 's1.jpg', 'Befree', 6500),
(2, 's2.jpg', 'Violeta by Mango', 12990),
(3, 's3.jpg', 'Sela', 11000);

-- --------------------------------------------------------

--
-- Структура таблицы `t`
--

CREATE TABLE `t` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `t`
--

INSERT INTO `t` (`ID`, `Image`, `Name`, `Price`) VALUES
(1, 't1.jpg', 'Tutto Bene', 32000),
(2, 't2.jpg', 'Savage', 17500),
(3, 't3.jpg', 'Topshop', 22000);
-- --------------------------------------------------------

--
-- Структура таблицы `s`
--

CREATE TABLE `d` (
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `s`
--

INSERT INTO `d` (`ID`, `Image`, `Name`, `Price`) VALUES
(1, 'd1.jpg', 'LOST INK', 21000),
(2, 'd2.jpg', 'oodji', 10490),
(3, 'd3.jpg', 'Tutto Bene', 25500);
-- --------------------------------------------------------

--
-- Структура таблицы `s`
--

CREATE TABLE `c` (
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `s`
--

INSERT INTO `c` (`ID`, `Image`, `Name`, `Price`) VALUES
(1, 'c1.jpg', 'Piazza Italia', 6500),
(2, 'c2.jpg', 'Nike', 57000),
(3, 'c3.jpg', 'Keddo', 18000);
-- --------------------------------------------------------

--
-- Структура таблицы `s`
--

CREATE TABLE `f` (
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `s`
--

INSERT INTO `f` (`ID`, `Image`, `Name`, `Price`) VALUES
(1, 'f1.jpg', 'Happy family', 18500),
(2, 'f2.jpg', 'Ideal Shoes', 18500),
(3, 'f3.jpg', 'Ideal Shoes', 18500);
-- --------------------------------------------------------

--
-- Структура таблицы `s`
--

CREATE TABLE `r` (
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `s`
--

INSERT INTO `r` (`ID`, `Image`, `Name`, `Price`) VALUES
(1, 'r1.jpg', 'Fabretti', 11000),
(2, 'r2.jpg', 'Polo Ralph Lauren', 39000),
(3, 'r3.jpg', 'Dorothy Perkins', 3750);
-- --------------------------------------------------------

--
-- Структура таблицы `s`
--

CREATE TABLE `p` (
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `s`
--

INSERT INTO `p` (`ID`, `Image`, `Name`, `Price`) VALUES
(1, 'p1.jpg', 'Levis', 11500),
(2, 'p2.jpg', 'Vitacci', 12990),
(3, 'p3.jpg', 'Vera Victoria Vito', 9000);



--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `s`
--
ALTER TABLE `s`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `t`
--
ALTER TABLE `t`
  ADD PRIMARY KEY (`ID`);
  ----
-- Индексы таблицы `s`
--
ALTER TABLE `d`
  ADD PRIMARY KEY (`ID`);

-- Индексы таблицы `s`
--
ALTER TABLE `c`
  ADD PRIMARY KEY (`ID`);
  --
-- Индексы таблицы `s`
--
ALTER TABLE `f`
  ADD PRIMARY KEY (`ID`);
  --
-- Индексы таблицы `s`
--
ALTER TABLE `r`
  ADD PRIMARY KEY (`ID`);
  --
-- Индексы таблицы `s`
--
ALTER TABLE `p`
  ADD PRIMARY KEY (`ID`);


--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `s`
--
ALTER TABLE `s`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `t`
--
ALTER TABLE `t`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `s`
--
ALTER TABLE `d`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `s`
--
ALTER TABLE `c`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `s`
--
ALTER TABLE `f`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `s`
--
ALTER TABLE `r`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `s`
--
ALTER TABLE `p`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
