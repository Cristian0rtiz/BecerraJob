-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 05:39:48
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsi56`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `spDeleteAprendiz` (IN `_CodeAprendiz` INT(10))  BEGIN

	DELETE FROM aprendiz WHERE codigo = _CodeAprendiz;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spDeleteMatricula` (IN `_codeMatricula` INT(100))  BEGIN

	DELETE FROM matricula WHERE codigo = _codeMatricula;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spDeleteUser` (IN `_CODE` INT(4))  BEGIN

	DELETE FROM USER WHERE CODE = _CODE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertAprendiz` (IN `_NAME` VARCHAR(50), IN `_DATE` DATE, IN `_SEX` VARCHAR(15), IN `_CITY` VARCHAR(100))  BEGIN

	INSERT INTO aprendiz (nombre, fechaNacimiento,sexo,ciudad) VALUES (_NAME, _DATE, _SEX,_CITY);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertMatricula` (IN `_fechaMatricula` DATE, IN `_nombreCentro` VARCHAR(100), IN `_COSTO` INT(100), IN `_ESTADO` VARCHAR(20), IN `_codigoPrograma` INT(20), IN `_codigoAprendiz` INT(20))  BEGIN

	INSERT INTO matricula (fechaMatricula, nombreCentro,costo,estado,codigoPrograma,codigoAprendiz) VALUES (_fechaMatricula, _nombreCentro, _COSTO,_ESTADO,_codigoPrograma,_codigoAprendiz);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertUser` (IN `_NAME` VARCHAR(100), IN `_LASTNAME` VARCHAR(100), IN `_PASSWORD` VARCHAR(50), IN `_USER` VARCHAR(100))  BEGIN

	INSERT INTO USER (NAME, LASTNAME, PASSWORD,USER) VALUES (_NAME, _LASTNAME, _PASSWORD, _USER);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spSearcAprendiz` (IN `_CodeAprendiz` INT(10))  BEGIN

    SELECT codigo, nombre, fechaNacimiento, sexo, ciudad 
    FROM aprendiz 
    WHERE codigo = _CodeAprendiz;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spSearchAllAprendiz` ()  begin 
select codigo,nombre,fechaNacimiento,sexo,ciudad from aprendiz;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spSearchAllMatricula` ()  begin 
select 				codigoMatricula,fechaMatricula,nombreCentro,costo,estado,
codigoPrograma,codigoAprendiz 
from matricula;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spSearchAllUser` ()  begin 
select CODE,USER,PASSWORD,LASTNAME,NAME from user;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spSearchMatricula` (IN `_codeMatricula` INT(100))  BEGIN

    SELECT codigoMatricula , fechaMatricula, fechaMatricula, 	 costo, estado,codigoPrograma,codigoAprendiz
    FROM matricula 
    WHERE codigoMatricula = _codeMatricula;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spSearchUser` (IN `_CODE` INT(4))  BEGIN

    SELECT CODE, NAME, LASTNAME, PASSWORD, USER
    FROM USER 
    WHERE CODE = _CODE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spUpdateAprendiz` (IN `_CodeAprendiz` INT(10), IN `_NAME` VARCHAR(50), IN `_DATE` DATE, IN `_SEX` VARCHAR(15), IN `_CITY` VARCHAR(100))  BEGIN

    UPDATE aprendiz
    SET nombre = _NAME,
        fechaNacimiento = _DATE,
        sexo = _SEX,
        ciudad = _CITY
    WHERE codigo = _CodeAprendiz;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spUpdateMatricula` (IN `_codeMatricula` INT(100), IN `_fechaMatricula` DATE, IN `_nombreCentro` VARCHAR(100), IN `_COSTO` INT(100), IN `_ESTADO` VARCHAR(20), IN `_codigoPrograma` INT(20), IN `_codigoAprendiz` INT(20))  BEGIN

    UPDATE matricula
    SET fechaMatricula = _fechaMatricula,
    	nombreCentro = _nombreCentro,
        costo = _COSTO,
        estado = _ESTADO,
        codigoPrograma = _codigoPrograma,
        codigoAprendiz = _codigoAprendiz
    WHERE codigoMatricula  = _codeMatricula;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spUpdateUser` (IN `_CODE` INT(4), IN `_NAME` VARCHAR(100), IN `_LASTNAME` VARCHAR(100), IN `_PASSWORD` VARCHAR(50), IN `_USER` VARCHAR(100))  BEGIN

    UPDATE USER
    SET NAME = _NAME,
    	USER = _USER,
        LASTNAME = _LASTNAME,
        PASSWORD = _PASSWORD
    WHERE CODE = _CODE;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `codigo` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`codigo`, `nombre`, `fechaNacimiento`, `sexo`, `ciudad`) VALUES
(7, 'si', '2022-06-22', '1', '2'),
(8, 'daimer', '2022-06-10', '1', '1'),
(9, 'daimer', '2022-06-10', '1', '1'),
(10, 'si', '2022-07-06', '2', '2'),
(11, 'si', '2022-07-06', '2', '2'),
(12, 'si', '2022-06-08', '2', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `codigoMatricula` int(100) NOT NULL,
  `fechaMatricula` date NOT NULL,
  `nombreCentro` varchar(100) NOT NULL,
  `costo` int(100) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `codigoPrograma` int(20) NOT NULL,
  `codigoAprendiz` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`codigoMatricula`, `fechaMatricula`, `nombreCentro`, `costo`, `estado`, `codigoPrograma`, `codigoAprendiz`) VALUES
(1, '2004-05-20', 'calatraba', 5000, 'inactiva', 2562256, 456),
(2, '2022-06-10', 'sdsd', 411, 'activo', 100, 4041),
(3, '0000-00-00', '', 0, 'activo', 0, 0),
(4, '0000-00-00', '', 0, 'activo', 0, 0),
(5, '0000-00-00', '', 0, 'activo', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `code` int(4) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`code`, `password`, `name`, `lastname`, `user`) VALUES
(2, '1234', 'entendiblex25', 'comprensible x2', 'sies'),
(3, 'manuy4', 'manuela', '1504', '123r5'),
(4, 'si', 'si 1', 'si', 'casa'),
(5, 'si', 'si', 'si', 'casa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`codigoMatricula`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `codigoMatricula` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `code` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
