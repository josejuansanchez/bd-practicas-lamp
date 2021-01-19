--
-- Database: `delegado`
--
DROP DATABASE IF EXISTS delegado;
CREATE DATABASE IF NOT EXISTS delegado DEFAULT CHARACTER SET utf8mb4;

USE delegado;

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE alumno (
  id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  apellido1 VARCHAR(50) NOT NULL,
  apellido2 VARCHAR(50),
  candidato ENUM('sí','no') NOT NULL DEFAULT 'sí',
  imagen_perfil VARCHAR(512) NOT NULL,
  vota_a INTEGER UNSIGNED,
  fecha_hora_voto DATETIME,
  ip VARCHAR(15),
  FOREIGN KEY (vota_a) REFERENCES alumno(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumno`
--

INSERT INTO alumno VALUES
(1, 'Reinaldo', 'Demetrio', 'Castillo', 'sí', '1.png', NULL, NULL, NULL),
(2, 'Esmeralda', 'Violeta', 'Casal', 'sí', '2.png', NULL, NULL, NULL),
(3, 'Trini', 'López', 'Ventura', 'sí', '3.png', NULL, NULL, NULL),
(4, 'Leandro', 'Prudencio', 'Paredes', 'sí', '4.png', NULL, NULL, NULL),
(5, 'María', 'Sánchez', 'Martínez', 'sí', '5.png', NULL, NULL, NULL),
(6, 'Eladio', 'Quirino', 'Cuéllar', 'sí', '6.png', NULL, NULL, NULL),
(7, 'Darío', 'Estela', 'Arriola', 'sí', '7.png', NULL, NULL, NULL),
(8, 'Rosa', 'Adán', 'Olmos', 'sí', '8.png', NULL, NULL, NULL),
(9, 'Antonio', 'Rodríguez', 'Ramos', 'sí', '9.png', NULL, NULL, NULL),
(10, 'Íñigo', 'Maldonado', 'Salmerón', 'sí', '10.png', NULL, NULL, NULL);