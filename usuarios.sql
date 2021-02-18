-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 18/02/2021 às 17:03
-- Versão do servidor: 8.0.23-0ubuntu0.20.04.1
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `paghiper`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `ativo` int DEFAULT NULL,
  `id_transacao` varchar(100) DEFAULT NULL,
  `url_boleto` text,
  `metodo` varchar(100) DEFAULT NULL,
  `descricao_produto` varchar(255) NOT NULL,
  `quantidade` varchar(255) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `gerado` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nome`, `cpf`, `telefone`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `ativo`, `id_transacao`, `url_boleto`, `metodo`, `descricao_produto`, `quantidade`, `item_id`, `preco`, `gerado`) VALUES
(105, 'rodrigo@gmail.com', 'Rodrigo', '10341131601', '35997460608', 'centro', '3', 'centro', 'centro', 'centro', 'mg', '37690000', 1, 'QTPLPC8TC7JNH13R', 'https://www.paghiper.com/checkout/boleto/32f00b9816a8f6646f102f1c1f2c4a0186c395c2378d62f14a42dbf193d0a4d43c3d622ce15c79bfcccb9c927e93e6cb0e1a3bf39656589b6957d7b4f422831d/QTPLPC8TC7JNH13R/38741448', 'boleto', 'caixa', '2', '3', '4000', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
