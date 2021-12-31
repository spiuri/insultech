-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2021 às 19:14
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `purchasesdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `sangue` varchar(3) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `nasc` date DEFAULT NULL,
  `condicao1` int(3) NOT NULL DEFAULT 70,
  `codicao2a` int(3) NOT NULL DEFAULT 70,
  `codicao2b` int(3) NOT NULL DEFAULT 150,
  `codicao3a` int(3) NOT NULL DEFAULT 150,
  `codicao3b` int(3) NOT NULL DEFAULT 200,
  `codicao4` int(3) NOT NULL DEFAULT 200,
  `aplicacao1` int(4) NOT NULL DEFAULT 4,
  `aplicacao2` int(4) NOT NULL DEFAULT 6,
  `aplicacao3` int(4) NOT NULL DEFAULT 8,
  `aplicacao4` int(4) NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `passwd`, `sangue`, `genero`, `nasc`, `condicao1`, `codicao2a`, `codicao2b`, `codicao3a`, `codicao3b`, `codicao4`, `aplicacao1`, `aplicacao2`, `aplicacao3`, `aplicacao4`) VALUES
(18, 'Matos', 'iuri12354@gmail.com', '132', 'A+', 'Masculino', '2021-12-09', 70, 71, 150, 151, 200, 201, 2, 4, 6, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `customer_id` int(11) NOT NULL,
  `insulina` int(11) NOT NULL,
  `dia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `orders`
--

INSERT INTO `orders` (`id`, `description`, `amount`, `customer_id`, `insulina`, `dia`) VALUES
(93, 'Café da manhã', 110, 18, 4, '2021-11-30');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_order` (`customer_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_id_order` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
