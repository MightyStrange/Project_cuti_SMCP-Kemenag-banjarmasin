-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 12 Jul 2025 pada 23.59
-- Versi server: 10.11.10-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u780281247_simcp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(50) NOT NULL,
  `attempt_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `username`, `attempt_time`) VALUES
(13, '36.75.11.167', 'alam', '2024-09-29 18:49:06'),
(14, '36.75.11.167', 'admin', '2024-09-29 18:50:37'),
(15, '49.185.200.68', 'evie_champlin35@mteen.net', '2024-09-29 19:02:43'),
(16, '49.185.200.68', 'layla88', '2024-09-29 19:02:47'),
(17, '49.185.200.68', 'layla88', '2024-09-29 19:02:49'),
(18, '49.185.200.68', 'evie_champlin35@mteen.net', '2024-09-29 19:02:52'),
(19, '49.185.200.68', 'evie_champlin35@mteen.net', '2024-09-29 19:02:55'),
(20, '68.183.245.101', 'angelo.kihn@mteen.net', '2024-09-29 19:23:07'),
(21, '68.183.245.101', 'aliya16', '2024-09-29 19:23:09'),
(22, '68.183.245.101', 'aliya16', '2024-09-29 19:23:11'),
(23, '68.183.245.101', 'angelo.kihn@mteen.net', '2024-09-29 19:23:13'),
(24, '68.183.245.101', 'angelo.kihn@mteen.net', '2024-09-29 19:23:25'),
(25, '161.35.246.138', 'mike.kok@mteen.net', '2024-09-29 19:24:49'),
(26, '161.35.246.138', 'thijs45', '2024-09-29 19:24:51'),
(27, '161.35.246.138', 'thijs45', '2024-09-29 19:24:53'),
(28, '161.35.246.138', 'mike.kok@mteen.net', '2024-09-29 19:24:55'),
(29, '161.35.246.138', 'mike.kok@mteen.net', '2024-09-29 19:25:06'),
(30, '36.75.11.167', 'admin', '2024-09-29 19:26:47'),
(31, '36.75.11.167', 'supervisor', '2024-09-29 19:58:14'),
(36, '36.75.11.167', 'Supervisor ', '2024-09-29 20:34:11'),
(37, '36.75.11.167', 'Alam ', '2024-09-29 20:51:34'),
(38, '36.75.11.167', 'tio', '2024-09-29 21:33:35'),
(39, '36.75.11.167', 'supervisor412', '2024-09-29 21:33:46'),
(40, '36.75.11.167', 'supervisor412', '2024-09-29 21:33:51'),
(41, '36.75.11.167', 'admin412', '2024-09-29 21:39:00'),
(42, '36.75.11.167', 'admin412', '2024-09-29 21:39:11'),
(43, '36.75.11.167', 'admin412', '2024-09-29 21:39:28'),
(44, '36.75.11.167', 'admin412', '2024-09-29 21:39:32'),
(45, '36.75.11.167', 'admin412', '2024-09-29 21:39:37'),
(46, '125.164.97.74', 'supervisor412', '2024-09-30 02:33:15'),
(47, '125.164.97.74', 'supervisor412', '2024-09-30 02:33:25'),
(48, '125.164.97.74', 'apri', '2024-09-30 02:34:00'),
(49, '125.164.98.200', 'Apri', '2024-09-30 02:35:45'),
(50, '125.164.98.200', 'Apri', '2024-09-30 02:36:07'),
(51, '125.164.98.200', 'Apri', '2024-09-30 02:36:15'),
(52, '125.164.98.200', 'apri', '2024-09-30 02:36:28'),
(53, '125.164.98.200', 'Apri', '2024-09-30 02:40:41'),
(54, '125.164.98.200', 'Apri', '2024-09-30 02:42:42'),
(55, '180.254.133.232', 'admin', '2024-10-03 04:57:37'),
(56, '125.164.96.62', 'supervisor', '2024-10-14 01:53:30'),
(57, '125.164.96.62', 'supervisor412', '2024-10-14 01:53:39'),
(58, '125.164.96.62', 'supervisor412', '2024-10-14 01:53:57'),
(59, '2001:448a:d020:c99:3ce8:4955:ec62:fc77', 'alam', '2024-10-16 14:50:28'),
(60, '2001:448a:d020:c99:3ce8:4955:ec62:fc77', 'supervisor412', '2024-10-16 14:50:36'),
(61, '180.254.134.5', 'supervisor412', '2024-12-02 01:01:01'),
(62, '114.10.142.137', 'supervisor412', '2024-12-19 04:50:43'),
(63, '114.10.143.43', 'admin412', '2024-12-24 16:36:02'),
(64, '36.75.64.31', 'ZAP', '2024-12-28 14:45:09'),
(65, '36.75.64.31', 'qHWsDdKL', '2024-12-28 14:46:05'),
(66, '36.75.64.31', 'qHWsDdKL', '2024-12-28 14:46:15'),
(67, '180.254.143.159', 'apriansyah', '2025-01-15 22:34:53'),
(68, '180.254.143.159', 'apriansyah', '2025-01-15 22:35:01'),
(69, '36.75.22.34', 'supervisor412', '2025-01-23 15:18:32'),
(70, '36.75.22.34', 'supervisor412', '2025-01-23 15:18:39'),
(71, '36.75.22.34', 'supervisor412', '2025-01-23 15:31:14'),
(72, '36.75.22.34', 'supervisor412', '2025-01-23 15:31:22'),
(73, '36.75.22.34', 'supervisor412', '2025-01-23 15:31:41'),
(74, '36.75.22.34', 'supervisor412', '2025-01-23 15:33:15'),
(75, '36.75.22.34', 'supervisor412', '2025-01-23 16:18:29'),
(76, '36.75.22.34', 'supervisor412', '2025-01-23 16:58:45'),
(77, '36.75.22.34', 'supervisor412', '2025-01-23 16:58:54'),
(78, '36.75.22.34', 'supervisor', '2025-01-23 16:59:17'),
(79, '36.75.22.34', 'supervisor412', '2025-01-23 17:09:01'),
(80, '36.75.22.34', 'supervisor412', '2025-01-23 17:17:31'),
(81, '54.36.148.33', '', '2025-02-02 08:58:10'),
(82, '54.36.149.70', '', '2025-03-03 01:44:55'),
(83, '54.36.149.22', '', '2025-03-31 00:52:56'),
(84, '54.36.148.181', '', '2025-04-28 00:45:39'),
(85, '54.36.148.185', '', '2025-05-28 07:01:25'),
(86, '2001:448a:10c8:3f3b:6c09:4a17:5073:a021', 'admin', '2025-06-03 21:23:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(50) NOT NULL,
  `admin_kontak` varchar(15) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_nama`, `admin_kontak`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(1, 'tio', '085652130491', 'admin412', '$2y$10$E1eIwRE8pw2L.aeEQ2mvsecdHyUh6z2nikX9pCghXGL.o8olNc4Su', '545754364_Doctor Strange Art.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cuti`
--

CREATE TABLE `tbl_cuti` (
  `cuti_id` int(11) NOT NULL,
  `cuti_devisi` int(11) NOT NULL,
  `cuti_jenis` int(11) NOT NULL,
  `cuti_pegawai` int(11) NOT NULL,
  `cuti_tanggal` date NOT NULL,
  `cuti_dari` date NOT NULL,
  `cuti_sampai` date NOT NULL,
  `cuti_jumlah` int(11) NOT NULL,
  `cuti_alasan` varchar(100) NOT NULL,
  `cuti_alamat` varchar(100) DEFAULT NULL,
  `cuti_supervisor` int(11) DEFAULT NULL,
  `cuti_status_supervisor` varchar(100) DEFAULT NULL,
  `cuti_keterangan_supervisor` varchar(100) DEFAULT NULL,
  `cuti_manajer` int(11) DEFAULT NULL,
  `cuti_status_manajer` varchar(100) DEFAULT NULL,
  `cuti_keterangan_manajer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_cuti`
--

INSERT INTO `tbl_cuti` (`cuti_id`, `cuti_devisi`, `cuti_jenis`, `cuti_pegawai`, `cuti_tanggal`, `cuti_dari`, `cuti_sampai`, `cuti_jumlah`, `cuti_alasan`, `cuti_alamat`, `cuti_supervisor`, `cuti_status_supervisor`, `cuti_keterangan_supervisor`, `cuti_manajer`, `cuti_status_manajer`, `cuti_keterangan_manajer`) VALUES
(30, 27, 20, 25, '2025-06-04', '2025-06-06', '2025-06-13', 7, 'acara keluarga', 'bjm', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_devisi`
--

CREATE TABLE `tbl_devisi` (
  `devisi_id` int(11) NOT NULL,
  `devisi_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_devisi`
--

INSERT INTO `tbl_devisi` (`devisi_id`, `devisi_nama`) VALUES
(21, 'humas'),
(27, 'kepegawaian'),
(28, 'pengawas'),
(29, 'umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_cuti`
--

CREATE TABLE `tbl_jenis_cuti` (
  `jenis_id` int(11) NOT NULL,
  `jenis_nama` varchar(100) NOT NULL,
  `jenis_jumlah` int(11) NOT NULL,
  `last_updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_jenis_cuti`
--

INSERT INTO `tbl_jenis_cuti` (`jenis_id`, `jenis_nama`, `jenis_jumlah`, `last_updated`) VALUES
(18, 'sakit', 12, NULL),
(19, 'Cuti Besar', 12, NULL),
(20, 'Cuti Karena Alasan Penting', 12, NULL),
(21, 'Cuti Di Luar Tanggungan Negara', 1, NULL),
(27, 'Cuti Melahirkan', 21, NULL),
(33, 'Cuti Piknik', 21, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `karyawan_id` int(11) NOT NULL,
  `karyawan_devisi` int(11) NOT NULL,
  `karyawan_nip` bigint(20) DEFAULT NULL,
  `karyawan_nama` varchar(50) NOT NULL,
  `karyawan_jabatan` varchar(100) NOT NULL,
  `karyawan_alamat` varchar(100) NOT NULL,
  `karyawan_kelamin` varchar(20) NOT NULL,
  `karyawan_kontak` varchar(15) NOT NULL,
  `karyawan_username` varchar(50) NOT NULL,
  `karyawan_password` varchar(100) NOT NULL,
  `jenis_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`karyawan_id`, `karyawan_devisi`, `karyawan_nip`, `karyawan_nama`, `karyawan_jabatan`, `karyawan_alamat`, `karyawan_kelamin`, `karyawan_kontak`, `karyawan_username`, `karyawan_password`, `jenis_tahun`) VALUES
(21, 5, 1990081720200000, 'Alam', 'Kepala', 'Uhu', 'Laki-Laki', '085754579845', 'alam', '$2y$10$cSJxh5K2U2hCK.Rhkj7YoO2Iy6PfwnwSTi7Tbia6V7d.7fq4lPx.K', 0),
(22, 13, 197108212003122002, 'Pak bernard', 'anggota', 'askdwajsjdiwjaifj', 'Laki-Laki', '081821424757', 'user', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(23, 6, 12123123, 'asdaddaw ', 'addadad', 'ssASqs', 'Perempuan', '089917223', '123', '202cb962ac59075b964b07152d234b70', 0),
(25, 27, 2849394958393, 'Apriansyah', 'arsiparis muda', 'jln hksn komplek herlina perkasa blog g', 'Laki-Laki', '083839488482', 'Apriansyah', '$2y$10$cmiwE0xwCyEBZkeKp3u8PevTMsmx.R9kUYklvKemyVNvTnPVAcx.G', 0),
(26, 29, 13213, 'test', 'test', 'test', 'Laki-Laki', '1234', 'test', '$2y$10$X2oR9zFQ7zpJUYg/qRhe9eFXP7wpnjWtNdaCzI78si6899Mv1Opmy', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_manajer`
--

CREATE TABLE `tbl_manajer` (
  `manajer_id` int(11) NOT NULL,
  `manajer_devisi` int(11) NOT NULL,
  `manajer_nip` bigint(20) DEFAULT NULL,
  `manajer_nama` varchar(50) NOT NULL,
  `manajer_kelamin` varchar(20) NOT NULL,
  `manajer_alamat` varchar(100) NOT NULL,
  `manajer_kontak` varchar(15) NOT NULL,
  `manajer_username` varchar(50) NOT NULL,
  `manajer_password` varchar(100) NOT NULL,
  `manajer_foto` varchar(100) NOT NULL,
  `manajer_tanda_tangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_manajer`
--

INSERT INTO `tbl_manajer` (`manajer_id`, `manajer_devisi`, `manajer_nip`, `manajer_nama`, `manajer_kelamin`, `manajer_alamat`, `manajer_kontak`, `manajer_username`, `manajer_password`, `manajer_foto`, `manajer_tanda_tangan`) VALUES
(12, 5, 197307252007102222, 'Tio', 'Laki-Laki', 'Sultan Adam ', '085762190097', 'supervisor412', '$2y$10$ejQUmMZDSrr/zbwC8Ep5deJJ3OExClCGjhECJabCVV5W08lwYgygy', '1127260892_download.jpeg', ''),
(13, 13, 197108212003122002, 'Apriansyah', 'Laki-Laki', 'banjarmasin', '083123411835', 'apriansyah', '$2y$10$BLFjjK09kSfYGqnJ2RKvpuaF5/vm9GDZQDvQ6i11aJo33OTELedBS', '1726765322_addd.png', ''),
(14, 6, 82189234, 'davud', 'Laki-Laki', 'asdqw', '90909e89', 'super', '1b3231655cebb7a1f783eddf27d254ca', 'manajer_foto.png', ''),
(15, 27, 384939848494, 'SPVAPRI', 'Laki-Laki', 'jl hksn komplek herlina perkasa blog g', '0839489292948', 'SPVAPRI', 'e10adc3949ba59abbe56e057f20f883e', 'manajer_foto.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_supervisor`
--

CREATE TABLE `tbl_supervisor` (
  `supervisor_id` int(11) NOT NULL,
  `supervisor_devisi` int(11) NOT NULL,
  `supervisor_nip` int(11) NOT NULL,
  `supervisor_nama` varchar(50) NOT NULL,
  `supervisor_kelamin` varchar(20) NOT NULL,
  `supervisor_kontak` varchar(15) NOT NULL,
  `supervisor_alamat` varchar(100) NOT NULL,
  `supervisor_username` varchar(50) NOT NULL,
  `supervisor_password` varchar(100) NOT NULL,
  `supervisor_foto` varchar(100) NOT NULL,
  `supervisor_tanda_tangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD PRIMARY KEY (`cuti_id`);

--
-- Indeks untuk tabel `tbl_devisi`
--
ALTER TABLE `tbl_devisi`
  ADD PRIMARY KEY (`devisi_id`);

--
-- Indeks untuk tabel `tbl_jenis_cuti`
--
ALTER TABLE `tbl_jenis_cuti`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`karyawan_id`);

--
-- Indeks untuk tabel `tbl_manajer`
--
ALTER TABLE `tbl_manajer`
  ADD PRIMARY KEY (`manajer_id`),
  ADD UNIQUE KEY `manajer_nip` (`manajer_nip`);

--
-- Indeks untuk tabel `tbl_supervisor`
--
ALTER TABLE `tbl_supervisor`
  ADD PRIMARY KEY (`supervisor_id`),
  ADD UNIQUE KEY `supervisor_nip` (`supervisor_nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  MODIFY `cuti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_devisi`
--
ALTER TABLE `tbl_devisi`
  MODIFY `devisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_cuti`
--
ALTER TABLE `tbl_jenis_cuti`
  MODIFY `jenis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `karyawan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_manajer`
--
ALTER TABLE `tbl_manajer`
  MODIFY `manajer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_supervisor`
--
ALTER TABLE `tbl_supervisor`
  MODIFY `supervisor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
