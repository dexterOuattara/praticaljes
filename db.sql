-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table multiaccount.admins: ~2 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `name`, `email`, `title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Bailee Crooks', 'pzieme@example.org', 'Gregory Hoeger Sr.', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'd7dufegBsc', '1993-08-30 00:00:00', '1988-02-27 00:00:00'),
	(2, 'Rogelio Hammes', 'russel.cesar@example.org', 'Elwin Reichel', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'wmbfHG1p7B', '1996-05-04 00:00:00', '2002-01-15 00:00:00');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping data for table multiaccount.assessments: ~3 rows (approximately)
/*!40000 ALTER TABLE `assessments` DISABLE KEYS */;
INSERT INTO `assessments` (`id`, `name`, `description`, `level`, `timeassessment`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`, `requirement6`, `requirement7`, `requirement8`, `requirement9`, `requirement10`, `price`, `numberapplicant`, `created_at`, `updated_at`) VALUES
	(2, 'Chat Bot', '<p>The classic example of chat bot app. It will test your candidates on specific skills and the assurance of recruiting the perfect mobile developer you need for your company.</p>', 'medium', 338, 'money.gif', 'Monica Kunde', 'Keyon Bartell Jr.', 'King Johns', 'Ned Erdman', 'Mr. Norberto Block MD', '<p>-Your first task will be to replicate the same pixel pixelization. <br />-Display data from different account Tweeter based on API <a href="https://developer.twitter.com/en/docs/tweets/search/overview/standard" target="_blank" rel="noopener">https://developer.twitter.com/en/docs/tweets/search/overview/standard</a><br />-Create a search feature to ask for most popular tweet and and trend.</p>', 'Ducimus accusamus omnis rerum repellat cumque aut adipisci sit molestias sed at et sint id velit vel repellat et vitae laudantium sint nam provident sunt hic nobis voluptatem est a magni est quas fugit cumque facere praesentium error libero accusamus repellendus nihil itaque inventore minima similique rerum debitis dolorum laboriosam est necessitatibus officia id aliquam harum ut quo neque quis minus qui numquam quaerat ad deleniti soluta sint repellat maxime.', 'Consequuntur ratione et autem accusantium quo architecto voluptatem labore in ea quia numquam exercitationem quo omnis deleniti rerum facere voluptatum quia voluptatem aut qui veniam aut at sed et dolore qui repellendus impedit amet molestiae nisi omnis et voluptatem aliquam veniam omnis magni rerum omnis qui esse quia repudiandae odit cumque ullam dolorum a perspiciatis.', 'Officiis aut dolorem voluptatem natus deserunt saepe est et voluptatem ad explicabo provident voluptatem quas vel assumenda doloremque et fuga voluptas ipsa officiis labore vel magni omnis nemo recusandae quis praesentium nobis ipsa sunt voluptate perferendis perferendis excepturi explicabo facilis eaque et ad animi et cumque perspiciatis mollitia quam voluptas fugiat neque in aspernatur in quia dignissimos fugiat consectetur doloremque consectetur placeat molestiae sapiente molestiae id rerum.', 'Id est quo necessitatibus omnis necessitatibus eos et dolorem officiis tenetur molestiae laborum molestiae et optio et dolores distinctio consequatur commodi facere amet consequatur et asperiores eligendi beatae voluptas et omnis omnis consequuntur ipsam reprehenderit architecto ducimus reiciendis sequi rerum iure ex sunt voluptas dolor praesentium maxime rem nobis similique ratione impedit ea beatae eum expedita amet ut ea itaque reprehenderit voluptas accusamus numquam maiores necessitatibus sint alias.', 'Incidunt ut architecto exercitationem earum rerum dignissimos quo qui molestiae et quis et laborum doloremque repellendus repudiandae distinctio cumque est dolore in aut magni neque expedita et autem voluptatem necessitatibus et beatae et odit et similique suscipit inventore ab sequi a natus aut sint numquam ut aut consequuntur tempore quas alias vero quae ut et enim quibusdam veniam et rerum voluptatibus enim omnis sint.', 'Eaque ea reprehenderit et quam et aliquam quaerat reiciendis ipsa nobis illum consectetur ut laudantium laudantium asperiores molestias ex aliquid non est illo natus deserunt architecto et est est et aliquid aut.', 'Sed fugiat voluptatem aut veniam repudiandae ipsa amet voluptatem facilis aut atque velit ipsam aut adipisci iure illum ea at qui libero maxime aut totam omnis officiis illum quia id velit cupiditate sequi earum provident beatae aut pariatur optio corporis magnam repudiandae animi rerum corrupti nemo rerum mollitia dolore voluptatum autem laudantium asperiores quo totam et debitis eum et voluptas velit nisi distinctio harum consectetur harum.', 'Sit consequatur et asperiores quod delectus nam commodi neque eaque harum rerum temporibus ut et eaque occaecati deserunt quidem officia voluptatibus ipsam nostrum eveniet consequuntur quisquam repellat consequatur nostrum alias maxime qui quam provident vitae id dolorum dolor dolores placeat totam eligendi quaerat incidunt ratione vitae molestiae aliquam veritatis dignissimos aut optio sequi accusantium non quia aut enim officia numquam ut magnam.', 'Aliquam voluptate quis commodi facilis mollitia nemo autem tenetur ut ut magnam accusamus dolorem officia doloremque non nobis occaecati excepturi dolores aut doloremque dicta porro sint modi voluptatum eveniet ipsum distinctio perferendis qui voluptatem iure quis nam minima aliquid cumque.', 20, 8, '1986-04-15 00:00:00', '1987-03-03 00:00:00'),
	(3, 'Trello Clone', '<p>The classic Todo app challenge. It will test your candidates on specific skills and the assurance of recruiting the perfect Full Stack Developer you need for your company.</p>\r\n<p>Skill validation :&nbsp;<strong> BACKEND, FRONTEND , CODE RELIABILITY </strong></p>', 'hard', 240, 'giphy.gif', 'Tatyana Rohan MD', 'Keyshawn Harber', 'Isidro Bechtelar', 'Abigayle Marvin V', 'Dexter Williamson', '<p>-Your first task will be to replicate the same design. <br />-create the CRUD for the project.</p>\r\n<p>-Drag and Drop feature></p>', 'Asperiores minima perferendis quasi rerum est sit deleniti voluptatem veritatis repellat possimus possimus quia ut ut dolorem aut sit ipsum quisquam voluptates voluptatem dolor id perferendis nam distinctio aut laboriosam minima expedita autem nesciunt eaque nulla unde sunt in et voluptatem repudiandae velit commodi vero et.', 'Corporis mollitia doloremque mollitia dicta dolor impedit autem odit doloribus et aut sunt dolore rerum id qui voluptas et id et omnis id doloremque fugiat autem aspernatur modi repellat iste molestiae ad sapiente.', 'Labore sed cupiditate alias nemo quia ut excepturi totam accusamus quidem est dignissimos dolores optio quis exercitationem dolores quis reiciendis recusandae voluptatum voluptatum et occaecati similique error neque tempore tenetur consectetur et consequatur nostrum repudiandae eius quis expedita sed placeat illo consequatur a est inventore expedita eum aut.', 'Blanditiis aperiam exercitationem perferendis odit temporibus quisquam ducimus nesciunt deserunt odio eius voluptatem aspernatur molestias natus veniam odit distinctio occaecati nulla dicta ut voluptatem repudiandae blanditiis id cum autem qui pariatur tenetur dignissimos est itaque nulla beatae aut sunt ut sit qui molestiae et doloribus rerum maiores animi nemo deserunt quia aut quisquam quod accusamus eos temporibus porro cupiditate.', 'Atque provident et qui iusto maiores nobis voluptatum nihil ducimus rerum dolorum velit ut perspiciatis quasi rerum est pariatur omnis sequi eum velit placeat omnis eveniet optio quaerat debitis illo dolorem aut qui expedita labore eaque incidunt voluptas quod fugit distinctio magni voluptatum rerum illo voluptatem quia molestiae accusantium recusandae pariatur rerum delectus assumenda sit harum eaque optio sequi omnis sunt quidem et eum sunt ipsa.', 'Sit amet aut iure dolorum quae ab qui neque corporis illum nulla nihil voluptas eius sunt id et voluptas quam debitis cum qui magni ad omnis non reprehenderit et voluptate quae perspiciatis aut quae nisi temporibus delectus sit voluptas fuga ullam voluptas aperiam nisi id aut et eius ut vel labore possimus pariatur quasi magni esse nobis debitis amet dolores.', 'Occaecati aut consequatur vel mollitia non distinctio suscipit dolor quas et aut non ex omnis consequatur nihil veniam ea id ducimus expedita rerum eum distinctio voluptatem voluptas omnis quod sint ratione culpa libero voluptas eum at id ad quia dolor vel.', 'Vitae accusantium molestias molestiae aliquid ratione atque autem voluptatem est vero recusandae vitae perferendis laudantium porro quae autem ea velit ut quod necessitatibus autem pariatur aut dicta atque est delectus pariatur officiis et commodi suscipit libero ex odio rerum tenetur nesciunt nulla culpa labore delectus magni sit est ut consectetur.', 'Quia non labore temporibus dolore quod et et veniam omnis nulla voluptas error soluta cumque omnis facere sed est et quisquam magnam voluptatem reprehenderit culpa accusantium delectus blanditiis soluta rerum at et ea earum alias occaecati libero eveniet molestias similique tempora qui et nihil quam a et deserunt veritatis delectus cumque aut aperiam vero optio nostrum beatae dolorem eius et explicabo aut dolorum modi quod laborum et.', 50, 8, '1993-10-09 00:00:00', '1974-11-22 00:00:00'),
	(4, 'Weather app', '<p>The classic example of creating a weather app. It will test your candidates on specific skills and the assurance of recruiting the perfect mobile developer you need for your company.</p>\r\n<p>Skill validation :&nbsp; <strong>API,&nbsp; UX/UI , CODE RELIABILITY </strong></p>', 'medium', 360, 'home.png', 'about.png', 'settings.png', NULL, NULL, NULL, '<p>-Your first task will be to replicate the same pixel pixelization. <br />-Display data from different temperatures based on API <a href="https://openweathermap.org/api" target="_blank" rel="noopener">https://openweathermap.org/api</a><br />-View the weather from the 197 countries on the country list page with infinite scroll functionality.<br />-Create a search feature based on country code.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `assessments` ENABLE KEYS */;

-- Dumping data for table multiaccount.assessment_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `assessment_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `assessment_user` ENABLE KEYS */;

-- Dumping data for table multiaccount.candidates: ~5 rows (approximately)
/*!40000 ALTER TABLE `candidates` DISABLE KEYS */;
INSERT INTO `candidates` (`id`, `name`, `avatar`, `email`, `profilecandidatePicture`, `country`, `zip`, `phone`, `mobile`, `address`, `linkedin`, `facebook`, `github`, `twitter`, `biography`, `website`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Mr. Guido Runte DDS', 'user.jpg', 'karen.buckridge@example.net', 'user.jpg', 'Minerva Klein', 'Daniella Schimmel', 'Jules Boyer', 'Buck Swift', 'Hardy Krajcik Sr.', 'Dr. Green Eichmann V', 'Garfielde Sanford Jr.', 'Jeanne Medhurst', 'Miller Heller IV', 'Mariana Rice', 'Lonie Haley', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'ibsIXBi8KQ', '2018-07-29 15:19:55', '2018-07-30 00:16:19'),
	(2, 'Santino Morissette', 'user.jpg', 'ken.quitzon@example.org', 'user.jpg', 'Miss Lorine Shanahan DDS', 'Shaun Hermiston', 'Berneice Gaylord', 'Eldred Jones DVM', 'Adelle Kozey I', 'Myles Larkin', 'Christelle Beier II', 'Prof. Elena Hettinger Sr.', 'Celia Champlin II', 'Casey Weissnat IV', 'Cecil Brekke II', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'DSijggZz6d', '2018-07-29 15:19:55', '2018-07-29 15:19:55'),
	(3, 'Ms. Jeanette Schinner Sr.', 'user.jpg', 'tbartoletti@example.com', 'user.jpg', 'Tyshawn McLaughlin', 'Mason Bode Sr.', 'Will Kirlin', 'Conner Cartwright', 'Dr. Maeve Sanford', 'Abbigail Gerlach Sr.', 'Delaney McCullough DDS', 'Dr. Annie Lubowitz V', 'Dr. Eloy Mante', 'Miss Karlie Nitzsche IV', 'Prof. Christa Schaden', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'L3YSKp1Rpl', '2018-07-29 15:19:55', '2018-07-29 15:19:55'),
	(4, 'Danyka Rempel', 'user.jpg', 'vernon83@example.net', 'user.jpg', 'Mr. Malcolm Lakin', 'Germaine Corkery', 'Dolly Franecki MD', 'Margret Schultz', 'Joanny Johnson', 'Paige Johns', 'Carson Homenick', 'Edgardo Douglas', 'Vidal Ziemann DDS', 'Damian Pouros', 'Dr. Abigale Sanford', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Ss0I0yp49w', '2018-07-29 15:19:55', '2018-07-29 15:19:55'),
	(5, 'Dr. Royce Ernser IV', 'user.jpg', 'brekke.cindy@example.com', 'user.jpg', 'Mr. Ismael Cummerata I', 'Natalia Pagac', 'Mrs. Blanche Nader PhD', 'Victor Brakus', 'Lila Swaniawski', 'Ernesto Orn II', 'Margie Rohan', 'Tressie Goyette DVM', 'Braden Boehm', 'Dr. Orin Gibson', 'Jamir Ryan', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'OWghZ35xW7', '2018-07-29 15:19:55', '2018-07-29 15:19:55'),
	(6, 'peter', 'user.jpg', 'peter@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Bswy9NpGjHHWMFpvvUTHAOCktCVhyJuSiBYOLSCsk2Q/Vd0XqZIWK', NULL, '2018-07-30 00:58:24', '2018-07-30 00:58:24');
/*!40000 ALTER TABLE `candidates` ENABLE KEYS */;

-- Dumping data for table multiaccount.candidate_password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `candidate_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidate_password_resets` ENABLE KEYS */;

-- Dumping data for table multiaccount.candidate_recruiter: ~0 rows (approximately)
/*!40000 ALTER TABLE `candidate_recruiter` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidate_recruiter` ENABLE KEYS */;

-- Dumping data for table multiaccount.candidate_reward: ~4 rows (approximately)
/*!40000 ALTER TABLE `candidate_reward` DISABLE KEYS */;
INSERT INTO `candidate_reward` (`id`, `candidate_id`, `reward_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2018-07-29 16:40:26', '2018-07-29 16:40:26'),
	(2, 1, 2, '2018-07-29 16:40:35', '2018-07-29 16:40:35'),
	(3, 2, 1, '2018-07-29 16:40:43', '2018-07-29 16:40:43'),
	(4, 2, 2, '2018-07-29 16:40:50', '2018-07-29 16:40:51');
/*!40000 ALTER TABLE `candidate_reward` ENABLE KEYS */;

-- Dumping data for table multiaccount.candidate_skill: ~6 rows (approximately)
/*!40000 ALTER TABLE `candidate_skill` DISABLE KEYS */;
INSERT INTO `candidate_skill` (`id`, `candidate_id`, `skill_id`, `valide`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, NULL, NULL, NULL),
	(2, 1, 9, NULL, NULL, NULL),
	(3, 1, 14, NULL, NULL, NULL),
	(4, 1, 17, NULL, NULL, NULL),
	(6, 3, 1, NULL, NULL, NULL),
	(7, 3, 8, NULL, NULL, NULL);
/*!40000 ALTER TABLE `candidate_skill` ENABLE KEYS */;

-- Dumping data for table multiaccount.candidate_store: ~0 rows (approximately)
/*!40000 ALTER TABLE `candidate_store` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidate_store` ENABLE KEYS */;

-- Dumping data for table multiaccount.candidate_stores: ~4 rows (approximately)
/*!40000 ALTER TABLE `candidate_stores` DISABLE KEYS */;
INSERT INTO `candidate_stores` (`id`, `store_id`, `candidate_id`, `proglanguage`, `framelanguage`, `name`, `framecss`, `framehtml`, `dateassessment`, `endassessment`, `timeassessment`, `mytimeassessment`, `typeassessment`, `level`, `validate`, `requirement1`, `image1`, `description`, `loginftp`, `passftp`, `hostftp`, `portftp`, `logineclipse`, `passeclipse`, `linkeclipse`, `created_at`, `updated_at`) VALUES
	(1, '6', '1', 'php', 'codeigniter', 'Mr. Guido Runte DDS', 'boostrap', 'HTML5', '2018-07-29', '2018-07-29', 144, NULL, NULL, 'Kenna Price', '1', 'Labore aut error assumenda voluptates et quam possimus ea qui eum culpa tempora et dolores sed tempore id quia et quasi aut rerum modi consequatur ratione rerum a qui consectetur quis et aut optio ea voluptas qui quis perspiciatis consequuntur commodi dolorem esse libero et.', 'Cheyanne Okuneva', 'Repellat quibusdam ea cupiditate harum odit impedit dolor aspernatur sunt ipsum et facilis quia architecto deserunt sit adipisci laboriosam temporibus ut aut odio labore aspernatur.', 'fdfjhd', 'yugfvd', 'yugfe1u', 'hfbd', 'ihds', 'ihfv', 'uihfd', '2018-07-29 16:10:57', '2018-07-29 16:10:57'),
	(2, '8', '1', 'php', 'codeigniter', 'Mr. Guido Runte DDS', 'boostrap', 'HTML5', '2018-07-30', '2018-08-01', 144, NULL, NULL, 'easy', '1', 'Labore aut error assumenda voluptates et quam possimus ea qui eum culpa tempora et dolores sed tempore id quia et quasi aut rerum modi consequatur ratione rerum a qui consectetur quis et aut optio ea voluptas qui quis perspiciatis consequuntur commodi dolorem esse libero et.', '1.png', 'Repellat quibusdam ea cupiditate harum odit impedit dolor aspernatur sunt ipsum et facilis quia architecto deserunt sit adipisci laboriosam temporibus ut aut odio labore aspernatur.', 'dgfjh', 'hjdv', 'hugdvfiojq', 'hjdghi', 'uvdhigb', 'uihjd', 'huibdfui', '2018-07-30 00:12:10', '2018-07-30 00:12:10'),
	(3, '8', '2', 'php', 'codeigniter', 'Santino Morissette', 'boostrap', 'HTML5', '2018-07-30', '2018-08-01', 144, NULL, NULL, 'easy', '1', 'Labore aut error assumenda voluptates et quam possimus ea qui eum culpa tempora et dolores sed tempore id quia et quasi aut rerum modi consequatur ratione rerum a qui consectetur quis et aut optio ea voluptas qui quis perspiciatis consequuntur commodi dolorem esse libero et.', '1.png', 'Repellat quibusdam ea cupiditate harum odit impedit dolor aspernatur sunt ipsum et facilis quia architecto deserunt sit adipisci laboriosam temporibus ut aut odio labore aspernatur.', 'jhbjdfs', 'JKSCNHX', 'DCKJBB', 'kdjsb', 'kjbsd', 'jks', 'jkhs', '2018-07-31 18:09:59', '2018-07-31 18:09:59'),
	(4, '11', '3', 'python', 'django', 'Ms. Jeanette Schinner Sr.', 'boostrap', 'HTML5', '2018-08-01', '2018-08-08', 88, NULL, NULL, 'hard', '1', 'Nesciunt tempora aut odio pariatur fugit sunt optio quis sint aliquam facilis et repellendus ullam est iusto neque et autem animi similique consequuntur voluptatibus cumque accusantium est expedita voluptatem natus architecto dolores laudantium delectus atque quod quis culpa quae alias dolores repudiandae non molestiae officia expedita consequatur quia voluptas dolorum tenetur fugiat consequatur doloremque ea doloribus quia nemo quas tempora laudantium.', 'giphy.gif', 'Veniam accusamus iste delectus praesentium et sequi nam veritatis consequatur possimus hic totam doloribus qui cupiditate dolorum id unde.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-01 09:24:15', '2018-08-01 09:24:15'),
	(5, '12', '3', 'javascript', 'jquery', 'Ms. Jeanette Schinner Sr.', 'boostrap', 'HTML5', '2018-08-01', '2018-08-07', 88, NULL, NULL, 'hard', '1', 'Nesciunt tempora aut odio pariatur fugit sunt optio quis sint aliquam facilis et repellendus ullam est iusto neque et autem animi similique consequuntur voluptatibus cumque accusantium est expedita voluptatem natus architecto dolores laudantium delectus atque quod quis culpa quae alias dolores repudiandae non molestiae officia expedita consequatur quia voluptas dolorum tenetur fugiat consequatur doloremque ea doloribus quia nemo quas tempora laudantium.', 'giphy.gif', 'Veniam accusamus iste delectus praesentium et sequi nam veritatis consequatur possimus hic totam doloribus qui cupiditate dolorum id unde.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-01 09:36:25', '2018-08-01 09:36:25');
/*!40000 ALTER TABLE `candidate_stores` ENABLE KEYS */;

-- Dumping data for table multiaccount.candidate_typecontract: ~2 rows (approximately)
/*!40000 ALTER TABLE `candidate_typecontract` DISABLE KEYS */;
INSERT INTO `candidate_typecontract` (`id`, `candidate_id`, `typecontract_id`, `created_at`, `updated_at`) VALUES
	(2, 1, 2, NULL, NULL),
	(3, 1, 4, NULL, NULL);
/*!40000 ALTER TABLE `candidate_typecontract` ENABLE KEYS */;

-- Dumping data for table multiaccount.casestudies: ~4 rows (approximately)
/*!40000 ALTER TABLE `casestudies` DISABLE KEYS */;
INSERT INTO `casestudies` (`id`, `name`, `description`, `challenge`, `solution`, `numberOfApplicants`, `numberOfMeeting`, `numberOfDaysSaves`, `numberOfHiring`, `emberVideo`, `imageCase`, `linkResources`, `author`, `created_at`, `updated_at`) VALUES
	(1, 'MEST', ' The Training Program\r\n\r\nMEST offers graduate-level entrepreneurial training in business, communications and software development, including extensive hands-on project work, culminating in a final pitch and the chance to receive seed funding.', 'Qui error omnis molestiae necessitatibus a fugit amet aut.', 'Esse magnam impedit voluptas corporis quasi rerum ipsa laborum amet sed incidunt.', 3, 19, 7, 2, 'https://www.youtube.com/embed/sHwMXyLAPTs', 'mest.png', 'Omnis ut.', 3, '1999-11-26 00:00:00', '1978-05-16 00:00:00'),
	(2, 'LOYSTAR', 'Connecting retail merchants\r\nwith customers for lasting loyalty.\r\n\r\nConnect and Engage. Sell and increase repeat sales.\r\nThe only POS App you’ll ever need.\r\n\r\n', 'Eos enim exercitationem accusantium et enim repellat facere et facere qui dolore molestiae occaecati.', 'Ut et ut quibusdam et repudiandae at nam sed nihil.', 24, 13, 3, 1, 'https://www.youtube.com/embed/6JEVt-flNLE', 'mtn.png', 'Reiciendis in.', 0, '1973-12-08 00:00:00', '1987-07-17 00:00:00'),
	(3, 'CHALKBOARD', 'Bessie Brakus IV', 'Repellendus id libero ut quas qui explicabo iusto cupiditate rem et officiis voluptatum consequatur.', 'Consequatur quis molestiae dignissimos sint cum velit eligendi ut eum distinctio et impedit.', 4, 15, 3, 0, 'https://www.youtube.com/embed/ckuWBIVR0kk', 'ruxster.png', 'Rem quia.', 2, '1980-06-13 00:00:00', '2010-02-13 00:00:00');
/*!40000 ALTER TABLE `casestudies` ENABLE KEYS */;

-- Dumping data for table multiaccount.categories: ~5 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `slug`, `post_id`, `created_at`, `updated_at`) VALUES
	(1, 'Dejah Lesch', 'Eum qui.', 1, '2018-07-29 15:19:49', '2018-07-29 15:19:49'),
	(2, 'Esperanza Toy', 'Autem.', 3, '2018-07-29 15:19:49', '2018-07-29 15:19:49'),
	(3, 'Herbert Welch', 'Earum sunt.', 2, '2018-07-29 15:19:49', '2018-07-29 15:19:49'),
	(4, 'Dr. Margarette Schaden III', 'A omnis.', 5, '2018-07-29 15:19:49', '2018-07-29 15:19:49'),
	(5, 'Aliyah Watsica', 'Vel voluptatum.', 4, '2018-07-29 15:19:49', '2018-07-29 15:19:49');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping data for table multiaccount.contacts: ~0 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping data for table multiaccount.csv_data: ~0 rows (approximately)
/*!40000 ALTER TABLE `csv_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `csv_data` ENABLE KEYS */;

-- Dumping data for table multiaccount.migrations: ~31 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1485, '2014_10_12_000000_create_users_table', 1),
	(1486, '2014_10_12_100000_create_password_resets_table', 1),
	(1487, '2017_10_09_123029_create_csv_data_table', 1),
	(1488, '2017_10_09_124338_create_contacts_table', 1),
	(1489, '2018_06_25_174858_create_profiles_table', 1),
	(1490, '2018_06_25_183713_create_roles_table', 1),
	(1491, '2018_06_25_204617_create_admins_table', 1),
	(1492, '2018_06_25_231040_create_posts_table', 1),
	(1493, '2018_06_25_231505_create_categories_table', 1),
	(1494, '2018_06_26_000332_create_casestudies_table', 1),
	(1495, '2018_06_26_105909_create_assessments_table', 1),
	(1496, '2018_06_27_191952_create_typeassessments_table', 1),
	(1497, '2018_07_02_150332_create_stacks_table', 1),
	(1498, '2018_07_02_200636_create_stores_table', 1),
	(1499, '2018_07_03_125031_create_skills_table', 1),
	(1500, '2018_07_05_114536_create_products_table', 1),
	(1501, '2018_07_09_192243_create_candidates_table', 1),
	(1502, '2018_07_11_180419_create_candidate_password_resets_table', 1),
	(1503, '2018_07_12_212712_create_candidate_skill_table', 1),
	(1504, '2018_07_12_212839_create_skill_user_table', 1),
	(1505, '2018_07_13_001220_create_assessment_user_table', 1),
	(1506, '2018_07_14_132640_create_profilecandidates_table', 1),
	(1507, '2018_07_14_162135_create_candidate_reward_table', 1),
	(1508, '2018_07_14_162227_create_rewards_table', 1),
	(1509, '2018_07_14_191253_create_typecontracts_table', 1),
	(1510, '2018_07_14_193252_create_candidate_typecontract_table', 1),
	(1511, '2018_07_15_131345_create_candidate_store_table', 1),
	(1512, '2018_07_16_204742_create_candidate_stores_table', 1),
	(1513, '2018_07_20_074535_create_typeskills_table', 1),
	(1514, '2018_07_20_121014_create_states_table', 1),
	(1515, '2018_07_28_031106_create_candidate_recruiter_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table multiaccount.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('edgar.bernhard@example.org', '$2y$10$wpMfEc0fb8NhKXX51A.Ih.8FYijCZ/HuUu9vwn.5/obvB7Qq6bIk6', '2018-07-30 01:03:10');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table multiaccount.posts: ~2 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `description`, `slug`, `imgPost`, `author`, `created_at`, `updated_at`) VALUES
	(1, 'Mazie Mosciskia1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Jacinthe Ferry', 'contact-us-bg.jpg', 2, '1995-08-22 00:00:00', '2018-07-30 01:44:42'),
	(2, 'Miss Else Cummings Jr.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Prof. Ethyl Schoen', 'about-us-bg.jpg', 2, '1985-11-16 00:00:00', '2013-06-28 00:00:00');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping data for table multiaccount.products: ~0 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping data for table multiaccount.profilecandidates: ~5 rows (approximately)
/*!40000 ALTER TABLE `profilecandidates` DISABLE KEYS */;
INSERT INTO `profilecandidates` (`id`, `candidate_id`, `profilecandidatePicture`, `country`, `zip`, `phone`, `mobile`, `address`, `linkedin`, `facebook`, `github`, `twitter`, `biography`, `website`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Magnam voluptates.', 'Ipsam repudiandae.', 'Id.', '78', '51', 'Qui.', 'Sapiente.', 'Nobis.', 'Impedit.', 'Velit.', 'In vel quia illo.', 'Voluptatem aliquid.', '1985-02-11 00:00:00', '1990-01-06 00:00:00'),
	(2, 2, 'Omnis dolorum.', 'Delectus sed.', 'Fugiat odio.', '42', '31', 'Fuga.', 'Et cupiditate.', 'Explicabo.', 'Eligendi distinctio.', 'Nihil.', 'Repellat est laboriosam non.', 'Iusto dolor.', '1994-11-08 00:00:00', '2010-07-20 00:00:00'),
	(3, 1, 'Tenetur.', 'Est.', 'Dolor odit.', '17', '75', 'Omnis.', 'Quam quia.', 'Perspiciatis.', 'Ut.', 'Itaque sapiente.', 'Odit voluptas maxime doloremque aut alias est.', 'Officiis doloribus.', '1996-10-12 00:00:00', '2016-11-26 00:00:00'),
	(4, 3, 'Porro.', 'Quidem enim.', 'Molestiae laudantium.', '75', '48', 'Qui.', 'Eligendi aspernatur.', 'Non.', 'Odit.', 'Voluptatem.', 'Ex omnis reprehenderit atque nam.', 'Corporis omnis.', '1976-07-28 00:00:00', '2006-06-14 00:00:00'),
	(5, 2, 'Iure nam.', 'Blanditiis.', 'Autem perferendis.', '36', '30', 'Vel doloribus.', 'Optio sint.', 'Ea sint.', 'Doloribus.', 'Quia quidem.', 'Suscipit sed tenetur sunt.', 'Dicta architecto.', '1973-11-08 00:00:00', '2004-09-13 00:00:00');
/*!40000 ALTER TABLE `profilecandidates` ENABLE KEYS */;

-- Dumping data for table multiaccount.profiles: ~5 rows (approximately)
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` (`id`, `user_id`, `profilePicture`, `country`, `zip`, `phone`, `mobile`, `address`, `linkedin`, `facebook`, `github`, `twitter`, `biography`, `website`, `created_at`, `updated_at`) VALUES
	(1, 3, 'Aut ipsum.', 'Et dolor.', 'Quia.', '52', '90', 'Quia incidunt.', 'Molestias.', 'Aspernatur laboriosam.', 'Mollitia.', 'Omnis.', 'Nulla dolor saepe veniam ut sit ab.', 'Dolor.', '1984-05-16 00:00:00', '2012-03-23 00:00:00'),
	(2, 3, 'Distinctio.', 'Enim voluptates.', 'Soluta.', '45', '22', 'Sit.', 'Illo doloribus.', 'Ut.', 'Aut sed.', 'Provident omnis.', 'Aut recusandae voluptate quia deserunt nesciunt aspernatur.', 'Modi.', '1987-08-17 00:00:00', '2007-05-15 00:00:00'),
	(3, 1, 'Non.', 'Quidem.', 'Quae optio.', '51', '97', 'Error pariatur.', 'Laborum.', 'Ducimus in.', 'Veniam facere.', 'Consequatur.', 'Quasi qui at exercitationem ut qui aperiam.', 'Aut.', '2014-07-09 00:00:00', '1970-04-10 00:00:00'),
	(4, 3, 'Impedit.', 'Repellat iure.', 'Enim aliquam.', '31', '23', 'Soluta.', 'Voluptas.', 'Et dolorem.', 'Laudantium debitis.', 'Cum.', 'Qui beatae facere officiis quam vitae ea.', 'Quas magnam.', '1989-04-16 00:00:00', '1987-09-22 00:00:00'),
	(5, 1, 'Perspiciatis explicabo.', 'Quia eum.', 'Quis.', '61', '50', 'Dolores.', 'Consequatur eaque.', 'Repudiandae laudantium.', 'Blanditiis.', 'Veritatis.', 'Ipsam qui fugit reprehenderit repellendus qui provident.', 'Laudantium ullam.', '1971-11-02 00:00:00', '1990-02-04 00:00:00');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;

-- Dumping data for table multiaccount.rewards: ~8 rows (approximately)
/*!40000 ALTER TABLE `rewards` DISABLE KEYS */;
INSERT INTO `rewards` (`id`, `name`, `description`, `tag`, `created_at`, `updated_at`) VALUES
	(1, 'laravel badge 1', 'Ullam.', 'Laboriosam sit.', '1970-06-26 00:00:00', '1977-09-09 00:00:00'),
	(2, 'laravel badge 2', 'Magnam quia.', 'Rerum.', '1983-04-16 00:00:00', '1973-03-15 00:00:00'),
	(3, 'laravel badge 3', 'Ut illo.', 'Consequatur.', '2011-10-11 00:00:00', '2015-10-21 00:00:00'),
	(4, 'angular badge 1', 'Culpa autem.', 'Recusandae.', '1973-01-16 00:00:00', '1988-09-29 00:00:00'),
	(5, 'angular badge 2', 'Dolor.', 'Consequatur.', '1977-02-28 00:00:00', '2004-09-08 00:00:00'),
	(6, 'angular badge 3', 'Ab.', 'Corporis et.', '1978-07-30 00:00:00', '1998-07-10 00:00:00'),
	(7, 'python badge 1', 'Qui.', 'Qui.', '1979-09-20 00:00:00', '1991-11-12 00:00:00'),
	(8, 'python badge 2', 'Corporis voluptatem.', 'Tenetur.', '1972-04-04 00:00:00', '1976-07-20 00:00:00');
/*!40000 ALTER TABLE `rewards` ENABLE KEYS */;

-- Dumping data for table multiaccount.roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Constance Kshlerin', '1999-07-15 00:00:00', '1981-02-25 00:00:00'),
	(2, 'Miss Ocie Parker', '2007-05-08 00:00:00', '1994-05-19 00:00:00');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping data for table multiaccount.skills: ~17 rows (approximately)
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`id`, `name`, `description`, `tag`, `created_at`, `updated_at`) VALUES
	(1, 'php', 'Maiores accusantium.', 'backend', '1996-03-17 00:00:00', '2007-07-27 00:00:00'),
	(2, 'python', 'Ut delectus.', 'backend', '2003-08-25 00:00:00', '2018-03-02 00:00:00'),
	(3, 'ruby', 'Quod.', 'backend', '1973-07-14 00:00:00', '2001-04-25 00:00:00'),
	(4, 'javascript', 'Omnis.', 'backend', '1993-02-09 00:00:00', '2006-02-06 00:00:00'),
	(5, 'java', 'Maxime eligendi.', 'backend', '1978-03-17 00:00:00', '1985-06-05 00:00:00'),
	(6, 'dot-net', 'Molestiae dicta.', 'backend', '2007-06-13 00:00:00', '1982-06-03 00:00:00'),
	(7, 'csharp', 'Suscipit ipsa.', 'backend', '1989-06-28 00:00:00', '2000-06-03 00:00:00'),
	(8, 'cplusplus', 'Accusantium.', 'backend', '1980-01-14 00:00:00', '2016-09-27 00:00:00'),
	(9, 'codeigniter', 'dsfs', 'framework', '2018-07-29 15:25:23', '2018-07-29 15:25:24'),
	(10, 'laravel', 'fdv ', 'framework', '2018-07-29 15:25:35', '2018-07-29 15:25:35'),
	(11, 'jquery', 'dvs', 'framework', '2018-07-29 15:25:58', '2018-07-29 15:25:59'),
	(12, 'angular', 'svfs', 'framework', '2018-07-29 15:26:10', '2018-07-29 15:26:11'),
	(13, 'django', 'njjh', 'framework', '2018-07-29 15:26:25', '2018-07-29 15:26:25'),
	(14, 'HTML5', 'rfs', 'HTML', '2018-07-29 15:36:58', '2018-07-29 15:36:58'),
	(15, 'HTML', 'dsfd', 'HTML', '2018-07-29 16:00:07', '2018-07-29 16:00:08'),
	(16, 'boostrap', 'dsds', 'frontend', '2018-07-29 15:37:48', '2018-07-29 15:37:48'),
	(17, 'fondation', 'fdsg', 'frontend', '2018-07-29 15:38:14', '2018-07-29 15:38:14'),
	(18, 'materialize css', 'wfds we', 'frontend', '2018-07-29 15:39:23', '2018-07-29 15:39:24');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

-- Dumping data for table multiaccount.skill_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `skill_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `skill_user` ENABLE KEYS */;

-- Dumping data for table multiaccount.stacks: ~2 rows (approximately)
/*!40000 ALTER TABLE `stacks` DISABLE KEYS */;
INSERT INTO `stacks` (`id`, `user_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Trever Reilly', 'Et vel facere nam cupiditate qui.', '1983-12-03 00:00:00', '2016-01-31 00:00:00'),
	(2, 2, 'Marge Bruen V', 'Ut esse dolorem ea sed.', '2005-12-23 00:00:00', '2005-12-31 00:00:00');
/*!40000 ALTER TABLE `stacks` ENABLE KEYS */;

-- Dumping data for table multiaccount.states: ~0 rows (approximately)
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;

-- Dumping data for table multiaccount.stores: ~7 rows (approximately)
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
INSERT INTO `stores` (`id`, `user_id`, `assessment_id`, `level`, `requirement1`, `image1`, `description`, `name`, `typeassessment`, `price`, `numberapplicant`, `proglanguage`, `framelanguage`, `framecss`, `framehtml`, `timeassessment`, `dateassessment`, `endassessment`, `created_at`, `updated_at`) VALUES
	(6, '1', '1', 'Kenna Price', 'Labore aut error assumenda voluptates et quam possimus ea qui eum culpa tempora et dolores sed tempore id quia et quasi aut rerum modi consequatur ratione rerum a qui consectetur quis et aut optio ea voluptas qui quis perspiciatis consequuntur commodi dolorem esse libero et.', 'Cheyanne Okuneva', 'Repellat quibusdam ea cupiditate harum odit impedit dolor aspernatur sunt ipsum et facilis quia architecto deserunt sit adipisci laboriosam temporibus ut aut odio labore aspernatur.', 'Halie Mante', 'Dr. Sandrine Koss Sr.', 0, NULL, 'php', 'codeigniter', 'boostrap', 'HTML5', 144, '2018-07-29', '2018-07-29', '2018-07-29 16:00:49', '2018-07-29 16:00:49'),
	(7, '1', '1', 'easy', 'Labore aut error assumenda voluptates et quam possimus ea qui eum culpa tempora et dolores sed tempore id quia et quasi aut rerum modi consequatur ratione rerum a qui consectetur quis et aut optio ea voluptas qui quis perspiciatis consequuntur commodi dolorem esse libero et.', '1.png', 'Repellat quibusdam ea cupiditate harum odit impedit dolor aspernatur sunt ipsum et facilis quia architecto deserunt sit adipisci laboriosam temporibus ut aut odio labore aspernatur.', 'Halie Mante', 'quiz', 12, 44, 'php', 'codeigniter', 'boostrap', 'HTML5', 144, '2018-07-29', '2018-07-31', '2018-07-29 23:50:17', '2018-07-29 23:50:17'),
	(8, '1', '1', 'easy', 'Labore aut error assumenda voluptates et quam possimus ea qui eum culpa tempora et dolores sed tempore id quia et quasi aut rerum modi consequatur ratione rerum a qui consectetur quis et aut optio ea voluptas qui quis perspiciatis consequuntur commodi dolorem esse libero et.', '1.png', 'Repellat quibusdam ea cupiditate harum odit impedit dolor aspernatur sunt ipsum et facilis quia architecto deserunt sit adipisci laboriosam temporibus ut aut odio labore aspernatur.', 'Halie Mante', 'quiz', 12, 50, 'php', 'codeigniter', 'boostrap', 'HTML5', 144, '2018-07-30', '2018-08-01', '2018-07-30 00:09:37', '2018-07-30 00:09:37'),
	(9, '1', '1', 'easy', 'Labore aut error assumenda voluptates et quam possimus ea qui eum culpa tempora et dolores sed tempore id quia et quasi aut rerum modi consequatur ratione rerum a qui consectetur quis et aut optio ea voluptas qui quis perspiciatis consequuntur commodi dolorem esse libero et.', '81Aj.gif', 'Repellat quibusdam ea cupiditate harum odit impedit dolor aspernatur sunt ipsum et facilis quia architecto deserunt sit adipisci laboriosam temporibus ut aut odio labore aspernatur.', 'Halie Mante', 'mobile app', 12, 415, 'php', 'codeigniter', 'boostrap', 'HTML5', 144, NULL, NULL, '2018-07-31 19:07:16', '2018-07-31 19:07:16'),
	(10, '1', '1', 'easy', 'Labore aut error assumenda voluptates et quam possimus ea qui eum culpa tempora et dolores sed tempore id quia et quasi aut rerum modi consequatur ratione rerum a qui consectetur quis et aut optio ea voluptas qui quis perspiciatis consequuntur commodi dolorem esse libero et.', '81Aj.gif', 'Repellat quibusdam ea cupiditate harum odit impedit dolor aspernatur sunt ipsum et facilis quia architecto deserunt sit adipisci laboriosam temporibus ut aut odio labore aspernatur.', 'Halie Mante', 'mobile app', 12, 415, 'php', 'codeigniter', 'boostrap', 'HTML5', 144, NULL, NULL, '2018-07-31 20:45:06', '2018-07-31 20:45:06'),
	(11, '4', '3', 'hard', 'Nesciunt tempora aut odio pariatur fugit sunt optio quis sint aliquam facilis et repellendus ullam est iusto neque et autem animi similique consequuntur voluptatibus cumque accusantium est expedita voluptatem natus architecto dolores laudantium delectus atque quod quis culpa quae alias dolores repudiandae non molestiae officia expedita consequatur quia voluptas dolorum tenetur fugiat consequatur doloremque ea doloribus quia nemo quas tempora laudantium.', 'giphy.gif', 'Veniam accusamus iste delectus praesentium et sequi nam veritatis consequatur possimus hic totam doloribus qui cupiditate dolorum id unde.', 'Emery Wilderman PhD', 'Web app', 50, 20, 'python', 'django', 'boostrap', 'HTML5', 88, '2018-08-01', '2018-08-08', '2018-08-01 09:23:04', '2018-08-01 09:23:04'),
	(13, '1', '1', 'easy', 'Labore aut error assumenda voluptates et quam possimus ea qui eum culpa tempora et dolores sed tempore id quia et quasi aut rerum modi consequatur ratione rerum a qui consectetur quis et aut optio ea voluptas qui quis perspiciatis consequuntur commodi dolorem esse libero et.', '81Aj.gif', 'Repellat quibusdam ea cupiditate harum odit impedit dolor aspernatur sunt ipsum et facilis quia architecto deserunt sit adipisci laboriosam temporibus ut aut odio labore aspernatur.', 'Halie Mante', 'mobile app', 12, NULL, 'php', 'codeigniter', 'boostrap', 'HTML5', 144, NULL, NULL, '2018-08-01 20:02:45', '2018-08-01 20:02:45');
/*!40000 ALTER TABLE `stores` ENABLE KEYS */;

-- Dumping data for table multiaccount.typeassessments: ~5 rows (approximately)
/*!40000 ALTER TABLE `typeassessments` DISABLE KEYS */;
INSERT INTO `typeassessments` (`id`, `name`, `assessment_id`, `created_at`, `updated_at`) VALUES
	(1, 'mobile app', 2, '2016-04-05 00:00:00', '1994-03-01 00:00:00'),
	(2, 'Web app', 3, '1993-08-28 00:00:00', '2017-05-10 00:00:00'),
	(3, 'Web app', 4, '1983-02-05 00:00:00', '1987-06-20 00:00:00'),
	(4, 'mobile app', 1, '1998-05-15 00:00:00', '2000-12-19 00:00:00');
/*!40000 ALTER TABLE `typeassessments` ENABLE KEYS */;

-- Dumping data for table multiaccount.typecontracts: ~6 rows (approximately)
/*!40000 ALTER TABLE `typecontracts` DISABLE KEYS */;
INSERT INTO `typecontracts` (`id`, `name`, `description`, `tag`, `created_at`, `updated_at`) VALUES
	(1, 'full-time', 'Odio.', 'Voluptatem placeat.', '2011-08-18 00:00:00', '1980-02-01 00:00:00'),
	(2, 'part-time', 'Fuga.', 'Rem animi.', '1997-11-17 00:00:00', '2002-05-01 00:00:00'),
	(3, 'freelancers', 'Voluptatem ipsam.', 'Doloremque adipisci.', '2006-09-15 00:00:00', '1998-05-12 00:00:00'),
	(4, 'consultants', 'Voluptatum est.', 'Sunt ut.', '1973-11-11 00:00:00', '2016-06-07 00:00:00'),
	(5, 'contractors', 'Libero.', 'Omnis praesentium.', '1992-05-18 00:00:00', '1971-03-30 00:00:00'),
	(6, 'Fixed-term', 'Odio.', 'Quasi impedit.', '1991-08-28 00:00:00', '1989-11-15 00:00:00');
/*!40000 ALTER TABLE `typecontracts` ENABLE KEYS */;

-- Dumping data for table multiaccount.typeskills: ~0 rows (approximately)
/*!40000 ALTER TABLE `typeskills` DISABLE KEYS */;
/*!40000 ALTER TABLE `typeskills` ENABLE KEYS */;

-- Dumping data for table multiaccount.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `password`, `country`, `zip`, `phone`, `mobile`, `address`, `linkedin`, `facebook`, `github`, `twitter`, `biography`, `website`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Sienna Yost', '1_avatar1533155635.jpg', 'edgar.bernhard@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Chyna Conn MD', 'Rebeca Fadel', 'Mr. Kennith Konopelski IV', 'Prof. Jillian Braun', 'Beryl Koelpin', 'Mr. Esteban Thiel IV', 'Julian Miller', 'Alexandria Rodriguez', 'Amy Harvey', 'Frederick Corkery V', 'Kailee Koelpin II', 'B1QvVMgy5dBM4XtGbosXXT8Mmf2f4QlYN6pQndDpePWCY5271z8f4KZ0MsLX', '2018-07-29 15:19:48', '2018-08-01 20:33:56'),
	(2, 'Asha Fahey III', 'user.jpg', 'gregg33@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Assunta Schoen', 'Ima Abbott', 'Murl Schinner', 'Ms. Cordia Feeney IV', 'Brycen Dietrich', 'Ms. Marianna King', 'Frieda Price', 'Lonny Haag', 'Paolo Monahan Jr.', 'Alycia Kuvalis', 'Magdalen Gottlieb', '6v9av9KLJf', '2018-07-29 15:19:49', '2018-07-29 15:19:49'),
	(3, 'Clifford Blick', 'user.jpg', 'elsie.fay@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Bertram Carter', 'Marcos Schinner', 'Desmond Muller', 'Rylee Gusikowski II', 'Gaetano Brekke', 'Hilton Parker', 'Alice Kiehn', 'Norval Hoppe', 'Mrs. Lura Block', 'Roberto Farrell', 'Jacky Donnelly', '41c9NSy2eJ', '2018-07-29 15:19:49', '2018-07-29 15:19:49'),
	(4, 'Miss Rosalind Grimes DDS', 'user.jpg', 'bemmerich@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Sammie Hagenes', 'Alivia Rosenbaum', 'Carter Quigley', 'Ramon Mills', 'Prof. Jake Orn', 'Erna Welch', 'Davin Fadel', 'Lesley Ondricka', 'Donato Heathcote', 'Ayla Marks V', 'Nora Breitenberg Jr.', 'eHrT0SLe0K', '2018-07-29 15:19:49', '2018-07-29 15:19:49'),
	(5, 'Prof. Torrey Graham', 'user.jpg', 'laurine.schulist@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Miss Celestine Sporer', 'Mrs. Jodie Brakus Sr.', 'Mrs. Peggie Greenfelder III', 'Corbin Armstrong', 'Linwood Turner DVM', 'Mattie Lubowitz', 'Garry Ondricka', 'Johann Connelly', 'Ms. Laura Grant', 'Obie Aufderhar', 'Dr. Isom Cronin V', '8O00cy9bo0', '2018-07-29 15:19:49', '2018-07-29 15:19:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
