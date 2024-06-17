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

-- Estrutura para tabela `assistidos`

CREATE TABLE `assistidos` (
  `Nome_Completo` varchar(50) NOT NULL,
  `Idade_Cog` int(2) NOT NULL,
  `Data_Nascimento` date NOT NULL,
  `Encaminhamento` varchar(200) NOT NULL,
  `id_assistido` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id_assistido)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=5;


-- Estrutura para tabela `responsaveis`

CREATE TABLE `responsaveis` (
  `Nome_Responsavel` varchar(50) NOT NULL,
  `CPF` int(11) NOT NULL,
  `Telefone` varchar(15) NOT NULL,
  `Grau_Parentesco` varchar(20) NOT NULL,
  PRIMARY KEY (CPF)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Estrutura para tabela `acompanha`

CREATE TABLE `acompanha` (
  `CPF` int(11) NOT NULL,
  `id_assistido` int(11) NOT NULL,
  PRIMARY KEY (CPF, id_assistido),
  FOREIGN KEY (CPF) REFERENCES responsaveis (CPF),
  FOREIGN KEY (id_assistido) REFERENCES assistidos (id_assistido)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Estrutura para tabela `terapeuta`

CREATE TABLE `terapeutas` (
  `id_terapeuta` int(3) NOT NULL AUTO_INCREMENT,
  `CPF` int(11) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (id_terapeuta),
  UNIQUE KEY (CPF)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=3;


-- Estrutura para tabela `consulta`

CREATE TABLE `consultas` (
  `id_assistido` int(11) NOT NULL,
  `id_terapeuta` int(3) NOT NULL,
  `data_consulta` date,
  `anotacao` varchar(500) DEFAULT NULL,
  `ano_escolar` int(4) DEFAULT NULL,
  PRIMARY KEY (id_assistido, id_terapeuta, data_consulta),
  FOREIGN KEY (id_assistido) REFERENCES assistidos (id_assistido),
  FOREIGN KEY (id_terapeuta) REFERENCES terapeutas (id_terapeuta)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Estrutura para tabela `questoes`

CREATE TABLE `questoes` (
  `nome_teste` varchar(50) NOT NULL,
  `resultado` varchar(50) NOT NULL,
  `idade_cog` int(3),
  `n_questao` int(10) DEFAULT NULL,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (n_questao,tipo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Estrutura para tabela `avaliacao`

CREATE TABLE `avaliacoes` (
  `n_questao` int(10) DEFAULT NULL,
  `tipo` varchar(50) NOT NULL,
  `id_assistido` int(11) NOT NULL,
  `id_terapeuta` int(3) NOT NULL,
  `data_consulta` date,
  `observacao` varchar(500) DEFAULT NULL,
  PRIMARY KEY (n_questao,tipo,id_assistido,id_terapeuta,data_consulta),
  FOREIGN KEY (id_assistido) REFERENCES assistidos (id_assistido),
  FOREIGN KEY (id_terapeuta) REFERENCES terapeutas (id_terapeuta),
  FOREIGN KEY (n_questao,tipo) REFERENCES questoes (n_questao,tipo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Inserindo dados exemplo para a tabela `usuarios`

INSERT INTO `terapeutas` (`id_terapeuta`, `CPF`, `senha`, `codigo`) VALUES
(2, '22222222222', '$2y$10$VgLqByrSeKAqj4GxrS5es.zlgLPVLzoAwqc7f1mPK6wACsYd8PM2C', '74zfun3alshimde2b9ogjtky058qr2j3s2a1x96');


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
