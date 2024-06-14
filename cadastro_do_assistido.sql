-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/06/2024 às 08:41
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE DATABASE assistido;

USE assistido;

--
-- Banco de dados: `assistido`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_do_assistido`
--

CREATE TABLE `cadastro_do_assistido` (
  `Nome_Completo` varchar(50) NOT NULL,
  `Idade_Cog` int(2) NOT NULL,
  `Data_Nascimento` date NOT NULL,
  `Encaminhamento` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `Nome_Responsavel` varchar(50) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `Telefone` varchar(15) NOT NULL,
  `Grau_Parentesco` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_do_assistido`
--

INSERT INTO `cadastro_do_assistido` (`Nome_Completo`, `Idade_Cog`, `Data_Nascimento`, `Encaminhamento`, `id`, `Nome_Responsavel`, `CPF`, `Telefone`, `Grau_Parentesco`) VALUES
('Luana Ferri', 15, '2005-04-07', 0, 9, 'Marina D.', 2147483647, '12345678912', 'mãe');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_do_assistido`
--
ALTER TABLE `cadastro_do_assistido`
  ADD PRIMARY KEY (`id`,`CPF`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_do_assistido`
--
ALTER TABLE `cadastro_do_assistido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
