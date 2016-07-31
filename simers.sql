-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 07:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simers`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) UNSIGNED NOT NULL,
  `nome` varchar(90) NOT NULL,
  `sobrenome` varchar(120) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL COMMENT 'Senhas criptografadas utilizando bcrypt',
  `email` varchar(90) NOT NULL,
  `status` char(1) NOT NULL COMMENT '0 = Inativo;1 = Ativo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nome`, `sobrenome`, `usuario`, `senha`, `email`, `status`) VALUES
(1, 'João', 'Matias', 'joao.matias', '$2a$08$4AWt1p/lZ2ycj//oqmA59O9G4m3GfachgyfCSQVyvPS/myR9yBKyu', 'joao.matias@inmemorian.com', '1'),
(2, 'Maria', 'da Graça', 'maria.graca', '$2a$08$xJ11Zgd4b4qzo6iuq4FpO.f0E5Wbi1Rgzr3wfGiD72fjZzSLwe77.', 'maria.graca@inmemorian.com', '1'),
(3, 'Pedro', 'de Lara', 'pedro.lara', '$2a$08$/3nm5izDTa2ubqCML21FzOfWL0.NB2yOjKZjJXnyi0xDFxvlkAhZy', 'pedro.lara@inmemorian.com', '0'),
(4, 'Fulano', 'De Tal', 'fulano.tal', '$2a$08$hCudoyTvADN2QnV.xY5Xme3lFs0cT2RmQgGMgG4IThRl76bNmAj4e', 'fulano.tal@detal.com', '1'),
(5, 'Marcelo', 'Moura', 'marcelo.moura', '$2a$08$CORTRhoUrpPsM056l51BbeefOxiKLkh25nvpjk4yDPafFS.cjnXzm', 'marcelo.moura@teste.com.br', '1'),
(6, 'João', 'Maria', 'joao.maria', '$2a$08$yoJ.8GFaPVhE591njG7yiuog05CAxjeAcWP0YfNWWIPz93WlNd89W', 'joao.maria@terra.com.br', '0'),
(7, 'Luciano', 'Bobsin', 'luciano.bobsin', '$2a$08$u86zRZcRVfYuq5AFwVbw.uKSbxJV0S0v7wG8BVUKl8N7os7kUaCRK', 'luciano.bobsin@site.com', '1'),
(8, 'Pug', 'Nassal', 'pug', '$2a$08$nAqfxfJWVHMg8EhkaHcEZO754/f8ArATXj4FgLMuWwPu3BE543uYi', 'pug.nassal@terra.com', '0'),
(9, 'Vonnan', 'Niato', 'vonnan', '$2a$08$Fn7uUQ/Drtmis5NCRSydBOaPo8tYqzmGtXx7AV76rnvVt1vH5n7AC', 'vonnan@mail.com.br', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
