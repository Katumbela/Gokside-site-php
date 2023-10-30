-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2023 às 00:27
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gokside`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `empresa` text NOT NULL,
  `tel` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `pacote` text NOT NULL,
  `pago` text NOT NULL,
  `quando` timestamp NOT NULL DEFAULT current_timestamp(),
  `api_key` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `empresa`, `tel`, `email`, `senha`, `pacote`, `pago`, `quando`, `api_key`) VALUES
(1, 'Joao Afonso Katombela', 'Gokside', '928134249', 'ja3328173@gmail.com', '1234', '1', 'Nao', '2023-07-27 06:11:12', 'jkhAS-ss234f43df_2cxas'),
(2, 'João', 'Gokside', '4213423423', 'joaokatumbela82@gmail.com', '12345678', '2', 'Nao', '2023-09-19 21:49:05', 'awscfeW_Fweferfgvr_sd'),
(3, 'wewerfed3', 'Gokside', '4213423423', 'if0_34962532@safsd.com', 'Lh7hpK6fneRQ1Y', '2', 'Nao', '2023-09-19 21:58:01', 'awscfeW_Fweferfgvr_sd');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
