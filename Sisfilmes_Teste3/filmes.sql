CREATE TABLE IF NOT EXISTS `filmes` (
  `cod_filme` int(100) NOT NULL AUTO_INCREMENT,
  `filme` varchar(100) DEFAULT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `tip` varchar(100) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `ator` varchar(200) DEFAULT NULL,
  `diretor` varchar(200) DEFAULT NULL,
  `produtora` varchar(100) DEFAULT NULL,
  `ano` varchar(10) DEFAULT NULL,
  `duracao` varchar(60) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod_filme`)
);
