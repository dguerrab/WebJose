SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- -------------------------------------------------
-- Estructura de tabla para la tabla `proyectos`
-- -------------------------------------------------

DROP TABLE IF EXISTS `proyectos`;
CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255)  NOT NULL,
  `descripcion` varchar(255)  NOT NULL,
  `ubicacion` varchar(255) NOT NULL DEFAULT '--',
  `nombre` varchar(255)  NOT NULL,
  `email` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL DEFAULT 'default.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Registros `proyectos`
-- ----------------------------

INSERT INTO `proyectos` VALUES ('1', 'Diseño de vivienda', 'Diseño de una vivienda unifamiliar',
'Astorga, León', 'Pepe', 'pepe@pepe.pepe', 'default.png'),
('2', 'Reforma', '¿Esto va asin? Queria reformar la casina. Cambio y corto.',
'Villares de arriba, León', 'Eustaquio', 'eustaquiftw@what.wuut', 'default.png'),
('3', 'Certificado de eficiencia energética', 'Me han pedido un certificado de esos para la tienda. ¿Hacen de esos aquí?',
'León', 'Paqui', 'abupaqui@xdxd.xd', 'default.png');

