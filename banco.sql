-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.12-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.3.0.5071
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para cadcliente
CREATE DATABASE IF NOT EXISTS `cadcliente` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cadcliente`;

-- Copiando estrutura para tabela cadcliente.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` smallint(6) NOT NULL DEFAULT '1' COMMENT '1-Fisico 2-Juridico',
  `nome` varchar(250) NOT NULL,
  `empresa` varchar(250) DEFAULT NULL,
  `sexo` varchar(1) NOT NULL DEFAULT 'M',
  `idade` int(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `documento` varchar(24) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `endereco_cobranca` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cadcliente.cliente: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT IGNORE INTO `cliente` (`id`, `tipo`, `nome`, `empresa`, `sexo`, `idade`, `data_nascimento`, `documento`, `telefone`, `endereco`, `endereco_cobranca`, `email`) VALUES
	(1, 1, 'Lucca Gustavo ', 'NULL', 'M', 22, '1994-03-17', '281.070.842-84', '(54)29546-0291', 'Avenida Luís Pessoa da Silva Neto 1376', 'NULL', 'lucca_g_pereira@bemarius.com.br'),
	(3, 2, 'Emanuel Davi ', 'CLARO', 'M', 25, '1996-06-25', '037.585.250-00', '(83)35204-4011', '	Vila Almirante Barroso', 'Rua Bela Vista', 'emanuel_d_alves@projetemovelaria.com.br'),
	(10, 2, 'Sandara Oliveira', 'casa nostra', 'F', 22, '2016-01-01', '00.000.000/0000-00', '(91)98146-0391', 'CONJ VAL PARAISO Q 7 N 22', 'CONJ VAL PARAISO Q 7 N 22, 22', 'thiagofdso.ufpa@gmail.com');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
