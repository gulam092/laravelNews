-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 10:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara3pm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'gulammlkpg35@gmail.com', 'gulam', '9eeadbd311bd51616a570d525527739a', NULL, NULL),
(2, 'g1@gmail.com', 'gulam', '9eeadbd311bd51616a570d525527739a', '2020-02-07 18:30:00', '2020-02-07 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'the end of india', 120.00, '1361780637.jpg', '2020-02-20 11:21:41', '2020-02-20 11:21:41'),
(2, 'Illegal: A graphic novel telling one boy\'s epic journey to Europe', 120.00, '340399320.jpg', '2020-02-20 12:16:26', '2020-02-20 12:16:26'),
(3, 'To Kill a Mockingbird. ...', 200.00, '1005103478.jpg', '2020-02-20 12:16:56', '2020-02-20 12:16:56'),
(4, 'Great Gatsby. ...', 150.00, '1431016583.jpg', '2020-02-20 12:17:21', '2020-02-23 10:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cname`, `image`, `date`, `created_at`, `updated_at`) VALUES
(24, 'cricket', '1342715761.jpg', '', '2020-02-18 13:26:27', '2020-02-18 13:26:27'),
(25, 'entertainment', '1433723020.jpg', '', '2020-02-18 13:28:18', '2020-02-18 13:28:18'),
(26, 'health', '2117894276.jpg', '', '2020-02-18 13:30:51', '2020-02-18 13:30:51'),
(27, 'Education', '1338447751.jpg', '', '2020-02-18 13:32:29', '2020-02-18 13:32:29'),
(28, 'tech', '1915514135.jpg', '', '2020-02-18 13:34:22', '2020-02-18 13:34:22'),
(29, 'world', '1517252604.jpg', '', '2020-02-18 13:36:47', '2020-02-18 13:36:47'),
(30, 'sport', '1000680248.jpg', 'Feb 24 ,2020', '2020-02-23 20:15:32', '2020-02-23 20:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `id` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`id`, `comment`, `author`, `date`, `created_at`, `updated_at`) VALUES
(34, 'hello', 'gulam', 'Feb 24 ,2020', '2020-02-24 06:13:46', NULL),
(35, 'sd', 'gulam', 'Feb 24 ,2020', '2020-02-24 06:24:09', NULL),
(36, 'dsd', 'gulam', 'Feb 24 ,2020', '2020-02-24 06:24:48', NULL),
(37, 'zxdfdxf', 'gulam', 'Feb 24 ,2020', '2020-02-24 06:26:00', NULL),
(38, 'dffsdf', 'gulam', 'Feb 24 ,2020', '2020-02-24 06:26:07', NULL),
(39, 'dxfxdf', 'gulam', 'Feb 24 ,2020', '2020-02-24 06:26:18', NULL),
(40, 'dfzdF', 'gulam', 'Feb 24 ,2020', '2020-02-24 08:45:39', NULL),
(41, 'sdadas', 'gulam', 'Feb 24 ,2020', '2020-02-24 08:47:13', NULL),
(42, 'hjghjvhvjh', 'gulam', 'Feb 24 ,2020', '2020-02-24 08:53:41', NULL),
(43, 'hhjv', 'gulam', 'Feb 24 ,2020', '2020-02-24 08:53:50', NULL),
(44, 'dhfb', 'gulam', 'Feb 24 ,2020', '2020-02-24 08:54:01', NULL),
(45, 'vjh', 'gulam', 'Feb 24 ,2020', '2020-02-24 10:19:27', NULL),
(46, 'dsfSDF', 'gulam', 'Feb 24 ,2020', '2020-02-24 11:06:14', NULL),
(47, 'hello ho', 'gulam', 'Feb 24 ,2020', '2020-02-24 11:06:32', NULL),
(48, 'hi', 'gulam', 'Feb 24 ,2020', '2020-02-24 11:06:40', NULL),
(49, 'xvx', 'gulam', 'Feb 24 ,2020', '2020-02-24 11:13:23', NULL),
(50, 'xzvgzxdfg', 'gulam', 'Feb 24 ,2020', '2020-02-24 11:14:23', NULL),
(51, 'gfgfjk', 'gulam', 'Feb 24 ,2020', '2020-02-24 11:14:39', NULL),
(52, 'hi', 'gulam', 'Feb 27 ,2020', '2020-02-27 11:23:18', NULL),
(53, 'dfsDFSDFS', 'gulam', 'Feb 27 ,2020', '2020-02-27 11:24:26', NULL),
(54, 'zscz', 'gulam', 'Feb 28 ,2020', '2020-02-27 19:47:59', NULL),
(55, 'fsd', 'gulam', 'Feb 28 ,2020', '2020-02-27 20:17:43', NULL),
(56, 'how to use offset and limit in laravel query? - Laracasts', 'gulam', 'Feb 28 ,2020', '2020-02-27 20:20:21', NULL),
(57, 'hsjDhkasjDASFkjsafdas', 'gulam', 'Feb 29 ,2020', '2020-02-29 09:22:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_users`
--

CREATE TABLE `contact_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userphone` int(11) NOT NULL,
  `Message` text NOT NULL,
  `date` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_users`
--

INSERT INTO `contact_users` (`id`, `username`, `useremail`, `userphone`, `Message`, `date`) VALUES
(1, 'yahoo', 'a@gmail.com', 143433, 'vcbcvb', '2020-02-23 22:52:58'),
(4, 'gulam', 'mca@gmail.com', 123478, 'hello how are your', 'February-23-2020 23:55:51'),
(5, 'gulam', 'g@gmail.com', 1234578, 'dfsdgd', 'February-23-2020'),
(7, 'awdaw', 'g@gmail.com', 1234, 'sefs', '16-24-2020'),
(8, 'sasAD', 'as@gmail.com', 123457, 'dSDS', 'February-24-2020'),
(9, 'gulam', 'gu@gmail.com', 123457893, 'helobSJKcvbsZMcjbazsjBcjmzsBcjmzbs', '19-24-2020'),
(10, 'gulam', 'gu@gmail.com', 123457893, 'vSKJdvSJKDcbJSBDckjSBDJSSFSF', 'Feb 24 ,2020');

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
(4, '2020_02_06_181218_create_admins_table', 1),
(5, '2020_02_10_150803_create_categories_table', 2),
(6, '2020_02_11_173659_create_news_table', 3),
(7, '2020_02_13_111837_create_news_table', 4),
(8, '2020_02_20_110651_create_books_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `category`, `desciption`, `image`, `date`, `created_at`, `updated_at`) VALUES
(6, 'Mike Hussey hails ‘focused and driven’', '24', 'Hussey is in South Africa with the touring Australian side as they prepare for the start of the three-match Twenty20 International series in Johannesburg on Friday.\r\n\r\n“I’m not really sure what my title is, whether it is mentor or batting coach,” Hussey told reporters on Tuesday. “But I don’t really mind, I just want to get out there and help as much as I can and throw a lot of balls.”\r\n\r\nHussey previously worked as a batting consultant for Australia at the T20 World Cup in 2016, and Langer has asked him to return ahead of the next edition of the tournament.\r\n\r\n“I’m hoping to stay involved with the T20 team right through the World Cup,” Hussey says. “It is a fantastic environment, I really like that the guys work so hard and there is some real excitement about the tournament that will be on our doorstep.', '18022020696689099smith.jpg', 'February-23-2020', '2020-02-23 20:18:19', '2020-02-18 13:27:20'),
(7, 'Nithiin to star Andhadhun Telugu remake, Merlapaka Gandhi to direct the film', '25', 'Nithiin currently awaits the release of Telugu romantic comedy Bheeshma, which also stars Rashmika Mandanna. The film is slated to hit the screens on February 21. Nithiin also has Rang De and a yet-untitled film with filmmaker Chandrasekhar Yeleti in the pipeline. He’s currently filming for Rang De, which also stars Keerthy Suresh. Veteran lensman PC Sreeram has been roped in to crank the camera.\r\n\r\nEyeing a hit for quite some time, Nithiin has pinned high hopes on Bheeshma, which has been directed by Venky Kudumula and releases this week.', '180220201912712666enter.jpg', 'February-24-2020', '2020-02-23 20:18:19', '2020-02-18 13:29:25'),
(8, 'Is changing season making your skin dry and dull? Try these natural home remedies RN!', '26', 'All of us want to look good, no matter what the season is. During change of season, it is important to adjust your daily beauty care routine as the skin is influenced by seasonal changes and different conditions, like heat and humidity, or lack of it.\r\n\r\nWith the onset of winter, the humidity in the air starts decreasing. People with normal to dry skin start experiencing a taut feeling in their skin after washing or cleansing.\r\n\r\nWhereas, those with oily skin complain that their skin feels dry after washing, but becomes oily and prone to eruptions, after applying creams. Actually, oily skins can also be short of moisture when the season changes. As for normal to dry skin, it can become rough and flaky, or even highly sensitive, with rough red patches.', '180220201989220570helth.jpg', 'February-23-2020', '2020-02-23 20:18:19', '2020-02-18 13:31:42'),
(9, 'WBHRB Recruitment 2020: 300 vacancies of drivers notified, apply from Feb 20', '27', 'West Bengal Health Recruitment Board (WBHRB) has invited online applications for the direct recruitment to the post for Driver under Regional Office under Directorate of Health Services, Department of Health and Family Welfare, Government of West Bengal on its official website. The online registration process will begin from February 20, 2020.\r\n\r\nInterested and eligible candidates can apply for the posts online at wbhrb.in on or before March 4, 2020, until 8 pm.', '18022020727611439edu.jpg', 'February-23-2020', '2020-02-23 20:18:19', '2020-02-18 13:33:41'),
(10, 'Unboxing the Motorola Razr 2019: Here’s our first look at Motorola’s new foldable smartphone', '28', 'Motorola Razr is coming to India… soon. While exact dates for the India launch are still awaited, the company has already sent out a whole list of do’s and don’ts for users. Motorola shared a video that carries all the instructions.\r\n\r\nBased on the classic flip design from yesteryears, Motorola Razr comes with a 6.2-inch pOLED foldable display with 21:9 aspect ratio. It also comes with a 2.7-inch OLED secondary screen.', '180220201908833339tech.jpg', 'February-23-2020', '2020-02-23 20:18:19', '2020-02-18 13:35:34'),
(11, 'UK minister Alok Sharma appointed COP26 president', '29', 'Agra-born Sharma, 52, is among four Indian-origin ministers at Johnson’s cabinet table; others being chancellor Rishi Sunak, home secretary Priti Patel and attorney-general Suella Braverman (nee Fernandes).\r\n\r\nOfficial sources said on Tuesday that as the former International Development secretary, Sharma’s experience in diplomacy will be key in driving ambitious climate action from countries attending the 26th United Nations Climate Conference in November.\r\n\r\nSharma began his new role on Monday with a meeting with UN deputy secretary general Amina Mohammed, where they committed to working closely together towards a successful, globally ambitious summit in Glasgow.', '180220201021245955wol.jpg', 'February-24-2020', '2020-02-23 20:18:19', '2020-02-18 13:37:28'),
(12, 'India in a bind as Boult puts a spanner in the works', '30', 'n the morning, coming in as the last man, he danced around the crease to whip up a delightful cameo of innovation and unorthodoxy.\r\n\r\nThe edge\r\nTrent Boult’s enterprising 38 extended New Zealand’s lead to 183, giving the hosts a psychological edge as they entered the Basin Reserve ground again on the third day of the first Test here on Sunday.\r\n\r\nThen the left-arm swing bowler, rediscovering his rhythm, bowled a compelling spell, varying his pace, harnessing the angles and the wind, and controlling his movement on a pitch that had eased out.\r\n\r\n\r\nHe prised out Prithvi Shaw with a lifting delivery from round the wicket — a backward square-leg was precisely placed to pluck the fended ball — and then brought the sphere back into Cheteshwar Pujara, who shouldered arms and heard the sound of death.\r\n\r\n\r\nBoult was not finished yet. Big fish Virat Kohli was just getting into his stride when he attempted to pull a quicker short ball from Boult and only succeeding in nicking to ’keeper B-J. Watling.\r\n\r\nIndia was 144 for four with a fighting Ajinkya Rahane (25), who essayed a couple of scorching cuts but was struck on the helmet by a Tim Southee lifter, battling on with a determined Hanuma Vihari (15).\r\n\r\nIn the morning, India let the initiative slip, unable to blow away the tail; from 225 for seven, New Zealand recovered to 348', '23022020564744900TH24BOULT.jpg', 'Feb 24 ,2020', '2020-02-23 20:18:24', '2020-02-23 20:18:24'),
(13, 'Protests were held in parts of Hyderabad after', '29', 'Hyderabad: After violent clashes in Delhi, Hyderabad police conducted flag march near the Charminar area on Saturday. However, it didn\'t go down well with  All India Majlis-e-Ittehadul Muslimeen (AIMIM) chief Asaduddin Owaisi who promptly asked the police why they were conducting flag-marches only in Charminar, a Muslim dominated area, and not other parts of the city?\r\n\r\nTaking to Twitter, the AIMIM chief said, \"Why only at Charminar, why not in front of Secunderabad Railway Station or at Hi-Tech City, maybe in front of a US Software company?,\" tweeted Owaisi in reply to a post from Hyderabad City Police\'s Twitter handle', '290220201708274107RAF_.jpg', 'Feb 29 ,2020', '2020-02-29 09:22:01', '2020-02-29 09:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sarojkumar1997@gmail.com', '$2y$10$PQvI..BhJvtVpC4EZP9y4ue1H5ObCaBl1a0xPBD4w0D993u6x2eFC', '2020-02-29 03:14:32');

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
(1, 'gulam', 'gulammlkpg35@gmail.com', NULL, '$2y$10$wsYA8ex0R1Tq0WtDklL5VezyeuNpOPJ7ffhXAKfPHS6Y275mu/8IO', NULL, '2020-02-27 14:00:43', '2020-02-27 14:00:43'),
(2, 'saroj', 'sarojkumar1997@gmail.com', NULL, '$2y$10$df9bDNJWpBeRbKcSKuLdBOfWY5MZ8spWOufc1p5a0f.FMKw8wEOIe', NULL, '2020-02-29 03:10:04', '2020-02-29 03:10:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_cname_unique` (`cname`);

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_users`
--
ALTER TABLE `contact_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_news_title_unique` (`news_title`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `contact_users`
--
ALTER TABLE `contact_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
