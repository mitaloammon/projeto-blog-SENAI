-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jun-2022 às 16:34
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `data` date NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `data`, `image`) VALUES
(1, 'asdasd', 'asdasdasd', '2022-06-21', 'uploads/'),
(2, 'dfgdfg', 'dfgdfgdfg', '2022-06-23', 'uploads/'),
(3, 'asdasdas', 'asdasd', '2022-06-20', 'uploads/'),
(4, 'cvxcv', 'xcvxcvxcv', '2022-06-23', 'uploads/'),
(5, 'sfsd', 'sdcsdc', '2022-06-15', 'uploads/'),
(6, 'ghgfh', 'hgfhgh', '2022-06-20', 'uploads/'),
(7, 'sdfsdf', 'sdfsdf', '2022-06-22', '../uploads/'),
(8, 'vcfvxfv', 'vcxv', '2022-06-22', 'uploads/'),
(9, 'dfefef', 'wefwef', '2022-06-21', 'uploads/download.jpg'),
(10, 'asdsa', 'asdasdasd', '2022-06-23', 'uploads/download.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
