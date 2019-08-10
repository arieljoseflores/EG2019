-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-08-2019 a las 19:33:12
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id9308995_tpfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL,
  `nomdepartamento` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nomdepartamento`) VALUES
(13, 'BELGRANO'),
(14, 'IRIONDO'),
(15, 'SAN LORENZO'),
(16, 'ROSARIO'),
(17, 'CASEROS'),
(18, 'GENERAL LOPEZ'),
(19, 'CONSTITUCION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estciviles`
--

CREATE TABLE `estciviles` (
  `id` int(11) NOT NULL,
  `nomcivil` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estciviles`
--

INSERT INTO `estciviles` (`id`, `nomcivil`) VALUES
(1, 'SOLTERO'),
(2, 'CASADO'),
(3, 'VIUDO'),
(4, 'DIVORCIADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id` int(11) NOT NULL,
  `nomlocalidad` varchar(30) DEFAULT NULL,
  `idprovincia` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `nomlocalidad`, `idprovincia`) VALUES
(1000, 'CAPITAL FEDERAL', 'B'),
(1016, 'PAGO URUGUAY', 'S'),
(1025, 'VILLA SABOYA', 'S'),
(1072, 'CARLOS CALVO', 'S'),
(1188, 'PALERMO SUD', 'S'),
(1193, 'ABASTO', 'S'),
(1200, 'PARQUE CENTENARIO', 'S'),
(1319, 'JUNCAL (CAP. FED.)', 'S'),
(1440, 'MATADEROS', 'S'),
(1535, 'OLASCOAGA', 'S'),
(1603, 'VILLA MARTELLI', 'B'),
(1605, 'MUNRO', 'B'),
(1606, 'CARAPACHAY', 'B'),
(1607, 'VILLA ADELINA', 'B'),
(1609, 'BOULOGNE', 'B'),
(1611, 'DON TORCUATO', 'B'),
(1613, 'LOS POLVORINES', 'B'),
(1615, 'GRAND BOURG', 'B'),
(1617, 'GENERAL PACHECO', 'B'),
(1621, 'BENAVIDEZ', 'B'),
(1623, 'INGENIERO MASCHWITZ', 'B'),
(1625, 'ESCOBAR', 'B'),
(1627, 'MATHEU', 'B'),
(1629, 'PILAR', 'B'),
(1636, 'OLIVOS', 'B'),
(1638, 'VICENTE LOPEZ', 'B'),
(1640, 'MARTINEZ', 'B'),
(1642, 'SAN ISIDRO', 'B'),
(1643, 'BECCAR', 'B'),
(1644, 'VICTORIA (BS.AS.)', 'B'),
(1646, 'SAN FERNANDO', 'B'),
(1648, 'TIGRE', 'B'),
(1650, 'SAN MARTIN', 'B'),
(1653, 'VILLA BALLESTER', 'B'),
(1661, 'BELLA VISTA', 'B'),
(1663, 'SAN MIGUEL-MUÑIZ', 'B'),
(1667, 'TORTUGUITAS', 'B'),
(1669, 'DEL VISO (BS. AS.)', 'B'),
(1672, 'VILLA LYNCH (BS.AS.)', 'B'),
(1678, 'CASEROS', 'B'),
(1681, 'WILLIAM C. MORRIS', 'B'),
(1682, 'MARTIN CORONADO', 'B'),
(1686, 'HURLINGHAM (BS. AS.)', 'B'),
(1702, 'CIUDADELA', 'B'),
(1704, 'RAMOS MEJIA', 'B'),
(1706, 'HAEDO', 'B'),
(1708, 'MORON', 'B'),
(1712, 'CASTELAR', 'B'),
(1714, 'ITUZAINGO', 'B'),
(1718, 'S. ANTONIO DE PADUA', 'B'),
(1722, 'MERLO (BS. AS.)', 'B'),
(1742, 'PASO DEL REY', 'B'),
(1744, 'MORENO', 'B'),
(1748, 'GRAL. RODRIGUEZ', 'B'),
(1752, 'LOMAS DEL MIRADOR', 'B'),
(1754, 'SAN JUSTO', 'B'),
(1755, 'R. CASTILLO', 'B'),
(1765, 'ISIDRO CASANOVA', 'B'),
(1768, 'VILLA MADERO', 'B'),
(1778, 'CIUDAD EVITA', 'B'),
(1804, 'CANNING', 'B'),
(1814, 'CAÑUELAS', 'B'),
(1824, 'LANUS', 'B'),
(1828, 'BANFIELD', 'B'),
(1832, 'LOMAS DE ZAMORA', 'B'),
(1834, 'TEMPERLEY', 'B'),
(1836, 'LLAVALLOL', 'B'),
(1842, 'MONTE GRANDE', 'B'),
(1846, 'ADROGUE', 'B'),
(1847, 'RAFAEL CALZADA', 'B'),
(1849, 'CLAYPOLE', 'B'),
(1852, 'BURZACO', 'B'),
(1854, 'LONGCHAMPS', 'B'),
(1862, 'VILLA BOSCH', 'B'),
(1870, 'AVELLANEDA', 'B'),
(1871, 'DOCK SUD', 'B'),
(1872, 'SARANDI', 'B'),
(1875, 'WILDE', 'B'),
(1876, 'BERNAL', 'B'),
(1878, 'QUILMES', 'B'),
(1888, 'F. VARELA', 'B'),
(1893, 'BERAZATEGUI', 'B'),
(1896, 'CITY BELL', 'B'),
(1897, 'MANUEL B. GONNET', 'B'),
(1900, 'LOS HORNOS (BS. AS.)', 'B'),
(1901, 'LA PLATA (BS. AS)', 'B'),
(2000, 'ROSARIO', 'S'),
(2002, 'LUIS PALACIOS', 'S'),
(2047, 'CORDOBA', 'S'),
(2101, 'ALBARELLOS', 'S'),
(2102, 'VILLA ADELA', 'S'),
(2103, 'J. B. MOLINA', 'S'),
(2105, 'SARGENTO CABRAL', 'S'),
(2107, 'SOLDINI', 'S'),
(2109, 'PAVON ARRIBA', 'S'),
(2111, 'SANTA TERESA', 'S'),
(2113, 'PEYRANO', 'S'),
(2115, 'MAXIMO PAZ', 'S'),
(2117, 'ALCORTA', 'S'),
(2119, 'PIÑERO', 'S'),
(2121, 'PEREZ', 'S'),
(2123, 'ZAVALLA', 'S'),
(2124, 'VILLA DIEGO', 'S'),
(2126, 'FIGHIERA', 'S'),
(2128, 'ARROYO SECO', 'S'),
(2132, 'FUNES', 'S'),
(2134, 'ROLDAN', 'S'),
(2136, 'SAN JERONIMO SUD', 'S'),
(2138, 'CARCARAÑA', 'S'),
(2142, 'SALTO GRANDE', 'S'),
(2144, 'TOTORAS', 'S'),
(2146, 'SAN GENARO', 'S'),
(2147, 'SAN GENARO NORTE', 'S'),
(2148, 'CASAS (STA. FE)', 'S'),
(2152, 'GRANADERO BAIGORRIA', 'S'),
(2153, 'V. GOB. GALVEZ', 'S'),
(2154, 'CAPITAN BERMUDEZ', 'S'),
(2156, 'FRAY LUIS BELTRAN', 'S'),
(2170, 'CASILDA', 'S'),
(2173, 'CHABAS', 'S'),
(2175, 'VILLA MUGUETA', 'S'),
(2177, 'BIGAND', 'S'),
(2179, 'BOMBAL', 'S'),
(2181, 'LOS MOLINOS', 'S'),
(2182, 'COLONIA GRAL. ROCA', 'S'),
(2183, 'AREQUITO', 'S'),
(2185, 'SAN J. DE LA ESQUINA', 'S'),
(2187, 'ARTEAGA', 'S'),
(2189, 'CRUZ ALTA', 'X'),
(2200, 'SAN LORENZO', 'S'),
(2201, 'RICARDONE', 'S'),
(2202, 'PTO.SAN MARTIN', 'S'),
(2204, 'TIMBUES', 'S'),
(2206, 'OLIVEROS', 'S'),
(2208, 'GABOTO', 'S'),
(2212, 'MONJE', 'S'),
(2214, 'ANDINO', 'S'),
(2216, 'SERODINO', 'S'),
(2218, 'CARRIZALES', 'S'),
(2222, 'DIAZ', 'S'),
(2223, 'J. B. JUSTO', 'S'),
(2240, 'CORONDA', 'S'),
(2242, 'AROCENA', 'S'),
(2246, 'BARRANCAS', 'S'),
(2248, 'IRIGOYEN', 'S'),
(2252, 'GALVEZ', 'S'),
(2253, 'LOMA ALTA', 'S'),
(2255, 'LOPEZ', 'S'),
(2257, 'COL. BELGRANO', 'S'),
(2258, 'STA. CLARA B. VISTA', 'S'),
(2300, 'RAFAELA', 'S'),
(2301, 'VILA', 'S'),
(2307, 'ATALIVA', 'S'),
(2309, 'H. PRIMERO (STA. FE)', 'S'),
(2310, 'CORONEL HANSEN', 'S'),
(2313, 'MOISES VILLE', 'S'),
(2317, 'COLONIA ALDAO', 'S'),
(2322, 'SUNCHALES', 'S'),
(2326, 'LAS PALMERAS', 'S'),
(2340, 'CERES', 'S'),
(2345, 'VILLA TRINIDAD', 'S'),
(2347, 'COLONIA ROSA', 'S'),
(2349, 'SUARDI', 'S'),
(2352, 'HERSILIA', 'S'),
(2354, 'SELVA', 'G'),
(2356, 'PINTO', 'G'),
(2400, 'SAN FRANCISCO', 'X'),
(2401, 'COLONIA CASTELAR', 'S'),
(2405, 'STA.CLARA DE SAGUIER', 'S'),
(2407, 'CLUCELLAS', 'S'),
(2409, 'ZENON PEREYRA', 'S'),
(2413, 'FREYRE', 'X'),
(2415, 'PORTEÑA', 'X'),
(2419, 'BRINKMANN', 'X'),
(2421, 'MORTEROS', 'X'),
(2424, 'DEVOTO', 'X'),
(2432, 'EL TIO', 'X'),
(2434, 'ARROYITO', 'X'),
(2438, 'FRONTERA', 'S'),
(2440, 'SASTRE', 'S'),
(2441, 'LAS PETACAS', 'S'),
(2443, 'GARIBALDI', 'S'),
(2445, 'MARIA JUANA', 'S'),
(2447, 'SAN VICENTE', 'S'),
(2449, 'S. M. DE LAS ESCOBAS', 'S'),
(2451, 'SAN JORGE', 'S'),
(2453, 'C. PELLEGRINI', 'S'),
(2454, 'CAÑADA ROSQUIN', 'S'),
(2500, 'CAÑADA DE GOMEZ', 'S'),
(2501, 'BUSTINZA', 'S'),
(2503, 'VILLA ELOISA', 'S'),
(2505, 'LAS PAREJAS', 'S'),
(2506, 'CORREA', 'S'),
(2508, 'ARMSTRONG', 'S'),
(2510, 'CLASON', 'S'),
(2512, 'TORTUGAS', 'S'),
(2520, 'LAS ROSAS', 'S'),
(2521, 'MONTES DE OCA', 'S'),
(2523, 'BOUQUET', 'S'),
(2525, 'SAIRA', 'X'),
(2527, 'MARIA SUSANA', 'S'),
(2529, 'PIAMONTE', 'S'),
(2531, 'LANDETA', 'S'),
(2533, 'LOS CARDOS', 'S'),
(2535, 'EL TREBOL', 'S'),
(2550, 'BELL VILLE', 'X'),
(2553, 'J. POSSE', 'X'),
(2555, 'ORDOÑEZ', 'X'),
(2557, 'IDIAZABAL (CBA.)', 'X'),
(2559, 'SAN ANTONIO DE LITIN', 'X'),
(2561, 'CHILIBROSTE (CBA.)', 'X'),
(2563, 'NOETINGER', 'X'),
(2566, 'SAN MARCOS SUD', 'X'),
(2568, 'MORRISON (CBA)', 'X'),
(2572, 'BALLESTEROS', 'X'),
(2580, 'MARCOS JUAREZ', 'X'),
(2581, 'LOS SURGENTES', 'X'),
(2583, 'GENERAL BALDISSERA', 'X'),
(2585, 'CAMILO ALDAO', 'X'),
(2587, 'INRIVILLE', 'X'),
(2589, 'MONTE BUEY', 'X'),
(2592, 'GENERAL ROCA', 'X'),
(2594, 'LEONES', 'X'),
(2600, 'VENADO TUERTO', 'S'),
(2601, 'MURPHY', 'S'),
(2603, 'CHAPUY', 'S'),
(2605, 'SANTA ISABEL', 'S'),
(2606, 'JOBSON', 'S'),
(2607, 'VILLA CAÑAS', 'S'),
(2609, 'MARIA TERESA', 'S'),
(2611, 'RUNCIMAN', 'S'),
(2613, 'SAN GREGORIO', 'S'),
(2615, 'SAN EDUARDO', 'S'),
(2617, 'SANCTI SPIRITU', 'S'),
(2618, 'CARMEN', 'S'),
(2622, 'MAGGIOLO', 'S'),
(2624, 'ARIAS', 'X'),
(2625, 'CAVANAGH (CBA.)', 'X'),
(2627, 'GUATIMOZIN', 'X'),
(2629, 'MAIZALES', 'S'),
(2630, 'FIRMAT', 'S'),
(2633, 'CHOVET', 'S'),
(2635, 'CAÑADA DEL UCLE', 'S'),
(2637, 'LOS QUIRQUINCHOS', 'S'),
(2639, 'BERABEVU', 'S'),
(2643, 'CHAÑAR LADEADO', 'S'),
(2645, 'CORRAL DE BUSTOS', 'X'),
(2650, 'CANALS (CBA.)', 'X'),
(2651, 'PUEBLO ITALIANO', 'X'),
(2655, 'WENCESLAO ESCALANTE', 'X'),
(2657, 'LABORDE', 'X'),
(2659, 'MONTE MAIZ (CBA.)', 'X'),
(2661, 'ISLA VERDE', 'X'),
(2662, 'ALEJO LEDESMA', 'X'),
(2670, 'LA CARLOTA', 'X'),
(2671, 'GRAL. VIAMONTE', 'X'),
(2675, 'CHAZON', 'X'),
(2677, 'UCACHA', 'X'),
(2679, 'PASCANAS', 'X'),
(2700, 'PERGAMINO', 'B'),
(2701, 'GENERAL GELLY', 'S'),
(2703, 'CARABELAS', 'B'),
(2705, 'ROJAS (BS. AS.)', 'B'),
(2713, 'MANUEL OCAMPO', 'B'),
(2715, 'EL SOCORRO', 'B'),
(2717, 'ACEVEDO', 'B'),
(2718, 'MARIANO H. ALFONSO', 'B'),
(2720, 'COLON', 'B'),
(2722, 'WHEELWRIGHT', 'S'),
(2723, 'JUNCAL', 'S'),
(2725, 'HUGHES', 'S'),
(2726, 'LABORDEBOY', 'S'),
(2727, 'JOSE L. SUAREZ', 'S'),
(2728, 'MELINCUE', 'S'),
(2729, 'CARRERAS', 'S'),
(2732, 'ELORTONDO', 'S'),
(2740, 'ARRECIFES', 'B'),
(2741, 'SALTO', 'B'),
(2743, 'ARROYO DULCE', 'B'),
(2747, 'INES INDART', 'B'),
(2751, 'COLONIA LOS TOLDOS', 'B'),
(2752, 'CAPITAN SARMIENTO', 'B'),
(2760, 'SAN ANTONIO DE ARECO', 'B'),
(2774, 'TODD', 'B'),
(2800, 'ZARATE', 'B'),
(2801, 'ESCALADA', 'B'),
(2804, 'CAMPANA', 'B'),
(2806, 'LIMA', 'B'),
(2812, 'CAP. DEL SEÑOR', 'B'),
(2814, 'LOS CARDALES', 'B'),
(2820, 'GUALEGUAYCHU', 'E'),
(2826, 'URDINARRAIN', 'E'),
(2840, 'GUALEGUAY', 'E'),
(2843, 'GENERAL GALARZA', 'E'),
(2895, 'FRONTERA', 'S'),
(2900, 'SAN NICOLAS', 'B'),
(2901, 'LA EMILIA', 'B'),
(2905, 'GENERAL ROJO', 'B'),
(2907, 'CONESA', 'B'),
(2914, 'VILLA RAMALLO', 'B'),
(2915, 'RAMALLO', 'B'),
(2916, 'CRISTOBAL GILL', 'B'),
(2917, 'PUEBLO RIOS', 'S'),
(2918, 'EMPALME V. CONST.', 'S'),
(2919, 'VILLA CONSTITUCION', 'S'),
(2921, 'GODOY', 'S'),
(2930, 'SAN PEDRO', 'B'),
(2933, 'PEREZ MILLAN', 'B'),
(2935, 'SANTA LUCIA', 'B'),
(2942, 'BARADERO', 'B'),
(2946, 'GOBERNADOR CASTRO', 'B'),
(3000, 'SANTA FE', 'S'),
(3001, 'RINCON POTREROS', 'S'),
(3003, 'HELVECIA', 'S'),
(3005, 'SAN JAVIER', 'S'),
(3009, 'FRANCK', 'S'),
(3011, 'SAN JERONIMO NORTE', 'S'),
(3013, 'SAN CARLOS SUD', 'S'),
(3014, 'NUEVA POMPEYA', 'S'),
(3016, 'SANTO TOME', 'S'),
(3017, 'SAUCE VIEJO', 'S'),
(3018, 'IRIONDO', 'S'),
(3020, 'LAGUNA PAIVA', 'S'),
(3023, 'PROGRESO', 'S'),
(3025, 'SANTO DOMINGO', 'S'),
(3029, 'ELISA', 'S'),
(3036, 'LLAMBI CAMPBELL', 'S'),
(3040, 'SAN JUSTO', 'S'),
(3044, 'GOB. CRESPO', 'S'),
(3050, 'CALCHAQUI', 'S'),
(3051, 'ALEJANDRA', 'S'),
(3052, 'LA CRIOLLA', 'S'),
(3056, 'MARGARITA', 'S'),
(3060, 'TOSTADO', 'S'),
(3061, 'POZO BORRADO', 'S'),
(3064, 'BANDERA', 'G'),
(3070, 'SAN CRISTOBAL', 'S'),
(3076, 'HUANQUEROS', 'S'),
(3080, 'ESPERANZA', 'S'),
(3081, 'HUMBOLDT', 'S'),
(3085, 'PILAR', 'S'),
(3087, 'FELICIA', 'S'),
(3100, 'PARANA', 'E'),
(3101, 'MOLINO DOLL (E. R.)', 'E'),
(3103, 'LIBERTADOR SAN MARTI', 'E'),
(3105, 'DIAMANTE', 'E'),
(3107, 'SAN BENITO', 'E'),
(3109, 'VIALE', 'E'),
(3116, 'CRESPO', 'E'),
(3122, 'CERRITO', 'E'),
(3133, 'MARIA GRANDE', 'E'),
(3134, 'HASENKAMP (E. R.)', 'E'),
(3142, 'BOVRIL', 'E'),
(3144, 'SAUCE DE LUNA', 'E'),
(3150, 'NOGOYA', 'E'),
(3153, 'VICTORIA', 'E'),
(3156, 'VILLA HERNANDEZ', 'E'),
(3158, 'LUCAS GONZALEZ', 'E'),
(3162, 'ARANGUREN (E. R.)', 'E'),
(3164, 'GENERAL RAMIREZ', 'E'),
(3170, 'BASAVILBASO', 'E'),
(3174, 'ROSARIO TALA', 'E'),
(3177, 'MACIA', 'E'),
(3180, 'FEDERAL', 'E'),
(3185, 'SAN JAIME', 'E'),
(3190, 'LA PAZ', 'E'),
(3192, 'SANTA ELENA', 'E'),
(3196, 'ESQUINA (CTES.)', 'W'),
(3200, 'CONCORDIA', 'E'),
(3216, 'GRAL. CAMPOS (E.R.)', 'E'),
(3218, 'SAN SALVADOR', 'E'),
(3220, 'MONTE CASEROS', 'W'),
(3228, 'CHAJARI', 'E'),
(3230, 'P. DE LOS LIBRES', 'W'),
(3240, 'VILLAGUAY', 'E'),
(3252, 'VILLA CLARA', 'E'),
(3260, 'C. DEL URUGUAY', 'E'),
(3262, 'CASEROS', 'E'),
(3263, 'PRONUNCIAMIENTO', 'E'),
(3265, 'VILLA ELISA', 'E'),
(3280, 'COLON (E. R.)', 'E'),
(3300, 'POSADAS', 'N'),
(3302, 'ITUZAINGO', 'W'),
(3303, 'P. RICO (P. DE MIS.)', 'S'),
(3328, 'OASIS', 'N'),
(3334, 'R. DE MONTOYA (MNS.)', 'N'),
(3360, 'OBERA', 'N'),
(3364, 'SAN VICENTE (MNES.)', 'N'),
(3370, 'PTO.IGUAZU', 'N'),
(3376, 'WANDA', 'N'),
(3378, 'PUERTO ESPERANZA', 'N'),
(3380, 'ELDORADO', 'N'),
(3381, 'PUERTO PIRAY', 'N'),
(3384, 'MONTECARLO', 'N'),
(3400, 'CORRIENTES', 'W'),
(3420, 'SALADAS (CTES.)', 'W'),
(3432, 'BELLA VISTA', 'W'),
(3445, 'SANTA LUCIA (CTES.)', 'W'),
(3450, 'GOYA', 'W'),
(3460, 'CURUZU CUATIA', 'W'),
(3463, 'BUENA VISTA (SAUCE)', 'W'),
(3470, 'MERCEDES (CTES.)', 'W'),
(3500, 'RESISTENCIA', 'H'),
(3503, 'BARRANQUERAS', 'H'),
(3509, 'GRAL. JOSE DE SAN MA', 'H'),
(3513, 'GRAL. OBLIGADO', 'H'),
(3516, 'FLORENCIA', 'S'),
(3518, 'LA LEONESA', 'H'),
(3540, 'VILLA ANGELA CHACO', 'H'),
(3550, 'VERA', 'S'),
(3553, 'F. OLMOS', 'S'),
(3555, 'ROMANG', 'S'),
(3560, 'RECONQUISTA', 'S'),
(3561, 'AVELLANEDA', 'S'),
(3565, 'TARTAGAL', 'S'),
(3572, 'MALABRIGO', 'S'),
(3574, 'LAS GARZAS', 'S'),
(3580, 'VILLA OCAMPO', 'S'),
(3583, 'VILLA ANA', 'S'),
(3586, 'LAS TOSCAS', 'S'),
(3600, 'FORMOSA', 'P'),
(3603, 'VILLA DOS TRECE', 'P'),
(3624, 'IBARRETA (FORMOSA)', 'P'),
(3630, 'LAS LOMITAS', 'P'),
(3700, 'ROQUE SAENZ PEÑA', 'H'),
(3701, 'LA TIGRA (CHACO)', 'H'),
(3703, 'TRES ISLETAS', 'H'),
(3705, 'JUAN JOSE CASTELLI', 'H'),
(3722, 'LAS BREÑAS', 'H'),
(3730, 'CHARATA', 'H'),
(3732, 'GENERAL PINEDO', 'H'),
(3733, 'HERMOSO CAMPO', 'H'),
(3760, 'AÑATUYA', 'G'),
(3763, 'LOS JURIES', 'G'),
(4000, 'TUCUMAN', 'T'),
(4107, 'YERBA BUENA', 'T'),
(4129, 'TUCUMAN', 'T'),
(4158, 'J.B. ALBERDI', 'T'),
(4190, 'ROS. DE LA FRONTERA', 'A'),
(4200, 'SANTIAGO DEL ESTERO', 'G'),
(4300, 'LA BANDA', 'G'),
(4322, 'FERNANDEZ', 'G'),
(4332, 'COLONIA DORA', 'G'),
(4400, 'SALTA', 'A'),
(4405, 'ROSARIO DE LERMA', 'A'),
(4430, 'GENERAL GUEMES', 'A'),
(4452, 'EL QUEBRACHAL', 'A'),
(4500, 'SAN PEDRO (JUJUY)', 'Y'),
(4512, 'L.G.S.MARTIN (JUJUY)', 'Y'),
(4530, 'ORAN', 'A'),
(4550, 'EMBARCACION', 'A'),
(4560, 'TARTAGAL', 'A'),
(4600, 'S. S. DE JUJUY', 'Y'),
(4612, 'PALPALA', 'Y'),
(4700, 'CATAMARCA', 'K'),
(4705, 'SUMALAO (CATAMARCA)', 'K'),
(5000, 'CORDOBA', 'X'),
(5009, 'CORDOBA', 'X'),
(5010, 'CORDOBA', 'S'),
(5012, 'CORDOBA (ALEM)', 'X'),
(5016, 'ALT. V.SARF.', 'S'),
(5105, 'VILLA ALLENDE', 'X'),
(5109, 'UNQUILLO', 'X'),
(5111, 'RIO CEBALLOS', 'X'),
(5115, 'LA GRANJA (CBA)', 'X'),
(5121, 'DESPEÑADEROS', 'X'),
(5141, 'BALNEARIA', 'X'),
(5143, 'MIRAMAR', 'X'),
(5145, 'GUIÑAZU (CBA.)', 'X'),
(5147, 'ARGUELLO', 'X'),
(5149, 'SAN ROQUE', 'X'),
(5152, 'VILLA CARLOS PAZ', 'X'),
(5155, 'TANTI', 'X'),
(5162, 'CASA GRANDE', 'X'),
(5166, 'COSQUIN', 'X'),
(5172, 'LA FALDA', 'X'),
(5174, 'HUERTA GRANDE', 'X'),
(5176, 'VILLA GIARDINO', 'X'),
(5178, 'LA CUMBRE', 'X'),
(5182, 'SAN ESTEBAN', 'X'),
(5184, 'CAPILLA DEL MONTE', 'X'),
(5186, 'ALTA GRACIA', 'X'),
(5194, 'V. GRAL. BELGRANO', 'X'),
(5196, 'S. R. DE CALAMUCHITA', 'X'),
(5200, 'DEAN FUNES', 'X'),
(5203, 'TULUMBA', 'X'),
(5220, 'JESUS MARIA', 'X'),
(5236, 'VILLA TOTORAL', 'X'),
(5238, 'LAS PENAS', 'X'),
(5264, 'CATAMARCA', 'K'),
(5280, 'CRUZ DEL EJE', 'X'),
(5282, 'SAN MARCOS SIERRAS', 'X'),
(5284, 'VILLA DE SOTO', 'X'),
(5300, 'PARQ.IND.RIOJA', 'F'),
(5310, 'LA RIOJA', 'F'),
(5360, 'CHILECITO', 'F'),
(5380, 'CHAMICAL', 'F'),
(5400, 'SAN JUAN', 'J'),
(5411, 'SANTA LUCIA', 'J'),
(5419, 'ALBARDON', 'J'),
(5425, 'RAWSON (S. JUAN)', 'J'),
(5500, 'MENDOZA', 'M'),
(5501, 'GODOY CRUZ (MZA.)', 'M'),
(5507, 'LUJAN DE CUYO', 'M'),
(5513, 'COQUIMBITO', 'M'),
(5515, 'MAIPU', 'M'),
(5519, 'SAN JOSE', 'M'),
(5521, 'GUAYMALLEN', 'M'),
(5525, 'R. DE LA CRUZ', 'M'),
(5533, 'MENDOZA', 'M'),
(5545, 'USPALLATA', 'M'),
(5547, 'GODOY CRUZ', 'M'),
(5561, 'TUPUNGATO', 'M'),
(5577, 'RIVADAVIA', 'M'),
(5584, 'PALMIRA', 'M'),
(5600, 'SAN RAFAEL', 'M'),
(5620, 'COLONIA ALVEAR', 'M'),
(5700, 'SAN LUIS', 'D'),
(5701, 'JUANA KOSLAY', 'D'),
(5730, 'VILLA MERCEDES', 'D'),
(5738, 'JUSTO DARACT-S. LUIS', 'S'),
(5770, 'CONCARAN', 'D'),
(5800, 'RIO CUARTO', 'X'),
(5809, 'GRAL. CABRERA', 'X'),
(5815, 'ELENA', 'X'),
(5817, 'BERROTARAN (CBA.)', 'X'),
(5823, 'LOS CONDORES', 'X'),
(5829, 'SAMPACHO', 'X'),
(5839, 'LOS JAGUELES', 'X'),
(5850, 'RIO TERCERO', 'X'),
(5853, 'CORRALITO', 'X'),
(5854, 'ALMAFUERTE', 'X'),
(5856, 'EMBALSE (CBA.)', 'X'),
(5862, 'VILLA DEL DIQUE', 'X'),
(5864, 'V. RUMIPAL (CBA)', 'X'),
(5870, 'VILLA DOLORES', 'X'),
(5881, 'MERLO (S. LUIS)', 'D'),
(5887, 'NONO', 'X'),
(5889, 'MINA CLAVERO', 'X'),
(5891, 'VILLA CURA BROCHERO', 'X'),
(5900, 'VILLA MARIA', 'X'),
(5903, 'VILLA NUEVA', 'X'),
(5917, 'ARROYO CABRAL', 'X'),
(5921, 'LAS PERDICES', 'X'),
(5923, 'GRAL.DEHEZA', 'X'),
(5925, 'PASCO', 'X'),
(5927, 'TICINO', 'S'),
(5929, 'HERNANDO', 'X'),
(5933, 'TANCACHA', 'X'),
(5935, 'VILLA ASCASUBI', 'X'),
(5936, 'TIO PUJIO', 'X'),
(5940, 'LAS VARILLAS', 'X'),
(5941, 'LAS VERAS', 'X'),
(5949, 'ALICIA', 'X'),
(5960, 'RIO SEGUNDO', 'X'),
(5963, 'V. DEL ROSARIO', 'X'),
(5967, 'LUQUE', 'X'),
(5974, 'LAGUNA LARGA', 'X'),
(5980, 'OLIVA', 'X'),
(5986, 'ONCATIVO', 'X'),
(6000, 'JUNIN (BS. AS.)', 'B'),
(6003, 'ASCENCION', 'B'),
(6005, 'GRAL. ARENALES', 'B'),
(6007, 'ARRIBEÑOS', 'B'),
(6009, 'TEODELINA', 'S'),
(6013, 'MORSE', 'B'),
(6030, 'VEDIA (BS. AS.)', 'B'),
(6032, 'LEANDRO N. ALEM', 'B'),
(6034, 'JUAN B. ALBDERDI', 'B'),
(6036, 'DIEGO DE ALVEAR', 'S'),
(6039, 'CHRISTOPHERSEN', 'S'),
(6042, 'IRIARTE', 'B'),
(6053, 'GERMANIA', 'B'),
(6062, 'CORONEL GRANADA', 'B'),
(6064, 'AMEGHINO', 'B'),
(6070, 'LINCOLN', 'B'),
(6075, 'ARENAZA', 'B'),
(6100, 'RUFINO', 'S'),
(6101, 'LA CESIRA', 'X'),
(6103, 'AMENABAR', 'S'),
(6105, 'CAÑADA SECA', 'B'),
(6106, 'AARON CASTELLANOS', 'S'),
(6120, 'LABOULAYE', 'X'),
(6123, 'MELO', 'X'),
(6132, 'GRAL.LEVALLE', 'X'),
(6200, 'REALICO', 'L'),
(6205, 'ING. LUIGGI', 'L'),
(6221, 'INT.ALVEAR', 'L'),
(6223, 'CNEL. CHARLONE', 'B'),
(6230, 'GRAL. VILLEGAS', 'B'),
(6237, 'AMERICA (BS. AS.)', 'B'),
(6241, 'PIEDRITAS', 'B'),
(6244, 'BANDERALO', 'B'),
(6270, 'HUINCA RENANCO', 'X'),
(6271, 'DEL CAMPILLO', 'X'),
(6300, 'SANTA ROSA', 'L'),
(6303, 'TOAY (LA PAMPA)', 'L'),
(6333, 'QUEMU QUEMU', 'L'),
(6339, 'SALLIQUELO', 'B'),
(6360, 'GRAL.PICO', 'L'),
(6400, 'TRENQUE LAUQUEN', 'B'),
(6430, 'CARHUE', 'B'),
(6441, 'RIVERA', 'B'),
(6450, 'PEHUAJO', 'B'),
(6465, 'HENDERSON (BS. AS.)', 'B'),
(6500, '9 DE JULIO', 'B'),
(6530, 'CARLOS CASARES', 'B'),
(6550, 'BOLIVAR', 'B'),
(6555, 'DAIREAUX', 'B'),
(6600, 'MERCEDES (BS. AS.)', 'S'),
(6620, 'CHIVILCOY', 'B'),
(6640, 'BRAGADO', 'B'),
(6660, '25 DE MAYO', 'B'),
(6700, 'LUJAN', 'B'),
(6720, 'SAN ANDRES DE GILES', 'B'),
(6725, 'CARMEN DE ARECO', 'B'),
(6740, 'CHACABUCO', 'B'),
(7000, 'TANDIL', 'B'),
(7020, 'BENITO JUAREZ', 'B'),
(7100, 'DOLORES', 'B'),
(7105, 'S. CLEMENTE DEL TUYU', 'B'),
(7163, 'GRAL. MADARIAGA', 'B'),
(7165, 'VILLA GESELL', 'B'),
(7167, 'PINAMAR', 'B'),
(7203, 'RAUCH', 'B'),
(7240, 'LOBOS', 'B'),
(7267, 'ALVAREZ', 'B'),
(7300, 'AZUL', 'B'),
(7400, 'OLAVARRIA', 'B'),
(7404, 'MUÑOZ', 'B'),
(7406, 'GENERAL LAMADRID', 'B'),
(7418, 'MONTEVIDEO', 'S'),
(7500, 'TRES ARROYOS', 'B'),
(7521, 'SAN CAYETANO', 'B'),
(7540, 'CORONEL SUAREZ', 'B'),
(7600, 'MAR DEL PLATA', 'B'),
(7607, 'MIRAMAR', 'B'),
(7609, 'SANTA CLARA DEL MAR', 'B'),
(7620, 'BALCARCE', 'B'),
(7630, 'NECOCHEA', 'B'),
(7631, 'QUEQUEN (BS. AS.)', 'B'),
(8000, 'BAHIA BLANCA', 'B'),
(8109, 'PUNTA ALTA', 'B'),
(8118, 'CABILDO', 'B'),
(8136, 'MONTES DE OCA', 'B'),
(8138, 'RIO COLORADO', 'R'),
(8150, 'CORONEL DORREGO', 'B'),
(8153, 'MONTE HERMOSO', 'B'),
(8166, 'SALDUNGARAY', 'B'),
(8170, 'PIGUE', 'B'),
(8172, 'ARROYO CORTO', 'B'),
(8183, 'DARREGUEIRA', 'B'),
(8200, 'G. ROCA (R. NEGRO)', 'L'),
(8204, 'BERNASCONI', 'L'),
(8208, 'JACINTO ARAUZ', 'L'),
(8300, 'NEUQUEN', 'Q'),
(8303, 'CINCO SALTOS (R. N.)', 'R'),
(8307, 'CATRIEL', 'S'),
(8309, 'CENTENARIO', 'Q'),
(8316, 'PLOTTIER', 'Q'),
(8322, 'CUTRAL CO', 'Q'),
(8324, 'CIPOLLETTI', 'R'),
(8328, 'ALLEN (R. NEGRO)', 'R'),
(8332, 'GENERAL ROCA', 'R'),
(8340, 'ZAPALA', 'Q'),
(8345, 'VILLA PEHUENIA', 'Q'),
(8349, 'LONCOPUE', 'Q'),
(8353, 'CERRO NEGRO-CHOS MAL', 'Q'),
(8363, 'LAMARQUE', 'R'),
(8370, 'S. M. DE LOS ANDES', 'Q'),
(8371, 'JUNIN DE LOS ANDES', 'Q'),
(8400, 'BARILOCHE', 'R'),
(8407, 'VILLA LA ANGOSTURA', 'Q'),
(8500, 'VIEDMA', 'R'),
(8503, 'GENERAL CONESA', 'R'),
(8520, 'LAS GRUTAS', 'R'),
(9000, 'COM. RIVADAVIA', 'U'),
(9001, 'RADA TILLY', 'U'),
(9011, 'CALETA OLIVIA', 'Z'),
(9013, 'CAÑADON SECO', 'Z'),
(9015, 'PICO TRUNCADO', 'Z'),
(9100, 'TRELEW', 'U'),
(9101, 'DIQUE FLORENTINO A.', 'U'),
(9103, 'PUERTO RAWSON', 'U'),
(9120, 'PUERTO MADRYN', 'U'),
(9200, 'ESQUEL', 'U'),
(9201, 'EL CALAFATE', 'U'),
(9300, 'PUERTO SANTA CRUZ', 'Z'),
(9303, 'COMANDANTE LUIS PIED', 'Z'),
(9310, 'PTO. SAN JULIAN', 'Z'),
(9400, 'RIO GALLEGOS', 'Z'),
(9405, 'CALAFATE', 'Z'),
(9410, 'USHUAIA', 'V'),
(9420, 'RIO GRANDE (T.FUEGO)', 'V'),
(9999, 'DESCONOCIDO', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidades`
--

CREATE TABLE `nacionalidades` (
  `id` int(11) NOT NULL,
  `nacionalidad` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nacionalidades`
--

INSERT INTO `nacionalidades` (`id`, `nacionalidad`) VALUES
(1, 'Argentino'),
(2, 'Uruguayo'),
(3, 'Paraguayo'),
(4, 'Chileno'),
(5, 'Brasilero'),
(6, 'Boliviano'),
(7, 'Español'),
(8, 'Venezolano'),
(9, 'Italiano'),
(10, 'Estadounidense'),
(12, 'Peruano'),
(13, 'Portugues'),
(14, 'Yugoeslavo'),
(15, 'Irani'),
(16, 'Polaco'),
(17, 'Libanes'),
(18, 'Frances'),
(19, 'Bulgaro'),
(20, 'Austriaco'),
(21, 'Sirio'),
(22, 'Aleman'),
(23, 'Canadiense'),
(24, 'Danes'),
(25, 'Escoses'),
(26, 'Finlandes'),
(27, 'Filipino'),
(28, 'Jamaiquino'),
(30, 'Japones'),
(31, 'Marroqui'),
(32, 'Malayo'),
(33, 'Nicaraguense'),
(34, 'Tailandes'),
(35, 'Ecuatoriano'),
(36, 'Iraqui'),
(37, 'Suizo'),
(38, 'Sueco'),
(39, 'Australiano'),
(40, 'Chino'),
(41, 'Coreano'),
(42, 'Groenlandesa'),
(43, 'Noruego'),
(44, 'Mexicano'),
(45, 'Ingles'),
(46, 'Irlandes'),
(47, 'Dominicano'),
(48, 'Griego'),
(49, 'Israeli'),
(50, 'Colombiano'),
(51, 'Ucraniano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id` int(11) NOT NULL,
  `iddepartamento` int(11) DEFAULT NULL,
  `matricula` int(11) DEFAULT NULL,
  `submatricula` int(11) DEFAULT NULL,
  `idlocalidad` int(11) DEFAULT NULL,
  `idzona` varchar(1) DEFAULT NULL,
  `ncatastral` varchar(20) DEFAULT NULL,
  `pinmobiliaria` varchar(16) DEFAULT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `nrocalle` int(11) DEFAULT NULL,
  `lote` varchar(10) DEFAULT NULL,
  `manzana` varchar(10) DEFAULT NULL,
  `superficie` decimal(12,2) DEFAULT NULL,
  `nroplano` varchar(7) DEFAULT NULL,
  `anioplano` int(11) DEFAULT NULL,
  `ecalles` varchar(100) DEFAULT NULL,
  `arranque` varchar(100) DEFAULT NULL,
  `rumbos` varchar(1000) DEFAULT NULL,
  `unidad` varchar(6) DEFAULT NULL,
  `parcela` varchar(10) DEFAULT NULL,
  `supexclu` decimal(8,2) DEFAULT NULL,
  `supcomun` decimal(8,2) DEFAULT NULL,
  `valorpro` decimal(5,2) DEFAULT NULL,
  `planta` varchar(20) DEFAULT NULL,
  `destino` varchar(20) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `iddepartamento`, `matricula`, `submatricula`, `idlocalidad`, `idzona`, `ncatastral`, `pinmobiliaria`, `calle`, `nrocalle`, `lote`, `manzana`, `superficie`, `nroplano`, `anioplano`, `ecalles`, `arranque`, `rumbos`, `unidad`, `parcela`, `supexclu`, `supcomun`, `valorpro`, `planta`, `destino`, `idusuario`) VALUES
(10, 13, 1, NULL, 2520, 'R', '13010101', '13111111', 'CAMINO PUBLICO', 2250, '8', 'B', 50333.45, '151916', 1990, 'ruta nacional 9 y calle 12', 'a los 2.5 km de ruta nacional 9', 'Limita con los lotes 22 hacia el Oeste y 53 hacia el Sur', '', '', NULL, NULL, NULL, '', '', 12),
(11, 13, 17, 1, 2520, 'U', '13020202', '13222222', 'RIOJA', 2178, 'A1', '44', 801.50, '514477', 2002, 'entre Amenabar y Belgrano', 'a los 3m de Amenabar', 'Mide 7m de frente por 40m de fondo y limita con los lotes 8,9 y 10', '12', '05-05', 33.30, 12.80, 3.10, 'segundo piso', 'vivienda', 12),
(12, 13, 200, NULL, 2508, 'S', '13030303', '13333333', 'COLON', 345, 'Z', '12', 892.10, '45782', 2005, 'entre Rioja y Montevideo', 'a los 45 m de Rioja', 'Linda con lotes 9 hacia el Norte y el lote 22 hacia el Este', '', '', NULL, NULL, NULL, '', '', 12),
(13, 14, 111, NULL, 2500, 'U', '14040404', '14444444', 'SAN LUIS', 888, 'J1', '45', 34.89, '158244', 1998, 'entre calle Cordoba y Pellegrini', 'a los 83m de Pellegrini', 'Mide 8m de frente y linda con lotes 22 y 24', '', '', NULL, NULL, NULL, '', '', 12),
(14, 15, 888, 7, 2200, 'U', '15050505', '15555555', 'Rioja', 700, '16', '26', 19.63, '1392465', 1996, 'J.M de Rosas y 1ro de Mayo', 'a los 37m de 1ro de Mayo', 'Linda con lote 15 y 17', '15', '05-05', 55.20, 12.40, 45.00, 'Piso 5', 'vivienda', 12),
(15, 16, 1235, NULL, 2152, 'U', '16060606', '16666666', 'Santa Fe', 2235, '7', '18', 39.52, '132548', 2001, 'Entre bv. Oroño y Alvear', 'a los 35 metros de bv. Oroño', 'Entre lote 6 y8', '', '', NULL, NULL, NULL, '', 'vivienda', 12),
(16, 16, 17238, 4, 2000, 'U', '16060606', '16777777', 'Laprida ', 1589, '19', '3', 32.18, '1206', 2007, 'entre San Luis y Rioja', 'Entre lote 18 y 20', 'a 89 metros de San luis', '2', '3-2', NULL, NULL, NULL, '', '', 12),
(17, 16, 17238, 31, 2000, 'U', '16666666', '16888888', 'Laprida', 1589, '19', '3', 32.18, '1206', 2007, 'entre San Luis y Rioja', 'Entre lote 18 y 20', 'a 89 metros de San luis', '2-3', '2', NULL, NULL, NULL, '', '', 12),
(18, 17, 21, NULL, 2170, 'U', '17090909', '17999999', 'Moreno', 1000, '6', '3', 42.12, '1548', 1999, '1', 'Entre 9 de julio y 3 de febrero', 'Entre lote 5 y 7', '', '', NULL, NULL, NULL, '', '', 12),
(19, 19, 522, 19, 2503, 'U', '19999999', '19000000', '9 de Julio', 1730, '4', '12', 14.92, '3594', 2013, 'pt. Roca y Paraguay', 'entre lote 3 y 5', 'A 30 metros de Paraguay', ' ', '', NULL, NULL, NULL, '', '', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` varchar(1) NOT NULL,
  `nomprovincia` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `nomprovincia`) VALUES
('A', 'SALTA'),
('B', 'BUENOS AIRES'),
('D', 'SAN LUIS'),
('E', 'ENTRE RIOS'),
('F', 'LA RIOJA'),
('G', 'SANTIAGO DEL ESTERO'),
('H', 'CHACO'),
('J', 'SAN JUAN'),
('K', 'CATAMARCA'),
('L', 'LA PAMPA'),
('M', 'MENDOZA'),
('N', 'MISIONES'),
('P', 'FORMOSA'),
('Q', 'NEUQUEN'),
('R', 'RIO NEGRO'),
('S', 'SANTA FE'),
('T', 'TUCUMAN'),
('U', 'CHUBUT'),
('V', 'TIERRA DEL FUEGO'),
('W', 'CORRIENTES'),
('X', 'CORDOBA'),
('Y', 'JUJUY'),
('Z', 'SANTA CRUZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumentos`
--

CREATE TABLE `tipodocumentos` (
  `id` int(11) NOT NULL,
  `nomdocumento` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodocumentos`
--

INSERT INTO `tipodocumentos` (`id`, `nomdocumento`) VALUES
(1, 'D.N.I.'),
(2, 'L.C.'),
(3, 'L.E.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titfisicos`
--

CREATE TABLE `titfisicos` (
  `idtitular` int(11) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `idnacionalidad` int(11) DEFAULT NULL,
  `idtipodocumento` int(11) DEFAULT NULL,
  `nrodocumento` int(11) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `idestcivil` int(11) DEFAULT NULL,
  `nupcias` int(11) DEFAULT NULL,
  `conyuge` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `titfisicos`
--

INSERT INTO `titfisicos` (`idtitular`, `sexo`, `apellido`, `nombres`, `idnacionalidad`, `idtipodocumento`, `nrodocumento`, `fechanac`, `idestcivil`, `nupcias`, `conyuge`) VALUES
(30, 'F', 'GARCIA', 'MONICA ANDREA', 1, 1, 22180410, '1998-05-20', 1, NULL, ''),
(31, 'F', 'GARCIA', 'ANTONIA', 1, 2, 2520520, '1943-08-26', 3, NULL, ''),
(32, 'M', 'FLORES', 'NICOLAS', 6, 1, 33123485, '1985-12-24', 2, 1, 'Maria Antonieta de las Nieves'),
(36, 'F', 'Manasseri', 'Marcela', 5, 1, 19534268, '1968-02-18', 2, 2, 'Morassi Alberto'),
(37, 'F', 'Guetierrez', 'Ana', 50, 1, 29648134, '1984-05-29', 1, NULL, ''),
(38, 'M', 'Paz', 'Juan', 50, 1, 21954673, '1970-11-03', 2, NULL, 'Fernandez Graciela'),
(42, 'M', 'Senssini', 'Alejandro', 7, 1, 18263458, '1964-09-03', 2, 1, 'Gorbalan Natalia'),
(43, 'M', 'Ferreira', 'Luis', 1, 1, 17265485, '1962-11-30', 4, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titjuridicos`
--

CREATE TABLE `titjuridicos` (
  `idtitular` int(11) DEFAULT NULL,
  `razonsocial` varchar(200) DEFAULT NULL,
  `tomorpc` varchar(4) DEFAULT NULL,
  `foliorpc` varchar(5) DEFAULT NULL,
  `nrorpc` int(11) DEFAULT NULL,
  `fecharpc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `titjuridicos`
--

INSERT INTO `titjuridicos` (`idtitular`, `razonsocial`, `tomorpc`, `foliorpc`, `nrorpc`, `fecharpc`) VALUES
(29, 'COOPERATIVA DE LAS ROSAS', '111', '222', 333, '2017-11-01'),
(33, 'ASOCIACION CIVIL LA PALOMA', '', '', NULL, NULL),
(39, 'Rojo S.A', '', '', NULL, NULL),
(40, 'Rojo S.A', '', '', NULL, NULL),
(41, 'Zaeta S.A', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulares`
--

CREATE TABLE `titulares` (
  `id` int(11) NOT NULL,
  `idpropiedad` int(11) DEFAULT NULL,
  `persona` varchar(1) DEFAULT NULL,
  `nrocuit` varchar(13) DEFAULT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `nrocalle` int(11) DEFAULT NULL,
  `idprovincia` varchar(1) DEFAULT NULL,
  `idlocalidad` int(11) DEFAULT NULL,
  `porcentaje` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `titulares`
--

INSERT INTO `titulares` (`id`, `idpropiedad`, `persona`, `nrocuit`, `calle`, `nrocalle`, `idprovincia`, `idlocalidad`, `porcentaje`) VALUES
(29, 10, 'J', '33-12312312-8', 'SAN JUAN', 23, 'S', 2520, 100.00),
(30, 11, 'F', '27-22180410-0', 'URQUIZA', 1172, 'B', 1000, 50.00),
(31, 11, 'F', '27-02520520-4', 'URQUIZA', 1172, 'B', 1000, 50.00),
(32, 12, 'F', '20-33123485-2', 'COLON', 345, 'S', 2508, 100.00),
(33, 13, 'J', '33-45454545-8', 'CATAMARCA', 789, 'X', 5010, 100.00),
(36, 14, 'F', '27-19534268-1', 'Paraguay', 1120, 'S', 2000, 100.00),
(37, 15, 'F', '27-29648134-9', 'Paraguay', 2229, 'J', 5400, 50.00),
(38, 15, 'F', '33-21954673-2', 'Tucuman ', 1348, 'S', 2000, 50.00),
(39, 16, 'J', '33-49826143-4', 'Laprida', 1589, 'S', 2000, 100.00),
(40, 17, 'J', '33-12123123-2', 'Laprida', 1589, 'G', 2000, 100.00),
(41, 18, 'J', '33-1652489-7', 'Moreno', 1000, 'S', 2000, 70.00),
(42, 18, 'F', '20-19263458-3', 'Pellegrini', 300, 'S', 2000, 30.00),
(43, 19, 'F', '20-17265485-8', 'Jujuy', 200, 'S', 2000, 100.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `contrasenia` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `categoria`, `correo`, `contrasenia`) VALUES
(12, 'Juan Carlos Perez', 2, 'admin@hotmail.com', '123'),
(13, 'Maria Gonzalez', 1, 'prof@hotmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id` varchar(1) NOT NULL,
  `nomzona` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `nomzona`) VALUES
('R', 'RURAL'),
('S', 'SUBURBANA'),
('U', 'URBANA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estciviles`
--
ALTER TABLE `estciviles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fklocalidades_idx` (`idprovincia`);

--
-- Indices de la tabla `nacionalidades`
--
ALTER TABLE `nacionalidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkpropiedades_idx` (`iddepartamento`),
  ADD KEY `fkpropiedades3_idx` (`idzona`),
  ADD KEY `fkpropiedades2_idx` (`idlocalidad`),
  ADD KEY `fkpropiedades4_idx` (`idusuario`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodocumentos`
--
ALTER TABLE `tipodocumentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `titfisicos`
--
ALTER TABLE `titfisicos`
  ADD KEY `fkfisicos2_idx` (`idnacionalidad`),
  ADD KEY `fkfisicos3_idx` (`idtipodocumento`),
  ADD KEY `fkfisicos4_idx` (`idestcivil`),
  ADD KEY `fkfisicos` (`idtitular`);

--
-- Indices de la tabla `titjuridicos`
--
ALTER TABLE `titjuridicos`
  ADD KEY `fkjuridicos_idx` (`idtitular`);

--
-- Indices de la tabla `titulares`
--
ALTER TABLE `titulares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fktitulares_idx` (`idpropiedad`),
  ADD KEY `fktitulares2_idx` (`idprovincia`),
  ADD KEY `fktitulares3_idx` (`idlocalidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nacionalidades`
--
ALTER TABLE `nacionalidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tipodocumentos`
--
ALTER TABLE `tipodocumentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `titulares`
--
ALTER TABLE `titulares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD CONSTRAINT `fklocalidades` FOREIGN KEY (`idprovincia`) REFERENCES `provincias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `fkpropiedades` FOREIGN KEY (`iddepartamento`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkpropiedades2` FOREIGN KEY (`idlocalidad`) REFERENCES `localidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkpropiedades3` FOREIGN KEY (`idzona`) REFERENCES `zonas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkpropiedades4` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `titfisicos`
--
ALTER TABLE `titfisicos`
  ADD CONSTRAINT `fkfisicos` FOREIGN KEY (`idtitular`) REFERENCES `titulares` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkfisicos2` FOREIGN KEY (`idnacionalidad`) REFERENCES `nacionalidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkfisicos3` FOREIGN KEY (`idtipodocumento`) REFERENCES `tipodocumentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkfisicos4` FOREIGN KEY (`idestcivil`) REFERENCES `estciviles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `titjuridicos`
--
ALTER TABLE `titjuridicos`
  ADD CONSTRAINT `fkjuridicos` FOREIGN KEY (`idtitular`) REFERENCES `titulares` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `titulares`
--
ALTER TABLE `titulares`
  ADD CONSTRAINT `fktitulares` FOREIGN KEY (`idpropiedad`) REFERENCES `propiedades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fktitulares2` FOREIGN KEY (`idprovincia`) REFERENCES `provincias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fktitulares3` FOREIGN KEY (`idlocalidad`) REFERENCES `localidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
