-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 30, 2023 at 08:27 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astron`
--

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tamanho` int(11) NOT NULL,
  `ativo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`id`, `cnpj`, `nome`, `cep`, `email`, `tamanho`, `ativo`) VALUES
(52, '00.000.000/0001-01', 'Teste 1', '00000-001', 'teste_1@email.com', 0, 'Ativo'),
(53, '00.000.000/0001-02', 'Teste 2', '00000-002', 'teste_2@email.com', 1, 'Inativo'),
(54, '00.000.000/0001-03', 'Teste 3', '00000-003', 'teste_3@email.com', 1, 'Inativo'),
(55, '00.000.000/0001-04', 'Teste 4', '00000-004', 'teste_4@email.com', 2, 'Ativo'),
(56, '00.000.000/0001-05', 'Teste 5', '00000-005', 'teste_5@email.com', 0, 'Ativo'),
(57, '00.000.000/0001-06', 'Teste 6', '00000-006', 'teste_6@email.com', 0, 'Ativo'),
(58, '00.000.000/0001-07', 'Teste 7', '00000-007', 'teste_7@email.com', 0, 'Ativo'),
(59, '00.000.000/0001-08', 'Teste 8', '00000-008', 'teste_8@email.com', 2, 'Ativo'),
(60, '00.000.000/0001-09', 'Teste 9', '00000-009', 'teste_9@email.com', 1, 'Inativo'),
(61, '00.000.000/0001-10', 'Teste 10', '00000-010', 'teste_10@email.com', 1, 'Ativo'),
(62, '00.000.000/0001-11', 'Teste 11', '00000-012', 'teste_11@email.com', 2, 'Ativo'),
(63, '00.000.000/0001-12', 'Teste 12', '00000-013', 'teste_12@email.com', 0, 'Ativo'),
(64, '00.000.000/0001-13', 'Teste 13', '00000-014', 'teste_13@email.com', 1, 'Ativo'),
(65, '00.000.000/0001-14', 'Teste 14', '00000-015', 'teste_14@email.com', 2, 'Inativo'),
(66, '00.000.000/0001-15', 'Teste 15', '00000-016', 'teste_15@email.com', 1, 'Ativo'),
(67, '00.000.000/0001-16', 'Teste 16', '00000-017', 'teste_16@email.com', 0, 'Ativo'),
(68, '00.000.000/0001-17', 'Teste 17', '00000-018', 'teste_17@email.com', 1, 'Ativo'),
(69, '00.000.000/0001-18', 'Teste 18', '00000-019', 'teste_18@email.com', 2, 'Ativo'),
(70, '00.000.000/0001-19', 'Teste 19', '00000-020', 'teste_19@email.com', 1, 'Ativo'),
(71, '00.000.000/0001-20', 'Teste 20', '00000-021', 'teste_20@email.com', 1, 'Inativo'),
(72, '00.000.000/0001-21', 'Teste 21', '00000-022', 'teste_21@email.com', 0, 'Inativo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
