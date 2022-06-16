-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jun-2022 às 18:17
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `name_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `data` date NOT NULL,
  `image` varchar(150) NOT NULL,
  `category` varchar(40) DEFAULT NULL,
  `idCategory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `data`, `image`, `category`, `idCategory`) VALUES
(2, 'dfgdfg', 'dfgdfgdfg', '2022-06-23', 'uploads/', 'Cat-1', NULL),
(3, 'asdasdas', 'asdasd', '2022-06-20', 'uploads/', 'Cat-1', NULL),
(4, 'cvxcv', 'xcvxcvxcv', '2022-06-23', 'uploads/', 'Cat-2', NULL),
(5, 'sfsd', 'sdcsdc', '2022-06-15', 'uploads/', 'Cat-1', NULL),
(6, 'ghgfh', 'hgfhgh', '2022-06-20', 'uploads/', 'Cat-2', NULL),
(7, 'TITULO_8', 'descrição do post 8', '2022-06-22', '../uploads/', 'Cat-2', NULL),
(8, 'TITULO_7', 'descriçao do titulo 7', '2022-06-22', 'uploads/', 'Cat-1', NULL),
(9, 'dfefef', 'wefwef', '2022-06-21', 'uploads/download.jpg', 'Cat-2', NULL),
(10, 'asdsa', 'asdasdasd', '2022-06-23', 'uploads/download.jpg', 'Cat-1', NULL),
(11, 'TIVULO_9', 'descrição..........', '2022-06-29', 'uploads/img_ex2.jpg', 'Cat-1', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'João da Galera', 'VitãoGostosão', '123'),
(4, 'nome1', 'jv', '123'),
(6, 'NOME3', 'root', '7b24afc8bc80e548d66c'),
(7, 'Vitor', 'jvs', '202cb962ac59075b964b'),
(8, 'N1', 'jv', '202cb962ac59075b964b'),
(9, 'l', '1', 'c4ca4238a0b923820dcc'),
(10, 'Vítor', 'jv', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posts_category` (`idCategory`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_posts_category` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
