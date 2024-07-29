-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08/07/2024 às 03:22
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `assistencia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matricula` int NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` int NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `matricula`, `senha`, `telefone`) VALUES
('lorenzodreis@gmail.com', 'teste@gmai.com', 22, '123', 1),
('lorenzodreis@gmail.com', 'lorenzo.2022310934@aluno.iffar.edu.br', 111, '123', 0),
('lorenzodreis@gmail.com', 'teste@gmai.com', 224, '123', 1),
('lorenzodreis@gmail.com', '2@w', 333, '123', 22),
('lorenzodreis@gmail.com', '2@w', 3332, '123', 22),
('lorenzodreis@gmail.com', '2@w', 33322, '123', 22),
('lorenzodreis@gmail.com', '2@w', 333222, '123', 22),
('lorenzodreis@gmail.com', '2@w', 3332222, '123', 22),
('lorenzodreis@gmail.com', '2@w', 33322226, '123', 22),
('bruno', 'bruno@123', 2022310863, '123', 2147483647),
('Lorenzo', 'lorenzo.2022310934@aluno.iffar.edu.br', 2022310934, '123', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
