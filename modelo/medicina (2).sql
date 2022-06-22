
-- Base de datos: `medicina`
--
create database medicina;
use medicina;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `enfermedad` int(11) NOT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `hora` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE `cronograma` (
  `id_cronograma` int(11) NOT NULL,
  `nombre` varchar(12) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `id_doctor` int(11) NOT NULL,
  `nombre` varchar(12) DEFAULT NULL,
  `apellidos` varchar(20) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedad`
--

CREATE TABLE `enfermedad` (
  `id_enfermedad` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enfermedad`
--

INSERT INTO `enfermedad` (`id_enfermedad`, `nombre`) VALUES
(1, 'Alzheimer'),
(2, 'Diarrea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar`
--

CREATE TABLE `familiar` (
  `id_familiar` int(11) NOT NULL,
  `nombres` varchar(20) DEFAULT NULL,
  `apellidos` varchar(20) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `id_medicamento` int(11) NOT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `fecha_expedicion` date DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `dosis` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 376362664, 1074780264, 'eu46'),
(2, 1074780264, 376362664, '54y54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `rol_id`) VALUES
(0, 1005683727, 'andrea', 'cano ', 'andrea12@gmail.com', '202cb962ac59075b964b07152d234b70', '1648349727FB_IMG_15508429591883371.jpg', 'Offline now', 0),
(0, 898851237, 'andres', 'diaz', 'andresd@gmail.com', '202cb962ac59075b964b07152d234b70', '1648350106IMG-20191007-WA0003.jpg', 'Offline now', 0),
(0, 202998630, 'juan ', 'cano', 'cano18@gmail.com', '202cb962ac59075b964b07152d234b70', '1648351591IMG-20190922-WA0008.jpg', 'Offline now', 0),
(0, 699368509, 'cristian ', 'vergara', 'vergara@gmail.com', '202cb962ac59075b964b07152d234b70', '1648352147IMG-20190201-WA0013.jpg', 'Offline now', 0),
(0, 884594667, 'lucas ', 'mora', 'mora@gmail.com', '202cb962ac59075b964b07152d234b70', '1648352786IMG-20191101-WA0000.jpg', 'Offline now', 0),
(0, 1596750723, 'hades', 'cano', 'hades@gmail.com', '202cb962ac59075b964b07152d234b70', '1648353211IMG-20190929-WA0009.jpg', 'Active now', 0),
(0, 1546924897, 'johanna', 'cano', 'camo22@gmail.com', '25d55ad283aa400af464c76d713c07ad', '16484170551648352147IMG-20190201-WA0013.jpg', 'Offline now', 0),
(0, 582883000, 'jose', 'rivas', 'rivas@hotmail.com', '202cb962ac59075b964b07152d234b70', '16484172701648353211IMG-20190929-WA0009.jpg', 'Offline now', 0),
(0, 853385005, 'kevin', 'juan', 'kevin@gmail.com', '202cb962ac59075b964b07152d234b70', '16484176701648352147IMG-20190201-WA0013.jpg', 'Active now', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(12) DEFAULT NULL,
  `edad` varchar(12) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `enfermedad` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
