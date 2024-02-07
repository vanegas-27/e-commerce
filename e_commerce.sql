-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 12:20 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `img`) VALUES
(1, '../public/assets/img/baner-berserk.webp'),
(2, '../public/assets/img/baner-principal houses.webp'),
(3, '../public/assets/img/baner-marcaSacrificio.webp');

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `producto` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `catalogo`
--

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `producto` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `categoria` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `catalogo`
--

INSERT INTO `catalogo` (`id`, `img`, `producto`, `descripcion`, `categoria`, `precio`) VALUES
(1, '../public/assets/img/1984.webp', 'magia', 'otro mundo encantador se esconde entre paginas. asdlasdlsadlñasmdñlasmd ldñasdñlakdlaskdaskdñla', 'ficcion', 45000),
(2, '../public//assets/img/amor a cuatro estaciones.webp', 'amor y pasion', 'dñlaks dasdkadlñaskdasdjkjhjdkjjkjkhsdkjfhjkfhsdjk fhkjdf hkjdf hkfh skjfh kjfh skhfs kj', 'romance', 12500),
(3, '../public//assets/img/aunque tengas miedo hagalo igual.webp', 'aunque tenga miedo hazlo', 'lasñdñ lkdlaskd lñaskdalñs dkaslñ dañsdkaldk ñadjadhak djdshjs dkajsd', 'aventura', 45300),
(4, '../public/assets/img/cancion de hielo y fuego-tormenta de espadas.webp', 'canción hielo y fuego', 'dajsldkja dkjadlkaj sdlkasjd ldjalks djlaksjdlajdlajdlkasjd lkasjdajldkjljsa', 'aventura', 7540),
(5, '../public/assets/img/cien años de soledad.webp', '100 años de soledad', 'jsadlkj ldjsdlj ldasjdladjladjlaks', 'romance', 7540),
(6, '../public/assets/img/doce cuentos peregrinos.webp', '12 cuentos peregrinos', 'asdadad d lakdj ljdlad jlasdjalsdjdadhbhjdasdvvhgv gh sdh sjfh  ', 'aventura', 1200),
(7, '../public/assets/img/don quijote de la mancha.webp', 'don quijote de la manca', 'sdasdj dlkasdj la jldkasdj saasdh adjkh dakjhdah jakdhasjkd kasd', 'aventura', 7800),
(8, '../public/assets/img/dr jekyll & mr hyde.webp', 'doctor mr', 'mlkasjdklasjd alkdjal djancm, xv ncxnvxc mvnshhfasflkfsdjflks flkf sflskdfj', 'ficcion', 3340),
(9, '../public/assets/img/el arte de la guerra.webp', 'el arte de la guerra', 'ldkañsdlñ akdlakd asñldka kdñla kdaslñdasdñl askdadl ad añdkadkdasdj kjad', 'drama', 3440),
(10, '../public/assets/img/el caballero de los siete reinos.webp', 'el caballero de los siete reinos', 'lñasd ñldkañlklñkkkk kkkkkkkkkkkkkkkkkkkkk kkkkkkkkkkkkkkkk kkkkkkkkkkk k ñlk ñlk', 'aventura', 8709),
(11, '../public/assets/img/el conde de montecristo.webp', 'el conde de montecristo', 'lñak akñlkfdñsl gkpod gkopkgorekldksn ldsflk dlvlnfdsn dkdf', 'drama', 1234),
(12, '../public/assets/img/el coronel no tiene quien le escriba.webp', 'el coronel', 'lamsdñl akdals kdsaf pfsdl ´pdsf djkbdf kjbas dk jasdaklsdklf sakf', 'ficcion', 900),
(13, '../public/assets/img/el genio al que le robaron la luz.webp', 'el genio', 'asldñl kdñlaksdñlaks dlñkdñlaks dlkasdlñkñdlkasñldkañldkañldkañldk añldk akdñlak ', 'ficcion', 9999),
(14, '../public/assets/img/el libro del desasosiego.webp', 'el libro del desasosiego', 'kasñldk oajiuasdhfiusfu fuyasgf uysagfyugs fuygsauyf gasdgfufdhidsfhidshf', 'romance', 7676),
(15, '../public/assets/img/el olvido que seremos.webp', 'el olvido que seremos', 'ajsld ldkañsldkasñdlkad ídiwojsdpofj spdfjosdjfsiodjf oisfo isfoisdjiosf', 'romance', 9898),
(16, '../public/assets/img/el principito.webp', 'el principito', 'kmklklfj kljlskdf jdsgj ñfg', 'fabula', 3000),
(17, '../public/assets/img/flores para algernon.webp', 'flores para algernon', 'lañkdñla kdñlakdlñaks dadk ñldkas dp', 'aventura', 9324),
(18, '../public/assets/img/funerales de la mama grande.webp', 'funerales  ', 'alñdkñal kdalñdkañlkdañsdklsa', 'drama', 3456),
(19, '../public/assets/img/las venas abiertas de america latina.webp', 'las venas abiertas', 'dlk sajlk djaskdñadald ñllañsjldfgkdsfkj gjdsg ldkf', 'ficcion', 9768),
(20, '../public/assets/img/matar a un ruiseñor.webp', 'matar a un ruiseñor', 'lasñ kalñsdk alñsdkañldkasdlñaksdlñakdñlka ñldkaslñdkada', ' aventura', 2345),
(21, '../public/assets/img/mejorias de la casa muerta.webp', 'la casa muerta', 'masñ lñalskdñlak alkd añlkd lakd hiu hdfgjdsfjgdfs', 'drama', 6789),
(22, '../public/assets/img/mundo de hielo y fuego.webp', 'mundo de hielo y fuego', 'las ñlaksdlaksdñ lkgirejogie wers sdf pf psafp osfjo sfiosadh fhfd', 'drama', 6734),
(23, '../public/assets/img/que-viva-la-musica.webp', 'que viva la musica', 'ñllk s flsaiqwjeio ejoiwqje ks lfsdlkdj lksjflk sajflajlfjalfkjal fakfñ', 'romance', 6543),
(24, '../public/assets/img/rebelion-en-la-granja.webp', 'rebelion en la granja', 'jald jkdljasdlk jdkla j ,xzmnc ,mzcn nc,mz c jczsdfjsdfdfg jsfhsd fjs', 'drama', 9888),
(25, '../public/assets/img/un-mundo-feliz.webp', 'un mundo feliz', 'aklsd alksdaksljd lkadjkal djlasjdlkajdlkasjdlk ajdljadadjalsk', 'aventura', 5555),
(26, '../public/assets/img/viaje-al-centro-de-la-tierra.webp', 'viaje al centro de la tierra', 'masla dlñdasñl dkñlaskd lñk nkjdsfkjgjfkdhgdfg dsmgvjkngfnsdkvglkvdgkfsld', '', 9999),
(27, '../public/assets/img/berserk.webp', 'berserk', 'djlkasj dlkasjdlk jdlaksj dajdlka jdlkajdlk jadjasdjaldkasj', '', 7800);

-- --------------------------------------------------------

--
-- Table structure for table `destacados`
--

CREATE TABLE `destacados` (
  `id` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `destacados`
--

INSERT INTO `destacados` (`id`, `img`) VALUES
(1, '../public/assets/img/cancion de hielo y fuego-choque de reyes.webp'),
(2, '../public/assets/img/cancion de hielo y fuego-danza de dragones.webp'),
(3, '../public/assets/img/cancion de hielo y fuego-festin de cuervos.webp'),
(4, '../public/assets/img/cancion de hielo y fuego-juego de tronos.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `destacados`
--
ALTER TABLE `destacados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
