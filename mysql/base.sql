-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 30, 2020 at 01:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 1;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: 'base'
--

-- --------------------------------------------------------

--
-- Table structure for table 'lang'
--

CREATE TABLE 'lang' (
  'id' int(3) NOT NULL,
  'lang' varchar(2) NOT NULL COMMENT 'ISO 2 Letter Language Code'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table 'lang'
--

INSERT INTO 'lang' ('id', 'lang') VALUES
(1, 'en'),
(2, 'es');

-- --------------------------------------------------------

--
-- Table structure for table 'text1'
--

CREATE TABLE 'text1' (
  'id' int(8) NOT NULL,
  'page' varchar(64) NOT NULL,
  'class' varchar(64) DEFAULT NULL,
  'text' text NOT NULL,
  'link' text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table 'text1'
--

INSERT INTO 'text1' ('id', 'page', 'class', 'text', 'link') VALUES
(1, 'menu', 'menu', 'Home', 'home'),
(2, 'menu', 'menu', 'About Us', 'about-us'),
(3, 'menu', 'menu', 'Contact', 'contact'),
(4, 'home', 'title', 'Welcome to our web', NULL),
(5, 'home', 'text', 'Write plain text or <b>HTML</b> in the database.', NULL),
(6, 'about-us', 'title', 'About Us', NULL),
(7, 'about-us', 'text', 'We are the people!', NULL),
(8, 'contact', 'title', 'Contact us', NULL),
(9, 'contact', 'text', 'This is my email: jose@demidea.com', NULL),
(10, 'about-us', NULL, '<h2>Another block with no class</h2>', NULL),
(11, 'about-us', 'text', 'We are using a title with no class, and then we format it applying CSS format directly to \'h2\' tag. We are adding also a break and an image. </br> </br> We center the image applying CSS to this particular class (\'image-centered\') and then we set a border to any image (\'img\' tag):', NULL),
(12, 'about-us', 'image-centered', '<img src=\"img/ideas.gif\" alt=Looking for ideas\" height=\"60\" width=\"256\">', NULL);

-- --------------------------------------------------------

--
-- Table structure for table 'text2'
--

CREATE TABLE 'text2' (
  'id' int(8) NOT NULL,
  'page' varchar(64) NOT NULL,
  'class' varchar(64) DEFAULT NULL,
  'text' text NOT NULL,
  'link' text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table 'text2'
--

INSERT INTO 'text2' ('id', 'page', 'class', 'text', 'link') VALUES
(1, 'menu', 'menu', 'Inicio', 'home'),
(2, 'menu', 'menu', 'Nosotros', 'about-us'),
(3, 'menu', 'menu', 'Contacto', 'contact'),
(4, 'home', 'title', 'Bienvenidos a nuestra web', NULL),
(5, 'home', 'text', 'En la base de datos puedes escribir texto plano o <b>formateado con HTML</b>', NULL),
(6, 'about-us', 'title', 'Quiénes somos', NULL),
(7, 'about-us', 'text', 'Profesionales que no dejamos de aprender!', NULL),
(8, 'contact', 'title', 'Contáctanos', NULL),
(9, 'contact', 'text', 'Contacta con nosotros por medio de nuestro email: jose@demidea.com', NULL),
(10, 'about-us', NULL, '<h2>Un bloque sin clase</h2>', NULL),
(11, 'about-us', 'text', 'En este texto utilizamos un titular sin clase, que formateamos con CSS directamente en la etiqueta \'h2\'. \r\n</br> </br>\r\nAsimismo, usamos un break y agregamos  una imagen que aparece centrada, por medio de la clase del \'div\'. Del mismo modo, ponemos un borde en la etiqueta \'img\' para que cualquier imagen que podamos agregar lo tenga:', NULL),
(12, 'about-us', 'image-centered', '<img src=\"img/ideas.gif\" alt=Looking for ideas\" height=\"60\" width=\"256\">', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table 'lang'
--
ALTER TABLE 'lang'
  ADD PRIMARY KEY ('id') USING BTREE;

--
-- Indexes for table 'text1'
--
ALTER TABLE 'text1'
  ADD PRIMARY KEY ('id');

--
-- Indexes for table 'text2'
--
ALTER TABLE 'text2'
  ADD PRIMARY KEY ('id');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table 'lang'
--
ALTER TABLE 'lang'
  MODIFY 'id' int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table 'text1'
--
ALTER TABLE 'text1'
  MODIFY 'id' int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table 'text2'
--
ALTER TABLE 'text2'
  MODIFY 'id' int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
