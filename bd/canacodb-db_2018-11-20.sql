-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.6.35 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para canacodb
CREATE DATABASE IF NOT EXISTS `canacodb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `canacodb`;

-- Volcando estructura para tabla canacodb.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `cat_num_ctrl` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cat_num_ctrl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla canacodb.categoria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla canacodb.images
CREATE TABLE IF NOT EXISTS `images` (
  `img_num_ctrl` int(11) NOT NULL AUTO_INCREMENT,
  `img_titulo` char(50) DEFAULT NULL,
  `img_ruta` char(150) DEFAULT NULL,
  `img_fecha_limite` date DEFAULT NULL,
  `img_liga` char(150) DEFAULT NULL,
  PRIMARY KEY (`img_num_ctrl`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1 COMMENT='Gestionar las imagenes del splash de canaco';

-- Volcando datos para la tabla canacodb.images: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`img_num_ctrl`, `img_titulo`, `img_ruta`, `img_fecha_limite`, `img_liga`) VALUES
	(29, 'Imagen de Inicio', 'upload/image002.jpg', '2018-11-01', 'http://php.net/manual/es/datetime.createfromformat.php'),
	(32, 'Segunda Imagen', 'upload/image002.jpg', '2018-11-22', 'https://api.jquery.com/click/'),
	(34, 'fsdfsdf', 'upload/image002.jpg', '2018-11-09', 'sdfsdf'),
	(35, 'e5645456', 'upload/image003.jpg', '2018-11-03', 'wqeqwe');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Volcando estructura para tabla canacodb.noticias
CREATE TABLE IF NOT EXISTS `noticias` (
  `not_num_ctrl` int(11) NOT NULL AUTO_INCREMENT,
  `not_titulo` char(200) DEFAULT NULL,
  `not_detalle` text,
  `not_fuente` char(250) DEFAULT NULL,
  `not_imagen` char(250) DEFAULT NULL,
  `not_usuariocreacion` char(50) DEFAULT NULL,
  `not_fechacreacion` datetime DEFAULT CURRENT_TIMESTAMP,
  `not_fechamodif` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `not_usuariomodif` char(50) DEFAULT NULL,
  PRIMARY KEY (`not_num_ctrl`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla canacodb.noticias: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`not_num_ctrl`, `not_titulo`, `not_detalle`, `not_fuente`, `not_imagen`, `not_usuariocreacion`, `not_fechacreacion`, `not_fechamodif`, `not_usuariomodif`) VALUES
	(8, 'Alerta EU de no viajar a Piedras Negras, Acuña y Gómez Palacio', '<p>Este jueves, el gobierno de<strong> Estados Unidos</strong> actualiz&oacute; las alertas de viaje para sus ciudadanos que viajan a M&eacute;xico y a quienes exhort&oacute; a mantenerse alerta y atender las recomendaciones de seguridad. En general, se mantiene el nivel de la Alerta de Viaje para M&eacute;xico y la evaluaci&oacute;n espec&iacute;fica por estados, aunque sugiere aumentar precauciones en algunas ciudades de Chihuahua, Coahuila, Durango, Morelos, Nayarit y Oaxaca. Por el lado de Coahuila, las ciudades que se incluyen en la alerta son <em>Piedras Negras y Acu&ntilde;a</em>;</p>\n\n<blockquote>\n<p>seg&uacute;n la p&aacute;gina travel.state.gov,</p>\n</blockquote>\n\n<p>que especifica detalles, los empleados del gobierno del pa&iacute;s norteamericano &quot;deben viajar directamente desde los Estados Unidos y observar el toque de queda de medianoche a las 6:00 a.m. en ambas ciudades&quot;. En el caso de Durango, se indica que &quot;los empleados del gobierno de los EU no pueden viajar al &aacute;rea oeste y sur de la Carretera 45 y la ciudad de G&oacute;mez Palacio. En la alerta, se sugiere espec&iacute;ficamente no viajar despu&eacute;s del anochecer, no tomar taxis en la calle y confiar s&oacute;lo en los veh&iacute;culos despachados, como los basados ??en aplicaciones como Uber, o taxis regulados.</p>\n', 'https://www.elsiglodetorreon.com.mx/noticia/1518747.alerta-eu-de-no-viajar-a-piedras-negras-acuna-y-gomez-palacio.html', NULL, NULL, '2018-11-01 10:57:26', '2018-11-16 15:56:08', NULL),
	(11, 'EL ACTOR BRYAN CRANSTON', '<p>EL ACTOR BRYAN CRANSTON, QUIEN DIO VIDA AL PERSONAJE EN BREAKING BAD, NO SABE C&Oacute;MO VOLVER&Iacute;A EN LA CINTA</p>\n\n<p><strong>CIUDAD DE M&Eacute;XICO</strong></p>\n\n<p>El creador de Breaking Bad, Vince Gilligan, ha anunciado que est&aacute; preparando una pel&iacute;cula sobre la exitosa serie, una noticia que ha hecho las delicias de los fans que esperan ansiosos ver de nuevo a &quot;Walter White&quot;. Y aunque el actor Bryan Cranston ha asegurado estar dispuesto a retomar el papel, ha aclarado que el personaje est&aacute; muerto, por lo que no se sabe c&oacute;mo podr&iacute;a volver el protagonista. En una entrevista para NBC, al actor le preguntaron si &quot;Walter White&quot; estaba muerto, a lo que respondi&oacute; con un rotundo &#39;s&iacute;&#39;. &quot;&iquest;Qu&eacute; van a hacer, ense&ntilde;arme en una l&aacute;pida o algo as&iacute;? Eso no es emocionante&quot;, apunt&oacute; Cranston sobre el lme. &quot;No he visto el gui&oacute;n. Supongo que hay algo entre manos, pero quiz&aacute; no&quot;, a&ntilde;adi&oacute; el int&eacute;rprete. &quot;Hay mucha exageraci&oacute;n girando en torno a todo esto&quot;, apunt&oacute;. Cuando le preguntaron que aclarara si le gustar&iacute;a aparecer en la pel&iacute;cula, Cranston mir&oacute; directamente a la c&aacute;mara y declar&oacute;: &quot;Me encantar&iacute;a hacer una pel&iacute;cula de Breaking Bad&quot;. Por el momento no hay muchos detalles sobre la pel&iacute;cula Breaking Bad, salvo que seguir&aacute; a &quot;Jesse Pinkman&quot;, a quien da vida Aaron Paul, despu&eacute;s de que &quot;Walter&quot; lo ayude a escapar de los neonazis. Una idea que ya llevaba rondando a Gilligan desde hace cinco a&ntilde;os, cuando habl&oacute; por primera vez de la cinta. &quot;Mi sensaci&oacute;n personal es que se escapa&quot;, cont&oacute; Gilligan sobre Jesse. &quot;Pero lo m&aacute;s probable, tan negativo como suena, es que encontraran sus huellas dactilares en todo el laboratorio y lo descubrieran en un d&iacute;a, una semana o un mes. Y &eacute;l todav&iacute;a estar&iacute;a en el punto de mira por el asesinato de dos agentes federales.</p>\n\n<p>Pero s&iacute;, aunque ese es el resultado m&aacute;s probable, la forma en que lo veo es que se escap&oacute; y lleg&oacute; a Alaska, cambi&oacute; su nombre y tuvo una nueva vida. Quiero eso para el chico. Se lo merece&quot;, a&ntilde;adi&oacute; el creador. Ya sea a trav&eacute;s de ashbacks o como producto de la imaginaci&oacute;n de &quot;Jesse&quot;, no parece posible una aparici&oacute;n de Cranston como el resucitado &quot;Walter White&quot;, aunque todo apunta a que, de una manera u otra, el personaje dar&aacute; el salto a la gran pantalla.</p>\n', 'https://www.elsiglodetorreon.com.mx/noticia/1519015.walter-white-esta-muerto.html', NULL, NULL, '2018-11-02 13:39:12', '2018-11-16 15:54:01', NULL),
	(12, 'Tendrá Nuevo León un Cristo más alto que el de Brasil', '<p>&nbsp;</p>\n\n<p>Mediante las redes sociales, fue presentado el proyecto de la fundaci&oacute;n Cristo Milagroso A.C. que pretende tener el Cristo Milagroso m&aacute;s alto que el de Corcovado en Brasil. La realizaci&oacute;n de este monumental Cristo comenzar&aacute; el pr&oacute;ximo 23 de diciembre; la escultura medir&aacute; 33 metros de altura y estar&aacute; sobre una base de concreto de 5 metros ubicado en el municipio de Santiago, considerado Pueblo M&aacute;gico. Adem&aacute;s, la informaci&oacute;n compartida en Facebook tambi&eacute;n dio a conocer que esta obra estar&aacute; a cargo de Oscar Garza Valtier y Luis Castro Villarreal. La ubicaci&oacute;n exacta de este monumento ser&aacute; en la monta&ntilde;a que se localiza en el Fraccionamiento San Jorge, en un terreno donado por Luis Andonie.</p>\n', 'https://www.elsiglodetorreon.com.mx/noticia/1518779.tendra-nuevo-leon-un-cristo-mas-alto-que-el-de-brasil.html', NULL, NULL, '2018-11-05 11:54:42', '2018-11-20 11:32:03', NULL),
	(13, 'Hemimastigotes, un nuevo reino de seres vivos', 'Un equipo de científicos canadienses descubrió un tipo de organismo denominado hemimastigote que no se enmarca ni en el reino animal ni el vegetal ni el de los hongos y que, de hecho, constituye una nueva rama de la evolución de la vida.\nEl descubrimiento de los investigadores de la Universidad de Dalhousie (Canadá) fue publicado en la revista científica Nature y fue difundido por medios de comunicación canadienses.\n\nLos hemimastigotes son descritos como organismos "protistas predadores con dos filas de flagela y una arquitectura celular única".\n\nLos investigadores explicaron que los hemimastigotes "conforman un linaje independiente de nivel de reino" y que la anterior clasificación como filo (o división), el siguiente nivel por debajo de reino, "subestima la distinción evolutiva de este grupo".\n\nLos hemimastigotes son microbios conocidos desde el siglo XIX pero el análisis genético de ejemplares recogidos en el suelo de un parque de la ciudad canadiense de Halifax señalan que son totalmente diferentes de animales y hongos.\n\nAdemás de los reinos animal, vegetal y hongos de seres vivos, la biología moderna contempla los reinos protista y monera, aunque esta clasificación está siendo redefinida.\n\nLos científicos canadienses indicaron que animales y fungi tienen más en común que los hemimastigotes con cualquiera de los dos grandes grupos de organismo vivos.\n\nLos investigadores también apuntaron que el descubrimiento ayuda a resolver algunas de las cuestiones pendientes en el árbol de la vida.\n\n', 'https://www.elsiglodetorreon.com.mx/noticia/1519041.hemimastigotes-un-nuevo-reino-de-seres-vivos.html', NULL, NULL, '2018-11-05 11:57:49', '2018-11-16 14:57:11', NULL),
	(14, 'Pemex cerrará llave del gas natural', 'Los contratos de suministro de gas natural a usuarios por parte de Petróleos Mexicanos Transformación Industrial (TRI) se cancelarán a partir del primero de enero de 2019.\nDe acuerdo al diario Reforma, la empresa informó que la oferta del combustible había sido "inestable y deficitaria" para atender la demanda.\n\nA través de un documento Pemex TRI avisó que la cancelación del suministro se dará de manera anticipada.\n\nLa compañía señaló en el documento que "es desde agosto de 2018 que (Pemex TRI) no ha podido confirmarle sus solicitudes (pedidos) de gas natural, por lo que, los consumos de su empresa están siendo sujetos a pagos de desbalances importantes".\n\nComo parte de su explicación, mencionó la regulación "asimétrica" de la Comisión Reguladora de Energía (CRE) y la falta de infraestructura de transporte, por las cuales las actividades de comercialización se vieron reducidas.\n\nTransformación Industrial añadió que la terminación del contrato no libera a ambas partes de sus obligaciones sobre confidencialidad o de pagar deudas, estableciendo en el documento, "cualquier obligación de pago derivada de entregas de gas natural durante la vigencia de ‘el contrato’, deberá ser cubierta en su totalidad".', 'https://www.elsiglodetorreon.com.mx/noticia/1519026.pemex-cerrara-llave-del-gas-natural.html', NULL, NULL, '2018-11-07 15:17:26', '2018-11-16 14:55:28', NULL);
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;

-- Volcando estructura para tabla canacodb.socios
CREATE TABLE IF NOT EXISTS `socios` (
  `soc_num_ctrl` int(11) NOT NULL AUTO_INCREMENT,
  `soc_nombre` varchar(100) DEFAULT NULL,
  `cat_num_ctrl` int(11) DEFAULT NULL,
  `soc_email` varchar(100) DEFAULT NULL,
  `soc_rfc` varchar(13) DEFAULT NULL,
  `soc_estatus` tinyint(1) DEFAULT NULL,
  `soc_usuariocreacion` varchar(15) DEFAULT NULL,
  `soc_fechacreacion` datetime DEFAULT NULL,
  `soc_usuariomodif` varchar(15) DEFAULT NULL,
  `soc_fechamodif` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `soc_votos` int(11) DEFAULT '0',
  PRIMARY KEY (`soc_num_ctrl`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla canacodb.socios: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `socios` DISABLE KEYS */;
INSERT INTO `socios` (`soc_num_ctrl`, `soc_nombre`, `cat_num_ctrl`, `soc_email`, `soc_rfc`, `soc_estatus`, `soc_usuariocreacion`, `soc_fechacreacion`, `soc_usuariomodif`, `soc_fechamodif`, `soc_votos`) VALUES
	(35, 'Genaro Pérez del Risco', 0, 'genaro.perez@gmail.com', 'bAD21312312', 1, NULL, '2018-10-26 16:49:53', NULL, '2018-11-20 15:06:46', 14),
	(41, 'Antonio Vargas', 0, 'antonio@vargas.com', '81230930912', 1, NULL, '2018-11-09 15:10:44', NULL, '2018-11-20 14:50:07', 9),
	(54, 'qweqw', 0, 'qweqw', 'eqweqwe', 1, NULL, '2018-11-12 12:31:58', NULL, '2018-11-20 15:10:37', 3),
	(55, 'Papas la Costeña', 0, 'papas@gmial.com', 'FSKJ79823612', 1, NULL, '2018-11-15 12:02:45', NULL, '2018-11-20 15:10:42', 3);
/*!40000 ALTER TABLE `socios` ENABLE KEYS */;

-- Volcando estructura para tabla canacodb.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usu_num_ctrl` int(11) NOT NULL AUTO_INCREMENT,
  `usu_clave` varchar(25) NOT NULL,
  `usu_nombre` varchar(30) NOT NULL,
  `usu_rol` int(11) NOT NULL COMMENT '(1 admin,2 capturista)',
  PRIMARY KEY (`usu_num_ctrl`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla canacodb.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`usu_num_ctrl`, `usu_clave`, `usu_nombre`, `usu_rol`) VALUES
	(1, '123', 'admin', 1),
	(2, '123', 'invitado', 2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla canacodb.votacion
CREATE TABLE IF NOT EXISTS `votacion` (
  `vot_num_ctrl` int(11) NOT NULL AUTO_INCREMENT,
  `vot_id` varchar(12) DEFAULT NULL,
  `vot_activo` tinyint(4) NOT NULL,
  `vot_anio` varchar(4) DEFAULT NULL,
  `soc_num_ctrl` int(11) DEFAULT NULL,
  `vot_fecha_inicio` date DEFAULT NULL,
  `vot_fecha_fin` date DEFAULT NULL,
  `actv_nominados` tinyint(4) NOT NULL DEFAULT '0',
  `actv_resultados` tinyint(4) NOT NULL DEFAULT '0',
  `vot_mensaje` text,
  PRIMARY KEY (`vot_num_ctrl`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla canacodb.votacion: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `votacion` DISABLE KEYS */;
INSERT INTO `votacion` (`vot_num_ctrl`, `vot_id`, `vot_activo`, `vot_anio`, `soc_num_ctrl`, `vot_fecha_inicio`, `vot_fecha_fin`, `actv_nominados`, `actv_resultados`, `vot_mensaje`) VALUES
	(1, NULL, 1, '2018', NULL, '2018-11-13', '2018-11-15', 0, 1, 'Mensaje de Prueba para ver');
/*!40000 ALTER TABLE `votacion` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
