-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/09/2023 às 20:48
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
-- Banco de dados: `bdcadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `admin` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`usuario`, `senha`, `admin`) VALUES
('123123', '1231', ''),
('123123123', '12312312', '0'),
('123123124', '314523', ''),
('22', '123', '0'),
('admin@admin.com', '123', 's'),
('allan', '123', '0'),
('allan1', '123', ''),
('allan123', '123123123', '0'),
('allan123123123', '123123123', '0'),
('allan1232', '123123', '0'),
('allan12345', '123', ''),
('allan132', '123', ''),
('allanbcx', '123', ''),
('allandsas', '123', ''),
('allanGS', '123', ''),
('allanzx', '123', ''),
('aszl', '314523', ''),
('azul', '123', '0'),
('azul321', 'sss', ''),
('azul3211', 'sss', ''),
('azuls', '314523', ''),
('sass', 'sss', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdados`
--

CREATE TABLE `tbdados` (
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbdados`
--

INSERT INTO `tbdados` (`nome`, `sobrenome`, `telefone`, `email`) VALUES
('pessoa1', '', '', ''),
('azul', 'cristo', '(13) 981265690', 'allaon@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblogin`
--

CREATE TABLE `tblogin` (
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `admin` char(1) NOT NULL,
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `dt_nasc` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `numero` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblogin`
--

INSERT INTO `tblogin` (`email`, `senha`, `admin`, `id`, `nome`, `cpf`, `dt_nasc`, `telefone`, `endereco`, `cep`, `numero`) VALUES
('admin@admin.com', '123', 's', 0, 'admin', 0, '0001-01-01', '', '', '', 0),
('yagogames@gmail.com', '1234', '', 2, 'Yago', 0, '2015-05-10', '', 'gominho', '', 0),
('radio@gmail.com', '489621', '', 13, 'Junior', 0, '1568-05-08', '', '', '', 0),
('gabriel@gmail.com', 'ashd', '', 17, 'Gabriel Almeida', 0, '2001-05-19', '', '', '', 0),
('randomggupkilla@gmail.com', '7895', '', 19, 'Santos ', 0, '2003-08-18', '', '', '', 0),
('s2revenger390@gmail.com', '123', '', 20, 'allan2323', 0, '2023-08-31', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, 'azul', '123', 'Liberado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`usuario`);

--
-- Índices de tabela `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
