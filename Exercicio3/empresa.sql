-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Out-2022 às 02:56
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `cod_cargo` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id`, `cod_cargo`, `descricao`) VALUES
(1, 1, 'jardineiro'),
(2, 2, 'Operador de Produção'),
(3, 3, 'Analista Fiscal'),
(4, 4, 'Auxiliar de escritorio'),
(5, 5, 'Mecanico'),
(6, 6, 'Analista de Sistemas'),
(7, 7, 'Gerente'),
(8, 8, 'Diretor'),
(9, 9, 'Porteiro'),
(10, 10, 'Analista de RH');

-- --------------------------------------------------------

--
-- Estrutura da tabela `func`
--

CREATE TABLE `func` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cod_cargo` int(11) NOT NULL,
  `re` int(11) NOT NULL,
  `empresa` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `func`
--

INSERT INTO `func` (`id`, `nome`, `cod_cargo`, `re`, `empresa`, `status`) VALUES
(1, 'Maria da Silva', 6, 1245, 1, 'A'),
(2, 'Benedito Costa', 10, 584, 1, 'A'),
(3, 'Joaquim Barbosa', 3, 847, 2, 'A'),
(4, 'Antonio Pereira', 7, 54, 1, 'D'),
(5, 'Joao Gomes', 9, 84, 1, 'A'),
(6, 'Luis Montanha', 7, 658, 2, 'A'),
(7, 'Isabel Silva', 9, 841, 1, 'D');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `func`
--
ALTER TABLE `func`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `func`
--
ALTER TABLE `func`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
