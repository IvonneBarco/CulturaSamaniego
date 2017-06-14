-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2016 a las 05:12:47
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `a5927512_cultura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artesano`
--

CREATE TABLE `artesano` (
  `identificacion` varchar(12) NOT NULL,
  `expedicion` varchar(45) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `lugarnacimiento` varchar(45) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `estadocivil` varchar(40) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `estrato` int(11) DEFAULT NULL,
  `niveleducativo` varchar(65) DEFAULT NULL,
  `inicioactividadesl` varchar(5) DEFAULT NULL,
  `tipodeformacionartistica` varchar(55) DEFAULT NULL,
  `principalactividad` varchar(10) DEFAULT NULL,
  `areacultural` varchar(45) DEFAULT NULL,
  `actividadquedesarrolla` varchar(30) DEFAULT NULL,
  `numeropernucleo` varchar(40) DEFAULT NULL,
  `actividaddiferente` varchar(50) DEFAULT NULL,
  `ingresosartisticos` int(11) DEFAULT NULL,
  `ingresosmensuales` int(11) DEFAULT NULL,
  `cabezadefamilia` varchar(8) DEFAULT NULL,
  `discapacidad` varchar(30) DEFAULT NULL,
  `comunidadetnica` varchar(40) DEFAULT NULL,
  `sisben` varchar(5) DEFAULT NULL,
  `nivelsisben` decimal(2,0) DEFAULT NULL,
  `sistemasalud` varchar(50) DEFAULT NULL,
  `pensiones` varchar(5) DEFAULT NULL,
  `riesgos` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artesano`
--

INSERT INTO `artesano` (`identificacion`, `expedicion`, `nombres`, `apellidos`, `fechanacimiento`, `lugarnacimiento`, `edad`, `genero`, `estadocivil`, `direccion`, `telefono`, `correo`, `estrato`, `niveleducativo`, `inicioactividadesl`, `tipodeformacionartistica`, `principalactividad`, `areacultural`, `actividadquedesarrolla`, `numeropernucleo`, `actividaddiferente`, `ingresosartisticos`, `ingresosmensuales`, `cabezadefamilia`, `discapacidad`, `comunidadetnica`, `sisben`, `nivelsisben`, `sistemasalud`, `pensiones`, `riesgos`) VALUES
('1086132498', 'Sandona', 'Leidy Diana ', 'Martinez Betancourth', '1987-02-09', 'Sandona', 28, 'Femenino', 'Soltero', 'Barrio Melendez', '3137685203', 'leidydianamabe@gmail.com', 1, 'tecnicootecnologico', '2000', 'autodidacta', 'si', 'literatura', 'DiseÃ±o de Motivos', '5', 'Estudiar', 600000, 1200000, 'si', 'no', 'otro', 'si', '15', 'eps', 'no', 'si'),
('1086134028', 'SandonÃ ', 'Neyi  ', 'Narvaez Chaves', '0000-00-00', '27', 27, 'Femenino', 'Casada', 'San Antonio Alto', '3112875688', 'neyinarvaez@hotmail.com', 1, 'Universitario', '1980', 'Cultura', 'Danza', 'Teatro', 'Artistica', '4', 'No tengo', 1200000, 2000000, 'si', 'no', 'no', '1', '20', 'Emsanar', 'no', 'no'),
('1086134765', 'Sandona', 'Lury Yazmin', 'Narvaez Chaves', '1987-09-01', 'Sandona', 25, 'Femenino', 'Casado', 'Sandona', '3112875688', 'lurynarvaez@hotmail.com', 1, 'universitariacontitulo', '1990', 'transmision', 'si', 'literatura', 'Danza', '2', '3', 1200000, 2000000, 'si', 'si', 'negritudes', 'si', '30', 'ars', 'si', 'si'),
('1086135885', 'Sandona', 'Javier Esteban', 'Coronel Gomez', '1991-04-07', 'Sandona', 24, 'Masculino', 'Soltero', 'b/ hernando gomez', '3203938038', 'javest07@gmail.com', 1, 'universitariacontitulo', '1990', 'autodidacta', 'si', 'literatura', 'diciembre', '5', 'educativas', 1000000, 2000000, 'no', 'no', 'otro', 'si', '1', 'eps', 'no', 'no'),
('1086138871', 'Sandona', 'Maria Camila', 'Fajardo Cruz', '1996-05-26', 'Sandona', 19, 'Femenino', 'Soltero', 'Barrio san Francisco', '3145699416', 'kmifajardo@gmail.com', 2, 'secundariacompleta', '2000', 'autodidacta', 'no', 'danza', 'Bailar', '6', 'Estudiar', 1000000, 2000000, 'no', 'no', 'indigenas', 'si', '2', 'eps', 'si', 'si'),
('1234567', 'Sandona', 'Claudia Fabiola', 'Perez Megia', '1987-11-11', 'Sandona', 26, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '0', '', '', ''),
('93114477', '11/11/2011', 'Maria', 'Paz', '1993-10-22', 'Pasto', 22, 'Femenino', 'Soltero', 'MZ 2', '7895452', 'use@user.com', 1, 'tecnicootecnologico', '2000', 'autodidacta', 'si', 'danza', 'danza', '1', 'ss', 2000000, 2000000000, 'si', 'no', 'otro', 'si', '10', 'ninguno', 'si', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descripcion` tinytext,
  `estado` varchar(30) NOT NULL,
  `fechapub` date NOT NULL,
  `imagen` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`codigo`, `titulo`, `descripcion`, `estado`, `fechapub`, `imagen`) VALUES
(2, 'concurso del Afiche', 'Lo que se tendra en cuenta para la premiacion serÃ¡ la creatividad de los participantes', 'Activo', '2016-03-14', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conartesanos`
--

CREATE TABLE `conartesanos` (
  `identificacion` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conartesanos`
--

INSERT INTO `conartesanos` (`identificacion`, `descripcion`, `imagen`) VALUES
('123', 'Juan Carlos Rodriguez: Artesano en carton, Telefono: 7287839', 'art1.png'),
('1086133907', 'Jhon artesano paja toquilla', '1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eveninstitucionales`
--

CREATE TABLE `eveninstitucionales` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eveninstitucionales`
--

INSERT INTO `eveninstitucionales` (`codigo`, `titulo`, `descripcion`, `imagen`, `orden`, `estado`) VALUES
(1, 'LETRAS VIAJERAS', 'Proyecto financiado por el Ministerio de Cultura mediante el Programa Nacional ConcertaciÃ³n, que facilita, apoya, reconoce y promueve los diversos procesos de creaciÃ³n, investigaciÃ³n, formaciÃ³n y manifestaciones culturales fomentando las iniciativas culturales locales que contribuyen al afianzamiento de la democracia, al reconocimiento y la formaciÃ³n de valores culturales, generando sentido de pertenencia por un entorno social. Proyecto asignado y aprobado mediante Convenio de Apoyo de Actividades ArtÃ­sticas y Culturales NÃºmero 0514/16; suscrito entre el Municipio de SandonÃ¡ y el Ministerio de Cultura. Recursos asignados: $34.000.000. Con fecha de inicio de ejecuciÃ³n desde el 2 de Febrero de 2016 hasta el 02 de Septiembre del mismo aÃ±o.OBJETO:El proyecto â€œLetras Viajerasâ€ consiste en la dinamizaciÃ³n de la Biblioteca PÃºblica de SandonÃ¡ como un servicio de extensiÃ³n y se constituye en una estrategia para llegar a grupos de poblaciÃ³n con dificultades de acceso al servicio de biblioteca enfatizando la dificultad en el sector rural. Se ejecutaran actividades tendientes a promocionar los hÃ¡bitos de lectura, el interÃ©s por la escritura, la apreciaciÃ³n cinematogrÃ¡fica y el aprendizaje para el manejo bÃ¡sico de las herramientas informÃ¡ticas, con el uso integral de los recursos que actualmente se cuenta, tales como la sala de informÃ¡tica, la serie audiovisual y la colecciÃ³n bibliogrÃ¡fica. ', 'img_mision.jpg', 1, 1),
(2, 'Servicios Innovadores', '\r\n						<center><span class="titlos">VISITA DEL MINISTERIO DE CULTURA</span></center><br>\r\n						<p class="post-contenido text-justify font-cs">\r\n\r\n							Del 4 al 8 de abril de 2016 se recibe la visita de un delegado de parte del Ministerio de Cultura ha \r\n							implementar acciones de asistencia tÃ©cnica y acompaÃ±amiento a las bibliotecas pÃºblicas del paÃ­s en los\r\n							diferentes servicios bibliotecarios ofrecidos a la comunidad.<br><br>\r\n\r\n							La biblioteca municipal de SandonÃ¡ ha sido considerada como prioritaria \r\n							en el desarrollo del marco de Estrategia de Tutores Departamentales del Ministerio\r\n							de Cultura y se recibe la visita de la Tutora Nancy CastaÃ±eda quien capacito sobre la \r\n							implementaciÃ³n de los tres servicios innovadores â€œGrandes Preguntasâ€, â€œFotografÃ­a y Memoriaâ€ y \r\n							â€œCineforosâ€; al igual se implementara y promoverÃ¡ el uso y apropiaciÃ³n del sistema de la â€œLlave del Saberâ€ \r\n							teniendo como principal convocar y articular a la comunidad a dichos procesos incrementado el nÃºmero de usuarios de la biblioteca.<br><br>\r\n\r\n							En articulaciÃ³n entre la CoordinaciÃ³n de Cultura y la Biblioteca Municipal se emprende actividades para implementaciÃ³n de \r\n							los nuevos servicios innovadores para trabajar con los usuarios de la Biblioteca, al igual que para ello por parte del Ministerio\r\n							se hace entrega de herramientas didÃ¡cticas para desarrollo de las diferentes actividades que se realizarÃ­an con los tres servicios innovadores. <br><br>\r\n\r\n\r\n							Se capacita al Administrador de la Biblioteca y al Equipo de Letras Viajeras como grupo de \r\n							apoyo para la implementaciÃ³n de estos nuevos servicios y se apliquen en las instalaciones de \r\n							la Biblioteca al igual que en las diferentes actividades que se emprenden en actividades extramurales con\r\n							emprendimiento de la CoordinaciÃ³n de Cultura y el Administrador de la Biblioteca Municipal.<br>	<br>\r\n\r\n							Los nuevos servicios innovadores se describen a continuaciÃ³n <br><br>						\r\n						\r\n						</p>\r\n						<br>\r\n					</article>\r\n\r\n					<article class="post clearfix">\r\n\r\n						<p class="post-contenido text-justify font-cs">\r\n\r\n							<span class="letter-cs">1. GRANDES PREGUNTAS Â¿?:</span><br>\r\n\r\n							Por medio de la creaciÃ³n de espacios auto gestionados de \r\n							aprendizaje colaborativo, se espera motivar a las personas a\r\n							plantearse Grandes Preguntas, para encontrar mÃºltiples respuestas por \r\n							medio del uso de los diversos recursos de informaciÃ³n con los que cuenta la \r\n							Biblioteca Municipal, como Internet, libros, revistas y videos.\r\n\r\n							<section class="img-responsive">\r\n								<img src="./images/img_9.jpg" class="img-responsive" alt="grandes-preguntas" id="grandes-preguntas">\r\n							</section>							\r\n						\r\n						</p>							\r\n						<br>\r\n					</article>\r\n\r\n					<article class="post clearfix">\r\n						<p class="post-contenido text-justify font-cs">\r\n\r\n							<span class="letter-cs">2. CINEFOROS EN LA BIBLIOTECA MUNICIPAL.</span><br>\r\n\r\n							Esta es una metodologÃ­a que busca promover el desarrollo de Cineforos en \r\n							las bibliotecas con el objetivo de generar espacios de dialogo alrededor de las \r\n							diferentes realidades culturales y sociales que abordan en los contenidos audiovisuales.<br>\r\n\r\n							<section class="img-responsive">\r\n								<img src="./images/img_10.jpg" class="img-responsive" alt="cineforos" id="cineforos">\r\n							</section>\r\n							\r\n						</p>\r\n						<br>\r\n\r\n					</article>\r\n\r\n					<article class="post clearfix">\r\n						<p class="post-contenido text-justify font-cs">\r\n\r\n							<span class="letter-cs">3. FOTOGRAFIA Y MEMORIA EN LA BIBLIOTECA MUNICIPAL.</span><br>\r\n							\r\n							Este servicio busca incentivar el desarrollo de procesos comunitarios en torno a la\r\n							recuperaciÃ³n de la memoria fotogrÃ¡fica del Municipio. <br><br>\r\n\r\n							Adicionalmente, se generarÃ¡ una plataforma virtual que permitirÃ¡ compartir y difundir las prÃ¡cticas de \r\n							recuperaciÃ³n de memoria fotogrÃ¡fica local que se desarrollan desde las bibliotecas pÃºblicas.<br><br>\r\n							<section class="img-responsive">\r\n								<img src="./images/img_11.jpg" class="img-responsive" alt="las-mercedes" id="las-mercedes">\r\n							</section>\r\n\r\n							<p class="post-contenido text-justify font-cs">\r\n								En el presente documento se registra las diferentes actividades\r\n								que se han realizado desde la CoordinaciÃ³n de Cultura\r\n								y la Biblioteca Municipal con el apoyo y emprendimiento de\r\n								la AdministraciÃ³n Municipal en Cabeza del Dr. Byron Zambrano Rosas.\r\n							</p>\r\n\r\n						<br>\r\n					', 'img_11.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `codevento` int(11) NOT NULL,
  `codmodalidad` varchar(40) NOT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `version` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `valor` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`codevento`, `codmodalidad`, `estado`, `version`, `fecha`, `valor`, `descripcion`) VALUES
(1003, '101', 'Activo', '2016-2', '2016-08-08', 20000, 'jkk'),
(1002, '101', 'Activo', '2016-2', '2016-08-08', 10000, 'jj'),
(1005, '103', 'Activo', '2016-2', '2016-08-08', 30000, 'eeee'),
(1004, '101', 'Activo', '2016-2', '2016-07-29', 20000, 'jhghjg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE `info` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `info`
--

INSERT INTO `info` (`codigo`, `titulo`, `descripcion`, `orden`, `estado`) VALUES
(7, 'Mision', 'Somos la entidad del Gobierno Municipal que lidera la garantÃ­a de las condiciones \n							para el ejercicio efectivo y progresivo de los derechos culturales de los habitantes \n							de SandonÃ¡, mediante la formulaciÃ³n concertada de polÃ­ticas, la ejecuciÃ³n, \n							evaluaciÃ³n y seguimiento a programas, procesos sectoriales, poblacionales y locales \n							en los campos del arte y la cultura, para su promociÃ³n como factor de desarrollo \n							humano y de sostenibilidad del municipio.', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `numeroinscripciones` int(4) NOT NULL,
  `codigo` varchar(8) NOT NULL,
  `codigomodalidad` varchar(8) DEFAULT NULL,
  `idartesano` varchar(12) NOT NULL,
  `fechainscripcion` date DEFAULT NULL,
  `ordenevento` varchar(45) DEFAULT NULL,
  `nmotivo` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`numeroinscripciones`, `codigo`, `codigomodalidad`, `idartesano`, `fechainscripcion`, `ordenevento`, `nmotivo`) VALUES
(101, '1003', NULL, '1086134028', '2016-08-01', NULL, 'La alegria de vivir ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `codigomodalidad` int(11) NOT NULL,
  `nombremodalidad` varchar(50) NOT NULL,
  `tipoevento_codigo` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`codigomodalidad`, `nombremodalidad`, `tipoevento_codigo`) VALUES
(101, 'Cuenteros', '04'),
(102, 'Canto a mi tierra', '04'),
(103, 'Versos por la paz', '04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `texto` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `identificacion` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(21) COLLATE utf8_spanish_ci NOT NULL,
  `fechana` date NOT NULL,
  `genero` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estrato` int(1) NOT NULL,
  `estadocivil` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `profesion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `funciones` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `fechaingreso` date NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`identificacion`, `nombres`, `direccion`, `telefono`, `fechana`, `genero`, `estrato`, `estadocivil`, `profesion`, `cargo`, `funciones`, `fechaingreso`, `email`, `imagen`, `estado`) VALUES
('1086134028', 'Neyi Narvaez Chaves', 'SandonÃ¡', '3112875688', '2016-11-11', 'Femenimo', 1, 'Casada', 'Ingeniera de Sistemas', 'Docente', 'Orientado en el area de informatica', '2008-06-20', 'neyinarvaez@hotmail.com', 'images (4).jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `noticia` varchar(450) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id_slider`, `titulo`, `imagen`, `noticia`, `link`, `orden`, `estado`, `fecha`) VALUES
(26, 'Importancia del contacto con la naturaleza en la infancia', 'noticias7.jpg', 'El contacto directo con la naturaleza en la infancia es realmente importante para el desarrollo de la personalidad de los niÃ±os, puesto que les ayuda a convertirse en adultos saludables y conscientes del entorno que les rodea.\r\n\r\nActividades lÃºdicas, deportivas, o de descubrimiento, cualquier actividad en un entorno natural resulta muy estimulante para ellos.\r\n\r\nLa naturaleza saca lo mejor de los niÃ±os: en entornos naturales, de montaÃ±a o mar', 'd', 7, 1, '2016-06-24'),
(24, 'Los Fenomenos Naturales', 'noticias6.jpg', 'Estos fenÃ³menos afectan a casi toda la Tierra. En\r\ntiempos pasados, la gente tenÃ­a leyendas para\r\nexplicar estos fenÃ³menos. DecÃ­an que el volcÃ¡n\r\nestaba enojado, o que los dioses demandaban\r\nun sacrificio. Hoy dÃ­a, la ciencia, la tecnologÃ­a\r\ny la historia nos ayudan a comprender estos\r\neventos en lugar de simplemente temerlos.', 'c', 2, 1, '2016-06-23'),
(28, 'Socializan Sitio Web de la Casa de la cultura de SandonÃ ', 'socialisar.jpg', 'Los estudiantes del programa tecnicos en programacion de sistemas del instituto de capacitaciÃ²n COMPUNET socializaron a la coordinaciÃ²n de cultura el sitio interactivo para gestores culturales', 'http://informativodelguaico.blogspot.com.co/2016/06/ciclista-consaqueno-noveno-en-primera.html', 1, 1, '2016-06-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcalendario`
--

CREATE TABLE `tcalendario` (
  `id` int(255) NOT NULL,
  `fecha` date NOT NULL,
  `evento` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tcalendario`
--

INSERT INTO `tcalendario` (`id`, `fecha`, `evento`) VALUES
(21944, '2016-03-31', 'Sabado Santo'),
(21945, '2016-03-26', 'Sabado Santo'),
(21946, '2016-04-01', 'Reunion para Padres de familia'),
(21947, '2016-04-22', 'Concurso de canto'),
(21949, '2016-04-30', 'Nuevo evento'),
(21950, '2016-06-24', 'Sustentacion Compunet: 9am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoevento`
--

CREATE TABLE `tipoevento` (
  `codigo` varchar(8) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoevento`
--

INSERT INTO `tipoevento` (`codigo`, `nombre`) VALUES
('03', 'semana cultural'),
('02', '31 de diciembre'),
('01', 'Carnaval de negros y blancoss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` varchar(13) NOT NULL,
  `usuario_nombre` varchar(30) NOT NULL,
  `usuario_clave` varchar(10) NOT NULL,
  `usuario_email` varchar(50) NOT NULL,
  `usuario_freg` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nombre`, `usuario_clave`, `usuario_email`, `usuario_freg`) VALUES
('1086134028', 'neyi', '1234', 'neyinarvaez@hotmail.com', '2016-03-08'),
('1', 'admin', 'admin', 'neyinarvaez@hotmail.com', '2016-06-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artesano`
--
ALTER TABLE `artesano`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `imagen` (`imagen`);

--
-- Indices de la tabla `conartesanos`
--
ALTER TABLE `conartesanos`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `eveninstitucionales`
--
ALTER TABLE `eveninstitucionales`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`codevento`),
  ADD KEY `fk_EVENTO_MODALIDAD1` (`codmodalidad`);

--
-- Indices de la tabla `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`numeroinscripciones`),
  ADD KEY `fk_INSCRIPCIONES_EVENTO1_idx` (`codigomodalidad`),
  ADD KEY `fk_inscripciones_artesano1_idx` (`idartesano`),
  ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`codigomodalidad`),
  ADD KEY `fk_modalidad_tipoevento1_idx` (`tipoevento_codigo`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indices de la tabla `tcalendario`
--
ALTER TABLE `tcalendario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoevento`
--
ALTER TABLE `tipoevento`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `usuario_nombre` (`usuario_nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eveninstitucionales`
--
ALTER TABLE `eveninstitucionales`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `info`
--
ALTER TABLE `info`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `tcalendario`
--
ALTER TABLE `tcalendario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21951;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
