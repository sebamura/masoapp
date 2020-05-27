-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2020 a las 22:28:33
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `masoapp2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fullname` varchar(45) DEFAULT NULL,
  `admin_email` varchar(45) DEFAULT NULL,
  `admin_password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anamnesis`
--

CREATE TABLE `anamnesis` (
  `detail_id` int(11) NOT NULL,
  `detail_genero` varchar(1) DEFAULT NULL,
  `detail_fono` int(11) DEFAULT NULL,
  `detail_sick` varchar(255) DEFAULT NULL,
  `detail_alergia` varchar(255) DEFAULT NULL,
  `detail_cigarro` varchar(45) DEFAULT NULL,
  `detail_alcohol` varchar(45) DEFAULT NULL,
  `detail_droga` varchar(45) DEFAULT NULL,
  `detail_medi` varchar(255) DEFAULT NULL,
  `detail_cirujia` varchar(255) DEFAULT NULL,
  `detail_implante` varchar(255) DEFAULT NULL,
  `detail_epilepsia` varchar(45) DEFAULT NULL,
  `detail_hsueño` int(11) DEFAULT NULL,
  `user_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anamnesis`
--

INSERT INTO `anamnesis` (`detail_id`, `detail_genero`, `detail_fono`, `detail_sick`, `detail_alergia`, `detail_cigarro`, `detail_alcohol`, `detail_droga`, `detail_medi`, `detail_cirujia`, `detail_implante`, `detail_epilepsia`, `detail_hsueño`, `user_user_id`) VALUES
(16480385, '', 3, '', 'AAA', 'AAAAA ', 'AAAAAAAA', 'AAAAAAAAAA', 'AAAAAAAAAAAA', 'AAAAAAAAAA', 'AAAAAAAAAAA', 'AAAAAAAA', 0, 2),
(15580611, '', 3, '', '', ' ', '', '', '', '', '', '', 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `res_id` int(11) NOT NULL,
  `res_cita` varchar(45) DEFAULT NULL,
  `res_nota` varchar(45) DEFAULT NULL,
  `res_fechahora` datetime DEFAULT NULL,
  `status_status_id` int(11) NOT NULL,
  `admin_admin_id` int(11) DEFAULT NULL,
  `user_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id_usuario` int(255) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `id_anamnesis` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id_usuario`, `estado`, `id_anamnesis`) VALUES
(16480385, '1', 16480385),
(15580611, '1', 15580611);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `rut` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `email`, `clave`, `create_at`, `address`, `rut`) VALUES
(0, 'said', 'said.tattoo@gmail.com', '123', '2020-05-27 16:07:06', 'nahuelbuta', '16480385-6'),
(0, 'www', 'www', 'www', '2020-05-27 16:09:12', 'w', '15580611-7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
