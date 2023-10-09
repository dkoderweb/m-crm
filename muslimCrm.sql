-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2023 at 12:14 PM
-- Server version: 8.0.34-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muslimCrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint UNSIGNED NOT NULL,
  `propertie_id` bigint UNSIGNED DEFAULT NULL,
  `amenities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `near_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_distance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `propertie_id`, `amenities`, `near_by`, `property_distance`, `created_at`, `updated_at`) VALUES
(1, 1, 'gymnasium', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(2, 1, 'jogging/cycle track', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(3, 1, 'indoor games', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(4, 1, 'clubhouse', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(5, 1, 'garden', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(6, 1, 'water supply', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(7, 1, 'swimming pool', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(8, 1, '24/7 security', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(9, 1, 'visitors parking', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(10, 1, 'kids play area', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(11, 1, 'parking', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(12, 1, 'vishal house', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(13, 1, 'supermarket/94km', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(14, 1, 'school/40km', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(15, 1, 'metro/88km', NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(16, 1, 'railway station/40km', NULL, NULL, '2023-10-06 05:41:25', '2023-10-06 05:41:25'),
(17, 1, 'Dharmesh City /10km', NULL, NULL, '2023-10-06 05:41:25', '2023-10-06 05:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_04_114022_create_properties_table', 2),
(6, '2023_10_04_114054_create_units_table', 2),
(7, '2023_10_04_114119_create_amenities_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `iWantToSellRadio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_units` int DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taluka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` int DEFAULT NULL,
  `project_building_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `developer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reraregistered` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rera_end_date` date DEFAULT NULL,
  `min_brokerage` int DEFAULT NULL,
  `max_brokerage` int DEFAULT NULL,
  `mobile_no_1` int DEFAULT NULL,
  `contact_person_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no_2` int DEFAULT NULL,
  `contact_person_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landline_number` int DEFAULT NULL,
  `tick_if_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_name_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_mobile_no_1` int DEFAULT NULL,
  `owner_mobile_no_2` int DEFAULT NULL,
  `owner_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_tick_if_wp_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_tick_if_wp_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_taluka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_note_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_note_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lock_or_unlock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyerStatusRadio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` int DEFAULT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loan_req` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ready_for_possesion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `future_date` date DEFAULT NULL,
  `monthly_income` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `user_id`, `iWantToSellRadio`, `no_of_units`, `country`, `state`, `district`, `taluka`, `city`, `landmark`, `pin_code`, `project_building_name`, `developer_name`, `reraregistered`, `rera_end_date`, `min_brokerage`, `max_brokerage`, `mobile_no_1`, `contact_person_name_1`, `mobile_no_2`, `contact_person_name_2`, `landline_number`, `tick_if_whatsapp`, `contact_person_name_3`, `project_email`, `project_website`, `first_name`, `middle_name`, `last_name`, `owner_mobile_no_1`, `owner_mobile_no_2`, `owner_email`, `owner_tick_if_wp_1`, `owner_tick_if_wp_2`, `address_country`, `address_state`, `address_district`, `address_taluka`, `address_city`, `address_line_1`, `address_line_2`, `address_landmark`, `address_note_1`, `address_note_2`, `lock_or_unlock`, `form_type`, `full_name`, `buyerStatusRadio`, `budget`, `purpose`, `loan_req`, `ready_for_possesion`, `future_date`, `monthly_income`, `profession`, `created_at`, `updated_at`) VALUES
(1, 1, 'builder', 97, 'Expedita necessitati', 'Eos exercitationem', 'Ea quod officiis cor', 'Incididunt modi iste', 'Fugiat omnis qui et', 'Consequatur incidunt', 49, 'Grady Herrera', 'Velma Massey', 'rera registered', NULL, 69, 29, 36, 'Leandra Kane', 6, 'Maisie Landry', 150, 'Tick if this is a whatsapp no.', 'TaShya Chen', 'xapymofyd@mailinator.com', 'https://www.miwatuleqeh.com.au', 'Lev', 'Fletcher Welch', 'Dudley', 42, 76, 'guqo@mailinator.com', 'yes', 'yes', 'Sit aut ea rerum qu', 'Occaecat corrupti d', 'Cum officia amet no', 'Quo irure non in ali', 'Elit tempor magna q', '956 First Freeway', 'Cupiditate ut non ei', 'Corporis nulla offic', 'Voluptas nisi pariat', 'Deserunt maiores dol', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(2, 1, 'resale_property', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Judith Rodriguez', 'Rodger', 'Warf', NULL, NULL, 'j.e.dukes@aol.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-06 05:43:44', '2023-10-06 05:43:44'),
(3, 1, 'resale_property', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Judith Rodriguez', 'Rodger', 'Warf', NULL, NULL, 'j.e.dukes@aol.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-06 05:44:11', '2023-10-06 05:44:11'),
(4, 1, 'resale_property', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Judith Rodriguez', 'Rodger', 'Warf', NULL, NULL, 'j.e.dukes@aol.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-06 05:44:17', '2023-10-06 05:44:17'),
(5, 1, 'resale_property', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Judith Rodriguez', 'Rodger', 'Warf', NULL, NULL, 'j.e.dukes@aol.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-08 22:43:10', '2023-10-08 22:43:10'),
(6, 1, 'resale_property', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Judith Rodriguez', 'Rodger', 'Warf', NULL, NULL, 'j.e.dukes@aol.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-08 22:43:18', '2023-10-08 22:43:18'),
(7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'seller', 'Dieter Brady', 'hot', 963, 'Other', 'no', 'no', '2000-12-18', '599', 'government employee', '2023-10-08 23:17:47', '2023-10-08 23:17:47'),
(8, 1, 'resale_property', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Judith Rodriguez', 'Rodger', 'Warf', NULL, NULL, 'j.e.dukes@aol.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'seller', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-09 00:46:42', '2023-10-09 00:46:42'),
(9, 1, 'resale_property', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Judith Rodriguez', 'Rodger', 'Warf', NULL, NULL, 'j.e.dukes@aol.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'seller', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-09 00:48:45', '2023-10-09 00:48:45'),
(10, 1, 'resale_property', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Judith Rodriguez', 'Rodger', 'Warf', NULL, NULL, 'j.e.dukes@aol.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'seller', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-09 00:49:24', '2023-10-09 00:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint UNSIGNED NOT NULL,
  `propertie_id` bigint UNSIGNED DEFAULT NULL,
  `residentialFlatBunglowRadio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commercialSpaceRadio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plotandRadio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `propertyDetailsRadio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_no_unit` int DEFAULT NULL,
  `min_carpet_area` int DEFAULT NULL,
  `max_carpet_area` int DEFAULT NULL,
  `saleable_area` int DEFAULT NULL,
  `rate_per` int DEFAULT NULL,
  `price_per_unit` int DEFAULT NULL,
  `stamp_duty_form` int DEFAULT NULL,
  `stamp_duty_to` int DEFAULT NULL,
  `registration_form` int DEFAULT NULL,
  `registration_to` int DEFAULT NULL,
  `gst_form` int DEFAULT NULL,
  `gst_to` int DEFAULT NULL,
  `infra_structure_development_form` int DEFAULT NULL,
  `infra_structure_development_to` int DEFAULT NULL,
  `price_per_unit_form` int DEFAULT NULL,
  `price_per_unit_to` int DEFAULT NULL,
  `ready_for_possesion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `future_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `propertie_id`, `residentialFlatBunglowRadio`, `commercialSpaceRadio`, `plotandRadio`, `propertyDetailsRadio`, `total_no_unit`, `min_carpet_area`, `max_carpet_area`, `saleable_area`, `rate_per`, `price_per_unit`, `stamp_duty_form`, `stamp_duty_to`, `registration_form`, `registration_to`, `gst_form`, `gst_to`, `infra_structure_development_form`, `infra_structure_development_to`, `price_per_unit_form`, `price_per_unit_to`, `ready_for_possesion`, `future_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'row house', 'shop', 'farm land', '3 BHK', 79, 25, 57, 38, 24, 253, 76, 25, 78, 6, 75, 55, 48, 64, 347, 822, 'no', '2008-11-15', '2023-10-06 05:41:24', '2023-10-06 05:41:24'),
(2, 1, 'bunglow', NULL, NULL, '1 BHK', 72, 99, 92, 84, 34, 669, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', '2000-12-18', '2023-10-08 23:17:47', '2023-10-08 23:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dharmesh', 'dc@gmail.com', NULL, '$2y$10$X3lALp4ew19jE6mAp8RRH.pCZm3ojgrny8vkB5PWQR1Sg6M0w0w.6', NULL, '2023-10-04 01:04:01', '2023-10-04 01:04:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
