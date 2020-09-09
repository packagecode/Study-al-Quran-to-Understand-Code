-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 07:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studyalquran`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `ip`, `created_at`, `updated_at`) VALUES
(1, 'Dante Hood', '+1 (312) 121-2368', 'qyman@mailinator.com', 'Quidem vero eos ut', '127.0.0.1', '2020-04-09 10:48:09', '2020-04-09 10:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `type`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'https://www.youtube.com/embed/chLqW7ILpOc', 1, '2020-06-28 09:31:59', '2020-06-28 10:46:08'),
(2, 1, 'https://www.youtube.com/embed/zIgYJlu03bI', 1, '2020-06-28 10:56:39', '2020-06-28 10:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `important_links`
--

CREATE TABLE `important_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `important_links`
--

INSERT INTO `important_links` (`id`, `title`, `url`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Similique sed obcaec', 'https://www.youtube.com/watch?v=im9Zq3KO5yA', 1, '2020-05-13 05:13:25', '2020-05-13 05:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `live_classes`
--

CREATE TABLE `live_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `live_classes`
--

INSERT INTO `live_classes` (`id`, `url`, `type`, `created_at`, `updated_at`) VALUES
(1, 'https://web.facebook.com/yrf/videos/386230135378586', 1, '2020-04-09 13:19:52', '2020-04-09 13:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_08_160859_create_publications_table', 1),
(5, '2020_04_08_180520_create_settings_table', 1),
(6, '2020_04_09_081030_create_quran_classes_table', 1),
(7, '2020_04_09_094005_create_sliders_table', 1),
(8, '2020_04_09_103550_create_live_classes_table', 1),
(9, '2020_04_09_162237_create_contacts_table', 2),
(10, '2020_05_09_205345_create_important_links_table', 3),
(11, '2020_06_28_140325_create_galleries_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vlink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dlink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `cover_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `title`, `date`, `vlink`, `dlink`, `status`, `cover_pic`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Quran 30 Juz', '10/05/2015', 'https://drive.google.com/file/d/1URCo9u2XlTZzMMNvR_MifqRgPvi7saCQ/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1URCo9u2XlTZzMMNvR_MifqRgPvi7saCQ', 1, NULL, NULL, '2020-04-09 09:42:44', '2020-04-09 09:42:44'),
(2, 'Quran 29 Juz', '10/05/2015', 'https://drive.google.com/file/d/1fH1Zdt8wq5gjoT516wAzl2XwE54Lw_fT/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1fH1Zdt8wq5gjoT516wAzl2XwE54Lw_fT', 1, NULL, 1, '2020-04-09 09:43:36', '2020-04-09 09:43:36'),
(3, 'Quran 28 Juz', '10/05/2015', 'https://drive.google.com/file/d/1-yDtatMJVCRCD8ZAMj0g4l1WOb5qb8O4/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1-yDtatMJVCRCD8ZAMj0g4l1WOb5qb8O4', 1, '/storage/coverpic/33595220200422082718.jpg', 2, '2020-04-09 09:44:16', '2020-04-22 02:27:18'),
(4, 'Quran 27 Juz', '10/05/2015', 'https://drive.google.com/file/d/1_IlKBdBea1IrGPYVcwHJQc16A-qkhrWZ/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1_IlKBdBea1IrGPYVcwHJQc16A-qkhrWZ', 1, '/storage/coverpic/33595220200422082714.jpg', NULL, '2020-04-09 09:44:53', '2020-04-22 02:27:14'),
(5, 'Quran 25-26 para', '10/05/2015', 'https://drive.google.com/file/d/1hRG7wECe6GZUPzT5Fv49n_76KS4j4TmL/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1hRG7wECe6GZUPzT5Fv49n_76KS4j4TmL', 1, '/storage/coverpic/33595220200422082645.jpg', NULL, '2020-04-09 09:45:30', '2020-04-22 02:26:45'),
(6, 'Quran 23-24 Para', '10/05/2015', 'https://drive.google.com/file/d/1SwYXAWu8v7WUjoECldxorjfdeKn-szBz/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1SwYXAWu8v7WUjoECldxorjfdeKn-szBz', 1, NULL, NULL, '2020-04-09 09:46:31', '2020-04-09 09:46:31'),
(7, 'Quran 21-22 Para', '10/05/2015', 'https://drive.google.com/file/d/1vaG-ATXV9mWYW8H_pP5xTdwuN5k8fs88/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1vaG-ATXV9mWYW8H_pP5xTdwuN5k8fs88', 1, '/storage/coverpic/33595220200422082625.jpg', NULL, '2020-04-09 09:47:25', '2020-04-22 02:26:25'),
(8, 'Surah Ale- Imran', '10/05/2015', 'https://drive.google.com/file/d/1-X5sCbvPW1otBylvQ_xp6LQwe6kxfWyF/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1-X5sCbvPW1otBylvQ_xp6LQwe6kxfWyF', 1, NULL, NULL, '2020-04-09 09:47:56', '2020-04-09 09:47:56'),
(9, 'Surah Al Baqurah', '10/05/2015', 'https://drive.google.com/file/d/1Jo1yGe5CoeHXU1ZkCxRHnB7jFw5qL-Es/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1Jo1yGe5CoeHXU1ZkCxRHnB7jFw5qL-Es', 1, '/storage/coverpic/5876620200422082500.jpg', NULL, '2020-04-09 09:48:39', '2020-04-22 02:25:00'),
(10, 'Quraniya-Arabi', '10/05/2015', 'https://drive.google.com/file/d/1LVgC9YljS5xe2kO6cbTZF2-FgxXlZwC-/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1LVgC9YljS5xe2kO6cbTZF2-FgxXlZwC-', 1, NULL, NULL, '2020-04-09 09:49:08', '2020-04-09 09:49:08'),
(11, 'Qura\'niya Avidhan', '10/05/2015', 'https://drive.google.com/file/d/1FKO4EciVI1lzuVFRu-aqDTBMax--2CJA/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1FKO4EciVI1lzuVFRu-aqDTBMax--2CJA', 1, NULL, NULL, '2020-04-09 09:49:37', '2020-04-09 09:49:37'),
(12, 'Shofol Hajj 2015', '10/05/2015', 'https://drive.google.com/file/d/1eX6UzTsvTXoYfhuTCHLxzBx_j_8Rc5Gi/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1eX6UzTsvTXoYfhuTCHLxzBx_j_8Rc5Gi', 1, '/storage/coverpic/36224320200422083029.jpg', NULL, '2020-04-09 09:50:18', '2020-04-22 02:30:29'),
(13, 'Surah Al-Bakara Part-1', '12/05/2015', 'https://drive.google.com/file/d/1l7Toc5RrXxzWsPBlQnmUFXk15GB1qvgi/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1l7Toc5RrXxzWsPBlQnmUFXk15GB1qvgi', 1, NULL, NULL, '2020-04-09 09:51:11', '2020-04-09 09:51:11'),
(14, 'Surah Al-Bakara Part-2', '12/05/2015', NULL, NULL, 1, NULL, NULL, '2020-04-09 09:52:49', '2020-04-09 09:52:49'),
(15, 'Arabi Shikkha', '12/05/2015', 'https://drive.google.com/file/d/1AOB-13xGf7Kt2Jgb2xZ1WttOHCDeG5Qh/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1AOB-13xGf7Kt2Jgb2xZ1WttOHCDeG5Qh', 1, '/storage/coverpic/5226720200422082559.jpg', NULL, '2020-04-09 09:53:25', '2020-04-22 02:25:59'),
(16, 'Dictionary - Arabic to Bengali', '12/05/2015', 'https://drive.google.com/file/d/1159UT8YUJwWajIAPc3IwtrOBVK3CdvJc/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1159UT8YUJwWajIAPc3IwtrOBVK3CdvJc', 1, NULL, NULL, '2020-04-09 09:53:56', '2020-04-09 09:53:56'),
(17, 'Quran Tajweed SAQ', '13/05/2015', 'https://drive.google.com/file/d/1k3Dl9WMsjhS_8dWEHHGhEIIZl3r8ur8t/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1k3Dl9WMsjhS_8dWEHHGhEIIZl3r8ur8t', 1, NULL, NULL, '2020-04-09 09:54:26', '2020-04-09 09:54:26'),
(18, 'Al-Quran Bangla Translate', '11/06/2015', 'https://drive.google.com/file/d/1695rFbkOrsUnYnW3r2HmS3nHaACePiRy/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1695rFbkOrsUnYnW3r2HmS3nHaACePiRy', 1, NULL, NULL, '2020-04-09 09:54:56', '2020-04-09 09:54:56'),
(19, 'Ampara', '01/01/1970', NULL, NULL, 1, '/storage/coverpic/4927620200422082532.jpg', NULL, '2020-04-09 09:55:18', '2020-04-22 02:25:32'),
(20, 'Surah Al-Imran', '14/06/2015', 'https://drive.google.com/file/d/1s0S3cpLUFdTg7GEzu0N4fbv5Re9is6iH/view?usp=sharing', 'https://drive.google.com/uc?export=download&id=1s0S3cpLUFdTg7GEzu0N4fbv5Re9is6iH', 1, NULL, NULL, '2020-04-09 09:55:45', '2020-04-09 09:55:45'),
(21, 'Tazweed', '25/07/2015', 'https://drive.google.com/open?id=1avU-5AeXt2mw9Nuxr_oAqXIfRHNnR5tq', 'https://drive.google.com/uc?export=download&id=1avU-5AeXt2mw9Nuxr_oAqXIfRHNnR5tq', 1, NULL, NULL, '2020-04-09 09:56:13', '2020-04-09 09:56:13'),
(22, 'Nurani', '01/01/1970', 'https://drive.google.com/open?id=1AdqsQZU-04oEAAcAseekFglz_qUnDfPq', 'https://drive.google.com/uc?export=download&id=1AdqsQZU-04oEAAcAseekFglz_qUnDfPq', 1, NULL, NULL, '2020-04-09 09:56:39', '2020-04-21 05:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `quran_classes`
--

CREATE TABLE `quran_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quran_classes`
--

INSERT INTO `quran_classes` (`id`, `day`, `time`, `place`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'প্রতি শনিবার', 'মাগরিব - এশা', 'বাইতুল আমন মসজিদ, রোড ১৮,সেক্টর- ১৪,উত্তরা', 1, '2020-04-09 05:46:30', '2020-04-09 05:46:30'),
(2, 'প্রতি রবিবার ও মঙ্গলবার', 'মাগরিব - এশা', 'বনানী জামে মসজিদ (দোতালা), বনানী ।', 2, '2020-04-09 05:47:07', '2020-04-09 05:47:07'),
(3, 'প্রতি সোমবার', 'মাগরিব - এশা', 'বসুন্ধারা আবাসিক এলাকা।  ৫ম তালা,রাশমনো ক্লিনিক, মগবাজার।', 3, '2020-04-09 05:47:25', '2020-04-09 05:47:25'),
(4, 'প্রতি বুধবার', 'মাগরিব - এশা', 'গুলশান পার্কের মসজিদ (পার্কের পশ্চিমে) ।', 4, '2020-04-09 05:47:42', '2020-04-09 05:47:42'),
(5, 'প্রতি বৃহস্পতিবার', 'মাগরিব - এশা', 'ডি ও এইচ এস বারিধারা মসজিদ।', 5, '2020-04-09 05:47:58', '2020-04-09 05:47:58'),
(6, 'প্রতি শুক্রবার', 'মাগরিব - এশা', 'বাইতুল জান্নাত জামে মসজিদ   ২৫, গ্রীন রোড ( গ্রীন লাইফ হসপিটালের পাশে ) ধানমন্ডি, ঢাকা - ১২০৫।', 6, '2020-04-09 05:48:15', '2020-04-09 05:48:15'),
(7, 'প্রতি পরের শুক্রবার', 'সকাল ৮টা - ১০টা |  সকাল ১০টা - ১২টা', 'ক্যান্টনমেন্ট কেন্দ্রীয় মসজিদ | এএনজেড বিল্ডিং (৩য় গেট), নিকেতন ।', 7, '2020-04-09 05:48:43', '2020-04-09 05:56:28'),
(8, 'রমজান মাসে', 'যোহর - আসর |  আসর -মাগরিব', NULL, 8, '2020-04-09 05:50:39', '2020-04-09 05:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `data`, `value`, `created_at`, `updated_at`) VALUES
(1, 'title', 'Study Al Quran To Understand', '2020-04-09 05:45:06', '2020-04-09 05:45:06'),
(2, 'description', 'A New Way Of Possibility.', '2020-04-09 05:45:06', '2020-04-09 05:45:06'),
(3, 'address', 'ঢাকা ১০০০, বাংলাদেশ ।', '2020-04-09 05:45:06', '2020-04-09 05:45:06'),
(4, 'phone', '+৮৮০১৫৫৩৫৬৯২৪৬', '2020-04-09 05:45:06', '2020-04-09 05:45:06'),
(5, 'email', 'info@studyalqurantounderstand.org', '2020-04-09 05:45:06', '2020-04-09 05:45:06'),
(6, 'facebook', 'https://facebook.com', '2020-04-09 05:45:06', '2020-04-09 05:45:06'),
(7, 'twitter', 'https://twitter.com/', '2020-04-09 05:45:06', '2020-04-09 05:45:06'),
(8, 'youtube', 'https://youtube.com', '2020-04-09 05:45:06', '2020-04-09 05:45:06'),
(9, 'instagram', 'https://www.instagram.com/', '2020-04-09 05:45:06', '2020-04-09 05:45:06'),
(10, 'google+', 'http://google.com', '2020-04-09 05:45:06', '2020-04-09 05:45:06'),
(11, 'linkedin', 'https://linkedin.com/', '2020-04-09 05:45:06', '2020-04-09 05:45:06'),
(12, 'logo', '', '2020-04-09 05:45:06', '2020-04-09 05:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `file`, `priority`, `created_at`, `updated_at`) VALUES
(1, '/storage/slider/62858820200513094751.png', 1, '2020-05-13 03:47:51', '2020-05-13 03:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shihab Uddin', 'mdshihabuddinm@gmail.com', NULL, '$2y$10$DNUjURoeJqhlqRsfDT97UOeWFnIc/6ipuElQOXP2e2ExGyqiGnDum', 'oW8zWU4E5o80H5hOueNeSE9Bjrz9VzqX2byGlHNmLHKBbAeoSi2lgbkgmgya', '2020-04-09 05:45:07', '2020-04-09 05:45:07'),
(2, 'Admin', 'admin@example.com', NULL, '$2y$10$fhCyaMFqPfV9Geb9fwnKN.VuRaf8WlhSPP6Vkbh57lkjViorpshPS', NULL, '2020-04-09 13:48:15', '2020-04-09 13:48:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_links`
--
ALTER TABLE `important_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_classes`
--
ALTER TABLE `live_classes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quran_classes`
--
ALTER TABLE `quran_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `important_links`
--
ALTER TABLE `important_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `live_classes`
--
ALTER TABLE `live_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `quran_classes`
--
ALTER TABLE `quran_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
