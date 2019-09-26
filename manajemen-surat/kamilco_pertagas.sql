-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 12:02 PM
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
-- Database: `kamilco_pertagas`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `no_absensi` varchar(50) NOT NULL,
  `agenda` varchar(150) NOT NULL,
  `hari_tanggal` varchar(50) NOT NULL,
  `pukul` varchar(50) NOT NULL,
  `no` varchar(50) NOT NULL,
  `tipe` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`no_absensi`, `agenda`, `hari_tanggal`, `pukul`, `no`, `tipe`) VALUES
('001', 'Pembahasan', 'Rabu, 23 Januari 2019', '14.00 WIB - Selesai', '1', NULL),
('002', 'Pembahasan MRT', 'Kamis, 25 Maret 2019', '13.00 WIB - Selesai', '1', 'internal'),
('003', 'Pembahasan', 'Rabu, 23 Januari 2019', '14.00 WIB - Selesai', '1', 'eksternal');

-- --------------------------------------------------------

--
-- Table structure for table `fungsi`
--

CREATE TABLE `fungsi` (
  `id_fungsi` varchar(50) NOT NULL,
  `fungsi` varchar(50) NOT NULL,
  `nama_pejabat` varchar(50) NOT NULL,
  `no_kbo` varchar(30) NOT NULL,
  `nama_kbo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fungsi`
--

INSERT INTO `fungsi` (`id_fungsi`, `fungsi`, `nama_pejabat`, `no_kbo`, `nama_kbo`) VALUES
('PG3300', 'VP Business Support', 'Achmad Romly', '2019-S4', 'None'),
('PG3301', 'VP Controller', 'Doni Saputra', 'No. KBO', 'Nama KBO');

-- --------------------------------------------------------

--
-- Table structure for table `konsumsi`
--

CREATE TABLE `konsumsi` (
  `no_konsumsi` bigint(50) NOT NULL,
  `no_kbo` varchar(30) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `acara` varchar(200) NOT NULL,
  `hari_tanggal` varchar(30) NOT NULL,
  `mulai` varchar(30) NOT NULL,
  `selesai` varchar(30) NOT NULL,
  `tempat` varchar(75) NOT NULL,
  `peserta` varchar(30) NOT NULL,
  `pg_direksi` varchar(30) NOT NULL,
  `pg_vicepresident` varchar(30) NOT NULL,
  `pg_manajer` varchar(25) NOT NULL,
  `pg_staff` varchar(30) NOT NULL,
  `pg_jumlah` varchar(30) NOT NULL,
  `peserta_undangan` varchar(30) NOT NULL,
  `diminta` varchar(50) NOT NULL,
  `diverifikasi` varchar(50) NOT NULL,
  `diproses` varchar(50) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `id_fungsi` varchar(50) NOT NULL,
  `kategori_konsumsi` varchar(50) NOT NULL,
  `jenis_konsumsi` varchar(50) NOT NULL,
  `jabatan_diminta` varchar(50) NOT NULL,
  `jabatan_verifikasi` varchar(50) NOT NULL,
  `jabatan_proses` varchar(50) NOT NULL,
  `dari` varchar(30) NOT NULL,
  `no_konsumsi_tmp` varchar(50) DEFAULT NULL,
  `no_konsumsi_origin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumsi`
--

INSERT INTO `konsumsi` (`no_konsumsi`, `no_kbo`, `tanggal`, `acara`, `hari_tanggal`, `mulai`, `selesai`, `tempat`, `peserta`, `pg_direksi`, `pg_vicepresident`, `pg_manajer`, `pg_staff`, `pg_jumlah`, `peserta_undangan`, `diminta`, `diverifikasi`, `diproses`, `keterangan`, `id_fungsi`, `kategori_konsumsi`, `jenis_konsumsi`, `jabatan_diminta`, `jabatan_verifikasi`, `jabatan_proses`, `dari`, `no_konsumsi_tmp`, `no_konsumsi_origin`) VALUES
(5, '2019-S4', '2019-04-21', 'NR-001/PG3300/2019-S4', 'Selasa, 24 Januari 2017 Pukul ', '16.00', '17.00', 'Ruang Hanoman, Gedung Oil Center Lantai 1, JL MH Thamrin Kav 55 Jakarta Pus', '19', '12', '2', '2', '2', '18', '1', '', '', '', '', 'PG3300', '[\"VVIP\"]', '[\"Snack Pagi\",\"Makan Siang\"]', '', '', '', 'VP Business Support', 'PG33002019-S4001', '001/PG3300/2019-S4');

-- --------------------------------------------------------

--
-- Table structure for table `notulen`
--

CREATE TABLE `notulen` (
  `no_notulen` varchar(50) NOT NULL,
  `perihal` varchar(80) DEFAULT NULL,
  `no` varchar(50) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `ttd_1` varchar(100) DEFAULT NULL,
  `jabatan1` varchar(100) DEFAULT NULL,
  `ttd_2` varchar(300) DEFAULT NULL,
  `jabatan2` varchar(100) DEFAULT NULL,
  `ttd_3` varchar(300) DEFAULT NULL,
  `jabatan3` varchar(100) DEFAULT NULL,
  `id_fungsi` varchar(50) DEFAULT NULL,
  `daftar_hadir` varchar(50) DEFAULT NULL,
  `no_notulen_tmp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notulen`
--

INSERT INTO `notulen` (`no_notulen`, `perihal`, `no`, `waktu`, `ttd_1`, `jabatan1`, `ttd_2`, `jabatan2`, `ttd_3`, `jabatan3`, `id_fungsi`, `daftar_hadir`, `no_notulen_tmp`) VALUES
('NR-001/PG3300/2019-S4', 'Pembahasan Layanan Komunikasi SSA', '2', 'Selasa, 24 Januari 2017 Pukul 09.00 WIB sd Selesai', 'Izzul Hidayat Naisan', 'Notulis', 'Andre Tobing', 'Sothern Sumatera Area', 'Andri Alfian', 'ICT', 'PG3300', 'Terlampir', 'NRPG33002019-S4001');

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `no_po` varchar(50) NOT NULL,
  `gl_account` varchar(50) NOT NULL,
  `cost_center` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `pemilik_pekerjaan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `no_rek` varchar(40) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `judul_pembayaran` varchar(300) NOT NULL,
  `tanggal_po` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`no_po`, `gl_account`, `cost_center`, `nama_perusahaan`, `pemilik_pekerjaan`, `jabatan`, `no_rek`, `nama_bank`, `judul_pembayaran`, `tanggal_po`) VALUES
('4100932688', '6001022130', 'G0402001', 'An AA Putu Angga Pranata', 'Andri Darmawan', 'Manager ICT', '103-00-0703726-6', 'Bank Mandiri', 'Pembuatan Software Pengalihan Anggaran di Lingkungan PT Pertamina Gas', '2018-10-09'),
('4100932689', '6001022131', 'G0402002', 'Andri Darmawan', 'Doni Saputra', 'Vice Manager', '5480-010111-6153-7', 'BRI', 'Pembuatan Software Pengalihan Anggaran Biaya Aplikasi ', '2019-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_rapat`
--

CREATE TABLE `ruang_rapat` (
  `no` varchar(50) NOT NULL,
  `tempat` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang_rapat`
--

INSERT INTO `ruang_rapat` (`no`, `tempat`) VALUES
('1', 'Ruang Rapat ICT Lt. 2'),
('2', 'Ruang Hanoman, Gedung Oil Center Lantai 1, JL MH Thamrin Kav 55 Jakarta Pusat 10350');

-- --------------------------------------------------------

--
-- Table structure for table `sp3`
--

CREATE TABLE `sp3` (
  `no_sp3` bigint(50) NOT NULL,
  `tanggal` date NOT NULL,
  `dari` varchar(50) NOT NULL,
  `no_po` varchar(50) NOT NULL,
  `judul_pembayaran` varchar(300) NOT NULL,
  `tanggal_po` date NOT NULL,
  `gl_account` varchar(30) NOT NULL,
  `cost_center` varchar(30) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `pemilik_pekerjaan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `no_invoice` varchar(30) NOT NULL,
  `tanggal_invoice` date NOT NULL,
  `lampiran_doc` varchar(350) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `jabatan_user` varchar(30) NOT NULL,
  `no_sa_gr` varchar(30) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `nilai_invoice` decimal(30,2) NOT NULL,
  `id_fungsi` varchar(50) NOT NULL,
  `no_kbo` varchar(30) NOT NULL,
  `no_kontrak_temp` varchar(50) DEFAULT NULL,
  `no_kontrak` varchar(50) NOT NULL,
  `tahap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp3`
--

INSERT INTO `sp3` (`no_sp3`, `tanggal`, `dari`, `no_po`, `judul_pembayaran`, `tanggal_po`, `gl_account`, `cost_center`, `nama_perusahaan`, `no_rek`, `nama_bank`, `pemilik_pekerjaan`, `jabatan`, `no_invoice`, `tanggal_invoice`, `lampiran_doc`, `nama_user`, `jabatan_user`, `no_sa_gr`, `lokasi`, `nilai_invoice`, `id_fungsi`, `no_kbo`, `no_kontrak_temp`, `no_kontrak`, `tahap`) VALUES
(6, '2019-01-25', 'VP Business Support', '4100932688', 'Pembuatan Software Pengalihan Anggaran di Lingkungan PT Pertamina Gas', '2018-10-09', '6001022130', 'G0402001', 'Amn AA Putu Angga Pranata', '103-00-0703726-6', 'Bank Mandiri', 'Andri Darmawan', 'Manager ICT', '99999', '2018-12-17', '1. Permintaan Pembayaran Sebesar Rp. 42.000.000<br />2. No. Invoice<br />3. Berita Acara Resume Layanan', 'Achmad Romly', 'VP Business Support', '1003024005', 'Oil Center - Jakarta ', '42000000.00', 'PG3300', '2019-S4', 'SP3PG33002019-S4001', 'SP3-001/PG3300/2019-S4', 'fase 1'),
(7, '2019-03-28', 'VP Business Support', '4100932688', 'Pembayaran Pembuatan Software Pengalihan Anggaran di Lingkungan PT Pertamina Gas Fase 1', '2018-10-09', '6001022130', 'G0402001', 'Amn AA Putu Angga Pranata', '103-00-0703726-6', 'Bank Mandiri', 'Andri Darmawan', 'Manager ICT', '9999988', '2019-03-28', '1. Permintaan pembayaran sebesar Rp. 42.000.000<br />2. No Invoice<br />3. Berita Acara Resume Layanan', 'Achmad Romly', 'VP Business Support', '1003204567', 'Oil Center-Jakarta', '42000000.00', 'PG3300', '2019-S4', 'SP3PG33002019-S4002', 'SP3-002/PG3300/2019-S4', '');

-- --------------------------------------------------------

--
-- Table structure for table `uraian`
--

CREATE TABLE `uraian` (
  `no_uraian` varchar(50) NOT NULL,
  `uraian` varchar(500) NOT NULL,
  `rencana` varchar(500) NOT NULL,
  `jangka_waktu` varchar(30) NOT NULL,
  `penanggung_jawab` varchar(50) NOT NULL,
  `id_notulen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uraian`
--

INSERT INTO `uraian` (`no_uraian`, `uraian`, `rencana`, `jangka_waktu`, `penanggung_jawab`, `id_notulen`) VALUES
('1', 'SSA melaporkan kondisi komunikasi di lokasi MS Simpang Y, SKG Benuang dan SKG Cambai yang saat ini menggunakan VSAT SPCP sudah mulai menurun performanya', 'info', '2019-04-17', 'SSA', 'NR-001/PG3300/2019-S4'),
('2', 'SSA Melaporkan penggunaan jaringan FO Telkom di PT Surya Esa Perkasa', 'info', '2019-04-10', 'SSA', 'NR-001/PG3300/2019-S4'),
('3', 'Lintas Arta telah melakukan survei di 3 lokasi diatas dan trial di MS Simpang Y dengan hasil baik', 'info', '2019-04-10', 'SSA', 'NR-001/PG3300/2019-S4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no_pek` varchar(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `id_fungsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no_pek`, `username`, `password`, `role`, `id_fungsi`) VALUES
('79383', 'Adjie', '49b7a08c135ec6984fe9eb491da4b24a0c42aac1', 'superadmin', 'PG3300'),
('9393', 'superadmin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'superadmin', 'PG3301');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`no_absensi`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `fungsi`
--
ALTER TABLE `fungsi`
  ADD PRIMARY KEY (`id_fungsi`);

--
-- Indexes for table `konsumsi`
--
ALTER TABLE `konsumsi`
  ADD PRIMARY KEY (`no_konsumsi`),
  ADD KEY `id_fungsi` (`id_fungsi`);

--
-- Indexes for table `notulen`
--
ALTER TABLE `notulen`
  ADD PRIMARY KEY (`no_notulen`),
  ADD KEY `id_fungsi` (`id_fungsi`),
  ADD KEY `no` (`no`),
  ADD KEY `id_fungsi_2` (`id_fungsi`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`no_po`);

--
-- Indexes for table `ruang_rapat`
--
ALTER TABLE `ruang_rapat`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `sp3`
--
ALTER TABLE `sp3`
  ADD PRIMARY KEY (`no_sp3`),
  ADD KEY `no_po` (`no_po`),
  ADD KEY `id_fungsi` (`id_fungsi`);

--
-- Indexes for table `uraian`
--
ALTER TABLE `uraian`
  ADD PRIMARY KEY (`no_uraian`),
  ADD KEY `u_ibfk1_id_notulen` (`id_notulen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `user_ibfk2_username` (`username`) USING BTREE,
  ADD UNIQUE KEY `user_ibfk1_id_fungsi` (`id_fungsi`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsumsi`
--
ALTER TABLE `konsumsi`
  MODIFY `no_konsumsi` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sp3`
--
ALTER TABLE `sp3`
  MODIFY `no_sp3` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`no`) REFERENCES `ruang_rapat` (`no`) ON UPDATE CASCADE;

--
-- Constraints for table `konsumsi`
--
ALTER TABLE `konsumsi`
  ADD CONSTRAINT `konsumsi_ibfk_1` FOREIGN KEY (`id_fungsi`) REFERENCES `fungsi` (`id_fungsi`) ON UPDATE CASCADE;

--
-- Constraints for table `notulen`
--
ALTER TABLE `notulen`
  ADD CONSTRAINT `notulen_ibfk_1` FOREIGN KEY (`no`) REFERENCES `ruang_rapat` (`no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `notulen_ibfk_2` FOREIGN KEY (`id_fungsi`) REFERENCES `fungsi` (`id_fungsi`) ON UPDATE CASCADE;

--
-- Constraints for table `sp3`
--
ALTER TABLE `sp3`
  ADD CONSTRAINT `sp3_ibfk_1` FOREIGN KEY (`no_po`) REFERENCES `po` (`no_po`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sp3_ibfk_2` FOREIGN KEY (`id_fungsi`) REFERENCES `fungsi` (`id_fungsi`) ON UPDATE CASCADE;

--
-- Constraints for table `uraian`
--
ALTER TABLE `uraian`
  ADD CONSTRAINT `u_ibfk1_id_notulen` FOREIGN KEY (`id_notulen`) REFERENCES `notulen` (`no_notulen`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk1_id_fungsi` FOREIGN KEY (`id_fungsi`) REFERENCES `fungsi` (`id_fungsi`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
