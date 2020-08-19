/*bd name= animatoys*/
-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2019 a las 22:09:53
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `animatoys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `nombre_usuario` varchar(18) NOT NULL,
  `contrasenia` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`nombre_usuario`, `contrasenia`) VALUES
('administrador', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asocia`
--

CREATE TABLE `asocia` (
  `no_ticket` varchar(6) NOT NULL,
  `sku` varchar(6) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total_producto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asocia`
--

INSERT INTO `asocia` (`no_ticket`, `sku`, `cantidad`, `total_producto`) VALUES
('016318', 'AL30', 1, '86.00'),
('270126', 'AL05', 2, '36.00'),
('270126', 'CO02', 1, '60.00'),
('326511', 'AL05', 1, '18.00'),
('326511', 'CO25', 1, '35.00'),
('328556', 'AL29', 3, '115.50'),
('339811', 'AL18', 1, '25.00'),
('339811', 'HO34', 1, '250.00'),
('443854', 'AL22', 1, '25.00'),
('443854', 'CO02', 1, '60'),
('443854', 'HO34', 1, '250.00'),
('443854', 'SA15', 1, '60.00'),
('518567', 'AL30', 1, '86.00'),
('518567', 'AL31', 1, '78.00'),
('518567', 'HO49', 3, '450.00'),
('518567', 'JU13', 1, '57.00'),
('518567', 'JU14', 1, '238.00'),
('518567', 'RO23', 1, '85.00'),
('551790', 'CO29', 1, '85.00'),
('551790', 'JU11', 3, '120.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `fec_nacimiento` date NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `contrasenia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `apellidos`, `fec_nacimiento`, `direccion`, `email`, `contrasenia`) VALUES
(1, 'Alejandro', 'Ramirez Fernandez', '1990-12-04', 'Av. girasoles s/n, Coacalco, Edo. Mexico', 'alejo@gmail.com', '018009998080'),
(2, 'Alejandra', 'Nuñez Consuelos', '1995-09-29', 'Cerrada 1 de mayo no.19 Atizapan, Edo. Mexico', 'aleja@hotmail.com', '12345678'),
(3, 'Claudia', 'Morelos Borja', '1989-03-19', 'Av. Independencia No.59, TultiTlan, Edo. Mexico', 'clabo@yahoo.com', '000000000'),
(4, 'Ivan', 'Consuelos Nuñez', '1993-01-20', 'Av. Francisco Villa s/n, Cuautilan, Edo Mexico', 'ivconu@gmail.com', 'contraseña'),
(10, 'Sergio', 'Hernández', '1995-08-05', '', 'sergio.9839@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `no_ticket` varchar(6) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `total_venta` varchar(10) DEFAULT NULL,
  `num_tarjeta` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`no_ticket`, `fecha_hora`, `total_venta`, `num_tarjeta`, `status`, `id_cliente`) VALUES
('016318', '2019-11-04 15:59:24', '86.00', '999999', 'Pagado', 10),
('270126', '2019-11-06 17:10:00', '96.00', '1829394', 'Pagado', 2),
('326511', '2019-10-28 17:46:24', '53.00', '39824972974', 'Pagado', 2),
('328556', '2019-11-04 16:03:48', '115.50', '1111', 'Pagado', 10),
('339811', '2019-10-28 17:47:55', '275.00', '111111', 'Pagado', 2),
('443854', '2019-10-28 17:44:07', '380.00', '234', 'Pagado', 2),
('480025', '0000-00-00 00:00:00', NULL, '', 'en espera', 10),
('518567', '2019-11-04 15:53:47', '0.00', '982392', 'Pagado', 10),
('551790', '2019-11-04 16:15:12', '205.00', '2983', 'Pagado', 10),
('678481', '0000-00-00 00:00:00', NULL, '', 'en espera', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `sku` varchar(6) NOT NULL,
  `nombre_producto` varchar(80) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `precio_unitario` varchar(10) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `mascota` varchar(25) NOT NULL,
  `disponibilidad` int(11) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `administrador` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`sku`, `nombre_producto`, `descripcion`, `precio_unitario`, `categoria`, `mascota`, `disponibilidad`, `imagen`, `administrador`) VALUES
('AL01', 'Whimzels', 'Botana para perro 1 pz, sabor res', '53.00', 'Alimento', 'Perros', 5, 'prod21.jpg', 'administrador'),
('AL02', 'Royal Canin treats', 'Botana para perro', '259.00', 'Alimento', 'Perros', 21, 'prod22.jpg', 'administrador'),
('AL03', 'Galletitas espolvoreadas Beast Friend', 'Galletas espolvoreadas', '22.00', 'Alimento', 'Perros', 14, 'prod23.jpg', 'administrador'),
('AL04', 'Royal Canin en lata', 'Alimento humedo para gato', '55.00', 'Alimento', 'Gatos', 2, 'prod67.jpg', 'administrador'),
('AL05', 'Stuzzy speciality para gato', 'Comida humeda especialidades ', '18.00', 'Alimento', 'Gatos', 8, 'prod68.jpg', 'administrador'),
('AL06', 'Premios Eukanuba Healthy Extra', 'Botana para perro', '149.00', 'Alimento', 'Perros', 4, 'prod69.jpg', 'administrador'),
('AL07', 'Nuevo!Caballo fiel', '40kg, sabor manzana', '1700.00', 'Alimento', 'Caballos', 34, 'caballo.png', 'administrador'),
('AL08', 'Caballo fiel', 'Alimento para caballos de alto rendimiento, 40kg', '2000.00', 'Alimento', 'Caballos', 0, 'caballo1.png', 'administrador'),
('AL09', 'Royal Canin ', 'Alimento seco para perro', '899.00', 'Alimento', 'Perros', 0, 'prod72.jpg', 'administrador'),
('AL10', 'Galope', 'Alto rendimiento, 20 kg', '700.00', 'Alimento', 'Caballos', 2, 'caballo2.png', 'administrador'),
('AL11', 'Super campeones', 'Alimento económico para caballos, 10 kg', '300.00', 'Alimento', 'Caballos', 8, 'caballo3.jpg', 'administrador'),
('AL12', 'Forti Diet', 'Alimento fotificado de nutrientes 2.27kg', '280.00', 'Alimento', 'Conejos', 0, 'conejo19.jpg', 'administrador'),
('AL13', 'Granja familiar', 'Alimento completo Etapa 1, 5kg', '250.00', 'Alimento', 'Conejos', 0, 'conejo20.jpg', 'administrador'),
('AL14', 'Wholesome Select', 'Alimento de dieta para conejo, 1.2 kg', '200.00', 'Alimento', 'Conejos', 0, 'conejo21.jpg', 'administrador'),
('AL15', 'Sobres Félix ', 'Comida húmeda, varios sabores', '11.00', 'Alimento', 'Gatos', 0, 'gato13.jpg', 'administrador'),
('AL16', 'RedKite', 'Alimento fortificado para hamster, 450 g', '45', 'Alimento', 'Roedores', 0, 'hamster2.jpg', 'administrador'),
('AL17', 'Western timothy Hay', 'Alimento para cuyos,hamsters y conejos, 1.13 kg', '200.00', 'Alimento', 'Conejos', 0, 'hamster19.jpg', 'administrador'),
('AL18', 'Wardley', 'Alimento en hojuelas para peces tropicales 200g', '25.00', 'Alimento', 'Peces', 3, 'pez8.jpg', 'administrador'),
('AL19', 'KOI', 'alimento en hojuelas para karpas, 150g', '35.00', 'Alimento', 'Peces', 0, 'pez9.jpg', 'administrador'),
('AL20', 'Tropical', 'Alimento solido para karpas 500g', '40.00', 'Alimento', 'Peces', 3, 'pez10.jpg', 'administrador'),
('AL21', 'Sera Vipan', 'Alimento para cualquier tipo de pez 2kg', '250.00', 'Alimento', 'Peces', 2, 'pez14.jpg', 'administrador'),
('AL22', 'Nutrafin Max', 'Alimento para pez betta 40g', '25.00', 'Alimento', 'Peces', 0, 'pez15.jpg', 'administrador'),
('AL23', 'Reptile Sticks', 'Alimento solido para tortugas 300g', '45.00', 'Alimento', 'Reptiles', 0, 'tortuga.jpg', 'administrador'),
('AL24', 'Picoteo', 'Camaron seco mini para tortugas 1kg', '70.00', 'Alimento', 'Reptiles', 0, 'tortuga1.jpg', 'administrador'),
('AL25', 'Gambitas', 'Frasco de camarones mini, secos, 30g', '35.00', 'Alimento', 'Reptiles', 0, 'tortuga2.jpg', 'administrador'),
('AL26', 'Turtle Delay', 'Golosina sabor camarón para tortuga,40g', '55.00', 'Alimento', 'Reptiles', 0, 'tortuga4.jpg', 'administrador'),
('AL27', 'Iguana Juvenil', 'Alimento para iguana, 200g', '85.00', 'Alimento', 'Reptiles', 0, 'tortuga10.jpg', 'administrador'),
('AL28', 'Pacman food', 'Alimento para ranas, 56.6g', '45.00', 'Alimento', 'Reptiles', 0, 'tortuga13.png', 'administrador'),
('AL29', 'Condi todo', 'Alimento para todo tipo de ave doméstica, 500g', '38.50', 'Alimento', 'Aves', 5, 'ave7.jpg', 'administrador'),
('AL30', 'PIO PA', 'Alimento para aves exóticas', '86.00', 'Alimento', 'Aves', 2, 'ave8.jpeg', 'administrador'),
('AL31', 'Vivir', 'Alimento enriquecido de probióticos', '78.00', 'Alimento', 'Aves', 5, 'ave9.jpg', 'administrador'),
('AL32', 'Mazuri', 'Alimento para todas las especies de pericos y cotorrros bonitos', '130.00', 'Alimento', 'Aves', 5, 'ave10.jpg', 'administrador'),
('AL78', 'Mazuri Small bird', 'Small Bird Diet de Mazuri es un alimento completo, balanceado y extruído para loritos y pequeñas aves como catitas, inseparables, canarios, diamantes, manones, entre otros.', '20.99', 'Alimento', 'Aves', 12, 'small_bird.jpg', 'administrador'),
('AL79', 'Bolsa de alimento para aves OCELL', 'Bolsa alimento para aves canarios ocell factor rojo 500gr', '96.99', 'Alimento', 'Aves', 16, 'ocell.jpg', 'administrador'),
('CO01', 'Collar isabelino de plástico', '', '100.00', 'Collares y correas', 'Perros y gatos', 0, 'prod28.jpg', 'administrador'),
('CO02', 'Collar isabelino sencillo', '', '60.00', 'Collares y correas', 'Perros y gatos', 0, 'prod29.jpg', 'administrador'),
('CO03', 'Collar con cascabel', '', '20.00', 'Collares y correas', 'Gatos', 0, 'prod43.jpg', 'administrador'),
('CO04', 'Collar de tela naranja', '', '20.00', 'Collares y correas', 'Perros', 0, 'prod45.jpg', 'administrador'),
('CO05', 'Collar de cadena', '', '90.00', 'Collares y correas', 'Perros', 0, 'prod46.jpg', 'administrador'),
('CO06', 'Collar de tela', '', '50.00', 'Collares y correas', 'Perros', 0, 'prod47.jpg', 'administrador'),
('CO07', 'Collar con luz', '', '140.00', 'Collares y correas', 'Perros', 0, 'prod48.jpg', 'administrador'),
('CO08', 'Collar de piel grande', '', '300.00', 'Collares y correas', 'Perros', 0, 'prod49.jpg', 'administrador'),
('CO09', 'Collar de piel con estampado', 'Estampado de huesitos', '144.00', 'Collares y correas', 'Perros', 0, 'prod50.jpg', 'administrador'),
('CO10', 'Bozal chico de lona', '', '55.00', 'Collares y correas', 'Perros', 0, 'prod10.jpg', 'administrador'),
('CO11', 'Bozal mini de lona', '', '25.00', 'Collares y correas', 'Perros', 0, 'prod19.jpg', 'administrador'),
('CO12', 'Bozal grande de piel', '', '150.00', 'Collares y correas', 'Perros', 0, 'prod20.jpg', 'administrador'),
('CO13', 'Bozal mediano de lona', '', '50.00', 'Collares y correas', 'Perros', 0, 'prod11.jpg', 'administrador'),
('CO14', 'Bozal chico de lona', '', '35.00', 'Collares y correas', 'Perros', 0, 'prod12.jpg', 'administrador'),
('CO15', 'Bozal mini de lona', '', '30.00', 'Collares y correas', 'Perros', 0, 'prod13.jpg', 'administrador'),
('CO16', 'Bozal grande de plástico', '', '150.00', 'Collares y correas', 'Perros', 0, 'prod14.jpg', 'administrador'),
('CO17', 'Bozal mediano de plástico', '', '75.00', 'Collares y correas', 'Perros', 0, 'prod15.jpg', 'administrador'),
('CO18', 'Bozal chico de plástico', '', '50.00', 'Collares y correas', 'Perros', 0, 'prod16.jpg', 'administrador'),
('CO19', 'Bozal mini de plastico', '', '25.00', 'Collares y correas', 'Perros', 0, 'prod17.jpg', 'administrador'),
('CO20', 'Bozal grande de piel', '', '220.00', 'Collares y correas', 'Perros', 0, 'prod18.jpg', 'administrador'),
('CO21', 'Pechera chica de tela', '', '25.00', 'Collares y correas', 'Perros', 0, 'prod19.jpg', 'administrador'),
('CO22', 'Pechera grande de piel', '', '150.00', 'Collares y correas', 'Perros', 0, 'prod20.jpg', 'administrador'),
('CO23', 'Correa diseño batman', 'correa con diseño de batman para conejo', '85.00', 'Collares y correas', 'Conejos', 0, 'conejo1.jpg', 'administrador'),
('CO24', 'Pechera de tela ', 'pechera de tela ,varios colores, con moño en la parte de atrás. ', '120.00', 'Collares y correas', 'Conejos', 0, 'conejo3.jpg', 'administrador'),
('CO25', 'Correa con pechera ', 'Correa con pechera sencilla para conejo color rojo', '35.00', 'Collares y correas', 'Conejos', 0, 'conejo5.jpg', 'administrador'),
('CO26', 'Pechera y correa mini', 'Pechera y correa mini, color azul con estampado para roedores', '55.00', 'Collares y correas', 'Roedores', 0, 'hamster10.jpg', 'administrador'),
('CO27', 'Pechera y correa sencilla mini', 'Pechera con correa color rojo, mini para roedores', '30.00', 'Collares y Correas', 'Roedores', 0, 'hamster11.jpg', 'administrador'),
('CO28', 'Correa sencilla para iguanas', 'Correa roja, para iguanas de tela', '25.00', 'Collares y correas', 'Reptiles', 0, 'tortuga9.jpg', 'administrador'),
('CO29', 'Correa con traje', 'Correa con traje amarillo para aves', '85.00', 'Collares y correas', 'Aves', 4, 'ave2.jpg', 'administrador'),
('HI01', 'Shampoo cuidado especial Bulldog', '', '110.00', 'Higiene', 'Gatos', 0, 'prod30.jpg', 'administrador'),
('HI02', 'Shampoo cuidado especial Yorhshire', 'Shampoo para perros', '110.00', 'Higiene', 'Gatos', 0, 'prod39.jpg', 'administrador'),
('HI03', 'Animal planet: Humecta y protege', '', '70.00', 'Higiene', 'Gatos', 0, 'prod40.jpg', 'administrador'),
('HI04', 'Toallitas limpiadoras para dientes', '', '195.00', 'Higiene', 'Perros y gatos', 0, 'prod41.jpg', 'administrador'),
('HI05', 'Golden shine Nutritiva reparador y desenredante', '', '128', 'Higiene', 'Perros y gatos', 0, 'prod42.jpg', 'administrador'),
('HI06', 'Arenero para gatos', '', '60.00', 'Higiene', 'Gatos', 0, 'prod66.jpg', 'administrador'),
('HI07', 'Shampoo cuidado especial Chihuahua', '', '100.00', 'Higiene', 'Perros', 0, 'prod31.jpg', 'administrador'),
('HI08', 'Shampoo cuidado especial Pastor aleman', '', '110.00', 'Higiene', 'Perros', 0, 'prod32.jpg', 'administrador'),
('HI09', 'Shampoo cuidado especial Labrador', '', '110.00', 'Higiene', 'Perros', 0, 'prod33.jpg', 'administrador'),
('HI10', 'Shampoo cuidado especial Pitbull', '', '110.00', 'Higiene', 'Perros', 0, 'prod34.jpg', 'administrador'),
('HI11', 'Shampoo cuidado especial Pug', '', '110.00', 'Higiene', 'Perros', 0, 'prod35.jpg', 'administrador'),
('HI12', 'Animal planet: desenreda y acondiciona', '', '150.00', 'Higiene', 'Perros', 0, 'prod36.jpg', 'administrador'),
('HI13', 'Shampoo cuidado especial Schnauzer', '', '110.00', 'Higiene', 'Perros', 0, 'prod37.jpg', 'administrador'),
('HI14', 'Shampoo cuidado especial ShihTzu', '', '110.00', 'Higiene', 'Perros', 0, 'prod38.jpg', 'administrador'),
('HI20', 'Cepillo de madera', 'Cepillo que facilita el cepillado de los equinos', '55.00', 'Higiene', 'Caballos', 0, 'caballo6.jpg', 'administrador'),
('HI21', 'Cepillos de plástico', 'Cepillos sencillos que permiten el cepillado de los equinos, varios colores', '45.00', 'Higiene', 'Caballos', 0, 'caballo7.jpg', 'administrador'),
('HI22', 'Shampoo', 'Shampoo de zábila para caballo, 1Lt', '165.00', 'Higiene', 'Caballos', 0, 'caballo9.jpg', 'administrador'),
('HI23', 'Shampoo la reserva', 'Shampoo elaborado naturalmente, diferentes aromas, 1Lt', '95.00', 'Higiene', 'Caballos', 0, 'caballo10.jpg', 'administrador'),
('HI24', 'Shampoo Quick and clean', 'Shampoo especial para conejos y roedores', '78.50', 'Higiene', 'Conejo y Roedores', 0, 'conejo23.jpg', 'administrador'),
('HI25', 'Shampoo antiparásitario', 'Shampoo para gatos especial para eliminar gérmenes en la piel', '130.00', 'Higiene', 'Gatos', 0, 'gato9.jpeg', 'administrador'),
('HI26', 'Shampoo', 'Shampoo hipolergénico neutro', '88.00', 'Higiene', 'Gatos', 0, 'gato10.jpg', 'administrador'),
('HI27', 'Shampoo Bioline', 'Shampoo para gatos delicados', '140.00', 'Higiene', 'Gatos', 0, 'gato11.jpeg', 'administrador'),
('HI28', 'Cepillo ', 'Cepillo para gatos', '100.00', 'Higiene', 'Gatos', 0, 'gato12.jpg', 'administrador'),
('HI29', 'Shampoo en seco', 'Shampoo en seco con rico aroma para hamster y otros roedores', '90.00', 'Higiene', 'Roedores', 0, 'hamster5.jpg', 'administrador'),
('HI30', 'Shampoo azurro', 'shampoo con ingredientes que ayudan al cuidado de la piel y plumas de las aves', '85.00', 'Higiene', 'Aves', 2, 'ave22.jpg', 'administrador'),
('HI31', 'Loción para aves', 'Loción enriquecida de vitaminas para las plumas de las aves', '130.00', 'Higiene', 'Aves', 2, 'ave23.jpg', 'administrador'),
('HO01', 'Huesito con bolsas para perro', '', '40.00', 'Hogar', 'Perros', 0, 'prod1.jpg', 'administrador'),
('HO02', 'Plato mediano color gris', '', '30.00', 'Hogar', 'Perros y gatos', 0, 'prod2.jpg', 'administrador'),
('HO03', 'Plato grande color azul', '', '40.00', 'Hogar', 'Perros y gatos', 0, 'prod3.jpg', 'administrador'),
('HO04', 'Plato chico color rosa', 'Tazón para perro y gato', '14.00', 'Hogar', 'Perros y gatos', 0, 'prod4.jpg', 'administrador'),
('HO05', 'Plato con diseño de gato', '', '25.00', 'Hogar', 'Gatos', 0, 'prod5.jpg', 'administrador'),
('HO06', 'Cama grande de lona', '', '200.00', 'Hogar', 'Perros', 0, 'prod6.jpg', 'administrador'),
('HO07', 'Cama mediana de peluche', '', '160.00', 'Hogar', 'Gatos', 0, 'prod7.jpg', 'administrador'),
('HO08', 'Cama chica de peluche', '', '240.00', 'Hogar', 'Perros y gatos', 0, 'prod8.jpg', 'administrador'),
('HO09', 'Cama chica sencilla', '', '80.00', 'Hogar', 'Perros y gatos', 0, 'prod9.jpg', 'administrador'),
('HO10', 'Casa para conejo', 'Casa talla mediana', '450.00', 'Hogar', 'Conejos', 0, 'conejo7.jpg', 'administrador'),
('HO11', 'Casa pequeña para conejo', 'Casa talla pequeña para conejo, colores azul y blanca', '250.00', 'Hogar', 'Conejos', 0, '', 'administrador'),
('HO12', 'Casa pequeña para conejo', 'Casa de madera pequeña y pintada con diseño de zanahoria', '450.00', 'Hogar', 'Conejos', 0, 'conejo9.jpg', 'administrador'),
('HO13', 'Casa mediana rosa', 'Casa talla mediana color rosa', '280.00', 'Hogar', 'Conejos', 0, 'conejo24.jpg', 'administrador'),
('HO14', 'Cama plana', 'Cama plana para conejos de talla mediana', '280.00', 'Hogar', 'Conejos', 0, 'conejo25.jpg', 'administrador'),
('HO15', 'Casa en forma de gato', 'Casa para gato de talla mediana color negro', '450.00', 'Hogar', 'Gatos', 0, 'gato4.jpg', 'administrador'),
('HO16', 'Cama afelpada', 'Cama para talla mediana', '250.00', 'Hogar', 'Perros y gatos', 0, 'gato5.jpg', 'administrador'),
('HO17', 'Cama para perro blanca estampada', 'cama para perro de talla grande', '270.00', 'Hogar', 'Perros', 0, 'gato6.jpg', 'administrador'),
('HO18', 'Cama estampado de gatos', 'Cama para gato de talla grande con estampado de gatos negros', '320.00', 'Hogar', 'Gatos', 0, 'gato7.jpg', 'administrador'),
('HO19', 'Cama colorida', 'Cama para razas pequeñas', '210.00', 'Hogar', 'Perros y gatos', 0, 'gato8.jpg', 'administrador'),
('HO20', 'Plato doble', 'Plato grande de metal doble para gato ', '150.00', 'Hogar', 'Gatos', 0, 'gato14.jpg', 'administrador'),
('HO21', 'Plato figura de gato', 'Plato doble con diseño de gato blanco y negro', '200.00', 'Hogar', 'Gatos', 0, 'gato16.jpg', 'administrador'),
('HO22', 'Platos de colores', 'Platos de colores en forma de cara de gato', '45.00', 'Hogar', 'Gatos', 0, 'gato17.jpg', 'administrador'),
('HO23', 'Esfera de plástico', 'Esfera de hámster azul', '89.00', 'Hogar', 'Roedores', 0, 'hamster.jpg', 'administrador'),
('HO24', 'Rueda giratoria ', 'Rueda de metal para Hámster negra', '100.00', 'Hogar', 'Roedores', 0, 'hamster3.jpg', 'administrador'),
('HO25', 'Casa para hámster', 'Casa para hámster pequeña', '320.00', 'Hogar', 'Roedores', 0, 'hamster4.jpg', 'administrador'),
('HO26', 'Cama invierno', 'Cama para hámster afelpada ', '200.00', 'Hogar', 'Roedores', 0, 'hamster7.jpg', 'administrador'),
('HO27', 'Sleeping Bag ', 'Bolsa para dormir para hamsters', '120.00', 'Hogar', 'Roedores', 0, 'hamster8.jpg', 'administrador'),
('HO28', 'Amaca para roedores', 'Amaca para roedores de talla pequeña', '70.00', 'Hogar', 'Roedores', 0, 'hamster9.jpg', 'administrador'),
('HO29', 'Cama de oso', 'Cama en forma de oso para roedores', '230.00', 'Hogar', 'Roedores', 0, 'hamster14.jpg', 'administrador'),
('HO30', 'Casa rosa ', 'Casa rosa con juegos para roedores', '240.00', 'Hogar', 'Roedores', 0, 'hamster15.jpg', 'administrador'),
('HO31', 'Casa grande para hámster', 'Casa grande con juegos, color azul.', '380.00', 'Hogar', 'Roedores', 0, 'hamster16.jpg', 'administrador'),
('HO32', 'Juego de dormir', 'Juego de dormir rosa estampado para roedores', '150.00', 'Hogar', 'Roedores', 0, 'hamster18.jpg', 'administrador'),
('HO33', 'Cama estampado de corazones', 'Cama para perros roja con estampado de corazones', '310.00', 'Hogar', 'Perros', 0, 'perro1.jpg', 'administrador'),
('HO34', 'Pecera mediana y calentador ', 'Pecera mediana , incluye calentador para 20Lt', '250.00', 'Hogar', 'Peces', 0, 'pez.jpg', 'administrador'),
('HO35', 'Calentador de agua', 'Calentador de agua para pecera de 20Lt', '80.00', 'Hogar', 'Peces', 0, 'pez1.jpg', 'administrador'),
('HO36', 'Plantas artificiales', 'Planta decorativa de colores para pecera', '45.00', 'Hogar', 'Peces', 0, 'pez2.jpg', 'administrador'),
('HO37', 'GloFish', 'Grava de colores para pecera', '55.00', 'Hogar', 'Peces', 0, 'pez3.jpg', 'administrador'),
('HO38', 'Piedra decorativa', 'Piedra decorativa para peceras tamaño grande', '75.00', 'Hogar', 'Peces', 0, 'pez4.jpg', 'administrador'),
('HO39', 'Pecera con figuras', 'Pecera con figuras de bob esponja', '340.00', 'Hogar', 'Peces', 0, 'pez5.jpg', 'administrador'),
('HO40', 'Plantas decorativas', 'Plantas artificiales para pecera', '35.00', 'Hogar', 'Peces', 0, 'pez6.jpg', 'administrador'),
('HO41', 'Plantas artificiales decorativas', 'Plantas decorativas de pecera diferentes colores', '50.00', 'Hogar', 'Peces', 0, 'pez7.jpg', 'administrador'),
('HO42', 'Red para peces', 'Red grande para peces', '35.00', 'Hogar', 'Peces', 0, 'pez17.jpg', 'administrador'),
('HO43', 'Tortuguera', 'Tortuguera pequeña', '65.00', 'Hogar', 'Reptiles', 0, 'tortuga5.jpg', 'administrador'),
('HO44', 'Tprtuguera redonda', 'Tortuguera para tortugas pequeñas', '55.00', 'Hogar', 'Reptiles', 0, 'tortuga6.jpg', 'administrador'),
('HO45', 'Hábitat para reptiles', 'Estante para reptiles talla grande', '560.00', 'Hogar', 'Roedores', 0, 'tortuga7.jpg', 'administrador'),
('HO46', 'Pecera para reptiles', 'Pecera mediana para reptiles con llave', '450.00', 'Hogar', 'Reptiles', 0, 'tortuga8.jpg', 'administrador'),
('HO47', 'Jaula chica', 'Jaula blanca chica', '120.00', 'Hogar', 'Aves', 12, 'ave11.jpg', 'administrador'),
('HO48', 'Jaula Mediana', 'Jaula mediana color negro', '230.00', 'Hogar', 'Aves', 3, 'ave12.jpg', 'administrador'),
('HO49', 'Casa de madera', 'Casa de madera para aves pequeñas', '150.00', 'Hogar', 'Aves', 5, 'ave13.jpg', 'administrador'),
('HO50', 'Cama para aves', 'Cama para aves pequeñas', '57.00', 'Hogar', 'Aves', 1, 'ave25.jpg', 'administrador'),
('JU01', 'CatToys Mariposa', 'Juguete de tela diseñado para gatos juguetones', '30.00', 'Juguete', 'Gatos', 0, 'prod24.jpg', 'administrador'),
('JU02', 'Crazy Bounce', 'Pelota que rebota sin parar, para que tu perro pase momentos divertidos', '130.00', 'Juguete', 'Perros', 0, 'prod25.jpg', 'administrador'),
('JU03', 'Ratón ProPlan', 'Figura de ratón con plumas de colores', '80.00', 'Juguete', 'Gatos', 0, 'prod26.jpg', 'administrador'),
('JU04', 'Tugging Star', 'Juguete mordedera de cordón para perro', '127.00', 'Juguete', 'Perros', 0, 'prod27.jpg', 'administrador'),
('JU05', 'Juguetes de madera', 'Juguetes hechos de madera ', '120.00', 'Juguete', 'Conejos', 0, 'conejo10.jpg', 'administrador'),
('JU06', 'Pelota ', 'Pelota para conejo', '55.00', 'Juguete', 'Conejos', 0, 'conejo11.jpg', 'administrador'),
('JU07', 'Túnel', 'Túnel para conejo', '76.00', 'Juguete', 'Conejos', 0, 'conejo12.jpg', 'administrador'),
('JU08', 'Palitos con figuras', 'Palitos tipo caña de pescar con figuras de fieltro', '45.00', 'Juguete', 'Gatos', 0, 'gato1.jpg', 'administrador'),
('JU09', 'Ratón', 'Ratón de peluche con catnip', '65.00', 'Juguete', 'Gatos', 0, 'gato2.jpg', 'administrador'),
('JU10', 'Ratón con plumas', 'Ratón con plumas azules', '78.00', 'Juguete', 'Gatos', 0, 'gato3.jpg', 'administrador'),
('JU11', 'Columpio', 'Columpio para canario con cuerda', '40.00', 'Juguete', 'Aves', 20, 'ave14.jpg', 'administrador'),
('JU12', 'Columpio de cuerda', 'Columpio para aves medianas, hecho de cuerda', '86.00', 'Juguete', 'Aves', 0, 'ave15.jpg', 'administrador'),
('JU13', 'Columpio de cuentas', 'Columpio hecho de rama de árbol y adornado con cuentas de colores', '57.00', 'Juguete', 'Aves', 21, 'ave16.jpg', 'administrador'),
('JU14', 'Juego de basketball', 'Juego de basket para que tu perico aprenda excelentes habilidades', '238.00', 'Juguete', 'Aves', 0, 'ave17.jpg', 'administrador'),
('RO01', 'Suéter mini', '', '90.00', 'Ropa', 'Perros', 0, 'prod52.jpg', 'administrador'),
('RO02', 'Suéter mini de peluche color rosa', '', '70.00', 'Ropa', 'Perros', 0, 'prod53.jpg', 'administrador'),
('RO03', 'Vestido rosa', '', '80.00', 'Ropa', 'Perros', 0, 'prod54.jpg', 'administrador'),
('RO04', 'Camisa', '', '50.00', 'Ropa', 'Perros', 0, 'prod55.jpg', 'administrador'),
('RO05', 'Vestido mini', '', '80.00', 'Ropa', 'Perros', 0, 'prod56.jpg', 'administrador'),
('RO06', 'Suéter rojo T-2', '', '60.00', 'Ropa', 'Perros y gatos', 0, 'prod57.jpg', 'administrador'),
('RO07', 'Vestido azul estampado', '', '100.00', 'Ropa', 'Perros', 0, 'prod58.jpg', 'administrador'),
('RO08', 'Vestido estampado talla grande', '', '150.00', 'Ropa', 'Perros', 0, 'prod59.jpg', 'administrador'),
('RO09', 'Silla de montar', 'Silla de montar para caballos color café', '1200', 'Ropa', 'Caballos', 0, 'caballo4.jpg', 'administrador'),
('RO10', 'Silla de montar café claro', 'Silla de montar para caballos color café claro', '1250', 'Ropa', 'Caballos', 0, 'caballo5.jpg', 'administrador'),
('RO11', 'Abrigo para caballo', 'Abrigo térmico para caballo', '800.00', 'Ropa', 'Caballos', 2, 'caballo8.jpg', 'administrador'),
('RO12', 'Chaleco ', 'Saco elegante gris para conejos de talla mediana', '130.00', 'Ropa', 'Conejos', 0, 'conejo4.jpg', 'administrador'),
('RO13', 'chaleco rojo', 'Chaleco rojo de tela impermeable para conejos de talla pequeña', '140.00', 'Ropa', 'Conejos', 0, 'conejo6.jpg', 'administrador'),
('RO14', 'Vestido rojo y blanco', 'Vestido rojo con estampado de flores y tela blanca para conejos mini', '80.00', 'Ropa', 'Conejos', 0, 'conejo13.jpg', 'administrador'),
('RO15', 'Vestido primavera', 'Vestido de estampado de flores y colores vivos para conejos mini', '75.00', 'Ropa', 'Conejos', 0, 'conejo14.jpg', 'administrador'),
('RO16', 'Vestido rosa', 'Vestido color rosa para conejos de aprox. 2 años', '65.00', 'Ropa', 'Conejos', 0, 'conejo15.jpg', 'administrador'),
('RO17', 'Disfraz de abeja ', 'Disfraz de abeja para conejos de talla mini', '100.00', 'Ropa', 'Conejos', 0, 'conejo17.jpg', 'administrador'),
('RO18', 'Moños', 'Moños de estampado de lunares, varios colores.', '15.00', 'Ropa', 'Conejos', 0, 'conejo18.jpg', 'administrador'),
('RO19', 'Disfraz de abejita', 'Disfraz de abeja para roedores', '68.00', 'Ropa', 'Roedores', 0, 'hamster12.jpg', 'administrador'),
('RO20', 'Disfraz de dinosaurio', 'Disfraces de dinosaurio para roedores, diferentes colores', '120.00', 'Ropa', 'Roedores', 0, 'hamster13.jpg', 'administrador'),
('RO21', 'Suéter morado', 'Suéter morado con estampado blanco para iguanas', '140.00', 'Ropa', 'Reptiles', 0, 'tortuga11.jpg', 'administrador'),
('RO22', 'Suéter navideño', 'Suéter con estampado de santa Claus para iguana', '120.00', 'Ropa', 'Reptiles', 0, 'tortuga12.jpg', 'administrador'),
('RO23', 'Smoking ', 'Cuenta con moño y estampado, diseñado para aves pequeñas', '85.00', 'Ropa', 'Aves', 15, 'ave3.jpg', 'administrador'),
('RO24', 'Suéter', 'Suéter para gallina', '120.00', 'Ropa', 'Aves', 0, 'ave4.jpg', 'administrador'),
('SA01', 'Aquadent', 'Es una solución refrescante antibacteriana, anti placa y antisarro.', '310.00', 'Salud', 'Perros y gatos', 0, 'med11.jpg', 'administrador'),
('SA02', 'Virbac kit', 'kit refrescante y palatable que combate el mal aliento.', '350.00', 'Salud', 'Perros y gatos', 0, 'med12.jpg', 'administrador'),
('SA03', 'Shampoo medicado Benzoderm', 'Shampoo antibacteriano que  actúa a nivel folicular, desengrasa e hidroliza el exceso de sebo reduciendo la carga bacteriana.', '69.00', 'Salud', 'Perros y gatos', 0, 'med3.jpg', 'administrador'),
('SA04', 'Pipeta FrontLine', 'Insecticida contra parásitos externos', '400.00', 'Salud', 'Perros y gatos', 0, 'med4.jpg', 'administrador'),
('SA05', 'Pipeta Fiprosol', 'Insecticida contra parásitos externos', '400.00', 'Salud', 'Perros y gatos', 0, 'med5.jpg', 'administrador'),
('SA06', 'Virbac', 'Insecticida contra parásitos externos', '350.00', 'Salud', 'Perros y gatos', 0, 'med6.jpg', 'administrador'),
('SA07', 'Vitaminas para la piel Efa Derm', 'Suplemento nutricional formulado especialmente para ayudar a reducir la caída excesiva de pelo y mejorar la salud de la piel y el aspecto del pelaje de la mascota', '80.00', 'Salud', 'Perros y gatos', 0, 'med7.jpg', 'administrador'),
('SA08', 'Feliway Classic', 'Feromonas que ayudan a que tu gato restablezca sus comportamientos de felicidad y evita los signos de estrés.', '40.00', 'Salud', 'Perros y gatos', 0, 'med14.jpg', 'administrador'),
('SA09', 'Ungüento de La tía', 'Desinflamatorio, antiséptico y cicatrizante.', '79.00', 'Salud', 'Perros y gatos', 0, 'med9.jpg', 'administrador'),
('SA10', 'Bamitol', 'Ungüento auxiliar en golpes, moretones y procesos inflamatorios.', '55.00', 'Salud', 'Perros y gatos', 0, 'med10.jpg', 'administrador'),
('SA11', 'Laxatone', 'Lubricante gastrointestinal palatable indicado para la eliminación y prevención de formación de bolas de pelo en felinos.', '75.00', 'Salud', 'Perros y gatos', 0, 'med8.jpg', 'administrador'),
('SA12', 'KirOtic', 'Anti-inflamatorio en caso de otitis aguda o crónica, ayuda a disminuir la inlfamación, dolor, purito, edema y producción de exudados que producen la estenosis del canal auditivo  externo.', '75.00', 'Salud', 'Perros y gatos', 0, 'med1.jpg', 'administrador'),
('SA13', 'Vetoquinol Solución Limpiadora de oídos', 'Solución de lavado para la limpieza del conducto auditivo de las mascotas.', '110.00', 'Salud', 'Perros y gatos', 0, 'med2.jpg', 'administrador'),
('SA14', 'KirOtic Diclo', 'Solución antimicrobiana de uso oftálmico para el tratamiento de infecciones oculares.', '75.00', 'Salud', 'Perros y gatos', 0, 'med13.jpg', 'administrador'),
('SA15', 'Hills Presciption Diet (especialidades)', '', '60.00', 'Salud', 'Perros y gatos', 0, 'prod71.jpg', 'administrador'),
('SA16', 'Pro Plan Veterinaty Diets (especialidades)', '', '65.00', 'Salud', 'Perros y gatos', 0, 'prod70.jpg', 'administrador'),
('SA17', 'Super vitamina', 'Vitamina B12 5500 100 ml', '350.00', 'Salud', 'Caballos', 0, 'caballo11.jpg', 'administrador'),
('SA18', 'vitaminas Equi Algae', 'Suplemento alimenticio', '560.00', 'Salud', 'Caballos', 0, 'caballo12.jpg', 'administrador'),
('SA19', 'Vitaminas Creatina Microsules', 'Suplemento Alimenticio, 1kg', '1280.00', 'Salud', 'Caballos', 0, 'caballo13.jpg', 'administrador'),
('SA20', 'Vitaminas', 'Vitaminas en solución', '238.00', 'Salud', 'Conejos', 0, 'conejo22.jpg', 'administrador'),
('SA21', 'Multivitaminico Hydrovit', 'Multivitamico para peces tropicales y marinos', '65.00', 'Salud', 'Peces', 0, 'pez11.jpg', 'administrador'),
('SA22', 'MELAFIX', 'Tratamiento para infecciones cutáneas de los peces', '78.00', 'Salud', 'Peces', 0, 'pez12.jpg', 'administrador'),
('SA23', 'Vitaminas fishtamin', 'Multivitaminico Alemán para peces', '250.00', 'Salud', 'Peces', 0, 'pez13.jpg', 'administrador'),
('SA24', 'Aquarium blue', 'Gotas para pecera de azul de metileno para eliminar bacterias en la pecera', '45.00', 'Salud', 'Peces', 0, 'pez16.jpg', 'administrador'),
('SA25', 'Vitamina A', 'Contra infecciones de párpados de las tortugas', '47.50', 'Salud', 'Reptiles', 0, 'tortuga14.jpg', 'administrador'),
('SA26', 'Calcio', 'Calcio para el caparazón de las tortugas, 1 pza', '25.00', 'Salud', 'Reptiles', 0, 'tortuga15.jpg', 'administrador'),
('SA27', 'Centryl', 'Gotas antibacterianas', '78.50', 'Salud', 'Aves', 0, 'ave18.jpg', 'administrador'),
('SA28', 'Centryl aves 5%', 'Antibacteriano', '120.00', 'Salud', 'Aves', 0, 'ave19.png', 'administrador'),
('SA29', 'Ascorbol Plus', 'Vitáminico', '130.00', 'Salud', 'Aves', 0, 'ave20.jpg', 'administrador'),
('SA30', 'Alimento vitaminado', 'Alimento vitaminado para diversas aves', '85.00', 'Salud', 'Aves', 0, 'ave6.jpg', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`nombre_usuario`);

--
-- Indices de la tabla `asocia`
--
ALTER TABLE `asocia`
  ADD PRIMARY KEY (`no_ticket`,`sku`),
  ADD KEY `sku` (`sku`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`no_ticket`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `administrador` (`administrador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asocia`
--
ALTER TABLE `asocia`
  ADD CONSTRAINT `asocia_ibfk_1` FOREIGN KEY (`no_ticket`) REFERENCES `compra` (`no_ticket`),
  ADD CONSTRAINT `asocia_ibfk_2` FOREIGN KEY (`sku`) REFERENCES `producto` (`sku`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`administrador`) REFERENCES `administrador` (`nombre_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
