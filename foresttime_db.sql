-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 03:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foresttime_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Gardening', NULL, NULL),
(2, 'Outdoor Living', NULL, NULL),
(3, 'Indoor Living', NULL, NULL),
(4, 'Shopping Guides', NULL, NULL),
(5, 'Pool Design', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `created_at`, `updated_at`, `content`, `user_id`, `post_id`, `deleted_at`) VALUES
(123, '2021-03-15 11:34:54', '2021-03-15 11:34:54', 'Nice post!', 53, 2, NULL),
(124, '2021-03-15 13:43:01', NULL, 'Comment.', 47, 1, NULL),
(125, '2021-03-16 13:43:06', NULL, 'Comment', 34, 15, NULL),
(126, '2021-03-15 13:43:27', NULL, 'Comment...', 53, 5, NULL),
(127, '2021-03-15 13:43:32', NULL, 'Nice post', 36, 2, NULL);

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
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id`, `subject`, `url`, `ip`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'LOGGED IN', '/foresttime/public/do-login', '::1', 52, '2021-03-12 15:03:57', NULL),
(2, 'LOGGED OUT', '/foresttime/public/logout', '::1', 52, '2021-03-12 15:17:18', '2021-03-12 15:17:18'),
(3, 'LOGGED IN', '/foresttime/public/do-login', '::1', 51, '2021-03-12 15:18:21', '2021-03-12 15:18:21'),
(4, 'LOGGED IN', '/foresttime/public/do-login', '::1', 51, '2021-03-12 16:00:08', '2021-03-12 16:00:08'),
(5, 'LOGGED OUT', '/foresttime/public/logout', '::1', 51, '2021-03-12 16:28:10', '2021-03-12 16:28:10'),
(6, 'LOGGED IN', '/foresttime/public/do-login', '::1', 51, '2021-03-12 16:28:22', '2021-03-12 16:28:22'),
(7, 'LOGGED OUT', '/foresttime/public/logout', '::1', 51, '2021-03-12 16:28:27', '2021-03-12 16:28:27'),
(8, 'LOGGED IN', '/foresttime/public/do-login', '::1', 52, '2021-03-12 16:28:38', '2021-03-12 16:28:38'),
(9, 'LOGGED OUT', '/foresttime/public/logout', '::1', 52, '2021-03-12 16:56:33', '2021-03-12 16:56:33'),
(10, 'LOGGED IN', '/foresttime/public/do-login', '::1', 52, '2021-03-12 16:57:14', '2021-03-12 16:57:14'),
(11, 'LOGGED IN', '/foresttime/public/do-login', '::1', 52, '2021-03-12 19:32:14', '2021-03-12 19:32:14'),
(12, 'LOGGED IN', '/foresttime/public/do-login', '::1', 52, '2021-03-13 12:31:16', '2021-03-13 12:31:16'),
(13, 'CREATED POST', '/foresttime/public/user/post', '::1', 52, '2021-03-13 17:51:45', '2021-03-13 17:51:45'),
(14, 'CREATED POST', '/foresttime/public/user/post', '::1', 52, '2021-03-13 18:01:00', '2021-03-13 18:01:00'),
(15, 'LOGGED OUT', '/foresttime/public/logout', '::1', 52, '2021-03-13 18:32:07', '2021-03-13 18:32:07'),
(16, 'LOGGED IN', '/foresttime/public/do-login', '::1', 51, '2021-03-13 18:32:20', '2021-03-13 18:32:20'),
(17, 'LOGGED OUT', '/foresttime/public/logout', '::1', 51, '2021-03-13 20:55:42', '2021-03-13 20:55:42'),
(18, 'LOGGED IN', '/foresttime/public/do-login', '::1', 51, '2021-03-13 20:55:52', '2021-03-13 20:55:52'),
(19, 'LOGGED OUT', '/foresttime/public/logout', '::1', 51, '2021-03-13 20:55:55', '2021-03-13 20:55:55'),
(20, 'LOGGED IN', '/foresttime/public/do-login', '::1', 52, '2021-03-13 20:56:11', '2021-03-13 20:56:11'),
(21, 'LOGGED IN', '/foresttime/public/do-login', '::1', 51, '2021-03-14 15:52:56', '2021-03-14 15:52:56'),
(22, 'LOGGED OUT', '/foresttime/public/logout', '::1', 51, '2021-03-14 16:15:44', '2021-03-14 16:15:44'),
(23, 'LOGGED IN', '/foresttime/public/do-login', '::1', 52, '2021-03-14 16:41:08', '2021-03-14 16:41:08'),
(24, 'ADDED COMMENT', '/foresttime/public/user/comment/1', '::1', 52, '2021-03-14 16:42:31', '2021-03-14 16:42:31'),
(25, 'EDITED COMMENT', '/foresttime/public/user/comment/121', '::1', 52, '2021-03-14 16:43:49', '2021-03-14 16:43:49'),
(26, 'EDITED COMMENT', '/foresttime/public/user/comment/121', '::1', 52, '2021-03-14 16:43:49', '2021-03-14 16:43:49'),
(27, 'EDITED COMMENT', '/foresttime/public/user/comment/121', '::1', 52, '2021-03-14 16:43:49', '2021-03-14 16:43:49'),
(28, 'EDITED COMMENT', '/foresttime/public/user/comment/121', '::1', 52, '2021-03-14 16:43:49', '2021-03-14 16:43:49'),
(29, 'EDITED COMMENT', '/foresttime/public/user/comment/121', '::1', 52, '2021-03-14 16:44:04', '2021-03-14 16:44:04'),
(30, 'DELETED COMMENT', '/foresttime/public/user/comment/121', '::1', 52, '2021-03-14 16:44:10', '2021-03-14 16:44:10'),
(31, 'ADDED COMMENT', '/foresttime/public/user/comment/1', '::1', 52, '2021-03-14 16:44:22', '2021-03-14 16:44:22'),
(32, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-14 17:48:13', '2021-03-14 17:48:13'),
(33, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-14 18:18:23', '2021-03-14 18:18:23'),
(34, 'CHANGED PASSWORD', '/foresttime/public/user/52', '::1', 52, '2021-03-14 20:01:43', '2021-03-14 20:01:43'),
(35, 'CHANGED PASSWORD', '/foresttime/public/user/52', '::1', 52, '2021-03-14 20:11:33', '2021-03-14 20:11:33'),
(36, 'LOGGED OUT', '/foresttime/public/logout', '::1', 52, '2021-03-14 20:25:13', '2021-03-14 20:25:13'),
(37, 'LOGGED IN', '/foresttime/public/do-login', '::1', 57, '2021-03-14 20:25:52', '2021-03-14 20:25:52'),
(38, 'DEACTIVATED ACCOUNT', '/foresttime/public/user/57', '::1', 57, '2021-03-14 20:26:05', '2021-03-14 20:26:05'),
(39, 'LOGGED OUT', '/foresttime/public/logout', '::1', 57, '2021-03-14 20:26:06', '2021-03-14 20:26:06'),
(43, 'LOGGED OUT', '/foresttime/public/logout', '::1', 51, '2021-03-14 20:33:32', '2021-03-14 20:33:32'),
(44, 'LOGGED IN', '/foresttime/public/do-login', '::1', 51, '2021-03-14 22:35:47', '2021-03-14 22:35:47'),
(45, 'LOGGED IN', '/foresttime/public/do-login', '::1', 52, '2021-03-15 07:31:45', '2021-03-15 07:31:45'),
(46, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 07:39:34', '2021-03-15 07:39:34'),
(47, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 07:44:27', '2021-03-15 07:44:27'),
(48, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 07:45:01', '2021-03-15 07:45:01'),
(49, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 07:46:35', '2021-03-15 07:46:35'),
(50, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 07:49:17', '2021-03-15 07:49:17'),
(51, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 07:51:19', '2021-03-15 07:51:19'),
(52, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 07:51:29', '2021-03-15 07:51:29'),
(53, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 07:52:28', '2021-03-15 07:52:28'),
(54, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 08:01:27', '2021-03-15 08:01:27'),
(55, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 08:09:21', '2021-03-15 08:09:21'),
(56, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 08:12:29', '2021-03-15 08:12:29'),
(57, 'UPDATED PROFILE', '/foresttime/public/user/52', '::1', 52, '2021-03-15 08:13:41', '2021-03-15 08:13:41'),
(58, 'LOGGED OUT', '/foresttime/public/logout', '::1', 52, '2021-03-15 09:12:39', '2021-03-15 09:12:39'),
(59, 'LOGGED IN', '/foresttime/public/do-login', '::1', 52, '2021-03-15 09:13:00', '2021-03-15 09:13:00'),
(60, 'LOGGED OUT', '/foresttime/public/logout', '::1', 52, '2021-03-15 09:13:06', '2021-03-15 09:13:06'),
(61, 'LOGGED IN', '/foresttime/public/do-login', '::1', 51, '2021-03-15 09:13:14', '2021-03-15 09:13:14'),
(62, 'DELETED COMMENT', '/foresttime/public/user/comment/122', '::1', 51, '2021-03-15 09:33:54', '2021-03-15 09:33:54'),
(63, 'LOGGED OUT', '/foresttime/public/logout', '::1', 51, '2021-03-15 10:01:28', '2021-03-15 10:01:28'),
(64, 'LOGGED IN', '/foresttime/public/do-login', '::1', 53, '2021-03-15 10:18:17', '2021-03-15 10:18:17'),
(65, 'UPDATED PROFILE', '/foresttime/public/user/53', '::1', 53, '2021-03-15 10:19:18', '2021-03-15 10:19:18'),
(66, 'CHANGED PASSWORD', '/foresttime/public/user/53', '::1', 53, '2021-03-15 10:23:29', '2021-03-15 10:23:29'),
(67, 'LOGGED OUT', '/foresttime/public/logout', '::1', 53, '2021-03-15 10:49:05', '2021-03-15 10:49:05'),
(68, 'LOGGED IN', '/foresttime/public/do-login', '::1', 53, '2021-03-15 11:29:31', '2021-03-15 11:29:31'),
(69, 'ADDED COMMENT', '/foresttime/public/user/comment/2', '::1', 53, '2021-03-15 11:34:54', '2021-03-15 11:34:54'),
(70, 'LOGGED OUT', '/foresttime/public/logout', '::1', 53, '2021-03-15 11:55:32', '2021-03-15 11:55:32'),
(71, 'LOGGED IN', '/foresttime/public/do-login', '::1', 51, '2021-03-15 11:56:05', '2021-03-15 11:56:05'),
(72, 'LOGGED OUT', '/foresttime/public/logout', '::1', 51, '2021-03-15 12:39:29', '2021-03-15 12:39:29'),
(73, 'LOGGED IN', '/foresttime/public/do-login', '::1', 51, '2021-03-15 12:43:53', '2021-03-15 12:43:53'),
(74, 'LOGGED OUT', '/foresttime/public/logout', '::1', 51, '2021-03-15 12:55:40', '2021-03-15 12:55:40'),
(75, 'LOGGED IN', '/foresttime/public/do-login', '::1', 51, '2021-03-15 12:56:17', '2021-03-15 12:56:17'),
(76, 'LOGGED OUT', '/foresttime/public/logout', '::1', 51, '2021-03-15 12:56:21', '2021-03-15 12:56:21'),
(77, 'LOGGED IN', '/foresttime/public/do-login', '::1', 53, '2021-03-15 12:56:33', '2021-03-15 12:56:33'),
(78, 'LOGGED OUT', '/foresttime/public/logout', '::1', 53, '2021-03-15 12:56:37', '2021-03-15 12:56:37'),
(79, 'LOGGED IN', '/foresttime/public/do-login', '::1', 53, '2021-03-15 13:01:46', '2021-03-15 13:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `route`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Home', 'home', NULL, '2021-03-05 08:36:03', '2021-03-05 08:36:03', NULL),
(2, 'Contact', 'contact', NULL, NULL, NULL, NULL),
(3, 'Author', 'author', NULL, NULL, NULL, NULL),
(5, 'My Posts', 'user-posts', 1, NULL, NULL, NULL),
(6, 'Dashboard', 'dashboard', 2, '2021-03-10 23:00:00', '2021-03-10 23:00:00', NULL);

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
(4, '2021_02_09_174913_create_menus_table', 1),
(5, '2021_02_09_214905_create_posts_table', 1),
(6, '2021_02_09_214951_create_categories_table', 1),
(7, '2021_03_03_131624_create_roles_table', 1),
(8, '2021_03_04_171147_create_visits_table', 1),
(9, '2021_03_04_171452_create_photos_table', 1),
(10, '2021_03_04_171608_create_comments_table', 1),
(11, '2021_03_04_172719_create_socials_table', 1),
(12, '2021_03_11_185256_add_deleted_at_to_users_table', 2),
(13, '2021_03_12_092128_add_deleted_at_to_posts_table', 3),
(14, '2021_03_12_092222_add_deleted_at_to_comments_table', 4),
(15, '2021_03_12_092323_add_deleted_at_to_menus_table', 5),
(16, '2021_03_12_092402_add_deleted_at_to_socials_table', 6),
(17, '2021_03_12_124352_create_log_activity_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbPhoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `thumbPhoto`, `created_at`, `updated_at`, `user_id`, `category_id`, `deleted_at`) VALUES
(1, 'Gardening: The Three Sisters', '<p>Did you know that corn, beans, and squash are called the “<strong>Three Sisters</strong>”? A number of Native American tribes&nbsp;interplanted this trio because they thrive together, much like three inseparable&nbsp;sisters. Here’s how to plant your own Three Sisters&nbsp;garden.</p><h3>WHAT IS A THREE SISTERS&nbsp;GARDEN?</h3><p>The Three Sisters method is companion planting at its best, with three plants growing symbiotically to deter weeds and pests, enrich the soil, and support each&nbsp;other.&nbsp;</p><p>Instead of today’s single rows of a single vegetable, this method of interplanting introduced biodiversity, which does many things—from attracting pollinators to making the land richer instead of stripping it of nutrients. In a sense, we take no more from&nbsp;nature than&nbsp;what we give&nbsp;back.</p><p>By the time European settlers arrived in America in the early 1600s, the Iroquois had been growing the “three sisters” for over three centuries. The vegetable trio sustained the Native Americans both physically and spiritually. In legend, the plants were a gift from the gods, always to be grown together, eaten together, and celebrated&nbsp;together.</p><p>Each of the sisters contributes something to the planting. Together, the sisters provide a balanced diet from a single&nbsp;planting.&nbsp;</p><ul><li>As older sisters often do, the corn offers the beans necessary&nbsp;support.</li><li>The pole beans, the giving sister, pull nitrogen from the air and bring it to the soil for the benefit of all&nbsp;three.</li><li>As the beans grow through the tangle of squash vines and wind their way up the cornstalks into the sunlight, they hold the sisters close&nbsp;together.</li><li>The large leaves of the sprawling squash protect the threesome by creating living mulch that shades the soil, keeping it cool and moist and preventing&nbsp;weeds.</li><li>The prickly squash leaves also keep away raccoons and other pests, which don’t like to step on&nbsp;them.</li></ul><h3>WHICH SEEDS TO&nbsp;PLANT</h3><p>In modern-day gardens, the Three Sisters consists of these three&nbsp;vegetables:</p><ol><li><a href=\"https://www.almanac.com/plant/beans\"><strong>Pole beans</strong></a> (not bush beans). Common pole beans such as Scarlet Runner or Italian Snap should work. The ‘Ohio Pole Bean’ is our favorite. We’ve also heard that some very vigorous hybrid pole beans clambering up skinny hybrid corn stalks can pull them down. So if you want to be extra cautious, look for less vigorous climbers. If you’d like to try native varieties, look for&nbsp;<a href=\"https://www.nativeseeds.org/products/fd062\">Four Corners Gold Beans</a>&nbsp;or <a href=\"https://www.nativeseeds.org/products/pc105\">Hopi Light Yellow</a>.<br>&nbsp;</li><li><a href=\"https://www.almanac.com/plant/corn\"><strong>Corn</strong></a> such as sweet corn, dent corn, or popcorn, or a combination.&nbsp;Your favorite sweet corn variety will do, although Native Americanas used a hearier corn with shorter stalks or&nbsp;many-stalked varieties so that the beans didn’t pull down the corn such as pale yellow <a href=\"https://www.nativeseeds.org/products/zp101\">Tarhumara corn</a>, Hopi&nbsp;White corn, or heritage&nbsp;<a href=\"https://www.victoryseeds.com/corn_black-aztec-sweet.html\">Black Aztec</a>,&nbsp;<br>&nbsp;</li><li><a href=\"https://www.almanac.com/plant/squash-and-zucchini\"><strong>Small-leafed squash</strong></a> such as summer squash (zucchini) or winter squash (Hubbard). <strong>Note:</strong> Pumpkins are&nbsp;too vigorous and heavy; plant in a separate bed.&nbsp;Native American squash was different, but a yellow summer crookneck is similar&nbsp;enough.</li></ol><p>If you do wish to investigate pure strains of native seeds, reach out to experts such as&nbsp;Native Seeds/SEARCH, a nonprofit headquartered in Tucson, Arizona, or Native American cultural&nbsp;museums.</p><h3>HOW TO PLANT THE THREE&nbsp;SISTERS</h3><p>There are variations to the Three Sisters method, but the idea is to plant the&nbsp;sisters in clusters on low wide mounds rather than in a single traditional&nbsp;row.</p><p>Before planting, choose a sunny location (at least 6 hours of full sun every day). This method of planting isn’t based on rows, so think in terms of a small field. Each hill will be about 4 feet wide and 4 feet apart, with 4 to 6 corn plants per hill. Calculate your space with this in&nbsp;mind.</p><ol><li>In the spring,&nbsp;<a href=\"https://www.almanac.com/content/preparing-soil-planting\">prepare the soil</a>&nbsp;with plenty of organic matter and weed-free compost.&nbsp;Adjust the soil with fish scraps or wood ash if needed.<br>&nbsp;</li><li>Make a mound of soil about a foot high and 3 to 4 feet wide with a flat top that is about 10 inches across. For multiple mounds, space about four feet apart.<br>&nbsp;</li><li>Plant corn first once danger of frost has passed and nighttime temperatures reach 55°F. Don’t plant&nbsp;any later than June 1 in most areas, since corn&nbsp;requires a long&nbsp;growing season.&nbsp;<a href=\"https://www.almanac.com/gardening/frostdates\">See local frost dates</a>.&nbsp;<br>&nbsp;</li><li>Sow six kernels of corn an inch deep in the flat part of the mound, about ten inches apart in a circle of about 2 feet in diameter.&nbsp;<br>&nbsp;</li><li>Don’t&nbsp;plant the beans and squash until the&nbsp;corn is about 6&nbsp;inches to 1 foot tall. This ensures that the corn stalks will be strong enough to support the beans.&nbsp;The beans’ role is to fix nitrogen in the soil, which is needed for strong&nbsp;corn production. You can grow several pole bean varieties without worrying about hybrids, but just plant one variety per hill. (<strong>Tip:</strong> Another option is to plant corn transplants; in this case, you’d plant them at the same time as the beans.)<br>&nbsp;</li><li>Once corn is 6&nbsp;inches to 1 foot&nbsp;tall, plant&nbsp;four bean seeds, evenly spaced, around each stalk. (<strong>Tip: </strong>If you coat your bean seeds with an innoculant before planting, you will fix nitrogen in the soil and that will benefit all of the plants.)<br>&nbsp;</li><li>About a week later, plant six squash seeds, evenly spaced, around the perimeter of the mound. See the spacing for squash on your packet; usually this is about 18 inches apart. You may wish to put two seeds in each hole to ensure&nbsp;germination.</li></ol><p>Sometimes a fourth sister is included, such as a sunflower or amaranth, which attracts pollinators and lures birds away from the seeds. Sunflowers can be planted at the cross section of the spaces between the corn hills, and harvested for seeds.&nbsp;Amaranth could come up among the squash, and could be&nbsp;harvested both for greens and for&nbsp;seeds.</p><p>Watch our video demonstrating how to plant a three sisters&nbsp;garden.</p>', '1615484238.jpg', '2021-03-05 09:22:28', '2021-03-11 16:37:18', 51, 1, NULL),
(2, 'Growing Peanuts In Cooler Climates', 'Did you know that peanuts are actually a legume and not a nut? I only discovered this a few years ago. Famous as a salty roasted treat, peanuts can be eaten fresh and cooked much the same way as you would prepare other legumes.\r\n\r\nThey are generally seen ', 'growingpeanuts1.jpg', '2021-03-05 11:00:00', '2021-03-04 23:00:00', 36, 1, NULL),
(3, 'Hardneck Garlic: Scapes, Bulbils & Umbels', 'When you plant hardneck garlic they will develop what is called a scape (flower stalk). This is a thick curly stalk in the center of the leaves. You\'ll recognize the scape by its tubular shape and distinctive curl.\r\n\r\nIn order to grow a large bulb, the sc', 'hardneck-garlic1.jpg', '2021-03-05 09:40:09', '2021-03-05 09:40:09', 40, 1, NULL),
(4, '5 Plants for the Home Office\r\n', 'Although cacti and succulents are still a go-to option for a headache-free greening of your work space, you can easily introduce leafy green plants at your desk, given that you choose among those which don’t require a lot of maintenance. The selection of ', 'houseplants1.jpg', '2021-03-05 09:44:34', '2021-03-05 09:44:34', 48, 3, NULL),
(5, 'Plants that Thrive in the Bathroom\r\n', 'The key to making the most of your plants’ potential is understanding the bathroom environment and choosing varieties that will thrive in it. It doesn’t matter if your space is ultra-modern or quite traditional, a houseplant or two will always create an i', 'bathroomplants1.jpg', '2021-03-05 09:44:35', '2021-03-05 09:44:34', 42, 3, NULL),
(12, 'Outdoor Home Swimming Pools: Complete Guide', '<p>A swimming pool sounds like the ultimate luxury, but it pays to think carefully about the type you install and maintenance first</p><p>What could be better than having a pool available on demand for your own private use?&nbsp;So what are the choices, what’s the difference between a good pool and a bad pool, and how do you know whether having one is right for you?</p><h2><strong>The Options for a Swimming Pool</strong></h2><p>&nbsp;</p><p>While there is little doubt that an indoor pool is viewed as an asset to a house that can comfortably accommodate it, in our temperate British climate an outdoor pool is often considered something of a nuisance – a blight to an otherwise attractive garden – as opposed to a selling point. Future buyers may well take into account the cost of removing it — potentially devaluing the property. However, this depends greatly on the pool in question as modern construction methods can eliminate a lot of the risks.</p><p>The cheapest solution is an&nbsp;<strong>above-ground outdoor pool</strong>, which costs from around&nbsp;<strong>£2,500</strong>&nbsp;for a 24 x 12ft model. A competent DIYer could install one themselves, though it will do nothing for the value of the property. It is, however, easier to remove than an in-ground pool.</p><p>For DIY enthusiasts,&nbsp;<strong>self build in-ground kits</strong>&nbsp;start from around&nbsp;<strong>£5,000&nbsp;</strong>(excluding additional building materials and machinery hire), but you will require some building knowledge to install one.</p><p>At the lower end of the outdoor pool market, a&nbsp;<strong>customised in-ground liner kit</strong>&nbsp;installed by a professional starts at&nbsp;<strong>£25,000</strong>&nbsp;and a mosaic tiled concrete pool costs from around&nbsp;<strong>£45,000</strong>.</p><p>At the top end of the market companies such as&nbsp;<a href=\"https://www.compass-pools.co.uk/\">Compass Pools</a>&nbsp;offer a cutting edge one piece solution delivered to your home as a finished pool. Made from carbon ceramic they incorporate integrated insulation and an antibacterial layer that reduces the need for chemicals.</p><p>They are essentially a yacht in reverse to eliminate a lot of the problems with leaks and maintenance associated with older tiled or liner pools. Their pools as a fully installed inground pool project range from £50,000 to £150,000.</p><p>When it comes to indoor pools, prices vary greatly, from around&nbsp;<strong>£60,000 to £150,000</strong>&nbsp;all-in (to include an environmental control system or air handling unit such as a dehumidifier), depending on the chosen pool. When budgeting for an indoor pool you also have to consider the cost of the building itself, very similar in cost to an extension. Typical costs range from £1,000/m² upward depending on the quality of the finishes and spec.</p><p>For those on a tighter dget, sliding dome covers offer the best of both worlds giving you an indoor pool that can be turned into an outdoor pool just like a convertible car.</p><h2><strong>How Much Will We Use It?</strong></h2><p>One of the biggest worries that potential swimming pool owners have is how much use they will get out of it. It’s a significant sacrifice in terms of cost and garden space so you’ll need to be sure that you’ll be enjoying it to the max.</p><p>Of course, if you’re building an indoor pool, it’s not an issue, but for outside pools – which form the overwhelming majority – you will also be governed by the seasons. “Outdoor pools are mainly used from late March until the end of September, but we have customers who swim all year round, especially those that heat their pool up for a Christmas dip, with the steam rising up,” says Alex Kemsley from Compass Pools.</p><p>Largely, your ability to use it depends on your willingness to&nbsp;<a href=\"https://www.homebuilding.co.uk/swimming-pools#heat\">heat</a>&nbsp;it — but unless you’re investing significantly in an energy-efficient system (perhaps linked to a&nbsp;<a href=\"https://www.homebuilding.co.uk/how-to-choose-heat-pumps\">ground-source heat pump</a>) or are willing to spend a fortune on heating it conventionally, you will have to accept that it is going to be lying dormant for at least half of the year.</p><h2><strong>What Size Should my Swimming Pool Be?</strong></h2><p>Swimming pools come in a variety of sizes and the temptation is to try and economise on size to minimise costs.&nbsp;The smallest is usually 6 x 3m but as that requires little more than a handful of strokes to tick off a length, you might find it a little frustrating. At this size, most customers install a swim jet or counter current to allow their pool to be turned into a treadmill.</p><p>The standard is actually 11 x 4m (x 1.5m deep), with most companies offering a larger size off-the-shelf (although most will create bespoke sizes if you insist). This size gives a nice balance of usability and running costs, as the bigger the pool the more water to heat. You will, of course, need extra space around the pool of about 2m — plus associated space for a plant and filtration kit.</p><p>&nbsp;</p><h2><strong>How Will I Heat a Swimming Pool?</strong></h2><p>Swimming pools require a significant amount of energy to keep warm. Pool heaters look a bit like boilers and can run off oil, electricity or gas. Some modern systems will use air-source heat pumps to extract energy from the air. You can expect up to 5kW from 1kW of electricity.</p><p>When choosing a pool shell –&nbsp;be it concrete, liner or one piece –&nbsp;it’s worth considering the long-term running costs as a little investment early on in an efficient pool shell and cover, can pay dividends in the long run.</p><p>One of the problems is that, unlike an enclosed space, the pool will lose heat just as soon as it gets up to the required temperature (usually 26–30°C). Alex from Compass Pools comments: “most of our customers opt for an air-source heat pump, with typical running costs of just £5 per day in summer, for a 11m x 4m insulated carbon ceramic pool.” For those looking to go a step further, investment in a super energy-efficient system (perhaps to linked to a ground-source&nbsp;heat pump) with a solar cover could expect even lower running costs.</p><p>Traditionally, when not used, a solar and debris blanket covers the pool to minimise losses (around 80 per cent of a pool’s heat escapes through the surface).</p><p>The clever option is to invest in some form of renewables setup, which runs through a heat exchanger to heat the water. Using a solar thermal array makes sense, as the pool will be heated well on the sunny days when you really want to use the pool.</p><p>Another option is to use&nbsp;biomass&nbsp;(linked to a heat store). For these more complex solutions you’ll need specialist advice, but the significant investment is usually well worth it.</p><h2><strong>Swimming Pool Maintenance</strong></h2><p>Because heat breaks down chlorine, the key job is really one of topping up and checking pH and chlorine levels. The good news is that the maintenance jobs are fairly routine — there are even apps that will help you monitor pH and temperature levels and you can buy automatic dosing systems.</p><p>If you hate the thought of using chlorine, then you can install a pool salt&nbsp;system.</p><h2><strong>How to Build a Swimming Pool</strong></h2><p>&nbsp;</p><p>Pool companies factor in the weight of water as a counterbalance against the walls caving in, so an empty pool is a structural risk.</p><p>There are essentially four ways of building a pool. Most common is the traditional block and liner technique, which, as its name suggests, consists of masonry blocks and a vinyl liner (the liners usually have a lifespan of around 5–10 years). Secondly, a gunite shell – which is made up of a steel mesh frame onto which shotcrete or gunite is sprayed – is finished with a waterproof render and tiled. Thirdly, a polyethylene&nbsp;preformed shell is used.</p><p>And finally a more recent development, the carbon ceramic shell. This uses technology from the aerospace industry to deliver an energy efficient pre-made shell ready plumbed and all fitted out to your specification —&nbsp;bit like ordering a car.</p><p>The techniques get progressively more expensive but also quicker to install, are less prone to failure (cracking and liner failure being the two killers for the outdoor swimming pool) and more efficient to run.</p><p>When employing a pool installer, make sure they are a member of <a href=\"http://www.spata.co.uk/\">SPATA</a> (the Swimming Pool and Allied Trade Association). This means you will automatically be protected against them being unable to complete the contract, and will have warranty insurance cover.&nbsp;</p><h2><strong>How Much Does a Swimming Pool Cost?</strong></h2><p>&nbsp;</p><p>This&nbsp;Californian-style self build&nbsp;in South Wales includes an outdoor swimming pool (Image credit: Hyde + Hyde Architects)</p><p>A block and liner pool kit at a standard size starts from around £3–4,000. Add to that the costs of installation, pump, covers and filtration systems, and realistically you should be budgeting £7–10,000. This however excludes the costs of excavation, soil away, building materials such as concrete and blockwork, and any specialist labour such as screeding. Costs of the labour will depend where you are in the country.</p><p>Most professional installations on a typical 11m x 4m pool, that includes all&nbsp;<a href=\"https://www.homebuilding.co.uk/trades-groundworks\">groundworks</a>&nbsp;and materials with a good selection of renewable energy options, a good warranty and safety cover start from £50,000 with the average being around £80,000.</p><p>Running costs are around £5&nbsp;a day in summer and £10 a day if using year-round for heating and chemicals, and you will also have to pay for necessary repairs.</p><h2><strong>Does a Swimming Pool Add Value?</strong></h2><p>It’s a tricky one. “If pushed, I would have to say that it doesn’t usually add anything to the value,” says Liz Lord from Worcestershire estate agents Allan Morris &amp; Jones.</p><p>“Unfortunately, the ones I do see tend to be poorly maintained, and potential buyers worry about the heating costs, too,” she explains. “I’m afraid the perception is that we don’t have the summers to make the most of them, and in my experience they are less fashionable than they were.”</p><p>&nbsp;</p><p>For a certain market, however, it’s a different story. Justin Godfrey, from Savills’ Bishops Stortford office, comments: “Once you reach the above £3m mark, there’s an expectation that certain things will already exist in the sale, and a pool, be it indoor or outdoor, is high on the buying criteria.</p><p>“If the property sits in the countryside with a certain amount of acreage, then a swimming pool would be almost essential to achieve a maximum price. If there is no swimming pool, then buyers looking for such a property as their main residence, are likely to be factoring building costs into the overall sum.”</p><p>If you are building an integrated indoor pool&nbsp;at the same time as a house, then it is largely&nbsp;<a href=\"https://www.homebuilding.co.uk/maximise-your-vat-reclaim\">VAT</a>&nbsp;free, if part of your overall build.</p><h2><strong>How Do I Keep a Swimming Pool Safe?</strong></h2><p>Safety is a huge issue, but with a sensible approach it can be built in to the installation, and risk – while never entirely removed – can be minimised.</p><p>According to Alex Kemsley from Compass Pools, “I can’t remember the last time we installed a pool without a safety cover. They are a fair investment starting at £10,000, however they can save a life. They also make life a lot easier as the pool is opened at the touch of a button, dirt is kept out and heat is added by turning the entire pool into a big solar panel”.</p><p>Your safest bet? A 4ft-high locked and alarmed) fence around the pool with an automatic safety cover and rescue equipment nearby. It’s also worth checking out a French-standard pool alarm (from around £500), which protects the perimeter of the pool using infra-red technology — a bit like a burglar alarm.</p><p>Get updates from all sorts of things that matter to you</p><p><br>&nbsp;</p><p><br>&nbsp;</p>', '1615487259.jpg', '2021-03-11 17:27:39', '2021-03-12 08:38:05', 53, 5, '2021-03-12 08:38:05'),
(13, 'Garden Design for a Swimming Pool Area', '<p>&nbsp;</p><p>Landscaping a swimming pool area is a different challenge for everyone, just as the design of each house and garden is unique. But when it comes to choosing pool landscape plants there are some universal considerations: easy maintenance, privacy, safety, the right size, and scent.</p><p>Many swimming pool owners aren’t sure where to start to create the desired look, whether it’s a tropical oasis or a modern, minimalist retreat. Here we answer a few questions to help you begin your pool landscaping journey.</p><p>(N.B.: Coming next week—a list of our favorite landscape plants for swimming pool areas, with suggestions for every climate.)</p><p>Photography by Matthew Williams for Gardenista, except where noted.</p><h2><strong>What is the first step to take when landscaping a pool area?</strong></h2><p>Design is the starting point. Choose a planting theme, such as modern or tropical, and of course, keep in mind your existing landscape and home architecture so that all the elements complement one another. Your pool area still requires the consideration of basic garden design elements of scale, proportion, balance, color,&nbsp;and texture.</p><h2><strong>What are the best low-maintenance pool landscape plants?</strong></h2><p>Choose plants that keep their leaves all year so that you don’t have a leaf mess. Also choose evergreen grass-like plants such as lomandra, phormium,&nbsp;and liriope, which don’t need to be cut back (and you won’t be chasing cut blades around the garden after pruning).</p><p>Avoid messy plants that drop leaves, needles, fruits, or nuts. A key goal should be to minimize the amount of leaf debris. Not only do certain paper-thin and tiny flowers (crepe myrtle, bougainvillea, azalea) clog pool filters, but fruits and berries from trees can drop and stain the pool hardscape.</p><h2><strong>What are the best pool landscape plants for privacy?</strong></h2><p>Consider the perimeter area of your space, and be aware of any exposed views. Relaxing in your swimsuit in full view of the neighbors feels like swimming in a fishbowl. Start at the fence line and landscape your way in, incorporating different layers and heights and being mindful of deciduous trees that in winter may suddenly open up an unwanted view.</p><h2><strong>What safety issues should I consider when choosing pool landscape plants?</strong></h2><p>Despite my deep loyalty and support for pollinators, I suggest avoiding plants adored by bees to minimize accidental stings. Also, as mentioned above, avoid any plant with spikes, thorns, or sharp blades that may hang into the pool (that means you <i>Miscanthus</i>, yucca, and cactus). Another point to remember: Any ground covers planted around the pool should not attract our buzzy friends.</p><h2><strong>What&nbsp;size plants are best for a swimming pool area?</strong></h2><p>Do your homework and find out how far a certain plant’s root system travels so you won’t get roots in your water pipes or cracks in your hardscape. Also, consider a plant’s height at maturity so your chosen plant does not overtake the pool space or become a pool intruder that hangs over the edge of the water.</p><p>Related, make sure walkways and the lounging area are not too crowded with plants. There is a fine line between a tropical oasis and an overgrown jungle.</p><h2><strong>What fragrant plants are best for a swimming pool area?</strong></h2><p>Nothing smells lovelier than nature’s own perfume, so be sure to add a few scented plants near the pool, spa, or patio. Also consider night-scented flowers: Your after-hour swims could be enhanced by flowers that release their sweetness at night and add a luminous glow.</p>', '1615571005.jpg', '2021-03-12 16:43:25', '2021-03-12 16:52:30', 53, 5, NULL),
(14, '12 Tips for designing your ideal outdoor living space', '<p>As temperatures rise, our thoughts turn to outdoor living. Blooming flowers and the smell of backyard barbecues lure us out onto the porch or patio with friends and family. Learn how to create your ideal outdoor living space with help from these 12 tips.</p><p><strong>1. Purpose: </strong>Think about how the outdoor space will be used and plan accordingly.</p><ul><li>Do you host dinner parties or BBQs?</li><li>How many guests do you typically entertain?</li><li>Are you looking for a quiet space to relax and unwind?</li><li>Does your space need to be kid or pet friendly with a separate area just for them?</li></ul><p><strong>2. Layout: </strong>When designing an outdoor space, landscape architect, David Pfeiffer suggests using the same thoughtfulness as if you were designing the floor plan of a new house. Each outdoor area should have a logical and functional connection to the inside of the house, like locating the outdoor dining area near the kitchen.</p><p><strong>3. Surroundings:</strong> Make the most of the views your property has to offer — arrange a small sitting area to enjoy a cup of coffee and watch the sunrise or a table and chairs for hors d’oeuvres and cocktails at sunset. Likewise, use hedges or screens to block out unsightly eyesores. Matthew Cunningham, landscape architect, suggests looking beyond the boundaries of a property to observe how the site fits into its surrounding environment.</p><p><strong>4. Exposure:</strong> Which direction your outdoor space faces can define its functionality. In the mountains of Central Idaho, landscape ecologist and designer, Kelley Weston, had to consider the fact that north- and east-facing spaces are unusable in winter and can even be too chilly for comfort in summer.</p><p><strong>5. Wind Patterns:</strong> Make note of prevailing wind direction and time of day. Some areas may be calm in the morning but have a regular evening breeze. The last thing you want is to build a fire pit area and have the seating be down wind or design a beautiful outdoor dining area in a wind tunnel.</p><p><strong>6. Comfort:</strong> If your outdoor space gets a lot of afternoon or early-evening sun, you’ll want to provide shade for comfort. Umbrellas, <a href=\"https://amzn.to/2FEbPYo\">pergolas</a>, covered patios, or trees can take the edge off on a hot summer day by providing shelter from the heat, as well as provide shelter from a passing summer shower.</p><p><strong>7. Hardscape:</strong> Weston suggests using a combination of surfaces, with a portion of the ground soft and inviting, yet leaving enough hard surface for chairs and other furniture. He prefers natural elements and incorporating flagstone, decomposed granite, large boulders and wood decking.</p><p><strong>8. Plant Selection:</strong> Even an avid gardener needs a place to relax. Choose easy-care greenery in and around your outdoor living space for a low-maintenance area. Shirley Watts, designer and builder, says her ideal plants are nice, rounded shrubs that grow about 4 inches a year; like <a href=\"https://www.gardendesign.com/shrubs/boxwood.html\">boxwoods</a>, <a href=\"https://www.gardendesign.com/succulents/agave.html\">agaves</a>, and <a href=\"https://www.gardendesign.com/succulents/aloe.html\">aloes</a> for her California climate. (See more <a href=\"https://www.provenwinners.com/plants/search/advanced?duration=Shrub&amp;maintenance-category=Easy\">easy-care shrubs</a>.) She also likes to use vertical surfaces to design green walls for privacy and leave overhead space open to see the sky. Also keep in mind, that while plants that attract bees and other pollinators are a good thing in your garden, you might not want those particular plants in the middle of your dining area. For more insight into plant selection, see <a href=\"https://www.gardendesign.com/ideas/planting.html\">Planting Ideas for Your Garden</a>.</p><p><strong>9. Furnishings:</strong> Appropriate outdoor furniture choices will depend on the intended use of the space — dining, relaxing, entertaining — or most likely, some combination of all three. Select furniture that is comfortable and practical for outdoor use, weather resistant and washable. Pfeiffer recommends small movable tables for cocktails and snacks. Use colors and patterns to bring your interior style outside.</p><p><strong>10. Water:</strong> For a refreshing and relaxing addition to your space, consider adding a water feature. It doesn’t need to be an elaborate fountain or waterfall, as according to Weston, just the suggestion of water, even a trickle, can have an impact. The sight and sound of flowing water have been shown to enhance relaxation and even lower blood pressure. If you’re lucky enough to be near a natural source of water — a lake, the ocean, or a babbling brook — consider designing an outdoor living area that takes advantage of what nature has provided.</p><p><strong>11. Fire:</strong> When evenings are cool, don’t move the party inside. Extend your outdoor entertaining season by creating a fire pit or fireplace area with comfortable seating. Enjoy evenings being warmed by the fire year-round in milder climates. Incorporate storage areas for blankets and marshmallow-roasting supplies. Find more inspiration to warm your outdoor space in <a href=\"https://www.gardendesign.com/outdoor-living/fire-features.html\">Fire Features</a>.</p><p><strong>12. Lighting:</strong> Make your outdoor space a true extension of your home by incorporating lighting. Illuminate outdoor cooking areas to allow more meal prep to be done outside. Create visual interest and expand the feel of the space by up-lighting trees or fencing farther out in the yard. For safety, add decorative lighting to brighten steps and pathways. See <a href=\"https://www.gardendesign.com/lighting/ideas.html\">Light Up Your Landscape</a> for more ideas on how to include lighting in your outdoor design.</p>', '1615581247.jpg', '2021-03-12 19:34:07', '2021-03-12 19:34:07', 53, 2, NULL),
(15, 'Best gardening gift ideas 2020', '<p>Gardeners are likely finding more time this winter to focus on their gardens, both indoors and outdoors, giving you a great opportunity to gift them.</p><p>As winter thickens and the holidays approach, <a href=\"https://www.nbcnews.com/shopping/gift-guides\">gift guides</a> abound and sometimes the right gift is less clear than you’d prefer — this might be especially so for anyone you’re gifting whose pastimes revolve around <a href=\"https://www.nbcnews.com/shopping/home/best-indoor-plants-guide-n1249720\">plants</a> and <a href=\"https://www.nbcnews.com/business/consumer/peas-quiet-times-turbulence-americans-turn-gardening-n1210641\">gardening</a>. Gifts aside, you might be considering trying your own hand at finding a green thumb, an effort whose return might resonate outside the actual growing of things. “Gardening can be wonderfully meditative,” noted Josh Kilmer-Purcell, co-author of “<a href=\"https://www.amazon.com/gp/product/B00FWT9IMA/?tag=1250475-shoppinggiftsgarden-20\">The Beekman 1802 Heirloom Vegetable Cookbook</a>.”</p><p>“The most mundane gardening tasks all have a repetitive nature that lend themselves to easing mental anxiety,\" added Kilmer-Purcell. \"Watching the never-ending cycle of nature also reminds us that the world isn’t ending.”</p><p>During the pandemic, Americans have <a href=\"https://www.nbcnews.com/business/consumer/peas-quiet-times-turbulence-americans-turn-gardening-n1210641\">turned to gardening</a> and gardening-related gifts can be a nice way to support a loved one’s new hobby or passion. We asked Kilmer-Purcell — who co-founded skin care purveyor <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fbeekman1802.com%2F&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">Beekman 1802</a> — what a gardener might want as a gift (pro tip: skip the funny garden plaques).</p><p>“There are some really great gardening gifts that aren’t cliche and your favorite gardener may not already own,” Kilmer-Purcell said, throwing in mention of his brand’s <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fbeekman1802.com%2Fcollections%2Fmoisturizers&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">moisturizers</a> as one gift option to pamper your gardening giftee. Regardless of what you choose to get, you may want to start shopping now as UPS and FedEx, among other retail experts, are concerned about possible <a href=\"https://www.nbcnews.com/business/consumer/fedex-ups-face-shipageddon-potential-shortfall-7-million-packages-day-n1243981\">shipping delays</a> this holiday season.</p><h2><a href=\"https://www.nbcnews.com/shopping/gift-guides/gardening-gifts-n1250475#anchor-Bestgardeninggifts\">Best gardening gifts</a></h2><p>To help your gift shopping, we put together gardening gift ideas based on guidance from Kilmer-Purcell and otherwise Shopping reader favorites, ranging from helping you <a href=\"https://www.amazon.com/Seeding-Square-Perfectly-Vegetables-Conserves/dp/B00US8ESWK/?tag=1250475-shoppinggiftsgarden-20\">start a garden</a> to <a href=\"https://www.amazon.com/Maine-Garden-Products-833255001252-Hod/dp/B000S6G0MS/?tag=1250475-shoppinggiftsgarden-20\">tending to your garden</a> or simply <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fwww.surlatable.com%2Fbees-knees-spicy-honey%2F3084704.html&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">enjoying</a> the literal fruits of your labor.</p><h3>1. <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fwww.williams-sonoma.com%2Fproducts%2Fclick-and-grow-smart-garden-3-pod-grey%2F%3F&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">Click and Grow Smart Garden</a></h3><p>If you’re worried you don’t have a green thumb or are gifting a novice gardener, <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fwww.clickandgrow.com%2F&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">Click and Grow</a> has a line of smart garden products to help you. The Click and Grow Smart Garden comes with everything you need to grow plants indoors and experience what Kilmer-Purcell calls the “joy of window-to-table cooking.” You insert three pods (think bigger versions of coffee pods) which contain the soil and basil seeds into the BPA-free plastic garden that sits beneath a grow light. Plug in the smart garden (the light works on a timer), fill the attached water reservoir and you’re done. After you grow basil, you can purchase <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fwww.clickandgrow.com%2Fproducts%2Fgrow-fruits-and-vegetables-at-home&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">fruit and vegetable plant pods</a>, <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fwww.clickandgrow.com%2Fproducts%2Fgrow-italian-herbs-at-home&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">herb pods</a> or grow your own seeds in the garden.</p><h3>2. <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fwww.duluthtrading.com%2Fhori-hori-garden-knife-58219.html%3F&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">Hori Hori Garden Knife</a></h3><p>The <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fwww.duluthtrading.com%2F&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">Duluth Trading Company</a> places a high priority on utility and the Hori Hori Garden Knife is a great example of how one tool can have a lot of different uses in the garden. The digging tool, which sports a wooden handle, has a pointed blade and curved shape that lets it act as a trowel. The steel blade is also marked in inch-long increments for spacing and planting seeds. The serrated edge saws through small branches or stems or can tear open a package of soil. It also comes with a sheath for the blade, so you can store it safely.</p><h3>3.<a href=\"https://www.amazon.com/Seeding-Square-Perfectly-Vegetables-Conserves/dp/B00US8ESWK/?tag=1250475-shoppinggiftsgarden-20\">Seeding Square</a></h3><p>With <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fwww.seedingsquare.com%2F&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">Seeding Square</a>, organization comes first for any garden. A seeding square takes away the guesswork on where to place seeds in the garden. A series of color-coded holes in the hard, bright green plastic square and an accompanying planting guide aids novice gardeners — useful for those who’ve been gardening for years. Get even rows and maximize space, which is especially handy if you’re growing in a small space. The square also comes with a funnel and seed dibbler (a tool for planting) to help you place seeds at the right depth in the soil.</p><p>&nbsp;</p><h3>4. <a href=\"https://www.amazon.com/dp/B00023RYS6?tag=1250475-shoppinggiftsgarden-20\">Felco F-2 Classic Manual Hand Pruner</a></h3><p><a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fwww.felco.com%2F&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">Felco</a> makes pruners — another word for shears — with an eye toward sturdiness. The rubber-encased handle is comfortable to grip, while the steel blades are sharp, durable and make quick work of stems. The Swiss pruner can be adjusted quickly with a few turns on a nut-and-bolt assembly at the bottom of the blade. It can easily trim rose bushes or tomato plants, making it a good choice for gardeners growing lots of different plants or vegetables. Gifting a new gardener? Grab them an entire <a href=\"https://www.amazon.com/WORKPRO-Stainless-Gardening-Cultivator-More-Gardening/dp/B07T7LN3MN/?tag=1250475-shoppinggiftsgarden-20\">garden tools set</a>.</p><p>&nbsp;</p><h3>5. <a href=\"https://www.amazon.com/Maine-Garden-Products-833255001252-Hod/dp/B000S6G0MS/?tag=1250475-shoppinggiftsgarden-20\">Maine Garden Hod</a></h3><p><a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fstores.mainegarden.com%2F&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">Maine Garden Products</a> knows that, just as beach sand gets everywhere, half the challenge is keeping the dirt in your garden. A hod, a basket with a mesh bottom and sides (in this case, a pine box with PVC-coated wire), are often used by clam diggers in Maine to carry and clean what they find. But it’s also become popular for rinsing flowers or vegetables in New England gardens. Kilmer-Purcell recommended a hod because the “harvested vegetables can be hosed down and cleaned right in the garden so dirt isn’t brought into the kitchen.”</p><p>&nbsp;</p><h3>6. <a href=\"https://www.amazon.com/dp/B0828CWR87?tag=1250475-shoppinggiftsgarden-20\">POTEY Seagrass Plant Basket</a></h3><p>The <a href=\"https://www.amazon.com/s?k=POTEY&amp;ref=bl_dp_s_web_0&amp;tag=1250475-shoppinggiftsgarden-20\">POTEY</a> line of planters are designed to balance style and function. The seagrass plant basket comes with handles so you can move your plant buddy around the house or shift its location to make sure your plant is getting enough sun. A plastic bowl is included to catch the water that would drip out of the base of your planter.</p><p>&nbsp;</p><h3>7. <a href=\"https://www.anrdoezrs.net/links/9260995/type/dlg/sid/1250475shoppinggiftsgarden/https://www.wayfair.com/outdoor/pdp/allmodern-dayne-iron-wall-planter-w003528431.html?piid=1502794947\">Dayne Iron Wall Planter</a></h3><p>This metal hanging planter from <a href=\"https://www.anrdoezrs.net/links/9260995/type/dlg/sid/1250475shoppinggiftsgarden/https://www.wayfair.com/outdoor/pdp/allmodern-dayne-iron-wall-planter-w003528431.html?piid=1502794947\">Dayne</a> has space for three plants to bring a little bit of the outdoors inside your home. The modern planter comes with all the hanging hardware you need. Since this planter doesn’t drain, opt for succulents or air plants that require less water to avoid spills.</p><p>&nbsp;</p><h2><a href=\"https://www.nbcnews.com/shopping/gift-guides/gardening-gifts-n1250475#anchor-Wheretofindgardeninggiftsetsandindoorgardengifts\">Where to find gardening gift sets and indoor garden gifts</a></h2><p>If you’re able to safely travel to and responsibly shop from local gardening hubs and plant stores, consider supporting those local businesses as they may have suffered greatly given the pandemic. If you’re looking to grab gifts online, we broke out some useful gardening destinations to consider shopping at right now — indoor plants enthusiasts might enjoy any number of plants or flowers from online stores like <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fbloomscape.com%2F&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">Bloomscape</a>, <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Fwww.floom.com%2Fus%2F&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">Floom</a>, <a href=\"https://shareasale.com/r.cfm?b=1170803&amp;u=1844769&amp;m=79314&amp;urllink=www.thesill.com%2F&amp;afftrack=1250475shoppinggiftsgarden\">The Sill</a> and <a href=\"https://go.redirectingat.com/?xs=1&amp;id=96128X1608529&amp;url=https%3A%2F%2Furbanstems.com%2F&amp;sref=https%3A%2F%2Fwww.nbcnews.com%2F%2Fshopping%2Fshoppinggiftsgarden-n1250475\">Urbanstems</a></p><ul><li><a href=\"https://www.amazon.com/b?node=2972638011&amp;tag=1250475-shoppinggiftsgarden-20\"><strong>Amazon</strong></a>: Check out <a href=\"https://www.amazon.com/b/ref=s9_acss_bw_cg_harmonyc_2a1_w?node=3480662011&amp;tag=1250475-shoppinggiftsgarden-20\">plants</a>, <a href=\"https://www.amazon.com/b/ref=s9_acss_bw_cg_harmonyc_3a1_w?node=3480694011&amp;tag=1250475-shoppinggiftsgarden-20\">pots</a>, and <a href=\"https://www.amazon.com/b/ref=s9_acss_bw_cg_harmonyc_4d1_w?node=128061011&amp;tag1250475-shoppinggiftsgarden-20\">gardening tools</a>.</li><li><a href=\"https://homedepot.sjv.io/c/2465030/456723/8154?subId1=1250475shoppinggiftsgarden&amp;u=https%3A%2F%2Fwww.homedepot.com%2Fb%2FOutdoors-Garden-Center-Plants-Garden-Flowers-Indoor-Plants%2FN-5yc1vZc8rn\"><strong>Home Depot</strong></a>: Explore the <a href=\"https://homedepot.sjv.io/c/2465030/456723/8154?subId1=1250475shoppinggiftsgarden&amp;u=https%3A%2F%2Fwww.homedepot.com%2Fb%2FOutdoors-Garden-Center%2FN-5yc1vZbx6k\">Garden Center</a> for everything a gardener needs to plant, maintain and build their gardens.</li><li><a href=\"https://www.anrdoezrs.net/links/9260995/type/dlg/sid/1250475shoppinggiftsgarden/https://www.lowes.com/l/gardencenter.html\"><strong>Lowe’s</strong></a>: The <a href=\"https://www.anrdoezrs.net/links/9260995/type/dlg/sid/1250475shoppinggiftsgarden/https://www.lowes.com/l/gardencenter.html\">Garden Center</a> is a one-stop-shop for gardeners looking for indoor and outdoor plants and pots.</li><li><a href=\"https://goto.target.com/c/2465030/81938/2092?subId1=1250475shoppinggiftsgarden&amp;u=https%3A%2F%2Fwww.target.com%2Fc%2Flawn-garden-patio%2F-%2FN-5xtq0\"><strong>Target</strong></a>: Shop <a href=\"https://goto.target.com/c/2465030/81938/2092?subId1=1250475shoppinggiftsgarden&amp;u=https%3A%2F%2Fwww.target.com%2Fc%2Flawn-garden-patio%2F-%2FN-5xtq0\">Lawn &amp; Garden</a> for everything from container gardens to greenhouses.</li><li><a href=\"https://goto.walmart.com/c/2465030/565706/9383?subId1=1250475shoppinggiftsgarden&amp;u=https%3A%2F%2Fwww.walmart.com%2Fcp%2Fgarden-center%2F4091\"><strong>Walmart</strong></a>: Dive into the <a href=\"https://goto.walmart.com/c/2465030/565706/9383?subId1=1250475shoppinggiftsgarden&amp;u=https%3A%2F%2Fwww.walmart.com%2Fbrowse%2Fpatio-garden%2Fgarden-center%2F5428_4091\">Garden Center</a> to help start or augment a garden.</li><li><a href=\"https://www.anrdoezrs.net/links/9260995/type/dlg/sid/1250475shoppinggiftsgarden/https://www.wayfair.com/outdoor/cat/planters-c489055.html\"><strong>Wayfair</strong></a>: Find <a href=\"https://www.anrdoezrs.net/links/9260995/type/dlg/sid/1250475shoppinggiftsgarden/https://www.wayfair.com/outdoor/sb0/planter-pots-c1825313.html?prefetch=true\">planter pots</a>, <a href=\"https://www.anrdoezrs.net/links/9260995/type/dlg/sid/1250475shoppinggiftsgarden/https://www.wayfair.com/outdoor/sb0/urns-statues-c1825316.html\">urns and statues</a>, <a href=\"https://www.anrdoezrs.net/links/9260995/type/dlg/sid/1250475shoppinggiftsgarden/https://www.wayfair.com/outdoor/sb0/terrariums-c1825322.html\">terrariums</a>, <a href=\"https://www.anrdoezrs.net/links/9260995/type/dlg/sid/1250475shoppinggiftsgarden/https://www.wayfair.com/outdoor/sb0/hanging-planters-c1825317.html\">hanging planters</a> and more.</li></ul>', '1615583037.jpg', '2021-03-12 19:44:43', '2021-03-12 20:03:57', 53, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'user'),
(2, NULL, NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `icon`, `name`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'fa-facebook', 'Facebook', 'www.facebook.com', NULL, NULL, NULL),
(2, 'fa-youtube', 'Youtube', 'www.youtube.com', NULL, NULL, NULL),
(3, 'fa-twitter', 'Twitter', 'www.twitter.com', NULL, NULL, NULL),
(4, 'fa-pinterest', 'Pinterest', 'www.pinterest.com', NULL, NULL, NULL),
(5, 'fa-instagram', 'Instagram', 'ww.instagram.com', NULL, NULL, NULL),
(6, NULL, 'Twitchhh', 'www.twitch.com', '2021-03-12 10:46:32', '2021-03-12 10:53:20', '2021-03-12 10:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `gender`, `photo`, `role_id`, `bio`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(31, 'Timothy', 'Blick', 'ernesto.kozey@hotmail.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'male', 'male-thumbnail.png', 1, 'Hello my name isRosie.Nice to meed you.', 1, '2021-03-05 07:19:06', '2021-03-12 08:05:38', '2021-03-12 08:05:38'),
(32, 'Alexys', 'Hettinger', 'xlueilwitz@hotmail.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'male', 'male-thumbnail.png', 1, 'Hello my name isJoany.Nice to meed you.', 1, '2021-03-05 07:19:06', '2021-03-05 07:19:06', NULL),
(33, 'Zula', 'Kuvalis', 'qjerde@gmail.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'female', 'female-thumbnail.png', 1, 'Hello my name isAnabelle.Nice to meed you.', 1, '2021-03-05 07:19:06', '2021-03-05 07:19:06', NULL),
(34, 'Brittany', 'Torphy', 'nmayert@mitchell.biz', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'female', 'female-thumbnail.png', 1, 'Hello my name isLowell.Nice to meed you.', 1, '2021-03-05 07:19:06', '2021-03-05 07:19:06', NULL),
(35, 'Micah', 'Stiedemann', 'blake.mclaughlin@gmail.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'male', 'male-thumbnail.png', 1, 'Hello my name isAbigail.Nice to meed you.', 1, '2021-03-05 07:19:06', '2021-03-05 07:19:06', NULL),
(36, 'Judson', 'Kris', 'murazik.wava@ritchie.biz', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'male', 'male-thumbnail.png', 1, 'Hello my name isNaomi.Nice to meed you.', 1, '2021-03-05 07:19:06', '2021-03-05 07:19:06', NULL),
(37, 'Issac', 'Harvey', 'kutch.josie@hagenes.net', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'male', 'male-thumbnail.png', 1, 'Hello my name isGus.Nice to meed you.', 1, '2021-03-05 07:19:06', '2021-03-05 07:19:06', NULL),
(38, 'Alejandra', 'Glover', 'legros.brenda@welch.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'female', 'female-thumbnail.png', 1, 'Hello my name isMara.Nice to meed you.', 1, '2021-03-05 07:19:06', '2021-03-05 07:19:06', NULL),
(39, 'Herminia', 'Buckridge', 'lilian.kuvalis@hotmail.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'female', 'female-thumbnail.png', 1, 'Hello my name isBrisa.Nice to meed you.', 1, '2021-03-05 07:19:06', '2021-03-05 07:19:06', NULL),
(40, 'Rosanna', 'Orn', 'ssanford@weimann.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'female', 'female-thumbnail.png', 1, 'Hello my name isCelestine.Nice to meed you.', 1, '2021-03-05 07:19:06', '2021-03-05 07:19:06', NULL),
(41, 'Freeda', 'Aufderhar', 'adah.kris@buckridge.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'female', 'female-thumbnail.png', 1, 'Hello my name isDianna.Nice to meed you.', 1, '2021-03-05 07:20:17', '2021-03-05 07:20:17', NULL),
(42, 'Vernie', 'Bartell', 'eulah.howell@hotmail.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'female', 'female-thumbnail.png', 1, 'Hello my name isSarina.Nice to meed you.', 1, '2021-03-05 07:20:17', '2021-03-05 07:20:17', NULL),
(43, 'Anya', 'Barrows', 'crooks.ibrahim@witting.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'female', 'female-thumbnail.png', 1, 'Hello my name isJimmy.Nice to meed you.', 1, '2021-03-05 07:20:17', '2021-03-05 07:20:17', NULL),
(44, 'Darron', 'Jacobs', 'cornell.howe@bruen.net', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'male', 'male-thumbnail.png', 1, 'Hello my name isColton.Nice to meed you.', 1, '2021-03-05 07:20:17', '2021-03-05 07:20:17', NULL),
(45, 'Kelsie', 'Berge', 'gorczany.gwen@yahoo.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'female', 'female-thumbnail.png', 1, 'Hello my name isKennedi.Nice to meed you.', 1, '2021-03-05 07:20:17', '2021-03-05 07:20:17', NULL),
(46, 'Jalon', 'Hand', 'cweber@kub.biz', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'male', 'male-thumbnail.png', 1, 'Hello my name isMarcelino.Nice to meed you.', 1, '2021-03-05 07:20:17', '2021-03-05 07:20:17', NULL),
(47, 'Coralie', 'Moen', 'vicente22@yahoo.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'female', 'female-thumbnail.png', 1, 'Hello my name isDave.Nice to meed you.', 1, '2021-03-05 07:20:17', '2021-03-05 07:20:17', NULL),
(48, 'Dock', 'Crist', 'nhayes@bergstrom.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'male', 'male-thumbnail.png', 1, 'Hello my name isAlberta.Nice to meed you.', 1, '2021-03-05 07:20:17', '2021-03-05 07:20:17', NULL),
(49, 'Lukas', 'Ferry', 'jeramy.schamberger@hotmail.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'male', 'male-thumbnail.png', 1, 'Hello my name isChelsea.Nice to meed you.', 1, '2021-03-05 07:20:17', '2021-03-05 07:20:17', NULL),
(50, 'Nicolette', 'Roob', 'marion.walsh@yahoo.com', NULL, 'f1dc735ee3581693489eaf286088b916', NULL, 'female', 'female-thumbnail.png', 1, 'Hello my name isJudge.Nice to meed you.', 1, '2021-03-05 07:20:17', '2021-03-05 07:20:17', NULL),
(51, 'Ivana', 'Ivanovic', 'ivana-sajt999@outlook.com', NULL, 'a2a017ead6e652fb753e03350d0f94c7', 'RrYxKk07iPeYn3lvvuVmaFJnB2C5ek99RrpOBVoG', 'female', 'female-thumbnail.png', 2, 'I\'m an administrator.', 1, '2021-03-05 08:46:28', '2021-03-08 10:58:56', NULL),
(52, 'Elena', 'Lolich', 'atisdale788@gmail.com', NULL, '435e4343e91aef85ee8e6f82b5cf26b1', 'iJpJyC91a4ZLcRaEyc21nqVzgFKpJFy96fMY2pY4', 'female', 'female-thumbnail.png', 1, 'Hello. I\'m Elena and i\'m a big plant lover! Have a nice day! :)', 1, '2021-03-11 08:29:45', '2021-03-15 08:12:29', NULL),
(53, 'Lilly', 'Mandson', 'lilly1455@gmail.com', NULL, 'a2a017ead6e652fb753e03350d0f94c7', 'JPbhJvXCOFDKeWyLCrBik1M6T3ZAnOdan4l0DaBJ', 'female', 'female-thumbnail.png', 1, 'My name is Lilly. Hope you enjoy my posts.Have a nice day', 1, '2021-03-14 16:24:09', '2021-03-15 10:23:29', NULL),
(54, 'Stephan', 'King', 'stephan125@gmail.com', NULL, 'f0c316eff4011a5947813ddc05f2f201', 'JPbhJvXCOFDKeWyLCrBik1M6T3ZAnOdan4l0DaBJ', 'male', 'male-thumbnail.png', 1, NULL, 1, '2021-03-14 16:25:21', '2021-03-14 16:25:21', NULL),
(55, 'Bibby', 'Jovanich', 'bibby455@live.com', NULL, 'f0c316eff4011a5947813ddc05f2f201', 'JPbhJvXCOFDKeWyLCrBik1M6T3ZAnOdan4l0DaBJ', 'female', 'female-thumbnail.png', 1, NULL, 1, '2021-03-14 16:28:44', '2021-03-14 16:28:44', NULL),
(56, 'Ivana', 'Ivanovic', 'paparoachchicka@gmail.com', NULL, 'f0c316eff4011a5947813ddc05f2f201', 'JPbhJvXCOFDKeWyLCrBik1M6T3ZAnOdan4l0DaBJ', 'male', 'male-thumbnail.png', 1, NULL, 1, '2021-03-14 16:33:25', '2021-03-14 16:33:25', NULL),
(57, 'Milena', 'Vukovic', 'lola1234444@gmail.com', NULL, 'f0c316eff4011a5947813ddc05f2f201', 'JPbhJvXCOFDKeWyLCrBik1M6T3ZAnOdan4l0DaBJ', 'female', 'female-thumbnail.png', 1, NULL, 1, '2021-03-14 16:34:03', '2021-03-14 20:26:05', '2021-03-14 20:26:05'),
(58, 'Ivana', 'Recevic', 'ivanasajt999@outlook.com', NULL, 'a2a017ead6e652fb753e03350d0f94c7', 'JPbhJvXCOFDKeWyLCrBik1M6T3ZAnOdan4l0DaBJ', 'female', 'female-thumbnail.png', 1, NULL, 1, '2021-03-14 16:34:25', '2021-03-14 16:34:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` int(10) UNSIGNED NOT NULL,
  `visited_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `visited_at`, `ip`, `post_id`) VALUES
(615, '2021-03-15 11:25:30', '::1', 1),
(616, '2021-03-15 12:16:13', '::1', 3),
(617, '2021-03-15 12:16:13', '::1', 2),
(618, '2021-03-15 12:17:05', '::1', 2),
(619, '2021-03-15 12:17:25', '::1', 15),
(620, '2021-03-15 12:18:51', '::1', 2),
(621, '2021-03-15 12:31:55', '::1', 2),
(622, '2021-03-15 12:35:54', '::1', 2),
(623, '2021-03-15 12:40:32', '::1', 2),
(624, '2021-03-15 12:40:37', '::1', 2),
(625, '2021-03-15 12:41:18', '::1', 2),
(626, '2021-03-15 13:10:15', '::1', 1),
(627, '2021-03-15 13:14:44', '::1', 2),
(628, '2021-03-15 13:17:35', '::1', 2),
(629, '2021-03-15 13:17:57', '::1', 3),
(630, '2021-03-15 13:46:08', '::1', 15),
(631, '2021-03-15 13:46:35', '::1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `socials_name_unique` (`name`),
  ADD UNIQUE KEY `socials_url_unique` (`url`),
  ADD UNIQUE KEY `socials_icon_unique` (`icon`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visits_post_id_foreign` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=632;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `visits`
--
ALTER TABLE `visits`
  ADD CONSTRAINT `visits_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
