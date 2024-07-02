-- Adminer 4.8.1-dev MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'midtrans',
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` int NOT NULL DEFAULT '0',
  `item_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bookings_item_id_foreign` (`item_id`),
  KEY `bookings_user_id_foreign` (`user_id`),
  CONSTRAINT `bookings_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `bookings` (`id`, `name`, `start_date`, `end_date`, `address`, `city`, `zip`, `status`, `payment_method`, `payment_status`, `payment_url`, `total_price`, `item_id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Andyka P',	'2023-09-18',	'2023-09-18',	'Jl. UPNVJ',	'Jakarta Selatan',	'105554',	'done',	'midtrans',	'success',	NULL,	0,	1,	1,	NULL,	'2023-09-18 02:09:27',	'2023-09-18 00:26:17'),
(2,	'Fernanda Andyka Putra',	'2023-09-21',	'2023-09-23',	'Jl. UPN',	'Tangerang',	'12345',	'pending',	'midtrans',	'pending',	NULL,	1870000,	1,	1,	NULL,	'2023-09-20 19:17:24',	'2023-09-20 19:17:24'),
(3,	'Fernanda Andyka Putra',	'2023-09-21',	'2023-09-23',	'Jl. UPN',	'Tangerang',	'12345',	'pending',	'midtrans',	'pending',	NULL,	1870000,	1,	1,	NULL,	'2023-09-20 19:40:51',	'2023-09-20 19:40:51'),
(4,	'Tes name',	'2023-09-22',	'2023-09-23',	'Jl Tes jalan',	'Tangerang',	'12222',	'pending',	'midtrans',	'pending',	NULL,	935000,	1,	1,	NULL,	'2023-09-20 19:48:38',	'2023-09-20 19:48:38'),
(5,	'Tes name',	'2023-09-22',	'2023-09-23',	'Jl Tes jalan',	'Tangerang',	'12222',	'pending',	'midtrans',	'pending',	NULL,	935000,	1,	1,	NULL,	'2023-09-20 19:49:09',	'2023-09-20 19:49:09'),
(6,	'abc',	'2023-09-21',	'2023-09-23',	'jln. abc',	'Tangerang',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/8fb46d41-e7bf-4ad3-83b9-7b024c79f869',	2090000,	3,	1,	'2023-09-21 23:49:45',	'2023-09-20 20:00:01',	'2023-09-21 23:49:45'),
(7,	'Andyka P',	'2023-09-21',	'2023-09-23',	'Jl Tes jalan',	'Jakarta Barat',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/c28205dd-47c9-4d75-9af9-4d259b878b38',	2090000,	3,	1,	'2023-09-21 23:49:54',	'2023-09-20 21:28:43',	'2023-09-21 23:49:54'),
(8,	'Ferdyra',	'2023-09-22',	'2023-09-25',	'Jalan',	'Tangerang',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/d18e8463-c132-475f-b9fc-87fde5b8ddcf',	66000000,	6,	4,	NULL,	'2023-09-21 23:44:16',	'2023-09-21 23:44:23'),
(9,	'Ferdyra',	'2023-09-26',	'2023-09-28',	'Jl. UPN',	'Tangerang',	'12345',	'pending',	'midtrans',	'success',	'https://app.sandbox.midtrans.com/snap/v3/redirection/61d7e7cb-bc42-412d-9c00-bad0c4b013b4',	44000000,	6,	4,	NULL,	'2023-09-22 01:09:29',	'2023-09-22 23:59:02'),
(10,	'Nama',	'2023-09-24',	'2023-09-25',	'Jalan',	'Tangerang',	'12345',	'pending',	'midtrans',	'pending',	NULL,	22000000,	6,	4,	NULL,	'2023-09-23 20:24:02',	'2023-09-23 20:24:02'),
(11,	'Nama',	'2023-09-24',	'2023-09-25',	'Jalan',	'Tangerang',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/0d54f494-ab11-4128-a752-b92d3d739438',	22000000,	6,	4,	NULL,	'2023-09-23 20:33:43',	'2023-09-23 20:36:47'),
(12,	'Nama',	'2023-09-24',	'2023-09-26',	'Jalan',	'Tangerang',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/0a9b624a-8c86-4e39-a4ba-8493758499e9',	44000000,	6,	4,	NULL,	'2023-09-23 20:39:13',	'2023-09-23 20:39:16'),
(13,	'Andyka P',	'2023-09-24',	'2023-09-26',	'Jl. UPN',	'Tangerang',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/1928e1b7-6982-4b25-bf5d-3ac74a2be67a',	44000000,	6,	4,	NULL,	'2023-09-23 20:40:09',	'2023-09-23 20:40:11'),
(14,	'Andyka P',	'2023-09-24',	'2023-09-26',	'Jl. UPN',	'Tangerang',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/205609bd-171f-4c53-b221-734d0492f0de',	44000000,	6,	4,	NULL,	'2023-09-23 20:41:28',	'2023-09-23 20:41:35'),
(15,	'Andyka P',	'2023-09-24',	'2023-09-25',	'Jl. UPN',	'Tangerang',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/a63101bf-a7ad-4dc2-ad4c-eb10b3c5393c',	22000000,	6,	4,	NULL,	'2023-09-23 20:47:30',	'2023-09-23 20:47:33'),
(16,	'tes 1',	'2023-09-25',	'2023-09-27',	'Jalan',	'Jakarta Barat',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/9146cfd4-bc49-4357-a4d8-835c13174c69',	5500000,	4,	4,	NULL,	'2023-09-24 18:16:52',	'2023-09-24 18:16:56'),
(17,	'tes 2',	'2023-09-25',	'2023-09-27',	'Jl Tes jalan',	'Jakarta Barat',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/0156dd0e-3e99-4c75-bf11-d3aa4997076a',	1870000,	1,	4,	NULL,	'2023-09-24 18:19:39',	'2023-09-24 18:19:44'),
(18,	'tes 3',	'2023-09-25',	'2023-09-27',	'Jalan',	'Jakarta Barat',	'12345',	'pending',	'midtrans',	'success',	'https://app.sandbox.midtrans.com/snap/v3/redirection/ca499c6f-039f-45b7-ad9e-82bd46f1af5e',	2090000,	5,	4,	NULL,	'2023-09-24 18:47:54',	'2023-09-24 18:58:38'),
(19,	'tes 4',	'2023-09-25',	'2023-09-26',	'Jalan',	'Jakarta Barat',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/08ded7b4-f43a-4b9a-957e-6ca218805602',	1045000,	5,	4,	NULL,	'2023-09-24 18:59:55',	'2023-09-24 18:59:57'),
(20,	'Andyka P',	'2023-09-25',	'2023-09-27',	'Jalan',	'Tangerang',	'12345',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v3/redirection/11bfd8c8-93c3-4fa3-bed6-ea8f12dcc1ea',	33000000,	7,	4,	NULL,	'2023-09-25 09:31:00',	'2023-09-25 09:31:06'),
(21,	'Andyka P',	'2024-01-23',	'2024-01-24',	'Jl. UPN',	'Tangerang',	'10555',	'pending',	'midtrans',	'pending',	NULL,	1045000,	5,	1,	NULL,	'2024-01-22 10:23:43',	'2024-01-22 10:23:43'),
(22,	'Fernanda Andyka Putra',	'2024-06-30',	'2024-07-01',	'Jl. UPN',	'Tangerang',	'10555',	'pending',	'midtrans',	'pending',	'https://app.sandbox.midtrans.com/snap/v4/redirection/91871218-530e-49a4-b884-dd49d85dedbe',	22000000,	6,	4,	NULL,	'2024-06-30 07:22:46',	'2024-06-30 07:22:52');

DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brands_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `brands` (`id`, `name`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Wuling',	'wuling-ui8y6',	NULL,	NULL,	'2023-09-17 07:21:05'),
(2,	'Xenia',	'xenia-f4c39',	'2023-09-16 02:45:58',	'2023-09-16 02:31:08',	'2023-09-16 02:45:58'),
(3,	'Tesla',	'tesla-hgar3',	NULL,	'2023-09-16 02:45:27',	'2023-09-17 07:21:15'),
(4,	'Hyundai',	'hyundai-24ogv',	NULL,	'2023-09-17 08:04:23',	'2023-09-17 08:04:23'),
(5,	'Suzuki',	'suzuki-g4o0j',	NULL,	'2023-09-21 06:36:39',	'2023-09-21 06:36:39');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` bigint unsigned NOT NULL,
  `brand_id` bigint unsigned NOT NULL,
  `photos` text COLLATE utf8mb4_unicode_ci,
  `features` text COLLATE utf8mb4_unicode_ci,
  `price` int NOT NULL DEFAULT '0',
  `star` double NOT NULL DEFAULT '0',
  `review` int NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `items_slug_unique` (`slug`),
  KEY `items_type_id_foreign` (`type_id`),
  KEY `items_brand_id_foreign` (`brand_id`),
  CONSTRAINT `items_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  CONSTRAINT `items_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `items` (`id`, `name`, `slug`, `type_id`, `brand_id`, `photos`, `features`, `price`, `star`, `review`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Wuling Air EV',	'wuling-air-ev-zdjzx',	1,	1,	'\"[\\\"assets\\\\\\/item\\\\\\/j3Z4krbri5YWAIn511JMPu3yYPeP4LdxFlNXxkXa.webp\\\",\\\"assets\\\\\\/item\\\\\\/fBXTlueGSSfngc3D1WZKOJm1ckeYPFrhvDzDsiPz.webp\\\",\\\"assets\\\\\\/item\\\\\\/UORGHpNMEZye7TMDcgltiYmPDEOlGOIVYSjusaiK.webp\\\",\\\"assets\\\\\\/item\\\\\\/rTByLa44WAsNThokpoGynNyctlr9W3hiRfMxNQ1k.png\\\"]\"',	'Baterai Tahan Lama, Body Slim, Muat 4 Orang, Max Speed 150km/jam, Max Range 200km, LED Lamp, Automatic, 9.2 kWh cc, Electric Fuel',	850000,	4.8,	120,	NULL,	'2023-09-17 07:23:18',	'2023-09-25 07:46:52'),
(3,	'Wuling Alvez',	'wuling-alvez-camkz',	2,	4,	'\"[\\\"assets\\\\\\/item\\\\\\/f6PWqWDFEkcvLUpyU0e9bbVhrWG5ZVdlcJOWbXJD.webp\\\",\\\"assets\\\\\\/item\\\\\\/CdppI6N7cKeEhFOyMZDu0cDNFfpe2lUxBeEWx5aO.webp\\\",\\\"assets\\\\\\/item\\\\\\/d2OA3vRsxH1Jd9OtahXu7WQOJjWYH9OevmNS14di.webp\\\"]\"',	'Baterai Tahan Lama, Body Lebih Besar, Muat 4 Orang',	950000,	4.9,	100,	'2023-09-21 06:36:26',	'2023-09-17 07:55:37',	'2023-09-21 06:36:26'),
(4,	'Hyundai Kona',	'hyundai-kona-wojfi',	2,	4,	'\"[\\\"assets\\\\\\/item\\\\\\/AXz7NlTHTv5kmcBFUjniIcFkFVjpsHbExuMgAmqK.png\\\",\\\"assets\\\\\\/item\\\\\\/zTGetz3ECJ9wJ6X7osblRFeSMJzfBVKWUX0iXhQ5.webp\\\",\\\"assets\\\\\\/item\\\\\\/bC7JZVnREdjl3LiwCjoF1fmZmKqcnxfjYX4Na8rn.webp\\\",\\\"assets\\\\\\/item\\\\\\/Xrjc9lAdypWLwva0kJoLC5j7XnYUeOeK2T55JH3F.webp\\\"]\"',	'Fast Charging, Muat 4 Orang, LED Lamp, Tenaga 134 hp, Jarak Tempuh 305 km, Torsi 395 Nm, Kapasitas Tempat Duduk 5 Kursi, Kapasitas Baterai 39.2 kWh, Estimated Fast Charging Time 54-57 mnt',	2500000,	5,	10,	NULL,	'2023-09-17 08:06:46',	'2023-09-21 06:49:08'),
(5,	'Suzuki XL7',	'suzuki-xl7-rmyty',	2,	5,	'\"[\\\"assets\\\\\\/item\\\\\\/ii85WLiG2VLvs6g7goOAutBPhzQMNSgx9Gr3WKhc.png\\\",\\\"assets\\\\\\/item\\\\\\/ChcUlcqPIpBOiBBwPna3XajWl396v05G9Gcs9UU6.webp\\\",\\\"assets\\\\\\/item\\\\\\/swMEdr1KAl8hINWSw6NrIGb4j3nAM0XpXLFOIhWK.webp\\\",\\\"assets\\\\\\/item\\\\\\/IbiJLVSWMWYiYm0DswpMdWrBF1S4s1cTkMUDmZcx.webp\\\"]\"',	'Baterai Tahan Lama, Body Lebih Besar, Muat 7 Orang, Mesin 1462 cc, Transmisi Automatic, Tenaga 103 hp, LED Lamp, Adjustable Seats, Anti Theft Device',	950000,	4.9,	100,	NULL,	'2023-09-21 06:43:08',	'2023-09-21 06:43:08'),
(6,	'Tesla Model S',	'tesla-model-s-qhzy7',	3,	3,	'\"[\\\"assets\\\\\\/item\\\\\\/RYwLYXn1wsWaFX8PF8qkePyP663bjvPvVTNyw5IJ.png\\\",\\\"assets\\\\\\/item\\\\\\/cOnJgjj1UPzJl8RcK2o2pSokkUUMyxCwEB28yda8.webp\\\",\\\"assets\\\\\\/item\\\\\\/R4tfKEM0ZCHgd9xADs5KQDGbb3fVd0zgXW0nTVDi.webp\\\",\\\"assets\\\\\\/item\\\\\\/Zr0PleRyyciuyggUIlfPDzbxRQzoxuA4qweeT7J8.webp\\\"]\"',	'Jarak Tempuh 647 km, Tenaga Penggerak Listrik 670 hp, Kecepatan maksimum 249 kmph, Akselerasi 3.2 s, Kapasitas Tempat Duduk 5 Kursi, Jenis Transmisi Otomatis, Kapasitas Baterai 100 kWh, Estimated Fast Charging Time 20 min, Voltase Baterai 400 V',	20000000,	5,	10,	NULL,	'2023-09-21 06:56:59',	'2023-09-21 06:56:59'),
(7,	'Tesla Model 3',	'tesla-model-3-nzmi1',	3,	3,	'\"[\\\"assets\\\\\\/item\\\\\\/GxLgSKAlPYzVX4MvACG4oLbsmjxak8xcth31qybV.png\\\",\\\"assets\\\\\\/item\\\\\\/gW7iCF9Cjhk1IbuJoFFTSuu9gD56kB9rvwN9WZL7.webp\\\",\\\"assets\\\\\\/item\\\\\\/zEA3DSw0ppTLBesNovaeKe5GaEg2qZl8yjiQNcee.webp\\\",\\\"assets\\\\\\/item\\\\\\/mlbuse1Rkii20yhx1dEdyP5fkQmUuzXuurGoe5rw.webp\\\"]\"',	'Jarak Tempuh 550 km, Tenaga Penggerak Listrik 670 hp, Kecepatan maksimum 249 kmph, Akselerasi 3.0 s, Kapasitas Tempat Duduk 4 Kursi, Jenis Transmisi Otomatis, Kapasitas Baterai 100 kWh, Estimated Fast Charging Time 20 min, Voltase Baterai 350 V',	15000000,	5,	89,	NULL,	'2023-09-21 08:06:00',	'2023-09-21 08:06:00'),
(8,	'Hyundai Ioniq 5',	'hyundai-ioniq-5-gi94z',	2,	4,	'\"[\\\"assets\\\\\\/item\\\\\\/6n3GSBnp33QJhRbJmyBgkXUEtogGNSfeam2tZLlc.png\\\",\\\"assets\\\\\\/item\\\\\\/ypaEfjO7cINCGNFtHKiBLUvU52LapViJHfIl56vn.webp\\\",\\\"assets\\\\\\/item\\\\\\/VBUQiO1aRMumJfUgklYWOfq7x3OANpCPZeE8r2ft.webp\\\",\\\"assets\\\\\\/item\\\\\\/2MGlR7xdZqrfA4zbHofOzuzlxRrDZcY7DUJ5eOgR.webp\\\"]\"',	'Torsi 350 Nm, Tenaga 214hp, Jarak Tempuh 451km, Kapasitas Tempat Duduk 5 Kursi, Kapasitas Baterai 73 kWh, AC charging (0-100%) 4 Hr 59 Min, Jenis Transmisi Otomatis, Emission 0 g/km, Tipe Baterai Lithium-ion',	2000000,	4.6,	20,	NULL,	'2023-09-21 08:15:24',	'2023-09-21 08:15:24');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_reset_tokens_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2023_08_13_133723_create_sessions_table',	1),
(7,	'2023_09_02_142518_create_brands_table',	2),
(8,	'2023_09_02_145355_create_types_table',	2),
(9,	'2023_09_02_145552_create_items_table',	2),
(10,	'2023_09_02_152131_create_bookings_table',	2),
(12,	'2023_09_03_013803_add_roles_and_phone_field_to_users_table',	3);

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('user@gmail.com',	'$2y$10$.fN7.FPgx5U6xW09fsxHqujBZ7yyuZN7jngC5fyrNbloTpYYLU7jy',	'2023-09-23 03:42:00');

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('19vj4acBn8OdlNGDnRVRYu8pTup5XyRwPALXnffy',	NULL,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakJzT3dyZjllWmhUNkpiVVJWWnVZT2pXaUdPbGk5Z1dLM2N1N05FRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXRhaWwvd3VsaW5nLWFpci1ldi16ZGp6eCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1705969671),
('5PDWWXNg3G68CbH88VED2w0qU59uGj2VmLYmJWaU',	4,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',	'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMWQ2bDNMbUZlZ2ZMMjUyVlBhZVJQUFlnVHZqZVdVNXJ2ZENSMTA1ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wYXltZW50LzIyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRBNTNtNkFrYnJEWUJHTk95Y3JYdmRPOUpwUy9SdFZIOHp2R25JMEQvUXNhS2N5SmtoUktTcSI7fQ==',	1719757372),
('bRg6OdYmaMcsK0GYikcpTfdX8O9iiTgybc2N3Ocs',	NULL,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU1N6UFR2eU4zQkVraEtqcTBEOWp3TlRUdUJLY3IwdnZuaEVBRXB6byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly92cm9tLWxpdmUudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1695696408),
('iFfrOU0zw1OzFaw3AfPytZ1eP7wiws0pjjTcPO1f',	NULL,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXE2RUs4TG5NSlpVMXJkNkVJVTJKREdMbWZ4TWFsN2NhQ01GN0NVZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1708653589),
('LauBBGe6KDk8C5NSbyIkUENFgT2x8r33Y30WR8aw',	4,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',	'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiN0U5Z0FoUWlwOU9DYVl3SER2TVlQOVZFRUszZWxqUzZyRklKc0xjQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly92cm9tLWxpdmUudGVzdC9wYXltZW50LzIwIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==',	1695659466),
('lrI2FmoUMUI18QsSb6QaZ6ku3uiktDvVpBDlsWup',	1,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',	'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUHF6TEFOTGNPVzNuY1poVmZ3UWdPV0tjR1N4RDRVUDRadVFTUE9PUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXRhaWwvaHl1bmRhaS1rb25hLXdvamZpIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',	1705946362),
('pg1g2fAsJi3NjIcrsdmVRpvVoMseiJDCTLNrdmrE',	NULL,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoicTZwUUpnSVFMOUF5cTBySXdBVUFRam04elpwMkE4YUhlUzU3cDdnMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1708695766),
('thxoPwAOCTfnqvH1sFrsPXkfUNasqAl31ugWLIWl',	NULL,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYndEbDB2bE96WTV5MFpPazkwaEFUNThXYm5YVTBRSXBtTzBnWEloYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly92cm9tLWxpdmUudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1697960930),
('wrWhEjn2mxotQv0O0Ocjz1ubX6ohISlG9Axc9w7z',	NULL,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWtZT2NKaGhHMzhJMFlTelVvdXdxNGFENFpYWW5rd1NVZ2dPMTFsMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly92cm9tLWxpdmUudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1708434468);

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `types_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `types` (`id`, `name`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Standar Range Car',	'standar-range-car-b97uz',	NULL,	'2023-09-16 03:08:34',	'2023-09-19 05:39:38'),
(2,	'Long Range Car',	'long-range-car-6kwlf',	NULL,	'2023-09-16 03:19:26',	'2023-09-19 05:39:52'),
(3,	'Sport Car',	'sport-car-dcdzc',	NULL,	'2023-09-19 05:38:49',	'2023-09-19 05:38:49');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `roles`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1,	'Andyka',	NULL,	'ferdyra640@gmail.com',	NULL,	'$2y$10$T/Pp5McBsJsSoaio1pSSRurqwwML0aGv5aibdwc6gY59nakDSs6Ky',	'ADMIN',	NULL,	NULL,	NULL,	'9L1Vh8BNPYAUbUdxaKXPCSUZMhUeS6ByAkfEIuyJ75kKvrYMq5w8sojv4tak',	NULL,	NULL,	'2023-09-02 20:41:56',	'2023-09-02 20:41:56'),
(2,	'Admin',	NULL,	'admin@example.com',	'2023-09-18 02:43:39',	'11111111',	'USER',	NULL,	NULL,	NULL,	'aHICwBtwXm',	NULL,	NULL,	'2023-09-18 02:43:40',	'2023-09-18 02:43:40'),
(4,	'Ferdyra',	NULL,	'user@gmail.com',	NULL,	'$2y$10$A53m6AkbrDYBGNOycrXvdO9JpS/RtVH8zvGnI0D/QsaKcyJkhRKSq',	'USER',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-09-21 23:43:44',	'2023-09-21 23:43:44');

-- 2024-07-02 12:53:40
