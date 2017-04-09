-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mar 2017 pada 12.42
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `customerID` varchar(5) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`customerID`, `firstName`, `lastName`, `address`, `email`, `phone`) VALUES
('C0001', 'Eleanor', 'Hess', 'Ap #351-7122 Luctus St.', 'nostra.per.inceptos@', '859-9503'),
('C0002', 'Donna', 'Roth', 'Ap #495-4690 Curabitur Ave', 'sit@accumsan.ca', '909-4634'),
('C0003', 'Tyler', 'Rosario', '4076 Ut, Street', 'velit.Quisque.varius', '828-5532'),
('C0004', 'Ralph', 'Hahn', 'Ap #123-1403 Ut Av.', 'sed.dolor.Fusce@ligu', '1-229-736-3926'),
('C0005', 'Damon', 'Levy', '1054 Lobortis Ave', 'mollis.non.cursus@Pe', '1-173-204-0577'),
('C0006', 'Garrett', 'Burgess', '612-2337 Est St.', 'blandit@velturpisAli', '1-443-724-9533'),
('C0007', 'Jane', 'Cannon', 'P.O. Box 192, 5897 Adipiscing ', 'at.sem@turpisAliquam', '1-432-524-1493'),
('C0008', 'Eaton', 'Hunter', 'Ap #950-8025 Egestas Avenue', 'lorem@pede.co.uk', '965-1470'),
('C0009', 'Zeus', 'Pierce', 'Ap #773-1208 Egestas, Ave', 'fringilla.ornare@at.', '1-246-195-3162'),
('C0010', 'Susan', 'Kirby', '9015 Odio Road', 'malesuada.augue@lect', '1-197-321-3078'),
('C0011', 'Liberty', 'Dillon', 'P.O. Box 490, 2318 Proin St.', 'purus@adipiscinglobo', '1-706-614-8941'),
('C0012', 'Frances', 'Whitney', '3690 Magna. St.', 'pede.ultrices@quam.c', '661-8104'),
('C0013', 'Audrey', 'Kim', '327-8550 Dapibus St.', 'Sed.neque.Sed@Duisgr', '926-5469'),
('C0014', 'Amal', 'Alvarado', '3749 Sed Road', 'consectetuer.adipisc', '1-618-472-4263'),
('C0015', 'Leandra', 'Shields', '9663 Scelerisque, Av.', 'parturient@ipsumprim', '892-7734'),
('C0016', 'Pearl', 'Coleman', 'Ap #717-6017 Sit St.', 'Quisque.tincidunt@le', '1-667-695-0935'),
('C0017', 'Uma', 'Avila', '3317 Libero St.', 'nulla.at@adipiscinge', '1-286-365-9230'),
('C0018', 'Regina', 'Baird', '121-2895 Nonummy Street', 'nisl.sem@vehiculaPel', '859-0576'),
('C0019', 'Hop', 'Richardson', 'Ap #313-6504 Nec Rd.', 'Integer@gravidaAliqu', '1-215-826-5111'),
('C0020', 'Reed', 'Burt', '803-8526 Urna Road', 'elit.fermentum@eleif', '1-944-180-9841');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `orderID` varchar(5) NOT NULL,
  `customerID` varchar(5) NOT NULL,
  `productID` varchar(5) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`orderID`, `customerID`, `productID`, `quantity`) VALUES
('O0001', 'C0004', '001', 1),
('O0002', 'C0003', '017', 1),
('O0002', 'C0003', '008', 2),
('O0003', 'C0001', '002', 1),
('O0004', 'C0004', '001', 1),
('O0004', 'C0004', '010', 2),
('O0005', 'C0006', '011', 1),
('O0006', 'C0010', '004', 2),
('O0006', 'C0010', '012', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `productID` varchar(5) NOT NULL,
  `productName` varchar(40) NOT NULL,
  `productCategory` varchar(20) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDescription` varchar(60) NOT NULL,
  `productPicture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`productID`, `productName`, `productCategory`, `productPrice`, `productDescription`, `productPicture`) VALUES
('001', 'Ferrero & Flower Bouquet', 'Hand Bouquet', 400000, 'Ferrero sama bunga', 'img/bunga1.png'),
('002', 'White Rose Bouquet', 'Hand Bouquet', 250000, 'Ferrero sama bunga', 'img/bunga2.png'),
('003', 'BlueWhite Rose Bouquet', 'Hand Bouquet', 310000, 'Ferrero sama bunga','img/bunga3.png'),
('004', 'Blue Rose Bouquet', 'Hand Bouquet', 260000, 'Ferrero sama bunga','img/bunga4.png'),
('005', 'Sweet pastel Bouquet', 'Hand Bouquet', 300000, 'Ferrero sama bunga','img/bunga5.png'),
('006', 'Special flower V-Day', 'Hand Bouquet', 800000, 'Ferrero sama bunga','img/bunga6.png'),
('007', 'PinkWhite Rose Bouquet', 'Hand Bouquet', 250000, 'Ferrero sama bunga','img/bunga7.png'),
('008', 'Couple Teddy Bouquet', 'Hand Bouquet', 200000, 'Ferrero sama bunga','img/bunga8.png'),
('009', 'Elegant Blue Bouquet', 'Hand Bouquet', 200000, 'Ferrero sama bunga','img/bunga9.png'),
('010', 'Ferrero Bouquet', 'Hand Bouquet', 350000, 'Ferrero sama bunga','img/bunga10.png'),
('011', 'Colourful Pastel Bouquet', 'Hand Bouquet', 180000, 'Ferrero sama bunga','img/bunga15.png'),
('012', 'Purple White Bouquet', 'Hand Bouquet', 300000,'Ferrero sama bunga', 'img/bunga16.png'),
('013', 'Creamy Bouquet', 'Hand Bouquet', 280000, 'Ferrero sama bunga','img/bunga17.png'),
('014', 'Love Flower Box', 'Flower Box', 560000, 'Ferrero sama bunga','img/fb1.png'),
('015', 'Blue Flower Box', 'Flower Box', 600000, 'Ferrero sama bunga','img/fb2.png'),
('016', 'Yellow Teddy Rose', 'Graduation Flower', 200000, 'Ferrero sama bunga','img/gr1.png'),
('017', 'Green Yellow Bouquet', 'Graduation Flower', 180000, 'Ferrero sama bunga','img/gr2.png'),
('018', 'Pastel Bouquet', 'Graduation Flower', 150000, 'Ferrero sama bunga','img/gr3.png'),
('019', 'Violet Teddy Rose', 'Graduation Flower', 170000, 'Ferrero sama bunga','img/gr4.png'),
('020', 'Red White Rose', 'Graduation Flower', 150000, 'Ferrero sama bunga','img/gr5.png'),
('021', 'Ferrero Teddy Bouquet', 'Graduation Flower', 140000, 'Ferrero sama bunga','img/gr6.png'),
('022', 'White Teddy Rose', 'Graduation Flower', 120000, 'Ferrero sama bunga','img/gr7.png'),
('044', 'Blue Rose Bouquet', 'Hand Bouquet', 260000, 'Ferrero sama bunga','img/bunga4.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user-admin`
--

CREATE TABLE `user-admin` (
  `username` varchar(14) NOT NULL,
  `password` varchar(14) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user-admin`
--

INSERT INTO `user-admin` (`username`, `password`, `Nama`, `email`) VALUES
('niaelvina', '12345678', 'Nathania', 'nia@jobmine.id'),
('admin', '98765432', 'Admin', 'admin@maf.id')
;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `user-admin`
--
ALTER TABLE `user-admin`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
