-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2024 pada 09.22
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siami`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` int(11) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `NIP` int(20) DEFAULT NULL,
  `NIDN` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `level`, `Nama`, `NIP`, `NIDN`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 1, NULL, NULL, NULL),
(4, 'admin2', '21232f297a57a5a743894a0e4a801fc3', 2, NULL, NULL, NULL),
(5, 'teknik informatika', '270007185d0f4b290ded51f9345a7f29', 2, NULL, NULL, NULL),
(9, 'akuntansi', '1139f90d50ba3bb7ff4b2602ad03aa26', 2, NULL, NULL, NULL),
(10, 'admin_feb', '21232f297a57a5a743894a0e4a801fc3', 2, NULL, NULL, NULL),
(11, 'prodi', '32b404761d910d277789cd91076d1459', 2, NULL, NULL, NULL),
(14, 'rivan', '708af01b0093065b9fa75aafba5a67d8', 2, NULL, NULL, NULL),
(15, 'asesor1', '5640e1dec2508495fe43f055d31f0577', 3, NULL, NULL, NULL),
(16, 'asesor2', '8defc208054647b99d62dc3f9655e01d', 3, NULL, NULL, NULL),
(17, 'rivan2', 'a587251cc385ea7c271a21bb11ab3d31', 2, NULL, NULL, NULL),
(18, 'asesor3', '9faf1308552026f288fa77d583238623', 3, NULL, NULL, NULL),
(19, 'Test Asesor', 'fe3e366c20ef0ed452da5bf49b99a40c', 3, NULL, NULL, NULL),
(20, 'Test Instansi', '4c333efbef7f557269b10c04dc184fd6', 2, NULL, NULL, NULL),
(21, 'Test Asesor2', '1d82277bde9686831bb49e904d7b05fc', 3, NULL, NULL, NULL),
(22, 'Test Instansi2', '7ac1c5cd26198a9eae221a83a4ca32cf', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ami`
--

CREATE TABLE `data_ami` (
  `id_transaksi` int(3) NOT NULL,
  `id_instansi` int(3) DEFAULT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `id_sndikti` int(3) DEFAULT NULL,
  `sndikti` varchar(255) NOT NULL,
  `iku_sndikti` varchar(255) DEFAULT NULL,
  `id_siklus` int(3) DEFAULT NULL,
  `kode_siklus` varchar(3) DEFAULT NULL,
  `tahun` int(4) NOT NULL,
  `jadwal` date DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `hasil_audit` varchar(255) DEFAULT NULL,
  `bobot` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ami`
--

INSERT INTO `data_ami` (`id_transaksi`, `id_instansi`, `nama_instansi`, `id_sndikti`, `sndikti`, `iku_sndikti`, `id_siklus`, `kode_siklus`, `tahun`, `jadwal`, `link`, `hasil_audit`, `bobot`) VALUES
(1, 3, 'Teknologi Informasi', 13, 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 2, 'XI', 2025, '2024-08-19', 'http://localhost/siami/uploads/647-2472-1-PB.pdf', 'http://localhost/siami/uploads/hasil_audit/529-1125-1-SM.pdf', 12),
(2, 3, 'Teknologi Informasi', 1, 'ABC', 'A', 2, 'XI', 2025, NULL, 'http://localhost/siami/uploads/214-887-1-PB1.pdf', NULL, 12),
(5, 3, 'Teknologi Informasi', 12, 'zzz', 'zzz', 1, 'X', 2024, '2024-08-13', NULL, NULL, NULL),
(7, 4, 'Agribisnis', 1, 'ABC', 'A', 1, 'X', 2024, NULL, NULL, NULL, 2),
(8, 4, 'Agribisnis', 1, 'ABC', 'A', 2, 'XI', 2025, NULL, NULL, NULL, 3),
(9, 4, 'Agribisnis', 12, 'zzz', 'zzz', 1, 'X', 2024, NULL, NULL, NULL, 1),
(11, 4, 'Agribisnis', 13, 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 1, 'X', 2024, NULL, NULL, NULL, 0),
(12, 4, 'Agribisnis', 13, 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 2, 'XI', 2025, NULL, NULL, NULL, 0),
(13, 5, 'Agroteknologi', 1, 'ABC', 'A', 1, 'X', 2024, NULL, NULL, NULL, NULL),
(14, 5, 'Agroteknologi', 1, 'ABC', 'A', 2, 'XI', 2025, NULL, 'http://localhost/siami/uploads/Simbol_ERD.pdf', 'http://localhost/siami/uploads/hasil_audit/738-1898-1-PB.pdf', 1),
(15, 5, 'Agroteknologi', 12, 'zzz', 'zzz', 1, 'X', 2024, NULL, NULL, NULL, NULL),
(17, 5, 'Agroteknologi', 13, 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 1, 'X', 2024, NULL, NULL, NULL, NULL),
(18, 5, 'Agroteknologi', 13, 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 2, 'XI', 2025, NULL, NULL, NULL, 2),
(19, 6, 'Akuakultur', 1, 'ABC', 'A', 1, 'X', 2024, NULL, NULL, NULL, NULL),
(21, 6, 'Akuakultur', 12, 'zzz', 'zzz', 1, 'X', 2024, NULL, NULL, NULL, NULL),
(23, 6, 'Akuakultur', 13, 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 1, 'X', 2024, NULL, NULL, NULL, NULL),
(24, 6, 'Akuakultur', 13, 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 2, 'XI', 2025, NULL, NULL, NULL, NULL),
(25, 3, 'Teknologi Informasi', 13, 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 1, 'X', 2024, '2024-08-13', NULL, NULL, NULL),
(26, NULL, 'Teknologi Informasi', NULL, 'Test Add', NULL, NULL, NULL, 2025, '2024-08-19', NULL, NULL, NULL),
(27, NULL, 'Teknologi Informasi', NULL, 'Test Add', NULL, NULL, '202', 2025, '2024-08-19', NULL, NULL, NULL),
(28, NULL, 'Teknologi Informasi', NULL, 'Test Add', NULL, NULL, '202', 2025, '2024-08-19', NULL, NULL, NULL),
(29, NULL, 'Teknologi Informasi', NULL, 'Test Add', NULL, NULL, 'X', 2025, '2024-08-19', NULL, NULL, NULL),
(30, NULL, 'Teknologi Informasi', NULL, 'Test Add', NULL, NULL, 'X', 2024, '2024-08-19', NULL, NULL, NULL),
(31, 1, 'Teknologi Informasi', 14, 'Test Add', NULL, 1, 'X', 2024, '2024-08-19', NULL, NULL, NULL),
(32, NULL, 'Teknologi Informasi', NULL, 'Test Add', NULL, 1, 'X', 2024, '2024-08-19', NULL, NULL, NULL),
(33, NULL, 'Agribisnis', NULL, 'Test Add', 'IKU Test', 2, 'XI', 2025, '2024-08-19', NULL, NULL, NULL),
(37, 3, 'Teknologi Informasi', 13, 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 1, 'X', 2024, '2024-08-14', NULL, NULL, NULL),
(38, 3, 'Teknologi Informasi', 13, 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 2, 'XI', 2025, '2024-08-19', NULL, NULL, NULL),
(39, 3, 'Teknologi Informasi', 14, 'Test Add', 'IKU Test', 2, 'XI', 2025, '2024-08-13', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_asesor`
--

CREATE TABLE `data_asesor` (
  `id_data_asesor` int(11) NOT NULL,
  `id_siklus` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_instansi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_asesor`
--

INSERT INTO `data_asesor` (`id_data_asesor`, `id_siklus`, `id_user`, `id_instansi`) VALUES
(1, 1, 18, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `jumlah_dosen` int(11) NOT NULL,
  `tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `id_prodi`, `jumlah_dosen`, `tahun_ajaran`) VALUES
(1, 1, 32, 2020),
(2, 2, 30, 2020),
(3, 3, 32, 2020),
(4, 4, 32, 2020),
(5, 5, 32, 2020),
(6, 6, 32, 2020),
(7, 7, 32, 2020),
(8, 8, 32, 2020),
(9, 9, 32, 2020),
(10, 10, 32, 2020),
(11, 11, 32, 2020),
(12, 12, 32, 2020),
(13, 13, 32, 2020),
(14, 14, 32, 2020),
(15, 15, 32, 2020),
(16, 16, 32, 2020),
(17, 17, 32, 2020),
(18, 18, 32, 2020),
(19, 19, 32, 2020),
(20, 20, 32, 2020),
(21, 21, 32, 2020),
(22, 22, 32, 2020),
(23, 23, 32, 2020),
(24, 24, 32, 2020),
(25, 25, 32, 2020),
(26, 1, 32, 2019),
(27, 1, 31, 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(251) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1, 'Hukum'),
(2, 'Ekonomi dan Bisnis'),
(3, 'Pertanian'),
(4, 'Teknik'),
(5, 'Ilmu Sosial dan Ilmu Budaya (FISIB)'),
(6, 'Keguruan dan Ilmu Pendidikan (FKIP)'),
(7, 'Ilmu-Ilmu Keislaman (FIK)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(11) NOT NULL,
  `id_jenis_instansi` int(3) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `id_jenis_instansi`, `nama_instansi`, `deskripsi`) VALUES
(3, 1, 'Teknologi Informasi', 'Program Studi Teknologi Informasi'),
(4, 1, 'Agribisnis', 'Agribisnis'),
(5, 1, 'Agroteknologi', 'Agroteknologi'),
(6, 1, 'Akuakultur', 'Akuakultur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_audit`
--

CREATE TABLE `jadwal_audit` (
  `id` int(11) NOT NULL,
  `siklus` varchar(20) NOT NULL,
  `jadwal` date NOT NULL,
  `keterangan` varchar(255) DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_audit`
--

INSERT INTO `jadwal_audit` (`id`, `siklus`, `jadwal`, `keterangan`) VALUES
(4, '2025', '2024-08-13', 'Test Update'),
(5, '2024', '2024-08-19', ''),
(6, '2025', '2024-08-14', 'Jadwal Test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_instansi`
--

CREATE TABLE `jenis_instansi` (
  `id_jenis_instansi` int(3) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_instansi`
--

INSERT INTO `jenis_instansi` (`id_jenis_instansi`, `nama_jenis`) VALUES
(1, 'Program Studi'),
(2, 'Biro Keuangan'),
(3, 'Biro AKPK'),
(4, 'LPPM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_jenjang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `id_fakultas`, `id_jenjang`) VALUES
(1, 'Teknik Informatika', 4, 2),
(2, 'Teknik Elektro', 4, 2),
(3, 'Teknik Industri', 4, 2),
(4, 'Teknik Mekatronika', 4, 2),
(5, 'Sistem Informasi', 4, 2),
(6, 'Manajemen Informatika', 4, 1),
(7, 'Ilmu Hukum', 1, 2),
(8, ' Manajemen', 2, 2),
(9, 'Akuntansi', 2, 2),
(10, 'Ekonomi Pembangunan', 2, 2),
(11, 'Akuntansi Sektor Publik', 2, 1),
(12, 'Enterpreneurship', 2, 1),
(13, 'Teknologi Industri Pertanian', 3, 2),
(14, 'Agribisnis', 3, 2),
(15, 'Agroekoteknologi ', 3, 2),
(16, 'Ilmu Kelautan', 3, 2),
(17, 'Sosiologi ', 5, 2),
(18, 'Sastra Inggris', 5, 2),
(19, 'Ilmu Komunikasi', 5, 2),
(20, 'Psikologi', 5, 2),
(21, 'PGSD', 6, 2),
(22, 'Pendidikan Informatika', 6, 2),
(23, 'Pendidikan IPA', 6, 2),
(24, 'Pendidikan Anak Usia Dini', 6, 2),
(25, 'Pendidikan bahasa dan sastra indonesia', 6, 2),
(26, 'Hukum Bisnis Syariah', 7, 2),
(27, 'Ekonomi Syariah', 7, 2),
(28, 'Ilmu Ekonomi', 2, 3),
(29, 'Manajemen', 2, 3),
(30, 'Akuntansi Forensik', 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siklus`
--

CREATE TABLE `siklus` (
  `id_siklus` int(3) NOT NULL,
  `kode_siklus` varchar(3) NOT NULL,
  `tahun` int(4) NOT NULL,
  `sekarang` int(3) NOT NULL,
  `mulai` date DEFAULT NULL,
  `batas` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siklus`
--

INSERT INTO `siklus` (`id_siklus`, `kode_siklus`, `tahun`, `sekarang`, `mulai`, `batas`) VALUES
(1, 'X', 2024, 0, '2024-04-02', '2024-04-23'),
(2, 'XI', 2025, 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sndikti`
--

CREATE TABLE `sndikti` (
  `id_sndikti` int(11) NOT NULL,
  `sndikti` varchar(255) DEFAULT NULL,
  `iku_sndikti` varchar(255) DEFAULT NULL,
  `jadwal` date DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `bobot` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sndikti`
--

INSERT INTO `sndikti` (`id_sndikti`, `sndikti`, `iku_sndikti`, `jadwal`, `link`, `bobot`) VALUES
(12, 'zzz', 'zzz', NULL, NULL, NULL),
(13, 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', 'I have successfully created a registration and login system. I have used useremail and password in the login form and I want to display the username and other properties related to that logged in user.', NULL, NULL, NULL),
(14, 'Test Add', 'IKU Test', '2024-08-19', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat_prestasi`
--

CREATE TABLE `tingkat_prestasi` (
  `id_tingkat` int(11) NOT NULL,
  `tingkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tingkat_prestasi`
--

INSERT INTO `tingkat_prestasi` (`id_tingkat`, `tingkat`) VALUES
(1, 'Lokal/Wilayah'),
(2, 'Nasional'),
(3, 'Internasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_data`
--

CREATE TABLE `user_access_data` (
  `id` int(11) NOT NULL,
  `akun` int(11) NOT NULL,
  `id_instansi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_data`
--

INSERT INTO `user_access_data` (`id`, `akun`, `id_instansi`) VALUES
(89, 14, 3),
(94, 1, 3),
(96, 1, 5),
(97, 1, 6),
(99, 17, 3),
(100, 4, 4),
(101, 4, 6),
(111, 20, 3),
(112, 19, 3),
(113, 21, 5),
(114, 22, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(10, 2, 10),
(23, 1, 9),
(26, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`id`, `level`, `ket`) VALUES
(1, 'Admin', 'Akses level tertinggi'),
(2, 'Admin Instansi', 'Akses level admin instansi'),
(3, 'Asesor', 'Akses level asesor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'Menu'),
(9, 'User'),
(10, 'Admin'),
(11, 'Dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(34, 1, 'Data Audit', 'admin', 'fas fa-fw fa-table', 1),
(37, 1, 'Table 8.a', 'admin/table_8a', 'fas fa-fw fa-table', 1),
(99, 9, 'Manajemen User', 'admin/user_akun', 'fas fa-fw fa-user', 1),
(109, 9, 'Data Akses', 'admin/level', 'fas fa-fw fa-user-tie', 1),
(110, 10, 'Data Audit', 'instansi', 'fas fa-fw fa-table', 1),
(124, 2, 'Manajemen Submenu', 'menu/submenu', '	\r\nfas fa-fw fa-folder-open', 1),
(125, 2, 'Manajemen Menu', 'menu', 'fas fa-fw fa-folder', 1),
(128, 11, 'Data Audit', 'user', 'fas fa-fw fa-table', 1),
(129, 11, 'Table 2.a', 'user/table_2a', 'fas fa-fw fa-table', 1),
(130, 11, 'Table 2.b', 'user/table_2b', 'fas fa-fw fa-table', 1),
(131, 11, 'Table 8.a', 'user/table_8a', 'fas fa-fw fa-table', 1),
(132, 11, 'Table 8.b', 'user/table_8b', 'fas fa-fw fa-table', 1),
(133, 11, 'Table 8.c', 'user/table_8c', 'fas fa-fw fa-table', 1),
(134, 11, 'Table 8.d.1', 'user/table_8d1', 'fas fa-fw fa-table', 1),
(135, 11, 'Table 8.d.2', 'user/table_8d2', 'fas fa-fw fa-table', 1),
(136, 11, 'Table 8.e.1', 'user/table_8e1', 'fas fa-fw fa-table', 1),
(138, 10, 'SNDIKTI', 'instansi/sndikti', 'fas fa-fw fa-table', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `user_ibfk_1` (`level`);

--
-- Indeks untuk tabel `data_ami`
--
ALTER TABLE `data_ami`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `data_asesor`
--
ALTER TABLE `data_asesor`
  ADD PRIMARY KEY (`id_data_asesor`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_instansi` (`id_instansi`),
  ADD KEY `id_siklus` (`id_siklus`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `dosen_ibfk_1` (`tahun_ajaran`),
  ADD KEY `prodi_id` (`id_prodi`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`),
  ADD KEY `id_jenis` (`id_jenis_instansi`);

--
-- Indeks untuk tabel `jadwal_audit`
--
ALTER TABLE `jadwal_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_instansi`
--
ALTER TABLE `jenis_instansi`
  ADD PRIMARY KEY (`id_jenis_instansi`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `id_fakultas` (`id_fakultas`),
  ADD KEY `id_jenjang` (`id_jenjang`);

--
-- Indeks untuk tabel `siklus`
--
ALTER TABLE `siklus`
  ADD PRIMARY KEY (`id_siklus`);

--
-- Indeks untuk tabel `sndikti`
--
ALTER TABLE `sndikti`
  ADD PRIMARY KEY (`id_sndikti`);

--
-- Indeks untuk tabel `tingkat_prestasi`
--
ALTER TABLE `tingkat_prestasi`
  ADD PRIMARY KEY (`id_tingkat`);

--
-- Indeks untuk tabel `user_access_data`
--
ALTER TABLE `user_access_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_access_data_ibfk_1` (`akun`),
  ADD KEY `data_instansi` (`id_instansi`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_access_menu_ibfk_2` (`menu_id`),
  ADD KEY `menu_id` (`role_id`) USING BTREE;

--
-- Indeks untuk tabel `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_ami`
--
ALTER TABLE `data_ami`
  MODIFY `id_transaksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `data_asesor`
--
ALTER TABLE `data_asesor`
  MODIFY `id_data_asesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jadwal_audit`
--
ALTER TABLE `jadwal_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jenis_instansi`
--
ALTER TABLE `jenis_instansi`
  MODIFY `id_jenis_instansi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `siklus`
--
ALTER TABLE `siklus`
  MODIFY `id_siklus` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sndikti`
--
ALTER TABLE `sndikti`
  MODIFY `id_sndikti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tingkat_prestasi`
--
ALTER TABLE `tingkat_prestasi`
  MODIFY `id_tingkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_access_data`
--
ALTER TABLE `user_access_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level`) REFERENCES `user_level` (`id`);

--
-- Ketidakleluasaan untuk tabel `data_asesor`
--
ALTER TABLE `data_asesor`
  ADD CONSTRAINT `id_instansi` FOREIGN KEY (`id_instansi`) REFERENCES `instansi` (`id_instansi`),
  ADD CONSTRAINT `id_siklus` FOREIGN KEY (`id_siklus`) REFERENCES `siklus` (`id_siklus`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `prodi_id` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Ketidakleluasaan untuk tabel `instansi`
--
ALTER TABLE `instansi`
  ADD CONSTRAINT `id_jenis` FOREIGN KEY (`id_jenis_instansi`) REFERENCES `jenis_instansi` (`id_jenis_instansi`);

--
-- Ketidakleluasaan untuk tabel `user_access_data`
--
ALTER TABLE `user_access_data`
  ADD CONSTRAINT `data_instansi` FOREIGN KEY (`id_instansi`) REFERENCES `instansi` (`id_instansi`),
  ADD CONSTRAINT `user_access_data_ibfk_1` FOREIGN KEY (`akun`) REFERENCES `akun` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
