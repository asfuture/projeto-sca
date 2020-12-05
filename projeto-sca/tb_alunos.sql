-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Nov-2020 às 23:20
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_alunos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_alunos`
--

DROP TABLE IF EXISTS `tb_alunos`;
CREATE TABLE IF NOT EXISTS `tb_alunos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `nascimento` varchar(12) NOT NULL,
  `serie` int NOT NULL,
  `nivel` varchar(15) CHARACTER SET latin2 COLLATE latin2_general_ci NOT NULL,
  `escola` varchar(40) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `senha` varchar(4) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin2;

--
-- Extraindo dados da tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`id`, `nome`, `sobrenome`, `nascimento`, `serie`, `nivel`, `escola`, `sexo`, `senha`, `imagem`, `data`) VALUES
(3, 'alex santos', 'Santos', '2020-11-05', 11, 'Ensino Fundamen', 'luby', 'Femenino', '', '0ed94dbf202cad19517cf3a5e6cb26ca.png', '2020-11-26 20:09:17'),
(7, 'alex', '', '2020-12-04', 2, 'Ensino Médio', 'luby', 'Masculino', '', '', '0000-00-00 00:00:00'),
(8, 'Alessandra', 'Santos ', '1989-06-02', 3, 'Ensino Médio', 'Escola Municipal Jo?o Barbosa Neto ', 'Femenino', '', '', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
