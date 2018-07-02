-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-07-2018 a las 18:11:27
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `update_frank`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `cod_banner` int(11) NOT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `subtitulo` varchar(250) DEFAULT NULL,
  `texto` text,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`cod_banner`, `imagen`, `titulo`, `subtitulo`, `texto`, `orden`, `estado`) VALUES
(1, 'bg3.jpg', 'MARKETING POLÃTICO', 'Logra Resultados Importantes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore minus ipsum eos consequatur perferendis, eius expedita neque.', 0, 1),
(2, 'bg2.jpg', 'Ipsum dolor sit Amet', 'Lorem Ipsum dolor Sit Amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore minus ipsum eos consequatur perferendis, eius expedita neque.', 1, 1),
(3, 'banner3.jpg', 'Ipsum dolor sit Amet', 'Lorem Ipsum dolor Sit Amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore minus ipsum eos consequatur perferendis, eius expedita neque.', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `cod_contact` int(11) NOT NULL,
  `direction` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `map` varchar(9999) DEFAULT NULL,
  `form_mail` varchar(250) DEFAULT NULL,
  `cart_mail` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`cod_contact`, `direction`, `phone`, `mobile`, `email`, `map`, `form_mail`, `cart_mail`) VALUES
(1, 'Av. Los Mirtos 2532- La Molina. Lima, PerÃº.', '(+51) 987 654 321', '', 'frank@website.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.340381047902!2d-77.02910538520699!3d-12.088834345975899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c863c551b9e3%3A0x16d977cf995bccf8!2sCalle+Los+Mirtos%2C+Lince+15046!5e0!3m2!1ses!2spe!4v1525704230478\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'raulupdate@gmail.com', 'raulmartiarena89@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `cod_contenido` int(11) NOT NULL,
  `contenido` text,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`cod_contenido`, `contenido`, `estado`) VALUES
(1, 'Somos una empresa que se dedica a desarrollarÂ <b>estrategias de campaÃ±as de marketing polÃ­tico</b>, identificamos las necesidades del cliente en base a las necesidades de la poblaciÃ³n para luego crear conceptos e ideas que nos permitan realizar piezas grÃ¡ficas, material audiovisual, jingles yÂ <b>comunicaciÃ³n de masas en general.</b>', 1),
(2, 'Conocedores de las principales herramientas de marketing polÃ­tico y con la experiencia de haber manejado otras candidaturas y problemas urbanos en el PerÃº, nuestro equipo puede ayudarte en:', 1),
(3, 'Hemos reunido lo mejor de nuestra experiencia profesional en Marketing Político en el Perú, en la siguiente galería', 1),
(4, 'Entérate de las últimas novedades o actividades en Marketing Político, en nuestro blog', 1),
(5, 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since', 1),
(6, 'BrÃ­ndenos sus datos, envÃ­anos un email o un whatsapp y un asesor especializado se comunicarÃ¡ con usted con total confidencialidad', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `cod_equipo` int(11) NOT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `cargo` varchar(250) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`cod_equipo`, `imagen`, `nombre`, `cargo`, `orden`, `estado`) VALUES
(4, '1.jpg', 'Frank McBride', 'Especialista en Marketing PolÃ­tico', 0, 1),
(5, '2.jpg', 'Roberto Indacochea', 'Analista de mercado', 1, 1),
(6, '3.jpg', 'Jose Luis Carranza', 'Productor General', 3, 1),
(7, '4.jpg', 'Cristiano Ronaldo', 'Content Manager', 3, 1),
(8, '5.jpg', 'Christian Benavente', 'Comunicador Social Senior', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `cod_contacto` int(11) NOT NULL,
  `nombres` varchar(250) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `mensaje` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `cod_galeria` int(11) NOT NULL,
  `cod_categoria` int(11) DEFAULT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`cod_galeria`, `cod_categoria`, `titulo`, `descripcion`, `imagen`, `video`, `orden`, `estado`) VALUES
(2, 3, 'Crearive Design', 'Work description here', '1.jpg', 'https://www.youtube.com/watch?v=Omz3ja6zsIU', 0, 1),
(3, 4, 'Crearive Design', 'Work description here', '2.jpg', '', 1, 1),
(4, 5, 'Lorem Ipsum 3', 'Work description here', '3.jpg', '', 2, 1),
(5, 3, 'Crearive Design', 'Work description here', '4.jpg', 'https://www.youtube.com/watch?v=_DXyfqiwEYw', 3, 1),
(6, 4, 'Lorem Ipsum 5', 'Es el texto de Prueba que siempre se usa', '5.jpg', '', 4, 1),
(7, 5, 'Lorem Ipsum 6', 'Es el texto de Prueba que siempre se usa', '6.jpg', '', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias_categorias`
--

CREATE TABLE `galerias_categorias` (
  `cod_categoria` int(11) NOT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galerias_categorias`
--

INSERT INTO `galerias_categorias` (`cod_categoria`, `categoria`, `slug`, `orden`, `estado`) VALUES
(3, 'GalerÃ­a 1', 'galeria-1', 0, 1),
(4, 'GalerÃ­a 2', 'galeria-2', 1, 1),
(5, 'GalerÃ­a 3', 'galeria-3', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias_fotos`
--

CREATE TABLE `galerias_fotos` (
  `cod_foto` int(11) NOT NULL,
  `cod_galeria` int(11) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galerias_fotos`
--

INSERT INTO `galerias_fotos` (`cod_foto`, `cod_galeria`, `imagen`) VALUES
(1, 1, 'foto1.jpg'),
(2, 1, 'foto2.jpg'),
(3, 1, 'foto3.jpg'),
(5, 2, 'foto4.jpg'),
(6, 2, 'foto5.jpg'),
(7, 3, 'foto6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metatags`
--

CREATE TABLE `metatags` (
  `cod_meta` int(11) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `slogan` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `keywords` varchar(250) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `ico` varchar(250) DEFAULT NULL,
  `face1` varchar(250) DEFAULT NULL,
  `face2` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `metatags`
--

INSERT INTO `metatags` (`cod_meta`, `titulo`, `slogan`, `description`, `keywords`, `logo`, `url`, `ico`, `face1`, `face2`) VALUES
(1, 'Frank Mcbride', '', 'Somos una empresa que se dedica a desarrollar estrategias de campaÃ±as de marketing polÃ­tico, identificamos las necesidades del cliente en base a las necesidades de la poblaciÃ³n para luego crear conceptos e ideas que nos permitan realizar piezas gr', 'Marketing PolÃ­tico, AsesorÃ­a Candidatos polÃ­ticos', 'logo-light.png', 'localhost/proyectos/frank/', 'ico.ico', 'face1.jpg', 'face2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `cod_noticia` int(11) NOT NULL,
  `cod_categoria` int(11) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `noticia` text,
  `fecha` date DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`cod_noticia`, `cod_categoria`, `slug`, `titulo`, `imagen`, `noticia`, `fecha`, `estado`) VALUES
(2, 1, 'praesent-et-tortor-sed-nisi-faucibus-consectetur', 'Praesent et tortor sed nisi faucibus consectetur', '1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis rhoncus nunc dapibus pulvinar. Praesent ultrices at diam id elementum. Praesent orci est, dignissim sit amet lectus sed, pellentesque rutrum tortor. Nam tincidunt faucibus sapien, lobortis pellentesque nisl ornare sit amet. Fusce sagittis convallis interdum. Ut massa ligula, rhoncus non aliquet ac, porttitor ut ex. Nunc placerat sed elit ut dapibus. Nullam quam metus, gravida quis viverra ac, dapibus sed ex. Praesent maximus, diam vel pellentesque rutrum, nunc ipsum interdum nulla, ut molestie velit metus varius nulla. Donec sagittis lacus sed purus ullamcorper pulvinar. Nulla lacinia aliquam eros, vitae cursus ligula faucibus eu.</p><p>Sed imperdiet magna at suscipit convallis. Praesent et tortor sed nisi faucibus consectetur. Nunc nec sollicitudin augue, ut ultricies lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend quam justo, quis placerat risus rutrum iaculis. Sed laoreet auctor sapien, eu sollicitudin enim consequat id. Nunc dictum aliquet magna, vitae auctor tellus ullamcorper eget. Pellentesque vulputate eros quis augue luctus tempor. In scelerisque nibh a nisi pretium luctus. Sed ultricies volutpat commodo. Curabitur scelerisque, mauris a ornare vehicula, mi enim semper libero, in finibus magna leo at augue. Cras sit amet ex sit amet nibh auctor vehicula. Sed quis dictum lacus. Sed vehicula et elit a porta. Nunc eu massa in turpis accumsan vulputate. Etiam imperdiet ipsum et sapien accumsan scelerisque.</p><p>Aliquam ultricies semper eros, non pretium nibh molestie eu. Quisque iaculis mauris a turpis pulvinar ornare. Proin consequat consequat velit. Phasellus imperdiet sagittis orci, et accumsan ante suscipit non. Aenean id dignissim elit, pulvinar auctor eros. Morbi at dapibus odio. Donec tortor nunc, finibus a dolor accumsan, elementum pellentesque orci. Nunc lacinia placerat pellentesque. Etiam pretium nibh congue, hendrerit mauris ac, hendrerit massa. Aliquam erat volutpat. Proin auctor dictum elit sit amet tempor. Vivamus urna lorem, porttitor quis fringilla vitae, aliquam et tortor. Quisque accumsan volutpat vehicula.</p><p>In placerat sed odio ut pellentesque. Suspendisse erat sapien, mattis id urna vitae, auctor auctor dolor. Donec in ornare nibh, eget accumsan purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin et magna nibh. Nam sed ipsum metus. Curabitur quam nunc, ultricies eu sodales in, fermentum in nisl. Donec eget turpis tellus. Nunc lobortis sapien neque, nec volutpat dui aliquam sit amet. Phasellus pretium dolor eu nibh lacinia pulvinar. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras sem ligula, fermentum fermentum massa et, luctus sollicitudin arcu. Sed feugiat rhoncus vestibulum.</p><p>Donec convallis erat eget interdum ullamcorper. In euismod luctus vestibulum. Nulla convallis, mi ac fermentum accumsan, arcu massa varius dui, eu ullamcorper ligula lectus nec dui. Nam aliquet, ex vitae interdum luctus, mi felis tincidunt arcu, et ultrices augue nisl sed justo. Nulla dolor risus, mattis ac posuere at, consequat lobortis eros. Sed purus mauris, pharetra venenatis posuere accumsan, egestas eget purus. Fusce luctus commodo nisi quis malesuada. Nulla lobortis massa sit amet ipsum eleifend ultricies. Phasellus arcu libero, semper non erat sed, fringilla luctus felis. Fusce et elementum dui, nec maximus dolor. Donec dolor nunc, pharetra ut tellus a, convallis lobortis arcu. Duis ac mi vitae lectus suscipit laoreet.</p>', '2018-05-03', 1),
(4, 1, 'sed-imperdiet-magna-at-suscipit-convallis', 'Sed imperdiet magna at suscipit convallis', '2.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis rhoncus nunc dapibus pulvinar. Praesent ultrices at diam id elementum. Praesent orci est, dignissim sit amet lectus sed, pellentesque rutrum tortor. Nam tincidunt faucibus sapien, lobortis pellentesque nisl ornare sit amet. Fusce sagittis convallis interdum. Ut massa ligula, rhoncus non aliquet ac, porttitor ut ex. Nunc placerat sed elit ut dapibus. Nullam quam metus, gravida quis viverra ac, dapibus sed ex. Praesent maximus, diam vel pellentesque rutrum, nunc ipsum interdum nulla, ut molestie velit metus varius nulla. Donec sagittis lacus sed purus ullamcorper pulvinar. Nulla lacinia aliquam eros, vitae cursus ligula faucibus eu.</p><p>Nunc nec sollicitudin augue, ut ultricies lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend quam justo, quis placerat risus rutrum iaculis. Sed laoreet auctor sapien, eu sollicitudin enim consequat id. Nunc dictum aliquet magna, vitae auctor tellus ullamcorper eget. Pellentesque vulputate eros quis augue luctus tempor. In scelerisque nibh a nisi pretium luctus. Sed ultricies volutpat commodo. Curabitur scelerisque, mauris a ornare vehicula, mi enim semper libero, in finibus magna leo at augue. Cras sit amet ex sit amet nibh auctor vehicula. Sed quis dictum lacus. Sed vehicula et elit a porta. Nunc eu massa in turpis accumsan vulputate. Etiam imperdiet ipsum et sapien accumsan scelerisque.</p><p>Aliquam ultricies semper eros, non pretium nibh molestie eu. Quisque iaculis mauris a turpis pulvinar ornare. Proin consequat consequat velit. Phasellus imperdiet sagittis orci, et accumsan ante suscipit non. Aenean id dignissim elit, pulvinar auctor eros. Morbi at dapibus odio. Donec tortor nunc, finibus a dolor accumsan, elementum pellentesque orci. Nunc lacinia placerat pellentesque. Etiam pretium nibh congue, hendrerit mauris ac, hendrerit massa. Aliquam erat volutpat. Proin auctor dictum elit sit amet tempor. Vivamus urna lorem, porttitor quis fringilla vitae, aliquam et tortor. Quisque accumsan volutpat vehicula.<br></p><p>In placerat sed odio ut pellentesque. Suspendisse erat sapien, mattis id urna vitae, auctor auctor dolor. Donec in ornare nibh, eget accumsan purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin et magna nibh. Nam sed ipsum metus. Curabitur quam nunc, ultricies eu sodales in, fermentum in nisl. Donec eget turpis tellus. Nunc lobortis sapien neque, nec volutpat dui aliquam sit amet. Phasellus pretium dolor eu nibh lacinia pulvinar. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras sem ligula, fermentum fermentum massa et, luctus sollicitudin arcu. Sed feugiat rhoncus vestibulum.</p><p>Donec convallis erat eget interdum ullamcorper. In euismod luctus vestibulum. Nulla convallis, mi ac fermentum accumsan, arcu massa varius dui, eu ullamcorper ligula lectus nec dui. Nam aliquet, ex vitae interdum luctus, mi felis tincidunt arcu, et ultrices augue nisl sed justo. Nulla dolor risus, mattis ac posuere at, consequat lobortis eros. Sed purus mauris, pharetra venenatis posuere accumsan, egestas eget purus. Fusce luctus commodo nisi quis malesuada. Nulla lobortis massa sit amet ipsum eleifend ultricies. Phasellus arcu libero, semper non erat sed, fringilla luctus felis. Fusce et elementum dui, nec maximus dolor. Donec dolor nunc, pharetra ut tellus a, convallis lobortis arcu. Duis ac mi vitae lectus suscipit laoreet.</p>', '2018-05-03', 1),
(5, 2, 'sed-ultricies-volutpat-commodo', 'Sed ultricies volutpat commodo', '3.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis rhoncus nunc dapibus pulvinar. Praesent ultrices at diam id elementum. Praesent orci est, dignissim sit amet lectus sed, pellentesque rutrum tortor. Nam tincidunt faucibus sapien, lobortis pellentesque nisl ornare sit amet. Fusce sagittis convallis interdum. Ut massa ligula, rhoncus non aliquet ac, porttitor ut ex. Nunc placerat sed elit ut dapibus. Nullam quam metus, gravida quis viverra ac, dapibus sed ex. Praesent maximus, diam vel pellentesque rutrum, nunc ipsum interdum nulla, ut molestie velit metus varius nulla. Donec sagittis lacus sed purus ullamcorper pulvinar. Nulla lacinia aliquam eros, vitae cursus ligula faucibus eu.</p><p>Nunc nec sollicitudin augue, ut ultricies lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend quam justo, quis placerat risus rutrum iaculis. Sed laoreet auctor sapien, eu sollicitudin enim consequat id. Nunc dictum aliquet magna, vitae auctor tellus ullamcorper eget. Pellentesque vulputate eros quis augue luctus tempor. In scelerisque nibh a nisi pretium luctus. Curabitur scelerisque, mauris a ornare vehicula, mi enim semper libero, in finibus magna leo at augue. Cras sit amet ex sit amet nibh auctor vehicula. Sed quis dictum lacus. Sed vehicula et elit a porta. Nunc eu massa in turpis accumsan vulputate. Etiam imperdiet ipsum et sapien accumsan scelerisque.</p><p>Aliquam ultricies semper eros, non pretium nibh molestie eu. Quisque iaculis mauris a turpis pulvinar ornare. Proin consequat consequat velit. Phasellus imperdiet sagittis orci, et accumsan ante suscipit non. Aenean id dignissim elit, pulvinar auctor eros. Morbi at dapibus odio. Donec tortor nunc, finibus a dolor accumsan, elementum pellentesque orci. Nunc lacinia placerat pellentesque. Etiam pretium nibh congue, hendrerit mauris ac, hendrerit massa. Aliquam erat volutpat. Proin auctor dictum elit sit amet tempor. Vivamus urna lorem, porttitor quis fringilla vitae, aliquam et tortor. Quisque accumsan volutpat vehicula.</p><p>In placerat sed odio ut pellentesque. Suspendisse erat sapien, mattis id urna vitae, auctor auctor dolor. Donec in ornare nibh, eget accumsan purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin et magna nibh. Nam sed ipsum metus. Curabitur quam nunc, ultricies eu sodales in, fermentum in nisl. Donec eget turpis tellus. Nunc lobortis sapien neque, nec volutpat dui aliquam sit amet. Phasellus pretium dolor eu nibh lacinia pulvinar. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras sem ligula, fermentum fermentum massa et, luctus sollicitudin arcu. Sed feugiat rhoncus vestibulum.</p><p>Donec convallis erat eget interdum ullamcorper. In euismod luctus vestibulum. Nulla convallis, mi ac fermentum accumsan, arcu massa varius dui, eu ullamcorper ligula lectus nec dui. Nam aliquet, ex vitae interdum luctus, mi felis tincidunt arcu, et ultrices augue nisl sed justo. Nulla dolor risus, mattis ac posuere at, consequat lobortis eros. Sed purus mauris, pharetra venenatis posuere accumsan, egestas eget purus. Fusce luctus commodo nisi quis malesuada. Nulla lobortis massa sit amet ipsum eleifend ultricies. Phasellus arcu libero, semper non erat sed, fringilla luctus felis. Fusce et elementum dui, nec maximus dolor. Donec dolor nunc, pharetra ut tellus a, convallis lobortis arcu. Duis ac mi vitae lectus suscipit laoreet.</p>', '2018-05-03', 1),
(6, 3, 'fusce-et-elementum-dui-nec-maximus-dolor', 'Fusce et elementum dui, nec maximus dolor', '4.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis rhoncus nunc dapibus pulvinar. Praesent ultrices at diam id elementum. Praesent orci est, dignissim sit amet lectus sed, pellentesque rutrum tortor. Nam tincidunt faucibus sapien, lobortis pellentesque nisl ornare sit amet. Fusce sagittis convallis interdum. Ut massa ligula, rhoncus non aliquet ac, porttitor ut ex. Nunc placerat sed elit ut dapibus. Nullam quam metus, gravida quis viverra ac, dapibus sed ex. Praesent maximus, diam vel pellentesque rutrum, nunc ipsum interdum nulla, ut molestie velit metus varius nulla. Donec sagittis lacus sed purus ullamcorper pulvinar. Nulla lacinia aliquam eros, vitae cursus ligula faucibus eu.</p><p>Sed imperdiet magna at suscipit convallis. . Nunc nec sollicitudin augue, ut ultricies lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend quam justo, quis placerat risus rutrum iaculis. Sed laoreet auctor sapien, eu sollicitudin enim consequat id. Nunc dictum aliquet magna, vitae auctor tellus ullamcorper eget. Pellentesque vulputate eros quis augue luctus tempor. In scelerisque nibh a nisi pretium luctus. Sed ultricies volutpat commodo. Curabitur scelerisque, mauris a ornare vehicula, mi enim semper libero, in finibus magna leo at augue. Cras sit amet ex sit amet nibh auctor vehicula. Sed quis dictum lacus. Sed vehicula et elit a porta. Nunc eu massa in turpis accumsan vulputate. Etiam imperdiet ipsum et sapien accumsan scelerisque.</p><p>Aliquam ultricies semper eros, non pretium nibh molestie eu. Quisque iaculis mauris a turpis pulvinar ornare. Proin consequat consequat velit. Phasellus imperdiet sagittis orci, et accumsan ante suscipit non. Aenean id dignissim elit, pulvinar auctor eros. Morbi at dapibus odio. Donec tortor nunc, finibus a dolor accumsan, elementum pellentesque orci. Nunc lacinia placerat pellentesque. Etiam pretium nibh congue, hendrerit mauris ac, hendrerit massa. Aliquam erat volutpat. Proin auctor dictum elit sit amet tempor. Vivamus urna lorem, porttitor quis fringilla vitae, aliquam et tortor. Quisque accumsan volutpat vehicula.</p><p>In placerat sed odio ut pellentesque. Suspendisse erat sapien, mattis id urna vitae, auctor auctor dolor. Donec in ornare nibh, eget accumsan purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin et magna nibh. Nam sed ipsum metus. Curabitur quam nunc, ultricies eu sodales in, fermentum in nisl. Donec eget turpis tellus. Nunc lobortis sapien neque, nec volutpat dui aliquam sit amet. Phasellus pretium dolor eu nibh lacinia pulvinar. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras sem ligula, fermentum fermentum massa et, luctus sollicitudin arcu. Sed feugiat rhoncus vestibulum.</p><p>Donec convallis erat eget interdum ullamcorper. In euismod luctus vestibulum. Nulla convallis, mi ac fermentum accumsan, arcu massa varius dui, eu ullamcorper ligula lectus nec dui. Nam aliquet, ex vitae interdum luctus, mi felis tincidunt arcu, et ultrices augue nisl sed justo. Nulla dolor risus, mattis ac posuere at, consequat lobortis eros. Sed purus mauris, pharetra venenatis posuere accumsan, egestas eget purus. Fusce luctus commodo nisi quis malesuada. Nulla lobortis massa sit amet ipsum eleifend ultricies. Phasellus arcu libero, semper non erat sed, fringilla luctus felis. Donec dolor nunc, pharetra ut tellus a, convallis lobortis arcu. Duis ac mi vitae lectus suscipit laoreet.</p>', '2018-05-03', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias_categorias`
--

CREATE TABLE `noticias_categorias` (
  `cod_categoria` int(11) NOT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias_categorias`
--

INSERT INTO `noticias_categorias` (`cod_categoria`, `slug`, `categoria`, `orden`, `estado`) VALUES
(1, 'categoria-1', 'CategorÃ­a 1', 0, 1),
(2, 'categoria-2', 'CategorÃ­a 2', 1, 1),
(3, 'categoria-3', 'CategorÃ­a 3', 2, 1),
(4, 'categoria-4', 'CategorÃ­a 4', 3, 1),
(5, 'categoria-5', 'CategorÃ­a 5', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `cod_servicio` int(11) NOT NULL,
  `icon` varchar(250) DEFAULT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `descripcion` text,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`cod_servicio`, `icon`, `titulo`, `descripcion`, `orden`, `estado`) VALUES
(1, 'fa-chart-pie', 'ANÃLISIS POBLACIONAL A PROFUNDIDAD', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard.', 0, 1),
(2, 'fa-edit', 'CREAMOS  CONCEPTOS DE CAMPAÃ‘A', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard.', 1, 1),
(3, 'fa-comments', 'DESARROLLAMOS TU LINEA COMUNICACIÃ“N', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard.', 2, 1),
(4, 'fa-images', 'DESARROLLAMOS PIEZAS GRÃFICAS', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard.', 3, 1),
(5, 'fa-tablet-alt', 'CREAMOS MATERIAL AUDIOVISUAL', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard.', 4, 1),
(6, 'fa-heart', 'MERCHANDISING POLÃTICO', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard.', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social`
--

CREATE TABLE `social` (
  `cod_social` int(11) NOT NULL,
  `type` varchar(250) DEFAULT NULL,
  `links` varchar(9999) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `social`
--

INSERT INTO `social` (`cod_social`, `type`, `links`, `orden`, `estado`) VALUES
(6, 'fa-facebook-f', '#', 0, 1),
(7, 'fa-twitter', '#', 1, 1),
(8, 'fa-pinterest-p', '#', 2, 1),
(9, 'fa-behance', '#', 3, 1),
(10, 'fa-instagram', '#', 4, 1),
(11, 'fa-linkedin-in', '#', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL,
  `nombres` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `clave` varchar(250) DEFAULT NULL,
  `visitante` int(1) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `nombres`, `email`, `imagen`, `usuario`, `clave`, `visitante`, `estado`) VALUES
(0, 'Update Global Markerting', 'webmasterupdate@gmail.com', 'webmaster.jpg', 'webmaster', '$2y$10$NaAna7ymXRDnp7LH1J27P.ykfmAXdFiK2Imi/KfZVXFQ8IE8Z3MPC', 0, 1),
(1, 'RaÃºl Martiarena Valdivia', 'raulmartiarena89@gmail.com', '', 'raul', '$2y$10$//cIkJNpBJy2bpDliWiPrufmTyOI3J8lgUz4T1GRbSrsf7NPoKJ8y', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `cod_video` int(11) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(250) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`cod_video`, `titulo`, `descripcion`, `imagen`, `video`, `orden`, `estado`) VALUES
(1, 'VÃ­deo de Prueba 1', 'PraeseÃ±t at purus ut ex iaculis consequat. Proin nisl lectus, semper iaculis blandit vel, vulputate et eros. Suspendisse in dui at elit hendrerit dapibus. Nulla et lorem eget massa facilisis eleifend. Sed faucibus a augue at consectetur. Sed condimentum dui vitae facilisis malesuada. Nam ac nulla vitae libero dapibus venenatis et in odio. Maecenas id libero non sapien malesuada efficitur. Suspendisse placerat sollicitudin volutpat.', 'v1.jpg', 'https://www.youtube.com/watch?v=OicH761BfGE', 0, 1),
(2, 'VÃ­deo de  Prueba 2', '<p style=\"text-align: justify; \">Etiam vel ipsum pulvinar risus molestie efficitur. Vestibulum eu convallis orci. Vestibulum mi eros, dictum quis vestibulum at, tincidunt quis nisl. Aliquam ut nulla eget arcu lobortis placerat. Etiam purus nisl, dignissim vel risus non, molestie suscipit elit. Nullam congue a mi in maximus. Aenean mattis enim sit amet nulla ullamcorper vulputate. Praesent porttitor lacus id neque consectetur, nec vulputate nisl tempus. Fusce non purus vitae tortor maximus dignissim sed non erat. Nam pulvinar congue vestibulum. Donec placerat posuere magna ac ornare. Praesent nec massa vel nisl lobortis fermentum ut a mi. Duis posuere turpis sed felis pellentesque, id blandit eros faucibus.<br></p>', 'v2.jpg', 'https://www.youtube.com/watch?v=m1TnzCiUSI0', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`cod_banner`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`cod_contact`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`cod_contenido`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`cod_equipo`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`cod_contacto`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`cod_galeria`);

--
-- Indices de la tabla `galerias_categorias`
--
ALTER TABLE `galerias_categorias`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indices de la tabla `galerias_fotos`
--
ALTER TABLE `galerias_fotos`
  ADD PRIMARY KEY (`cod_foto`);

--
-- Indices de la tabla `metatags`
--
ALTER TABLE `metatags`
  ADD PRIMARY KEY (`cod_meta`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`cod_noticia`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indices de la tabla `noticias_categorias`
--
ALTER TABLE `noticias_categorias`
  ADD PRIMARY KEY (`cod_categoria`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`cod_servicio`);

--
-- Indices de la tabla `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`cod_social`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`cod_video`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `cod_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `cod_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `cod_contenido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `cod_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `cod_contacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `cod_galeria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `galerias_categorias`
--
ALTER TABLE `galerias_categorias`
  MODIFY `cod_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `galerias_fotos`
--
ALTER TABLE `galerias_fotos`
  MODIFY `cod_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `metatags`
--
ALTER TABLE `metatags`
  MODIFY `cod_meta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `cod_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `noticias_categorias`
--
ALTER TABLE `noticias_categorias`
  MODIFY `cod_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `cod_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `social`
--
ALTER TABLE `social`
  MODIFY `cod_social` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `cod_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
