-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 03:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vipturismo`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`id`, `login`, `senha`) VALUES
(8, 'SiVipTurismo', '32ac9d22c64bc645a06c61fe5a3b893b');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `idCli` int(11) NOT NULL,
  `nomeCli` varchar(50) NOT NULL,
  `telCli` varchar(15) NOT NULL,
  `emailCli` varchar(30) NOT NULL,
  `cpfCli` varchar(20) DEFAULT NULL,
  `obs` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `idCli` int(11) DEFAULT NULL,
  `idPac` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contate`
--

CREATE TABLE `contate` (
  `idCont` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` longtext NOT NULL,
  `telefone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pacote`
--

CREATE TABLE `pacote` (
  `idPac` int(11) NOT NULL,
  `nomePac` varchar(50) DEFAULT NULL,
  `descricaoPac` varchar(150) DEFAULT NULL,
  `categoriaPac` varchar(15) DEFAULT NULL,
  `valor` varchar(20) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pacote`
--

INSERT INTO `pacote` (`idPac`, `nomePac`, `descricaoPac`, `categoriaPac`, `valor`, `imagem`) VALUES
(35, 'gdg', 'Ã§~Ã§', 'PromoÃ§Ã£o', 'R$154,54', 'https://viagenscinematograficas.com.br/wp-content/uploads/2019/03/Cancun-Melhores-Praias-Riviera-Maya-Capa-740x431@2x.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCli`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD KEY `idCli` (`idCli`),
  ADD KEY `idPac` (`idPac`);

--
-- Indexes for table `contate`
--
ALTER TABLE `contate`
  ADD PRIMARY KEY (`idCont`);

--
-- Indexes for table `pacote`
--
ALTER TABLE `pacote`
  ADD PRIMARY KEY (`idPac`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contate`
--
ALTER TABLE `contate`
  MODIFY `idCont` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pacote`
--
ALTER TABLE `pacote`
  MODIFY `idPac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`idCli`) REFERENCES `cliente` (`idCli`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`idPac`) REFERENCES `pacote` (`idPac`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
