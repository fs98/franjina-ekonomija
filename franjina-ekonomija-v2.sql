-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 12:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `franjina-ekonomija-v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `directory_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `directory_id`, `image`, `image_description`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'h0sqekcadfDYdyZuF04RuOnUb7ldCbd1E4ZQRUQQzTxrGLQ4tLQUb7b3yAylKLlx', 'hiia1uzGbQgmobkz1nNIOLo62ekPeML4ESjMbt3W-2021-04-13-12-00-33.svg', 'besplatnost', 'BESPLATNOST', 'upućuje na besprijekornost neke usluge ili dobra kada ih oni imaju isplate se izuzimaju bez da korisnik plaća naknadu.', '2021-04-13 09:48:09', '2021-04-13 10:01:01'),
(2, '8AguW8Yi8U1ZJgpna5J0MXcoROPk4S9XAR4wpDlNFHhKfxHcHjQkiE2MYEJtbR6h', 'yJ35ETVHITAm6sEBxiFEvMX0tjyEej67qn8sDapS-2021-04-13-11-49-23.svg', 'solidarnost', 'SOLIDARNOST', 'je dobrovoljna socijalna kohezija, spremnost da se pomogne i dodijeli međusobna podrška unutar grupe.', '2021-04-13 09:49:23', '2021-04-13 10:01:08'),
(3, 'sfiN3bPtx5JCnQdg3J9ReRsDJTqMRjGb6wn3XxXWMxGnwMdBXHZbdgMhHX6N3Q9Z', '6AfEHfYejoFbMHQ1vowt18wdw4VszI1yktd3JkPb-2021-04-13-11-49-43.svg', 'ekologija', 'EKOLOGIJA', 'znanost koja proučava odnose među živim organizmima, kao i njihov utjecaj na okoliš u kojem obitavaju, te utjecaj tog okoliša na njih.', '2021-04-13 09:49:43', '2021-04-13 10:01:15'),
(4, 'fMfnzvMMrNBUkAMNU3gwKu400eqzs3shTh87Me0Jam3TT494XITlaSAI6WmoAagN', 'XYPmB7iiMTAcFAB6WKQ8JvWcb1Fbq3hXSo451EIa-2021-04-13-11-50-11.svg', 'cjelozivotno ucenje', 'CJELOŽIVOTNO UČENJE', 'definira se kao aktivnost učenja tijekom cijelog života s ciljem unapređenja znanja, vještina i sposobnosti unutar osobne, društvene i poslovne perspektive.', '2021-04-13 09:50:11', '2021-04-13 10:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `bloggers`
--

CREATE TABLE `bloggers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `directory_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `directory_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `start` time DEFAULT NULL,
  `end` time DEFAULT NULL,
  `zoom_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `directory_id`, `cover`, `cover_image_description`, `title`, `date`, `start`, `end`, `zoom_link`, `description`, `created_at`, `updated_at`) VALUES
(21, 'cn2OUd2VhTkMHtzBREKezjBolDZIa68TQ4xC5oWMtNRiCUfQDpmNf2hF7kPmCxpy', 'jCGUGg4WVTk4geC91cggvKJlXUHXPdo8kAwMrim1-2021-05-01-06-36-36.jpg', NULL, 'Molitveni susret', '2021-05-20', '19:30:00', NULL, NULL, NULL, '2021-04-08 04:29:31', '2021-05-01 04:36:36'),
(24, '4bq2Fm0NrnUAn9EyorULyvYBK92Pp0NZQQRCWonjv9qdD4WaM1prAePH0xUZM0Vt', 'DRM82ax5yEz7K9B5Xit1E2cFbZFUq9AmPiFJ7cmk-2021-04-14-12-41-45.jpg', NULL, 'Webinar - Franjina ekonomija i zajednicka dobra', '2021-04-22', '17:30:00', '18:45:00', NULL, 'Za sudjelovanje na prvom webinaru Franjine ekonomije na hrvatskom jeziku, potrebno se je prijaviti na poveznici https://bit.ly/fe-webinar1', '2021-04-14 10:41:45', '2021-04-14 10:43:02'),
(25, 'DWzBcrUzqyhGj50fwrWhlyo5go6X7pv9N7M9HoJ3zj7f4PI0Pdly3cJbC2W8OksR', 'rRVlPC6m4BZJAe4SymEcbcbrZccBFyNzuJBFakID-2021-05-01-06-42-34.jpg', NULL, 'Informativni susret', '2021-05-06', '19:30:00', NULL, NULL, NULL, '2021-05-01 04:42:34', '2021-05-01 04:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `gdpr`
--

CREATE TABLE `gdpr` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gdpr`
--

INSERT INTO `gdpr` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p class=\"gdpr-text text-left\" style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 14.4px;\">Pokret Franjina Ekonomija Hrvatska (pokret) prikuplja osobne podatke u slijedeće svrhe:</p><ul style=\"color: rgb(33, 37, 41); font-size: 14.4px;\"><li>Informiranje pojedinca o aktivnostima pokreta</li><li>Odgovaranje na upit pojedinca</li><li>Komunikaciju sa sudionikom određene aktivnosti koju provodi pokret</li></ul><span style=\"color: rgb(33, 37, 41); font-size: 14.4px;\">Voditelj obrade podataka je Udruga za ekonomiju zajedništva,&nbsp;</span><a href=\"https://www.google.com/maps/search/Franje+Ra%C4%8Dkog+26,+Kri%C5%BEevci,+48260+-+HR?entry=gmail&amp;source=g\" target=\"_blank\" style=\"color: rgb(187, 28, 46); background-color: rgb(255, 255, 255); font-size: 14.4px;\">Franje Račkog 26, Križevci, 48260 - HR</a>', '2021-04-13 12:36:42', '2021-04-13 11:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_25_113027_add_new_fields_to_users_table', 1),
(5, '2021_03_26_135348_create_posts_table', 1),
(6, '2021_03_28_100549_add_new_fields_to_posts_table', 1),
(7, '2021_03_28_173112_create_events_table', 1),
(8, '2021_03_28_210918_create_projects_table', 1),
(9, '2021_03_29_065715_drop_cover_image_url_column_in_posts', 1),
(10, '2021_03_29_082929_add_directory_id_column_to_posts', 1),
(11, '2021_03_29_105840_change_content_column_type_in_posts', 1),
(12, '2021_03_29_183210_add_post_description_column_in_posts', 1),
(13, '2021_03_29_202705_add_project_description_and_display_donations_columns_in_projects', 1),
(14, '2021_03_29_204813_add_column_directory_id_in_projects', 1),
(15, '2021_03_29_205401_change_donations_column_type_in_projects', 1),
(16, '2021_03_29_214408_change_investors_column_to_nullable_in_projects', 1),
(17, '2021_03_29_215140_change_donations_column_type_to_boolean_in_projects', 1),
(18, '2021_03_30_101000_add_image_columns_in_events', 1),
(19, '2021_03_30_133722_added_questions_table', 1),
(21, '2021_04_03_194303_create_partners_table', 2),
(22, '2021_04_04_090932_create_sliders_table', 2),
(23, '2021_04_04_091021_create_slider_images_table', 2),
(24, '2021_04_04_091504_add_column_order_in_slider_images', 2),
(25, '2021_04_06_084053_create_project_images_table', 3),
(26, '2021_04_11_100139_create_newsletter_subscriptions_table', 4),
(27, '2021_04_12_105646_add_token_in_newsletter_subscriptions', 5),
(28, '2021_04_13_081616_create_bloggers_table', 6),
(29, '2021_04_13_112107_create_activities_table', 7),
(30, '2021_04_13_123014_create_gdpr_table', 8),
(31, '2021_04_15_064110_alter_short_description_in_posts', 9),
(32, '2021_05_05_061836_add_role_to_users', 9),
(33, '2021_05_05_085000_add_user_id_to_posts', 9);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscriptions`
--

CREATE TABLE `newsletter_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscriber_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter_subscriptions`
--

INSERT INTO `newsletter_subscriptions` (`id`, `subscriber_email`, `active`, `token`, `created_at`, `updated_at`) VALUES
(19, 'barac.ana007@gmail.com', 1, 'wULmKPEl0jd3BIAwadeDd9cLCMjxPQArbRaRPChmNc0ZY5dmfGNS9JvRPxhJMaxf', '2021-04-18 17:42:58', '2021-04-18 17:42:58'),
(20, 'kafric@unipu.hr', 1, 'KmmegLp6cD4Ykt2BMYcvQXdiFjX50xxVolUvdJxthAaZE5NnZjgCIw3Yf8hktyqk', '2021-04-19 04:41:09', '2021-04-19 04:41:09'),
(21, 'paulina.calis@gmail.com', 1, 'ZXwfTj6kc0AGbitKXPXhCnsb62TbGMcEBb5BQgGYFSfMyfZHzMzJ20Yd5IeehDiH', '2021-04-20 05:05:07', '2021-04-20 05:05:07'),
(22, 'silvijafabijankovic@gmail.com', 1, 'YPectQ8jtyUbea1TCd05qdwAgBeiOzUZubr455VSCQ1VR3n5R7e2SeK1Z6DsduhE', '2021-04-21 11:39:53', '2021-04-21 11:39:53'),
(23, 'bihfokolar@gmail.com', 1, 'fHymyBQdGMS5eMQv2NaEGEI3h7vRk20vffio1EWrA7qfnKouYA6EpXHBJJRBwZF3', '2021-04-22 15:13:07', '2021-04-22 15:13:07'),
(24, 'stjepanbalen11@gmail.com', 1, 'Ogm6eSubL78OpkFW3cbPemakZnrVyuVRix2d8CzQFjKV7oz7zQNiLCjVpHCLGRr6', '2021-04-25 17:44:14', '2021-04-25 17:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `directory_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `directory_id`, `cover`, `cover_image_description`, `website_url`, `created_at`, `updated_at`) VALUES
(1, 'Astrotech d.o.o.', '16BJvPtoZNR1qwzAcPsCFTVJox9bF9kc1Rt3x8VyeeE8TfZ1n6i67QAQhELWR0Wf', 'Hi3LTJaxaaoaOD4cKeqij7pcPHC4AH9qOHFYvyuM-2021-04-16-06-41-08.png', 'Astrotech d.o.o.', 'http://www.astrotechworld.com/', '2021-04-06 04:09:34', '2021-04-16 04:41:08'),
(2, 'Hrvatsko katoličko sveučilište', 'dC4bicw4NZW5zlhs2kQqDYUTfoHr7uwwpfiLgMYrA8XMbWpKxiZZpJHHN1Dzeo0Z', 'wOxcoGYNYT68bpENp59TnrjCBquAiq5z95ii2SbH-2021-04-16-06-41-42.jpg', 'Hrvatsko katoličko sveučilište', 'http://www.unicath.hr/', '2021-04-06 04:09:59', '2021-04-16 04:41:42'),
(3, 'Djelo Marijino - Pokret fokolara', 'bNmdtfMNcoPlI0yrGxQflHsYSDmPCs4YOBwxJOOqyJDWba74mXmAxtagkQkkOZqf', 'w8Moh7KO361V12xSwGuY9dRdL2lvEhGx0ei17gk5-2021-04-16-06-41-16.jpg', 'Djelo Marijino - Pokret fokolara', 'http://fokolar.hr/', '2021-04-06 04:10:28', '2021-04-16 04:41:16'),
(4, 'Središte za cjeloživotno obrazovanje', 'a2wXBSndnDQubtYBTSWm9orqe4PvdTXh3lLENhO6kIjewGSXG03H00XhXF5MF8Yu', 'Cjoi995paYBw09TX1nAQGAb5KgI64W3SlmNyzfYA-2021-04-16-06-41-49.png', 'Središte za cjeloživotno obrazovanje', 'https://scu-bih.ba/', '2021-04-06 04:10:44', '2021-04-16 04:41:49'),
(5, 'Ekonomija zajedništva', 'Z4wi8eAV64aEclTmXkqrb3CLx20CktK9YR1gQQNt9Jquw4K2a2YTpywSGDbwGxay', 'uWB0WP7lSnb4yxHJRAB2OXgdXV0fNlwq4msLnRBA-2021-04-16-06-41-32.png', 'Ekonomija zajedništva', 'http://uez.hr/', '2021-04-06 04:11:10', '2021-04-16 04:41:32'),
(6, 'Udruga za EZ', 'Ni9mfpwFmn3uVDuqAM8Y3KdM0lfTvLxUhrsuM8YEIIj0hyulq6U62Y7Uh1X1raxF', 'YL6lBXgcRlifwstLRNs1HY6uy8cP3i9HZh4sP5Jj-2021-04-16-06-41-58.png', 'Udruga za EZ', 'http://uez.hr/', '2021-04-06 04:11:26', '2021-04-16 04:41:58'),
(7, 'Društvo za zaštitu potrošača i potrošačica', 'KMHBShzEAnTZEMgg76x9vWc6l57l2sxO7cllsARGgHoZIs55HMUtPmwqPcpAOAgs', 'wpU7SzBGeCbmhGh8EPqIOYCYheIrZZoiy4PLZFN-2021-04-16-06-41-24.jpeg', 'Društvo za zaštitu potrošača i potrošačica', 'http://potrosacica.hr/', '2021-04-06 04:11:58', '2021-04-16 04:41:24');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `directory_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `short_description`, `title_slug`, `keywords`, `directory_id`, `cover`, `cover_image_description`, `content`, `created_at`, `updated_at`, `user_id`) VALUES
(12, 'Pismo pape Franje mladim ekonomistima i poduzetnicima cijeloga svijeta', 'Događaj koji mi omogućava susresti mlade muškarce i žene koji studiraju ekonomiju i koji su zainteresirani za jednu drugačiju vrstu ekonomije.', 'pismo-pape-franje-mladim-ekonomistima-i-poduzetnicima-cijeloga-svijeta', 'poruka, papa, franjo, sveti, otac, ekonomija, poduzetnici, ekonomisti, svijet', '2j5aWpu9H125Zv0Cal52K6fJCIwjqXjxt7wNVhd3FWR0J9snesGDMKwMrIRAveRe', 'vl7923mzzZqHyyLItoNUIS7yuvI2kVzpSQymuW04-2021-04-16-10-56-00.jpg', 'Papa Franjo', '<?xml encoding=\"UTF-8\"><p><img data-filename=\"image-6.png\" style=\"width: 461.882px; float: left; height: 283.288px;\" class=\"note-float-left\" src=\"https://franjinaekonomija.hr/storage/posts//2j5aWpu9H125Zv0Cal52K6fJCIwjqXjxt7wNVhd3FWR0J9snesGDMKwMrIRAveRe/dEbtXSYPRgzucdlmKGoG9RWEONS05c0EFhEbA1DO-2021-04-20-08-37-46.png\"><font color=\"#000000\">Dragi prijatelji,</font></p><p><font color=\"#000000\">Pi&scaron;em vam kako bih vas poznao na inicijativu koja je jako bliska mom srcu. Doga&#273;aj koji mi omogu&#263;ava susresti mlade mu&scaron;karce i &#382;ene koji studiraju ekonomiju i koji su zainteresirani za jednu druga&#269;iju vrstu ekonomije: onu koja daje &#382;ivot, a ne ubija; koja uklju&#269;uje, a ne isklju&#269;uje; koja daje du&scaron;u, a ne ona koja je oduzima; koja se brine o okoli&scaron;u, a ne uni&scaron;tava ga. Doga&#273;aj koji &#263;e nam pomo&#263;i da se okupimo, me&#273;usobno se upoznamo i eventualno nam omogu&#263;iti da sklopimo pakt da bi promijenili dana&scaron;nju ekonomiju i dali du&scaron;u ekonomiji sutra&scaron;njice.&nbsp;</font></p><p><font color=\"#000000\">Da, potrebno je \"re-animirati\", o&#382;ivjeti ekonomiju! I koji je grad prigodniji za ovo od Asiza, koji ve&#263; stolje&#263;ima rje&#269;ito simbolizira bratski humanizam? Sveti Ivan Pavao II odabrao je Asiz kao ikonu kulture mira. Za mene to je tako&#273;er odgovaraju&#263;e mjesto da inspirira jednu novu ekonomiju. Tu je Franjo svukao sa sebe svaku svjetovnost kako bi odabrao Boga kao zvijezdu vodilju u svome &#382;ivotu, postaju&#263;i siroma&scaron;an sa siroma&scaron;nima, svima brat. Iz svoga odabira da prigrli siroma&scaron;tvo izgradio je viziju ekonomije koja ostaje i te kako aktualna. Ona mo&#382;e dati nadu na&scaron;oj budu&#263;nosti i dobrobit ne samo najsiroma&scaron;nijima, ve&#263; cijelom &#269;ovje&#269;anstvu. Vizija koja je tako&#273;er neophodna za sudbinu cijelog planeta, na&scaron;eg zajedni&#269;kog doma, \"na&scaron;a majka Zemlja\" kako ju zove sv.Franjo u svojoj \'\'pjesmi brata Sunca\'\'.</font></p><p><font color=\"#000000\">U enciklici Laudato Si, naglasio sam kako je danas vi&scaron;e nego ikad sve duboko povezano i da se za&scaron;tita okoli&scaron;a ne mo&#382;e odvojiti od osiguranja pravde za siroma&scaron;ne i pronala&#382;enja odgovora na strukturne probleme globalne ekonomije. Prema tome treba ispraviti modele rasta koji su&nbsp; nesposobni garantirati brigu za okoli&scaron;, otvorenost &#382;ivotu, brigu o obitelji, dru&scaron;tvenu jednakost, dostojanstvo radnika i prava budu&#263;ih generacija. Na&#382;alost, malo je tko &#269;uo apel da se prizna ozbiljnost problema i, jo&scaron; vi&scaron;e, da se postavi novi ekonomski model, plod kulture zajedni&scaron;tva koja se temelji na bratstvu i jednakosti.</font></p><p><font color=\"#000000\">Sveti Franjo Asi&scaron;ki izvrsni je primjer brige za ranjive i za integralnu ekologiju. Dolaze mi napamet rije&#269;i njemu upu&#263;ene sa Raspela u crkvici Sv.Damjana: \"Idi Franjo i obnovi moju ku&#263;u koja je, kako vidi&scaron;, sva u ru&scaron;evini\". Obnova te ku&#263;e uklju&#269;uje sve nas. Uklju&#269;uje Crkvu, dru&scaron;tvo i srce svakoga od nas. Sve se vi&scaron;e ti&#269;e okoli&scaron;a koji hitno zahtijeva zdravu ekonomiju i odr&#382;ivi razvoj koji mogu zalije&#269;iti rane i osigurati nam dostojnu budu&#263;nost.</font></p><p><font color=\"#000000\">S obzirom na ovu hitnu potrebu, svatko od nas pozvan je preispitati svoje mentalne i moralne prioritete, dovesti ih u ve&#263;u sukladnost s Bo&#382;jim zapovijedima i zahtjevima op&#263;eg dobra. Na poseban na&#269;in mislio sam pozvati vas mlade, jer vas va&scaron;a &#382;elja za boljom i sretnijom budu&#263;no&scaron;&#263;u &#269;ini i sada proro&#269;anskim znakom koji upu&#263;uje na ekonomiju osjetljivu za &#269;ovjeka i okoli&scaron;.</font></p><p><font color=\"#000000\">Predragi mladi, znam da u svojim srcima mo&#382;ete &#269;uti sve mu&#269;niju molbu zemlje i njenih siroma&scaron;nih koji vape za pomo&#263;i i odgovorno&scaron;&#263;u, za ljudima koji &#263;e se odazvati i ne&#263;e se okrenuti. Ako slu&scaron;ate va&scaron;a srca, osje&#263;at &#263;ete se dijelom jedne nove i hrabre kulture i ne&#263;ete imati straha riskirati i zalagati se u stvaranju novoga dru&scaron;tva. Uskrsli Isus je na&scaron;a snaga! Kako sam vam rekao u Panami i u post-sinodalnom apostolskom pismu Christus Vivit: \'\'molim vas ne dopustite da drugi budu nositelji promjena. Vi ste oni koji imaju budu&#263;nost. Preko vas budu&#263;nost ulazi u svijet. Od vas tra&#382;im da budete nositelji ove promjene. Tra&#382;im od vas da budete tvorci svijeta, da radite za jedan&nbsp; bolji svijet.\'\' (No.174)</font></p><p><font color=\"#000000\">Va&scaron;a sveu&#269;ili&scaron;ta, va&scaron;a poduze&#263;a, va&scaron;e organizacije su radionice nade za stvaranje novih na&#269;ina razumijevanja ekonomije i napretka, za borbu protiv kulture otpada, za davanje glasa onima koji ga nemaju i za predlaganje novih stilova &#382;ivota. Tek kada na&scaron; ekonomski i socijalni sustav vi&scaron;e ne bude stvarao ni jednu &#382;rtvu, niti jednu osobu odba&#269;enu u stranu, mo&#263;i &#263;emo proslaviti blagdan sveop&#263;eg bratstva.&nbsp;</font></p><p></p><p><font color=\"#000000\">Zbog toga vas &#382;elim susresti u Asizu: kako bismo zajedno promicali, kroz zajedni&#269;ki pakt, jedan proces globalne promjene koja vidi u zajedni&scaron;tvo ne samo osobe koje imaju dar vjere ve&#263; sve ljude dobre volje bez obzira na razlike nacionalnosti i vjere, sjedinjeni oko ideala bratstva, osjetljivi na siroma&scaron;ne i odba&#269;ene. Pozivam svakoga od vas da radite za ovaj savez, obvezuju&#263;i se pojedina&#269;no i u skupinama da zajedno njegujete san o novom humanizmu koji odgovara Bo&#382;jem planu i o&#269;ekivanjima mu&scaron;karaca i &#382;ena.</font></p><p><font color=\"#000000\">Ime ovog doga&#273;aja - Economy of Francesco - ima svoje upori&scaron;te u svetcu iz Asiza i u evan&#273;elju koje je on &#382;ivio u punoj dosljednosti, tako&#273;er na dru&scaron;tvenom i na ekonomskom planu. On nam nudi jedan ideal, na neki na&#269;in jedan program. Za mene, koji sam uzeo njegovo ime, on je neiscrpivi izvor inspiracije.</font></p><p><font color=\"#000000\">S vama i preko vas, apelirat &#263;u na neke od na&scaron;ih najboljih ekonomista i poduzetnika koji ve&#263; rade na globalnoj razini kako bi stvorili gospodarstvo u skladu s tim idealima. Imam vjeru da &#263;e se odazvat. I vjerujem prije svega u vas mlade ljude koji ste sposobni sanjati i koji ste spremni uz pomo&#263; Boga izgraditi pravedniji i ljep&scaron;i svijet.</font></p><p><font color=\"#000000\">Susret je planiran od 26. do 28. o&#382;ujka 2020.g. Zajedno s biskupom iz Asiza, &#269;iji je prethodnik Guido prije osam stolje&#263;a primio mladog Franju u njegovu ku&#263;u kad je u&#269;inio proro&#269;ku gestu njegova svla&#269;enja, ra&#269;unam da &#263;u vas i sam primiti. &#268;ekam vas i &#269;ak sada, pozdravljam vas i dajem vam svoj blagoslov. Molim vas, ne zaboravi moliti za mene.</font></p><p><font color=\"#000000\">Iz Vatikana, 1. svibnja 2019.g</font></p><p><font color=\"#000000\">Na spomen sv.Josipa Radnika</font></p><div><br></div>\n', '2021-03-30 04:29:28', '2021-04-20 06:37:46', 3),
(13, 'Završna izjava i zajedničko opredjeljenje', 'Uvjereni smo da se ne može stvoriti bolji svijet bez bolje ekonomije i da je ekonomija previše važna za ljudske živote i za siromašne da bi smo svi trebali biti zabrinuti oko toga.', 'zavrsna-izjava-i-zajednicko-opredjeljenje', 'završna, izjava, zajednicko, opredjeljenje, ekonomija, mladi, poduzetnici, poduzetnistvo', 'ZD0OXiZQknpGYGMRYAZWUTEuGpPzOD0laeAcYnmbCKuC2T7msMOn4yJF7Zzd2RQW', 'O2JhFXlW0fi7OVDQlwN2t8CJdVzzyWLpKm1TnUjH-2021-04-16-10-55-48.jpg', 'Mladi zajedno', '<?xml encoding=\"UTF-8\"><p class=\"MsoNormal\" align=\"center\" style=\"text-align: justify; font-size: 15px;\"><b><span style=\"font-size: 14px;\">&#65279;</span><span style=\"font-size: 14px;\">Mi mladi ekonomisti, poduzetnici i kreatori pozitivnih dru&scaron;tvenih promjena iz cijelog svijeta,&nbsp;</span><span style=\"font-size: 14px;\">sabrani u Asizu na poziv pape Franje,&nbsp;</span><span style=\"font-size: 14px;\">u godini COVID 19 pandemije, &#382;elimo poslati poruku&nbsp;</span><span style=\"font-size: 14pt;\"><span style=\"font-size: 14px;\">e</span><span style=\"font-size: 14px;\">konomistima, poduzetnicima, donositeljima politi&#269;kih odluka, radnicama i radnicima, gra&#273;ankama i gra&#273;anima svijeta.&nbsp;</span></span><span style=\"font-size: 14px; text-align: left;\">Da bismo podijelili radost, iskustva, nadu, izazove koje smo u ovom razdoblju stekli slu&scaron;aju&#263;i na&scaron;e ljude i na&scaron;a srca. Uvjereni smo da se ne mo&#382;e stvoriti bolji svijet bez bolje ekonomije i da je ekonomija previ&scaron;e va&#382;na za ljudske &#382;ivote i za siroma&scaron;ne da bi smo svi trebali biti zabrinuti oko toga.</span></b></p><p class=\"MsoNormal\" style=\"text-align: justify; font-size: 15px;\"><span lang=\"HR\" style=\"font-size: 14px; line-height: 18.4px;\">S</span>toga, u ime mladih i siroma&scaron;nih iz &#269;itavog svijeta,</p><p class=\"MsoNormal\" style=\"text-align: justify; font-size: 15px;\"><span style=\"font-weight: bolder;\"><span lang=\"HR\" style=\"font-size: 14px; line-height: 18.4px;\">Mi tra&#382;imo da:</span></span></p><ol style=\"font-size: 15px;\"><li style=\"text-align: justify; \"><span style=\"font-size: 14px; text-indent: -24px;\">Velike svjetske sile i velike ekonomsko-financijske institucije smanje njihovu utrku kako bi Zemlja prodisala. COVID nas je usporio bez da smo odabrali. Kada &#263;e COVID nestati moramo odabrati usporiti neobuzdanu utrku, koja gu&scaron;i zemlju i najslabije;</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 14px; text-indent: -24px;\">Velike svjetske sile i velike ekonomsko-financijske institucije smanje njihovu utrku kako bi Zemlja prodisala. COVID nas je usporio bez da smo odabrali. Kada &#263;e COVID nestati moramo odabrati usporiti neobuzdanu utrku, koja gu&scaron;i zemlju i najslabije;</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 14px; text-indent: -24px;\">Bude aktivirana svjetska razmjena najnaprednijih tehnologija kako bi i zemlje s niskim dohotkom mogle ostvariti odr&#382;ivu proizvodnju; nadi&#263;i energetsko siroma&scaron;tvo &ndash; izvor ekonomskih, dru&scaron;tvenih, kulturnih nejednakosti &ndash; kako bi se ostvarila klimatska pravda;</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 14pt; text-indent: -24px;\"><span style=\"font-size: 14px;\">Tema o za&scaron;titi zajedni&#269;kih dobara (osobito onih globalnih kao &scaron;to su atmosfera, &scaron;ume, oceani, zemlja, </span><span style=\"font-size: 14px;\">prirodni resursi, ekosistemi, sva biorazlikost, sjemenje) bude u centru djelovanja vlada i &scaron;kola, sveu&#269;ili&scaron;ta, poslovnih sveu&#269;ili&scaron;ta iz cijeloga svijeta;</span></span></li><li style=\"text-align: justify;\"><span style=\"font-size: 14px; text-indent: -24px;\">Se nikad vi&scaron;e ne koriste ekonomske ideologije da bi se uvrijedilo i marginaliziralo siroma&scaron;ne, bolesne, manjine i one koje trpe na razli&#269;ite na&#269;ine jer prva pomo&#263; u njihovim nevoljama je po&scaron;tovanje i vrednovanje njihove osobnosti: siroma&scaron;tvo nije prokletstvo, ve&#263; samo nesre&#263;a i odgovornost onome tko nije siroma&scaron;an;</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 14px; text-indent: -24px;\">Pravo na dostojanstven rad za sve, obiteljska prava i sva ljudska prava moraju se po&scaron;tivati u &#382;ivotu svake tvrtke, za svakog radnika i zajam&#269;iti socijalnom politikom svake zemlje i priznati u svijetu dogovorenom poveljom koja obeshrabruje poslovne izbore zasnovane isklju&#269;ivo na profitu i utemeljena na iskori&scaron;tavanju maloljetnika i osoba u nepovoljnom polo&#382;aju;</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 14px; text-indent: -24px;\">Da odmah budu ukinute fiskalne oaze u cijelom svijetu jer svaki novac upla&#263;en u jednu fiskalnu oazu je novac oduzet na&scaron;oj dana&scaron;njici i budu&#263;nosti i jer &#382;e jedan novi fiskalni pakt biti prvi odgovor svijetu nakon COVID-a se ustanove nove svjetske financijske institucije, a one postoje&#263;e (Svjetska Banka, Svjetski Monetarni Fond) &nbsp;reformiraju u demokratski i uklju&#269;uju&#263;i oblik kako bi pomogle svijetu iza&#263;i iz siroma&scaron;tva i nejednakosti uzrokovane pandemijom; odr&#382;ive i eti&#269;ne financije trebaju se nagra&#273;ivati, a visoko &scaron;pekulativne i grabe&#382;ljive treba obeshrabrivati s odgovaraju&#263;im oporezivanjima.</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 14px; text-indent: -24px;\">Velika i globalna poduze&#263;a i banke predstave nezavisni i eti&#269;ki odbor u njihovim Upravnim odborima s vetom na podru&#269;ju okoli&scaron;a, pravde i utjecaja na siroma&scaron;ne;</span></li><li style=\"text-align: justify;\"><span style=\"font-size: 16px; text-indent: -24px;\"><span style=\"font-size: 14px;\">Nacionalne institucije osiguraju nagrade i podr&scaron;ku za inovativne poduzetnike u podru&#269;ju dru&scaron;tvene, duhovne, menad&#382;erske odr&#382;ivosti i odr&#382;ivost okoli&scaron;a jer jedino preispituju&#263;i menad&#382;ment ljudskih resursa mogu&#263;a je odr&#382;iva globalna ekonomija</span><span style=\"font-size: 14px;\">;&nbsp;</span></span></li><li style=\"text-align: justify;\"><span style=\"font-size: 16px; text-indent: -24px;\"><span style=\"font-size: 14px;\">Dr&#382;ave, velika poduze&#263;a i me&#273;unarodne institucije uzmu brigu o kvalitetnom obrazovanju za svako dijete na svijetu jer ljudski kapital je osnovni kapital cijelog &#269;ovje&#269;anstva;</span></span></li><li style=\"text-align: justify;\"><span style=\"font-size: 16px; text-indent: -24px;\"><span style=\"font-size: 14px;\">Ekonomske organizacije i civilne institucije ne budu mirne sve dok radnice ne budu imale iste mogu&#263;nosti kao i radnici jer, bez adekvatnih &#382;enskih talenata, poduze&#263;a i radna mjesta nisu potpuno autenti&#269;na, ljudska i sretna mjesta.</span></span></li><li style=\"text-align: justify;\"><span style=\"font-size: 16px; text-indent: -24px;\"><span style=\"font-size: 14px;\">Tra&#382;imo na kraju zauzimanje sviju kako bi se pribli&#382;ilo vrijeme koje je prorekao prorok Izaija: \"On &#263;e biti sudac narodima, mnogim &#263;e sudit` plemenima, koji &#263;e ma&#269;eve prekovati u plugove, a koplja u srpove. Ne&#263;e vi&scaron;e narod dizat` ma&#269;a protiv naroda nit` se vi&scaron;e u&#269;it` ratovanju.\" (Iz 2,4) </span></span></li></ol><p style=\"text-align: justify; margin-left: 25px; line-height: 1.2;\"><span style=\"font-size: 16px; text-indent: -24px;\"><span style=\"font-size: 14px;\">Mi Mladi ne mo&#382;emo vi&scaron;e tolerirati da se uskra&#263;uju resursi za &scaron;kole, za na&scaron;u sada&scaron;njost i budu&#263;nost da bi se proizvodilo oru&#382;je i poticali ratovi potrebni za njegovu prodaju. Htjeli bismo ispri&#269;ati na&scaron;oj djeci da je rat u svijetu zavr&scaron;io zauvijek.</span></span></p><p style=\"text-align: justify; font-size: 15px;\"><span style=\"font-size: 12pt;\">Sve ovo - &scaron;to mi ve&#263; &#382;ivimo na na&scaron;em poslu i u na&scaron;im na&#269;inima &#382;ivota - tra&#382;imo znaju&#263;i da je jako te&scaron;ko i vjerojatno mnogi smatraju kao utopiju. Mi zapravo vjerujemo u proro&scaron;tvo i zato mo&#382;emo tra&#382;iti opet i opet, jer ono &scaron;to se danas &#269;ini nemogu&#263;im, zahvaljuju&#263;i na&scaron;em trudu i na&scaron;em nastojanju sutra &#263;e biti manje nemogu&#263;e. Vi odrasli koji dr&#382;ite uzde ekonomije i poduze&#263;a napravili ste puno za nas mlade, ali mo&#382;ete jo&scaron; vi&scaron;e. Na&scaron;e vrijeme je prete&scaron;ko da ne bismo tra&#382;ili nemogu&#263;e. Imamo povjerenja u vas i zato vas tra&#382;imo puno. Jer ako tra&#382;imo manje ne&nbsp; bismo tra&#382;ili dovoljno.</span></p><p style=\"font-size: 15px;\"></p><p class=\"MsoListParagraphCxSpLast\" style=\"text-align: justify; font-size: 15px;\"><span lang=\"HR\" style=\'font-size: 12pt; line-height: 18.4px; font-family: \"Times New Roman\", serif;\'><span style=\"font-family: Poppins;\">Sve ovo &scaron;to tra&#382;imo najprije tra&#382;imo od sebe i zala&#382;emo se &#382;ivjeti najbolje godine na&scaron;e snage i inteligencije da bi Franjina ekonomija bila &scaron;to vi&scaron;e sol i kvasac ekonomiji za sve.</span></span></p>\n', '2021-03-30 04:47:40', '2021-04-20 06:38:33', 3),
(19, 'Webinar \"Franjina ekonomija i zajednička dobra\"', 'Prvi webinar Franjine ekonomije na hrvatskom jeziku, potaknut prvim uvodnim predavanjem međunarodne škole Franjine ekonomije pod nazivom “EoF School”  održao se 22. travnja 2021. na Zoom platformi.', 'webinar-franjina-ekonomija-i-zajednicka-dobra', 'Franjina ekonomija, zajednicka dobra, EoF School, webinar', 'T2dRaZ35Wmx6E2KpiJsRZ6oZ1CQo21aNXkccVdfKc7xZ2q67JP4WKvsdJOS9NqtK', '20rLHwGNzLI3R221Zc9FbvkgQgegyKlQzMavI9sh-2021-04-16-11-20-19.jpg', NULL, '<?xml encoding=\"UTF-8\"><!--?xml encoding=\"UTF-8\"--><!--?xml encoding=\"UTF-8\"--><h4 style=\"margin-bottom: 10px; line-height: 3;\"><span style=\'font-family: \"Open Sans\", sans-serif; font-size: 14px;\'><b style=\"\"><u><font color=\"#000000\" style=\"background-color: rgb(255, 0, 0);\">NAPOMENA - cijeli webinar dostupan je na linku</font> <a href=\"https://www.youtube.com/watch?v=bA_AMjsvGMk&amp;ab_channel=FranjinaEkonomijaHrvatska\" target=\"_blank\" style=\"color: rgb(129, 129, 129); background-color: rgb(255, 255, 0);\">OVDJE</a></u></b></span></h4><h4 style=\"margin-bottom: 10px; line-height: 1.3em;\"><b><span style=\'color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif; font-size: 14px;\'><br></span></b></h4><h4 style=\"margin-bottom: 10px; line-height: 1.3em;\"><b><span style=\'color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif; font-size: 14px;\'>Prvi webinar&nbsp;</span><a href=\"https://francescoeconomy.org/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\'background: rgb(255, 255, 255); transition: all 0.2s linear 0s; color: rgb(240, 146, 23); outline: none 0px; font-family: \"Open Sans\", sans-serif; font-size: 14px;\'>Franjine ekonomije</a><span style=\'color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif; font-size: 14px;\'>, potaknut prvim uvodnim predavanjem&nbsp;</span><a href=\"https://francescoeconomy.org/eof-school-abstracts/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\'background: rgb(255, 255, 255); transition: all 0.2s linear 0s; color: rgb(240, 146, 23); outline: none 0px; font-family: \"Open Sans\", sans-serif; font-size: 14px;\'>me&#273;unarodne &scaron;kole Franjine ekonomije pod nazivom &ldquo;EoF School&rdquo;&nbsp;</a><span style=\'color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif; font-size: 14px;\'>&nbsp;odr&#382;ao se&nbsp;</span><span style=\'color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif; font-size: 14px;\'>22. travnja 2021. </span><span style=\'color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif; font-size: 14px;\'>&nbsp;</span><span style=\'color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif; font-size: 14px;\'>na Zoom platformi.</span></b></h4><h4 style=\"margin-bottom: 10px; line-height: 1.3em;\"><br></h4><h4 style=\'margin-bottom: 10px; font-family: \"Open Sans\", sans-serif; font-weight: bold; line-height: 1.3em; color: rgb(64, 69, 77); font-size: 17px;\'>Za koga?</h4><p style=\'margin-bottom: 10px; font-family: \"Open Sans\", sans-serif; line-height: 1.3em;\'><font color=\"#818181\">Za sve zainteresirane, prije svega mlade poduzetnike, ekonomiste i kreatore promjena&nbsp; od 18 do 35 godina, ali i sve ljude koji kriti&#269;ki promi&scaron;ljaju o dana&scaron;njem ekonomskom i dru&scaron;tvenom sustavu.</font></p><h4 style=\'margin-bottom: 10px; line-height: 1.3em; font-weight: bold; color: rgb(64, 69, 77); font-family: \"Open Sans\", sans-serif; font-size: 17px;\'><br></h4><h4 style=\'margin-bottom: 10px; line-height: 1.3em; font-weight: bold; color: rgb(64, 69, 77); font-family: \"Open Sans\", sans-serif; font-size: 17px;\'>Tko i &scaron;to?</h4><p style=\'color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif;\'>Na prvom webinaru gostovao je&nbsp;<a href=\"http://domagoj-sajter.from.hr/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: all 0.2s linear 0s; color: rgb(240, 146, 23); outline: none 0px;\">prof. dr.sc. Domagoj Sajter</a>, profesor na Ekonomskom fakultetu u Osijeku i dugogodi&scaron;nji &#269;lan Ekonomije zajedni&scaron;tva, podupiratelj&nbsp;<a href=\"https://franjinaekonomija.hr/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: all 0.2s linear 0s; color: rgb(240, 146, 23); outline: none 0px;\">Franjine ekonomije</a>&nbsp;te&nbsp;<a href=\"https://www.glas-koncila.hr/author/dsajter/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: all 0.2s linear 0s; color: rgb(240, 146, 23); outline: none 0px;\">autor mnogih tekstova za Glas Koncila,</a>&nbsp;koji je povodom glavnog me&#273;unarodnog doga&#273;aja Economy of Francesco ve&#263; sudjelovao na okruglom stolu te je svim mladima u pokretu poru&#269;io prekrasnu poruku koju mo&#382;ete vidjeti na&nbsp;<a href=\"https://www.youtube.com/watch?v=V0PkvHrHM3g&amp;t=9s&amp;ab_channel=FranjinaEkonomijaHrvatska\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: all 0.2s linear 0s; color: rgb(240, 146, 23); outline: none 0px;\">youtube stranici FE</a>.</p><p style=\'color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif;\'>Prof. Sajter inerpretiratirao je<a href=\"https://www.youtube.com/watch?v=3G4jzINr0Wo&amp;ab_channel=TheEconomyofFrancescoOfficialchannel\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: all 0.2s linear 0s; color: rgb(240, 146, 23); outline: none 0px;\">&nbsp;prvu lekciju me&#273;unarodne &scaron;kole EoF School</a>&nbsp;na kojoj su predava&#269;i bili profesori L. Bruni, P. Santori, V. Rotondi, koji su se dotakli promi&scaron;ljanja o ekonomiji i vezi sa zajedni&#269;kim dobrima.</p><p style=\'color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif;\'><br></p><h4 style=\'margin-bottom: 10px; line-height: 1.3em; font-weight: bold; color: rgb(64, 69, 77); font-family: \"Open Sans\", sans-serif; font-size: 17px;\'>Promi&scaron;ljanja u vezi ekonomije i zajedni&#269;kih dobara</h4><p style=\'margin-bottom: 10px; line-height: 1.3em; font-weight: bold; color: rgb(64, 69, 77); font-family: \"Open Sans\", sans-serif; font-size: 17px;\'><br></p><ul style=\'margin-bottom: 20px; color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif;\'><li style=\"margin-bottom: 2px;\"><em>&Scaron;to bi se dogodilo kad bi se predavanja iz ekonomije na sveu&#269;ili&scaron;tima usmjerila svoju pa&#382;nju na zajedni&#269;ke teme, a ne na privatna dobra?</em></li><li style=\"margin-bottom: 2px;\"><em>&Scaron;to ako tvorci ekonomije postanu glavni predmet prou&#269;avanja, a sada&scaron;nji ekonomisti iznimka za ekonomsku znanost?</em></li><li style=\"margin-bottom: 2px;\"><em>&Scaron;to ako dru&scaron;tveno odgovorno poslovanje, umjesto da se smatra &ldquo;hibridnim&rdquo; oblikom poslovanja, postane uobi&#269;ajeni pristup, a eti&#269;ke i zelene financije zavladaju financijskim sektorom?</em></li><li style=\"margin-bottom: 2px;\"><em>Je li mogu&#263;e odmaknuti se od prvenstva potro&scaron;a&#269;a prema prvenstvu eti&#269;kih potro&scaron;a&#269;a, koji svakodnevnim odabirom izra&#382;avaju svoje sklonosti inkluzivnom, odr&#382;ivom i radnicima prihvatljivom gospodarskom sustavu?</em></li></ul><h4 style=\'margin-bottom: 10px; line-height: 1.3em; font-weight: bold; color: rgb(64, 69, 77); font-family: \"Open Sans\", sans-serif; font-size: 17px;\'><span style=\"color: rgb(129, 129, 129); font-size: 14px; font-weight: normal;\">&nbsp;</span><br></h4><h4 style=\"margin-bottom: 10px; line-height: 3;\"><span style=\'font-family: \"Open Sans\", sans-serif; font-size: 14px;\'><span style=\"font-weight: bolder;\"><u><font color=\"#000000\" style=\"background-color: rgb(255, 0, 0);\">NAPOMENA - cijeli webinar dostupan je na linku</font>&nbsp;<a href=\"https://www.youtube.com/watch?v=bA_AMjsvGMk&amp;ab_channel=FranjinaEkonomijaHrvatska\" target=\"_blank\" style=\"color: rgb(129, 129, 129); background-color: rgb(255, 255, 0);\">OVDJE</a></u></span></span></h4><p style=\'margin-bottom: 20px; color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif;\'><br></p><p style=\'margin-bottom: 20px; color: rgb(129, 129, 129); font-family: \"Open Sans\", sans-serif;\'><img data-filename=\"fe-webinar1.jpg\" style=\"width: 50%;\" src=\"https://franjinaekonomija.hr/storage/posts//T2dRaZ35Wmx6E2KpiJsRZ6oZ1CQo21aNXkccVdfKc7xZ2q67JP4WKvsdJOS9NqtK/ciqwsZdkiASdIpmWfBeloKNiYwVoScqrqK2wOdAH-2021-04-20-08-38-48.jpg\"><br></p>\n', '2021-04-14 10:51:00', '2021-04-23 05:31:37', 3);
INSERT INTO `posts` (`id`, `title`, `short_description`, `title_slug`, `keywords`, `directory_id`, `cover`, `cover_image_description`, `content`, `created_at`, `updated_at`, `user_id`) VALUES
(22, 'Video poruka Pape Franje nakon međunarodnog dogadjaja EoF', 'Međunarodni online događaj: \"The Economy of Francesco - mladi, savez, budućnost\" te stručno prevedena poruka Pape Franje na završetku trodnevnog događaja', 'video-poruka-pape-franje-nakon-medunarodnog-dogadjaja-eof', 'francescoeconomy, papaFranjo, videoporuka, mladi', 'DL26derotPHW0uGodSSI0Bs4qdg6eYJiqWVBe00o7TCXlFiCvHderfxuBHHE0mKn', 'JMSdypdTbzwBxqhHXqxD3fs6N7LebYvGrkFcjdG-2021-04-20-11-59-32.jfif', NULL, '<?xml encoding=\"UTF-8\"><p>ME&#272;UNARODNI ONLINE DOGA&#272;AJ:<br></p><p class=\"MsoNormal\">&ldquo;<span style=\"font-weight: bolder;\">THE ECONOMY OF FRANCESCO - MLADI, SAVEZ, BUDU&#262;NOST</span>&rdquo;</p><p class=\"MsoNormal\">[Bazilika sv. Franje Asi&scaron;koga, 19. -21. studenoga 2020.]</p><p class=\"MsoNormal\"><span style=\"font-weight: bolder;\"><i>VIDEOPORUKA SVETOGA OCA FRANJE<br>SUDIONICIMA SUSRETA</i></span></p><p class=\"MsoNormal\"><i>Subota, 21. studenoga 2020.</i></p><p class=\"MsoNormal\" style=\"margin-bottom: 20px;\"><span style=\"font-weight: bolder;\">[</span><a href=\"http://w2.vatican.va/content/francesco/it/events/event.dir.html/content/vaticanevents/it/2020/11/21/videomessaggio-economyoffrancesco.html\"><span style=\"font-weight: bolder;\">Multimedia</span></a><span style=\"font-weight: bolder;\">]</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 20px;\"><img style=\"width: 50%;\" data-filename=\"download (3).jfif\" src=\"https://franjinaekonomija.hr/storage/posts//DL26derotPHW0uGodSSI0Bs4qdg6eYJiqWVBe00o7TCXlFiCvHderfxuBHHE0mKn/SwFAmqnEufDpKHUFKPwIn7wztk73t5fQF0WW1IG8-2021-04-20-11-59-32.jpg\"><span style=\"font-weight: bolder;\"><br></span></p><p class=\"MsoNormal\">Dragi mladi, dobar dan!</p><p class=\"MsoNormal\">Hvala vam &scaron;to ste se okupili, hvala za sav va&scaron; rad, za zalaganje ovih mjeseci, unato&#269; promjenama u programu. Niste se obeshrabrili, ve&#263; naprotiv, saznao sam da ste radili na visokoj razini glede promi&scaron;ljanja, kvalitete, ozbiljnosti i odgovornosti: niste zanemarili ni&scaron;ta &scaron;to vas raduje, zabrinjava, ispunja gor&#269;inom i poti&#269;e na promjenu.</p><p class=\"MsoNormal\">Prvotna zamisao bio je susret u Asizu kako bismo se nadahnuli na stopama svetoga Franje. S raspela sv. Damjana i s drugih lica &ndash; poput lica gubavca &ndash; Gospodin mu je po&scaron;ao ususret, pozvao ga i povjerio mu jedno poslanje; oslobodio ga je idola koji su ga izolirali, nedoumica koje su ga paralizirale i zatvarale u uobi&#269;ajenu slabost izra&#382;enu rije&#269;ima &bdquo;oduvijek se tako radilo&ldquo; &ndash; to je slabost! &ndash; ili sladunjave i nezadovoljene tuge onih koji &#382;ive samo za sebe i dao mu sposobnost da zapo&#269;ne pjesmu hvale, izraz radosti, slobode i darivanja sebe. Stoga ovaj virtualni susret u Asizu za mene nije cilj ve&#263; po&#269;etni poticaj procesa koji smo pozvani &#382;ivjeti kao poziv, kao kulturu i kao savez.</p><p class=\"MsoNormal\"><br></p><p class=\"MsoNormal\"><i><span style=\"font-weight: bolder;\">Poziv Asiza</span></i></p><p class=\"MsoNormal\">&bdquo;Franjo, idi i popravi moju ku&#263;u, koja se, kako vidi&scaron;, ru&scaron;i!&ldquo; Te su rije&#269;i pokrenule mladoga Franju te postale poseban poziv i svakome od nas. Kada se osje&#263;ate pozvanima, uklju&#269;enima i akterima &bdquo;normalnosti&ldquo; koju treba izgraditi, vi znate re&#263;i &bdquo;da&ldquo;, i to daje nadu. Znam da ste odmah prihvatili ovaj saziv, jer ste u stanju vidjeti, analizirati i do&#382;ivjeti da ovako ne mo&#382;emo dalje: to je jasno pokazala razina prianjanja, u&#269;lanjenja i sudjelovanja u ovom savezu, koji je prema&scaron;io mogu&#263;nosti. Vi pokazujete posebnu osjetljivost i zabrinutost za prepoznavanje klju&#269;nih problema koji nas propitkuju. U&#269;inili ste to iz odre&#273;enog motri&scaron;ta: gospodarstva, koje je va&scaron;e podru&#269;je istra&#382;ivanja, prou&#269;avanja i rada. Znate da je &#382;urno potrebna druga&#269;ija ekonomska pri&#269;a, &#382;urno je odgovorno priznati da je &bdquo;sada&scaron;nji svjetski sustav neodr&#382;iv s razli&#269;itih to&#269;aka gledi&scaron;ta&ldquo;<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn1\" name=\"_ftnref1\" title=\"\">[1]</a>&nbsp;i da poga&#273;a na&scaron;u sestru Zemlju, tako te&scaron;ko zlostavljanu i ogoljenu, a istodobno i najsiroma&scaron;nije i isklju&#269;ene. To ide zajedno: ogoli&scaron; zemlju i isklju&#269;i&scaron; mnoge siromahe. Oni su prvi o&scaron;te&#263;eni... a ujedno i prvi zaboravljeni.</p><p class=\"MsoNormal\">Ali pripazite, ne dajte da vas uvjere kako je to samo uobi&#269;ajena pojava. Vi ste puno vi&scaron;e od povr&scaron;ne i prolazne &bdquo;buke&ldquo; koja se s vremenom mo&#382;e uspavati i opiti. Ako ne &#382;elimo da se to dogodi, pozvani ste ostvariti konkretan utjecaj u svojim gradovima i na sveu&#269;ili&scaron;tima, na radnim mjestima i u sindikatima, u tvrtkama i pokretima, u javnim i privatnim uredima, pametno, predano i uvjerljivo, kako biste stigli do sr&#382;i i do srca gdje se teme i paradigme razra&#273;uju i odlu&#269;uju.<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn2\" name=\"_ftnref2\" title=\"\">[2]</a>&nbsp;Sve me to potaknulo da vas pozovem da ostvarite taj savez. Te&#382;ina trenutne situacije, koju je pandemija koronavirusa istaknula jo&scaron; vi&scaron;e, zahtijeva odgovornu svijest svih dru&scaron;tvenih aktera, svih nas, me&#273;u kojima vi imate primarnu ulogu: posljedice na&scaron;ih postupaka i odluka dotaknut &#263;e vas u prvom licu, dakle, ne mo&#382;ete ostati izvan mjesta gdje se stvara, ne ka&#382;em va&scaron;a budu&#263;nost, ve&#263; va&scaron;a sada&scaron;njost. Vi ne mo&#382;ete ostati izvan mjesta gdje se generiraju sada&scaron;njost i budu&#263;nost. Ili &#263;ete se uklju&#269;iti ili &#263;e vas povijest pregaziti.</p><p class=\"MsoNormal\">&nbsp;</p><p class=\"MsoNormal\"><span style=\"font-weight: bolder;\"><i>Nova kultura</i></span></p><p class=\"MsoNormal\">Trebamo promjenu, &#382;elimo promjenu, tra&#382;imo promjenu.<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn3\" name=\"_ftnref3\" title=\"\">[3]</a>&nbsp;Problem nastaje kada shvatimo da, zbog mnogih pote&scaron;ko&#263;a koje nas uznemiruju, nemamo prikladne i sveobuhvatne odgovore; naprotiv, na nas utje&#269;e fragmentacija u analizama i dijagnozama koja na kraju blokira svako mogu&#263;e rje&scaron;enje. U osnovi, nedostaje nam potrebna&nbsp;<i>kultura</i>&nbsp;koja bi omogu&#263;ila i potaknula otvaranje druga&#269;ijih vizija, obilje&#382;enih vrstom misli, politike, obrazovnih programa, kao i duhovnosti koje se ne mo&#382;e zaklju&#269;ati samo jednom dominantnom logikom.<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn4\" name=\"_ftnref4\" title=\"\">[4]</a>&nbsp;Ako je &#382;urno prona&#263;i odgovore, neophodno je poticati rast i podr&#382;ati upravlja&#269;ke skupine sposobne izraditi kulturu, pokrenuti procese &ndash; ne zaboravite ovu rije&#269;: pokrenuti procese &ndash; zacrtati putove, pro&scaron;iriti obzore, stvarati &#269;lanstva... Svaki napor u upravljanju, brizi i pobolj&scaron;avanju na&scaron;eg zajedni&#269;kog doma, ako &#382;eli biti zna&#269;ajan, zahtijeva promjenu &bdquo;stilova &#382;ivota, modela proizvodnje i potro&scaron;nje, ustaljenih struktura mo&#263;i koje danas vladaju dru&scaron;tvom\".<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn5\" name=\"_ftnref5\" title=\"\">[5]</a>&nbsp;Bez toga ne&#263;ete u&#269;initi ni&scaron;ta.</p><p class=\"MsoNormal\">Potrebne su nam zajedni&#269;arske i institucijske upravlja&#269;ke skupine koje mogu preuzeti odgovornost za probleme, a da pritom ne postanu njihovi zato&#269;enici i zato&#269;enici vlastitog nezadovoljstva, te tako ospore podvrgavanje &ndash; &#269;esto nesvjesno &ndash; odre&#273;enim (ideolo&scaron;kim) logikama koje na kraju opravdavaju i paraliziraju svako djelovanje protiv nepravda. Podsjetimo primjerice, kako je to dobro primijetio Benedikt XVI., da glad &bdquo;ne ovisi toliko o materijalnoj oskudici, ve&#263; o oskudici dru&scaron;tvenih resursa, od kojih je najva&#382;nija institucijske naravi.&ldquo;<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn6\" name=\"_ftnref6\" title=\"\">[6]</a>&nbsp;Ako vi to uspijete rije&scaron;iti, imat &#263;ete otvoren put u budu&#263;nost. Ponavljam misao pape Benedikta: glad ne ovisi toliko o materijalnoj oskudici, ve&#263; o oskudici socijalnih resursa, od kojih je najva&#382;nija institucijske naravi.</p><p class=\"MsoNormal\">Socijalna i ekonomska kriza, koju mnogi trpe u svom tijelu i koja stavlja pod hipoteku sada&scaron;njost i budu&#263;nost u napu&scaron;tanju i isklju&#269;ivanju mnoge djece i adolescenata kao i cijelih obitelji, ne tolerira privilegiranje sektorskih interesa na &scaron;tetu op&#263;ega dobra. Moramo se malo vratiti mistici [duhu] op&#263;ega dobra. U tom smislu, dopustite mi da istaknem vje&#382;bu koju ste do&#382;ivjeli kao metodologiju za zdravo i revolucionarno rje&scaron;avanje sukoba. Tijekom ovih mjeseci podijelili ste razna promi&scaron;ljanja i va&#382;ne teorijske okvire. Uspjeli ste se okupiti oko 12 tema (nazvali ste ih &bdquo;sela&ldquo;): 12 tema za diskusiju, raspravu i pronala&#382;enje odr&#382;ivih putova. &#381;ivjeli ste toliko potrebnu&nbsp;<i>kulturu susreta</i>, suprotnu&nbsp;<i>kulturi odbacivanja</i>&nbsp;koja je u modi.&nbsp;A ta kultura susreta omogu&#263;uje mnogim glasovima da sjede za istim stolom i vode dijalog, promi&scaron;ljaju, raspravljaju i stvaraju, iz vi&scaron;ezna&#269;ne perspektive, razli&#269;ite dimenzije i odgovore na globalne probleme koji se odnose na na&scaron;e narode i na&scaron;e demokracije.<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn7\" name=\"_ftnref7\" title=\"\">[7]</a>&nbsp;Kako je te&scaron;ko napredovati prema stvarnim rje&scaron;enjima kada smo diskreditirali, oklevetali i izvukli iz konteksta sugovornika koji ne misli poput nas! To diskreditiranje, klevetanje ili izvla&#269;enje iz konteksta sugovornika koji ne misli poput nas na&#269;in je kukavi&#269;ke obrane od odluka koje bih ja trebao donijeti za rje&scaron;avanje mnogih problema. Nikada ne zaboravimo da je &bdquo;cjelina vi&scaron;e od dijela, ali je ujedno i ne&scaron;to vi&scaron;e od pukog zbroja dijelova&ldquo;<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn8\" name=\"_ftnref8\" title=\"\">[8]</a>, te da &bdquo;puki zbroj pojedina&#269;nih probitaka sam po sebi ne mo&#382;e stvoriti bolji svijet za &#269;itavo &#269;ovje&#269;anstvo&ldquo;<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn9\" name=\"_ftnref9\" title=\"\">[9]</a>.</p><p class=\"MsoNormal\">Ta vje&#382;ba susretanja neovisno o svim legitimnim razlikama temeljni je korak za svaku preobrazbu koja &#263;e pomo&#263;i o&#382;ivjeti novi kulturni, a time i ekonomski, politi&#269;ki i socijalni mentalitet; jer ne&#263;e biti mogu&#263;e zauzeti se u velikim stvarima samo u skladu s teoretskom ili individualnom perspektivom bez duha koji bi vas animirao, bez nekih unutarnjih motivacija koje daju smisao, bez pripadnosti i ukorijenjenosti koje osna&#382;uju osobno i zajedni&#269;ko djelovanje.<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn10\" name=\"_ftnref10\" title=\"\">[10]</a></p><p class=\"MsoNormal\">Stoga &#263;e budu&#263;nost biti posebno vrijeme, u kojem &#263;emo se osje&#263;ati pozvanima prepoznati &#382;urnost i ljepotu izazova &scaron;to nam se predstavlja. To nas vrijeme podsje&#263;a da nismo osu&#273;eni na ekonomske modele koji svoj neposredni interes usmjeravaju na profit kao mjernu jedinicu i na provo&#273;enje javnih politika koje zanemaruju vlastite ljudske, socijalne i ekolo&scaron;ke tro&scaron;kove.<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn11\" name=\"_ftnref11\" title=\"\">[11]</a>&nbsp;Kao da mo&#382;emo ra&#269;unati na apsolutnu, neograni&#269;enu ili neutralnu dostupnost resursa. Ne, nismo prisiljeni i dalje prihva&#263;ati i svojim pona&scaron;anjem &scaron;utke tolerirati \"da se neki osje&#263;aju vi&scaron;e ljudima nego drugi, kao da su ro&#273;eni s ve&#263;im pravima\"<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn12\" name=\"_ftnref12\" title=\"\">[12]</a>&nbsp;ili privilegijama jer im je zajam&#269;eno u&#382;ivati u odre&#273;enim osnovnim dobrima ili uslugama.<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn13\" name=\"_ftnref13\" title=\"\">[13]</a>&nbsp;Nije dovoljno ni usredoto&#269;iti se na potragu za palijativima u tre&#263;em sektoru ili na filantropskim modelima. Iako je njihov rad klju&#269;an, nisu uvijek sposobni strukturno se pozabaviti trenutnim neravnote&#382;ama koje poga&#273;aju najisklju&#269;enije i, nesvjesno, nastavljaju&#263;i nepravde s kojima se namjeravaju boriti. Zapravo nije rije&#269; samo ili isklju&#269;ivo o pitanju zadovoljavanja najosnovnijih potreba na&scaron;e bra&#263;e. Potrebno je strukturno prihvatiti da siroma&scaron;ni imaju dovoljno dostojanstva da sjede na na&scaron;im susretima, sudjeluju u na&scaron;im raspravama i donose kruh svojim domovima. A to je mnogo vi&scaron;e od socijalne skrbi: govorimo o promjeni i preobrazbi na&scaron;ih prioriteta te o mjestu bli&#382;njega u na&scaron;im politikama i u dru&scaron;tvenom poretku.</p><p class=\"MsoNormal\">U jeku 21. stolje&#263;a &bdquo;nije rije&#269; jednostavno o pojavi izrabljivanja i tla&#269;enja, ve&#263; o ne&#269;emu sasvim novom: isklju&#269;ivanje poga&#273;a, u svome samom korijenu, pripadnost dru&scaron;tvu u kojem se &#382;ivi, jer oni koji su isklju&#269;eni ne postaju samo gra&#273;ani drugoga reda, ni&#382;i sloj, ljudi na periferiji, obespravljeni, oni vi&scaron;e nisu ni njegov dio&ldquo;<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn14\" name=\"_ftnref14\" title=\"\">[14]</a>. &#268;uvajte se ovoga: isklju&#269;ivanje poga&#273;a, u svome samom korijenu, pripadnost dru&scaron;tvu u kojem se &#382;ivi, jer oni koji su isklju&#269;eni ne postaju samo gra&#273;ani drugoga reda, ni&#382;i sloj, ljudi na periferiji, obespravljeni, oni vi&scaron;e nisu ni njegov dio. To je kultura odbacivanja koja ne samo da odbacuje, ve&#263; i prisiljava &#382;ivjeti u vlastitom otpadu, postaju&#263;i nevidljivi, onkraj zida ravnodu&scaron;nosti i&nbsp;<i>udobnosti</i>.</p><p class=\"MsoNormal\">Sje&#263;am se kad sam prvi put vidio zatvorenu &#269;etvrt. Nisam ni znao da postoje. Bilo je to 1970. godine. Trebao sam posjetiti nekoliko novaka Dru&#382;be Isusove i stigao sam u tu zemlju, a onda, prolaze&#263;i gradom, rekli su mi: &bdquo;Ne, ne mo&#382;e&scaron; pro&#263;i tim putem, jer to je zatvorena &#269;etvrt&ldquo;. Unutra su bili zidovi, bile su i ku&#263;e, ulice, ali zatvorene. Ta je &#269;etvrt &#382;ivjela u ravnodu&scaron;nosti. Toliko me pogodilo kad sam to vidio. Ali onda je to raslo, raslo, raslo... i bilo ih je posvuda. No ja te pitam: je li tvoje srce poput zatvorene &#269;etvrti?</p><p class=\"MsoNormal\">&nbsp;</p><p class=\"MsoNormal\"><span style=\"font-weight: bolder;\"><i>Asi&scaron;ki savez</i></span></p><p class=\"MsoNormal\">Ne mo&#382;emo sebi dopustiti da i dalje odga&#273;amo neka pitanja. Taj ogroman i neodgodivi zadatak zahtijeva velikodu&scaron;no zalaganje na podru&#269;ju kulture, u akademskom osposobljavanju i u znanstvenom istra&#382;ivanju, bez gubljenja u intelektualnim modama ili ideolo&scaron;kim pozama &ndash; koji su otoci &ndash; koje nas izoliraju od konkretnog &#382;ivota i patnje ljudi.<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn15\" name=\"_ftnref15\" title=\"\">[15]</a>&nbsp;Vrijeme je, dragi mladi ekonomisti, poduzetnici, radnici i rukovoditelji poduze&#263;a, vrijeme je da se odva&#382;ite na rizik promicanja i poticanja modela razvoja, napretka i odr&#382;ivosti u kojima ljudi, a posebno isklju&#269;eni (a me&#273;u njima i sestra Zemlja), prestaju biti &ndash; u najboljem slu&#269;aju &ndash; &#269;isto nominalna, tehni&#269;ka ili funkcionalna prisutnost i postaju akteri svoga &#382;ivota kao i cjelokupnoga dru&scaron;tvenog tkiva.</p><p class=\"MsoNormal\">Neka to ne bude samo nominalno: siroma&scaron;ni i isklju&#269;eni postoje... Ne, ne, neka ta prisutnost ne bude nominalna, neka ne bude tehni&#269;ka niti funkcionalna. Vrijeme je da postanu akteri svoga &#382;ivota kao i cjelokupnoga dru&scaron;tvenog tkiva. Ne mislimo&nbsp;<i>umjesto</i>&nbsp;njih, mislimo&nbsp;<i>s</i>&nbsp;njima. Sjetite se naslje&#273;a prosvjetiteljstva, prosvijetljenih elita. Sve&nbsp;<i>za</i>&nbsp;ljude,&nbsp;<i>s</i>&nbsp;ljudima ni&scaron;ta. Tako ne ide. Nemojmo misliti&nbsp;<i>umjesto</i>&nbsp;njih, mislimo&nbsp;<i>s</i>&nbsp;njima. I od njih u&#269;imo unapre&#273;ivati &#8203;&#8203;ekonomske modele koji &#263;e biti od koristi svima, jer &#263;e strukturni pristup i pristup odlu&#269;ivanju biti odre&#273;en&nbsp;<i>cjelovitim ljudskim razvojem</i>, tako dobro razra&#273;enim u socijalnom nauku Crkve. Politika i ekonomija ne smiju se &bdquo;pokoravati diktatima tehnokracije koja se vodi paradigmom postizanja najvi&scaron;eg stupnja u&#269;inkovitosti. Danas, u cilju op&#263;eg dobra, postoji prijeka potreba da politika i ekonomija stupe u iskren dijalog u slu&#382;bi &#382;ivota, osobito ljudskog &#382;ivota.&ldquo;<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn16\" name=\"_ftnref16\" title=\"\">[16]</a></p><p class=\"MsoNormal\">Bez takve usredoto&#269;enosti i te orijentacije ostat &#263;emo zarobljenici otu&#273;uju&#263;e kru&#382;nosti koja &#263;e samo produ&#382;iti dinamiku degradacije, isklju&#269;enosti, nasilja i polarizacije: &bdquo;Svaki naime program izra&#273;en da bi se pove&#263;ala proizvodnja nema, u krajnjoj liniji, drugog razloga postojanja, nego da slu&#382;i osobi. Njegova je zada&#263;a da smanjuje nejednakosti, da uklanja diskriminaciju, da &#269;ovjeka oslobodi njegove zasu&#382;njenosti. [&hellip;] Nije dovoljno pove&#263;ati zajedni&#269;ko bogatstvo, pa da ono bude podjednako podijeljeno &ndash; ne, to nije dovoljno &ndash; nije dovoljno unaprijediti tehniku, pa da zemlja postane humanija za &#382;ivot na njoj.&ldquo;<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn17\" name=\"_ftnref17\" title=\"\">[17]</a>&nbsp;Ni to nije dovoljno.</p><p class=\"MsoNormal\">Perspektiva&nbsp;<i>cjelovitog ljudskog razvoja</i>&nbsp;dobra je vijest koju treba prorokovati i provoditi &ndash; a to nisu snovi: to je put &ndash; dobra vijest koju treba prorokovati i provoditi, jer nam predla&#382;e da se okupimo kao &#269;ovje&#269;anstvo na temelju najboljeg dijela sebe: Bo&#382;jeg sna da nau&#269;imo biti odgovorni za brata, za najranjivijeg brata (usp. Post 4,9). &bdquo;Mjera &#269;ovje&#269;nosti odre&#273;uje se na osnovi odnosa prema trpljenju i onima koji trpe. To vrijedi kako za pojedinca, tako i za dru&scaron;tvo&ldquo;<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn18\" name=\"_ftnref18\" title=\"\">[18]</a>; ta se mjera mora ugraditi u na&scaron;e odluke i ekonomske modele.</p><p class=\"MsoNormal\">Kako je dobro pustiti da odzvanjaju rije&#269;i svetog Pavla VI. kada je, u &#382;elji da evan&#273;eoska poruka pro&#382;me i vodi sve ljudske stvarnosti, napisao: &bdquo;Razvoj se ne svodi na puki ekonomski rast. Da bi bio autenti&#269;an razvoj, on mora biti integralan, a to zna&#269;i okrenut promicanju svakog &#269;ovjeka. [...] &ndash; svakog &#269;ovjeka i &#269;itavog &#269;ovjeka! &ndash; Mi ne prihva&#263;amo odvajanje ekonomskoga od ljudskoga, razvoja od civilizacije u koju je on uklopljen. Ono &scaron;to je za nas va&#382;no, to je &#269;ovjek, svaki &#269;ovjek, svaka skupina ljudi i cjelokupno &#269;ovje&#269;anstvo.&ldquo;<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn19\" name=\"_ftnref19\" title=\"\">[19]</a></p><p class=\"MsoNormal\">U tom smislu, mnogi od vas imat &#263;e priliku djelovati i utjecati na makroekonomske odluke, gdje se odlu&#269;uje o sudbini mnogih nacija. I za te su scenarije potrebni pripremljeni ljudi, &bdquo;mudri kao zmije, a bezazleni kao golubovi&ldquo; (Mt 10,16), sposobni da &bdquo;bdiju nad odr&#382;ivim razvojem zemalja i da izbjegnu gu&scaron;e&#263;e podvrgavanje takvih zemalja kreditnim sustavima koji, daleko od promicanje napretka, pod&#269;injuju stanovni&scaron;tvo mehanizmima ve&#263;eg siroma&scaron;tva, isklju&#269;enosti i ovisnosti&ldquo;.<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn20\" name=\"_ftnref20\" title=\"\">[20]</a>&nbsp;Sami kreditni sustavi su put prema siroma&scaron;tvu i ovisnosti. Ovaj legitimni prosvjed poziva na pobu&#273;ivanje i pra&#263;enje modela me&#273;unarodne solidarnosti koji &#263;e prepoznati i po&scaron;tivati me&#273;uovisnost zemalja i osigurati kontrolne mehanizme koji mogu izbje&#263;i bilo kakvu vrstu podlo&#382;nosti, kao i nadzor nad promicanjem razvoja u zemljama&nbsp;u najpovoljnijem polo&#382;aju i zemljama u razvoju; svaki je narod pozvan postati tvorcem svoje i sudbine cijeloga svijeta.<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn21\" name=\"_ftnref21\" title=\"\">[21]</a></p><p class=\"MsoNormal\">***</p><p class=\"MsoNormal\">Dragi mladi, &bdquo;danas nam se pru&#382;a velika prilika da poka&#382;emo svoje bratstvo na djelu, da poka&#382;emo da smo i mi dobri Samarijanci koji na sebe preuzimaju bol zbog neuspjeha, umjesto raspirivanja mr&#382;nje i ogor&#269;enja&ldquo;<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn22\" name=\"_ftnref22\" title=\"\">[22]</a>. Nepredvidljiva budu&#263;nost ve&#263; zapo&#269;inje; svatko od vas, po&#269;ev&scaron;i od mjesta na kojem radi i odlu&#269;uje, mo&#382;e puno u&#269;initi; ne birajte pre&#269;ace koji vas zavode i sprje&#269;avaju da se pomije&scaron;ate kako biste bili kvasac tamo gdje jeste (usp. Lk 13, 20-21). Bez pre&#269;aca, kvasac, zaprljajte ruke. Nakon zdravstvene krize kroz koju prolazimo, najgora reakcija bila bi jo&scaron; vi&scaron;e zapasti u grozni&#269;avi konzumerizam i nove oblike sebi&#269;ne samoza&scaron;tite. Ne zaboravite, iz kriza nikad ne izlazimo isti: izlazimo bolji ili gori. Pomognimo rast dobra, iskoristimo priliku i stavimo se svi u slu&#382;bu op&#263;eg dobra. Dao Bog da na kraju vi&scaron;e ne postoje &bdquo;oni drugi&ldquo;, ve&#263; da nau&#269;imo razvijati stil &#382;ivota u kojem znamo re&#263;i samo &bdquo;mi&ldquo;.<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn23\" name=\"_ftnref23\" title=\"\">[23]</a>&nbsp;Ali veliko &bdquo;mi&ldquo;, ne malo &bdquo;mi&ldquo;, a zatim &bdquo;drugi&ldquo;, ne, to nije u redu.</p><p class=\"MsoNormal\">Povijest nas u&#269;i da ne postoje sustavi ili krize koji mogu potpuno poni&scaron;titi sposobnost, domi&scaron;ljatost i kreativnost koje Bog ne prestaje pobu&#273;ivati &#8203;&#8203;u srcima. Predano&scaron;&#263;u i vjerno&scaron;&#263;u va&scaron;im narodima, va&scaron;oj sada&scaron;njosti i va&scaron;oj budu&#263;nosti, vi se mo&#382;ete pridru&#382;iti drugima kako biste prona&scaron;li novi na&#269;in stvaranja povijesti. Ne bojte se uklju&#269;iti i dodirnuti du&scaron;u gradova Isusovim pogledom; ne bojte se hrabro &#382;ivjeti u sukobima i raskri&#382;jima povijesti kako biste ih pomazali aromom Bla&#382;enstava. Ne bojte se, jer&nbsp;<i>nitko se ne spa&scaron;ava sam</i>. Nitko se ne spa&scaron;ava sam. Vama mladima iz 115 zemalja upu&#263;ujem poziv da prepoznate kako trebamo jedni druge da bismo o&#382;ivjeli ovu ekonomsku kulturu. Ona mo&#382;e dati da &bdquo;proklijaju snovi, da se pobude proro&scaron;tva i vi&#273;enja, da procvatu nade, da se potakne pouzdanje, zalije&#269;e rane, uspostave odnosi, pobudi svitanje nade, da u&#269;imo jedni od drugih, i stvorimo pozitivno razmi&scaron;ljanje koje prosvjetljava um, grije srce, rukama vra&#263;a snagu i nadahnjuje mlade &ndash; sve mlade, ne isklju&#269;uju&#263;i nikoga &ndash; na vi&#273;enje budu&#263;nosti pune radosti Evan&#273;elja.&ldquo;<a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftn24\" name=\"_ftnref24\" title=\"\">[24]</a>&nbsp;Hvala!</p><p class=\"MsoNormal\"></p><p></p><p><i>Prijevod: &#272;ina Perkov (fokolar.hr)</i><br clear=\"all\"></p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref1\" name=\"_ftn1\" title=\"\">[1]</a>&nbsp;Enciklika Laudato si&rsquo; (24. svibnja 2015.), br 61. U nastavku teksta LS;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref2\" name=\"_ftn2\" title=\"\">[2]</a>&nbsp;Usp. Ap. pob. Evangelii gaudium (24. studenoga 2013.), br. 74. U nastavku teksta EG;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref3\" name=\"_ftn3\" title=\"\">[3]</a>&nbsp;Usp. Discorso all\'Incontro mondiale dei Movimenti popolari, Santa Cruz de la Sierra, 9 luglio 2015;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref4\" name=\"_ftn4\" title=\"\">[4]</a>&nbsp;Usp. LS br. 111;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref5\" name=\"_ftn5\" title=\"\">[5]</a>&nbsp;Sv. Ivan Pavao II., enciklika&nbsp;<i>Centesimus annus</i>&nbsp;(1. svibnja 1991.), br. 58;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref6\" name=\"_ftn6\" title=\"\">[6]</a>&nbsp;Enciklika&nbsp;<i>Caritas in veritate</i>&nbsp;(29. lipnja 2009.), br. 27;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref7\" name=\"_ftn7\" title=\"\">[7]</a>&nbsp;Usp. Govor na seminaru&nbsp;<i>&bdquo;Novi oblici solidarnog bratstva, uklju&#269;ivosti, integracije i inovacije&ldquo;</i>&nbsp;u organizaciji Papinske akademije dru&scaron;tvenih znanosti (5. velja&#269;e 2020). Podsje&#263;amo da se &bdquo;prava mudrost, plod razmi&scaron;ljanja, dijaloga i velikodu&scaron;nog susreta me&#273;u ljudima ne posti&#382;e pukim gomilanjem podataka, koje na kraju dovodi &#269;ovjeka do prezasi&#263;enosti i zbunjenosti: rije&#269; je o svojevrsnom one&#269;i&scaron;&#263;enju duha.&ldquo; (LS, br. 47);</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref8\" name=\"_ftn8\" title=\"\">[8]</a>&nbsp;EG, br. 235</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref9\" name=\"_ftn9\" title=\"\">[9]</a>&nbsp;Enciklika Fratelli tutti (3. listopada 2020.), 105. U nastavku teksta FT;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref10\" name=\"_ftn10\" title=\"\">[10]</a>&nbsp;Usp. LS br 216;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref11\" name=\"_ftn11\" title=\"\">[11]</a>&nbsp;Promi&#269;u&#263;i, po potrebi, utaju poreza, nepo&scaron;tivanja prava radnika, kao i &bdquo;mogu&#263;nosti korupcije od strane nekih od najve&#263;ih svjetskih tvrtki, &#269;esto u sprezi s vladaju&#263;im politi&#269;kim sektorom&ldquo; (govor na seminaru&nbsp;<i>&bdquo;Novi oblici solidarnog bratstva, uklju&#269;ivosti, integracije i inovacije&ldquo;</i>)</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref12\" name=\"_ftn12\" title=\"\">[12]</a>&nbsp;LS br. 90. Primjerice &bdquo;kriviti demografski rast, a ne ekstremni i selektivni potro&scaron;a&#269;ki mentalitet nekih, jedan je od na&#269;ina na koji se odbija suo&#269;iti s problemima. Postoji poku&scaron;aj da se ozakoni sada&scaron;nji model raspodjele, po kojemu manjina vjeruje da ima pravo tro&scaron;iti u razmjerima koji nikada ne&#263;e mo&#263;i postati op&#263;e pravilo, jer planet ne bi &#269;ak niti mogao primiti otpad nastao takvom potro&scaron;njom.&ldquo; (LS br 50);</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref13\" name=\"_ftn13\" title=\"\">[13]</a>&nbsp;Iako smo svi obdareni istim dostojanstvom, ne polazimo svi iz iste pozicije i s istim mogu&#263;nostima kada uzmemo u obzir dru&scaron;tveni poredak. To nas propituje i tra&#382;i da izna&#273;emo na&#269;ine kako sloboda i jednakost ne bi bile samo nominalna &#269;injenica koja koristi podr&#382;avanju nepravde (Usp. FT br. 21-23). Dobro je da se zapitamo: &bdquo;&Scaron;to se doga&#273;a kada se bratstvo ne njeguje svjesno, bez politi&#269;ke volje da se ono promi&#269;e kroz odgoj za bratstvo za dijalog, otkrivanje vrijednosti uzajamnosti i uzajamnoga oboga&#263;ivanja?&ldquo; (FT br. 103);</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref14\" name=\"_ftn14\" title=\"\">[14]</a>&nbsp;EG br. 53. U svijetu virtualnosti, promjena i fragmentacije socijalna prava ne mogu biti samo nominalni poticaji ili apeli, ve&#263; moraju biti svjetionik i kompas na putu, jer &ldquo;i zdravlje institucija nekog dru&scaron;tva ima posljedice za okoli&scaron; i kvalitetu ljudskog &#382;ivota&rdquo; (LS br. 142);</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref15\" name=\"_ftn15\" title=\"\">[15]</a>&nbsp;Usp. Ap. konst. Veritatis gaudium (8. prosinca 2017.) br. 3;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref16\" name=\"_ftn16\" title=\"\">[16]</a>&nbsp;LS br. 189;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref17\" name=\"_ftn17\" title=\"\">[17]</a>&nbsp;Sv. Pavao VI., Enciklika Populorum progressio (26. o&#382;ujka 1967.), br. 34. U nastavku teksta PP;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref18\" name=\"_ftn18\" title=\"\">[18]</a>&nbsp;Benedikt XVI., Enciklika Spe salvi (30. studenoga 2007.), br. 38;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref19\" name=\"_ftn19\" title=\"\">[19]</a>&nbsp;PP br. 14;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref20\" name=\"_ftn20\" title=\"\">[20]</a>&nbsp;Govor na Generalnoj skup&scaron;tini UN (25. rujna 2015.);</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref21\" name=\"_ftn21\" title=\"\">[21]</a>&nbsp;Usp. PP br. 65;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref22\" name=\"_ftn22\" title=\"\">[22]</a>&nbsp;FT br. 77;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref23\" name=\"_ftn23\" title=\"\">[23]</a>&nbsp;Usp. ibid., br. 35;</p><p class=\"MsoFootnoteText\"><a href=\"file:///C:/Users/peter/OneDrive/Radna%20povr%C5%A1ina/Papina%20poruka%20FE.docx#_ftnref24\" name=\"_ftn24\" title=\"\">[24]</a>&nbsp;Govor na po&#269;etku Sinode posve&#263;ene mladima (3. listopada 2018.).</p>\n', '2021-04-20 09:59:32', '2021-04-20 09:59:32', 3);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `donations` tinyint(1) NOT NULL,
  `investors` int(11) DEFAULT 0,
  `money_goal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money_collected` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `directory_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `full_name`, `email`, `telephone`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(12, 'Kristina Afrić Rakitovac', 'kafric@unipu.hr', '0989178150', 'Želja mi je promicati Frajinu ekonomiju među studentima Sveučilišta Jurja Dobrile u Puli, na kojem predajem 25 godina', 1, '2021-04-19 04:40:41', '2021-04-26 11:26:40'),
(13, 'Zoran Ivanović', 'zoran.slbrod@gmail.com', '091 929 8785', 'Poštovani/e,\r\nzainteresiran sam za suradnju i prijateljstvo na SLAVU BOŽJU!\r\nBog Vas Blagoslovio!\r\nZoran', 1, '2021-04-20 10:04:16', '2021-04-26 11:45:31'),
(14, 'Marija Pastuovic', 'marija.pastuovic1@gmail.com', NULL, 'Rado pratim ove teme: zajedništvo dobara ...', 1, '2021-04-22 12:57:56', '2021-04-26 11:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `place`, `created_at`, `updated_at`) VALUES
(1, 'Glavni slajder', 'Početna', '2021-04-06 04:06:40', '2021-04-06 04:06:40'),
(2, 'Kalendar slajder', 'Početna', '2021-04-06 04:06:40', '2021-04-06 04:06:40'),
(3, '12 sela slajder', 'O nama', '2021-04-06 04:06:40', '2021-04-06 04:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` bigint(20) UNSIGNED DEFAULT NULL,
  `directory_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `slider_id`, `directory_id`, `image`, `image_description`, `order`, `created_at`, `updated_at`) VALUES
(3, 3, '5id5PZE9nRSJVUta8tfYEclCBAfZVGnbLjKAA0AD4gWfascV0cDKIXR2foXz8Igf', 'zQCVX1WdVUDuNtsDtNPoDkDgwMRl86sah7mqrncy-2021-04-16-06-43-18.jpg', 'menadzment i darivanje', 1, '2021-04-07 06:30:16', '2021-04-16 04:43:18'),
(5, 3, 'IQQor8t01yNGlvxn80vKYtLnDo6mEwWwbz65DQO5sSWdAf1Kc7zzC0r7CQN597ZR', 'cnRjbVYRrm0YXbzMTZPq1pUChDbt4hrfWk8OP7BI-2021-04-16-06-43-34.jpg', 'financije i covjecanstvo', 2, '2021-04-07 06:30:54', '2021-04-16 04:43:34'),
(7, 3, 'nfazUMdV6ppqYAtLnI44micZC2rt8ZMg4ww1vRsGtiGgd9aBa5mnesncTB0iWkTv', 'nbphlAtkGeRRpcqWS4o274mH0qjSr37EIDfQ4saa-2021-04-16-06-43-46.jpg', 'posao i briga', 3, '2021-04-07 06:32:40', '2021-04-16 04:43:46'),
(9, 3, '2NmC6FF61W41ecqlcySgm91FQJkClOLr43lJavMieDyOkrbutPAZyGqVHpL7rbfQ', 'uC4aroIeLLCGNzkLIRZSIql3cUsG9yr96qhDlI9Y-2021-04-16-06-44-00.jpg', 'poljoprivreda i pravednost', 4, '2021-04-07 06:46:09', '2021-04-16 04:45:57'),
(11, 3, 'tdjFBccIw8Uqui0xYfUJXONKnXjVFV5fojDnE41dw1LRf0DjKvMslaDogFDbY95B', '845oXwPJ359U0Jt0qi13PVqE7Rya7sfcnI2t5m0Z-2021-04-16-06-44-10.jpg', 'energija i siromastvo', 5, '2021-04-07 06:49:41', '2021-04-16 04:46:06'),
(13, 3, 'pjxJqhZQNkHTAHKgXAmdbGVZeoloAidtYOkOHm6mkWiGpeZ1dE8oHqvgFp7w1RLb', 'PRSUCuWauFw1sI0lmhj5Jenj4m2foBwWyrRKsWJ2-2021-04-16-06-44-18.jpg', 'poslovanje i mir', 6, '2021-04-07 06:50:59', '2021-04-16 04:46:16'),
(15, 3, 'CD2hJLFiL4KBNKyruSqJpnMavu5NosCSQZgR1fH80JBFfxClQqV3FSPParWFww67', 'mCGXy3Ij328AHxjvWXqMu932bDIAWjipFtbsPYmU-2021-04-16-06-44-27.jpg', 'zene za ekonomiju', 7, '2021-04-07 06:53:55', '2021-04-16 04:46:26'),
(17, 3, 'fReer0GNrtBZM1J11NZ0YlGjupbjsgVyCo60Dp3PrrDmpmEWZ0RZCAdRY4GFDOxr', 'DunqybzWRYvQB33mlRzMU7fv3BJ1TSwR7tgDALzS-2021-04-16-06-44-46.jpg', 'co2 nejednakost', 8, '2021-04-07 06:56:15', '2021-04-16 04:44:46'),
(18, 3, 'wIH7uMm5Dzvn2hw4EDi38ouGoBdifx3cpCXoIpYD7p2aEM9N19Upj8qoE5HiGUzv', 'jxTGLuQmBZJ9GmMnU8aFyIxM21rC5klSTODkaJFP-2021-04-16-06-45-00.jpg', 'poziv i profit', 9, '2021-04-07 06:59:19', '2021-04-16 04:45:00'),
(20, 3, 'prdZHe3M4fHPSlLtMo2CINHTmyLr5obvNidGaL9ozzLwjUfDbjzjMCL9JccwjD5V', 'lCH9CuenaBIX4YvwjwQdcNYEHn98HetVQSPKNsDq-2021-04-16-06-45-15.jpg', 'posao u tranziciji', 10, '2021-04-07 06:59:39', '2021-04-16 04:45:15'),
(22, 3, 'YNwd8SJvgD4wQ9a8qx5V5anj4idqplai9mZyNYEg0pWAFka20iLFnt2kyMndTOcn', 'OsDCENsRwMx2vvlbgxQJ8OO3SIydFESDyl3fbr5r-2021-04-16-06-45-28.jpg', 'zivot i zivotni stil', 11, '2021-04-07 06:59:51', '2021-04-16 04:45:28'),
(25, 3, 'e6awpobaQd3o0UyyTxK7kI3sAhdzZ9JDeskDzIeP4SDlkvLwFbk5d80PjzBUFWxC', 'WNOtwzpZyV5grMT1dpn3KyYdeXfsLjM82zHFAlal-2021-04-16-06-45-43.jpg', 'politike i sreca', 12, '2021-04-07 07:06:02', '2021-04-16 04:45:43'),
(26, 1, 'fhX6zWcgHobMepFLPPeH8K24HMHzghwpVfLSpVCmZnEWt8ZLqwEAIs8ERg6p5Mi5', 'apflP5MBvvnfz8g3NRmyNL4qOtMySRkYJo4viJwk-2021-04-16-06-48-38.jpg', 'mladi ekonomisti, poduzetnici i changemakeri okupljeni', 1, '2021-04-07 07:26:28', '2021-04-16 04:48:38'),
(27, 1, 'Bjoz3R9Guu3SE1DaB7KmCoTTabV6KzB5IsvQsaEV5KymAFGMtUdmTjDPGlgdFYKO', 'X0oHebyU5sDkFHItbww91Tz3QsHw1nIYvahZGw69-2021-04-16-06-49-28.jpg', 'u svrhu davanja doprinosa razvoju nove globalne i lokalne ekonomije', 2, '2021-04-07 07:26:51', '2021-04-16 04:49:28'),
(28, 1, 'C4h8699ifEm1tXnz4E9LQ6zVGF4ezPkaXikRKBDzsy2SAHAz1dlKZO7rShuLALsV', '2BheKlWxFUZjKC2biUalyQLsb4WiucPk3jhzYWj6-2021-04-16-06-49-56.jpg', 'tezimo jednakosti, besplatnosti i opcem dobru svih', 3, '2021-04-07 07:26:57', '2021-04-16 04:49:56'),
(29, 1, 'drJPbEZ20G96R9m9KKA5RDVwn831tJwOWJfpIKRRmU8jKhee3DwXTYQHtkPimFn6', 'U072ARytaUPScD6Dt8y8OvG5JVlpIboRxImVcAZD-2021-04-16-06-50-17.jpg', 'podrucja nasih aktivnosti', 4, '2021-04-07 07:27:03', '2021-04-16 04:50:17'),
(30, 1, 'YfiKKYRv0ndgUz7MUQPpcxCz1wTGZlBF8p38QVHe2ID6H1PuHVPpSOFptQyz2d6m', 'L9QZDiuAbi9CGwJBdBLuEYRvMaZL6IlYa7vjAqS1-2021-04-16-06-50-33.jpg', 'podrucja nasih aktivnosti', 5, '2021-04-07 07:27:09', '2021-04-16 04:50:33'),
(31, 1, '3IOLV9KEBiGIL9glpYp9K5Zki9cmYAWyS8tLSzE1hwBqEFWXKS1cJFRB0pOvKuRc', 'ctgsAyPOVtDlFq4o0o0uZV2J6VKmLe7efmnI6nzq-2021-04-16-06-50-49.jpg', 'zene za ekonomiju', 6, '2021-04-07 07:27:16', '2021-04-16 04:50:49'),
(32, 1, 'wt7Hq5QqtdmjKGiUWmKXHU9Tq7tsu2MsVRWXTXOCvIiWfIhBKzCmqQB1N54fBjrH', 'kS46zXHeQ63acgTsWSX74FkTebHz155ump4zNQZF-2021-04-16-06-51-02.jpg', 'posao u tranziciji', 7, '2021-04-07 07:27:24', '2021-04-16 04:51:02'),
(33, 1, 'wpAwQBU9c2h01d54yfJcvZpLV2GBuckVZFCKEU7OWR1ND5UhRRUffMbXNNdmi49n', 'dztsZUcmB4aozAujm5iLYXUKRZGKvHukvDBTzb6v-2021-04-16-06-51-17.jpg', 'papa Franjo poziva i tebe', 8, '2021-04-07 07:27:31', '2021-04-16 04:51:17'),
(34, 2, 'mgLKTEVAvtfNHoa7FT7Jk1EGyT9cnqh8ROdXSh7CwrwNlWh89UI6xrbUkLVcpn8o', 'JoeBa6TH1L8kWtBLsYQAUVFXaRP7BsA8q5mGSNqV-2021-04-16-06-47-18.jpg', 'nije rijec jednostavno o tomu da imamo vise nego da budemo vise', 1, '2021-04-07 07:42:23', '2021-04-16 04:47:47'),
(35, 2, 'UBg9I8AFGjkD4Q5qIxTNo88AnjErIbkt6y0CWp12ShZzbiTsYjmmw3eUPHw4Iq7j', 'PJyKNRBhWtXzHzAzxyltg3UmCfM6ftPk6RlcRtkU-2021-04-16-06-48-04.jpg', 'ekonomija da, ali i puno ljubavi', 2, '2021-04-07 07:42:29', '2021-04-16 04:48:04'),
(36, 2, 'ioEIjUyj9Z8M7WF7bmy5qIH4Z6nmIn8ytyIuHIxZuq1NaP7fjcnwc9XIKtQE5vrA', 'rez7t9xaQ8aXyRJwxhCHXyplJTR7s4xeo6HEiJI-2021-04-26-13-24-19.jpeg', 'Dragi mladi ekonomisti, poduzetnici, radnici i menadžeri, vrijeme je da se odvažimo na rizik poticanja novih modela razvitka, napretka i održivosti u kojima su protagonisti ljudi, a osobito oni isključeni. (Papa Franjo)', NULL, '2021-04-26 11:24:19', '2021-04-26 11:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`, `role`) VALUES
(1, 'Administrator', 'admin@admin.com', NULL, '$2y$10$QCly6bqwcKJLmZQT55eHueItUrJ9qkMg/tSAClkCmCs8WalvbOPFe', NULL, NULL, NULL, 'active', 1),
(2, 'Franjina Ekonomija', 'admin@franjinaekonomija.com', NULL, '$2y$10$rsoUHCDGE5hJqrCddXKb.u/dbVluhLu116rFGIgm8/KxR.LKnVzN2', 'azGbiFjuxUlANiSEoZf0nBXPJgDBMBLEmMWxMBv78mMFWLNtIXaLSTzhFzK6', '2021-04-09 05:53:28', '2021-04-14 06:05:24', 'active', 2),
(3, 'Bloger', 'bloger@franjinaekonomija.hr', NULL, '$2y$10$94SkS.aioOzsQ.D6IXown.Hx49QxqR1Wy/rsM9V.7wx9TDDEyKRkW', NULL, '2021-05-06 07:34:00', '2021-05-06 07:34:00', 'active', 4),
(4, 'Upravitelj sadržajem', 'upravitelj.sadrzajem@franjinaekonomija.hr', NULL, '$2y$10$fexvhR3271yVNy7YN173COOZCdF7F4NlAG.JUhQ4acW1AiR1s2g22', NULL, '2021-05-06 08:04:59', '2021-05-06 08:04:59', 'active', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloggers`
--
ALTER TABLE `bloggers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gdpr`
--
ALTER TABLE `gdpr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_index` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_images_slider_id_foreign` (`slider_id`);

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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bloggers`
--
ALTER TABLE `bloggers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gdpr`
--
ALTER TABLE `gdpr`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_images`
--
ALTER TABLE `project_images`
  ADD CONSTRAINT `project_images_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD CONSTRAINT `slider_images_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
