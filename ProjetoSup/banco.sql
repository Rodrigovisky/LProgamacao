
DROP TABLE IF EXISTS `Clientes`;
CREATE TABLE `Clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Tecnicos`;
CREATE TABLE `Tecnicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `especialidade` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `TiposChamados`;
CREATE TABLE `TiposChamados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `prioridade` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Atendimentos`;
CREATE TABLE `Atendimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_problema` text NOT NULL,
  `data_atendimento` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Aberto',
  `Clientes_id` int(11) NOT NULL,
  `Tecnicos_id` int(11) NOT NULL,
  `TiposChamados_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Atendimentos_Clientes_idx` (`Clientes_id`),
  KEY `fk_Atendimentos_Tecnicos_idx` (`Tecnicos_id`),
  KEY `fk_Atendimentos_TiposChamados_idx` (`TiposChamados_id`),
  CONSTRAINT `fk_Atendimentos_Clientes` FOREIGN KEY (`Clientes_id`) REFERENCES `Clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Atendimentos_Tecnicos` FOREIGN KEY (`Tecnicos_id`) REFERENCES `Tecnicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Atendimentos_TiposChamados` FOREIGN KEY (`TiposChamados_id`) REFERENCES `TiposChamados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;