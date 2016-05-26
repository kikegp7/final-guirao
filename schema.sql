-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-05-2016 a las 06:32:37
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id` int(11) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `motor` varchar(255) NOT NULL,
  `cilindrada` varchar(255) NOT NULL,
  `potencia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id`, `modelo`, `tipo`, `precio`, `descripcion`, `motor`, `cilindrada`, `potencia`) VALUES
(3, 'A1', 'normal', 303400, 'Expresión concentrada de la sensación de vivir el día a día. Personal en cuanto a las posibilidades. Convincente en cuanto al rendimiento. Siempre fascinante. Con tecnologías eficientes y modernas soluciones de comunicación.', '4-16V FSI Turbo', '1.4 L', '125 Hp'),
(4, 'A1', 'Sportback', 369900, 'Las buenas ideas tienen su versión compacta. El Audi A1 Sportback es una versión de 5 plazas y con mayor potencia que el A1.', '4-16V FSI Turbo', '1.8 L', '160 Hp'),
(5, 'A3', 'normal', 364900, 'Más expresivo y más dinámico. El Audi A3 luce con orgullo sus detalles atléticos. Las líneas y proporciones dinámicas muestran un exterior deportivo. La parrilla Singleframe es más ancha y cuenta con un perfil más definido.', '4-16V FSI Turbo', '1.4 L', '125 Hp'),
(6, 'A3', 'Sedán', 419900, 'La redefinición del Sedan. El Audi A3 Sedan reúne el carácter propio del Coupé con un diseño elegante. El diseño rebajado y fluido del techo transmite puro dinamismo.', '4-16V FSI Turbo', '1.8 L', '180 Hp'),
(7, 'A3', 'Cabriolet', 459900, 'Fascinación a primera vista. El Audi A3 Cabrio combina líneas ligeras y elegantes con proporciones dinámicas. La capota de serie totalmente automática se puede abrir a una velocidad de hasta 50 km/h durante la marcha.', '4-16V FSI Turbo', '1.8 L', '180 Hp'),
(8, 'A4', 'Sedán', 674900, 'No es magia, es A4. El nuevo Audi A4 es tan avanzado tecnológicamente que cualquier experiencia que tengas al subir en él te parecerá que es cosa de magia. Subir a bordo es sentir la máxima deportividad, elegancia e innovación.', '4 Cilindros en línea con inyección directa de gasolina, turbocompresor y Audi valvelift system®', '2.0 L (1,984 cm3)', '252 Hp'),
(9, 'A5', 'Coupé', 728900, 'El Audi A5 Coupé tiene un elegante diseño y una dinámica de conducción aún mayor. Para nuevos caminos, nuevos pensamientos, nuevas ideas. Sienta cada trayecto como si siempre fuese el primero.', '4-cil. 2.0l / 225hp TFSI', '2.0 L (1,984 cm3)', '225 Hp'),
(10, 'A5', 'Sportback', 684900, 'Cuando el diseño se convierte en algo fascinante. Una mirada al Audi A5 Sportback es suficiente para sentir que es uno de esos momentos.', '4-cil. 2.0l / 225hp TFSI', '2.0 L (1,984 cm3)', '225 Hp'),
(11, 'RS5', 'Coupé', 1484900, 'Dinamismo incondicional. Elegancia absoluta. Increíble poder. Innovadora tecnología. La unión de estos tres factores genera un vehículo sin precedentes: el Audi RS5 Coupé.', '8 Cil. 4.2l 450hp 32V V8 FSI', '4.2 L', '450 Hp'),
(12, 'A7', 'Sportback', 1144900, 'Magnético. Atracción, personalidad, carácter. ¿Quién sabe? De lo único de lo que está seguro es que se trata de magnetismo. Como el que desprende el Audi A7 Sportback.', '6 cil - supercargado TFSI', '3.0 L', '333 Hp'),
(13, 'R8', 'Coupé', 2995000, 'Nacido de la competición para dominar la carretera. Ningún otro modelo de Audi es tan potente, rápido o distintivo: el nuevo Audi R8 está diseñado en todos sus aspectos técnicos para hacerle sentir como si estuviera en un circuito, consiguiendo un dinamismo máximo.', 'Central V10 FSI', '5.2 L', '610 Hp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `auto_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `auto_id`, `name`) VALUES
(2, 3, 'AudiA1-1.jpg'),
(3, 3, 'Audi_A1.png'),
(4, 3, 'Audi-A1-2.jpg'),
(5, 4, 'Audi-A1-Sportback1.jpg'),
(6, 4, 'Audi-A1-Sportback.jpg'),
(7, 4, 'Audi-A1-Sportback2.jpg'),
(8, 5, 'Audi-A3.jpg'),
(9, 5, 'Audi-A31.jpg'),
(10, 5, 'Audi-A32.jpg'),
(11, 6, 'Audi-A3-S1.jpg'),
(12, 6, 'Audi-A3-S2.jpg'),
(13, 6, 'Audi-A3-S3.jpg'),
(14, 7, 'Audi-A3-C1.jpg'),
(15, 7, 'Audi-A3-C2.jpg'),
(16, 7, 'Audi-A3-C3.jpg'),
(17, 8, 'Audi-A4.jpg'),
(18, 8, 'Audi-A41.jpg'),
(19, 8, 'Audi-A42.jpg'),
(20, 9, 'Audi-A5.jpg'),
(21, 9, 'Audi-A51.jpg'),
(22, 9, 'Audi-A52.jpg'),
(23, 10, 'Audi-A5-S1.jpg'),
(24, 10, 'Audi-A5-S2.jpg'),
(25, 10, 'Audi-A5-S3.jpg'),
(26, 11, 'RS5.jpg'),
(27, 11, 'RS5-1.jpg'),
(28, 11, 'RS5-2.jpg'),
(29, 12, 'Audi-A7.jpg'),
(30, 12, 'Audi-A71.jpg'),
(31, 12, 'Audi-A72.jpg'),
(32, 13, 'R8.jpg'),
(33, 13, 'R81.jpg'),
(34, 13, 'R82.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
