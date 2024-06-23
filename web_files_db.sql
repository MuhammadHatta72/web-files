-- -------------------------------------------------------------
-- TablePlus 6.0.8(562)
--
-- https://tableplus.com/
--
-- Database: web_files_db
-- Generation Time: 2024-06-23 19:55:24.7300
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_nip_unique` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `arsip_advances`;
CREATE TABLE `arsip_advances` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `arsip_expen_reports`;
CREATE TABLE `arsip_expen_reports` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `arsip_travel`;
CREATE TABLE `arsip_travel` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id_failed_job` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_failed_job`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `travel_authorizations`;
CREATE TABLE `travel_authorizations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_ta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departement_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_price_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departement_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_price_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_name_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departement_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_price_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_name_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departement_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_price_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aircraft_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_airfare` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkin_date_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_date_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_price_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkin_date_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_date_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_price_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_admin` bigint unsigned DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_id_admin_foreign` (`id_admin`),
  CONSTRAINT `users_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admins` (`id`, `nama`, `nip`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '123456789', '2024-06-23 12:54:28', '2024-06-23 12:54:28');

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000003_create_admins_table', 1),
(2, '2014_10_12_010000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_11_25_081854_create_arsip_travel_table', 1),
(8, '2023_11_25_081959_create_arsip_expen_reports_table', 1),
(9, '2023_11_25_082259_create_arsip_advances_table', 1),
(10, '2024_02_12_024821_create_travel_authorizations_table', 1);

INSERT INTO `users` (`id`, `id_admin`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin@gmail.com', '2024-06-23 12:54:28', '$2y$10$nqLHv5rn44dQD0WItnZOYOPAbll3hxIp1.Lr4.5/QiJ9bpv8L.qXy', NULL, NULL, NULL, 'admin', NULL, '2024-06-23 12:54:28', '2024-06-23 12:54:28');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;