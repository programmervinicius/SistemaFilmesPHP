CREATE TABLE IF NOT EXISTS `usuarios` (
  `cod_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod_usuario`)
);
