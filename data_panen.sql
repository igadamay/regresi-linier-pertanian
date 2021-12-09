-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 15.04
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_panen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_banjarnegara`
--

CREATE TABLE `db_banjarnegara` (
  `No` int(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jenis_Tanaman` varchar(100) NOT NULL,
  `Kabupaten_kota` varchar(100) NOT NULL,
  `Luas_Panen` int(100) NOT NULL,
  `Provitas` int(100) NOT NULL,
  `Produksi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_banjarnegara`
--

INSERT INTO `db_banjarnegara` (`No`, `Tahun`, `Jenis_Tanaman`, `Kabupaten_kota`, `Luas_Panen`, `Provitas`, `Produksi`) VALUES
(1, '2014', 'Ubi Jalar', 'Kabupaten Banjarnegara', 51, 128, 653),
(2, '2015', 'Ubi Jalar', 'Kabupaten Banjarnegara', 140, 120, 1682),
(3, '2016', 'Ubi Jalar', 'Kabupaten Banjarnegara', 24, 144, 349),
(4, '2017', 'Ubi Jalar', 'Kabupaten Banjarnegara', 97, 112, 1090),
(5, '2018', 'Ubi Jalar', 'Kabupaten Banjarnegara', 102, 263, 2698),
(6, '2014', 'Jagung', 'Kabupaten Banjarnegara', 14167, 56, 78990),
(7, '2015', 'Jagung', 'Kabupaten Banjarnegara', 12550, 51, 64322),
(8, '2016', 'Jagung', 'Kabupaten Banjarnegara', 12703, 41, 52605),
(9, '2017', 'Jagung', 'Kabupaten Banjarnegara', 10667, 42, 45054),
(10, '2018', 'Jagung', 'Kabupaten Banjarnegara', 9234, 58, 53124),
(11, '2014', 'Padi', 'Kabupaten Banjarnegara', 25684, 57, 147391),
(12, '2015', 'Padi', 'Kabupaten Banjarnegara', 138864, 64, 149762),
(13, '2016', 'Padi', 'Kabupaten Banjarnegara', 25455, 52, 133261),
(14, '2017', 'Padi', 'Kabupaten Banjarnegara', 25743, 57, 147252),
(15, '2018', 'Padi', 'Kabupaten Banjarnegara', 20227, 0, 117356);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_banyumas`
--

CREATE TABLE `db_banyumas` (
  `No` int(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jenis_Tanaman` varchar(100) NOT NULL,
  `Kabupaten_kota` varchar(250) NOT NULL,
  `Luas_Panen` int(100) NOT NULL,
  `Provitas` int(100) NOT NULL,
  `Produksi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_banyumas`
--

INSERT INTO `db_banyumas` (`No`, `Tahun`, `Jenis_Tanaman`, `Kabupaten_kota`, `Luas_Panen`, `Provitas`, `Produksi`) VALUES
(1, '2014', 'Ubi Jalar', 'Kabupaten Banyumas', 205, 102, 2098),
(2, '2015', 'Ubi Jalar', 'Kabupaten Banyumas', 160, 101, 1620),
(3, '2016', 'Ubi Jalar', 'Kabupaten Banyumas', 1125, 242, 27269),
(4, '2017', 'Ubi Jalar', 'Kabupaten Banyumas', 79, 104, 825),
(5, '2018', 'Ubi Jalar', 'Kabupaten Banyumas', 82, 255, 2080),
(6, '2014', 'Jagung', 'Kabupaten Banyumas', 2683, 53, 14220),
(7, '2015', 'Jagung', 'Kabupaten Banyumas', 4033, 53, 21304),
(8, '2016', 'Jagung', 'Kabupaten Banyumas', 3284, 54, 17586),
(9, '2017', 'Jagung', 'Kabupaten Banyumas', 4274, 60, 25744),
(10, '2018', 'Jagung', 'Kabupaten Banyumas', 4029, 61, 24671),
(11, '2014', 'Padi', 'Kabupaten Banyumas', 63831, 50, 316917),
(12, '2015', 'Padi', 'Kabupaten Banyumas', 138864, 64, 366521),
(13, '2016', 'Padi', 'Kabupaten Banyumas', 69334, 54, 370993),
(14, '2017', 'Padi', 'Kabupaten Banyumas', 66761, 53, 356692),
(15, '2018', 'Padi', 'Kabupaten Banyumas', 59062, 0, 323966);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_brebes`
--

CREATE TABLE `db_brebes` (
  `No` int(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jenis_Tanaman` varchar(100) NOT NULL,
  `Kabupaten_kota` varchar(250) NOT NULL,
  `Luas_Panen` int(100) NOT NULL,
  `Provitas` int(100) NOT NULL,
  `Produksi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_brebes`
--

INSERT INTO `db_brebes` (`No`, `Tahun`, `Jenis_Tanaman`, `Kabupaten_kota`, `Luas_Panen`, `Provitas`, `Produksi`) VALUES
(1, '2014', 'Ubi Jalar', 'Kabupaten Brebes', 190, 164, 3116),
(2, '2015', 'Ubi Jalar', 'Kabupaten Brebes', 177, 211, 3743),
(3, '2016', 'Ubi Jalar', 'Kabupaten Brebes', 0, 0, 0),
(4, '2017', 'Ubi Jalar', 'Kabupaten Brebes', 10, 305, 305),
(5, '2018', 'Ubi Jalar', 'Kabupaten Brebes', 17, 287, 488),
(6, '2014', 'Jagung', 'Kabupaten Brebes', 17799, 63, 111333),
(7, '2015', 'Jagung', 'Kabupaten Brebes', 17920, 62, 111055),
(8, '2016', 'Jagung', 'Kabupaten Brebes', 18539, 73, 135014),
(9, '2017', 'Jagung', 'Kabupaten Brebes', 18956, 68, 128608),
(10, '2018', 'Jagung', 'Kabupaten Brebes', 20885, 62, 130206),
(11, '2014', 'Padi', 'Kabupaten Brebes', 99756, 57, 571508),
(12, '2015', 'Padi', 'Kabupaten Brebes', 102347, 58, 591179),
(13, '2016', 'Padi', 'Kabupaten Brebes', 107683, 59, 635316),
(14, '2017', 'Padi', 'Kabupaten Brebes', 105025, 56, 582922),
(15, '2018', 'Padi', 'Kabupaten Brebes', 93270, 0, 494579);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_cilacap`
--

CREATE TABLE `db_cilacap` (
  `No` int(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jenis_Tanaman` varchar(100) NOT NULL,
  `Kabupaten_kota` varchar(250) NOT NULL,
  `Luas_Panen` int(100) NOT NULL,
  `Provitas` int(100) NOT NULL,
  `Produksi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_cilacap`
--

INSERT INTO `db_cilacap` (`No`, `Tahun`, `Jenis_Tanaman`, `Kabupaten_kota`, `Luas_Panen`, `Provitas`, `Produksi`) VALUES
(1, '2014', 'Ubi Jalar', 'Kabupaten Cilacap', 253, 135, 3408),
(2, '2015', 'Ubi Jalar', 'Kabupaten Cilacap', 228, 217, 4942),
(3, '2016', 'Ubi Jalar', 'Kabupaten Cilacap', 1223, 180, 21962),
(4, '2017', 'Ubi Jalar', 'Kabupaten Cilacap', 365, 198, 7217),
(5, '2018', 'Ubi Jalar', 'Kabupaten Cilacap', 261, 272, 7097),
(6, '2014', 'Padi', 'Kabupaten Cilacap', 132074, 53, 697918),
(7, '2015', 'Padi', 'Kabupaten Cilacap', 138864, 64, 888642),
(8, '2016', 'Padi', 'Kabupaten Cilacap', 143045, 62, 888979),
(9, '2017', 'Padi', 'Kabupaten Cilacap', 152967, 59, 895352),
(10, '2018', 'Padi', 'Kabupaten Cilacap', 124011, 0, 793265),
(11, '2014', 'Jagung', 'Kabupaten Cilacap', 2682, 57, 15278),
(12, '2015', 'Jagung', 'Kabupaten Cilacap', 3694, 60, 22089),
(13, '2016', 'Jagung', 'Kabupaten Cilacap', 4407, 82, 36066),
(14, '2017', 'Jagung', 'Kabupaten Cilacap', 3834, 73, 27809),
(15, '2018', 'Jagung', 'Kabupaten Cilacap', 7873, 57, 44522);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_grobogan`
--

CREATE TABLE `db_grobogan` (
  `No` int(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jenis_Tanaman` varchar(100) NOT NULL,
  `Kabupaten_kota` varchar(250) NOT NULL,
  `Luas_Panen` int(100) NOT NULL,
  `Provitas` int(100) NOT NULL,
  `Produksi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_grobogan`
--

INSERT INTO `db_grobogan` (`No`, `Tahun`, `Jenis_Tanaman`, `Kabupaten_kota`, `Luas_Panen`, `Provitas`, `Produksi`) VALUES
(1, '2014', 'Ubi Jalar', 'Kabupaten Grobogan', 56, 130, 727),
(2, '2015', 'Ubi Jalar', 'Kabupaten Grobogan', 55, 93, 511),
(3, '2016', 'Ubi Jalar', 'Kabupaten Grobogan', 98, 169, 1658),
(4, '2017', 'Ubi Jalar', 'Kabupaten Grobogan', 35, 125, 435),
(5, '2018', 'Ubi Jalar', 'Kabupaten Grobogan', 28, 301, 840),
(6, '2014', 'Jagung', 'Kabupaten Grobogan', 105447, 56, 590776),
(7, '2015', 'Jagung', 'Kabupaten Grobogan', 112700, 62, 700941),
(8, '2016', 'Jagung', 'Kabupaten Grobogan', 118092, 64, 751863),
(9, '2017', 'Jagung', 'Kabupaten Grobogan', 129962, 62, 810103),
(10, '2018', 'Jagung', 'Kabupaten Grobogan', 117686, 65, 770349),
(11, '2014', 'Padi', 'Kabupaten Grobogan', 113540, 51, 579076),
(12, '2015', 'Padi', 'Kabupaten Grobogan', 126935, 63, 799307),
(13, '2016', 'Padi', 'Kabupaten Grobogan', 130932, 64, 843898),
(14, '2017', 'Padi', 'Kabupaten Grobogan', 139491, 62, 864432),
(15, '2018', 'Padi', 'Kabupaten Grobogan', 134601, 0, 797421);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_kebumen`
--

CREATE TABLE `db_kebumen` (
  `No` int(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jenis_Tanaman` varchar(100) NOT NULL,
  `Kabupaten_kota` varchar(100) NOT NULL,
  `Luas_Panen` int(100) NOT NULL,
  `Provitas` int(100) NOT NULL,
  `Produksi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_kebumen`
--

INSERT INTO `db_kebumen` (`No`, `Tahun`, `Jenis_Tanaman`, `Kabupaten_kota`, `Luas_Panen`, `Provitas`, `Produksi`) VALUES
(1, '2014', 'Ubi Jalar', 'Kabupaten Kebumen', 63, 168, 1059),
(2, '2015', 'Ubi Jalar', 'Kabupaten Kebumen', 58, 169, 982),
(3, '2016', 'Ubi Jalar', 'Kabupaten Kebumen', 0, 0, 0),
(4, '2017', 'Ubi Jalar', 'Kabupaten Kebumen', 49, 163, 799),
(5, '2018', 'Ubi Jalar', 'Kabupaten Kebumen', 57, 235, 1333),
(6, '2014', 'Jagung', 'Kabupaten Kebumen', 4221, 55, 23415),
(7, '2015', 'Jagung', 'Kabupaten Kebumen', 5873, 72, 42479),
(8, '2016', 'Jagung', 'Kabupaten Kebumen', 4711, 57, 26670),
(9, '2017', 'Jagung', 'Kabupaten Kebumen', 5161, 64, 33002),
(10, '2018', 'Jagung', 'Kabupaten Kebumen', 6143, 67, 41377),
(11, '2014', 'Padi', 'Kabupaten Kebumen', 80248, 56, 447306),
(12, '2015', 'Padi', 'Kabupaten Kebumen', 79040, 65, 516355),
(13, '2016', 'Padi', 'Kabupaten Kebumen', 78205, 60, 471326),
(14, '2017', 'Padi', 'Kabupaten Kebumen', 78519, 55, 434138),
(15, '2018', 'Padi', 'Kabupaten Kebumen', 86342, 0, 495772);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_kendal`
--

CREATE TABLE `db_kendal` (
  `No` int(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jenis_Tanaman` varchar(100) NOT NULL,
  `Kabupaten_kota` varchar(250) NOT NULL,
  `Luas_Panen` int(100) NOT NULL,
  `Provitas` int(100) NOT NULL,
  `Produksi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_kendal`
--

INSERT INTO `db_kendal` (`No`, `Tahun`, `Jenis_Tanaman`, `Kabupaten_kota`, `Luas_Panen`, `Provitas`, `Produksi`) VALUES
(1, '2014', 'Ubi Jalar', 'Kabupaten Kendal', 286, 180, 5154),
(2, '2015', 'Ubi Jalar', 'Kabupaten Kendal', 235, 276, 6474),
(3, '2016', 'Ubi Jalar', 'Kabupaten Kendal', 0, 0, 0),
(4, '2017', 'Ubi Jalar', 'Kabupaten Kendal', 266, 250, 6646),
(5, '2018', 'Ubi Jalar', 'Kabupaten Kendal', 264, 227, 5988),
(6, '2014', 'Jagung', 'Kabupaten Kendal', 31607, 68, 214637),
(7, '2015', 'Jagung', 'Kabupaten Kendal', 31385, 67, 209032),
(8, '2016', 'Jagung', 'Kabupaten Kendal', 33784, 67, 225505),
(9, '2017', 'Jagung', 'Kabupaten Kendal', 35231, 68, 239690),
(10, '2018', 'Jagung', 'Kabupaten Kendal', 28939, 69, 199199),
(11, '2014', 'Padi', 'Kabupaten Kendal', 43616, 54, 235580),
(12, '2015', 'Padi', 'Kabupaten Kendal', 43977, 66, 289870),
(13, '2016', 'Padi', 'Kabupaten Kendal', 47144, 55, 260889),
(14, '2017', 'Padi', 'Kabupaten Kendal', 45751, 53, 241846),
(15, '2018', 'Padi', 'Kabupaten Kendal', 36851, 0, 199421);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_magelang`
--

CREATE TABLE `db_magelang` (
  `No` int(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jenis_Tanaman` varchar(100) NOT NULL,
  `Kabupaten_kota` varchar(100) NOT NULL,
  `Luas_Panen` int(100) NOT NULL,
  `Provitas` int(100) NOT NULL,
  `Produksi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_magelang`
--

INSERT INTO `db_magelang` (`No`, `Tahun`, `Jenis_Tanaman`, `Kabupaten_kota`, `Luas_Panen`, `Provitas`, `Produksi`) VALUES
(1, '2014', 'Ubi Jalar', 'Kabupaten Magelang', 1154, 246, 28354),
(2, '2015', 'Ubi Jalar', 'Kabupaten Magelang', 957, 257, 24573),
(3, '2016', 'Ubi Jalar', 'Kabupaten Magelang', 0, 0, 0),
(4, '2017', 'Ubi Jalar', 'Kabupaten Magelang', 906, 212, 19241),
(5, '2018', 'Ubi Jalar', 'Kabupaten Magelang', 829, 310, 25688),
(6, '2014', 'Jagung', 'Kabupaten Magelang', 10970, 54, 59356),
(7, '2015', 'Jagung', 'Kabupaten Magelang', 11625, 52, 60385),
(8, '2016', 'Jagung', 'Kabupaten Magelang', 12186, 61, 73752),
(9, '2017', 'Jagung', 'Kabupaten Magelang', 9377, 55, 51945),
(10, '2018', 'Jagung', 'Kabupaten Magelang', 8087, 49, 39245),
(11, '2014', 'Padi', 'Kabupaten Magelang', 57579, 58, 334987),
(12, '2015', 'Padi', 'Kabupaten Magelang', 59084, 62, 364198),
(13, '2016', 'Padi', 'Kabupaten Magelang', 66564, 60, 396774),
(14, '2017', 'Padi', 'Kabupaten Magelang', 76842, 58, 449359),
(15, '2018', 'Padi', 'Kabupaten Magelang', 42920, 0, 238962);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_purbalingga`
--

CREATE TABLE `db_purbalingga` (
  `No` int(250) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jenis_Tanaman` varchar(100) NOT NULL,
  `Kabupaten_kota` varchar(100) NOT NULL,
  `Luas_Panen` int(100) NOT NULL,
  `Provitas` int(100) NOT NULL,
  `Produksi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_purbalingga`
--

INSERT INTO `db_purbalingga` (`No`, `Tahun`, `Jenis_Tanaman`, `Kabupaten_kota`, `Luas_Panen`, `Provitas`, `Produksi`) VALUES
(1, '2014', 'Ubi Jalar', 'Kabupaten Purbalingga', 131, 174, 2274),
(2, '2015', 'Ubi Jalar', 'Kabupaten Purbalingga', 98, 368, 3604),
(3, '2016', 'Ubi Jalar', 'Kabupaten Purbalingga', 37, 108, 402),
(4, '2017', 'Ubi Jalar', 'Kabupaten Purbalingga', 82, 243, 1988),
(5, '2018', 'Ubi Jalar', 'Kabupaten Purbalingga', 74, 222, 1639),
(6, '2014', 'Jagung', 'Kabupaten Purbalingga', 5861, 54, 31801),
(7, '2015', 'Jagung', 'Kabupaten Purbalingga', 6998, 56, 39339),
(8, '2016', 'Jagung', 'Kabupaten Purbalingga', 8187, 53, 43095),
(9, '2017', 'Jagung', 'Kabupaten Purbalingga', 8531, 60, 51581),
(10, '2018', 'Jagung', 'Kabupaten Purbalingga', 6858, 54, 36774),
(11, '2014', 'Padi', 'Kabupaten Purbalingga', 36149, 48, 174031),
(12, '2015', 'Padi', 'Kabupaten Purbalingga', 138864, 64, 249690),
(13, '2016', 'Padi', 'Kabupaten Purbalingga', 40714, 58, 237471),
(14, '2017', 'Padi', 'Kabupaten Purbalingga', 43563, 54, 234995),
(15, '2018', 'Padi', 'Kabupaten Purbalingga', 30104, 0, 190899);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_purworejo`
--

CREATE TABLE `db_purworejo` (
  `No` int(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jenis_Tanaman` varchar(100) NOT NULL,
  `Kabupaten_kota` varchar(100) NOT NULL,
  `Luas_Panen` int(100) NOT NULL,
  `Provitas` int(100) NOT NULL,
  `Produksi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_purworejo`
--

INSERT INTO `db_purworejo` (`No`, `Tahun`, `Jenis_Tanaman`, `Kabupaten_kota`, `Luas_Panen`, `Provitas`, `Produksi`) VALUES
(1, '2014', 'Ubi Jalar', 'Kabupaten Purworejo', 128, 90, 1149),
(2, '2015', 'Ubi Jalar', 'Kabupaten Purworejo', 204, 105, 2136),
(3, '2016', 'Ubi Jalar', 'Kabupaten Purworejo', 144, 236, 3402),
(4, '2017', 'Ubi Jalar', 'Kabupaten Purworejo', 70, 113, 797),
(5, '2018', 'Ubi Jalar', 'Kabupaten Purworejo', 56, 231, 1287),
(6, '2014', 'Jagung', 'Kabupaten Purworejo', 2381, 63, 14935),
(7, '2015', 'Jagung', 'Kabupaten Purworejo', 3066, 51, 15543),
(8, '2016', 'Jagung', 'Kabupaten Purworejo', 3419, 52, 17668),
(9, '2017', 'Jagung', 'Kabupaten Purworejo', 4022, 55, 22198),
(10, '2018', 'Jagung', 'Kabupaten Purworejo', 3116, 57, 17648),
(11, '2014', 'Padi', 'Kabupaten Purworejo', 55526, 54, 298341),
(12, '2015', 'Padi', 'Kabupaten Purworejo', 57297, 62, 354133),
(13, '2016', 'Padi', 'Kabupaten Purworejo', 57689, 55, 317905),
(14, '2017', 'Padi', 'Kabupaten Purworejo', 58339, 53, 310199),
(15, '2018', 'Padi', 'Kabupaten Purworejo', 54859, 0, 291350);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_wonosobo`
--

CREATE TABLE `db_wonosobo` (
  `No` int(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `Jenis_Tanaman` varchar(100) NOT NULL,
  `Kabupaten_kota` varchar(100) NOT NULL,
  `Luas_Panen` int(100) NOT NULL,
  `Provitas` int(100) NOT NULL,
  `Produksi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_wonosobo`
--

INSERT INTO `db_wonosobo` (`No`, `Tahun`, `Jenis_Tanaman`, `Kabupaten_kota`, `Luas_Panen`, `Provitas`, `Produksi`) VALUES
(1, '2014', 'Ubi Jalar', 'Kabupaten wonosobo', 999, 202, 20164),
(2, '2015', 'Ubi Jalar', 'Kabupaten wonosobo', 736, 110, 8129),
(3, '2016', 'Ubi Jalar', 'Kabupaten wonosobo', 704, 425, 29916),
(4, '2017', 'Ubi Jalar', 'Kabupaten wonosobo', 914, 171, 15612),
(5, '2018', 'Ubi Jalar', 'Kabupaten wonosobo', 765, 229, 17502),
(6, '2014', 'Jagung', 'Kabupaten wonosobo', 24461, 40, 97420),
(7, '2015', 'Jagung', 'Kabupaten wonosobo', 26888, 38, 101123),
(8, '2016', 'Jagung', 'Kabupaten wonosobo', 21243, 36, 77370),
(9, '2017', 'Jagung', 'Kabupaten wonosobo', 21818, 40, 86363),
(10, '2018', 'Jagung', 'Kabupaten wonosobo', 19838, 36, 71845),
(11, '2014', 'Padi', 'Kabupaten wonosobo', 30528, 50, 152321),
(12, '2015', 'Padi', 'Kabupaten wonosobo', 29927, 55, 164039),
(13, '2016', 'Padi', 'Kabupaten wonosobo', 30331, 58, 175487),
(14, '2017', 'Padi', 'Kabupaten wonosobo', 32439, 52, 167846),
(15, '2018', 'Padi', 'Kabupaten wonosobo', 15252, 0, 75977);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `password`) VALUES
(11, 'Admin', 'admin12'),
(12, 'bagian perencanaan', 'perencanaan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_banjarnegara`
--
ALTER TABLE `db_banjarnegara`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `db_banyumas`
--
ALTER TABLE `db_banyumas`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `db_brebes`
--
ALTER TABLE `db_brebes`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `db_cilacap`
--
ALTER TABLE `db_cilacap`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `db_grobogan`
--
ALTER TABLE `db_grobogan`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `db_kebumen`
--
ALTER TABLE `db_kebumen`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `db_kendal`
--
ALTER TABLE `db_kendal`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `db_magelang`
--
ALTER TABLE `db_magelang`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `db_purbalingga`
--
ALTER TABLE `db_purbalingga`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `db_purworejo`
--
ALTER TABLE `db_purworejo`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `db_wonosobo`
--
ALTER TABLE `db_wonosobo`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
