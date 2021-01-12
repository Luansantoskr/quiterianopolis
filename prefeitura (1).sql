-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Jan-2021 às 21:33
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
-- Banco de dados: `prefeitura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `biografia_procuradoria`
--

DROP TABLE IF EXISTS `biografia_procuradoria`;
CREATE TABLE IF NOT EXISTS `biografia_procuradoria` (
  `id_biografia_procurador` int NOT NULL,
  `biografia_procurador` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos_controladoria`
--

DROP TABLE IF EXISTS `contratos_controladoria`;
CREATE TABLE IF NOT EXISTS `contratos_controladoria` (
  `id_contrato_controladoria` int NOT NULL AUTO_INCREMENT,
  `titulo_contrato_controladoria` varchar(50) NOT NULL,
  `conteudo_contrato_controladoria` varchar(500) NOT NULL,
  `data_contrato_controladoria` date NOT NULL,
  `credor_contrato_controladoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_contrato_controladoria`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `contratos_controladoria`
--

INSERT INTO `contratos_controladoria` (`id_contrato_controladoria`, `titulo_contrato_controladoria`, `conteudo_contrato_controladoria`, `data_contrato_controladoria`, `credor_contrato_controladoria`) VALUES
(1, 'test', 'teste', '2021-01-10', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos_cultura`
--

DROP TABLE IF EXISTS `contratos_cultura`;
CREATE TABLE IF NOT EXISTS `contratos_cultura` (
  `id_contrato_cultura` int NOT NULL AUTO_INCREMENT,
  `titulo_contrato_cultura` varchar(50) NOT NULL,
  `conteudo_contrato_cultura` varchar(500) NOT NULL,
  `data_contrato_cultura` date NOT NULL,
  PRIMARY KEY (`id_contrato_cultura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos_empreende`
--

DROP TABLE IF EXISTS `contratos_empreende`;
CREATE TABLE IF NOT EXISTS `contratos_empreende` (
  `id_contrato_empreende` int NOT NULL AUTO_INCREMENT,
  `titulo_contrato_empreende` varchar(50) NOT NULL,
  `conteudo_contrato_empreende` varchar(500) NOT NULL,
  `data_contrato_empreende` date NOT NULL,
  PRIMARY KEY (`id_contrato_empreende`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos_gabinete`
--

DROP TABLE IF EXISTS `contratos_gabinete`;
CREATE TABLE IF NOT EXISTS `contratos_gabinete` (
  `id_contrato_gabinete` int NOT NULL AUTO_INCREMENT,
  `titulo_contrato_gabinete` varchar(50) NOT NULL,
  `conteudo_contrato_gabinete` varchar(500) NOT NULL,
  `data_contrato_gabinete` date NOT NULL,
  PRIMARY KEY (`id_contrato_gabinete`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos_planejamento`
--

DROP TABLE IF EXISTS `contratos_planejamento`;
CREATE TABLE IF NOT EXISTS `contratos_planejamento` (
  `id_contrato_planejamento` int NOT NULL AUTO_INCREMENT,
  `titulo_contrato_planejamento` varchar(50) NOT NULL,
  `conteudo_contrato_planejamento` varchar(500) NOT NULL,
  `data_contrato_planejamento` date NOT NULL,
  PRIMARY KEY (`id_contrato_planejamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos_social`
--

DROP TABLE IF EXISTS `contratos_social`;
CREATE TABLE IF NOT EXISTS `contratos_social` (
  `id_contratos_social` int NOT NULL AUTO_INCREMENT,
  `titulo_contrato_social` varchar(50) NOT NULL,
  `conteudo_contrato_social` varchar(500) NOT NULL,
  `data_contrato_social` date NOT NULL,
  PRIMARY KEY (`id_contratos_social`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_mun`
--

DROP TABLE IF EXISTS `dados_mun`;
CREATE TABLE IF NOT EXISTS `dados_mun` (
  `id_dados_mun` int NOT NULL AUTO_INCREMENT,
  `fundacao` varchar(50) NOT NULL,
  `emancipacao_politica` varchar(50) NOT NULL,
  `gentilico` varchar(50) NOT NULL,
  `unidade_federativa` varchar(50) NOT NULL,
  `mesoregiao` varchar(50) NOT NULL,
  `microregiao` varchar(50) NOT NULL,
  `distancia_capital` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `populacao_estimada` varchar(50) NOT NULL,
  `densidade` varchar(50) NOT NULL,
  `altitude` varchar(50) NOT NULL,
  `clima` varchar(50) NOT NULL,
  `fuso_horario` varchar(50) NOT NULL,
  PRIMARY KEY (`id_dados_mun`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `dados_mun`
--

INSERT INTO `dados_mun` (`id_dados_mun`, `fundacao`, `emancipacao_politica`, `gentilico`, `unidade_federativa`, `mesoregiao`, `microregiao`, `distancia_capital`, `area`, `populacao_estimada`, `densidade`, `altitude`, `clima`, `fuso_horario`) VALUES
(1, 'adsds', 'ads', 'asdads', 'aasd', 'adsads', 'adsasd', 'asdasd', 'asdasd', 'asdasd', 'adsasd', 'sdadas', 'dasasd', 'dassda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_municipio`
--

DROP TABLE IF EXISTS `dados_municipio`;
CREATE TABLE IF NOT EXISTS `dados_municipio` (
  `id_dados` int NOT NULL AUTO_INCREMENT,
  `titulo_dado` varchar(100) NOT NULL,
  `descricao_dado` varchar(500) NOT NULL,
  `data_dado` date NOT NULL,
  PRIMARY KEY (`id_dados`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `dados_municipio`
--

INSERT INTO `dados_municipio` (`id_dados`, `titulo_dado`, `descricao_dado`, `data_dado`) VALUES
(1, 'teste', 'teste', '2020-12-23'),
(2, 'asd', 'asd', '2020-12-26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `decretos`
--

DROP TABLE IF EXISTS `decretos`;
CREATE TABLE IF NOT EXISTS `decretos` (
  `id_decreto` int NOT NULL AUTO_INCREMENT,
  `titulo_decreto` varchar(50) NOT NULL,
  `conteudo_decreto` varchar(500) NOT NULL,
  `data_decreto` date NOT NULL,
  PRIMARY KEY (`id_decreto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `diario`
--

DROP TABLE IF EXISTS `diario`;
CREATE TABLE IF NOT EXISTS `diario` (
  `id_diario` int NOT NULL AUTO_INCREMENT,
  `titulo_diario` varchar(100) NOT NULL,
  `conteudo_diario` varchar(500) NOT NULL,
  `data_diario` date NOT NULL,
  PRIMARY KEY (`id_diario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `diario`
--

INSERT INTO `diario` (`id_diario`, `titulo_diario`, `conteudo_diario`, `data_diario`) VALUES
(1, 'teste', 'teste', '2020-12-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `diario_oficial`
--

DROP TABLE IF EXISTS `diario_oficial`;
CREATE TABLE IF NOT EXISTS `diario_oficial` (
  `id_diario` int NOT NULL AUTO_INCREMENT,
  `titulo_diario_oficial` varchar(50) NOT NULL,
  `conteudo_diario_oficial` varchar(500) NOT NULL,
  PRIMARY KEY (`id_diario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `edtc_gabinete`
--

DROP TABLE IF EXISTS `edtc_gabinete`;
CREATE TABLE IF NOT EXISTS `edtc_gabinete` (
  `id_edtc_gabinete` int NOT NULL AUTO_INCREMENT,
  `titulo_edtc_gabinete` varchar(50) NOT NULL,
  `conteudo_edtc_gabinete` varchar(500) NOT NULL,
  `data_edtc_gabinete` date NOT NULL,
  PRIMARY KEY (`id_edtc_gabinete`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ex_empreende`
--

DROP TABLE IF EXISTS `ex_empreende`;
CREATE TABLE IF NOT EXISTS `ex_empreende` (
  `id_ex_empreende` int NOT NULL AUTO_INCREMENT,
  `nome_ex_empreende` varchar(50) NOT NULL,
  `dataInicio_ex_empreende` date NOT NULL,
  `dataFim_ex_empreende` date NOT NULL,
  PRIMARY KEY (`id_ex_empreende`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ex_gestores_cultura`
--

DROP TABLE IF EXISTS `ex_gestores_cultura`;
CREATE TABLE IF NOT EXISTS `ex_gestores_cultura` (
  `id_ex_gestores` int NOT NULL AUTO_INCREMENT,
  `nome_ex_cultura` varchar(50) NOT NULL,
  `dataInicio_ex_cultura` date NOT NULL,
  `DataFim_ex_cultura` date NOT NULL,
  PRIMARY KEY (`id_ex_gestores`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ex_planejamento`
--

DROP TABLE IF EXISTS `ex_planejamento`;
CREATE TABLE IF NOT EXISTS `ex_planejamento` (
  `id_ex_planejamento` int NOT NULL AUTO_INCREMENT,
  `nome_ex_planejamento` varchar(100) NOT NULL,
  `dataInicio_ex_planejamento` date NOT NULL,
  `dataFim_ex_planejamento` date NOT NULL,
  PRIMARY KEY (`id_ex_planejamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gestores`
--

DROP TABLE IF EXISTS `gestores`;
CREATE TABLE IF NOT EXISTS `gestores` (
  `id_gestor` int NOT NULL AUTO_INCREMENT,
  `prefeito` varchar(50) NOT NULL,
  `vice` varchar(50) NOT NULL,
  `dataCap` date NOT NULL,
  PRIMARY KEY (`id_gestor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `guia_municipio`
--

DROP TABLE IF EXISTS `guia_municipio`;
CREATE TABLE IF NOT EXISTS `guia_municipio` (
  `id_guia` int NOT NULL AUTO_INCREMENT,
  `titulo_guia` varchar(50) NOT NULL,
  `conteudo_guia` varchar(100) NOT NULL,
  PRIMARY KEY (`id_guia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_assistencia_social`
--

DROP TABLE IF EXISTS `info_assistencia_social`;
CREATE TABLE IF NOT EXISTS `info_assistencia_social` (
  `id_social` int NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(20) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `periodo` varchar(50) NOT NULL,
  `amparo` varchar(50) NOT NULL,
  `matricula` int NOT NULL,
  `biografia_assis_social` text NOT NULL,
  PRIMARY KEY (`id_social`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_controladoria`
--

DROP TABLE IF EXISTS `info_controladoria`;
CREATE TABLE IF NOT EXISTS `info_controladoria` (
  `id_controladoria` int NOT NULL AUTO_INCREMENT,
  `cnpj_controladoria` varchar(50) NOT NULL,
  `telefone_controladoria` varchar(50) NOT NULL,
  `email_controladoria` varchar(50) NOT NULL,
  `horario_controladoria` varchar(50) NOT NULL,
  `endereco_controladoria` varchar(50) NOT NULL,
  `nome_controladoria` varchar(50) NOT NULL,
  `cargo_controladoria` varchar(50) NOT NULL,
  `periodo_controladoria` varchar(50) NOT NULL,
  `amparo_controladoria` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  PRIMARY KEY (`id_controladoria`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `info_controladoria`
--

INSERT INTO `info_controladoria` (`id_controladoria`, `cnpj_controladoria`, `telefone_controladoria`, `email_controladoria`, `horario_controladoria`, `endereco_controladoria`, `nome_controladoria`, `cargo_controladoria`, `periodo_controladoria`, `amparo_controladoria`, `matricula`) VALUES
(2, '087985654', '8889989989', 'teste@teste', '07:00 as 18:00', 'teste', 'teste', 'teste', 'teste', 'teste', '01020304');

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_cultura`
--

DROP TABLE IF EXISTS `info_cultura`;
CREATE TABLE IF NOT EXISTS `info_cultura` (
  `id_cultura` int NOT NULL AUTO_INCREMENT,
  `cnpj_cultura` varchar(50) NOT NULL,
  `telefone_cultura` varchar(50) NOT NULL,
  `email_cultura` varchar(50) NOT NULL,
  `horario_cultura` varchar(50) NOT NULL,
  `endereco_cultura` varchar(50) NOT NULL,
  `nome_cultura` varchar(50) NOT NULL,
  `cargo_cultura` varchar(50) NOT NULL,
  `periodo_cultura` varchar(50) NOT NULL,
  `amparo_cultura` varchar(50) NOT NULL,
  `matricula_cultura` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cultura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_empreendedorismo`
--

DROP TABLE IF EXISTS `info_empreendedorismo`;
CREATE TABLE IF NOT EXISTS `info_empreendedorismo` (
  `id_empreendedorismo` int NOT NULL AUTO_INCREMENT,
  `cnpj_empreende` varchar(50) NOT NULL,
  `telefone_empreende` varchar(50) NOT NULL,
  `email_empreende` varchar(50) NOT NULL,
  `horario_empreende` varchar(50) NOT NULL,
  `endereco_empreende` varchar(50) NOT NULL,
  `nome_empreende` varchar(50) NOT NULL,
  `cargo_empreende` varchar(50) NOT NULL,
  `periodo_empreende` varchar(50) NOT NULL,
  `amparo_empreende` varchar(50) NOT NULL,
  `matricula_empreende` varchar(50) NOT NULL,
  PRIMARY KEY (`id_empreendedorismo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_fundo`
--

DROP TABLE IF EXISTS `info_fundo`;
CREATE TABLE IF NOT EXISTS `info_fundo` (
  `id_fundo` int NOT NULL,
  `cnpj_fundo` varchar(50) NOT NULL,
  `telefone_fundo` varchar(50) NOT NULL,
  `email_fundo` varchar(50) NOT NULL,
  `horario_fundo` varchar(50) NOT NULL,
  `endereco_fundo` varchar(50) NOT NULL,
  `nome_fundo` varchar(50) NOT NULL,
  `cargo_fundo` varchar(50) NOT NULL,
  `periodo_fundo` varchar(50) NOT NULL,
  `amparo_fundo` varchar(50) NOT NULL,
  `matricula_fundo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_gabinete`
--

DROP TABLE IF EXISTS `info_gabinete`;
CREATE TABLE IF NOT EXISTS `info_gabinete` (
  `id_gabinete` int NOT NULL,
  `cnpj_gabinete` varchar(50) NOT NULL,
  `telefone_gabinete` varchar(50) NOT NULL,
  `email_gabinete` varchar(50) NOT NULL,
  `horario_gabinete` varchar(50) NOT NULL,
  `endereco_gabinete` varchar(50) NOT NULL,
  `nome_gabinete` varchar(50) NOT NULL,
  `cargo_gabinete` varchar(50) NOT NULL,
  `periodo_gabinete` varchar(50) NOT NULL,
  `amparo_gabinete` varchar(50) NOT NULL,
  `matricula_gabinete` varchar(50) NOT NULL,
  `biografia_gabinete` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_planejamento`
--

DROP TABLE IF EXISTS `info_planejamento`;
CREATE TABLE IF NOT EXISTS `info_planejamento` (
  `id_planejamento` int NOT NULL AUTO_INCREMENT,
  `cnpj_planejamento` varchar(50) NOT NULL,
  `telefone_planejamento` varchar(50) NOT NULL,
  `email_planejamento` varchar(50) NOT NULL,
  `horario_planejamento` varchar(50) NOT NULL,
  `endereco_planejamento` varchar(50) NOT NULL,
  `nome_planejamento` varchar(50) NOT NULL,
  `cargo_planejamento` varchar(50) NOT NULL,
  `periodo_planejamento` varchar(50) NOT NULL,
  `amparo_planejamento` varchar(50) NOT NULL,
  `matricula_planejamento` varchar(50) NOT NULL,
  PRIMARY KEY (`id_planejamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_procuradoria`
--

DROP TABLE IF EXISTS `info_procuradoria`;
CREATE TABLE IF NOT EXISTS `info_procuradoria` (
  `id_procuradoria` int NOT NULL AUTO_INCREMENT,
  `cnpj_procuradoria` int NOT NULL,
  `telefone_procuradoria` int NOT NULL,
  `email_procuradoria` int NOT NULL,
  `horario_procuradoria` int NOT NULL,
  `endereco_procuradoria` int NOT NULL,
  `nome_procuradoria` int NOT NULL,
  `cargo_procuradoria` int NOT NULL,
  `periodo_procuradoria` int NOT NULL,
  `amparo_procuradoria` int NOT NULL,
  `matricula_procuradoria` int NOT NULL,
  PRIMARY KEY (`id_procuradoria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `in_controladoria`
--

DROP TABLE IF EXISTS `in_controladoria`;
CREATE TABLE IF NOT EXISTS `in_controladoria` (
  `id_in` int NOT NULL AUTO_INCREMENT,
  `titulo_in_controladoria` varchar(50) NOT NULL,
  `conteudo_in_controladoria` varchar(500) NOT NULL,
  `data_in_controladoria` date NOT NULL,
  PRIMARY KEY (`id_in`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `in_controladoria`
--

INSERT INTO `in_controladoria` (`id_in`, `titulo_in_controladoria`, `conteudo_in_controladoria`, `data_in_controladoria`) VALUES
(1, 'teste', 'teste', '1000-10-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leis`
--

DROP TABLE IF EXISTS `leis`;
CREATE TABLE IF NOT EXISTS `leis` (
  `id_lei` int NOT NULL AUTO_INCREMENT,
  `titulo_lei` varchar(50) NOT NULL,
  `conteudo_lei` varchar(500) NOT NULL,
  `data_lei` date NOT NULL,
  PRIMARY KEY (`id_lei`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `licitacoes_controladoria`
--

DROP TABLE IF EXISTS `licitacoes_controladoria`;
CREATE TABLE IF NOT EXISTS `licitacoes_controladoria` (
  `id_licitacoes_controladoria` int NOT NULL AUTO_INCREMENT,
  `titulo_licitacao_controladoria` varchar(50) NOT NULL,
  `conteudo_licitacao_controladoria` varchar(500) NOT NULL,
  `data_licitacao_controladoria` date NOT NULL,
  PRIMARY KEY (`id_licitacoes_controladoria`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `licitacoes_controladoria`
--

INSERT INTO `licitacoes_controladoria` (`id_licitacoes_controladoria`, `titulo_licitacao_controladoria`, `conteudo_licitacao_controladoria`, `data_licitacao_controladoria`) VALUES
(1, 'teste', 'teste', '2021-01-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `licitacoes_cultura`
--

DROP TABLE IF EXISTS `licitacoes_cultura`;
CREATE TABLE IF NOT EXISTS `licitacoes_cultura` (
  `id_licitacao_cultura` int NOT NULL AUTO_INCREMENT,
  `titulo_licitacao_cultura` varchar(50) NOT NULL,
  `conteudo_licitacao_cultura` varchar(500) NOT NULL,
  `data_licitacao_cultura` date NOT NULL,
  PRIMARY KEY (`id_licitacao_cultura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `licitacoes_empreende`
--

DROP TABLE IF EXISTS `licitacoes_empreende`;
CREATE TABLE IF NOT EXISTS `licitacoes_empreende` (
  `id_licitacao_empreende` int NOT NULL AUTO_INCREMENT,
  `titulo_licitacao_empreende` varchar(50) NOT NULL,
  `conteudo_licitaao_empreende` varchar(500) NOT NULL,
  `data_licitacao_empreende` date NOT NULL,
  PRIMARY KEY (`id_licitacao_empreende`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `licitacoes_gabinete`
--

DROP TABLE IF EXISTS `licitacoes_gabinete`;
CREATE TABLE IF NOT EXISTS `licitacoes_gabinete` (
  `id_licitacao_gabinete` int NOT NULL,
  `titulo_licitacao_gabinete` varchar(50) NOT NULL,
  `conteudo_licitacao_gabinete` varchar(500) NOT NULL,
  `data_licitacao_gabinete` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- --------------------------------------------------------

--
-- Estrutura da tabela `licitacoes_planejamento`
--

DROP TABLE IF EXISTS `licitacoes_planejamento`;
CREATE TABLE IF NOT EXISTS `licitacoes_planejamento` (
  `id_licitacao_planejamento` int NOT NULL AUTO_INCREMENT,
  `titulo_licitacao_planejamento` varchar(50) NOT NULL,
  `conteudo_licitacao_planejamento` varchar(500) NOT NULL,
  `data_licitacao_planejamento` date NOT NULL,
  PRIMARY KEY (`id_licitacao_planejamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `licitacoes_social`
--

DROP TABLE IF EXISTS `licitacoes_social`;
CREATE TABLE IF NOT EXISTS `licitacoes_social` (
  `id_licitacoes_social` int NOT NULL AUTO_INCREMENT,
  `titulo_licitacao_social` varchar(50) NOT NULL,
  `conteudo_licitacao_social` varchar(500) NOT NULL,
  `data_licitacao_social` date NOT NULL,
  PRIMARY KEY (`id_licitacoes_social`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias_fundo`
--

DROP TABLE IF EXISTS `noticias_fundo`;
CREATE TABLE IF NOT EXISTS `noticias_fundo` (
  `id_noticia_fundo` int NOT NULL AUTO_INCREMENT,
  `titulo_noticia_fundo` varchar(50) NOT NULL,
  `conteudo_noticia_fundo` varchar(500) NOT NULL,
  `id_imagem` int NOT NULL,
  PRIMARY KEY (`id_noticia_fundo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias_gabinete`
--

DROP TABLE IF EXISTS `noticias_gabinete`;
CREATE TABLE IF NOT EXISTS `noticias_gabinete` (
  `id_noticia_gabinete` int NOT NULL AUTO_INCREMENT,
  `titulo_noticia_gabinete` varchar(50) NOT NULL,
  `conteudo_noticia_gabinete` varchar(500) NOT NULL,
  `data_noticia_gabinete` date NOT NULL,
  PRIMARY KEY (`id_noticia_gabinete`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordenadores_controladoria`
--

DROP TABLE IF EXISTS `ordenadores_controladoria`;
CREATE TABLE IF NOT EXISTS `ordenadores_controladoria` (
  `id_ordenador_controladoria` int NOT NULL AUTO_INCREMENT,
  `nome_ordenador_controladoria` varchar(50) NOT NULL,
  `dataInicio_ordenador_controladoria` date NOT NULL,
  `dataFim_ordenador_controladoria` date NOT NULL,
  PRIMARY KEY (`id_ordenador_controladoria`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `ordenadores_controladoria`
--

INSERT INTO `ordenadores_controladoria` (`id_ordenador_controladoria`, `nome_ordenador_controladoria`, `dataInicio_ordenador_controladoria`, `dataFim_ordenador_controladoria`) VALUES
(1, 'asd', '2020-12-28', '2020-12-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordenadores_cultura`
--

DROP TABLE IF EXISTS `ordenadores_cultura`;
CREATE TABLE IF NOT EXISTS `ordenadores_cultura` (
  `id_ordenadores_cultura` int NOT NULL AUTO_INCREMENT,
  `nome_ordenadores_cultura` varchar(50) NOT NULL,
  `dataInicio_ordenadores_cultura` date NOT NULL,
  `dataFim_ordenadores_cultura` date NOT NULL,
  PRIMARY KEY (`id_ordenadores_cultura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordenadores_empreende`
--

DROP TABLE IF EXISTS `ordenadores_empreende`;
CREATE TABLE IF NOT EXISTS `ordenadores_empreende` (
  `id_ordenadores_empreende` int NOT NULL,
  `nome_ordenador_empreende` varchar(50) NOT NULL,
  `dataInicio_ordenador_empreende` date NOT NULL,
  `dataFim_ordenador_empreende` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordenadores_planejamento`
--

DROP TABLE IF EXISTS `ordenadores_planejamento`;
CREATE TABLE IF NOT EXISTS `ordenadores_planejamento` (
  `id_ordenador_planejamento` int NOT NULL AUTO_INCREMENT,
  `nome_ordenador_planejamento` varchar(50) NOT NULL,
  `dataInicio_ordenador_planejamento` date NOT NULL,
  `dataFim_ordenador_planejamento` date NOT NULL,
  PRIMARY KEY (`id_ordenador_planejamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordenadores_procuradoria`
--

DROP TABLE IF EXISTS `ordenadores_procuradoria`;
CREATE TABLE IF NOT EXISTS `ordenadores_procuradoria` (
  `id_ordenador_procuradoria` int NOT NULL,
  `nome_ordenador_procuradoria` varchar(50) NOT NULL,
  `dataInicio_ordenador_procuradoria` date NOT NULL,
  `dataFim_ordenador_procuradoria` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordenadores_social`
--

DROP TABLE IF EXISTS `ordenadores_social`;
CREATE TABLE IF NOT EXISTS `ordenadores_social` (
  `id_ordenador_social` int NOT NULL AUTO_INCREMENT,
  `nome_ordenador_social` varchar(100) NOT NULL,
  `dataInicio_ordenador_social` date NOT NULL,
  `dataFim_ordenador_socail` date NOT NULL,
  PRIMARY KEY (`id_ordenador_social`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `portarias`
--

DROP TABLE IF EXISTS `portarias`;
CREATE TABLE IF NOT EXISTS `portarias` (
  `id_portaria` int NOT NULL AUTO_INCREMENT,
  `titulo_portaria` varchar(50) NOT NULL,
  `conteudo_portaria` varchar(500) NOT NULL,
  `data_portaria` varchar(50) NOT NULL,
  `agente_portaria` varchar(50) NOT NULL,
  `cargo_portaria` varchar(50) NOT NULL,
  `secretaria_portaria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_portaria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `portarias_controladoria`
--

DROP TABLE IF EXISTS `portarias_controladoria`;
CREATE TABLE IF NOT EXISTS `portarias_controladoria` (
  `id_portaria_controladoria` int NOT NULL AUTO_INCREMENT,
  `titulo_portaria_controladoria` varchar(50) NOT NULL,
  `conteudo_portaria_controladoria` varchar(500) NOT NULL,
  `data_portaria_controladoria` date NOT NULL,
  PRIMARY KEY (`id_portaria_controladoria`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `portarias_controladoria`
--

INSERT INTO `portarias_controladoria` (`id_portaria_controladoria`, `titulo_portaria_controladoria`, `conteudo_portaria_controladoria`, `data_portaria_controladoria`) VALUES
(3, 'teste', 'teste', '2020-04-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portarias_cultura`
--

DROP TABLE IF EXISTS `portarias_cultura`;
CREATE TABLE IF NOT EXISTS `portarias_cultura` (
  `id_portaria_cultura` int NOT NULL AUTO_INCREMENT,
  `titulo_portaria_cultura` varchar(50) NOT NULL,
  `conteudo_portaria_cultura` varchar(500) NOT NULL,
  `data_portaria_cultura` date NOT NULL,
  PRIMARY KEY (`id_portaria_cultura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `portarias_empreende`
--

DROP TABLE IF EXISTS `portarias_empreende`;
CREATE TABLE IF NOT EXISTS `portarias_empreende` (
  `id_portaria_empreende` int NOT NULL AUTO_INCREMENT,
  `titulo_portaria_contrato` varchar(50) NOT NULL,
  `conteudo_portaria_empreende` varchar(500) NOT NULL,
  `data_portaria_empreende` date NOT NULL,
  PRIMARY KEY (`id_portaria_empreende`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `portarias_gabinete`
--

DROP TABLE IF EXISTS `portarias_gabinete`;
CREATE TABLE IF NOT EXISTS `portarias_gabinete` (
  `id_portaria_gabinete` int NOT NULL AUTO_INCREMENT,
  `titulo_portaria_gabinete` varchar(50) NOT NULL,
  `conteudo_portaria_gabinete` varchar(500) NOT NULL,
  `data_portaria_gabinete` date NOT NULL,
  PRIMARY KEY (`id_portaria_gabinete`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `portarias_planejamento`
--

DROP TABLE IF EXISTS `portarias_planejamento`;
CREATE TABLE IF NOT EXISTS `portarias_planejamento` (
  `id_portaria_planejamento` int NOT NULL,
  `titulo_portaria_planejamento` varchar(50) NOT NULL,
  `conteudo_portaria_planejamento` varchar(500) NOT NULL,
  `data_portaria_planejamento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `portarias_procuradoria`
--

DROP TABLE IF EXISTS `portarias_procuradoria`;
CREATE TABLE IF NOT EXISTS `portarias_procuradoria` (
  `id_portaria_procuradoria` int NOT NULL,
  `titulo_portaria_procuradoria` varchar(50) NOT NULL,
  `conteudo_portaria_procuradoria` varchar(500) NOT NULL,
  `data_portaria_procuradoria` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `portarias_social`
--

DROP TABLE IF EXISTS `portarias_social`;
CREATE TABLE IF NOT EXISTS `portarias_social` (
  `id_portaria_social` int NOT NULL AUTO_INCREMENT,
  `titulo_portaria_social` varchar(50) NOT NULL,
  `conteudo_portaria_social` varchar(500) NOT NULL,
  `data_portaria` date NOT NULL,
  PRIMARY KEY (`id_portaria_social`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prefeito`
--

DROP TABLE IF EXISTS `prefeito`;
CREATE TABLE IF NOT EXISTS `prefeito` (
  `id_prefeito` int NOT NULL AUTO_INCREMENT,
  `nome_prefeito` varchar(100) NOT NULL,
  `historico_prefeito` varchar(100) NOT NULL,
  `nome_vice` varchar(500) NOT NULL,
  `historico_vice` varchar(500) NOT NULL,
  `dataInicio_pref` date NOT NULL,
  `dataFim_pref` date NOT NULL,
  `dataInicio_vice` date NOT NULL,
  `dataFim_vice` date NOT NULL,
  PRIMARY KEY (`id_prefeito`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prefeito_vice`
--

DROP TABLE IF EXISTS `prefeito_vice`;
CREATE TABLE IF NOT EXISTS `prefeito_vice` (
  `id_pref` int NOT NULL AUTO_INCREMENT,
  `nome_prefeito` varchar(50) NOT NULL,
  `nome_vice` varchar(50) NOT NULL,
  `dataCaptura` date NOT NULL,
  PRIMARY KEY (`id_pref`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `prefeito_vice`
--

INSERT INTO `prefeito_vice` (`id_pref`, `nome_prefeito`, `nome_vice`, `dataCaptura`) VALUES
(1, 'teste', 'teste', '2020-12-23'),
(2, 'teste', 'teste', '2020-12-23'),
(3, 'Ivanilson Bandeira', 'Luan Santos', '2020-12-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo_seletivo`
--

DROP TABLE IF EXISTS `processo_seletivo`;
CREATE TABLE IF NOT EXISTS `processo_seletivo` (
  `id_processo_seletivo` int NOT NULL AUTO_INCREMENT,
  `titulo_processo_seletivo` varchar(50) NOT NULL,
  `conteudo_processo_seletivo` varchar(500) NOT NULL,
  `data_processo_seletivo` date NOT NULL,
  PRIMARY KEY (`id_processo_seletivo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo_seletivo_gabinete`
--

DROP TABLE IF EXISTS `processo_seletivo_gabinete`;
CREATE TABLE IF NOT EXISTS `processo_seletivo_gabinete` (
  `id_processo_gabinete` int NOT NULL AUTO_INCREMENT,
  `titulo_processo_gabinete` varchar(50) NOT NULL,
  `conteudo_processo_gabinete` varchar(500) NOT NULL,
  `data_processo_gabinete` date NOT NULL,
  PRIMARY KEY (`id_processo_gabinete`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao_diaria`
--

DROP TABLE IF EXISTS `publicacao_diaria`;
CREATE TABLE IF NOT EXISTS `publicacao_diaria` (
  `id_diaria` int NOT NULL AUTO_INCREMENT,
  `titulo_publicacao_diaria` varchar(50) NOT NULL,
  `conteudo_publicacao_diaria` varchar(500) NOT NULL,
  `id_imagem` int NOT NULL,
  `data_publicacao_diaria` date NOT NULL,
  PRIMARY KEY (`id_diaria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ra_gabinete`
--

DROP TABLE IF EXISTS `ra_gabinete`;
CREATE TABLE IF NOT EXISTS `ra_gabinete` (
  `id_ra_gabinete` int NOT NULL AUTO_INCREMENT,
  `titulo_ra_gabinete` varchar(50) NOT NULL,
  `conteudo_ra_gabinete` varchar(500) NOT NULL,
  `data_ra_gabinete` date NOT NULL,
  PRIMARY KEY (`id_ra_gabinete`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `simbolos_municipio`
--

DROP TABLE IF EXISTS `simbolos_municipio`;
CREATE TABLE IF NOT EXISTS `simbolos_municipio` (
  `id_simbolo` int NOT NULL AUTO_INCREMENT,
  `nome_simbolo` varchar(50) NOT NULL,
  `conteudo_simbolo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_simbolo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transparencia`
--

DROP TABLE IF EXISTS `transparencia`;
CREATE TABLE IF NOT EXISTS `transparencia` (
  `id_transparencia` int NOT NULL AUTO_INCREMENT,
  `descricao_transparencia` varchar(100) NOT NULL,
  `legenda` varchar(50) NOT NULL,
  PRIMARY KEY (`id_transparencia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `dataCaptura` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `user`, `email`, `senha`, `dataCaptura`) VALUES
(1, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2020-11-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

DROP TABLE IF EXISTS `veiculos`;
CREATE TABLE IF NOT EXISTS `veiculos` (
  `id_veiculo` int NOT NULL AUTO_INCREMENT,
  `marca_veiculo` varchar(50) NOT NULL,
  `modelo_veiculo` varchar(50) NOT NULL,
  `placa_veiculo` varchar(50) NOT NULL,
  `renavam_veiculo` varchar(50) NOT NULL,
  `secretaria_veiculo` varchar(50) NOT NULL,
  `finalidade_veiculo` varchar(50) NOT NULL,
  `data_veiculo` date NOT NULL,
  `situacao_veiculo` varchar(50) NOT NULL,
  `tipo_veiculo` varchar(50) NOT NULL,
  `mais_veiculo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_veiculo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id_veiculo`, `marca_veiculo`, `modelo_veiculo`, `placa_veiculo`, `renavam_veiculo`, `secretaria_veiculo`, `finalidade_veiculo`, `data_veiculo`, `situacao_veiculo`, `tipo_veiculo`, `mais_veiculo`) VALUES
(1, 'asdads', 'asddas', 'dsasda', 'sdasda', 'sdadas', 'sdasdaasd', '0000-00-00', 'asdasd', 'asdasd', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
