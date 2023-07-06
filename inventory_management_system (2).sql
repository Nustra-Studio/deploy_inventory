-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Jul 2023 pada 11.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5225440_inventory_telungagung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_jual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_pokok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_grosir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_barang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_barang_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `uuid`, `category_id`, `id_supplier`, `kode_barang`, `harga`, `harga_jual`, `harga_pokok`, `harga_grosir`, `stok`, `keterangan`, `name`, `merek_barang`, `type_barang_id`, `created_at`, `updated_at`) VALUES
(6, 'hidden', 'supplier2', 'supplier2', NULL, '12000', '15000', NULL, NULL, 25, NULL, 'manggala', 'mks', NULL, '2023-06-17 21:51:23', '2023-06-17 21:51:23'),
(7, '86e19190abdae54a954af59841cc84ec6b7a5402df95e280bc1a2313c2551d58', '9c222302d15fdb13fbe0635e15fe3a49c6c67883a84d8d7b9d62700b2f8309fb', 'e7a73507352d92512efbe8ae8e91a9c113b5825f0cccfb731e593dcf140e0f81', '0623830', NULL, '13500', '15000', NULL, 45, NULL, 'dio', 'mks', NULL, '2023-06-19 06:36:51', '2023-06-19 06:36:51'),
(8, 'c909986e48d8c9ff9686bb051cde5146b97f3fadc3860025293e1cbe40b4e7d3', '9c222302d15fdb13fbe0635e15fe3a49c6c67883a84d8d7b9d62700b2f8309fb', 'e7a73507352d92512efbe8ae8e91a9c113b5825f0cccfb731e593dcf140e0f81', 'mainan06238059', NULL, '13500', '12000', NULL, 150, NULL, 'putra', 'mks', NULL, '2023-06-19 06:39:01', '2023-06-19 06:39:01'),
(9, '50e4d6a7b7dcfc45b1f48331765dd29cfcd0ce28cae2a06e4d0916fb2574a556', '9c222302d15fdb13fbe0635e15fe3a49c6c67883a84d8d7b9d62700b2f8309fb', 'e7a73507352d92512efbe8ae8e91a9c113b5825f0cccfb731e593dcf140e0f81', 'mainan07234811', NULL, '13500', '12500', NULL, 25, NULL, 'Mobil Rc', 'mks', NULL, '2023-07-01 06:54:54', '2023-07-01 06:54:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabangs`
--

CREATE TABLE `cabangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepala_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `database` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cabangs`
--

INSERT INTO `cabangs` (`id`, `uuid`, `nama`, `kepala_cabang`, `telepon`, `alamat`, `category_id`, `keterangan`, `database`, `created_at`, `updated_at`) VALUES
(1, 'fb1e210d934e17669108d49fbcdf34dedb28c8da866c10824b26122ca34e2269', 'Toko Bandung', 'Yudha', '12334665987254', 'Jln Bandung', '1', 'Mainan', 'cabang_Toko_Bandung', NULL, NULL),
(2, '6a71de2d52ecb2a1f36a438146839657d6a8708904f17aad0d082513676ed4da', 'Toko 2', 'Ahmad Yani', '123234567705451', 'Jalan kenangan', '1', 'Toko mainan', 'cabang_Toko_2', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_barangs`
--

CREATE TABLE `category_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category_barangs`
--

INSERT INTO `category_barangs` (`id`, `uuid`, `name`, `created_at`, `updated_at`) VALUES
(1, '9c222302d15fdb13fbe0635e15fe3a49c6c67883a84d8d7b9d62700b2f8309fb', 'mainan', '2023-06-17 21:43:56', '2023-06-17 21:43:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_cabangs`
--

CREATE TABLE `category_cabangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category_cabangs`
--

INSERT INTO `category_cabangs` (`id`, `uuid`, `name`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '19a2f2df2d7bef54dcda86d5a6a579dba7a2f984af9dd7a82cd06612ebbfbb86', 'toko mainan', 'toko mainan', NULL, NULL),
(2, '45958ae8c97fadfb5623111838e286d3657b0b53ce64904d285241353c0c3f7b', 'Toko Baju', 'Toko Baju', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `grups`
--

CREATE TABLE `grups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_khusus`
--

CREATE TABLE `harga_khusus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_minimal` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `harga_khusus`
--

INSERT INTO `harga_khusus` (`id`, `uuid`, `id_barang`, `harga`, `jumlah_minimal`, `diskon`, `keterangan`, `satuan`, `created_at`, `updated_at`) VALUES
(1, 'a501de899768f02568a39f64cfb81c3a905d7f4cae7aff8d3c107a98def22dc9', 'a501de899768f02568a39f64cfb81c3a905d7f4cae7aff8d3c107a98def22dc9', 56000, 12000, 10, 'diskon 20', NULL, '2023-06-17 22:01:22', '2023-06-17 22:01:22'),
(2, 'e0004aac9624d21864bbed183edb65848e7a640c0cdd81cc53457b244581aad2', 'e0004aac9624d21864bbed183edb65848e7a640c0cdd81cc53457b244581aad2', 85000, 12000, 30, 'diskon 20', NULL, '2023-06-17 22:12:42', '2023-06-17 22:12:42'),
(3, 'b620656f7ec7868fb08689b23175abcbf2fc47047797ca8f9476def75f4ab429', 'b620656f7ec7868fb08689b23175abcbf2fc47047797ca8f9476def75f4ab429', 50000, 20, 25000, 'diskon 20', NULL, '2023-06-19 06:27:19', '2023-06-19 06:27:19'),
(4, '86e19190abdae54a954af59841cc84ec6b7a5402df95e280bc1a2313c2551d58', '86e19190abdae54a954af59841cc84ec6b7a5402df95e280bc1a2313c2551d58', 50000, 20, 30, 'diskon 20', NULL, '2023-06-19 06:36:51', '2023-06-19 06:36:51'),
(5, 'c909986e48d8c9ff9686bb051cde5146b97f3fadc3860025293e1cbe40b4e7d3', 'c909986e48d8c9ff9686bb051cde5146b97f3fadc3860025293e1cbe40b4e7d3', 56000, 12000, 25000, 'diskon 20', NULL, '2023-06-19 06:39:01', '2023-06-19 06:39:01'),
(6, '50e4d6a7b7dcfc45b1f48331765dd29cfcd0ce28cae2a06e4d0916fb2574a556', '50e4d6a7b7dcfc45b1f48331765dd29cfcd0ce28cae2a06e4d0916fb2574a556', 50000, 20, 25000, 'diskon 20', NULL, '2023-07-01 06:54:54', '2023-07-01 06:54:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_transactions`
--

CREATE TABLE `history_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_pokok` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `id_supllayer` int(11) DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masuk_barang` datetime DEFAULT NULL,
  `keluar_barang` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi_barangs`
--

CREATE TABLE `kondisi_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_04_235747_create_barangs_table', 1),
(6, '2023_06_04_235802_create_stoks_table', 1),
(7, '2023_06_04_235813_create_tipe_barangs_table', 1),
(8, '2023_06_04_235825_create_harga_khususes_table', 1),
(9, '2023_06_04_235839_create_kondisi_barangs_table', 1),
(10, '2023_06_04_235859_create_category_barangs_table', 1),
(11, '2023_06_04_235912_create_category_cabangs_table', 1),
(12, '2023_06_04_235926_create_supliers_table', 1),
(14, '2023_06_04_235952_create_transfer_barangs_table', 1),
(16, '2023_06_05_000017_create_settings_table', 1),
(17, '2023_06_05_000030_create_grups_table', 1),
(18, '2023_06_13_131734_create_setting_printers_table', 1),
(19, '2023_06_13_132812_create_setting_cronjobs_table', 1),
(20, '2023_06_13_133139_create_setting_apis_table', 1),
(21, '2023_06_21_052055_create_user_cabangs_table', 2),
(22, '2023_06_04_235941_create_cabangs_table', 3),
(24, '2023_07_03_000329_create_transaction_barangs_table', 4),
(25, '2023_06_05_000011_create_history_transactions_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gudang_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahasa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_apis`
--

CREATE TABLE `setting_apis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_api` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_api` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cronjob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_cronjobs`
--

CREATE TABLE `setting_cronjobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_cronjob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_cronjob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_printers`
--

CREATE TABLE `setting_printers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_printer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_printer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_printer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kertas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `margin_top` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `margin_bottom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `margin_left` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `margin_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stoks`
--

CREATE TABLE `stoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_stock` int(11) NOT NULL,
  `out_stock` int(11) NOT NULL,
  `min_stock` int(11) NOT NULL,
  `min_out_stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supliers`
--

CREATE TABLE `supliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_barang_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `supliers`
--

INSERT INTO `supliers` (`id`, `uuid`, `nama`, `alamat`, `telepon`, `product`, `keterangan`, `category_barang_id`, `created_at`, `updated_at`) VALUES
(1, 'e7a73507352d92512efbe8ae8e91a9c113b5825f0cccfb731e593dcf140e0f81', 'PT MAJU MUNDUR', 'MALANG', '0812346547899', 'MAINANA', 'MAINAN', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_barangs`
--

CREATE TABLE `transaction_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_pokok` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transfer_barangs`
--

CREATE TABLE `transfer_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transction_cabang_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_transction` int(11) NOT NULL,
  `id_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_barangs`
--

CREATE TABLE `type_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_cabangs`
--

CREATE TABLE `user_cabangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabang_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_cabangs`
--

INSERT INTO `user_cabangs` (`id`, `username`, `password`, `uuid`, `role`, `cabang_id`, `api_key`, `created_at`, `updated_at`) VALUES
(1, 'sambo', '$2y$10$wYR3AWxuHTBSyhCxWqWOM.EF5jwsS7DNRGOXzk/qvRIp8YHHfgJAu', '1234567890', 'kasir', '1', 'H6cE5LdnajTpzd4CEIZGSO7QVVq3FV4ga2TMvjvT', '2023-06-21 07:06:36', '2023-06-21 07:15:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barangs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `cabangs`
--
ALTER TABLE `cabangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cabangs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `category_barangs`
--
ALTER TABLE `category_barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_barangs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `category_cabangs`
--
ALTER TABLE `category_cabangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_cabangs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `grups`
--
ALTER TABLE `grups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grups_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `harga_khusus`
--
ALTER TABLE `harga_khusus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `harga_khusus_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `history_transactions`
--
ALTER TABLE `history_transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `history_transactions_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kondisi_barangs`
--
ALTER TABLE `kondisi_barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kondisi_barangs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `setting_apis`
--
ALTER TABLE `setting_apis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_apis_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `setting_cronjobs`
--
ALTER TABLE `setting_cronjobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_cronjobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `setting_printers`
--
ALTER TABLE `setting_printers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stoks`
--
ALTER TABLE `stoks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stoks_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `supliers`
--
ALTER TABLE `supliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supliers_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `transaction_barangs`
--
ALTER TABLE `transaction_barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_barangs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `transfer_barangs`
--
ALTER TABLE `transfer_barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `type_barangs`
--
ALTER TABLE `type_barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_cabangs`
--
ALTER TABLE `user_cabangs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `cabangs`
--
ALTER TABLE `cabangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `category_barangs`
--
ALTER TABLE `category_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `category_cabangs`
--
ALTER TABLE `category_cabangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `grups`
--
ALTER TABLE `grups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `harga_khusus`
--
ALTER TABLE `harga_khusus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `history_transactions`
--
ALTER TABLE `history_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kondisi_barangs`
--
ALTER TABLE `kondisi_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `setting_apis`
--
ALTER TABLE `setting_apis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `setting_cronjobs`
--
ALTER TABLE `setting_cronjobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `setting_printers`
--
ALTER TABLE `setting_printers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stoks`
--
ALTER TABLE `stoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `supliers`
--
ALTER TABLE `supliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaction_barangs`
--
ALTER TABLE `transaction_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transfer_barangs`
--
ALTER TABLE `transfer_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `type_barangs`
--
ALTER TABLE `type_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_cabangs`
--
ALTER TABLE `user_cabangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
