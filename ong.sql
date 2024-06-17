SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Banco de dados: `ong`

CREATE DATABASE ong;

USE ong;

-- Estrutura para tabela `assistido`

CREATE TABLE `assistido` (
  `Nome_Completo` varchar(50) NOT NULL,
  `Idade_Cog` int(2) NOT NULL,
  `Data_Nascimento` date NOT NULL,
  `Encaminhamento` varchar(200) NOT NULL,
  `id_assistido` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id_assistido)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=5;


-- Estrutura para tabela `responsavel`

CREATE TABLE `responsavel` (
  `Nome_Responsavel` varchar(50) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `Telefone` varchar(15) NOT NULL,
  `Grau_Parentesco` varchar(20) NOT NULL,
  PRIMARY KEY (CPF)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Estrutura para tabela `acompanha`

CREATE TABLE `acompanha` (
  `CPF` varchar(11) NOT NULL,
  `id_assistido` int(11) NOT NULL,
  PRIMARY KEY (CPF, id_assistido),
  FOREIGN KEY (CPF) REFERENCES responsavel (CPF),
  FOREIGN KEY (id_assistido) REFERENCES assistido (id_assistido)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Estrutura para tabela `terapeuta`

CREATE TABLE `terapeuta` (
  `id_terapeuta` int(3) NOT NULL AUTO_INCREMENT,
  `CPF` varchar(11) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (id_terapeuta),
  UNIQUE KEY (CPF)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=3;


-- Estrutura para tabela `consulta`

CREATE TABLE `consulta` (
  `id_assistido` int(11) NOT NULL,
  `id_terapeuta` int(3) NOT NULL,
  `data_consulta` date,
  `anotacao` varchar(500) DEFAULT NULL,
  `ano_escolar` int(4) DEFAULT NULL,
  PRIMARY KEY (id_assistido, id_terapeuta, data_consulta),
  FOREIGN KEY (id_assistido) REFERENCES assistido (id_assistido),
  FOREIGN KEY (id_terapeuta) REFERENCES terapeuta (id_terapeuta)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Estrutura para tabela `questao`

CREATE TABLE `questao` (
  `n_questao` int(5) DEFAULT NULL,
  `enunciado` varchar(50) NOT NULL,
  `genero`varchar(50) NOT NULL,
  `idade_cog` int(3) NOT NULL,
  PRIMARY KEY (n_questao, idade_cog)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Estrutura para tabela `avaliacao`

CREATE TABLE `avaliacao` (
  `id_avaliacao` int(10) NOT NULL,
  `id_assistido` int(11) NOT NULL,
  `id_terapeuta` int(3) NOT NULL,
  `data_consulta` date,
  `observacao` varchar(500) DEFAULT NULL,
  PRIMARY KEY (id_avaliacao, id_assistido, id_terapeuta, data_consulta),
  FOREIGN KEY (id_assistido) REFERENCES assistido (id_assistido),
  FOREIGN KEY (id_terapeuta) REFERENCES terapeuta (id_terapeuta)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `resposta`(
  `n_questao` int(5) DEFAULT NULL,
  `idade_cog` int(3) NOT NULL,
  `id_avaliacao` int(10) NOT NULL,
  `id_assistido` int(11) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `observação` text NOT NULL,
  FOREIGN KEY (id_assistido) REFERENCES assistido (id_assistido),
  FOREIGN KEY (n_questao,idade_cog) REFERENCES questao (n_questao,idade_cog),
  FOREIGN KEY (id_avaliacao) REFERENCES avaliacao (id_avaliacao)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Inserindo dados exemplo para a tabela `terapeuta`

INSERT INTO `terapeuta` (`id_terapeuta`,`CPF`, `senha`, `codigo`) VALUES
('0', '00000000000', '$2y$10$VgLqByrSeKAqj4GxrS5es.zlgLPVLzoAwqc7f1mPK6wACsYd8PM2C', '74zfun3alshimde2b9ogjtky058qr2j3s2a1x96'),
('1', '11111111111', 'f2w213', 'qwe'),
('2', '22222222222', 'rwqrwq', 'tete');

INSERT INTO `assistido` (`Nome_Completo`, `Idade_Cog`, `Data_Nascimento`, `Encaminhamento`) VALUES
('Lucas Furazato', '4', '1999-01-02', 'Fatec'),
('Luana Doriana', '6', '2006-01-02', 'Fatec'),
('Ana Bar Rosa', '8', '2005-01-02', 'Fatec');

INSERT INTO `responsavel` (`Nome_Responsavel`, `CPF`, `Telefone`, `Grau_Parentesco`) VALUES
('Isabela Laranja', '1122216659', '1199999999', 'Colega'),
('Thais Rebelde', '2211145523', '1199999999', 'Tia'),
('Leila Praia', '3366655589', '1198888888', 'Prima');

INSERT INTO `acompanha` (`CPF`, `id_assistido`) VALUES
('1122216659', '5'),
('2211145523', '6'),
('3366655589', '7');

INSERT INTO `consulta` (`id_assistido`,`id_terapeuta`,`data_consulta`, `anotacao`, `ano_escolar`) VALUES
('5','2','2024-06-01', 'Coitado, precisa de ajuda.', '1'),
('6','2','2024-06-01', 'Boazinha, respeita os mais velhos.', '3'),
('7','2','2024-06-01', 'Louca, mas boa menina.', '2');

INSERT INTO `questao` (`enunciado`, `n_questao`, `genero`, `idade_cog`) VALUES
('Compreender instruções expressas de forma negativa.', '1', 'Lingua_portuguesa', '3'),
('Incorporar vocabulário recente em suas conversas.', '2', 'Lingua_portuguesa', '3'),
(' Expressar-se verbalmente, pronunciando palavras de forma clara, espontânea e confiante.', '3', 'Lingua_portuguesa', '3');

INSERT INTO `avaliacao` (`id_avaliacao`,`id_assistido`,`id_terapeuta`,`data_consulta`,`observacao`) VALUES
('1','7', '0', '2024-06-01','muito bem'),
('2','7', '1', '2024-06-01','ok'),
('3','7', '2', '2024-06-01','ok');

INSERT INTO `resposta` (`n_questao`,  `idade_cog`, `id_avaliacao`, `id_assistido`, `valor`, `observação`) VALUES
('1', '3', '2', '7', 'Sim', 'Bom.'),
('1', '3', '2', '7', 'Não', 'Bom.'),
('1', '3', '2', '7', 'Precisa melhorar', 'Ruim.');




COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
