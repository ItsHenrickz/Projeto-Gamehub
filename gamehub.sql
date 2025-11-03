-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/11/2025 às 19:09
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gamehub`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cliente` varchar(150) NOT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cliente`, `cidade`, `estado`) VALUES
(6, 'Jose', 'JP', 'PB'),
(7, 'Luiz Neto', 'Cariatá', 'Paraíba'),
(8, 'André Barbosa', 'Itabaiana', 'Paraíba');

-- --------------------------------------------------------

--
-- Estrutura para tabela `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `game` varchar(150) NOT NULL,
  `link` varchar(300) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `anoLancou` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `games`
--

INSERT INTO `games` (`id`, `game`, `link`, `imagem`, `anoLancou`) VALUES
(2, 'Hollow Knight', 'https://www.mediafire.com/file/isq8ai07rkuyaeb/Hollow_knight.apk/file?dkey=kidnfqrekkv&r=1503', 'https://upload.wikimedia.org/wikipedia/en/thumb/0/04/Hollow_Knight_first_cover_art.webp/274px-Hollow_Knight_first_cover_art.webp.png', 2017),
(3, 'Hollow Knight: Silksong', 'https://drive.google.com/file/d/1gykhiQkDB15mU4fkFTItW5kb8h3jdMqV/view?usp=sharing', 'https://t2.tudocdn.net/771067?w=1200&h=1200', 2025),
(4, 'RV There Yet?', 'https://drive.google.com/file/d/1ZOsore9SiN62KiszR5_zkgerwkH7bft-/view?usp=sharing', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2KWPr9kPVIbcBQuzOkLTZel_DV7OBCU3_UA&s', 2025),
(5, 'Gang Beasts', 'https://drive.google.com/file/d/1_LwJiCiQdh0FObJWdncsshgcG_1HYxSL/view?usp=sharing ', 'https://m.media-amazon.com/images/M/MV5BM2RhM2JhMTgtNzM1ZS00NjJkLThkMzAtMjgyYTMzZWFmM2NhXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg', 2014),
(6, 'Misery', 'https://drive.google.com/file/d/1tO5IOp2NJBnEa2jBOvm8XINohSbNn66p/view?usp=sharing', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5YkP8tc80KcJ3nHwkQBcLI2bMBC3JBFnqVw&s', 2025),
(7, 'Pokemon Legends: Z-A', 'https://1fichier.com/?0vl2b2g8i94466jtz2xb&af=2850246', 'https://www.adrenaline.com.br/wp-content/uploads/2025/06/pokemon-legends-z-a-cover.jpg', 2025),
(8, 'Spider Man Miles Morales', 'https://1fichier.com/?9joztsg5z41iej0h5i57', 'https://cdn.awsli.com.br/600x1000/53/53761/produto/61046040/7e69204918.jpg', 2020),
(9, 'Forza Horizon 5', 'https://gofile.io/d/k7FQEE', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrvKfulV90Xm-cdbyFLvlz7RXEuF4FpSXJAg&s', 2021);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
