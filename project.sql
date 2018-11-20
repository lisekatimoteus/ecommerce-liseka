-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 03:12 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'admin', 'project');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(5, 'OFF-WHITE GORETEX Bag', 8497500, '5bdabbb736968.jpg', 'Detail Produk & Perawatan\r\n\r\nGore-TextÂ® fabric with ripstop lining and matte black-tone hardware\r\nMade in Italy\r\nMeasures approx 8.5W x 6.5H x 1D\r\nAdjustable logo webbing strap with D-ring accent\r\nZip top closure\r\nInterior compartment\r\nExterior front flap pocket with velcro closure 		 		'),
(6, 'OFF-WHITE Crossbody Bag', 11962500, '2.jpg', 'Detail Produk & Perawatan\r\n\r\nGenuine leather with fabric lining and silver-tone hardware\r\nMade in Italy\r\nMeasures approx 8W x 5.5H x 2D\r\nAdjustable and detachable logo webbing waist/ shoulder strap measures approx 48 in length\r\nZip top closure\r\nInterior pocket'),
(7, 'OFF-WHITE Diag Gradient L/S T-Shirt', 4845000, '3.jpg', 'Measuring Guide\r\n\r\nShoulder Width\r\nThe distance between the shoulder seams measured straight across the back\r\n\r\nChest Circumference\r\nLay the garment flat and double the measurement between the lowest point of the arm seams\r\n\r\nSleeve Length\r\nThe total length from the center of the collar to the end of the cuff\r\n\r\nBack Length\r\nThe length at the center back from the base of the collar to the bottom of the hem'),
(8, 'OFF-WHITE Fight Crewneck', 7620000, '4.jpg', 'Measuring Guide\r\n\r\nShoulder Width\r\nThe distance between the shoulder seams measured straight across the back\r\n\r\nChest Circumference\r\nLay the garment flat and double the measurement between the lowest point of the arm seams\r\n\r\nSleeve Length\r\nThe total length from the center of the collar to the end of the cuff\r\n\r\nBack Length\r\nThe length at the center back from the base of the collar to the bottom of the hem'),
(9, 'OFF-WHITE Gore-Tex Anorak', 27960000, '5.jpg', 'Off-white - Gore-tex Anorak - Long sleeves - Hooded anorak - Graphics print all over - Zip closure at front - 100% Polyamide'),
(10, 'OFF-WHITE Diagonal Gradient Long Sleeve Tee', 6765000, '6.jpg', 'Detail Produk & Perawatan\r\n\r\n100% cotton\r\nMade in Portugal\r\nMachine wash'),
(11, 'OFF-WHITE GORETEX Cap', 3976500, '7.jpg', 'Detail Produk & Perawatan\r\n\r\n100% polyamide\r\nMade in Italy\r\nBrim measures approx 3 in length\r\nSnapback closures'),
(12, 'OFF-WHITE World Hand Spliced S/S T-Shirt', 4710000, '8.jpg', 'Ukuran\r\n\r\nFits true to size, take your normal size\r\nDesigned to be worn fitted\r\nModel wears size L\r\nModel measures: Height 185cm, Chest 36Ã¢Â€Â/91.4cm, Waist 28Ã¢Â€Â/71cm, Hip 37Ã¢Â€Â/94cm'),
(13, 'OFF-WHITE Kidmograph Hoodie', 8685000, '9.jpg', 'Off-White is an Italian streetwear and luxury fashion label founded by Ghanaian-American creative designer Virgil Abloh in Milan, Italy in 2012. - Adjustable drawstring hood - Printed graphic on front and back - Kangaroo pocket - Ribbed cuff and hem'),
(14, 'OFF-WHITE Quote Puffer', 26370000, '10.jpg', 'Off-White is an Italian streetwear and luxury fashion label founded by Ghanaian-American creative designer Virgil Abloh in Milan, Italy in 2012. - High neck - Detachable hood - Snap front - Front pockets - Printed graphic on pocket and back - Hidden zipped pocket'),
(15, 'OFF-WHITE Check Shirt', 8160000, '11.jpg', 'Ukuran\r\n\r\nFits bigger to size, take one size down to fit you\r\nDesigned to be worn fitted\r\nModel wears size M\r\nModel measures: Height 185cm, Chest 36Ã¢Â€Â/91.4cm, Waist 28Ã¢Â€Â/71cm, Hip 37Ã¢Â€Â/94cm'),
(16, 'OFF-WHITE Padded Hooded Shirt', 11880000, '12.jpg', 'Self: 85% cotton 10% poly 3% viscose 2% polyamideLining 1: 100% viscoseLining 2 & Hood: 100% cotton\r\nMade in Italy\r\nDry clean only\r\nButton front closures\r\nSide welt pockets\r\nOptional hood'),
(17, 'OFF-WHITE Denim Hooded Jacket', 12111000, '13.jpg', 'Self & Contrast Fabric: 100% cotton\r\nMade in Italy\r\nMachine wash\r\nButton front closures\r\nLightly distressed fabric detail throughout\r\nChest flap pockets with button closure\r\nSide welt pockets\r\nOptional hood'),
(18, 'OFF-WHITE Slim Jacket', 11022000, '14.jpg', 'Detail Produk & Perawatan\r\n\r\nSelf: 100% cottonEmbroidery: 100% poly\r\nMade in Italy\r\nMachine wash\r\nButton front closures\r\nChest flap pockets with button closure\r\nSide welt pockets\r\nEmbroidery stitching detail at chest'),
(19, 'OFF-WHITE Check Reconstructed Shirt', 11700000, '15.jpg', 'Off-White is an Italian streetwear and luxury fashion label founded by Ghanaian-American creative designer Virgil Abloh in Milan, Italy in 2012. - Checkered pattern - Chest patch pockets - Button up - Reconstructed detail - Raw edge detail - Printed graphic on back'),
(20, 'OFF-WHITE Snap Back Cap', 3315000, '16.jpg', 'Off-White is an Italian streetwear and luxury fashion label founded by Ghanaian-American creative designer Virgil Abloh in Milan, Italy in 2012. - Flat brim - Printed graphic on front - Adjustable strap on back'),
(21, 'OFF-WHITE Oversized Tee', 5296500, '17.jpg', 'Self: 100% cottonEmbroidery: 100% poly\r\nMade in Portugal\r\nMachine wash\r\nLogo embroidery stitching detail throughout\r\nLightly distressed fabric edges'),
(22, 'OFF-WHITE Off Crewneck', 6567000, '18.jpg', 'Self: 100% cottonEmbroidery: 100% poly\r\nMade in Portugal\r\nMachine wash\r\nLogo embroidery stitching detail at chest\r\nRib knit trim'),
(23, 'OFF-WHITE Liberty Long Sleeve Tee', 5065500, '19.jpg', '100% cotton\r\nMade in Portugal\r\nMachine wash'),
(24, 'OFF-WHITE Quote Baseball Cap', 4537500, '20.jpg', '100% cotton\r\nMade in Italy\r\nBrim measures approx 3 in length\r\nStrapback with push-lock closure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
