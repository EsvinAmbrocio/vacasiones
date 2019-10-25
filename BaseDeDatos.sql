CREATE TABLE `trabajadores` (
  `dpi` int(11) NOT NULL,
  `Nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Puesto` varchar(15) COLLATE utf8_unicode_ci NOT NULL
);
INSERT INTO `trabajadores` (`dpi`, `Nombre`, `Apellido`, `Puesto`) VALUES
(1, 'Esvin', 'Ambrocio', 'ITs'),
(2, 'Jacobo', 'Andrade', 'its'),
(3, 'Olga', 'Ramirez', 'Secretaria'),
(4, 'Wilber', 'Ambrocio', 'Diseñador');
CREATE TABLE `vacasiones` (
  `dpi` int(11) DEFAULT NULL,
  `periodo` int(11) DEFAULT NULL,
  `fechaInicial` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechaFinalizacion` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
);
INSERT INTO `vacasiones` (`dpi`, `periodo`, `fechaInicial`, `fechaFinalizacion`, `estado`) VALUES
(3, 3, '2019-10-01', '2019-10-16', 'En proceso'),
(3, 3, '2019-10-02', '2019-10-17', 'En proceso'),
(2, 3, '2019-10-03', '2019-10-18', 'En proceso');
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`dpi`);
COMMIT;