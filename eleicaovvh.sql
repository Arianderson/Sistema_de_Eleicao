-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Abr-2023 às 21:12
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eleicaovvh`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acionistas`
--

CREATE TABLE `acionistas` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `crm` varchar(6) NOT NULL,
  `senha` int(6) NOT NULL,
  `acao` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `acionistas`
--

INSERT INTO `acionistas` (`id`, `nome`, `crm`, `senha`, `acao`) VALUES
(1, 'João', '162570', 162570, 1600),
(2, 'Administrador', '111111', 111111, 0),
(4, 'O Rei Naldo', '696969', 696969, 2655),
(5, 'kassiane', '252525', 252525, 2655),
(6, 'luan', '141414', 141414, 2700),
(7, 'Ari', '161616', 161616, 1500);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cand_adms`
--

CREATE TABLE `cand_adms` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `crm` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `quant_votos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cand_adms`
--

INSERT INTO `cand_adms` (`id`, `nome`, `crm`, `codigo`, `quant_votos`) VALUES
(1, 'Pedrinho do Grau', 102602, 11, 0),
(2, 'O Rei Naldo', 696969, 69, 0),
(3, 'kassiane', 252525, 25, 0),
(4, 'luan', 141414, 14, 0),
(5, 'joão', 162570, 16, 0),
(6, 'Ari', 181818, 18, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cand_fisc`
--

CREATE TABLE `cand_fisc` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `crm` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `quant_votos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cand_fisc`
--

INSERT INTO `cand_fisc` (`id`, `nome`, `crm`, `codigo`, `quant_votos`) VALUES
(1, 'Arthur', 131313, 13, 0),
(2, 'Matheus', 171717, 17, 0),
(3, 'Gustavo', 101010, 10, 0),
(4, 'Alvaro', 999999, 99, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acionistas`
--
ALTER TABLE `acionistas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cand_adms`
--
ALTER TABLE `cand_adms`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cand_fisc`
--
ALTER TABLE `cand_fisc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acionistas`
--
ALTER TABLE `acionistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `cand_adms`
--
ALTER TABLE `cand_adms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `cand_fisc`
--
ALTER TABLE `cand_fisc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
