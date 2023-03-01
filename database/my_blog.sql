-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 01:49 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_fr` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `title_fr`, `body`, `body_fr`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Bracket test', 'Test de balisage', '<strong>Excepturi quidem suscipit ut impedit autem ut.</strong> Voluptate commodi est a. Praesentium expedita earum est eveniet beatae officia quasi. Omnis quia qui sed. Consequatur sed unde et. Possimus vel sed a consequatur. Perferendis et porro ea dolores facilis non aliquam. Debitis alias eum suscipit quas. Omnis aliquid similique unde asperiores. Dolorem illo minus sit aspernatur aliquid. Sed necessitatibus quidem expedita voluptas eius. Omnis animi repudiandae esse et amet. Culpa tempora veniam et perferendis. Rem illo voluptatem numquam nobis adipisci. Aperiam culpa odit sed est dicta quos earum. Omnis rerum incidunt quo laborum error reprehenderit. Sunt unde vel totam est quae reiciendis corrupti. In voluptas optio quibusdam esse. Qui est est modi assumenda sequi corporis est. A consectetur quidem sit et incidunt. Adipisci consectetur non error maiores aut et consequatur. Non et labore dolorem soluta. Est possimus repellendus minima non sunt hic. Omnis dignissimos at illum neque. Veritatis qui illo consequuntur quia ut assumenda at. Et ab maiores consequatur aut id omnis facilis vitae. Minima laborum blanditiis ea quas minima ab nisi. Laborum assumenda quisquam non sunt quas. Ut odio aut voluptatem atque. Molestiae dolorem quidem magnam. Rerum et praesentium consequatur harum recusandae distinctio quo. Maxime qui perferendis id enim voluptatem. Dolorem magni eveniet harum omnis et quis. Necessitatibus aut architecto aliquam perferendis eos amet. Voluptate voluptatem ad minima praesentium perferendis omnis temporibus. Repellat similique voluptate necessitatibus modi asperiores laudantium. Nemo rerum ipsum illum sunt. Exercitationem corporis et quis dolor magni officiis. Enim aliquid quis perferendis corrupti. Rem molestias quisquam laudantium ut.', '', 1, '2023-01-13 20:13:57', '2023-02-10 19:37:23'),
(2, 'Libero consequuntur molestiae maxime rerum dolor nemo voluptas.', 'Titre ex1', 'Est distinctio ut explicabo sit non. Fugit quia ad dolor non et et nisi. Cupiditate vero nulla libero ab facere doloribus. Modi a aliquid laudantium ut rerum. Voluptatem vel ipsam est error quos saepe blanditiis. Quia quia quis aperiam hic rerum placeat. Dolorem rem quo et molestias. Consequatur voluptatibus eveniet sit aut. Eveniet laborum quibusdam laborum natus. Aut vitae explicabo reiciendis rerum culpa sed et et. Tempore quia repellendus numquam et vel est veniam. Hic corrupti expedita doloremque iusto sequi dolorum similique. Aut rem accusamus quibusdam consequuntur maxime rerum. Qui autem iure dolorum debitis voluptas laudantium ipsa. Aut error ut explicabo mollitia est. Et dolores odit numquam quaerat. Aut consequatur qui explicabo aliquid. Totam ex sapiente modi blanditiis. At voluptas impedit consequatur natus explicabo totam distinctio. Et vel iure ea neque ab qui. Consequatur dolore corrupti consequatur accusamus dignissimos quidem. Consequuntur cupiditate quae architecto deleniti quos iusto delectus ex.', '', 2, '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(3, 'Earum non ut ratione sed.', 'Titre ex2', 'Neque accusantium ut et ullam. Culpa harum amet voluptatem qui velit. Fugiat ut qui quis sunt saepe qui qui. Quia harum quis mollitia omnis praesentium autem dolor. Aliquid hic ullam repellat. Dolores et quia temporibus non exercitationem. Accusamus asperiores dolor dolor eos. Natus dolore illum doloribus eveniet necessitatibus. Iure quis reprehenderit id qui et. Dignissimos ut sed sint facere ex consequuntur quam laboriosam. Officia a tempora non magnam est ullam nihil ipsa. Nulla saepe ut est est laborum animi. Recusandae enim reiciendis molestiae. Qui unde est eos vel. Incidunt dolor commodi praesentium molestiae quibusdam totam aut. Aut qui esse dolores suscipit. Neque eum quis voluptas asperiores eum qui vero. Id id sequi quas qui. Est dolorum quia qui nesciunt tenetur assumenda nihil iure.', '', 3, '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(4, 'Placeat sint molestias velit corporis quis.', 'Titre ex3', 'Aliquam rerum voluptate necessitatibus aut. Incidunt consequatur qui voluptate est. Incidunt voluptatem sed ea reprehenderit et. Et saepe quibusdam animi consequatur. Soluta unde nihil doloribus id voluptas qui non. Adipisci fuga possimus libero rem est. Excepturi sunt perferendis in numquam non. Sit at doloribus nobis optio sit pariatur labore. Consequatur placeat saepe quibusdam qui quisquam ut voluptatem optio. Quia ea unde commodi possimus veniam. Deserunt possimus ut temporibus voluptatibus illum doloremque dolor. Aut accusamus aspernatur rerum veritatis necessitatibus. Nihil enim est delectus dolorum. Labore ducimus doloribus dolor tempora rem aut pariatur unde. Ut dicta quos aperiam cum dolores ipsam iste reprehenderit. Laboriosam eius libero saepe id. Minima eum velit omnis. Dolorem labore facilis non fugiat. Sit non aliquid sint quo. Nihil quam adipisci sit quas provident amet facere. Nemo non accusantium qui libero earum libero qui. Fugit laborum recusandae facilis ratione illo. Reprehenderit unde est porro modi in quidem. Vel ad iure voluptates optio omnis possimus. Non est tenetur amet omnis.', '', 4, '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(5, 'Aut sit voluptas voluptatem assumenda et consequuntur iste.', 'Titre ex4', 'Facilis porro nihil rerum molestias quidem atque reprehenderit eum. Nisi et dolorem placeat nulla nam minus sint. Itaque assumenda sunt voluptate eum a. Asperiores doloribus sint dolorem animi pariatur vel ullam odio. Velit quia nihil adipisci. Ipsa praesentium sed eaque illo ut. Et et nostrum ut. Deserunt rerum repudiandae qui nemo id. Omnis mollitia ipsam animi expedita vitae perspiciatis error. Delectus voluptas ut non consequatur quia enim. Et recusandae ducimus rerum velit. Tenetur illum consequatur repellendus deleniti occaecati. Expedita culpa voluptate cupiditate ullam adipisci dolorem ullam. Voluptates sapiente deserunt dolor et. Ut nihil debitis provident molestiae culpa fugiat. Placeat ea neque eum explicabo. Quo aspernatur inventore hic nisi asperiores perferendis. Consectetur natus est dolorum laborum. Dolores unde vel similique in. Ipsam mollitia laborum voluptate nulla architecto. Consequatur ut dolorum ea natus. Eos nulla eius in voluptatem magni eos. Laborum consectetur aperiam corrupti eligendi. Consequatur atque laboriosam ut.', '', 5, '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(6, 'Autem consequatur illo molestiae et eos.', 'Titre ex5', 'Corporis rerum est voluptatibus nisi quod. Nesciunt sapiente doloremque reprehenderit quis nam. Possimus a animi accusamus et. Laboriosam consequatur sint dolorem nostrum et ex. Sit assumenda consectetur illum quos est ut quia. Quaerat et adipisci sit. Quo magnam neque deserunt unde iure et. Eos veritatis reprehenderit sunt ut laborum quo. Ut qui maiores ut tempora rerum rerum a. Odio voluptates dicta ratione aut. Aliquid voluptas consequatur architecto iste ullam qui eaque. Dolor et voluptatem consectetur similique sed modi voluptatem voluptas. Dolores perspiciatis et nihil ullam. Unde nihil iure quas dolorum. Illum nostrum consequatur reprehenderit perspiciatis porro ut aut. Consequatur quis sed dolorum commodi neque recusandae. Doloremque eum nemo qui iste voluptatem aut quibusdam. Aut rerum quis sed commodi aut. Debitis earum dignissimos accusantium et distinctio ex. Perspiciatis ut sit cumque at vero. Sapiente quia sit error in. Laboriosam eum voluptas vel blanditiis vitae recusandae sint cumque. Labore et animi aperiam nulla voluptatem illum excepturi. Non tempore illo neque quam non rerum. Quam praesentium enim quaerat ipsa voluptatum qui omnis. Nesciunt nostrum blanditiis eos blanditiis harum quam. Et nesciunt cumque occaecati rerum velit hic atque. Vitae eveniet ut et esse harum quam. Rerum id distinctio et et aliquam magni. Cumque quia quae officiis. Praesentium mollitia similique voluptates debitis vitae hic eligendi. Perferendis totam reprehenderit rerum rerum. Est distinctio omnis inventore illo sint voluptas. Blanditiis qui enim recusandae tenetur sed. Fugit quia voluptas ut corporis harum. Aut iure aut dicta.', '', 6, '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(7, 'Sunt voluptate dolorum totam aperiam voluptas eos nihil modi.', 'Titre ex6', 'Blanditiis nihil voluptatibus aut ea rem. Eum voluptas placeat quaerat. Tempore natus assumenda similique ab sunt sit voluptas laborum. Molestiae optio voluptas qui laudantium. Commodi nam enim sed quas omnis quis alias. Et labore dolores et molestiae. Praesentium cumque corporis possimus et debitis in. Est ipsa sapiente debitis minima qui cupiditate odit laboriosam. Ea error provident cum harum accusantium consequatur et ducimus. Ex voluptatem consequatur cupiditate saepe nisi beatae placeat velit. Vero quis in dolore non ipsum rem. Sed non eum labore odio. Consequatur harum delectus ea doloremque consequatur dolore et consequuntur. Temporibus et quidem deserunt rem ab. Sapiente et perferendis et officia temporibus magni non. Laborum eius neque ducimus consequatur ad accusantium ipsum. Ea hic est praesentium. Repellendus autem neque reiciendis et. Omnis quia libero iure ab. Illo necessitatibus soluta ad vero deleniti. Occaecati nisi omnis consequuntur ducimus rerum eum provident. Quis omnis rerum distinctio. Labore praesentium inventore saepe excepturi. Quae laboriosam et et molestiae nisi. Ad ducimus mollitia quam quam iusto. Sit dolore eum repellendus provident officia dolore. Molestiae mollitia ea velit dolor adipisci sint. Neque culpa consequuntur alias saepe.', '', 7, '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(8, 'Ad placeat possimus quod beatae.', 'Titre ex7', 'FFFFFFFFF', '', 8, '2023-01-13 20:13:57', '2023-01-27 18:14:17'),
(9, 'Sit temporibus enim eum quod facilis maiores.', 'Titre ex8', 'Aut impedit nisi quia autem non quos error. Consequatur corporis vitae molestias reiciendis. Voluptas atque ipsum odit. Sed quas ratione quia rerum accusantium odit ut. Eum ea voluptas facilis et nisi et. Facilis voluptas molestiae voluptatem doloremque iusto et. Impedit repudiandae hic ut et ad doloribus neque ipsam. Molestias et qui ipsa quia ut et. Voluptas temporibus debitis in repudiandae quibusdam quisquam reprehenderit. Adipisci reprehenderit et velit soluta qui. Voluptatem ex quam dolores ipsum sint sapiente facilis. Excepturi omnis alias corrupti maxime sed. Nihil dolores aut facilis magnam. Ea sed labore incidunt laboriosam repellat ut. Voluptas facilis inventore reiciendis consectetur perferendis. Et aut fugiat laboriosam eum quia dicta. Eaque necessitatibus nulla ratione corporis consequatur ut. Maiores itaque quos iure. Earum aperiam consequatur quasi expedita distinctio veniam.', '', 9, '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(10, 'Deleniti ipsa velit ab nostrum iure deserunt.', 'Titre ex9', 'Dolores et dolorum fuga et rerum at eum. Corporis rerum voluptas dolorem vel incidunt unde. Sed ullam id enim ad. Ut ratione voluptas repellat. Velit eum soluta quasi dolorum officia. Impedit nemo aspernatur alias nostrum quo. Quam consequatur ipsum quis rerum repudiandae dolores eaque distinctio. Optio non quod officiis magnam recusandae et. Aut aliquid eum commodi occaecati. Quia omnis voluptas ut atque quo. Dolore qui sed autem ullam. Exercitationem est rem et aut repellendus illo ex. Eligendi nobis ipsa voluptate et omnis. Amet sint aut dignissimos nisi quia. Dolor veniam quis tempora autem optio sed voluptates. Nemo officiis id porro iusto. Et ratione voluptate nam suscipit assumenda eaque natus. Earum ea reprehenderit harum harum ipsa eum aut aliquam. Nihil qui ut et adipisci ullam ratione consequatur. Eveniet fugit maiores similique laboriosam. Nesciunt et in cum voluptatem. Vel odit excepturi eos quam sed dolores. Rerum est quas cum est nostrum explicabo. Tempore quia architecto quos quo. Magnam pariatur perspiciatis sit provident et. Facilis nulla laboriosam voluptatum similique ratione ea non. Magnam ut facere ut quia quia consequuntur est. Dolorum non dolore sed non. Provident voluptates ea qui non cum ad id. Velit illum quae itaque soluta perferendis laudantium. Omnis aliquam voluptas sed ipsum enim.', '', 10, '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(13, 'Sylvester Stallone in', 'Titre ex10', 'Rocky', '', 1, '2023-01-27 18:14:39', '2023-01-27 18:14:39'),
(14, 'VVVVVVVVVVVVVVVVVVVVVVV', 'Titre ex11', 'VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV', '', 11, '2023-02-06 23:09:13', '2023-02-06 23:09:13'),
(18, 'Nick Cage', 'Titre ex12', 'as Nick Cage', '', 11, '2023-02-10 18:54:05', '2023-02-10 19:37:13'),
(19, 'A test', 'Un test', 'Of your reflexes', 'De vos réflexes', 20, '2023-02-21 01:04:10', '2023-02-28 04:14:46'),
(20, 'Test', 'Test fr', 'English', 'Fran', 20, '2023-03-01 00:11:55', '2023-03-01 00:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `title` varchar(45) NOT NULL,
  `title_fr` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `file`, `title`, `title_fr`, `created_at`, `updated_at`, `users_id`) VALUES
(1, 'Test.zip', 'A test', 'Un test', NULL, NULL, 20),
(2, 'TP2_-_Laravel_-_Login.pdf', 'A pdf', 'Un pdf', NULL, NULL, 20),
(3, 'Ex2_CadWeb_VincentDubois.docx', 'The docx', 'Le docx', NULL, NULL, 10),
(4, '1677631315.pdf', 'Checkout', 'Rrgardeça', '2023-03-01 05:41:55', '2023-03-01 05:41:55', 20);

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`users_id`, `created_at`, `updated_at`) VALUES
(25, '2023-02-28 01:31:44', '2023-02-28 01:31:44');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_13_134817_create_blog_posts_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_password` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `temp_password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Timmy Fay V', 'mayer.ibrahim@example.org', '2023-01-13 20:13:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'EpVv7CLmxK', '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(2, 'Osborne Aufderhar III', 'lowe.nikita@example.net', '2023-01-13 20:13:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Gd7nW3SPOw', '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(3, 'Lina Ankunding', 'veum.gonzalo@example.net', '2023-01-13 20:13:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'L2SM5Ywmxw', '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(4, 'Dr. Alize Franecki', 'moises92@example.net', '2023-01-13 20:13:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'YlfUHvOeTp', '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(5, 'Herta West', 'melvin72@example.com', '2023-01-13 20:13:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'YFh6BEMYhh', '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(6, 'Milo Heathcote', 'alexa46@example.org', '2023-01-13 20:13:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '9wuhEoXrMo', '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(7, 'Dr. Cleve Kiehn II', 'daryl.yost@example.com', '2023-01-13 20:13:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Ihup2SCyjj', '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(8, 'Arne Quigley I', 'stamm.jimmie@example.com', '2023-01-13 20:13:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'ILlOSN5hEk', '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(9, 'Mr. Lester Kiehn', 'mmayer@example.net', '2023-01-13 20:13:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'buTjYVZulX', '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(10, 'Colin Keebler', 'althea73@example.com', '2023-01-13 20:13:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'q9ZU9PgwxG', '2023-01-13 20:13:57', '2023-01-13 20:13:57'),
(11, 'Vince', 'wood@wood.wood', NULL, '$2y$10$50091J2QlmPcZjv1c.oM7OR7gRX8.hbcIzghEheuS410O.llzZUba', NULL, NULL, '2023-02-17 18:32:20', '2023-02-17 18:32:20'),
(20, 'Vince', 'dubois9663@gmail.com', NULL, '$2y$10$veoQ.bo7DTv6CvPtxLsgkONJyc0K5Q/ZiJ4mM.qbbn/YBByElsJyi', NULL, NULL, '2023-02-17 19:55:03', '2023-02-20 23:06:32'),
(25, 'Test', 'test@test.test', NULL, '$2y$10$fRL6usbLs3.XGzqu0sDIYO0JLd29vvToizVw2ocSgUV3h1hxGNRqi', NULL, NULL, '2023-02-28 01:31:44', '2023-02-28 01:31:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_documents_users1_idx` (`users_id`);

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD KEY `fk_etudiant_users1_idx` (`users_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `fk_documents_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `fk_etudiant_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
