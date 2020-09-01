-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2020 a las 21:49:45
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sports`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `name_categorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id_categorie`, `name_categorie`) VALUES
(1, 'Guantes '),
(3, 'Tablas de skate'),
(4, 'Puños'),
(5, 'Bicicletas'),
(9, 'Cascos'),
(10, 'Rodilleras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `id_categorie`, `price`, `quantity`, `description`) VALUES
(1, 'Guantes Giant Transfer Largos', 1, 17400, 20, '- El tejido elástico ligero TransTextura absorbe la humedad y se seca rápidamente\r\n\r\n-Palma de cuero Amara de una sola capa ventilada\r\nÁrea de limpieza de microfibra grande y altamente absorbente\r\n\r\n-Construcción de pulgar Bolton para un ajuste impecable\r\n\r\n-Abertura larga de muñeca elástica'),
(3, 'Puños Liv Swage', 4, 3638, 7, 'Al igual que los amortiguadores para tus manos, los puños Swage Non Lock-On te quitan el empuje de los altibajos del camino. La cantidad perfecta de squish te mantendrá cómodo, porque las manos libres de calambres deberían ser tu recompensa por asumir nuevos desafíos.'),
(4, 'Bicicleta Liv Embolden 2', 5, 847500, 13, 'Descubre una pequeña revoltosa y un territorio desconocido. La bici perfecta para trail o para un singletrack.'),
(6, 'Santa Cruz Screaming Hand 8.25\" Skateboard Deck', 3, 35650, 5, 'Un clásico gracias al diseño Screaming Hand y a los años de experiencia en la fabricación y producción de tablas de skate. Una tabla perfecta para cualquier terreno'),
(7, 'Pro-Tec Prime Casco Skateboard', 9, 23760, 8, 'El casco certificado PRO-TEC Prime es un favorito de protección absoluta en todos los deportes.\r\nEste casco de skate tiene un diseño clásico con la resistente carcasa dura ABS de PRO-TEC y una carcasa interior de EPS para una mejor protección contra los impactos. Con acolchado moldeado y 11 ventilaciones, se ajusta cómodamente y te ayuda a mantener la cabeza fría.'),
(8, 'G-FORM Pro-X Elbow Pad', 10, 32680, 15, 'Con el RTP, G-Form ha conseguido el equilibrio perfecto entre protección, comodidad y ajuste. Las coderas Pro-X son como una segunda piel, permitiéndote una gran libertad de movimiento y protegiéndote de impactos.\r\n'),
(9, 'TSG Evolution Solid Color Casco Skateboard', 9, 32680, 7, 'Con el casco Evolution, TSG te ofrece uno de los cascos más finos del mercado, gracias a su corte ajustado y de perfil bajo. Los impactos contra el cemento pueden ser tremendos, por lo que está equipado con una carcasa exterior de ABS y espuma EPS en su interior. ¡Así tu cabeza estará bien protegida en todo momento! Para mantener un ajuste perfecto y cómodo, TSG ha diseñado este casco con forma anatómica para que se ajuste a tu cabeza mejor que nunca. TSG ha eliminado los puntos de presión excesivos para que ni notes que lo llevas puesto. Además sus 14 aperturas de ventilación mantendrán tu cabeza bien seca y fresca durante todas tus sesiones.'),
(10, 'Guantes Giant Luminosos Largos', 1, 20566, 8, 'ILUMINAR EL CAMINO. Comodidad, visibilidad y protección contra los elementos. Lo obtienes todo con la innovadora serie Illume de Giant. Cada pieza presenta detalles reflectantes, por lo que permanece visible en situaciones de poca luz.'),
(11, 'Bicicleta Giant TCR ADV 2 Disc SE (2021)', 5, 1836500, 3, 'Entrenar, correr, llevarlo al límite. Ya sea que esté atacando el campo o cavando en busca de un nuevo PR, el nuevo disco avanzado TCR es más liviano, rígido y rápido con una configuración estratégica del tubo aerodinámico, mayor espacio libre de los neumáticos y tecnología de freno de disco integrada.'),
(12, 'Casco Spiuk Eleo', 9, 61698, 14, '“Cómodo” y “seguro”. Dos adjetivos que escuchamos al preguntar a un ciclista por su casco ideal. “Estética” y “precio” también suelen aparecer. Ninguno de ellos es ajeno al casco Eleo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salescar`
--

CREATE TABLE `salescar` (
  `id_sale` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `last_name`, `email`, `password`, `admin`) VALUES
(1, '', '', 'admin', 'admin', 1),
(2, 'Nico', 'Morales', 'nicomorales1597@gmail.com', '123', 0),
(3, 'Juan', 'Castillo', 'Juan_Castillo@gmail.com', '456', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Indices de la tabla `salescar`
--
ALTER TABLE `salescar`
  ADD PRIMARY KEY (`id_sale`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `salescar`
--
ALTER TABLE `salescar`
  MODIFY `id_sale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`);

--
-- Filtros para la tabla `salescar`
--
ALTER TABLE `salescar`
  ADD CONSTRAINT `salescar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `salescar_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `salescar_ibfk_3` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
