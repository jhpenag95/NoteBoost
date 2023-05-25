-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2023 a las 01:25:22
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noteboost`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `imagen` varchar(100) NOT NULL,
  `rol_id` int(11) NOT NULL DEFAULT 3,
  `id_semestre` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_materia`
--

CREATE TABLE `estudiante_materia` (
  `id` int(11) NOT NULL,
  `id_estudiante` int(50) NOT NULL,
  `id_materi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupo` varchar(100) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `cod_materia` varchar(100) NOT NULL,
  `nombre_materia` varchar(100) NOT NULL,
  `descripción` varchar(500) NOT NULL,
  `creditos` int(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id_nota` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL,
  `valor_nota` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_profeso` int(100) NOT NULL,
  `nombre_profesor` varchar(200) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profeso`, `nombre_profesor`, `apellido`, `correo`, `contrasena`, `id_rol`) VALUES
(1, 'Jairo', 'Guatama', 'johanpg14@hotmail.com', '1', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profe_estudi`
--

CREATE TABLE `profe_estudi` (
  `id` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_profe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Profesor'),
(3, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `id_semestre` int(11) NOT NULL,
  `nombre_materia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`id_semestre`, `nombre_materia`) VALUES
(1, 'Primero'),
(2, 'Segundo'),
(3, 'Tercero'),
(4, 'Cuarto'),
(5, 'Quinto'),
(6, 'Sexto'),
(7, 'Séptimo'),
(8, 'Octavo'),
(9, 'Noveno'),
(10, 'Decimo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre_materias`
--

CREATE TABLE `semestre_materias` (
  `id` int(11) NOT NULL,
  `id_semestre` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `id_tema` int(11) NOT NULL,
  `nombre_tema` varchar(100) NOT NULL,
  `porcentaje` float NOT NULL,
  `materia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD UNIQUE KEY `id_semestre` (`id_semestre`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `estudiante_materia`
--
ALTER TABLE `estudiante_materia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_estudiante` (`id_estudiante`,`id_materi`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD UNIQUE KEY `id_estudiante` (`id_estudiante`,`id_materi`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`),
  ADD UNIQUE KEY `tema_id` (`tema_id`),
  ADD KEY `materia_id` (`materia_id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profeso`),
  ADD UNIQUE KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `profe_estudi`
--
ALTER TABLE `profe_estudi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_estudiante` (`id_estudiante`,`id_profe`),
  ADD KEY `id_profe` (`id_profe`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id_semestre`);

--
-- Indices de la tabla `semestre_materias`
--
ALTER TABLE `semestre_materias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_semestre` (`id_semestre`),
  ADD UNIQUE KEY `id_materi` (`id_materi`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id_tema`),
  ADD KEY `materia_id` (`materia_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante_materia`
--
ALTER TABLE `estudiante_materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profeso` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `profe_estudi`
--
ALTER TABLE `profe_estudi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
  MODIFY `id_semestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `semestre_materias`
--
ALTER TABLE `semestre_materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`),
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id_semestre`);

--
-- Filtros para la tabla `estudiante_materia`
--
ALTER TABLE `estudiante_materia`
  ADD CONSTRAINT `estudiante_materia_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materias` (`id_materia`),
  ADD CONSTRAINT `estudiante_materia_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materias` (`id_materia`),
  ADD CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id_materia`);

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `profe_estudi`
--
ALTER TABLE `profe_estudi`
  ADD CONSTRAINT `profe_estudi_ibfk_1` FOREIGN KEY (`id_profe`) REFERENCES `profesores` (`id_profeso`),
  ADD CONSTRAINT `profe_estudi_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`);

--
-- Filtros para la tabla `semestre_materias`
--
ALTER TABLE `semestre_materias`
  ADD CONSTRAINT `semestre_materias_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materias` (`id_materia`),
  ADD CONSTRAINT `semestre_materias_ibfk_2` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id_semestre`);

--
-- Filtros para la tabla `temas`
--
ALTER TABLE `temas`
  ADD CONSTRAINT `temas_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id_materia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
