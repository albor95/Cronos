-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Nov-2019 às 22:34
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cronometragem`
--

CREATE TABLE `cronometragem` (
  `CroCod` int(11) NOT NULL,
  `CroTem` double NOT NULL,
  `CroCronNom` varchar(45) NOT NULL,
  `TomCod` int(11) NOT NULL,
  `Tomada_Tempo_OpCod` int(11) NOT NULL,
  `SeqCod` int(11) NOT NULL,
  `ProCod` int(11) NOT NULL,
  `OpCod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacao`
--

CREATE TABLE `operacao` (
  `OpCod` int(11) NOT NULL,
  `OpNom` varchar(45) NOT NULL,
  `ProCod` int(11) NOT NULL,
  `OpMaq` varchar(45) NOT NULL,
  `OpCron` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `ProCod` int(11) NOT NULL,
  `ProNom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`ProCod`, `ProNom`) VALUES
(1, 'Camiseta'),
(2, 'Camisa'),
(3, 'Calça'),
(4, 'Pijama');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sequencia`
--

CREATE TABLE `sequencia` (
  `SeqCod` int(11) NOT NULL,
  `SeqNom` varchar(45) NOT NULL,
  `OpCod` int(11) NOT NULL,
  `ProCod` int(11) NOT NULL,
  `SeqRit` double NOT NULL,
  `SeqInt` double NOT NULL,
  `SeqCon` double NOT NULL,
  `SeqQtdVez` int(11) NOT NULL DEFAULT 1,
  `SeqPorPec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tomada_tempo`
--

CREATE TABLE `tomada_tempo` (
  `TomCod` int(11) NOT NULL,
  `TomDat` date NOT NULL,
  `TomTurno` varchar(2) NOT NULL,
  `OpCod` int(11) NOT NULL,
  `ProCod` int(11) NOT NULL,
  `TomNumLei` int(2) NOT NULL,
  `TomOpe` varchar(45) NOT NULL,
  `TomObs` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `UsuCod` int(11) NOT NULL,
  `UsuName` varchar(45) NOT NULL,
  `UsuSen` varchar(45) NOT NULL,
  `UsuNom` varchar(45) NOT NULL,
  `UsuTip` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cronometragem`
--
ALTER TABLE `cronometragem`
  ADD PRIMARY KEY (`CroCod`,`SeqCod`,`OpCod`),
  ADD KEY `fk_Cronometragem_Tomada_Tempo1` (`TomCod`),
  ADD KEY `fk_Cronometragem_Sequencia1` (`SeqCod`);

--
-- Índices para tabela `operacao`
--
ALTER TABLE `operacao`
  ADD PRIMARY KEY (`OpCod`),
  ADD KEY `fk_Operacao_Produto` (`ProCod`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`ProCod`);

--
-- Índices para tabela `sequencia`
--
ALTER TABLE `sequencia`
  ADD PRIMARY KEY (`SeqCod`,`OpCod`),
  ADD KEY `fk_Sequencia_Operacao1` (`OpCod`);

--
-- Índices para tabela `tomada_tempo`
--
ALTER TABLE `tomada_tempo`
  ADD PRIMARY KEY (`TomCod`),
  ADD KEY `fk_Tomada_Tempo_Operacao1` (`OpCod`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`UsuCod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `operacao`
--
ALTER TABLE `operacao`
  MODIFY `OpCod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `ProCod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `sequencia`
--
ALTER TABLE `sequencia`
  MODIFY `SeqCod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tomada_tempo`
--
ALTER TABLE `tomada_tempo`
  MODIFY `TomCod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `UsuCod` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cronometragem`
--
ALTER TABLE `cronometragem`
  ADD CONSTRAINT `fk_Cronometragem_Sequencia1` FOREIGN KEY (`SeqCod`) REFERENCES `sequencia` (`SeqCod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cronometragem_Tomada_Tempo1` FOREIGN KEY (`TomCod`) REFERENCES `tomada_tempo` (`TomCod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `operacao`
--
ALTER TABLE `operacao`
  ADD CONSTRAINT `fk_Operacao_Produto` FOREIGN KEY (`ProCod`) REFERENCES `produto` (`ProCod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `sequencia`
--
ALTER TABLE `sequencia`
  ADD CONSTRAINT `fk_Sequencia_Operacao1` FOREIGN KEY (`OpCod`) REFERENCES `operacao` (`OpCod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tomada_tempo`
--
ALTER TABLE `tomada_tempo`
  ADD CONSTRAINT `fk_Tomada_Tempo_Operacao1` FOREIGN KEY (`OpCod`) REFERENCES `operacao` (`OpCod`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
