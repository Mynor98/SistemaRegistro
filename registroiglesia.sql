-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2021 a las 15:44:40
-- Versión del servidor: 8.0.23
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registroiglesia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersona`
--

CREATE TABLE `datospersona` (
  `idDatosPersona` int NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `sector` varchar(150) DEFAULT NULL,
  `lugarNacimiento` varchar(150) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int NOT NULL,
  `TipoPersona_idTipoPersona` int NOT NULL,
  `DatosPersona_idDatosPersona` int NOT NULL,
  `estado` int DEFAULT '1',
  `tipoSacerdote` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idRegistro` int NOT NULL,
  `noLibro` int DEFAULT NULL,
  `noFolio` int DEFAULT NULL,
  `noSupletoria` int DEFAULT NULL,
  `fechaSacramento` date DEFAULT NULL,
  `edadSacramento` int DEFAULT NULL,
  `testimonioPersona` varchar(150) DEFAULT NULL,
  `parroquia` varchar(150) DEFAULT NULL,
  `alMargen` varchar(255) DEFAULT NULL,
  `feligresNovio` varchar(150) DEFAULT NULL,
  `feligresNovia` varchar(150) DEFAULT NULL,
  `edad` int DEFAULT NULL,
  `supletoria` int DEFAULT NULL,
  `Sacramentos_idSacramentos` int NOT NULL,
  `Persona_idPadrinouno` int DEFAULT NULL,
  `Persona_idPadrinodos` int DEFAULT NULL,
  `Sacramentados_idDatosPersona` int DEFAULT NULL,
  `Sacramentados_idDatosPersonad` int DEFAULT NULL,
  `Persona_idPersonaSacerdote` int DEFAULT NULL,
  `Persona_idPersonaCat` int DEFAULT NULL,
  `Persona_idPersonaOb` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int NOT NULL,
  `nombreRol` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombreRol`) VALUES
(1, 'Administrador'),
(2, 'Editor'),
(3, 'Visualizador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sacramentados`
--

CREATE TABLE `sacramentados` (
  `idDatosPersona` int NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `lugarNacimiento` varchar(150) DEFAULT NULL,
  `viveActual` varchar(150) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `sector` varchar(150) DEFAULT NULL,
  `Persona_idPadre` int DEFAULT NULL,
  `Persona_idMadre` int DEFAULT NULL,
  `estado` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sacramentos`
--

CREATE TABLE `sacramentos` (
  `idSacramentos` int NOT NULL,
  `nombreSacramentos` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sacramentos`
--

INSERT INTO `sacramentos` (`idSacramentos`, `nombreSacramentos`) VALUES
(1, 'Bautizo'),
(2, 'Primera comunion'),
(3, 'Confirmacion'),
(4, 'Matrimonio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopersona`
--

CREATE TABLE `tipopersona` (
  `idTipoPersona` int NOT NULL,
  `tipo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipopersona`
--

INSERT INTO `tipopersona` (`idTipoPersona`, `tipo`) VALUES
(1, 'Padre'),
(2, 'Padrino'),
(3, 'Catequista'),
(4, 'Sacerdote'),
(5, 'Obispo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `contrasenia` varchar(255) DEFAULT NULL,
  `estado` int DEFAULT NULL,
  `Rol_idRol` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `usuario`, `correo`, `contrasenia`, `estado`, `Rol_idRol`) VALUES
(1, 'Mynor Fernando Velasquez', 'Mynor98', 'velasquezmynor.1998@gmail.com', '$2y$10$NKGHUClLn30yVTqYmmtJj.NLrOJs4xQ2Kh40xOUF9cxvhlEVZqSgq', 1, 1),
(6, 'Alesandro Espinoza', 'EAlessandro', 'alesandroespinoza@gmail.com', '$2y$10$KhK2BO/kO7M5ikEY3OrAuePRGUTBAJRx8Nj7Xfl3.CDsnwxl0QmNa', 1, 2),
(7, 'David Salvador', 'salvadorD', 'salvadordavid@gmail.com', '$2y$10$QjDyMkPZVfzziJAKVI0moeujG62m/Fuo544JvfL30QcpdVNcw7sk2', 1, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datospersona`
--
ALTER TABLE `datospersona`
  ADD PRIMARY KEY (`idDatosPersona`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`),
  ADD KEY `fk_Persona_TipoPersona1_idx` (`TipoPersona_idTipoPersona`),
  ADD KEY `fk_Persona_DatosPersona1_idx` (`DatosPersona_idDatosPersona`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idRegistro`),
  ADD KEY `fk_Registro_Sacramentos1_idx` (`Sacramentos_idSacramentos`),
  ADD KEY `fk_Registro_Persona2_idx` (`Persona_idPadrinouno`),
  ADD KEY `fk_Registro_Persona3_idx` (`Persona_idPadrinodos`),
  ADD KEY `fk_Registro_Sacramentados1_idx` (`Sacramentados_idDatosPersona`),
  ADD KEY `fk_Registro_Persona1_idx` (`Persona_idPersonaSacerdote`),
  ADD KEY `fk_Registro_Persona4_idx` (`Persona_idPersonaCat`),
  ADD KEY `fk_Registro_Persona5_idx` (`Persona_idPersonaOb`),
  ADD KEY `fk_Registro_Sacramentados2_idx` (`Sacramentados_idDatosPersonad`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `sacramentados`
--
ALTER TABLE `sacramentados`
  ADD PRIMARY KEY (`idDatosPersona`),
  ADD KEY `fk_Sacramentados_Persona1_idx` (`Persona_idPadre`),
  ADD KEY `fk_Sacramentados_Persona2_idx` (`Persona_idMadre`);

--
-- Indices de la tabla `sacramentos`
--
ALTER TABLE `sacramentos`
  ADD PRIMARY KEY (`idSacramentos`);

--
-- Indices de la tabla `tipopersona`
--
ALTER TABLE `tipopersona`
  ADD PRIMARY KEY (`idTipoPersona`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_Usuario_Rol1_idx` (`Rol_idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datospersona`
--
ALTER TABLE `datospersona`
  MODIFY `idDatosPersona` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idRegistro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sacramentados`
--
ALTER TABLE `sacramentados`
  MODIFY `idDatosPersona` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sacramentos`
--
ALTER TABLE `sacramentos`
  MODIFY `idSacramentos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipopersona`
--
ALTER TABLE `tipopersona`
  MODIFY `idTipoPersona` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_Persona_DatosPersona1` FOREIGN KEY (`DatosPersona_idDatosPersona`) REFERENCES `datospersona` (`idDatosPersona`),
  ADD CONSTRAINT `fk_Persona_TipoPersona1` FOREIGN KEY (`TipoPersona_idTipoPersona`) REFERENCES `tipopersona` (`idTipoPersona`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `fk_Registro_Persona1` FOREIGN KEY (`Persona_idPersonaSacerdote`) REFERENCES `persona` (`idPersona`),
  ADD CONSTRAINT `fk_Registro_Persona2` FOREIGN KEY (`Persona_idPadrinouno`) REFERENCES `persona` (`idPersona`),
  ADD CONSTRAINT `fk_Registro_Persona3` FOREIGN KEY (`Persona_idPadrinodos`) REFERENCES `persona` (`idPersona`),
  ADD CONSTRAINT `fk_Registro_Persona4` FOREIGN KEY (`Persona_idPersonaCat`) REFERENCES `persona` (`idPersona`),
  ADD CONSTRAINT `fk_Registro_Persona5` FOREIGN KEY (`Persona_idPersonaOb`) REFERENCES `persona` (`idPersona`),
  ADD CONSTRAINT `fk_Registro_Sacramentados1` FOREIGN KEY (`Sacramentados_idDatosPersona`) REFERENCES `sacramentados` (`idDatosPersona`),
  ADD CONSTRAINT `fk_Registro_Sacramentados2` FOREIGN KEY (`Sacramentados_idDatosPersonad`) REFERENCES `sacramentados` (`idDatosPersona`),
  ADD CONSTRAINT `fk_Registro_Sacramentos1` FOREIGN KEY (`Sacramentos_idSacramentos`) REFERENCES `sacramentos` (`idSacramentos`);

--
-- Filtros para la tabla `sacramentados`
--
ALTER TABLE `sacramentados`
  ADD CONSTRAINT `fk_Sacramentados_Persona1` FOREIGN KEY (`Persona_idPadre`) REFERENCES `persona` (`idPersona`),
  ADD CONSTRAINT `fk_Sacramentados_Persona2` FOREIGN KEY (`Persona_idMadre`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Rol1` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
