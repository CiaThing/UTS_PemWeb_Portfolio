-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2023 pada 04.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_page`
--

CREATE TABLE `about_page` (
  `id` int(11) NOT NULL,
  `deskripsi_about` text NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `deskripsi_singkat_pekerjaan` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `website` varchar(30) NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `umur` smallint(2) NOT NULL,
  `gelar_lulusan` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `freelance` varchar(15) NOT NULL,
  `deskripsi_rinci` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about_page`
--

INSERT INTO `about_page` (`id`, `deskripsi_about`, `pekerjaan`, `deskripsi_singkat_pekerjaan`, `tanggal_lahir`, `website`, `nomor_telp`, `kota`, `umur`, `gelar_lulusan`, `email`, `freelance`, `deskripsi_rinci`, `gambar`) VALUES
(1, 'Berikut adalah Halaman About saya. About page atau halaman page ini terdiri dari biodata saya. ', 'Data Scientist', 'Berikut di bawah adalah biodata saya.', '2002-11-16', 'www.example.com', '+62 0877 8242 5144', 'Jakarta, Indonesia', 20, 'Sarjana', 'cia.thing@student.upj.ac.id', 'Not Available', 'Hobi saya dari kecil adalah berhitung, mencoba berbisnis kecil-kecilan. Hobi saya ini menunjang saya untuk menguasai dalam kalkulus serta sudah mencoba berbagai bisnis untuk diteliti sebagai bahan data untuk analisis data. ', 'img/saya.jpg\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `keterangan_page` text NOT NULL,
  `location` varchar(20) NOT NULL,
  `nomor_telp` varchar(18) NOT NULL,
  `email` varchar(30) NOT NULL,
  `web` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `keterangan_page`, `location`, `nomor_telp`, `email`, `web`) VALUES
(1, 'Berikut adalah halaman contact saya atau contact page. Contact page ini terdiri dari menu untuk contact saya lewat location, nomor telepon, email, dan website saya.', 'Jakarta, Indonesia', '+62 0877 8242 5144', 'cia.thing@student.upj.ac.id', 'www.example.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id` int(3) NOT NULL,
  `periode` varchar(15) NOT NULL,
  `gelar_lulusan` varchar(20) NOT NULL,
  `nama_universitas` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id`, `periode`, `gelar_lulusan`, `nama_universitas`, `keterangan`) VALUES
(1, '2021-Sekarang', 'S1-Informatika', 'Universitas Pembangunan Jaya', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_page`
--

CREATE TABLE `home_page` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `home_page`
--

INSERT INTO `home_page` (`id`, `nama`, `pekerjaan`, `gambar`) VALUES
(1, 'Cia Thing', 'Data Scientist', 'img\\saya.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(3) NOT NULL,
  `nama_page` varchar(15) NOT NULL,
  `keterangan_page` text NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `nama_gambar1` varchar(20) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `nama_gambar2` varchar(20) NOT NULL,
  `gambar3` varchar(255) NOT NULL,
  `nama_gambar3` varchar(20) NOT NULL,
  `keterangan_gambar1` text NOT NULL,
  `keterangan_gambar2` text DEFAULT NULL,
  `keterangan_gambar3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `nama_page`, `keterangan_page`, `gambar1`, `nama_gambar1`, `gambar2`, `nama_gambar2`, `gambar3`, `nama_gambar3`, `keterangan_gambar1`, `keterangan_gambar2`, `keterangan_gambar3`) VALUES
(1, 'Portfolio', 'Berikut adalah halaman portfolio atau portfolio page saya. Portfolio saya terdiri dari 3 project yang telah saya kerjakan selama di kampus. Berikut di bawah adalah projectnya.', 'img/portfolio/portfolio1.jpg', 'OOP dengan Java ', 'img/portfolio/portfolio2.jpg', 'Project DAA', 'img/970x647/01.jpg', 'Project PKB', 'Yeru, Syafa, dan saya membuat project mata kuliah OOP ( Object Oriented Programming ) berbasis bahasa Java. Kami membuat aplikasi CRUD untuk stock gudang.', 'Saya, Yeru, Hilmi, dan Azi berkelompok untuk membuat project mata kuliah DAA ( Desain dan Analisis Algoritma ) dengan membuat prototype sederhana berbasis bahasa Python dengan algoritma searching di mana untuk searching pakaian yang bermodel.', 'Saya, Zahid, dan Munggaran berkelompok untuk membuat project mata kuliah PKB ( Pengantar Kecerdasan Buatan ) dengan membuat face recognition berbasis bahasa Python dengan library cv2.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `professional_exp`
--

CREATE TABLE `professional_exp` (
  `id` int(3) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `periode` varchar(15) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `keterangan_pengalaman` text NOT NULL,
  `keterangan_pengalaman2` text NOT NULL,
  `keterangan_pengalaman3` text NOT NULL,
  `keterangan_pengalaman4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `professional_exp`
--

INSERT INTO `professional_exp` (`id`, `jabatan`, `periode`, `nama_perusahaan`, `keterangan_pengalaman`, `keterangan_pengalaman2`, `keterangan_pengalaman3`, `keterangan_pengalaman4`) VALUES
(1, 'Data Analyst', '2025-2027', 'PT GOTO Tokopedia', 'Menjadi data analyst yang mendeskripsikan trend pasar, serta mendiagnostik keadaan pasar untuk diteliti.\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE `skills` (
  `id` int(3) NOT NULL,
  `deskripsi_skill` text NOT NULL,
  `Skill_1` varchar(15) NOT NULL,
  `Skill1_percentage` smallint(3) NOT NULL,
  `Skill2_percentage` smallint(3) NOT NULL,
  `Skill2` varchar(15) NOT NULL,
  `Skill3` varchar(15) NOT NULL,
  `Skill3_Percentage` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skills`
--

INSERT INTO `skills` (`id`, `deskripsi_skill`, `Skill_1`, `Skill1_percentage`, `Skill2_percentage`, `Skill2`, `Skill3`, `Skill3_Percentage`) VALUES
(1, '', 'Python', 85, 70, 'SQL', 'Java', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `summary`
--

CREATE TABLE `summary` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi_summary` text NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `summary`
--

INSERT INTO `summary` (`id`, `nama`, `deskripsi_summary`, `alamat`, `nomor_telp`, `email`) VALUES
(1, 'Cia Thing', 'Disiplin, pemikiran yang cepat, dan Data Scientist Enthusiast selama 1+ tahun ', 'Jl. Felicium 1 no 55', ' +62 0877 8242 5144', 'cia.thing@student.upj.ac.id');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `summary`
--
ALTER TABLE `summary`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
