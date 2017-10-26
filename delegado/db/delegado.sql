--
-- Database: `delegado`
--
CREATE DATABASE IF NOT EXISTS `delegado` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `delegado`;

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE alumno (
  id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  apellido1 VARCHAR(50) NOT NULL,
  apellido2 VARCHAR(50) DEFAULT NULL,
  candidato ENUM('sí','no') NOT NULL DEFAULT 'sí',
  vota_a INTEGER UNSIGNED,
  fecha_hora_voto DATETIME,
  ip VARCHAR(15),
  FOREIGN KEY (vota_a) REFERENCES alumno(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumno`
--

INSERT INTO alumno VALUES
(1, 'Reinaldo', 'Demetrio', 'Castillo', 'sí', NULL, NULL, NULL),
(2, 'Esmeralda', 'Violeta', 'Casal', 'sí', NULL, NULL, NULL),
(3, 'Trini', 'López', 'Ventura', 'sí', NULL, NULL, NULL),
(4, 'Leandro', 'Prudencio', 'Paredes', 'sí', NULL, NULL, NULL),
(5, 'María', 'Sánchez', 'Martínez', 'sí', NULL, NULL, NULL),
(6, 'Eladio', 'Quirino', 'Cuéllar', 'sí', NULL, NULL, NULL),
(7, 'Darío', 'Estela', 'Arriola', 'sí', NULL, NULL, NULL),
(8, 'Rosa', 'Adán', 'Olmos', 'sí', NULL, NULL, NULL),
(9, 'Antonio', 'Rodríguez', 'Ramos', 'sí', NULL, NULL, NULL),
(10, 'Íñigo', 'Maldonado', 'Salmerón', 'sí', NULL, NULL, NULL);