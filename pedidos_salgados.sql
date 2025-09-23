-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/09/2025 às 22:11
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desenvolvimento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos_salgados`
--

CREATE TABLE `pedidos_salgados` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_salgado` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedidos_salgados`
--

INSERT INTO `pedidos_salgados` (`id`, `id_pedido`, `id_salgado`, `quantidade`, `subtotal`) VALUES
(1, 21, 9, 100, 250),
(2, 21, 8, 100, 180),
(3, 21, 5, 50, 65),
(4, 22, 2, 50, 111.5),
(5, 22, 4, 50, 70),
(6, 22, 8, 50, 90),
(7, 23, 6, 100, 170),
(8, 23, 8, 100, 180);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pedidos_salgados`
--
ALTER TABLE `pedidos_salgados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedidos_salgados`
--
ALTER TABLE `pedidos_salgados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
