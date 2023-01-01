-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 02:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `about`, `meta`, `image`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Getting Started with Laravel the laravel framework', 'Getting to know laravel', 'coding', 'blogs/JeYDninxFBcshhfGnyt6FDjHQMeYNFXr2ZXeQ06E.png', '<h4> </h4><h4><span style=\"font-weight: normal;\">What is <a href=\"https://laravel.com/\" target=\"_blank\" class=\"text-danger text-decoration-none\">Laravel</a>?</span></h4><p>Laravel\r\n is a free, open source PHP web framework used for web application \r\ndevelopment. It is designed to make common web development tasks, such \r\nas Routing, authentication and caching easier and more efficient. \r\nLaravel follows the <b>model-view-controller (MVC) </b>architectural pattern, which separates an application into three main components,</p><ul><li>The Model</li><li>The View </li><li>The Controller</li></ul><p>This\r\n separation of concepts helps to organize and manage the co-debase \r\nmaking it easier to develop and maintain large web applications. Laravel\r\n also includes a number of features and tools to help developers build \r\nmodern, feature-rich web applications, such as support for <b>database migrations</b>, <b>Object relational mapping (ORM)</b> and a <b>task scheduler</b>. </p><p><img style=\"width: 50%; float: right;\" src=\"data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI1MDAiIHZpZXdCb3g9IjAgLS4xMTM3NjYwMSA0OS43NDI0NTc4NSA1MS4zMTY5MDg1OSIgd2lkdGg9IjI0MTgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ5LjYyNiAxMS41NjRhLjgwOS44MDkgMCAwIDEgLjAyOC4yMDl2MTAuOTcyYS44LjggMCAwIDEgLS40MDIuNjk0bC05LjIwOSA1LjMwMnYxMC41MDljMCAuMjg2LS4xNTIuNTUtLjQuNjk0bC0xOS4yMjMgMTEuMDY2Yy0uMDQ0LjAyNS0uMDkyLjA0MS0uMTQuMDU4LS4wMTguMDA2LS4wMzUuMDE3LS4wNTQuMDIyYS44MDUuODA1IDAgMCAxIC0uNDEgMGMtLjAyMi0uMDA2LS4wNDItLjAxOC0uMDYzLS4wMjYtLjA0NC0uMDE2LS4wOS0uMDMtLjEzMi0uMDU0bC0xOS4yMTktMTEuMDY2YS44MDEuODAxIDAgMCAxIC0uNDAyLS42OTR2LTMyLjkxNmMwLS4wNzIuMDEtLjE0Mi4wMjgtLjIxLjAwNi0uMDIzLjAyLS4wNDQuMDI4LS4wNjcuMDE1LS4wNDIuMDI5LS4wODUuMDUxLS4xMjQuMDE1LS4wMjYuMDM3LS4wNDcuMDU1LS4wNzEuMDIzLS4wMzIuMDQ0LS4wNjUuMDcxLS4wOTMuMDIzLS4wMjMuMDUzLS4wNC4wNzktLjA2LjAyOS0uMDI0LjA1NS0uMDUuMDg4LS4wNjloLjAwMWw5LjYxLTUuNTMzYS44MDIuODAyIDAgMCAxIC44IDBsOS42MSA1LjUzM2guMDAyYy4wMzIuMDIuMDU5LjA0NS4wODguMDY4LjAyNi4wMi4wNTUuMDM4LjA3OC4wNi4wMjguMDI5LjA0OC4wNjIuMDcyLjA5NC4wMTcuMDI0LjA0LjA0NS4wNTQuMDcxLjAyMy4wNC4wMzYuMDgyLjA1Mi4xMjQuMDA4LjAyMy4wMjIuMDQ0LjAyOC4wNjhhLjgwOS44MDkgMCAwIDEgLjAyOC4yMDl2MjAuNTU5bDguMDA4LTQuNjExdi0xMC41MWMwLS4wNy4wMS0uMTQxLjAyOC0uMjA4LjAwNy0uMDI0LjAyLS4wNDUuMDI4LS4wNjguMDE2LS4wNDIuMDMtLjA4NS4wNTItLjEyNC4wMTUtLjAyNi4wMzctLjA0Ny4wNTQtLjA3MS4wMjQtLjAzMi4wNDQtLjA2NS4wNzItLjA5My4wMjMtLjAyMy4wNTItLjA0LjA3OC0uMDYuMDMtLjAyNC4wNTYtLjA1LjA4OC0uMDY5aC4wMDFsOS42MTEtNS41MzNhLjgwMS44MDEgMCAwIDEgLjggMGw5LjYxIDUuNTMzYy4wMzQuMDIuMDYuMDQ1LjA5LjA2OC4wMjUuMDIuMDU0LjAzOC4wNzcuMDYuMDI4LjAyOS4wNDguMDYyLjA3Mi4wOTQuMDE4LjAyNC4wNC4wNDUuMDU0LjA3MS4wMjMuMDM5LjAzNi4wODIuMDUyLjEyNC4wMDkuMDIzLjAyMi4wNDQuMDI4LjA2OHptLTEuNTc0IDEwLjcxOHYtOS4xMjRsLTMuMzYzIDEuOTM2LTQuNjQ2IDIuNjc1djkuMTI0bDguMDEtNC42MTF6bS05LjYxIDE2LjUwNXYtOS4xM2wtNC41NyAyLjYxLTEzLjA1IDcuNDQ4djkuMjE2em0tMzYuODQtMzEuMDY4djMxLjA2OGwxNy42MTggMTAuMTQzdi05LjIxNGwtOS4yMDQtNS4yMDktLjAwMy0uMDAyLS4wMDQtLjAwMmMtLjAzMS0uMDE4LS4wNTctLjA0NC0uMDg2LS4wNjYtLjAyNS0uMDItLjA1NC0uMDM2LS4wNzYtLjA1OGwtLjAwMi0uMDAzYy0uMDI2LS4wMjUtLjA0NC0uMDU2LS4wNjYtLjA4NC0uMDItLjAyNy0uMDQ0LS4wNS0uMDYtLjA3OGwtLjAwMS0uMDAzYy0uMDE4LS4wMy0uMDI5LS4wNjYtLjA0Mi0uMS0uMDEzLS4wMy0uMDMtLjA1OC0uMDM4LS4wOXYtLjAwMWMtLjAxLS4wMzgtLjAxMi0uMDc4LS4wMTYtLjExNy0uMDA0LS4wMy0uMDEyLS4wNi0uMDEyLS4wOXYtMjEuNDgzbC00LjY0NS0yLjY3Ni0zLjM2My0xLjkzNHptOC44MS01Ljk5NC04LjAwNyA0LjYwOSA4LjAwNSA0LjYwOSA4LjAwNi00LjYxLTguMDA2LTQuNjA4em00LjE2NCAyOC43NjQgNC42NDUtMi42NzR2LTIwLjA5NmwtMy4zNjMgMS45MzYtNC42NDYgMi42NzV2MjAuMDk2em0yNC42NjctMjMuMzI1LTguMDA2IDQuNjA5IDguMDA2IDQuNjA5IDguMDA1LTQuNjF6bS0uODAxIDEwLjYwNS00LjY0Ni0yLjY3NS0zLjM2My0xLjkzNnY5LjEyNGw0LjY0NSAyLjY3NCAzLjM2NCAxLjkzN3ptLTE4LjQyMiAyMC41NjEgMTEuNzQzLTYuNzA0IDUuODctMy4zNS04LTQuNjA2LTkuMjExIDUuMzAzLTguMzk1IDQuODMzeiIgZmlsbD0iI2ZmMmQyMCIvPjwvc3ZnPg==\" data-filename=\"laravel-2.svg\" class=\"note-float-right\"></p><h4>Why laravel?</h4><ol><li><b>MVC architecture </b>-\r\n Laravel follows the MVC architectural pattern, this helps organize and \r\nmanage the codebase in a logical and efficient way. This makes easier to\r\n develop and maintain large applications.</li><li><b>Artisan Console </b>-<b> </b>Laravel\r\n comes with a built-in command-line-interface (CLI) called artisan that \r\nprovides a number of useful commands for managing and developing laravel\r\n applications.</li><li><b>Routing </b>- Laravel has a simple Routing system that allows developers to easily define and manage the routes of their applications </li><li><b>Blade Templating Engine </b>-\r\n Laravel provides a powerful templating engine, blade templates, that \r\nmakes it easy to reuse templates in your application. It\'s powered by \r\nPHP</li><li><b>Eloquent ORM </b>-&nbsp; Laravel\'s eloquent ORM \r\n(Object-Relational Mapping) makes it easy to work with database and \r\nperform common database operations&nbsp;</li><li> <b>Authentication </b>-&nbsp; Laravel includes built-in support for user authentication and \r\nauthorization, making it easy to add login and registration forms to \r\nyour application.</li><li><b>Task Scheduling </b>- Laravel includes a task scheduler that allows you to define and schedule\r\n repetitive tasks, such as sending emails or cleaning up old data.</li><li><b>Community - </b>Laravel has a large and active community of developers who contribute to\r\n the framework and provide support to users. There are also many \r\nresources and tools available online, such as tutorials and packages, \r\nthat can help developers learn and work with Laravel.</li></ol><p><br></p>\"<p></p>\"', '2022-12-31 07:01:09', '2022-12-31 07:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `title`, `about`, `tags`, `image`, `content`, `created_at`, `updated_at`) VALUES
(9, 'Blood Donation Management System (BDMS)', 'Digital blood donation System', 'PHP, bootsrap', 'projects/90vQGgnXCjXmudxRhB3KJSIdHA6jwUIIackbMmaH.png', '<h4>What is BDMS?</h4><p>A blood donation system is a network of organizations, processes, and \r\ninfrastructure that collect, process, and distribute donated blood and \r\nblood products to medical facilities and patients in need. The primary \r\ngoal of a blood donation system is to ensure that there is a sufficient \r\nand reliable supply of safe, high-quality blood and blood products \r\navailable to meet the needs of patients in a given region.</p><p>There are several key components to a blood donation system, including:</p><ul><li>Blood collection centers: These are facilities where individuals can \r\ndonate blood, typically through a process called phlebotomy. Blood \r\ncollection centers may be located in hospitals, clinics, or mobile units\r\n that travel to various locations.</li><li>Blood banks: These are facilities that process, test, and store donated \r\nblood and blood products. Blood banks ensure that the blood is safe and \r\nsuitable for transfusion, and may also prepare specialized blood \r\nproducts such as platelets or plasma.</li><li>Blood distribution: Once the blood has been collected and processed, it \r\nmust be transported to hospitals and other medical facilities where it \r\nis needed. This may be done through a network of blood delivery vehicles\r\n or through a central distribution center.</li><li>Recruitment and education: A key component of a successful blood \r\ndonation system is the ability to recruit and educate potential donors \r\nabout the importance of blood donation and the process for donating \r\nblood. This may involve public outreach campaigns, educational \r\nmaterials, and other initiatives to increase awareness and encourage \r\nmore people to donate.</li></ul><p>Overall, the goal of a blood donation system is to ensure that there is a\r\n sufficient supply of safe, high-quality blood and blood products \r\navailable to meet the needs of patients in a given region or country. \r\nThis requires a combination of effective collection, processing, and \r\ndistribution processes, as well as efforts to educate and recruit \r\npotential donors.</p><p><br></p>', '2022-12-31 07:13:02', '2022-12-31 07:13:02');

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
(312, '2022_12_29_193757_create_comments_table', 1),
(430, '2014_10_12_000000_create_users_table', 2),
(431, '2014_10_12_100000_create_password_resets_table', 2),
(432, '2019_08_19_000000_create_failed_jobs_table', 2),
(433, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(434, '2022_12_17_160827_create_projects_table', 2),
(435, '2022_12_18_101934_create_blogs_table', 2),
(436, '2022_12_20_104759_create_listings_table', 2),
(437, '2022_12_28_135145_create_contacts_table', 2),
(438, '2022_12_30_004026_create_blog_comments', 2),
(439, '2022_12_30_230205_create_admin_table', 2),
(440, '2022_12_31_075359_create_admins_table', 2);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Myrtis Bailey', 'rylan.wiza@example.org', '2022-12-31 05:17:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WcOFEj2OFc', '2022-12-31 05:17:57', '2022-12-31 05:17:57'),
(2, 'Adonis Erdman', 'roberta.dibbert@example.com', '2022-12-31 05:17:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'npb6lVZeju', '2022-12-31 05:17:57', '2022-12-31 05:17:57'),
(3, 'Prof. Howard Quitzon', 'kunze.eldridge@example.net', '2022-12-31 05:17:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'S5uYHftZdu', '2022-12-31 05:17:57', '2022-12-31 05:17:57'),
(4, 'Mr. Jacinto Mills', 'breitenberg.aryanna@example.org', '2022-12-31 05:17:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g9cyGukafQ', '2022-12-31 05:17:57', '2022-12-31 05:17:57'),
(5, 'Estella Veum', 'jett64@example.org', '2022-12-31 05:17:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3z6dMHN0qs', '2022-12-31 05:17:57', '2022-12-31 05:17:57'),
(6, 'Kaitlin Homenick', 'bettye.douglas@example.org', '2022-12-31 05:17:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '45oHdTJOZH', '2022-12-31 05:17:57', '2022-12-31 05:17:57'),
(7, 'Mrs. Wanda Swaniawski', 'axel.kautzer@example.org', '2022-12-31 05:17:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BC2i1foHk3', '2022-12-31 05:17:57', '2022-12-31 05:17:57'),
(8, 'Orlo Abbott', 'cummings.ulices@example.com', '2022-12-31 05:17:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wEo4WA9ZrO', '2022-12-31 05:17:57', '2022-12-31 05:17:57'),
(9, 'Ernest Towne MD', 'cydney03@example.com', '2022-12-31 05:17:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'M6zgGUdW27', '2022-12-31 05:17:57', '2022-12-31 05:17:57'),
(10, 'Chelsea Runolfsson', 'gaylord.tracey@example.com', '2022-12-31 05:17:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yycqAPUX0V', '2022-12-31 05:17:57', '2022-12-31 05:17:57'),
(11, 'Robert Ochieng', 'robarangs72@gmail.com', NULL, '$2y$10$bxdujiirALlk9m/39XyDT.LPZYcleHmIdDyV3NK7ZO6HT8Z6qIQdy', NULL, '2022-12-31 05:30:20', '2022-12-31 05:30:20'),
(12, 'Robert Ochieng', 'robarangs57@gmail.com', NULL, '$2y$10$pp/nQqzX9Zsg9o4tM.xXVeR5IzPxMUpt5IAlzmRrr7W2qq63ApNom', NULL, '2022-12-31 06:03:33', '2022-12-31 06:03:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
