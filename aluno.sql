-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Ago-2018 às 03:39
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aluno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE `tb_aluno` (
  `id_alu` int(11) NOT NULL,
  `nome_alu` varchar(150) NOT NULL COMMENT 'Nome',
  `email_alu` varchar(150) NOT NULL COMMENT 'E-mail'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Aluno';

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`id_alu`, `nome_alu`, `email_alu`) VALUES
(41, 'Samuca', 'teste@teste.com'),
(42, 'Teste', 'teste@teste.net'),
(43, 'Teste', 'teste@teste.net'),
(45, 'Teste', 'teste@teste.net'),
(47, 'Teste', 'teste@teste.net'),
(50, 'Teste', 'teste@teste.net'),
(51, 'Teste', 'teste@abacaxi.123'),
(55, 'sdlkfjsdkl', 'açsifsadçlfjisd'),
(56, 'sdlkfjsdkl', 'açsifsadçlfjisd'),
(57, 'sdlkfjsdkl', 'açsifsadçlfjisd'),
(58, 'sdlkfjsdkl', 'açsifsadçlfjisd'),
(59, 'sdlkfjsdkl', 'açsifsadçlfjisd'),
(60, 'sdlkfjsdkl', 'açsifsadçlfjisd'),
(61, 'sdlkfjsdkl', 'açsifsadçlfjisd'),
(62, 'sdlkfjsdkl', 'açsifsadçlfjisd'),
(63, 'sdlkfjsdkl', 'açsifsadçlfjisd'),
(64, 'sdlkfjsdkl', 'açsifsadçlfjisd'),
(65, 'dgdfgdf', 'dfgdfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD PRIMARY KEY (`id_alu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aluno`
--
ALTER TABLE `tb_aluno`
  MODIFY `id_alu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
