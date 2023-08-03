-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 16.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bem-fikti-web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'FIKTI Info', 'fikti-Info', '2023-05-26 23:56:55', '2023-05-26 23:56:55'),
(2, 'FIKTI Update', 'fikti-update', '2023-05-26 23:56:55', '2023-05-26 23:56:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_05_13_003209_create_news_table', 1),
(6, '2023_05_15_020405_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(20, 2, 3, 'Repellendus id eaque consectetur nihil dolores quas voluptatem.', 'excepturi-aut-nihil-consequuntur-distinctio-eaque-veritatis-aperiam', NULL, 'Qui ipsum vitae est consequatur voluptas recusandae nam nisi est fugit recusandae itaque dolorum cupiditate.', '<p>Sunt qui quas impedit facere. Delectus inventore dolorum assumenda autem. Vitae sit fugiat debitis molestias rerum et.</p>><p>Laboriosam consequatur iure qui autem. Voluptates voluptatibus est voluptas sit et suscipit adipisci enim. Quod sit error architecto sit.</p>><p>Vero earum totam temporibus ipsa provident eaque. Odio voluptas libero cumque officiis enim totam reiciendis. A deleniti inventore sit aperiam eum deserunt. Rem id officia qui asperiores esse fuga minima. Quam laudantium quibusdam officia similique vitae nobis.</p>><p>Dolorum error dolore est mollitia et quia. Similique quia omnis rem nesciunt rerum. Sit alias sequi in.</p>><p>Deleniti consequatur ut eum dicta. Non enim eligendi explicabo qui consectetur eius et. Iure quia voluptas quia voluptatem.</p>>', NULL, '2023-05-26 23:56:55', '2023-05-26 23:56:55'),
(21, 1, 2, 'First post', 'first-post', 'news-images/VmUPNLSGAJvqAJ5NbnjWXmcHBOrMX0n1QCM9vgEA.png', 'awsdawdawdawd', '<div>awsdawdawdawd</div>', NULL, '2023-05-27 00:10:37', '2023-05-27 01:58:13'),
(23, 1, 2, 'Digital Marketing', 'digital-marketing', 'news-images/gNaXl43G6KjKCUed2pG7boHiTe6ArhjJugxOSy4g.jpg', 'Haloo teman teman semuanya, gimana kuliahnya semoga lancar lancar teruss yaa. Yang lagi PI dan Skripsi semangat ya.Oh iya, pasti diantara semua mahasiswa yang melihat ini pasti ada yang punya usaha? N...', '<div>Haloo teman teman semuanya, gimana kuliahnya semoga lancar lancar teruss yaa. Yang lagi PI dan Skripsi semangat ya.<br><br></div><div>Oh iya, pasti diantara semua mahasiswa yang melihat ini pasti ada yang punya usaha? Nah disini kami ingin memberikan tips gimana sih agar usaha kamu bisa lebih berkembang lagi dan menjadi sukses.<br><br></div><div>Pengertian digital marketing adalah suatu kegiatan pemasaran atau promosi sebuah brand atau produk menggunakan media digital atau internet.<br><br></div><div>Tujuan digital marketing adalah untuk menarik konsumen dan calon konsumen secara cepat<br><br></div><div>Berikut adalah kelebihan dari digital marketing :<br><br></div><div><strong><br>1. Kecepatan Penyebaran<br></strong><br></div><div>Strategi pemasaran dengan menggunakan media digital dapat dilakukan dengan sangat cepat, bahkan dalam hitungan detik.<br><br></div><div><strong><br>2. Kemudahan Evaluas<br></strong><br></div><div>Dengan menggunakan media online, hasil dari kegiatan pemasaran dapat langsung diketahui Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.<br><br></div><div>Informasi seperti berapa lama produk Anda ditonton, berapa banyak orang yang melihat produk Anda, berapa persen konversi penjualan dari setiap iklan dan sebagainya.<br><br></div><div><strong><br>3. Murah dan Efektif<br></strong><br></div><div>Dibandingkan dengan pemasaran tradisional, tentu saja digital marketing jauh lebih murah dan efektif<br><br></div><div>Berikut ini adalah jenis jenis digital marketing :<br><br></div><div><strong><br>1. Website<br></strong><br></div><div>Website sangat berperan dalam menunjukkan profesionalisme perusahaan, membantu konsumen mengetahui bisnis Anda, promosi yang hemat dan media bisnis yang mudah.<br><br></div><div><strong><br>2. Social Media Marketing<br></strong><br></div><div>Edarkan platform di media sosial seperti Facebook, Instagram, WhatsApp dan Twitter karena dapat dilakukan dengan biaya yang minim bahkan gratis.<br><br></div><div><strong><br>3. Video Marketing<br></strong><br></div><div>Dengan cara ini, Anda dapat langsung menjelaskan tentang bisnis Anda, menjelaskan produk dan cara menggunakannya serta menampilkan testimonial pelanggan.<br><br></div><div><strong><br>Cara memulai Digital Marketing<br></strong><br></div><div>1. Siapkan alat yang digunakan untuk melakukan pemasarannya. Beberapa alat bantu yang dapat digunakan dalam digital marketing seperti: website, akun media sosial, identitas brand dan produk, unggahan blog, jejak online (review, feedback dari pelanggan,dan lain-lain).<br><br></div><div>2. Siapkan konten yang menarik perhatian dan shareable. Konten dapat berupa foto, video, tulisan atau yang lainnya.<br><br></div><div>3. Anda dapat memulai menggunggah dan selanjutnya evaluasi setiap unggahan di setiap social media yang dimiliki.<br><br></div><div>4. Masuk dan bergabunglah dengan forum marketplace public. Usahakan profil bisnis Anda bagus, karena akan berpengaruh terhadap citra brand.<br><br></div><div><br></div><div><br></div><div>Itulah beberapa tips dan contoh tentang judul Digital Marketing yang penting untuk Anda perhatikan, semoga informasi ini bermanfaat bagi Anda yang mungkin minat di bidang Digital Marketing.<br><br></div>', NULL, '2023-05-27 05:30:05', '2023-05-27 05:30:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ilham Kurniawan', 'ilham123', 'ilham21@gmail.com', NULL, '$2y$10$QkIpzNEjZuiS69tyb6jpYOaKn3qqMhskyDy8cqCz9ueewc5dC1jQ2', NULL, '2023-05-26 23:56:54', '2023-05-26 23:56:54'),
(2, 'Admin PTI', 'adminpti', 'pti.bemfiktiug@gmail.com', NULL, '$2y$10$V.2BReoOnYTXlNb0rRUjuOizfqFBaZEG/0Wcs/DGgyJFakb/S9u/e', NULL, '2023-05-26 23:56:55', '2023-05-26 23:56:55'),
(3, 'Darmaji Kurniawan', 'gara52', 'oktaviani.ajeng@example.net', '2023-05-26 23:56:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TTYVFywCrB', '2023-05-26 23:56:55', '2023-05-26 23:56:55'),
(4, 'Cakrabuana Laksana Hidayat S.E.', 'ratna.simanjuntak', 'perkasa.nababan@example.net', '2023-05-26 23:56:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TOPc0xGYCd', '2023-05-26 23:56:55', '2023-05-26 23:56:55'),
(5, 'Rahman Cakrabuana Winarno S.Kom', 'kardianto', 'elma60@example.net', '2023-05-26 23:56:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TBj3LRObP3', '2023-05-26 23:56:55', '2023-05-26 23:56:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
