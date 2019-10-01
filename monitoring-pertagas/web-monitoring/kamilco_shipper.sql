-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 19 Agu 2019 pada 06.53
-- Versi Server: 10.1.41-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamilco_shipper`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cluster`
--

CREATE TABLE `cluster` (
  `cl_id` int(100) NOT NULL,
  `cl_bln` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cl_c1temp` double(10,2) DEFAULT NULL,
  `cl_c1pres` double(10,2) DEFAULT NULL,
  `cl_c1vol` double(10,2) DEFAULT NULL,
  `cl_c2temp` double(10,2) DEFAULT NULL,
  `cl_c2pres` double(10,2) DEFAULT NULL,
  `cl_c2vol` double(10,2) DEFAULT NULL,
  `cl_c3temp` double(10,2) DEFAULT NULL,
  `cl_c3pres` double(10,2) DEFAULT NULL,
  `cl_c3vol` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `cluster`
--

INSERT INTO `cluster` (`cl_id`, `cl_bln`, `cl_c1temp`, `cl_c1pres`, `cl_c1vol`, `cl_c2temp`, `cl_c2pres`, `cl_c2vol`, `cl_c3temp`, `cl_c3pres`, `cl_c3vol`) VALUES
(1, '06-2019', 610.40, 1458.94, 7.00, 1831.20, 4376.82, 63.00, 2005.60, 4793.66, 23.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dyn_groups`
--

CREATE TABLE `dyn_groups` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `abbrev` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Navigation groupings. Eg, header, sidebar, footer, etc';

--
-- Dumping data untuk tabel `dyn_groups`
--

INSERT INTO `dyn_groups` (`id`, `title`, `abbrev`) VALUES
(1, 'Header', 'header'),
(2, 'Sidebar', 'sidebar'),
(3, 'Footer', 'footer'),
(4, 'Topbar', 'topbar'),
(5, 'Sidebar1', 'sidebar1'),
(6, 'Sidebar2', 'sidebar2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dyn_menu`
--

CREATE TABLE `dyn_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `link_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'uri',
  `page_id` int(11) NOT NULL DEFAULT '0',
  `module_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `icon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dyn_group_id` int(11) NOT NULL DEFAULT '0',
  `position` int(5) NOT NULL DEFAULT '0',
  `target` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_parent` tinyint(1) NOT NULL DEFAULT '0',
  `show_menu` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `budge` int(10) DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `dyn_menu`
--

INSERT INTO `dyn_menu` (`id`, `title`, `link_type`, `page_id`, `module_name`, `icon`, `url`, `uri`, `dyn_group_id`, `position`, `target`, `parent_id`, `is_parent`, `show_menu`, `role`, `budge`) VALUES
(1, 'Data Perusahaan', 'uri', 1, 'perusahaan', 'fa fa-file-text', 'https://pmonitoring.kamil.co.id/admin/perusahaan', '', 0, 1, NULL, 0, 0, '1', '1', -1),
(2, 'Data Shipper', 'uri', 2, 'shipper', 'fa fa-file-text', 'https://pmonitoring.kamil.co.id/admin/shipper', '', 0, 2, NULL, 0, 0, '1', '1', -1),
(3, 'Data Offtaker', 'uri', 3, 'offtaker', 'fa fa-file-text', 'https://pmonitoring.kamil.co.id/admin/offtaker', '', 0, 3, NULL, 0, 0, '1', '1', -1),
(4, 'Data Wilayah', 'uri', 4, 'wilayah', 'fa fa-file-text', 'https://pmonitoring.kamil.co.id/admin/wilayah', '', 0, 4, NULL, 0, 0, '1', '1', -1),
(5, 'Konfigurasi', 'uri', 5, 'konfigurasi', 'fa fa-gear', 'https://pmonitoring.kamil.co.id/admin/konfigurasi', '', 0, 6, NULL, 0, 0, '1', '1', -1),
(6, 'Regresi Linear', 'uri', 6, 'regresi', 'fa fa-calendar', 'https://pmonitoring.kamil.co.id/admin/regresi', '', 0, 7, NULL, 0, 0, '1', '1', -1),
(7, 'Tracking', 'uri', 7, 'tracking', 'fa fa-calendar', 'https://pmonitoring.kamil.co.id/admin/tracking', '', 0, 8, NULL, 0, 0, '1', '1', -1),
(8, 'K-Means', 'uri', 8, 'cluster', 'fa fa-file-text', 'https://pmonitoring.kamil.co.id/admin/cluster', '', 0, 9, NULL, 0, 0, '1', '1', -1),
(9, 'Laporan', 'uri', 9, 'laporan', 'fa fa-print', 'https://kamil.co.id/testing/seira/admin/laporan', '', 0, 12, NULL, 0, 0, '1', 'admin', -1),
(10, 'Akun Pengguna', 'uri', 10, 'akun', 'fa fa-user', 'https://kamil.co.id/testing/seira/admin/akun', '', 0, 13, NULL, 0, 0, '1', 'admin', -1),
(11, 'Data Ruangan', 'uri', 11, 'ruangan', 'fa fa-circle-o', 'https://kamil.co.id/testing/seira/admin/ruangan', '', 0, 4, NULL, 12, 0, '1', 'admin', -1),
(12, 'Data Master', 'uri', 12, '', 'fa fa-file-text', '#', '', 0, 2, NULL, 0, 1, '1', 'admin', -1),
(13, 'Paket', 'uri', 13, 'paket', 'fa fa-file-text', 'https://kamil.co.id/testing/seira/anggota/paket', '', 0, 1, NULL, 0, 0, '1', 'user', -1),
(14, 'Jadwal', 'uri', 14, 'jadwal', 'fa fa-calendar', 'https://kamil.co.id/testing/seira/anggota/jadwal', '', 0, 2, NULL, 0, 0, '1', 'user', -1),
(15, 'Nilai', 'uri', 15, 'nilai', 'fa fa-file-text', 'https://kamil.co.id/testing/seira/anggota/nilai', '', 0, 3, NULL, 0, 0, '1', 'user', -1),
(16, 'Sertifikat', 'uri', 16, 'sertifikat', 'fa fa-file-text', 'https://kamil.co.id/testing/seira/admin/sertifikat', '', 0, 11, NULL, 0, 0, '1', 'admin', -1),
(17, 'Jadwal', 'uri', 17, 'jadwal', 'fa fa-file-text', 'https://kamil.co.id/testing/seira/instruktur/jadwal', '', 0, 1, NULL, 0, 0, '1', 'instruktur', -1),
(18, 'Nilai', 'uri', 18, 'nilai', 'fa fa-file-text', 'https://kamil.co.id/testing/seira/instruktur/nilai', '', 0, 2, NULL, 0, 0, '1', 'instruktur', -1),
(19, 'Data Kriteria', 'uri', 19, 'kriteria', 'fa fa-circle-o', 'https://kamil.co.id/testing/seira/admin/kriteria', '', 0, 4, NULL, 12, 0, '1', 'admin', -1),
(20, 'Pembayaran', 'uri', 20, 'pembayaran', 'fa fa-money', 'https://kamil.co.id/testing/seira/admin/pembayaran', '', 0, 7, NULL, 0, 0, '1', 'admin', -1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `l_id` int(100) NOT NULL,
  `l_lokasi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_alamat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`l_id`, `l_lokasi`, `l_alamat`) VALUES
(1, 'Head Office', NULL),
(2, 'Northem Sumatra Area', NULL),
(3, 'Central Sumatra Area', NULL),
(4, 'Southern Sumatra Area', NULL),
(5, 'Western Java Area', NULL),
(6, 'Eastern Java Area', NULL),
(7, 'Kalimantan Area', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `s_id` int(100) NOT NULL,
  `s_perusahaan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_wilayah` int(100) DEFAULT NULL,
  `s_kategori` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_alamat` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`s_id`, `s_perusahaan`, `id_wilayah`, `s_kategori`, `s_alamat`) VALUES
(3, 'Cilamaya Utara', 3, NULL, NULL),
(9, 'Tegalgede PT Odira (Line1)', 1, NULL, NULL),
(10, 'Tegalgede PT Odira (Line1)', 1, NULL, NULL),
(12, 'PT PLN', 3, NULL, NULL),
(13, 'SPU Cemara HP', 3, NULL, NULL),
(14, 'Melandong SP', 3, NULL, NULL),
(17, 'PT Pertamina EP Asset 2', 4, 'shipper', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\nT. +62-711 5648511, F. +62-711 5648512'),
(18, 'PT Medco E&P Indonesia', 4, 'shipper', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\nT. +62-711 5648511, F. +62-711 5648512'),
(21, 'KEIL', 6, 'shipper', 'Jl. Darmo Kali No. 40-42 Surabaya 60241\nT. +62-31 5689901, 5689903, F. +62-31 5689905'),
(22, 'Santos-Maleo', 6, 'shipper', 'Jl. Darmo Kali No. 40-42 Surabaya 60241\nT. +62-31 5689901, 5689903, F. +62-31 5689905'),
(25, 'PT PLN', 1, NULL, NULL),
(29, 'Pertamina EP', 2, 'shipper', 'Jl. Dr. Wahidin No. 1 Pangkalan Brandan North Sumatera - 20857\nT. +62-620 323442, F. +62-620 322933'),
(30, ' PHE', 2, 'shipper', 'Jl. Dr. Wahidin No. 1 Pangkalan Brandan North Sumatera - 20857\nT. +62-620 323442, F. +62-620 322933'),
(31, ' Arun Regasifikasi', 2, 'shipper', 'Jl. Dr. Wahidin No. 1 Pangkalan Brandan North Sumatera - 20857\nT. +62-620 323442, F. +62-620 322933'),
(32, ' PT PLN (Persero),', 2, 'multi', 'Jl. Dr. Wahidin No. 1 Pangkalan Brandan North Sumatera - 20857\nT. +62-620 323442, F. +62-620 322933'),
(33, 'PT Pupuk Iskandar Muda', 2, 'multi', 'Jl. Dr. Wahidin No. 1 Pangkalan Brandan North Sumatera - 20857T. +62-620 323442, F. +62-620 322933'),
(34, 'PT Kertas Kraft Aceh', 2, 'multi', 'Jl. Dr. Wahidin No. 1 Pangkalan Brandan North Sumatera - 20857\nT. +62-620 323442, F. +62-620 322933'),
(35, 'PT AAF', 2, 'offtaker', 'Jl. Dr. Wahidin No. 1 Pangkalan Brandan North Sumatera - 20857\nT. +62-620 323442, F. +62-620 322933'),
(36, 'Refinery Unit II', 2, 'offtaker', 'Jl. Dr. Wahidin No. 1 Pangkalan Brandan North Sumatera - 20857\nT. +62-620 323442, F. +62-620 322933'),
(37, 'Pangkalan Brandan PT Pertamina (Persero)', 2, 'offtaker', 'Jl. Dr. Wahidin No. 1 Pangkalan Brandan North Sumatera - 20857\nT. +62-620 323442, F. +62-620 322933'),
(38, 'PT Pupuk Sriwijaya', 4, 'offtaker', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\nT. +62-711 5648511, F. +62-711 5648512'),
(40, 'PT Asrigita Prasarana', 4, 'Offtaker', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\nT. +62-711 5648511, F. +62-711 5648512'),
(41, 'PT Arwana Anugerah Keramik', 4, 'Offtaker', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\nT. +62-711 5648511, F. +62-711 5648512'),
(42, 'PT Perusahaan Gas Negara\n\n(Persero) Tbk', 4, 'multi', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\nT. +62-711 5648511, F. +62-711 5648512'),
(43, 'PT Pertokimia Gresik', 6, 'offtaker', 'Jl. Darmo Kali No. 40-42 Surabaya 60241\nT. +62-31 5689901, 5689903, F. +62-31 5689905'),
(44, 'PT Pertagas Niaga', 6, 'multi', 'Jl. Darmo Kali No. 40-42 Surabaya 60241\nT. +62-31 5689901, 5689903, F. +62-31 5689905'),
(45, 'PT Tanjung Enim Lestari', 4, 'offtaker', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\\nT. +62-711 5648511, F. +62-711 5648512'),
(46, 'PT Pgspiras Basya Pratama', 4, 'offtaker', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\\nT. +62-711 5648511, F. +62-711 5648512'),
(47, 'PT Putradaya Prima', 4, 'offtaker', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\\nT. +62-711 5648511, F. +62-711 5648512'),
(48, 'PT Multidaya Prima Elektrindo', 4, 'offtaker', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\\nT. +62-711 5648511, F. +62-711 5648512'),
(49, 'PT Titis (Limau Procesing)', 4, 'offtaker', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\\nT. +62-711 5648511, F. +62-711 5648512'),
(50, 'Refinery Unit III', 4, 'offtaker', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\\nT. +62-711 5648511, F. +62-711 5648512'),
(51, 'PT PDPDE', 4, 'offtaker', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\\nT. +62-711 5648511, F. +62-711 5648512'),
(52, 'PT Hoktong', 4, 'offtaker', 'Jl. AKBP Cek Agus No 10, Kenten, Palembang - 30114\\nT. +62-711 5648511, F. +62-711 5648512'),
(53, 'PHE ONWJ', 5, 'Shipper', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(54, 'Pertamina EP', 5, 'Shipper', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(55, 'PT Perusahaan Gas Negara (Persero) Tbk', 5, 'Shipper', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(56, 'PT Pupuk Kujang', 5, 'multi', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(58, 'PT Krakatau Steel', 5, 'multi', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(59, 'PT Cikarang Listrindo', 5, 'offtaker', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(60, 'PT Banten Inti Gasindo', 5, 'shipper', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(61, 'PT Pertagas Niaga', 5, 'shipper', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(62, 'PT Perusahaan Gas Negara (Persero) Tbk', 5, 'shipper', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(63, 'PT Jabar Energi', 5, 'offtaker', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(64, 'PT Sinergi Patriot Bekas', 5, 'offtaker', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(65, 'PT Panca Mitra Energi', 5, 'offtaker', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(66, 'PT Tatajabar Sejahtera', 5, 'offtaker', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(68, 'PT Rabana Gasindo Makmur', 5, 'offtaker', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(69, 'PT Sadikun NR Cikarang', 5, 'offtaker', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(70, 'PT Fajar Paper Tbk', 5, 'offtaker', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(71, 'PT Mulia Industri', 5, 'offtaker', 'Komplek Perumahan Dinas Distrik TGD\nJl. Raya Industri Tegalgede South Cikarang, Bekasi - 17550\nT. +62-21 89833854, F. +62-21 89833904'),
(72, 'Lapindo Brantas', 6, 'shipper', 'Jl. Darmo Kali No. 40-42 Surabaya 60241\\nT. +62-31 5689901, 5689903, F. +62-31 5689905'),
(73, 'Santos-Peluang', 6, 'shipper', 'Jl. Darmo Kali No. 40-42 Surabaya 60241\\nT. +62-31 5689901, 5689903, F. +62-31 5689905'),
(74, 'PT Petrokimia Gresik', 6, 'offtaker', 'Jl. Darmo Kali No. 40-42 Surabaya 60241\\nT. +62-31 5689901, 5689903, F. +62-31 5689905'),
(75, 'PT Pembangki Jawa Bali Gresik', 6, 'offtaker', 'Jl. Darmo Kali No. 40-42 Surabaya 60241\\nT. +62-31 5689901, 5689903, F. +62-31 5689905'),
(76, 'PT Perusahaan gas Negara (Persero) Tbk', 6, 'multi', 'Jl. Darmo Kali No. 40-42 Surabaya 60241\\nT. +62-31 5689901, 5689903, F. +62-31 5689905'),
(78, 'PT Pertamina Persero (City Gas)', 6, 'multi', 'Jl. Darmo Kali No. 40-42 Surabaya 60241\\nT. +62-31 5689901, 5689903, F. +62-31 5689905'),
(79, 'Chevron', 7, 'shipper', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(80, 'Total E&P Indonesia', 7, 'shipper', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(81, 'Vico Indonesia Kubadala Petroleum', 7, 'shipper', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(82, 'PT Pupuk Kaltim 1', 7, 'offtaker', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(83, 'PT Pupuk Kaltim 2', 7, 'offtaker', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(84, 'PT Pupuk Kaltim 3', 7, 'offtaker', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(85, 'PT Pupuk Kaltim 4', 7, 'offtaker', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(86, 'PT Pupuk Kaltim 5', 7, 'offtaker', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(87, 'PT Kaltim Methanol Indonesia', 7, 'offtaker', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(88, 'PT Kaltim Parna Indonesia', 7, 'offtaker', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(89, 'PT Kaltim Daya Mandiri', 7, 'offtaker', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(90, 'PT PLTMG Kanaan', 7, 'offtaker', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736'),
(91, 'PT Pupuk Kaltim 1A', 7, 'multi', 'KNE Building, Jl. Pupuk Raya No.55, Bontang Barat, Bontang, East Kalimantan Timur 75313\nT. +62-548 – 41641, F. +62-548 – 41736');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `s_key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `s_value` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`s_key`, `s_value`) VALUES
('dollar_mscf', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_shipper4`
--

CREATE TABLE `tabel_shipper4` (
  `no` int(10) NOT NULL,
  `tgl` date DEFAULT NULL,
  `id_shipper` int(100) NOT NULL,
  `normal` double(10,2) NOT NULL,
  `dp` double(10,2) NOT NULL,
  `temp` double(10,2) NOT NULL,
  `pressure` double(10,2) NOT NULL,
  `vol_last_hour` double(20,2) NOT NULL,
  `vol_last_day` double(20,2) NOT NULL,
  `flow_rate` double(20,2) NOT NULL,
  `comment` varchar(10) NOT NULL,
  `diff` double(20,2) NOT NULL,
  `id_user` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_shipper4`
--

INSERT INTO `tabel_shipper4` (`no`, `tgl`, `id_shipper`, `normal`, `dp`, `temp`, `pressure`, `vol_last_hour`, `vol_last_day`, `flow_rate`, `comment`, `diff`, `id_user`) VALUES
(17, '2019-05-22', 3, 2.00, 20.00, 30.00, 4.00, 5.00, 6.00, 7.00, '8', 9.00, 2),
(23, '2019-05-25', 3, 300.00, 8000000.00, 100000.00, 60.00, 50.00, 40.00, 30.00, 'Over Load', 90.00, 2),
(24, '2019-05-25', 12, 31.00, 8000000.00, 100000.00, 60.00, 50.00, 40.00, 30.00, 'Normal', 90.00, 2),
(25, '2019-05-25', 13, 31.00, 8000000.00, 100000.00, 60.00, 50.00, 40.00, 30.00, 'Over Load', 90.00, 2),
(26, '2019-05-25', 14, 8.00, 8000000.00, 100000.00, 60.00, 50.00, 40.00, 30.00, 'Over Load', 90.00, 2),
(27, '2019-05-25', 17, 11.00, 8000000.00, 100000.00, 60.00, 50.00, 40.00, 30.00, 'Normal', 90.00, 2),
(28, '2019-05-25', 18, 11.00, 8000000.00, 100000.00, 60.00, 50.00, 40.00, 30.00, 'Over Load', 90.00, 2),
(32, '2019-05-25', 21, 44444.00, 3333.00, 100000.00, 60.00, 1.20, 54.10, 20.33, 'Over Load', 90.00, 2),
(33, '2019-05-25', 22, 44444.00, 3333.00, 100000.00, 60.00, 2.10, 54.10, 20.33, 'Over Load', 90.00, 2),
(51, '2019-06-01', 29, 0.00, 0.00, 104.95, 274.27, 45.00, 46.00, 45.00, 'Lebih', -437.51, 2),
(52, '2019-06-02', 29, 0.00, 0.00, 104.95, 274.27, 43.00, 45.00, 45.00, 'Normal', -437.51, 2),
(53, '2019-06-03', 29, 0.00, 0.00, 104.95, 274.27, 45.00, 46.00, 45.00, 'Lebih', -437.51, 2),
(54, '2019-06-04', 29, 0.00, 0.00, 104.95, 274.27, 45.00, 46.00, 45.00, 'Lebih', -437.51, 2),
(55, '2019-06-05', 29, 0.00, 0.00, 104.95, 274.27, 45.00, 46.00, 45.00, 'Lebih', -437.51, 2),
(56, '2019-06-06', 29, 0.00, 0.00, 104.95, 274.27, 45.00, 46.00, 45.00, 'Lebih', -437.51, 2),
(57, '2019-06-07', 29, 0.00, 0.00, 104.95, 274.27, 45.00, 46.00, 45.00, 'Lebih', -437.51, 2),
(58, '2019-06-20', 29, 0.00, 0.00, 104.95, 274.27, 44.00, 45.00, 45.00, 'Normal', -437.51, 2),
(59, '2019-06-01', 30, 0.00, 0.00, 104.95, 274.27, 44.00, 45.00, 45.00, 'Normal', -437.51, 2),
(60, '2019-06-02', 30, 0.00, 0.00, 104.95, 274.27, 44.00, 45.00, 45.00, 'Normal', -437.51, 2),
(61, '2019-06-03', 30, 0.00, 0.00, 104.95, 274.27, 44.00, 45.00, 45.00, 'Normal', -437.51, 2),
(62, '2019-06-20', 30, 0.00, 0.00, 104.95, 274.27, 44.00, 47.00, 45.00, 'Lebih', -437.51, 2),
(63, '2019-06-01', 31, 0.00, 0.00, 104.95, 274.27, 44.00, 47.00, 45.00, 'Lebih', -437.51, 2),
(64, '2019-06-02', 31, 0.00, 0.00, 104.95, 274.27, 44.00, 49.00, 45.00, 'Lebih', -437.51, 2),
(65, '2019-06-03', 31, 0.00, 0.00, 104.95, 274.27, 42.00, 45.00, 45.00, 'Normal', -437.51, 2),
(66, '2019-06-20', 31, 0.00, 0.00, 104.95, 274.27, 44.00, 45.00, 45.00, 'Normal', -437.51, 2),
(67, '2019-06-01', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(68, '2019-06-02', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(69, '2019-06-03', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(70, '2019-06-20', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(71, '2019-06-20', 33, 50.22, 46.82, 84.99, 208.42, 4.00, 4.00, 4.00, 'Over Nomin', -93.51, 2),
(72, '2019-06-01', 33, 50.22, 46.82, 84.99, 208.42, 3.00, 4.00, 4.00, 'Over Nomin', -93.51, 2),
(73, '2019-06-02', 33, 50.22, 46.82, 84.99, 208.42, 3.00, 4.00, 4.00, 'Over Nomin', -93.51, 2),
(74, '2019-06-03', 33, 50.22, 46.82, 84.99, 208.42, 3.00, 4.00, 4.00, 'Over Nomin', -93.51, 2),
(75, '2019-06-20', 34, 50.22, 46.82, 84.99, 208.42, 3.00, 4.00, 4.00, 'Over Nomin', -93.51, 2),
(76, '2019-06-20', 35, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(77, '2019-06-01', 35, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 9),
(78, '2019-06-02', 35, 1.30, 6.02, 87.21, 208.42, 1.00, 0.00, 1.00, 'Under Nomi', -93.51, 9),
(79, '2019-06-03', 35, 1.30, 6.02, 87.21, 208.42, 1.00, 0.00, 1.00, 'Under Nomi', -93.51, 9),
(80, '2019-06-20', 36, 1.30, 6.02, 87.21, 208.42, 1.00, 2.00, 1.00, 'Normal', -93.51, 9),
(81, '2019-06-01', 36, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(82, '2019-06-02', 36, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(83, '2019-06-03', 36, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(84, '2019-06-03', 37, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(85, '2019-06-20', 37, 1.30, 6.02, 87.21, 208.42, 0.00, 1.00, 0.01, 'Normal', -93.51, 9),
(86, '2019-06-01', 37, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(87, '2019-06-02', 37, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(88, '2019-06-01', 17, 0.00, 0.00, 104.95, 274.42, 40.49, 46.49, 46.00, 'Lebih', 437.51, 2),
(89, '2019-06-02', 17, 0.00, 0.00, 104.95, 274.42, 40.49, 46.49, 46.00, 'Lebih', 437.51, 2),
(90, '2019-06-03', 17, 0.00, 0.00, 104.95, 274.42, 40.49, 46.49, 46.00, 'Lebih', 437.51, 2),
(91, '2019-06-04', 17, 0.00, 0.00, 104.95, 274.42, 40.49, 46.49, 46.00, 'Lebih', 437.51, 2),
(92, '2019-06-05', 17, 0.00, 0.00, 104.95, 274.42, 40.49, 46.49, 46.00, 'Lebih', 437.51, 2),
(93, '2019-06-06', 17, 0.00, 0.00, 104.95, 274.42, 40.49, 46.49, 46.00, 'Lebih', 437.51, 2),
(94, '2019-06-07', 17, 0.00, 0.00, 104.95, 274.42, 40.49, 46.49, 46.00, 'Lebih', 437.51, 2),
(95, '2019-06-08', 17, 0.00, 0.00, 104.95, 274.42, 40.49, 46.49, 46.00, 'Lebih', 437.51, 2),
(96, '2019-06-09', 17, 0.00, 0.00, 104.95, 274.42, 40.49, 46.49, 46.00, 'Lebih', 437.51, 2),
(97, '2019-06-10', 17, 0.00, 0.00, 104.95, 274.42, 40.49, 46.49, 46.00, 'Lebih', 437.51, 2),
(98, '2019-06-11', 17, 0.00, 0.00, 104.95, 274.42, 40.49, 46.49, 46.00, 'Lebih', 437.51, 2),
(99, '2019-06-11', 38, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(100, '2019-06-01', 38, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(101, '2019-06-02', 38, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(102, '2019-06-03', 38, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(103, '2019-06-04', 38, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(104, '2019-06-05', 38, 1.30, 6.02, 87.21, 208.42, 2.00, 2.00, 2.00, 'Normal', -93.51, 2),
(105, '2019-06-06', 38, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(106, '2019-06-07', 38, 1.30, 6.02, 87.21, 208.42, 2.00, 2.00, 2.00, 'Normal', -93.51, 2),
(107, '2019-06-08', 38, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 9),
(108, '2019-06-09', 38, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(109, '2019-06-10', 38, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(122, '2019-06-20', 38, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(123, '2019-06-20', 17, 0.00, 0.00, 104.95, 274.27, 44.00, 45.00, 45.00, 'Normal', -437.51, 2),
(124, '2019-06-04', 35, 1.30, 6.02, 87.21, 208.42, 1.00, 0.00, 1.00, 'Under Nomi', -93.51, 9),
(125, '2019-06-04', 36, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(126, '2019-06-04', 37, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(127, '2019-06-09', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(128, '2019-06-05', 35, 1.30, 6.02, 87.21, 208.42, 3.00, 2.00, 2.00, 'Normal', -93.51, 9),
(130, '2019-06-02', 43, 1.30, 6.02, 87.21, 208.42, 2.00, 2.00, 2.00, 'Normal', -93.51, 2),
(131, '2019-06-03', 43, 1.30, 6.02, 87.21, 208.42, 2.00, 2.00, 2.00, 'Normal', -93.51, 2),
(132, '2019-06-04', 43, 1.30, 6.02, 87.21, 208.42, 2.00, 2.00, 2.00, 'Normal', -93.51, 2),
(133, '2019-06-01', 44, 1.30, 6.02, 87.21, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(134, '2019-06-02', 44, 1.30, 6.02, 87.21, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(135, '2019-06-03', 44, 1.30, 6.02, 87.21, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(136, '2019-06-04', 44, 1.30, 6.02, 87.21, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(137, '2019-06-01', 21, 0.00, 0.00, 104.95, 274.27, 45.00, 138.00, 138.00, 'Lebih', -437.51, 2),
(138, '2019-06-02', 21, 0.00, 0.00, 104.95, 274.27, 45.00, 138.00, 138.00, 'Lebih', -437.51, 2),
(139, '2019-06-03', 21, 0.00, 0.00, 104.95, 274.27, 45.00, 138.00, 138.00, 'Lebih', -437.51, 2),
(140, '2019-06-04', 21, 0.00, 0.00, 104.95, 274.27, 45.00, 138.00, 138.00, 'Lebih', -437.51, 2),
(141, '2019-06-05', 43, 1.30, 6.02, 87.21, 208.42, 2.00, 2.00, 2.00, 'Normal', -93.51, 2),
(142, '2019-06-06', 43, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(143, '2019-06-06', 35, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(144, '2019-06-06', 36, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(145, '2019-06-06', 37, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(146, '2019-06-07', 37, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(147, '2019-06-07', 36, 1.30, 6.02, 87.21, 208.42, 1.00, 1.00, 1.00, 'Normal', -93.51, 2),
(148, '2019-06-04', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(149, '2019-06-04', 33, 50.22, 46.82, 84.99, 208.42, 53.00, 53.00, 53.00, 'Normal', -93.51, 9),
(150, '2019-06-08', 30, 0.00, 0.00, 104.95, 274.27, 45.00, 46.00, 45.00, 'Lebih', -437.51, 2),
(151, '2019-06-05', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(152, '2019-06-06', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(154, '2019-06-08', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(155, '2019-06-08', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(156, '2019-06-09', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(157, '2019-06-10', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(158, '2019-06-11', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(159, '2019-06-12', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(160, '2019-06-13', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(161, '2019-06-14', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(162, '2019-06-10', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(163, '2019-06-11', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(164, '2019-06-12', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(165, '2019-06-13', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(166, '2019-06-14', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(167, '2019-06-09', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(168, '2019-06-10', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(169, '2019-06-11', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(170, '2019-06-12', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(171, '2019-06-13', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(172, '2019-06-14', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(173, '2019-06-15', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(174, '2019-06-15', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(175, '2019-06-15', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(176, '2019-06-16', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(177, '2019-06-17', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(178, '2019-06-18', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(179, '2019-06-19', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(180, '2019-06-21', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(181, '2019-06-16', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(182, '2019-06-17', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(183, '2019-06-18', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(184, '2019-06-19', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(185, '2019-06-21', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(186, '2019-06-16', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(187, '2019-06-17', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(188, '2019-06-18', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(189, '2019-06-19', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(190, '2019-06-21', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(191, '2019-06-22', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(192, '2019-06-23', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(193, '2019-06-24', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(194, '2019-06-25', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(195, '2019-06-26', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(196, '2019-06-27', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(197, '2019-06-28', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(198, '2019-06-29', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(199, '2019-06-30', 30, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(200, '2019-06-22', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(201, '2019-06-23', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(202, '2019-06-24', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(203, '2019-06-25', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(204, '2019-06-26', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(205, '2019-06-27', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(206, '2019-06-28', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(207, '2019-06-29', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(208, '2019-06-30', 35, 1.30, 6.02, 87.20, 208.42, 10.00, 10.00, 10.00, 'Over Nomin', 1.00, 2),
(209, '2019-06-22', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(210, '2019-06-23', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(211, '2019-06-24', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(212, '2019-06-25', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(213, '2019-06-26', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(214, '2019-06-28', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(215, '2019-06-29', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(216, '2019-06-30', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(217, '2019-06-27', 32, 50.22, 46.82, 84.99, 208.42, 53.00, 54.00, 53.00, 'Normal', -93.51, 2),
(218, '2019-06-27', 33, 50.22, 46.82, 84.99, 208.42, 4.00, 4.00, 4.00, 'Over Nomin', -93.51, 2),
(219, '2019-06-27', 34, 50.22, 46.82, 84.99, 208.42, 4.00, 4.00, 4.00, 'Over Nomin', -93.51, 2),
(220, '2019-06-01', 54, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(221, '2019-06-05', 21, 0.00, 0.00, 104.95, 274.27, 137.00, 138.00, 137.00, 'Lebih', -437.51, 2),
(222, '2019-06-06', 21, 0.00, 0.00, 104.95, 274.27, 137.00, 138.00, 137.00, 'Lebih', -437.51, 2),
(223, '2019-06-07', 21, 0.00, 0.00, 104.95, 274.27, 137.00, 137.00, 137.00, 'Lebih', -437.51, 2),
(224, '2019-06-07', 75, 1.30, 6.02, 87.20, 208.42, 4.00, 4.00, 4.00, 'Normal', 1.00, 2),
(225, '2019-06-05', 44, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(226, '2019-06-06', 44, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(227, '2019-06-07', 44, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(228, '2019-06-08', 22, 0.00, 0.00, 104.95, 274.27, 130.00, 130.00, 130.00, 'Lebih', -437.51, 2),
(229, '2019-06-09', 22, 0.00, 0.00, 104.95, 274.27, 130.00, 130.00, 130.00, 'Lebih', -437.51, 2),
(230, '2019-06-10', 22, 0.00, 0.00, 104.95, 274.27, 130.00, 130.00, 130.00, 'Lebih', -437.51, 2),
(231, '2019-06-11', 22, 0.00, 0.00, 104.95, 274.27, 130.00, 130.00, 130.00, 'Lebih', -437.51, 2),
(232, '2019-06-12', 22, 0.00, 0.00, 104.95, 274.27, 130.00, 130.00, 130.00, 'Lebih', -437.51, 2),
(233, '2019-06-13', 22, 0.00, 0.00, 104.95, 274.27, 130.00, 130.00, 130.00, 'Lebih', -437.51, 2),
(234, '2019-06-14', 22, 0.00, 0.00, 104.95, 274.27, 130.00, 130.00, 130.00, 'Lebih', -437.51, 2),
(235, '2019-06-15', 72, 0.00, 0.00, 104.95, 274.27, 134.00, 135.00, 134.00, 'Lebih', -437.51, 2),
(236, '2019-06-16', 72, 0.00, 0.00, 104.95, 274.27, 134.00, 135.00, 134.00, 'Lebih', -437.51, 2),
(237, '2019-06-23', 73, 0.00, 0.00, 104.95, 274.27, 133.00, 133.00, 134.00, 'Lebih', -437.51, 2),
(238, '2019-06-22', 73, 0.00, 0.00, 104.95, 274.27, 133.00, 133.00, 134.00, 'Lebih', -437.51, 2),
(239, '2019-06-30', 73, 0.00, 0.00, 104.95, 274.27, 133.00, 133.00, 134.00, 'Lebih', -437.51, 2),
(240, '2019-06-28', 73, 0.00, 0.00, 104.95, 274.27, 133.00, 133.00, 134.00, 'Lebih', -437.51, 2),
(241, '2019-06-21', 72, 0.00, 0.00, 104.95, 274.27, 134.00, 135.00, 134.00, 'Lebih', -437.51, 2),
(242, '2019-06-17', 72, 0.00, 0.00, 104.95, 274.27, 134.00, 135.00, 134.00, 'Lebih', -437.51, 2),
(243, '2019-06-18', 72, 0.00, 0.00, 104.95, 274.27, 134.00, 135.00, 134.00, 'Lebih', -437.51, 2),
(244, '2019-06-19', 72, 0.00, 0.00, 104.95, 274.27, 134.00, 135.00, 134.00, 'Lebih', -437.51, 2),
(245, '2019-06-20', 72, 0.00, 0.00, 104.95, 274.27, 134.00, 134.00, 134.00, 'Lebih', -437.51, 2),
(246, '2019-06-24', 73, 0.00, 0.00, 104.95, 274.27, 133.00, 133.00, 134.00, 'Lebih', -437.51, 2),
(247, '2019-06-25', 73, 0.00, 0.00, 104.95, 274.27, 133.00, 133.00, 134.00, 'Lebih', -437.51, 2),
(248, '2019-06-26', 73, 0.00, 0.00, 104.95, 274.27, 133.00, 133.00, 134.00, 'Lebih', -437.51, 2),
(249, '2019-06-27', 73, 0.00, 0.00, 104.95, 274.27, 134.00, 134.00, 134.00, 'Lebih', -437.51, 2),
(250, '2019-06-29', 73, 0.00, 0.00, 104.95, 274.27, 134.00, 134.00, 134.00, 'Lebih', -437.51, 2),
(251, '2019-06-08', 74, 1.30, 6.02, 87.20, 208.42, 5.00, 5.00, 5.00, 'Normal', 1.00, 2),
(252, '2019-06-09', 74, 1.30, 6.02, 87.20, 208.42, 5.00, 5.00, 5.00, 'Normal', 1.00, 2),
(253, '2019-06-10', 74, 1.30, 6.02, 87.20, 208.42, 5.00, 5.00, 5.00, 'Normal', 1.00, 2),
(254, '2019-06-11', 74, 1.30, 6.02, 87.20, 208.42, 5.00, 5.00, 5.00, 'Normal', 1.00, 2),
(255, '2019-06-12', 74, 1.30, 6.02, 87.20, 208.42, 5.00, 5.00, 5.00, 'Normal', 1.00, 2),
(256, '2019-06-13', 74, 1.30, 6.02, 87.20, 208.42, 5.00, 5.00, 5.00, 'Normal', 1.00, 2),
(257, '2019-06-14', 74, 1.30, 6.02, 87.20, 208.42, 4.00, 4.00, 4.00, 'Normal', 1.00, 2),
(258, '2019-06-15', 43, 1.30, 6.02, 87.20, 208.42, 4.00, 4.00, 4.00, 'Normal', 1.00, 2),
(259, '2019-06-16', 43, 1.30, 6.02, 87.20, 208.42, 4.00, 4.00, 4.00, 'Normal', 1.00, 2),
(260, '2019-06-17', 43, 1.30, 6.02, 87.20, 208.42, 4.00, 4.00, 4.00, 'Normal', 1.00, 2),
(261, '2019-06-18', 43, 1.30, 6.02, 87.20, 208.42, 4.00, 4.00, 4.00, 'Normal', 1.00, 2),
(262, '2019-06-19', 43, 1.30, 6.02, 87.20, 208.42, 4.00, 4.00, 4.00, 'Normal', 1.00, 2),
(263, '2019-06-20', 43, 1.30, 6.02, 87.20, 208.42, 4.00, 4.00, 4.00, 'Normal', 1.00, 2),
(264, '2019-06-21', 43, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(265, '2019-06-22', 74, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(266, '2019-06-23', 74, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(267, '2019-06-24', 74, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(268, '2019-06-25', 74, 1.30, 6.02, 87.20, 208.42, 4.00, 4.00, 4.00, 'Normal', 1.00, 2),
(269, '2019-06-26', 74, 1.30, 6.02, 87.20, 208.42, 4.00, 4.00, 4.00, 'Normal', 1.00, 2),
(270, '2019-06-27', 74, 1.30, 6.02, 87.20, 208.42, 4.00, 4.00, 4.00, 'Normal', 1.00, 2),
(271, '2019-06-28', 74, 1.30, 6.02, 87.20, 208.42, 5.00, 5.00, 5.00, 'Normal', 1.00, 2),
(272, '2019-06-29', 74, 1.30, 6.02, 87.20, 208.42, 5.00, 5.00, 5.00, 'Normal', 1.00, 2),
(273, '2019-06-30', 74, 1.30, 6.02, 87.20, 208.42, 5.00, 5.00, 5.00, 'Normal', 1.00, 2),
(274, '2019-06-08', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(275, '2019-06-09', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(276, '2019-06-10', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(277, '2019-06-11', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(278, '2019-06-12', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(279, '2019-06-13', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(280, '2019-06-14', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(281, '2019-06-15', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(282, '2019-06-16', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(283, '2019-06-17', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(284, '2019-06-18', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(285, '2019-06-19', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(286, '2019-06-20', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(287, '2019-06-21', 76, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(288, '2019-06-08', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(289, '2019-06-09', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(290, '2019-06-10', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(291, '2019-06-11', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(292, '2019-06-12', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(293, '2019-06-13', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(294, '2019-06-14', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(295, '2019-06-15', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(296, '2019-06-16', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(297, '2019-06-17', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(298, '2019-06-18', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(299, '2019-06-19', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(300, '2019-06-20', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(301, '2019-06-21', 78, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(302, '2019-06-22', 76, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(303, '2019-06-23', 76, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(304, '2019-06-24', 76, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(305, '2019-06-25', 76, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(306, '2019-06-26', 76, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(307, '2019-06-27', 76, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(308, '2019-06-28', 76, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(309, '2019-06-29', 76, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(310, '2019-06-30', 76, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(311, '2019-06-22', 78, 50.22, 46.82, 84.99, 208.42, 46.00, 46.00, 45.00, 'Normal', -93.51, 2),
(312, '2019-06-23', 78, 50.22, 46.82, 84.99, 208.42, 46.00, 46.00, 45.00, 'Normal', -93.51, 2),
(313, '2019-06-24', 78, 50.22, 46.82, 84.99, 208.42, 46.00, 46.00, 45.00, 'Normal', -93.51, 2),
(314, '2019-06-25', 78, 50.22, 46.82, 84.99, 208.42, 46.00, 46.00, 45.00, 'Normal', -93.51, 2),
(315, '2019-06-26', 78, 50.22, 46.82, 84.99, 208.42, 46.00, 46.00, 45.00, 'Normal', -93.51, 2),
(316, '2019-06-27', 78, 50.22, 46.82, 84.99, 208.42, 46.00, 46.00, 45.00, 'Normal', -93.51, 2),
(317, '2019-06-28', 78, 50.22, 46.82, 84.99, 208.42, 46.00, 46.00, 45.00, 'Normal', -93.51, 2),
(318, '2019-06-29', 78, 50.22, 46.82, 84.99, 208.42, 46.00, 46.00, 45.00, 'Normal', -93.51, 2),
(319, '2019-06-30', 78, 50.22, 46.82, 84.99, 208.42, 46.00, 46.00, 45.00, 'Normal', -93.51, 2),
(320, '2019-07-01', 21, 0.00, 0.00, 104.95, 274.27, 134.00, 134.00, 134.00, 'Lebih', -437.51, 2),
(321, '2019-07-02', 21, 0.00, 0.00, 104.95, 274.27, 134.00, 134.00, 134.00, 'Lebih', -437.51, 2),
(322, '2019-07-03', 21, 0.00, 0.00, 104.95, 274.27, 134.00, 134.00, 134.00, 'Lebih', -437.51, 2),
(323, '2019-07-04', 21, 0.00, 0.00, 104.95, 274.27, 134.00, 134.00, 134.00, 'Lebih', -437.51, 2),
(324, '2019-07-05', 21, 0.00, 0.00, 104.95, 274.27, 134.00, 134.00, 134.00, 'Lebih', -437.51, 2),
(325, '2019-07-06', 21, 0.00, 0.00, 104.95, 274.27, 134.00, 134.00, 134.00, 'Lebih', -437.51, 2),
(326, '2019-07-07', 21, 0.00, 0.00, 104.95, 274.27, 134.00, 134.00, 134.00, 'Lebih', -437.51, 2),
(330, '2019-07-08', 22, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(331, '2019-07-09', 22, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(332, '2019-07-10', 22, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(333, '2019-07-11', 22, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(334, '2019-07-12', 22, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(335, '2019-07-13', 22, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(336, '2019-07-14', 22, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(337, '2019-06-01', 53, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(338, '2019-06-02', 53, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(339, '2019-06-03', 53, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(340, '2019-06-04', 53, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(341, '2019-06-05', 53, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(342, '2019-06-06', 53, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(343, '2019-06-07', 53, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(344, '2019-06-02', 54, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(345, '2019-06-03', 54, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(346, '2019-06-04', 54, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(347, '2019-06-05', 54, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(348, '2019-06-06', 54, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(349, '2019-06-07', 54, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(350, '2019-06-01', 59, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(351, '2019-06-02', 59, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(352, '2019-06-03', 59, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(353, '2019-06-04', 59, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(354, '2019-06-05', 59, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(355, '2019-06-06', 59, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(356, '2019-06-07', 59, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(357, '2019-06-01', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(358, '2019-06-02', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(359, '2019-06-03', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(360, '2019-06-04', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(361, '2019-06-05', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(362, '2019-06-06', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(363, '2019-06-07', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(364, '2019-06-01', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(365, '2019-06-02', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(366, '2019-06-03', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(367, '2019-06-04', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(368, '2019-06-05', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(369, '2019-06-06', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(370, '2019-06-07', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(371, '2019-06-08', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(372, '2019-06-09', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(373, '2019-06-10', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(374, '2019-06-11', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(375, '2019-06-12', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(376, '2019-06-13', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(377, '2019-06-14', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(378, '2019-06-15', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(379, '2019-06-16', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(380, '2019-06-17', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(381, '2019-06-18', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(382, '2019-06-19', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(383, '2019-06-20', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(384, '2019-06-21', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(385, '2019-06-22', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(386, '2019-06-23', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(387, '2019-06-24', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(388, '2019-06-25', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(389, '2019-06-26', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(390, '2019-06-27', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(391, '2019-06-28', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(392, '2019-06-29', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(393, '2019-06-30', 55, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(394, '2019-06-08', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(395, '2019-06-09', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(396, '2019-06-10', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(397, '2019-06-11', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(398, '2019-06-12', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(399, '2019-06-13', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(400, '2019-06-14', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(401, '2019-06-15', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(402, '2019-06-16', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(403, '2019-06-17', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(404, '2019-06-18', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(405, '2019-06-19', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(406, '2019-06-20', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(407, '2019-06-21', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(408, '2019-06-22', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(409, '2019-06-23', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(410, '2019-06-24', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(411, '2019-06-25', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(412, '2019-06-26', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(413, '2019-06-28', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(414, '2019-06-29', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(415, '2019-06-30', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(416, '2019-06-27', 54, 0.00, 0.00, 104.95, 274.27, 55.00, 55.00, 54.00, 'Lebih', -437.51, 2),
(417, '2019-06-08', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(418, '2019-06-09', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(419, '2019-06-10', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(420, '2019-06-11', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(421, '2019-06-12', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(422, '2019-06-13', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(423, '2019-06-14', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(424, '2019-06-15', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(425, '2019-06-16', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(426, '2019-06-17', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(427, '2019-06-18', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(428, '2019-06-19', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(429, '2019-06-20', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(430, '2019-06-21', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(431, '2019-06-22', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(432, '2019-06-23', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(433, '2019-06-24', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(434, '2019-06-25', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(435, '2019-06-26', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(436, '2019-06-27', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(437, '2019-06-28', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(438, '2019-06-29', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(439, '2019-06-30', 63, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(440, '2019-06-08', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(441, '2019-06-09', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(442, '2019-06-10', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(443, '2019-06-11', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(444, '2019-06-12', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(445, '2019-06-13', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(446, '2019-06-14', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(447, '2019-06-15', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(448, '2019-06-16', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(449, '2019-06-17', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(450, '2019-06-18', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(451, '2019-06-19', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(452, '2019-06-20', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(453, '2019-06-21', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(454, '2019-06-22', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(455, '2019-06-23', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(456, '2019-06-24', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(457, '2019-06-25', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(458, '2019-06-26', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(459, '2019-06-27', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(460, '2019-06-28', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(461, '2019-06-29', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(462, '2019-06-30', 64, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(463, '2019-06-08', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(464, '2019-06-09', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(465, '2019-06-10', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(466, '2019-06-11', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(467, '2019-06-12', 56, 50.22, 46.82, 84.99, 208.42, 45.00, 45.00, 45.00, 'Normal', -93.51, 2),
(468, '2019-06-13', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(469, '2019-06-14', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(470, '2019-06-15', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(471, '2019-06-16', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(472, '2019-06-17', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(473, '2019-06-18', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(474, '2019-06-19', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(475, '2019-06-20', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(476, '2019-06-21', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(477, '2019-06-22', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(478, '2019-06-23', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(479, '2019-06-24', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(480, '2019-06-25', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(481, '2019-06-26', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(482, '2019-06-27', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(483, '2019-06-28', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(484, '2019-06-29', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(485, '2019-06-30', 56, 50.22, 46.82, 84.99, 208.42, 44.00, 44.00, 44.00, 'Normal', -93.51, 2),
(486, '2019-06-30', 58, 50.22, 46.82, 84.99, 208.42, 44.00, 45.00, 44.00, 'Normal', -93.51, 2),
(487, '2019-06-27', 58, 50.22, 46.82, 84.99, 208.42, 44.00, 45.00, 44.00, 'Normal', -93.51, 2),
(488, '2019-06-01', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(489, '2019-06-02', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(490, '2019-06-03', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(491, '2019-06-04', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(492, '2019-06-05', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(493, '2019-06-06', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(494, '2019-06-07', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(498, '2019-06-08', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(499, '2019-06-09', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(500, '2019-06-10', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(501, '2019-06-11', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 2),
(502, '2019-06-12', 18, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(503, '2019-06-13', 18, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(504, '2019-06-14', 18, 0.00, 0.00, 104.95, 274.27, 100.00, 100.00, 100.00, 'Lebih', -437.51, 2),
(505, '2019-06-12', 38, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(506, '2019-06-14', 38, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(507, '2019-06-13', 38, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(508, '2019-06-20', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(509, '2019-06-15', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(510, '2019-06-16', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(511, '2019-06-17', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(512, '2019-06-18', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(513, '2019-06-19', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(514, '2019-06-21', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(515, '2019-06-22', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(516, '2019-06-23', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(517, '2019-06-24', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(518, '2019-06-25', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(519, '2019-06-26', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(520, '2019-06-27', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(521, '2019-06-28', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(522, '2019-06-29', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(523, '2019-06-30', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(524, '2019-06-15', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(525, '2019-06-16', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(526, '2019-06-17', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(527, '2019-06-18', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(528, '2019-06-19', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(529, '2019-06-21', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(530, '2019-06-22', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(531, '2019-06-23', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(532, '2019-06-24', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(533, '2019-06-25', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(534, '2019-06-26', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(535, '2019-06-27', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(536, '2019-06-28', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(537, '2019-06-29', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(538, '2019-06-30', 18, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 45.00, 'Normal', -437.51, 2),
(539, '2019-06-15', 38, 1.30, 6.02, 87.20, 208.42, 2.00, 2.00, 2.00, 'Normal', 1.00, 2),
(540, '2019-06-16', 38, 1.30, 6.02, 87.20, 208.42, 2.00, 2.00, 2.00, 'Normal', 1.00, 2),
(541, '2019-06-17', 38, 1.30, 6.02, 87.20, 208.42, 2.00, 2.00, 2.00, 'Normal', 1.00, 2),
(542, '2019-06-18', 38, 1.30, 6.02, 87.20, 208.42, 2.00, 2.00, 2.00, 'Normal', 1.00, 2),
(543, '2019-06-19', 38, 1.30, 6.02, 87.20, 208.42, 2.00, 2.00, 2.00, 'Normal', 1.00, 2),
(544, '2019-06-21', 38, 1.30, 6.02, 87.20, 208.42, 2.00, 2.00, 2.00, 'Normal', 1.00, 2),
(545, '2019-06-22', 38, 1.30, 6.02, 87.20, 208.42, 2.00, 2.00, 2.00, 'Normal', 1.00, 2),
(546, '2019-06-23', 38, 1.30, 6.02, 87.20, 208.42, 2.00, 2.00, 2.00, 'Normal', 1.00, 2),
(547, '2019-06-24', 38, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(548, '2019-06-25', 38, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(549, '2019-06-26', 38, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(550, '2019-06-27', 38, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(551, '2019-06-28', 38, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(552, '2019-06-29', 38, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(553, '2019-06-30', 38, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(569, '2019-06-01', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(570, '2019-06-02', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(571, '2019-06-03', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(572, '2019-06-04', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(573, '2019-06-05', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(574, '2019-06-06', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(575, '2019-06-07', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(576, '2019-06-15', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(577, '2019-06-16', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(578, '2019-06-17', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(579, '2019-06-18', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(580, '2019-06-19', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(581, '2019-06-20', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(582, '2019-06-21', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(583, '2019-06-22', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(584, '2019-06-23', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(585, '2019-06-24', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(586, '2019-06-25', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(587, '2019-06-26', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(588, '2019-06-27', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(589, '2019-06-28', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(590, '2019-06-29', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(591, '2019-06-30', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(592, '2019-06-08', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(593, '2019-06-09', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(594, '2019-06-10', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(595, '2019-06-11', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(596, '2019-06-12', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(597, '2019-06-13', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(598, '2019-06-14', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(599, '2019-06-08', 88, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(600, '2019-06-09', 88, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(601, '2019-06-10', 88, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(602, '2019-06-11', 88, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(603, '2019-06-12', 88, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(604, '2019-06-13', 88, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(605, '2019-06-14', 88, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(606, '2019-06-29', 88, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(607, '2019-06-30', 88, 1.30, 6.02, 87.20, 208.42, 1.00, 1.00, 1.00, 'Normal', 1.00, 2),
(608, '2019-06-01', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(609, '2019-06-02', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(610, '2019-06-03', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(611, '2019-06-04', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(612, '2019-06-05', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(613, '2019-06-06', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(614, '2019-06-07', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(615, '2019-06-15', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(616, '2019-06-16', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2);
INSERT INTO `tabel_shipper4` (`no`, `tgl`, `id_shipper`, `normal`, `dp`, `temp`, `pressure`, `vol_last_hour`, `vol_last_day`, `flow_rate`, `comment`, `diff`, `id_user`) VALUES
(617, '2019-06-17', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(618, '2019-06-18', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(619, '2019-06-19', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(620, '2019-06-20', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(621, '2019-06-21', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(622, '2019-06-22', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(623, '2019-06-23', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(624, '2019-06-24', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(625, '2019-06-25', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(626, '2019-06-26', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(627, '2019-06-27', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(628, '2019-06-28', 87, 1.30, 6.02, 87.20, 208.42, 3.00, 3.00, 3.00, 'Normal', 1.00, 2),
(659, '2019-07-01', 29, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(660, '2019-07-08', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(661, '2019-07-09', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(662, '2019-07-10', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(663, '2019-07-11', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(664, '2019-07-12', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(665, '2019-07-13', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(666, '2019-07-14', 79, 0.00, 0.00, 104.95, 274.27, 90.00, 90.00, 90.00, 'Lebih', -437.51, 2),
(667, '2019-07-01', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(668, '2019-07-02', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(669, '2019-07-03', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(670, '2019-07-04', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(671, '2019-07-05', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(672, '2019-07-06', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(673, '2019-07-07', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(674, '2019-07-15', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(675, '2019-07-16', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(676, '2019-07-17', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(677, '2019-07-18', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(678, '2019-07-19', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(679, '2019-07-20', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(680, '2019-07-21', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(681, '2019-07-22', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(682, '2019-07-23', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(683, '2019-07-24', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(684, '2019-07-25', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(685, '2019-07-26', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(686, '2019-07-27', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(687, '2019-07-28', 80, 0.00, 0.00, 104.95, 274.27, 80.00, 80.00, 80.00, 'Lebih', -437.51, 2),
(693, '2019-08-14', 17, 0.00, 0.00, 104.95, 274.27, 45.00, 45.00, 44.00, 'Normal', -437.51, 9),
(694, '2019-06-05', 33, 50.22, 46.82, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(695, '2019-06-06', 33, 50.22, 46.82, 84.99, 208.42, 4.00, 0.00, 44.00, 'Under Nomi', -93.51, 9),
(696, '2019-06-07', 32, 50.22, 46.82, 84.99, 208.42, 45.00, 54.00, 44.00, 'Normal', -93.51, 9),
(697, '2019-06-07', 33, 50.22, 46.82, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(698, '2019-06-08', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(699, '2019-06-09', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(701, '2019-06-11', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(703, '2019-06-13', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(704, '2019-06-14', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(705, '2019-06-10', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(706, '2019-06-12', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(707, '2019-06-15', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(708, '2019-06-16', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(709, '2019-06-17', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(710, '2019-06-18', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(711, '2019-06-19', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(712, '2019-06-21', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(713, '2019-06-22', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(714, '2019-06-23', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(715, '2019-06-24', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(716, '2019-06-25', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(717, '2019-06-26', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(718, '2019-06-28', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(719, '2019-06-29', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(720, '2019-06-30', 33, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(721, '2019-06-01', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(722, '2019-06-02', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(723, '2019-06-03', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(724, '2019-06-04', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(725, '2019-06-05', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(726, '2019-06-06', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(727, '2019-06-07', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(728, '2019-06-08', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(729, '2019-06-09', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(730, '2019-06-10', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(731, '2019-06-11', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(732, '2019-06-12', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(733, '2019-06-13', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(734, '2019-06-14', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(735, '2019-06-15', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(736, '2019-06-16', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(737, '2019-06-17', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(738, '2019-06-18', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(739, '2019-06-19', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(740, '2019-06-21', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(741, '2019-06-22', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(742, '2019-06-23', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(743, '2019-06-24', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(744, '2019-06-25', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(745, '2019-06-26', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(746, '2019-06-28', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(747, '2019-06-29', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9),
(748, '2019-06-30', 34, 0.00, 0.00, 84.99, 208.42, 4.00, 0.00, 4.00, 'Under Nomi', -93.51, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `token`
--

INSERT INTO `token` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'c3489f359241bf4b21562ad049234f7246b6934b', 0, 0, 0, NULL, 1558476708),
(4, 2, '0327c71ae3abff07e95b79ece4b3671598f39362', 0, 0, 0, NULL, 1558483381),
(9, 1, 'f7122a67b19126615950526256f2eb141eda59ae', 0, 0, 0, NULL, 1558506003),
(10, 2, 'c1e0482ea97170fc3f63ac1bbf97a34dd3559e50', 0, 0, 0, NULL, 1558506754),
(11, 2, '8817e606ea5dab469fbb90bbd3ed1a2e2330af19', 0, 0, 0, NULL, 1558506770),
(12, 2, '9c32cab76c31b259804f93fdf9d4d67739e68fd4', 0, 0, 0, NULL, 1558506795),
(13, 2, '51939c40701b70c3c49c0f59e7c39527a3e035e7', 0, 0, 0, NULL, 1558506891),
(14, 2, '2220d858123b49545c2e0bcbebcf663634b2c483', 0, 0, 0, NULL, 1558507213),
(15, 2, '0bccc1e38acff756f0c9326b803dd5d146a11bda', 0, 0, 0, NULL, 1558669508),
(16, 2, '5139ffcbebdef7fe2086b940eed5f381f6813618', 0, 0, 0, NULL, 1558669578),
(17, 2, '7425903f81cfc9b9ceb303ad6a0508dfa7537cdb', 0, 0, 0, NULL, 1558669620),
(18, 2, '632eafea320d77b02b05270afeabb3db32494170', 0, 0, 0, NULL, 1558669641),
(20, 2, '0f7fb093ba9a9bd3e452e2e656a3b36a0b3bee00', 0, 0, 0, NULL, 1558671614),
(24, 1, '3fb0aa5ddd1366a553f5e9bd6569ecad5a17a0db', 0, 0, 0, NULL, 1558767913),
(26, 1, 'd8779f381d84ac81e513b8e3488d521ea3c7dbe4', 0, 0, 0, NULL, 1558768019),
(55, 1, '5b3317f54585a1ff5290787a52f70807b7795a71', 0, 0, 0, NULL, 1558923997),
(64, 2, '43fd0ac3ed7e457d7b95901e740842821476940e', 0, 0, 0, NULL, 1558941851),
(66, 1, 'db5f02e2e8650a460222c19606baf5f293b9f81e', 0, 0, 0, NULL, 1559438095),
(67, 1, 'cc463441bd8191096c9e7b85d0275d9883d2d91b', 0, 0, 0, NULL, 1559438146),
(68, 1, 'e7cf04f2ce5b36c7bd61d4b4976a11d752bf44db', 0, 0, 0, NULL, 1559438148),
(69, 1, '759d7b247fd51fad9e9c9f222b36f3f7af441100', 0, 0, 0, NULL, 1559438187),
(70, 2, 'f698c6d22e8def9181b3ba9c47a3851879f8f116', 0, 0, 0, NULL, 1559438208),
(71, 2, 'd6860ad264fa00588b9f6decc948c3fc5fb48e5c', 0, 0, 0, NULL, 1559438290),
(72, 1, 'aec2efc9bbbad4bf82f74aaa97aa6f3483f12f65', 0, 0, 0, NULL, 1559438692),
(80, 1, 'c2a84db733861708f2a232cd16ace1253290c163', 0, 0, 0, NULL, 1559920449),
(81, 1, '08c010b9ffd07050df98c2beb89719f7a107c602', 0, 0, 0, NULL, 1560297481),
(82, 9, 'bfa0b16e52c8504899fe2215024aab7a49b39fb5', 0, 0, 0, NULL, 1560950742),
(83, 1, '317ce2f166b9fa2a17cd46d8c3727d018fa8cd0f', 0, 0, 0, NULL, 1561348245),
(84, 1, '5d654f0b624fcfbf256b95d084f62d6cb819b76c', 0, 0, 0, NULL, 1561348249),
(85, 1, 'd759a739a84bce202efc512222bafb60e291c6e3', 0, 0, 0, NULL, 1561348306),
(90, 9, 'deedf5db35bb2bd424d32ba7a32e615c501d586c', 0, 0, 0, NULL, 1562810181),
(103, 1, '9a10c49526e8a6b3929ab800373b1ec754249b4f', 0, 0, 0, NULL, 1563237549),
(107, 1, '3731e313347e8fc614be43a1c64f5f36bd70115c', 0, 0, 0, NULL, 1563352308),
(110, 1, 'adc71753f891b726f8bff652ea87d9202aaf50f4', 0, 0, 0, NULL, 1563354347),
(111, 9, 'd15fa633ee69f70b322c7c6f8a6973ed7751b6ad', 0, 0, 0, NULL, 1563355952),
(118, 1, '5b60c6b5dd0320065633f2fc278c765c9f11077e', 0, 0, 0, NULL, 1563373133),
(129, 1, '13b07fcb92884c21f9d282f852fa11db9461a681', 0, 0, 0, NULL, 1563426558),
(132, 9, 'fda341aebfbc64c67a92b8805a644d376ffd05e5', 0, 0, 0, NULL, 1563929929),
(135, 1, '8c57dfb40a8c4809ee6c7e7109fa9084acbbbf57', 0, 0, 0, NULL, 1564578288),
(139, 10, 'b35540b997bb011573ab993b5de7e1616dcd0bf6', 0, 0, 0, NULL, 1566003016),
(140, 10, 'b9b85e94c6f79b35b9d8604015de41ffc6e33aac', 0, 0, 0, NULL, 1566003068),
(141, 10, 'aff2cdb070e976a188fc8486c54e864227efca95', 0, 0, 0, NULL, 1566003070),
(142, 10, 'da23070c04fc50e14117cfe09f04e2957233b34b', 0, 0, 0, NULL, 1566003072),
(143, 10, 'b9ba197cbf77e4a5a5ed75ea94ac62fae032dc04', 0, 0, 0, NULL, 1566003110),
(144, 10, '7637e52001343e33a2f322cafe76a95dcf22b29d', 0, 0, 0, NULL, 1566003121),
(145, 10, '21e2c4b3a202758e15e01878eb582b5edefa1e6e', 0, 0, 0, NULL, 1566003138),
(147, 10, 'cb1a608659651fba1215eabe24f4998ecd8373f0', 0, 0, 0, NULL, 1566003266),
(165, 1, '733ee8b6ee853b193217eb4358477a78c34d40a8', 0, 0, 0, NULL, 1566187310),
(167, 1, 'a908e1d033e67d1986f516e70587bcccb1771df3', 0, 0, 0, NULL, 1566196427);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tracking`
--

CREATE TABLE `tracking` (
  `tr_id` int(100) NOT NULL,
  `tr_tgl` datetime DEFAULT NULL,
  `id_perusahaan` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tracking`
--

INSERT INTO `tracking` (`tr_id`, `tr_tgl`, `id_perusahaan`) VALUES
(1, '2019-08-16 07:09:11', 14),
(4, '2019-08-16 20:50:24', 3),
(8, '2019-08-16 23:57:50', 32),
(9, '2019-06-01 09:14:29', 37),
(10, '2019-06-01 03:15:26', 38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tracking_detail`
--

CREATE TABLE `tracking_detail` (
  `td_id` int(100) NOT NULL,
  `td_tgl` datetime DEFAULT NULL,
  `td_vol` double(10,0) DEFAULT NULL,
  `td_status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_tracking` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tracking_detail`
--

INSERT INTO `tracking_detail` (`td_id`, `td_tgl`, `td_vol`, `td_status`, `id_tracking`) VALUES
(1, '2019-08-15 07:12:16', 10, 'sedang packing', 1),
(2, '2019-08-15 08:03:44', 5, 'sedang dikirim', 1),
(7, '2019-08-15 20:07:19', 1, 'proses bongkar muat ke kapal', 4),
(11, '2019-08-16 13:57:10', 10, 'sudah sampai', 1),
(12, '2019-08-16 13:58:59', 1, 'sudah di jalan', 4),
(13, '2019-08-16 23:57:50', 1, 'sedang kirim', 8),
(14, '2019-08-17 03:21:37', 1, 'proses bongkar muat ke kapal', 8),
(15, '2019-06-01 09:14:29', 1, 'sedang proses packing', 9),
(16, '2019-06-01 15:15:23', 1, 'on the way', 9),
(17, '2019-06-02 08:16:22', 1, 'bongkar muat di lokasi', 9),
(18, '2019-06-02 13:16:54', 1, 'Gas sudah di terima', 9),
(19, '2019-06-02 16:19:19', 1, 'Selesai', 9),
(20, '2019-06-01 03:15:26', 1, 'sedang proses kirim', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `u_id` int(100) NOT NULL,
  `u_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_lokasi` int(100) DEFAULT NULL,
  `u_role` int(1) DEFAULT NULL,
  `u_status` int(1) DEFAULT '1',
  `id_perusahaan` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_password`, `id_lokasi`, `u_role`, `u_status`, `id_perusahaan`) VALUES
(1, 'head office', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 2, 1, NULL),
(2, 'Northem Sumatra Area', 'd033e22ae348aeb5660fc2140aec35850c4da997', 2, 3, 1, NULL),
(3, 'Central Sumatra Area', 'd033e22ae348aeb5660fc2140aec35850c4da997', 3, 3, 1, NULL),
(4, 'Southern Sumatra Area', 'd033e22ae348aeb5660fc2140aec35850c4da997', 4, 3, 1, NULL),
(5, 'Western Java Area', 'd033e22ae348aeb5660fc2140aec35850c4da997', 5, 3, 1, NULL),
(6, 'Eastern Java Area', 'd033e22ae348aeb5660fc2140aec35850c4da997', 6, 3, 1, NULL),
(7, 'Kalimantan Area', 'd033e22ae348aeb5660fc2140aec35850c4da997', 7, 3, 1, NULL),
(9, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, 1, 1, NULL),
(10, 'pupuk', '7722a4fa614811b45ab63f63b63f97fc6e641a10', 2, 4, 1, 33),
(13, 'paak', 'b418529096726264aaf270838c52cc4593c6be11', 3, 3, 1, NULL),
(14, 'PT PLN (Persero)', 'd033e22ae348aeb5660fc2140aec35850c4da997', 2, 4, 1, 32),
(15, 'Pangkalan Brandan', 'd033e22ae348aeb5660fc2140aec35850c4da997', 2, 4, 1, 37);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`cl_id`),
  ADD UNIQUE KEY `cl_bln` (`cl_bln`) USING BTREE;

--
-- Indexes for table `dyn_groups`
--
ALTER TABLE `dyn_groups`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `dyn_menu`
--
ALTER TABLE `dyn_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_ibfk1_id_lokasi` (`id_wilayah`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`s_key`);

--
-- Indexes for table `tabel_shipper4`
--
ALTER TABLE `tabel_shipper4`
  ADD PRIMARY KEY (`no`),
  ADD KEY `s_ibfk1_id_shipper` (`id_shipper`),
  ADD KEY `s_ibfk2_id_user` (`id_user`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_ibfk1_id_user` (`user_id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`tr_id`),
  ADD KEY `fk_tr_id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `tracking_detail`
--
ALTER TABLE `tracking_detail`
  ADD PRIMARY KEY (`td_id`),
  ADD KEY `fk_td_id_tracking` (`id_tracking`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_ibfk1_id_lokasi` (`id_lokasi`),
  ADD KEY `u_ibfk2_id_perusahaan` (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cluster`
--
ALTER TABLE `cluster`
  MODIFY `cl_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dyn_groups`
--
ALTER TABLE `dyn_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dyn_menu`
--
ALTER TABLE `dyn_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `l_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `tabel_shipper4`
--
ALTER TABLE `tabel_shipper4`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=749;
--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `tr_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tracking_detail`
--
ALTER TABLE `tracking_detail`
  MODIFY `td_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `s_ibfk1_id_lokasi` FOREIGN KEY (`id_wilayah`) REFERENCES `lokasi` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_shipper4`
--
ALTER TABLE `tabel_shipper4`
  ADD CONSTRAINT `s_ibfk1_id_shipper` FOREIGN KEY (`id_shipper`) REFERENCES `perusahaan` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `s_ibfk2_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `t_ibfk1_id_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tracking`
--
ALTER TABLE `tracking`
  ADD CONSTRAINT `fk_tr_id_perusahaan` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tracking_detail`
--
ALTER TABLE `tracking_detail`
  ADD CONSTRAINT `fk_td_id_tracking` FOREIGN KEY (`id_tracking`) REFERENCES `tracking` (`tr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `u_ibfk1_id_lokasi` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `u_ibfk2_id_perusahaan` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
