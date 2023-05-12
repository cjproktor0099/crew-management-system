-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 07:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crew-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `crews`
--

CREATE TABLE `crews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_details` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crews`
--

INSERT INTO `crews` (`id`, `first_name`, `last_name`, `middle_name`, `email`, `address`, `contact_details`, `created_at`, `updated_at`, `education`) VALUES
(203, 'Giovanni', 'Morar', 'Onie', 'karlie.goyette@example.org', '6338 Olen Throughway\nNorth Kenyashire, WV 90775-2447', '575.414.7465', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'et'),
(204, 'George', 'Eichmann', 'Manley', 'ubednar@example.com', '438 Darion Lakes Suite 015\nRosenbaumland, CT 89868', '+15748860862', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'iure'),
(205, 'Alysa', 'Hagenes', 'Billy', 'darrion.mraz@example.com', '175 Kreiger Flats Suite 263\nYostburgh, IL 58138', '+1-858-625-1089', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'aut'),
(206, 'Ryann', 'Hermiston', 'Edwin', 'lee.russel@example.com', '727 Juvenal Vista\nNew Katarinamouth, AL 10717', '616.892.1390', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'et'),
(207, 'Jamal', 'Funk', 'Donna', 'keenan.casper@example.org', '672 Haleigh Place Apt. 027\nNorth Antonetta, KS 00197', '1-651-693-9725', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'non'),
(208, 'Reta', 'Brown', 'Celia', 'quitzon.corine@example.org', '6069 Jerde Place Suite 750\nWebsterstad, MO 68045-5509', '+1.901.979.7555', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'velit'),
(209, 'Casimir', 'Bednar', 'Kaela', 'ulueilwitz@example.net', '5551 Wolf Parks\nBoyleburgh, MS 14356-9240', '+1-470-406-2767', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'sed'),
(210, 'Anahi', 'Kiehn', 'Bridie', 'lavada93@example.net', '664 Farrell Mission Suite 127\nNorth Hillary, FL 49982', '512.473.5812', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'quo'),
(211, 'Margarett', 'Kirlin', 'Tomas', 'larkin.jolie@example.org', '22318 Fahey Key\nKlingville, DE 24439-0266', '+1 (618) 488-9200', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'veniam'),
(212, 'Diana', 'Casper', 'Zoey', 'kuhic.tristian@example.com', '32550 Mariana Fall Suite 386\nLake Elianmouth, MD 91753-3472', '475.708.4476', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'maxime'),
(213, 'Alda', 'Dickinson', 'America', 'dax.ullrich@example.com', '305 Walker Courts Apt. 335\nLake Christopher, ME 24970-0233', '1-848-474-3142', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'odio'),
(214, 'Burdette', 'Kohler', 'Lionel', 'stamm.tracy@example.com', '250 Pink Circle\nNew Zion, NM 29052', '814-300-1608', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'molestiae'),
(215, 'Kiana', 'Veum', 'Sophie', 'ykling@example.net', '7489 Brakus Lakes\nSmithborough, DE 75900-8338', '828.331.1271', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'accusamus'),
(216, 'Walker', 'Cartwright', 'Vincent', 'jessika03@example.org', '705 Walker Rapids\nVanessaview, UT 62876', '571-603-5621', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'provident'),
(217, 'Eloy', 'Reynolds', 'Heidi', 'kaley49@example.net', '183 Evans Lights\nNitzscheport, NY 60840', '313.717.6295', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'nulla'),
(218, 'Raymond', 'Thompson', 'Annamae', 'nolan.geoffrey@example.org', '607 Lesch Springs Suite 700\nPort Jermain, NJ 04273', '1-534-758-6974', '2023-05-11 15:36:52', '2023-05-11 15:36:52', 'sint'),
(219, 'Kelsie', 'Koss', 'Marques', 'renee.douglas@example.net', '31630 Klocko Cove Suite 112\nNew Bradmouth, KS 50900-1893', '1-949-930-9134', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'ut'),
(220, 'Holden', 'Renner', 'Lavinia', 'blaise52@example.org', '677 Maida Light Suite 095\nTreutelstad, NJ 12028', '320-746-8461', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'ipsa'),
(221, 'Sylvia', 'Kessler', 'Mabel', 'patience12@example.net', '72028 Wisozk Crossroad Suite 610\nDarionborough, MO 74897', '(669) 957-8043', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'quidem'),
(222, 'Violette', 'Doyle', 'Victoria', 'darren17@example.net', '7501 Harber Isle Suite 134\nPort Lilliefort, NH 42613-6923', '737-909-3068', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'laboriosam'),
(223, 'Khalil', 'King', 'Luis', 'ivy.stehr@example.org', '28666 Flatley Expressway\nNew Delilahville, ME 44109', '+1-786-222-3980', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'placeat'),
(224, 'Van', 'Aufderhar', 'Rhoda', 'sturner@example.org', '5364 Lowe Ville Apt. 260\nDemetriusburgh, KY 65595-4702', '(913) 235-4178', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'maxime'),
(225, 'Bryce', 'Ferry', 'Carli', 'lenore.murray@example.org', '899 Koss Passage Suite 224\nPort Jaydenchester, GA 98584', '(847) 464-4775', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'officiis'),
(226, 'Jovany', 'Fritsch', 'Keeley', 'paucek.eudora@example.org', '792 Gleason Alley Apt. 069\nPort Thea, WI 43660', '+1-937-500-4872', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'rerum'),
(227, 'Stacey', 'Tremblay', 'Arlie', 'qpagac@example.net', '22930 Spinka Light\nWilsonhaven, IN 56818', '+1-484-404-5560', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'aut'),
(228, 'Junius', 'Cummerata', 'Victor', 'hulda.leffler@example.org', '143 Schuppe Cape\nEast Elisabury, SC 64294-2125', '+1-626-325-2404', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'non'),
(229, 'Allison', 'Bernhard', 'Yvette', 'madelynn37@example.org', '38710 Robel Stravenue\nLake Reyes, IA 45910-5957', '425.250.0336', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'atque'),
(230, 'Patricia', 'Schmidt', 'Liana', 'lpouros@example.net', '21402 Lynch Union Suite 871\nOscarfurt, WI 12376-1803', '+1-628-340-4803', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'quasi'),
(231, 'Jaquelin', 'Murazik', 'Eldred', 'little.delpha@example.org', '919 Denis River\nOsinskiville, WV 38190', '769.350.4859', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'sapiente'),
(232, 'Brandt', 'Witting', 'Sean', 'hodkiewicz.melvina@example.com', '7021 Greenfelder Road Suite 275\nMosciskifurt, NY 10307-3197', '+18167768543', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'natus'),
(233, 'Sid', 'Walsh', 'Anna', 'kailey.hartmann@example.net', '84692 Coty Road Apt. 635\nZiememouth, OR 10498', '1-956-984-4406', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'in'),
(234, 'Jerry', 'Hessel', 'Micah', 'collier.bernie@example.net', '54454 Kirlin Curve\nNew Savannah, WV 36694-1198', '(720) 889-8856', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'quis'),
(235, 'Jon', 'Erdman', 'Kyler', 'noel52@example.com', '73474 Turcotte Knolls\nNorth Shaynaville, NC 46033-3613', '+1-769-538-1320', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'aut'),
(236, 'Dean', 'Kuphal', 'Lorna', 'edmund09@example.com', '82922 Precious Mountains\nTierrachester, WY 88219', '(608) 602-5035', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'rem'),
(237, 'Carmine', 'Koss', 'Rafael', 'rhiannon96@example.org', '46973 Grimes Haven\nNew Maudmouth, CT 41446-8518', '973-405-4404', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'labore'),
(238, 'Miles', 'Kirlin', 'Waldo', 'lemke.gina@example.org', '18932 Stokes Freeway\nEast Ryder, AL 07952', '1-254-518-6238', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'omnis'),
(239, 'Asa', 'Nienow', 'Davin', 'ikovacek@example.org', '16355 Toy Forge Suite 977\nNashside, TN 16090', '458-947-4365', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'expedita'),
(240, 'Imani', 'Von', 'Carey', 'sandrine87@example.com', '19152 Ortiz Street\nPort Cecileport, WY 88424', '+15704492807', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'iure'),
(241, 'Hayley', 'Heathcote', 'Kristy', 'erika.schamberger@example.net', '312 Brad Summit\nNorth Ellen, HI 39156', '(678) 814-0808', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'dignissimos'),
(242, 'Kamron', 'Russel', 'Colby', 'oheathcote@example.org', '91193 Kirlin Vista Apt. 411\nSouth Virginialand, SC 88498', '1-920-660-6429', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'eaque'),
(243, 'Delbert', 'Lehner', 'Jena', 'wabshire@example.net', '3683 Thiel Plains\nSouth Jordyborough, ME 03119-7441', '1-720-428-2387', '2023-05-11 15:36:53', '2023-05-11 15:36:53', 'excepturi'),
(244, 'Winfield', 'Herzog', 'Maiya', 'violette.rutherford@example.com', '1798 Cronin Islands\nHowellville, ND 49262-6469', '1-952-977-8250', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'placeat'),
(245, 'Nico', 'Rolfson', 'Alfonzo', 'hayley.friesen@example.net', '481 Reinger Curve Suite 381\nJakubowskibury, NE 57396-5981', '+1-917-590-4547', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'sit'),
(246, 'Elijah', 'Feeney', 'Gino', 'francesca.schmitt@example.net', '453 D\'Amore Wall Suite 959\nZboncakbury, DE 27530', '703-847-7692', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'ex'),
(247, 'Eriberto', 'Keeling', 'Barney', 'evans55@example.net', '47351 Zachariah Dam Apt. 400\nGrimesborough, KS 31938', '480-806-6562', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'placeat'),
(248, 'Napoleon', 'Luettgen', 'Deondre', 'xjaskolski@example.org', '853 Trever Fall\nGerholdville, KY 23032', '956.269.9273', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'aliquid'),
(249, 'Loyal', 'Beahan', 'Rosamond', 'frieda.volkman@example.com', '1650 Feest Stream Suite 375\nLake Daphneemouth, DC 71550-5527', '+1-484-915-1553', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'culpa'),
(250, 'Emmet', 'Koepp', 'Ian', 'kwiegand@example.net', '2123 Marquardt Plains\nAriannaview, OH 20111', '+1.828.892.3459', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'unde'),
(251, 'Vivianne', 'Lubowitz', 'Esperanza', 'ritchie.jaiden@example.net', '9333 Ezekiel Loaf\nMargaretmouth, IL 13707', '+1-762-932-9250', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'modi'),
(252, 'Terry', 'Effertz', 'Carrie', 'ptorp@example.com', '2777 Jules Villages\nWest Hobartberg, OK 20290', '+1-689-889-2948', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'accusamus'),
(253, 'Howell', 'Welch', 'Larue', 'nkoss@example.net', '2792 Mikayla Rue Apt. 896\nNew Rhiannon, AK 07748-2391', '+1 (480) 918-3533', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'eos'),
(254, 'Kareem', 'Jacobs', 'Myah', 'thiel.joaquin@example.com', '70105 Mallie Ways\nNorth Maximillian, NE 52094', '(812) 623-7138', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'sed'),
(255, 'Lia', 'Huel', 'Webster', 'bbode@example.org', '972 Brennan Creek Suite 035\nPort Rickymouth, NM 25032-8357', '1-985-908-6769', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'dolore'),
(256, 'Idella', 'Green', 'Vincenza', 'oschumm@example.org', '2374 Von Harbors Apt. 581\nNorth Adalineburgh, WA 23148', '+1-650-482-7496', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'et'),
(257, 'Coy', 'Pollich', 'Rita', 'rahul.corwin@example.org', '5096 Elyse Square Apt. 665\nWest Annamariefort, KY 21084', '+1-801-876-5521', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'voluptatem'),
(258, 'Henderson', 'Reinger', 'Meghan', 'robb58@example.net', '393 Roob Lights\nLehnertown, NV 28450-7190', '320.300.8678', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'nihil'),
(259, 'Consuelo', 'Torp', 'Ruth', 'webster.turcotte@example.com', '7556 Murray Centers Apt. 234\nPort Marianestad, VA 93112-7205', '+1-831-742-4009', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'vel'),
(260, 'Tevin', 'Wunsch', 'Zachery', 'crona.kayley@example.net', '3466 Kianna Center\nRupertstad, MN 44736-2823', '575.598.7632', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'est'),
(261, 'Alycia', 'Blick', 'Shanon', 'leffler.bart@example.net', '2398 Georgianna Lights\nNew Camillaport, TX 65657-7997', '+1-386-386-3210', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'quo'),
(262, 'Kayley', 'Bechtelar', 'Lora', 'stanton.nicolas@example.com', '27557 Borer Harbors\nNew Sibyl, TX 57413', '+1 (607) 749-0511', '2023-05-11 15:36:54', '2023-05-11 15:36:54', 'consequatur'),
(263, 'Buster', 'Ward', 'Nathanael', 'gus88@example.net', '9916 Wilkinson Port Suite 216\nWyattmouth, MA 99534', '+1-267-503-8311', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'delectus'),
(264, 'Golden', 'Kirlin', 'Enos', 'veronica.smitham@example.net', '95835 Magdalen Mission\nPort Grover, MO 43802-3735', '283.251.9173', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'culpa'),
(265, 'Gayle', 'Glover', 'Meta', 'gwilkinson@example.org', '918 Brianne Burg\nHollyview, VT 19316', '+19525714752', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'commodi'),
(266, 'Ruthe', 'McGlynn', 'Justina', 'marquardt.haylee@example.net', '105 Emard Center Apt. 984\nNew Lilly, IN 62115-1592', '1-734-987-5411', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'vel'),
(267, 'Maxine', 'Bayer', 'Norene', 'waldo45@example.com', '3439 Casandra Street Suite 142\nDeckowfurt, ND 20042-2367', '(820) 463-4495', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'omnis'),
(268, 'Adalberto', 'Turcotte', 'Marlon', 'tabitha.larson@example.net', '16143 Lupe Flats\nEmerystad, RI 98969', '+1-785-262-7820', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'neque'),
(269, 'Ardith', 'Roob', 'Maurice', 'ebony34@example.org', '75282 Helene Shore Apt. 881\nSheridanberg, NY 15567', '1-662-554-9387', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'et'),
(270, 'Garry', 'Bartell', 'Hailee', 'nicolas.cooper@example.org', '22131 Little Square Apt. 958\nNorth Lorenza, WI 07534', '318-427-8503', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'officiis'),
(271, 'Camila', 'Sawayn', 'Mariano', 'mclaughlin.alexandrine@example.com', '34527 Linda Causeway\nShadton, NJ 01570', '1-725-236-8073', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'minus'),
(272, 'Annamae', 'Will', 'John', 'murl.mertz@example.com', '2149 Vesta Rue Suite 027\nNorth Monserrate, NC 45929', '564-569-4912', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'enim'),
(273, 'Idella', 'Hermiston', 'Jermey', 'xfisher@example.com', '595 Moen Cape Apt. 763\nWest Magali, VA 81701', '+1-816-549-2930', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'quasi'),
(274, 'Aric', 'Streich', 'Vickie', 'johara@example.org', '10746 Casper Street\nSpencerfurt, VA 33420', '(283) 879-6904', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'nihil'),
(275, 'Daphnee', 'Harber', 'Clifton', 'fkunde@example.org', '187 Bashirian Drives\nPagacport, KS 29471-1819', '+1.248.697.9497', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'voluptatibus'),
(276, 'Pat', 'Toy', 'Aurelia', 'syble88@example.org', '397 Krystal Mission Apt. 395\nSipesville, WA 92604-9900', '+1-484-576-2182', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'aut'),
(277, 'Humberto', 'Johnson', 'Sammy', 'eric72@example.net', '2164 Josh Rapids\nEast Titostad, OK 00916-1350', '1-432-207-0925', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'itaque'),
(278, 'Modesto', 'Upton', 'Taryn', 'schulist.amanda@example.net', '7668 Wolf Plains Suite 664\nNorth Elsa, HI 50857-5835', '325.341.4527', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'et'),
(279, 'Rosemary', 'O\'Kon', 'Antonia', 'randi.kirlin@example.org', '59885 Jammie Land Suite 588\nQuinnside, VA 34866-8125', '662.241.7711', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'recusandae'),
(280, 'Adalberto', 'Waelchi', 'Tobin', 'pankunding@example.org', '337 Johnston Field Apt. 226\nNorth Chelsey, MN 47894', '+1-463-745-3937', '2023-05-11 15:36:55', '2023-05-11 15:36:55', 'similique'),
(281, 'Eileen', 'Walker', 'Carolyn', 'jbarton@example.net', '98983 Ebony Parks Suite 151\nLowechester, CT 82536-4301', '+1-678-923-7480', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'distinctio'),
(282, 'Kale', 'Boyle', 'Marion', 'cleta.kris@example.com', '27201 Lorenzo Overpass\nLake Carley, AL 70099-2632', '802.806.2470', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'incidunt'),
(283, 'Lysanne', 'Walter', 'Dell', 'crawford52@example.net', '21143 Schmitt Pass Suite 842\nJamelberg, IL 54074-6800', '+1 (225) 933-3201', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'repellendus'),
(284, 'Deanna', 'Connelly', 'Geraldine', 'rokon@example.org', '434 Aimee Pines\nSouth Geovanni, CO 56876-5535', '(872) 621-4396', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'esse'),
(285, 'Edd', 'Roob', 'Scarlett', 'abby32@example.net', '69491 Bogan Groves\nSouth Eleanorehaven, NM 48967', '559-417-8013', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'voluptatum'),
(286, 'Elna', 'Barton', 'Conner', 'allene.smitham@example.org', '419 Jenkins Isle Suite 206\nBobury, OH 17633', '+1-302-310-4548', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'nesciunt'),
(287, 'Blanche', 'Kassulke', 'Jarvis', 'kuphal.velva@example.com', '8161 Arnaldo Port Apt. 767\nLaurieside, MI 45965-5597', '+1-660-325-8623', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'atque'),
(288, 'Ruth', 'Gerhold', 'Devante', 'kadin.glover@example.net', '144 Tiara Vista\nNew Krystel, NJ 22370-1753', '551.604.3257', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'id'),
(289, 'George', 'Monahan', 'Alberta', 'roberts.olen@example.com', '97369 Jerel Plain Suite 516\nPort Jayda, MO 19277', '+1-520-724-6874', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'non'),
(290, 'Victor', 'Kulas', 'Ernestina', 'dickinson.bernadine@example.net', '573 Wallace Branch\nOfeliafurt, WA 52040', '+1.707.393.2631', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'voluptatibus'),
(291, 'Marcel', 'Klein', 'Neva', 'rachael.carroll@example.org', '2811 Watsica Cape Suite 900\nMillerhaven, ND 16614-6064', '636.250.3328', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'et'),
(292, 'Kitty', 'Greenholt', 'Stone', 'roosevelt.koelpin@example.net', '72451 Mariana Tunnel\nSchuylertown, NY 04506-6712', '(469) 895-0386', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'quia'),
(293, 'Jon', 'Wisoky', 'Therese', 'jberge@example.com', '1380 O\'Kon Crossing\nNyasiatown, CO 90669', '1-551-467-9318', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'numquam'),
(294, 'Kaitlin', 'Schneider', 'Selina', 'birdie25@example.com', '117 Abigale Tunnel Suite 405\nRippinfort, NC 37863-7605', '331-557-3830', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'corrupti'),
(295, 'Jaden', 'Volkman', 'Justina', 'qvon@example.net', '227 Corwin Radial Apt. 670\nCierrafort, TN 46108-9934', '+1.224.225.7529', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'sit'),
(296, 'Jack', 'Wolf', 'Ernestina', 'alta66@example.org', '855 Jones Port\nNew Maya, NE 13075-9587', '(540) 410-8141', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'aperiam'),
(297, 'Lamar', 'Davis', 'Xzavier', 'dboyle@example.org', '537 Ferry Plaza Apt. 759\nSouth Emmie, WY 62166-2976', '239-460-9314', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'nulla'),
(298, 'Avis', 'Bashirian', 'Lyric', 'vonrueden.abe@example.org', '419 Chandler Loop Suite 340\nMoniquemouth, RI 76700-5356', '1-731-890-3344', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'voluptatibus'),
(299, 'Lilyan', 'Jast', 'Elena', 'lelia19@example.net', '1145 Taya Ports Apt. 189\nKadechester, CT 13770', '1-682-462-7012', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'et'),
(300, 'Karen', 'Steuber', 'Freeman', 'ullrich.cody@example.net', '47224 Abbie Divide\nLake Hilariomouth, ID 13479', '775.842.2261', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'culpa'),
(301, 'Louvenia', 'Deckow', 'Kitty', 'greenholt.michaela@example.net', '928 Blanda Gateway\nWisokyberg, WA 68695-8729', '(830) 502-4218', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'dignissimos'),
(302, 'Haleigh', 'Daniel', 'Evert', 'rgerlach@example.com', '752 Steuber Meadow\nLake Josietown, MS 15821', '747.941.8227', '2023-05-11 15:36:56', '2023-05-11 15:36:56', 'ipsam'),
(303, 'Chrisjelo', 'Vega', 'Butnande', 'chrisjelosites@gmail.com', 'Bagtic, Silay City, Negros Occidental, Philippines', '09207151543', '2023-05-11 17:29:57', '2023-05-11 17:29:57', 'asas');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `document_number` varchar(255) NOT NULL,
  `date_issued` date NOT NULL,
  `date_expiry` date NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `crew_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `code`, `name`, `document_number`, `date_issued`, `date_expiry`, `remarks`, `crew_id`, `created_at`, `updated_at`) VALUES
(7, '088', 'AvSec Training Course', '099', '2023-03-01', '2023-09-21', NULL, 303, '2023-05-11 20:28:51', '2023-05-11 20:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_11_190709_create_crews_table', 2),
(6, '2023_05_11_190709_create_documents_table', 2),
(7, '2023_05_11_192739_add_education_to_crews_table', 3),
(8, '2023_05_12_023929_add_is_admin_column_to_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `isAdmin`) VALUES
(3, 'Chris jelo Vega', 'admin1234', 'admin@gmail.com', NULL, '$2y$10$pr9bcgR3j7OLBmy/eDBdfeLx0GipjUeoYreZzC3a5A5ra9J9wZCPW', 'ho3LCngHrWyZAHMNvgMREmlS0FF7mQbUXd2DGYDBUkGTO83XoJKO55Zwzf6t', '2023-05-11 19:41:55', '2023-05-11 21:31:16', 1),
(4, 'Chrisjelo', 'user1234', 'user1234@gmail.com', NULL, '$2y$10$XjnyfFhyTXIgunZK0eYnAeubZZGHRfry2JsFUULBojW5siDTBo42i', NULL, '2023-05-11 21:35:51', '2023-05-11 21:35:51', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crews`
--
ALTER TABLE `crews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crews_email_unique` (`email`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documents_document_number_unique` (`document_number`),
  ADD KEY `documents_crew_id_foreign` (`crew_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crews`
--
ALTER TABLE `crews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_crew_id_foreign` FOREIGN KEY (`crew_id`) REFERENCES `crews` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
