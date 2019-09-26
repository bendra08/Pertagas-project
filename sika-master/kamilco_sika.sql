-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 11:52 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamilco_sika`
--

-- --------------------------------------------------------

--
-- Table structure for table `hira`
--

CREATE TABLE `hira` (
  `no` int(40) NOT NULL,
  `date_mulai` date NOT NULL,
  `date_selesai` date NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `fungsi` varchar(40) NOT NULL,
  `pengawas` varchar(40) NOT NULL,
  `ringkasan_pek` text NOT NULL,
  `equip_number` varchar(40) NOT NULL,
  `equip_status` varchar(40) NOT NULL,
  `no_notifikasi` varchar(40) NOT NULL,
  `work_status` varchar(40) NOT NULL,
  `lokasi_owner` varchar(40) NOT NULL,
  `tools` text NOT NULL,
  `jenis_sika` varchar(40) NOT NULL,
  `upload` varchar(100) NOT NULL,
  `status` int(1) DEFAULT '0' COMMENT '0=belum diproses 1=pending 2=disetujui',
  `id_user` varchar(15) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `status_hira` int(1) DEFAULT NULL,
  `comment_hira` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hira`
--

INSERT INTO `hira` (`no`, `date_mulai`, `date_selesai`, `pekerjaan`, `fungsi`, `pengawas`, `ringkasan_pek`, `equip_number`, `equip_status`, `no_notifikasi`, `work_status`, `lokasi_owner`, `tools`, `jenis_sika`, `upload`, `status`, `id_user`, `comment`, `status_hira`, `comment_hira`) VALUES
(1, '2019-05-21', '2019-05-21', 'Pemasangan Kabel Fiber Optik', 'PT. Pertamina Gas', 'Jaya Kencana', '1. Pemasangan Kabel Fiber\r\n2. Pemasangan Kabel', '1234567', 'in service', '1234', 'normal', 'operation', 'Obeng dan Cangkul', 'izin kerja panas', 'a50ada7e3490e9e255849f7d0878a8b73981e6d9.docx', 2, 'user', '', 2, ''),
(2, '2019-05-21', '2019-05-21', 'Pemasangan Router', 'PT Jaya Wijaya', 'Wahyu Maruti Adjie', '1. Pasang Router', '123456', 'in service', '1234', 'turnarround', 'operation', '1. Obeng Bunga\r\n2. Kunci Inggris', 'izin kerja dingin', 'b4daab7c7ab3b79c98f8e34ee7a8701479891588.docx', 2, 'user', '', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `hira_detail`
--

CREATE TABLE `hira_detail` (
  `dh_id` int(100) NOT NULL,
  `dh_kegiatan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_bahaya` longtext COLLATE utf8_unicode_ci,
  `dh_konsekwensi` longtext COLLATE utf8_unicode_ci,
  `dh_p1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_c1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_r1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_pengendalian` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_penanggungjawab` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_p2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_c2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_r2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_hira` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hira_detail`
--

INSERT INTO `hira_detail` (`dh_id`, `dh_kegiatan`, `dh_bahaya`, `dh_konsekwensi`, `dh_p1`, `dh_c1`, `dh_r1`, `dh_pengendalian`, `dh_penanggungjawab`, `dh_p2`, `dh_c2`, `dh_r2`, `id_hira`) VALUES
(15, 'Urutan Kegiatanya Seperti Apa', 'Bahayanya apa', 'Konsekuensinya Seperti apa', '-', '-', 'R', 'Pengendalianya', 'Penanggung Jawab', '-', 'C', 'R', 1),
(16, 'Kegiatan', 'Bahaya', 'Konsekuensi Seperti  apa', 'P', '-', 'R', 'Pengendalian', 'Penanggung Jawab Siapa', 'R', '-', '-', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ikd`
--

CREATE TABLE `ikd` (
  `no` varchar(100) NOT NULL,
  `lanjutan_no` int(100) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `tgl_akhir_terbit` date NOT NULL,
  `jam_kerja` varchar(30) NOT NULL,
  `jam_akhir_kerja` varchar(30) NOT NULL,
  `nama_pelaksana` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `jumlah_pekerja` int(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `uraian_pekerjaan` text NOT NULL,
  `peralatan` varchar(300) NOT NULL,
  `izin_diperlukan` varchar(300) NOT NULL,
  `sifat_pekerjaan` varchar(300) NOT NULL,
  `isolasi_peralatan` varchar(300) NOT NULL,
  `lampiran` varchar(300) NOT NULL,
  `identiikasi_bahaya` varchar(400) NOT NULL,
  `identifikasi_tambahan` varchar(300) NOT NULL,
  `pengendalian_bahaya` varchar(500) NOT NULL,
  `permintaan_tambahan` varchar(300) NOT NULL,
  `nama1` varchar(150) NOT NULL,
  `date1` date NOT NULL,
  `nama2` varchar(150) NOT NULL,
  `date2` date NOT NULL,
  `nama3` varchar(150) NOT NULL,
  `date3` date NOT NULL,
  `nama4` varchar(150) NOT NULL,
  `date4` date NOT NULL,
  `nama` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `alasan` text NOT NULL,
  `catatan` text NOT NULL,
  `date_penghentian` date NOT NULL,
  `waktu_penghentian` varchar(150) NOT NULL,
  `nama_penghentian` varchar(300) NOT NULL,
  `date_pengesahan` date NOT NULL,
  `waktu_pengesahan` varchar(150) NOT NULL,
  `nama_pengesahan` varchar(300) NOT NULL,
  `penutupan_izin` varchar(500) NOT NULL,
  `nama_penerima` varchar(350) NOT NULL,
  `date_penerima` date NOT NULL,
  `nama_pengawas` varchar(350) NOT NULL,
  `date_pengawas` date NOT NULL,
  `nama_pemberi` varchar(400) NOT NULL,
  `date_pemberi` date NOT NULL,
  `id_hira` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikd`
--

INSERT INTO `ikd` (`no`, `lanjutan_no`, `tanggal_terbit`, `tgl_akhir_terbit`, `jam_kerja`, `jam_akhir_kerja`, `nama_pelaksana`, `perusahaan`, `jumlah_pekerja`, `lokasi`, `uraian_pekerjaan`, `peralatan`, `izin_diperlukan`, `sifat_pekerjaan`, `isolasi_peralatan`, `lampiran`, `identiikasi_bahaya`, `identifikasi_tambahan`, `pengendalian_bahaya`, `permintaan_tambahan`, `nama1`, `date1`, `nama2`, `date2`, `nama3`, `date3`, `nama4`, `date4`, `nama`, `date`, `alasan`, `catatan`, `date_penghentian`, `waktu_penghentian`, `nama_penghentian`, `date_pengesahan`, `waktu_pengesahan`, `nama_pengesahan`, `penutupan_izin`, `nama_penerima`, `date_penerima`, `nama_pengawas`, `date_pengawas`, `nama_pemberi`, `date_pemberi`, `id_hira`) VALUES
('IKD-EJA0000001', 123456, '2019-05-23', '2019-06-07', '06.00', '17.00', 'Bendra Wardana', 'PT. Pertamina Gas', 12, 'Oil Center Jakarta Pusat', '1. Pasang Router', '1. Obeng Bunga2. Kunci Inggris', '[\"Izin Kerja Radiografi\",\"Izin Kerja Isolasi  Listrik\",\"Izin Kerja Pengangkatan\"]', '[\"Normal\",\"T\\/A\",\"Emergency\"]', '[\"LOTO Electric Circuits\",\"LOTO Valve Gas\"]', '[\"Prosedur Khusus\",\"Gambar P&ID\"]', '[\"Bahan Berbahaya dan beracun\",\"Peralatan jalan\\/listrik hidup\\/tersengat\",\"Mesin bergerak\\/berputar\",\"Longsoran\",\"Benda bergerak\"]', 'Tambahan', '[\"Topi Keselamatan yang sesuai\",\"Sepatu Keselamatan yang sesuai\",\"Harnes\\/Tali Pengaman\",\"Masker debu\\/gas\",\"Tambahan Lampu Penerangan\",\"Pos Pemeriksaan (barang dan data pribadi) \"]', 'Bola Lampu', 'Bendra Wardana', '2019-05-21', 'Wahyu Maruti Adjie', '0000-00-00', 'Librantara Erlangga', '2019-05-21', 'Librantara Erlangga', '2019-05-21', 'Bendra Wardana', '2019-05-14', 'Alasanya apa', 'Catatanya', '2019-05-21', '15 Hari', 'Doni Saputra', '2019-05-21', '12 Hari', 'Diwo None', 'Dede Sunandar', 'Wiwo Nubayanti', '2019-05-21', 'Dicki Indriyana', '2019-05-21', 'Prabowo ', '2019-05-21', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ikp`
--

CREATE TABLE `ikp` (
  `no` varchar(100) NOT NULL,
  `lanjutan_no` int(100) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `tgl_akhir_terbit` date NOT NULL,
  `jam_kerja` varchar(30) NOT NULL,
  `jam_akhir_kerja` varchar(30) NOT NULL,
  `nama_pelaksana` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `jumlah_pekerja` int(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `uraian_pekerjaan` text NOT NULL,
  `peralatan` varchar(300) NOT NULL,
  `izin_diperlukan` varchar(300) NOT NULL,
  `sifat_pekerjaan` varchar(300) NOT NULL,
  `isolasi_peralatan` varchar(300) NOT NULL,
  `lampiran` varchar(300) NOT NULL,
  `identiikasi_bahaya` varchar(400) NOT NULL,
  `identifikasi_tambahan` varchar(300) NOT NULL,
  `pengendalian_bahaya` varchar(500) NOT NULL,
  `permintaan_tambahan` varchar(300) NOT NULL,
  `nama1` varchar(150) NOT NULL,
  `date1` date NOT NULL,
  `nama2` varchar(150) NOT NULL,
  `date2` date NOT NULL,
  `nama3` varchar(150) NOT NULL,
  `date3` date NOT NULL,
  `nama4` varchar(150) NOT NULL,
  `date4` date NOT NULL,
  `nama` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `alasan` text NOT NULL,
  `catatan` text NOT NULL,
  `date_penghentian` date NOT NULL,
  `waktu_penghentian` varchar(150) NOT NULL,
  `nama_penghentian` varchar(300) NOT NULL,
  `date_pengesahan` date NOT NULL,
  `waktu_pengesahan` varchar(150) NOT NULL,
  `nama_pengesahan` varchar(300) NOT NULL,
  `penutupan_izin` varchar(500) NOT NULL,
  `nama_penerima` varchar(350) NOT NULL,
  `date_penerima` date NOT NULL,
  `nama_pengawas` varchar(350) NOT NULL,
  `date_pengawas` date NOT NULL,
  `nama_pemberi` varchar(400) NOT NULL,
  `date_pemberi` date NOT NULL,
  `id_hira` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikp`
--

INSERT INTO `ikp` (`no`, `lanjutan_no`, `tanggal_terbit`, `tgl_akhir_terbit`, `jam_kerja`, `jam_akhir_kerja`, `nama_pelaksana`, `perusahaan`, `jumlah_pekerja`, `lokasi`, `uraian_pekerjaan`, `peralatan`, `izin_diperlukan`, `sifat_pekerjaan`, `isolasi_peralatan`, `lampiran`, `identiikasi_bahaya`, `identifikasi_tambahan`, `pengendalian_bahaya`, `permintaan_tambahan`, `nama1`, `date1`, `nama2`, `date2`, `nama3`, `date3`, `nama4`, `date4`, `nama`, `date`, `alasan`, `catatan`, `date_penghentian`, `waktu_penghentian`, `nama_penghentian`, `date_pengesahan`, `waktu_pengesahan`, `nama_pengesahan`, `penutupan_izin`, `nama_penerima`, `date_penerima`, `nama_pengawas`, `date_pengawas`, `nama_pemberi`, `date_pemberi`, `id_hira`) VALUES
('IKP-EJA0000001', 123456, '2019-05-15', '0000-00-00', '16.00', '14.00', 'Bendra Wardana', 'PT Pertamina Gas', 12, 'Oil Center Jakarta Pusat', '1. Pemasangan Kabel Fiber\r\n2. Pemasangan Kabel', 'Obeng dan Cangkul', '[\"Izin Kerja Isolasi Listrik\",\"Izin Kerja Penggalian\",\"Izin Kerja Pengangkatan\",\"Izin Kerja Ketinggian\"]', '[\"Normal\",\"T\\/A\"]', '[\"LOTO Electric Circuits\",\"LOTO Valve Gas\"]', '[\"Gambar P&ID\",\"TKO, TKI, TKPA\",\"HIRA\"]', '[\"Nyala api, percikan api\",\"Bahan mudah terbakar\",\"Pengangkatan Manual\\/alat angkat\",\"Ruang terbatas\\/kekurangan oksigen\",\"Bahaya Pencemaran Lingkungan\",\"Faktor Ergonomis\"]', 'Identifkasinya apa', '[\"Pelindung Telinga yang sesuai\",\"Sarung Tangan Keselamatan\",\"Harnes\\/Tali Pengaman\",\"Tirai Air\",\"Area Kerja Selalu Dibasahi\",\"Tanda Peringatan\\/rintangan\",\"Pengetesan HC gas terus menerus\",\"Dipassang Scaffolding\\/perancah\\/tanggah\",\"Bebas dari endapan yg explosive\\/toxic\",\"Semua sewer dalam jarak 15 m ditutup\",\"Absorben\"]', 'Bola Lampu', 'Bendra Wardana', '2019-05-21', 'Wahyu Maruti Adjie', '2019-05-21', 'Librantara Erlangga', '0000-00-00', 'Librantara Erlangga', '2019-05-21', 'Bendra Wardana', '2019-05-21', 'Aalasanya Seprti apa', 'Catatan nya apa', '2019-05-21', '15 Hari', 'Doni Saputra', '2019-05-21', '12 Hari', 'Deden', 'Dede Sunandar', 'Dono Purwanto', '2019-05-21', 'Dicki Indriyana', '2019-05-21', 'Dewi Sartika', '2019-05-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `role` int(10) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `status`, `role`) VALUES
('admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@dd', 1, 1),
('NSArea', 'North Sumatera Area', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'user@add', 1, 2),
('user', 'Central Sumatera Area', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'csarea@gmail.com', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hira`
--
ALTER TABLE `hira`
  ADD PRIMARY KEY (`no`),
  ADD KEY `hr_ibfk1_id_user` (`id_user`);

--
-- Indexes for table `hira_detail`
--
ALTER TABLE `hira_detail`
  ADD PRIMARY KEY (`dh_id`),
  ADD KEY `dh_ibfk1_id_hira` (`id_hira`);

--
-- Indexes for table `ikd`
--
ALTER TABLE `ikd`
  ADD PRIMARY KEY (`no`),
  ADD KEY `ikd_ibfk1_id_hira` (`id_hira`);

--
-- Indexes for table `ikp`
--
ALTER TABLE `ikp`
  ADD PRIMARY KEY (`no`),
  ADD KEY `ikp_ibfk1_id_hira` (`id_hira`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hira_detail`
--
ALTER TABLE `hira_detail`
  MODIFY `dh_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hira`
--
ALTER TABLE `hira`
  ADD CONSTRAINT `hr_ibfk1_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hira_detail`
--
ALTER TABLE `hira_detail`
  ADD CONSTRAINT `dh_ibfk1_id_hira` FOREIGN KEY (`id_hira`) REFERENCES `hira` (`no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ikd`
--
ALTER TABLE `ikd`
  ADD CONSTRAINT `ikd_ibfk1_id_hira` FOREIGN KEY (`id_hira`) REFERENCES `hira` (`no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ikp`
--
ALTER TABLE `ikp`
  ADD CONSTRAINT `ikp_ibfk1_id_hira` FOREIGN KEY (`id_hira`) REFERENCES `hira` (`no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
