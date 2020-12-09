-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2020 pada 09.29
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kiriman_barang`
--

CREATE TABLE `kiriman_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_resi` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tipe_pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `masalahs`
--

CREATE TABLE `masalahs` (
  `id_masalah` bigint(20) UNSIGNED NOT NULL,
  `desc_masalah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_masalah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_db` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_db` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `masalahs`
--

INSERT INTO `masalahs` (`id_masalah`, `desc_masalah`, `nama_masalah`, `ip_db`, `tipe_db`, `created_at`, `updated_at`) VALUES
(1, 'COD', 'Cek Status Barang', '33.20.2.4', 'mssql', NULL, NULL),
(2, 'COD', 'Barang gagal DO', '33.20.2.4', 'mssql', NULL, NULL),
(3, 'REF PETUGAS', 'Cek Status Petugas', '98.2.32.1', 'mssql', NULL, NULL),
(4, 'REF PETUGAS', 'Petugas Gagal Login', '98.2.32.1', 'mssql', NULL, NULL),
(5, 'KORPORAT', 'Cek Harga Korporat', '60.2.54.20', 'mssql', NULL, NULL),
(6, 'KOLEKTING', 'Cek Status Karung', '90.2.52.20', 'mssql', NULL, NULL),
(7, 'KOLEKTING', 'CEK DATA', '92.2.32.8', 'mssqp', NULL, NULL),
(8, 'KOLEKTING', 'Eror 101 Gagal melakukan insert item untuk bukalapak', '82.4.23.1', 'mssqp', NULL, NULL),
(9, 'REPORT', 'Lacak kiriman lama', '22.23.44.5', 'mssql', NULL, NULL),
(10, 'MANIFEST', 'Error Manifest', '23.4.22.1', 'mssql', NULL, NULL),
(11, 'AGENPOS', 'Error 999 Transaksi Gagal', '44.90.2.10', 'mssql', NULL, NULL),
(12, 'KORPORAT', 'Cek Kantor', '22.33.44.1', 'mssql', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2020_08_10_070921_create_masalahs_table', 1),
(38, '2020_08_26_081629_create_kiriman_barang_table', 1),
(39, '2020_08_31_072149_remove_query_column_from_masalahs', 1),
(40, '2020_09_10_072758_create_query_masalah_table', 1),
(41, '2020_10_15_001903_add_parameter_to_query_masalah', 1),
(42, '2020_10_15_015909_add_nama_masalah_to_query_masalah', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `query_masalah`
--

CREATE TABLE `query_masalah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_masalah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_masalah` bigint(20) UNSIGNED NOT NULL,
  `urutan` int(11) NOT NULL,
  `query` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `query_masalah`
--

INSERT INTO `query_masalah` (`id`, `nama_masalah`, `id_masalah`, `urutan`, `query`, `parameter`, `created_at`, `updated_at`) VALUES
(1, 'Cek Status Barang', 1, 1, 'SELECT status FROM kiriman_barang, WHERE nomor_resi =\' \'', 'nomor_resi', NULL, NULL),
(2, 'Barang gagal DO', 2, 1, 'SELECT status FROM kiriman_barang, WHERE nomor_resi =\' \'', 'nomor_resi', NULL, NULL),
(3, 'Barang gagal DO', 2, 2, 'UPDATE query_masalah set status = \'2\' where nomor_resi = \'\'', 'nomor_resi', NULL, NULL),
(4, 'CEK DATA', 7, 1, 'SELECT data FROM kiriman_barang, WHERE nomor_resi =\' \'', 'nomor_resi', NULL, NULL),
(5, 'Cek Kantor', 12, 1, 'SELECT nama_kantor FROM kantor, WHERE id_kantor =\' \'', 'id_kantor', NULL, NULL),
(6, 'Error 999 Transaksi Gagal', 11, 1, 'SELECT status FROM transasksi_barang, WHERE nomor_resi =\' \'', 'nomor_resi', NULL, NULL),
(7, 'Error 999 Transaksi Gagal', 11, 2, 'UPDATE transaksi_barang set status = \'2\' where nomor_resi = \'\'', 'status', NULL, NULL),
(8, 'Lacak kiriman lama', 9, 1, 'SELECT status FROM kiriman_barang, WHERE nomor_resi =\' \'', 'nomor_resi', NULL, NULL),
(9, 'Cek Harga Korporat', 5, 1, 'SELECT harga FROM korporat_detail, WHERE kategori =\' \'', 'kategori', NULL, NULL),
(10, 'Cek Status Karung', 6, 1, 'SELECT status FROM kiriman_barang, WHERE nomor_resi =\' \'', 'nomor_resi', NULL, NULL),
(11, 'Petugas Gagal Login', 4, 1, 'SELECT status FROM pegawai, WHERE id_pegawai =\' \'', 'id_pegawai', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nopen` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `nopen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Deniesh', 'denieshnv@gmail.com', NULL, '$2y$10$x/mJ/0iF4x64J4py0q1X3eqMlga2Pht5QnDw9ggcNUdWciaByZY6S', 123, 'Y9opPjBpE5JOYrwgkVhYncUX9k5CsaJFAo2mCHl3j0EXzuoK6Vr2oGpXM3ps', '2020-10-14 19:12:28', '2020-10-14 19:12:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kiriman_barang`
--
ALTER TABLE `kiriman_barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kiriman_barang_nomor_resi_unique` (`nomor_resi`);

--
-- Indeks untuk tabel `masalahs`
--
ALTER TABLE `masalahs`
  ADD PRIMARY KEY (`id_masalah`),
  ADD KEY `masalahs_nama_masalah_index` (`nama_masalah`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `query_masalah`
--
ALTER TABLE `query_masalah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `query_masalah_id_masalah_foreign` (`id_masalah`),
  ADD KEY `query_masalah_nama_masalah_foreign` (`nama_masalah`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kiriman_barang`
--
ALTER TABLE `kiriman_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `masalahs`
--
ALTER TABLE `masalahs`
  MODIFY `id_masalah` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `query_masalah`
--
ALTER TABLE `query_masalah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `query_masalah`
--
ALTER TABLE `query_masalah`
  ADD CONSTRAINT `query_masalah_id_masalah_foreign` FOREIGN KEY (`id_masalah`) REFERENCES `masalahs` (`id_masalah`),
  ADD CONSTRAINT `query_masalah_nama_masalah_foreign` FOREIGN KEY (`nama_masalah`) REFERENCES `masalahs` (`nama_masalah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
